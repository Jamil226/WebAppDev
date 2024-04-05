<?php
include("helpers/config.php");
if(isset($_REQUEST['submit']))
{
    $FullName = mysqli_real_escape_string($conn, $_POST['fullname']);
    $Service = mysqli_real_escape_string($conn, $_POST['service']);
    $Email = mysqli_real_escape_string($conn, $_POST['email']);
    $Contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $Subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $Message = mysqli_real_escape_string($conn, $_POST['message']);

    $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
    $TokenKey = str_shuffle($TokenKey);
    $TokenKey = substr($TokenKey, 0, 32);


    $MySqlCommand = "SELECT MAX(id) FROM contactus";
    // echo $MySqlCommand; 
    // die;
    $Result = mysqli_query($conn, $MySqlCommand);
    $MaxID = mysqli_fetch_array($Result);
    $UserID = $MaxID['0'];
    $UserID = $UserID + 1; //2

    $TodayDate = date("Ymd"); 
    $Reference =  $TodayDate . "_" . str_pad($UserID, 8, "0", STR_PAD_LEFT); //20240328_000000002
    $Status = 0;
    $IP = $_SERVER['REMOTE_ADDR'];

    $Query = "INSERT INTO contactus (id, reference, name, service, contact, ".
    " email, subject, message, status, ipaddress, token) ".
    " VALUES($UserID, '$Reference', '$FullName', '$Service', '$Contact', ".
    " '$Email', '$Subject', '$Message', $Status, '$IP', '$TokenKey')";
    // echo $Query;
    // die;
    $Result = mysqli_query($conn, $Query);
    if ($Result) {
 ?>
    <script>
        alert('Thanks for Contacting. We\'ll respond you soon.');
        window.location.href='contact.php?success';
    </script>
 <?php
    } else {
 ?>
    <script>
        alert('Exception Found, Contact us using Our Email.');
        window.location.href='contact-add.php?error';
    </script>
 <?php
    }
 }

?>