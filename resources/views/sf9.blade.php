<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SFMS</title>
    
    <link rel="stylesheet" href="assets/css/main/app.css">
    <link rel="stylesheet" href="assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/png">
    
<link rel="stylesheet" href="assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-center align-items-center">
            <div class="logo">
                <a href="index.html"><img src="assets/images/sidebar_logo.png" alt="Logo" style="width: 75px;  height: 75px;"></a>
            </div>
           <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
               
                <div  class=" ">
                  
                    <label class="" id="toggle-dark"></label>
                </div>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="text-center">
        <h4>School Forms Management System</h4>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item active ">
                <a href="adviser" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>School Forms</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="component-alert.html">SF1</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-badge.html">SF9</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="component-breadcrumb.html">SF10</a>
                    </li>
                   
                </ul>
            </li>
            
            <li
                class="  has-sub">
                <a href="ecr" class='sidebar-link'>
                    <i class="bi bi-collection-fill"></i>
                    <span>ECR</span>
                </a>
         
            </li>
            
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>CONSO</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="layout-default.html">Default Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-1-column.html">1 Column</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-vertical-navbar.html">Vertical Navbar</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-rtl.html">RTL Layout</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="layout-horizontal.html">Horizontal Menu</a>
                    </li>
                </ul>
            </li>

            <li class="sidebar-title">Admin</li>
            <li class="sidebar-item">
                            <a class='sidebar-link' href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="bi bi-backspace-fill"></i>
                                    <span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
           
    
           
        </div>
    </div>
<div>
    
</div>
<div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            <div class="col-md-6">
        <div class="card " style="width: 1000px;">
          <div class="card-header">
            <h4>School forms 9</h4>
            
          </div>
          <div class="card-body" style="width: 1000px;">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="assets/images/samples/form9.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="assets/images/samples/bg-mountain.jpg" class="d-block w-100" alt="...">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </a>
            </div>
          </div>
        </div>

</div>
    
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="assets/js/pages/dashboard.js"></script>

</body>

</html>