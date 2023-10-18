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
    <title>Internship | ASDR Infotech</title>
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
    <style>
        /* Add custom styles here */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu .dropdown-menu {
            border-radius: 0;
            left: 100%;
            top: 0;
            margin-top: -1px;
            border-radius: 8px;
        }
    </style>

    <style>
    
.course-title {
    text-align: center;
    margin-bottom: 30px;
}

.accordion {
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgb(0 0 0 / 18%);
    margin-bottom: 10px;
        }

.accordion-item {
    border-bottom: 1px solid #ddd;
}


.accordion-header h5 {
    margin: 0;
    font-size: 1rem;
    font-weight: bold;
}

.accordion-content {
    padding: 16px;
    display: none;
}

.accordion-content ul {
/*    list-style: none;*/
    padding-left: 20px;
    text-align: left;
}

.show {
    display: block;
}


.accordion-header {
/*            background-color: #f9f9f9;*/
            padding: 16px;
            cursor: pointer;
            user-select: none;
            position: relative; /* Add this line to make the ::after pseudo-element position relative to the header */
            text-align: left;
        }

        .accordion-header::after {
            content: "\f078"; /* Unicode of Font Awesome caret-down icon */
            font-family: "Font Awesome 5 Free"; /* Font Awesome font-family */
            font-weight: 900; /* Font Awesome font-weight for the solid icons */
            font-size: 1.2rem;
            color: #555;
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease-in-out;
        }

        .accordion-header.active::after {
            transform: translateY(-50%) rotate(180deg);
        }

    </style>
</head>

<body>

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
                            <a href="internship" class="nav-item nav-link active">Internship Program</a>
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
                            <a href="internship" class="nav-item nav-link active">Internship Program</a>
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
                                <a href="dashbordEvents" class="nav-item nav-link">Dashbord</a>
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



    <!-- Header Start -->
    <div class="container-fluid page-header">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">INTERNSHIP OPPORTUNITIES</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Internship Program</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    







    <!-- Testimonial Start -->
        <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Internship</h5>
                <h1>What Say Our Students</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">An internship is a period when organizations offer a work experience for a specific time period. can showcase your talent and technical and organizational skills. It gives you an opportunity to gain valuable experience in your field as well as to learn new skills. Although not guaranteed Internship will provide you with a chance to land a full-time position. You have to make sure that you add value to the organization, and you will surely be rewarded.</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-1.jpg" alt="">
                            <h5 class="m-0">Shivraj </h5>
                            <span>Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">"This online course platform is a game-changer! The courses are high-quality and affordable, and the platform is easy to navigate. I love that I can take courses on a variety of topics from anywhere in the world. I've gained so much knowledge and have even been able to advance in my career thanks to the skills I've learned."</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-2.jpg" alt="">
                            <h5 class="m-0">Bhagyashri</h5>
                            <span>Student</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-normal mb-4">"I've tried several online course platforms, but this one is by far the best. The instructors are experts in their fields and provide clear and concise lessons. The platform's user interface is intuitive and easy to use, and I appreciate the progress tracking features that help me stay motivated. I highly recommend this platform to anyone looking to expand their knowledge and skills."</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/testimonial-3.jpg" alt="">
                            <h5 class="m-0">Rushikesh</h5>
                            <span>Student</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Testimonial End -->


<div class="container-fluid container">
    <br>
   <center><h2 class="text-primary">Join Our Team</h2></center>
   <p>An internship is a period when organizations offer a work experience for a specific time period. can showcase your talent and technical and organizational skills. It gives you an opportunity to gain valuable experience in your field as well as to learn new skills. Although not guaranteed Internship will provide you with a chance to land a full-time position. You have to make sure that you add value to the organization, and you will surely be rewarded.</p>
   <br>
   <p>We are offering Internship opportunities with varied sets of skills and positions. (3-6 Months Internships available)</p>

</div>
<br>



<!-- Drop down internship -->
<div class="container-fluid py-0">
    <div class="container pt-0 pb-3">
        <center><div class="accordion col-lg-9">
                
