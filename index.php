<?php

require_once("config.php");

$raphael = new Usuario();

$raphael->loadbyId(7);

echo $raphael;

?>