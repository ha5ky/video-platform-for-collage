<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Single</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="/Public/css/medile.css" rel='stylesheet' type='text/css' />
		<link href="/Public/css/single.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="/Public/css/contactstyle.css" type="text/css" media="all" />
		<link rel="stylesheet" href="/Public/css/faqstyle.css" type="text/css" media="all" />
		<!-- news-css -->
		<link rel="stylesheet" href="news-css/news.css" type="text/css" media="all" />
		<!-- //news-css -->
		<!-- list-css -->
		<link rel="stylesheet" href="list-css/list.css" type="text/css" media="all" />
		<!-- //list-css -->
		<!-- font-awesome icons -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />
		<!-- //font-awesome icons -->
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
<!-- start-smoth-scrolling -->
<link href="/Public/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="/Public/js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({

		  autoPlay: 3000, //Set AutoPlay to 3 seconds

		  items : 5,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [414,4]

		});

	}); 
</script> 
<script src="/Public/js/simplePlayer.js"></script>
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>

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

	<!-- single -->
	<div class="single-page-agile-main">
		<div class="container">
			<!-- /w3l-medile-movies-grids -->
			<div class="agileits-single-top">
				<ol class="breadcrumb">
					<li><a href="index.html">首页</a></li>
					<li class="active">播放页面</li>
				</ol>
			</div>
			<div class="single-page-agile-info">
				<!-- /movie-browse-agile -->
				<div class="show-top-grids-w3lagile">
					<div class="col-sm-8 single-left">
						<div class="song">
							<div class="song-info">
								<h3><?php echo ($video_name); ?></h3>	
							</div>
							<div class="video-grid-single-page-agileits">
								<div data-video="dLmKio67pVQ" id="video"> <img src="images/5.jpg" alt="" class="img-responsive" /> </div>
							</div>
						</div>
						<!-- 这里开始是视频播放 ckplayer-->
						<div id="a1" style="width: 700px; height: 450px;"></div>
						<script type="text/javascript" src="/Public/ckplayer/ckplayer.js" charset="utf-8"></script>
						<script type="text/javascript">
							var flashvars={
								f:'<?php echo ($img); ?>',
								c:0
							};
							var params={bgcolor:'#FFF',allowFullScreen:true,allowScriptAccess:'always',wmode:'transparent'};
							var video=['<?php echo ($img); ?>->video/mp4'];
							CKobject.embed('/Public/ckplayer/ckplayer.swf','a1','ckplayer_a1','100%','100%',false,flashvars,video,params);
						</script>
						<!-- 这里结束视频播放 -->
						<div class="song-grid-right">
							<div class="share">
								<p>视频介绍</p>
								<div class="single-agile-shar-buttons">
									<ul>
										<li>
											<div class="fb-like" data-href="https://www.facebook.com/w3layouts" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>
											<script>(function(d, s, id) {
												var js, fjs = d.getElementsByTagName(s)[0];
												if (d.getElementById(id)) return;
												js = d.createElement(s); js.id = id;
												js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7";
												fjs.parentNode.insertBefore(js, fjs);
											}(document, 'script', 'facebook-jssdk'));</script>
										</li>

										<li>
											<!-- Place this tag where you want the +1 button to render. -->
											<div class="g-plusone" data-size="medium"></div>

											<!-- Place this tag after the last +1 button tag. -->
											<script type="text/javascript">
												(function() {
													var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
													po.src = 'https://apis.google.com/js/platform.js';
													var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
												})();
											</script>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>

						<div class="all-comments">
							<div class="all-comments-info">
								<a href="#">评 论</a>

							</div>

							<div class="media-grids">
							<?php if(is_array($com)): $i = 0; $__LIST__ = $com;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="media">
									<h5><?php echo ($vo["std_name"]); ?></h5>
									<!-- <div class="media-left">
										<a href="#">
											<img src="images/user.jpg" title="One movies" alt=" " />
										</a>
									</div> -->
									<div class="media-body">
										<p><?php echo ($vo["com_content"]); ?></p>
										<span><a id="rep" href="#sed"> 回复 </a></span>
									</div>
									<script type="text/javascript">
									$(document).ready(function(){
										$("#rep").click(function(){
											$("#sed").css({color:"green"}).val("@"+<?php echo ($vo['std_name']); ?>+"   ");
											$("#sed1").val(<?php echo ($vo['sid']); ?>);
										});
									});
									</script>
								</div><?php endforeach; endif; else: echo "" ;endif; ?>
								<div class="agile-info-wthree-box">
									<form action="<?php echo U('Home/Operate/send',array('vid' => $vid));?>" method="post">
										<h2><?php echo ($stdname); ?></h2>
									<!-- <input type="text" placeholder="Name" required="">			           					   
									<input type="text" placeholder="Email" required="">
									<input type="text" placeholder="Phone" required=""> -->
									<input type="hidden" name="reply_id" id="sed1" value="">
									<textarea value="" id="sed" placeholder="消  息" name="com_content" required=""></textarea>
									<input type="submit" value="发  送">
									<div class="clearfix"> </div>
								</form>
							</div>

						</div>
					</div>
				</div>
				<div class="col-md-4 single-right">
					<h3>视频推荐</h3>
					<div class="single-grid-right">
					<?php if(is_array($arr_video)): $i = 0; $__LIST__ = $arr_video;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="single-right-grids">
							<div class="col-md-4 single-right-grid-left">
								<a href="single.html"><img src="images/m1.jpg" alt="" /></a>
							</div>
							<div class="col-md-8 single-right-grid-right">
								<a href="<?php echo U('Home/Index/single',array('video_id' => $vo['vid']));?>" class="title"> <?php echo ($vo["v_name"]); ?></a>
								<p class="author"><a href="#" class="author"><?php echo ($vo["v_intro"]); ?></a></p>
								<p class="views">视频观看量</p>
							</div>
							<div class="clearfix"> </div>
						</div><?php endforeach; endif; else: echo "" ;endif; ?>	
					</div>
				</div>
				

				
				<div class="clearfix"> </div>
			</div>
			<!-- //movie-browse-agile -->
			<!--body wrapper start-->										
		</div>
	</div>
	<!--body wrapper end-->


</div>
<!-- //w3l-latest-movies-grids -->
</div>	
</div>
<!-- //w3l-medile-movies-grids -->

<!-- footer -->
<div class="footer">

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