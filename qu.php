<?php

session_start();
$server_Name = 'localhost';
$userName = 'root';
$password = '';
$DB_Name = 'scorekeeper';

$conn = mysqli_connect($server_Name,$userName,$password,$DB_Name);


    $Team1score = $_COOKIE['team1score'];    
    $Team1score1 = $_COOKIE['team1score1'];                    
    $Team1 = $_COOKIE['team1plus'];                    
    $Team2 = $_COOKIE['team1plus1'];

    // $sql = "UPDATE `match` SET `Team1Score`='[value-4]',`Team2Score`='[value-5]' WHERE `Team1`='$_SESSION[Team1]' && `Team2`='$_SESSION[Team2]'";

    $sql = "UPDATE `match` SET `Team1Score`='$Team1score',`Team2Score`='$Team1score1' WHERE `Team1`='$_SESSION[Team1]' AND `Team2`='$_SESSION[Team2]'";
    $res = mysqli_query($conn,$sql);


?>