!function(e){"use strict";function o(e){return d.querySelectorAll(e)}function t(e){this.config=y.extend(e),this.view()}var n,i,s,l,a,d=document,c="getElementsByClassName",r={type:0,shade:!0,shadeClose:!0,fixed:!0,anim:"scale"},y={extend:function(e){var t=JSON.parse(JSON.stringify(r));for(var n in e)t[n]=e[n];return t},timer:{},end:{},touch:function(e,t){e.addEventListener("click",function(e){t.call(this,e)},!1)}},u=0,p=["layui-m-layer"];t.prototype.view=function(){var e=this,n=e.config,t=d.createElement("div");e.id=t.id=p[0]+u,t.setAttribute("class",p[0]+" "+p[0]+(n.type||0)),t.setAttribute("index",u);var i,s=(i="object"==typeof n.title,n.title?'<h3 style="'+(i?n.title[1]:"")+'">'+(i?n.title[0]:n.title)+"</h3>":""),l=function(){"string"==typeof n.btn&&(n.btn=[n.btn]);var e,t=(n.btn||[]).length;return 0!==t&&n.btn?(e='<span yes type="1">'+n.btn[0]+"</span>",2===t&&(e='<span no type="0">'+n.btn[1]+"</span>"+e),'<div class="layui-m-layerbtn">'+e+"</div>"):""}();if(n.fixed||(n.top=n.hasOwnProperty("top")?n.top:100,n.style=n.style||"",n.style+=" top:"+(d.body.scrollTop+n.top)+"px"),2===n.type&&(n.content='<i></i><i class="layui-m-layerload"></i><i></i><p>'+(n.content||"")+"</p>"),n.skin&&(n.anim="up"),"msg"===n.skin&&(n.shade=!1),t.innerHTML=(n.shade?"<div "+("string"==typeof n.shade?'style="'+n.shade+'"':"")+' class="layui-m-layershade"></div>':"")+'<div class="layui-m-layermain" '+(n.fixed?"":'style="position:static;"')+'><div class="layui-m-layersection"><div class="layui-m-layerchild '+(n.skin?"layui-m-layer-"+n.skin+" ":"")+(n.className?n.className:"")+" "+(n.anim?"layui-m-anim-"+n.anim:"")+'" '+(n.style?'style="'+n.style+'"':"")+">"+s+'<div class="layui-m-layercont">'+n.content+"</div>"+l+"</div></div></div>",!n.type||2===n.type){var a=d[c](p[0]+n.type);1<=a.length&&layer.close(a[0].getAttribute("index"))}document.body.appendChild(t);var r=e.elem=o("#"+e.id)[0];n.success&&n.success(r),e.index=u++,e.action(n,r)},t.prototype.action=function(e,t){var n=this;e.time&&(y.timer[n.index]=setTimeout(function(){layer.close(n.index)},1e3*e.time));function i(){0==this.getAttribute("type")?(e.no&&e.no(),layer.close(n.index)):e.yes?e.yes(n.index):layer.close(n.index)}if(e.btn)for(var s=t[c]("layui-m-layerbtn")[0].children,l=s.length,a=0;a<l;a++)y.touch(s[a],i);if(e.shade&&e.shadeClose){var r=t[c]("layui-m-layershade")[0];y.touch(r,function(){layer.close(n.index,e.end)})}e.end&&(y.end[n.index]=e.end)},e.layer={v:"2.0",index:u,open:function(e){return new t(e||{}).index},close:function(e){var t=o("#"+p[0]+e)[0];t&&(t.innerHTML="",d.body.removeChild(t),clearTimeout(y.timer[e]),delete y.timer[e],"function"==typeof y.end[e]&&y.end[e](),delete y.end[e])},closeAll:function(){for(var e=d[c](p[0]),t=0,n=e.length;t<n;t++)layer.close(0|e[0].getAttribute("index"))}},"function"==typeof define?define(function(){return layer}):(i=document.scripts,s=i[i.length-1],l=s.src,a=l.substring(0,l.lastIndexOf("/")+1),s.getAttribute("merge")||document.head.appendChild(((n=d.createElement("link")).href=a+"need/layer.css?2.0",n.type="text/css",n.rel="styleSheet",n.id="layermcss",n)))}(window);