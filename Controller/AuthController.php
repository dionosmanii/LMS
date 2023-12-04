<?php
// controllers/AuthController.php

require_once '../Model/User.php';
require_once '../Repository/UserRepository.php';

class AuthController
{
    public function registerUser()
    {
        // Check if the registration form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validate and sanitize input data
            $first_name = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
            $last_name = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
            $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            // Create a User model
            $user = new User($first_name, $last_name, $username, $email, $password);

            // Instantiate UserRepository
            $userRepository = new UserRepository();

            // Save the user using the repository
            $registrationResult = $userRepository->saveUser($user);

            // Handle the registration result
            if ($registrationResult) {
                echo "Registration successful!";
                // You may redirect to a login page or another page after successful registration.
            } else {
                echo "Registration failed. Please try again.";
                // You may handle errors and redirect back to the registration form.
            }
        }
    }
}

// Instantiate AuthController
$authController = new AuthController();

// Check the action (you might use a routing mechanism)
if (isset($_POST['register'])) {
    // Call registerUser method
    $authController->registerUser();
}

