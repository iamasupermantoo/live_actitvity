var PATH_ACTIVITY="";Array.prototype.indexOf||(Array.prototype.indexOf=function(i){var o=this.length,t=Number(arguments[1])||0;for((t=t<0?Math.ceil(t):Math.floor(t))<0&&(t+=o);t<o;t++)if(t in this&&this[t]===i)return t;return-1}),function(a,s){s.fn.scroll_subtitle=function(){return this.each(function(){var t=s(this);1<t.children().length&&a.setInterval(function(){var i=t.children(),o=s(i[0]);o.slideUp(2e3,function(){o.remove().appendTo(t).show()})},5e3)})},s.preloadImages=function(i,o){if(s.isArray(i)){var t=i.length;if(0<t){function n(){t<=++e&&"function"==typeof o&&a.setTimeout(o,100)}for(var e=0,r=0;r<t;r++){var c=new Image;c.onload=n,c.onerror=n,c.src=i[r]}}}},s.getUrlParam=function(i){var o=new RegExp("(^|&)"+i+"=([^&]*)(&|$)"),t=a.location.search.substr(1).match(o);return null!=t?unescape(t[2]):null},s.fn.toFillText=function(){return this.each(function(){var i=s(this),o=i.html(),t=i.height();i.html("");var n=s("<div>"+o+"</div>").appendTo(i);n.css("font-size","12px");for(var e=12;e<200;e++){if(n.height()>t){i.css("font-size",e-2+"px").html(o);break}n.css("font-size",e+"px")}})},s.fillText=function(i){var o=i.html(),t=i.height();i.html("");var n=s("<div>"+o+"</div>").appendTo(i);n.css("font-size","12px");for(var e=12;e<200;e++){if(n.height()>t){i.css("font-size",e-2+"px").html(o);break}n.css("font-size",e+"px")}},s.showPage=function(i){var o=s('<div class="frame-dialog" style="background-color:#ffd017"><div class="phbphb" id="phbphb"><img src="'+WEB_URL+'images/phbphb.png" class="phbtop" ><div class="phbk"><div class="phbbiaok"><iframe frameborder="0" style="background-color:#ffd017" src="'+i+'"></iframe></div></div></div><div class="closebutton"></div></div>');o.appendTo("body").show().on("click",".closebutton",function(){o.hide(function(){o.remove(),o=null})})},a.WBActivity={showLoginForm:function(){s(".loginform").fadeIn()},hideLoginForm:function(){s(".loginform").fadeOut()},showLoading:function(){s(".loader").fadeIn()},hideLoading:function(){s(".loader").fadeOut()}},s(function(){s(".top_title").scroll_subtitle(),s(".button-login").on("click",function(){a.WBActivity.showLoading(),s.getJSON(PATH_ACTIVITY+Path_url("pass_word"),{rid:scene_id,password:s("#password").val()},function(i){0==i.errno?(a.WBActivity.hideLoginForm(),a.WBActivity.start()):layer.msg("密码错误")}).complete(function(){a.WBActivity.hideLoading()})}),s(".mp_account_codeimage").on("click",function(){s(".bigmpcodebar").slideDown()}),s(".bigmpcodebar .closebutton").on("click",function(){s(".bigmpcodebar").slideUp()}),a.sessionStorage.getItem("loginkey")?a.WBActivity.start():(a.WBActivity.hideLoading(),a.WBActivity.showLoginForm())})}(window,jQuery);var scene_id=$.getUrlParam("rid");