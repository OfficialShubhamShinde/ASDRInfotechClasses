<?php
include '_dbConnect.php';
?>

<?php

session_start();

$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';

// Use session variables in your code

?>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['addEvent'])) {
        $etitle = $_POST['etitle'];
        $edate = $_POST['edate'];
        $eday = $_POST['eday'];
        $emode = $_POST['emode'];
        $estarttime = $_POST['estarttime'];
        $eendtime = $_POST['eendtime'];
        $elink = $_POST['elink'];
        $edescription = $_POST['edescription'];


        $insertData = "INSERT INTO `events` (`etitle`, `edate`, `eday`, `emode`, `estarttime`, `eendtime`, `elink`, `edescription`) VALUES ('$etitle', '$edate', '$eday', '$emode', '$estarttime', '$eendtime', '$elink', '$edescription')";
        $result = mysqli_query($conn, $insertData);


        if ($result) {
            echo '
        <script>
            alert("Event Added Successfully");
        </script>
        ';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ASDR Infotech - IT Training </title>
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
        /* Style for login button */
        .btn-login {
            background-color: #ff6600;
            border-color: #ff6600;
            color: #fff;
        }

        /* Style for login modal */
        .modal-header {
            background-color: #ff6600;
            color: #fff;
        }

        .modal-title {
            color: #fff;
        }

        .modal-body {
            padding: 20px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-control {
            border-radius: 0;
        }

        .btn-primary {
            border-radius: 0;
        }
    </style>

    <style>
        /* Container for the entire slider */
        .slider-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            margin: 20px auto;
            max-width: 1200px;
        }

        /* Wrapper for the cards that slides horizontally */
        .slider {
            display: flex;
            transition: transform 0.5s;
        }

        /* Individual card */
        .slider-card {
            flex: 0 0 calc(100% / 3);
            padding: 20px;
            box-sizing: border-box;
        }

        /* Card styling */
        /*.card {
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    text-align: center;
}*/

        /* Card title */
        /*.card-title {
    font-size: 18px;
    margin-bottom: 10px;
}*/

        /* Card description */
        /*.card-description {
    font-size: 14px;
    color: #666;
}*/

        /* Slider controls container */
        .slider-controls {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        /* Arrows and dots */
        .arrow,
        .dot {
            font-size: 24px;
            color: #ff6f61;
            cursor: pointer;
            margin: 0 10px;
        }

        .dot {
            font-size: 18px;
            color: #ccc;
        }

        .dot.active {
            color: #ff6f61;
        }

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

        .coupon-row {
            display: flex;
            overflow-x: auto;
            /* Enable horizontal scrolling */
            scroll-snap-type: x mandatory;
        }

        .coupon-container {
            background-color: #ffffff;
            border: 2px solid #ddd;
            padding: 20px;
            max-width: 300px;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
            scroll-snap-align: start;
        }

        .close-button {
            position: absolute;
            top: -4px;
            right: 1px;
            background-color: transparent;
            border: none;
            font-size: 16px;
            cursor: pointer;
            outline: none;
            padding: 5px;
            border-radius: 50%;
        }

        .coupon-code {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
        }

        .copy-button {
            background-color: #FF6600;
            color: #fff;
            border: none;
            padding: 0.375rem 0.75rem;
            font-size: 16px;
            cursor: pointer;
        }

        .copy-button:hover {
            background-color: #c65001;
        }
    </style>
    <!-- coupon end -->
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
                                <a href="index" class="nav-item nav-link active">Home</a>
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
                                <a href="index" class="nav-item nav-link active">Home</a>
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
                                <a href="index" class="nav-item nav-link active">Home</a>
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
                                        <input type="text" class="form-control" id="signup-name" name="name" required
                                            placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-email">Email Address</label>
                                        <input type="email" class="form-control" id="signup-email" name="email" required
                                            placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-password">Password</label>
                                        <input type="password" class="form-control" id="signup-password" name="password"
                                            required placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm-password" required
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



    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 mb-5" style="    padding-bottom: 0rem !important;">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-1.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">

                            <h1 class="display-3 text-white mb-md-4" style="    padding-top: 50px;">ASDR Infotech</h1>
                            <h5 class="text-white text-uppercase mb-md-3">Embark your IT journey with our best-in-class
                                software training programs</h5>
                            <a href="course" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Entroll
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-2.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4" style="    padding-top: 50px;">TRAINING &
                                DEVELOPMENT</h1>
                            <h5 class="text-white text-uppercase mb-md-3">Best IT Training | Job placement Assistance
                            </h5>
                            <a href="course" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Entroll
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="min-height: 300px;">
                    <img class="position-relative w-100" src="img/carousel-3.jpg"
                        style="min-height: 300px; object-fit: cover;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h1 class="display-3 text-white mb-md-4" style="    padding-top: 50px;">PERSONALITY
                                DEVELOPMENT</h1>
                            <h5 class="text-white text-uppercase mb-md-3">Stand out during the interview: Upgrade your
                                soft skills</h5>
                            <a href="skills" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- Category Start -->
    <div class="container-fluid py-0">
        <div class="container pt-0 pb-3">
            <div class="text-center mb-5">
                <h3 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Training & Development</h3>
                <h1>Popular Courses</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-1.jpg" alt="">
                        <center>
                            <a class="cat-overlay text-white text-decoration-none" href="javafullstack">
                                <h4 class="text-white font-weight-medium">Full Stack Java Development</h4>
                            </a>
                        </center>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="webfullstack">
                            <center>
                                <h4 class="text-white font-weight-medium">Full Stack Web Development</h4>
                            </center>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="digitalmarketing">
                            <h4 class="text-white font-weight-medium">Digital Marketing</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="softwaretesting">
                            <h4 class="text-white font-weight-medium">Software Testing</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="erp">
                        <a class="cat-overlay text-white text-decoration-none" href="erp">
                            <h4 class="text-white font-weight-medium">ERP Training</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-6.jpg" alt="fasttrack">
                        <a class="cat-overlay text-white text-decoration-none" href="fasttrack">
                            <center>
                                <h4 class="text-white font-weight-medium">IT FAST TRACK PROGRAM</h4>
                            </center>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-7.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="databaselanguage">
                            <center>
                                <h4 class="text-white font-weight-medium">Database</h4>
                            </center>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-8.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="skills">
                            <center>
                                <h4 class="text-white font-weight-medium">Interview Skill Courses</h4>
                            </center>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php
    if ($user_type == 'teacher') {
        echo '
        <!-- Courses End -->
        <center>
            <h3 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Add Events</h3>
            <br>
        </center>
        <div class="container events">
            <div class="container col-xxl-8 px-4 ">
                <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                    <div class="col-10 col-sm-8 col-lg-6">
                        <img src="img/events.avif" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                            height="500" loading="lazy">
                    </div>
                    <div class="col-lg-6">
                        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Add Events
                        </h1>
                        <p class="lead">Join us for a series of cutting-edge IT courses designed to enhance your skills and
                            empower your career. From cybersecurity to data analytics, our comprehensive curriculum covers
                            the latest industry trends and technologies.</p>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
    
                            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Add
                                Events
                            </button>
    
                            <!-- Modal -->
                            <div class="modal fade" id="staticBackdrop" style="z-index: 9999;" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div
                                    class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="staticBackdropLabel">Add Events</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post" action="">
                                                <label for="exampleFormControlTextarea1" class="form-label">Event
                                                    Title</label>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="name" name="etitle"
                                                        aria-describedby="emailHelp" placeholder="" required>
                                                </div>
    
                                                <label for="exampleFormControlTextarea1" class="form-label">Event
                                                    Date</label>
                                                <div class="mb-3">
                                                    <input type="date" class="form-control" id="edate" name="edate">
                                                </div>
    
                                                <label for="exampleFormControlTextarea1" class="form-label">Event
                                                    Day</label>
                                                <div class="mb-3">
                                                    <select class="form-select" name="eday"
                                                        aria-label="Default select example"
                                                        style="width: 742px; padding: 7px; border-color: rgb(220,224,228);">
                                                        <option selected>Select</option>
                                                        <option value="Sunday">Sunday</option>
                                                        <option value="Monday">Monday</option>
                                                        <option value="Tuesday">Tuesday</option>
                                                        <option value="Wednesday">Wednesday</option>
                                                        <option value="Thursday">Thursday</option>
                                                        <option value="Friday">Friday</option>
                                                        <option value="Saturday">Saturday</option>
                                                    </select>
                                                </div>
    
                                                <label for="exampleFormControlTextarea1" class="form-label">Event
                                                    Mode</label>
                                                <div class="mb-3">
                                                    <select class="form-select" name="emode"
                                                        aria-label="Default select example"
                                                        style="width: 742px; padding: 7px; border-color: rgb(220,224,228);">
                                                        <option selected>Select</option>
                                                        <option value="Online">Online</option>
                                                        <option value="Offline">Offline</option>
                                                    </select>
                                                </div>
    
                                                <label for="exampleFormControlTextarea1" class="form-label">Event Start
                                                    Time</label>
                                                <div class="mb-3">
                                                    <input type="time" class="form-control" id="contactno" name="estarttime"
                                                        placeholder="">
                                                </div>
    
                                                <label for="exampleFormControlTextarea1" class="form-label">Event End
                                                    Time</label>
                                                <div class="mb-3">
                                                    <input type="time" class="form-control" id="contactno" name="eendtime"
                                                        placeholder="">
                                                </div>
    
                                                <label for="exampleFormControlTextarea1" class="form-label">Event
                                                    Link</label>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="elink" required
                                                        name="elink">
                                                </div>
    
    
                                                <label for="exampleFormControlTextarea1" class="form-label">Event
                                                    Description</label>
                                                <div class="form-floating mb-3 mt-2">
                                                    <textarea class="form-control" placeholder="" name="edescription"
                                                        id="detail" style="height: 100px"></textarea>
                                                </div>
                                                <center><button type="submit" name="addEvent"
                                                        class="btn btn-primary btn-lg px-4 me-md-2">Add Event</button>
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
        ';
    }
    ?>


    <center>
        <h3 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Events</h3>
        <br>
    </center>
    <div class="slider-container">
        <div class="slider">
            <?php
            $selectQuery = "SELECT * FROM events";
            $query = mysqli_query($conn, $selectQuery);
            $count = 0;

            while ($row = mysqli_fetch_assoc($query)) {
                $event_id = $row['event_id'];
                $etitle = $row['etitle'];
                $edate = $row['edate'];
                $eday = $row['eday'];
                $emode = $row['emode'];
                $estarttime = $row['estarttime'];
                $eendtime = $row['eendtime'];
                $elink = $row['elink'];
                $edescription = $row['edescription'];

                $formattedDate = date('F d, Y', strtotime($edate));
                $formattedStartTime = date('g:ia', strtotime($estarttime));
                $formatteEndTime = date('g:ia', strtotime($eendtime));
                // <h6 class="card-day">'.$formattedStartTime.' - '.$formatteEndTime.'</h6>
            
                echo '
                <div class="slider-card">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="date-day" style="position: absolute;
                            top: 0;
                            right: 0;
                            padding: 10px;
                            text-align: right;">
                                <h6 class="card-date">' . $formattedDate . ' | ' . $eday . '</h6>
                            </div><br><br>
                            <h5 class="card-title">' . $etitle . '</h5>
                            <p class="card-text">' . $edescription . '</p>';
                if ($user_type == 'teacher') {
                    echo '<a href="editEvent.php?event_id=' . $event_id . '" class="registration-link btn btn-primary mr-3" >Edit</a>';
                    echo '<a href="deleteEvent.php?event_id=' . $event_id . '" class="registration-link btn btn-primary" >Delete</a>';
                } else {
                    echo '<a href="regester.php?e_id=' . $event_id . '" class="registration-link btn btn-primary" >Click here to Register</a> <br>';
                }
                echo '</div>
                    </div>
                </div>';

                $count++;
            }
            ?>
        </div>
        <div class="slider-controls">
            <div class="arrow prev">&#8249;</div>
            <?php for ($i = 0; $i < ceil($count / 3); $i++) { ?>
                <div class="dot"></div>
            <?php } ?>
            <div class="arrow next">&#8250;</div>
        </div>
    </div>
    <!-- coupon start -->
    <div class="container">
        <div class="container-fluid" style="background-color: ghostwhite;">
            <div class="coupon-row">

                <?php
                $selectCoupon = "select * from coupon_master";
                $querySelectCoupon = mysqli_query($conn, $selectCoupon);
                while ($rowSelectCoupon = mysqli_fetch_assoc($querySelectCoupon)) {
                    $coupon_code = $rowSelectCoupon['coupon_code'];
                    $coupon_value = $rowSelectCoupon['coupon_value'];
                    $coupon_type = $rowSelectCoupon['coupon_type'];

                    echo '
                    <div class="coupon-container">
                        <button class="close-button">X</button>
                        <center>
                            <h5 style="color: #FF6600;">' . $coupon_value;
                    if ($coupon_type == 'Percentage') {
                        echo '%';
                    } elseif ($coupon_type == 'Rupee') {
                        echo '₹';
                    }
                    echo ' Off On IT Courses</h5>
                            <div class="coupon-code">' . $coupon_code . '</div>
                            <button class="copy-button">Copy Coupon</button>
                        </center>
                    </div>
                    ';

                }
                ?>



            </div>
        </div>
    </div>


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
    <!-- event slider -->
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>


    <script>
        const sliderContainer = document.querySelector('.slider-container');
        const slider = document.querySelector('.slider');
        const sliderCards = document.querySelectorAll('.slider-card');
        const cardWidth = sliderCards[0].clientWidth;
        const numVisibleCards = 3;
        let currentIndex = 0;
        let dots = document.querySelectorAll('.dot');

        function updateSliderPosition() {
            slider.style.transform = `translateX(-${currentIndex * cardWidth * numVisibleCards}px)`;
        }

        function slideRight() {
            currentIndex = (currentIndex + 1) % Math.ceil(sliderCards.length / numVisibleCards);
            updateSliderPosition();
            updateDots();
        }

        function slideLeft() {
            currentIndex = (currentIndex - 1 + Math.ceil(sliderCards.length / numVisibleCards)) % Math.ceil(sliderCards.length / numVisibleCards);
            updateSliderPosition();
            updateDots();
        }

        function updateDots() {
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        const interval = setInterval(slideRight, 5000);
        updateSliderPosition();
        updateDots();

        sliderContainer.addEventListener('mouseenter', () => clearInterval(interval));
        sliderContainer.addEventListener('mouseleave', () => interval);

        document.querySelector('.arrow.prev').addEventListener('click', slideLeft);
        document.querySelector('.arrow.next').addEventListener('click', slideRight);
    </script>
    <!-- Include jQuery library and Bootstrap JavaScript -->


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

    <!-- coupon  start-->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const couponRow = document.querySelector(".coupon-row");
            const coupons = document.querySelectorAll(".coupon-container");

            // Add event delegation for close buttons and copy buttons
            couponRow.addEventListener("click", function (event) {
                if (event.target.classList.contains("close-button")) {
                    const coupon = event.target.closest(".coupon-container");
                    if (coupon) {
                        coupon.style.display = "none";
                    }
                } else if (event.target.classList.contains("copy-button")) {
                    const couponCode = event.target.previousElementSibling.textContent;
                    copyToClipboard(couponCode);
                }
            });

            // Function to copy text to clipboard
            function copyToClipboard(text) {
                const textArea = document.createElement("textarea");
                textArea.value = text;
                document.body.appendChild(textArea);
                textArea.select();
                document.execCommand("copy");
                document.body.removeChild(textArea);

                alert("Coupon code copied to clipboard: " + text);
            }
        });
    </script>

</body>

</html>