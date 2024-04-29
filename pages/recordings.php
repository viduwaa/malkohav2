<?php
include('header.php');
include('../helpers/recording-links.php');

function renderSubject($recordingsSemI)
{
    $html = "<div class=\"card\">";
    $html .= "<h3>{$recordingsSemI['name']}</h3> <p style=\"margin-top:-10px\"> {$recordingsSemI['code']} </p>";
    $html .= "<ul>";
    foreach ($recordingsSemI['topics'] as $topic => $link) {
        if (empty($link)) {
            $link = "#";
            $html .= "<a href=\"{$link}\" ><li>{$topic}</li></a>";
        } else {
            $html .= "<a href=\"{$link}\" target=\"_blank\"><li>{$topic}</li></a>";
        }
    }
    $html .= "</ul>";
    $html .= "</div>";
    return $html;
}

?>
<div class="content" style="margin:1rem">
    <label for="semII">
        <h2 style="padding-bottom: 1rem;">Recordings - Semester II</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semII" class="semester" checked>
    <div class="recordings semester">
        <?php
        foreach ($recordingsSemII as $subject) {
            echo renderSubject($subject);
        }
        ?>
    </div>
</div>

<div class="content" style="margin:3rem 1rem 1rem;">
    <label for="semI">
        <h2 style="padding-bottom: 1rem;">Recordings - Semester I</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semI" class="semester">
    <div class="recordings semester">
        <?php
        foreach ($recordingsSemI as $subject) {
            echo renderSubject($subject);
        }
        ?>
    </div>
</div>

