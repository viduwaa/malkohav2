<?php
include('header.php');
?>



<div style="margin: 1rem;">
    <h2 style="color: var(--font-black);">Welcome! <?php echo $name; ?></h2>
</div>

<div class="content" style="margin:1rem">
    <h2>Quick Links</h2>
    <div class="quicklinks">
        <div class="logged-home">
            <div class="card sep-hover">
                <a href="recordings.php">
                    <h3>Time Table</h3>
                    <p>Upto date with Zoom Links</p>
                </a>
            </div>
        </div>
        <div class="logged-home">
            <div class="card sep-hover">
                <a href="recordings.php">
                    <h3>Recordings</h3>
                    <p>Online Lecture Recordings</p>
                </a>
            </div>
        </div>
        <div class="logged-home">
            <div class="card sep-hover">
                <a href="past-papers.php">
                    <h3>Past Papers</h3>
                    <p>Previous Years Past Papers</p>
                </a>
            </div>
        </div>
    </div>



</div>


<div class="content" style="margin:1rem">
    <div class="card timer">
        <?php
        $exam_date_time = strtotime("2024-10-05 09:00:00");
        ?>


        <div class="timer">
            <h3>Time Left for Next Sem Exam:</h3>
            <p>Date assumed : 2024 - 10 - 05</p>
            <div id="countdown" class="countdown">
                <div class="countdown-item">
                    <span>Days</span>
                    <span id="days">0</span>
                </div>
                <div class="countdown-item">
                    <span>Hours</span>
                    <span id="hours">0</span>
                </div>
                <div class="countdown-item">
                    <span>Minutes</span>
                    <span id="minutes">0</span>
                </div>
                <div class="countdown-item">
                    <span>Seconds</span>
                    <span id="seconds">0</span>
                </div>
            </div>
        </div>

        <script>
            // Function to update the countdown timer
            function updateCountdown() {
                // Current date and time in milliseconds
                var now = new Date().getTime();
                // Exam date and time in milliseconds
                var examDateTime = <?php echo $exam_date_time; ?> * 1000;

                // Time remaining in milliseconds
                var timeRemaining = examDateTime - now;

                // Calculate days, hours, minutes, and seconds
                var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

                // Update the countdown timer display
                document.getElementById("days").innerText = days;
                document.getElementById("hours").innerText = hours;
                document.getElementById("minutes").innerText = minutes;
                document.getElementById("seconds").innerText = seconds;
            }

            // Update the countdown timer every second
            setInterval(updateCountdown, 1000);
        </script>
    </div>
</div>