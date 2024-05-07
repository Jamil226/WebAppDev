<!--
************************************************************************************************
                        Hackers Third Eye 
                        Development Date : 14-03-2024
                        Page Updated on  : 11-04-2024
************************************************************************************************
-->
<?php
include("include/config.php");
if(isset($_REQUEST['BtnSubmit']))
{
   $Title = mysqli_real_escape_string($conn, $_POST['title']);
   $Service = mysqli_real_escape_string($conn, $_POST['service']);
   $ShortDesc = mysqli_real_escape_string($conn, $_POST['shortdescription']);
   $LongDesc = mysqli_real_escape_string($conn, $_POST['longdescription']);

   $FileInfo = PATHINFO($_FILES["featureimage"]["name"]);
   $NewFileName = $FileInfo['filename'] . "_" . time() . "." . $FileInfo['extension'];
   move_uploaded_file($_FILES["featureimage"]["tmp_name"], "../images/" . $NewFileName);
   $ImagePath = "images/" . $NewFileName;

   $TokenKey = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!*()$";
   $TokenKey = str_shuffle($TokenKey);
   $TokenKey = $TokenKey . time();
   $TokenKey = substr($TokenKey, 0, 32);
   
   $MySqlCommand = "SELECT MAX(id) FROM features";
   $Result = mysqli_query($conn, $MySqlCommand);
   $MaxID = mysqli_fetch_array($Result);
   $ID = $MaxID['0'];
   $ID = $ID + 1;

   $TodayDate = date("Ymd");
   $Reference =  $TodayDate . "_" . str_pad($ID, 6, "0", STR_PAD_LEFT);

   $Status = 1;

   $Query = "INSERT INTO features(id, reference, title, service, ".
   " shortdescription, longdescription, image, status, token) ".
   " VALUES($ID, '$Reference', '$Title', '$Service', ".
   " '$ShortDesc', '$LongDesc', '$ImagePath', $Status, '$TokenKey')";
   // echo $Query; die;
   $Result = mysqli_query($conn, $Query);
   if ($Result) {
?>
   <script>
       alert('Record Added Successfully');
       window.location.href='feature-add.php?success';
   </script>
<?php
   } else {
?>
   <script>
       alert('Exception Found While Adding Record');
       window.location.href='feature-add.php?error';
   </script>
<?php
   }
}

?>