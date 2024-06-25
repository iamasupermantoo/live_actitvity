<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:12:28
  from '/www/wwwroot/interaction/Modules/Game/templates/front/money/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c178c748462_11310109',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce54ed2ff5f2c206e4c175685370898f3cb67b5d' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Game/templates/front/money/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c178c748462_11310109 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>数钱游戏</title>
    <link rel="stylesheet" type="text/css" href="/Modules/Game/templates/front/money/assets/css/front_index.css">
</head>
<body class="FUN SHAKE">
    <audio id="Audio_CutdownPlayer" src="/Modules/Game/templates/front/money/assets/music/shake_cutdown.mp3"
        preload="preload"></audio>
    <audio id="Audio_NewPlayer" src="/Modules/Game/templates/front/money/assets/music/shake_new.mp3"
        preload="preload"></audio>
    <audio id="Audio_Gameover" src="/Modules/Game/templates/front/money/assets/music/shake_gameover.mp3"
        preload="preload"></audio>
    <div class="welcome_box" style="display: none;">
        <h3 class="welcome_title">数钱游戏</h3> 
        <div class="main_box"> 
            <div class="main_left"> 
                <!--这个可以自定义上传-->
                <img src="/Modules/Game/templates/front/money/assets/images/logo.png" class="adv_img" style=" margin-top: -53px;"> 
            </div> 
            <div class="main_right">  
                <p class="qr_tips">扫码参与数钱游戏</p> 
                <img src="" class="qrimg"> 
                <h4>参与人数：<span class="joinNum">0人</span></h4> 
                <div class="list">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <img class="avatar default" src="/Modules/Game/templates/front/money/assets/images/default.png">
                </div> 
            </div> 
        </div>
	</div>
    <div id="shu-money" class="shu-money">
        <!--开始提示窗-->
        <div class="shu-start-tooltip-box">
            <div class="shu-num-box">5</div>
        </div>
        <!--游戏未开始标题-->
        <div class="shu-title"></div>
        <!--30秒数一数动画过程-->
        <div class="cutdown-start">30</div>
        <!--排行表-->
        <div class="shu-rank-list">
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
            <div class="shu-rank-item">
                <div class="shu-rank-item-info">
                    <img src="/Modules/Game/templates/front/money/assets/images/default.png">
                    <span class="shu-rank-item-name"></span>
                    <span class="shu-rank-item-score">0</span>
                </div>
                <div class="shu-rank-item-head"></div>
                <div class="shu-rank-item-body"></div>
                <div class="shu-rank-item-footer"></div>
            </div>
        </div>
    </div>
    <div class="rank_box" style="display:none">
		<div class="rank_main">
			<div class="rankfirst">
				<div class="item rank1"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/money/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
				<div class="item rank2"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/money/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
				<div class="item rank3"> 
					<div class="avarta">
						<img src="/Modules/Game/templates/front/money/assets/images/default.png">
					</div> 
					<p>虚位以待</p> 
				</div>   
			</div>
			<!--rank 4-10-->
			<ul class="rank_others">    
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/money/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/money/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/money/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/money/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/money/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/money/assets/images/default.png">
					<p>虚位以待</p>
				</li>
				<li>
					<img class="avarta" src="/Modules/Game/templates/front/money/assets/images/default.png">
					<p>虚位以待</p>
				</li>
			</ul>
			<div class="yyy3d_btns">
			</div>
		</div>
</div>
    <?php echo '<script'; ?>
 type="text/javascript">
        var GAMECONFIG = <?php echo json_encode($_smarty_tpl->tpl_vars['config']->value);?>
;
        var CONFIGS=<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/require.min.js"
        data-main="/Modules/Game/templates/front/money/assets/js/font_index.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
