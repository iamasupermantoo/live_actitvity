function resetform(){$("input[name=col1]").val(""),$("input[name=col2]").val(""),$("input[name=col3]").val(""),$("input[name=id]").val(0),$("input[name=imageid]").val("")}function fillform(a){resetform(),$("input[name=col1]").val(a.col1),$("input[name=col2]").val(a.col2),$("input[name=col3]").val(a.col3),$("input[name=id]").val(a.id),0<a.imageid&&($("input[name=imageid]").val(a.imageid),$("input[name=imagepath]").ace_file_input("show_file_list",[{type:"image",name:"奖品图",path:a.imagepath}]))}function ajax_act_get_dataitem(a){return $.ajax({url:"/Modules/module.php?m=importlottery&c=admin&a=ajax_act_get_dataitem&id="+a,type:"get",dataType:"json"})}function ajax_act_save_dataitem(){$("#savedataform").ajaxSubmit({dataType:"json",success:function(a){0<a.code?window.location.reload():alert(a.message)}})}function ajax_act_save_excel(){$("#saveexcelform").ajaxSubmit({dataType:"json",success:function(a){alert(a.message),0<a.code&&window.location.reload()}})}function ajax_act_delete_dataitem(a){return $.ajax({url:"/Modules/module.php?m=importlottery&c=admin&a=ajax_act_delete_dataitem&id="+a,type:"get",dataType:"json"})}$(document).ready(function(){$(".btn_import").on("click",function(){$("#importmodal").modal("show")}),$(".btn-saveexcelform").on("click",function(){ajax_act_save_excel()}),$(".btn_add").on("click",function(){resetform(),$("#datamodal").modal("show")}),$(".btn_edit").on("click",function(){ajax_act_get_dataitem($(this).attr("data")).done(function(a){0<a.code?(fillform(a.data),$("#datamodal").modal("show")):alert(a.message)}).fail(function(){alert("未知错误")})}),$(".btn-save-item").on("click",function(){ajax_act_save_dataitem()}),$(".btn_del").on("click",function(){if(!confirm("确认要删除这个导入的数据吗?"))return!1;ajax_act_delete_dataitem($(this).attr("data")).done(function(a){alert(a.message),0<a.code&&window.location.reload()}).fail(function(){alert("请检查您的网络是否正常")})}),$(".imageuploader").ace_file_input({style:"well",btn_choose:"点击此处选择图片",btn_change:null,no_icon:"ace-icon fa fa-cloud-upload",droppable:!0,maxSize:55e4,allowExt:["jpeg","jpg","png","gif"],allowMime:["image/jpg","image/jpeg","image/png","image/gif"],thumbnail:"large",previewHeight:200,preview_error:function(a,e){console.log(e)},before_remove:function(){return $("input[name=imageid]").val(0),!0}}).on("change",function(){$("input[name=imageid]").val(0)}).on("file.error.ace",function(a,e){}),$(".btn-search").on("click",function(){var a=$("#searchtxt").val();""!=a&&(a="&txt="+a),window.location.href="/Modules/module.php?m=importlottery&c=admin&a=index"+a})});