jQuery(function(t){function a(a){var n={id:0,duration:60,status:1,winningagain:1,joinagain:1,showstyle:1,themeid:1};a<=0?i(n):function(a){return t.ajax({url:"module.php?m=ydj&c=admin&a=ajax_act_get_config",type:"post",data:{id:a},dataType:"json"})}(a).done(function(a){0<a.code?i(a.data):(alert(a.message),i(n))}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")}),t("#configmodal").modal("show")}function i(a){t("input[name=id]").val(a.id),t("input[name=duration]").val(a.duration),t("select[name=status]").val(a.status),t("input[name=winningagain]").val(a.winningagain),t("select[name=joinagain]").val(a.joinagain),t("select[name=showstyle]").val(a.showstyle),t("select[name=themeid]").val(a.themeid)}t(".btn_add").on("click",function(){a(0)}),t(".btn_edit").on("click",function(){a(t(this).attr("data"))}),t(".btn_save").on("click",function(){var a={},n=t("input[name=id]").val();0<n&&(a.id=n),a.duration=t("input[name=duration]").val(),a.winningagain=t("input[name=winningagain]").val(),a.joinagain=t("select[name=joinagain]").val(),a.showstyle=t("select[name=showstyle]").val(),a.themeid=t("select[name=themeid]").val(),function(a){return t.ajax({url:"module.php?m=ydj&c=admin&a=ajax_act_save_config",type:"post",data:a,dataType:"json"})}(a).done(function(a){alert(a.message),0<a.code&&window.location.reload()}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),t(".btn_prize").on("click",function(){var a=t(this).attr("data");window.location.href="/Modules/module.php?m=prize&c=admin&a=index&plugname=ydj&activityid="+a}),t(".btn_designated").on("click",function(){var a=t(this).attr("data");window.location.href="/Modules/module.php?m=prize&c=admin&a=designatedlist&plugname=ydj&activityid="+a}),t(".btn_records").on("click",function(){var a=t(this).attr("data");window.location.href="/Modules/module.php?m=prize&c=admin&a=zjlist&plugname=ydj&activityid="+a}),t(".btn_reset").on("click",function(){if(!confirm("确认要重置这轮游戏吗？"))return!1;var a=t(this).attr("data");if(a<=0)return alert("数据错误"),!1;var n;(n=a,t.ajax({url:"module.php?m=ydj&c=admin&a=ajax_act_reset_config",data:{id:n},type:"get",dataType:"json"})).done(function(a){alert(a.message),0<a.code&&window.location.reload()}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})}),t(".btn_delete").on("click",function(){if(!confirm("确认要删除这轮游戏吗？"))return!1;var a=t(this).attr("data");if(a<=0)return alert("数据错误"),!1;var n;(n=a,t.ajax({url:"module.php?m=ydj&c=admin&a=ajax_act_delete_config",data:{id:n},type:"get",dataType:"json"})).done(function(a){alert(a.message),0<a.code&&window.location.reload()}).fail(function(){alert("请检查您的网络，有可能是断网了哦。")})})});