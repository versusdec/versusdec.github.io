(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[405],{81426:function(r,e,n){"use strict";n.d(e,{Z:function(){return P}});var i=n(87462),a=n(63366),t=n(67294),o=n(86010),l=n(94780),c=n(34867),s=n(13264),u=n(29628),d=n(96682),p=n(39707),f=n(66500);let v=(r,e)=>r.filter(r=>e.includes(r)),g=(r,e,n)=>{let i=r.keys[0];if(Array.isArray(e))e.forEach((e,i)=>{n((e,n)=>{i<=r.keys.length-1&&(0===i?Object.assign(e,n):e[r.up(r.keys[i])]=n)},e)});else if(e&&"object"==typeof e){let a=Object.keys(e).length>r.keys.length?r.keys:v(r.keys,Object.keys(e));a.forEach(a=>{if(-1!==r.keys.indexOf(a)){let t=e[a];void 0!==t&&n((e,n)=>{i===a?Object.assign(e,n):e[r.up(a)]=n},t)}})}else("number"==typeof e||"string"==typeof e)&&n((r,e)=>{Object.assign(r,e)},e)},m=({theme:r,ownerState:e})=>{let n={};return g(r.breakpoints,e.gridSize,(r,i)=>{let a={};!0===i&&(a={flexBasis:0,flexGrow:1,maxWidth:"100%"}),"auto"===i&&(a={flexBasis:"auto",flexGrow:0,flexShrink:0,maxWidth:"none",width:"auto"}),"number"==typeof i&&(a={flexGrow:0,flexBasis:"auto",width:`calc(100% * ${i} / var(--Grid-columns)${e.nested&&e.container?" + var(--Grid-columnSpacing)":""})`}),r(n,a)}),n},w=({theme:r,ownerState:e})=>{let n={};return g(r.breakpoints,e.gridOffset,(r,e)=>{let i={};"auto"===e&&(i={marginLeft:"auto"}),"number"==typeof e&&(i={marginLeft:0===e?"0px":`calc(100% * ${e} / var(--Grid-columns))`}),r(n,i)}),n},b=({theme:r,ownerState:e})=>{if(!e.container)return{};let n={"--Grid-columns":12};return g(r.breakpoints,e.columns,(r,e)=>{r(n,{"--Grid-columns":e})}),n},x=({theme:r,ownerState:e})=>{if(!e.container)return{};let n={};return g(r.breakpoints,e.rowSpacing,(e,i)=>{var a;e(n,{"--Grid-rowSpacing":"string"==typeof i?i:null==(a=r.spacing)?void 0:a.call(r,i)})}),n},S=({theme:r,ownerState:e})=>{if(!e.container)return{};let n={};return g(r.breakpoints,e.columnSpacing,(e,i)=>{var a;e(n,{"--Grid-columnSpacing":"string"==typeof i?i:null==(a=r.spacing)?void 0:a.call(r,i)})}),n},G=({theme:r,ownerState:e})=>{if(!e.container)return{};let n={};return g(r.breakpoints,e.direction,(r,e)=>{r(n,{flexDirection:e})}),n},h=({ownerState:r})=>(0,i.Z)({minWidth:0,boxSizing:"border-box"},r.container?(0,i.Z)({display:"flex",flexWrap:"wrap"},r.wrap&&"wrap"!==r.wrap&&{flexWrap:r.wrap},{margin:"calc(var(--Grid-rowSpacing) / -2) calc(var(--Grid-columnSpacing) / -2)"},r.disableEqualOverflow&&{margin:"calc(var(--Grid-rowSpacing) * -1) 0px 0px calc(var(--Grid-columnSpacing) * -1)"},r.nested?(0,i.Z)({padding:"calc(var(--Grid-nested-rowSpacing) / 2) calc(var(--Grid-nested-columnSpacing) / 2)"},(r.disableEqualOverflow||r.parentDisableEqualOverflow)&&{padding:"calc(var(--Grid-nested-rowSpacing)) 0px 0px calc(var(--Grid-nested-columnSpacing))"}):{"--Grid-nested-rowSpacing":"var(--Grid-rowSpacing)","--Grid-nested-columnSpacing":"var(--Grid-columnSpacing)"}):(0,i.Z)({padding:"calc(var(--Grid-rowSpacing) / 2) calc(var(--Grid-columnSpacing) / 2)"},r.disableEqualOverflow&&{padding:"calc(var(--Grid-rowSpacing)) 0px 0px calc(var(--Grid-columnSpacing))"})),O=r=>{let e=[];return Object.entries(r).forEach(([r,n])=>{!1!==n&&void 0!==n&&e.push(`grid-${r}-${String(n)}`)}),e},y=(r,e="xs")=>{function n(r){return void 0!==r&&("string"==typeof r&&!Number.isNaN(Number(r))||"number"==typeof r&&r>0)}if(n(r))return[`spacing-${e}-${String(r)}`];if("object"==typeof r&&!Array.isArray(r)){let i=[];return Object.entries(r).forEach(([r,e])=>{n(e)&&i.push(`spacing-${r}-${String(e)}`)}),i}return[]},k=r=>void 0===r?[]:"object"==typeof r?Object.entries(r).map(([r,e])=>`direction-${r}-${e}`):[`direction-xs-${String(r)}`];var Z=n(85893);let j=["className","columns","container","component","direction","wrap","spacing","rowSpacing","columnSpacing","disableEqualOverflow"],E=(0,f.Z)(),$=(0,s.Z)("div",{name:"MuiGrid",slot:"Root",overridesResolver:(r,e)=>e.root});function N(r){return(0,u.Z)({props:r,name:"MuiGrid",defaultTheme:E})}var _=n(90948),q=n(71657);let C=function(r={}){let{createStyledComponent:e=$,useThemeProps:n=N,componentName:s="MuiGrid"}=r,u=t.createContext(!1),f=t.createContext(void 0),v=(r,e)=>{let{container:n,direction:i,spacing:a,wrap:t,gridSize:o}=r,u={root:["root",n&&"container","wrap"!==t&&`wrap-xs-${String(t)}`,...k(i),...O(o),...n?y(a,e.breakpoints.keys[0]):[]]};return(0,l.Z)(u,r=>(0,c.Z)(s,r),{})},g=e(b,S,x,m,G,h,w),E=t.forwardRef(function(r,e){var l,c,s,m,w,b,x,S;let G=(0,d.Z)(),h=n(r),O=(0,p.Z)(h),y=t.useContext(u),k=t.useContext(f),{className:E,columns:$=12,container:N=!1,component:_="div",direction:q="row",wrap:C="wrap",spacing:P=0,rowSpacing:M=P,columnSpacing:W=P,disableEqualOverflow:D}=O,L=(0,a.Z)(O,j),R=D;y&&void 0!==D&&(R=r.disableEqualOverflow);let A={},B={},T={};Object.entries(L).forEach(([r,e])=>{void 0!==G.breakpoints.values[r]?A[r]=e:void 0!==G.breakpoints.values[r.replace("Offset","")]?B[r.replace("Offset","")]=e:T[r]=e});let z=null!=(l=r.columns)?l:y?void 0:$,X=null!=(c=r.spacing)?c:y?void 0:P,F=null!=(s=null!=(m=r.rowSpacing)?m:r.spacing)?s:y?void 0:M,H=null!=(w=null!=(b=r.columnSpacing)?b:r.spacing)?w:y?void 0:W,I=(0,i.Z)({},O,{nested:y,columns:z,container:N,direction:q,wrap:C,spacing:X,rowSpacing:F,columnSpacing:H,gridSize:A,gridOffset:B,disableEqualOverflow:null!=(x=null!=(S=R)?S:k)&&x,parentDisableEqualOverflow:k}),J=v(I,G),K=(0,Z.jsx)(g,(0,i.Z)({ref:e,as:_,ownerState:I,className:(0,o.Z)(J.root,E)},T));return y||(K=(0,Z.jsx)(u.Provider,{value:!0,children:K})),void 0!==R&&R!==(null!=k&&k)&&(K=(0,Z.jsx)(f.Provider,{value:R,children:K})),K});return E}({createStyledComponent:(0,_.ZP)("div",{name:"MuiGrid2",overridesResolver:(r,e)=>e.root}),componentName:"MuiGrid2",useThemeProps:r=>(0,q.Z)({props:r,name:"MuiGrid2"})});var P=C},75557:function(r,e,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/",function(){return n(98287)}])},27623:function(r,e,n){"use strict";n.r(e);var i=n(85893);n(9008);var a=n(87357),t=n(15861),o=n(81426),l=n(11791),c=function(){return(0,i.jsx)(i.Fragment,{children:(0,i.jsxs)(a.Z,{children:[(0,i.jsx)(t.Z,{variant:"h4",sx:{mb:4},children:"Overview"}),(0,i.jsx)(o.Z,{container:!0,disableEqualOverflow:!0,spacing:{xs:3,lg:4},children:(0,i.jsx)(o.Z,{xs:12,children:(0,i.jsx)(l.Z,{sx:{p:2},children:"HELLO WORLD"})})})]})})};c.defaultProps={title:"Dashboard"},e.default=c},98287:function(r,e,n){"use strict";n.r(e),n.d(e,{default:function(){return i.default}});var i=n(27623)}},function(r){r.O(0,[774,888,179],function(){return r(r.s=75557)}),_N_E=r.O()}]);