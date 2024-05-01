<?php
include('check_login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <link rel="icon" type="image/webp" href="/assets/icons/logo.webp">
    <title>Malkoha & Friends</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <input type="checkbox" id="checkbox" class="menu" checked>
                <label for="checkbox" class="bars">
                    <img id="burger-menu" src="../assets/icons/menu.svg" alt="menu">
                </label>

                <a href="logout.php">
                    <li>Log out <img src="../assets/icons/logout.svg" alt="logout"></li>
                </a>
                <div id="profile">
                    <li >Profile <img src="../assets/icons/account.svg" alt="profile"></li>
                </div>
            </ul>
        </nav>
    </header>

    <section class="layout">
        <div class="sidebar" id="sidebar">
            <div class="img-wrapper"><img class="logo" src="../assets/icons/logo.webp" alt=""></div>
            <nav>
                <ul>
                    <a href="/malkohav2/pages/home.php">
                        <li>Home <img src="../assets/icons/home.svg" alt="home"></li>
                    </a>
                    <a href="/malkohav2/pages/recordings.php">
                        <li>Recordings<img src="../assets/icons/recording.svg" alt="recordings"></li>
                    </a>
                    <a href="/malkohav2/pages/past-papers.php">
                        <li>Past Papers<img src="../assets/icons/papers.svg" alt="papers"></li>
                    </a>
                    <a href="/malkohav2/pages/slide-materials.php">
                        <li>Slide Materials<img src="../assets/icons/slides.svg" alt="discussions"></li>
                    </a>
                    <a href="/malkohav2/pages/discussions.php">
                        <li>Discussions<img src="../assets/icons/discuss.svg" alt="discussions"></li>
                    </a>
                </ul>
            </nav>
            <div class="aboutus">
                <ul>
                    <a href="/malkohav2/pages/kuppi-videos.php">
                        <li>Kuppi Videos</li>
                    </a>
                    <a href="/malkohav2/pages/extras.php">
                        <li>Extras</li>
                    </a>
                    <a href="/malkohav2/pages/aboutus.php">
                        <li>About Us</li>
                    </a>
                </ul>
                <div class="socials">
                    <h3>Follow Us On</h3>
                    <div>
                        <!-- <a href="#"><img src="../assets/icons/facebook.png" alt="facebook"></a> -->
                        <a href="https://www.youtube.com/@MalKohaFriendsPVTLTD" target="_blank"><img src="../assets/icons/youtube.png" alt="youtube"></a>
                        <a href="https://www.youtube.com/@MalKohaFriendsPVTLTD" target="_blank"></a>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const checkbox = document.getElementById('checkbox');
            const sidebar = document.getElementById('sidebar');
            const burgerMenu = document.getElementById('burger-menu');

            checkbox.addEventListener('change', () => {
                sidebar.classList.toggle('active');
                burgerMenu.src = sidebar.classList.contains('active') ? '../assets/icons/close.svg' : '../assets/icons/menu.svg';
            });

            
        </script>
        <div class="body">
            <div class="popup">
                <?php
                include('account.php');
                ?>
            </div>