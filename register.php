<?php
class User {
    private $username;
    private $email;
    private $phone;
    private $password;

    public function __construct($username, $email, $phone, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->phone = $phone;
        $this->password = password_hash($password, PASSWORD_BCRYPT); // Hash password
    }
    public function validateInput() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }
        if (!preg_match("/^[0-9]{10,15}$/", $this->phone)) {
            return "Invalid phone number.";
        }
        return null; // No errors
    }

    ?>