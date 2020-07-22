<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Foto berza</title>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

	<link type="text/css" rel="stylesheet" href="css/slick.css"/>
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

	<link rel="stylesheet" href="css/font-awesome.min.css">
	
	<link type="text/css" rel="stylesheet" href="css/stil.css"/>	
	<link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>

	<style>

		body
		{
			background-color: #333;
		}
		.mainn-raised {
			
			margin: -7px 0px 0px;
			border-radius: 6px;
			box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

		}
		
		.glyphicon{
			display: inline-block;
			font: normal normal normal 14px/1 FontAwesome;
			font-size: inherit;
			text-rendering: auto;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		.glyphicon-chevron-left:before{
			content:"\f053"
		}
		.glyphicon-chevron-right:before{
			content:"\f054"
		}	
		
	</style>

</head>
<body>
	<header>
		<div id="" style="background-color: black">
			<div class="container">
				
				<ul class="header-links pull-right">
					<li><?php
					include "db.php";
					if(isset($_SESSION["uid"])){
						$sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
						$query = mysqli_query($con,$sql);
						$row=mysqli_fetch_array($query);
						
						echo '
						<div class="dropdownn">
						<a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
						<div class="dropdownn-content">
						<a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Izloguj se</a>
						
						</div>
						</div>';

					}else{ 
						echo '
						<div class="dropdownn">
						<a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> Moj profil</a>
						<div class="dropdownn-content">
						<a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Uloguj se</a>
						<a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Registruj se</a>
						
						</div>
						</div>';
						
					}
					?>
					
				</li>				
			</ul>
			
		</div>
	</div>
	
	
	<div id="header" style="background-image: url('img/head.jpg'); background-size: cover;">
		<div class="container">
			<div class="row">
				<div class="col-md-18 clearfix">
					<div class="header-ctn">
						
						<div class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<i class="fa fa-shopping-cart"></i>
								<span>Korpa</span>
								<div class="badge qty">0</div>
							</a>
							<div class="cart-dropdown"  >
								<div class="cart-list" id="cart_product">
									
									
								</div>
								
								<div class="cart-btns">
									<a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  Izmeni korpu</a>
									
								</div>
							</div>						
						</div>		
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a class="navbar-brand" href="index.php">
			
		Pocetna strana</a>

		<a class="navbar-brand" href="store.php">
			
		Prodavnica</a>

	</div>
</nav>

<div class="modal fade" id="Modal_login" role="dialog">
	<div class="modal-dialog">
		
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body">
				<?php
				include "login_form.php";
				
				?>
				
			</div>
			
		</div>
		
	</div>
</div>
<div class="modal fade" id="Modal_register" role="dialog">
	<div class="modal-dialog" style="">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				
			</div>
			<div class="modal-body">
				<?php
				include "register_form.php";
				
				?>
				
			</div>
			
		</div>

	</div>
</div>
