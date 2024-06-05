<?php include('../helpers/assignments-left.php');

function renderAssignment($assignments)
{
    $html = <<<HTML
    <div class="card assignment-countdown">
        <div>
            <h3>{$assignments['subject']} <span>{$assignments['code']}</span></h3>
            <h3 style="font-size: 2rem;">{$assignments['topic']}
    HTML;

    if ($assignments['material_link'] != '') {
        $html .= "<a href=\"{$assignments['material_link']}\" target=\"_blank\"><img src=\"../assets/icons/download.svg\" alt=\"download\"></a>";
    }

    $html .= "</h3>";

    if ($assignments['due_time'] != '') {
        $html .= <<<HTML
        <p>Due Date: <b>{$assignments['due_date']} - {$assignments['due_time']}</b></p>
        </div>
        <div>
            <h3>Time Left : <span id="expired-{$assignments['id']}" style="color:var(--fivetanary)"></span></h3>
            <div class="countdown">
                <div class="countdown-item"><span>Days</span><span id="due-days-{$assignments['id']}">0</span></div>
                <div class="countdown-item"><span>Hours</span><span id="due-hours-{$assignments['id']}">0</span></div>
                <div class="countdown-item"><span>Minutes</span><span id="due-minutes-{$assignments['id']}">0</span></div>
                <div class="countdown-item"><span>Seconds</span><span id="due-seconds-{$assignments['id']}">0</span></div>
            </div>
            
                <script>
                function timeLeftCount{$assignments['id']}() {
                var now = new Date().getTime();
                var dueDate = {$assignments['time_left']} * 1000;
                var timeLeft = dueDate - now;
                return timeLeft;
                }

                function updateDueCountdown{$assignments['id']}() {
                    var timeLeft = timeLeftCount{$assignments['id']}();
                    var days = Math.floor(timeLeft / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((timeLeft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((timeLeft % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((timeLeft % (1000 * 60)) / 1000);

                    document.getElementById("due-days-{$assignments['id']}").innerHTML = days;
                    document.getElementById("due-hours-{$assignments['id']}").innerHTML = hours;
                    document.getElementById("due-minutes-{$assignments['id']}").innerHTML = minutes;
                    document.getElementById("due-seconds-{$assignments['id']}").innerHTML = seconds;
                }

                var timeInterval{$assignments['id']} = setInterval(function() {
                    if (timeLeftCount{$assignments['id']}() > 0) {
                        updateDueCountdown{$assignments['id']}();
                    } else {
                        clearInterval(timeInterval{$assignments['id']}); 
                        document.getElementById("expired-{$assignments['id']}").innerHTML = "Expired";
                    }
                }, 1000);

                </script>
        HTML;
    } else {
        $html .= "<p>Due Date: <b>{$assignments['due_date']}</b></p>";
    }

    $html .= "</div>";
    $assignments['extra'] ? $html .= "<div><h3 style=\"color:#ef476f ; font-weight:300\">{$assignments['extra']}</h3></div>" : '';
    $html .= "</div>";
    return $html;
}

?>


<div class="content assignments" style="margin:1rem">
    <h2>Assignments to Submit</h2>
    <?php foreach ($assignments as $assignment) {
        echo renderAssignment($assignment);
    } ?>
</div>

</html>