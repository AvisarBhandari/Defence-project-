<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Academy Keeper</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/aos.min.css">
    <link rel="stylesheet" href="assets/css/Button-Change-Text-on-Hover.css">
    <link rel="stylesheet" href="assets/css/Cute-Select.css">
    <link rel="stylesheet" href="assets/css/Filter.css">
    <link rel="stylesheet" href="assets/css/Multiple-Input-Select-Pills.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label-button-label.css">
    <link rel="stylesheet" href="assets/css/MUSA_button-label.css">
    <link rel="stylesheet" href="assets/css/Navbar-With-Button-icons.css">
</head>

<body id="page-top">
<?php
// Start the session to access the session variables
session_start();

// Get the data from session
$total_students = isset($_SESSION['total_students']) ? $_SESSION['total_students'] : 0;
?>
    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" data-aos="fade-right" data-aos-duration="1200">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#" style="padding-bottom: 0px;padding-top: 0px;">
                    <div class="sidebar-brand-icon rotate-n-15" style="transform: rotate(3deg);"><img src="assets/img/untitled-1.png" width="103" height="110" style="margin-right: -32px;margin-top: -12px;margin-left: -37px;margin-bottom: -6px;"></div>
                    <div class="sidebar-brand-text mx-3"><span style="padding-top: 0px;padding-bottom: 0px;">Academy<br>Keeper</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="profile.html"><i class="fas fa-user" style="font-size: 13px;"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Courses%20Management.html"><i class="fas fa-book" style="font-size: 13px;"></i><span>Course Management&nbsp;</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="faculty.html"><i class="fas fa-table"></i><span>Faculty Management&nbsp;</span></a><a class="nav-link active" href="student.html"><i class="far fa-user" style="font-size: 14px;"></i><span>Student Management&nbsp;</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-expand bg-white shadow mb-4 topbar">
                    <div class="container-fluid">
                        <form class="d-none d-sm-inline-block me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search" data-aos="slide-down" data-aos-duration="1200" data-aos-delay="400">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ..." style="height: 38.6px;"><button class="btn btn-primary py-0" type="button" style="width: 42.6px;height: 37.6px;"><i class="fas fa-search"></i></button></div>
                        </form>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light border-0 form-control small" type="text" placeholder="Search for ..."><button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button></div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="me-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="badge bg-danger badge-counter">7</span><i class="fas fa-envelope fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-list animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="dropdown-item d-flex align-items-center" href="#">
                                            <div class="dropdown-list-image me-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="fw-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-end" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar.png"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="d-sm-flex justify-content-between align-items-center mb-4" data-aos="fade" data-aos-duration="1150" data-aos-delay="500" style="padding-left: 24px;position: relative;" zin="">
                    <h3 class="text-dark mb-0">Student</h3>
                </div>
                <div class="container py-4 py-xl-5" style="margin-right: 299px;padding-right: 36px;margin-left: 3px;">
                    <div class="row gy-4 row-cols-2 row-cols-md-4">
                        <div class="col" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500">
                            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M12 6c1.1 0 2 .9 2 2s-.9 2-2 2-2-.9-2-2 .9-2 2-2m0 10c2.7 0 5.8 1.29 6 2H6c.23-.72 3.31-2 6-2m0-12C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 10c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
                                    </svg></div>
                                <div class="px-3">
                                    <h2 class="fw-bold mb-0">
                                        <?php  echo $total_students;?>
                                    </span></h2>
                                    <p class="mb-0">Today'sStudent</p>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up-right" data-aos-duration="1200" data-aos-delay="600">
                            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill-check">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514ZM11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4"></path>
                                    </svg></div>
                                <div class="px-3">
                                    <h2 class="fw-bold mb-0">454</h2>
                                    <p class="mb-0">Today's Attendance</p>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-down-left" data-aos-duration="1200" data-aos-delay="700">
                            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-x-fill">
                                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"></path>
                                    </svg></div>
                                <div class="px-3">
                                    <h2 class="fw-bold mb-0">113</h2>
                                    <p class="mb-0">Today's Absent Student</p>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="850">
                            <div class="text-center d-flex flex-column justify-content-center align-items-center py-3">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block mb-2 bs-icon lg"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-person-fill-add">
                                        <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                                        <path d="M2 13c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4"></path>
                                    </svg></div>
                                <div class="px-3">
                                    <h2 class="fw-bold mb-0">89</h2>
                                    <p class="mb-0">This Month Enrollments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container pulse animated" style="margin-left: -1px;">
                    <div class="row">
                        <div class="col-md-6 col-xxl-7" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="250">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center" style="height: 54.7px;">
                                    <h6 class="text-primary fw-bold m-0">Student Enrollments</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Jan&quot;,&quot;Feb&quot;,&quot;Mar&quot;,&quot;Apr&quot;,&quot;May&quot;,&quot;Jun&quot;,&quot;Jul&quot;,&quot;Aug&quot;,&quot;Sep&quot;,&quot;Oct&quot;,&quot;Nov&quot;,&quot;Dec&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Student Enrollments&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;200&quot;,&quot;240&quot;,&quot;469&quot;,&quot;150&quot;,&quot;100&quot;,&quot;200&quot;,&quot;149&quot;,&quot;250&quot;,&quot;200&quot;,&quot;250&quot;,&quot;150&quot;,&quot;360&quot;],&quot;backgroundColor&quot;:&quot;rgb(102,137,204)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;,&quot;borderWidth&quot;:&quot;&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-5" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="300">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center" style="height: 57.4px;">
                                    <h6 class="text-primary fw-bold m-0">Grade overview</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;A&quot;,&quot;B&quot;,&quot;C&quot;,&quot;D&quot;,&quot;E&quot;,&quot;F&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Grade&quot;,&quot;backgroundColor&quot;:[&quot;rgb(0,255,10)&quot;,&quot;rgb(143,255,0)&quot;,&quot;rgb(235,255,0)&quot;,&quot;rgb(255,245,0)&quot;,&quot;rgba(163,67,67,0.64)&quot;,&quot;rgb(255,0,0)&quot;],&quot;borderColor&quot;:[&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;],&quot;data&quot;:[&quot;1196&quot;,&quot;8900&quot;,&quot;1070&quot;,&quot;2900&quot;,&quot;890&quot;,&quot;690&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;text&quot;:&quot;Grade&quot;,&quot;display&quot;:false,&quot;position&quot;:&quot;top&quot;}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" style="margin-left: -1px;">
                    <div class="row">
                        <div class="col-md-6 col-xxl-4" data-aos="flip-right" data-aos-duration="1000" data-aos-delay="250">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center" style="height: 57.4px;">
                                    <h6 class="text-primary fw-bold m-0">Department-Wise Enrollment Distribution</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;pie&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;BCA&quot;,&quot;BBS&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Depaetment&quot;,&quot;backgroundColor&quot;:[&quot;rgb(30,122,109)&quot;,&quot;rgb(249,232,20)&quot;],&quot;borderColor&quot;:[&quot;rgba(0,0,0,0.1)&quot;,&quot;rgba(0,0,0,0.1)&quot;],&quot;data&quot;:[&quot;2000&quot;,&quot;1500&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;bold&quot;,&quot;fontColor&quot;:&quot;#6777ef&quot;,&quot;fontSize&quot;:14},&quot;reverse&quot;:false,&quot;position&quot;:&quot;bottom&quot;},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;,&quot;display&quot;:false}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7" data-aos="flip-left" data-aos-duration="1000" data-aos-delay="250">
                            <div class="card shadow mb-4">
                                <div class="card-header d-flex justify-content-between align-items-center" style="height: 57.4px;">
                                    <h6 class="text-primary fw-bold m-0">Student Demographics</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas data-bss-chart="{&quot;type&quot;:&quot;bar&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;18-20&quot;,&quot;21-23&quot;,&quot;23-25&quot;,&quot;25+&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Male&quot;,&quot;backgroundColor&quot;:&quot;#3a75c4&quot;,&quot;borderColor&quot;:&quot;rgba(78,115,223,0)&quot;,&quot;data&quot;:[&quot;2000&quot;,&quot;100&quot;,&quot;500&quot;,&quot;150&quot;,&quot;100&quot;,&quot;200&quot;,&quot;149&quot;,&quot;250&quot;,&quot;200&quot;,&quot;250&quot;,&quot;150&quot;,&quot;360&quot;]},{&quot;label&quot;:&quot;Female&quot;,&quot;backgroundColor&quot;:&quot;#d6009e&quot;,&quot;borderColor&quot;:&quot;rgba(78,115,223,0.04)&quot;,&quot;data&quot;:[&quot;2000&quot;,&quot;100&quot;,&quot;500&quot;,&quot;150&quot;,&quot;100&quot;,&quot;200&quot;,&quot;149&quot;,&quot;250&quot;,&quot;200&quot;,&quot;250&quot;,&quot;150&quot;,&quot;360&quot;]},{&quot;label&quot;:&quot;Other&quot;,&quot;backgroundColor&quot;:&quot;#ffed38&quot;,&quot;borderColor&quot;:&quot;rgba(78,115,223,0.04)&quot;,&quot;data&quot;:[&quot;2000&quot;,&quot;100&quot;,&quot;500&quot;,&quot;150&quot;,&quot;100&quot;,&quot;200&quot;,&quot;149&quot;,&quot;250&quot;,&quot;200&quot;,&quot;250&quot;,&quot;150&quot;,&quot;360&quot;]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false,&quot;labels&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;}},&quot;title&quot;:{&quot;fontStyle&quot;:&quot;normal&quot;},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;fontStyle&quot;:&quot;normal&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400" data-aos-once="true">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold">Students list</p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6 text-nowrap">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable">
                                        <div class="dropdown"><button class="btn btn-primary dropdown-toggle ps-xxl-0 mt-xxl-0 pt-xxl-1 pb-xxl-1" aria-expanded="false" data-bs-toggle="dropdown" data-bs-auto-close="outside" type="button"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" style="width: 24px;height: 24px;font-size: 22px;">
                                                    <path d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                                                </svg>&nbsp;Add Student</button>
                                            <div class="dropdown-menu" style="width: 1076px;box-shadow: 0px 0px 20px 1px;">
                                                <h3 class="text-light text-bg-primary" style="padding-left: 43%;padding-top: 4px;margin-top: -8px;margin-bottom: 14px;height: 41.6px;">Add Faculty</h3>
                                                <form style="padding-bottom: 0px;">
                                                    <div style="margin-top: 30px;margin-right: -1px;">
                                                        <div class="container" style="padding-top: 0px;padding-bottom: 0px;margin-bottom: 15px;margin-top: 8px;">
                                                            <div class="row">
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 40px;margin-top: 0px;padding-top: 8px;margin-right: 24px;"><strong>Student ID</strong></div>
                                                                <div class="col-md-3"><input class="form-control" type="text" name="student_code" placeholder="Enter Student ID" required="" min="8" max="8" pattern="^STU\d{4}-\d{4}$" maxlength="13" minlength="1" autofocus=""></div>
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 210px;padding-top: 7px;"><strong>Student Name</strong></div>
                                                                <div class="col-md-3" style="margin-left: 31px;"><input class="form-control" type="text" name="student_name" placeholder="Enter StudentName" required="" minlength="2" maxlength="25" autofocus=""></div>
                                                            </div>
                                                        </div>
                                                        <div class="container" style="padding-top: 0px;padding-bottom: 0px;margin-bottom: 15px;margin-top: 8px;">
                                                            <div class="row">
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 40px;margin-top: 0px;padding-top: 8px;margin-right: 24px;"><strong>Department&nbsp;</strong></div>
                                                                <div class="col-md-3"><select class="border rounded form-select" name="dep" required="" autofocus="">
                                                                        <optgroup label="Department ">
                                                                            <option value="" selected="">Department </option>
                                                                            <option value="bca">BCA</option>
                                                                            <option value="bbs">BBS</option>
                                                                        </optgroup>
                                                                    </select></div>
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 210px;padding-top: 7px;"><strong>Address&nbsp;</strong></div>
                                                                <div class="col-md-3" style="margin-left: 31px;"><input class="form-control" type="number" name="student_address " required="" placeholder="Enter Address"></div>
                                                            </div>
                                                        </div>
                                                        <div class="container" style="padding-top: 0px;padding-bottom: 0px;margin-bottom: 15px;margin-top: 8px;">
                                                            <div class="row mb-xxl-3">
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 40px;margin-top: 0px;padding-top: 8px;margin-right: 24px;"><strong>D.O.B</strong></div>
                                                                <div class="col-md-3"><input class="form-control" type="date" name="student_dob" required=""></div>
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 210px;padding-top: 7px;"><strong>Admission Date</strong></div>
                                                                <div class="col-md-3 ps-xxl-1" style="margin-left: 31px;padding-left: 50px;padding-top: 2px;padding-bottom: 0px;margin-top: -3px;"><input class="form-control" type="date" style="width: 247.85px;" required="" name="student_start"></div>
                                                            </div>
                                                        </div>
                                                        <div class="container" style="padding-top: 0px;padding-bottom: 0px;margin-bottom: 15px;margin-top: 8px;">
                                                            <div class="row mb-xxl-3">
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 40px;margin-top: 0px;padding-top: 8px;margin-right: 24px;"><strong>Monthly Fees&nbsp;</strong></div>
                                                                <div class="col-md-3"><input class="form-control" type="number" name="monthly_fees" placeholder="Enter the Fees" required=""></div>
                                                                <div class="col-md-3 col-xxl-1" style="margin-left: 210px;padding-top: 7px;"><strong>Phone number&nbsp;</strong></div>
                                                                <div class="col-md-3 ps-xxl-1" style="margin-left: 31px;padding-left: 50px;padding-top: 2px;padding-bottom: 0px;margin-top: -3px;"><input class="form-control" type="tel" name="Phone_no" placeholder="Enter the Phone Number " required="" pattern="(98|97)\d{8}$" maxlength="13" minlength="10"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form><input class="btn btn-primary" type="submit" style="margin-left: 807px;" name="Add Course " value="Add Faculty ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-md-end dataTables_filter" id="dataTable_filter"><label class="form-label"><input type="search" class="form-control form-control-sm" aria-controls="dataTable" placeholder="Search"></label></div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                <table class="table my-0" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>ID</th>
                                            <th>Department&nbsp;</th>
                                            <th>Address&nbsp;</th>
                                            <th>Attendance</th>
                                            <th>Admission Date</th>
                                            <th>Monthly Fees</th>
                                            <th><strong>Actions</strong></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>12313131</td>
                                            <td>Accountant</td>
                                            <td>Parsa</td>
                                            <td class="text-success">Present&nbsp;</td>
                                            <td>2008/11/28</td>
                                            <td>$162,700</td>
                                            <td><a id="edit" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-edit text-warning pt-xxl-0 mt-xxl-0" style="font-size: 27px;padding-top: 0px;margin-top: -13px;">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg></a><a id="delete" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="text-danger pt-xxl-0 mt-xxl-0" style="font-size: 29px;margin-left: 11px;margin-top: -8px;">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr>
                                            <td>Angelica Ramos</td>
                                            <td>12312312</td>
                                            <td>Chief Executive Officer(CEO)</td>
                                            <td class="text-success-emphasis">parsa</td>
                                            <td class="text-success">Present&nbsp;</td>
                                            <td>2009/10/09<br></td>
                                            <td>$1,200,000</td>
                                            <td><a id="edit-1" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-edit text-warning pt-xxl-0 mt-xxl-0" style="font-size: 27px;padding-top: 0px;margin-top: -13px;">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg></a><a id="delete-1" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="text-danger pt-xxl-0 mt-xxl-0" style="font-size: 29px;margin-left: 11px;margin-top: -8px;">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>1231231</td>
                                            <td>Assistant Professor</td>
                                            <td>Parsa</td>
                                            <td class="text-success">Present&nbsp;</td>
                                            <td>2009/01/12<br></td>
                                            <td>$86,000</td>
                                            <td><a id="edit-2" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-edit text-warning pt-xxl-0 mt-xxl-0" style="font-size: 27px;padding-top: 0px;margin-top: -13px;">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg></a><a id="delete-2" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="text-danger pt-xxl-0 mt-xxl-0" style="font-size: 29px;margin-left: 11px;margin-top: -8px;">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr>
                                            <td>Bradley Greer</td>
                                            <td>12312313</td>
                                            <td>Software Engineer</td>
                                            <td>London</td>
                                            <td class="text-danger">Absent</td>
                                            <td>2012/10/13<br></td>
                                            <td>$132,000</td>
                                            <td><a id="edit-3" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-edit text-warning pt-xxl-0 mt-xxl-0" style="font-size: 27px;padding-top: 0px;margin-top: -13px;">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg></a><a id="delete-3" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="text-danger pt-xxl-0 mt-xxl-0" style="font-size: 29px;margin-left: 11px;margin-top: -8px;">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
                                                    </svg></a></td>
                                        </tr>
                                        <tr>
                                            <td>Brenden Wagner</td>
                                            <td>13123131</td>
                                            <td>Software Engineer</td>
                                            <td>San Francisco</td>
                                            <td class="text-danger">Absent&nbsp;</td>
                                            <td>2011/06/07<br></td>
                                            <td>$206,850</td>
                                            <td><a id="edit-4" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icon-tabler-edit text-warning pt-xxl-0 mt-xxl-0" style="font-size: 27px;padding-top: 0px;margin-top: -13px;">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1"></path>
                                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z"></path>
                                                        <path d="M16 5l3 3"></path>
                                                    </svg></a><a id="delete-4" class="faculty_action" href="#"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" width="1em" fill="currentColor" class="text-danger pt-xxl-0 mt-xxl-0" style="font-size: 29px;margin-left: 11px;margin-top: -8px;">
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
                                                    </svg></a></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td><strong>ID</strong></td>
                                            <td><strong>Department&nbsp;</strong></td>
                                            <td><strong>Address&nbsp;</strong></td>
                                            <td><strong>Attendance&nbsp;</strong></td>
                                            <td><strong><strong><span style="color: rgb(133, 135, 150);">Admission Date</span></strong></strong></td>
                                            <td><strong>Monthly Fees</strong></td>
                                            <td><strong><strong>Actions</strong></strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" aria-label="Previous" href="#"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" aria-label="Next" href="#"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Academy Keeper 2024</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>