(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[371],{5449:function(e,t,r){"use strict";var s=r(4836);t.Z=void 0,function(e,t){if((t||!e||!e.__esModule)&&null!==e&&("object"==typeof e||"function"==typeof e)){var r=i(t);if(r&&r.has(e))return r.get(e);var s={},l=Object.defineProperty&&Object.getOwnPropertyDescriptor;for(var n in e)if("default"!==n&&Object.prototype.hasOwnProperty.call(e,n)){var a=l?Object.getOwnPropertyDescriptor(e,n):null;a&&(a.get||a.set)?Object.defineProperty(s,n,a):s[n]=e[n]}s.default=e,r&&r.set(e,s)}}(r(7294));var l=s(r(4938)),n=r(5893);function i(e){if("function"!=typeof WeakMap)return null;var t=new WeakMap,r=new WeakMap;return(i=function(e){return e?r:t})(e)}var a=(0,l.default)((0,n.jsx)("path",{d:"M12 1.27a11 11 0 00-3.48 21.46c.55.09.73-.28.73-.55v-1.84c-3.03.64-3.67-1.46-3.67-1.46-.55-1.29-1.28-1.65-1.28-1.65-.92-.65.1-.65.1-.65 1.1 0 1.73 1.1 1.73 1.1.92 1.65 2.57 1.2 3.21.92a2 2 0 01.64-1.47c-2.47-.27-5.04-1.19-5.04-5.5 0-1.1.46-2.1 1.2-2.84a3.76 3.76 0 010-2.93s.91-.28 3.11 1.1c1.8-.49 3.7-.49 5.5 0 2.1-1.38 3.02-1.1 3.02-1.1a3.76 3.76 0 010 2.93c.83.74 1.2 1.74 1.2 2.94 0 4.21-2.57 5.13-5.04 5.4.45.37.82.92.82 2.02v3.03c0 .27.1.64.73.55A11 11 0 0012 1.27"}),"GitHub");t.Z=a},9507:function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/portfolio",function(){return r(867)}])},3595:function(e,t,r){"use strict";r.d(t,{z:function(){return i}});var s=r(5893);r(7294);var l=r(4314),n=r.n(l);let i=e=>{let{children:t,className:r,secondary:l,...i}=e;return(0,s.jsx)("div",{className:n().btn+" "+(r||"")+(l?n().secondary:""),...i,children:t})}},867:function(e,t,r){"use strict";r.r(t),r.d(t,{default:function(){return u}});var s=r(5893),l=r(3595),n=r(5449),i=r(5981),a=r(7294);let c=function(){let e,t,r,s,l,n,i,a;let c={events:(i={},a=[],setInterval(function(){let e=a.shift();for(;e;)i[e.name]&&i[e.name].length&&i[e.name].forEach(function(t){e.resolve(t(e.data,e.name))}),e=a.shift()},10),{on:function(e,t){"string"==typeof e&&(e=[e]);let r=[];return e.forEach(e=>{i[e]=i[e]||[],r.push(i[e].push(t))}),r},push:function(e,t){return new Promise(r=>{a.push({name:e,data:t,resolve:r})})},off:function(e,t){t?delete i[e][t]:("string"==typeof e&&(e=[e]),e.forEach(e=>{delete i[e]}))}})};function o(e){return Math.floor(+e/60).toString().padStart(2,"0")+":"+Math.ceil(+e%60).toString().padStart(2,"0")}let d={start:()=>(navigator.getUserMedia=navigator.getUserMedia||navigator.webkitGetUserMedia||navigator.mozGetUserMedia||navigator.msGetUserMedia,!!navigator.getUserMedia&&(navigator.mediaDevices.getUserMedia({audio:!0}).then(async t=>{let i=[];e=t,r=new MediaRecorder(t);let a=new AudioContext,o=a.createMediaStreamSource(t),d=a.createAnalyser();o.connect(d);let u=new Uint8Array(d.frequencyBinCount),h=()=>{d.getByteFrequencyData(u);let e=[];for(let t=0;t<100;t++)e.push(u[t]/2/100);c.events.push("recorder.volumes",e)};r.onstart=()=>{n=setInterval(h,100),c.events.push("record.start",Date.now())},r.ondataavailable=e=>{i.push(e.data),"inactive"===r.state&&(l=new Blob(i,{type:"audio/webm"}),s=URL.createObjectURL(l),c.events.push("record.ready",{blob:l,url:s}))},r.start(1e3)}).catch(console.error),!0)),stop:async()=>{clearInterval(t),clearInterval(n),r&&r.state&&"inactive"!==r.state&&r.stop(),e&&(e.getAudioTracks()[0].stop(),e.getAudioTracks()[0].enabled=!1),c.events.push("record.stop")}};async function u(e,t){let r;t.querySelector(".loading").classList.remove("hide");let s=new(window.AudioContext||window.webkitAudioContext),l=new Headers;l.append("cache-control","no-cache");try{r=await fetch(e,{method:"GET",headers:l}).then(e=>e.arrayBuffer())}catch(r){let e=t.querySelector(".loading");e.innerHTML="error",e.style.backgroundSize=0}if(r)return new Promise(function(e){s.decodeAudioData(r,t=>{let r=t.getChannelData(0);2===t.numberOfChannels&&t.getChannelData(1).map((e,t)=>{r[t]+=e});let s=Math.floor(r.length/100),l=[];for(let e=0;e<100;e++){let t=s*e,n=0;for(let e=0;e<s;e++)n+=Math.abs(r[t+e]);l.push(n/s)}let n=Math.pow(Math.max(...l),-1);e({data:l=l.map(e=>e*n),duration:t.duration})},e=>{console.log(e);let r=t.querySelector(".loading");r.innerHTML="error",r.style.backgroundSize=0})})}function h(e,t){let r=document.createDocumentFragment();for(let t in e){let s=function(e,t){if(t%2!=0)return"";{let r=document.createElementNS("http://www.w3.org/2000/svg","rect"),s=Math.ceil(100*e);r.setAttribute("width","2px"),r.setAttribute("height",s+"%"),r.setAttribute("y",100-s+"%"),r.setAttribute("x",t+"%"),r.classList.add("rect");let l=document.createElementNS("http://www.w3.org/2000/svg","rect");l.setAttribute("index",t),l.setAttribute("height","100%"),l.setAttribute("width","4px"),l.setAttribute("x",t+"%"),l.setAttribute("fill","rgba(0,0,0,0)");let n=document.createElement("g");return n.appendChild(r),n.appendChild(l),n}}(e[t],t);for(;s.firstChild;)r.appendChild(s.firstChild)}t.innerHTML="",t.append(r),t.closest(".player").querySelector(".loading").classList.contains("hide")||t.closest(".player").querySelector(".loading").classList.add("hide")}function p(e,t,r){[...t.querySelectorAll("rect:not([index])")].forEach((t,s)=>{1===e?(t.classList.remove("ps"),t.classList.remove("s")):2*s-1<=e?r?t.classList.add("ps"):t.classList.add("s"):r?t.classList.remove("ps"):t.classList.remove("s")})}let m={playback:{},record:{}};return function(e,t){let r;t?t.record||(t.playerMode=!0):t={record:!1,file:!1,playerMode:!0};let s=t.file;s instanceof File&&(s=window.URL.createObjectURL(s));let l="player_"+Math.round(1e6*Math.random()),n=document.createElement("div");n.id=l,n.classList="player";let i=document.createElement("button");i.classList="record ".concat(s||t.playerMode?"hide":"");let a=document.createElement("button");a.classList="play ".concat(s||t.playerMode?"":"hide");let g=document.createElement("button");g.classList="pause hide";let v=document.createElement("button");v.classList="stop ";let y=document.createElement("div");y.classList="audio";let x=document.createElement("audio");x.src=s,y.append(x);let j=document.createElementNS("http://www.w3.org/2000/svg","svg");j.setAttribute("version","1.1"),j.setAttribute("xmlns:xlink","http://www.w3.org/1999/xlink"),j.setAttribute("width","100%"),j.setAttribute("height","20"),j.setAttribute("aria-labelledby","title"),j.setAttribute("role","img"),j.classList="timeline";let b=document.createElement("div");b.classList="loading hide",b.innerHTML="loading";let f=document.createElement("progress");f.setAttribute("value",1),f.setAttribute("max",100);let L=document.createElement("div");L.classList="timer ".concat(s||t.playerMode?"":"hide");let w=document.createElement("span");w.classList="current",w.innerHTML="00:00";let S=document.createElement("span");S.innerHTML="00:00",S.classList="total",L.append(w),L.append(" / "),L.append(S);let k=document.createElement("div");k.classList="record_time ".concat(!t.record||s?"hide":"");let q=document.createElement("span");q.classList="total",q.innerHTML="00:00",k.append(q);let _=document.createElement("a");_.setAttribute("disabled",!0),_.classList="close link ".concat(t.record?"":"hide"),_.setAttribute("title","Delete"),_.innerHTML='<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 250 250" width="15" height="15" xml:space="preserve">\n<g style="transform: scale(2) translate(-60px, -60px);">\n	<path d="M164.612,87.388c-3.515-3.515-9.213-3.515-12.728,0L126,113.272l-25.885-25.885c-3.515-3.515-9.213-3.515-12.728,0\n		c-3.515,3.515-3.515,9.213,0,12.728L113.272,126l-25.885,25.885c-3.515,3.515-3.515,9.213,0,12.728\n		c1.757,1.757,4.061,2.636,6.364,2.636s4.606-0.879,6.364-2.636L126,138.728l25.885,25.885c1.757,1.757,4.061,2.636,6.364,2.636\n		s4.606-0.879,6.364-2.636c3.515-3.515,3.515-9.213,0-12.728L138.728,126l25.885-25.885\n		C168.127,96.601,168.127,90.902,164.612,87.388z"/>\n</g>\n</svg>\n';let E=document.createElement("a");t.playerMode&&(E.style.right=0),E.setAttribute("disabled",!0),E.classList="download link ",E.setAttribute("title","Download"),E.innerHTML='<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n	 viewBox="0 0 330 330" width="20" height="20" xml:space="preserve">\n<g style="transform: scale(1.2) translate(-40px, -40px);">\n	<path d="M211.667,127.121l-31.669,31.666V75c0-8.285-6.716-15-15-15c-8.284,0-15,6.715-15,15v83.787l-31.665-31.666\n		c-5.857-5.857-15.355-5.857-21.213,0c-5.858,5.859-5.858,15.355,0,21.213l57.271,57.271c2.929,2.93,6.768,4.395,10.606,4.395\n		c3.838,0,7.678-1.465,10.607-4.393l57.275-57.271c5.857-5.857,5.858-15.355,0.001-21.215\n		C227.021,121.264,217.524,121.264,211.667,127.121z"/>\n	<path d="M195,240h-60c-8.284,0-15,6.715-15,15c0,8.283,6.716,15,15,15h60c8.284,0,15-6.717,15-15C210,246.715,203.284,240,195,240z\n		"/>\n</g>\n</svg>\n',n.append(i),n.append(a),n.append(g),n.append(v),n.append(y),n.append(j),n.append(b),n.append(f),n.append(L),n.append(k),n.append(_),n.append(E);let M=(e,t)=>{u(e,t).then(r=>{if(r){h(r.data,t.querySelector(".timeline"),t),t.querySelector(".timer .total").innerHTML=o(Math.floor(r.duration));let s=t.querySelector("audio");s.setAttribute("src",e);let l=e=>{let r=t.querySelector("progress");r.attributes.value.value=e},n=e=>{let s=Math.floor(100*e/r.duration)+1;p(s,t.querySelector(".timeline")),t.querySelector(".timer .current").innerHTML=o(Math.floor(e)),m.record.hovering||l(s)};t.querySelector(".timer").classList.remove("hide"),t.querySelector("progress").style.width="150px",t.querySelector(".record_time").classList.add("hide"),t.querySelector(".download").removeAttribute("disabled"),t.querySelector(".close").removeAttribute("disabled"),s.addEventListener("timeupdate",e=>{let t=e.target.currentTime;n(t)}),m.playback={play:()=>{t.querySelector(".player.playing")&&t.querySelector(".player.playing .pause").click(),s.play(),t.querySelector("button.play").classList.add("hide"),t.querySelector("button.pause").classList.remove("hide"),t.classList.add("playing"),t.querySelector("button.stop").removeAttribute("disabled",!0)},pause:()=>{s.pause(),t.querySelector("button.pause").classList.add("hide"),t.querySelector("button.play").classList.remove("hide"),t.classList.remove("playing"),t.querySelector("button.stop").removeAttribute("disabled",!0)},stop:()=>{s.pause(),s.currentTime=0,t.querySelector("button.pause").classList.add("hide"),t.querySelector("button.play").classList.remove("hide")}},t.querySelector("audio").onended=m.playback.stop,t.querySelector("button.stop").removeEventListener("click",m.record.stop),t.querySelector("button.play").addEventListener("click",m.playback.play),t.querySelector("button.stop").addEventListener("click",m.playback.stop),t.querySelector("button.pause").addEventListener("click",m.playback.pause),m.playback.timelineHover=e=>{if("rect"===e.target.tagName){let t=e.target.attributes.index.value;+t&&p(+t,e.target.parentNode,!0)}},m.playback.timelineClick=e=>{if("rect"===e.target.tagName){let t=e.target.attributes.index.value;+t&&(s.currentTime=Math.floor(r.duration*(+t/100)))}},t.querySelector(".timeline").addEventListener("mouseover",m.playback.timelineHover),t.querySelector(".timeline").addEventListener("click",m.playback.timelineClick),m.record.progressValue=null,m.record.mouseEnter=e=>{m.record.hovering=!0,m.record.progressValue=e.target.value},m.record.mouseLeave=e=>{m.record.hovering=!1,e.target.value=m.record.progressValue},m.record.mouseMove=e=>{e.target.value=e.offsetX/2*1.33},m.record.clickRemove=e=>{let t=e.offsetX/2*1.33;m.record.progressValue=t,+t&&(s.currentTime=Math.floor(r.duration*(+t/100)))},t.querySelector("progress").addEventListener("mouseenter",m.record.mouseEnter),t.querySelector("progress").addEventListener("mouseleave",m.record.mouseLeave),t.querySelector("progress").addEventListener("mousemove",m.record.mouseMove),t.querySelector("progress").addEventListener("click",m.record.clickRemove)}})},A=e=>{let t;m.record={record:()=>{let r=d.start();if(!r)return alert("Unable to use microphone");e.classList.add("recording"),e.querySelector("button.record").setAttribute("disabled",!0),e.querySelector("button.stop").removeAttribute("disabled"),c.events.off(["record.start","recorder.volumes"]),c.events.on("record.start",r=>{t=setInterval(function(){let t=Date.now()-r;e.querySelector(".record_time > .total").innerHTML=o(Math.floor(t/1e3))},1e3)}),c.events.on("recorder.volumes",t=>{h(t,e.querySelector(".timeline"),e)})},stop:()=>{c.events.off(["record.stop","record.ready"]),c.events.on("record.stop",()=>{clearInterval(t)}),d.stop(),e.classList.contains("recording")&&e.querySelector(".close").removeAttribute("disabled"),e.querySelector("button.stop").setAttribute("disabled",!0),e.classList.remove("recording"),e.querySelector("button.record").classList.add("hide"),e.querySelector("button.record").removeAttribute("disabled"),e.querySelector("button.play").classList.remove("hide"),e.querySelector("a.close").removeAttribute("disabled"),e.querySelector("a.download").removeAttribute("disabled"),c.events.on("record.ready",t=>{let{blob:r,url:s}=t;e.blob=r,M(s,e)})}},function(e){let t=[];for(let e=0;e<100;e++)t.push(.1);h(t,e.querySelector(".timeline"),e)}(e),e.querySelector(".timer").classList.add("hide"),e.querySelector("progress").style.width="185px",e.querySelector(".record_time").classList.remove("hide"),e.querySelector(".record_time .total").innerHTML="00:00",e.querySelector(".play").classList.add("hide"),e.querySelector(".record").classList.remove("hide"),e.querySelector("button.stop").addEventListener("click",m.record.stop),e.querySelector("button.record").addEventListener("click",m.record.record)},N=e=>{let t=window.URL.createObjectURL(e),r=document.createElement("a"),l="dwnl_"+Math.round(1e6*Math.random());r.id=l;let n="record";try{n=s.split("/")[s.split("/").length-1]}catch(e){}r.style.display="none",r.href=t,r.download=n,document.body.appendChild(r),r.click(),window.URL.revokeObjectURL(t),document.getElementById(l).remove()},P=e=>{s&&M(s,e),t.record&&!s&&A(e),e.querySelector(".download").addEventListener("click",function(t){!this.attributes.disabled&&(s?fetch(s).then(e=>e.blob()).then(e=>{N(e,"file")}).catch(e=>console.log(e)):e.blob&&N(e.blob))}),e.querySelector(".close").addEventListener("click",function(t){m.handleClose(e,t.target.closest(".close"))})},z={player:r,updateFile:e=>{e&&(s=window.URL.createObjectURL(e),r.querySelector(".timeline").innerHTML="",r.querySelector("button.record").classList.add("hide"),r.querySelector("button.play").classList.remove("hide"),P(r))}};e.append(n);let C=setInterval(()=>{let e=document.getElementById(l);r=e,m.handleClose=function(e,t){t.attributes.disabled||(e.querySelector("progress").removeEventListener("mouseenter",m.record.mouseEnter),e.querySelector("progress").removeEventListener("mousemove",m.record.mouseMove),e.querySelector("progress").removeEventListener("mouseleave",m.record.mouseLeave),e.querySelector("progress").removeEventListener("click",m.record.clickRemove),e.querySelector(".timeline").removeEventListener("mouseover",m.playback.timelineHover),e.querySelector(".timeline").removeEventListener("click",m.playback.timelineClick),delete e.blob,e.querySelector("progress").setAttribute("value",0),t.setAttribute("disabled",!0),e.querySelector("a.download").setAttribute("disabled",!0),e.querySelector("button.stop").setAttribute("disabled",!0),e.classList.contains("playing")&&m.playback.stop(),e.classList.contains("recording")&&m.playback.stop(),e.querySelector("button.stop").removeEventListener("click",m.playback.stop),e.querySelector("button.record").removeEventListener("click",m.record.record),A(e))},e&&(P(e),clearInterval(C))},300);return z}}();var o=r(6470),d=r.n(o),u=()=>{let[e,t]=(0,a.useState)(!1),[r,o]=(0,a.useState)(!1);return(0,a.useEffect)(()=>{e||(c(document.getElementById("player"),{record:!0,file:"/recorder/example.mp3"}),t(!0))},[e]),(0,s.jsxs)("main",{className:d().main,children:[(0,s.jsxs)("h2",{children:["My ",(0,s.jsx)("span",{children:"Portfolio"})]}),(0,s.jsx)("div",{className:d().list,children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/botto.png",alt:"botto",loading:"lazy"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Communication Platform"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"Landing Page"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"html, css, js, jq"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/botto",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/botto",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{className:d().list,children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/yugo.png",alt:"yugo",loading:"lazy"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Advertising Platform"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"Landing Page"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"html, css, js, jq"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/yugo",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/yugo",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{className:d().list,children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/estate.png",alt:"estate",loading:"lazy"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Housing Estates"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"Landing Page"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"html, css, js, jq"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/estate",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/estate",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{className:d().list,children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/infrared.png",alt:"infrared",loading:"lazy"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Lawyers Company"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"Personal Website"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"html, css, js, jq"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/infrared",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/infrared",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{className:d().list,children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/tdj.png",alt:"tdj",loading:"lazy"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Scooter Sharing"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"Landing Page"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"html, css, js, jq"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/tdj",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/tdj",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{className:d().list,children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/vodoley.png",alt:"vodoley",loading:"lazy"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Sprinkle Machines"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"Landing Page"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"html, css, js, jq"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/vodoley",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/vodoley",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{className:d().list,children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/vtb.png",alt:"vtb",loading:"lazy"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Digital Distribution"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"Landing Page"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"html, css, js, jq"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/vtb",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/vtb",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{className:d().list,style:{display:"none"},children:(0,s.jsxs)("div",{className:d().item,children:[(0,s.jsx)("picture",{children:(0,s.jsx)("img",{src:"/assets/img/keszflow.png",alt:"keszflow"})}),(0,s.jsxs)("aside",{children:[(0,s.jsx)("h3",{children:"Budget tracker"}),(0,s.jsxs)("ul",{children:[(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Project : "}),(0,s.jsx)("span",{children:"MVP"})]}),(0,s.jsxs)("li",{children:[(0,s.jsx)("span",{children:"Languages : "}),(0,s.jsx)("span",{children:"react, typescript, next.js, material ui, npm workspaces, storybook, playwright, enzyme"})]})]}),(0,s.jsxs)("div",{className:d().preview,children:[(0,s.jsx)("a",{href:"/keszflow/login",target:"_blank",children:(0,s.jsx)(l.z,{secondary:!0,children:"preview"})}),(0,s.jsx)("a",{href:"https://github.com/versusdec/keszflow",target:"_blank",className:d().git,children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})]})]})]})}),(0,s.jsx)("div",{id:"player",className:d()["player-wrapper"],children:(0,s.jsx)("a",{title:"github",target:"_blank",rel:"noopener",href:"https://github.com/versusdec/versusdec.github.io/tree/gh-pages/recorder",children:(0,s.jsx)(i.Z,{children:(0,s.jsx)(n.Z,{})})})})]})}},4314:function(e){e.exports={btn:"styles_btn__sVHqN",secondary:"styles_secondary__RBxYH"}},6470:function(e){e.exports={main:"styles_main__mkKUB",list:"styles_list__wTvTT",item:"styles_item__rsfCc",preview:"styles_preview___xoSe",git:"styles_git__6VsX7","player-wrapper":"styles_player-wrapper__boHBZ",upload:"styles_upload__Drx3j",loading:"styles_loading__7RNtR"}}},function(e){e.O(0,[774,888,179],function(){return e(e.s=9507)}),_N_E=e.O()}]);