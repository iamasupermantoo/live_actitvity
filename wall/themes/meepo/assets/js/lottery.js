var currentprizeindex=0,leftnum=1,current_userleft=0,current_prizeleft=0,currentprizeid=0,datalist=null;$(document).ready(function(){init(),$(".btn-start").on("click",start),$(".btn-stop").on("click",stop),$(".btn-left").on("click",prevprize),$(".btn-right").on("click",nextprize),$(".icon-minus").on("click",minusnum),$(".icon-plus").on("click",plusnum)});var isstarted=!1;function start(){if(current_userleft<leftnum)return alert("你选出抽取的人数,已经超过了可以参与抽奖的人数"),!1;if(current_prizeleft<0)return alert("已经没有人可以参与抽奖了"),!1;if(0==isstarted){var t=$(".btn-start");lotterymain(leftnum),$(t).removeClass("btn-start"),$(t).addClass("btn-stop"),$(t).off("click"),$(t).on("click",stop)}isstarted=!0}var maxnum=9;function showresult(t){var e=t.length;if(maxnum<e){newdata=t.slice(0,maxnum),t=t.slice(maxnum),lotterymainresult(newdata);var n=!1;$(".lottery-scroll li").animate({top:"-100px",left:"100px",opacity:"0"},1e3,"swing",function(){0==n&&(n=!0,winnerslist(newdata),setTimeout(function(){showresult(t)},1e3))})}else{lotterymainresult(t);n=!1;$(".lottery-scroll li").animate({top:"-100px",left:"100px",opacity:"0"},1e3,"swing",function(){0==n&&(n=!0,winnerslist(t))})}}var winnerscorll=null;function winnerslist(t){for(var e="",n=0,r=t.length;n<r;n++)e+=winnerhtml(t[n]);$(e).prependTo(".lottery-win-scroll"),$(".lottery-win-scroll li").slideDown(),null==winnerscorll?(winnerscorll=$(".lottery-win-scroll")).niceScroll():setTimeout(function(){winnerscorll.getNiceScroll().resize()},500)}function lotterymainresult(t){$(".lottery-scroll").html("");for(var e="",n=0,r=t.length;n<r;n++){e+=lotteryscrollitem(t[n])}$(e).appendTo($(".lottery-scroll"))}function lotteryscrollitem(t){var e='<li><div class="lottery-item" >{{col1}}</div>{{img}}</li>';return e=""!=t.nick_name?e.replace("{{col1}}","<p>"+t.nick_name+"</p>"):e.replace("{{col1}}","<p></p>"),e=""!=t.avatar?e.replace("{{img}}",'<img src="'+t.avatar+'">'):e.replace("{{img}}","")}var newwinners=[];function stop(){ajax_act_get_result(leftnum).done(function(t){if(0<t.code){newwinners=t.data,current_userleft-=t.data.length,newwinners=newwinners.sort(function(){return Math.random()});var e=$(".winnernum_txt").text();e=parseInt(e),e+=newwinners.length,$(".winnernum_txt").text(e),showresult(newwinners)}else alert(t.message)}).fail(function(){alert("请检查一下您的网络，是否断网了")}).always(function(){isstarted=!1;var t=$(".btn-stop");$(t).removeClass("btn-stop"),$(t).addClass("btn-start"),$(t).off("click"),$(t).on("click",start),clearTimeout(lotterymain_timer)})}var lotterymain_timer=null;function lotterymain(t){$(".lottery-scroll").html(""),t=(t=maxnum<t?maxnum:t)<1?1:t;for(var e="",n=datalist.length,r=0;r<t;r++){e+=lotteryscrollitem(datalist[Math.floor(Math.random()*n)])}$(e).appendTo($(".lottery-scroll")),lotterymain_timer=setTimeout(function(){lotterymain(t)},100)}function winnerhtml(t){var e='<li><div class="lottery-avatar-bd"><div class="lottery-avatar-bg">{{image}}</div></div><div class="winner-name">{{col1}}</div></li>';return e=""!=t.nick_name?e.replace("{{col1}}",""+t.nick_name):e.replace("{{col1}}",""),e=null!=t.avatar&&""!=t.avatar?e.replace("{{image}}",'<img src="'+t.avatar+'">'):e.replace("{{image}}","")}function init(){leftnum=1,setprizeinfo(currentprizeindex),$(".lottery-num").html(1)}function nextprize(){var t=prizesdata.length;1!=t&&(t<=++currentprizeindex&&(currentprizeindex=0),setprizeinfo(currentprizeindex))}function prevprize(){var t=prizesdata.length;1!=t&&(--currentprizeindex<0&&(currentprizeindex=t-1),setprizeinfo(currentprizeindex))}function setprizeinfo(t){$("#prizedata").attr("data",prizesdata[t].id),$(".prizename_txt").text(prizesdata[t].awardname),$(".lottery-img").find("img").attr("src",prizesdata[t].imagepath),currentprizeid=prizesdata[t].id,ajax_act_get_ready().done(function(t){if(0<t.code){if(current_userleft=t.data.count,datalist=t.data.cjusers,$(".lottery-win-scroll").html(""),$(".winnernum_txt").text(0),null==t.data.luckusers)return!1;0<t.data.luckusers.length&&(winnerslist(t.data.luckusers),$(".winnernum_txt").text(t.data.luckusers.length))}else alert(t.message)}).fail(function(){alert("请检查一下您的网络，是否断网了")}).always(function(){})}function plusnum(){var t=$(".lottery-num").html();t=parseInt(t)+1,leftnum=t,$(".lottery-num").html(t)}function minusnum(){var t=$(".lottery-num").html();t=parseInt(t),leftnum=t=t-1<=1?1:t-1,$(".lottery-num").html(t)}function ajax_act_get_ready(){return $.ajax({url:"/wall/ajax_act_new_lottery.php?action=ready&awardid="+currentprizeid+"&from=cj",type:"get",dataType:"json"})}function ajax_act_get_result(t){return $.ajax({url:"/wall/ajax_act_new_lottery.php?action=ok&awardid="+currentprizeid+"&from=cj&num="+t,type:"get",dataType:"json"})}hotkeys("up",function(t){plusnum()}),hotkeys("down",function(t){minusnum()}),hotkeys("left",function(t){prevprize()}),hotkeys("right",function(t){nextprize()}),hotkeys("space",function(t){0==t.repeat&&(0==isstarted?start():stop())});