<?php
// Connect to your database (replace 'dbname', 'username', 'password', and 'hostname' with your actual database credentials)
$dsn = 'mysql:dbname=dbname;host=hostname';
$db_user = 'username';
$db_password = 'password';

try {
    $dbh = new PDO($dsn, $db_user, $db_password);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}

// Get the data submitted from the form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ID = $_POST['ID'];
    $Password = $_POST['Password'];

    // Validate the input data (you may want to add more validation checks)
    if (empty($ID) || empty($Password)) {
        echo "Please enter both Id and password.";
    } else {
        // Prepare and execute a query to check the user's credentials against the database
        $stmt = $dbh->prepare("SELECT * FROM student WHERE ID = :Student_ID AND Password = :Password");
        $stmt->execute(array(':ID' => $Student_ID, ':password' => $password));
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the user exists in the database
        if ($Student_ID) {
            echo "Login successful! Welcome, " . $Id['Id'];
            // You can now set a session or cookie to maintain user login status if needed.
        } else {
            echo "Invalid credentials. Please try again.";
        }
    }
}
?>