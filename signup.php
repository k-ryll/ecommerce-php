<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-signup.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Ryll's Boutique Signup</title>
</head>

<body>
    
    <div class="signup-container">
        <div class="signup-panel">
            <h1>Create your <br> account</h1>
            <form class="signup-form" method="POST" action="">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email Address" required>
                <input type="password" name="password" placeholder="Create a Password" required>
                <button type="submit">Create</button>
                <h3><a href="login.php">Already have an account?</a></h3>
            </form>
        </div>
    </div>
</body>

</html>
<?php 
    include 'classes/User.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
    
        if (empty($username) || empty($email) || empty($password)) {
            $error = "All fields are required.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = "Invalid email format.";
        } else {
            $newUser = new User($username, $email, $password);
    
            if (!isset($_SESSION['users'])) {
                $_SESSION['users'] = [];
            }
    
            // Add the new user to the users array
            $_SESSION['users'][] = $newUser;
    
            // Redirect to home page after signup
            header("Location: index.php");
            exit();
        }
    }
    
    include 'includes/footer.php';
?>