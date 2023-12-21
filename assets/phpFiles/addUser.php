<?php
// Get the data from HTML FORM
$name = $_POST["name"]; 
$userName = $_POST["userName"];
$password = $_POST["password"];
$email = $_POST["email"]; 

// SQL Query to save the data into the database
$sql = "INSERT INTO users (Name, user_name, password, user_email) VALUES ('$name', '$userName', '$password', '$email')";

// Establish connection to MySQL
$conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
$db_select = mysqli_select_db($conn, 'PiedPiperDB') or die(mysqli_error());

// Execute the query to store the data in the database
$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

// Check for successful insertion   
if ($res) {
    $message = "Data inserted successfully!";
} else {
    $message = "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up condition</title>

    <style>
        .div-style{
            height :100vh;
            display: flex; 
            justify-content:center; 
            align-items:center;
        }
    </style>
</head>
<body>
    <div class="div-style"> 

    <h2><?php echo $message?></h2>
    
    </div>
</body>
</html>
