<header>
    <div class="logo">
        <a href="../Main/index.php"><img src="../../public/img/logo.png" alt="Logo" style="max-height: 50px;"></a>
    </div>
    <div class="nav-links">
        <a href="#">About Us</a>
        <a href="#">Contact</a>

        <?php
        session_start();

        if (isset($_SESSION['user_id'])) {
            // User is logged in, display "Log Out" button
            echo '<a href="../auth/logout.php"><button class="btn btn-light">Log Out</button></a>';
            echo $_SESSION['firstname'];
        } else {
            // User is not logged in, display "Log In" button
            echo '<a href="../auth/login.php"><button class="btn btn-light">Log In</button></a>';
        }
        
        ?>
    </div>
</header>
