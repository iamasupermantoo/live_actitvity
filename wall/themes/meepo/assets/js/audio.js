var playbox=function(){function t(){var t=this;t.box=null,t.player=null,t.src=null,t.on=!0,t.autoPlayFix={on:!0,evtName:"ontouchstart"in window?"touchend":"click"}}return t.prototype={init:function(t){return this.box="string"==typeof t?document.getElementById(t):t,this.player=this.box.querySelectorAll("audio")[0],this.src=this.player.src,this.init=function(){return this},this.autoPlayEvt(!0),this},play:function(){this.autoPlayFix.on&&(this.autoPlayFix.on=!1,this.autoPlayEvt(!1)),this.on=!this.on,1==this.on?(this.player.src=this.src,this.player.play()):(this.player.pause(),this.player.src=null),"function"==typeof this.play_fn&&this.play_fn.call(this)},handleEvent:function(t){this.play()},autoPlayEvt:function(t){t||this.autoPlayFix.on?document.body.addEventListener(this.autoPlayFix.evtName,this,!1):document.body.removeEventListener(this.autoPlayFix.evtName,this,!1)}},new t}();playbox.play_fn=function(){this.box.className=this.on?"btn_music on":"btn_music"};