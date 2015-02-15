<?php

/*$misli_1 = $_POST['misli_1'];
$misli_2 = $_POST['misli_2'];
$misli_3 = $_POST['misli_3'];
$misli_4 = $_POST['misli_4'];
$misli_5 = $_POST['misli_5'];
$misli_6 = $_POST['misli_6'];
$misli_7 = $_POST['misli_7'];
$misli_8 = $_POST['misli_8'];
$misli_9 = $_POST['misli_9'];
$misli_10 = $_POST['misli_10'];
$misli_20 = $_POST['misli_20'];
$misli_30 = $_POST['misli_30'];
$misli_40 = $_POST['misli_40'];
$misli_50 = $_POST['misli_50'];
$misli_60 = $_POST['misli_60'];
$misli_70 = $_POST['misli_70'];
$misli_80 = $_POST['misli_80'];
$misli_90 = $_POST['misli_90'];
$misli_100 = $_POST['misli_100'];
$misli_110 = $_POST['misli_110'];*/
if(isset($_POST['radio'])){$misli = $_POST['radio'];}

$mac_sayisi = count($_POST['mac_sayisi']) ? $_POST['mac_sayisi'] : array();

$mac_sayisi_1 = str_replace(",",".",$mac_sayisi);

$toplam = 1;
foreach($mac_sayisi_1 as $sayi){
if($sayi == 0){$sayi = 1;}
$toplam = $toplam * $sayi;
$son = $toplam * $misli;
}

echo $son;

?>