(self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[]).push([[1758],{6914:(e,o,t)=>{"use strict";t.r(o),t.d(o,{default:()=>h});var a=t(9307),s=t(4184),r=t.n(s),c=t(5736),l=t(711),n=t(5027),d=t(9818),u=t(4801),b=t(3554);t(237);const i=({className:e="",disabled:o=!1,onTextChange:t,placeholder:s,value:c=""})=>(0,a.createElement)("textarea",{className:r()("wc-block-components-textarea",e),disabled:o,onChange:e=>{t(e.target.value)},placeholder:s,rows:2,value:c}),p=({disabled:e,onChange:o,placeholder:t,value:s})=>{const[r,l]=(0,a.useState)(!1),[n,d]=(0,a.useState)("");return(0,a.createElement)("div",{className:"wc-block-checkout__add-note"},(0,a.createElement)(b.CheckboxControl,{disabled:e,label:(0,c.__)("Add a note to your order","woocommerce"),checked:r,onChange:e=>{l(e),e?s!==n&&o(n):(o(""),d(s))}}),r&&(0,a.createElement)(i,{disabled:e,onTextChange:o,placeholder:t,value:s}))},h=({className:e})=>{const{needsShipping:o}=(0,n.V)(),{isProcessing:t,orderNotes:s}=(0,d.useSelect)((e=>{const o=e(u.CHECKOUT_STORE_KEY);return{isProcessing:o.isProcessing(),orderNotes:o.getOrderNotes()}})),{__internalSetOrderNotes:b}=(0,d.useDispatch)(u.CHECKOUT_STORE_KEY);return(0,a.createElement)(l.FormStep,{id:"order-notes",showStepNumber:!1,className:r()("wc-block-checkout__order-notes",e),disabled:t},(0,a.createElement)(p,{disabled:t,onChange:b,placeholder:o?(0,c.__)("Notes about your order, e.g. special notes for delivery.","woocommerce"):(0,c.__)("Notes about your order.","woocommerce"),value:s}))}},237:()=>{}}]);