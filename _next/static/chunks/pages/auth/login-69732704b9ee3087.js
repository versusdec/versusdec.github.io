(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[344],{63208:function(e,r,n){(window.__NEXT_P=window.__NEXT_P||[]).push(["/auth/login",function(){return n(24245)}])},61124:function(e,r,n){"use strict";n.d(r,{I:function(){return d}});var t=n(26042),i=n(69396),s=n(99534),a=n(85893),o=n(36229),l=(0,n(16829).Z)(o.Z)({"& .MuiFormHelperText-root.Mui-error":{position:"absolute",top:"100%"}}),d=function(e){var r=e.children,n=(0,s.Z)(e,["children"]);return(0,a.jsx)(l,(0,i.Z)((0,t.Z)({},n),{children:r}))}},62077:function(e,r,n){"use strict";n(85893)},95993:function(e,r,n){"use strict";n.d(r,{A:function(){return l}});var t=n(85893),i=n(45697),s=n.n(i),a=n(87357),o=n(76515),l=function(e){var r,n=e.children,i=e.title?e.title:null!==(r=e.children)&&void 0!==r&&!!r.props.title&&e.children.props.title;return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsx)(o.Z,{title:i}),(0,t.jsxs)(a.Z,{sx:{backgroundColor:"background.default",display:"flex",flex:"1 1 auto",flexDirection:{xs:"column-reverse",md:"row"}},children:[(0,t.jsx)(a.Z,{sx:{backgroundColor:"background.paper",display:"flex",flex:{xs:"1 1 auto",md:"0 0 auto"},flexDirection:"column",justifyContent:{md:"center"},maxWidth:"100%",p:{xs:4,md:8},width:{md:500}},children:(0,t.jsx)("div",{children:n})}),(0,t.jsx)(a.Z,{sx:{alignItems:"center",backgroundColor:"#222223",backgroundImage:'url("/assets/auth_bg.svg")',backgroundPosition:"top center",backgroundRepeat:"no-repeat",backgroundSize:"cover",color:"common.white",display:"flex",flex:{xs:"0 0 auto",md:"1 1 auto"},justifyContent:"center",p:{xs:4,md:8}},children:(0,t.jsx)("img",{src:"/assets/logo.svg",alt:"",style:{maxWidth:"600px"}})})]})]})};l.propTypes={children:s().node}},24245:function(e,r,n){"use strict";n.r(r);var t=n(85893);n(9008);var i=n(39332);n(41664);var s=n(74231),a=n(82580),o=n(26447),l=n(15861),d=n(23795),u=n(83321),c=n(87357),h=n(95993),x=n(93041);n(62077);var m=n(61124),p={email:"",password:""},f=s.Ry({email:s.Z_().email("Must be a valid email").max(255).required("Email is required"),password:s.Z_().max(255).required("Password is required")}),g=function(){(0,i.useRouter)(),({returnTo:(0,i.useSearchParams)().get("returnTo")||void 0}).returnTo;var e=(0,a.TA)({initialValues:p,validationSchema:f,onSubmit:function(e,r){}});return(0,t.jsx)(t.Fragment,{children:(0,t.jsxs)("div",{children:[(0,t.jsxs)(o.Z,{sx:{mb:4},spacing:1,children:[(0,t.jsx)(l.Z,{variant:"h5",children:"Log in"}),(0,t.jsxs)(l.Z,{color:"text.secondary",variant:"body2",children:["Don't have an account? \xa0",(0,t.jsx)(d.Z,{href:x.H.register,underline:"hover",variant:"subtitle2",children:"Register"})]})]}),(0,t.jsxs)("form",{noValidate:!0,onSubmit:e.handleSubmit,children:[(0,t.jsxs)(o.Z,{spacing:3,children:[(0,t.jsx)(m.I,{error:!!(e.touched.email&&e.errors.email),fullWidth:!0,helperText:e.touched.email&&e.errors.email,label:"Email Address",name:"email",onBlur:e.handleBlur,onChange:e.handleChange,type:"email",value:e.values.email}),(0,t.jsx)(m.I,{error:!!(e.touched.password&&e.errors.password),fullWidth:!0,helperText:e.touched.password&&e.errors.password,label:"Password",name:"password",onBlur:e.handleBlur,onChange:e.handleChange,type:"password",value:e.values.password})]}),(0,t.jsx)(u.Z,{fullWidth:!0,sx:{mt:3},size:"large",type:"submit",variant:"contained",children:"Continue"}),(0,t.jsx)(c.Z,{sx:{mt:3},children:(0,t.jsx)(d.Z,{href:x.H.forgot,underline:"hover",variant:"subtitle2",children:"Forgot password?"})})]})]})})};g.defaultProps={title:"Login"},g.getLayout=function(e){return(0,t.jsx)(t.Fragment,{children:(0,t.jsx)(h.A,{children:e})})},r.default=g}},function(e){e.O(0,[551,774,888,179],function(){return e(e.s=63208)}),_N_E=e.O()}]);