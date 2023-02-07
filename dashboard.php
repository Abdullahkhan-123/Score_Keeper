<?php

    // session_start();
    $server_Name = 'localhost';
    $userName = 'root';
    $password = '';
    $DB_Name = 'scorekeeper';

    $conn = mysqli_connect($server_Name,$userName,$password,$DB_Name);

    $tsc1 = $_COOKIE['Team2'];
    $tsc4 = $_COOKIE['Team1'];
                          
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
    .button{
        background-color: black;
    }
</style>
<body  onloa="showAlert()">    


    <div class="container text-center col-12 bg-dark text-white pb-5">        
    <form action="" method="POST" onsubmit="func()">
        <div class="btn mt-5">            
            <button class="btn btn-danger text-white" onclick="removeItem()">Remove Data</button>
        </div>
        <div class="btn mt-5">            
            <button class="btn btn-warning text-white" onclick="showAlert()">Re-Start</button>
        </div>        

        <!-- <input type="text" id="resteam1" name="Team11">
        <input type="text" id="resteam2" name="Team12">
        <input type="submit" name="btn"> -->

        <div class="row">
            <h1 id="Winteam"></h1>
    <div class="m-auto col-lg-6" id="main">        
                 
                                    
            <h1>Team 1 :         
                <span id="resteam1"></span>        
                <input type="text" id="tplus" value="<?php echo $tsc4 ?>" >
            </h1>
            

            <h1>Score Plus 
                <span id="tplus">00</span>
                <!-- <span id="tplus2"></span> -->
                
            </h1>
            <h1>Score 
                <span class="total" id="tscore">00</span>                
            </h1>
                </div>


        <div class="m-auto col-lg-6" id="main2">        

                
                    <h1>Team 2 : 
                        <span id="resteam2" name="Team2"></span>
                        <input type="text" id="tplus" value="<?php echo $tsc1 ?>" >
                    </h1>
                    
                    <h1>Score Plus 
                        <span id="tplus1">00</span>
                    </h1>
                    <h1>Score 
                        <span class="total1" id="tscore1">00</span>
                    </h1>
                
        
    </div>    
