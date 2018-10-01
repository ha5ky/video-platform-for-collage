<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title>News</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/Public/css/faqstyle.css" type="text/css" media="all" />
<link href="/Public/css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="/Public/css/contactstyle.css" type="text/css" media="all" />
<!-- news-css -->
<link rel="stylesheet" href="/Public/news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="/Public/list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="/Public/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="/Public/css/basic.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/Public/css/menus_style.css">
<!-- js -->
<script type="text/javascript" src="/Public/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!---<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>--->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/Public/js/move-top.js"></script>
<script type="text/javascript" src="/Public/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('.inactive').click(function(){
		if($(this).siblings('ul').css('display')=='none'){
			$(this).parent('li').siblings('li').removeClass('inactives');
			$(this).addClass('inactives');
			$(this).siblings('ul').slideDown(100).children('li');
			if($(this).parents('li').siblings('li').children('ul').css('display')=='block'){
				$(this).parents('li').siblings('li').children('ul').parent('li').children('a').removeClass('inactives');
				$(this).parents('li').siblings('li').children('ul').slideUp(100);

			}
		}else{
			//控制自身变成+号
			$(this).removeClass('inactives');
			//控制自身菜单下子菜单隐藏
			$(this).siblings('ul').slideUp(100);
			//控制自身子菜单变成+号
			$(this).siblings('ul').children('li').children('ul').parent('li').children('a').addClass('inactives');
			//控制自身菜单下子菜单隐藏
			$(this).siblings('ul').children('li').children('ul').slideUp(100);

			//控制同级菜单只保持一个是展开的（-号显示）
			$(this).siblings('ul').children('li').children('a').removeClass('inactives');
		}
	})
});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
					<img src="<?php echo ($img1["top_logo"]); ?>">
					<a href="<?php echo U('Home/Index/index');?>"><h3><?php echo ($systemname); ?></h3></a>
				</div>
			<div class="w3_search">
				<form action="<?php echo U('Home/Public/search');?>" method="post">
					<input type="text" name="searchkey" placeholder="搜索" required="">
					<input type="submit" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>					
					<li><a href="#" data-toggle="modal" data-target="#myModal">登录</a></li>
				</ul>
			</div>
			<div class="topright">    
				<ul style="padding-top: 15px;">
				<li style="list-style: none; float: left;padding-left: 9px;padding-right: 9px;"><span><img src="/Public/images/help.png" class="helpimg"/></span><a href="#">帮助</a></li>
					<li style="list-style: none;float: left;padding-left: 9px;padding-right: 9px;"><a href="#">关于</a></li>
					<li style="list-style: none;float: left;padding-left: 9px;padding-right: 9px;"><a href="<?php echo U('Home/public/logout');?>" target="_parent">退出</a></li>
				</ul>

				<div class="user">
					<span>登陆用户：<?php echo ($stdname); ?></span>
				</div>    
			</div> 
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					登录
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<div class="w3_login_module">
							<div class="module form-module">
							  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
								<div class="tooltip">点击登录</div>
							  </div>
							  <div class="form">
								<h3>输入你的账户</h3>
								<form action="<?php echo U('Home/public/login');?>" method="post">
								  <input type="text" name="username" placeholder="Username" required="">
								  <input type="password" name="password" placeholder="Password" required="">
								  <input type="submit" value="登录">
								</form>
							  </div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
<!-- //bootstrap-pop-up -->
<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="w3_home_act"><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
							<li class="w3_home_act"><a href="<?php echo U('Home/Index/news');?>">课程分类</a></li>
							<?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><li class="w3_home_act"><a href="<?php echo U('Home/Operate/top_jump', array('course' => $vo));?>"><?php echo ($vo); ?></a></li><?php endforeach; endif; ?>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
