<!DOCTYPE html>

<?php 
    session_start(); 
?>

<html>
<head>
    <title>Summary of Student's Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        *{	
			text-align: center;
			margin: 0 auto;
			margin-top: 10px;
		}
    </style>
</head>
<body>

<?php

    if (isset($_POST['submit'])) {

        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        
        if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
            echo "Name can only contain letters and spaces.";       
            return false;
        }
        $matricno = $_POST['matricno'];
        $currentAddress = $_POST['currentAddress'];
        $homeAddress = $_POST['homeAddress'];
        $email = $_POST['email'];
        $phoneNumber = $_POST['phoneNumber'];
        $homeNumber = $_POST['homeNumber'];

    }

        echo "<h1>Summary of Student's Details</h1><br>";
        echo "<p> Name: $name </p>";
        echo "<p> Matric Number: $matricno </p>";
        echo "<p>Current Address: $currentAddress </p>";
        echo "<p>Home Address: $homeAddress </p>";
        echo "<p>Email: $email </p>";
        echo "<p>Mobile Phone Number: $phoneNumber </p>";
        echo "<p>Home Phone Number (Emergency): $homeNumber </p>";

        // Add logout button and session layer
        echo '<form method="post" action="login.php">';
        echo '<button class="button" type="submit" name="logout">Logout</button>';
        echo '</form>';
        $_SESSION = array(); // Unset all session variables
        session_destroy(); // Destroy the session
    

?>
    
</body>
</html>