<?php
include('header.php');
include('../helpers/kuppi-videos.php');

function renderkuppivideos($kuppivideos)
{
    $html = "<div class=\"card\">";
    $html .= "<div class=\"kuppi-content\">";
    $html .= "<div class=\"kuppi-bg\"></div>";
    $html .= "<a href=\"{$kuppivideos['playlistLink']}\" target='_blank'>";
    $html .= "<div class=\"kuppi-text\">";
    $html .= "<h3>{$kuppivideos['topic']}</h3>";
    $html .= "<p>View full playlist</p>";
    $html .= "</div>";
    $html .= "</a>";
    $html .= "</div>";
    $html .= "<div class=\"kuppi-parts\">";
    foreach ($kuppivideos['parts'] as $part) {
        $html .= "<a href=\"{$part['link']}\"target='_blank'>";
        $html .= "<div>";
        $html .= "<h3>{$part['name']}</h3>";
        $html .= "<p>{$part['description']}</p>";
        $html .= "</div>";
        $html .= "</a>";
    }
    $html .= "</div>";
    $html .= "</div>";

    return $html;
}

?>

<div class="content kuppi" style="margin: 1rem;">
    <h2>Kuppi Videos</h2>
    <div class="kuppi-videos">
        <?php
        foreach ($videos as $video) {
            echo renderkuppivideos($video);
        }
        ?>
    </div>
</div>