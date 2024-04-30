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
	<title>Features ::  <?php echo SiteTitle;?></title>
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
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="css/admin.min.css" rel="stylesheet">
	<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<style>
		.page-item.active .page-link {
			z-index: 3;
			color: #fff;
			background-color: #ff0000;
			border-color: #ff0000;
		}
	</style>
</head>
<body id="page-top">
	<div id="wrapper">
		<?php include('include/leftbar.php');?>
		<div id="content-wrapper" class="d-flex flex-column">
			<div id="content">
				<?php include('include/header.php'); ?>
				<div class="container-fluid"><br>
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-danger"><a class="text-danger" href="index.php">Home</a> | Features List</h6>
							<a href="feature-add.php" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm float-right"><i
                            class="fas fa-plus fa-sm text-white-50"></i>Add New Feature</a>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Page Name</th>
										<th>Short Description</th>
										<th>Long Description</th>
										<th>Image</th>
										<th width="160px">Actions</th>
									</tr>
								</thead>
								<tbody>
							<?php
								$query = "SELECT * FROM features";
								$result = mysqli_query($conn, $query);
								if ($result->num_rows > 0) {            
									while($row = mysqli_fetch_array($result))
									{
							?>    
										<tr>
											<td><?php echo $row['id']; ?></td>
											<td><?php echo $row['title']; ?></td>
											<td><?php echo $row['service']; ?></td>
											<td>
                                                <?php $Intro = $row['shortdescription'];
                                                    if(strlen($Intro)>50){
                                                        $newIntro = substr($Intro, 0, 50) . ' ...';
                                                    } else {
														$newIntro = $row['shortdescription'];
													}
													echo $newIntro;
                                                ?>
                                            </td>
                                            <td>
                                                <?php $Intro = $row['longdescription'];
                                                    if(strlen($Intro)>50) {
                                                        $newIntro = substr($Intro, 0, 50) . ' ...';
                                                    } else {
														$newIntro = $row['longdescription'];
													}
													echo $newIntro;
                                                ?>
                                            </td>
											<td align="center"><img src="../<?php echo $row['image'];?>" height="40px" width="40px"</td>
											<td>
                                                <a href="feature-edit.php?id=<?php echo $row['token'];?>"><button class="btn btn-success">Edit</button></a>
                                                <a href="feature-delete.php?id=<?php echo $row['token'];?>" onClick="return confirm('Are you sure you want to Delete this Record')"; title="Delete"><button class="btn btn-danger">Delete</button></a>
                                            </td>
									    </tr>
                                    <?php
											}
										}
										else
										{
											echo "No Result Found";
										}
									?>	
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php include('include/footer.php'); ?>
</body>
</html>