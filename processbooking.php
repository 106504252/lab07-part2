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


if (isset ($_POST["firstname"])) {
    $firstname = $_POST["firstname"];
    $err_msg = "";
    if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
        $err_msg .=
        "<p>Error: Only letters and space allowed.</p>";
    }
    echo "Welcome $firstname ";
}
else
    echo "Error: Please Enter data";
    
if (isset ($_POST["lastname"])) {
    $lastname = $_POST["lastname"];
    $err_msg = "";
    if (!preg_match("/^[a-zA-Z]*$/",$firstname)) {
        $err_msg .=
        "<p>Error: Only letters and space allowed.</p>";
    }
    echo "$lastname !";
}
else
    echo "Error: Please Enter data";

if (isset ($_POST["4day"]))
    $fourday = $_POST["4day"];
    echo "<p>You are now booked on the $fourday tour </p> ";

if (isset ($_POST["10day"]))
    $tenday = $_POST["10day"];
    echo "and $tenday tour";

if (isset ($_POST["species"]))
    $species = $_POST["species"];
    echo "<p>Species: $species</p>";

if (isset ($_POST["age"]))
    $age = $_POST["age"];
    echo "<p>Age: $age</p>";   

if (isset ($_POST["food"]))
    $food = $_POST["food"];
    echo "<p>Meal Preference: $food</p>";

if (isset ($_POST["bookday"]))
    $bookday = $_POST["bookday"];
    echo "<p>Date: $bookday</p>";

if (isset ($_POST["partysize"]))
    $partysize = $_POST["partysize"];
    echo "<p>Number of travellers: $partysize</p>";

?>
</body>
</html>