<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(1)">
        <h5>Web Developer (Back End)</h5>
    </div>
    <div class="accordion-content" id="accordion-1">
        <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Design and implement server-side application logic</li>
                    <li>Collaborate with front-end developers to integrate user-facing elements</li>
                    <li>Perform debugging, testing, and code improvement</li>
                    <li>Optimize applications for maximum speed and scalability</li>
                    <li>Contribute to technical documentation</li>
                </ul>

                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in a Computer Science or related degree program</li>
                    <li>Good understanding of web development and server-side programming</li>
                    <li>Skilled in programming languages such as HTML/CSS, Bootstrap, JavaScript, Java, Python, or Ruby</li>
                    <li>Familiarity with databases and SQL</li>
                    <li>Understanding of RESTful APIs and web services</li>
                </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(2)">
        <h5>Java Developer</h5>
    </div>
    <div class="accordion-content" id="accordion-2">
        
                <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Collaborate with cross-functional teams to define, design, and ship new features</li>
                    <li>Design, build, and maintain efficient, reusable, and reliable Java code</li>
                    <li>Perform unit testing, bug fixing, and improving application performance</li>
                    <li>Continuously discover, evaluate, and implement new technologies to maximize development efficiency</li>
                </ul>
                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in a Computer Science or related degree program</li>
                    <li>Solid understanding of object-oriented programming principles</li>
                    <li>Experience with Java development and relevant frameworks</li>
                    <li>Basic understanding of databases and SQL</li>
                    <li>Strong problem-solving skills and attention to detail</li>
                    <li>Excellent communication and teamwork abilities</li>
                </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(3)">
        <h5>Graphic Designer</h5>
    </div>
    <div class="accordion-content" id="accordion-3">
        
        <ul><b>Responsibilities: </b></ul>

        <ul>
        <li>Conceptualize visuals based on requirements</li>
        <li>Develop illustrations using software like CorelDRAW, Photoshop, Illustrator, Premier Pro</li>
        <li>Design and apply visual communication language across product UI, web pages, brochures, logos, signs, books, magazine covers, annual reports, advertisements, and other communication materials and channels</li>
        <li>Articulate the rationale behind your ideas and design work</li>
        <li>Create unique designs, logos, styles, and brand guides for clients to support business goals</li>
        <li>Create digital marketing assets like ad infographics and interactive presentations</li>
        <li>Work closely with a cross-functional team of copywriters, developers, and subject matter experts to contribute toward an ever-growing set of deliverables in web design, mobile apps design, and more</li>
</ul>

