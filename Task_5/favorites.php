<?php
require 'layout.php';
require_once 'configDB.php';
$pr = $_POST['idProd'];
$favs = mysqli_query($connect, "SELECT * FROM Favorites WHERE id_product = $pr");
if($favs->num_rows < 1){
mysqli_query($connect, "INSERT INTO Favorites(id_product) VALUES ( $pr )");}
header('Location: home.php ');