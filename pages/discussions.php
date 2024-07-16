<?php
include('header.php');
include('../helpers/discussions-links.php');

function renderSubject($discussions)
{
    $html = "<div class=\"card \">";
    $html .= "<h3>{$discussions['name']}</h3> <p style=\"margin-top:-10px\"> {$discussions['code']} </p>";
    $html .= "<ul>";
    $html .= "<a href=\"{$discussions['link']}\" target=\"_blank\"><li class=\"ext-link \">{$discussions['topic']}</li></a>"; 
    if(isset($discussions['materiallink'])){
        $html .= "<a href=\"{$discussions['materiallink']}\" target=\"_blank\"><li class=\"ext-link \">Materials</li></a>";
    }
    $html .= "</ul>";
    $html .= "</div>";
    return $html;
}

?>

<div class="content" style="margin:1rem">
    <label for="semII">
        <h2 style="padding-bottom: 1rem;">Tutorials/Assignments Discussions - Semester II</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semII" class="semester" checked>
    <div class="recordings semester">
        <?php
        foreach ($discussionsSemII as $subject) {
            echo renderSubject($subject);
        }
        ?>
    </div>
</div>

<div class="content" style="margin:1rem">
    <label for="semI">
        <h2 style="padding-bottom: 1rem;">Tutorials/Assignments Discussions - Semester I</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semI" class="semester" >
    <div class="recordings semester">
        <?php
        foreach ($discussionsSemI as $subject) {
            echo renderSubject($subject);
        }
        ?>
    </div>
</div>