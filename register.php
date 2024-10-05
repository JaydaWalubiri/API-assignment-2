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


    ?>