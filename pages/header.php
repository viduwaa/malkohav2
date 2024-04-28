<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css" type="text/css">
    <script src="https://kit.fontawesome.com/d47dffcf4c.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>

    <header>
        <nav>
            <ul>
                <input type="checkbox" id="checkbox" class="menu" checked>
                <label for="checkbox" class="bars">
                    <img id="burger-menu" src="../assets/icons/menu.svg" alt="menu">
                </label>

                <a href="#">
                    <li>Log out</li>
                </a>
                <a href="#">
                    <li>Profile</li>
                </a>
            </ul>
        </nav>
    </header>

    <section class="layout">
        <div class="sidebar" id="sidebar">
            <div class="img-wrapper"><img class="logo" src="../assets/icons/logo.webp" alt=""></div>
            <nav>
                <ul>
                    <a href="/malkohav2/pages/home.php">
                        <li>Home</li>
                    </a>
                    <a href="/malkohav2/pages/recordings.php">
                        <li>Recordings</li>
                    </a>
                    <a href="/malkohav2/pages/past-papers.php">
                        <li>Past Papers</li>
                    </a>
                    <a href="/malkohav2/pages/discussions.php">
                        <li>Tutorials/Assignments Discussions</li>
                    </a>
                </ul>
            </nav>
            <div>
                <ul>
                    <a href="/malkohav2/pages/aboutus.php">
                        <li>About Us</li>
                    </a>
                </ul>
                <div class="socials">
                    <h3>Follow Us On</h3>
                    <div>
                        <!-- <a href="#"><img src="../assets/icons/facebook.png" alt="facebook"></a> -->
                        <a href="https://www.youtube.com/@MalKohaFriendsPVTLTD" target="_blank"><img src="../assets/icons/youtube.png" alt="youtube"></a>
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