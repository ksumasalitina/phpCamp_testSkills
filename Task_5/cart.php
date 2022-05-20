<?php
require 'layout.php';
require_once 'configDB.php';

if(array_key_exists('sendToCart',$_POST)) {
    $product = $_POST["idProd"];
    $quantity = $_POST["quantity"];
    $cartProducts = mysqli_query($connect, "SELECT id_product FROM Cart WHERE id_product=$product");
    if ($cartProducts->num_rows > 0) {
        mysqli_query($connect, "UPDATE Cart SET quantity = quantity + $quantity where id_product = $product");

    } else {
        mysqli_query($connect, "INSERT INTO Cart(id_product, quantity) VALUES ($product, $quantity) ");
    }
    $_POST['sendToCart']='';
}




header('Location: home.php ');