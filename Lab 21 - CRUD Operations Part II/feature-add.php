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
<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Add Feature ::  <?php echo SiteTitle;?></title>
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
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
	rel="stylesheet">
	<link href="css/admin.min.css" rel="stylesheet">
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body id="page-top">
	<div id="wrapper">
		<?php include('include/leftbar.php'); ?>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php include('include/header.php'); ?><br>
				<div class="container-fluid">
					<div class="card shadow mb-4">
						<div class="card-header py-3">
                            <a href="features.php"><button class="btn btn-danger">Features List</button></a></a>
						</div>
                        <div class="card-body">
                            <form method="post" action="feature-add-script.php" enctype="multipart/form-data">
                                <div class="form-floating mb-3">
                                    <label for="title">Title</label>
                                    <input class="form-control" id="title" type="text" placeholder="Enter Title" name="title"/>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="service">Service Name</label>
                                    <br>
                                    <select class="form-select form-select-lg p-2" id="service" name="service">
                                        <option>-- Select Relevent Service --</option>
                                        <?php
                                            $Query = "SELECT * FROM services WHERE status = 1";
                                            $Result = mysqli_query($conn, $Query);
                                            if ($Result->num_rows > 0) {
                                                while($row = mysqli_fetch_array($Result))
                                                {
                                        ?>    
                                            <option value="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></option>
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
                                    <textarea class="form-control" id="shortdescription" type="text" placeholder="Enter Short Description" name="shortdescription"></textarea>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="longdescription">Long Description</label>
                                    <textarea class="form-control" id="longdescription" type="text" placeholder="Enter Long Description" name="longdescription" style="height:100px"></textarea>
                                </div>
                                <div class="form-floating mb-3">
                                    <label for="image">Image</label>
                                    <input class="form-control" id="image" type="file" accept=".png, .jpg, .jpeg" name="featureimage"/>
                                </div>
                                <div class="mt-4 mb-0">
                                    <div class="d-grid">
                                    <input class="btn btn-danger btn-block" type="submit" value="Add Feature" name="BtnSubmit">
                                </div>
                            </form>
                        </div>	
					</div>
				</div>
			</div>
		</div>
<?php include('include/footer.php'); ?>
</body>
</html>