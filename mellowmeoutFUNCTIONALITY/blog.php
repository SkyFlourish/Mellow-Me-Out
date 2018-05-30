<!DOCTYPE html>
<html>
<head>
    <title>Blog</title> <!-- Web Tab Title -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="carrot Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
	<script src="js/snap.svg-min.js"></script>
				<!--light-box-files -->
	<script src="js/jquery.chocolat.js"></script>			
			<script type="text/javascript">
			$(function() {
				$('.gallery a').Chocolat();
			});
			</script>
			<!--light-box-files -->
			<script src="js/responsiveslides.min.js"></script>
	<script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });	
	</script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Enabling zoom on mobile devices -->
    
    <meta name="keywords" content="spas, beauty, massages, eyelashes, melbourne">
    
    <meta name="description" content="Relaxing Spas. Book now today!">
    
    <link rel="stylesheet" type="text/css" href="blog.css"> <!-- Link to external CSS file -->
    <script type="text/javascript" src="slideshow.js"></script>
</head>
    
<body onload="ChangeDots">
    <div class="wrapper">
        <!-- Header -->
        <?php include('header.php')?>
        
    
    <!-- Navigation bar -->
        <?php include('nav.php')?>
    
	<!-- MAIN CONTENT -->
	
		
		
    <div class= "content"> 
       <div id="left">
		<h2 style="text-align:center">Mellow Me Out Blog</h2>
		<h2 style="text-align:left">First blog</h2>
			<p class="categories">May, 1st, 2018 | <a href>Dairy</a> | Tag: <a href>Students</a> | <a href>14 Comment</a></p><hr>
			<p class= "contents">This is your first article. 
			Click the edit link to modify or delete the article, 
			or start writing a new article. 
			If you wish, you can tell the reader through this article why you created this blog and what you intend to do with it. 
			If you need help, you are welcome to support BBS.
			</p>
		
		<h2 style="text-align:left">Second blog</h2>
			<p class="categories">May, 30, 2018 | <a href>Dairy</a> | Tag: <a href>Business</a> | <a href>14 Comment</a></p><hr>
			<p class= "contents">This is your first article. 
			Click the edit link to modify or delete the article, 
			or start writing a new article. 
			If you wish, you can tell the reader through this article why you created this blog and what you intend to do with it. 
			If you need help, you are welcome to support BBS.
			</p>
	   </div>
	   <div id="right">
		<h1 style="text-align:center">Blog Bar</h1><hr>
		<h3 id="bar">CATEGORIES</h3>
		<p id="tags"><a href>Dairy</a></p>
		<p id="tags"><a href>Discount</a></p>
		<p id="tags"><a href>Special</a></p>
		<p id="tags"><a href>Pictures</a></p>
		<p id="tags"><a href>Uncategories</a></p>
		<hr>
		<h3 id="bar">TAG</h3>
		<p id="tags"><a href>Students,Business,Games,</a></p>
		<p id="tags"><a href>RRS,Widgets,Video</a></p>
		
	   </div>
    </div>
    <!-- MAIN CONTENT END -->
    <!-- FOOTER CONTENT -->
       <?php include('footer.php')?> 
             <style>
            /* dynamic styling of footer across all pages */
            <?php include 'footer.css'; ?>
        </style>
</div>
    
    
   

</body>
</html>