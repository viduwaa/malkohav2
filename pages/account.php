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