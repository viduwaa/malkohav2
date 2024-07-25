<?php
include('header.php');
include('../helpers/paper-links.php');

function renderPaper($papersSemI)
{
    $html = "<div class=\"card sep-hover\">";
    $html .= "<a href=\"{$papersSemI['link']}\" target=\"_blank\"><h3>{$papersSemI['name']}</h3> <p> {$papersSemI['code']} </p></a>";
    $html .= "</div>";
    return $html;
}

function renderSem2($papers){
    $html = "<div>";
    $html .= "<h3>{$papers['group']}</h3>";
    $html .= "<div class=\"dept\">";
    foreach ($papers['papers'] as $paper) {
        $html .= "<div class=\"card\">";
        $html .= "<a href=\"{$paper['link']}\" target=\"_blank\"><h3>{$paper['name']}</h3> <p> {$paper['code']} </p></a>";
        $html .= "</div>";
    }
    $html .= "</div>";
    $html .= "</div>";
    return $html;
}

?>

<div class="content" style="margin:1rem">
    <label for="semII">
        <h2 style="padding-bottom: 1rem;">Past Papers - Semester II</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semII" class="semester" checked>
    <div class="papers-group">
        <?php foreach ($papersGroup as $papers) {
            echo renderSem2($papers);
        } ?>
    </div>
</div>

<div class="content" style="margin:1rem">
    <label for="semI">
        <h2 style="padding-bottom: 1rem;">Past Papers - Semester I</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semI" class="semester">
    <div class="papers semester">
        <?php
        foreach ($papersSemI as $paper) {
            echo renderPaper($paper);
        }
        ?>
    </div>
</div>