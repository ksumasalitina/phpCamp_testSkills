<?php
require 'layout.php';
require_once 'configDB.php';

$products = mysqli_query($connect, "SELECT * FROM Product");
$products = mysqli_fetch_all($products);
echo $header;
echo'<div class="album py-5 bg-light">
    <div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">';
foreach($products as $product){
    echo '
     <div class="col" xmlns="http://www.w3.org/1999/html">
       <div class="card shadow-sm">
        <img class="bd-placeholder-img card-img-top" width="100%" height="250" src="' .$product[3].'">
        <div class="card-body">
    <p><b>'.$product[1].'</b></p>
    <div class="d-flex justify-content-between align-items-center">
       <div class="btn-group">
       <form action="cart.php" method="post" >
       <input type="hidden" name="idProd" value="'.$product[0].'" >
       <input type="number" min="1" max="'.$product[4].'" name="quantity" required>
       <input type="submit"  value="Add to cart" class="btn btn-danger my-2" @click="addToCart('.($productCount[0][0]).')">
             </div>
             <div class="btn-group">
             </form>
             <form action="favorites.php" method="post" >
             <input type="hidden" name="idProd" value="'.$product[0].'" >
       <input type="submit" name="sendToFavs" class="btn btn-danger my-2" value="🤍" @click="addToFav('.$favCount[0][0].')">
             </div>
             </form>
              <p>$'.$product[2].'</p>
                    </div>
                </div>
            </div>
        </div>
    ';};
echo $footer;


