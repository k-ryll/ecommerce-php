<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-signup.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Login</title>
</head>
<body>
    
    <div class="signup-container">
        <div class="signup-panel">
            <h1>User Login</h1>

                <form class="signup-form">
                    <input type="email" placeholder="Email Address" required>
                    <input type="password" placeholder="Password" required>
                    <button type="submit">Login</button>
                    <h3>  <a href="signup.php"> Don't have an account?</a></h3>

                </form>
           
    
        </div>
    </div>
    <?php 
    include 'classes/User.php';
        include "includes/footer.php";
    ?>
</body>
</html>