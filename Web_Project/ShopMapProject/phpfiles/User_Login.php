<?php

include './DB.php';



$emailz = $_POST["uname"];
$passwordz = $_POST["passwordz"];

$sqlz = "SELECT * FROM userdetails where email='$emailz' and passwrod='$passwordz'";
$result = $conn->query($sqlz);

if ($result->num_rows > 0) {

    if ($row = $result->fetch_assoc()) {



        session_start();
        $buyerid = $row["id"];
        $shopname = $row["shopname"];
        $buyeremail = $row["email"];
        $buyercity = $row["city"];
        $pwz = $row["passwrod"];

        $_SESSION["user_id"] = $buyerid;
        $_SESSION["shopname"] = $shopname;
        $_SESSION["emailz"] = $buyeremail;
        $_SESSION["city"] = $buyercity;
        $_SESSION["passz"] = $pwz;

        if ($buyeremail == "Admin") {
            echo 'adminz';
        } else {

            echo 'Buyer';
        }
    }
} else {

    echo "Invalid";
}
