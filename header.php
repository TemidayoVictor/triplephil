    <header class="header">
        <img src="images/trip.png" alt="">
        <nav class="navbar">
            <a class="<?php if($page == 'index') echo "active";?>" href="index.php">Home</a>
            <a class="<?php if($page == 'about') echo "active";?>" href="about.php">About</a>
            <a class="<?php if($page == 'services') echo "active";?>" href="services.php">Services</a>
            <a class="<?php if($page == 'contact') echo "active";?>" href="contact.php">Contact</a>
        </nav>


        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
            <div id="info-btn" class="fas fa-info-circle"></div>
        </div>

    </header>

    <div class="contact-info">

        <div id="close-contact-info" class="fas fa-times"></div>

        <div class="info">
            <i class="fas fa-envelope"></i>
            <h3>Email Address</h3>
            <p>support@triplephil.com</p>
        </div>

        <div class="info">
            <i class="fas fa-map-marker-alt"></i>
            <h3>office address</h3>
            <p>55 Allen Avenue, Lagos Nigeria</p>
        </div>

        <div class="info">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p>+234 703 054 9213</p>
        </div>

        <div class="share">
            <a href="https://www.facebook.com/Triplephilsolutions/?ref=pages_you_manage" class="fab fa-facebook-f"></a>
            <a href="https://www.instagram.com/officialtriplephil/" class="fab fa-instagram"></a>
            <a href="https://www.linkedin.com/company/triplephil/" class="fab fa-linkedin"></a>
        </div>
    </div>

