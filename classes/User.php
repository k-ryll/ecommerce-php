<?php
include 'classes/session.php';

// Initialize users array in session if it doesn't exist
if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = [];
}

class User {
    public $username;
    public $email;
    private $password;

    public function __construct($username, $email, $password) {
        $this->username = $username;
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        
    }

    public function verifyPassword($password) {
        return password_verify($password, $this->password);
    }

    
}


?>
