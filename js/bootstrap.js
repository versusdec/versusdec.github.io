require.config({
    paths: {
        microcore: "/js/microcore",
        routes: "/routes",
        render: "/js/render",
        common: "/js/common",
        masked: "/js/masked",
        miq: "/js/miq",
        notify: "/app/modules/notify",
        disclaimer: "/app/modules/disclaimer",
        popup: "/app/modules/popup",
        confirm: "/app/modules/confirm",
        "app/modules/header": "/app/modules/header",
        "app/controllers/nav": "/app/controllers/nav",
        "app/modules/sortable": "/app/modules/sortable",
        "app/modules/suggests": "/app/modules/suggests",
        "app/filters/time": "/app/filters/time",
        scripts: "/js/scripts",
        chartjs: "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.0.2/chart.min",
        chart_plugin: "/js/chartjs-plugin-datalabels",
        chart_helpers: "/js/chart_helpers",
        chart: "/js/chart",
        ol: "https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.6.1/build/ol",
        recorder: "/app/modules/recorder",
    },
    render: {
        path: "/app/views",
        helpers: "/app/modules",
        filters: "/app/filters"
    },
    domain: "botto.ai",
    api: "https://api.botto.ai",
    ws: 'api.botto.ai',
    my: '',
    my_sub_domain: 'my.botto.ai',
    communications: 'https://communications.botto.ai',
    comm_sub_domain: "communications.botto.ai",
    leads: 'https://leads.botto.ai',
    leads_sub_domain: "leads.botto.ai",
    //version: (new Date()).getTime()
});

if (!localStorage.getItem('lang')) {
    switch (navigator.language.slice(0, 2)) {
        case 'uk':
            localStorage.setItem('lang', 'ua');
            break;
        default:
            localStorage.setItem('lang', 'en');
            break;
    }
}

define(["microcore", "json!routes", "common"],
  function (mc, routes) {
      fetch(`/locale/${localStorage.getItem('lang')}.json`)
        .then(response => response.json()).then((locale) => {
          mc.storage.set('locale', JSON.stringify(locale))
      });

      if ([location.host].includes(require.config.comm_sub_domain) || [location.host].includes(require.config.leads_sub_domain)) {
          let project_id = parseInt(location.pathname.split('/')[1])
          mc.storage.set('project_id', project_id)
      }
      mc.storage.set('config.api', require.config.api)
      mc.storage.set('config.domain', require.config.domain)

      let current_layout = '';
      let observer = new MutationObserver(mutationRecords => {
          $('a').forEach((el) => {
              let href = el.getAttribute('href');
              let target = el.hasAttribute('target');
              let download = el.hasAttribute('download');
              if (href && !(target || download) && href.substr(0, 5) != '#tab=') {
                  el.onclick = (ev) => {
                      ev.preventDefault();
                      mc.router.go(href);
                  };
                  return false;
              }
          });

          $('*[handler]:not([inited])').forEach(function ($scope) {
              $scope.setAttribute('inited', 'inited');
              require(['app/' + $scope.getAttribute('handler')], function (handler) {
                  handler($scope, $scope.dataset);
                  mc.events.push("sys:page.init:" + $scope.getAttribute('handler'));
              });
          })
      });

      observer.observe(document.body, {
          childList: true,
          subtree: true
      });

      for (let route in routes) {
          let route_info = routes[route];
          mc.router.add(route, function (params) {
              if (route_info.role.indexOf(mc.auth.get().role) != -1 || route_info.role.indexOf("public") != -1 || mc.auth.get().role === 'admin') {
                  route_info.layout = route_info.layout || 'main';
                  require(['/app/controllers/' + route_info.controller, 'mst!layouts/' + route_info.layout], async function (controller, layout) {
                      let html = await controller(params);
                      if (current_layout !== route_info.layout) {
                          document.body.innerHTML = await layout({content: html, user: mc.auth.get()});
                          current_layout = route_info.layout
                      } else {
                          $('*[data-content-holder]')[0].innerHTML = html;
                      }

                      mc.events.push("sys:page.init:" + route_info.controller);
                      mc.events.push("routeChange");
                  })
              }
          }, route_info.params);
      }

      if (navigator.serviceWorker) {
          if (!navigator.serviceWorker.controller) {
              navigator.serviceWorker
                .register('/sw.js' + (require.config.version ? ('?v=' + require.config.version) : '?v=' + (new Date()).getTime()), {scope: '/'})
          } else if (navigator.serviceWorker.controller) {
              let version = new URL(navigator.serviceWorker.controller.scriptURL).searchParams.get('v')
              if (version != require.config.version) {
                  navigator.serviceWorker
                    .register('/sw.js' + (require.config.version ? ('?v=' + require.config.version) : '?v=' + (new Date()).getTime()), {scope: '/'})
              }
          }

          navigator.serviceWorker.ready.then(registration => {
              setTimeout(() => {
                  registration.active.postMessage(JSON.stringify({
                      user: mc.auth.get(),
                      mess_id: localStorage.getItem("ws.message.id")
                  }));
              }, 500)
          });

          navigator.serviceWorker.addEventListener('message', event => {
              let data = JSON.parse(event.data)
              localStorage.setItem("ws.message.id", data.mess_id)
              mc.events.push("ws:" + data.event, data.data)
          });
      }

      mc.events.on('logout', function () {
          mc.auth.logout();
      });

      if (mc.auth.get().role === 'public'
        && location.pathname !== '/login'
        && location.pathname.match(/registration/) === null
        && location.pathname !== '/recover'
        && location.pathname.match(/recover/) === null
      ) {
          location.href = require.config.my + '/login'
      }

      mc.router.dispatch(location.pathname)
  }
);
