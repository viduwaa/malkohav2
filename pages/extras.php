<?php
include('header.php');
include('../helpers/softwares.php');

function renderSoftwares($sotfwaresLinks)
{
    foreach ($sotfwaresLinks as $software) {
        echo '<div class="card softwares">';
        echo '<img src="' . $software['img'] . '" alt="">';
        echo '<div>';
        echo '<h3>' . $software['name'] . '</h3>';
        echo '<a href= "' . $software['link'] . '"  target="_blank"><span>Download<img style="height: 10px; width: 10px;" src="../assets/icons/open_inew.svg" alt=""></span> </a>';
        echo '</div>';
        echo '</div>';
    }
}


?>

<div class="content" style="margin:1rem">
    <h2>Essential Software</h2>
    <div class="quicklinks">
        <div class="card softwares">
            <img src="../assets/soft-icons/winrar.png" alt="">
            <div>
                <h3>Winrar</h3>
                <a href="https://www.win-rar.com/fileadmin/winrar-versions/winrar/winrar-x64-701.exe">
                    <span>
                        Download
                        <img style="height: 10px; width: 10px;" src="../assets/icons/open_inew.svg" alt="">
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="content" style="margin:1rem">
    <h2>Softwares needed by Modules </h2>
    <span style="font-weight: regular; font-size: 1rem;color: #fff;">*must need winrar to unzip</span>
    <div class="quicklinks">
        <?php renderSoftwares($moduleSoftwares); ?>
    </div>
</div>