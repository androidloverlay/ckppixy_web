<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html>
<head>
<title>Pixy Gallery</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Photo-Hub Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css" href="">
<!-- Custom Theme files -->
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
<script src="js/menu_jquery.js"></script>    
</head>
<body>
	<?php
		include ("header.php");
		?>
	<div class="stock_box">
	  <div class="sap_tabs">	
	       <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			  	<ul class="pagination">
			        <li>
			          <a href="#" aria-label="Previous">
			            <span aria-hidden="true">«</span>
			          </a>
			        </li>
			        <li><a href="mani.php">1</a></li>
			        <li><a href="#">2</a></li>
			        <li><a href="#">3</a></li>
			        <li><a href="#">4</a></li>
			        <li><a href="#">5</a></li>
			        <li>
			          <a href="#" aria-label="Next">
			            <span aria-hidden="true">»</span>
			          </a>
			        </li>
		        </ul>		  	 
				<div class="resp-tabs-container">
				   <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
						<ul class="tab_img">
						  <li>
						  	<div class="img-wrapper">
								  	<a class="img-lightbox" href="data/Photography/manipulation/mani1.jpg"></a>
									 <img src="data/Photography/manipulation/mani1.jpg" class="img-responsive" alt=""/>
							 </div>
							     <div class="tab_desc">
									<p>Where is the key?</p>
								 </div>
									<div class="block-likes">
								     <div class="fa-block img-likes" data-attachid=1>
								       <i class="fa fa-heart-o"></i>
								       <span class="img-likes-count">28</span>
								     </div>
								   	</div>
						   </li>

						   <li>
						  	<div class="img-wrapper">
								  	<a class="img-lightbox" href="data/Photography/manipulation/mani2.jpg"></a>
									 <img src="data/Photography/manipulation/mani2.jpg" class="img-responsive" alt=""/>
							 </div>
							     <div class="tab_desc">
									<p>Angelic Angel</p>
								 </div>
									<div class="block-likes">
								     <div class="fa-block img-likes" data-attachid=2>
								       <i class="fa fa-heart-o"></i>
								       <span class="img-likes-count">28</span>
								     </div>
								   	</div>
						   </li>

						   <li>
						  	<div class="img-wrapper">
								  	<a class="img-lightbox" href="data/Photography/manipulation/mani3.jpg"></a>
									 <img src="data/Photography/manipulation/mani3.jpg" class="img-responsive" alt=""/>
							 </div>
							     <div class="tab_desc">
									<p>Waiting</p>
								 </div>
									<div class="block-likes">
								     <div class="fa-block img-likes" data-attachid=3>
								       <i class="fa fa-heart-o"></i>
								       <span class="img-likes-count">28</span>
								     </div>
								   	</div>
						   </li>


						   <div class="clearfix"></div>
						</ul>
				   </div>		        					 	        					 
			 </div>	
           </div>
           
       </div>
       <div class="clearfix"> </div>
    </div>
		<?php
		include ("category.php");
		?>
		

		<?php
		include ("footer.php");
		?>
		<script src="js/js.cookie.js"></script>
  		<script src="js/img.likes.js"></script>
  		<script src="js/jquery.magnific-popup.min.js"></script>
  		<script type="text/javascript">
  			$('.img-lightbox').magnificPopup({
      			type: 'image',
      			gallery:{enabled:true}
    		});
  		</script>
  		<script type="text/javascript">
			$(document).ready(function()
			{ $ (document).bind("contextmenu",function(e)
			{
			return false;
			});
			});
		</script>
</body>
</html>		