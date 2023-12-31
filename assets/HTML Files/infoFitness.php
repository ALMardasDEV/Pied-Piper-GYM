<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pied Piper Fitness">
    <meta name="keywords" content="fitness , gym , pied piper  , fitness information">
    <link href="https://api.fontshare.com/v2/css?f[]=clash-display@200,400,700,500,600,300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="../css files/style.css">
    <title>fitness info</title>

    <style>
       table{
            width: 100%;
            border-collapse: collapse;
        }
        td , th{
            border: 1px solid black;
            padding: 20px;
            text-align: center;
        }

        th{
            font-weight:600;
            font-size: 20px;
        }
    </style>
</head>
<body>
        <!-- we divide each page into three main sections 'header' , 'main' and 'footer' just to orgnize the work -->

    <header>
                <!-- navbar and image in the header -->
                <nav class="navbar navbar-expand-sm  bg-white  navbar-light ">
                    <div class="container-fluid ">
                      <a class="logo-img" class="navbar-brand" href="/index.html">
                        <img class="" src="../Images/logoLight.jpeg" alt="" width="50px" height="45px">
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
    <main>
        <h1 style="margin-left: 5vw; margin-top: 120px; font-size: 60px; font-weight: 400;">Articles and Stories</h1>

        
        <div class="cards-flex-container">
            
            <div class="flex-card">
                <div><h2 style="font-size: 20px;">Samuel Athlete Story</h2></div>
                <div class="flex-card-img" style="background-image: url(../Images/athlete.jpg); "></div>
                <div><p>This story about an athlete, to motivate you to do more in training and healthy food...</p></div>
                <div ><p><a href="./story1.html"><span  style="font-size: 55px;font-weight: 400; color: rgb(87, 85, 85);"class="material-symbols-outlined">read_more</span></a></p></div>
            </div>

            <div class="flex-card">
                <div><h2 style="font-size: 20px;">start workout in gym</h2></div>
                <div class="flex-card-img" style="background-image: url(../Images/training.jpg); "></div>
                <div><p>Starting a workout routine at the gym can be an exciting and transformative journey...</p></div>
                <div ><p><a href="./article2.html"><span  style="font-size: 55px;font-weight: 400; color: rgb(87, 85, 85);"class="material-symbols-outlined">read_more</span></a></p></div>
            </div>

            <div class="flex-card">
                <div><h2 style="font-size: 20px;">be Healthy</h2></div>
                <div class="flex-card-img" style="background-image: url(../Images/healthyFood.jpg); "></div>
                <div><p>Maintaining optimal health and peak performance is a primary concern for athletes...</p></div>
                <div ><p><a href="./article1.html"><span  style="font-size: 55px;font-weight: 400; color: rgb(87, 85, 85);"class="material-symbols-outlined">read_more</span></a></p></div>
            </div>
            
        </div>
    <!-- Start of form and table -->
    <h1 style="margin-left: 5vw; margin-top: 120px; font-size: 50px; font-weight: 400;">Protein AND Carbs</h1>

        <div class="container" style="border: 1px solid black; border-radius: 20px; padding: 3% ;max-width: 80%; margin-top: 5vw;">
          <br/>
          <br/>
          <div>
            <h3>Choose your age:</h3>
          </div> <br/>
          <div>
            <h5>Age:</h5>
            <form action="infoFitness.php" method="post">
              <label for="age1">Children</label>
              <!-- loadData(tableChildrensData) -->
              <input id="age1" name="age" type="radio" value="children"  >

              <label for="age2" >Adult</label>
              <input id="age2"name="age" type="radio" value="adult" >

              <label for="age3">Elderly</label>
              <input id="age3" name="age" type="radio" value="elderly" ><br/>
              <input type="submit" value="Submit">

                <!-- <lable for="check">Search for source:</lable>
                <input type="text" id="check"  name="check" placeholder="Search for Protein or Carbohydrate source " >
                <button onclick="CheckSource(sourceAll)">Check</button> -->
            </form>
          </div> <br/>

          <!-- <div>
           <table>
            <tr>
                <th>Source</th>
                <th>Type</th>
            </tr>
            <tbody> -->
            <?php
    // Define arrays with data for different age groups
    $tableChildrensData = [
      ['type' => 'Protein', 'source' => 'Lean meats'],
      ['type' => 'Carbohydrate', 'source' => 'bread'],
      ['type' => 'Protein', 'source' => 'Fish'],
      ['type' => 'Carbohydrate', 'source' => 'Fruits'],
      ['type' => 'Protein', 'source' => 'Eggs'],
      ['type' => 'Carbohydrate', 'source' => 'Vegetables'],
      ['type' => 'Protein', 'source' => 'milk']
    ];

    $tableAdultsData = [
      ['type' => 'Protein', 'source' => 'Lean meats'],
      ['type' => 'Carbohydrate', 'source' => 'Whole grains'],
      ['type' => 'Protein', 'source' => 'Eggs'],
      ['type' => 'Carbohydrate', 'source' => 'Sweet potatoes'],
      ['type' => 'Protein', 'source' => 'Nuts'],
      ['type' => 'Carbohydrate', 'source' => 'pasta'],
      ['type' => 'Protein', 'source' => 'Legumes']
    ];

    $tableElderlyData = [
      ['type' => 'Protein', 'source' => 'Lean meats'],
      ['type' => 'Carbohydrate', 'source' => 'oats'],
      ['type' => 'Protein', 'source' => 'seafood'],
      ['type' => 'Carbohydrate', 'source' => 'brown rice'],
      ['type' => 'Protein', 'source' => 'Protein shakes'],
      ['type' => 'Carbohydrate', 'source' => 'Soft fruits'],
      ['type' => 'Protein', 'source' => 'Eggs']
    ];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['age'])) {
            $selectedAge = $_POST['age'];

            // Display a table based on the selected age group
            echo "<h2>Table for $selectedAge</h2>";
            echo "<table>";
            echo "<tr><th>Source</th><th>Type</th></tr>";
            
            // Choose the appropriate data array based on the selected age
            $selectedData = [];
            switch ($selectedAge) {
                case 'children':
                    $selectedData = $tableChildrensData;
                    break;
                case 'adult':
                    $selectedData = $tableAdultsData;
                    break;
                case 'elderly':
                    $selectedData = $tableElderlyData;
                    break;
                default:
                    echo "Invalid selection";
                    break;
            }

            // Render the table rows
            foreach ($selectedData as $row) {
                echo "<tr><td>{$row['source']}</td><td>{$row['type']}</td></tr>";
            }
            
            echo "</table>";
        }
    }
    ?>
          <!-- </tbody>

        

       
        </table><br/>
            <div>
            </div> -->
            <!-- <div>
              <h3>Add New Element:</h3>
              <form id="addElementForm" action="infoFitness.php" method="post">
                  <label for="sourceInput">Source:</label>
                  <input type="text" id="sourceInput" name="sourceInput" placeholder="Enter source"><br/>
                  <label for="typeInput">Type:</label>
                  <input type="text" id="typeInput" name="typeInput" placeholder="Enter type"><br/><br/>
                  <h4>Chose age to add in :  </h4>
                  <label for="info1">Children</label>
                  <input id="info1" name="info" type="radio" value="children" checked><br/>
          
                  <label for="info2">Adults</label>
                  <input id="info2" name="info" type="radio" value="adults"><br/>
          
                  <label for="info3">Elderly</label>
                  <input id="info3" name="info" type="radio" value="elderly"><br/>
          
                  <input type="submit" value="Submit">
              </form>
          </div>
          <br/> -->
          
          
          </div>

        </div>

        <!-- End of form and table -->
        <div class="big-screen-style">

       <div class="col-of-info">
        <div></div>
        <div class="col-of-info-header">Short Advices</div>
        <div></div>
        <div></div>
        <div class="col-of-info-text" > <span class="material-symbols-outlined">water_bottle_large</span> Prioritize Proper Nutrition :<br/>Fuel your body with a balanced diet to support your performance and recovery.</div>
        <div class="col-of-info-text" ><span class="material-symbols-outlined">fitness_center</span> Train Smart, Not Just Hard:<br/> Design a structured training program that aligns with your goals and periodize your workouts.

        </div>
        <div class="col-of-info-text" > <span class="material-symbols-outlined">sports_martial_arts</span> Prevent Injuries : <br/>Prioritize warm-ups, cool-downs, and incorporate strength and flexibility exercises.</div>
        <div></div>
        
      </div>

      <div style="height: 30vh  ;">
        
      </div>
    </div>

      <!-- Phone style Start -->


      <div class="phone-style">
        <div class="col-of-info">
            <!-- <div></div>
            <div class="col-of-info-header">This is the header</div>
            <div></div> -->
            <div></div>
            <div class="col-of-info-text" > <span class="material-symbols-outlined">water_bottle_large</span> Prioritize Proper Nutrition:<br/>Fuel your body with a balanced diet to support your performance and recovery.
            </div>
            <div></div>
            <div></div>
            <div class="col-of-info-text" ><span class="material-symbols-outlined">fitness_center</span>  Train Smart, Not Just Hard:<br/> Design a structured training program that aligns with your goals and periodize your workouts. </div>
            <div></div>
            <div></div>
            <div class="col-of-info-text" > <span class="material-symbols-outlined">sports_martial_arts</span> Prevent Injuries: <br/>Prioritize warm-ups, cool-downs, and incorporate strength and flexibility exercises.

            </div>
            <div></div>
            
          </div>
      </div>
       <!-- Phone style End -->

    </main>

    <!--  javascropt file link-->
    <script src="../js Files/script.js"> </script>

    <!--  javascropt file link-->

    <footer class="footer-copyrights" >
      
      <a href="/assets/HTML Files/copyRights.html"><h3 >CopyRights© Pied Piper 2023 </h3></a>
      
  </footer>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>