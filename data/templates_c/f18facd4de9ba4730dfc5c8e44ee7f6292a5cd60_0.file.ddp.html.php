<?php
/* Smarty version 3.1.33, created on 2024-06-14 19:02:26
  from '/www/wwwroot/interaction/wall/themes/meepo/ddp.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c2342dd3730_37284170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f18facd4de9ba4730dfc5c8e44ee7f6292a5cd60' => 
    array (
      0 => '/www/wwwroot/interaction/wall/themes/meepo/ddp.html',
      1 => 1557275348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/meepo/top_panel.html' => 1,
  ),
),false)) {
function content_666c2342dd3730_37284170 (Smarty_Internal_Template $_smarty_tpl) {
?><link rel="stylesheet" type="text/css" href="themes/meepo/assets/css/screen_lottory_free.css">
<style>

::-webkit-scrollbar-track-piece {
 background-color: rgba(0,0,0,0.6);
 border:0;border-radius: 8px;
}
::-webkit-scrollbar {
 width: 8px;
 height: 8px;
 border:0;border-radius: 8px;
}
::-webkit-scrollbar-thumb {
 background-color: #ccc;
 background-clip: padding-box;
 min-height: 28px;
 border:0;border-radius: 8px;
}
::-webkit-scrollbar-thumb:hover {
 background-color: #fb82af;
 border:0;border-radius: 8px;
}
/**/
.none, .ne, .no {
display: none;
margin: 0;
}
.member-list {height: 70%;}
.ddp { height: 100%;width: 100%; overflow: hidden;box-sizing: border-box; position:relative;border-radius: 10px;background-color: rgba(0, 0, 0, 0.15);}
.ddp .ddp_list{overflow: auto; position:absolute; top:15px; left:0; right:0; bottom:160px;margin: 0;padding: 0; }
.ddp .dibu{position: absolute;
left: 0;
right: 0;
bottom: 0;
height: 160px;
border-radius: 10px;
padding: 10px;
box-sizing: border-box;
background-color: rgba(0, 0, 0, 0.15);}
.ddp_list li {
float: left;
width: 33.3%;
height: 50%;
overflow: hidden;
list-style: none;
position: relative;
display:none;
}
@media only screen and (min-width: 1359px) {
.ddp_list li{width: 25%;}
}
@media only screen and (min-width: 1900px) {
.ddp_list li{width: 20%;}
}
.ddp_list li .libg {
position: absolute;
z-index: 1;
height: 180px;
top: 0;
left: 50%;
margin-left: -102px;
}

.ddp_list li dl {
margin: 0 auto;
width: 290px;
height: 180px;
list-style: none;
overflow: hidden;
z-index: 2;
}

.ddp_list li dl dt {
float: left;
width: 140px;
height: 140px;
list-style:none;position: relative;opacity:0;
}
dt.xl {
}
dt.xr {
margin-left: 10px;
}
.ddp_list li dl dt img {
width: 140px;
height: 140px;
border-radius: 128px;
overflow: hidden;
}
.ddp_list pre, .ddp_list bdo {
height: 60px;
width: 60px;
padding: 0;
margin: 0;
position: absolute;
right: 0;
bottom: 0;
display: block;
quotes: none;
}
pre {
background: url(themes/meepo/assets/images/ddp/sex_float_man.png);background-size:100% auto;
}
bdo {
background: url(themes/meepo/assets/images/ddp/sex_float_ms.png);background-size:100% auto;
left: 0;
}
.ddp_list pre {
-webkit-transform: rotate(90deg); 
}
.ddp_list bdo {
-webkit-transform: rotate(-90deg);
}
.ddp_kind_show pre, .ddp_kind_show bdo {
height: 60px;
width: 60px;
padding: 0;
margin: 0;
position: absolute;
right: 0;
top: 0;
display: block;
quotes: none;
}
.ddp_kind_show pre {
}
.ddp_kind_show bdo {

}
.ddp_list li dl dt p {
text-align: center;
width: 140px;
height: 30px;
overflow: hidden;
vertical-align: middle;
line-height: 30px;
text-shadow: none;
color: #FFF;
margin: 0;text-shadow: 0 1px 3px rgba(0, 0, 0, 0.55);
}
.ddp_list li #num, .ddp_list li #num_not {
width: 42px;
height: 42px;
font-size: 18px;
line-height:36px;
text-align: center;
background: url(themes/meepo/assets/images/ddp/xin.png) no-repeat;
background-size: 100% auto;
position: absolute;
top: 0;
left: 50%;
margin-left: -21px;
color:#FFF; opacity:0;
}
.font20 {
font-size: 20px; overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
}
.ddp_list li.view { display:block}
.view #num{-webkit-animation:mm01 1.5s 0s ease forwards; -moz-animation:1.5s 0s ease forwards ;}
.view dl .xl{-webkit-animation:mm02 1s 1.2s ease forwards; -moz-animation:1s 1.2s ease forwards ;}
.view dl .xr{-webkit-animation:mm03 1s 1.5s ease forwards; -moz-animation:1s 1.5s ease forwards ;}
.view dl .xl img{-webkit-animation:mm04 2s 1.2s ease forwards; -moz-animation:2s 1.2s ease forwards ;}
.view dl .xr img{-webkit-animation:mm05 2s 1.5s ease forwards; -moz-animation:2s 1.5s ease forwards ;}


