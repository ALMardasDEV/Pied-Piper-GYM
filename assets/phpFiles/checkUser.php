<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from HTML form
    $userName = $_POST["userName"];
    $password = $_POST["password"];

    // SQL query to check user credentials
    $sql = "SELECT * FROM users WHERE user_name='$userName' AND password='$password'";

    // Establish connection to MySQL
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    $db_select = mysqli_select_db($conn, 'PiedPiperDB') or die(mysqli_error());

    // Execute the query
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // Check if the user exists
    if (mysqli_num_rows($res) > 0) {
        $msg =  "User exists. Login successful!";
        // You can redirect to another page or perform actions after successful login
    } else {
        $msg =  "Invalid username or password.";
    }

    // Close the connection
    mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in check</title>
</head>
<body>
    <div class="div-style">
        <h1><?php echo $msg ?></h1>
    </div>
</body>
</html>