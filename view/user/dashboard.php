<?php
// Assume user information is available in the session
session_start();

// Redirect to login if the user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Include necessary files and configurations
require_once '../../repository/UserRepository.php';

// Instantiate UserRepository
$userRepository = new UserRepository();

// Fetch user data using the user ID from the session
$user = $userRepository->getUserById($_SESSION['user_id']);

// Check if user data is available
if ($user) {
    // HTML and PHP code for the profile page
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        
    </style>
</head>

<body>

    <!-- Header -->
    <?php include '../Layout/header.php'; ?>

    <div class="container dashboard-container mt-5">
        <div class="row">
            <div class="dashboard-profile-col">
                <div class="dashboard-profile-card card">
                    <div class="bg-secondary card-header text-center">
                        <h5>Your Profile, <?php echo $user['first_name']; ?>!</h5>
                    </div>
                    <div class="card-body dashboard-profile-body">
                        <div class="text-center">
                            <img src="<?php echo '../../public/uploads/profile/' . $user['profile_image_url']; ?>" alt="Profile Image" class="dashboard-profile-image">
                        </div>
                        <div class="dashboard-date-info text-muted">
                            <p><strong>Created At:</strong> <?php echo date('M Y', strtotime($user['created_at'])); ?></p>
                            <p><strong>Last Updated At:</strong> <?php echo date('M Y', strtotime($user['last_updated_at'])); ?></p>
                            <p><strong>Last Logged In At:</strong> <?php echo date('M Y', strtotime($user['last_logged_in_at'])); ?></p>
                        </div>
                        <div class="dashboard-user-info">
                            <p><strong>Name:</strong> <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></p>
                            <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
                            <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                            <p><strong>Role:</strong> <?php echo $user['role']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-info-col">
                <div class="bg-secondary card-header text-center">
                    <h5>Course Information and Grades</h5>
                </div>
                <div class="dashboard-course-info card">
                    
                    <h5>Course Information and Grades</h5>
                    <!-- Add your course information and grade display logic here -->
                </div>
            </div>
            <div class="dashboard-logs-col">
                <div class="bg-secondary card-header text-center">
                    <h5>Logs</h5>
                </div>
                <div class="dashboard-logs-info card">
                    
                    <!-- Add your logs display logic here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
<?php include '../Layout/footer.php'; ?>

<?php
} else {
    // Handle the case where user data is not available
    echo "Error: User data not found.";
}
?>
