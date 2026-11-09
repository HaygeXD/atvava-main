<?php
session_start();

if(!isset($_SESSION['username'])){
    header('Location:atv4.php');
}
else{
    echo 'bem vindo '.$_SESSION['username']."!<br>";
    echo "<a href='atv44.php'>Logout</a>";
}

?>