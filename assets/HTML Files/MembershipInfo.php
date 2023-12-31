<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pied Piper Fitness">
    <meta name="keywords" content="fitness , gym , pied piper  , fitness information">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@200,400,700,500,600,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css files/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        .table-style{
            height: 100vh;
        }
        .table-style .table-header{
          background-color: rgb(154, 160, 166);
          padding: 10px;
        }
    </style>
    <title>Membership info</title>
</head>
<body>
    
    <header>
        <!-- navbar and image in the header -->
      
            <nav class="navbar navbar-expand-sm  navbar-light " >
                <div class="container-fluid ">
                  <a class="logo-img" class="navbar-brand" href="./index.html">
                    <img  src="../Images/logoLight.jpeg" alt="" width="50px" height="45px">
                  </a>
                  <!-- adding button for the toggler -->
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <!-- centering the nav links using 'justify-content-center' -->
                  <div class="collapse navbar-collapse justify-content-center " id="mynavbar">
                    <ul class="navbar-nav ">
                      <li class="nav-item">
                        <a class="nav-link" href="/index.html">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="./mempership.html">Membership</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="./trainers.html">Trainer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="./infoFitness.html">Fitness info</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="./aboutUs.html">About Us</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="./contactUs.html">Contact Us</a>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-bs-toggle="dropdown" >
                          More
                        </a>
                        <ul class="dropdown-menu " >
                          <li class="dropdown-item" style="color: black;" onmouseover="this.style.color='white'" onmouseout="this.style.color='black'"><a class="nav-link" href="./calculation.html">calculation</a></li>
                          <li class="dropdown-item" style="color: black;" onmouseover="this.style.color='white'" onmouseout="this.style.color='black'"><a class="nav-link" href="./fun.html">Fun</a></li>
                          <li class="dropdown-item" style="color: black;" onmouseover="this.style.color='white'" onmouseout="this.style.color='black'"><a class="nav-link" href="./Questionnaire.html">Questionnaire</a></li> 
                          <li class="dropdown-item" style="color: black;" onmouseover="this.style.color='white'" onmouseout="this.style.color='black'"><a class="nav-link" href="./calculationjQuery.html">CalculationjQuery</a></li></ul>

                          <li class="nav-item">
                            <a class="nav-link" href="./SignUp.html">SignUp</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="./LogIn.html">Login</a>
                          </li>
                    </li>
                     
                    </ul>
                    
                  </div>
                </div>
              </nav>
              

    </header>

    <main class="container" style="margin-top: 8vw; height: 100%; margin-bottom: 20vw;">
      <div class="container" style="border: 1px solid black; border-radius: 20px; padding: 3% ;max-width: 90%; margin-top: 5vw;">
        <br/>
        <br/>
        <div>
          <h3>Choose Membership period :</h3>
          <p>This is to show you the memberships and its services</p>
        </div> <br/>
        <div>
          <h5>Chose period:</h5>
          <form action="Membershipinfo.php" method="post">
            <!-- onchange="loadInfo(tableOneData)" -->
            <!-- <label for="info1">one</label>
            <input id="info1" name="info" type="radio" value="1"   >

            <label for="info2" >two</label>
            <input id="info2"name="info" type="radio" value="2" >

            <label for="info3">six</label>
            <input id="info3" name="info" type="radio" value="6" >

            <label for="info3">one year</label>
            <input id="info3" name="info" type="radio" value="12" ><br/><br/> -->

            <!-- <lable for="check">Enter a period in month : </lable>
            <input type="text" id="check"  name="check" placeholder="Search for Package " > -->
            <label for="period">Choose a Package Period:</label>

            <select id="period" name="period">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              
            </select>
            <input type="submit" value="Submit">
          </form>
        </div> <br/>

        <div>
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected period from the form
    $selectedPeriod = $_POST["period"];

    // Establish connection to MySQL
    $conn = mysqli_connect('localhost', 'root', '') or die(mysqli_error());
    $db_select = mysqli_select_db($conn, 'PiedPiperDB') or die(mysqli_error());

    // SQL Query to retrieve services based on the selected period
    $sql = "SELECT * FROM services WHERE service_id = '$selectedPeriod' LIMIT 1";

    // Execute the query to fetch services
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    // Check if data exists and render it in the table
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $price = $row['price'];
        $service1 = $row['service_1'];
        $service2 = $row['service_2'];
        $service3 = $row['service_3'];

        // Output the retrieved services in a table
        echo "<table>
                <tr>
                    <th>Service</th>
                    <th></th>
                    <th></th>
                    <th>Price</th>
                </tr>
                <tr>
                    <td>$service1</td>
               
                    <td>$service2</td>
                
                    <td>$service3</td>

                    <td>$price</td> 
                </tr>
              </table>";
    } else {
        echo "No data available for the selected period.";
    }

    // Close the connection
    mysqli_close($conn);
}
?>



          <!-- <div>
            <br/>
            <hr>
            
            <h3>Add a suggestion:</h3>
            <p>To Serve you better, drop a suggestion for a service That related to our business , also you can drop a price</p>
            <form id="addElementForm">
                <label for="sourceInput">Service:</label>
                <input type="text" id="serviceInput" placeholder="Enter a service"><br/>
                <label for="priceInput">Price:</label>
                <input type="text" id="priceInput" placeholder="Enter a Price"><br/><br/>
                
        
                <button type="button" onclick="addNewSuggestion()">Add suggestion</button>
            </form>
        </div> -->
        <br/>
        <br/>
        
        <!-- <table>
          <tr>
            <th>Service</th>
            <th>Price</th>
          </tr>
          <tbody id="SuggestionTable">

          </tbody>
         
        </table><br/> -->
        
        </div>
        
      </div>
         
    </main>
    <footer class="footer-copyrights" >
      
      <a href="/assets/HTML Files/copyRights.html"><h3 >CopyRights© Pied Piper 2023 </h3></a>
      
    </footer>
   <script src="../js Files/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   
</body>

    
</html>