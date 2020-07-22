<!DOCTYPE html>
<html>
<head>
	<title>Footer</title>
	<link rel="stylesheet" type="text/css" href="css/stil.css">
</head>
<body>

</body>


<footer id="footer" style="background: #e6e6e6;
color: #666666; margin: 30px 0px; ">
<!-- top footer -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-3 col-xs-6">
				<div class="footer">
					<h3 class="footer-title" style="color: #666666;
					text-transform: uppercase;
					font-size: 18px;
					margin: 0px 0px 30px;">O nama</h3>

					<ul class="footer-links" style="color: #666666">
						<li><a href="#" style="color: #666666"><i class="fa fa-map-marker"></i>Bogoljuba Cukica 28</a></li>
						<li><a href="#" style="color: #666666"><i class="fa fa-phone"></i>0652852633</a></li>
						<li><a href="#" style="color: #666666"><i class="fa fa-envelope-o"></i>vladimir@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6 text-center" style="margin-top:80px;">

				<span class="copyright">
					Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
				</span>
			</div>

			<div class="col-md-3 col-xs-6">
				<div class="footer">
					<h3 class="footer-title" style="color: #666666;
					text-transform: uppercase;
					font-size: 18px;
					margin: 0px 0px 30px;">Kategorije</h3>
					<ul class="footer-links">
						<li><a href="store.php" style="color: #666666";>Fotoaparati</a></li>
						<li><a href="store.php" style="color: #666666";>Objektivi</a></li>
						<li><a href="store.php" style="color: #666666";>Dodatna oprema</a></li>
					</ul>
				</div>
			</div>

			<div class="clearfix visible-xs"></div>
		</div>
	</div>
</div>

</footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/actions.js"></script>
<script src="js/sweetalert.min"></script>
<script src="js/jquery.payform.min.js" charset="utf-8"></script>
<script src="js/script.js"></script>
<script>var c = 0;
function menu(){
	if(c % 2 == 0) {
		document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";    
		document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";    
		c++; 
	}else{
		document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";        
		document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";        
		c++;
	}
}


</script>
<script type="text/javascript">
	$('.block2-btn-addcart').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to cart !", "success");
		});
	});

	$('.block2-btn-addwishlist').each(function(){
		var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
		$(this).on('click', function(){
			swal(nameProduct, "is added to wishlist !", "success");
		});
	});
</script>
</html>

