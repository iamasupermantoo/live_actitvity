var admin_index=function(){var e=$("#btn-openmodaladdlotteryconfig"),n=$(".btn-addlotteryconfig"),a=$(".btn-lotteryconfig"),i=$(".btn-dellotteryconfig"),t=$("#btn-showprizes"),d=$("#btn-showwinners"),o=$("#btn-showdesignated"),l=$("#btn-themesettings"),r=$(".btn-savelotteryconfig"),c=$("#addlotteryconfigmodal");function s(){e.on("click",function(){$("#addlotteryconfigmodal").modal("show")}),n.on("click",function(){var e={id:0};e.title=c.find("input[name=title]").val(),e.themeid=c.find("select[name=themeid]").val(),e.winagain=c.find("input[name=winagain]:checked").val()?2:1,e.showtype=c.find("input[name=showtype]:checked").val(),u(e).done(function(e){0<e.code?window.location.href="/Modules/module.php?m=lottery&c=admin&a=index&id="+e.data.id:alert(e.message)})}),r.on("click",function(){var e={},n=$("#lotteryconfig");e.id=n.find("input[name=id]").val(),e.title=n.find("input[name=title]").val(),e.themeid=n.find("select[name=themeid]").val(),e.winagain=n.find("input[name=winagain]:checked").val()?2:1,e.showtype=n.find("input[name=showtype]:checked").val(),u(e).done(function(e){0<e.code?window.location.href="/Modules/module.php?m=lottery&c=admin&a=index&id="+e.data.id:alert(e.message)})}),a.on("click",function(){var e=$(this).attr("data-id");window.location.href="/Modules/module.php?m=lottery&c=admin&a=index&id="+e}),i.on("click",function(){if(!confirm("确认要删除这轮抽奖吗?"))return!1;(function(e){return $.ajax({url:"/Modules/module.php?m=lottery&c=admin&a=ajaxDelLotteryConfig",type:"post",data:{id:e},dataType:"json"})})($(this).attr("data-id")).done(function(e){0<e.code?window.location.href="/Modules/module.php?m=lottery&c=admin&a=index":alert(e.message)})}),t.on("click",function(){if($(this).parent().hasClass("active"))return!1;var n=$(this).attr("data-id"),a=$(this).attr("href");$(a).html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>'),p(n).done(function(e){$(a).html(e),admin_snippets_prizes(n).init()})}),d.on("click",function(){if($(this).parent().hasClass("active"))return!1;var n=$(this).attr("data-id"),a=$(this).attr("href");$(a).html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>'),m(n).done(function(e){$(a).html(e),admin_snippets_winners(n).init()})}),o.on("click",function(){if($(this).parent().hasClass("active"))return!1;var n=$(this).attr("data-id"),a=$(this).attr("href");$(a).html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>'),f(n).done(function(e){$(a).html(e),admin_snippets_designated(n).init()})}),l.on("click",function(){if($(this).parent().hasClass("active"))return!1;var n=$(this).attr("data-id"),a=$(this).attr("href");$(a).html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>'),g(n).done(function(e){$(a).html(e),admin_snippets_themesettings(n).init()})})}function u(e){return e.id||(e.id=0),$.ajax({url:"/Modules/module.php?m=lottery&c=admin&a=ajaxSaveLotteryConfig",type:"post",data:e,dataType:"json"})}function p(e){return $.ajax({url:"/Modules/module.php?m=lottery&c=admin&a=ajaxGetPrizes",type:"post",data:{id:e},dataType:"text"})}function m(e){return $.ajax({url:"/Modules/module.php?m=lottery&c=admin&a=ajaxGetWinners",type:"post",data:{id:e},dataType:"text"})}function f(e){return $.ajax({url:"/Modules/module.php?m=lottery&c=admin&a=ajaxGetDesignated",type:"post",data:{id:e},dataType:"text"})}function g(e){return $.ajax({url:"/Modules/module.php?m=lottery&c=admin&a=ajaxGetThemeSettings",type:"post",data:{id:e},dataType:"text"})}return{init:function(){s()},reloadTab:function(n,a){switch($(n).html('<i class="ace-icon fa fa-spinner fa-spin orange bigger-125"></i>'),n){case"#prizes":p(a).done(function(e){$(n).html(e),admin_snippets_prizes(a).init()});break;case"#winners":m(a).done(function(e){$(n).html(e),admin_snippets_winners(a).init()});break;case"#designated":f(a).done(function(e){$(n).html(e),admin_snippets_designated(a).init()});break;case"#lotterytheme":g(a).done(function(e){$(n).html(e),admin_snippets_themesettings(a).init()})}}}}(),admin_snippets_prizes=function(a){var i=$("#editprizemodal"),n='<div class="space-4"></div>    <div class="row">        <div class="form-group">            <label class="col-xs-4" style="text-align: right;">奖品名称：</label>            <div>                <input type="text"  name="prizename"  class="col-xs-5" value="" />            </div>        </div>    </div>    <div class="space-4"></div>    <div class="row">        <div class="form-group">            <label class="col-xs-4" style="text-align: right;">剩余数量：</label>            <div>                <input type="number"  name="num"  class="col-xs-5" value="1" />            </div>        </div>    </div>',t='<div class="space-4"></div><div class="row"><div class="form-group"><label class="col-xs-4" style="text-align: right;">奖品图片：</label><div class="col-md-8" style="padding-left:0px;"><input type="file" class="imageuploader" name="imagepath"/><input type="hidden"  name="imageid" value="0"/></div></div>',e=$(".btn-openaddprizemodal"),d=$(".btn-save"),o=$(".btn-delete");function l(e){var n={id:0,prizename:"",activityid:a,type:1,imageid:0,leftnum:1};e<=0?r(n):function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_get_prize",type:"post",data:{id:e},dataType:"json"})}(e).done(function(e){0<e.code?r(e.data):(alert(e.message),r(n))}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")}),$("#editprizemodal").modal("show")}function r(e){i.find(".columnitems").html(""),$(n).appendTo(i.find(".columnitems")),i.find("input[name=id]").val(e.id),i.find("input[name=activityid]").val(e.activityid),i.find("input[name=prizename]").val(e.prizename),i.find("input[name=num]").val(e.leftnum),function(e){1==e.type&&function(e){$(t).appendTo(".columnitems"),$(".imageuploader").ace_file_input({style:"well",btn_choose:"点击此处选择图片",btn_change:null,no_icon:"ace-icon fa fa-cloud-upload",droppable:!0,maxSize:55e4,allowExt:["jpeg","jpg","png","gif"],allowMime:["image/jpg","image/jpeg","image/png","image/gif"],thumbnail:"large",previewHeight:200,preview_error:function(e,n){console.log(n)},before_remove:function(){return $("input[name=imageid]").val(0),!0}}).on("change",function(){$("input[name=imageid]").val(0)}).on("file.error.ace",function(e,n){}),0<e.id&&0<e.prizedata_arr.imageid&&($("input[name=imageid]").val(e.prizedata_arr.imageid),$("input[name=imagepath]").ace_file_input("show_file_list",[{type:"image",name:"奖品图",path:e.formatedtext.text}]))}(e)}(e)}function c(){e.on("click",function(){l($(this).attr("data-id"))}),d.on("click",function(){return function(){var n=i.find("input[name=activityid]").val();$("#editform").ajaxSubmit({dataType:"json",success:function(e){0<e.code?admin_index.reloadTab("#prizes",n):alert(e.message)}})}(),$("#editprizemodal").modal("hide"),!1}),o.on("click",function(){if(!confirm("确认要删除这个奖项吗?"))return!1;var n=$(this).attr("data-id");(function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_delete_prize",data:{id:e},type:"get",dataType:"json"})})(n).done(function(e){0<e.code?$("#item_"+n).remove():alert(e.message)})})}return{init:function(){c()}}},admin_snippets_winners=function(n){var e=$("#widget-box-winners"),a=e.find(".btn-clear"),i=e.find(".btn-give"),t=e.find(".btn-cancel"),d=e.find(".btn-delete"),o=e.find(".btn-exportexcel");function l(){o.on("click",function(){window.open("/Modules/module.php?m=prize&c=admin&a=exportdata&plugname=lottery")}),a.on("click",function(){if(!confirm("确认要清空中奖记录吗?"))return!1;(function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_cleardata",type:"get",dataType:"json",data:{plugname:"lottery",activityid:e}})})(n).done(function(e){console.log(n),admin_index.reloadTab("#winners",n)})}),i.on("click",function(){(function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_give_userprize",data:{id:e},type:"get",dataType:"json"})})($(this).attr("data-id")).done(function(e){alert(e.message),0<e.code&&admin_index.reloadTab("#winners",n)}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),t.on("click",function(){(function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_cancel_userprize",data:{id:e},type:"get",dataType:"json"})})($(this).attr("data-id")).done(function(e){alert(e.message),0<e.code&&admin_index.reloadTab("#winners",n)}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),d.on("click",function(){var e=$(this).attr("data-id");if(!confirm("确认要删除这条中奖记录吗?"))return!1;(function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_delete_userprize",data:{id:e},type:"get",dataType:"json"})})(e).done(function(e){alert(e.message),0<e.code&&admin_index.reloadTab("#winners",n)}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})})}return{init:function(){l()}}},admin_snippets_designated=function(i){var t=$("#widget-box-designated"),e=t.find(".btn-openmodaladddesignated"),n=t.find(".btn-cancel"),a=t.find(".btn-search"),d=t.find(".btn-save");function o(){e.on("click",function(){t.find(".search-query").val(""),t.find("select[name=userid]").html('<option value="0">无数据</option>'),t.find("select[name=prizeid]").val(0),t.find("select[name=designated]").val(2),t.find("#designatedmmodal").modal("show")}),n.on("click",function(){if(!confirm("确认要删除这条内定记录吗?"))return!1;var n=$(this).attr("data-id");(function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_cancel_designated",data:{id:e},type:"get",dataType:"json"})})(n).done(function(e){alert(e.message),0<e.code&&$("#designated_"+n).remove()}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),a.on("click",function(){(function(e){return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_get_users",data:{searchtext:e},type:"get",dataType:"json"})})(t.find(".search-query").val()).done(function(e){if(0<e.code){var n="",a=e.data.length;if(0<a)for(var i=0;i<a;i++)n+='<option value="'+e.data[i].id+'">昵称:'+e.data[i].nickname+" 姓名："+e.data[i].signname+" 电话："+e.data[i].phone+"</option>",console.log(e.data[i]);else n='<option value="0">无数据</option>';t.find("select[name=userid]").html(n)}""!=e.message?t.find("#userid-help-block").html('<i class="ace-icon fa fa-exclamation-triangle red"></i>'+e.message):t.find("#userid-help-block").html("")}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),d.on("click",function(){var e=$("select[name=userid]").val(),n=$("select[name=prizeid]").val(),a=$("select[name=designated]").val();return 0==e?(alert("必须选择一个人进行内定"),!1):0==n?(alert("必须选择一个奖品进行内定"),!1):void function(e,n,a,i,t){var d=$(".roundlist .green .btn-lotteryconfig").text();return $.ajax({url:"module.php?m=prize&c=admin&a=ajax_act_save_designated",data:{userid:e,prizeid:n,designated:a,plugname:i,activityid:t,title:d},type:"get",dataType:"json"})}(e,n,a,"lottery",i).done(function(e){alert(e.message),0<e.code&&(t.find("#designatedmmodal").modal("hide"),admin_index.reloadTab("#designated",i))}).fail(function(){return alert("请检查您的网络，有可能是断网了哦。"),!1})})}return{init:function(){o()}}};$(document).ready(function(){admin_index.init()});