@-webkit-keyframes mm01{
0%{ opacity:0;margin-left: 0;width:0; height:0 }
50%{opacity:0.8;margin-left: -102px;width: 205px; height:180px;font-size: 60px;line-height: 180px;}
100%{opacity:1;margin-left: -21px;width: 42px; height:37px}
}
@-webkit-keyframes mm02{
0%{ opacity:0; -webkit-transform: scale(0) translateX(0)}
90%{ opacity:1; -webkit-transform: scale(1) translateX(10px)}
100%{opacity:1;-webkit-transform: scale(1) translateX(0)}
}
@-webkit-keyframes mm03{
0%{ opacity:0; -webkit-transform: scale(0) translateX(0)}
90%{ opacity:1; -webkit-transform: scale(1) translateX(-10px)}
100%{opacity:1;-webkit-transform: scale(1) translateX(0)}
}
@-webkit-keyframes mm04{
0%{ -webkit-transform:rotate(0)}
100%{-webkit-transform:rotate(360deg)}
}
@-webkit-keyframes mm05{
0%{ -webkit-transform:rotate(0)}
100%{-webkit-transform:rotate(-360deg)}
}
@-webkit-keyframes mm06{
0%{ -webkit-transform:rotate(360deg)}
100%{-webkit-transform:rotate(720deg)}
}
@-webkit-keyframes mm07{
0%{ -webkit-transform:rotate(-360deg)}
100%{-webkit-transform:rotate(-720deg)}
}
/**/
.ddp_kind_show{width: 922px;
margin: 0 auto;
height: 100%;
overflow: hidden;
text-align: center; border-radius:10px;}
.ddp_kind_show dl{ width:400px; height:106px;margin: 0; position:relative;}
.ddp_kind_show dl dt{width:106px; height:106px; overflow:hidden;}
.ddp_kind_show dl dt img{ width:106px; height:106px; border-radius:106px;}
.ddp_kind_show dl dd{width: 300px;
margin: 0;
overflow: hidden;
white-space: nowrap;
text-overflow: ellipsis;
line-height: 110px;
position: absolute;
top: 0;
font-size: 36px;
color: #fff;
text-shadow: 0 1px 5px rgba(0, 0, 0, 0.55);}
.ddp_kind_show .ddp_kind_man{ float:left; width:400px; height:106px; overflow:hidden; text-align:right;}
.ddp_kind_show .ddp_kind_man dt{ float:right; position:relative;}
.ddp_kind_show .ddp_kind_man dd{ right: 120px;}
.ddp_kind_show .ddp_kind_ms{ float:right; width:400px; height:106px; overflow:hidden; text-align:left;}
.ddp_kind_show .ddp_kind_ms dl{}
.ddp_kind_show .ddp_kind_ms dt{ float:left; position:relative;}
.ddp_kind_show .ddp_kind_ms dd{ left: 120px;}
.ddp_count{ }
.ddp_count td, .ddp_count th{ font-size:16px; font-weight:normal; line-height:14px; color:#FFF;text-shadow: rgba(0, 0, 0, 0.3) 0px 1px 3px;}
.ddp_count_left{ padding-right:12px; text-align:right; font-size:12px; font-weight:normal; line-height:14px; }
.ddp_count_right{ padding-left:12px; text-align:left; font-size:12px; font-weight:normal; line-height:14px; }
.ddp_kind_show #ddp_kind_button{float: left;
margin: 0 10px;
width: 100px;
height: 100px;
overflow: hidden;
line-height: 90px;
background: #ff8686;
border-radius: 10px;
text-align: center;
vertical-align: middle;
font-size: 50px;
font-weight: bold;
color: #ffffff;
cursor:pointer;box-shadow: 0 1px 5px rgba(0, 0, 0, 0.32),0 -5px 0px 0px rgba(214, 88, 88, 1) inset;
}
.ddp_kind_show #ddp_kind_button:hover{
background: #FF7676;
}
.ddp_kind_show #ddp_kind_button:active{
border:0;box-shadow:0 1px 5px rgba(0, 0, 0, 0.32),0 0 10px rgba(0, 0, 0, 0.52) inset;line-height: 100px; 
}
.ddp_count_button{-webkit-border-radius:0;-webkit-appearance:none;outline: none; cursor:pointer; display:inline-block;width: 95%;
height:30px; line-height:25px;
background-color: #f9f9f9;
background: #fff;
color: #000;
border:0;border-radius: 3px;font-size: 12px;box-shadow: 0 1px 5px rgba(0, 0, 0, 0.32),0 -4px 0px 0px #ccc inset;
}
.ddp_count_button:hover{background: #ff8686;box-shadow:0 1px 5px rgba(0, 0, 0, 0.32),0 -4px 0px 0px rgba(214, 88, 88, 1) inset;}
.ddp_count_button:active{border:0;box-shadow:0 1px 5px rgba(0, 0, 0, 0.32),0 0 10px rgba(0, 0, 0, 0.52) inset;}

.ddp_list li:hover .closeico{ display:block;}
.closeico{
position: absolute;
display: block;
width: 30px;
height: 30px;
top: 43px;
left: 50%;
margin-left: -15px;
background: #000;
border-radius: 50%;
text-indent: -9999px;
z-index: 3;
cursor: pointer;
display:none;
}

.closeico:before {
position: absolute;
top: 5px;
left: 14px;
content: "";
display: block;
width: 2px;
height: 20px;
background: #FFFFFF;-webkit-transform: rotate(45deg);
}
.closeico:after {
position: absolute;
top: 14px;
left: 5px;
content: "";
display: block;
width: 20px;
height: 2px;
background: #FFFFFF;-webkit-transform: rotate(45deg);
}
.closeico:hover{
background: #fff;
}
.closeico:hover:before{
background: #fb82af;
}
.closeico:hover:after{
background: #fb82af;
}

/**/
.xinhua{ display:none}
.xinhua.view{ display: block}
.xinhua img{position: absolute;bottom:140px;;left: 50%;margin-left: -5px;width: 10px; }
.xinhua .x001{-webkit-animation:x001 2s 0s ease-in infinite; -moz-animation:2s 0s ease-in infinite ;}
.xinhua .x002{-webkit-animation:x002 2s 0.5s ease-in infinite; -moz-animation:2s 0.5s ease-in infinite ;}
.xinhua .x003{-webkit-animation:x003 2s 1s ease-in infinite; -moz-animation:2s 1s ease-in infinite ;}
.xinhua .x004{-webkit-animation:x004 2s 1.5s ease-in infinite; -moz-animation:2s 1.5s ease-in infinite ;}
.xinhua .x005{-webkit-animation:x005 2s 2s ease-in infinite; -moz-animation:2s 2s ease-in infinite ;}
.xinhua .x006{-webkit-animation:x006 2s 2.5s ease-in infinite; -moz-animation:2s 2.5s ease-in infinite ;}
@-webkit-keyframes x001{
0%{ -webkit-transform: translate(0,0)  scale(1);opacity:1; }
100%{-webkit-transform:  translate(100px,-160px) scale(10) rotate(60deg);opacity:0;}
}
@-webkit-keyframes x002{
0%{ -webkit-transform: translate(0,0)  scale(1);opacity:1; }
100%{-webkit-transform:  translate(0,-180px) scale(10) rotate(-60deg);opacity:0;}
}
@-webkit-keyframes x003{
0%{ -webkit-transform: translate(0,0)  scale(1);opacity:1; }
100%{-webkit-transform:  translate(-100px,-170px) scale(10) rotate(-30deg);opacity:0;}
}
@-webkit-keyframes x004{
0%{ -webkit-transform: translate(0,0)  scale(1);opacity:1; }
100%{-webkit-transform:  translate(160px,-180px) scale(10) rotate(-40deg);opacity:0;}
}
@-webkit-keyframes x005{
0%{ -webkit-transform: translate(0,0)  scale(1);opacity:1; }
100%{-webkit-transform:  translate(0px,-190px) scale(10) rotate(-40deg);opacity:0;}
}
@-webkit-keyframes x006{
0%{ -webkit-transform: translate(0,0)  scale(1);opacity:1; }
100%{-webkit-transform:  translate(-160px,-140px) scale(10) rotate(-30deg);opacity:0;}
}

 /* #ddd{ display:none;}  */
 
</style> 
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/qdbase.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="themes/meepo/assets/js/screen_qd.js" type="text/javascript" charset="utf-8"><?php echo '</script'; ?>
>
</head>
<body class="FUN WALL">
<?php $_smarty_tpl->_subTemplateRender("file:themes/meepo/top_panel.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="Panel Lottery" style="display: block; opacity: 1;" >
   
    <div class="ddp" id="ddd">
    <div id="ddp_list">
            <ul class="ddp_list">
                                        <p class="cl"></p>
            </ul>
            </div>
            
            
    <div class="dibu">
    
    <div id="ddp_kind" class="none">
            	<div id="ddp_kind_man">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['men']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                   <dl id="uid<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><p class="none"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</p><dt><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['avatar'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nick_name'];?>
" /><pre></pre></dt><dd><?php echo $_smarty_tpl->tpl_vars['row']->value['nick_name'];?>
</dd></dl>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            	<div id="ddp_kind_ms">
				 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['women']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                 <dl id="uid<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"><p class="none"><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</p><dt><img src="<?php echo $_smarty_tpl->tpl_vars['row']->value['avatar'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['nick_name'];?>
" /><bdo></bdo></dt><dd><?php echo $_smarty_tpl->tpl_vars['row']->value['nick_name'];?>
</dd></dl>
				  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
               </div>
            </div>
    
    <div class="ddp_kind_show">
            	<div class="ddp_kind_man">
                	<dl><dt><img src="themes/meepo/assets/images/ddp/cj_def.gif" /><pre></pre></dt><dd>&nbsp;</dd></dl>
                </div>
                <div id="ddp_kind_button" onClick="ddp_scroll_set()">碰</div>
            	<div class="ddp_kind_ms">
                	<dl><dt><img src="themes/meepo/assets/images/ddp/cj_def.gif" /><bdo></bdo></dt><dd>&nbsp;</dd></dl>
                </div>
                <table width="922" height="36" border="0" cellspacing="0" cellpadding="0" class="ddp_count">
                  <tbody><tr>
                    <th width="400" class="ddp_count_left">左池：<?php echo count($_smarty_tpl->tpl_vars['men']->value);?>
 人</th>
                    <td width="102" align="center" ><input type="button" class="ddp_count_button" onClick="ddp_insert_remove();" value="下一轮"></td>
                    <td width="400" class="ddp_count_right">右池：<?php echo count($_smarty_tpl->tpl_vars['women']->value);?>
 人</td>
                  </tr>
                </tbody></table>
            </div>
    
     </div>
    
    <div id="xinhua" class="xinhua view">
                <img class="x001" src="themes/meepo/assets/images/ddp/xin.png">
                <img class="x002" src="themes/meepo/assets/images/ddp/xin.png">
                <img class="x003" src="themes/meepo/assets/images/ddp/xin.png">
                <img class="x004" src="themes/meepo/assets/images/ddp/xin.png">
                <img class="x005" src="themes/meepo/assets/images/ddp/xin.png">
                <img class="x006" src="themes/meepo/assets/images/ddp/xin.png">
    </div>
    <?php echo '<script'; ?>
 src="themes/meepo/assets/plugs/hotkeys-master/dist/hotkeys.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="themes/meepo/assets/js/bindhotkeys.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
 
 function senddh(n){
 }
   
 
/* 对对碰 JS*/
var DUIDUIPENG_SWITCH = 1;	// 开关
var DUIDUIPENG_STATUS = 0;	// 状态，0表示停止，1表示正在运行
var DUIDUIPENG_CLICK = 1;	// 底部控制栏播放器状态，0停止，1运行

var ddp_kind_oncenum = 1;	// 每次碰取数量

var ddp_kind_sn = 0;
var ddp_scroll_time = 50;	// 滚动间隔
var ddp_scroll_status = 0;	// 名单滚动状态 0停止，1滚动，2等待



var man_uids = '';	// 随机取到的男士uid合集
var ms_uids = '';	// 随机取到的女士uid合集

// 对对碰滚动设置
function ddp_scroll_set(){

	if(!ddp_count_button_status) return false;

	if(ddp_scroll_status==0){	// 当前停止
	// 判断对对碰人数是否已满
		var allNum = 10;	// 需碰对数
		var numed = $(".ddp_list li").size();	// 已碰对数
	 
		if($("#ddp_kind_man dl").size() && $("#ddp_kind_ms dl").size()){	// 奖池中有人
		ddp_scroll_status = 1;
		// 设置文字
		$("#ddp_kind_button").text("停");
		// 写入名单
		$(".ddp_kind_show .ddp_kind_man").html($("#ddp_kind #ddp_kind_man").html());
		$(".ddp_kind_show .ddp_kind_ms").html($("#ddp_kind #ddp_kind_ms").html());
		ddp_scroll();
		}else{	// 奖池为空
		alert("对对碰池为空！");
		}
	}else if(ddp_scroll_status==1){	//正在滚动

		ddp_scroll_status = 2;
		
		var allNum = 10;	// 需碰对数
		var numed = $(".ddp_list li").size();	// 已碰对数
		var num = 0;
		// 计算一次抽取人数
		if(numed >= allNum)
			num = 1;
		else{
			if(ddp_kind_oncenum > allNum-numed) num = allNum-numed; else num = ddp_kind_oncenum;
		}

		var scroll_man_size = $("#ddp_kind #ddp_kind_man dl").size();	// 奖池男士
		var scroll_ms_size = $("#ddp_kind #ddp_kind_ms dl").size();	// 奖池女士

		if(num>scroll_man_size && num>scroll_ms_size){
			if(scroll_man_size>scroll_ms_size) num = scroll_ms_size; else num = scroll_man_size;	// 再次计算一次碰取对数
		}

		// 随机取男士
		var man_items = getNotRepeatArray(scroll_man_size, num);
		var man_randNumArr = new Array();
		var man_randUidArr = new Array();
		var man_randDtArr = new Array();
		var man_randDdArr = new Array();
		man_uids = '';
		for (var key in man_items) {
			man_randNumArr[key] = man_items[key];
			man_randUidArr[key] = $(".ddp_kind_show .ddp_kind_man dl:eq("+man_items[key]+") p").text();
			man_randDtArr[key] = $(".ddp_kind_show .ddp_kind_man dl:eq("+man_items[key]+") dt").html();
			man_randDdArr[key] = $(".ddp_kind_show .ddp_kind_man dl:eq("+man_items[key]+") dd").html();
			man_uids = man_uids + "," + man_randUidArr[key];
		}
		// 随机取女士
		var ms_items = getNotRepeatArray(scroll_ms_size, num);
		var ms_randNumArr = new Array();
		var ms_randUidArr = new Array();
		var ms_randDtArr = new Array();
		var ms_randDdArr = new Array();
		ms_uids = '';
		for (var key in ms_items) {
			ms_randNumArr[key] = ms_items[key];
			ms_randUidArr[key] = $(".ddp_kind_show .ddp_kind_ms dl:eq("+ms_items[key]+") p").text();
			ms_randDtArr[key] = $(".ddp_kind_show .ddp_kind_ms dl:eq("+ms_items[key]+") dt").html();
			ms_randDdArr[key] = $(".ddp_kind_show .ddp_kind_ms dl:eq("+ms_items[key]+") dd").html();
			ms_uids = ms_uids + "," + ms_randUidArr[key];
		}
		
		for (var key in man_randNumArr) {
			//alert('key='+key+',randNum='+randNumArr[key]);
			// 从碰池删除用户
			$("#ddp_kind #ddp_kind_man #uid"+man_randUidArr[key]).remove();
			$("#ddp_kind #ddp_kind_ms #uid"+ms_randUidArr[key]).remove();
			// 写滚动区域碰对成功者
			//var man_html = '<dl><dt>'+man_randDtArr[key]+'</dt><dd>'+man_randDdArr[key]+'</dd></dl>';
			var man_html = '<dl><dt><img src="themes/meepo/assets/images/ddp/cj_def.gif" /><pre></pre></dt><dd>&nbsp;</dd></dl>';
			$(".ddp_kind_show .ddp_kind_man").html(man_html);
			//var ms_html = '<dl><dt>'+ms_randDtArr[key]+'</dt><dd>'+ms_randDdArr[key]+'</dd></dl>';
			var ms_html = '<dl><dt><img src="themes/meepo/assets/images/ddp/cj_def.gif" /><bdo></bdo></dt><dd>&nbsp;</dd></dl>';
			$(".ddp_kind_show .ddp_kind_ms").html(ms_html);
			// 写入碰对者
			var size = $(".ddp_list li").size()+1;	// 查已碰对成功数量
			var licls = ' class="view"';
			
			
			var list_html = '<li'+licls+'><dl><dt class="xl">'+man_randDtArr[key]+'<p class="font20">'+man_randDdArr[key]+'</p></dt><dt class="xr">'+ms_randDtArr[key]+'<p class="font20">'+ms_randDdArr[key]+'</p></dt></dl><div id="num">'+size+'</div></li>';
			$(".ddp_list").prepend(list_html);
		}
		
		var man_num = $("#ddp_kind #ddp_kind_man dl").size();
		$(".ddp_count_left").text( '左池：'+man_num+' 人' );
		var ms_num = $("#ddp_kind #ddp_kind_ms dl").size();
		$(".ddp_count_right").text( '右池：'+ms_num+' 人' );
		
		// 初始化
		$("#ddp_kind_button").text("碰");
		ddp_scroll_status = 0;
		ddp_kind_sn = 0;
		
		 
		// 因网速原因且无太大必要，暂且取消写库
		// AJAX请求数据，写入完成返回1，删除用户写中奖者；错误返回-1，提示异常；2表示中奖者重复
	}else{	// 等待
	// 暂时不执行操作
	}
}

// 写已数人员并且清空列表
var ddp_count_button_status = 1;	// 下一轮按钮状态，1正常，0等待（正在AJAX数据）
function ddp_insert_remove(){
	if(ddp_count_button_status){	// 联网AJAX数据
		if($(".ddp .ddp_list li").size()==0) return false;
		ddp_count_button_status = 0;
		$(".ddp_count_button").attr('value','稍等...');
		$(".ddp_count_button").attr('value','下一轮');
		$(".ddp .ddp_list").html('');
		ddp_count_button_status = 1;
	}
}

// 参与者滚动
function ddp_scroll(){
	if(ddp_scroll_status){
		// 男士
		var ddp_kind_man = $(".ddp_kind_man dl");
		$(ddp_kind_man.get(ddp_kind_sn)).slideUp(ddp_scroll_time);
		$(".ddp_kind_man").append('<dl>'+$(ddp_kind_man.get(ddp_kind_sn)).html()+'</dl>');
		// 女士
		var ddp_kind_ms = $(".ddp_kind_ms dl");
		$(ddp_kind_ms.get(ddp_kind_sn)).slideUp(ddp_scroll_time);
		$(".ddp_kind_ms").append('<dl>'+$(ddp_kind_ms.get(ddp_kind_sn)).html()+'</dl>');
		ddp_kind_sn++;
		window.setTimeout(ddp_scroll, ddp_scroll_time);
	
	}
}

 /*
 * 获取随机数
 */
function GetRandomNum(Min,Max){
	var Range = Max - Min;
	var Rand = Math.random();
	//var Rand = Math.round(Math.random());
	return(Min + Math.round(Rand * Range));   
}

/*
 * 从一个给定的数组arr中,随机返回num个不重复项
 */
function getNotRepeatArray(items, num) {
    //新建一个数组,将传入的数组复制过来,用于运算,而不要直接操作传入的数组;
var arr = new Array();
for(var i=0; i<items; i++){
arr[i] = i+1;
}
    var temp_array = new Array();
    for (var index in arr) {
        temp_array.push(arr[index]);
    }
    //取出的数值项,保存在此数组
    var return_array = new Array();
    for (var i = 0; i<num; i++) {
        //判断如果数组还有可以取出的元素,以防下标越界
        if (temp_array.length>0) {
            //在数组中产生一个随机索引
            var arrIndex = Math.floor(Math.random()*temp_array.length);
            //将此随机索引的对应的数组元素值复制出来
            return_array[i] = temp_array[arrIndex];
            //然后删掉此索引的数组元素,这时候temp_array变为新的数组
            temp_array.splice(arrIndex, 1);
        } else {
            //数组中数据项取完后,退出循环,比如数组本来只有10项,但要求取出20项.
            break;
        }
    }
    return return_array;
}

// 在数据中查找值，返回Key
function arr_value_key(array, value) {
    for (var k in array) {
        if(array[k]==value) return k;
    }
    return -1;
}
<?php echo '</script'; ?>
>
</div>
</div><?php }
}
