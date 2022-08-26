define("microcore", function () {
    function b64DecodeUnicode(str) {
        return decodeURIComponent(atob(str.replace(/-/g, '+').replace(/_/g, '/')).split('').map(function (c) {
            return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
        }).join(''));
    }

    String.prototype.hashCode = function () {
        var hash = 0;
        if (this.length == 0) {
            return hash;
        }
        for (var i = 0; i < this.length; i++) {
            var char = this.charCodeAt(i);
            hash = ((hash << 5) - hash) + char;
            hash = hash & hash; // Convert to 32bit integer
        }
        return hash;
    }

    window.___mc = {
        events: (() => {
            let observer = {};
            let events = [];

            setInterval(function () {
                let event = events.shift();

                while (event) {
                    if (observer[event.name] && observer[event.name].length) {
                        observer[event.name].forEach(function (item) {
                            event.resolve(item(event.data, event.name))
                        })
                    }
                    event = events.shift();
                }
            }, 10);

            return {
                on: function (events, cb) {
                    if (typeof events == "string") {
                        events = [events]
                    }
                    let ids = []
                    events.forEach((event) => {
                        observer[event] = observer[event] || []
                        ids.push(observer[event].push(cb))
                    })
                    return ids
                },
                push: function (name, data) {
                    return new Promise((resolve, reject) => {
                        events.push({name: name, data: data, resolve: resolve})
                    });
                },
                off: function (events, id) {
                    if (id) {
                        delete observer[events][id]
                    } else {
                        if (typeof events == "string") {
                            events = [events]
                        }
                        events.forEach((event) => {
                            delete observer[event]
                        })

                    }
                },
                handlers: function () {
                    console.log(observer)
                }
            }
        })(),
        storage: (() => {
            let storage = {};

            return {
                set: function (key, value) {
                    storage[key] = value;
                },
                unset: function (key) {
                    delete storage[key]
                },
                get: function (key) {
                    return storage[key]
                },
                clear: function () {
                    storage = {}
                }
            }
        })(),
        router: (() => {
            let routes = {};
            let current = location.pathname;

            window.onpopstate = function (e) {
                e.preventDefault();
                let returnLocation = history.location || document.location;
                router.go(returnLocation.pathname, true)
            }

            let router = {
                add: (route, cb, dp) => {
                    routes[route.replace(/^\//, "").replace(/:([^\/]+)/g, "(?<$1>[^\\/]+)")] = [cb, dp || {}];
                },
                go: (uri, onpopstate) => {
                    if (!onpopstate) {
                        history.pushState(null, "", uri)
                    }
                    if (uri[0] == '#') {
                        uri = location.pathname + uri
                    }
                    current = uri;
                    router.dispatch(current);
                },
                dispatch: (uri) => {
                    let rendered = false;
                    uri = uri.split('#')[0];
                    for (let route in routes) {
                        let matched = uri.replace(/^\//, "").match(route);
                        if (matched && matched[0] == matched.input) {
                            let params = routes[route][1];
                            if (matched.groups) {
                                for (let param in matched.groups) {
                                    params[param] = matched.groups[param]
                                }
                            }
                            router.route = routes[route][0];
                            router.route(params);
                            rendered = true;
                            break;
                        }
                    }
                    if (!rendered) {
                        let cpid = ___mc.storage.get('project_id')
                        if (cpid) {
                            ___mc.router.go(`/${cpid}/404`)
                        } else {
                            ___mc.router.go(`/404`)
                        }
                    }

                },
                hash: (data) => {
                    if (data) {
                        let params = '#'
                        for (let param in data) {
                            let value = data[param]
                            params += param + '=' + value + '&'
                        }

                        return params.substr(0, params.length - 1)
                    } else {
                        let params = {}
                        if (location.hash.length) {
                            let data = location.hash.substr(1).split('&').map(value => {
                                return value.split('=')
                            })

                            for (let param in data) {
                                let value = data[param][1]
                                param = data[param][0]
                                params[param] = value
                            }
                        }

                        return params
                    }
                }
            };

            return router
        })(),
        auth: (() => {
            return {
                get: function () {
                    let c = document.cookie.split('; ');
                    let cookies = {};
                    if (c.length) {
                        c.forEach(item => {
                            cookies[item.split('=')[0]] = item.split('=')[1]
                        })
                    }

                    let token = cookies['__token'];
                    token = token && JSON.parse(b64DecodeUnicode(token.split(".")[1])) || {role: 'public'};

                    if (token.exp <= (new Date()).getTime() / 1000) {
                        document.cookie = `__token=;domain=${require.config.domain};expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/`
                        setTimeout(() => {
                            location.reload()
                        }, 100);
                        return false
                    }
                    return token
                },
                logout: function () {
                    document.cookie = `__token=;domain=${require.config.domain};expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/`
                    location.replace(`${require.config.my}/login`)
                    // location.reload()
                }
            }
        })(),
        api: (() => {
            let cache = {};
            let url = require.config.api + '/';
            setInterval(() => {
                cache = {}
            }, 1000);

            async function request(data) {
                let response = []
                let body = []

                if (data.constructor == [].constructor) {
                    for (let i in data) {
                        let cache_id = JSON.stringify(data[i]).hashCode()
                        data[i].id = i
                        if (cache[cache_id]) {
                            response[i] = await cache[cache_id]
                        } else {
                            response[i] = cache_id
                            cache[cache_id] = new Promise(resolve => {
                                let waiter = setInterval(() => {
                                    if (response[i] !== cache_id) {
                                        clearInterval(waiter)
                                        resolve(response[i])
                                    }
                                })
                            }, 10)
                            body.push(data[i])
                        }
                    }

                    if (body.length == 0) {
                        return response
                    }

                } else {
                    let cache_id = JSON.stringify(data).hashCode()

                    if (cache[cache_id]) {
                        return await cache[cache_id]
                    } else {
                        response = cache_id
                        cache[cache_id] = new Promise(resolve => {
                            let waiter = setInterval(() => {
                                if (response !== cache_id) {
                                    clearInterval(waiter)
                                    resolve(response)
                                }
                            }, 10)
                        }).finally(() => {
                            setTimeout(() => {
                                delete cache[cache_id]
                            }, 5000)
                        })
                    }
                    body = data;
                }

                let cookies = {};
                if (document.cookie.split(';')[0] !== "") {
                    document.cookie.split(';').forEach(item => {
                        cookies[item.split('=')[0].trim()] = item.split('=')[1].trim()
                    })
                }

                let token = cookies['__token'];

                let res = await fetch(
                  url,
                  {
                      credentials: "include",
                      headers: {
                          'Content-Type': 'application/json',
                          'Token': token
                      },
                      body: JSON.stringify(body),
                      method: "POST"
                  });

                let result = await res;
                if (res.headers.get('content-type').match('json')) {
                    result = await res.json();
                } else {
                    return res
                }

                if (res.headers.get('token') != null) {
                    token = res.headers.get('token') || token;
                    let t = token && JSON.parse(b64DecodeUnicode(token.split(".")[1])) || {role: 'public'};
                    document.cookie = `__token=${token};domain=${require.config.domain};expires=${t.exp}; path=/`
                }

                if (result.constructor == [].constructor) {
                    result.forEach((resp) => {
                        if (resp.error) {
                            console.error(resp.error);
                        }

                        response[resp.id] = resp.result;
                    });
                } else {
                    if (result.error) {
                        console.error(result.error);
                        // let project_id = ___mc.storage.get('project_id')
                        // ___mc.router.go(location.origin + project_id ? `/${project_id}/404` : '/404')
                    }

                    response = result.result;
                }

                return response
            }

            return {
                setServer: function (server) {
                    url = server
                },
                call: function (method, params) {
                    return request({method: method, params: params});
                },
                batch: function (...requests) {
                    return request(requests);
                }
            }
        })(),
        i18n: (str) => {
            let locale = JSON.parse(___mc.storage.get('locale'));
            try {
                return eval('locale.' + str) ? eval('locale.' + str) : str
            } catch (e) {
                return str
            }
        },
        fieldError: (field, tab) => {
            if (tab || tab === 0) {
                $('ul.tabs li a')[tab].click();
            }
            $(field)[0].scrollIntoView({behavior: 'smooth', block: 'center'})
            $(field).addClass('error');
            setTimeout(() => {
                $(field).removeClass('error')
            }, 3000);
            return false
        },
        loading: (load) => {
            if (load) {
                $('body > .loading').addClass('is_loading')
            } else {
                $('body > .loading').removeClass('is_loading')
            }
            setTimeout(() => {
                ___mc.loading(false)
            }, 5000)
        }
    };

    return window.___mc
});