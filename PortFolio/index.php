<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - MyPortfolio</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>

    <div class="background">
        <ul class="box-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>

    <main class="index-main">
        <div class="parent parent-text">
        <?php if (isset($_GET['message'])){ echo('
            <p style="color: red; font-weight: bold; text-align: center;">'.htmlspecialchars($_GET['message']).'</p>
            ');}?>
            <h3 class="title"> Welcome to my Portfolio. </h3>
            <p class="text">
                Before going further, please provide some identifications to inform us about your visit.<br>
                Provided information will be keeped private and will not be used in any type of activities.<br>
                Thanks for your understanding.
            </p>
        </div>

        <div class="parent parent-form">
            <form action="verifyer.php?action=provide" method="post">
                <label  for="name" >Just a name :</label>
                <input type="text" name="name" 
                    placeholder=<?php if (isset($_GET['imessage'])){ echo(htmlspecialchars($_GET['imessage']));}?>>
                <input type="text" name="alias" 
                    placeholder=<?php if (isset($_GET['imessage'])){ echo(htmlspecialchars($_GET['imessage']));}
                    else { echo "Your_alias_here"; }?>>                

                <label for="category">You are a :</label>
                <div>
                    <input type="radio" value="person" name="category" checked>
                    <span >Person</span>

                    <input type="radio" value="company" name="category">
                    <span >Company</span>
                </div>

                <button type="submit">Provide</button>
            </form>

            <form action="verifyer.php?action=verify" method="post">
                <p >
                    I have already provided such information.<br> This is my name:
                </p>
                <input type="text" name="name" 
                    placeholder=<?php if (isset($_GET['vmessage'])){ echo(htmlspecialchars($_GET['vmessage']));}?>>
                <input type="text" name="alias" 
                    placeholder=<?php if (isset($_GET['vmessage'])){ echo(htmlspecialchars($_GET['vmessage']));}
                    else { echo "Your_alias_here"; }?>>
                
                
                <button type="submit">Verify</button>
            </form>

        </div>
    </main>
</body>
</html>