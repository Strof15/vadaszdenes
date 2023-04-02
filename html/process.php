<?php 
    include("config.php");

    extract($_POST);
    $datum = date("Y-m-d");
    $selected = $_POST['game'];
    $query = "INSERT INTO `jelentkezesek` (`fullname`, `teamname`, `email`, `discordtag`, `class`, `datum`,`game`, `IP`, `aszf`, `name1`, `dctag1`, `name2`, `dctag2`, `name3`, `dctag3`, `name4`, `dctag4`) 
    VALUES ('".$fullname."', '".$groupname."', '".$email."', '".$discordtag."', '".$class."', NOW(), '".$selected."', '".$_SERVER['REMOTE_ADDR']."', '".$aszf."', '".$name1."', '".$dctag1."','".$name2."', '".$dctag2."','".$name3."', '".$dctag3."','".$name4."', '".$dctag4."')";

    $result = $mysqli->query($query);
    if (mysqli_errno($mysqli) == 1062) {
        echo "
        <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!--CSS, ICON-->
        <link rel='stylesheet' href='styles.css?v=<?php echo time(); ?>'>
        <link rel='icon' href='images/amongus.png'>
        <!--Fonts-->
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css' rel='stylesheet'>

        <title>Esport Verseny</title>
        </head> 
        <div id='homeSection'>
        <nav class='navbar'>
            <div class='content'>
                <div class='logo'>
                    <a href='index.php'><img id='versace_logo' src='images/amongus.png'></a>
                </div>
                <ul class='menu-list'>
                    <div class='icon cancel-btn'>
                        <i class='ri-close-line'></i>
                    </div>
                </ul>
                <div class='icon menu-btn'>
                    <i class='ri-menu-line'></i>
                </div>
            </div>
        </nav>
        <video autoplay muted loop id='myVideo'>
            <source src='Mokvart.mp4' type='video/mp4'>
            <source src='Mokvart.mp3' type='video/mp3'>
        </video>
        <div class='mainTextBox'>
            <div href='#jelentkezes' class='mainTextBox-content'>
                <h1 style='color:#ebcb3f'>Sikertelen jelentkezés</h1>
                <p style='color:#ffffff'>Már szerepel ilyen adat az adatbázisban (DC/Email)</p>
            </div>
        </div>
    </div>
        ";
    }
    elseif(!$result) {
        echo "Valami hiba történt!".$mysqli->error;
    }
    else{
        echo "
        <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <!--CSS, ICON-->
        <link rel='stylesheet' href='styles.css?v=<?php echo time(); ?>'>
        <link rel='icon' href='images/amongus.png'>
        <!--Fonts-->
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap' rel='stylesheet'>
        <link href='https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css' rel='stylesheet'>

        <title>Esport Verseny</title>
        </head> 
        <div id='homeSection'>
        <nav class='navbar'>
            <div class='content'>
                <div class='logo'>
                    <a href='index.php'><img id='versace_logo' src='images/amongus.png'></a>
                </div>
                <ul class='menu-list'>
                    <div class='icon cancel-btn'>
                        <i class='ri-close-line'></i>
                    </div>
                    <li><a href=''>Leadva -> " . date("Y-m-d"), date(" h-i-s-a") . "</a></li>
                </ul>
                <div class='icon menu-btn'>
                    <i class='ri-menu-line'></i>
                </div>
            </div>
        </nav>
        <video autoplay muted loop id='myVideo'>
            <source src='Mokvart.mp4' type='video/mp4'>
            <source src='Mokvart.mp3' type='video/mp3'>
        </video>
        <div class='mainTextBox'>
            <div href='#jelentkezes' class='mainTextBox-content'>
                <h1 style='color:#ebcb3f'>Sikeres jelentkezés</h1>
                <p style='color:#ffffff'>Csatlakozz a discordunkra</p>
                <button><a href='https://discord.gg/pVKvpRDZyw'>Discord</a></button>
            </div>
        </div>
    </div>
        ";
    }

/*
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    require 'phpmailer/src/Exception.php'; require 'phpmailer/src/PHPMailer.php'; require 'phpmailer/src/SMTP.php';
    if(isset($_POST["send"])){
    }
    
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'sztomi0928@gmail.com'; 
    $mail->Password = 'dtgsidorpotnsazc';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $mail->setFrom('tomi09282@gmail.com'); // test email

    $mail->addAddress($_POST["email"]);
    $mail->isHTML(true);

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    $mail->send();
    */
?>
