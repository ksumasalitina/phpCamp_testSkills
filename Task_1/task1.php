<?php

$policy = 950;
function diff($arr, $x){
    $sum = 0;
    foreach ($arr as $i){
        $sum+=$i->getCost();
    }
    return $sum - $x;
};

class Item
{
    private $name;
    private $cost;

    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }
    function getCost()
    {
        return $this->cost;
    }
}

$ring = new Item("ring", 150);
$bag = new Item("bag", 450);
$phone = new Item("phone", 779);

$stuff = array($ring,$bag,$phone);

echo diff($stuff,$policy);