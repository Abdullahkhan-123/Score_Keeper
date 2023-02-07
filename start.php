<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="m-auto text-center">


    <form action="" method="POST">
    <div class="">
        <h1>Team 1</h1>
            <input type="text" name="Team1" required>
    </div>
    <div>
        <h1>Team 2</h1>
            <input type="text" name="Team2" required>
    </div>
    <br>
        <input type="submit" name="submit" class="btn btn-success" value="Start Match">
    </form>
</div>

<?php

    session_start();
    $server_Name = 'localhost';
    $userName = 'root';
    $password = '';
    $DB_Name = 'scorekeeper';

    $conn = mysqli_connect($server_Name,$userName,$password,$DB_Name);

    if(isset($_POST['submit']))
    {
        $Team1 = $_POST['Team1'];
        $Team2 = $_POST['Team2'];

        $_SESSION['Team1'] = $Team1;
        $_SESSION['Team2'] = $Team2;

        $sql = "INSERT INTO `match`(`Team1`, `Team2`) VALUES ('$Team1','$Team2')";

        $res = mysqli_query($conn,$sql);

        if($res==TRUE)
        {
            echo "<script>window.location.href='ch.php';</script>";
        }




    }
?>

</body>
</html>