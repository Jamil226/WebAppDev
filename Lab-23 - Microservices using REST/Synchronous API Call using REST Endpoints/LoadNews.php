<?php

    require("helpers/database-helper.php");

    $Query = "SELECT newstitle AS 'NewsTitle', newsdesc AS 'NewsDetails', ".
    " newspostby AS 'PostedBy', newsdate AS 'NewsDate', image AS 'ImagePath' ".
    " FROM university_news WHERE newsstatus = 1";
    // echo $Query;
    // die;

    $Result = mysqli_query($conn, $Query);
    if (mysqli_num_rows($Result) > 0) {
        while ($row = $Result->fetch_assoc()) {
            $response['news'][] = $row;
            $response['status'] = "200";
        }
    } else {
        $response['status'] = "400";
        $response['news'] = (object)[];
    }
    echo json_encode($response);
?>