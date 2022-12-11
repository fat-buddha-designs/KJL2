var L={exports:{}};(function(h){(function(){/**
 * @preserve FastClick: polyfill to remove click delays on browsers with touch UIs.
 *
 * @codingstandard ftlabs-jsv2
 * @copyright The Financial Times Limited [All Rights Reserved]
 * @license MIT License (see LICENSE.txt)
 */function i(t,e){var n;if(e=e||{},this.trackingClick=!1,this.trackingClickStart=0,this.targetElement=null,this.touchStartX=0,this.touchStartY=0,this.lastTouchIdentifier=0,this.touchBoundary=e.touchBoundary||10,this.layer=t,this.tapDelay=e.tapDelay||200,this.tapTimeout=e.tapTimeout||700,i.notNeeded(t))return;function r(a,c){return function(){return a.apply(c,arguments)}}for(var s=["onMouse","onClick","onTouchStart","onTouchMove","onTouchEnd","onTouchCancel"],d=this,o=0,y=s.length;o<y;o++)d[s[o]]=r(d[s[o]],d);u&&(t.addEventListener("mouseover",this.onMouse,!0),t.addEventListener("mousedown",this.onMouse,!0),t.addEventListener("mouseup",this.onMouse,!0)),t.addEventListener("click",this.onClick,!0),t.addEventListener("touchstart",this.onTouchStart,!1),t.addEventListener("touchmove",this.onTouchMove,!1),t.addEventListener("touchend",this.onTouchEnd,!1),t.addEventListener("touchcancel",this.onTouchCancel,!1),Event.prototype.stopImmediatePropagation||(t.removeEventListener=function(a,c,f){var m=Node.prototype.removeEventListener;a==="click"?m.call(t,a,c.hijacked||c,f):m.call(t,a,c,f)},t.addEventListener=function(a,c,f){var m=Node.prototype.addEventListener;a==="click"?m.call(t,a,c.hijacked||(c.hijacked=function(C){C.propagationStopped||c(C)}),f):m.call(t,a,c,f)}),typeof t.onclick=="function"&&(n=t.onclick,t.addEventListener("click",function(a){n(a)},!1),t.onclick=null)}var p=navigator.userAgent.indexOf("Windows Phone")>=0,u=navigator.userAgent.indexOf("Android")>0&&!p,l=/iP(ad|hone|od)/.test(navigator.userAgent)&&!p,E=l&&/OS 4_\d(_\d)?/.test(navigator.userAgent),S=l&&/OS [6-7]_\d/.test(navigator.userAgent),w=navigator.userAgent.indexOf("BB10")>0;i.prototype.needsClick=function(t){switch(t.nodeName.toLowerCase()){case"button":case"select":case"textarea":if(t.disabled)return!0;break;case"input":if(l&&t.type==="file"||t.disabled)return!0;break;case"label":case"iframe":case"video":return!0}return/\bneedsclick\b/.test(t.className)},i.prototype.needsFocus=function(t){switch(t.nodeName.toLowerCase()){case"textarea":return!0;case"select":return!u;case"input":switch(t.type){case"button":case"checkbox":case"file":case"image":case"radio":case"submit":return!1}return!t.disabled&&!t.readOnly;default:return/\bneedsfocus\b/.test(t.className)}},i.prototype.sendClick=function(t,e){var n,r;document.activeElement&&document.activeElement!==t&&document.activeElement.blur(),r=e.changedTouches[0],n=document.createEvent("MouseEvents"),n.initMouseEvent(this.determineEventType(t),!0,!0,window,1,r.screenX,r.screenY,r.clientX,r.clientY,!1,!1,!1,!1,0,null),n.forwardedTouchEvent=!0,t.dispatchEvent(n)},i.prototype.determineEventType=function(t){return u&&t.tagName.toLowerCase()==="select"?"mousedown":"click"},i.prototype.focus=function(t){var e;l&&t.setSelectionRange&&t.type.indexOf("date")!==0&&t.type!=="time"&&t.type!=="month"?(e=t.value.length,t.setSelectionRange(e,e)):t.focus()},i.prototype.updateScrollParent=function(t){var e,n;if(e=t.fastClickScrollParent,!e||!e.contains(t)){n=t;do{if(n.scrollHeight>n.offsetHeight){e=n,t.fastClickScrollParent=n;break}n=n.parentElement}while(n)}e&&(e.fastClickLastScrollTop=e.scrollTop)},i.prototype.getTargetElementFromEventTarget=function(t){return t.nodeType===Node.TEXT_NODE?t.parentNode:t},i.prototype.onTouchStart=function(t){var e,n,r;if(t.targetTouches.length>1)return!0;if(e=this.getTargetElementFromEventTarget(t.target),n=t.targetTouches[0],l){if(r=window.getSelection(),r.rangeCount&&!r.isCollapsed)return!0;if(!E){if(n.identifier&&n.identifier===this.lastTouchIdentifier)return t.preventDefault(),!1;this.lastTouchIdentifier=n.identifier,this.updateScrollParent(e)}}return this.trackingClick=!0,this.trackingClickStart=t.timeStamp,this.targetElement=e,this.touchStartX=n.pageX,this.touchStartY=n.pageY,t.timeStamp-this.lastClickTime<this.tapDelay&&t.preventDefault(),!0},i.prototype.touchHasMoved=function(t){var e=t.changedTouches[0],n=this.touchBoundary;return Math.abs(e.pageX-this.touchStartX)>n||Math.abs(e.pageY-this.touchStartY)>n},i.prototype.onTouchMove=function(t){return this.trackingClick&&(this.targetElement!==this.getTargetElementFromEventTarget(t.target)||this.touchHasMoved(t))&&(this.trackingClick=!1,this.targetElement=null),!0},i.prototype.findControl=function(t){return t.control!==void 0?t.control:t.htmlFor?document.getElementById(t.htmlFor):t.querySelector("button, input:not([type=hidden]), keygen, meter, output, progress, select, textarea")},i.prototype.onTouchEnd=function(t){var e,n,r,s,d,o=this.targetElement;if(!this.trackingClick)return!0;if(t.timeStamp-this.lastClickTime<this.tapDelay)return this.cancelNextClick=!0,!0;if(t.timeStamp-this.trackingClickStart>this.tapTimeout)return!0;if(this.cancelNextClick=!1,this.lastClickTime=t.timeStamp,n=this.trackingClickStart,this.trackingClick=!1,this.trackingClickStart=0,S&&(d=t.changedTouches[0],o=document.elementFromPoint(d.pageX-window.pageXOffset,d.pageY-window.pageYOffset)||o,o.fastClickScrollParent=this.targetElement.fastClickScrollParent),r=o.tagName.toLowerCase(),r==="label"){if(e=this.findControl(o),e){if(this.focus(o),u)return!1;o=e}}else if(this.needsFocus(o))return t.timeStamp-n>100||l&&window.top!==window&&r==="input"?(this.targetElement=null,!1):(this.focus(o),this.sendClick(o,t),(!l||r!=="select")&&(this.targetElement=null,t.preventDefault()),!1);return l&&!E&&(s=o.fastClickScrollParent,s&&s.fastClickLastScrollTop!==s.scrollTop)?!0:(this.needsClick(o)||(t.preventDefault(),this.sendClick(o,t)),!1)},i.prototype.onTouchCancel=function(){this.trackingClick=!1,this.targetElement=null},i.prototype.onMouse=function(t){return!this.targetElement||t.forwardedTouchEvent||!t.cancelable?!0:!this.needsClick(this.targetElement)||this.cancelNextClick?(t.stopImmediatePropagation?t.stopImmediatePropagation():t.propagationStopped=!0,t.stopPropagation(),t.preventDefault(),!1):!0},i.prototype.onClick=function(t){var e;return this.trackingClick?(this.targetElement=null,this.trackingClick=!1,!0):t.target.type==="submit"&&t.detail===0?!0:(e=this.onMouse(t),e||(this.targetElement=null),e)},i.prototype.destroy=function(){var t=this.layer;u&&(t.removeEventListener("mouseover",this.onMouse,!0),t.removeEventListener("mousedown",this.onMouse,!0),t.removeEventListener("mouseup",this.onMouse,!0)),t.removeEventListener("click",this.onClick,!0),t.removeEventListener("touchstart",this.onTouchStart,!1),t.removeEventListener("touchmove",this.onTouchMove,!1),t.removeEventListener("touchend",this.onTouchEnd,!1),t.removeEventListener("touchcancel",this.onTouchCancel,!1)},i.notNeeded=function(t){var e,n,r,s;if(typeof window.ontouchstart=="undefined")return!0;if(n=+(/Chrome\/([0-9]+)/.exec(navigator.userAgent)||[,0])[1],n)if(u){if(e=document.querySelector("meta[name=viewport]"),e&&(e.content.indexOf("user-scalable=no")!==-1||n>31&&document.documentElement.scrollWidth<=window.outerWidth))return!0}else return!0;return!!(w&&(r=navigator.userAgent.match(/Version\/([0-9]*)\.([0-9]*)/),r[1]>=10&&r[2]>=3&&(e=document.querySelector("meta[name=viewport]"),e&&(e.content.indexOf("user-scalable=no")!==-1||document.documentElement.scrollWidth<=window.outerWidth)))||t.style.msTouchAction==="none"||t.style.touchAction==="manipulation"||(s=+(/Firefox\/([0-9]+)/.exec(navigator.userAgent)||[,0])[1],s>=27&&(e=document.querySelector("meta[name=viewport]"),e&&(e.content.indexOf("user-scalable=no")!==-1||document.documentElement.scrollWidth<=window.outerWidth)))||t.style.touchAction==="none"||t.style.touchAction==="manipulation")},i.attach=function(t,e){return new i(t,e)},h.exports?(h.exports=i.attach,h.exports.FastClick=i):window.FastClick=i})()})(L);(function(){console.log("test component imports")})();var T=document.querySelector(".theme--switcher input"),v=localStorage.getItem("theme");v&&(document.documentElement.setAttribute("data-theme",v),v==="light"&&(T.checked=!0));function x(h){h.target.checked?(document.documentElement.setAttribute("data-theme","dark"),localStorage.setItem("theme","dark")):(document.documentElement.setAttribute("data-theme","light"),localStorage.setItem("theme","light"))}T.addEventListener("change",x,!1);$(document).foundation();var k=document.getElementsByClassName("lazy");for(var g=0;g<k.length;g++)k[g].src=k[g].getAttribute("data-src");function b(){const h=document.getElementById("reading--block").innerText,i=225,p=h.trim().split(/\s+/).length,u=Math.ceil(p/i);document.getElementById("time").innerText=u}b();