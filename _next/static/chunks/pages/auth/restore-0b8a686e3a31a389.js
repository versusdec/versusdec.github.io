(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[732],{98757:function(e,r,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/auth/restore",function(){return n(77960)}])},61124:function(e,r,n){"use strict";n.d(r,{I:function(){return h}});var t=n(26042),o=n(69396),s=n(99534),a=n(828),i=n(85893),l=n(50135),u=n(16829),d=n(67294),c=n(66660),p=(0,u.Z)(l.Z)({"& .MuiFormHelperText-root.Mui-error":{position:"absolute",top:"100%"},"input::-webkit-outer-spin-button, input::-webkit-inner-spin-button":{WebkitAppearance:"none"},"& .MuiSelect-select":{paddingTop:21}}),h=function(e){var r=e.children,n=e.type,l=(0,s.Z)(e,["children","type"]),u=(0,a.Z)((0,d.useState)(l.value||""),2),h=u[0],f=u[1];(0,d.useEffect)(function(){f(l.value)},[l.value]);var x=function(e){var r;null===(r=l.onChange)||void 0===r||r.call(l,e)};return"color"===n?(0,i.jsx)(c.O,(0,o.Z)((0,t.Z)({},l),{type:"text"})):(0,i.jsx)(p,(0,o.Z)((0,t.Z)({},l),{type:n,value:h,onChange:function(e){f(e.target.value),l.select&&x(e)},onBlur:function(e){var r;l.select||x(e),null===(r=l.handleBlur)||void 0===r||r.call(l,e)},children:r}))}},62077:function(e,r,n){"use strict";n.d(r,{a:function(){return l}});var t=n(26042),o=n(99534),s=n(85893),a=n(87357),i=n(98456),l=function(e){var r=e.backdrop,n=e.sx;(0,o.Z)(e,["backdrop","sx"]);var l=(0,s.jsx)(a.Z,{sx:(0,t.Z)({position:"absolute",bottom:0,top:0,left:0,right:0,bgcolor:r?"rgb(0 0 1 / 30%)":"transparent",zIndex:100,display:"flex",justifyContent:"center",alignItems:"center"},n),children:(0,s.jsx)(i.Z,{disableShrink:!0,color:"primary"})});return(0,s.jsx)(s.Fragment,{children:l})}},95993:function(e,r,n){"use strict";n.d(r,{A:function(){return l}});var t=n(85893),o=n(45697),s=n.n(o),a=n(87357),i=n(76515),l=function(e){var r,n=e.children,o=e.title?e.title:null!==(r=e.children)&&void 0!==r&&!!r.props.title&&e.children.props.title;return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(i.Z,{title:o}),(0,t.jsxs)(a.Z,{sx:{backgroundColor:"background.default",display:"flex",flex:"1 1 auto",flexDirection:{xs:"column-reverse",md:"row"}},children:[(0,t.jsx)(a.Z,{sx:{alignItems:"center",backgroundColor:"#222223",backgroundImage:'url("/assets/auth_bg.svg")',backgroundPosition:"top center",backgroundRepeat:"no-repeat",backgroundSize:"cover",color:"common.white",display:"flex",flex:{xs:"0 0 auto",md:"1 1 auto"},justifyContent:"center",p:{xs:4,md:8}},children:(0,t.jsx)("img",{src:"/assets/logo.svg",alt:"",style:{maxWidth:"600px"}})}),(0,t.jsx)(a.Z,{sx:{backgroundColor:"background.paper",display:"flex",flex:{xs:"1 1 auto",md:"0 0 auto"},flexDirection:"column",justifyContent:{md:"center"},maxWidth:"100%",p:{xs:4,md:8},width:{md:500}},children:(0,t.jsx)("div",{children:n})})]})]})};l.propTypes={children:s().node}},77960:function(e,r,n){"use strict";n.r(r);var t=n(85893),o=n(39332),s=n(41664),a=n.n(s),i=n(74231),l=n(82175),u=n(26447),d=n(15861),c=n(83321),p=n(87357),h=n(23795),f=n(95993),x=n(93041),m=n(62077),g=n(61124),v=n(17288),w=n(86501),b=n(67294),j={password:"",password_confirm:"",token:""},Z=i.Ry({password:i.Z_().min(8).max(255).required("Password is required"),password_confirm:i.Z_().oneOf([i.iH("password"),null],"Passwords must match").max(255).required("Password is required")}),k=function(){var e=(0,o.useRouter)(),r={token:(0,o.useSearchParams)().get("t")||void 0}.token;j.token=r;var n=(0,v.a)(),s=n.loading,i=n.error,f=n.password;(0,b.useEffect)(function(){i&&w.ZP.error(i.message?i.message:"En error has occurred")},[i]);var k=(0,l.TA)({initialValues:j,validationSchema:Z,onSubmit:function(n,t){try{if(r){n.token=r;var o=f(n);console.log(o),o.error?w.ZP.error("Something went wrong"):e.push(x.H.login)}else w.ZP.error("Invalid token")}catch(s){console.error(s),t.setStatus({success:!1}),t.setErrors({submit:s.message}),t.setSubmitting(!1)}}});return(0,t.jsx)(t.Fragment,{children:(0,t.jsxs)("div",{children:[s&&(0,t.jsx)(m.a,{backdrop:!0}),(0,t.jsx)(u.Z,{sx:{mb:4},spacing:1,children:(0,t.jsx)(d.Z,{variant:"h5",children:"Reset password"})}),(0,t.jsxs)("form",{noValidate:!0,onSubmit:k.handleSubmit,children:[(0,t.jsxs)(u.Z,{spacing:3,children:[(0,t.jsx)(g.I,{error:!!(k.touched.password&&k.errors.password),fullWidth:!0,helperText:k.touched.password&&k.errors.password,label:"New password",name:"password",onBlur:k.handleBlur,onChange:k.handleChange,type:"password",value:k.values.password}),(0,t.jsx)(g.I,{error:!!(k.touched.password_confirm&&k.errors.password_confirm),fullWidth:!0,helperText:k.touched.password_confirm&&k.errors.password_confirm,label:"Confirm password",name:"password_confirm",onBlur:k.handleBlur,onChange:k.handleChange,type:"password",value:k.values.password_confirm})]}),(0,t.jsx)(c.Z,{fullWidth:!0,sx:{mt:3},size:"large",type:"submit",variant:"contained",children:"Continue"}),(0,t.jsx)(p.Z,{sx:{mt:3},children:(0,t.jsx)(d.Z,{color:"text.secondary",variant:"body2",children:(0,t.jsx)(h.Z,{component:a(),href:x.H.forgot,underline:"hover",variant:"subtitle2",children:"Resend email"})})})]})]})})};k.defaultProps={title:"Restore"},k.getLayout=function(e){return(0,t.jsx)(t.Fragment,{children:(0,t.jsx)(f.A,{children:e})})},r.default=k}},function(e){e.O(0,[235,774,567,179],function(){return e(e.s=98757)}),_N_E=e.O()}]);