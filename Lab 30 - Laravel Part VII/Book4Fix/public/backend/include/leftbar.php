<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <br>
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon ">
            <img src="images/logo.png" alt="logo" height="80px" width="100%" 
            style="background-color:#ffffff; padding:10px; border-radius:10px;"/>
        </div>
    </a>
    <br>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
            Main Menu
    </div> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="admins.php" data-toggle="collapse" data-target="#collapseUser" aria-expanded="true" aria-controls="collapseBeneficiary">
            <i class="fas fa-fw fa-fingerprint"></i>
            <span>Authentication</span>
        </a>
        <div id="collapseUser" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin-add.php">Add an Admin</a>
                <a class="collapse-item" href="admins.php">Admin List</a>
                <a class="collapse-item" href="admin-update-password">Rest Password</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProjects"
            aria-expanded="true" aria-controls="collapseProjects">
            <i class="fas fa-fw fa-file"></i>
            <span>Projects Management</span>
        </a>
        <div id="collapseProjects" class="collapse" aria-labelledby="projects"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="projects.php">Projects</a>
                <a class="collapse-item" href="project-add.php">Add Project</a>
            </div>
        </div>
    </li> 
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTeam"
            aria-expanded="true" aria-controls="collapseTeam">
            <i class="fas fa-fw fa-id-card"></i>
            <span>Team Management</span>
        </a>
        <div id="collapseTeam" class="collapse" aria-labelledby="team"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="team.php">Team</a>
                <a class="collapse-item" href="team-add.php">Add a Team Member</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFaqs"
            aria-expanded="true" aria-controls="collapseFaqs">
            <i class="fas fa-fw fa-comments"></i>
            <span>FAQs Management</span>
        </a>
        <div id="collapseFaqs" class="collapse" aria-labelledby="faqs"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="faqs.php">FAQs</a>
                <a class="collapse-item" href="faq-add.php">Add FAQ</a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider d-none d-md-block">
    <li class="nav-item">
        <a class="nav-link" href="logout.php">
        <i class="fas fa-power-off"></i>
            <span>Logout</span></a>
    </li>
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
</ul>