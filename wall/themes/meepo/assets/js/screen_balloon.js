var audio_CutdownPlayer,audio_NewPlayer,audio_Outride,audio_Gameover,rankTopTen=[],RanksPosition=[],Players={};function findUserByID(t,e){if($.isArray(e)){for(var n=e.length;n--;)if(e[n].mid==t)return n;return-1}return-1}function mess(t){for(var e,n,a,i=Math.floor,o=Math.random,r=t.length,s=i(r/2)+1;s--;)(e=i(o()*r))!==(n=i(o()*r))&&(a=t[e],t[e]=t[n],t[n]=a);return t}function RndRank(){mess(rankTopTen)}!function(o){for(var r=0,t=["ms","moz","webkit","o"],e=0;e<t.length&&!o.requestAnimationFrame;++e)o.requestAnimationFrame=o[t[e]+"RequestAnimationFrame"],o.cancelAnimationFrame=o[t[e]+"CancelAnimationFrame"]||o[t[e]+"CancelRequestAnimationFrame"];o.requestAnimationFrame||(o.requestAnimationFrame=function(t,e){var n=(new Date).getTime(),a=Math.max(0,16-(n-r)),i=o.setTimeout(function(){t(n+a)},a);return r=n+a,i}),o.cancelAnimationFrame||(o.cancelAnimationFrame=function(t){clearTimeout(t)})}(window),function(t){t.GameTimer=function(t,e){this.__fn=t,this.__timeout=e,this.__running=!1,this.__lastTime=Date.now(),this.__stopcallback=null},t.GameTimer.prototype.__runer=function(){Date.now()-this.__lastTime>=this.__timeout&&(this.__lastTime=Date.now(),this.__fn.call(this)),this.__running?t.requestAnimationFrame(this.__runer.bind(this)):"function"==typeof this.__stopcallback&&t.setTimeout(this.__stopcallback,100)},t.GameTimer.prototype.start=function(){this.__running=!0,this.__runer()},t.GameTimer.prototype.stop=function(t){this.__running=!1,this.__stopcallback=t}}(window);var tmr_GameDataLoad,tick=1e3,LineLength=$(window).width(),PlayStep=16,flgGameStop=!1,mainTick=new GameTimer(function(){if($.each(RanksPosition,function(t,e){var n=e+PlayStep;(0==t||n<RanksPosition[t-1]-3*size/4)&&(RanksPosition[t]=n)}),setTopLeft(),flgGameStop){window.clearTimeout(tmr_GameDataLoad),mainTick.stop();for(var t=$(".tracklist").width()-size+diff,e=0;e<RanksPosition.length;e++)RanksPosition[e]=t;setTopLeft()}},tick);function gameTick(){$.each(RanksPosition,function(t,e){var n=e+PlayStep;(0==t||n<RanksPosition[t-1]-3*size/4)&&(RanksPosition[t]=n)}),setTopLeft()}function setTopLeft(){$(".tracklist .player").each(function(){var t=$(this);findUserByID(t.attr("uid"),rankTopTen)<0&&t.remove().removeClass("rotateout")}),$.each(rankTopTen,function(t,e){var n=e.mid;if($(".player.player"+n).attr("uid")!=n){if(Players[n]){if(Players[n].$elm)audio_Outride&&audio_Outride.play();else{var a=Players[n].$elm=$PlayeSeed.clone().addClass("player"+n).attr("uid",n);a.find(".head").css({"background-image":"url("+rankTopTen[t].avatar+")"}).addClass("shake"),a.find(".nickname").html(rankTopTen[t].nick_name),audio_NewPlayer&&audio_NewPlayer.play()}var i=RanksPosition[t]-2*size;i<0&&(i=0),Players[n].$elm.css({left:i,top:lineHeight*t+diff}).appendTo(".tracklist")}}else $(".player.player"+n).css({left:RanksPosition[t],top:lineHeight*t+diff})})}var gameTimeRun=function(){$.getJSON(PATH_ACTIVITY+Path_url("ajax_act_shake.php?action=working"),{roundno:CURR_ROUND},function(t){if(0==t.errno&&t.data){if($.isArray(t.data)){var e,n=(rankTopTen=t.data.slice(0,SHAKE_LINE)).length;for(i=0;i<n;i++)i<3&&100<=rankTopTen[i].progress?$("#tx"+i).attr("src",WEB_URL+"images/shake/p"+i+".jpg"):$("#tx"+i).attr("src",rankTopTen[i].avatar),$("#nc"+i).html(rankTopTen[i].nick_name),$("#ph"+i).animate({height:rankTopTen[i].progress+"%"}),0==window.paomatype&&(11==(e=i+1)&&(e=1),$("#ph"+i).css("background","url("+WEB_URL+"images/shake/bo"+e+".png) no-repeat center top")),$("#pxh"+i).animate({height:rankTopTen[i].progress+"%"})}if(4==t.status){window.clearInterval(tmr_GameDataLoad);for(var a=$(".tracklist").height()-size+diff,o=0;o<RanksPosition.length;o++)RanksPosition[o]=a;window.setTimeout(function(){showGameResult(),hideSlogan()},660)}}})};function showGameResult(){var t=$(".result-layer").show(),e=$(".result-label",t).show().addClass("pulse"),n=$(".result-cup",t).hide(),a=ROUNDS_LIST[CURR_ROUND].pnum;audio_Gameover&&audio_Gameover.play(),a<=3&&!rankTopTen[3]?$(".button.allresult",n).hide():$(".button.allresult",n).show(),CURR_ROUND<ROUND_COUNT-1?$(".button.nexttound").show():$(".button.nexttound").hide(),window.setTimeout(function(){e.fadeOut(function(){n.show(function(){1<=a&&rankTopTen[0]&&window.setTimeout(function(){var t=$PlayeSeed.clone().addClass("result").css({left:"50%","margin-left":"-65px",width:"160px",height:"160px",bottom:"150px"});t.find(".head").css({"background-image":"url("+rankTopTen[0].avatar+")"}).addClass("shake"),t.find(".nickname").html(rankTopTen[0].nick_name),t.appendTo(n).addClass("bounce")},800),2<=a&&rankTopTen[1]&&window.setTimeout(function(){var t=$PlayeSeed.clone().addClass("result").css({left:"40px",width:"100px",height:"100px",bottom:"120px"});t.find(".head").css({"background-image":"url("+rankTopTen[1].avatar+")"}).addClass("shake"),t.find(".nickname").html(rankTopTen[1].nick_name),t.appendTo(n).addClass("bounce")},1800),3<=a&&rankTopTen[2]&&window.setTimeout(function(){var t=$PlayeSeed.clone().addClass("result").css({right:"30px",width:"70px",height:"70px",bottom:"100px"});t.find(".head").css({"background-image":"url("+rankTopTen[2].avatar+")"}).addClass("shake"),t.find(".nickname").html(rankTopTen[2].nick_name),t.appendTo(n).addClass("bounce")},2800)})}).removeClass("pulse")},1e3)}var $PlayeSeed,lineHeight,size,tmr_cutdown_start,roundTime,roundLength,tmr_slogan,diff=10,resizePart=window.WBActivity.resize=function(){var t=$(".Panel.Track"),e=t.find(".tracklist").children();size=lineHeight=t.height()/SHAKE_LINE,roundLength=$(".Panel.Track .tracklist").width()-size,e.each(function(){$(this).css({height:size,"line-height":size+"px","font-size":3*size/5+"px"}).find(".track-start,.track-end").css({width:size+"px",height:size+"px"})}),$PlayeSeed=$('<div class="player"><div class="head"></div><div class="nickname"></div></div>').css({width:size-2*diff,height:size-2*diff})},start=window.WBActivity.start=function(){window.WBActivity.hideLoading();var t=document.getElementById("Audio_CutdownPlayer");t.play&&(audio_CutdownPlayer=t);var e=document.getElementById("Audio_NewPlayer");e.play&&(audio_NewPlayer=e);var n=document.getElementById("Audio_Outride");n.play&&(audio_Outride=n);var a=document.getElementById("Audio_Gameover");a.play&&(audio_Gameover=a),$(".Panel.Top").css({top:0}),$(".Panel.Bottom").css({bottom:0}),$(".Panel.Track").css({display:"block",opacity:1}),createTrack(),resizePart(),window.setTimeout(function(){nextRound()},2e3),$(".round-welcome .button-start").on("click",function(){$(".round-welcome").slideUp(function(){cutdown_start()})}),$(".button.nexttound").on("click",function(){CURR_ROUND++,CURR_ROUND_ID=ROUNDS_LIST[CURR_ROUND].id,nextRound()}),$(".button.allresult").on("click",function(){showScore(CURR_ROUND_ID)}),$(".button.reset").on("click",function(){confirm("重玩本轮会导致本轮成绩作废并清空，您确定吗？")&&$.getJSON("ajax_act_shake.php?action=reset",{roundno:CURR_ROUND},function(t){0<t.errno?nextRound():(-2==t.errno?alert("当前轮数无人参与、无法开始!"):alert("重置失败啦"),window.location.reload())})})},cutdown_start=function(){console.log("cutdown_start");var e=$(".cutdown-start"),t=1*SHAKE_INFO.ready_time+1;e.html("").show().css({"margin-left":-e.width()/2+"px","margin-top":-e.height()/2+"px","font-size":.7*e.height()+"px","line-height":e.height()+"px"}).addClass("cutdownan-imation"),tmr_cutdown_start=window.setInterval(function(){0==--t?(console.log("cutdown_start1"),$.getJSON("ajax_act_shake.php?action=start",{roundno:CURR_ROUND},function(t){if(0<=t.errno)e.html("GO!");else{if(-3==t.errno)return void setTimeout("gameTimeRun()",2e3);e.hide(),alert(t.message),window.location.reload()}}).fail(function(){alert("无法连接游戏服务器，请刷新重新开始"),window.location.reload()})):t<0?(window.clearInterval(tmr_cutdown_start),e.hide(),tmr_GameDataLoad=window.setInterval("gameTimeRun()",1500),showSlogan()):(audio_CutdownPlayer.play(),e.html(t))},1e3)},cutdown_startb=function(){console.log("cutdown_startb");var e=$(".cutdown-start"),t=1;e.html("").show().css({"margin-left":-e.width()/2+"px","margin-top":-e.height()/2+"px","font-size":.7*e.height()+"px","line-height":e.height()+"px"}).addClass("cutdownan-imation"),tmr_cutdown_start=window.setInterval(function(){0==--t?$.getJSON("ajax_act_shake.php?action=start",{roundno:CURR_ROUND},function(t){if(0<=t.errno)e.html("GO!");else{if(-3==t.errno)return void setTimeout("gameTimeRun()",2e3);e.hide(),alert(t.message),window.location.reload()}}).fail(function(){alert("无法连接游戏服务器，请刷新重新开始"),window.location.reload()}):t<0?(window.clearInterval(tmr_cutdown_start),e.hide(),tmr_GameDataLoad=window.setInterval("gameTimeRun()",1500),showSlogan()):(audio_CutdownPlayer.play(),e.html(t))},1e3)},nextRound=function(){if($(".result-layer").hide(),resethd(),-1==CURR_ROUND&&0<ROUND_COUNT||CURR_ROUND>=ROUND_COUNT)alert("轮次全部完成，直接显示中奖结果。"),$(".Panel.Track").hide(),showScore(),$(".frame-dialog .closebutton").hide();else if(0==ROUND_COUNT)alert("没有设置轮次");else{flgGameStop=!1,Players={},RanksPosition=[];for(var t=0;t<SHAKE_LINE;t++)RanksPosition[t]=0;roundTime=1e3*ROUNDS_LIST[CURR_ROUND].countdown,PlayStep=roundLength/(roundTime/tick>>0),$(".Panel.Track .tracklist").find(".player").remove(),$(".result-layer").hide().find(".player").remove(),$(".round-welcome").slideDown().find(".round-label").html("ROUND "+(CURR_ROUND+1)),2==ROUNDS_LIST[CURR_ROUND].status&&$(".round-welcome").slideUp(function(){cutdown_startb()})}};function createTrack(){for(var t="",e=0;e<SHAKE_LINE;e++)t+='<div class="trackline"><div class="track-start">'+(e+1)+'</div><div class="track-end"></div></div>';$(t).appendTo(".Track .tracklist").hide().each(function(t){var e=$(this);window.setTimeout(function(){e.show().addClass("leftfadein")},100*t)})}function showScore(t){var e=PATH_ACTIVITY+Path_url("shake_result.php")+"?roundno="+CURR_ROUND;$.showPage(e)}function showSlogan(){$(".Panel.Top").css({top:"-"+$(".Panel.Top").height()+"px"}),$(".Panel.Bottom").css({bottom:"-"+$(".Panel.Bottom").height()+"px"});var t=$.isArray(SHAKE_INFO.slogan_list)&&0<SHAKE_INFO.slogan_list.length?SHAKE_INFO.slogan_list:["再大力！","再大力,再大力！","再大力,再大力,再大力！","摇，大力摇","快点摇啊，别停！","摇啊，摇啊，摇啊","小心手机，别飞出去伤到花花草草","看灰机～～～"],e=t.length,n=$(".Panel.SloganList").css({top:"-15%"}).show();n.css({top:0,"line-height":n.height()+"px"}),tmr_slogan=window.setInterval(function(){n.html(t[Math.floor(Math.random()*e)])},1e3)}function hideSlogan(){window.clearInterval(tmr_slogan),$(".Panel.SloganList").hide(),$(".Panel.Top").css({top:0}),$(".Panel.Bottom").css({bottom:0})}function resethd(){for(i=0;i<10;i++)$("#tx"+i).attr("src",WEB_URL+"images/shake/touxiang.jpg"),$("#nc"+i).html(""),$("#ph"+i).animate({height:"0%"}),$("#pxh"+i).animate({height:"0%"})}