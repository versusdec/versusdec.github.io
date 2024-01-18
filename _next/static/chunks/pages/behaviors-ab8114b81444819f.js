(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[237],{5181:function(e,s,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/behaviors",function(){return n(1977)}])},1079:function(e,s,n){"use strict";Object.defineProperty(s,"__esModule",{value:!0}),Object.defineProperty(s,"useRouter",{enumerable:!0,get:function(){return c}});let t=n(7294),i=n(4167);function c(){return(0,t.useContext)(i.RouterContext)}("function"==typeof s.default||"object"==typeof s.default&&null!==s.default)&&void 0===s.default.__esModule&&(Object.defineProperty(s.default,"__esModule",{value:!0}),Object.assign(s.default,s),e.exports=s.default)},6787:function(e,s,n){"use strict";n.d(s,{T:function(){return i}});var t=n(5893);let i=e=>(0,t.jsx)("div",{...e,children:(0,t.jsx)("img",{src:"/assets/icons/chevron.png",alt:e.alt||"back"})})},3052:function(e,s,n){"use strict";n.d(s,{T:function(){return d}});var t=n(5893),i=n(1116),c=n.n(i),a=n(5675),l=n.n(a);let d=()=>(0,t.jsx)(t.Fragment,{children:(0,t.jsxs)("div",{className:c().logo,children:[(0,t.jsx)(l(),{src:"/assets/icons/logo.svg",width:34,height:34,alt:""}),"Food Mentor"]})})},1977:function(e,s,n){"use strict";n.r(s),n.d(s,{default:function(){return x}});var t=n(5893),i=n(2743),c=n.n(i),a=n(3052),l=n(6787),d=n(1079),r=n(7294),o=n(1664),h=n.n(o),u=n(1389);function x(){let e=(0,d.useRouter)(),{data:s,setData:n}=(0,u.dr)(),[i,o]=(0,r.useState)(s.behavior||[]);return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsxs)("header",{id:"header",className:c().header,children:[(0,t.jsx)(h(),{href:"/measures",children:(0,t.jsx)(l.T,{})})," ",(0,t.jsx)(a.T,{})]}),(0,t.jsxs)("main",{className:c().main,children:[(0,t.jsxs)("div",{className:"quiz-top "+c().quizTop,children:[(0,t.jsx)("h2",{children:"Destructive behaviors"}),(0,t.jsx)("p",{children:"We all have them! Which are yours?"})]}),(0,t.jsxs)("div",{className:c().list,children:[(0,t.jsxs)("label",{className:c().item,children:[(0,t.jsx)("input",{type:"checkbox",checked:i.includes("rest"),onChange:e=>{if(e.target.checked)o(e=>[...e,"rest"]);else if(i.includes("rest")){let e=[...i];e.splice(e.indexOf("rest"),1),o(e)}}}),(0,t.jsxs)("div",{className:c().wrap,children:[(0,t.jsx)("div",{className:c().image,children:(0,t.jsx)("img",{src:"/assets/icons/moon.svg",alt:""})}),(0,t.jsx)("span",{children:"I don't rest enough"})]})]}),(0,t.jsxs)("label",{className:c().item,children:[(0,t.jsx)("input",{type:"checkbox",checked:i.includes("sweet"),onChange:e=>{if(e.target.checked)o(e=>[...e,"sweet"]);else if(i.includes("sweet")){let e=[...i];e.splice(e.indexOf("sweet"),1),o(e)}}}),(0,t.jsxs)("div",{className:c().wrap,children:[(0,t.jsx)("div",{className:c().image,children:(0,t.jsx)("img",{src:"/assets/icons/donut.svg",alt:""})}),(0,t.jsx)("span",{children:"I have a sweet tooth"})]})]}),(0,t.jsxs)("label",{className:c().item,children:[(0,t.jsx)("input",{type:"checkbox",checked:i.includes("soda"),onChange:e=>{if(e.target.checked)o(e=>[...e,"soda"]);else if(i.includes("soda")){let e=[...i];e.splice(e.indexOf("soda"),1),o(e)}}}),(0,t.jsxs)("div",{className:c().wrap,children:[(0,t.jsx)("div",{className:c().image,children:(0,t.jsx)("img",{src:"/assets/icons/soda.svg",alt:""})}),(0,t.jsx)("span",{children:"I have too much soda"})]})]}),(0,t.jsxs)("label",{className:c().item,children:[(0,t.jsx)("input",{type:"checkbox",checked:i.includes("salt"),onChange:e=>{if(e.target.checked)o(e=>[...e,"salt"]);else if(i.includes("salt")){let e=[...i];e.splice(e.indexOf("salt"),1),o(e)}}}),(0,t.jsxs)("div",{className:c().wrap,children:[(0,t.jsx)("div",{className:c().image,children:(0,t.jsx)("img",{src:"/assets/icons/salt.svg",alt:""})}),(0,t.jsx)("span",{children:"I eat many salty foods"})]})]}),(0,t.jsxs)("label",{className:c().item,children:[(0,t.jsx)("input",{type:"checkbox",checked:i.includes("snack"),onChange:e=>{if(e.target.checked)o(e=>[...e,"snack"]);else if(i.includes("snack")){let e=[...i];e.splice(e.indexOf("snack"),1),o(e)}}}),(0,t.jsxs)("div",{className:c().wrap,children:[(0,t.jsx)("div",{className:c().image,children:(0,t.jsx)("img",{src:"/assets/icons/pizza.svg",alt:""})}),(0,t.jsx)("span",{children:"I enjoy midnight snacks"})]})]}),(0,t.jsxs)("label",{className:c().item,children:[(0,t.jsx)("input",{type:"checkbox",checked:i.includes("none"),onChange:e=>{if(e.target.checked)o(e=>[...e,"none"]);else if(i.includes("none")){let e=[...i];e.splice(e.indexOf("none"),1),o(e)}}}),(0,t.jsxs)("div",{className:c().wrap,children:[(0,t.jsx)("div",{className:c().image,children:(0,t.jsx)("img",{src:"/assets/icons/cross.svg",alt:""})}),(0,t.jsx)("span",{children:"None of the above"})]})]})]}),(0,t.jsx)("button",{type:"button",className:c().btn+" btn-next",disabled:!i.length,onClick:()=>{n({behavior:i}),e.replace("/exercise")},children:"Continue"})]})]})}},1116:function(e){e.exports={logo:"styles_logo__vxPqs"}},2743:function(e){e.exports={header:"styles_header__yRlKK",main:"styles_main__PZRXV",quizTop:"styles_quizTop__2Xmhz",btn:"styles_btn__4q1_W",list:"styles_list__V3_T7",item:"styles_item__LruxC",wrap:"styles_wrap__bQtPK"}}},function(e){e.O(0,[675,664,774,888,179],function(){return e(e.s=5181)}),_N_E=e.O()}]);