<ul><b>Qualification and Skills: </b></ul>
<ul>
<li>Graduate or certification in design or Fine arts</li>
                <li>0-2 years of experience in a relevant field</li>
                <li>Strong communication, conceptual thinking, typography skills, and design skill</li>
                <li>Proficient in Adobe Creative Suite & CorelDRAW, Dreamweaver</li>
                <li>Basics of motion graphics and video editing</li>
                <li>A keen eye for aesthetics and detail</li>
        </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(4)">
        <h5>Digital Marketing Support</h5>
    </div>
    <div class="accordion-content" id="accordion-4">
         <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Assist in the planning and execution of digital marketing campaigns</li>
                    <li>Create and manage social media content and online advertisements</li>
                    <li>Analyze campaign performance and generate reports</li>
                    <li>Conduct market research and competitor analysis</li>
                    <li>Collaborate with marketing team to brainstorm creative ideas</li>
                </ul>
                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in a Marketing, Business, or related degree program</li>
                    <li>Understanding of digital marketing concepts and platforms</li>
                    <li>Proficiency in using social media platforms for marketing</li>
                    <li>Basic knowledge of data analysis and reporting</li>
                    <li>Excellent communication and writing skills</li>
                    <li>Strong attention to detail and organizational skills</li>
                </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(5)">
        <h5>Content Writer</h5>
    </div>
    <div class="accordion-content" id="accordion-5">
        <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Create and edit engaging written content for various platforms</li>
                    <li>Research and generate ideas for articles, blog posts, and social media content</li>
                    <li>Proofread and ensure content adheres to brand guidelines</li>
                    <li>Collaborate with marketing and design teams for content creation</li>
                    <li>Optimize content for SEO and target audience engagement</li>
                </ul>
                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in a Journalism, English, or related degree program</li>
                    <li>Strong writing, editing, and proofreading skills</li>
                    <li>Ability to adapt writing style for different audiences and platforms</li>
                    <li>Understanding of SEO principles and content optimization</li>
                    <li>Creative thinking and ability to generate unique content ideas</li>
                    <li>Attention to detail and ability to meet deadlines</li>
                </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(6)">
        <h5>Software Tester</h5>
    </div>
    <div class="accordion-content" id="accordion-6">
        <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Design test plans, scenarios, scripts, or procedures</li>
                    <li>Execute test cases, track defects, and verify bug fixes</li>
                    <li>Document and communicate testing results and progress</li>
                    <li>Collaborate with development teams to ensure quality standards</li>
                    <li>Contribute to the identification of process improvements</li>
                </ul>
                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in a Computer Science, Engineering, or related degree program</li>
                    <li>Understanding of software testing methodologies and techniques</li>
                    <li>Basic knowledge of programming languages and scripting</li>
                    <li>Attention to detail and systematic problem-solving skills</li>
                    <li>Effective communication and teamwork abilities</li>
                    <li>Familiarity with testing tools and frameworks is a plus</li>
                </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(7)">
        <h5>Sales and Marketing Associate</h5>
    </div>
    <div class="accordion-content" id="accordion-7">
        <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Assist in identifying potential clients and markets</li>
                    <li>Participate in the development and execution of marketing campaigns</li>
                    <li>Contribute to lead generation and customer relationship management</li>
                    <li>Prepare and deliver sales presentations and pitches</li>
                    <li>Conduct market research and competitor analysis</li>
                </ul>
                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in a Marketing, Business, or related degree program</li>
                    <li>Understanding of marketing principles and customer behavior</li>
                    <li>Excellent communication and interpersonal skills</li>
                    <li>Strong organizational skills and attention to detail</li>
                    <li>Ability to work collaboratively in a team environment</li>
                    <li>Proficiency in using MS Office and presentation tools</li>
                </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(8)">
        <h5>SAP Consultant</h5>
    </div>
    <div class="accordion-content" id="accordion-8">
        <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Assist in configuring and customizing SAP modules</li>
                    <li>Participate in end-to-end implementation projects</li>
                    <li>Contribute to user training and support</li>
                    <li>Analyze business requirements and recommend solutions</li>
                    <li>Document processes and provide technical documentation</li>
                </ul>
                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in an Information Systems or related degree program</li>
                    <li>Understanding of SAP software and ERP concepts</li>
                    <li>Basic programming knowledge (ABAP, Java, etc.)</li>
                    <li>Strong analytical and problem-solving skills</li>
                    <li>Excellent communication and teamwork abilities</li>
                    <li>Attention to detail and commitment to quality</li>
                </ul>
    </div>
</div>

<div class="accordion-item">
    <div class="accordion-header" onclick="toggleAccordion(9)">
        <h5>IT Support</h5>
    </div>
    <div class="accordion-content" id="accordion-9">
        <ul><b>Responsibilities:</b></ul>
                <ul>
                    <li>Provide technical support to end users and troubleshoot issues</li>
                    <li>Install and configure hardware, software, and network devices</li>
                    <li>Assist in maintaining IT infrastructure and systems</li>
                    <li>Help with data backup and recovery processes</li>
                    <li>Contribute to IT documentation and knowledge base</li>
                </ul>
                <ul><b>Qualification and Skills:</b></ul>
                <ul>
                    <li>Enrollment in an Information Technology or related degree program</li>
                    <li>Basic understanding of computer hardware and software</li>
                    <li>Familiarity with operating systems (Windows, Linux, etc.)</li>
                    <li>Good problem-solving and communication skills</li>
                    <li>Ability to work well in a team and under pressure</li>
                    <li>Strong attention to detail and time management skills</li>
                </ul>
    </div>
</div>
</div>
        </div>
    </div>
</div>
<!-- end -->



<div class="container-fluid container">
    <center><h6 class="text-primary">If you're interested in one of our internship positions, complete the form attaching your resume and cover letter.</h6></center>
</div>

