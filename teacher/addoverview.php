<?php
include '../_dbConnect.php';
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
    <title>Add Course - online-class</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="../img/favicon-asdr.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: "Inter", sans-serif;
    }

    .formbold-main-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 48px;
    }

    .formbold-form-wrapper {
        margin: 0 auto;
        max-width: 550px;
        width: 100%;
        background: white;
    }

    .formbold-steps {
        padding-bottom: 18px;
        margin-bottom: 35px;
        border-bottom: 1px solid #DDE3EC;
    }

    .formbold-steps ul {
        padding: 0;
        margin: 0;
        list-style: none;
        display: flex;
        gap: 40px;
    }

    .formbold-steps li {
        display: flex;
        align-items: center;
        gap: 14px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #536387;
    }

    .formbold-steps li span {
        display: flex;
        align-items: center;
        justify-content: center;
        background: #DDE3EC;
        border-radius: 50%;
        width: 36px;
        height: 36px;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        color: #536387;
    }

    .formbold-steps li.active {
        color: #07074D;
        ;
    }

    .formbold-steps li.active span {
        background: #6A64F1;
        color: #FFFFFF;
    }

    .formbold-input-flex {
        display: flex;
        gap: 20px;
        margin-bottom: 22px;
    }

    .formbold-input-flex>div {
        width: 50%;
    }

    .formbold-form-input {
        width: 100%;
        padding: 13px 22px;
        border-radius: 5px;
        border: 1px solid #DDE3EC;
        background: #FFFFFF;
        font-weight: 500;
        font-size: 16px;
        color: #536387;
        outline: none;
        resize: none;
    }

    .formbold-form-input:focus {
        border-color: #6a64f1;
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }

    .formbold-form-label {
        color: #07074D;
        font-weight: 500;
        font-size: 14px;
        line-height: 24px;
        display: block;
        margin-bottom: 10px;
    }

    .formbold-form-confirm {
        border-bottom: 1px solid #DDE3EC;
        padding-bottom: 35px;
    }

    .formbold-form-confirm p {
        font-size: 16px;
        line-height: 24px;
        color: #536387;
        margin-bottom: 22px;
        width: 75%;
    }

    .formbold-form-confirm>div {
        display: flex;
        gap: 15px;
    }

    .formbold-confirm-btn {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #FFFFFF;
        border: 0.5px solid #DDE3EC;
        border-radius: 5px;
        font-size: 16px;
        line-height: 24px;
        color: #536387;
        cursor: pointer;
        padding: 10px 20px;
        transition: all .3s ease-in-out;
    }

    .formbold-confirm-btn {
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.12);
    }

    .formbold-confirm-btn.active {
        background: #6A64F1;
        color: #FFFFFF;
    }

    .formbold-form-step-1,
    .formbold-form-step-2,
    .formbold-form-step-3 {
        display: none;
    }

    .formbold-form-step-1.active,
    .formbold-form-step-2.active,
    .formbold-form-step-3.active {
        display: block;
    }

    .formbold-form-btn-wrapper {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 25px;
        margin-top: 25px;
    }

    .formbold-back-btn {
        cursor: pointer;
        background: #FFFFFF;
        border: none;
        color: #07074D;
        font-weight: 500;
        font-size: 16px;
        line-height: 24px;
        display: none;
    }

    .formbold-back-btn.active {
        display: block;
    }

    .formbold-btn {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 16px;
        border-radius: 5px;
        padding: 10px 25px;
        border: none;
        font-weight: 500;
        background-color: #6A64F1;
        color: white;
        cursor: pointer;
    }

    .formbold-btn:hover {
        box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
    }
</style>

