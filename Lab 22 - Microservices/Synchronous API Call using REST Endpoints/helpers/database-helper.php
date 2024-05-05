<?php

    $SERVER_NAME = "localhost";
    $USER_NAME = "root";
    $PASSWORD = "";
    $DATABASE_NAME = "fa21bcs6cd";

    $conn = mysqli_connect($SERVER_NAME, $USER_NAME, $PASSWORD, $DATABASE_NAME);

    if($conn){
        // echo "Connected Successfully";
    } else {
        echo "Exception: " . mysqli_connect_error();
    }

?>