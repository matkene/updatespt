!function(t){"function"==typeof define&&define.amd?define(["jquery","core/notification"],t):"object"==typeof exports?t(require("jquery","core/notification")):t(jQuery)}(function(l){var g=window;Object.keys||(Object.keys=function(){"use strict";var s=Object.prototype.hasOwnProperty,n=!{toString:null}.propertyIsEnumerable("toString"),r=["toString","toLocaleString","valueOf","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","constructor"],o=r.length;return function(t){if("object"!=typeof t&&("function"!=typeof t||null===t))throw new TypeError("Object.keys called on non-object");var e,a,i=[];for(e in t)s.call(t,e)&&i.push(e);if(n)for(a=0;a<o;a++)s.call(t,r[a])&&i.push(r[a]);return i}}());var y=!1;location.hash;var w=["Days","Hours","Minutes","Seconds"],i={Seconds:"Minutes",Minutes:"Hours",Hours:"Days",Days:"Years"},M={Seconds:1,Minutes:60,Hours:3600,Days:86400,Months:2678400,Years:31536e3};function n(){return Math.floor(65536*(1+Math.random())).toString(16).substring(1)}function x(t,e,a,i,s){for(var n={},r={},o={},h={},d={},u={},c=null,l=0;l<i.length;l++){var f,m=i[l];f=null===c?a/M[m]:M[c]/M[m];var p=t/M[m],_=e/M[m];s&&(p=0<p?Math.floor(p):Math.ceil(p),_=0<_?Math.floor(_):Math.ceil(_)),"Hours"!==m&&(p%=f,_%=f),n[m]=p,o[m]=Math.abs(p),r[m]=_,u[m]=Math.abs(_),h[m]=Math.abs(p)/f,d[m]=Math.abs(_)/f,c=m}return{raw_time:n,raw_old_time:r,time:o,old_time:u,pct:h,old_pct:d}}Array.prototype.indexOf||(Array.prototype.indexOf=function(t){var e=this.length>>>0,a=Number(arguments[1])||0;for((a=a<0?Math.ceil(a):Math.floor(a))<0&&(a+=e);a<e;a++)if(a in this&&this[a]===t)return a;return-1});var r={};function s(){void 0!==g.TC_Instance_List?r=g.TC_Instance_List:g.TC_Instance_List=r,function(r){for(var t=["webkit","moz"],e=0;e<t.length&&!r.requestAnimationFrame;++e)r.requestAnimationFrame=r[t[e]+"RequestAnimationFrame"],r.cancelAnimationFrame=r[t[e]+"CancelAnimationFrame"];r.requestAnimationFrame&&r.cancelAnimationFrame||(r.requestAnimationFrame=function(t,e,a){void 0===a&&(a={data:{last_frame:0}});var i=(new Date).getTime(),s=Math.max(0,16-(i-a.data.last_frame)),n=r.setTimeout(function(){t(i+s)},s);return a.data.last_frame=i+s,n},r.cancelAnimationFrame=function(t){clearTimeout(t)})}(g)}function o(t,e){this.element=t,this.container,this.listeners=null,this.data={paused:!1,last_frame:0,animation_frame:null,interval_fallback:null,timer:!1,total_duration:null,prev_time:null,drawn_units:[],text_elements:{Days:null,Hours:null,Minutes:null,Seconds:null},attributes:{canvas:null,context:null,item_size:null,line_width:null,radius:null,outer_radius:null},state:{fading:{Days:!1,Hours:!1,Minutes:!1,Seconds:!1}}},this.config=null,this.setOptions(e),this.initialize()}o.prototype.clearListeners=function(){this.listeners={all:[],visible:[]}},o.prototype.addTime=function(t){if(this.data.attributes.ref_date instanceof Date){var e=this.data.attributes.ref_date;e.setSeconds(e.getSeconds()+t)}else isNaN(this.data.attributes.ref_date)||(this.data.attributes.ref_date+=1e3*t)},o.prototype.initialize=function(t){this.data.drawn_units=[];for(var e=0;e<Object.keys(this.config.time).length;e++){var a=Object.keys(this.config.time)[e];this.config.time[a].show&&this.data.drawn_units.push(a)}l(this.element).children("div.time_circles").remove(),void 0===t&&(t=!0),!t&&null!==this.listeners||this.clearListeners(),this.container=l("<div>"),this.container.addClass("time_circles"),this.container.appendTo(this.element);var i=this.element.offsetHeight,s=this.element.offsetWidth;0===i&&(i=l(this.element).height()),0===s&&(s=l(this.element).width()),0===i&&0<s?i=s/this.data.drawn_units.length:0===s&&0<i&&(s=i*this.data.drawn_units.length);var n=document.createElement("canvas");n.width=s,n.height=i,this.data.attributes.canvas=l(n),this.data.attributes.canvas.appendTo(this.container);var r=function(){var t=document.createElement("canvas");return!(!t.getContext||!t.getContext("2d"))}();r||"undefined"==typeof G_vmlCanvasManager||(G_vmlCanvasManager.initElement(n),r=y=!0),r&&(this.data.attributes.context=n.getContext("2d")),this.data.attributes.item_size=Math.min(s/this.data.drawn_units.length,i),this.data.attributes.line_width=this.data.attributes.item_size*this.config.fg_width,this.data.attributes.radius=(.8*this.data.attributes.item_size-this.data.attributes.line_width)/2,this.data.attributes.outer_radius=this.data.attributes.radius+.5*Math.max(this.data.attributes.line_width,this.data.attributes.line_width*this.config.bg_width);e=0;for(var o in this.data.text_elements)if(this.config.time[o].show){var h=l("<div>");h.addClass("textDiv_"+o),h.css("top",Math.round(.35*this.data.attributes.item_size)),h.css("left",Math.round(e++*this.data.attributes.item_size)),h.css("width",this.data.attributes.item_size),h.appendTo(this.container);var d=l("<h4>");d.text(this.config.time[o].text),d.css("font-size",Math.round(this.config.text_size*this.data.attributes.item_size)),d.appendTo(h);var u=l("<span>");u.css("font-size",Math.round(this.config.number_size*this.data.attributes.item_size)),u.appendTo(h),this.data.text_elements[o]=u}this.start(),this.config.start||(this.data.paused=!0);var c=this;this.data.interval_fallback=g.setInterval(function(){c.update.call(c,!0)},100)},o.prototype.update=function(t){if(void 0===t)t=!1;else if(t&&this.data.paused)return;var e,a;y&&this.data.attributes.context.clearRect(0,0,this.data.attributes.canvas[0].width,this.data.attributes.canvas[0].hright);var i=this.data.prev_time,s=new Date;if(this.data.prev_time=s,null===i&&(i=s),!this.config.count_past_zero&&s>this.data.attributes.ref_date){for(var n=0;n<this.data.drawn_units.length;n++){var r=this.data.drawn_units[n];this.data.text_elements[r].text("0");var o=n*this.data.attributes.item_size+this.data.attributes.item_size/2,h=this.data.attributes.item_size/2,d=this.config.time[r].color;this.drawArc(o,h,d,0)}this.stop()}else{e=(this.data.attributes.ref_date-s)/1e3,a=(this.data.attributes.ref_date-i)/1e3;var u="smooth"!==this.config.animation,c=x(e,a,this.data.total_duration,this.data.drawn_units,u),l=x(e,a,M.Years,w,u),f=(n=0,0),m=null,p=this.data.drawn_units.slice();for(var n in w){r=w[n];if(Math.floor(l.raw_time[r])!==Math.floor(l.raw_old_time[r])&&this.notifyListeners(r,Math.floor(l.time[r]),Math.floor(e),"all"),!(p.indexOf(r)<0)){if(Math.floor(c.raw_time[r])!==Math.floor(c.raw_old_time[r])&&this.notifyListeners(r,Math.floor(c.time[r]),Math.floor(e),"visible"),!t){this.data.text_elements[r].text(Math.floor(Math.abs(c.time[r])));o=f*this.data.attributes.item_size+this.data.attributes.item_size/2,h=this.data.attributes.item_size/2,d=this.config.time[r].color;"smooth"===this.config.animation?(null===m||y||(Math.floor(c.time[m])>Math.floor(c.old_time[m])?(this.radialFade(o,h,d,1,r),this.data.state.fading[r]=!0):Math.floor(c.time[m])<Math.floor(c.old_time[m])&&(this.radialFade(o,h,d,0,r),this.data.state.fading[r]=!0)),this.data.state.fading[r]||this.drawArc(o,h,d,c.pct[r])):this.animateArc(o,h,d,c.pct[r],c.old_pct[r],(new Date).getTime()+200)}m=r,f++}}if(!this.data.paused&&!t){function _(){b.update.call(b)}var b=this;if("smooth"===this.config.animation)this.data.animation_frame=g.requestAnimationFrame(_,b.element,b);else{var v=e%1*1e3;v<0&&(v=1e3+v),v+=50,b.data.animation_frame=g.setTimeout(function(){b.data.animation_frame=g.requestAnimationFrame(_,b.element,b)},v)}}}},o.prototype.animateArc=function(t,e,a,i,s,n){if(null!==this.data.attributes.context){var r=s-i;if(.5<Math.abs(r))0===i?this.radialFade(t,e,a,1):this.radialFade(t,e,a,0);else{var o=(200-(n-(new Date).getTime()))/200;1<o&&(o=1);var h=s*(1-o)+i*o;if(this.drawArc(t,e,a,h),1<=o)return;var d=this;g.requestAnimationFrame(function(){d.animateArc(t,e,a,i,s,n)},this.element)}}},o.prototype.drawArc=function(t,e,a,i){if(null!==this.data.attributes.context){var s,n,r,o=Math.max(this.data.attributes.outer_radius,this.data.attributes.item_size/2);y||this.data.attributes.context.clearRect(t-o,e-o,2*o,2*o),this.config.use_background&&(this.data.attributes.context.beginPath(),this.data.attributes.context.arc(t,e,this.data.attributes.radius,0,2*Math.PI,!1),this.data.attributes.context.lineWidth=this.data.attributes.line_width*this.config.bg_width,this.data.attributes.context.strokeStyle=this.config.circle_bg_color,this.data.attributes.context.stroke());var h=-.5*Math.PI,d=2*Math.PI;s=h+this.config.start_angle/360*d;var u=2*i*Math.PI;n="Both"===this.config.direction?(r=!1,(s-=u/2)+u):"Clockwise"===this.config.direction?(r=!1,s+u):(r=!0,s-u),this.data.attributes.context.beginPath(),this.data.attributes.context.arc(t,e,this.data.attributes.radius,s,n,r),this.data.attributes.context.lineWidth=this.data.attributes.line_width,this.data.attributes.context.strokeStyle=a,this.data.attributes.context.stroke()}},o.prototype.radialFade=function(a,i,t,s,e){var n,r=function(t){var e=/^rgba?\(([\d]+),([\d]+),([\d]+)(,([\d\.]+))?\)$/;if(e.test(t)){var a=e.exec(t);return{r:parseInt(a[1]),g:parseInt(a[2]),b:parseInt(a[3]),a:parseInt(a[5]?a[5]:1)}}return t=t.replace(/^#?([a-f\d])([a-f\d])([a-f\d])$/i,function(t,e,a,i){return e+e+a+a+i+i}),(a=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(t))?{r:parseInt(a[1],16),g:parseInt(a[2],16),b:parseInt(a[3],16)}:null}(t),o=this,h=.2*(1===s?-1:1);for(n=0;s<=1&&0<=s;n++)!function(){var t=50*n,e="rgba("+r.r+", "+r.g+", "+r.b+", "+Math.round(10*s)/10+")";g.setTimeout(function(){o.drawArc(a,i,e,1)},t)}(),s+=h;g.setTimeout(function(){o.data.state.fading[e]=!1},50*n)},o.prototype.timeLeft=function(){if(this.data.paused&&"number"==typeof this.data.timer)return this.data.timer;var t=new Date;return(this.data.attributes.ref_date-t)/1e3},o.prototype.start=function(){g.cancelAnimationFrame(this.data.animation_frame),g.clearTimeout(this.data.animation_frame);var t=l(this.element).data("date");if(void 0===t&&(t=l(this.element).attr("data-date")),"string"==typeof t)this.data.attributes.ref_date=function(t){var e=t.match(/^[0-9]{4}-[0-9]{2}-[0-9]{2}\s[0-9]{1,2}:[0-9]{2}:[0-9]{2}$/);if(null!==e&&0<e.length){var a=t.split(" "),i=a[0].split("-"),s=a[1].split(":");return new Date(i[0],i[1]-1,i[2],s[0],s[1],s[2])}var n=Date.parse(t);return isNaN(n)?(n=Date.parse(t.replace(/-/g,"/").replace("T"," ")),isNaN(n)?new Date:n):n}(t);else if("number"==typeof this.data.timer)this.data.paused&&(this.data.attributes.ref_date=(new Date).getTime()+1e3*this.data.timer);else{var e=l(this.element).data("timer");void 0===e&&(e=l(this.element).attr("data-timer")),"string"==typeof e&&(e=parseFloat(e)),"number"==typeof e?(this.data.timer=e,this.data.attributes.ref_date=(new Date).getTime()+1e3*e):this.data.attributes.ref_date=this.config.ref_date}this.data.paused=!1,this.update.call(this)},o.prototype.restart=function(){this.data.timer=!1,this.start()},o.prototype.stop=function(){"number"==typeof this.data.timer&&(this.data.timer=this.timeLeft(this)),this.data.paused=!0,g.cancelAnimationFrame(this.data.animation_frame)},o.prototype.destroy=function(){this.clearListeners(),this.stop(),g.clearInterval(this.data.interval_fallback),this.data.interval_fallback=null,this.container.remove(),l(this.element).removeAttr("data-tc-id"),l(this.element).removeData("tc-id")},o.prototype.setOptions=function(t){if(null===this.config&&(this.default_options.ref_date=new Date,this.config=l.extend(!0,{},this.default_options)),l.extend(!0,this.config,t),g=this.config.use_top_frame?window.top:window,s(),this.data.total_duration=this.config.total_duration,"string"==typeof this.data.total_duration)if(void 0!==M[this.data.total_duration])this.data.total_duration=M[this.data.total_duration];else if("Auto"===this.data.total_duration)for(var e=0;e<Object.keys(this.config.time).length;e++){var a=Object.keys(this.config.time)[e];if(this.config.time[a].show){this.data.total_duration=M[i[a]];break}}else this.data.total_duration=M.Years,console.error("Valid values for TimeCircles config.total_duration are either numeric, or (string) Years, Months, Days, Hours, Minutes, Auto")},o.prototype.addListener=function(t,e,a){"function"==typeof t&&(void 0===a&&(a="visible"),this.listeners[a].push({func:t,scope:e}))},o.prototype.notifyListeners=function(t,e,a,i){for(var s=0;s<this.listeners[i].length;s++){var n=this.listeners[i][s];n.func.apply(n.scope,[t,e,a])}},o.prototype.default_options={ref_date:new Date,start:!0,animation:"smooth",count_past_zero:!0,circle_bg_color:"#60686F",use_background:!0,fg_width:.1,bg_width:1.2,text_size:.07,number_size:.28,total_duration:"Auto",direction:"Clockwise",use_top_frame:!1,start_angle:0,time:{Days:{show:!0,text:"Days",color:"#FC6"},Hours:{show:!0,text:"Hours",color:"#9CF"},Minutes:{show:!0,text:"Minutes",color:"#BFB"},Seconds:{show:!0,text:"Seconds",color:"#F99"}}};function e(t,e){this.elements=t,this.options=e,this.foreach()}e.prototype.getInstance=function(t){var e,a=l(t).data("tc-id");if(void 0===a&&(a=n()+n()+"-"+n()+"-"+n()+"-"+n()+"-"+n()+n()+n(),l(t).attr("data-tc-id",a)),void 0===r[a]){var i=this.options,s=l(t).data("options");"string"==typeof s&&(s=JSON.parse(s)),"object"==typeof s&&(i=l.extend(!0,{},this.options,s)),e=new o(t,i),r[a]=e}else e=r[a],void 0!==this.options&&e.setOptions(this.options);return e},e.prototype.addTime=function(e){this.foreach(function(t){t.addTime(e)})},e.prototype.foreach=function(e){var a=this;return this.elements.each(function(){var t=a.getInstance(this);"function"==typeof e&&e(t)}),this},e.prototype.start=function(){return this.foreach(function(t){t.start()}),this},e.prototype.stop=function(){return this.foreach(function(t){t.stop()}),this},e.prototype.restart=function(){return this.foreach(function(t){t.restart()}),this},e.prototype.rebuild=function(){return this.foreach(function(t){t.initialize(!1)}),this},e.prototype.getTime=function(){return this.getInstance(this.elements[0]).timeLeft()},e.prototype.addListener=function(e,a){void 0===a&&(a="visible");var i=this;return this.foreach(function(t){t.addListener(e,i.elements,a)}),this},e.prototype.destroy=function(){return this.foreach(function(t){t.destroy()}),this},e.prototype.end=function(){return this.elements},l.fn.TimeCircles=function(t){return new e(this,t)}});