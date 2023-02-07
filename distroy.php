<?php

session_start();
$server_Name = 'localhost';
$userName = 'root';
$password = '';
$DB_Name = 'scorekeeper';

$conn = mysqli_connect($server_Name,$userName,$password,$DB_Name);

    session_destroy();

    echo "<script>window.location.href='start.php';</script>";

?>