<?php
/* Smarty version 3.1.33, created on 2024-06-14 19:04:31
  from '/www/wwwroot/interaction/Modules/Game/templates/admin/dragonboat/snippet_themeconfig.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_666c23bf6c3f54_48116209',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5e294c00f56a533895129249200fc87c83d0d4b2' => 
    array (
      0 => '/www/wwwroot/interaction/Modules/Game/templates/admin/dragonboat/snippet_themeconfig.html',
      1 => 1557210560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_666c23bf6c3f54_48116209 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .ctrl_imageuploader{
        height: 210px;
    }
    .btn-saveduration{
        cursor: pointer;
    }
    .uploader-list .item{
        height: 167px;
        width: 300px;
        border: 1px dotted;
    }
    .btn-selectfile{
        margin-top: 60px;
        margin-left: 60px;
    }
    </style>
    <div class="row tab-themeconfig">
        <div class="col-sm-12 ">
            <div class="row">
                <div class="col-xs-12">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" >持续条件：</label>
                            <div class="col-sm-9">
                                <div class="radio">
                                    <label>
                                        <input name="durationtype" checked type="radio" class="ace" value="1"/>
                                        <span class="lbl">时间</span>
                                    </label>
                                    <label>
                                        <input name="durationtype" type="radio" class="ace" value="2"/>
                                        <span class="lbl">分数</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right label-duration" >结束条件(秒、次)：</label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="number" value="" name="duration" class="form-control" />
                                    <span class="input-group-addon blue btn-saveduration">修改</span>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-xs-12">
                    <form class="form-horizontal" role="form" >
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" >背景音乐：</label>
                            <div class="col-sm-9">
                                <label style="margin-top:9px;">
                                    <input name="bgmusic_switch" class="ace ace-switch switch-bgmusic" type="checkbox" value="1"/>
                                    <span class="lbl"></span>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                
                <div class="col-xs-12">
                    <div class="col-xs-12">
                        <label class="control-label no-padding-right" >背景音乐：</label>
                    </div>
                    <div class="col-xs-12">
                        <div  class="bgmusicuploader">
                            <div  class="uploader-list">
                                <div  class="item">
                                    <div class="btn-selectfile" id="btn-sel"><i class="fa fa-folder-open-o"></i>点击此处选择背景音乐</div>
                                </div>
                            </div>
                            <div class="btns">
                                <input type="hidden" name="key" value="bgmusic"/>
                                <input type="hidden" name="val" value=""/>
                                <button  class="btn btn-primary btn-upload">保存</button>
                                <button  class="btn btn-default btn-reset">重置</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">手机端背景图：</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader mobilebg" name="file"/>
                                <input type="hidden" name="key" value="mobilebg"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6 col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">手机端图片：</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader mobileimg" name="file"/>
                                <input type="hidden" name="key" value="mobileimg"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物1</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_0" name="file"/>
                                <input type="hidden" name="key" value="avatar_0"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物2</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_1" name="file"/>
                                <input type="hidden" name="key" value="avatar_1"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物3</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_2" name="file"/>
                                <input type="hidden" name="key" value="avatar_2"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物4</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_3" name="file"/>
                                <input type="hidden" name="key" value="avatar_3"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物5</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_4" name="file"/>
                                <input type="hidden" name="key" value="avatar_4"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物6</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_5" name="file"/>
                                <input type="hidden" name="key" value="avatar_5"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物7</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_6" name="file"/>
                                <input type="hidden" name="key" value="avatar_6"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物8</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_7" name="file"/>
                                <input type="hidden" name="key" value="avatar_7"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物9</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_8" name="file"/>
                                <input type="hidden" name="key" value="avatar_8"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6  col-xs-12 col-lg-4 ctrl_imageuploader">
                    <form method="post" action="module.php?m=game&c=admin&a=ajaxSaveThemeConfig" role="form" enctype="multipart/form-data">
                        <div class="form-group" >
                            <label style="font-weight: 700;">人物10</label>
                            <div class="col-sm-12">
                                <input multiple="" type="file"  class="imageuploader avatar_9" name="file"/>
                                <input type="hidden" name="key" value="avatar_9"/>
                                <input type="hidden" name="imgid" value="0" />
                                <div class="hr hr-12 dotted"></div>
                                <button type="button" class="btn btn-sm btn-primary btn-saveimage">保存</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <?php echo '<script'; ?>
 type="text/javascript">
    var config=<?php echo $_smarty_tpl->tpl_vars['config']->value;?>
;
    
    var admin_snippets_themeconfig=function(id){
        var tab_themeconfig=$('.tab-themeconfig');
        var radios_durationtype=tab_themeconfig.find('input[name=durationtype]');
        var btns_saveimage=tab_themeconfig.find('.btn-saveimage');
        var input_duration=tab_themeconfig.find('input[name=duration]');
        var label_duration=tab_themeconfig.find('.label-duration');
        var btn_saveduration=tab_themeconfig.find('.btn-saveduration');
        var bguploader=tab_themeconfig.find('.bguploader');
        var bgmusicuploader=tab_themeconfig.find('.bgmusicuploader');
        var btn_saveslogan=tab_themeconfig.find('.btn-saveslogan');
        var switch_bgmusic=tab_themeconfig.find('.switch-bgmusic');
        var configid=id;
        function bindBtns(){
            radios_durationtype.on('click',function(){
                ajaxSaveThemeConfig('durationtype',tab_themeconfig.find('input[name=durationtype]:checked').val()).done(function(json){
                    alert(json.message);
                    if(json.code>0){
                        admin_index.reloadTab('#gametheme',configid);
                    }
                });
            });
            btn_saveduration.on('click',function(){
                ajaxSaveThemeConfig('duration',input_duration.val()).done(function(json){
                    alert(json.message);
                    if(json.code>0){
                        admin_index.reloadTab('#gametheme',configid);
                    }
                });
            });
            btns_saveimage.on('click',function(){
                var form=$(this).parents('form');
                form.ajaxSubmit({
                    "data":{"configid":configid},
                    "dataType":"json",
                    "success":function(json){
                        if(json.code>0){
                            admin_index.reloadTab('#gametheme',configid);
                        }
                    }
                })
            });
            switch_bgmusic.on('change',function(){
                var isopen=switch_bgmusic.prop('checked')?1:2;
                ajaxSaveThemeConfig('bgmusic_switch',isopen).done(function(json){

                });
            });
        }
    
        function ajaxSaveThemeConfig(key,value){
            return $.ajax({
                "url":"module.php?m=game&c=admin&a=ajaxSaveThemeConfig",
                "type":"post",
                "data":{"key":key,"val":value,'configid':configid},
                "dataType":'json'
            });
        }

        function createMusicUploader(){
            var ratio = window.devicePixelRatio || 1;
            var thumbnailWidth = 300 * ratio;
            var thumbnailHeight = 167 * ratio;
            var ctrl_uploader=WebUploader.create({
                swf:'/myadmin/assets/webuploader-0.1.5/Uploader.swf',
                server:'module.php?m=game&c=admin&a=ajaxSaveThemeConfig',
                // pick:{'id':'.btn-selectfile',label:'<i class="fa fa-folder-open-o"></i>点击此处选择背景音乐',multiple:false},
                resize: false,
                fileNumLimit:1,
                formData:{"val":bgmusicuploader.find('input[name=val]').val(),'key':bgmusicuploader.find('input[name=key]').val(),"configid":configid},//self.find('input[name=val]').val()
                duplicate:true,
                accept:{
                    mimeTypes:'audio/mp3,audio/mpeg3',
                }
            });
            
            ctrl_uploader.on( 'fileQueued', function( file ) {
                var audio=$('<img src="/assets/images/icons/music_file.png" style="width:300px;height:167px;"/>');
                bgmusicuploader.find('.uploader-list .item').append(audio);
            });
            //加入队列前 先清空队列中的内容
            ctrl_uploader.on('beforeFileQueued',function(file){
                this.reset();
                bgmusicuploader.find('.uploader-list .item').html('');
            });
            ctrl_uploader.on('uploadSuccess',function(file,response){
                alert(response.message);
                admin_index.reloadTab('#gametheme',configid);
            });
            bgmusicuploader.find('.btn-upload').on('click',function(){
                ctrl_uploader.upload();
            });
            bgmusicuploader.find('.btn-reset').on('click',function(){
                $.ajax({
                    'url':'module.php?m=game&c=admin&a=ajaxSaveThemeConfig',
                    'type':'post',
                    'data':{'val':'','key':bgmusicuploader.find('input[name=key]').val(),'configid':configid},
                    'success':function(){
                        bgmusicuploader.find('input[name=val]').val('');
                        bgmusicuploader.find('.uploader-list .item').html('<div class="btn-selectfile"><i class="fa fa-folder-open-o"></i>点击此处选择背景音乐</div>');
                        ctrl_uploader.addButton({
                            'id':bgmusicuploader.find('.uploader-list .btn-selectfile'),
                        });
                    }
                });
                
            });
            if(parseInt(config.bgmusic)>0){
                bgmusicuploader.find('.uploader-list .item').html('<audio controls="controls"    style="margin-top: 60px;"><source src="'+config.bgmusic_path+'" type="audio/mpeg"> </source>您的浏览器不支持音乐播放，您可以下载这个谷歌浏览器， https://pan.baidu.com/s/1bp0MHFx，效果和性能会好一点哦</audio>');
                bgmusicuploader.find('input[name=val]').val(config.bgmusic);
            }else{
                bgmusicuploader.find('.uploader-list .item').html('<div class="btn-selectfile"><i class="fa fa-folder-open-o"></i>点击此处选择背景音乐</div>');
                ctrl_uploader.addButton({
                    'id':bgmusicuploader.find('.uploader-list .btn-selectfile'),
                });
                $('.btn-selectfile').on('click',function(){
                    bgmusicuploader.find('.uploader-list .item').html('<div class="btn-selectfile"><i class="fa fa-folder-open-o"></i>点击此处选择背景音乐</div>');
                    ctrl_uploader.addButton({
                        'id':bgmusicuploader.find('.uploader-list .btn-selectfile'),
                    });
                 });
            }
            bgmusicuploader.find('.uploader-list .item');
        }
        function bindCtrls(){
            // createImageUploader();
            createMusicUploader();
            //初始化图片上传控件
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
                previewHeight:123,
                preview_error : function(filename, error_code) {
                }
    
            }).on('change', function(){
            });
            //初始化持续时间
            if(config.durationtype==1){
                label_duration.text('结束条件(秒)：');
                radios_durationtype.eq(0).attr('checked',"checked");
            }else{
                label_duration.text('结束条件(分)：');
                radios_durationtype.eq(1).attr('checked',"checked");
            }
            if(config.bgmusic_switch==1){
                switch_bgmusic.attr('checked',"checked");
            }else{
                switch_bgmusic.removeAttr('checked');
            }
            //初始化次数或者时间值
            input_duration.val(config.duration);
            //手机端图片
            var path=config['mobileimg']>0?'/imageproxy.php?id='+config['mobileimg']:config['mobileimg_path'];
            $('.mobileimg').ace_file_input('show_file_list', [
                {type: 'image', name: '', path:path},
            ]);
            var path=config['mobilebg']>0?'/imageproxy.php?id='+config['mobilebg']:config['mobilebg_path'];
            $('.mobilebg').ace_file_input('show_file_list', [
                {type: 'image', name: '', path:path},
            ]);
            for(var i=0,l=10;i<l;i++){
                var path=config['avatar_'+i]>0?'/imageproxy.php?id='+config['avatar_'+i]:config['avatar_'+i+'_path'];
                $('.avatar_'+i).ace_file_input('show_file_list', [
                    {type: 'image', name: '', path:path},
                ]);
            }
        }
        
        return {
            'init':function(){
                bindCtrls();
                bindBtns();
            }
        }
    };
    
    <?php echo '</script'; ?>
><?php }
}
