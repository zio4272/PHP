<?php
require_once("yse/sample.php");
use yse\Sample;

$sample = Sample::factory();
$sample->tell();

echo "<br />";
$sample = new yse\Sample();
$sample->add_age(5)->tell();
?>