</div>

        <div class="addscore container text-center mt-5 col-lg-12">            
                
            <div class="row">
            <div class="add col-6">
                <h3>Add Score Team 1</h3>                

                <button class="button text-white">
                    <span class="minus">-</span>
                    <span class="num">00</span>
                    <span class="plus">+</span>
                </button>
            </div>

            <div class="add col-6">
                <h3>Add Score Team 2</h3>

                <button class="button text-white">
                    <span class="minus1">-</span>
                    <span class="num1">00</span>
                    <span class="plus1">+</span>
                </button>
            </div>
        </div>        

        </div>
                
        </form>

    </div>


    <script>    

    removeItem = () => {
            localStorage.clear();     
        }    

    function showAlert() {    
        
        // removeItem();        

        let foo = prompt('Team 1 Name');
        let bar = confirm('Confirm or ' + foo);        
        // console.log(foo, bar);
        
        let foo1 = prompt('Team 2 Name');
        let bar2 = confirm('Confirm or ' + foo1);        
        // console.log(foo1, bar2);

        localStorage.setItem("team1", foo);
        localStorage.setItem("team2", foo1);
                
        document.cookie='Team1='+foo;
        console.log(document.cookie);

        document.cookie="Team2="+foo1;        
        console.log(document.cookie);

        return false;   
        
        }    

    const plus = document.querySelector(".plus"),
          minus = document.querySelector(".minus"),
          num = document.querySelector(".num");
          const total = document.querySelector(".total");

    const plus1 = document.querySelector(".plus1"),
          minus1 = document.querySelector(".minus1"),
          num1 = document.querySelector(".num1");
          const total1 = document.querySelector(".total1");

           

    let a = 0;
    let b = 0;

    let c = 0;
    let d = 0;

    let ab = "AD";
  
    plus.addEventListener("click", ()=>{

                a+=15;
                
                if(a>30)
                {

                    if(a>45)
                    {  
                      num.innerText = ab;
                      console.log("Team 1 Plus " + ab);
                      localStorage.setItem("team1plus", ab);                      
                                               
                      if(a>55)
                      {                                                
                            // alert('Team 1 Win ');
                            localStorage.setItem("Winteam2", document.getElementById('Winteam').innerHTML="The Wining Team is 1");
                            // showAlert();

                            localStorage.removeItem("team1plus1");
                            c=0;
                            num1.innerText = c;
                            localStorage.setItem("team1plus1", c);

                            a=0;                            
                            localStorage.removeItem("team1plus");
                            num.innerText = a;
                            console.log("Team 1 Score is " + 0);
                            localStorage.setItem("team1plus", a);


                            b++;  
                            b = (b < 10) ? + "0" + b : b;              
                            total.innerText = b;                
                            console.log("Team 1 Score is " + b);                
                            localStorage.setItem("team1score", b);

                            document.cookie='Team1Score='+b;
                            console.log(document.cookie);                            


                            // num.innerText = c;
                            // console.log("Team 1 Plus " + c);
                            // localStorage.setItem("team1plus", c);
                                                                                             
                      }
                    }
                    else
                    {                        
                        a -=5;
                        num.innerText = a;
                        console.log("Team 1 Plus " + a);                    
                        localStorage.setItem("team1plus", a);
                         
                    }                                                    
                }
                else
                {
                    num.innerText = a;
                    console.log("Team 1 Plus " + a);
                    localStorage.setItem("team1plus", a);

                    document.cookie='team1plus='+a;
                    console.log(document.cookie);
                    
                }                        
    });

    plus1.addEventListener("click", ()=>{
        
        c+=15;

        if(c>30)
                {

                    if(c>45)
                    {  
                      num1.innerText = ab;
                      console.log("Team 2 Plus " + ab);
                      localStorage.setItem("team1plus1", ab);                      
                                               
                      if(c>55)
                      {                                                
                            // alert('Team 2 Win ');
                            localStorage.setItem("Winteam2", document.getElementById('Winteam').innerHTML="The Wining Team is 2");
                            // showAlert();                            
                            
                            localStorage.removeItem("team1plus");
                            a=0;
                            num.innerText = a;
                            localStorage.setItem("team1plus1", a);

                            c=0;                            
                            localStorage.removeItem("team1plus1");
                            num1.innerText = c;
                            console.log("Team 1 Score is " + 0);
                            localStorage.setItem("team1plus", c);

                            d++;  
                            d = (d < 10) ? + "0" + d : d;              
                            total1.innerText = d;                
                            console.log("Team 2 Score is " + d);                
                            localStorage.setItem("team1score1", d);

                            document.cookie='team1score1='+d;
                            console.log(document.cookie);
                      }
                    }
                    else
                    {                        
                        c -=5;
                        num1.innerText = c;
                        console.log("Team 2 Plus " + c);                    
                        localStorage.setItem("team1plus1", c);

                         
                    }                                                    
                }
                else
                {
                    num1.innerText = c;
                    console.log("Team 2 Plus " + c);
                    localStorage.setItem("team1plus1", c);
                    
                    document.cookie='team1plus1='+c;
                    console.log(document.cookie);
                }
    });

    minus.addEventListener("click", ()=>{
        if(a > 0)
        {
            if(a>30)
            {
                a-=10;
                // a = (a < 10) ? "0" + a : a;            
                num.innerText = a;
                localStorage.setItem("team1plus", a);
            }
            else
            {
                a-=15;
                // a = (a < 10) ? "0" + a : a;            
                num.innerText = a;
                localStorage.setItem("team1plus", a);                
            }            
        }        
    });  

    minus1.addEventListener("click", ()=>{
        if(c > 0)
        {
            if(c>30)
            {
                c-=10;         
                // a = (a < 10) ? "0" + a : a;            
                num1.innerText = c;
                localStorage.setItem("team1plus1", c);
            }
            else
            {
                c-=15;         
                // a = (a < 10) ? "0" + a : a;            
                num1.innerText = c;
                localStorage.setItem("team1plus1", c);
            }            
        }        
    });          
    
    let relo = function(){


    document.getElementById('resteam1').innerHTML=localStorage.getItem("team1");
    document.getElementById('resteam2').innerHTML=localStorage.getItem("team2");

    document.getElementById('tplus').innerHTML=localStorage.getItem("team1plus");
    document.getElementById('tscore').innerHTML=localStorage.getItem("team1score");

    document.getElementById('tplus1').innerHTML=localStorage.getItem("team1plus1");
    document.getElementById('tscore1').innerHTML=localStorage.getItem("team1score1");

    document.getElementById('Winteam').innerHTML=localStorage.getItem("Winteam2");

    // document.getElementById('tplus2').innerHTML=localStorage.getItem("advance");

    }
    relo();
    setInterval(relo,300);

    function func(e){
        event.preventDefault()
        // console.log('Not Refresh..')
    }

    </script>

</body>
</html>
