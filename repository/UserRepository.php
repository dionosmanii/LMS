<?php

require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../model/User.php';

class UserRepository
{
    private $conn;

    public function __construct()
    {
        // Instantiate database connection using the configuration
        $connection = new config();
        $this->conn = $connection->startConnection();
    }

    public function saveUser(User $user)
    {
        try {
            // Check if the email and username already exist
            if ($this->isEmailExists($user->getEmail()) || $this->isUsernameExists($user->getUsername())) {
                // Email or username already exists, return false or handle accordingly
                return false;
            }

            // Email and username do not exist, proceed with the insertion
            $query = "INSERT INTO users (first_name, last_name, username, email, password, role) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);

            // Bind parameters
            $role = "User";
            $stmt->bindParam(1, $user->getFirstName());
            $stmt->bindParam(2, $user->getLastName());
            $stmt->bindParam(3, $user->getUsername());
            $stmt->bindParam(4, $user->getEmail());
            $stmt->bindParam(5, $user->getPassword());
            $stmt->bindParam(6, $role);

            // Execute the query
            $stmt->execute();

            // For demonstration purposes, let's assume success
            return true;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return false;
        }
    }

    private function isEmailExists($email)
    {
        // Check if the email already exists in the 'users' table
        $query = "SELECT COUNT(*) FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->execute();

        // Fetch the count
        $count = $stmt->fetchColumn();

        // If count is greater than 0, email exists; otherwise, it does not
        return $count > 0;
    }

    private function isUsernameExists($username)
    {
        // Check if the username already exists in the 'users' table
        $query = "SELECT COUNT(*) FROM users WHERE username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $username);
        $stmt->execute();

        // Fetch the count
        $count = $stmt->fetchColumn();

        // If count is greater than 0, username exists; otherwise, it does not
        return $count > 0;
    }

    public function loginUser($email, $password)
    {
        try {
            // Check if the email exists
            if (!$this->isEmailExists($email)) {
                return false;
            }

            // Fetch user data by email
            $query = "SELECT * FROM users WHERE email = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            // Verify the password
            if ($user && password_verify($password, $user['password'])) {
                return $user;
            }

            return false;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return false;
        }
    }


    public function getUserById($userId)
    {
        try {
            // Specify columns excluding the password
            $query = "SELECT user_id, username, email, first_name, last_name, role, profile_image_url, created_at, last_updated_at, last_logged_in_at FROM users WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $userId);
            $stmt->execute();
            $userData = $stmt->fetch(PDO::FETCH_ASSOC);
    
            // If user data is found, return it
            return $userData ? $userData : false;
        } catch (PDOException $e) {
            // Handle database errors
            // Log or echo $e->getMessage() for debugging
            return false;
        }
    }


}