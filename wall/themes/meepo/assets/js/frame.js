var nav=null;function addButton(t,e,o){var n=(n='<li class="curr funcbtns"><a class="neicon small" ><i class="{{icon}}"></i><p>{{text}}</p></a></li>'.replace("{{icon}}",t)).replace("{{text}}",e);$(n).appendTo($(".navbarmenu")),$(".navbarmenu").find(".funcbtns:last").on("click",function(){o()})}function clearFunctionButtons(){$(".navbarmenu").find(".funcbtns").remove()}function changeBg(t,e){null==BACKGROUNDIMAGE[t]&&(BACKGROUNDIMAGE[t]=[]),console.log(e),BACKGROUNDIMAGE[t].path=e,BACKGROUNDIMAGE[t].bgtype=2,-1==e.indexOf(".mp4")&&(BACKGROUNDIMAGE[t].bgtype=1),setBg(t)}function changeBgMusic(t,e,o){null==MUSIC[t]&&(MUSIC[t]=[]),MUSIC[t].bgmusicpath=e,playmusic(t,MUSIC[t].bgmusicstatus=o)}function gotoplugs(t){clearFunctionButtons(),document.getElementsByClassName("load-container")[0].style.display="block",$("iframe").attr("src",PLUGS[t].url),""==customqrcode?$("#box .qrcode").attr("src","./wall/defaultqrcode.php?from="+t):$("#box .qrcode").attr("src",customqrcode),null!=MUSIC[t]&&playmusic(t,MUSIC[t].bgmusicstatus),$("iframe").attr("src",$("iframe").attr("src")),setBg(t),CURRENTPLUG=t}function setBg(t){null!=BACKGROUNDIMAGE[t]&&(1==BACKGROUNDIMAGE[t].bgtype?($("iframe").css({"background-image":"url("+BACKGROUNDIMAGE[t].path+")"}),$(".bgvideo").find("video").attr("src","")):($("iframe").removeAttr("style"),$(".bgvideo").find("video").attr("src",BACKGROUNDIMAGE[t].path),1==$(".bgvideo").find("video")[0].paused&&$(".bgvideo").find("video")[0].play()))}function switchmusic(){1==MUSIC[CURRENTPLUG].bgmusicstatus?MUSIC[CURRENTPLUG].bgmusicstatus=2:MUSIC[CURRENTPLUG].bgmusicstatus=1,$.ajax({url:"/wall/ajax_act_set_bgmusic.php",data:{bgmusicstatus:MUSIC[CURRENTPLUG].bgmusicstatus,plugname:CURRENTPLUG},type:"get",dataType:"json",success:function(t){playmusic(CURRENTPLUG,MUSIC[CURRENTPLUG].bgmusicstatus)}})}function playmusic(t,e){var o=MUSIC[t].bgmusicpath,n=$("#bgmusic")[0];$("audio source").attr("src")!=o&&(n.pause(),$("audio source").attr("src",o),$("#bgmusic")[0].load());var s=$("#playbgmusic");s.find("i").removeClass("icon-music-on"),s.find("i").removeClass("icon-music-off"),1!=e?(s.find("i").addClass("icon-music-off"),n.paused||n.pause()):(s.find("i").addClass("icon-music-on"),n.paused&&n.play())}$(function(){window.nav=$("#show_hide_nav img").NavHandler(),$(".fullscreen").bind("click",function(t){$.fullscreen.isFullScreen()?($(this).find("i").removeClass("icon-full-screen-cancel"),$(this).find("i").addClass("icon-full-screen"),$.fullscreen.exit()):($(this).find("i").removeClass("icon-full-screen"),$(this).find("i").addClass("icon-full-screen-cancel"),$("body").fullscreen()),t.preventDefault()}),$("#box").resizeQrcodeBox(QRCODEPOS),$("iframe").removeClass("disableiframe"),$(window).on("resize",function(){$("#box").resizeQrcodeBox(QRCODEPOS)}),$("#show_qd_code").click("click",function(){$("#box").toggle()})});var countsignperson_timer=null;function countsignperson(){var e=$(".head-txt em").text();e=isNaN(e)?0:parseInt(e),$.ajax({url:"/wall/ajax_act_frame.php?action=countperson",type:"get",dataType:"json"}).done(function(t){0<t.code?e!=t.data&&$(".head-txt em").lemCounter({value_to:t.data,value_from:e}):$(".head-txt em").text("无数据"),countsignperson_timer=setTimeout(function(){countsignperson()},3e3)}).fail(function(t){$(".head-txt em").text("无数据"),countsignperson_timer=setTimeout(function(){countsignperson()},3e3)})}$(function(){$(".plug-btn").bind("click",function(){gotoplugs($(this).attr("data"))}),$("#playbgmusic").bind("click",function(){switchmusic()}),gotoplugs(CURRENTPLUG)}),$(function(){window.sessionStorage.getItem("loginkey")?($(".loader").hide(),$(".loginform").hide(),$("iframe").attr("src",$("iframe").attr("src"))):($(".loader").hide(),$(".loginform").show()),$(".button-login").on("click",function(){$(".loader").show(),$.getJSON("/wall/login.do.php",{password:$("#password").val()},function(t){0==t.errno?(window.sessionStorage.setItem("loginkey",1),$(".loginform").hide(),$("iframe").attr("src",$("iframe").attr("src")),""!=$(".bgvideo").find("video").attr("src")&&1==$(".bgvideo").find("video")[0].paused&&$(".bgvideo").find("video")[0].play(),playmusic(CURRENTPLUG,MUSIC[CURRENTPLUG].bgmusicstatus)):alert("密码错误")}).complete(function(){$(".loader").hide()})}),1!=SHOWCOUNTSIGN&&countsignperson()}),function(l,c,u,t){function r(t,e){this.$element=t,this.defaults={w:90,h:90,y:18,x:l(c).width()-118},this.options=l.extend({},this.defaults,e)}r.prototype={resize:function(){var o=this;l(u).mousemove(function(t){if(this.move){var e=u.move_target?u.move_target.posix:{x:0,y:0};(u.call_down||function(){l(this.move_target).css({top:t.pageY-e.y,left:t.pageX-e.x}),o.coorpos()}).call(this,t,e)}}).mouseup(function(t){if(l("iframe").removeClass("disableiframe"),this.move){(u.call_up||function(){}).call(this,t),l.extend(this,{move:!1,move_target:null,call_down:!1,call_up:!1});var e={w:n.width(),h:n.height(),x:n.position().left,y:n.position().top};o.coorpos(),o.ajax_set_qrcodepos(e)}}).mousedown(function(t){l("iframe").addClass("disableiframe");for(var e=(t=t||c.event).target||t.srcElement;e;){if(e.id&&"box"==e.id)return void o.coorpos();e=e.parentNode}l(".coor").css("display","none")});var n=this.$element.mousedown(function(t){l(".coor").css({display:"block"});var e=l(this).offset();this.posix={x:t.pageX-e.left,y:t.pageY-e.top},l.extend(u,{move:!0,move_target:this})}).on("mousedown",".coor-right-bottom",function(t){o.set_call_down(t,1,1)}).on("mousedown",".coor-bottom",function(t){o.set_call_down(t,0,1)}).on("mousedown",".coor-right",function(t){o.set_call_down(t,1,0)}).css({width:o.options.w,height:o.options.h,top:o.options.y,left:o.options.x})},set_call_down:function(t,e,o){var n=this,s=this.$element,i=s.width(),a=s.height(),c=t.pageX,r=t.pageY;return l.extend(u,{move:!0,call_down:function(t){1==e&&1==o?s.css({width:Math.max(80,t.pageX-c+i),height:Math.max(80,t.pageX-c+i)}):s.css({width:e?Math.max(80,t.pageX-c+i):s.width(),height:o?Math.max(80,t.pageY-r+a):s.height()}),n.coorpos()}}),!1},coorpos:function(){var t=l(this.$element).find("span");if(""==t.html())t.remove();else{var e=l(this.$element).width();t.css({"font-size":e/16+"px"});var o=l(this.$element).height(),n=l(".qrcode").position().top;l(".coor-bottom").css({top:o+n-2+"px"}),l(".coor-right").css({top:n+o/2-2+"px"}),l(".coor-right-bottom").css({top:n+o-2+"px"})}},ajax_set_qrcodepos:function(t){l.ajax({type:"POST",url:"/wall/ajax_act_set_qrcodepos.php",data:t,dataType:"json",success:function(t){0<t.code&&(QRCODEPOS=t.data)}})},toggle_qrocde:function(){this.$element.toggle()}},l.fn.resizeQrcodeBox=function(t){var e=l(c).width(),o=l(c).height(),n={w:90,h:90,y:18,x:l(c).width()-118},s=(t=l.extend({},n,t),l.extend({},t));t.x<0&&(s.x=0),t.y<0&&(s.y=0),t.x+t.w>e&&(s.x=e-t.w-20),t.y+t.h>o&&(s.y=o-t.h-20);var i=l(this).find("img");function a(t){t.preventDefault()}return i.on("click",a),i.on("mousedown",a),i.on("mousemove",a),i.on("mouseup",a),l(this).find("span").css({"font-size":s.w/16+"px"}),new r(this,s).resize()},l.fn.toggleQrcode=function(){return new r(this,options).toggle_qrocde()}}(jQuery,window,document),function(t,e,o,n){function s(t){var e=this;this.$element=t,this.$element.on("click",function(){e.toggle()})}s.prototype={show:function(){t(this.$element).attr("src","/wall/themes/meepo/assets/images/opened.png"),t("#show_hide_nav").attr("data","open"),t(".Panel.Top").css({top:0}),t(".Panel.Bottom").css({bottom:0}),t("#show_hide_nav").css("bottom","71px")},hide:function(){t(this.$element).attr("src","/wall/themes/meepo/assets/images/chosed.png"),t("#show_hide_nav").attr("data",""),t(".Panel.Top").css({top:"-"+t(".Panel.Top").height()+"px"}),t(".Panel.Bottom").css({bottom:"-"+t(".Panel.Bottom").height()+"px"}),t("#show_hide_nav").css("bottom","0px")},toggle:function(){"open"==t("#show_hide_nav").attr("data")?this.hide():this.show()}},t.fn.NavHandler=function(){return new s(this)}}(jQuery,window,document);