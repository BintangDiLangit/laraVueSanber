<?php
require_once('class/Elang.php');
require_once('class/Harimau.php');

$elang = new Elang('elang_1', 2, 'terbang tinggi', 10, 5);
$harimau = new Harimau('harimau_1', 4, 'lari cepat', 7, 8);

echo $elang->serang($harimau);
echo $elang->diserang($harimau);
echo '<br><br>Darah Elang';
echo '<br>===========<br>';
echo $elang->get_darah();
echo '<br><br>Darah Harimau';
echo '<br>===========<br>';
echo $harimau->get_darah();
?>