<!-- Contact Start -->
    <div class="container-fluid py-5" style=" padding-top: 0rem !important; padding-bottom: 0rem !important;">
        <div class="container py-5">
            <div class="text-center mb-5">
                
                <h2>Join Our Team</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form bg-secondary rounded p-5">
                        <div id="success"></div>

                        <form id="contactForm" method="POST" action="saveInternshipProgramFormDetails.php" enctype="multipart/form-data">
                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="name" name="name"
                                    placeholder="Name*" required="required"
                                    data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control border-0 p-4" id="email" name="email"
                                    placeholder="Email*" required="required"
                                    data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <input type="number" class="form-control border-0 p-4" id="contactno" name="contactno"
                                    placeholder="Contact Number*" required="required"
                                    data-validation-required-message="Please enter your contact number" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <input type="text" class="form-control border-0 p-4" id="position" name="position"
                                    placeholder="Position*" required="required"
                                    data-validation-required-message="Please enter your position" />
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <textarea class="form-control border-0 py-3 px-4" rows="5" id="message" name="message"
                                    placeholder="Message" required="required"
                                    data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>

                            <div class="control-group">
                                <label for="resume">Attach Resume* :</label>
                                <input type="file" id="resume" name="pdf" accept=".pdf, .doc, .docx" required>
                            </div>
                            <br>

                            <div class="control-group">
                                <label for="cover-letter">Cover Letter :</label>
                                <input type="file" id="cover-letter" name="cover_letter" accept=".pdf, .doc, .docx">
                            </div>
                        
                            <br>
                            <p style="font-size: 10px;">The Privacy Policy and Terms of Service apply.</p>
                            <br>
                            <div class="text-center">
                                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Send
                                    Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="padding-bottom: 0rem !important;">
        <div class="row pt-0">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch
                        </h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Pune, Maharashtra, India</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 7558555801</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@asdrinfotech.com</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Quick Links
                        </h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="about"><i class="fa fa-angle-right mr-2"></i>About
                                Us</a>
                            <a class="text-white mb-2" href="course"><i class="fa fa-angle-right mr-2"></i>Courses</a>
                            <!-- <a class="text-white mb-2" href="gallery"><i class="fa fa-angle-right mr-2"></i>Gallery</a> -->
                            <a class="text-white mb-2" href="contact"><i class="fa fa-angle-right mr-2"></i>Contact
                                Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3" style="    padding-left: 35px;">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Quick Links
                        </h5>
                        <div class="d-flex flex-column justify-content-start">

                            <a class="text-white mb-2" href="erp"><i class="fa fa-angle-right mr-2"></i>Privacy
                                Policy</a>
                            <a class="text-white mb-2" href="fasttrack"><i class="fa fa-angle-right mr-2"></i>Terms
                                & Conditions</a>

                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-3">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>

                <div class="w-100">
                    <form action="acceptnewslatter" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" name="emailid" id="emailid"
                                style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-light btn-square mr-2" href="https://www.facebook.com/ASDRinfotech/"
                        style="background-color: #1B74E4; font-size: 1.2rem; padding: 4px;"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-square mr-2" href="https://www.instagram.com/asdrinfotech/"
                        style="background: radial-gradient(circle at 33% 100%, #fed373 4%, #f15245 30%, #d92e7f 62%, #9b36b7 85%, #515ecf); font-size: 1.2rem; padding: 4px;"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-square mr-2"
                        href="https://www.linkedin.com/company/asdr-infotech-pvt-ltd/mycompany/"
                        style="background: #0A66C2; font-size: 1.2rem; padding: 4px;"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-square mr-2"
                        href="https://api.whatsapp.com/send/?phone=917558555801&text&type=phone_number&app_absent=0"
                        style="background: #25D366; font-size: 1.4rem; padding: 1px;"><i
                            class="fab fa-whatsapp"></i></a>
                    <a class="btn btn-outline-light btn-square mr-2" href="https://twitter.com/ASDRinfotech"
                        style="background: #00acee; font-size: 1.2rem; padding: 4px;"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-square mr-2" href="https://www.youtube.com/@asdrinfotech"
                        style="background: #CD201F; font-size: 1.2rem; padding: 4px;"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid text-white" style="padding: 0px;  background: #303030;">
        <center>
            <p style="margin-bottom: 0rem;">Copyright© 2022 <a href="https://asdrinfotech.com/">ASDR Infotech</a> - All
                Rights Reserved | Powered by <a href="https://asdrinfotech.com/">ASDR Infotech Pvt.Ltd.</a></p>
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
     <script>
function toggleAccordion(index) {
    const accordionContent = document.getElementById(`accordion-${index}`);
    accordionContent.classList.toggle("show");
}
    </script>


         <!-- dropdown for navbar -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    // Automatically open sub-dropdown on hover
    $('.dropdown-submenu').hover(function() {
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