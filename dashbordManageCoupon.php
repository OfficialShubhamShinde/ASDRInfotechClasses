<?php
include '_dbConnect.php';
?>

<?php
session_start();

$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';

// Use session variables in your code

?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Coupon - ASDR Infotech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon-asdr.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<style>
</style>

<body style="font-family: 'Poppins', sans-serif;">

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5"
            style="position: fixed; top: 0;width: 100%; z-index: 9999; background-color: white;">
            <div class="col-lg-3 d-none d-lg-block">
                <!-- <h1 class="m-0"><span class="text-primary">ASDR</span>INFOTECH</h1> -->
                <a href="index"><img src="img/ASDR LOGO.png" style="width: 166px; padding: 3px;"></a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
                    style="padding-top: 0rem !important; padding-bottom: 0rem !important;">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <!-- <h1 class="m-0"><span class="text-primary">ASDR</span>INFOTECH</h1> -->
                        <img src="img/ASDR LOGO.png" class="m-0" style="width: 140px;">
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav py-0">
                            <?php
                            if ($user_type !== 'student' && $user_type !== 'teacher') {
                                echo '
                                <a href="index" class="nav-item nav-link ">Home</a>
                                <a href="about" class="nav-item nav-link ">About</a>
                                <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                                <div class="dropdown-menu" aria-labelledby="coursesDropdown">
                                    <!-- Software Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="softwareDropdown"
                                            data-toggle="dropdown">Software Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="webfullstack">Full Stack Web
                                                Development</a>
                                            <a class="dropdown-item" href="javafullstack">Full Stack Java
                                                Development</a>
                                            <a class="dropdown-item" href="frontend">Frontend Development</a>
                                            <a class="dropdown-item" href="java">Java</a>
                                            <a class="dropdown-item" href="python">Python</a>
                                            <a class="dropdown-item" href="phpcourse">PHP</a>
                                            <a class="dropdown-item" href="dotnet">.Net C#</a>
                                            <!-- <a class="dropdown-item" href="csharp">C#</a> -->
                                            <a class="dropdown-item" href="cpp">c/c++</a>
                                            <a class="dropdown-item" href="databaselanguage">Database</a>
                                        </div>
                                    </div>

                                    <!-- Testing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="testingDropdown"
                                            data-toggle="dropdown">Testing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="softwaretesting">Manual/Automation
                                                Testing</a>
                                            <!-- <a class="dropdown-item" href="#">Automation Testing</a> -->
                                        </div>
                                    </div>

                                    <!-- Marketing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="marketingDropdown"
                                            data-toggle="dropdown">Marketing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="digitalmarketing">Digital Marketing</a>
                                            <a class="dropdown-item" href="salesandmarketing">Sales and
                                                Marketing</a>
                                        </div>
                                    </div>

                                    <!-- ERP Trainings -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="erpDropdown"
                                            data-toggle="dropdown">ERP Trainings</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="erp">ERP Foundation</a>
                                            <a class="dropdown-item" href="erpsap">ERP(SAP) Advance</a>
                                        </div>
                                    </div>

                                    <!-- IT Fast Track Program -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="fastTrackDropdown"
                                            data-toggle="dropdown">IT Fast Track Program</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="itbridge">IT Bridge Program</a>
                                            <a class="dropdown-item" href="itentrylevel">IT Entry Level Program</a>
                                        </div>
                                    </div>

                                    <!-- Interview Skills -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Interview Skills</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="skills">Softskills</a>
                                        </div>
                                    </div>

                                    <!-- Data Science -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Data Science</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="datascience">Data Science</a>
                                        </div>
                                    </div>

                                    <!-- Artificial Intelligence -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Artificial Intelligence</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="machinelearning">Machine Learning</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <a href="course" class="nav-item nav-link ">Enroll</a>
                            <a href="internship" class="nav-item nav-link ">Internship Program</a>
                            <a href="gallery" class="nav-item nav-link">Events & Media</a>
                            <a href="contact" class="nav-item nav-link">Contact</a>
                                ';
                            } elseif ($user_type == 'student') {
                                echo '
                                <a href="index" class="nav-item nav-link ">Home</a>
                                <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                                <div class="dropdown-menu" aria-labelledby="coursesDropdown">
                                    <!-- Software Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="softwareDropdown"
                                            data-toggle="dropdown">Software Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="webfullstack">Full Stack Web
                                                Development</a>
                                            <a class="dropdown-item" href="javafullstack">Full Stack Java
                                                Development</a>
                                            <a class="dropdown-item" href="frontend">Frontend Development</a>
                                            <a class="dropdown-item" href="java">Java</a>
                                            <a class="dropdown-item" href="python">Python</a>
                                            <a class="dropdown-item" href="phpcourse">PHP</a>
                                            <a class="dropdown-item" href="dotnet">.Net C#</a>
                                            <!-- <a class="dropdown-item" href="csharp">C#</a> -->
                                            <a class="dropdown-item" href="cpp">c/c++</a>
                                            <a class="dropdown-item" href="databaselanguage">Database</a>
                                        </div>
                                    </div>

                                    <!-- Testing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="testingDropdown"
                                            data-toggle="dropdown">Testing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="softwaretesting">Manual/Automation
                                                Testing</a>
                                            <!-- <a class="dropdown-item" href="#">Automation Testing</a> -->
                                        </div>
                                    </div>

                                    <!-- Marketing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="marketingDropdown"
                                            data-toggle="dropdown">Marketing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="digitalmarketing">Digital Marketing</a>
                                            <a class="dropdown-item" href="salesandmarketing">Sales and
                                                Marketing</a>
                                        </div>
                                    </div>

                                    <!-- ERP Trainings -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="erpDropdown"
                                            data-toggle="dropdown">ERP Trainings</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="erp">ERP Foundation</a>
                                            <a class="dropdown-item" href="erpsap">ERP(SAP) Advance</a>
                                        </div>
                                    </div>

                                    <!-- IT Fast Track Program -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="fastTrackDropdown"
                                            data-toggle="dropdown">IT Fast Track Program</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="itbridge">IT Bridge Program</a>
                                            <a class="dropdown-item" href="itentrylevel">IT Entry Level Program</a>
                                        </div>
                                    </div>

                                    <!-- Interview Skills -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Interview Skills</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="skills">Softskills</a>
                                        </div>
                                    </div>

                                    <!-- Data Science -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Data Science</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="datascience">Data Science</a>
                                        </div>
                                    </div>

                                    <!-- Artificial Intelligence -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Artificial Intelligence</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="machinelearning">Machine Learning</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <a href="course" class="nav-item nav-link ">Enroll</a>
                            <a href="internship" class="nav-item nav-link ">Internship Program</a>
                            <a href="enroll" class="nav-item nav-link">My Learnings</a>
                            <a href="contact" class="nav-item nav-link">Contact Us</a>
                                ';
                            } elseif ($user_type == 'teacher') {
                                echo '
                                <a href="index" class="nav-item nav-link ">Home</a>
                                <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                                <div class="dropdown-menu" aria-labelledby="coursesDropdown">
                                    <!-- Software Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="softwareDropdown"
                                            data-toggle="dropdown">Software Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="webfullstack">Full Stack Web
                                                Development</a>
                                            <a class="dropdown-item" href="javafullstack">Full Stack Java
                                                Development</a>
                                            <a class="dropdown-item" href="frontend">Frontend Development</a>
                                            <a class="dropdown-item" href="java">Java</a>
                                            <a class="dropdown-item" href="python">Python</a>
                                            <a class="dropdown-item" href="phpcourse">PHP</a>
                                            <a class="dropdown-item" href="dotnet">.Net C#</a>
                                            <!-- <a class="dropdown-item" href="csharp">C#</a> -->
                                            <a class="dropdown-item" href="cpp">c/c++</a>
                                            <a class="dropdown-item" href="databaselanguage">Database</a>
                                        </div>
                                    </div>

                                    <!-- Testing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="testingDropdown"
                                            data-toggle="dropdown">Testing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="softwaretesting">Manual/Automation
                                                Testing</a>
                                            <!-- <a class="dropdown-item" href="#">Automation Testing</a> -->
                                        </div>
                                    </div>

                                    <!-- Marketing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="marketingDropdown"
                                            data-toggle="dropdown">Marketing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="digitalmarketing">Digital Marketing</a>
                                            <a class="dropdown-item" href="salesandmarketing">Sales and
                                                Marketing</a>
                                        </div>
                                    </div>

                                    <!-- ERP Trainings -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="erpDropdown"
                                            data-toggle="dropdown">ERP Trainings</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="erp">ERP Foundation</a>
                                            <a class="dropdown-item" href="erpsap">ERP(SAP) Advance</a>
                                        </div>
                                    </div>

                                    <!-- IT Fast Track Program -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="fastTrackDropdown"
                                            data-toggle="dropdown">IT Fast Track Program</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="itbridge">IT Bridge Program</a>
                                            <a class="dropdown-item" href="itentrylevel">IT Entry Level Program</a>
                                        </div>
                                    </div>

                                    <!-- Interview Skills -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Interview Skills</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="skills">Softskills</a>
                                        </div>
                                    </div>

                                    <!-- Data Science -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Data Science</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="datascience">Data Science</a>
                                        </div>
                                    </div>

                                    <!-- Artificial Intelligence -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Artificial Intelligence</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="machinelearning">Machine Learning</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                <a href="course" class="nav-item nav-link ">Enroll</a>
                                <a href="teacher/overview" class="nav-item nav-link">Add Courses</a>
                                <a href="gallery" class="nav-item nav-link">Events & Media</a>
                                <a href="dashbordEvents" class="nav-item nav-link active">Dashbord</a>
                                ';
                            }
                            ?>
                        </div>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                            // User is logged in, show logout button
                            echo '<a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="logout">Logout</a>';
                        } else {

                            // User is not logged in, show login button
                            echo '<a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="#login-modal" data-toggle="modal">Login</a>';
                        }
                        ?>
                    </div>
                </nav>
                <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modal-label"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <center>
                                    <h5 class="modal-title" id="login-modal-label">Login to Your Account</h5>
                                </center>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="login" method="POST">
                                    <div class="form-group">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            placeholder="Password">
                                    </div>
                                    <center>
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </center>
                                    <p class="mt-3 mb-0">Don't have an account yet? <a href="#signup-modal"
                                            data-toggle="modal" data-dismiss="modal">Create Account</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



                <!-- Signup Modal -->
                <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog"
                    aria-labelledby="signup-modal-label" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="signup-modal-label">Create an Account</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="signup">
                                    <div class="form-group">
                                        <label for="signup-name">Full Name</label>
                                        <input type="text" class="form-control" id="signup-name" name="name"
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-email">Email Address</label>
                                        <input type="email" class="form-control" id="signup-email" name="email"
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-password">Password</label>
                                        <input type="password" class="form-control" id="signup-password" name="password"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm-password"
                                            name="confirm_password" placeholder="Confirm Password">
                                    </div>

                                    <center>
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </center>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nav End -->



    <!-- Courses start -->



    <br><br><br><br>
    <div class="sidebarMenu">
        <!-- Sidebar -->
        <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
            <button onclick="w3_close()" class="w3-bar-item w3-large" style="justify-items: right;"> &times;</button>
            <a href="dashbordEvents" class="w3-bar-item w3-button">Events</a>
            <a href="dashbordEntollCourses" class="w3-bar-item w3-button">Enroll Courses</a>
            <a href="dashbordNewslatter" class="w3-bar-item w3-button">Newsletter</a>
            <a href="dashbordManageCoupon" class="w3-bar-item w3-button">Manage Coupon</a>
            <a href="dashbordInternshipApplication" class="w3-bar-item w3-button">Internship Applications</a>
            <!-- <a href="dashbordManageCoupon" class="w3-bar-item w3-button">Manage Coupon</a> -->
            <a href="dashbordContact" class="w3-bar-item w3-button">Contact</a>
        </div>

        <!-- Page Content -->
        <div class="">
            <button class="w3-button w3-xlarge" onclick="w3_open()">☰</button>
            <div class="w3-container">
                <!-- <h1>My Page</h1> -->
            </div>
        </div>
        <div class="container">
            <!-- Option to add coupon: -->
            <div class="container events">
                <div class="container col-xxl-8 px-4 ">
                    <div class="row flex-lg-row-reverse align-items-center g-5 py-5"
                        style="padding-top: 0rem !important;">
                        <div class="col-10 col-sm-8 col-lg-6">
                            <img src="img/ccode.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes"
                                width="600" height="400" loading="lazy">
                        </div>
                        <div class="col-lg-6">
                            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Add Coupon
                            </h1>
                            <p class="lead">Provide your administrators with the tools to tailor promotions by setting
                                discount percentages, usage limits, and expiration dates, ensuring a personalized
                                approach to user engagement.</p>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                                <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">
                                    Add
                                    Coupon
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" style="z-index: 9999;"
                                    data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div
                                        class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="staticBackdropLabel">Add Coupon</h4>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="addCouponCode.php">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Coupon
                                                        Code<span style="color: red">*</span> </label>
                                                    <div class="mb-3">
                                                        <input type="text" class="form-control" id="ccode" name="ccode"
                                                            aria-describedby="emailHelp" required>
                                                    </div>

                                                    <label for="exampleFormControlTextarea1" class="form-label">Coupon
                                                        Value<span style="color: red">*</span> </label>
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control" id="cvalue"
                                                            name="cvalue" aria-describedby="emailHelp" required>
                                                    </div>

                                                    <label for="exampleFormControlTextarea1" class="form-label">Coupon
                                                        Type<span style="color: red">*</span> </label>
                                                    <div class="mb-3">
                                                        <select class="form-select rounded" name="ctype" required
                                                            aria-label="Default select example"
                                                            style="width: 742px; padding: 7px; border-color: rgb(220,224,228);">
                                                            <option selected>Select</option>
                                                            <option value="Percentage">Percentage</option>
                                                            <option value="Rupee">Rupee</option>
                                                        </select>
                                                    </div>

                                                    <label for="exampleFormControlTextarea1" class="form-label">Coupon
                                                        Quantity<span style="color: red">*</span> </label>
                                                    <div class="mb-3">
                                                        <input type="number" class="form-control" id="cquantity"
                                                            name="cquantity" aria-describedby="emailHelp" required>
                                                    </div>

                                                    <center><button type="submit" name="addCoupon"
                                                            class="btn btn-primary btn-lg px-4 me-md-2">Add
                                                            Coupon</button>
                                                    </center>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <center>
                <h3 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">All Coupons</h3>
            </center>
            <br>
            <?php
            $sqlForFetchCoupon = "SELECT * FROM coupon_master";
            $query = mysqli_query($conn, $sqlForFetchCoupon);
            if (mysqli_num_rows($query) > 0) {
                ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Coupon Code</th>
                            <th scope="col">Coupon Value</th>
                            <th scope="col">Coupon Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- <tr> -->
                        <?php

                        $numRows = mysqli_num_rows($query);
                        $srno = 1;

                        if ($numRows >= 1) {
                            while ($rowfetch = mysqli_fetch_assoc($query)) {
                                $coupon_id = $rowfetch['coupon_id'];
                                $coupon_code = $rowfetch['coupon_code'];
                                $coupon_value = $rowfetch['coupon_value'];
                                $coupon_type = $rowfetch['coupon_type'];

                                echo '
                                <tr>
                                <th scope="row">' . $srno++ . '</th>
                                <td>' . $coupon_code . '</td>
                                <td>' . $coupon_value . '</td>
                                <td>' . $coupon_type . '</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Button group">
                                        <a href="editCoupon?couponid=' . $coupon_id . '"><button type="button" class="btn btn-primary btn-sm mr-2">Edit</button></a>
                                        <a href="deleteCoupon?couponid=' . $coupon_id . '"><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                                    </div>

                                </td>
                                </tr>
                            ';
                            }
                        } else {
                            echo '
                            Coupon Not Found
                            ';
                        }

                        ?>
                        <!-- </tr> -->
                    </tbody>
                </table>
                <?php
            } else {
                echo '
                <center><h3>Currently no any coupon Code available</h3></center>
                ';
            }
            ?>

        </div>

    </div>
    <script>
        function w3_open() {
            document.getElementById("mySidebar").style.display = "block";
        }

        function w3_close() {
            document.getElementById("mySidebar").style.display = "none";
        }
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            // Update status when status element is clicked
            $('.status').on('click', function (e) {
                e.preventDefault();
                var courseId = $(this).data('course-id');
                var currentStatus = $(this).data('status');
                var newStatus = (currentStatus === 'active') ? 'inactive' : 'active';
                var statusElement = $(this);

                $.ajax({
                    url: 'update_status.php', // Replace with the actual file to handle the update
                    method: 'POST',
                    data: { course_id: courseId, status: newStatus },
                    success: function (response) {
                        // Update the displayed status
                        statusElement.text(newStatus);
                        statusElement.data('status', newStatus);
                    },
                    error: function (xhr, status, error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>

    <!-- Courses End -->

    <!-- Footer Start -->

    <div class="container-fluid text-white" style="padding: 0px;  background: #303030;">
        <center>
            <p style="margin-bottom: 0rem;">Copyright© 2022 <a href="https://asdrinfotech.com/"
                    style="color: orange;">ASDR Infotech</a> - All
                Rights Reserved | Powered by <a href="https://asdrinfotech.com/" style="color: orange;">ASDR Infotech
                    Pvt.Ltd.</a></p>
        </center>
    </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <!-- dropdown for navbar -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Automatically open sub-dropdown on hover
        $('.dropdown-submenu').hover(function () {
            $(this).find('.dropdown-toggle').trigger('click');
        });

        // Close other dropdowns when a new one is opened
        $('.dropdown-submenu a.dropdown-toggle').on("click", function (e) {
            $(this).next('div.dropdown-menu').toggle();
            $('.dropdown-submenu div.dropdown-menu').not($(this).next()).hide();
            e.stopPropagation();
            e.preventDefault();
        });
    </script>
    <!-- navbar dropdown end -->
</body>

</html>