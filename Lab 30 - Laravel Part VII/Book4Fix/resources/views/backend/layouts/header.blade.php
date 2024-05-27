<!--
************************************************************************************************
                        Book for Fix
                        Development Date : 14-03-2024
                        Development Date   : 16-03-2024
************************************************************************************************
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('backend/images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('backend/images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ url('backend/images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ url('backend/images/favicon/site.webmanifest') }}">
    <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ url('backend/css/admin.min.css') }}" rel="stylesheet">
    <script src="{{ url('backend/vendor/sweetalert/sweetalert.min.js') }}"></script>
    <link href="{{ url('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
            <br>
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/admin')}}">
                <div class="sidebar-brand-icon ">
                    <img src="{{ url('backend/images/logo.png') }}" alt="logo" height="80px" width="100%"
                        style="background-color:#ffffff; padding:10px; border-radius:10px;" />
                </div>
            </a>
            <br>
            <hr class="sidebar-divider my-0">
            <li class="nav-item  {{ Request::is('admin') ? 'active':''}}">
                <a class="nav-link" href="{{url('/admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Main Menu
            </div>
            <li class="nav-item {{ Request::is('admin/register', 'admin/admins-list', 'admin/password-reset') ? 'active':''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAuthentication"
                    aria-expanded="true" aria-controls="collapseAuthentication">
                    <i class="fas fa-fw fa-fingerprint"></i>
                    <span>Authentication</span>
                </a>
                <div id="collapseAuthentication" class="collapse" aria-labelledby="headingAuthentication"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('/admin/register')}}">Add an Admin</a>
                        <a class="collapse-item" href="{{url('/admin/admins-list')}}">Admin List</a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ Request::is('admin/projects', 'admin/project-add') ? 'active':''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjects"
                    aria-expanded="true" aria-controls="collapseProjects">
                    <i class="fas fa-fw fa-file"></i>
                    <span>Projects Management</span>
                </a>
                <div id="collapseProjects" class="collapse" aria-labelledby="projects" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('/admin/projects')}}">Projects</a>
                        <a class="collapse-item" href="{{url('/admin/project-add')}}">Add Project</a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ Request::is('admin/team', 'admin/team-add') ? 'active':''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeam"
                    aria-expanded="true" aria-controls="collapseTeam">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>Team Management</span>
                </a>
                <div id="collapseTeam" class="collapse" aria-labelledby="team" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('/admin/team')}}">Team</a>
                        <a class="collapse-item" href="{{url('/admin/team-add')}}">Add a Team Member</a>
                    </div>
                </div>
            </li>
            <li class="nav-item {{ Request::is('admin/faqs', 'admin/faq-add') ? 'active':''}}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFaqs"
                    aria-expanded="true" aria-controls="collapseFaqs">
                    <i class="fas fa-fw fa-comments"></i>
                    <span>FAQs Management</span>
                </a>
                <div id="collapseFaqs" class="collapse" aria-labelledby="faqs" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="{{url('/admin/faqs')}}">FAQs</a>
                        <a class="collapse-item" href="{{url('/admin/faq-add')}}">Add FAQ</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/admin/logout')}}">
                    <i class="fas fa-power-off"></i>
                    <span>Logout</span></a>
            </li>
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-0 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="{{ url('backend/images/profile.svg')}}" alt="{{config('app.name')}}">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="admins.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="admin-update-password.php">
                                    <i class="fas fa-fingerprint fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{url('/admin/logout')}}" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>
