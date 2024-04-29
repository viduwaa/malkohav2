<?php
include('header.php');
include('../helpers/discussions-links.php');

function renderSubject($discussionsSemI)
{
    $html = "<div class=\"card\">";
    $html .= "<h3>{$discussionsSemI['name']}</h3> <p style=\"margin-top:-10px\"> {$discussionsSemI['code']} </p>";
    $html .= "<ul>";
    $html .= "<a href=\"{$discussionsSemI['link']}\" target=\"_blank\"><li>{$discussionsSemI['topic']}</li></a>"; 
    if(isset($discussionsSemI['materiallink'])){
        $html .= "<a href=\"{$discussionsSemI['materiallink']}\" target=\"_blank\"><li>Materials</li></a>";
    }
    $html .= "</ul>";
    $html .= "</div>";
    return $html;
}

?>

<div class="content" style="margin:1rem">
    <label for="semI">
        <h2 style="padding-bottom: 1rem;">Discussions - Semester I</h2>
    </label>
    <input type="checkbox" name="checkbox" id="semI" class="semester" checked>
    <div class="recordings semester">
        <?php
        foreach ($discussionsSemI as $subject) {
            echo renderSubject($subject);
        }
        ?>
    </div>
</div>