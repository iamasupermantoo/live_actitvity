!function(e,t){"function"==typeof define&&define.amd?define(["jquery"],t):t("object"==typeof exports?require("jquery"):e.jQuery)}(this,function(d){"use strict";function s(e){var t,o,i,s,r,n,a,c={};for(a=0,n=(r=e.replace(/\s*:\s*/g,":").replace(/\s*,\s*/g,",").split(",")).length;a<n&&(-1===(o=r[a]).search(/^(http|https|ftp):\/\//)&&-1!==o.search(":"));a++)t=o.indexOf(":"),i=o.substring(0,t),(s=o.substring(t+1))||(s=void 0),"string"==typeof s&&(s="true"===s||"false"!==s&&s),"string"==typeof s&&(s=isNaN(s)?s:+s),c[i]=s;return null==i&&null==s?e:c}function i(e,t,o){if(this.$element=d(e),"string"==typeof t&&(t=s(t)),o?"string"==typeof o&&(o=s(o)):o={},"string"==typeof t)t=t.replace(/\.\w*$/,"");else if("object"==typeof t)for(var i in t)t.hasOwnProperty(i)&&(t[i]=t[i].replace(/\.\w*$/,""));this.settings=d.extend({},r,o),this.path=t;try{this.init()}catch(e){if(e.message!==l)throw e}}var u="vide",r={volume:1,playbackRate:1,muted:!0,loop:!0,autoplay:!0,position:"50% 50%",posterType:"detect",resizing:!0,bgColor:"transparent",className:""},l="Not implemented";i.prototype.init=function(){var e,t,o=this,i=o.path,s=i,r="",n=o.$element,a=o.settings,c=function(e){var t,o,i,s=(e=""+e).split(/\s+/),r="50%",n="50%";for(i=0,t=s.length;i<t;i++)"left"===(o=s[i])?r="0%":"right"===o?r="100%":"top"===o?n="0%":"bottom"===o?n="100%":"center"===o?0===i?r="50%":n="50%":0===i?r=o:n=o;return{x:r,y:n}}(a.position),p=a.posterType;t=o.$wrapper=d("<div>").addClass(a.className).css({position:"absolute","z-index":-1,top:0,left:0,bottom:0,right:0,overflow:"hidden","-webkit-background-size":"cover","-moz-background-size":"cover","-o-background-size":"cover","background-size":"cover","background-color":a.bgColor,"background-repeat":"no-repeat","background-position":c.x+" "+c.y}),"object"==typeof i&&(i.poster?s=i.poster:i.mp4?s=i.mp4:i.webm?s=i.webm:i.ogv&&(s=i.ogv)),"detect"===p?function(e,t){function o(){t(this.src)}d('<img src="'+e+'.gif">').load(o),d('<img src="'+e+'.jpg">').load(o),d('<img src="'+e+'.jpeg">').load(o),d('<img src="'+e+'.png">').load(o)}(s,function(e){t.css("background-image","url("+e+")")}):"none"!==p&&t.css("background-image","url("+s+"."+p+")"),"static"===n.css("position")&&n.css("position","relative"),n.prepend(t),e="object"==typeof i?(i.mp4&&(r+='<source src="'+i.mp4+'.mp4" type="video/mp4">'),i.webm&&(r+='<source src="'+i.webm+'.webm" type="video/webm">'),i.ogv&&(r+='<source src="'+i.ogv+'.ogv" type="video/ogg">'),o.$video=d("<video>"+r+"</video>")):o.$video=d('<video><source src="'+i+'.mp4" type="video/mp4"><source src="'+i+'.webm" type="video/webm"><source src="'+i+'.ogv" type="video/ogg"></video>');try{e.prop({autoplay:a.autoplay,loop:a.loop,volume:a.volume,muted:a.muted,defaultMuted:a.muted,playbackRate:a.playbackRate,defaultPlaybackRate:a.playbackRate})}catch(e){throw new Error(l)}e.css({margin:"auto",position:"absolute","z-index":-1,top:c.y,left:c.x,"-webkit-transform":"translate(-"+c.x+", -"+c.y+")","-ms-transform":"translate(-"+c.x+", -"+c.y+")","-moz-transform":"translate(-"+c.x+", -"+c.y+")",transform:"translate(-"+c.x+", -"+c.y+")",visibility:"hidden",opacity:0}).one("canplaythrough."+u,function(){o.resize()}).one("playing."+u,function(){e.css({visibility:"visible",opacity:1}),t.css("background-image","none")}),n.on("resize."+u,function(){a.resizing&&o.resize()}),t.append(e)},i.prototype.getVideoObject=function(){return this.$video[0]},i.prototype.resize=function(){if(this.$video){var e=this.$wrapper,t=this.$video,o=t[0],i=o.videoHeight,s=o.videoWidth,r=e.height(),n=e.width();r/i<n/s?t.css({width:n+2,height:"auto"}):t.css({width:"auto",height:r+2})}},i.prototype.destroy=function(){delete d[u].lookup[this.index],this.$video&&this.$video.off(u),this.$element.off(u).removeData(u),this.$wrapper.remove()},d[u]={lookup:[]},d.fn[u]=function(e,t){var o;return this.each(function(){(o=d.data(this,u))&&o.destroy(),(o=new i(this,e,t)).index=d[u].lookup.push(o)-1,d.data(this,u,o)}),this},d(document).ready(function(){var e=d(window);e.on("resize."+u,function(){for(var e,t=d[u].lookup.length,o=0;o<t;o++)(e=d[u].lookup[o])&&e.settings.resizing&&e.resize();d("body").css("z-index","-2"),d("body").css({"background-image":"url(images/msg_btn.gif)"})}),e.on("unload."+u,function(){return!1}),d(document).find("[data-vide-bg]").each(function(e,t){var o=d(t),i=o.data(u+"-options"),s=o.data(u+"-bg");o[u](s,i)})})});