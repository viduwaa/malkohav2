<?php
include('header.php');
include('../helpers/slide-links.php');

function renderPaper($slideLinksSemII)
{
    $html = "<div class=\"card sep-hover\">";
    $html .= "<a href=\"{$slideLinksSemII['link']}\" target=\"_blank\"><h3>{$slideLinksSemII['name']}</h3> <p> {$slideLinksSemII['code']} </p></a>";
    $html .= "</div>";
    return $html;
}

?>

<div class="content" style="margin:1rem">
    <label for="semII">
        <h2 style="padding-bottom: 1rem;">Lecture Materials - Semester II</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semII" class="semester" checked>
    <div class="papers semester">
        <?php
        foreach ($slideLinksSemII as $materials) {
            echo renderPaper($materials);
        }
        ?>
    </div>
</div>