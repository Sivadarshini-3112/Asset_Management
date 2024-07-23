<?php
session_start();

$database = 'localhost';
$database_user = 'root';
$database_password = '';
$database_name = 'stock_integra';

// Connect to database
$con = mysqli_connect($database, $database_user, $database_password, $database_name);

if (mysqli_connect_error()) {
    exit('Failed to connect to the database: ' . mysqli_connect_error());
}

// Initialize error message
$error_msg = '';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare our SQL statement and prevent injection
    if ($stmt = $con->prepare('SELECT user_id, password FROM users WHERE user_id = ?')) {
        // Now we bind the parameters. User ID is assumed to be an integer
        $stmt->bind_param('i', $_POST['user_id']);
        $stmt->execute();

        // Store the result so we can check if the account exists
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $password);
            $stmt->fetch();

            // Now we know the account exists
            if ($_POST['password'] === $password) {
                // Creating the session as the user has logged in
                session_regenerate_id();
                $_SESSION['loggedin'] = TRUE;
                $_SESSION['id'] = $user_id;
                $_SESSION['password'] = $password;
                // Redirect to integra.php
                header('Location: integra.php');
                exit();
            } else {
                // Incorrect password
                $error_msg = 'Invalid user ID or password.';
                echo '<script>alert("' . $error_msg . '");</script>';
            }
        } else {
            // Incorrect user ID
            $error_msg = 'Invalid user ID or password.';
            echo '<script>alert("' . $error_msg . '");</script>';
        }

        $stmt->close();
    } else {
        $error_msg = 'Failed to prepare the SQL statement.';
        echo '<script>alert("' . $error_msg . '");</script>';
    }
}

$con->close();
?>
