<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS, ICON-->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/amongus.png">
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="fiveserver.config.js"></script>

    <title>Vadász Dénes</title>
</head>
<body>
    <div id="homeSection">
        <nav class="navbar">
            <div class="content">
                <div class="logo">
                    <a href="index.php"><img id="versace_logo" src="images/logo.png"></a>
                </div>
                <ul class="menu-list">
                    <div class="icon cancel-btn">
                        <i class="ri-close-line"></i>
                    </div>
                    <li><a href="#homeSection">Főoldal</a></li>
                    <li><a href="#aboutSection">Információk</a></li>
                    <li><a href="#tudosok">Tudósok</a></li>
                    <li><a href="#kerdoiv">Kérdőív</a></li>
                </ul>
                <div class="icon menu-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </nav>
        <video autoplay muted loop id="myVideo">
            <source src="images/vied.mp4" type="video/mp4">
        </video>
        <div class="mainTextBox">
            <div href="#jelentkezes" class="mainTextBox-content">
                <h1 style="color:#ebcb3f">Magyar Tudósok</h1>
                <p style="color:#ffffff">Vadász Dénes Verseny</p>
                <button><a href="#aboutSection">Tovább</a></button>
            </div>
        </div>
    </div>
    <div id="aboutSection">
        <section>
            <div class="aboutContent">
                <div class="aboutImgBox sec">
                    <img src="images/test.jpg" title="">
                </div>
                <div class="aboutTextBox slide-in">
                    <h1>INFORMÁCIÓK</h1>
                    <p>
                        ...
                    </p>
                </div>
                <div class="aboutImgBox one">
                    <img src="" title="">
                </div>
            </div>
        </section>
    </div>
    <div id="tudosok">
        <p class="games" style="color:white"><b>Tudósok</b></p>
        <div id="card_holder">
            <a href="szgyalbert.php" style="text-decoration:none; color:white">
                <div class="card szgyalbert">
                    <div class="top">
                        <h1>Szent-Györgyi Albert</h1>
                    </div>
                </div>
            </a>
            <a href="swignac.php" style="text-decoration:none; color:white">
                <div class="card swignac">

                    <div class="top">
                        <h1>Semmelweis Ignác</h1>
                    </div>

                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card ijanos">
                    <div class="top">
                        <h1>Irinyi János</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card neuman">
                    <div class="top">
                        <h1>Neumann János</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card eotvos">
                    <div class="top">
                        <h1>Eötvös Lóránt</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card puskas">
                    <div class="top">
                        <h1>Puskás Tivadar</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card jedlik">
                    <div class="top">
                        <h1>Jedlik Ányos</h1>
                    </div>
                    <img src="">
                </div>
            </a>

            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card deri">
                    <div class="top">
                        <h1>Déri Miksa</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card rubik">
                    <div class="top">
                        <h1>Rubik Ernő</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card zipern">
                    <div class="top">
                        <h1>Zipernowsky Károly</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card gabordenes">
                    <div class="top">
                        <h1>Gábor Dénes</h1>
                    </div>
                    <img src="">
                </div>
            </a>
            <a href="ijanos.php" style="text-decoration:none; color:white">
                <div class="card biro">
                    <div class="top">
                        <h1>Bíró László</h1>
                    </div>
                    <img src="">
                </div>
            </a>
        </div>
    </div>
    <div id="kerdoiv" class="contact_us">
        <div class="title">
            <h2>Információk</h2>
        </div>
        <div class="box contact info">
            <h3>Kérdések</h3>
            <form method="POST" action="process.php">
            </form>
        </div>


    </div>
    <footer>
        <div class="footer_bottom">
            <p>Vadász Dénes Verseny | designed by bankuti laszlo & szabo tamas & Nagy Kristof</p>
        </div>
    </footer>
    <script src="scripts.js?v=<?php echo time(); ?>"></script>
</body>

</html>