(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[844],{3577:function(e,n,s){(window.__NEXT_P=window.__NEXT_P||[]).push(["/calendar",function(){return s(8686)}])},8686:function(e,n,s){"use strict";s.r(n);var t=s(5893),a=s(7294),r=s(6886),i=s(5861),d=s(1536),l=s(7357),c=s(3321),o=s(4666),x=s(7645),j=s(3946),h=s(6580),u=s(7720),Z=s(1425),b=s(1664),p=s.n(b),m=s(1823),y=s(7435),C=s(8178),f=s(594),w=s(2912),_=s(1230),g=s(6649);let v=()=>{let[e,n]=(0,a.useState)(0),[s,b]=(0,a.useState)(void 0),{exportModalOpen:v,handleExportModal:D}=(0,y.S)(),P=(0,m.h8)(e),k=P.data,S=(0,a.useCallback)(()=>{b(k)},[k]);(0,a.useEffect)(()=>{S()},[e,S]);let F=P.isFetching&&(0,t.jsx)(C.aN,{});return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsxs)(r.ZP,{container:!0,mb:3,justifyContent:"space-between",children:[(0,t.jsx)(r.ZP,{item:!0,children:(0,t.jsx)(i.Z,{variant:"h5",children:"Calendar"})}),(0,t.jsx)(r.ZP,{item:!0,children:(0,t.jsxs)(d.Z,{direction:"row",spacing:2,children:[(0,t.jsx)(l.Z,{children:(0,t.jsx)(c.Z,{variant:"contained",onClick:()=>{D()},children:"export"})}),(0,t.jsx)(l.Z,{children:(0,t.jsx)(p(),{href:g.H.index,passHref:!0,children:(0,t.jsx)(c.Z,{variant:"contained",children:"Dashboard"})})})]})})]}),(0,t.jsx)(y.f,{events:_.data,onClick:e=>{n(e.id)}}),F,s&&(0,t.jsxs)(o.Z,{open:!!e,onClose:()=>{n(0)},scroll:"paper",fullWidth:!0,maxWidth:"sm",children:[(0,t.jsxs)(x.Z,{sx:{pr:10},children:[(0,t.jsx)(j.Z,{"aria-label":"close",onClick:()=>{n(0)},sx:{position:"absolute",right:8,top:8,color:"primary.main"},children:(0,t.jsx)(f.Z,{})}),"Invoice Details"]}),(0,t.jsxs)(h.Z,{dividers:!0,children:[(0,t.jsxs)(i.Z,{variant:"h6",children:["# ",s.no]}),(0,t.jsx)(u.Z,{sx:{mt:2,mb:2}}),(0,t.jsxs)(d.Z,{direction:"row",sx:{gap:3},justifyContent:"space-between",children:[(0,t.jsxs)(l.Z,{children:[(0,t.jsx)("b",{children:"Seller"}),(0,t.jsx)("br",{}),s.seller.name," ",(0,t.jsx)("br",{}),s.seller.address_line_1," ",(0,t.jsx)("br",{}),s.seller.address_line_2," ",(0,t.jsx)("br",{}),s.seller.address_line_3," ",(0,t.jsx)("br",{}),(0,t.jsx)(l.Z,{sx:{textTransform:"capitalize"},children:s.seller.country})]}),(0,t.jsxs)(l.Z,{sx:{textAlign:"right"},children:[(0,t.jsx)("b",{children:"Buyer"}),(0,t.jsx)("br",{}),s.buyer.name," ",(0,t.jsx)("br",{}),s.buyer.address_line_1," ",(0,t.jsx)("br",{}),s.buyer.address_line_2," ",(0,t.jsx)("br",{}),s.buyer.address_line_3," ",(0,t.jsx)("br",{}),(0,t.jsx)(l.Z,{sx:{textTransform:"capitalize"},children:s.buyer.country})]})]}),(0,t.jsx)(u.Z,{sx:{mt:2,mb:2}}),(0,t.jsxs)(d.Z,{direction:"row",sx:{gap:3},justifyContent:"space-between",children:[(0,t.jsxs)(l.Z,{children:[(0,t.jsx)("b",{children:"Due date:"}),(0,t.jsx)("br",{}),(0,w.Z)(new Date(s.dates.due),"dd.MM.yyyy")]}),(0,t.jsxs)(l.Z,{children:[(0,t.jsx)("b",{children:"End date:"}),(0,t.jsx)("br",{})," ",(0,w.Z)(new Date(s.dates.end),"dd.MM.yyyy")]}),(0,t.jsxs)(l.Z,{children:[(0,t.jsx)("b",{children:"Issue date:"}),(0,t.jsx)("br",{}),(0,w.Z)(new Date(s.dates.issue),"dd.MM.yyyy")]})]}),(0,t.jsx)(u.Z,{sx:{mt:2,mb:2}}),(0,t.jsxs)(l.Z,{sx:{textAlign:"right"},children:[(0,t.jsx)("b",{children:"Total:"}),(0,t.jsx)("br",{}),(0,t.jsxs)(i.Z,{variant:"h6",children:[" ","10000 $"]})]})]}),(0,t.jsx)(Z.Z,{children:(0,t.jsx)(c.Z,{type:"button",variant:"contained",onClick:()=>{n(0)},children:"Close"})})]}),(0,t.jsx)(y.D7,{open:v,onClose:D})]})};v.defaultProps={title:"Calendar"},n.default=v},1230:function(e,n,s){"use strict";s.r(n),s.d(n,{data:function(){return h}});var t=s(5893),a=s(7294),r=s(6886),i=s(5861),d=s(7357),l=s(3321),c=s(7435),o=s(1664),x=s.n(o),j=s(6649);let h=[{id:1,date:new Date().setDate(new Date().getDate()-1),name:"Some item",total:12,status:"Pending",type:"created"},{id:2,date:new Date,name:"Some item 2",total:35,status:"Pending",type:"created"},{id:3,date:new Date,name:"Some item 3",total:15,status:"Pending",type:"created"},{id:4,date:new Date,name:"Some item 4",total:10,status:"Pending",type:"created"},{id:5,date:new Date().setDate(new Date().getDate()+1),name:"Some item 5",total:23,status:"Pending",type:"created"}];n.default=()=>{let[e,n]=(0,a.useState)(0),[s,o]=(0,a.useState)(""),{createModalOpen:u,handleCreateModal:Z}=(0,c.Wh)(),{uploadModalOpen:b,handleUploadModal:p}=(0,c.$M)(),{exportModalOpen:m,handleExportModal:y}=(0,c.S)();return(0,t.jsxs)(t.Fragment,{children:[(0,t.jsxs)(r.ZP,{container:!0,mb:3,justifyContent:"space-between",children:[(0,t.jsx)(r.ZP,{item:!0,children:(0,t.jsx)(i.Z,{variant:"h5",children:"My Invoices"})}),(0,t.jsx)(r.ZP,{item:!0,children:(0,t.jsx)(d.Z,{children:(0,t.jsxs)(r.ZP,{container:!0,gap:2,children:[(0,t.jsx)(x(),{href:j.H.calendar,passHref:!0,children:(0,t.jsx)(l.Z,{variant:"contained",children:"Calendar"})}),(0,t.jsx)(l.Z,{variant:"contained",onClick:()=>{y()},children:"export"}),(0,t.jsx)(l.Z,{variant:"contained",onClick:()=>{n(0),o(c.JF.Uploaded),p()},children:"upload"}),(0,t.jsx)(l.Z,{variant:"contained",onClick:()=>{n(0),o(c.JF.Created),Z()},children:"create"})]})})})]}),(0,t.jsx)(c.RW,{invoices:h,openInvoiceHandler:(e,s)=>{switch(n(e),s){case c.JF.Created:o(c.JF.Created),Z();break;case c.JF.Uploaded:o(c.JF.Uploaded),p()}}}),s===c.JF.Created&&(0,t.jsx)(c.Wg,{open:u,onClose:Z,id:e}),s===c.JF.Uploaded&&(0,t.jsx)(c.Cf,{open:b,onClose:p,id:e}),(0,t.jsx)(c.D7,{open:m,onClose:y})]})}}},function(e){e.O(0,[774,888,179],function(){return e(e.s=3577)}),_N_E=e.O()}]);