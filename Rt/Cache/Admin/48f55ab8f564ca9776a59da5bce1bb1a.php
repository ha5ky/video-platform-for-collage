<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($data["sysname"]); ?></title>
<meta http-equiv="x-ua-compatible" content="IE=7,8,9,10,11" >
<link href="/Admin/css/style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Admin/js/jquery.js"></script>
<script src="/Admin/js/cloud.js" type="text/javascript"></script>

<script language="javascript">
	$(function(){
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){  
    $('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
    })  
});  
</script> 

</head>

<body style="background-color:#1c77ac; background-image:url(/Admin/images/light.png); background-repeat:no-repeat; background-position:center top; overflow:hidden;">
    <div id="mainBody">
      <div id="cloud1" class="cloud"></div>
      <div id="cloud2" class="cloud"></div>
    </div>  

<div class="logintop">
    <span>欢迎登录后台管理界面平台</span>
    <ul>
    <li><a href="#">首页</a></li>
    <li><a href="#">帮助</a></li>
    <li><a href="#">关于</a></li>
    </ul>    
</div>
    
<div class="loginbody">
    
    <span class="systemlogo"></span>
       
    <div class="loginbox">   
        <form action="<?php echo U('admin/public/login');?>" method="post">
        <ul>
            <li><input name="user" type="text" class="loginuser" placeholder="用户名" /></li>
            <li><input name="pass" type="password" class="loginpwd" placeholder="密码" /></li>
            <li>
                <input name="button" type="submit" class="loginbtn" value="登录" />
                <label><a href="#">忘记密码？</a></label>
            </li>
        </ul>  
        </form>  
    </div>

</div>     
    
<div class="loginbm">版权所有  2017 </div>
	
    
</body>

</html>