<?php
$title = 'Minimum & Maximum Values';
include 'partials/header.php';
include 'scripts/scores.php';

$min_score = min(array_column($students, 'score'));
$max_score = max(array_column($students, 'score'));


?>
<h1><?=  $title ?></h1>
<p><?=  $min_score ?></p>
<p><?=  $max_score ?></p>

