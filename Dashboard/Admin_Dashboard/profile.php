<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Profile - Academy Keeper</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
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
include '../php/db_connect.php'; // Database connection
session_start();


?>


    <div id="wrapper">
        <nav class="navbar align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0 navbar-dark" data-aos="fade-right" data-aos-duration="1200">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#" style="padding-bottom: 0px;padding-top: 0px;">
                    <div class="sidebar-brand-icon rotate-n-15" style="transform: rotate(3deg);">

                        <img src="assets/img/untitled-1.png" width="103" height="110" style="margin-right: -32px;margin-top: -12px;margin-left: -37px;margin-bottom: -6px;">
                    </div>



                    <div class="sidebar-brand-text mx-3"><span style="padding-top: 0px;padding-bottom: 0px;">Academy<br>Keeper</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link active" href="profile.php"><i class="fas fa-user" style="font-size: 13px;"></i><span>Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="Courses%20Management.php"><i class="fas fa-book" style="font-size: 13px;"></i><span>Course Management&nbsp;</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="faculty.php"><i class="fas fa-table"></i><span>Faculty Management&nbsp;</span></a>
                    <li class="nav-item"><a class="nav-link" href="student.php"><i class="far fa-user" style="font-size: 14px;"></i><span>Student Management&nbsp;</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="financial.php"><svg xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                fill="none" stroke-linecap="round" stroke-linejoin="round"
                                class="icon icon-tabler icon-tabler-moneybag" style="font-size: 14px;">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M9.5 3h5a1.5 1.5 0 0 1 1.5 1.5a3.5 3.5 0 0 1 -3.5 3.5h-1a3.5 3.5 0 0 1 -3.5 -3.5a1.5 1.5 0 0 1 1.5 -1.5z">
                                </path>
                                <path d="M4 17v-1a8 8 0 1 1 16 0v1a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                            </svg>&nbsp;
                            <span>Financial Management&nbsp;</span></a></li>
                                    <li class="nav-item"><a class="nav-link " href="exam.php"><i class="fas fa-table"></i><span>Exam Management&nbsp;</span></a></li>

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

                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><span class="d-none d-lg-inline me-2 text-gray-600 small">
                                    <?php
                                        echo $_SESSION['name'];
                                        ?>
                                </span>
                                <img class="border rounded-circle img-profile" src="
                                <?php
    $result = $conn->query("SELECT image FROM images ORDER BY id DESC LIMIT 1");

    if (!empty($result) && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $imageData = $row['image'];
      $img= 'data:image/jpeg;base64,' . base64_encode($imageData) . '';
      echo $img;
    } else {
      echo 'No image uploaded yet.';
    }

    $conn->close();
    ?>
    ">
                            </a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <h3 class="text-dark mb-4" data-aos="fade" data-aos-duration="1200" data-aos-delay="500">Profile</h3>
                    <div class="row mb-3">
                        <div class="col-lg-4 col-xxl-4">
                            <div class="card mb-3" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="600">
                                <div class="card-body text-center shadow">
                                    <!-- Display the image -->
<img class="rounded-circle mb-3 mt-4" id="profileImage" 
src=" 
<?php
echo $img;
?>
"
 width="160" height="160">




    <form action="../php/image/upload.php" method="post" enctype="multipart/form-data">

    <input type="file" name="image" accept="image/*" id="fileInput" style="display:none;">
    
<div class="mb-3">
    <button class="btn btn-primary btn-sm" onclick="document.getElementById('fileInput').click();" id="changePhotoBtn" type="button">Change Photo</button>
</div>
</form>

<script>
  // Trigger the form submission once a file is selected
  document.getElementById('fileInput').addEventListener('change', function() {
    if (this.files.length > 0) {
      // Submit the form once the user selects a file
      this.form.submit();
    }
  });
</script>


<!-- <script>
// Handle the 'Change Photo' button click to open the file input
document.getElementById("changePhotoBtn").addEventListener("click", function() {
    document.getElementById("fileInput").click();
});

