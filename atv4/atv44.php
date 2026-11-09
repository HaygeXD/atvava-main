<?php
session_start();

session_destroy();

header('location: atv4.php');
?>