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
                <a href="#l" class='sidebar-link'>
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
                        <a href="sf1">SF1</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="sf9">SF9</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="sf10">SF10</a>
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
                class="  has-sub">
                <a href="conso" class='sidebar-link'>
                    <i class="bi bi-grid-1x2-fill"></i>
                    <span>CONSO</span>
                </a>
                <ul class="submenu ">
                
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

    <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>GAS 12-C  2ND SEMESTER</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 ">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4  ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">MALE</h6>
                                    <h6 class="font-extrabold mb-0">20</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">FEMALE</h6>
                                    <h6 class="font-extrabold mb-0">20</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldAdd-User"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">TOTAL</h6>
                                    <h6 class="font-extrabold mb-0">40</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
<div class="page-heading">
    <h3>SUBJECTS</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12 ">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4  ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Empowerment Technology</h6>
                                    <h6 class="font-extrabold mb-0">Agata Cristine Melody C. Gutierrez</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Personal Development</h6>
                                    <h6 class="font-extrabold mb-0">Richard V. Santiago</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Physical Education & Health</h6>
                                    <h6 class="font-extrabold mb-0">Editha A Langa</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Work Immersion</h6>
                                    <h6 class="font-extrabold mb-0">Angelita Dela Cruz</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="row">
        <div class="col-12 ">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-3 py-4-5">
                            <div class="row">
                                <div class="col-md-4  ">
                                    <div class="stats-icon purple mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Applied Economics</h6>
                                    <h6 class="font-extrabold mb-0">Erncef Borromeo</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Inquiries. Investigations & Immersion</h6>
                                    <h6 class="font-extrabold mb-0">Rey Anthony Mempin</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Business Mathematics</h6>
                                    <h6 class="font-extrabold mb-0">Ma. Teresa Charmaine O. Clemente</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Media Information Literacy</h6>
                                    <h6 class="font-extrabold mb-0">Jonald Grace Mendoza</h6>
                                </div>
                            </div>
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