// Update the profile image when a new file is selected
document.getElementById("fileInput").addEventListener("change", function(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            // Set the new image source to the selected file
            document.getElementById("profileImage").src = e.target.result;

            // Optionally, you can upload the new image to the server here
            uploadProfileImage(file);
        };

        reader.readAsDataURL(file);
    }
});

// Function to upload the image to the server using AJAX
function uploadProfileImage(file) {
    const formData = new FormData();
    formData.append("profile_image", file);

    fetch("upload-profile-image.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            console.log("Profile picture updated successfully!");
        } else {
            console.error("Error uploading image.");
        }
    })
    .catch(error => {
        console.error("Error during upload:", error);
    });
}
</script> -->


                                </div>
                            </div>
                           
                            <div class="card shadow mb-5" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="750">
                                <div class="card-header py-3">
                                    <p class="text-primary m-0 fw-bold"><strong>Basic Information</strong></p>
                                </div>
                                <div class="card-body">
                                    <div class="row" style="padding-bottom: 9px;">
                                        <div class="col-md-6 col-xxl-5"><strong class="text-primary-emphasis">Full Name:</strong></div>
                                        <div class="col"><strong class="text-primary-emphasis">
                                            <?php
                                        echo $_SESSION['name'];
                                        ?>
                                        </strong></div>
                                    </div>
                                    <div class="row" style="padding-bottom: 9px;">
                                        <div class="col-md-6 col-xxl-5"><strong class="text-primary-emphasis">Role:</strong></div>
                                        <div class="col"><strong class="text-primary-emphasis">ADMIN</strong></div>
                                    </div>

                                    <div class="row" style="padding-bottom: 9px;">
                                        <div class="col-md-6 col-xxl-5"><strong class="text-primary-emphasis">Phone NO.:</strong></div>
                                        <div class="col"><strong class="text-primary-emphasis">98123123123</strong></div>
                                    </div>
                                    <div class="row" style="padding-bottom: 9px;">
                                        <div class="col-md-6 col-xxl-5"><strong class="text-primary-emphasis">D.O.B:</strong></div>
                                        <div class="col"><strong class="text-primary-emphasis">2003/11/30</strong></div>
                                    </div>
                                    <div class="row" style="padding-bottom: 9px;">
                                        <div class="col-md-6 col-xxl-5"><strong class="text-primary-emphasis">Genger:</strong></div>
                                        <div class="col"><strong class="text-primary-emphasis">Male</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row mb-3 d-none">
                                <div class="col">
                                    <div class="card text-white bg-primary shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="card text-white bg-success shadow">
                                        <div class="card-body">
                                            <div class="row mb-2">
                                                <div class="col">
                                                    <p class="m-0">Peformance</p>
                                                    <p class="m-0"><strong>65.2%</strong></p>
                                                </div>
                                                <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                            </div>
                                            <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-3" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="600">
                                        <div class="card-header py-3">
                                            <p class="text-primary m-0 fw-bold">User Settings</p>
                                        </div>
                                        <div class="card-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="username"><strong>Username</strong></label><input class="form-control" type="text" id="username" placeholder="user.name" name="username"></div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mb-3"><label class="form-label" for="phone_no"><strong>Phone No.</strong></label><input class="form-control" type="number" id="number" placeholder="98....." name="phone_no"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="mb-3">
                                                    <label class="form-label" for="address"><strong>Address</strong></label><input class="form-control" type="text" id="address" placeholder="Khairani-8" name="address"></div>
                                                <div class="row"></div>





                                                </div>
                                                <div class="mb-3"><button class="btn btn-primary btn-sm" type="submit">Save Settings</button></div>
                                            </form>
                                        </div>
                                    </div>

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
            </div>

        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/aos.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="assets/js/theme.js"></script>


    <script src="assets/js/sweetalert.js"></script>


    <?php
    if(isset($_SESSION['status']) && $_SESSION['massage']) {
    ?>
    <script>
    swal({
    title: "<?php echo $_SESSION['massage']; ?>",
    icon: "<?php echo $_SESSION['status']; ?>",
    });
    </script>
    <?php
    unset($_SESSION['status']);
    unset($_SESSION['massage']);
}
?>


</body>
</html>