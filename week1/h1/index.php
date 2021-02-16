<?php
require_once 'class/Elang.php';
require_once 'class/Hewan.php';
require_once 'class/Elang.php';
require_once 'class/Harimau.php';

$elang = new Elang();
$elang->set_Nama('Elang_3');

// $elang->getInfoHewan();
$elang->atraksi();
echo '<br><br>';
$harimau = new Harimau();
$harimau->set_Nama('Harimau_1');
echo '<br>';
$harimau->atraksi();
echo '<br>';
$harimau->serang($harimau->get_NamaHarimau(),$elang->get_NamaElang());
echo '<br>';
?>

