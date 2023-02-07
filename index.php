<?php

$Team1plus = $_COOKIE['team1plus'];
$Team1Score2 = $_COOKIE['Team1Score'];                      
$tsc1 = $_COOKIE['Team2'];
$tsc4 = $_COOKIE['Team1'];
$Team1plus1 = $_COOKIE['team1plus1'];
$Team1score1 = $_COOKIE['team1score1'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    #score
    {
        margin-left:15px;
    }
    .add{
        font-size: 30px;
        font-weight: 600;
    }
    body
    {
        background-color: rgb(206, 44, 44);
    }
    .container{
        margin-top: 15%;
    }
</style>
<body>
    <!-- <div class="container m-auto col-lg-12">
        <div class="team d-flex text-center">
            <h1>Team 1 : 

                <span id="resteam1"></span>

            </h1>            
            <h1>Score Plus :
                <span id="tplus"> 00 </span>
            </h1>
            <h1> Score :
                <span id="tscore"> 00 </span>
            </h1>

        </div>
        <div class="team d-flex text-center">
            <h1>Team 2 : 
                <span id="resteam2"></span>
            </h1>
            
        </div>
    </div>     -->

    <div class="container text-center col-12 bg-dark text-white pt-5 pb-5">        
    
        <div class="row">

            <h1 id="Winteam"></h1>

    <div class="m-auto col-lg-6" id="main">        
                 
                                    
            <h1>Team 1 :         
                <span id="resteam1"></span> 
                <input type="text" id="tplus" value="<?php echo $tsc4 ?>" readonly>                               
            </h1>
            

            <h1>Score Plus 
                <span id="tplus">00</span>
                <input type="text" id="tplus" value="<?php echo $Team1plus ?>" readonly>
            </h1>
            <h1>Score 
                <span class="total" id="tscore">00</span>
                <input type="text" id="tplus" value="<?php echo $Team1Score2 ?>" readonly>
            </h1>
</div>


        <div class="m-auto col-lg-6" id="main2">        

                
                    <h1>Team 2 : 
                        <span id="resteam2"></span>
                        <input type="text" id="tplus" value="<?php echo $tsc1 ?>">
                    </h1>
                    
                    <h1>Score Plus 
                        <span id="tplus1">00</span>       
                        <input type="text" id="tplus" value="<?php echo $Team1plus1 ?>">             
                    </h1>
                    <h1>Score 
                        <span class="total1" id="tscore1">00</span>
                        <input type="text" id="tplus" value="<?php echo $Team1score1 ?>">
                    </h1>
                
        
    </div>    
</div>
</div>
        

    <script>

    //     let relo = function(){


    //     document.getElementById('resteam1').innerHTML=localStorage.getItem("team1");
    //     document.getElementById('resteam2').innerHTML=localStorage.getItem("team2");

    //     document.getElementById('tplus').innerHTML=localStorage.getItem("team1plus");
    //     document.getElementById('tscore').innerHTML=localStorage.getItem("team1score");
        
    // }
    //     relo();
    //     setInterval(relo,1000);

    let relo = function(){


document.getElementById('resteam1').innerHTML=localStorage.getItem("team1");
document.getElementById('resteam2').innerHTML=localStorage.getItem("team2");

document.getElementById('tplus').innerHTML=localStorage.getItem("team1plus");
document.getElementById('tscore').innerHTML=localStorage.getItem("team1score");

document.getElementById('tplus1').innerHTML=localStorage.getItem("team1plus1");
document.getElementById('tscore1').innerHTML=localStorage.getItem("team1score1");

document.getElementById('Winteam').innerHTML=localStorage.getItem("Winteam2");


}
relo();
setInterval(relo,300);
    </script>

</body>
</html>