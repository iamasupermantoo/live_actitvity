<?php
/* Smarty version 3.1.33, created on 2024-06-14 20:40:51
  from '/www/wwwroot/interaction/Modules/Importlottery/templates/admin/zjlist.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c3a53e11c75_90871722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a72a34bd575ba86cdf07b7e269a4223f062e4fd' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Importlottery/templates/admin/zjlist.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c3a53e11c75_90871722 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['html_header']->value;?>

<!--轮次设置-->
		<!-- /section:basics/navbar.layout -->
		<div class="main-container ace-save-state" id="main-container">
			<?php echo '<script'; ?>
 type="text/javascript">
			
				try{ace.settings.loadState('main-container')}catch(e){}
			
			<?php echo '</script'; ?>
>
			<!-- #section:basics/sidebar -->
            <?php echo $_smarty_tpl->tpl_vars['html_sidebar']->value;?>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="/myadmin/index.php">首页</a>
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

						<small><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</small>
					</h3>
						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="widget-box widget-color-blue" >
									<div class="widget-header">
										<h5 class="widget-title bigger lighter">
											<i class="ace-icon fa fa-users"></i>
											获奖名单
										</h5>
										<div class="widget-toolbar no-border">
											<label>
												<button class="btn btn-xs btn-warning btn_cleardata"  >清空中奖记录</button>
											</label>
											<label>
												<button class="btn btn-xs btn-warning btn_export" onclick="window.open('/Modules/module.php?m=importlottery&c=admin&a=exportdata');" >导出中奖结果</button>
											</label>
											<label>
											<button class="btn btn-xs btn-warning btn_designated" onclick="window.location.href='/Modules/module.php?m=importlottery&c=admin&a=designated'" >去设置内定</button>
											</label>

										</div>
									</div>
									<div class="widget-body">
										<div class="widget-main no-padding">
											<style>
											.prizestable tbody img{
												width:60px;
												height:60px;
											}
											.prizestable .userinfo div{
												float:left;
											}
											</style>
											<table class="table table-striped table-bordered table-hover prizestable">
												<thead class="thin-border-bottom">
													<tr>
														<th style="width:5%;">序号</th>
														<th>
															奖品
														</th>
														<th>
															获奖人
														</th>
														<th>
															状态
														</th>
														<th >操作</th>
													</tr>
												</thead>
												<tbody>
												<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
													<tr >
														<td ><?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
</td>
														<td >
															<?php echo $_smarty_tpl->tpl_vars['item']->value['prize']['formatedtext']['html'];?>

															<?php echo $_smarty_tpl->tpl_vars['item']->value['prize']['prizename'];?>

														</td>
														<td class="userinfo">
															<!-- <div style="width:60px;">
																<img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['avatar'];?>
"/>
															</div> -->
															<div >
																<p>第一列：<?php echo $_smarty_tpl->tpl_vars['item']->value['importinfo']['col1'];?>
</p>
																<p>第二列：<?php echo $_smarty_tpl->tpl_vars['item']->value['importinfo']['col2'];?>
</p>
																<p>第三列：<?php echo $_smarty_tpl->tpl_vars['item']->value['importinfo']['col3'];?>
</p>
															</div>
														</td>
														<td ><?php echo $_smarty_tpl->tpl_vars['item']->value['statustext'];?>
</td>
														<td >
															<!-- <button class="btn btn-primary btn-xs btn_detail" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">详情</button> -->
															<?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 2) {?>
															<button class="btn btn-primary btn-xs btn_give" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">发奖</button>
															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['item']->value['status'] == 3) {?>
															<button class="btn btn-warning btn-xs btn_cancel" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">改成未发奖</button>
															<?php }?>
															<button class="btn btn-danger btn-xs btn_delete" data="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
">删除</button>
														</td>
													</tr>
												<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												</tbody>
											</table>
											<?php echo $_smarty_tpl->tpl_vars['pagehtml']->value;?>

										</div>
									</div>
								</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
<?php echo $_smarty_tpl->tpl_vars['html_footercontent']->value;?>

<!-- 写每个页面自定的js -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['module_assets']->value;?>
/js/admin_zjlist.js"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['html_footer']->value;
}
}
