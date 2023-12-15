


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
$res = mysqli_query($conn, $sql) or die(mysqli_error());

// Check for successful insertion
if ($res) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>

