<?php
/* Smarty version 3.1.33, created on 2024-06-14 18:12:23
  from '/www/wwwroot/interaction/Modules/Game/templates/front/racing/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c1787d5b294_89889939',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2211d62f808d81d9388de5cbb7d1fd26bc002169' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Game/templates/front/racing/index.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c1787d5b294_89889939 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>摇一摇赛车</title>
    <link rel="stylesheet" type="text/css" href="/Modules/Game/templates/front/racing/assets/css/front_index.css">
</head>
<body class="FUN SHAKE">
    <div id="ddd">
    </div>
    <audio id="Audio_CutdownPlayer" src="/Modules/Game/templates/front/racing/assets/music/shake_cutdown.mp3" preload="preload"></audio>
    <audio id="Audio_NewPlayer" src="/Modules/Game/templates/front/racing/assets/music/shake_new.mp3" preload="preload"></audio>
    <audio id="Audio_Outride" src="/Modules/Game/templates/front/racing/assets/music/shake_outride.mp3" preload="preload"></audio>
    <audio id="Audio_Gameover" src="/Modules/Game/templates/front/racing/assets/music/shake_gameover.mp3" preload="preload"></audio>
    <div class="Panel SloganList"></div>
    <div class="Panel Track" style=" opacity: 1;">
        <div class="yyycj">
            <ul class="tracklist horizontal">
                <li>
                    <div class="zd"></div>
                    <div class="paoma">
                        <span class="xxx">
                            <i>1</i>
                        </span>
                        <span class="ma"  id="ph0">
                            <img class="symbol" id="symbol0" src="/Modules/Game/templates/front/racing/assets/images/avatar1.png" />
                            <img class="touxiang" id="tx0" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc0" class="nicheng"></span>
                        </span>
                        <span id="pxh0" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>2</i>
                        </span>
                        <span class="ma"  id="ph1">
                            <img class="symbol" id="symbol1" src="/Modules/Game/templates/front/racing/assets/images/avatar2.png" />
                            <img id="tx1" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc1" class="nicheng"></span>
                        </span>
                        <span id="pxh1" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>3</i>
                        </span>
                        <span class="ma"  id="ph2">
                            <img class="symbol" id="symbol2" src="/Modules/Game/templates/front/racing/assets/images/avatar3.png" />
                            <img id="tx2" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc2" class="nicheng"></span>
                        </span>
                        <span id="pxh2" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>4</i>
                        </span>
                        <span class="ma"  id="ph3">
                            <img class="symbol" id="symbol3" src="/Modules/Game/templates/front/racing/assets/images/avatar4.png" />
                            <img id="tx3" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc3" class="nicheng"></span>
                        </span>
                        <span id="pxh3" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>5</i>
                        </span>
                        <span class="ma"  id="ph4">
                            <img class="symbol" id="symbol4" src="/Modules/Game/templates/front/racing/assets/images/avatar5.png" />
                            <img id="tx4" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc4" class="nicheng"></span>
                        </span>
                        <span id="pxh4" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>6</i>
                        </span>
                        <span class="ma"  id="ph5">
                            <img class="symbol" id="symbol5" src="/Modules/Game/templates/front/racing/assets/images/avatar6.png" />
                            <img id="tx5" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc5" class="nicheng"></span>
                        </span>
                        <span id="pxh5" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>7</i>
                        </span>
                        <span class="ma"  id="ph6">
                            <img class="symbol" id="symbol6" src="/Modules/Game/templates/front/racing/assets/images/avatar7.png" />
                            <img id="tx6" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc6" class="nicheng"></span>
                        </span>
                        <span id="pxh6" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>8</i>
                        </span>
                        <span class="ma"  id="ph7">
                            <img class="symbol" id="symbol7" src="/Modules/Game/templates/front/racing/assets/images/avatar8.png" />
                            <img id="tx7" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc7" class="nicheng"></span>
                        </span>
                        <span id="pxh7" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>9</i>
                        </span>
                        <span class="ma"  id="ph8">
                            <img class="symbol" id="symbol8" src="/Modules/Game/templates/front/racing/assets/images/avatar9.png"/>
                            <img id="tx8" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc8" class="nicheng"></span>
                        </span>
                        <span id="pxh8" class="tutu" ></span>
                    </div>
                </li>
                <li>
                    <div class="paoma">
                        <span class="xxx">
                            <i>10</i>
                        </span>
                        <span class="ma"  id="ph9">
                            <img class="symbol" id="symbol9" src="/Modules/Game/templates/front/racing/assets/images/avatar10.png" />
                            <img id="tx9" class="touxiang" src="/Modules/Game/templates/front/racing/assets/images/touxiang.jpg">
                            <span id="nc9" class="nicheng"></span>
                        </span>
                        <span id="pxh9" class="tutu" ></span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="cutdown-end"></div>
    <div class="track-tool">
        <div style="right: 0px;bottom: 100px;position: absolute;display: none; " id="reset_btn">
            <button style="border: none;background: transparent;cursor: pointer;" ><img src="/Modules/Game/templates/front/racing/assets/images/stop_2.png" style="width:100px;"/></button>
        </div>
    </div>
    <div class="track-result"></div>
    </div>
    <!--start page start-->
    <div class="round-welcome" style="z-index:2;">
        <div class="label top">微信扫一扫、参与摇一摇</div>
        <img class="qr" src="">
        <div class="label bottom">
            <span class="shake-icon shake"></span>听从现场指挥，游戏开始后不停摇动手机</div>
        <div class="radar" style="display: block">
            <div class="round w300">
                <div class="round w200">
                    <div class="round w100">
                        <div class="round w1">
                            <div class="line roundMove"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="users"></div>
        </div>
        <div class="round-control">
            <!-- <div class="button-round round-prev">上一轮</div>
            <div class="button-round-rank">
                <i></i>本轮名次</div>
            <div class="button-round round-next">下一轮</div> -->
        </div>
        <div class="round-start-control">
            <!-- <div class="button-start">开始游戏</div>
            <div class="button-restart">重玩本轮</div> -->
        </div>
        <!-- <div class="round-label">轮次编号：无信息</div> -->
        <div class="round-label2" style="top:20%;left:7%">当前已有
            <span>
                <i class="animate-rotate2">0</i>
            </span>人加入</div>

    </div>
    <!--start page end-->
    <!--end page start-->
    <div class="result-layer" style="display: none;">
        <div class="result-label">GAME OVER</div>
        <div class="result-cup" style="margin-top:-70px;">
            <div style="display: none;width:100%;height:240px;background: url('/wall/themes/meepo/assets/images/shake/pinanlogo.png') no-repeat;background-size: contain;position: absolute;top:-70%;left:50%;transform:translateX(-50%)"></div>
        </div>
    </div>
    <!--end page end-->
    <div class="cutdown-start cutdownan-imation"></div>
    <?php echo '<script'; ?>
 type="text/javascript">
    var GAMECONFIG=<?php echo json_encode($_smarty_tpl->tpl_vars['config']->value);?>
;
    var CONFIGS=<?php echo $_smarty_tpl->tpl_vars['configs']->value;?>
;
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/require.min.js" data-main="/Modules/Game/templates/front/racing/assets/js/font_index.js"><?php echo '</script'; ?>
>
    </body>
    </html><?php }
}
