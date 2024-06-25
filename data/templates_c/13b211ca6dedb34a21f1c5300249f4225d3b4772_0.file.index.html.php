<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:12:17
  from '/www/wwwroot/interaction/Modules/Game/templates/front/dragonboat/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c17814eb851_55673750',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13b211ca6dedb34a21f1c5300249f4225d3b4772' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Game/templates/front/dragonboat/index.html',
      1 => 1559706318,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c17814eb851_55673750 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
	<meta name="viewport" content="width=device-width, user-scalable=0, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
	<meta name="copyright" content="人人互动">
    <title>赛龙舟比赛</title>
    <link rel="stylesheet" type="text/css" href="/Modules/Game/templates/front/dragonboat/assets/css/front_index.css?t=20190114">
    <link rel="stylesheet" href="/Modules/Game/templates/front/dragonboat/assets/css/animate.min.css?v=1.1.0">
<!-- <?php echo '<script'; ?>
 src="/Modules/Game/templates/front/dragonboat/assets/js/boat_base.js"><?php echo '</script'; ?>
> -->
 </head> 
 <body> 

<audio src="/Modules/Game/templates/front/dragonboat/assets/music/slz.mp3" preload="preload" id="carrun" loop="loop"></audio>
<audio id="Audio_count" src="/Modules/Game/templates/front/dragonboat/assets/music/shake_cutdown.mp3" preload="preload"></audio>
<audio id="Audio_NewPlayer" src="/Modules/Game/templates/front/dragonboat/assets/music/shake_new.mp3" preload="preload"></audio>
<audio id="Audio_Gameover" src="/Modules/Game/templates/front/dragonboat/assets/music/shake_gameover.wav" preload="preload"></audio>

<!--yyy3d box--->
  <div class="yyy3d"> 
	   <div class="paomabeijing2"></div><!--add class okplay ---> 
	   <div class="paomabeijing"></div> <!--add class okplay ---> 
	   <div class="countdown_box"> <div class="yyy3d_title_box">距离结束 <span class="time-down">0</span> 秒</div></div>
	   <!--<div class="yyy3d_time_box"><div class="text">参与人数</div><div class="regist-num">0</div></div>-->
	  <div class="tracklist">
			
		</div>
  </div> 
  <!--yyy3d box -->
  <!--wellcome -->
	<div class="welcome_box">
			<h3 class="welcome_title">赛龙舟比赛</h3> 
			<div class="main_box"> 
				<div class="main_left"> 
					<!--这个可以自定义上传-->
					<img src="/Modules/Game/templates/front/dragonboat/assets/images/logo.png" class="adv_img" style=" margin-top: -53px;"> 
				</div> 
				<div class="main_right">  
					<p class="qr_tips">扫码参与赛龙舟互动</p> 
					<img src="" class="qrimg"> 
					<h4>参与人数：<span class="joinNum">0人</span></h4> 
					<div class="list">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
						<img class="avatar default" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					</div> 
				</div> 
			</div>
	</div>
  <!--wellcome -->
  <!--rank box--->
  <div class="rank_box" style="display:none">
		<div class="rank_main">
			<div class="rankfirst">
				<div class="item rank1"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
				<div class="item rank2"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
				<div class="item rank3"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
			</div>
			<!--rank 4-10-->
			<ul class="rank_others">    
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/dragonboat/assets/images/default.png">
					<p>虚位以待</p>
				</li>
			</ul>
			<div class="yyy3d_btns">
				<!-- <a class="paiming" href="javascript:;" title="全部排名"><img src="http://shangqiang.wxousai.com/addons/meepo_xianchang/template/mobile/app/pm.png" alt=""></a>
				<a class="nextbtn" href="javascript:;" title="下一轮"><img src="/Modules/Game/templates/front/dragonboat/assets/images/next.png" alt=""></a> 
				<a class="resetbtn" href="javascript:;" title="重玩"><img src="/Modules/Game/templates/front/dragonboat/assets/images/reset.png" alt=""></a>  -->
			</div>
		</div>
</div>
<!--rank box--->
<!---count time --->
<div class="cutdown-start"></div>
<!---count time end -->
<?php echo '<script'; ?>
>

var RoundStatus = 1;
var ready_time = 5;
var game_time = 30;
var max_score = 70;
var default_userimg = "/Modules/Game/templates/front/dragonboat/assets/images/default.png";
var post_persons = 100;
var user_interval;
var user_maxid = 0;
var rankTopTen = [];
var game_end = 0;
var total_user = [];

var msg_control = {
	ws:{},
	init:function(){
		  this.ws = new WebSocket($socket_url);
		 this.ws.onopen = this.ws_onopen;
		 this.ws.onclose = this.ws_onclose;
		 this.ws.onmessage = this.ws_onmessage;
	},
	ws_onopen:function(){
		console.log('connection...');
		var login_data = '{"type":"boat_login","client_name":"com","client_avatar":"com","room_id":"boat_19","openid":"meepo_xinchang_boat","boat_score":0}';
		msg_control.ws.send(login_data);
	},
	ws_onclose:function(e){
		layer.msg('链接失败了!',{time:5000});
	},
	ws_onmessage:function(e){
		var data =  $.parseJSON(e.data);
		switch(data.type){
			case 'ping':
				msg_control.ws.send('{"type":"pong"}');
			break;
			case 'boat_users':
			  if(game_end==0){
				show_gameuser(data.clients_list);
			  }
			break;
		}
	}
};

<?php echo '</script'; ?>
>
<!-- <?php echo '<script'; ?>
 src="/Modules/Game/templates/front/dragonboat/assets/js/screen_boat.js?t=20180927"><?php echo '</script'; ?>
> -->
<?php echo '<script'; ?>
 type="text/javascript">
var GAMECONFIG=<?php echo json_encode($_smarty_tpl->tpl_vars['config']->value);?>
;
var CONFIGS=<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/require.min.js" data-main="/Modules/Game/templates/front/dragonboat/assets/js/front_index.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
