(()=>{function O(e){return(O="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function T(){"use strict";T=function(){return i};var l,i={},e=Object.prototype,u=e.hasOwnProperty,s=Object.defineProperty||function(e,t,n){e[t]=n.value},t="function"==typeof Symbol?Symbol:{},r=t.iterator||"@@iterator",n=t.asyncIterator||"@@asyncIterator",o=t.toStringTag||"@@toStringTag";function a(e,t,n){return Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}),e[t]}try{a({},"")}catch(l){a=function(e,t,n){return e[t]=n}}function c(e,t,n,r){var o,a,i,c,t=t&&t.prototype instanceof v?t:v,t=Object.create(t.prototype),r=new k(r||[]);return s(t,"_invoke",{value:(o=e,a=n,i=r,c=g,function(e,t){if(c===f)throw new Error("Generator is already running");if(c===h){if("throw"===e)throw t;return{value:l,done:!0}}for(i.method=e,i.arg=t;;){var n=i.delegate;if(n){n=function e(t,n){var r=n.method,o=t.iterator[r];if(o===l)return n.delegate=null,"throw"===r&&t.iterator.return&&(n.method="return",n.arg=l,e(t,n),"throw"===n.method)||"return"!==r&&(n.method="throw",n.arg=new TypeError("The iterator does not provide a '"+r+"' method")),p;r=d(o,t.iterator,n.arg);if("throw"===r.type)return n.method="throw",n.arg=r.arg,n.delegate=null,p;o=r.arg;return o?o.done?(n[t.resultName]=o.value,n.next=t.nextLoc,"return"!==n.method&&(n.method="next",n.arg=l),n.delegate=null,p):o:(n.method="throw",n.arg=new TypeError("iterator result is not an object"),n.delegate=null,p)}(n,i);if(n){if(n===p)continue;return n}}if("next"===i.method)i.sent=i._sent=i.arg;else if("throw"===i.method){if(c===g)throw c=h,i.arg;i.dispatchException(i.arg)}else"return"===i.method&&i.abrupt("return",i.arg);c=f;n=d(o,a,i);if("normal"===n.type){if(c=i.done?h:y,n.arg===p)continue;return{value:n.arg,done:i.done}}"throw"===n.type&&(c=h,i.method="throw",i.arg=n.arg)}})}),t}function d(e,t,n){try{return{type:"normal",arg:e.call(t,n)}}catch(e){return{type:"throw",arg:e}}}i.wrap=c;var g="suspendedStart",y="suspendedYield",f="executing",h="completed",p={};function v(){}function m(){}function b(){}var t={},x=(a(t,r,function(){return this}),Object.getPrototypeOf),x=x&&x(x(_([]))),L=(x&&x!==e&&u.call(x,r)&&(t=x),b.prototype=v.prototype=Object.create(t));function w(e){["next","throw","return"].forEach(function(t){a(e,t,function(e){return this._invoke(t,e)})})}function S(i,c){var t;s(this,"_invoke",{value:function(n,r){function e(){return new c(function(e,t){!function t(e,n,r,o){var a,e=d(i[e],i,n);if("throw"!==e.type)return(n=(a=e.arg).value)&&"object"==O(n)&&u.call(n,"__await")?c.resolve(n.__await).then(function(e){t("next",e,r,o)},function(e){t("throw",e,r,o)}):c.resolve(n).then(function(e){a.value=e,r(a)},function(e){return t("throw",e,r,o)});o(e.arg)}(n,r,e,t)})}return t=t?t.then(e,e):e()}})}function E(e){var t={tryLoc:e[0]};1 in e&&(t.catchLoc=e[1]),2 in e&&(t.finallyLoc=e[2],t.afterLoc=e[3]),this.tryEntries.push(t)}function q(e){var t=e.completion||{};t.type="normal",delete t.arg,e.completion=t}function k(e){this.tryEntries=[{tryLoc:"root"}],e.forEach(E,this),this.reset(!0)}function _(t){if(t||""===t){var n,e=t[r];if(e)return e.call(t);if("function"==typeof t.next)return t;if(!isNaN(t.length))return n=-1,(e=function e(){for(;++n<t.length;)if(u.call(t,n))return e.value=t[n],e.done=!1,e;return e.value=l,e.done=!0,e}).next=e}throw new TypeError(O(t)+" is not iterable")}return s(L,"constructor",{value:m.prototype=b,configurable:!0}),s(b,"constructor",{value:m,configurable:!0}),m.displayName=a(b,o,"GeneratorFunction"),i.isGeneratorFunction=function(e){e="function"==typeof e&&e.constructor;return!!e&&(e===m||"GeneratorFunction"===(e.displayName||e.name))},i.mark=function(e){return Object.setPrototypeOf?Object.setPrototypeOf(e,b):(e.__proto__=b,a(e,o,"GeneratorFunction")),e.prototype=Object.create(L),e},i.awrap=function(e){return{__await:e}},w(S.prototype),a(S.prototype,n,function(){return this}),i.AsyncIterator=S,i.async=function(e,t,n,r,o){void 0===o&&(o=Promise);var a=new S(c(e,t,n,r),o);return i.isGeneratorFunction(t)?a:a.next().then(function(e){return e.done?e.value:a.next()})},w(L),a(L,o,"Generator"),a(L,r,function(){return this}),a(L,"toString",function(){return"[object Generator]"}),i.keys=function(e){var t,n=Object(e),r=[];for(t in n)r.push(t);return r.reverse(),function e(){for(;r.length;){var t=r.pop();if(t in n)return e.value=t,e.done=!1,e}return e.done=!0,e}},i.values=_,k.prototype={constructor:k,reset:function(e){if(this.prev=0,this.next=0,this.sent=this._sent=l,this.done=!1,this.delegate=null,this.method="next",this.arg=l,this.tryEntries.forEach(q),!e)for(var t in this)"t"===t.charAt(0)&&u.call(this,t)&&!isNaN(+t.slice(1))&&(this[t]=l)},stop:function(){this.done=!0;var e=this.tryEntries[0].completion;if("throw"===e.type)throw e.arg;return this.rval},dispatchException:function(n){if(this.done)throw n;var r=this;function e(e,t){return a.type="throw",a.arg=n,r.next=e,t&&(r.method="next",r.arg=l),!!t}for(var t=this.tryEntries.length-1;0<=t;--t){var o=this.tryEntries[t],a=o.completion;if("root"===o.tryLoc)return e("end");if(o.tryLoc<=this.prev){var i=u.call(o,"catchLoc"),c=u.call(o,"finallyLoc");if(i&&c){if(this.prev<o.catchLoc)return e(o.catchLoc,!0);if(this.prev<o.finallyLoc)return e(o.finallyLoc)}else if(i){if(this.prev<o.catchLoc)return e(o.catchLoc,!0)}else{if(!c)throw new Error("try statement without catch or finally");if(this.prev<o.finallyLoc)return e(o.finallyLoc)}}}},abrupt:function(e,t){for(var n=this.tryEntries.length-1;0<=n;--n){var r=this.tryEntries[n];if(r.tryLoc<=this.prev&&u.call(r,"finallyLoc")&&this.prev<r.finallyLoc){var o=r;break}}var a=(o=o&&("break"===e||"continue"===e)&&o.tryLoc<=t&&t<=o.finallyLoc?null:o)?o.completion:{};return a.type=e,a.arg=t,o?(this.method="next",this.next=o.finallyLoc,p):this.complete(a)},complete:function(e,t){if("throw"===e.type)throw e.arg;return"break"===e.type||"continue"===e.type?this.next=e.arg:"return"===e.type?(this.rval=this.arg=e.arg,this.method="return",this.next="end"):"normal"===e.type&&t&&(this.next=t),p},finish:function(e){for(var t=this.tryEntries.length-1;0<=t;--t){var n=this.tryEntries[t];if(n.finallyLoc===e)return this.complete(n.completion,n.afterLoc),q(n),p}},catch:function(e){for(var t=this.tryEntries.length-1;0<=t;--t){var n,r,o=this.tryEntries[t];if(o.tryLoc===e)return"throw"===(n=o.completion).type&&(r=n.arg,q(o)),r}throw new Error("illegal catch attempt")},delegateYield:function(e,t,n){return this.delegate={iterator:_(e),resultName:t,nextLoc:n},"next"===this.method&&(this.arg=l),p}},i}function l(e,t,n,r,o,a,i){try{var c=e[a](i),l=c.value}catch(e){return void n(e)}c.done?t(l):Promise.resolve(l).then(r,o)}var e=document.querySelectorAll(".nextgen-gallery-onboarding-btn-prev"),t=document.querySelectorAll(".nextgen-gallery-onboarding-btn-next"),n=document.querySelector(".nextgen-gallery-onboarding-progress"),r=document.querySelectorAll(".nextgen-gallery-onboarding-form-step"),o=document.querySelectorAll(".nextgen-gallery-onboarding-progress-step"),a=0;function i(){r.forEach(function(e){e.classList.contains("nextgen-gallery-onboarding-form-step-active")&&e.classList.remove("nextgen-gallery-onboarding-form-step-active")}),r[a].classList.add("nextgen-gallery-onboarding-form-step-active"),x.style.display="2"===a?"block":"none"}function u(){o.forEach(function(e,t){var n=e.previousElementSibling;t<=a?(e.classList.add("nextgen-gallery-onboarding-progress-step-active"),n.style.borderColor="#a0bc1a"):(e.classList.remove("nextgen-gallery-onboarding-progress-step-active"),n.style.borderColor="#DCDDE1")}),n.style.width=a/(o.length-1)*100+"%"}t.forEach(function(t){t.addEventListener("click",function(){var e,r;0===a?(r=document.querySelector("#nextgen-gallery-general")).addEventListener("submit",function(){c=T().mark(function e(t){var n;return T().wrap(function(e){for(;;)switch(e.prev=e.next){case 0:return t.preventDefault(),t.stopPropagation(),(n=new FormData(r)).append("action","save_onboarding_data"),n.append("nonce",nggOnboardingWizard.nonce),e.prev=5,e.next=8,fetch(nggOnboardingWizard.ajaxUrl,{method:"POST",body:n});case 8:return n=e.sent,e.next=11,n.json();case 11:e.sent.success?(a=1,i(),u()):(a=0,console.log("Error saving the data")),e.next=19;break;case 15:e.prev=15,e.t0=e.catch(5),a=0,console.log("Error:",e.t0);case 19:case"end":return e.stop()}},e,null,[[5,15]])});var c,t=function(){var e=this,i=arguments;return new Promise(function(t,n){var r=c.apply(e,i);function o(e){l(r,t,n,o,a,"next",e)}function a(e){l(r,t,n,o,a,"throw",e)}o(void 0)})};return function(e){return t.apply(this,arguments)}}()):(e=t.getAttribute("data-next"))&&(a=e,i(),u())})}),e.forEach(function(t){t.addEventListener("click",function(){var e=t.getAttribute("data-prev");e&&(a=e,i(),u())})});t=document.querySelector("#nextgen-gallery-onboarding-back-to-welcome"),e=document.querySelector("#nextgen-gallery-get-started-btn");function c(e){return/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(e)}t.addEventListener("click",function(){document.querySelector(".nextgen-gallery-onboarding-wizard-intro").style={display:"flex"},document.querySelector(".nextgen-gallery-onboarding-wizard-wrapper").style="height: 100vh",document.querySelector(".nextgen-gallery-onboarding-wizard-pages").style.display="none"}),e.addEventListener("click",function(){document.querySelector(".nextgen-gallery-onboarding-wizard-intro").style.display="none",document.querySelector(".nextgen-gallery-onboarding-wizard-wrapper").style="height: auto",document.querySelector(".nextgen-gallery-onboarding-wizard-pages").style={display:"flex"}}),document.querySelectorAll(".no-clicks").forEach(function(e){e.addEventListener("click",function(e){e.preventDefault(),e.stopPropagation()})}),document.querySelector(".nextgen-gallery-onboarding-wizard-wrapper").style="height: 85vh";function s(){y.innerHTML="Please enter a valid email address.",g.disabled=!0,g.classList.add("nextgen-gallery-disabled")}var d=document.querySelector("#email_address"),g=document.querySelector("#save-opt-in"),y=document.querySelector(".nextgen-gallery-email-error"),f=(y.innerHTML="",document.querySelector("#email_opt_in")),h=(f.addEventListener("change",function(e){h()}),function(){""!==d.value&&c(d.value)||!f.checked||s(),""===d.value||c(d.value)||f.checked||s(),(""!==d.value&&c(d.value)||""===d.value&&!f.checked)&&(y.innerHTML="",g.disabled=!1,g.classList.remove("nextgen-gallery-disabled"))}),p=(d.addEventListener("input",function(e){h()}),document.querySelectorAll("input[name='eow[_user_type]']"));p.forEach(function(e){e.addEventListener("change",function(e){"other"===e.target.value?(document.querySelector("#others_div").style.display="block",document.querySelector("#others").required=!0):(document.querySelector("#others_div").style.display="none",document.querySelector("#others").required=!1),"online-store"===e.target.value?document.querySelector("#ngg-pro-upsell").style.display="block":document.querySelector("#ngg-pro-upsell").style.display="none",Array.from(p).some(function(e){return e.checked})?(g.disabled=!1,g.classList.remove("nextgen-gallery-disabled")):(g.disabled=!0,g.classList.add("nextgen-gallery-disabled"))})});var t=document.querySelectorAll(".feature"),v=[];t.forEach(function(e){e.addEventListener("click",function(t){t.target.checked?(v.includes(t.target.value)||v.push(t.target.value),document.querySelector("#".concat(t.target.value,"-desc")).style.display="block"):(v=v.filter(function(e){return e!==t.target.value}),document.querySelector("#".concat(t.target.value,"-desc")).style.display="none")})});document.querySelector("#nextgen-gallery-save-features").addEventListener("click",function(){var e;0!==v.length&&(e={action:"save_selected_addons",addons:v,nonce:nggOnboardingWizard.nonce},fetch(nggOnboardingWizard.ajaxUrl,{method:"post",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams(e).toString()}).then(function(e){return e.json()}).then(function(e){e.success}).catch(function(e){console.error("Error:",e)}),document.querySelectorAll(".selected-addon-item").forEach(function(e){e.remove()}),document.querySelectorAll(".feature").forEach(function(e){var t;e.checked&&((t=document.createElement("div")).classList.add("nextgen-gallery-col","col-sm-6","col-xs-12","nextgen-gallery-col","text-xs-left","selected-addon-item"),""!==(e=document.querySelector('input[name="'.concat(e.name,'"]')).getAttribute("data-name"))&&(t.innerHTML="".concat(S).concat(e,"</div>"),E.appendChild(t)))}))});var m=document.querySelectorAll(".recommended"),b=[],x=document.querySelector(".selected-plugins-names"),L=[],w=(m.forEach(function(e){e.addEventListener("click",function(t){t.target.checked?(b.push(t.target.value),L.push(t.target.getAttribute("data-name")),document.querySelector("#".concat(t.target.value,"-desc")).style.display="block"):(b=b.filter(function(e){return e!==t.target.value}),L=L.filter(function(e){return e!==t.target.getAttribute("data-name")}),document.querySelector("#".concat(t.target.value,"-desc")).style.display="none"),w()})}),function(){x.innerHTML="",0===L.length&&m.forEach(function(e){!e.checked||b.includes(e.value)||nggOnboardingWizard.plugins_list.includes(e.value)||(L.push(e.getAttribute("data-name")),document.querySelector("#".concat(e.value,"-desc")).style.display="block")}),0<L.length&&(x.innerHTML="The following plugins will be installed: "),L.forEach(function(e){var t=document.createElement("span");t.innerHTML="".concat(e),x.appendChild(t),L.indexOf(e)!==L.length-1&&((t=document.createElement("span")).innerHTML=", ",x.appendChild(t))})});w();document.querySelector("#nextgen-gallery-install-recommended").addEventListener("click",function(){0===b.length&&m.forEach(function(e){e.checked&&!b.includes(e.value)&&b.push(e.value)});var e={action:"install_recommended_plugins",plugins:b,nonce:nggOnboardingWizard.nonce};fetch(nggOnboardingWizard.ajaxUrl,{method:"post",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams(e).toString()}).then(function(e){return e.json()}).then(function(e){e.success}).catch(function(e){console.error("Error:",e)})});var S='<svg class=nextgen-gallery-checkmark fill=none viewBox="0 0 14 11" xmlns=http://www.w3.org/2000/svg>\n<path clip-rule=evenodd d="M10.8542 1.37147C11.44 0.785682 12.3897 0.785682 12.9755 1.37147C13.5613 1.95726 13.5613 2.907 12.9755 3.49279L6.04448 10.4238C5.74864 10.7196 5.35996 10.8661 4.97222 10.8631C4.58548 10.8653 4.19805 10.7189 3.90298 10.4238L1.0243 7.5451C0.438514 6.95931 0.438514 6.00956 1.0243 5.42378C1.61009 4.83799 2.55983 4.83799 3.14562 5.42378L4.97374 7.2519L10.8542 1.37147Z" fill=currentColor fill-rule=evenodd></path>\n</svg>',E=document.querySelector("#selected-add-ons");var q=document.querySelector(".nextgen-gallery-verify-submit"),k=document.querySelector("#license-key-message"),_=document.querySelector("#install-nextgen-gallery-addons-btn"),j=document.querySelector(".nextgen-gallery-onboarding-spinner");q.addEventListener("click",function(e){e.preventDefault(),j.style.visibility="visible",q.classList.add("nextgen-gallery-disabled"),_.disabled=!0,_.classList.add("nextgen-gallery-disabled"),k.classList.remove("nextgen-gallery-success","nextgen-gallery-error"),k.innerHTML="";function n(){j.style.visibility="hidden",q.disabled=!1,_.disabled=!1,_.classList.remove("nextgen-gallery-disabled"),q.classList.remove("nextgen-gallery-disabled")}e=document.getElementById("nextgen-gallery-settings-key").value;if(""===e)return k.classList.add("nextgen-gallery-error"),k.innerHTML="Please enter your license key.",void n();e={action:"ngg_plugin_verify_license_key","nextgen-gallery-license-key":e,nonce:nggOnboardingWizard.nonce};fetch(nggOnboardingWizard.ajaxUrl,{method:"post",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams(e).toString()}).then(function(e){return e.json()}).then(function(e){var t;e.success?(k.classList.add("nextgen-gallery-success"),k.innerHTML=e.data):(k.classList.add("nextgen-gallery-error"),k.innerHTML=null!=(t=e.data)?t:e.error),n()}).catch(function(e){k.classList.add("nextgen-gallery-error"),k.innerHTML=data.data,n(),console.log("Error:",e)})});e=function(){document.body.style.visibility="visible"},"interactive"===document.readyState||"complete"===document.readyState?e():document.addEventListener("DOMContentLoaded",e)})();