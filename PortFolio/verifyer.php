<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    LOL
</body>
</html>

<?php
    require_once('get.php');

    if (isset($_GET["action"])){
		$action = htmlspecialchars(($_GET["action"]));
		switch ($action) {
			case "provide":
                if(isset($_POST['name']) && !empty($_POST['name']) && !empty($_POST['alias'])){
                    $visitor = new Visitor;
                    $visitor->sign_up($_POST['name'], $_POST['category'], $_POST['alias']);
                    session_start();
                    $_SESSION['statut'] = "verified";
                    $_SESSION['visitor'] = $_POST['name'];
                    header("location: main.php");
                }
                else{
                    header("location: /PortFolio?imessage=this_is_needed");
                }
                break;
            case "verify":
                if(isset($_POST['name']) && !empty($_POST['name']) && !empty($_POST['alias'])){
                    $visitor = new Visitor;
                    $result = $visitor->get_info($_POST['name'], $_POST['alias']);
                    $name = $result->fetch(PDO::FETCH_ASSOC);
                    if ($name['name'] == $_POST['name'] ){
                        $visitor->visit($name['name'], $name['alias']);
                        session_start();
                        $_SESSION['statut'] = "verified";
                        $_SESSION['visitor'] = $_POST['name'];
                        header("location: main.php");
                    }
                    else{
                        header("location: /PortFolio?vmessage=unknown_name");
                    }
                    
                }
                else{
                    header("location: /PortFolio?vmessage=empty_name");
                }
                break;
            default:
                header("location: /PortFolio?message=DONT_MESS_WITH_ME");
            }
    }
?>