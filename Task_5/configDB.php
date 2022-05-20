
<?php
global $connect;
$connect = mysqli_connect('localhost', 'root', '11111111', 'testSigmaCamp');
if(!$connect){
    die("Error!");
}
