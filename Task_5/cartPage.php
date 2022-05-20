<?php
require 'layout.php';
require_once 'configDB.php';
$cart = mysqli_query($connect, "SELECT * FROM Product WHERE id IN (SELECT id_product FROM Cart) ORDER BY id");
$cart = mysqli_fetch_all($cart);
$con = $connect;
$quantity = mysqli_query($connect, "SELECT quantity FROM Cart ORDER BY id_product");
$quantity = mysqli_fetch_all($quantity);
$counter = 0;
echo $header;
while($counter < count($quantity)){
foreach($cart as $item){
    echo'
     <div class="col">
       <div class="card shadow-sm">
        <img height="200" width="250" src="'.$item[3].'">
        <div class="card-body">
    <p><b>'.$item[1].'</b></p><br />
    <p>Quantity: '.$quantity[$counter][0].'</p>
    <form method="post" action="cartPage.php">
    <input type="hidden" name="id" value="'.$item[0].'">
    <input type="hidden" name="quantityProd" value="'.$item[4].'">
    <input type="hidden" name="quantity" value="'.$quantity[$counter][0].'">
    <input type="submit" name="plus" value="+"><input type="submit" name="minus" value="-">
    <input type="submit" name="delete" value="Delete" @click="addToCart('.($productCount[0][0]).')">
    </form>
    <div class="d-flex justify-content-between align-items-center">
              <p>$'.$item[2].'</p>
                    </div>
                </div>
            </div>
        </div>
        ';
        $counter++;}}
function plus($id, $quantity, $qProd)
{
    if($quantity<$qProd){
        mysqli_query($GLOBALS['connect'], "UPDATE Cart SET quantity = quantity+1 WHERE id_product=$id");
    }
}
if(array_key_exists('plus',$_POST)){
    plus($_POST["id"],$_POST["quantity"], $_POST["quantityProd"]);

}

function minus($id, $quantity)
{
    if($quantity>1){
        mysqli_query($GLOBALS['connect'], "UPDATE Cart SET quantity = quantity-1 WHERE id_product=$id");
    }
}

if(array_key_exists('minus',$_POST)){
    minus($_POST["id"],$_POST["quantity"]);

}

function delete($id){
    mysqli_query($GLOBALS['connect'], "DELETE FROM Cart WHERE id_product=$id");
}

if(array_key_exists('delete',$_POST)){
    delete($_POST["id"]);

}

echo $footer;