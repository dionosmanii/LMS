<?php

class User
{
    private $first_name;
    private $last_name;
    private $username;
    private $email;
    private $password;

    public function __construct($first_name, $last_name, $username, $email, $password)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    // Getter methods
    public function getFirstName()
    {
        return $this->first_name;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

}


?>