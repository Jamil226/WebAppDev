<?php 
include("libraries/session.php");
include("libraries/database-helper.php");
include("libraries/variables.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<title>Admin Home | LL Ride</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="assets/images/favicon/site.webmanifest">
		<link rel="stylesheet" href="assets/fonts/icomoon/style.css" />
		<link rel="stylesheet" href="assets/css/main.min.css" />
		<link rel="stylesheet" href="assets/vendor/overlay-scroll/OverlayScrollbars.min.css" />
	</head>
	<body>
		<!-- Page wrapper start -->
		<div class="page-wrapper">

			<!-- Main container start -->
			<div class="main-container">

				<!-- Sidebar wrapper start -->
				<nav id="sidebar" class="sidebar-wrapper">

					<!-- App brand starts -->
					<div class="app-brand px-3 py-2 d-flex align-items-center">
						<a href="index.html">
							<img src="assets/images/logo.svg" class="logo" alt="Bootstrap Gallery" />
						</a>
					</div>
					<!-- App brand ends -->

					<!-- Sidebar menu starts -->
					<div class="sidebarMenuScroll">
						<ul class="sidebar-menu">
							<li class="active current-page">
								<a href="index.html">
									<i class="icon-stacked_line_chart"></i>
									<span class="menu-text">Support Dashboard</span>
								</a>
							</li>
							<li>
								<a href="reports.html">
									<i class="icon-bar-chart"></i>
									<span class="menu-text">Reports</span>
								</a>
							</li>
							<li>
								<a href="clients.html">
									<i class="icon-filter_list"></i>
									<span class="menu-text">Clients</span>
								</a>
							</li>
							<li>
								<a href="agents.html">
									<i class="icon-sentiment_satisfied_alt"></i>
									<span class="menu-text">Agents</span>
								</a>
							</li>
							<li>
								<a href="faq.html">
									<i class="icon-message-circle"></i>
									<span class="menu-text">FAQ's</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-add_task"></i>
									<span class="menu-text">Tickets</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="all-tickets.html">All Tickets</a>
									</li>
									<li>
										<a href="open-tickets.html">Open Tickets</a>
									</li>
									<li>
										<a href="pending-tickets.html">Pending Tickets</a>
									</li>
									<li>
										<a href="closed-tickets.html">Closed Tickets</a>
									</li>
									<li>
										<a href="solved-tickets.html">Solved Tickets</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="agent-profile.html">
									<i class="icon-support_agent"></i>
									<span class="menu-text">Agent Profile</span>
								</a>
							</li>
							<li>
								<a href="notifications.html">
									<i class="icon-bell"></i>
									<span class="menu-text">Notifications</span>
								</a>
							</li>
							<li>
								<a href="subscribers.html">
									<i class="icon-check-circle"></i>
									<span class="menu-text">Subscribers</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-book-open"></i>
									<span class="menu-text">Invoices</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="client-list.html">Client List</a>
									</li>
									<li>
										<a href="invoice-list.html">Invoice List</a>
									</li>
									<li>
										<a href="invoice.html">Invoice Details</a>
									</li>
									<li>
										<a href="create-invoice.html">Create Invoice</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="datatables.html">
									<i class="icon-grid_on"></i>
									<span class="menu-text">DataTables</span>
								</a>
							</li>
							<li>
								<a href="editor.html">
									<i class="icon-edit"></i>
									<span class="menu-text">Editor</span>
								</a>
							</li>
							<li>
								<a href="placeholder.html">
									<i class="icon-align-left"></i>
									<span class="menu-text">Placeholder</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-calendar"></i>
									<span class="menu-text">Calendars</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="calendar.html">Daygrid View</a>
									</li>
									<li>
										<a href="calendar-external-draggable.html">External Draggable</a>
									</li>
									<li>
										<a href="calendar-google.html">Google Calendar</a>
									</li>
									<li>
										<a href="calendar-list-view.html">List View</a>
									</li>
									<li>
										<a href="calendar-selectable.html">Selectable</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-layers"></i>
									<span class="menu-text">UI Elements</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="accordions.html">Accordions</a>
									</li>
									<li>
										<a href="alerts.html">Alerts</a>
									</li>
									<li>
										<a href="buttons.html">Buttons</a>
									</li>
									<li>
										<a href="badges.html">Badges</a>
									</li>
									<li>
										<a href="cards.html">Cards</a>
									</li>
									<li>
										<a href="custom-cards.html">Custom Cards</a>
									</li>
									<li>
										<a href="carousel.html">Carousel</a>
									</li>
									<li>
										<a href="icons.html">Icons</a>
									</li>
									<li>
										<a href="list-items.html">List Items</a>
									</li>
									<li>
										<a href="modals.html">Modals</a>
									</li>
									<li>
										<a href="progress.html">Progress Bars</a>
									</li>
									<li>
										<a href="popovers.html">Popovers</a>
									</li>
									<li>
										<a href="tabs.html">Tabs</a>
									</li>
									<li>
										<a href="tooltips.html">Tooltips</a>
									</li>
									<li>
										<a href="typography.html">Typography</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-layout"></i>
									<span class="menu-text">Forms</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="form-inputs.html">Basic Form Inputs</a>
									</li>
									<li>
										<a href="form-checkbox-radio.html">Checkbox &amp; Radio</a>
									</li>
									<li>
										<a href="form-file-input.html">File Input</a>
									</li>
									<li>
										<a href="form-validations.html">Validations</a>
									</li>
									<li>
										<a href="date-time-pickers.html">Date Time Pickers</a>
									</li>
									<li>
										<a href="form-layouts.html">Form Layouts</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="starter-page.html">
									<i class="icon-padding"></i>
									<span class="menu-text">Starter Page</span>
								</a>
							</li>
							<li>
								<a href="tables.html">
									<i class="icon-grid"></i>
									<span class="menu-text">Tables</span>
								</a>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-map"></i>
									<span class="menu-text">Graphs & Maps</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="apex.html">Apex</a>
									</li>
									<li>
										<a href="morris.html">Morris</a>
									</li>
									<li>
										<a href="maps.html">Maps</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-lock"></i>
									<span class="menu-text">Authentication</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="login.html">Login</a>
									</li>
									<li>
										<a href="signup.html">Signup</a>
									</li>
									<li>
										<a href="forgot-password.html">Forgot Password</a>
									</li>
									<li>
										<a href="page-not-found.html">Page Not Found</a>
									</li>
									<li>
										<a href="maintenance.html">Maintenance</a>
									</li>
								</ul>
							</li>
							<li class="treeview">
								<a href="#!">
									<i class="icon-notes"></i>
									<span class="menu-text">Multi Level</span>
								</a>
								<ul class="treeview-menu">
									<li>
										<a href="#!">Level One Link</a>
									</li>
									<li>
										<a href="#!">
											Level One Menu
											<i class="icon-arrow_forward_ios"></i>
										</a>
										<ul class="treeview-menu">
											<li>
												<a href="#!">Level Two Link</a>
											</li>
											<li>
												<a href="#!">Level Two Menu
													<i class="icon-arrow_forward_ios"></i>
												</a>
												<ul class="treeview-menu">
													<li>
														<a href="#!">Level Three Link</a>
													</li>
													<li>
														<a href="#!">Level Three Link</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#!">Level One Link</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<!-- Sidebar menu ends -->

				</nav>
				<!-- Sidebar wrapper end -->

				<!-- App container starts -->
				<div class="app-container">

					<!-- App header starts -->
					<div class="app-header d-flex align-items-center">

						<!-- Toggle buttons start -->
						<div class="d-flex">
							<button class="btn btn-outline-light toggle-sidebar" id="toggle-sidebar">
								<i class="icon-menu"></i>
							</button>
							<button class="btn btn-outline-light pin-sidebar" id="pin-sidebar">
								<i class="icon-menu"></i>
							</button>
						</div>
						<!-- Toggle buttons end -->

						<!-- Search container start -->
						<div class="search-container d-sm-block d-none mx-3">
							<input type="text" class="form-control" placeholder="Search" />
							<i class="icon-search"></i>
						</div>
						<!-- Search container end -->

						<!-- App header actions start -->
						<div class="header-actions">
							<div class="dropdown">
								<a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<img src="assets/images/flags/1x1/gb.svg" class="flag-img" alt="Great Britain" />
								</a>
								<div class="dropdown-menu dropdown-menu-end shadow-sm dropdown-menu-mini">
									<div class="country-container">
										<a href="index.html" class="py-2">
											<img src="assets/images/flags/1x1/us.svg" alt="USA" />
										</a>
										<a href="index.html" class="py-2">
											<img src="assets/images/flags/1x1/in.svg" alt="India" />
										</a>
										<a href="index.html" class="py-2">
											<img src="assets/images/flags/1x1/br.svg" alt="Brazil" />
										</a>
										<a href="index.html" class="py-2">
											<img src="assets/images/flags/1x1/tr.svg" alt="Turkey" />
										</a>
										<a href="index.html" class="py-2">
											<img src="assets/images/flags/1x1/id.svg" alt="Indonesia" />
										</a>
									</div>
								</div>
							</div>
							<div class="dropdown">
								<a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="icon-mail fs-4 lh-1"></i>
									<span class="count rounded-circle bg-danger">9</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
									<h5 class="fw-semibold px-3 py-2 m-0">Messages</h5>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<div class="p-3 bg-danger rounded-circle me-3">MS</div>
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Moory Sammy</h6>
												<p class="mb-1">Sent a mail.</p>
												<p class="small m-0 opacity-50">3 Mins Ago</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<div class="p-3 bg-primary rounded-circle me-3">KY</div>
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Kyle Yomaha</h6>
												<p class="mb-1">Need support.</p>
												<p class="small m-0 opacity-50">5 Mins Ago</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<div class="p-3 bg-success rounded-circle me-3">SB</div>
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Srinu Basava</h6>
												<p class="mb-1">Purchased a NotePad.</p>
												<p class="small m-0 opacity-50">7 Mins Ago</p>
											</div>
										</div>
									</a>
									<div class="d-grid p-3 border-top">
										<a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
									</div>
								</div>
							</div>
							<div class="dropdown">
								<a class="dropdown-toggle d-flex p-3 position-relative" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<i class="icon-twitch fs-4 lh-1"></i>
									<span class="count rounded-circle bg-danger">5</span>
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-md shadow-sm">
									<h5 class="fw-semibold px-3 py-2 m-0">Notifications</h5>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<img src="assets/images/user.png" class="img-3x me-3 rounded-3" alt="Admin Themes" />
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
												<p class="mb-1">Membership has been ended.</p>
												<p class="small m-0 opacity-50">Today, 07:30pm</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<img src="assets/images/user2.png" class="img-3x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
												<p class="mb-1">Congratulate, James for new job.</p>
												<p class="small m-0 opacity-50">Today, 08:00pm</p>
											</div>
										</div>
									</a>
									<a href="javascript:void(0)" class="dropdown-item">
										<div class="d-flex align-items-start py-2">
											<img src="assets/images/user1.png" class="img-3x me-3 rounded-3" alt="Admin Theme" />
											<div class="m-0">
												<h6 class="mb-1 fw-semibold">Sophie Michiels</h6>
												<p class="mb-1">Lewis added new schedule release.</p>
												<p class="small m-0 opacity-50">Today, 09:30pm</p>
											</div>
										</div>
									</a>
									<div class="d-grid p-3 border-top">
										<a href="javascript:void(0)" class="btn btn-outline-primary">View all</a>
									</div>
								</div>
							</div>
							<div class="dropdown ms-2">
								<a class="dropdown-toggle d-flex align-items-center user-settings" href="#!" role="button"
									data-bs-toggle="dropdown" aria-expanded="false">
									<span>Neil Mark</span>
									<img src="assets/images/user3.png" class="img-3x m-2 me-0 rounded-3" alt="Bootstrap Gallery" />
								</a>
								<div class="dropdown-menu dropdown-menu-end dropdown-menu-sm shadow-sm gap-3">
									<a class="dropdown-item d-flex align-items-center py-2" href="profile.html"><i
											class="icon-gitlab fs-4 me-3"></i>User Profile</a>
									<a class="dropdown-item d-flex align-items-center py-2" href="account-settings.html"><i
											class="icon-settings fs-4 me-3"></i>Account Settings</a>
									<a class="dropdown-item d-flex align-items-center py-2" href="login.html"><i
											class="icon-log-out fs-4 me-3"></i>Logout</a>
								</div>
							</div>
						</div>
						<!-- App header actions end -->
					</div>
					<!-- App header ends -->
					<!-- App body starts -->
					<div class="app-body">
						<!-- Container starts -->
						<div class="container-fluid">
							<!-- Row start -->
							<div class="row">
								<div class="col-xl-6 col-12">
									<!-- Row start -->
									<div class="row">
										<div class="col-12">
											<div class="card mb-4">
												<div class="card-header">
													<h5 class="card-title">Tickets</h5>
												</div>
												<div class="card-body">
													<div id="ticketsData"></div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="card mb-4">
												<div class="card-header">
													<h5 class="card-title">Today's Tickets</h5>
												</div>
												<div class="card-body">
													<div class="d-flex justify-content-between mb-2">
														<span>Completed</span>
														<span class="fw-bold">75%</span>
													</div>
													<div class="progress small">
														<div class="progress-bar bg-success" role="progressbar" style="width: 75%"
															aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-6 col-12">
											<div class="card mb-4">
												<div class="card-header">
													<h5 class="card-title">New Tickets</h5>
												</div>
												<div class="card-body">
													<div class="d-flex justify-content-between mb-2">
														<span>Assigned</span>
														<span class="fw-bold">5</span>
													</div>
													<div class="progress small">
														<div class="progress-bar bg-danger" role="progressbar" style="width: 50%" aria-valuenow="50"
															aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!-- Row end -->
								</div>
								<div class="col-xl-6 col-12">
									<div class="row">
										<div class="col-sm-4 col-6">
											<div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
												<div class="position-relative shape-block">
													<img src="assets/images/shape1.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
													<i class="icon-book-open"></i>
												</div>
												<div class="ms-2">
													<h3 class="m-0 fw-semibold">27</h3>
													<h6 class="m-0 fw-light">Active</h6>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
												<div class="position-relative shape-block">
													<img src="assets/images/shape2.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
													<i class="icon-check-circle"></i>
												</div>
												<div class="ms-2">
													<h3 class="m-0 fw-semibold">18</h3>
													<h6 class="m-0 fw-light">Solved</h6>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
												<div class="position-relative shape-block">
													<img src="assets/images/shape3.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
													<i class="icon-x-circle"></i>
												</div>
												<div class="ms-2">
													<h3 class="m-0 fw-semibold">12</h3>
													<h6 class="m-0 fw-light">Closed</h6>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
												<div class="position-relative shape-block">
													<img src="assets/images/shape4.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
													<i class="icon-add_task"></i>
												</div>
												<div class="ms-2">
													<h3 class="m-0 fw-semibold">3</h3>
													<h6 class="m-0 fw-light">Open</h6>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
												<div class="position-relative shape-block">
													<img src="assets/images/shape5.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
													<i class="icon-alert-triangle"></i>
												</div>
												<div class="ms-2">
													<h3 class="m-0 fw-semibold">5</h3>
													<h6 class="m-0 fw-light">Critical</h6>
												</div>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="card px-3 py-2 mb-4 d-flex flex-row align-items-center">
												<div class="position-relative shape-block">
													<img src="assets/images/shape6.png" class="img-fluid img-4x" alt="Bootstrap Themes" />
													<i class="icon-access_time"></i>
												</div>
												<div class="ms-2">
													<h3 class="m-0 fw-semibold">7</h3>
													<h6 class="m-0 fw-light">High</h6>
												</div>
											</div>
										</div>
										<div class="col-12">
											<div class="card mb-4">
												<div class="card-header">
													<h5 class="card-title">Avg. Response Time</h5>
												</div>
												<div class="card-body">
													<div id="avgTimeData"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row end -->

							<!-- Row start -->
							<div class="row">
								<div class="col-xl-4 col-md-6 col-sm-12 col-12">
									<div class="card mb-4">
										<div class="card-header">
											<h5 class="card-title">Live Calls</h5>
										</div>
										<div class="card-body">
											<div id="liveCallsData"></div>

											<div class="d-flex justify-content-center gap-4 my-4">
												<div class="d-flex align-items-center">
													<i class="icon-phone-incoming fs-3 me-3"></i> Incoming
													<span class="badge rounded-pill bg-info ms-2">15</span>
												</div>
												<div class="d-flex align-items-center">
													<i class="icon-phone-outgoing fs-3 me-3"></i> Outgoing
													<span class="badge rounded-pill bg-dark ms-2">18</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-md-6 col-sm-12 col-12">
									<div class="card mb-4">
										<div class="card-header">
											<h5 class="card-title">Agents Online</h5>
										</div>
										<div class="card-body">
											<div id="agentsLiveData"></div>

											<div class="d-flex justify-content-center gap-4 my-4">
												<div class="d-flex align-items-center">
													Busy
													<span class="badge rounded-pill bg-info ms-2">15</span>
												</div>
												<div class="d-flex align-items-center">
													Online
													<span class="badge rounded-pill bg-dark ms-2">18</span>
												</div>
												<div class="d-flex align-items-center">
													Offline
													<span class="badge rounded-pill bg-white text-black ms-2">13</span>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-4 col-sm-12 col-12">
									<div class="card mb-4">
										<div class="card-header">
											<h5 class="card-title">Tickets by Priority</h5>
										</div>
										<div class="card-body">
											<div id="lticketsPriorityData"></div>

											<div class="d-flex justify-content-center gap-4 my-4">
												<div class="d-flex align-items-center">
													High
													<span class="badge rounded-pill bg-info ms-2">15</span>
												</div>
												<div class="d-flex align-items-center">
													Medium
													<span class="badge rounded-pill bg-dark ms-2">18</span>
												</div>
												<div class="d-flex align-items-center">
													Low
													<span class="badge rounded-pill bg-white text-black ms-2">13</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row end -->

							<!-- Row start -->
							<div class="row">
								<div class="col-xl-6 col-lg-12 col-12">
									<div class="card mb-4">
										<div class="card-header">
											<h5 class="card-title">Top 5 Agents</h5>
										</div>
										<div class="card-body">
											<div class="border rounded-3">
												<div class="table-responsive">
													<table class="table align-middle custom-table m-0">
														<thead>
															<tr>
																<th>#</th>
																<th>Agent</th>
																<th>Tickets</th>
																<th>Time Spent</th>
																<th>Feedback</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td>1</td>
																<td>
																	<div class="fw-semibold">Elisa Shah</div>
																</td>
																<td>
																	<span class="badge bg-info">54</span>
																</td>
																<td>
																	<span class="badge border border-info text-info">2 Hrs 30 Mins</span>
																</td>
																<td>
																	<div class="starReadOnly1 rating-stars my-2"></div>
																</td>
															</tr>
															<tr>
																<td>2</td>
																<td>
																	<div class="fw-semibold">Ladonna Jones</div>
																</td>
																<td>
																	<span class="badge bg-success">49</span>
																</td>
																<td>
																	<span class="badge border border-success text-success">2 Hrs 21 Mins</span>
																</td>
																<td>
																	<div class="starReadOnly2 rating-stars my-2"></div>
																</td>
															</tr>
															<tr>
																<td>3</td>
																<td>
																	<div class="fw-semibold">Jewel Alexander</div>
																</td>
																<td>
																	<span class="badge bg-warning">45</span>
																</td>
																<td>
																	<span class="badge border border-warning text-warning">2 Hrs 15 Mins</span>
																</td>
																<td>
																	<div class="starReadOnly1 rating-stars my-2"></div>
																</td>
															</tr>
															<tr>
																<td>4</td>
																<td>
																	<div class="fw-semibold">Rich Spears</div>
																</td>
																<td>
																	<span class="badge bg-danger">42</span>
																</td>
																<td>
																	<span class="badge border border-danger text-danger">2 Hrs 10 Mins</span>
																</td>
																<td>
																	<div class="starReadOnly1 rating-stars my-2"></div>
																</td>
															</tr>
															<tr>
																<td>5</td>
																<td>
																	<div class="fw-semibold">Shelly Daniel</div>
																</td>
																<td>
																	<span class="badge bg-secondary">38</span>
																</td>
																<td>
																	<span class="badge border border-secondary text-secondary">2Hrs 05Mins</span>
																</td>
																<td>
																	<div class="starReadOnly1 rating-stars my-2"></div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-12">
									<div class="card mb-4">
										<div class="card-header">
											<h5 class="card-title">Feedback</h5>
										</div>
										<div class="card-body">
											<div class="scroll300">
												<div class="my-2">
													<div class="d-flex align-items-start">
														<div class="media-box me-3 bg-primary rounded-5">
															<i class="icon-thumbs-up"></i>
														</div>
														<div class="mb-4">
															<h5>Christian Ochoa</h5>
															<p class="mb-1">Amazing</p>
															<p class="m-0 opacity-50">3 mins ago</p>
														</div>
													</div>
													<div class="d-flex align-items-start">
														<div class="media-box me-3 bg-primary rounded-5">
															<i class="icon-thumbs-up"></i>
														</div>
														<div class="mb-4">
															<h5>Marci Aguirre</h5>
															<p class="mb-1">
																Great as always. All sorted with in a short
																time.
															</p>
															<p class="m-0 opacity-50">5 mins ago</p>
														</div>
													</div>
													<div class="d-flex align-items-start">
														<div class="media-box me-3 bg-primary rounded-5">
															<i class="icon-thumbs-up"></i>
														</div>
														<div class="mb-4">
															<h5>Rico Barry</h5>
															<p class="mb-1">
																All sorted with in a short time.
															</p>
															<p class="m-0 opacity-50">5 mins ago</p>
														</div>
													</div>
													<div class="d-flex align-items-start">
														<div class="media-box me-3 bg-primary rounded-5">
															<i class="icon-thumbs-up"></i>
														</div>
														<div class="mb-4">
															<h5>Dawn Shepherd</h5>
															<p class="mb-1">Great support guys</p>
															<p class="m-0 opacity-50">6 mins ago</p>
														</div>
													</div>
													<div class="d-flex align-items-start">
														<div class="media-box me-3 bg-danger rounded-5">
															<i class="icon-thumbs-down"></i>
														</div>
														<div class="mb-4">
															<h5>Heidi Ali</h5>
															<p class="mb-1">Sorry guys</p>
															<p class="m-0 opacity-50">6 mins ago</p>
														</div>
													</div>
													<div class="d-flex align-items-start">
														<div class="media-box me-3 bg-primary rounded-5">
															<i class="icon-thumbs-up"></i>
														</div>
														<div class="mb-4">
															<h5>Julio Olson</h5>
															<p class="mb-1">Awesome support</p>
															<p class="m-0 opacity-50">9 mins ago</p>
														</div>
													</div>
													<div class="d-flex align-items-start">
														<div class="media-box me-3 bg-primary rounded-5">
															<i class="icon-thumbs-up"></i>
														</div>
														<div class="mb-4">
															<h5>Lily Lyons</h5>
															<p class="mb-1">Thanks</p>
															<p class="m-0 opacity-50">9 mins ago</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-3 col-lg-6 col-12">
									<div class="card mb-4">
										<div class="card-header">
											<h5 class="card-title">New Tickets vs Closed</h5>
										</div>
										<div class="card-body">
											<div id="newClosedGraph"></div>
										</div>
									</div>
								</div>
							</div>
							<!-- Row end -->

						</div>
						<!-- Container ends -->

					</div>
					<!-- App body ends -->

					<!-- App footer start -->
					<div class="app-footer">
						<span>© Bootstrap Gallery 2023</span>
					</div>
					<!-- App footer end -->

				</div>
				<!-- App container ends -->

			</div>
			<!-- Main container end -->

		</div>
		<!-- Page wrapper end -->

		<!-- *************
			************ JavaScript Files *************
		************* -->
		<!-- Required jQuery first, then Bootstrap Bundle JS -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.bundle.min.js"></script>

		<!-- *************
			************ Vendor Js Files *************
		************* -->

		<!-- Overlay Scroll JS -->
		<script src="assets/vendor/overlay-scroll/jquery.overlayScrollbars.min.js"></script>
		<script src="assets/vendor/overlay-scroll/custom-scrollbar.js"></script>

		<!-- Apex Charts -->
		<script src="assets/vendor/apex/apexcharts.min.js"></script>
		<script src="assets/vendor/apex/custom/home/ticketsData.js"></script>
		<script src="assets/vendor/apex/custom/home/avgTimeData.js"></script>
		<script src="assets/vendor/apex/custom/home/liveCallsData.js"></script>
		<script src="assets/vendor/apex/custom/home/agentsLiveData.js"></script>
		<script src="assets/vendor/apex/custom/home/ticketsPriorityData.js"></script>
		<script src="assets/vendor/apex/custom/home/newClosedData.js"></script>

		<!-- Rating -->
		<script src="assets/vendor/rating/raty.js"></script>
		<script src="assets/vendor/rating/raty-custom.js"></script>

		<!-- Custom JS files -->
		<script src="assets/js/custom.js"></script>
	</body>
</html>