<body style="font-family: 'Poppins', sans-serif;">


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5"
            style="position: fixed; top: 0;width: 100%; z-index: 9999; background-color: white;">
            <div class="col-lg-3 d-none d-lg-block">
                <!-- <h1 class="m-0"><span class="text-primary">ASDR</span>INFOTECH</h1> -->
                <a href="index"><img src="../img/ASDR LOGO.png" style="width: 166px; padding: 3px;"></a>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
                    style="padding-top: 0rem !important; padding-bottom: 0rem !important;">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <!-- <h1 class="m-0"><span class="text-primary">ASDR</span>INFOTECH</h1> -->
                        <img src="../img/ASDR LOGO.png" class="m-0" style="width: 140px;">
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
                                <a href="../index" class="nav-item nav-link ">Home</a>
                                <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="coursesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Explore</a>
                                <div class="dropdown-menu" aria-labelledby="coursesDropdown">
                                    <!-- Software Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="softwareDropdown"
                                            data-toggle="dropdown">Software Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../webfullstack">Full Stack Web
                                                Development</a>
                                            <a class="dropdown-item" href="../javafullstack">Full Stack Java
                                                Development</a>
                                            <a class="dropdown-item" href="../frontend">Frontend Development</a>
                                            <a class="dropdown-item" href="../java">Java</a>
                                            <a class="dropdown-item" href="../python">Python</a>
                                            <a class="dropdown-item" href="../phpcourse">PHP</a>
                                            <a class="dropdown-item" href="../dotnet">.Net C#</a>
                                            <!-- <a class="dropdown-item" href="../csharp">C#</a> -->
                                            <a class="dropdown-item" href="../cpp">c/c++</a>
                                            <a class="dropdown-item" href="../databaselanguage">Database</a>
                                        </div>
                                    </div>

                                    <!-- Testing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="testingDropdown"
                                            data-toggle="dropdown">Testing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../softwaretesting">Manual/Automation
                                                Testing</a>
                                            <!-- <a class="dropdown-item" href="#">Automation Testing</a> -->
                                        </div>
                                    </div>

                                    <!-- Marketing Courses -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="marketingDropdown"
                                            data-toggle="dropdown">Marketing Courses</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../digitalmarketing">Digital Marketing</a>
                                            <a class="dropdown-item" href="../salesandmarketing">Sales and
                                                Marketing</a>
                                        </div>
                                    </div>

                                    <!-- ERP Trainings -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="erpDropdown"
                                            data-toggle="dropdown">ERP Trainings</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../erp">ERP Foundation</a>
                                            <a class="dropdown-item" href="../erpsap">ERP(SAP) Advance</a>
                                        </div>
                                    </div>

                                    <!-- IT Fast Track Program -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="fastTrackDropdown"
                                            data-toggle="dropdown">IT Fast Track Program</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../itbridge">IT Bridge Program</a>
                                            <a class="dropdown-item" href="../itentrylevel">IT Entry Level Program</a>
                                        </div>
                                    </div>

                                    <!-- Interview Skills -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Interview Skills</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../skills">Softskills</a>
                                        </div>
                                    </div>

                                    <!-- Data Science -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Data Science</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../datascience">Data Science</a>
                                        </div>
                                    </div>

                                    <!-- Artificial Intelligence -->
                                    <div class="dropdown-submenu dropright">
                                        <a class="dropdown-item dropdown-toggle" href="#" id="interviewDropdown"
                                            data-toggle="dropdown">Artificial Intelligence</a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="../machinelearning">Machine Learning</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                <a href="../course" class="nav-item nav-link ">Enroll</a>
                                <a href="../teacher/overview" class="nav-item nav-link active">Add Courses</a>
                                <a href="../gallery" class="nav-item nav-link">Events & Media</a>
                                <a href="../dashbordEvents" class="nav-item nav-link">Dashbord</a>
                                ';
                            }
                            ?>
                        </div>
                        <?php
                        if (isset($_SESSION['user_id'])) {
                            // User is logged in, show logout button
                            echo '<a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="../logout">Logout</a>';
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
                                    <div class="form-group">
                                        <label for="user-type">User Type</label>
                                        <select class="form-control" id="user-type" name="user_type">
                                            <option value="admin">Admin</option>
                                            <option value="teacher">Teacher</option>
                                            <option value="student">Student</option>
                                        </select>
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


    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Courses</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Courses</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container">
        <form action="#" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label mb-4"><b>Course Details</b></label> <br>
                <label for="exampleFormControlInput1" class="form-label text-dark">Course Name</label>
                <input type="text" class="form-control" name="cname" id="exampleFormControlInput1"
                    placeholder="Ex: Machine Learning" required>
            </div>
            <div class="mb-3">
                <div class="form-group d-flex justify-content-between">
                    <label for="exampleFormControlSelect1" class="text-dark">Course Duration</label>
                    <label for="exampleFormControlSelect2" class="text-dark">Course Domain</label>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <select class="form-control mr-3" name="cduration" id="exampleFormControlSelect1" required>
                        <option value="" selected>Select Duration</option>
                        <option value="30 Days">30 Days</option>
                        <option value="60 Days">60 Days</option>
                        <option value="90 Days">90 Days</option>
                        <option value="120 Days">120 Days</option>
                        <option value="150 Days">150 Days</option>
                        <option value="180 Days">180 Days</option>
                    </select>

                    <input type="number" name="camount" class="form-control mr-3" id="courseStartDate"
                        placeholder="Enter course amount" required>

                </div>
            </div>
            <div class="mb-3">
                <div class="form-group d-flex justify-content-between">
                    <label for="courseStartDate" class="text-dark">Course Start Date</label>
                    <label for="courseStartDay" class="text-dark">Course Start Time</label>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <input type="date" name="cstartdate" class="form-control mr-3" id="courseStartDate" required>
                    <input type="time" name="cstarttime" class="form-control" id="courseStartDate" required>

                </div>
            </div>
            <div class="mb-3">
                <div class="form-group d-flex justify-content-between">
                    <label for="courseStartDate" class="text-dark">Course End Date</label>
                    <label for="courseStartDay" class="text-dark">Course End Time</label>
                </div>
                <div class="form-group d-flex justify-content-between">
                    <input type="date" name="cenddate" class="form-control mr-3" id="courseStartDate" required>
                    <input type="time" name="cendtime" class="form-control" id="courseStartDate" required>

                </div>
            </div>
            <div class="mb-3 mt-4">
                <label for="courseStartDay" class="text-dark">Course Image</label>
                <input type="file" name="cimg" class="form-control-file" id="exampleFormControlFile1" required>
            </div>


            <label for="exampleFormControlInput1" class="form-label mt-4"><b>Course Syllabus</b></label> <br>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label text-dark mt-3">Select syllabus</label>
                <select class="form-control" id="exampleFormControlSelect2" name="syllabus" required>
                    <option value="" selected>Select Syllabus</option>
                    <option value="Full Stack Web Development">Full Stack Web Development</option>
                    <option value="Full Stack Java Development">Full Stack Java Development</option>
                    <option value="Frontend Development">Frontend Development</option>
                    <option value="Java">Java</option>
                    <option value="Python">Python</option>
                    <option value="PHP">PHP</option>
                    <option value=".Net C#">.Net C#</option>
                    <option value="c/c++">c/c++</option>
                    <option value="Database">Database</option>
                    <option value="Manual/Automation Testing">Manual/Automation Testing</option>
                    <option value="Digital Marketing">Digital Marketing</option>
                    <option value="Sales and Marketing">Sales and Marketing</option>
                    <option value="ERP Foundation">ERP Foundation</option>
                    <option value="ERP(SAP) Advance">ERP(SAP) Advance</option>
                    <option value="IT Bridge Program">IT Bridge Program</option>
                    <option value="IT Entry Level Program">IT Entry Level Program</option>
                    <option value="Softskills">Softskills</option>
                    <option value="Data Science">Data Science</option>
                    <option value="Machine Learning">Machine Learning</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label text-dark">Course Description</label>
                <textarea class="form-control"  name="syllabusdescription" id="exampleFormControlTextarea1" rows="3" maxlength="250"
                    required></textarea>
            </div>
            <div class="mt-5 mb-5">
                <center>
                    <button type="submit" name="addcourse" class="btn btn-primary">Add Course</button>
                </center>
            </div>
        </form>
    </div>

    <?php
    // Connect to MySQL database
    // Connect to database
    
    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["addcourse"])) {
            $cname = $_POST["cname"];
            $cduration = $_POST["cduration"];
            $camount = $_POST["camount"];
            $cstartdate = $_POST["cstartdate"];
            $cstarttime = $_POST["cstarttime"];
            $cenddate = $_POST["cenddate"];
            $cendtime = $_POST["cendtime"];
            // $cimg = $_POST["cimg"];
            $syllabus = $_POST["syllabus"];
            $syllabusdescription = $_POST["syllabusdescription"];

            $fileName = $_FILES["cimg"]["name"];
            $tempName = $_FILES["cimg"]["tmp_name"];

            $folder = "courseImges/.$fileName";
            move_uploaded_file($tempName, $folder);

            $insertData = "INSERT INTO `courses` (`course_name`, `course_duration`, `startdate`, `enddate`, `starttime`, `endtime`, `cource_amount`, `syllabus_type`, `course_description`, `course_img`) VALUES ('$cname', '$cduration', '$cstartdate', '$cenddate', '$cstarttime', '$cendtime', '$camount', '$syllabus', '$syllabusdescription', '$folder')";
            $queryInsertData = mysqli_query($conn, $insertData);

            if ($queryInsertData) {
                echo '
                <script>
                    alert("Course Added Successfully");
                    window.location.href = "overview";
                </script>

                ';
            } else {
                echo '
                <script>
                    alert("Something went wrong");
                </script>
                ';
            }
        }
    }

    // Close MySQL connection
    mysqli_close($conn);
    ?>


    <script>
        const stepMenuOne = document.querySelector('.formbold-step-menu1')
        const stepMenuTwo = document.querySelector('.formbold-step-menu2')
        const stepMenuThree = document.querySelector('.formbold-step-menu3')

        const stepOne = document.querySelector('.formbold-form-step-1')
        const stepTwo = document.querySelector('.formbold-form-step-2')
        const stepThree = document.querySelector('.formbold-form-step-3')

        const formSubmitBtn = document.querySelector('.formbold-btn')
        const formBackBtn = document.querySelector('.formbold-back-btn')

        formSubmitBtn.addEventListener("click", function (event) {
            event.preventDefault()
            if (stepMenuOne.className == 'formbold-step-menu1 active') {
                event.preventDefault()

                stepMenuOne.classList.remove('active')
                stepMenuTwo.classList.add('active')

                stepOne.classList.remove('active')
                stepTwo.classList.add('active')

                formBackBtn.classList.add('active')
                formBackBtn.addEventListener("click", function (event) {
                    event.preventDefault()

                    stepMenuOne.classList.add('active')
                    stepMenuTwo.classList.remove('active')

                    stepOne.classList.add('active')
                    stepTwo.classList.remove('active')

                    formBackBtn.classList.remove('active')

                })

            } else if (stepMenuTwo.className == 'formbold-step-menu2 active') {
                event.preventDefault()

                stepMenuTwo.classList.remove('active')
                stepMenuThree.classList.add('active')

                stepTwo.classList.remove('active')
                stepThree.classList.add('active')

                formBackBtn.classList.remove('active')
                formSubmitBtn.textContent = 'Submit'
            } else if (stepMenuThree.className == 'formbold-step-menu3 active') {
                document.querySelector('form').submit()
            }
        })



    </script>
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