<?php
include('header.php');
include('../helpers/paper-links.php');

function renderPaper($papersSemI)
{
    $html = "<div class=\"card\">";
    $html .= "<a href=\"{$papersSemI['link']}\" target=\"_blank\"><h3>{$papersSemI['name']}</h3> <p> {$papersSemI['code']} </p></a>";
    $html .= "</div>";
    return $html;
}

?>

<div class="content" style="margin:1rem">
    <label for="semII">
        <h2 style="padding-bottom: 1rem;">Slide Materials - Semester II</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semII" class="semester" checked>
    <div class="papers semester">
        <?php
        foreach ($papersSemII as $paper) {
            echo renderPaper($paper);
        }
        ?>
    </div>
</div>