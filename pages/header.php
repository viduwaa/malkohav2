<?php
include('check_login.php');

$sql = "SELECT 
            SUM(CASE WHEN email LIKE '%ITT%' THEN 1 ELSE 0 END) AS itt_count,
            SUM(CASE WHEN email LIKE '%ent%' THEN 1 ELSE 0 END) AS ent_count,
            SUM(CASE WHEN email LIKE '%bst%' THEN 1 ELSE 0 END) AS bst_count
        FROM accounts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $itt_count = $row['itt_count'];
    $ent_count = $row['ent_count'];
    $bst_count = $row['bst_count'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css?v=1.20" type="text/css">
    <link rel="icon" type="image/webp" href="/assets/icons/logo.webp">
    <link rel="preload" as="font" href="/assets/fonts/Extatica-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/assets/fonts/Extatica-Bold.woff2" type="font/woff2" crossorigin="anonymous">
    <meta name="description" content="Malkoha & Friends - All Your Study Materials In One Place">
    <meta name="author" content="Malkoha & Friends Team">

    <meta property="og:title" content="Malkoha & Friends">
    <meta property="og:description" content="All Your Study Materials In One Place">
    <meta property="og:author" content="Malkoha & Friends Team">
    <meta property="og:image" content="/assets/icons/logo.webp">
    <meta property="og:url" content="https://malkoha.site">
    <meta property="og:type" content="website">


    <title>Malkoha & Friends</title>
</head>

<body>
    <input type="checkbox" id="checkbox" class="menu" checked>
    <label for="checkbox" class="bars">
        <img id="burger-menu" src="../assets/icons/menu.svg" alt="menu">
    </label>

    <button class="dark-mode" onclick="mode_switch()"><img id="dark-mode-icon" src="../assets/icons/dark_mode.svg" alt=""></button>

    <header>
        <nav>
            <ul>
                <a href="logout.php">
                    <li>Log out <img src="../assets/icons/logout.svg" alt="logout"></li>
                </a>
                <div id="profile">
                    <li>Profile <img src="../assets/icons/account.svg" alt="profile"></li>
                </div>
            </ul>
        </nav>
    </header>

    <section class="layout">
        <div class="sidebar" id="sidebar">
            <div class="img-wrapper"><img class="logo" src="../assets/icons/logo.webp" alt=""></div>
            <nav>
                <div class="usersInfo btn-hover color-6">
                    <h2>Malkoha & Friends</h2>
                    <p>ITT <?php echo $itt_count ?> | ENT <?php echo $ent_count ?> | BST <?php echo $bst_count ?></p>
                </div>
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
                        <li>Lecture Materials<img src="../assets/icons/slides.svg" alt="discussions"></li>
                    </a>
                    <a href="/malkohav2/pages/discussions.php">
                        <li>Discussions<img src="../assets/icons/discuss.svg" alt="discussions"></li>
                    </a>
                </ul>
            </nav>
            <div class="aboutus">
                <ul>
                    <a href="/malkohav2/pages/extras.php">
                        <li>Softwares and Extras</li>
                    </a>
                    <a href="/malkohav2/pages/kuppi-videos.php">
                        <li>Kuppi Videos</li>
                    </a>
                    <a href="/malkohav2/pages/aboutus.php">
                        <li>About Us</li>
                    </a>
                    <a href="https://games.malkoha.site">
                        <li>Games ?</li>
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
        <script defer>
            const checkbox = document.getElementById('checkbox');
            const sidebar = document.getElementById('sidebar');
            const burgerMenu = document.getElementById('burger-menu');

            checkbox.addEventListener('change', () => {
                sidebar.classList.toggle('active');
                burgerMenu.src = sidebar.classList.contains('active') ? '../assets/icons/close.svg' : '../assets/icons/menu.svg';
            });

            let background = document.querySelector('.layout');
            let dark_mode = document.querySelector('.dark-mode');


            function mode_switch() {
                background.classList.toggle('dark');



                let dark_mode_icon = document.getElementById('dark-mode-icon');
                if (dark_mode_icon.src.endsWith('dark_mode.svg')) {
                    dark_mode_icon.src = '../assets/icons/light_mode.svg';
                } else {
                    dark_mode_icon.src = '../assets/icons/dark_mode.svg';
                }
            }
        </script>
        <div class="body">
            <div class="popup">
                <?php
                include('account.php');
                ?>
            </div>