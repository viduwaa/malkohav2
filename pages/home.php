<?php
include('header.php');
?>



<div style="margin: 1rem;">
    <h2 id="welcome-text" style="color: var(--font-black);">Welcome! <?php echo $name; ?></h2>
</div>

<div class="content" style="margin:1rem">
    <h2>Quick Links</h2>
    <div class="quicklinks">
        <div class="logged-home">
            <div class="card sep-hover">
                <a href="https://docs.google.com/document/d/1twGBkzQGK_eKBOvHaR4EY4iy5KBhMXKPKgQupU5ULGk/" target="_blank">
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

<?php include('assignments.php'); ?>


<div class="content next-exam" style="margin:1rem">
    <h2>Time Left for Next Sem Exam:</h2>
    <div class="card timer">
        <?php
        $exam_date_time = strtotime("2024-10-05 09:00:00");
        ?>
        <div>

            <p>Date assumed : <b> 2024 - 10 - 05 </b> </p>
            <p style="color: red;">Not official just a assumption</p>
        </div>
        <div>
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

            let welcome_text = document.getElementById('welcome-text');
            dark_mode.addEventListener('click', () => {
                welcome_text.classList.toggle('welcome-textcolor');
            });
        </script>
    </div>
</div>

<!-- Feed back form -->

