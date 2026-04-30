<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = clean_input($_POST["firstname"]);
    $lastname = clean_input($_POST["lastname"]);
    $accom = clean_input($_POST["Accomodation"]);
    $fourday = clean_input($_POST["fourday"]);
    $tenday = clean_input($_POST["tenday"]);
    $species = clean_input($_POST["species"]);
    $food = clean_input($_POST["food"]);
    $bookday = clean_input($_POST["bookday"]);
    $partysize = clean_input($_POST["partysize"]);
    
    if (empty($firstname)) {
      echo "First Name is required.<br>";
    }
    if (empty($lastname)) {
      echo "Last Name is required.<br>";
    }
    if (empty($species)) {
      echo "Species is required.<br>";
    }
    if (empty($food)) {
      echo "Menu preference is required.<br>";
    }
     if (empty($bookday)) {
      echo "Date is required.<br>";
    }
    if (empty($partysize)) {
      echo "Party Size is required.<br>";
    }
}

if (isset ($_POST["firstname"])) {
    $firstname = $_POST["firstname"];
    $err_msg = "";
    if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
        $err_msg .=
        "<p>Error: Only letters and space allowed.</p>";
    }
    echo "Welcome $firstname ";
}
else {
    echo "Error: Please Enter data";
}   
if (isset ($_POST["lastname"])) {
    $lastname = $_POST["lastname"];
    $err_msg = "";
    if (!preg_match("/^[a-zA-Z]*$/",$lastname)) {
       echo "<p>Error: Only letters and space allowed.</p>";
    }
    echo "$lastname !";
}
else {
    echo "Error: Please Enter data";
}
if (isset($_POST["fourday"])) {
    $fourday = $_POST["fourday"];
    echo "<p>You are now booked on the $fourday tour </p> ";
}
else {
    echo "";
}

if (isset($_POST["tenday"])) {
    $tenday = $_POST["tenday"];
    echo "and $tenday tour";
} 
else {
    echo "";
}

if (isset($_POST["species"])) {
    $species = $_POST["species"];
    echo "<p>Species: $species</p>";
} 
else {
    echo "Error: Please Enter data";
}

if (isset($_POST["age"])) {
    $age = $_POST["age"];
    echo "<p>Age: $age</p>";   
} 
else {
    echo "Error: Please Enter data";
}

if (isset($_POST["food"])) {
    $food = $_POST["food"];
    echo "<p>Meal Preference: $food</p>";
} 
else {
    echo "Error: Please Enter data";
}

if (isset($_POST["bookday"])) {
    $bookday = $_POST["bookday"];
    echo "<p>Date: $bookday</p>";
} 
else {
    echo "Error: Please Enter data";
}

if (isset($_POST["partysize"])) {
    $partysize = $_POST["partysize"];
    echo "<p>Number of travellers: $partysize</p>";
} 
else {
    echo "Error: Please Enter data";
}

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
</body>
</html>