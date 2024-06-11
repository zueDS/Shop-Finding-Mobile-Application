<?php

include './DB.php';

session_start();


$shopnamez = $_SESSION["shopname"];
$selleremail = $_SESSION["emailz"];

$lat = $_POST["p3"];
$longz = $_POST["p4"];


$sql = "update userdetails set latitute='$lat',longtute='$longz' where email='$selleremail'";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

