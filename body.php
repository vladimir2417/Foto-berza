
<div class="main main-raised">
	<div class="container mainn-raised" style="width:100%;">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">

				<div class="item active">
					<img src="img/reklama1.png" style="width:100%;">

				</div>

				<div class="item">
					<img src="img/reklama2.png" style="width:100%;">

				</div>
			</div>

			<a class="left carousel-control _26sdfg" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only" >Prethodno</span>
			</a>
			<a class="right carousel-control _26sdfg" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Sledece</span>
			</a>
		</div>
	</div>


	<div class="section mainn mainn-raised" >
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-xs-6">
					<a href="store.php"><div class="shop">
						<div class="shop-img">
							<img src="./img/kupi01.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Fotoaparati</h3>
							<a href="store.php" class="cta-btn">Kupi <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div></a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="store.php"><div class="shop">
						<div class="shop-img">
							<img src="./img/kupi02.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Objektivi</h3>
							<a href="store.php" class="cta-btn">Kupi <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div></a>
				</div>
				<div class="col-md-4 col-xs-6">
					<a href="store.php"><div class="shop">
						<div class="shop-img">
							<img src="./img/kupi03.png" alt="">
						</div>
						<div class="shop-body">
							<h3>Dodatna oprema</h3>
							<a href="store.php" class="cta-btn">Kupi <i class="fa fa-arrow-circle-right"></i></a>
						</div>
					</div></a>
				</div>
			</div>
		</div>
	</div>


	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title">
						<h3 class="title">Novi fotoaparati</h3>
						
					</div>
				</div>
				

				<div class="col-md-12 mainn mainn-raised">
					<div class="row">
						<div class="products-tabs">
							<!-- tab -->
							<div id="tab1" class="tab-pane active">
								<div class="products-slick" data-nav="#slick-nav-1" >

									<?php
									include 'db.php';
									

									$product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 6";
									$run_query = mysqli_query($con,$product_query);
									if(mysqli_num_rows($run_query) > 0){

										while($row = mysqli_fetch_array($run_query)){
											$pro_id    = $row['product_id'];
											$pro_cat   = $row['product_cat'];
											$pro_brand = $row['product_brand'];
											$pro_title = $row['product_title'];
											$pro_price = $row['product_price'];
											$pro_image = $row['product_image'];

											$cat_name = $row["cat_title"];

											echo "



											<div class='product'>
											<a ><div class='product-img'>
											<img src='product_images/$pro_image' style='max-height: 170px;' alt=''>
											<div class='product-label'>

											<span class='new'>NOVO</span>
											</div>
											</div></a>
											<div class='product-body'>
											<p class='product-category'>$cat_name</p>
											<h3 class='product-name header-cart-item-name'><a href='store.php'>$pro_title</a></h3>
											<h4 class='product-price header-cart-item-info'>$pro_price</h4>
											
											<div class='product-btns'>
											<button class='add-to-wishlist'><i class='fa fa-heart-o'></i><span class='tooltipp'>dodaj u listu zelja</span></button>
											<button class='quick-view'><i class='fa fa-eye'></i><span class='tooltipp'>pregled proizvoda</span></button>
											</div>
											</div>
											<div class='add-to-cart'>
											<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> dodaj u korpu</button>
											</div>
											</div>



											";
										}
										;

									}
									?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
