<header>
        <div class="logo">
            <a href="../Main/index.php"><img src="../../public/img/logo.png" alt="Logo" style="max-height: 50px;"></a>
        </div>
        <div class="nav-links d-flex align-items-center">
            <a href="#">About Us</a>
            <a href="#">Contact</a>

            <?php
            session_start();

            if (isset($_SESSION['user_id'])) {
                // User is logged in, display clickable image with dropdown
                echo '<div class="dropdown">';
                echo '<a href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
                echo '<img src="../../public/uploads/profile/' . $_SESSION['pfp'] . '" height="40" width="40" style="border-radius:50%;">';
                echo '</a>';
                echo '<div class="dropdown-menu dropdown-menu-right" aria-labelledby="profileDropdown" style="margin-top:20px; background-color:#343a40;">';
                echo '<a class="dropdown-item text-light" href="#">Profile</a>';
                echo '<a class="dropdown-item text-light" href="#">Courses</a>';
                echo '<a class="dropdown-item text-light" href="#">Lessons</a>';
                echo '<a class="dropdown-item text-light" href="#">Calendar</a>';
                echo '<a class="dropdown-item text-light" href="../auth/logout.php">Log Out</a>';
                // Add more links as needed
                echo '</div>';
                echo '</div>';
            } else {
                // User is not logged in, display "Log In" button
                echo '<a href="../auth/login.php"><button class="btn btn-light">Log In</button></a>';
            }
            ?>
        </div>
    </header>
