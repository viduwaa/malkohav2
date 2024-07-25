<?php
        if (session_status() == PHP_SESSION_NONE) {
            include('check_login.php');
        }
        $stmt = $conn->prepare("SELECT * FROM feedbacks WHERE user_email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();

        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<h4> Thank you for your Feedback </h4>";
        } else {
            echo "<form action=\"feedbacks.php\" method=\"post\">";
            echo "<textarea name=\"feedback\" id=\"feedback\" cols=\"30\" rows=\"10\" placeholder=\"Enter your feedback here\" maxlength=\"400\" required></textarea>";
            echo "<button type=\"submit\">Submit</button>";
            echo "</form>";
        }



        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['feedback'])) {
                $feedback = $_POST['feedback'];

                if (strlen($feedback)>400){
                    echo "<script>alert('Go away??');</script>";
                }else{
                    $feedback = htmlspecialchars($feedback, ENT_QUOTES, 'UTF-8');

                    $stmt = $conn->prepare("INSERT INTO feedbacks (user_email, feedback) VALUES (?, ?)");
                    $stmt->bind_param("ss", $email, $feedback);
    
                    try {
                        ($stmt->execute());
                        echo "<p>Feedback submitted successfully</p>";
                        header("Location: http://" . $_SERVER['HTTP_HOST'] . "/malkohav2/pages/home.php#feedback");
                    } catch (Exception $e) {
                        echo "<p>Exception: " . $e->getMessage() . "</p>";
                    }
    
                    $stmt->close();
                }

               
            }
        }

        $conn->close();
?>
        