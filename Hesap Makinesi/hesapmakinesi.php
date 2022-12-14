<?php
$sayi1=$_POST["s1"];
$sayi2=$_POST["s2"];
$islem=$_POST["islem"];
switch("islem") {

case "toplama";
echo $sayi1+$sayi2;
break;

case "cikarma";
echo $sayi1-$sayi2;
break;

case "carpma";
echo $sayi1*$sayi2;
break;

case "bolme";
echo $sayi1/$sayi2;
break;

default:
echo "Seçim Yapınız.";
}
?>