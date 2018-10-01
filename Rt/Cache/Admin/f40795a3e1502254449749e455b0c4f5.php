<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>	
	<meta charset="utf-8">
	<title><?php echo F('data/sysname');?></title>
	<meta http-equiv="x-ua-compatible" content="IE=7,8,9,10,11" >
	<link href="/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Admin/css/select.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/Admin/js/jquery.js"></script>
</head>	

<body style="background:url(/Admin/images/topbg.gif) repeat-x;">
	<div class="top">
    <div class="topleft">
        <a href="/index.php/Admin/Teacher/main.html" target="_parent"><img src="/Admin/images/logo.png" title="系统首页" /></a>
    </div>
          
    <div class="topright">    
        <ul>
            <li><span><img src="/Admin/images/help.png" title="帮助"  class="helpimg"/></span><a href="#">帮助</a></li>
            <li><a href="#">关于</a></li>
            <li><a href="<?php echo U('/admin/public/logout');?>" target="_parent">退出</a></li>
         </ul>
     
        <div class="user">
            <span>登陆用户：<?php echo session('user_name'); ?></span>
        </div>    
    </div> 
    
</div>

    

	
	<div class="content">

  <div class="left">    
    <dl class="leftmenu">        
    <dd>
        <div class="title">
            <span><img src="/Admin/images/leftico01.png" /></span>系统设置
        </div>
        <ul class="menuson" style="display:<?php echo c_menu(ACTION_NAME)=='0'?'block':'none';?>;">
            <li class="<?php echo ACTION_NAME=='top'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/system/top');?>">首页置顶数据设置</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='top_video'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/system/top_video');?>">首页推荐幻灯设置</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='config'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/system/config');?>">动态参数</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='user'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/system/user');?>">管理员列表</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='red_log'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/system/red_log');?>">系统日志</a><i></i></li>
        </ul>
    </dd>
        
    <dd>
        <div class="title">
        <span><img src="/Admin/images/leftico02.png" /></span>管理员功能
        </div>
        <ul class="menuson" style="display:<?php echo c_menu(ACTION_NAME)=='1'?'block':'none';?>;">
            <li class="<?php echo ACTION_NAME=='teacher'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/admin/teacher');?>">教师设置</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='course'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/admin/course');?>">课程设置</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='chapter'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/admin/chapter');?>">章节设置</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='student'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/admin/student');?>">学生设置</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='count'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/admin/count');?>">统计数据</a><i></i></li>
        </ul>
    </dd> 
    
    
    <dd><div class="title"><span><img src="/Admin/images/leftico03.png" /></span>教师功能</div>
        <ul class="menuson" style="display:<?php echo c_menu(ACTION_NAME)=='2'?'block':'none';?>;">
            <li class="<?php echo ACTION_NAME=='materials'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/teacher/materials');?>">课程材料</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='count_t'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/teacher/count_t');?>">统计数据</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='comment'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/teacher/comment');?>">评论管理</a><i></i></li>
        </ul>    
    </dd>  
    
    
    <dd><div class="title"><span><img src="/Admin/images/leftico04.png" /></span>其他功能</div>
        <ul class="menuson" style="display:<?php echo c_menu(ACTION_NAME)=='3'?'block':'none';?>;">
            <li class="<?php echo ACTION_NAME=='newPwd'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/other/newPwd');?>">修改密码</a><i></i></li>
            <li class="<?php echo ACTION_NAME=='logout'?'active':'' ?>"><cite></cite><a href="<?php echo U('/admin/public/logout');?>">安全退出</a><i></i></li>           
        </ul>    
    </dd>   
    
    </dl>
    </div>




