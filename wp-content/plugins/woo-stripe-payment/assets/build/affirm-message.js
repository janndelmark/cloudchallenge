(()=>{var e,r={696:(e,r,t)=>{var a=t(994),s=a(t(579)),n=a(t(383)),i=a(t(452)),o=a(t(72)),p=a(t(511)),u=t(705),c=t(82),f=t(161);function l(e,r,t){return r=(0,o.default)(r),(0,i.default)(e,d()?Reflect.construct(r,t||[],(0,o.default)(e).constructor):r.apply(e,t))}function d(){try{var e=!Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){})))}catch(e){}return(d=function(){return!!e})()}var m,_="affirmMessage",w=function(e){var r,t,a=null==e||null===(r=e.get_gateway_data())||void 0===r?void 0:r.currency;return null==e||null===(t=e.params)||void 0===t||null===(t=t.supportedCurrencies)||void 0===t?void 0:t.includes(a)},v=function(e){function r(e){return(0,n.default)(this,r),l(this,r,[e])}return(0,p.default)(r,e),(0,s.default)(r)}(u.BaseGateway);"undefined"!=typeof wc_stripe_affirm_cart_params&&new f.CartMessage(new v(wc_stripe_affirm_cart_params),{elementType:_,elementId:"wc-stripe-affirm-cart-msg",containerId:"wc-stripe-affirm-cart-container",isSupported:w}),"undefined"!=typeof wc_stripe_affirm_product_params&&(Object.assign(v.prototype,u.ProductGateway.prototype),new f.ProductMessage(new v(wc_stripe_affirm_product_params),{elementType:_,elementId:"wc-stripe-affirm-product-msg",isSupported:w})),"undefined"!=typeof wc_stripe_local_payment_params&&null!==(m=wc_stripe_local_payment_params)&&void 0!==m&&null!==(m=m.gateways)&&void 0!==m&&m.stripe_affirm&&new f.CheckoutMessage((0,c.getPaymentMethod)("stripe_affirm"),{elementType:_,elementId:"wc-stripe-affirm-message-container",isSupported:w}),"undefined"!=typeof wc_stripe_bnpl_shop_params&&new f.CategoryMessage(u.stripe,wc_stripe_bnpl_shop_params,{id:"stripe_affirm",elementType:_,isSupported:function(e){var r=e.data.currency;return e.data.stripe_affirm.supportedCurrencies.includes(r)}})},82:e=>{"use strict";e.exports=window.wcStripeModules["checkout-modules"]},161:e=>{"use strict";e.exports=window.wcStripeModules["message-modules"]},705:e=>{"use strict";e.exports=window.wc_stripe}},t={};function a(e){var s=t[e];if(void 0!==s)return s.exports;var n=t[e]={exports:{}};return r[e](n,n.exports,a),n.exports}a.m=r,e=[],a.O=(r,t,s,n)=>{if(!t){var i=1/0;for(c=0;c<e.length;c++){for(var[t,s,n]=e[c],o=!0,p=0;p<t.length;p++)(!1&n||i>=n)&&Object.keys(a.O).every((e=>a.O[e](t[p])))?t.splice(p--,1):(o=!1,n<i&&(i=n));if(o){e.splice(c--,1);var u=s();void 0!==u&&(r=u)}}return r}n=n||0;for(var c=e.length;c>0&&e[c-1][2]>n;c--)e[c]=e[c-1];e[c]=[t,s,n]},a.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),(()=>{var e={340:0};a.O.j=r=>0===e[r];var r=(r,t)=>{var s,n,[i,o,p]=t,u=0;if(i.some((r=>0!==e[r]))){for(s in o)a.o(o,s)&&(a.m[s]=o[s]);if(p)var c=p(a)}for(r&&r(t);u<i.length;u++)n=i[u],a.o(e,n)&&e[n]&&e[n][0](),e[n]=0;return a.O(c)},t=self.webpackChunkwcStripeModules=self.webpackChunkwcStripeModules||[];t.forEach(r.bind(null,0)),t.push=r.bind(null,t.push.bind(t))})();var s=a.O(void 0,[96],(()=>a(696)));s=a.O(s),(this.wcStripeModules=this.wcStripeModules||{})["affirm-message"]=s})();
//# sourceMappingURL=affirm-message.js.map