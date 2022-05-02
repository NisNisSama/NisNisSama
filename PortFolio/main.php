<?php
    session_start();
    if (isset($_SESSION) && !empty($_SESSION)){ 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Main</title>
</head>
<body>

    <div class="background">
        <ul class="boxes">
            <li class="not"></li>
            <li class="not"></li>
            <li class="not"></li>
            <li class="not"></li>
            <li class="not"></li>
            
        </ul>
    </div>

    <main class="grill">

        <div class="upperline">
            <h2 class="welcome"> Welcome <?php echo($_SESSION['visitor']);?> !</h2>
        </div>
        
        <div class="left">
            <h3>My Realisations :</h3>
            <div class="realisation"><a href="qlquepart"> Project Title </a></div>
            <div class="realisation"><a href="qlquepart"> Project Title </a></div>
            <div class="realisation"><a href="qlquepart"> Project Title </a></div>
            <div class="realisation"><a href="qlquepart"> Project Title </a></div>
            <div class="realisation"><a href="qlquepart"> Project Title </a></div>
            <div class="realisation"><a href="qlquepart"> Project Title </a></div>
                       
        </div>
        
        <div class="content"> 
            <div class="profile">
                <img src="mysary.jpg" alt="My Photo">
            </div>
            
            <div class="aboutMe">
                <h3 id="aboutme">About Me</h3>
                <br>
                <p>
                Fascinated by Art, Creativity and Design, I also have passion in Problem Solving and Artificial Intelligence.
                I am always extra curious about the world surrounding me, and i can't stop imagine new fictional stuffs or 
                fantastic verses. <br><br>
                So, i chose IT study because i think, computers are the greatest tools that have been invented to help humans 
                into creating, disccovering and analyzing his own world.
                </p>
            </div>
        </div>

        <div class="right">
            <ul>
                <li><div class="round">Menu</div></li>
                <li><div class="round"><img src="bsad" alt=""></div></li>
                <li><div class="round"><img src="dbshaj" alt=""></div></li>
                <li><div class="round"><img src="dsna" alt=""></div></li>
                <li><div class="round"><a href="#aboutme">About Me</a></div></li>
            </ul>
        </div>

    </main>
    

</body>
</html>

<?php
    }
    else{
        header("location: /PortFolio");
    }
?>