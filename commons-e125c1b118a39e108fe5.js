(self.webpackChunkgatsby_starter_default=self.webpackChunkgatsby_starter_default||[]).push([[351],{6494:function(e){"use strict";e.exports=Object.assign},2993:function(e){var t="undefined"!=typeof Element,n="function"==typeof Map,r="function"==typeof Set,a="function"==typeof ArrayBuffer&&!!ArrayBuffer.isView;function o(e,i){if(e===i)return!0;if(e&&i&&"object"==typeof e&&"object"==typeof i){if(e.constructor!==i.constructor)return!1;var c,s,l,u;if(Array.isArray(e)){if((c=e.length)!=i.length)return!1;for(s=c;0!=s--;)if(!o(e[s],i[s]))return!1;return!0}if(n&&e instanceof Map&&i instanceof Map){if(e.size!==i.size)return!1;for(u=e.entries();!(s=u.next()).done;)if(!i.has(s.value[0]))return!1;for(u=e.entries();!(s=u.next()).done;)if(!o(s.value[1],i.get(s.value[0])))return!1;return!0}if(r&&e instanceof Set&&i instanceof Set){if(e.size!==i.size)return!1;for(u=e.entries();!(s=u.next()).done;)if(!i.has(s.value[0]))return!1;return!0}if(a&&ArrayBuffer.isView(e)&&ArrayBuffer.isView(i)){if((c=e.length)!=i.length)return!1;for(s=c;0!=s--;)if(e[s]!==i[s])return!1;return!0}if(e.constructor===RegExp)return e.source===i.source&&e.flags===i.flags;if(e.valueOf!==Object.prototype.valueOf)return e.valueOf()===i.valueOf();if(e.toString!==Object.prototype.toString)return e.toString()===i.toString();if((c=(l=Object.keys(e)).length)!==Object.keys(i).length)return!1;for(s=c;0!=s--;)if(!Object.prototype.hasOwnProperty.call(i,l[s]))return!1;if(t&&e instanceof Element)return!1;for(s=c;0!=s--;)if(("_owner"!==l[s]&&"__v"!==l[s]&&"__o"!==l[s]||!e.$$typeof)&&!o(e[l[s]],i[l[s]]))return!1;return!0}return e!=e&&i!=i}e.exports=function(e,t){try{return o(e,t)}catch(n){if((n.message||"").match(/stack|recursion/i))return console.warn("react-fast-compare cannot handle circular refs"),!1;throw n}}},4839:function(e,t,n){"use strict";var r,a=n(7294),o=(r=a)&&"object"==typeof r&&"default"in r?r.default:r;function i(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}var c=!("undefined"==typeof window||!window.document||!window.document.createElement);e.exports=function(e,t,n){if("function"!=typeof e)throw new Error("Expected reducePropsToState to be a function.");if("function"!=typeof t)throw new Error("Expected handleStateChangeOnClient to be a function.");if(void 0!==n&&"function"!=typeof n)throw new Error("Expected mapStateOnServer to either be undefined or a function.");return function(r){if("function"!=typeof r)throw new Error("Expected WrappedComponent to be a React component.");var s,l=[];function u(){s=e(l.map((function(e){return e.props}))),f.canUseDOM?t(s):n&&(s=n(s))}var f=function(e){var t,n;function a(){return e.apply(this,arguments)||this}n=e,(t=a).prototype=Object.create(n.prototype),t.prototype.constructor=t,t.__proto__=n,a.peek=function(){return s},a.rewind=function(){if(a.canUseDOM)throw new Error("You may only call rewind() on the server. Call peek() to read the current state.");var e=s;return s=void 0,l=[],e};var i=a.prototype;return i.UNSAFE_componentWillMount=function(){l.push(this),u()},i.componentDidUpdate=function(){u()},i.componentWillUnmount=function(){var e=l.indexOf(this);l.splice(e,1),u()},i.render=function(){return o.createElement(r,this.props)},a}(a.PureComponent);return i(f,"displayName","SideEffect("+function(e){return e.displayName||e.name||"Component"}(r)+")"),i(f,"canUseDOM",c),f}}},9416:function(e,t,n){"use strict";n.d(t,{Z:function(){return l}});var r=n(7294),a=n(1597),o=n(262),i=function(){return r.createElement("header",{className:"wrapper bg-soft-primary"},r.createElement("nav",{className:"navbar classic transparent navbar-expand-lg navbar-light"},r.createElement("div",{className:"container flex-lg-row flex-nowrap align-items-center"},r.createElement("div",{className:"navbar-brand w-100"},r.createElement(a.Link,{to:"/"},r.createElement("img",{src:"img/keszflow_logo_full.png",alt:""}))),r.createElement("div",{className:"navbar-collapse offcanvas-nav"},r.createElement("div",{className:"offcanvas-header d-lg-none d-xl-none"},r.createElement(a.Link,{to:"/"},r.createElement("img",{src:"img/keszflow_logo_full.png",alt:""})),r.createElement("button",{type:"button",className:"btn-close btn-close-white offcanvas-close offcanvas-nav-close","aria-label":"Close"})),r.createElement("ul",{className:"navbar-nav"},r.createElement("li",{className:"nav-item"},r.createElement(a.Link,{className:"nav-link",to:"#faq"},"FAQ")),r.createElement("li",{className:"nav-item"},r.createElement(a.Link,{className:"nav-link",to:"terms-and-conditions"},"Terms & Conditions")),r.createElement("li",{className:"nav-item"},r.createElement(a.Link,{className:"nav-link",to:"privacy-policy"},"Privacy Policy")))),r.createElement("div",{className:"navbar-other ms-lg-4"},r.createElement("ul",{className:"navbar-nav flex-row align-items-center ms-auto","data-sm-skip":"true"},r.createElement("li",{className:"nav-item ms-lg-0"},r.createElement("div",{className:"navbar-hamburger d-lg-none d-xl-none ms-auto"},r.createElement("button",{className:"hamburger animate plain","data-toggle":"offcanvas-nav"},r.createElement("span",null)))))))))},c=function(){return r.createElement("footer",{className:"bg-dark text-inverse"},r.createElement("div",{className:"container py-13 py-md-15"},r.createElement("div",{className:"row gy-6 gy-lg-0"},r.createElement("div",{className:"col"},r.createElement("div",{className:"widget"},r.createElement("p",{className:"mb-4"},r.createElement("a",{href:"/"},"Keszflow App")),r.createElement("p",{className:"mb-4"},"© 2021–2022 ",r.createElement("a",{href:"https://ione.software",target:"_blank"},"IONE Software – The technical solutions for business challenges."),r.createElement("br",null),"ul. Karola Namysłowskiego 8, 22-400 Zamość, Poland",r.createElement("br",null),"All rights reserved."))))))},s=function(){return r.createElement("div",{className:"progress-wrap"},r.createElement("svg",{className:"progress-circle svg-content",width:"100%",height:"100%",viewBox:"-1 -1 102 102"},r.createElement("path",{d:"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"})))},l=function(e){var t=e.children,n=(0,a.useStaticQuery)("4200623706");return r.createElement(r.Fragment,null,r.createElement(o.Z,n.site.siteMetadata),r.createElement("main",null,r.createElement("div",{className:"content-wrapper"},r.createElement(i,null),t),r.createElement(s,null),r.createElement(c,null)))}},262:function(e,t,n){"use strict";n.d(t,{Z:function(){return ve}});var r,a,o,i,c=n(7294),s=n(5697),l=n.n(s),u=n(4839),f=n.n(u),p=n(2993),d=n.n(p),m=n(6494),y=n.n(m),h="bodyAttributes",b="htmlAttributes",v="titleAttributes",g={BASE:"base",BODY:"body",HEAD:"head",HTML:"html",LINK:"link",META:"meta",NOSCRIPT:"noscript",SCRIPT:"script",STYLE:"style",TITLE:"title"},T=(Object.keys(g).map((function(e){return g[e]})),"charset"),E="cssText",w="href",A="http-equiv",O="innerHTML",C="itemprop",S="name",j="property",k="rel",N="src",P="target",x={accesskey:"accessKey",charset:"charSet",class:"className",contenteditable:"contentEditable",contextmenu:"contextMenu","http-equiv":"httpEquiv",itemprop:"itemProp",tabindex:"tabIndex"},L="defaultTitle",M="defer",I="encodeSpecialCharacters",_="onChangeClientState",R="titleTemplate",q=Object.keys(x).reduce((function(e,t){return e[x[t]]=t,e}),{}),Y=[g.NOSCRIPT,g.SCRIPT,g.STYLE],D="data-react-helmet",F="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},B=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")},H=function(){function e(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}return function(t,n,r){return n&&e(t.prototype,n),r&&e(t,r),t}}(),U=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},z=function(e,t){var n={};for(var r in e)t.indexOf(r)>=0||Object.prototype.hasOwnProperty.call(e,r)&&(n[r]=e[r]);return n},K=function(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!t||"object"!=typeof t&&"function"!=typeof t?e:t},W=function(e){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];return!1===t?String(e):String(e).replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;").replace(/"/g,"&quot;").replace(/'/g,"&#x27;")},Q=function(e){var t=X(e,g.TITLE),n=X(e,R);if(n&&t)return n.replace(/%s/g,(function(){return Array.isArray(t)?t.join(""):t}));var r=X(e,L);return t||r||void 0},Z=function(e){return X(e,_)||function(){}},V=function(e,t){return t.filter((function(t){return void 0!==t[e]})).map((function(t){return t[e]})).reduce((function(e,t){return U({},e,t)}),{})},G=function(e,t){return t.filter((function(e){return void 0!==e[g.BASE]})).map((function(e){return e[g.BASE]})).reverse().reduce((function(t,n){if(!t.length)for(var r=Object.keys(n),a=0;a<r.length;a++){var o=r[a].toLowerCase();if(-1!==e.indexOf(o)&&n[o])return t.concat(n)}return t}),[])},J=function(e,t,n){var r={};return n.filter((function(t){return!!Array.isArray(t[e])||(void 0!==t[e]&&re("Helmet: "+e+' should be of type "Array". Instead found type "'+F(t[e])+'"'),!1)})).map((function(t){return t[e]})).reverse().reduce((function(e,n){var a={};n.filter((function(e){for(var n=void 0,o=Object.keys(e),i=0;i<o.length;i++){var c=o[i],s=c.toLowerCase();-1===t.indexOf(s)||n===k&&"canonical"===e[n].toLowerCase()||s===k&&"stylesheet"===e[s].toLowerCase()||(n=s),-1===t.indexOf(c)||c!==O&&c!==E&&c!==C||(n=c)}if(!n||!e[n])return!1;var l=e[n].toLowerCase();return r[n]||(r[n]={}),a[n]||(a[n]={}),!r[n][l]&&(a[n][l]=!0,!0)})).reverse().forEach((function(t){return e.push(t)}));for(var o=Object.keys(a),i=0;i<o.length;i++){var c=o[i],s=y()({},r[c],a[c]);r[c]=s}return e}),[]).reverse()},X=function(e,t){for(var n=e.length-1;n>=0;n--){var r=e[n];if(r.hasOwnProperty(t))return r[t]}return null},$=(r=Date.now(),function(e){var t=Date.now();t-r>16?(r=t,e(t)):setTimeout((function(){$(e)}),0)}),ee=function(e){return clearTimeout(e)},te="undefined"!=typeof window?window.requestAnimationFrame&&window.requestAnimationFrame.bind(window)||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||$:n.g.requestAnimationFrame||$,ne="undefined"!=typeof window?window.cancelAnimationFrame||window.webkitCancelAnimationFrame||window.mozCancelAnimationFrame||ee:n.g.cancelAnimationFrame||ee,re=function(e){return console&&"function"==typeof console.warn&&console.warn(e)},ae=null,oe=function(e,t){var n=e.baseTag,r=e.bodyAttributes,a=e.htmlAttributes,o=e.linkTags,i=e.metaTags,c=e.noscriptTags,s=e.onChangeClientState,l=e.scriptTags,u=e.styleTags,f=e.title,p=e.titleAttributes;se(g.BODY,r),se(g.HTML,a),ce(f,p);var d={baseTag:le(g.BASE,n),linkTags:le(g.LINK,o),metaTags:le(g.META,i),noscriptTags:le(g.NOSCRIPT,c),scriptTags:le(g.SCRIPT,l),styleTags:le(g.STYLE,u)},m={},y={};Object.keys(d).forEach((function(e){var t=d[e],n=t.newTags,r=t.oldTags;n.length&&(m[e]=n),r.length&&(y[e]=d[e].oldTags)})),t&&t(),s(e,m,y)},ie=function(e){return Array.isArray(e)?e.join(""):e},ce=function(e,t){void 0!==e&&document.title!==e&&(document.title=ie(e)),se(g.TITLE,t)},se=function(e,t){var n=document.getElementsByTagName(e)[0];if(n){for(var r=n.getAttribute(D),a=r?r.split(","):[],o=[].concat(a),i=Object.keys(t),c=0;c<i.length;c++){var s=i[c],l=t[s]||"";n.getAttribute(s)!==l&&n.setAttribute(s,l),-1===a.indexOf(s)&&a.push(s);var u=o.indexOf(s);-1!==u&&o.splice(u,1)}for(var f=o.length-1;f>=0;f--)n.removeAttribute(o[f]);a.length===o.length?n.removeAttribute(D):n.getAttribute(D)!==i.join(",")&&n.setAttribute(D,i.join(","))}},le=function(e,t){var n=document.head||document.querySelector(g.HEAD),r=n.querySelectorAll(e+"["+"data-react-helmet]"),a=Array.prototype.slice.call(r),o=[],i=void 0;return t&&t.length&&t.forEach((function(t){var n=document.createElement(e);for(var r in t)if(t.hasOwnProperty(r))if(r===O)n.innerHTML=t.innerHTML;else if(r===E)n.styleSheet?n.styleSheet.cssText=t.cssText:n.appendChild(document.createTextNode(t.cssText));else{var c=void 0===t[r]?"":t[r];n.setAttribute(r,c)}n.setAttribute(D,"true"),a.some((function(e,t){return i=t,n.isEqualNode(e)}))?a.splice(i,1):o.push(n)})),a.forEach((function(e){return e.parentNode.removeChild(e)})),o.forEach((function(e){return n.appendChild(e)})),{oldTags:a,newTags:o}},ue=function(e){return Object.keys(e).reduce((function(t,n){var r=void 0!==e[n]?n+'="'+e[n]+'"':""+n;return t?t+" "+r:r}),"")},fe=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object.keys(e).reduce((function(t,n){return t[x[n]||n]=e[n],t}),t)},pe=function(e,t,n){switch(e){case g.TITLE:return{toComponent:function(){return e=t.title,n=t.titleAttributes,(r={key:e})[D]=!0,a=fe(n,r),[c.createElement(g.TITLE,a,e)];var e,n,r,a},toString:function(){return function(e,t,n,r){var a=ue(n),o=ie(t);return a?"<"+e+' data-react-helmet="true" '+a+">"+W(o,r)+"</"+e+">":"<"+e+' data-react-helmet="true">'+W(o,r)+"</"+e+">"}(e,t.title,t.titleAttributes,n)}};case h:case b:return{toComponent:function(){return fe(t)},toString:function(){return ue(t)}};default:return{toComponent:function(){return function(e,t){return t.map((function(t,n){var r,a=((r={key:n})[D]=!0,r);return Object.keys(t).forEach((function(e){var n=x[e]||e;if(n===O||n===E){var r=t.innerHTML||t.cssText;a.dangerouslySetInnerHTML={__html:r}}else a[n]=t[e]})),c.createElement(e,a)}))}(e,t)},toString:function(){return function(e,t,n){return t.reduce((function(t,r){var a=Object.keys(r).filter((function(e){return!(e===O||e===E)})).reduce((function(e,t){var a=void 0===r[t]?t:t+'="'+W(r[t],n)+'"';return e?e+" "+a:a}),""),o=r.innerHTML||r.cssText||"",i=-1===Y.indexOf(e);return t+"<"+e+' data-react-helmet="true" '+a+(i?"/>":">"+o+"</"+e+">")}),"")}(e,t,n)}}}},de=function(e){var t=e.baseTag,n=e.bodyAttributes,r=e.encode,a=e.htmlAttributes,o=e.linkTags,i=e.metaTags,c=e.noscriptTags,s=e.scriptTags,l=e.styleTags,u=e.title,f=void 0===u?"":u,p=e.titleAttributes;return{base:pe(g.BASE,t,r),bodyAttributes:pe(h,n,r),htmlAttributes:pe(b,a,r),link:pe(g.LINK,o,r),meta:pe(g.META,i,r),noscript:pe(g.NOSCRIPT,c,r),script:pe(g.SCRIPT,s,r),style:pe(g.STYLE,l,r),title:pe(g.TITLE,{title:f,titleAttributes:p},r)}},me=f()((function(e){return{baseTag:G([w,P],e),bodyAttributes:V(h,e),defer:X(e,M),encode:X(e,I),htmlAttributes:V(b,e),linkTags:J(g.LINK,[k,w],e),metaTags:J(g.META,[S,T,A,j,C],e),noscriptTags:J(g.NOSCRIPT,[O],e),onChangeClientState:Z(e),scriptTags:J(g.SCRIPT,[N,O],e),styleTags:J(g.STYLE,[E],e),title:Q(e),titleAttributes:V(v,e)}}),(function(e){ae&&ne(ae),e.defer?ae=te((function(){oe(e,(function(){ae=null}))})):(oe(e),ae=null)}),de)((function(){return null})),ye=(a=me,i=o=function(e){function t(){return B(this,t),K(this,e.apply(this,arguments))}return function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t);e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:!1,writable:!0,configurable:!0}}),t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}(t,e),t.prototype.shouldComponentUpdate=function(e){return!d()(this.props,e)},t.prototype.mapNestedChildrenToProps=function(e,t){if(!t)return null;switch(e.type){case g.SCRIPT:case g.NOSCRIPT:return{innerHTML:t};case g.STYLE:return{cssText:t}}throw new Error("<"+e.type+" /> elements are self-closing and can not contain children. Refer to our API for more information.")},t.prototype.flattenArrayTypeChildren=function(e){var t,n=e.child,r=e.arrayTypeChildren,a=e.newChildProps,o=e.nestedChildren;return U({},r,((t={})[n.type]=[].concat(r[n.type]||[],[U({},a,this.mapNestedChildrenToProps(n,o))]),t))},t.prototype.mapObjectTypeChildren=function(e){var t,n,r=e.child,a=e.newProps,o=e.newChildProps,i=e.nestedChildren;switch(r.type){case g.TITLE:return U({},a,((t={})[r.type]=i,t.titleAttributes=U({},o),t));case g.BODY:return U({},a,{bodyAttributes:U({},o)});case g.HTML:return U({},a,{htmlAttributes:U({},o)})}return U({},a,((n={})[r.type]=U({},o),n))},t.prototype.mapArrayTypeChildrenToProps=function(e,t){var n=U({},t);return Object.keys(e).forEach((function(t){var r;n=U({},n,((r={})[t]=e[t],r))})),n},t.prototype.warnOnInvalidChildren=function(e,t){return!0},t.prototype.mapChildrenToProps=function(e,t){var n=this,r={};return c.Children.forEach(e,(function(e){if(e&&e.props){var a=e.props,o=a.children,i=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return Object.keys(e).reduce((function(t,n){return t[q[n]||n]=e[n],t}),t)}(z(a,["children"]));switch(n.warnOnInvalidChildren(e,o),e.type){case g.LINK:case g.META:case g.NOSCRIPT:case g.SCRIPT:case g.STYLE:r=n.flattenArrayTypeChildren({child:e,arrayTypeChildren:r,newChildProps:i,nestedChildren:o});break;default:t=n.mapObjectTypeChildren({child:e,newProps:t,newChildProps:i,nestedChildren:o})}}})),t=this.mapArrayTypeChildrenToProps(r,t)},t.prototype.render=function(){var e=this.props,t=e.children,n=z(e,["children"]),r=U({},n);return t&&(r=this.mapChildrenToProps(t,r)),c.createElement(a,r)},H(t,null,[{key:"canUseDOM",set:function(e){a.canUseDOM=e}}]),t}(c.Component),o.propTypes={base:l().object,bodyAttributes:l().object,children:l().oneOfType([l().arrayOf(l().node),l().node]),defaultTitle:l().string,defer:l().bool,encodeSpecialCharacters:l().bool,htmlAttributes:l().object,link:l().arrayOf(l().object),meta:l().arrayOf(l().object),noscript:l().arrayOf(l().object),onChangeClientState:l().func,script:l().arrayOf(l().object),style:l().arrayOf(l().object),title:l().string,titleAttributes:l().object,titleTemplate:l().string},o.defaultProps={defer:!0,encodeSpecialCharacters:!0},o.peek=a.peek,o.rewind=function(){var e=a.rewind();return e||(e=de({baseTag:[],bodyAttributes:{},encodeSpecialCharacters:!0,htmlAttributes:{},linkTags:[],metaTags:[],noscriptTags:[],scriptTags:[],styleTags:[],title:"",titleAttributes:{}})),e},i);ye.renderStatic=ye.rewind;var he=n(1597);function be(e){var t,n,r,a,o,i=e.description,s=e.lang,l=e.meta,u=e.title,f=e.image,p=e.ogDescription,d=(0,he.useStaticQuery)("3212059924").site,m=i||d.siteMetadata.description,y=p||(null===(t=d.siteMetadata)||void 0===t?void 0:t.ogDescription),h=f||(null===(n=d.siteMetadata)||void 0===n?void 0:n.image);return c.createElement(ye,{htmlAttributes:{lang:s},title:u,titleTemplate:u,meta:[{name:"description",content:m},{property:"og:title",content:u},{property:"og:description",content:y},{property:"og:type",content:"profile"},{property:"og:image",content:h},{property:"google",content:"nositelinkssearchbox"},{name:"twitter:card",content:"summary"},{name:"twitter:creator",content:(null===(r=d.siteMetadata)||void 0===r?void 0:r.author)||""},{name:"twitter:title",content:u},{name:"twitter:description",content:m},{name:"robots",content:null===(a=d.siteMetadata)||void 0===a?void 0:a.robots},{name:"robots",content:null===(o=d.siteMetadata)||void 0===o?void 0:o.robots}].concat(l)},c.createElement("script",{src:"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js",integrity:"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM",crossOrigin:"anonymous"}),",",c.createElement("script",{src:"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js",integrity:"sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==",crossOrigin:"anonymous"}),",",c.createElement("script",{src:"js/plugins.js"}),",",c.createElement("script",{src:"js/theme.js"}),",",c.createElement("link",{rel:"stylesheet",href:"css/plugins.css"}),",",c.createElement("link",{rel:"stylesheet",href:"css/style.css"}),",",c.createElement("link",{rel:"stylesheet",href:"css/logo.css"}),",",c.createElement("link",{rel:"preload",href:"css/fonts/dm.css",as:"style",onLoad:"this.rel=\\'stylesheet\\'"}),",")}be.defaultProps={lang:"en",meta:[],description:""};var ve=be}}]);
//# sourceMappingURL=commons-e125c1b118a39e108fe5.js.map