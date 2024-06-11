<?php

include './DB.php';
                                                            


$name = $_POST["name"];
$emailz = $_POST["emmailz"];
$contcat_number = $_POST["contact"];
$city = $_POST["cityz"];
$addreds = $_POST["shoptype"];
$pwz = $_POST["pw1"];
$statz = "Active";

$sqlz = "SELECT * FROM userdetails where email='$emailz'";
$result = $conn->query($sqlz);

$echdata = "";

if ($result->num_rows > 0) {
    echo "Already";
} else {



    $sql = "INSERT INTO `userdetails`
            (`shopname`,
             `email`,
             `contatcatz`,
             `city`,
             `addressz`,
             `passwrod`,
             `statusz`)
VALUES ('$name',
        '$emailz',
        '$contcat_number',
        '$city',
        '$addreds',
        '$pwz',
        '$statz');";

    //seller buyer rating table dekata data save wenna one


    if ($conn->query($sql) === TRUE) {
        $echdata = "ok";
        echo $echdata;
    } else {
        echo $echdata;
    }

    $conn->close();
}