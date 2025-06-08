<?php include("include/config.php"); ?>
<?php include("include/session.php"); ?>
<?php include("include/variables.php"); ?>
<!--
************************************************************************************************
                        Hackers Third Eye 
                        Development Date : 14-03-2024
                        Page Updated on  : 11-04-2024
************************************************************************************************
-->
<?php
    $ID = $_GET['id'];
    // echo $ID;
    // die;
    $SqlCommand = "DELETE FROM features WHERE token = '$ID' ";
    // echo $SqlCommand;
    // die;
    $result = mysqli_query($conn, $SqlCommand);
    if($result)
    {
    ?>
        <script>
            alert("Team Member Record Successfully Deleted");
            window.location.href= "features.php";
        </script>
    <?php 
    }
    else
    {
    ?>
        <script>
            alert("Failed");
            window.location.href= "features.php?failed";
        </script>
    <?php 
    }
    		
?>