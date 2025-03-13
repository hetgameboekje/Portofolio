<?php

if(isset($_GET['m'])){
    $extention = $_GET['m'];
    $path = './extention/'.$extention.'/controller.php';
    include $path;
}
?>