<div class="right" id="right" name="right">
    <div class="place">
    	<span>位置：</span>
    	<ul class="placeul">
    		<li><a href="<?php echo U('/admin/index/index');?>">首页</a></li>
    		<li><a href="<?php echo U('/admin/teacher/comment');?>">评论管理</a></li>
    	</ul>
    </div>

    <div class="rightinfo">    
	    <div class="tools">	    
	    	<ul class="toolbar">
	        <!-- <li><a href="#"><span><img src="/Admin/images/t01.png" /></span>添加</a></li> -->
	        </ul>
	                
	        <ul class="toolbar1">
	        </ul>
	    
	    </div>

	    <table class="tablelist">
	    	<thead>
	    		<tr>
	    			<th>编号<i class="sort"><img src="/Admin/images/px.gif" /></i></th>
	    			<th>视频编号</th>
	    			<th>视频名称</th>
	    			<th>评论内容</th>
	    			<th>评论时间</th>
	    			<th>评论状态</th>
	    			<th>操作</th>
	    		</tr>
	        </thead>
	        <tbody>
	        	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>                                    
	        			<td><?php echo ($vo["com_id"]); ?></td>
	        			<td><?php echo ($vo["vid"]); ?></td>
	        			<td><?php echo ($vo["v_name"]); ?></td>
	        			<td><?php echo ($vo["com_content"]); ?></td>
	        			<td><?php echo ($vo["com_time"]); ?></td>
	        			<td><?php echo ($vo["com_status"]); ?></td>
	        			<td><a href="<?php echo U('/admin/teacher/delete_com', array('id' => $vo['com_id']));?>" class="tablelink">删除</a>     <a href="<?php echo U('/admin/teacher/details_com',array('com_id' => $vo['com_id']));?>" class="tablelink" >查看</a></td>
	        		</tr><?php endforeach; endif; else: echo "" ;endif; ?> 
	        </tbody>
	    </table>      
    
	    
    
    </div>


	 <script type="text/javascript">
		$(document).ready(function(){
		  $(".click").click(function(){
		  $(".tip").fadeIn(200);
		  });
		  
		  $(".tiptop a").click(function(){
		  $(".tip").fadeOut(200);
		});

		  $(".sure").click(function(){
		  $(".tip").fadeOut(100);
		});

		  $(".cancel").click(function(){
		  $(".tip").fadeOut(100);
		});

		});
		
		$('.tablelist tbody tr:odd').addClass('odd');
	</script>    

</div>

   
</div>

</body>
<div class="foot">
	<div class="footer">
   		<span>admin@某某管理系统</span>
    	<i>Designed by efan.in 2017</i>    
    </div>    
</div>   

		
<script language="JavaScript" src="/Admin/js/cloud.js"></script>
<script language="JavaScript" src="/Admin/js/jquery.ba-resize.min.js"></script>
<script language="JavaScript" src="/Admin/js/jquery.gvChart-1.0.1.min.js"></script>
<script language="JavaScript" src="/Admin/js/jquery.idTabs.min.js"></script>
<script language="JavaScript" src="/Admin/js/jsapi.js"></script>
<script language="JavaScript" src="/Admin/js/select-ui.min.js"></script>

<script type="text/javascript">
$(function(){	
	//导航切换
	$(".menuson .header").click(function(){
		var $parent = $(this).parent();
		$(".menuson>li.active").not($parent).removeClass("active open").find('.sub-menus').hide();
		
		$parent.addClass("active");
		if(!!$(this).next('.sub-menus').size()){
			if($parent.hasClass("open")){
				$parent.removeClass("open").find('.sub-menus').hide();
			}else{
				$parent.addClass("open").find('.sub-menus').show();	
			}
			
			
		}
	});
	
	// 三级菜单点击
	$('.sub-menus li').click(function(e) {
        $(".sub-menus li.active").removeClass("active")
		$(this).addClass("active");
    });
	
	$('.title').click(function(){
		var $ul = $(this).next('ul');
		$('dd').find('.menuson').slideUp();
		if($ul.is(':visible')){
			$(this).next('.menuson').slideUp();
		}else{
			$(this).next('.menuson').slideDown();
		}
	});
})
</script>


</html>