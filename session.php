<?php

include 'front.php';


$_SESSION['user'] = 'Rubel';
$_SESSION['password']='0123456789';


echo "Username is = ".$_SESSION['user']."<br>";
echo "Password is = ".$_SESSION['password'].'<br>';


?>