<?php
echo '
<form action="task2.php" method="post">
<h2>Розмір товару</h2>
<p>Висота</p>
<input type="text" name="prHeight"><br>
<p>Ширина</p>
<input type="text" name="prWidth">
<p>Глибина</p>
<input type="text" name="prDepth">
<h2>Розмір дверей</h2>
<p>Висота</p>
<input type="text" name="doorHeight"><br>
<p>Ширина</p>
<input type="text" name="doorWidth"><br>
<input type="submit" name="submit" name="Submit">
</form>';

$productHeight = $_POST['prHeight'];
$productWidth = $_POST['prWidth'];
$productDepth = $_POST['prDepth'];
$doorHeight = $_POST['doorHeight'];
$doorWidth = $_POST['doorWidth'];

function checkSize($a, $b, $c, $aa, $bb){
    if(($a <= $aa && $b <= $bb) || ($a<=$aa && $c<=$bb) || ($b<=$aa && $c<=$bb)|| ($c<=$aa && $b<=$bb)){
        return 'true';
    }
    else{
        return 'false';
    }
};

echo checkSize($productHeight,$productWidth,$productDepth,$doorHeight,$doorWidth);

