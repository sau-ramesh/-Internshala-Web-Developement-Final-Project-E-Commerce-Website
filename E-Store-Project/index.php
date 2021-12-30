<?php
require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>E-Store</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/index.css" type="text/css">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">
                    <center>
                        <div id="banner_content">
                            <h1>Welcome to</h1>
                            <h3>GAMINGVERSE</h3>
                            <br>
                            <br>
							<button class="btn btn-default btn-lg active" data-toggle="modal" data-target="#loginmodal">Shop Now</button>
                        </div>                   
                    </center>
                </div>
            </div>
           
            <div class="container text-center">
			    <div class="container11">
                    <div id="item_list">
                        <div class="panel panel-default">
                            <div class="panel-heading  color">
                                <center>                               
                                    <h2 style="color:grey"><b>Choose From Wide Range Of Games</b></h2>
                                </center>
                            </div>

                            <div class="panel-body">
                                <div class="col-sm-4">                            
                                    <div class="thumbnail">
                                        <img src="img/cyberpunk.jpg" alt="Cyberpunk 2077">
                                        <div class="caption">
                                            <h3>Cyberpunk 2077</h3>
                                            <h5>CD PROJEKT RED</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 2,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">                        
                                    <div class="thumbnail">
                                        <img src="img/assassin's_creed_valhalla.jpg" alt="Assassin's Creed Valhalla" >
                                        <div class="caption">
                                            <h3>Assassin's Creed</h3>
                                            <h5>UBISOFT MONTREAL</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 2,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">                            
                                    <div class="thumbnail">                                  
                                        <img src="img/ghostrunner.jpg" alt="Ghostrunner" >
                                        <div class="caption">
                                            <h3>Ghostrunner</h3>
                                            <h5>ONE MORE LEVEL</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 1,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="thumbnail">
                                        <img src="img/COD.jpg" alt="Call of Duty Modern Warfare" >
                                        <div class="caption">
                                            <h3>Call of Duty: Modern Warfare</h3>
                                            <h5>INFINITY WARD</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 4,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="thumbnail">   
                                        <img src="img/pubg.jpg" alt="Playerunknown's Battlegrounds" >
                                        <div class="caption">
                                            <h3>Playerunknown's Battlegrounds</h3>
                                            <h5>PUBG CORPORATION</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 1,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">                           
                                    <div class="thumbnail">                                  
                                        <img src="img/spiderman.jpg" alt="Spider-Man: Miles Morales" >
                                        <div class="caption">
                                            <h3>Spider-Man: Miles Morales</h3>
                                            <h5>INSOMNIAC GAMES</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 3,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-sm-4">
                                    <div class="thumbnail">   
                                        <img src="img/witcher.jpg" alt="The Witcher 3: Wild Hunt – Blood and Wine" >
                                        <div class="caption">
                                            <h3>The Witcher 3: Wild Hunt</h3>
                                            <h5>CD PROJEKT RED</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 1,799</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="thumbnail">   
                                        <img src="img/red_dead_redemption_2.jpg" alt="Red Dead Redemption 2" >
                                        <div class="caption">
                                            <h3>Red Dead Redemption 2</h3>
                                            <h5>ROCKSTAR STUDIOS</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 2,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="thumbnail">   
                                        <img src="img/world_of_warcraft.jpg" alt="World of Warcraft: Shadowlands" >
                                        <div class="caption">
                                            <h3>World of Warcraft: Shadowlands</h3>
                                            <h5>BLIZZARD ENTERTAINMENT</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 1,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">                          
                                    <div class="thumbnail">
                                        <img src="img/gta_5.jpg" alt="Grand Theft Auto V">
                                        <div class="caption">
                                            <h3>Grand Theft Auto V</h3>
                                            <h5>ROCKSTAR NORTH</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 1,299</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="thumbnail">
                                        <img src="img/devil_may_cry.jpg" alt="Devil May Cry 5" >
                                        <div class="caption">
                                            <h3>Devil May Cry 5</h3>
                                            <h5>CAPCOM</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 2,299</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="thumbnail">
                                        <img src="img/fortnite.jpg" alt="Fortnite" >
                                        <div class="caption">
                                            <h3>Fortnite</h3>
                                            <h5>EPIC GAMES</h5>
                                            <p>Price: <i class="fa fa-rupee"></i> 1,999</p> 
                                            <button class="btn btn-block btn-primary" data-toggle="modal" data-target="#loginmodal">Order Now!</button>
                                        </div>
                                    </div>   
                                </div>
                                
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
