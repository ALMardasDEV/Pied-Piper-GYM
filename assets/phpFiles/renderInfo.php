<?php  
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from HTML form
    $sourceInput = $_POST["sourceInput"];
    $typeInput = $_POST["typeInput"];
    $info  = $_POST["info"]; 

echo "This is $sourceInput";
echo "This is $typeInput";

//     // Determine the appropriate table to add the new data
//     $newData = ['type' => $type, 'source' => $source];
//     if ($selectedValue === 'children') {
//         array_push($tableChildrensData, $newData);
//     } elseif ($selectedValue === 'adults') {
//         array_push($tableAdultsData, $newData);
//     } elseif ($selectedValue === 'elderly') {
//         array_push($tableElderlyData, $newData);
//     }
// }


?>