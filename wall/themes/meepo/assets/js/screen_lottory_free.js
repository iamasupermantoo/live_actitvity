var $ResultSeed,Players,Winers,audio_Running,audio_GetOne,buttonurl,hasnd,num,tagList="",numList="",cj_per=[],start=function(){num=$("#num").val(),num=parseInt(num);var t=$(".usercount-label").html();t=t.replace("人",""),t=jQuery.trim(t),t=parseInt(t),num=num<t?num:t,console.log("test"),console.log(num),window.WBActivity.hideLoading(),$(".usercount-label").html("请选择奖项..."),$(".control").hide(),cj_ready(),$(".Panel.Top").css({top:0}),$(".Panel.Bottom").css({bottom:0}),$(".Panel.Lottery").css({display:"block",opacity:1}),$ResultSeed=$(".lottery-right .result-line"),$(".control.button-run").off("click").on("click",manual_start_lottory),$(".control.button-stop").off("click").on("click",manual_stop_lottory)};start();var cj_ready=function(){cj_per=[];var t=$("#tagid").val();$.ajax({url:PATH_ACTIVITY+Path_url("ajax_act_lottory.php"),data:{action:"ready",awardid:t,from:"cj"},type:"get",dataType:"json",async:!1,success:function(t){return-1!=t.ret&&(t.ret<0?(alert(t.message),!1):(t.data&&(cj_per=t.data),$(".usercount-label").html(t.count+"人"),$(".control.button-run").fadeIn(),t.luckuser?($.each(t.luckuser,function(t,e){var a='<div class="result-line had_luck_user" style="display: block;">';a+='<div class="result-num">'+(t+1)+"</div>",a+='<i class="delLottery" onclick="delLuckUser("'+e.openid+'")"></i>',a+='<div class="user" style="background-image: url('+e.avatar+');">',a+='<span class="nick-name">'+e.nick_name+"</span></div></div>",$(".lottery-right").prepend(a)}),void $("#loading").hide()):($("#loading").hide(),!1)))}})};function tip(t,e){var a=$("#poptip"),n=$("#poptip_content");a.length<=0?(a=$("<div id='poptip'></div>").appendTo(document.body),n=$("<div id='poptip_content'>"+t+"</div>").appendTo(document.body)):(n.html(t),n.show(),a.show()),e&&setTimeout(function(){n.fadeOut(500),a.fadeOut(500)},1e3)}function tip_close(){$("#poptip").fadeOut(500),$("#poptip_content").fadeOut(500)}function changeLuck(t){var e=$(t).val(),a=$(t).find("option:selected").attr("data-image"),n=$(t).find("option:selected").text();a=""==a?"themes/meepo/assets/images/defaultaward.jpg":a,$(".lottery-award").find("img").attr("src",a),$(".lottery-award").find("p").text(n),-1!=e&&($("#loading").show(),$(".lottery-right .had_luck_user").remove(),cj_ready())}function showLayer(t){$("#layer"+t).fadeIn(),$("body").append('<div class="layerBlank"></div>')}function closeLayer(t){$(t).parents(".layerStyle").hide(),$("div").remove(".layerBlank")}function confirmLayer(t,e){$("#layer2").fadeIn(),$("body").append('<div class="layerBlank"></div>'),$("#layer2 :button:eq(0)").off().on("click",function(){delLuckUser(t,e)})}function delLuckUser(t){var e=$("#tagid option:selected").val();$.ajax({url:PATH_ACTIVITY+Path_url("lottory_remove_user"),data:{rid:scene_id,award_id:e,list_id:t},type:"post",async:!0,success:function(t){var e=$(".usercount-label").html();e=e.replace("人","");var a=0<parseInt(e)+1?parseInt(e)+1:0;$(".usercount-label").html(a+"人"),$(".lottery-right .had_luck_user").remove(),cj_ready()}})}function reset(){var t=$("#tagid option:selected").val();0!=$(".lottery-right .had_luck_user").length&&0<t&&confirm("重新抽奖、数据将无法恢复，确定吗？")&&$.ajax({url:"ajax_act_lottory.php?action=reset",data:{awardid:t,from:"cj"},type:"post",async:!0,success:function(t){$(".lottery-right .had_luck_user").remove(),cj_ready()}})}var timer,numPrizeName,luck_num,isChange=!0;function manual_start_lottory(){num=$("#num").val(),num=parseInt(num);var t=$(".usercount-label").html();if(t=t.replace("人",""),t=jQuery.trim(t),t=parseInt(t),(num=num<t?num:t)<=0)return!1;$(".control.button-run").fadeOut(1),$(".control.button-stop").fadeIn(1),start_lottory()}function start_lottory(t){if(num<=0)return!1;if(-1!=$("#tagid option:selected").val()){var e=$(".usercount-label").html();0!=(e=parseInt(e.replace("人","")))?(timer=setInterval(function(){changeNum()},120),$("#tagid").attr("disabled","true"),$("#num").attr("disabled","true")):alert("参与抽奖人数太少没法抽了！！")}else alert("请选择奖项")}function stop_lottory(){var t=$("#tagid option:selected").val();$.ajax({url:"ajax_act_lottory.php?action=ok",data:{awardid:t,from:"cj"},type:"post",dataType:"json",async:!0,success:function(t){if(!(0<t.ret))return alert(t.message),!1;var e='<div class="result-line had_luck_user" style="display: block;">';e+='<div class="result-num">'+$(".result-line").length+"</div>",e+='<i class="delLottery" onclick="delLuckUser("'+t.data.openid+'")"></i>',e+='<div class="user" style="background-image: url('+t.data.avatar+');">',e+='<span class="nick-name">'+t.data.nick_name+"</span></div></div>",$(".lottery-right").prepend(e);var a=$(".usercount-label").html();a=a.replace("人",""),a=jQuery.trim(a),a=parseInt(a),a-=1,$(".usercount-label").html(a+"人"),$(".lottery-run").find(".user").css({"background-image":"url("+t.data.avatar+")"}),$(".lottery-run").find(".nick-name").text(t.data.nick_name),clearInterval(timer),0<--num?(setTimeout(function(){start_lottory(num)},1e3),setTimeout(function(){stop_lottory()},2e3),$(".control.button-stop").fadeOut(1),$(".control.button-run").fadeOut(1)):($("#tagid").removeAttr("disabled"),$("#num").removeAttr("disabled"),$(".control.button-stop").fadeOut(1),$(".control.button-run").fadeIn(1))},error:function(t){return alert("您的网络断了，请检查网络情况，后刷新此页面！"),clearInterval(timer),!1}})}function manual_stop_lottory(){leftnum=$("#num").val(),console.log(num),stop_lottory()}function changeNum(){var t=cj_per.length-1,e=Math.round(Math.random()*t);numPrizeName=cj_per[e],luck_num=e,$(".lottery-run .user").css({"background-image":"url("+numPrizeName.avatar+")"}),$(".lottery-run .user .nick-name").html(numPrizeName.nick_name)}