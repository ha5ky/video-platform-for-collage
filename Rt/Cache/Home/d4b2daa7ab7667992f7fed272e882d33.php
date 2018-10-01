<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo ($config_name); ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/Public/css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="/Public/css/faqstyle.css" type="text/css" media="all" />
<link href="/Public/css/single.css" rel='stylesheet' type='text/css' />
<link href="/Public/css/medile.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="/Public/css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
<!-- pop-up -->
<link href="/Public/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="/Public/css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="/Public/js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="/Public/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="/Public/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
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
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
			<img src="<?php echo ($img["top_logo"]); ?>">
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
					<span>登陆用户：<?php echo ($std_name); ?></span>
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
							<!-- <li class="w3_home_act"><a href="news.html"><?php echo ($arr[2]); ?></a></li>
							<li class="w3_home_act"><a href="index.html"><?php echo ($arr[3]); ?></a></li>
							<li class="w3_home_act"><a href="index.html"><?php echo ($arr[4]); ?></a></li>
							<li class="w3_home_act"><a href="index.html"><?php echo ($arr[5]); ?></a></li>-->
						</ul> 
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
<!-- banner -->
	<div id="slidey" style="display:none;">
		<ul>
		<?php if(is_array($arr1)): $i = 0; $__LIST__ = $arr1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><img src="<?php echo ($vo['v_img']); ?>" alt=" "><p class='title'><?php echo ($vo["v_name"]); ?></p><p class='description'><?php echo ($vo["v_intro"]); ?></p></li><?php endforeach; endif; else: echo "" ;endif; ?>
			
			<!-- <li><img src="/Public/images/2.jpg" alt=" "><p class='title'>视频名</p><p class='description'>详情介绍.</p></li>
			<li><img src="/Public/images/3.jpg" alt=" "><p class='title'>视频名</p><p class='description'>详情介绍.</p></li>
			<li><img src="/Public/images/4.jpg" alt=" "><p class='title'>视频名</p><p class='description'>详情介绍.</p></li>
			<li><img src="/Public/images/6.jpg" alt=" "><p class='title'>视频名</p><p class='description'>详情介绍.</p></li>
			<li><img src="/Public/images/7.jpg" alt=" "><p class='title'>视频名</p><p class='description'>详情介绍.</p></li> -->
		</ul>   	
    </div>
    <script src="/Public/js/jquery.slidey.js"></script>
    <script src="/Public/js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
					<?php if(is_array($arr2)): $i = 0; $__LIST__ = $arr2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?><div class="item">
						<div class="w3l-movie-gride-agile w3l-movie-gride-agile1">
							<a href="<?php echo U('Home/Index/single',array('video_id' => $vo1['vid']));?>" class="hvr-shutter-out-horizontal"><img src="<?php echo ($vo1['v_img']); ?>" title="album-name" class="img-responsive" alt="" />
								<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
							</a>
							<div class="mid-1 agileits_w3layouts_mid_1_home">
								<div class="w3l-movie-text">
									<h6><a href="<?php echo U('Home/Index/single',array('video_id' => $vo1['vid']));?>"><?php echo ($vo1["v_name"]); ?></a></h6>							
								</div>
								<div class="mid-2 agile_mid_2_home">
									<p><?php echo (date("Y-m-d", $vo1["v_time"])); ?></p>
									<div class="block-stars">
										<ul class="w3l-ratings">
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</div>
							<div class="ribben">
								<p>最新</p>
							</div>
						</div>
					</div><?php endforeach; endif; else: echo "" ;endif; ?>
				</div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">课程精选</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<!-- <ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">精选课程</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">最热课程</a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">精品课程</a></li>
					<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">最新课程</a></li>
				</ul> -->
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
						<?php if(is_array($course)): $i = 0; $__LIST__ = $course;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c1): $mod = ($i % 2 );++$i;?><div class="col-md-2 w3l-movie-gride-agile">
								<a href="<?php echo U('Home/Operate/top_jump',array('course' => $c1['sort_name']));?>" class="hvr-shutter-out-horizontal"><img src="<?php echo ($c1['sort_img']); ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="<?php echo U('Home/Operate/top_jump',array('course' => $c1['sort_name']));?>"><?php echo ($c1["sort_name"]); ?></a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2016</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>最新</p>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="general">
		<h4 class="latest-text w3_latest_text">视频精选</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
						<?php if(is_array($arr2)): $i = 0; $__LIST__ = $arr2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$arr2): $mod = ($i % 2 );++$i;?><div class="col-md-2 w3l-movie-gride-agile">
								<a href="<?php echo U('Home/Index/single',array('video_id' => $arr2['vid']));?>" class="hvr-shutter-out-horizontal"><img src="<?php echo ($arr2['v_img']); ?>" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="<?php echo U('Home/Index/single',array('video_id' => $arr2['vid']));?>"><?php echo ($arr2["v_name"]); ?></a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p><?php echo (date("Y-m-d",$arr2["v_time"])); ?></p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>最新</p>
								</div>
							</div><?php endforeach; endif; else: echo "" ;endif; ?>
							
							
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- //general -->

			</section>
			
		</div>
	</div>
	<!-- pop-up-box -->  
		<script src="/Public/js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<div id="small-dialog" class="mfp-hide">
		<!---<iframe src="/Public/https://player.vimeo.com/video/164819130?title=0&byline=0"></iframe>--->
	</div>
	<div id="small-dialog1" class="mfp-hide">
		<!---<iframe src="/Public/https://player.vimeo.com/video/148284736"></iframe>--->
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<!---<iframe src="/Public/https://player.vimeo.com/video/165197924?color=ffffff&title=0&byline=0&portrait=0"></iframe>--->
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<!-- //Latest-tv-series -->
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