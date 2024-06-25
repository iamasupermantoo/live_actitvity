<?php
/* Smarty version 3.1.33, created on 2024-06-14 17:48:57
  from '/www/wwwroot/interaction/myadmin/templates/mobileqiandao.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c1209bb1251_61204737',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6810944115870c86f08797f49a8837005e154188' => 
    array (
      0 => '/www/wwwroot/interaction/myadmin/templates/mobileqiandao.html',
      1 => 1557210574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/html_header.html' => 1,
    'file:templates/html_sidebar.html' => 1,
    'file:templates/html_footercontent.html' => 1,
    'file:templates/html_footer.html' => 1,
  ),
),false)) {
function content_666c1209bb1251_61204737 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/html_header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		<!-- /section:basics/navbar.layout -->
		<div class="main-container ace-save-state" id="main-container">
			<?php echo '<script'; ?>
 type="text/javascript">
			
				try{ace.settings.loadState('main-container')}catch(e){}
			
			<?php echo '</script'; ?>
>
			<!-- #section:basics/sidebar -->
			<?php $_smarty_tpl->_subTemplateRender("file:templates/html_sidebar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="index.php">首页</a>
							</li>

							<li>
								<a href="#">签到设置</a>
							</li>
							<li class="active"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</li>
						</ul><!-- /.breadcrumb -->
						<!-- /section:basics/content.searchbox -->
					</div>

					<!-- /section:basics/content.breadcrumbs -->
					<div class="page-content">
					<h3 class="header smaller lighter blue">
						<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

						<small>发布的公告可以在上墙界面大屏幕上看到</small>
					</h3>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="tabbable">
									<ul class="nav nav-tabs padding-12 tab-color-blue background-blue"
										id="messagelisttab">
										<li class="active"><a data-toggle="tab" href="###"  >手机端签到背景图</a>
										</li>
		
										<li ><a data-toggle="tab" href="###" onclick="window.location.href='/Modules/module.php?m=menu&c=admin&a=index';return false;">手机端自定义菜单</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="intergrate" class="tab-pane in active">
											<!-- 对接设置 -->
											<div class="row">
												<form class="form-horizontal" method="post" action="domobileqiandao.php?action=setmobileqiandaobg" role="form" enctype="multipart/form-data">
													<div class="form-group">
														<label class="col-sm-3 control-label no-padding-right" for="mobileqiandaobg">手机签到背景图：</label>
														<div class="col-sm-9">
															<input multiple="" type="file" class="imageuploader" id="mobileqiandaobg" name="mobileqiandaobg"/>
															<div class="hr hr-12 dotted"></div>
															<button type="submit" class="btn btn-sm btn-primary">保存</button>
															<span class="alert-info">要求宽600*高1200像素图，不要超过500kb</span>
														</div>
													</div>
												</form>
											</div>
                                           <div  class="row">
											<form class="form-horizontal" method="post" role="form" ></form>
												<div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" >手机端菜单文字颜色：</label>
													<div class="col-sm-9">
														<div id="mobilemenufontcolor" class="input-group colorpicker-component">
															<span class="input-group-addon"><i></i></span>
															<input type="text" name="mobilemenufontcolor" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['mobilemenufontcolor']->value;?>
" />
															<span class="input-group-btn">
																<button type="button" class="btn btn-purple btn-sm btn-save">
																	修改
																</button>
															</span>
														</div>
													</div>
												</div>
											</form>
										   </div>
											
                                        </div>
                                        <div id="wxpay" class="tab-pane">
                                        <!-- 微信支付设置 -->
                                        
                                        </div>
                                    </div>
                                   
								</div>
								
									
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footercontent.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<!-- 写每个页面自定的js -->
<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function($){
	$('.imageuploader').ace_file_input({
		style: 'well',
		btn_choose: '点击此处选择图片',
		btn_change: null,
		no_icon: 'ace-icon fa fa-cloud-upload',
		droppable: true,
		maxSize: 550000,
		allowExt: ["jpeg", "jpg", "png", "gif"],
		allowMime: ["image/jpg", "image/jpeg", "image/png", "image/gif"],
		thumbnail: 'large',//large | fit
		previewHeight:200,
		preview_error : function(filename, error_code) {
		}

	}).on('change', function(){
	});
	
		<?php if ($_smarty_tpl->tpl_vars['mobileqiandaobg']->value != '') {?>
		
		$('#mobileqiandaobg')
		.ace_file_input('show_file_list', [
			{type: 'image', name: '背景图', path: '<?php echo $_smarty_tpl->tpl_vars['mobileqiandaobg']->value;?>
'},
		]);
		
		<?php }?>

		
	$('#mobilemenufontcolor').colorpicker({
		format:'hex',
		color:'<?php echo $_smarty_tpl->tpl_vars['mobilemenufontcolor']->value;?>
',
	});
	$('.btn-save').on('click',function(){
		var text=$('input[name=mobilemenufontcolor]').val();
		$.ajax({
			'url':'dosystemsettings.php?action=setmobilemenufontcolor',
			'type':'get',
			'dataType':'json',
			'data':{'mobilemenufontcolor':text},
			'success':function(json){
				alert(json.message);
				return false;
			}
		});
	});
});

<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/html_footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
