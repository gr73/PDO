<?php
session_start();
$naam = "Luca";
$email = "Luca@gmail.com";

$_SESSION['naam'] = $naam;
$_SESSION['email'] = $email;
echo $naam .'<br>'. $email;

?> 