<!-- faq-banner -->
	<div class="faq">
			<div class="container">
				<div class="agileits-news-top">
					<ol class="breadcrumb">
					  <li><a href="index.html">首页</a></li>
					  <li class="active">分类</li>
					</ol>
				</div>
				<div class="agileinfo-news-top-grids">
					<div class="col-md-8 wthree-top-news-left">
						<div class="wthree-news-left">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#home1" id="home1-tab" role="tab" data-toggle="tab" aria-controls="home1" aria-expanded="true">正 序</a></li>
									<li role="presentation"><a href="#w3bsd" role="tab" id="w3bsd-tab" data-toggle="tab" aria-controls="w3bsd">倒 序</a></li>
								</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home1" aria-labelledby="home1-tab">
										<div class="wthree-news-top-left">
										<?php if(is_array($v2)): foreach($v2 as $key=>$vv): ?><div class="col-md-6 w3-agileits-news-left">
												<div class="col-sm-5 wthree-news-img">
													<a href="<?php echo U('Home/Index/single_list',array('sort_id' => $vv['sort_id']));?>"><img src="<?php echo ($vv['sort_img']); ?>" alt="" /></a>
												</div>
												<div class="col-sm-7 wthree-news-info">
													<h5><a href="<?php echo U('Home/Index/single_list',array('sort_id' => $vv['sort_id']));?>"><?php echo ($vv["sort_name"]); ?></a></h5>
													<p><?php echo ($vv["sort_intro"]); ?></p>
													<ul>
														<li><i class="fa fa-clock-o" aria-hidden="true"></i> 24/09/2016</li>
														<li><i class="fa fa-eye" aria-hidden="true"></i> 2642</li>
													</ul>
												</div>
												<div class="clearfix"> </div>
											</div><?php endforeach; endif; ?>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--右侧导航栏-->
					<script type="text/javascript">
						$(function(){
							$('#lanPos').css('top',$('.hover').offset().top);
							$('ul li').hover(function(){
								$('#lanPos').css('top',$(this).offset().top);
							},function(){
								$('#lanPos').css('top',$('.hover').offset().top);
							})

							$('ul li').click(function(){
								for(var i=0;i<$('ul li').size();i++){
									if(this==$('ul li').get(i)){
										$('ul li').eq(i).children('a').addClass('hover');
									}else{
										$('ul li').eq(i).children('a').removeClass('hover');
									}
								}
							})

						})
					</script>
					<div class="col-md-2 side-nav" >
						<style type="text/css">
							*{margin: 0;padding: 0}
							body{font-size: 12px;font-family: "宋体","微软雅黑";}
							ul,li{list-style: none;}
							a:link,a:visited{text-decoration: none;}
							.list{width: 210px;border-bottom:solid 1px #316a91;margin:40px auto 0 auto;}
							.list ul li{background-color:#459df5; border:solid 1px #f3f3f3; border-bottom:0;}
							.list ul li a{padding-left: 10px;color: #fff; font-size:12px; display: block; font-weight:bold; height:36px;line-height: 36px;position: relative;
							}
							.list ul li .inactive{ background:url(images/off.png) no-repeat 184px center;}
							.list ul li .inactives{background:url(images/on.png) no-repeat 184px center;} 
							.list ul li ul{display: none;}
							.list ul li ul li { border-left:0; border-right:0; background-color:#6196bb; border-color:#467ca2;}
							.list ul li ul li ul{display: none;}
							.list ul li ul li a{ padding-left:20px;}
							.list ul li ul li ul li { background-color:#d6e6f1; border-color:#6196bb; }
							.last{ background-color:#d6e6f1; border-color:#6196bb; }
							.list ul li ul li ul li a{ color:#316a91; padding-left:30px;}
						</style>
						<div class="list">
							<ul class="yiji">
								<li><a href="">课程选择</a></li>
								<?php if(is_array($v1)): foreach($v1 as $key=>$it): ?><li><a href="" class="inactive"><?php echo ($it["sort_name"]); ?></a>
									<ul style="display: none">
									<?php if(is_array($v3)): foreach($v3 as $key=>$it2): if($it2['sort_pid'] == $it['sort_id']): ?><li><a href="<?php echo U('Home/Index/single_list',array('sort_id' => $it2['sort_id']));?>" class="inactive active"><?php echo ($it2["sort_name"]); ?></a>
											<!-- <ul>
												<li><a href="#">二级章节</a></li>
												<li><a href="#">二级章节</a></li>
												<li><a href="#">二级章节</a></li>
												<li><a href="#">二级章节</a></li>
												<li><a href="#">二级章节</a></li>
												<li><a href="#">二级章节</a></li>
											</ul> -->
										</li><?php endif; endforeach; endif; ?>
									</ul>
								</li><?php endforeach; endif; ?>
							</ul>
						</div>
					</div>
					<!--右侧导航栏结束-->
					<div class="clearfix"> </div>
				</div>
			</div>
	</div>
<!-- //faq-banner -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>Copyright &copy; 2016.Company name All rights reserved.</p>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="/Public/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>