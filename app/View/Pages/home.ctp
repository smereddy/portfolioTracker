<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>EAGLE</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!--Animation-->
<script src="js/wow.min.js"></script>
<link href="css/animate.css" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>

</head>
<body>

  <div class="header-home">
	<div class="fixed-header">
		<div class="logo wow bounceInDown" data-wow-delay="0.4s">
			<a href="index.html">
	          <span class="secondary">FINACIAL SERVICE</span>
	          <span class="main">E A G L E</span>
	        </a>
		</div>
				<div class="top-nav wow bounce" data-wow-delay="0.4s">
				    <span class="menu"> </span>
					<ul>
						<li class="active"><a href="pages">Home</a></li>
					  	<li><a href="login">Login</a></li>	
					</ul>
				<!-- script-nav -->
			<script>
			$("span.menu").click(function(){
				$(".top-nav ul").slideToggle(500, function(){
				});
			});
			</script>
			<!-- //script-nav -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
        <!--script-->
		<script>
			$(document).ready(function(){
				$(".top-nav li a").click(function(){
					$(this).parent().addClass("active");
					$(this).parent().siblings().removeClass("active");
				});
			});
		</script>
			<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-home").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-home").addClass("fixed");
				}else{
					$(".header-home").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
	<!--//header-->
    </div>
    <div class="team">
		<div class="container">
			<h3 class="head_2 wow rollIn" data-wow-delay="0.4s">Welcome to our Finacial Service</h3>
			<div class="img-wrapper wow slideInLeft" data-wow-delay="0.4s">
              <a href="Customers"><img src="images/123.png" class="img-responsive" alt=""/></a>
              <a href="Investments"><img src="images/1234.png" class="img-responsive" alt=""/></a>
              <a href="Stocks"><img src="images/12345.png" class="img-responsive" alt=""/></a>
            </div>
            <blockquote class="blockquote1">
              <div class="block_info wow slideInRight" data-wow-delay="0.4s">
                <span class="heading">Customer-Investments-Stocks</span>
                Please click on icon for more information on your profile and stock informations
              </div>
              <span class="author wow bounce" data-wow-delay="0.4s"><a href="#"></a></span>
            </blockquote>
		</div>
	</div>
	<div class="footer wow fadeInRight" data-wow-delay="0.4s">
		<div class="container">
		  <div class="footer_top">
			<div class="col-sm-3">
			   <ul class="list1">
			   	<h3>Browse</h3>
			   	 <li><a href="Customers">Customers</a></li>
			   	 <li><a href="Investments">Investments</a></li>
			   	 <li><a href="stocks">stocks</a></li>
			      </ul>
			</div>
			<div class="col-sm-3">
			</div>
			<div class="col-sm-3">
			</div>
			<div class="col-sm-3">
			  <ul class="socials">
                 <li><a href="#"><i class="fa fb fa-facebook"></i></a></li>
                 <li><a href="#"><i class="fa tw fa-twitter"></i></a></li>
              </ul>
              <ul class="list2">
				<li><strong class="phone">+0018 58287 58</strong><br><small>Mon - Fri / 9.00AM - 06.00PM</small></li>
				<li>Questions? <a href="malito:mail@demolink.org">mail(at)eagle.com</a></li>
			  </ul>
			</div>
			<div class="clearfix"> </div>
		   </div>
		 </div>
	</div>
	<div class="copy">
	  <p>&copy; 2016 Design by SPMEREDDY
    </div>
</body>
</html>		