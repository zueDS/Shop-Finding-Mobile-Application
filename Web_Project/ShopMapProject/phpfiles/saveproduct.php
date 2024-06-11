<?php

include './DB.php';

session_start();


$shopnamez = $_SESSION["shopname"];
$selleremail = $_SESSION["emailz"];

$upload_path = 'biddingitems/';
$proname = $_POST["p1"];
$proprice = $_POST["p2"];
$propricez = $_POST["p3"];
$date = new DateTime("now", new DateTimeZone('Asia/Kolkata'));
$todaydate = $date->format('Y-m-d');
$todaytime = $date->format('H:i:s');
$prostatus = "Active";
$fileekepatheka = $_POST["p4"];

$sql = "insert into `productdetails`
            (
             `pronamez`,
             `proprice`,
             `descz`,
             `proimgurl`,
             `selleremailz`,
             `shopnamez`,
             `statusz`,
             `datez`,
             `timez`)
values (
        '$proname',
        '$proprice',
        '$propricez',
        '$fileekepatheka',
        '$selleremail',
        '$shopnamez',
        '$prostatus',
        '$todaydate',
        '$todaytime');";
if ($conn->query($sql) === TRUE) {

    echo "ok";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



