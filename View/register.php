<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Your LMS Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Includes/Css/style.css">
</head>

<body   style="height:100vh;">

    <!-- Header -->
    <?php include '../Includes/Components/header.php'; ?>

    <!-- Registration Form -->
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="mb-4">Register</h2>
                <form action="../Controller/AuthController.php" method="post" onsubmit="return validateForm()">
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <small id="passwordRequirements" class="form-text text-muted">Password must be at least 8 characters long and contain at least one number.</small>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                        <small id="passwordMatchError" class="form-text text-danger"></small>
                    </div>
                    <button name="register" type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Footer -->
    <?php include '../Includes/Components/footer.php'; ?>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Custom JavaScript -->
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            var passwordMatchError = document.getElementById("passwordMatchError");
            var passwordRequirements = document.getElementById("passwordRequirements");

            // Check if the password meets the criteria
            var passwordRegex = /^(?=.*\d).{8,}$/;
            if (!passwordRegex.test(password)) {
                passwordRequirements.innerText = "Password must be at least 8 characters long and contain at least one number.";
                return false;
            } else {
                passwordRequirements.innerText = "";
            }

            // Check if the password and confirm password match
            if (password !== confirm_password) {
                passwordMatchError.innerText = "Passwords do not match.";
                return false;
            } else {
                passwordMatchError.innerText = "";
                return true;
            }
        }
    </script>
</body>

</html>
