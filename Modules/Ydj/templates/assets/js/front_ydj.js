$(function(){StartPage.init()});var Btn_Start={isband:1,bind:function(){2!=this.isband&&(1==ROUNDINFO.status&&$("#start").on("click",function(){if(PRIZENUM.freezenum+PRIZENUM.leftnum<=0)return alert("本轮游戏没有奖品可以发了。"),!1;ajax_act_start().done(function(e){0<e.code?(ROUNDINFO.status=2,StartPage.hide(),GamePage.show()):alert(e.message)}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),3==ROUNDINFO.status&&($("#start").html('<i class="iconfont icon-zhongxinkaishi" style="font-size: 1em;"></i>重新开始'),$("#start").on("click",function(){if(!confirm("确定要重置这轮游戏吗？"))return!1;ajax_act_resetgame().done(function(e){0<e.code?(ROUNDINFO.status=1,clearTimeout(GamePage._checkwinner_timer),alert("游戏重置成功,3秒后系统会自动刷新页面！"),setTimeout(function(){window.location.reload()},3e3)):alert(e.message)}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})})),this.isband=2)},unbind:function(){1!=this.isband&&($("#start").off("click"),this.isband=1)},show:function(){this.bind()},hide:function(){this.unbind()}},Btn_Reset={isband:1,bind:function(){2!=this.isband&&($("#reset_btn").on("click",function(){if(!confirm("确定要结束这轮游戏吗？"))return!1;ajax_act_endgame().done(function(e){0<e.code?setTimeout(function(){window.location.reload()},500):alert(e.message)}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),this.isband=2)},unbind:function(){1!=this.isband&&($("#reset_btn").off("click"),this.isband=1)},show:function(){$("#reset_btn").show(),this.bind()},hide:function(){$("#reset_btn").hide(),this.unbind()}},Btn_result={isband:1,bind:function(){2!=this.isband&&($(".btn_result").on("click",function(){View_Result.show()}),this.isband=2)},unbind:function(){1!=this.isband&&($("#reset_btn").off("click"),this.isband=1)},show:function(){$(".btn_result").show(),this.bind()},hide:function(){$(".btn_result").hide(),this.unbind()}},View_Result={html:function(){var t="";return $.each(GamePage.winners,function(e,i){$.each(i.prizes,function(e,n){t+='<li class="b_money"><div class="b_contain">        <img src="'+i.userinfo.avatar+'" class="user_photo">        <div class="user_name">恭喜'+i.userinfo.nickname+"获得<br>"+PRIZES[e].prizename+"X"+n+'</div>        <div class="prize_info" style="background: url('+PRIZES[e].formatedtext.text+') no-repeat center;background-size: auto 100%;">        <p></p>        <span></span>        </div></div>        </li>'})}),t=""==t?"<li><p>很遗憾，本轮游戏没有人中奖哦</p></li>":t},show:function(){$(".pop_winninglist dl dd ul").html(this.html()),$(".pop_winninglist").show().animateControl("bounceIn"),$(".pop_mask").show(),$(".pop_winninglist .list").niceScroll(".pop_winninglist .list ul",{cursorcolor:"#0c52d2",cursoropacitymin:"1",cursorborder:"0",cursorborderradius:"0"}),this.btn_Close.show()},hide:function(){$(".pop_winninglist").slideUp(500,function(){$(".pop_mask").hide()}),this.btn_Close.hide()},btn_Close:{isband:1,bind:function(){2!=this.isband&&($(".btn_close").on("click",function(){View_Result.hide()}),this.isband=2)},unbind:function(){1!=this.isband&&($("#reset_btn").off("click"),this.isband=1)},show:function(){this.bind()},hide:function(){this.unbind()}}},StartPage={_showjoinlist_timer:null,init:function(){$(".begin .button .round").text("轮次编号："+ROUNDINFO.id),Btn_Reset.hide(),Btn_Start.show(),this.bindbtns(),this.showjoinlist(),GamePage.winners=WINNERS},bindbtns:function(){null!=ROUNDINFO.nextid?$(".btn_next").on("click",function(){window.location.href="/Modules/module.php?m=ydj&c=front&a=index&id="+ROUNDINFO.nextid}):$(".btn_next").hide(),null!=ROUNDINFO.previd?$(".btn_prev").on("click",function(){window.location.href="/Modules/module.php?m=ydj&c=front&a=index&id="+ROUNDINFO.previd}):$(".btn_prev").hide(),3==ROUNDINFO.status&&Btn_result.show()},hide:function(){$(".pop_winninglist_a ul li").remove(),$(".begin .button").fadeOut("fast"),$(".begin_txt").hide(),$(".left_userlist").hide(),clearTimeout(this._showjoinlist_timer)},showjoinlist:function(){var e=this;ajax_act_get_joinuserlist().done(function(e){if(!(0<e.code))return alert(e.message),!1;if($(".user_total b").text(e.data.sum),0==e.data.userlist)return!1;var n=0;6<(a=e.data.userlist.length)&&(n=a-6);for(var i=n;i<a;i++){var t=$("#user_"+e.data.userlist[i].id);0<t.length||($(".left_userlist .list_img ul").prepend('<li id="user_'+e.data.userlist[i].id+'" data-id="'+e.data.userlist[i].id+'"><img src="'+e.data.userlist[i].avatar+'" alt="'+e.data.userlist[i].nickname+'"></li>'),t.css({marginTop:"-64px"}))}$(".left_userlist .list_img ul li:gt(5)").remove();var s=$(".left_userlist .list_img ul li"),a=s.length;defobj=$.Deferred();for(i=a-1;0<=i;i--){var o=5<a?5:a-1;o-=i,$(s[i]).animate({marginTop:320-64*o+"px"},500)}}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")}).always(function(){e._showjoinlist_timer=setTimeout(function(){e.showjoinlist()},3e3)})}},GamePage={_lefttime:0,checkfrequency:3e3,times:1,ctime:1,leftprizenum:0,init:function(){Btn_Start.hide(),$(".right_winninglist").show(),$(".begin .shake-hand").addClass("a-wobble"),$(".redenvelop_box").show(),$(".countNum").show(),$(".right_winninglist .pop_winninglist_a").removeClass("pop_winninglist_a"),$(".top_package").children("div").removeClass("shake-one").addClass("shake shake-rotate"),$(".countNum b.sec").text(ROUNDINFO.duration),Btn_Reset.show(),this._lefttime=ROUNDINFO.duration;for(var e=1;e<=7;e++){if(1==e)for(var n=1;n<=1;n++)$(".redenvelop_box .redenvelop_list").append('<li class="redenvelop'+e+'" id="redenvelop'+e+"_"+n+'"></li>');if(2==e)for(n=1;n<=1;n++)$(".redenvelop_box .redenvelop_list").append('<li class="redenvelop'+e+'" id="redenvelop'+e+"_"+n+'"></li>');if(3==e)for(n=1;n<=2;n++)$(".redenvelop_box .redenvelop_list").append('<li class="redenvelop'+e+'" id="redenvelop'+e+"_"+n+'"></li>');if(4==e)for(n=1;n<=2;n++)$(".redenvelop_box .redenvelop_list").append('<li class="redenvelop'+e+'" id="redenvelop'+e+"_"+n+'"></li>');if(5==e)for(n=1;n<=3;n++)$(".redenvelop_box .redenvelop_list").append('<li class="redenvelop'+e+'" id="redenvelop'+e+"_"+n+'"></li>');if(6==e)for(n=1;n<=3;n++)$(".redenvelop_box .redenvelop_list").append('<li class="redenvelop'+e+'" id="redenvelop'+e+"_"+n+'"></li>');if(7==e)for(n=1;n<=4;n++)$(".redenvelop_box .redenvelop_list").append('<li class="redenvelop'+e+'" id="redenvelop'+e+"_"+n+'"></li>')}},show:function(){var e=this;this.init(),$(".redenvelop_box").show(),this.dropredpacket(),this.countDown(),e._checkwinner_timer=setTimeout(function(){e.checkwinner()},4e3)},hide:function(){$(".right_winninglist").hide()},dropredpacket:function(){for(var e=1;e<=7;e++){if(1==e)for(var n=1;n<=1;n++)ani_redenvelop("#redenvelop"+e+"_"+n,1500);if(2==e)for(n=1;n<=1;n++)ani_redenvelop("#redenvelop"+e+"_"+n,1200);if(3==e)for(n=1;n<=2;n++)ani_redenvelop("#redenvelop"+e+"_"+n,900+400*(n-1));if(4==e)for(n=1;n<=2;n++)ani_redenvelop("#redenvelop"+e+"_"+n,1050+300*(n-1));if(5==e)for(n=1;n<=3;n++)ani_redenvelop("#redenvelop"+e+"_"+n,1e3+200*(n-1));if(6==e)for(n=1;n<=3;n++)ani_redenvelop("#redenvelop"+e+"_"+n,800+200*(n-1));if(7==e)for(n=1;n<=4;n++){setTimeout("ani_redenvelop('#redenvelop"+e+"_"+n+"',"+(750+100*(n-1))+")",200*(n-1))}}},_checkwinner_timer:null,winners:{},newwinners:{},_show_newwinners_timer:null,checkwinner:function(){var s=this;ajax_act_get_winners().done(function(e){if(0<e.code){for(var n=0,i=e.data.length;n<i;n++){if(s.winners[e.data[n].userid])s.winners[e.data[n].userid]=s.mergewinner(s.winners[e.data[n].userid],e.data[n]);else{var t=e.data[n].prizeid;s.winners[e.data[n].userid]={prizes:{},count:1,userinfo:e.data[n].userinfo},s.winners[e.data[n].userid].prizes[t]=1}if(s.newwinners[e.data[n].userid])s.newwinners[e.data[n].userid]=s.mergewinner(s.newwinners[e.data[n].userid],e.data[n]);else{t=e.data[n].prizeid;s.newwinners[e.data[n].userid]={prizes:{},count:1,userinfo:e.data[n].userinfo},s.newwinners[e.data[n].userid].prizes[t]=1}}s.newwinners instanceof Array||(clearTimeout(s._show_newwinners_timer),s._show_newwinners_timer=setTimeout(function(){s.shownewwinners()},500))}}).fail(function(){return!1}).always(function(){s._checkwinner_timer=setTimeout(function(){s.checkwinner()},s.checkfrequency)})},mergewinner:function(e,n){return e?e.prizes=this.mergewinprizes(e.prizes,n.prizeid):($prizeid=n.prizeid,e={prizes:{$prizeid:1}}),e},mergewinprizes:function(e,n){return e[n]=e[n]?e[n]:0,e[n]++,e},shownewwinners:function(){var t=this;$.each(this.newwinners,function(e,i){return $.each(i.prizes,function(e,n){$(".pop_winning .user_photo").attr({src:i.userinfo.avatar}),$(".pop_winning .prize_img").attr({src:PRIZES[e].formatedtext.text}),$(".pop_winning .user_info p").html(i.userinfo.nickname+"获得"+PRIZES[e].prizename+"X"+i),$(".pop_winning .user_info span").text(""),$(".pop_winning").show().animateControl("bounceIn"),$(".pop_winning").animate({opacity:"1"},700,function(){$(".pop_winning").delay(1e3).animate({marginLeft:"-140px",marginTop:"-100px",opacity:"0"},500,function(){$(".pop_winning").css({marginLeft:"-310px",marginTop:"0",display:"none"}),t._showwinners(i.userinfo,e),0<t.newwinners.length&&(t._show_newwinners_timer=setTimeout(function(){t.shownewwinners()},500))})})}),delete t.newwinners[e],!1})},_showwinners:function(e,n){prize_html='<li class="prize" data-id="'+e.id+'">      <img src="'+e.avatar+'" class="user_photo">      <div class="user_info">      <p>'+e.nickname+"</p>      <span>恭喜获得"+PRIZES[n].prizename+'！</span>      </div>      <img src="'+PRIZES[n].formatedtext.text+'" class="prize_img">      </li>',$(".right_winninglist dl dd.list ul").css({marginTop:"-80px"}),$(".right_winninglist dl dd.list ul").prepend(prize_html),$(".right_winninglist dl dd.list ul").animate({marginTop:"0px"},500),$(".right_winninglist dl dd.list ul li:gt(4)").remove()},countDown:function(){var t=this,e=1e3*this._lefttime,s=(new Date).getTime()+e,a=setInterval(function(){var e=(s-(new Date).getTime())/1e3,n=0<parseInt(e)?parseInt(e):0,i=e.toFixed(2).substr(-2,2);t._lefttime=n,$(".countNum b.sec").text(n),$(".countNum b.hm").text(i),e<=0&&(clearTimeout(t._checkwinner_timer),clearInterval(a),ajax_act_endgame().done(function(e){0<e.code?(ROUNDINFO.status=3,GamePage.hide(),EndPage.show()):alert(e.message)}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")}),t.hide())},10)}},EndPage={init:function(){setTimeout(function(){$(".countNum").html('游戏已结束<b class="sec" style="display:none">0</b>')},500),$(".right_winninglist .list").addClass("pop_winninglist_a"),$(".top_package").children("div").removeClass("shake-rotate").addClass("shake-one"),setTimeout(function(){$(".top_package").children("div").removeClass("shake shake-one")},800),$(".pop_winning").hide(),Btn_Start.show(),Btn_Reset.hide(),Btn_result.show(),$(".button").show()},show:function(){this.init(),View_Result.show()}},ajax_act_resetgame=function(){return $.ajax({url:"/Modules/module.php?m=ydj&c=front&a=ajax_act_resetgame",type:"get",dataType:"json"})},ajax_act_start=function(){return $.ajax({url:"/Modules/module.php?m=ydj&c=front&a=ajax_act_start",type:"get",dataType:"json"})},ajax_act_get_joinuserlist=function(){return $.ajax({url:"/Modules/module.php?m=ydj&c=front&a=ajax_act_get_joinuserlist",type:"get",dataType:"json"})},ajax_act_get_winners=function(){return $.ajax({url:"/Modules/module.php?m=ydj&c=front&a=ajax_act_get_winners",type:"get",dataType:"json"})},ajax_act_endgame=function(){return $.ajax({url:"/Modules/module.php?m=ydj&c=front&a=ajax_act_endgame",type:"get",dataType:"json"})};function ani_redenvelop(e,n){$(e).css({top:"-160px","-webkit-transition":"top 0ms linear"});var i=parseInt($(e).width()),t=Math.random()*(290-i),s=.7*n+.3*n*Math.random();$(e).css({left:t+"px",top:"100%","-webkit-transition":"top "+s+"ms linear"}),redenvelop_timer=setTimeout("ani_redenvelop('"+e+"','"+n+"')",s),parseInt($(".countNum b.sec").text())<=0&&clearInterval(redenvelop_timer)}!function(i){i.fn.extend({animateControl:function(e,n){return this.addClass("animated "+e).one("webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",function(){n&&n(),i(this).removeClass("animated "+e)}),this}})}(jQuery);