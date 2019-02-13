<?php

$prijs = "€60.00";
$besteldatum = "20 april 2019";
$afleverdatum = "3 mei 2019";
$product = "raspberry pi 3";
$naam = "Dennis Vossen";
$replace = array ($naam , $product , $prijs , $besteldatum , $afleverdatum);
$search = array ('{volledigenaam}' , '{product}' , '{prijs}' , '{besteldatum}' , '{afleverdatum}');
$email = "Geachte {volledigenaam}, <br /> het door u bestelde {product} van {prijs} op {besteldatum} wordt geleverd op {afleverdatum}. <br /> wij danken u voor uw geduld.";

$placeholder  = str_replace($search, $replace, $email);

echo $placeholder;

?>