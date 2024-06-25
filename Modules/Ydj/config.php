<?php
/**
 * 摇大奖模块配置
 * PHP version 5.4+
 * 
 * @category Ydj
 * 
 * @package Ydj
 * 
 * @author fy <jhfangying@qq.com>
 * 
 * @license Copyright (c) 2017 某某源码网有限公司 版权所有
 * Copyright (c) 2017 某某源码网有限公司 版权所有
 * 未经许可，任何单位及个人不得做营利性使用
 * 
 * @link link('演示地址','http://renrenscene.com');
 * */

$config=array(
    "admin"=>array('menu'=>array(
        "name"=>"摇大奖设置","submenu"=>array(
            array(
                "name"=>"轮次设置", 
                "link"=>"/Modules/module.php?m=ydj&c=admin&a=index"
            ),
            // array("name"=>"模板设置", "link"=>"/Modules/module.php?m=ydj&c=admin&a=themes")
        )
    )),
    "front"=>array("menu"=>array(
        "name"=>"摇大奖","link"=>"/Modules/module.php?m=ydj&c=front&a=index","icon"=>"/wall/themes/meepo/assets/images/icon/ico002-.png","shortcut"=>"ctrl+y"
    )),
    "mobile"=>array("menu"=>array("name"=>"摇大奖","link"=>"/Modules/module.php?m=ydj&c=mobile&a=index","icon"=>""))
);