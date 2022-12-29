<?php
session_start();
include("../includes/admin_security.php");
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>OHCS | Dashboard</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <!-- <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" /> -->

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">OHCS</span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Profile -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Layouts">Profile</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="view_profile.php" class="menu-link">
                                    <div data-i18n="Without menu">View Profile</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="change_password.php" class="menu-link">
                                    <div data-i18n="Without navbar">Change Password</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="admins.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Admins</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Appointment -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-wallet-alt"></i>
                            <div data-i18n="Layouts">Appointments</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_appointment.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pending_appointments.php" class="menu-link">
                                    <div data-i18n="Without menu">Pending Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="approved_appointments.php" class="menu-link">
                                    <div data-i18n="Without navbar">Approved Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="all_appointments.php" class="menu-link">
                                    <div data-i18n="Without navbar">All Appointments</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="your_appointments.php" class="menu-link">
                                    <div data-i18n="Without navbar">Your Appointments</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                   <!-- Prescription -->
                   <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-copy-alt"></i>
                            <div data-i18n="Layouts">Prescriptions</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item">
                                <a href="prescriptions.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Prescriptions</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Treatments -->
                    <li class="menu-item active open">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-devices"></i>
                            <div data-i18n="Layouts">Treatments</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item active">
                                <a href="treatments.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Treatments</div>
                                </a>
                            </li>
                           
                        </ul>
                    </li>

                    <!-- Patients -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-accessibility"></i>
                            <div data-i18n="Layouts">Patients</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_patients.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Patients</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="patients.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Patients</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Doctors -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Layouts">Doctors</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="add_doctors.php" class="menu-link">
                                    <div data-i18n="Without menu">Add Doctors</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="doctors.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Doctors</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Rooms -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Layouts">Rooms</div>
                        </a>

                        <ul class="menu-sub">
                            
                            <li class="menu-item">
                                <a href="rooms.php" class="menu-link">
                                    <div data-i18n="Without navbar">View Rooms</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <!-- <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                            <h2 class="mb-0">Hello Dr. <?php echo current(explode(' ', $_SESSION['fullname'])).", welcome back.!" ?></h2>
                            </div>
                        </div> -->
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item lh-1 me-3">
                            <a aria-label="fullname"><?php echo $_SESSION['fullname'] ?></a
                            >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                    <?php
                    include('../includes/connect.php');
                    $user_id = $_SESSION['user_role_id'];
                    $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM admins WHERE admin_id = '$user_id'");
                    $dp_res = mysqli_fetch_array($dp_sql);

                    if($dp_res['profile_pic_status'] == 0){

                    ?>
                    <img
                    src="../assets/img/avatars/default_dp.jpg"
                    alt class="w-px-40 h-auto rounded-circle"
                    height="100"
                    width="100"
                    id="uploadedAvatar"
                    />
                    <?php
                        }
                        else if($dp_res['profile_pic_status'] == 1){
                            ?>
                            <img
                            src="../assets/img/avatars/<?=$dp_res['profile_image']?>"
                            alt class="w-px-40 h-auto rounded-circle"
                            height="100"
                            width="100"
                            id="uploadedAvatar"
                            />
                            <?php
                        }
                    ?>
                    </div>
                  </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar avatar-online">
                                            <!-- <img src="../assets/img/avatars/8.jpg" alt class="w-px-40 h-auto rounded-circle" /> -->
                                            <?php
                                            include('../includes/connect.php');
                                            $user_id = $_SESSION['user_role_id'];
                                            $dp_sql = mysqli_query($con, "SELECT profile_pic_status, profile_image FROM admins WHERE admin_id = '$user_id'");
                                            $dp_res = mysqli_fetch_array($dp_sql);

                                            if($dp_res['profile_pic_status'] == 0){

                                            ?>
                                            <img
                                            src="../assets/img/avatars/default_dp.jpg"
                                            alt class="w-px-40 h-auto rounded-circle"
                                            height="100"
                                            width="100"
                                            id="uploadedAvatar"
                                            />
                                            <?php
                                                }
                                                else if($dp_res['profile_pic_status'] == 1){
                                                    ?>
                                                    <img
                                                    src="../assets/img/avatars/<?=$dp_res['profile_image']?>"
                                                    alt class="w-px-40 h-auto rounded-circle"
                                                    height="100"
                                                    width="100"
                                                    id="uploadedAvatar"
                                                    />
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block"><?php echo $_SESSION['user_email'] ?></span>
                                        <small class="text-muted"><?php echo (ucwords($_SESSION['user_role']))." | ".$_SESSION['user_role_id'] ?></small>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="view_profile.php">
                                <i class="bx bx-user me-2"></i>
                                <span class="align-middle">My Profile</span>
                            </a>
                        </li>
                        <!-- <li>
                            <a class="dropdown-item" href="#">
                                <i class="bx bx-cog me-2"></i>
                                <span class="align-middle">Settings</span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <span class="d-flex align-items-center align-middle">
                                <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                <span class="flex-grow-1 align-middle">Billing</span>
                                <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                </span>
                            </a>
                        </li> -->
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="../includes/user_logout_code.php">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / User -->
                <!-- / Navbar -->

                <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0);">Treatments</a>
                    </li>
                    <li class="breadcrumb-item active">View Treatments</li>
                    </ol>
                </nav>
                                        
                        <!-- Hoverable Table rows -->
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                
                                <h3 class="mb-0">Treatments</h3>
                                <?php
                                if(isset($_SESSION['appointment_success'])){
                                    echo "<h3><div class='alert alert-success alert-dismissible' role='alert'>".
                                    ($_SESSION['appointment_success'])
                                    ."<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                    </div></h3>";
                                    unset($_SESSION['appointment_success']);
                                }
                                ?>
                                <!-- Search -->
                                <div class="navbar-nav align-items-center outline">
                                    <div class="nav-item d-flex align-items-center">
                                    <i class="bx bx-search fs-4 lh-0"></i>
                                    <input
                                        type="text"
                                        class="form-control border-0 shadow-none"
                                        placeholder="Search..."
                                        aria-label="Search..."
                                        id="search"
                                    />
                                    </div>
                                </div>
                                <!-- /Search -->
                                <div></div>
                                <!-- <a href="add_appointment.php" class="btn btn-primary">Add Appointment</a> -->
                            </div>
                            <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                <tr class="justify-content-between">
                                    <!-- <th>ID</th> -->
                                    <th>Doctor</th>
                                    <th>Patient</th>
                                    <th>Description</th>
                                    <th>Uploads</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <!-- <th>Status</th> -->
                                    <?php
                                    if($_SESSION['user_role'] == 'doctor'){
                                    ?>
                                        <th>Action</th>
                                    <?php
                                    }
                                    ?>
                                </tr>
                                </thead>
                                <tbody class="table-border-bottom-0 justify-content-between">
                                <?php
                                include('../includes/connect.php');
                                $user_id = $_SESSION['user_role_id'];
                                $treat_SQL = "SELECT * FROM treatments ORDER BY treatment_id DESC";
                                $treat_SQL_run = mysqli_query($con, $treat_SQL);
                                if(mysqli_num_rows($treat_SQL_run) > 0){
                                # $data = mysqli_fetch_array($treat_SQL_run);
                                    while ($row = mysqli_fetch_array($treat_SQL_run)){
                                ?>   
                                
                                <tr>
                                    <!-- <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular Project</strong></td> -->
                                    <!-- <td><?php #echo $row['treatment_id']; ?></td> -->
                                    <td><?php
                                    $doc_id = $row['doctor_id'];
                                    $doc_query = "SELECT doctor_name FROM doctors WHERE doctor_id = '$doc_id'";
                                    $doc_run = mysqli_query($con, $doc_query);
                                    if(mysqli_num_rows($doc_run) > 0){
                                        $doc_result = mysqli_fetch_array($doc_run);
                                        echo 'Dr. '.$doc_result['doctor_name'];                                      
                                    }
                                    else{
                                        echo '<span style="color: red;">Deleted</span>';
                                    }
                                    
                                    ?></td>
                                    <td><?php
                                    $patientID = $row['patient_id'];
                                    if($patientID == null || $patientID == ''){
                                        echo '<span style="color: red;">Deleted</span>';
                                    }
                                    else{
                                        $patientID = $row['patient_id'];
                                        $pat_query = "SELECT fullname, user_role FROM users WHERE user_role_id = '$patientID'";
                                        $pat_run = mysqli_query($con, $pat_query);
                                        if(mysqli_num_rows($pat_run) > 0){
                                            $pat_result = mysqli_fetch_array($pat_run);
                                            echo $pat_result['fullname'].'</br>';
                                            if($pat_result['user_role'] == 'admin'){
                                                echo ' (Admin)';
                                            }
                                            else if($pat_result['user_role'] == 'doctor'){
                                                echo ' (Doctor)';
                                            }
                                        }
                                        else{
                                            echo '<span style="color: red;">Deleted</span>';
                                        }
                                    }
                                    ?></td>
                                    <td><?php echo wordwrap($row['treatment_description'], 40, '</br>'); ?></td>
                                    <td>
                                    <a href="../doctor/treatment_uploads/<?=$row['uploads']?>" download class="btn btn-xs btn-primary">Download</a>
                                    </td>
                                    <td><?php
                                    $date = $row['treatment_date'];
                                    $date_parts = explode('-', $date);
                                    $month = $date_parts[1];
                                    if($month == 1){
                                        echo $date_parts[2].'-January-'.$date_parts[0];
                                    }
                                    else if($month == 2){
                                        echo $date_parts[2].'-February-'.$date_parts[0];
                                    }
                                    else if($month == 3){
                                        echo $date_parts[2].'-March-'.$date_parts[0];
                                    }
                                    else if($month == 4){
                                        echo $date_parts[2].'-April-'.$date_parts[0];
                                    }
                                    else if($month == 5){
                                        echo $date_parts[2].'-May-'.$date_parts[0];
                                    }
                                    else if($month == 6){
                                        echo $date_parts[2].'-June-'.$date_parts[0];
                                    }
                                    else if($month == 7){
                                        echo $date_parts[2].'-July-'.$date_parts[0];
                                    }
                                    else if($month == 8){
                                        echo $date_parts[2].'-August-'.$date_parts[0];
                                    }
                                    else if($month == 9){
                                        echo $date_parts[2].'-September-'.$date_parts[0];
                                    }
                                    else if($month == 10){
                                        echo $date_parts[2].'-October-'.$date_parts[0];
                                    }
                                    else if($month == 11){
                                        echo $date_parts[2].'-November-'.$date_parts[0];
                                    }
                                    else if($month == 12){
                                        echo $date_parts[2].'-December-'.$date_parts[0];
                                    }
                                    else{
                                        echo "Invalid Date";
                                    }
                                    ?></td>
                                    <td><?php echo $row['treatment_time']; ?></td>
                                    
                                    <?php
                                    // if($row['treatment_status'] == 0){
                                    //     echo "<td><span class='badge bg-label-warning me-1'>In progress</span></td>";
                                    // }
                                    // else if($row['treatment_status'] == 1){
                                    //     echo "<td><span class='badge bg-label-success me-1'>Success</span></td>";
                                    // }
                                    // ?>  
                                    <td>
                                    <!-- Edit Appointment Modal -->
                                    <?php
                                    if($_SESSION['user_role'] == 'doctor'){
                                    ?>
                                         <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#"
                                            ><i class="bx bx-edit-alt me-1"></i> Edit</a>
                                            <input type="hidden" name="" value = "">
                                            
                                        <!-- <a class="dropdown-item" href="javascript:void(0);"
                                            ><i class="bx bx-view me-1"></i> View</a> -->

                                        <form action="" method="POST">
                                            <button type="submit" name="delete_appointment" class="dropdown-item"><i class="bx bx-trash me-1"></i>Delete</button>
                                            <input type="hidden" name="" value = "">
                                        </form>
                                        </div>
                                        
                                    <!--/ Edit Appointment Modal -->
                                    </div>
                                    <?php
                                    }
                                    ?>
                                   
                                     
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                                </tbody>
                            </table>
                            <div class="card mb-4">
                                <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-4">
                                    <div class="demo-inline-spacing">  
                                    </div>
                                    </div>
                                    <div class="col-lg-8">
                                    <div class="demo-inline-spacing">
                                        <nav aria-label="Page navigation">
                                        <ul class="pagination">
                                            <li class="page-item prev">
                                            <a class="page-link" href="javascript:void(0);"
                                                ><i class="tf-icon bx bx-chevrons-left"></i
                                            ></a>
                                            </li>
                                            <li class="page-item active">
                                            <a class="page-link" href="javascript:void(0);">1</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">2</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">3</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">4</a>
                                            </li>
                                            <li class="page-item">
                                            <a class="page-link" href="javascript:void(0);">5</a>
                                            </li>
                                            <li class="page-item next">
                                            <a class="page-link" href="javascript:void(0);"
                                                ><i class="tf-icon bx bx-chevrons-right"></i
                                            ></a>
                                            </li>
                                        </ul>
                                        </nav>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                
                        <!--/ Hoverable Table rows -->
      
                    </div>





            <!-- Content -->

                <!-- / Content  -->



                    <div class="container-xxl flex-grow-1 container-p-y">
                        <!-- Basic footer -->
                    <section id="basic-footer">
                        <footer class="footer bg-light">
                        <div
                            class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-3"
                        >
                            <div>
                            <a
                                href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/landing/"
                                target="_blank"
                                class="footer-text fw-bolder"
                                >OHCS</a
                            >
                            ©2022
                            </div>
                            <div>
                            <a href="#" class="footer-link me-4">License</a>
                            <a href="#" class="footer-link me-4">Help</a>
                            <a href="#" class="footer-link me-4">Contact</a>
                            <a href="#" class="footer-link">Terms &amp; Conditions</a>
                            </div>
                        </div>
                        </footer>
                    </section>
                    <!--/ Basic footer -->
                    </div>
                </div>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <script src="../js/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#search").on("keyup",function() {
                var value = $(this).val().toLowerCase();
                $("tbody tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

        $(document).on('click', '#download_image',function () {
            var download_id = $(this).val();
            // alert(download_id);

            $.ajax({
                type: "GET",
                url: "download.php?download_id=" + download_id,
                success: function (response) {
                    var res = $.parseJSON(response);
                    if(res.status == 500){
                        swal('Ooops..!',res.message,'error');
                    }
                    else if(res.status == 200){
                        swal('Good Job.!',res.message,'success');
                    }
                }
            });
        });

    </script>
  </body>
</html>