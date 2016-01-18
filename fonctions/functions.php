<?php

	$con=mysqli_connect("localhost","root","","montres");
	
	if(mysqli_connect_error()){
	
		echo "Echec de connection à MYSQL:".mysqli_connect_error();
	}

function afficherProduits(){
							
							global $con;
	
							$req_items="select * from items";
	
							$run_items=mysqli_query($con, $req_items);
	
							while($row_items=mysqli_fetch_array($run_items)){
								
								$id_item=$row_items['id'];
		
								$nom_item=$row_items['nom_item'];
		
								$prix_item=$row_items['prix'];
		
		?>
	

                     <div class="col-md-3 product-left">
						<div class="product-main simpleCart_shelfItem">
							<a href="single.php?id_item=<?php echo $id_item; ?>" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png"  alt="" /></a>
							<div class="product-bottom">
								<h3><?php echo $nom_item; ?></h3>
								<p>Explore Now</p>
								<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ <?php echo $prix_item; ?></span></h4>
							</div>
							<div class="srch">
								<span>-50%</span>
							</div>
						</div>
					</div>
							
                            <?php
							
								}
							
						}
		
?>