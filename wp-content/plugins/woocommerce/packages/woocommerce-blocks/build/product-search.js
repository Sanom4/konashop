(()=>{var e,t={1818:(e,t,o)=>{"use strict";o.r(t);var r=o(9307);const c=window.wp.blockEditor,l=window.wp.data;var a=o(5736),s=o(1984),n=o(2395);const i=window.wc.wcSettings,d=window.wp.components,u=window.wp.blocks;o(4300),o(9428);var p=o(4184),b=o.n(p);const m=({attributes:{label:e,placeholder:t,formId:o,className:c,hasLabel:l,align:s}})=>{const n=b()("wc-block-product-search",s?"align"+s:"",c);return(0,r.createElement)("div",{className:n},(0,r.createElement)("form",{role:"search",method:"get",action:i.HOME_URL},(0,r.createElement)("label",{htmlFor:o,className:l?"wc-block-product-search__label":"wc-block-product-search__label screen-reader-text"},e),(0,r.createElement)("div",{className:"wc-block-product-search__fields"},(0,r.createElement)("input",{type:"search",id:o,className:"wc-block-product-search__field",placeholder:t,name:"s"}),(0,r.createElement)("input",{type:"hidden",name:"post_type",value:"product"}),(0,r.createElement)("button",{type:"submit",className:"wc-block-product-search__button","aria-label":(0,a.__)("Search","woocommerce")},(0,r.createElement)("svg",{"aria-hidden":"true",role:"img",focusable:"false",className:"dashicon dashicons-arrow-right-alt2",xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20"},(0,r.createElement)("path",{d:"M6 15l5-5-5-5 1-2 7 7-7 7z"}))))))},w=(0,o(4333).withInstanceId)((({attributes:{label:e,placeholder:t,formId:o,className:l,hasLabel:s,align:n},instanceId:i,setAttributes:u})=>{const p=b()("wc-block-product-search",n?"align"+n:"",l);return(0,r.useEffect)((()=>{o||u({formId:`wc-block-product-search-${i}`})}),[o,u,i]),(0,r.createElement)(r.Fragment,null,(0,r.createElement)(c.InspectorControls,{key:"inspector"},(0,r.createElement)(d.PanelBody,{title:(0,a.__)("Content","woocommerce"),initialOpen:!0},(0,r.createElement)(d.ToggleControl,{label:(0,a.__)("Show search field label","woocommerce"),checked:s,onChange:()=>u({hasLabel:!s})}))),(0,r.createElement)("div",{className:p},!!s&&(0,r.createElement)(r.Fragment,null,(0,r.createElement)("label",{className:"screen-reader-text",htmlFor:"wc-block-product-search__label"},(0,a.__)("Search Label","woocommerce")),(0,r.createElement)(c.PlainText,{className:"wc-block-product-search__label",id:"wc-block-product-search__label",value:e,onChange:e=>u({label:e}),style:{backgroundColor:"transparent"}})),(0,r.createElement)("div",{className:"wc-block-product-search__fields"},(0,r.createElement)(d.TextControl,{className:"wc-block-product-search__field input-control",value:t,placeholder:(0,a.__)("Enter search placeholder text","woocommerce"),onChange:e=>u({placeholder:e})}),(0,r.createElement)("button",{type:"submit",className:"wc-block-product-search__button","aria-label":(0,a.__)("Search","woocommerce"),onClick:e=>e.preventDefault(),tabIndex:-1},(0,r.createElement)("svg",{"aria-hidden":"true",role:"img",focusable:"false",className:"dashicon dashicons-arrow-right-alt2",xmlns:"http://www.w3.org/2000/svg",width:"20",height:"20",viewBox:"0 0 20 20"},(0,r.createElement)("path",{d:"M6 15l5-5-5-5 1-2 7 7-7 7z"}))))))})),h=(0,i.getSettingWithCoercion)("isBlockVariationAvailable",!1,(e=>"boolean"==typeof e)),g={hasLabel:{type:"boolean",default:!0},label:{type:"string",default:(0,a.__)("Search","woocommerce")},placeholder:{type:"string",default:(0,a.__)("Search products…","woocommerce")},formId:{type:"string",default:""}},k={label:g.label.default,buttonText:g.label.default,placeholder:g.placeholder.default,query:{post_type:"product"}};(0,u.registerBlockType)("woocommerce/product-search",{title:(0,a.__)("Product Search","woocommerce"),icon:{src:(0,r.createElement)(s.Z,{icon:n.Z,className:"wc-block-editor-components-block-icon"})},category:"woocommerce",keywords:[(0,a.__)("WooCommerce","woocommerce")],description:(0,a.__)("A search box to allow customers to search for products by keyword.","woocommerce"),supports:{align:["wide","full"],inserter:!h},attributes:g,transforms:{from:[{type:"block",blocks:["core/legacy-widget"],isMatch:({idBase:e,instance:t})=>"woocommerce_product_search"===e&&!(null==t||!t.raw),transform:({instance:e})=>(0,u.createBlock)("woocommerce/product-search",{label:e.raw.title||k.label})}]},deprecated:[{attributes:g,save:e=>(0,r.createElement)("div",null,(0,r.createElement)(m,{...e}))}],edit:h?({clientId:e})=>{const{replaceBlocks:t}=(0,l.useDispatch)(c.store),o=(0,l.useSelect)((t=>t("core/block-editor").getBlockAttributes(e)),[e]),s=[(0,r.createElement)(d.Button,{key:"update",onClick:()=>{t(e,(0,u.createBlock)("core/search",{label:(null==o?void 0:o.label)||k.label,buttonText:k.buttonText,placeholder:(null==o?void 0:o.placeholder)||k.placeholder,query:k.query}))},variant:"primary"},(0,a.__)("Upgrade Block","woocommerce"))];return(0,r.createElement)(c.Warning,{actions:s,className:"wc-block-components-actions"},(0,a.__)("This version of the Product Search block is outdated. Upgrade to continue using.","woocommerce"))}:w,save:()=>null}),h&&(0,u.registerBlockVariation)("core/search",{name:"woocommerce/product-search",title:(0,a.__)("Product Search","woocommerce"),icon:{src:(0,r.createElement)(s.Z,{icon:n.Z,className:"wc-block-editor-components-block-icon"})},isActive:(e,t)=>{var o;return(null===(o=e.query)||void 0===o?void 0:o.post_type)===t.query.post_type},category:"woocommerce",keywords:[(0,a.__)("WooCommerce","woocommerce")],description:(0,a.__)("A search box to allow customers to search for products by keyword.","woocommerce"),attributes:k})},9428:()=>{},4300:()=>{},4333:e=>{"use strict";e.exports=window.wp.compose},9307:e=>{"use strict";e.exports=window.wp.element},5736:e=>{"use strict";e.exports=window.wp.i18n},444:e=>{"use strict";e.exports=window.wp.primitives}},o={};function r(e){var c=o[e];if(void 0!==c)return c.exports;var l=o[e]={exports:{}};return t[e].call(l.exports,l,l.exports,r),l.exports}r.m=t,e=[],r.O=(t,o,c,l)=>{if(!o){var a=1/0;for(d=0;d<e.length;d++){for(var[o,c,l]=e[d],s=!0,n=0;n<o.length;n++)(!1&l||a>=l)&&Object.keys(r.O).every((e=>r.O[e](o[n])))?o.splice(n--,1):(s=!1,l<a&&(a=l));if(s){e.splice(d--,1);var i=c();void 0!==i&&(t=i)}}return t}l=l||0;for(var d=e.length;d>0&&e[d-1][2]>l;d--)e[d]=e[d-1];e[d]=[o,c,l]},r.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return r.d(t,{a:t}),t},r.d=(e,t)=>{for(var o in t)r.o(t,o)&&!r.o(e,o)&&Object.defineProperty(e,o,{enumerable:!0,get:t[o]})},r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),r.r=e=>{"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.j=2218,(()=>{var e={2218:0};r.O.j=t=>0===e[t];var t=(t,o)=>{var c,l,[a,s,n]=o,i=0;if(a.some((t=>0!==e[t]))){for(c in s)r.o(s,c)&&(r.m[c]=s[c]);if(n)var d=n(r)}for(t&&t(o);i<a.length;i++)l=a[i],r.o(e,l)&&e[l]&&e[l][0](),e[l]=0;return r.O(d)},o=self.webpackChunkwebpackWcBlocksJsonp=self.webpackChunkwebpackWcBlocksJsonp||[];o.forEach(t.bind(null,0)),o.push=t.bind(null,o.push.bind(o))})();var c=r.O(void 0,[2869],(()=>r(1818)));c=r.O(c),((this.wc=this.wc||{}).blocks=this.wc.blocks||{})["product-search"]=c})();