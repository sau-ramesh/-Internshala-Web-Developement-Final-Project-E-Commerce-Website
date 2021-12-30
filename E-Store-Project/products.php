<?php
include "includes/common.php";

if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>E-Store|Products</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/css.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        include 'includes/check-if-added.php';
        ?>
        
		<div class="container-fluid"><br><br><br>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 1</h4>
						</div>
						<div class="thumbnail">
							<img src="img/cyberpunk.jpg" alt="Cyberpunk 2077">
							<div class="caption">
								<h3>Cyberpunk 2077</h3>
								<h5>CD PROJEKT RED</h5>
								<p>Price: <i class="fa fa-rupee"></i> 2,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 2</h4>
						</div>
						<div class="thumbnail">
							<img src="img/assassin's_creed_valhalla.jpg" alt="Assassin's_Creed_Valhalla">
							<div class="caption">
								<h3>Assassin's Creed</h3>
								<h5>UBISOFT MONTREAL</h5>
								<p>Price: <i class="fa fa-rupee"></i> 2,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 3</h4>
						</div>
						<div class="thumbnail">
							<img src="img/ghostrunner.jpg" alt="Ghostrunner">
							<div class="caption">
								<h3>Ghostrunner</h3>
								<h5>ONE MORE LEVEL</h5>
								<p>Price: <i class="fa fa-rupee"></i> 1,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
	        <div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 4</h4>
						</div>
						<div class="thumbnail">
							<img src="img/COD.jpg" alt="Call of Duty Modern Warfare" >
							<div class="caption">
								<h3>Call of Duty: Modern Warfare</h3>
								<h5>INFINITY WARD</h5>
								<p>Price: <i class="fa fa-rupee"></i> 4,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 5</h4>
						</div>
						<div class="thumbnail">
							<img src="img/pubg.jpg" alt="Playerunknown's Battlegrounds" >
							<div class="caption">
								<h3>Playerunknown's Battlegrounds</h3>
								<h5>PUBG CORPORATION</h5>
								<p>Price: <i class="fa fa-rupee"></i> 1,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 6</h4>
						</div>
					
						<div class="thumbnail">
							<img src="img/spiderman.jpg" alt="Spider-Man: Miles Morales" >
							<div class="caption">
								<h3>Spider - Man : Miles Morales</h3>
								<h5>INSOMNIAC GAMES</h5>
								<p>Price: <i class="fa fa-rupee"></i> 3,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
			
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 7</h4>
						</div>
						<div class="thumbnail">
							<img src="img/witcher.jpg" alt="The Witcher 3: Wild Hunt – Blood and Wine" >
							<div class="caption">
								<h3>The Witcher 3: Wild Hunt</h3>
								<h5>CD PROJEKT RED</h5>
								<p>Price: <i class="fa fa-rupee"></i> 1,799</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 8</h4>
						</div>
						<div class="thumbnail">
							<img src="img/red_dead_redemption_2.jpg" alt="Red Dead Redemption 2" >
							<div class="caption">
								<h3>Red Dead Redemption 2</h3>
								<h5>ROCKSTAR STUDIOS</h5>
								<p>Price: <i class="fa fa-rupee"></i> 2,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Prodduct 9</h4>
						</div>
						<div class="thumbnail">
							<img src="img/world_of_warcraft.jpg" alt="World of Warcraft: Shadowlands" >
							<div class="caption">
								<h3>World of Warcraft</h3>
								<h5>BLIZZARD ENTERTAINMENT</h5>
								<p>Price: <i class="fa fa-rupee"></i> 1,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 10</h4>
						</div>
						<div class="thumbnail">
							<img src="img/gta_5.jpg" alt="Grand Theft Auto V">
							<div class="caption">
								<h3>Grand Theft Auto V</h3>
								<h5>ROCKSTAR NORTH</h5>
								<p>Price: <i class="fa fa-rupee"></i> 1,299</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 11</h4>
						</div>
						<div class="thumbnail">
							<img src="img/devil_may_cry.jpg" alt="Devil May Cry 5" >
							<div class="caption">
								<h3>Devil May Cry 5</h3>
								<h5>CAPCOM</h5>
								<p>Price: <i class="fa fa-rupee"></i> 2,299</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>

				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4>Product 12</h4>
						</div>
						<div class="thumbnail">
							<img src="img/fortnite.jpg" alt="Fortnite" >
							<div class="caption">
								<h3>Fortnite</h3>
								<h5>EPIC GAMES</h5>
								<p>Price: <i class="fa fa-rupee"></i> 1,999</p>
								<?php 
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								?>
							</div>
						</div>
					</div>	
				</div>		
            </div>
		</div>
    
	    <?php
        include 'includes/footer.php';
        ?>   
    </body>
</html>
