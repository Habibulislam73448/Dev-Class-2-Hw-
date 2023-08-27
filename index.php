<?php

echo "<h4> Total Fan=2 <br> Total ac=5 <br> Total fridge= 2 <br> 1 Watt electricity price=14tk</h4>";

// fan
echo "<h2> Fan watt Using</h2>";
$fan = 2;
$fan_watt = 20;
echo "<h4> Total fan 2</h4>";
echo "<h4> 1 fan watt 20w</h4>";
echo "<h4> 2 fan watt=".$fan*$fan_watt."w </h4>";

//ac

echo "<h2> Ac watt using</h2>";

$ac =5;
$ac_watt = 100;
echo "<h4> Total ac 5 </h4>";
echo "<h4> 1 ac watt 100w </h4>";
echo "<h4> 5 ac watt =".$ac*$ac_watt."w </h4>";

// fridges

echo "<h2> fridge watt using </h2>";

$fridge = 2;
$fridge_watt=150;
echo "<h4> Total fridge 2</h4>";
echo "<h4> 1 fridge watt 150w </h4>";
echo "<h4> fridge watt=".$fridge*$fridge_watt."w </h4>";

// Total watt

echo "<h2> <u> Total watt=".$fan*$fan_watt+$ac*$ac_watt+$fridge*$fridge_watt."w </u></h2>";

// Total Bill

function total_watt ($fan_w=0,$ac_w=0,$fridge_w=0){
    $watt_price=14;
    $total_watt_use= $fan_w+$ac_w+$fridge_w;
    $total_bill= $total_watt_use*$watt_price;
    echo "<h2> <u> Total Electricity Price=$total_bill</u></h2>";
}

total_watt(40,500,300);