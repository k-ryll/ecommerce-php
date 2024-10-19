
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ryll's Boutique</title>
    <link rel="stylesheet" href="css/homepage.css">
</head>
    
<body>
<?php 
     include 'includes/header.php';
     include 'classes/User.php';
    ?>
    <div class="container">

    

     <section class="welcome-section">
            <h1>Welcome to Ryll's Boutique</h1>
            <p>Your one-stop platform for amazing products!</p>
        </section>

     <section class="users-section">
            <h2>Profile info:</h2>
            <ul class="user-list">
                <?php
                if (isset($_SESSION['users'])) {
                    foreach ($_SESSION['users'] as $user) {
                        echo "<li class='user-item'>
                                <div class='user-info'>
                                    <strong>Username:</strong> " . htmlspecialchars($user->username) . "<br>
                                    <strong>Email:</strong> " . htmlspecialchars($user->email) . "
                                </div>
                              </li>";
                    }
                } else {
                    echo "<p>No registered users.</p>";
                }
                ?>
            </ul>
        </section></div>
</body>
</html>
<?php 
   
    include 'includes/footer.php';
?>
