<?php
$title = 'Single dimension Array';
include 'partials/header.php';

$names = ['Karen', 'Natalie', 'Davido', 'Gerry', 'George', 'Iain'];
$age = [26, 28, 50, 65, 65, 50];

// echo($names[0]);
// echo(count($names));
// echo(count($age));
// echo(min($age));
echo(array_sum($age) / count($age));