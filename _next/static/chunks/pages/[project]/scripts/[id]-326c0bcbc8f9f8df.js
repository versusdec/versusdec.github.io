(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[651],{79364:function(e,n,t){(window.__NEXT_P=window.__NEXT_P||[]).push(["/[project]/scripts/[id]",function(){return t(85422)}])},61124:function(e,n,t){"use strict";t.d(n,{I:function(){return m}});var a=t(26042),i=t(69396),r=t(99534),l=t(828),s=t(85893),o=t(50135),c=t(16829),u=t(67294),d=t(66660),h=(0,c.Z)(o.Z)({"& .MuiFormHelperText-root.Mui-error":{position:"absolute",top:"100%"},"input::-webkit-outer-spin-button, input::-webkit-inner-spin-button":{WebkitAppearance:"none"},"& .MuiSelect-select":{paddingTop:21}}),m=function(e){var n=e.children,t=e.type,o=(0,r.Z)(e,["children","type"]),c=(0,l.Z)((0,u.useState)(o.value||""),2),m=c[0],x=c[1];(0,u.useEffect)(function(){x(o.value)},[o.value]);var f=function(e){var n;null===(n=o.onChange)||void 0===n||n.call(o,e)};return"color"===t?(0,s.jsx)(d.O,(0,i.Z)((0,a.Z)({},o),{type:"text"})):(0,s.jsx)(h,(0,i.Z)((0,a.Z)({},o),{type:t,value:m,onChange:function(e){x(e.target.value),o.select&&f(e)},onBlur:function(e){var n;o.select||f(e),null===(n=o.handleBlur)||void 0===n||n.call(o,e)},children:n}))}},85422:function(e,n,t){"use strict";t.r(n),t.d(n,{default:function(){return eM}});var a,i=t(47568),r=t(26042),l=t(828),s=t(70655),o=t(85893),c=t(67294),u=t(41664),d=t.n(u),h=t(30136),m=t(26447),x=t(23795),f=t(53219),v=t(15861),Z=t(87918),p=t(88409),b=t(40044),g=t(67720),j=t(69396),C=t(99534),k=t(66242),w=t(44267),y=t(18972),S=t(63366),_=t(87462),I=t(86010),N=t(94780),T=t(74423),P=t(98216),R=t(90948),A=t(71657),E=t(1588),L=t(34867);function W(e){return(0,L.Z)("MuiFormControlLabel",e)}let D=(0,E.Z)("MuiFormControlLabel",["root","labelPlacementStart","labelPlacementTop","labelPlacementBottom","disabled","label","error"]);var M=t(15704);let F=["checked","className","componentsProps","control","disabled","disableTypography","inputRef","label","labelPlacement","name","onChange","slotProps","value"],q=e=>{let{classes:n,disabled:t,labelPlacement:a,error:i}=e,r={root:["root",t&&"disabled",`labelPlacement${(0,P.Z)(a)}`,i&&"error"],label:["label",t&&"disabled"]};return(0,N.Z)(r,W,n)},B=(0,R.ZP)("label",{name:"MuiFormControlLabel",slot:"Root",overridesResolver:(e,n)=>{let{ownerState:t}=e;return[{[`& .${D.label}`]:n.label},n.root,n[`labelPlacement${(0,P.Z)(t.labelPlacement)}`]]}})(({theme:e,ownerState:n})=>(0,_.Z)({display:"inline-flex",alignItems:"center",cursor:"pointer",verticalAlign:"middle",WebkitTapHighlightColor:"transparent",marginLeft:-11,marginRight:16,[`&.${D.disabled}`]:{cursor:"default"}},"start"===n.labelPlacement&&{flexDirection:"row-reverse",marginLeft:16,marginRight:-11},"top"===n.labelPlacement&&{flexDirection:"column-reverse",marginLeft:16},"bottom"===n.labelPlacement&&{flexDirection:"column",marginLeft:16},{[`& .${D.label}`]:{[`&.${D.disabled}`]:{color:(e.vars||e).palette.text.disabled}}})),O=c.forwardRef(function(e,n){var t;let a=(0,A.Z)({props:e,name:"MuiFormControlLabel"}),{className:i,componentsProps:r={},control:l,disabled:s,disableTypography:u,label:d,labelPlacement:h="end",slotProps:m={}}=a,x=(0,S.Z)(a,F),f=(0,T.Z)(),Z=s;void 0===Z&&void 0!==l.props.disabled&&(Z=l.props.disabled),void 0===Z&&f&&(Z=f.disabled);let p={disabled:Z};["checked","name","onChange","value","inputRef"].forEach(e=>{void 0===l.props[e]&&void 0!==a[e]&&(p[e]=a[e])});let b=(0,M.Z)({props:a,muiFormControl:f,states:["error"]}),g=(0,_.Z)({},a,{disabled:Z,labelPlacement:h,error:b.error}),j=q(g),C=null!=(t=m.typography)?t:r.typography,k=d;return null==k||k.type===v.Z||u||(k=(0,o.jsx)(v.Z,(0,_.Z)({component:"span"},C,{className:(0,I.Z)(j.label,null==C?void 0:C.className),children:k}))),(0,o.jsxs)(B,(0,_.Z)({className:(0,I.Z)(j.root,i),ownerState:g,ref:n},x,{children:[c.cloneElement(l,p),k]}))});var z=t(85071),$=t(83321),J=t(61124),V=function(e){e.onSubmit;var n=e.onChange,t=(e.isNew,e.userRole,e.item),a=e.formik,i=e.changeTab,s=(0,C.Z)(e,["onSubmit","onChange","isNew","userRole","item","formik","changeTab"]),u=(0,l.Z)((0,c.useState)(!1),2),d=u[0],h=u[1];return(0,o.jsx)(m.Z,(0,j.Z)((0,r.Z)({spacing:4},s),{children:(0,o.jsx)(k.Z,{children:(0,o.jsx)(w.Z,{children:(0,o.jsx)(m.Z,{spacing:3,children:(0,o.jsxs)(m.Z,{spacing:3,children:[(0,o.jsx)(J.I,{fullWidth:!0,label:"Name",name:"name",type:"text",error:!!(a.touched.name&&a.errors.name),helperText:a.touched.name&&a.errors.name,onBlur:a.handleBlur,onChange:function(e){a.handleChange(e),n({name:e.target.value})},value:a.values.name}),(0,o.jsxs)(J.I,{fullWidth:!0,label:"Status",name:"status",onBlur:a.handleBlur,onChange:function(e){a.handleChange(e),n({status:e.target.value})},select:!0,value:a.values.status||"active",children:[(0,o.jsx)(y.Z,{value:"active",children:"Active"},"active"),(0,o.jsx)(y.Z,{value:"archived",children:"Archived"},"archived")]}),(0,o.jsx)(m.Z,{direction:"row",children:(0,o.jsx)(O,{control:(0,o.jsx)(z.Z,{checked:t.is_default,onChange:function(e){n({is_default:e.target.checked})}}),label:"Is default"})}),(0,o.jsx)(m.Z,{direction:"row",justifyContent:"end",children:(0,o.jsx)($.Z,{size:"large",type:"submit",variant:"contained",disabled:d,onClick:function(e){h(!0),setTimeout(function(){h(!1)},500),a.handleSubmit(e),a.errors.name||a.isValid||i(e,"statuses")},children:"Save"})})]})})})})}))},X=t(36305),H=t(87357),G=t(93946),Q=t(34386),K=t(11791),U=(0,t(82066).Z)((0,o.jsx)("path",{d:"M12 2C6.47 2 2 6.47 2 12s4.47 10 10 10 10-4.47 10-10S17.53 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.59-13L12 10.59 8.41 7 7 8.41 10.59 12 7 15.59 8.41 17 12 13.41 15.59 17 17 15.59 13.41 12 17 8.41z"}),"CancelOutlined"),Y=(0,c.createContext)(null),ee=function(e){var n=e.step_id,t=e.answer,a=e.index,i=e.stepIndex,l=(0,C.Z)(e,["step_id","answer","index","stepIndex"]),s=(0,c.useContext)(Y),u=s.steps,d=s.onChange,h=(0,c.useCallback)(function(e){var n=e.name,t=e.value,r=u[i].next;r[a][n]=t,d({index:i,name:"next",value:r})},[u,a,d,i]),x=(0,c.useCallback)(function(e){var n=(0,X.Z)(u[i].next);n.splice(e,1),d({index:i,name:"next",value:n})},[u,d,i]);return(0,o.jsxs)(m.Z,(0,j.Z)((0,r.Z)({spacing:2,direction:{sm:"column",md:"row"},alignItems:"center"},l),{children:[(0,o.jsx)(J.I,{name:"answer",label:"Answer",value:t,onChange:function(e){h({name:e.target.name,value:e.target.value})}}),(0,o.jsx)(J.I,{fullWidth:!0,label:"Next step",name:"step_id",onChange:function(e){h({name:e.target.name,value:e.target.value})},select:!0,value:n,children:u.map(function(e){return(0,o.jsx)(y.Z,{value:e.id,children:""===e.title?"Step #".concat(e.id):e.title},e.id)})}),(0,o.jsx)(H.Z,{sx:{flexShrink:0},children:(0,o.jsx)(G.Z,{disabled:1===u[i].next.length,onClick:function(){x(a)},children:(0,o.jsx)(Q.Z,{title:"Remove Answer",children:(0,o.jsx)(U,{color:1===u[i].next.length?"":"error"})})})})]}))},en=function(e){var n=e.id,t=e.title,a=e.text,i=e.field_id,l=e.next,s=e.index,u=e.onDelete,d=(0,C.Z)(e,["id","title","text","field_id","next","index","onDelete"]),h=(0,c.useContext)(Y),x=h.fields,f=h.steps,Z=h.onChange,p=(0,c.useCallback)(function(){var e=(0,X.Z)(f[s].next);e.push({step_id:1,answer:""}),Z({index:s,name:"next",value:e})},[f,s,Z]);return(0,o.jsx)(K.Z,(0,j.Z)((0,r.Z)({sx:{p:2},elevation:5},d),{children:(0,o.jsxs)(m.Z,{spacing:4,direction:{xs:"column",md:"row"},children:[(0,o.jsxs)(m.Z,{spacing:3,flexGrow:1,children:[(0,o.jsxs)(m.Z,{spacing:2,direction:"row",alignItems:"center",justifyContent:"space-between",children:[(0,o.jsxs)(v.Z,{variant:"subtitle1",children:["Step #",s+1]}),(0,o.jsx)($.Z,{variant:"outlined",disabled:1===f.length,onClick:function(){u(s)},children:"Delete"})]}),(0,o.jsx)(J.I,{fullWidth:!0,name:"title",label:"Name",value:t,onChange:function(e){Z({index:s,name:e.target.name,value:e.target.value})}}),(0,o.jsx)(J.I,{fullWidth:!0,multiline:!0,maxRows:5,name:"text",label:"Text",value:a,onChange:function(e){Z({index:s,name:e.target.name,value:e.target.value})}}),(0,o.jsxs)(J.I,{fullWidth:!0,label:"Qualification",name:"field_id",onChange:function(e){Z({index:s,name:e.target.name,value:e.target.value})},select:!0,value:i,children:[(0,o.jsx)(y.Z,{value:"",children:"Not selected"},"0"),x.map(function(e){return(0,o.jsx)(y.Z,{value:e.id,children:e.label},e.id)})]})]}),(0,o.jsxs)(m.Z,{sx:{width:{sm:"100%",md:"50%",xl:500}},spacing:3,children:[(0,o.jsxs)(m.Z,{spacing:2,direction:"row",alignItems:"center",justifyContent:"space-between",children:[(0,o.jsx)(v.Z,{variant:"subtitle1",children:"Answer options"}),(0,o.jsx)($.Z,{variant:"outlined",onClick:function(){p()},children:"Add"})]}),l.map(function(e,n){return(0,c.createElement)(ee,(0,j.Z)((0,r.Z)({},e),{stepIndex:s,index:n,key:n}))})]})]})}),n)},et=function(e){e.onSubmit;var n=e.onChange,t=(e.isNew,e.userRole,e.item),a=e.fields,i=e.changeTab,s=e.formik,u=e.initialStep,d=(0,C.Z)(e,["onSubmit","onChange","isNew","userRole","item","fields","changeTab","formik","initialStep"]),h=(0,l.Z)((0,c.useState)(!1),2),x=h[0],f=h[1],v=(0,l.Z)((0,c.useState)(t.steps),2),Z=v[0],p=v[1];(0,c.useEffect)(function(){n({steps:Z})},[Z,n]);var b=(0,c.useCallback)(function(e){var n=e.index,t=e.name,a=e.value,i=JSON.parse(JSON.stringify(Z));i[n][t]=a,p(i)},[Z]),g=(0,c.useCallback)(function(e){var n=(0,X.Z)(Z);n.splice(e,1),p(n)},[Z]),y=(0,c.useCallback)(function(){var e=(0,j.Z)((0,r.Z)({},u),{id:Z[Z.length-1].id+1});p(function(n){return(0,X.Z)(n).concat([e])})},[Z,u]);return(0,o.jsx)(Y.Provider,{value:{fields:a,steps:Z,onChange:b},children:(0,o.jsx)(m.Z,(0,j.Z)((0,r.Z)({spacing:4},d),{children:(0,o.jsx)(k.Z,{children:(0,o.jsx)(w.Z,{children:(0,o.jsxs)(m.Z,{spacing:3,children:[(0,o.jsx)(m.Z,{direction:"row",justifyContent:"flex-end",children:(0,o.jsx)($.Z,{variant:"contained",onClick:y,children:"Add step"})}),Z.map(function(e,n){return(0,c.createElement)(en,(0,j.Z)((0,r.Z)({},e),{index:n,key:n,onDelete:g}))}),(0,o.jsx)(m.Z,{direction:"row",justifyContent:"flex-end",children:(0,o.jsx)($.Z,{variant:"contained",onClick:y,children:"Add step"})}),(0,o.jsx)(m.Z,{direction:"row",justifyContent:"end",children:(0,o.jsx)($.Z,{size:"large",type:"submit",variant:"contained",disabled:x,onClick:function(e){f(!0),setTimeout(function(){f(!1)},500),s.handleSubmit(e),s.errors.name?i(e,"common"):s.errors.statuses&&i(e,"statuses")},children:"Save"})})]})})})}))})},ea=t(83720),ei=t(59709),er=function(e){var n=(0,ea.I0)(),t=(0,ea.v9)(function(e){return e.scripts.get}),a=t.data,i=t.loading,r=t.error,l=(0,c.useCallback)(function(){e&&n((0,ei._B)(e))},[e,n]);return(0,c.useEffect)(function(){l()},[l,e]),{data:a,loading:i,error:r}},el=t(11163),es=t(92951),eo=t(4056),ec=t(86501),eu=t(39332),ed=t(45697),eh=t.n(ed),em=t(93041),ex=t(58241),ef=function(e){var n=e.children,t=(0,l.Z)((0,c.useState)(!1),2),a=t[0],i=t[1],r=(0,eu.useRouter)(),s=(0,es.P)().data,u=(0,ex.a)(null==s?void 0:s.role_id),d=(0,c.useCallback)(function(){s&&(u.length||0===s.role_id)&&(0===s.role_id||u.includes("projects.scripts.write")?i(!0):r.replace(em.H.denied))},[s,u,r]);return((0,c.useEffect)(function(){d()},[s,u,d]),a)?(0,o.jsx)(o.Fragment,{children:n}):null};ef.propTypes={children:eh().node};var ev=t(74231),eZ=t(82175),ep=t(63345),eb=t(5371),eg=function(e){var n=(0,ea.I0)(),t=(0,ea.v9)(function(e){return e.fields.list}),a=t.data,i=t.loading,r=t.error,l=(0,c.useCallback)(function(e){e.q?n((0,eb.aP)(e)):n((0,eb.DS)(e))},[n]);return(0,c.useEffect)(function(){l(e)},[n,e,l]),{data:a,loading:i,error:r}},ej=t(7906),eC=t(53184),ek=t(68509),ew=t(98102),ey=t(295),eS=t(94054),e_=t(3340),eI=t(18360),eN=t(57709),eT=t(59334),eP=t(55136),eR=t(10216),eA=function(e){var n=e.item,t=e.changeTab,a=e.formik,i=e.onChange,s=e.initialStatus,u=(0,C.Z)(e,["item","changeTab","formik","onChange","initialStatus"]),d=(0,l.Z)((0,c.useState)(!1),2),h=d[0],x=d[1],v=(0,l.Z)((0,c.useState)(n.statuses),2),Z=v[0],p=v[1];(0,c.useEffect)(function(){i({statuses:Z})},[Z,i]);var b=(0,c.useCallback)(function(){p(function(e){return(0,X.Z)(e).concat([s])})},[s]),g=(0,c.useCallback)(function(e){var n=(0,X.Z)(Z);n.splice(e,1),p(n)},[Z]),S=(0,c.useCallback)(function(e){var n=e.name,t=e.value,a=e.index,i=JSON.parse(JSON.stringify(Z));i[a][n]=t,p(i)},[Z]);return(0,c.useEffect)(function(){i({statuses:Z})},[Z,i]),(0,o.jsxs)(k.Z,{children:[(0,o.jsxs)(H.Z,(0,j.Z)((0,r.Z)({sx:{position:"relative"}},u),{children:[(0,o.jsx)(m.Z,{alignItems:"center",justifyContent:"flex-end",direction:"row",spacing:3,sx:{p:3},children:(0,o.jsx)($.Z,{onClick:b,startIcon:(0,o.jsx)(f.Z,{children:(0,o.jsx)(eR.Z,{})}),variant:"contained",children:"Add"})}),(0,o.jsx)(eP.L,{children:(0,o.jsx)(ej.Z,{sx:{minWidth:700},children:(0,o.jsxs)(o.Fragment,{children:[(0,o.jsx)(eC.Z,{children:(0,o.jsxs)(ek.Z,{children:[(0,o.jsx)(ew.Z,{children:"Label"}),(0,o.jsx)(ew.Z,{children:"Name"}),(0,o.jsx)(ew.Z,{children:"Actions"}),(0,o.jsx)(ew.Z,{})]})}),(0,o.jsx)(ey.Z,{children:Z.map(function(e,n){var t,i,r,l,s,c,u,d,h,m,x,v,b,j,C,k;return(0,o.jsxs)(ek.Z,{hover:!0,children:[(0,o.jsx)(ew.Z,{children:(0,o.jsx)(J.I,{fullWidth:!0,label:"Label",name:"statuses.".concat(n,".label"),type:"text",error:!!((null===(t=a.touched.statuses)||void 0===t?void 0:null===(i=t[n])||void 0===i?void 0:i.label)&&(null===(r=a.errors.statuses)||void 0===r?void 0:null===(l=r[n])||void 0===l?void 0:l.label)),helperText:(null===(s=a.touched.statuses)||void 0===s?void 0:null===(c=s[n])||void 0===c?void 0:c.label)&&(null===(u=a.errors.statuses)||void 0===u?void 0:null===(d=u[n])||void 0===d?void 0:d.label),onChange:function(e){a.handleChange(e),S({name:"label",value:e.target.value,index:n})},value:e.label})}),(0,o.jsx)(ew.Z,{children:(0,o.jsx)(J.I,{fullWidth:!0,label:"Name",name:"statuses.".concat(n,".name"),type:"text",error:!!((null===(h=a.touched.statuses)||void 0===h?void 0:null===(m=h[n])||void 0===m?void 0:m.name)&&(null===(x=a.errors.statuses)||void 0===x?void 0:null===(v=x[n])||void 0===v?void 0:v.name)),helperText:(null===(b=a.touched.statuses)||void 0===b?void 0:null===(j=b[n])||void 0===j?void 0:j.name)&&(null===(C=a.errors.statuses)||void 0===C?void 0:null===(k=C[n])||void 0===k?void 0:k.name),onChange:function(e){a.handleChange(e),S({name:"name",value:e.target.value,index:n})},value:e.name})}),(0,o.jsx)(ew.Z,{children:e&&(0,o.jsxs)(eS.Z,{children:[(0,o.jsx)(e_.Z,{id:"actions-label",children:"Actions"}),(0,o.jsxs)(eI.Z,{multiple:!0,sx:{maxWidth:300},value:Z[n].actions,label:"test",labelId:"actions-label",onChange:function(e){var t=(0,X.Z)(Z),a=t[n].actions.findIndex(function(n){return n.name===e.target.value[e.target.value.length-1].name});a>=0?t[n].actions.splice(a,1):t[n].actions=e.target.value,p(t)},input:(0,o.jsx)(eN.Z,{fullWidth:!0}),renderValue:function(e){return e.map(function(e){return e.name}).join(", ")},children:[(0,o.jsxs)(y.Z,{value:{name:"assign_recall"},children:[(0,o.jsx)(z.Z,{checked:Z[n].actions.filter(function(e){return"assign_recall"===e.name}).length>0}),(0,o.jsx)(eT.Z,{primary:"assign_recall"})]},"assign_recall"),(0,o.jsxs)(y.Z,{value:{name:"add_tag"},children:[(0,o.jsx)(z.Z,{checked:Z[n].actions.filter(function(e){return"add_tag"===e.name}).length>0}),(0,o.jsx)(eT.Z,{primary:"add_tag"})]},"add_tag"),(0,o.jsxs)(y.Z,{value:{name:"add_blacklist"},children:[(0,o.jsx)(z.Z,{checked:Z[n].actions.filter(function(e){return"add_blacklist"===e.name}).length>0}),(0,o.jsx)(eT.Z,{primary:"add_blacklist"})]},"add_blacklist"),(0,o.jsxs)(y.Z,{value:{name:"send_sms"},children:[(0,o.jsx)(z.Z,{checked:Z[n].actions.filter(function(e){return"send_sms"===e.name}).length>0}),(0,o.jsx)(eT.Z,{primary:"send_sms"})]},"send_sms")]})]})}),(0,o.jsx)(ew.Z,{align:"right",children:(0,o.jsx)(G.Z,{disabled:1===Z.length,onClick:function(){g(n)},children:(0,o.jsx)(Q.Z,{title:"Remove",children:(0,o.jsx)(f.Z,{color:1===Z.length?"":"error",children:(0,o.jsx)(U,{})})})})})]},n)})})]})})})]})),(0,o.jsx)(w.Z,{children:(0,o.jsx)(m.Z,{direction:"row",justifyContent:"end",children:(0,o.jsx)($.Z,{size:"large",type:"submit",variant:"contained",disabled:h,onClick:function(e){x(!0),setTimeout(function(){x(!1)},500),a.handleSubmit(e),a.errors.statuses||a.isValid||t(e,"common")},children:"Save"})})})]})},eE=[{label:"Common",value:"common"},{label:"Steps",value:"steps"},{label:"Statuses",value:"statuses"}],eL={title:"",text:"",id:1,next:[{step_id:1,answer:""}],field_id:""},eW={label:"",name:"",actions:[{name:"assign_recall"}]},eD=(a=function(){var e=(0,ea.I0)(),n=(0,el.useRouter)();(0,es.P)();var t=(0,l.Z)((0,c.useState)("common"),2),a=t[0],u=t[1],j=+n.query.project,C=+n.query.id,k=isNaN(C),w=er(C).data,y=eg((0,c.useMemo)(function(){return{project_id:j,limit:1e3}},[j])),S=(0,l.Z)((0,c.useState)(null!=w?w:{project_id:j,name:"",is_default:!1,steps:[eL],statuses:[eW],status:"active"}),2),_=S[0],I=S[1];(0,c.useEffect)(function(){return w&&I(w),function(){e(ei.Nw.fillScript(null))}},[e,w,C]);var N=(0,c.useCallback)(function(e,n){u(n)},[]),T=(0,c.useCallback)(function(e){I(function(n){return(0,r.Z)({},n,e)})},[]),P=(0,c.useCallback)((0,i.Z)(function(){var e,t,a;return(0,s.__generator)(this,function(i){switch(i.label){case 0:return i.trys.push([0,7,,8]),[4,eo.h.scripts[k?"add":"update"](_)];case 1:if(t=(e=i.sent()).result,a=e.error,!(t&&!a))return[3,5];if(!k)return[3,3];return ec.ZP.success("Script has been created"),[4,(0,ep.D)(500)];case 2:return i.sent(),n.replace("/".concat(j,"/scripts")),[3,4];case 3:ec.ZP.success("Script has been updated"),i.label=4;case 4:return[3,6];case 5:ec.ZP.error("Something went wrong"),i.label=6;case 6:return[3,8];case 7:return console.log(i.sent()),[3,8];case 8:return[2]}})}),[_,k,j,n]),R=(0,c.useMemo)(function(){return _},[_]),A=ev.Ry({name:ev.Z_().max(255).required("Name is required"),status:ev.Z_().oneOf(["active","archived"]),statuses:ev.IX().of(ev.Ry().shape({name:ev.Z_().required("Name required"),label:ev.Z_().required("Label required"),actions:ev.IX().of(ev.Ry().shape({name:ev.Z_()}))}))}),E=(0,eZ.TA)({enableReinitialize:!0,initialValues:R,validationSchema:A,errors:{},onSubmit:function(e,n){try{P()}catch(t){console.error(t),n.setStatus({success:!1}),n.setErrors({submit:t.message}),n.setSubmitting(!1)}}});return(0,o.jsx)(o.Fragment,{children:(0,o.jsxs)(o.Fragment,{children:[(0,o.jsxs)(m.Z,{spacing:4,mb:3,children:[(0,o.jsx)("div",{children:(0,o.jsxs)(x.Z,{color:"text.primary",component:d(),href:"/".concat(j,"/scripts"),sx:{alignItems:"center",display:"inline-flex"},underline:"hover",children:[(0,o.jsx)(f.Z,{sx:{mr:1},children:(0,o.jsx)(h.Z,{})}),(0,o.jsx)(v.Z,{variant:"subtitle2",children:"Scripts"})]})}),(0,o.jsx)(m.Z,{alignItems:"flex-start",direction:{xs:"column",md:"row"},justifyContent:"space-between",spacing:4,children:(0,o.jsxs)(m.Z,{children:[(0,o.jsxs)(v.Z,{variant:"h4",children:[k&&"Add script",!k&&_&&_.name]}),!k&&_&&(0,o.jsx)(o.Fragment,{children:(0,o.jsxs)(m.Z,{alignItems:"center",direction:"row",spacing:1,children:[(0,o.jsx)(v.Z,{variant:"subtitle2",children:"ID:"}),(0,o.jsx)(Z.Z,{label:_.id,size:"small"})]})})]})}),(0,o.jsxs)("div",{children:[(0,o.jsx)(p.Z,{indicatorColor:"primary",onChange:N,scrollButtons:"auto",sx:{mt:3},textColor:"primary",value:a,variant:"scrollable",children:eE.map(function(e){return(0,o.jsx)(b.Z,{label:e.label,value:e.value},e.value)})}),(0,o.jsx)(g.Z,{})]})]}),"common"===a&&(0,o.jsx)("div",{children:(!k&&_.id||k)&&(0,o.jsx)(V,{item:_,onSubmit:P,onChange:T,changeTab:N,formik:E})}),"steps"===a&&y.data&&(0,o.jsx)(et,{onSubmit:P,item:_,fields:Array.isArray(y.data.items)?y.data.items:[],formik:E,changeTab:N,initialStep:eL,onChange:T}),"statuses"===a&&(0,o.jsx)(eA,{onSubmit:P,item:_,formik:E,changeTab:N,initialStatus:eW,onChange:T})]})})},function(e){return(0,o.jsx)(ef,{children:(0,o.jsx)(a,(0,r.Z)({},e))})}),eM=eD;eD.defaultProps={title:"Scripts"}},63345:function(e,n,t){"use strict";t.d(n,{D:function(){return a}});var a=function(e){return new Promise(function(n){return setTimeout(n,e)})}},36305:function(e,n,t){"use strict";t.d(n,{Z:function(){return l}});var a=t(20943),i=t(13375),r=t(91566);function l(e){return function(e){if(Array.isArray(e))return(0,a.Z)(e)}(e)||(0,i.Z)(e)||(0,r.Z)(e)||function(){throw TypeError("Invalid attempt to spread non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}},10216:function(e,n,t){"use strict";var a=t(87462);t(67294);var i=t(85893);n.Z=function(e){return(0,i.jsx)("svg",(0,a.Z)({xmlns:"http://www.w3.org/2000/svg",width:24,height:24,fill:"none"},e,{children:(0,i.jsx)("path",{stroke:"currentColor",strokeLinecap:"round",strokeLinejoin:"round",strokeWidth:2,d:"M12 5v14m-7-7h14"})}))}}},function(e){e.O(0,[235,105,290,918,984,774,567,179],function(){return e(e.s=79364)}),_N_E=e.O()}]);