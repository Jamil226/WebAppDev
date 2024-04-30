<?php include("include/config.php"); ?>
<?php include("include/session.php"); ?>
<?php include("include/variables.php"); ?>

<?php
    $id = $_GET['id'];
    if (isset($_POST['BtnSubmit'])) {
        $Title = mysqli_real_escape_string($conn, $_POST['title']);
		$Service = mysqli_real_escape_string($conn, $_POST['service']);
		$ShortDesc = mysqli_real_escape_string($conn, $_POST['shortdesc']);
		$LongDesc = mysqli_real_escape_string($conn, $_POST['longdesc']);

        $UpdateQuery = "UPDATE features SET title = '$Title', service = '$Service', ".
        "shortdescription = '$ShortDesc', longdescription = '$LongDesc' ".
        " WHERE token = '$id'";
        // echo $UpdateQuery; die;
        $Result = mysqli_query($conn, $UpdateQuery);
        if($Result) {
?>
        <script>
            alert("Successfully Updated");
            window.location.href= "features.php";
        </script>
<?php 
        } 
        else {
            die("Updation Failed");
        }
    }
?>
<!--
************************************************************************************************
                        Hackers Third Eye 
                        Development Date : 14-03-2024
                        Page Updated on  : 11-04-2024
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Feature ::  <?php echo SiteTitle;?></title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="<?php echo Keywords;?>">
    <meta name="description" content="<?php echo SiteDescription;?>">
    <meta name="author" content="<?php echo DevelopedBy;?>">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">
    <link href="css/admin.min.css" rel="stylesheet">
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <?php include('include/leftbar.php'); ?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
               <?php include('include/header.php'); ?>
               <div class="container-fluid"><br>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold d-sm-inline-block text-danger">Update Feature</h6>
                        <a href="features.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right"><i
                            class="fas fa-plus fa-sm text-white-50"></i>Fearures List</a>
                        </div>
                        <div class="card-body">
                        <?php
                            $Query = "SELECT * FROM features WHERE token = '$id' ";
                            // echo $Query; die;
                            $Result = mysqli_query($conn, $Query);
                            if (mysqli_num_rows($Result) > 0) {
                            $row = mysqli_fetch_assoc($Result);
                        ?>
                         <div class="row">
                            <div class="col-lg-12">
                                <div class="p-0">
                                     <form class="user" method="post">
                                        <div class="form-floating mb-3">
                                            <label for="title">Title</label>
                                            <input class="form-control" id="title" type="text" placeholder="Enter Title" value="<?=$row['title']?>" name="title"/>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <label for="service">Service Name</label>
                                            <br>
                                            <select class="form-select form-select-lg p-2" id="service" name="service">
                                                <option><?php echo $row['service']?></option>
                                                <?php
                                                    $QueryServices = "SELECT * FROM services WHERE status = 1";
                                                    $ResultServices = mysqli_query($conn, $QueryServices);
                                                    if ($ResultServices->num_rows > 0) {
                                                        while($rowService = mysqli_fetch_array($ResultServices))
                                                        {
                                                ?>    
                                                    <option value="<?php echo $rowService['title']; ?>"><?php echo $rowService['title']; ?></option>
                                                    <?php
                                                    }
                                                }
                                                else
                                                {
                                                    echo "No Service Found";
                                                }
                                            ?>	
                                            </select>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <label for="shortdescription">Short Description</label>
                                            <input class="form-control" id="shortdescription" type="text" placeholder="Enter Short Description" value="<?php echo $row['shortdescription']?>" name="shortdesc"/>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <label for="longdescription">Long Description</label>
                                            <input class="form-control" id="longdescription" type="text" placeholder="Enter Long Description" value="<?php echo $row['longdescription']?>" name="longdesc"/>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <br>
                                            <img src="../<?php echo $row['image']?>" height="80px" width="80px" style="border:5px solid #281670">
                                            <input type="hidden" name="TxtImagePath" <?php echo $row['image']?>/>
                                        </div>
                                        <div class="form-group">
                                        <input type="submit" name="BtnSubmit" class="btn btn-danger btn-user btn-block" value="Update Feature">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    <?php include('include/footer.php'); ?>
</body>
</html>