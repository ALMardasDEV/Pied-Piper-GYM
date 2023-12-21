<!-- 
// Establish a connection to the database
$conn = mysqli_connect('localhost', 'root', '', 'PiedPiperDB'); -->
<!-- 
// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Get the selected membership and user ID
//     $selectedMembershipID = $_POST["subscriptionMonths"];
//     $userID ="SELECT user_id FROM users ";

//     // Get the membership duration based on the selected membership ID
//     $getMembershipQuery = "SELECT membership_duration FROM membership WHERE membership_id = $selectedMembershipID";
//     $result = mysqli_query($conn, $getMembershipQuery);

//     if ($result && mysqli_num_rows($result) > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $membershipDuration = $row["membership_duration"];

//         // Calculate the start and end dates
//         $startDate = date("Y-m-d"); // Current date
//         $endDate = date("Y-m-d", strtotime("+$membershipDuration months", strtotime($startDate)));

//         // Insert the user membership into the database
//         $insertQuery = "INSERT INTO usermembership (membership_id, user_id, start_date, end_date) VALUES ($selectedMembershipID, $userID, '$startDate', '$endDate')";
//         if (mysqli_query($conn, $insertQuery)) {
//             echo "Membership created successfully!";
//         } else {
//             echo "Error: " . mysqli_error($conn);
//         }
//     } else {
//         echo "Membership not found!";
//     }

//     // Close the database connection
//     mysqli_close($conn);
// } -->


<?php 
// Establish connection to MySQL
$conn = mysqli_connect('localhost', 'root', '', 'PiedPiperDB') or die(mysqli_connect_error());

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from HTML form
    $membershipDuration = $_POST['subscriptionMonths'];
    $userName = $_POST['username'];
    $password = $_POST['password'];

    // SQL query to check user credentials
    $sql = "SELECT user_id FROM users WHERE user_name='$userName' AND password='$password'";

    // Execute the query
    $res = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if (mysqli_num_rows($res) > 0) {
        // $row = mysqli_fetch_assoc($res);
        // $userID = $row['user_id'];

        // Calculate the start and end dates
        $startDate = date("Y-m-d"); // Current date
        $endDate = date("Y-m-d", strtotime("+$membershipDuration months", strtotime($startDate)));

        // Insert the user membership into the database
        $insertQuery = "INSERT INTO usermembership (user_id, service_id, start_date, end_date) VALUES ('$res', '$membershipDuration', '$startDate', '$endDate')";
        if (mysqli_query($conn, $insertQuery)) {
            $message = "Membership created successfully!";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    } else {
        $message = "Membership not found!";
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
    <title>Sign up condition</title>

    <style>
        .div-style {
            height: 100vh;
            display: flex; 
            justify-content: center; 
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="div-style"> 
        <h2><?php echo $message?></h2>
    </div>
</body>
</html>
