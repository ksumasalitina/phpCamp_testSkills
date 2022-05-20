<?php
require 'layout.php';
require_once 'configDB.php';
$products = mysqli_query($connect, "SELECT * FROM Product WHERE id IN (SELECT id_product FROM Favorites)");
$products = mysqli_fetch_all($products);
echo $header;
foreach($products as $item){
    echo'
     <div class="col">
       <div class="card shadow-sm">
        <img height="200" width="250" src="'.$item[3].'">
        <div class="card-body">
    <p><b>'.$item[1].'</b></p><br />
    <div class="d-flex justify-content-between align-items-center">
              <p>$'.$item[2].'</p>
                    </div>
                </div>
            </div>
        </div>
        ';}
echo $footer;