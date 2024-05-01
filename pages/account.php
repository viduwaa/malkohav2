<?php

$stmt = $conn->prepare("SELECT * FROM accounts WHERE id = ?");
$stmt->bind_param("s", $_SESSION['google_id']);
$stmt->execute();

$result = $stmt->get_result();
$account = $result->fetch_assoc();

$name = $account['name'];
$email = $account['email'];
$picture = $account['picture'];
$registered = $account['registered'];

$stmt->close();
$conn->close();

?>

<div class="popup-content">
    <div>
        <img id="popup-close" src="../assets/icons/close.svg" alt="close">
        <h2><?php echo htmlspecialchars($name); ?></h2>
        <h3><?php echo htmlspecialchars($email) ?></h3>
        <p>First Logged in Date :<?php echo htmlspecialchars($registered)  ?> </p>
    </div>

    <div>
        <img src="<?php echo htmlspecialchars($picture) ?>" alt="photo">
    </div>
</div>

<script>
    const profile = document.getElementById('profile'); 
    const popupclose = document.getElementById('popup-close');
    const popupContent = document.querySelector('.popup');

    profile.addEventListener('click',()=>{
        popupContent.style.display = 'block';
    })

    popupclose.addEventListener('click',()=>{
        popupContent.style.display = 'none';
    })
</script>