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
    <title>ASDR - online-class</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
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
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
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
                            <a href="course" class="nav-item nav-link active">Enroll</a>
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
                            <a href="course" class="nav-item nav-link active">Enroll</a>
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
                                <a href="course" class="nav-item nav-link active">Enroll</a>
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
            </nav>
        </div>
    </div>
    </div>
    <!-- Navbar End -->

    <!-- Header Start -->
    <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Course Details </h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase" href="course">Course</p>

                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <div class="site-section">
        <div class="container">
            <div class="row">
                <?php
                // Retrieve the data from the database
                if (isset($_GET['course_id'])) { // check if a course ID was passed through the URL
                    $course_id = mysqli_real_escape_string($conn, $_GET['course_id']);
                    $sql = "SELECT * FROM courses WHERE course_id = $course_id";
                    $result = mysqli_query($conn, $sql);

                    // Display the data in the section
                    if (mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                        $finalCourseAmount = $row['cource_amount'];
                        ?>
                        <div class="col-md-6 mb-4">
                            <p>
                                <img src="<?php echo './teacher/' . $row['course_img']; ?>" width="630" height="400">
                            <p class="text-primary text-uppercase mb-4 text-right"
                                style="letter-spacing: 5px; font-size: 25px;"><b>₹
                                    <?php echo $row['cource_amount'] ?>
                                </b>
                            </p>
                            </p>
                        </div>
                        <div class="col-lg-5 ml-auto align-self-center">
                            <h2 class="section-title-underline mb-5">
                                <span>
                                    <?php echo $row['course_name']; ?>
                                </span>
                            </h2>


                            <p class="mb-5"><strong class="text-black d-block">Time:</strong>
                                <?php
                                $startTime12hr = date("h:i A", strtotime($row['starttime']));
                                $endTime12hr = date("h:i A", strtotime($row['endtime']));
                                echo $startTime12hr . ' <b>to</b> ' . $endTime12hr ?>
                            </p>
                            <p class="mb-5"><strong class="text-black d-block">Date:</strong>
                                <?php echo $row['startdate'] . ' <b>to</b> ' . $row['enddate']; ?>
                            </p>
                            <p>
                                <?php
                                $description = $row['course_description'];
                                $words = explode(" ", $description);
                                $limitedDescription = implode(" ", array_slice($words, 0, 15));
                                $remainingDescription = implode(" ", array_slice($words, 15));
                                ?>

                            <p class="mb-5" id="impOfCourses">
                                <strong class="text-black d-block">Importance of Course:</strong>
                                <span class="limited-description">
                                    <?php echo $limitedDescription; ?>
                                </span>
                                <span class="remaining-description" style="display: none;">
                                    <?php echo $remainingDescription; ?>
                                </span>
                                <a href="#" class="read-more-link"> ...Read more</a>
                            </p>


                            <p class="mb-5">
                                <strong class="text-black d-block">
                                    <a href="
                                    <?php
                                    // select syllabus type
                                    $selectSylType = "select * from courses where course_id= $course_id";
                                    $querySelectSylType = mysqli_query($conn, $selectSylType);
                                    $fetchRowSelectSylType = mysqli_fetch_assoc($querySelectSylType);
                                    $fetchCourseType = $fetchRowSelectSylType['syllabus_type'];
                                    if ($fetchCourseType == 'Full Stack Web Development') {
                                        echo 'webfullstack';
                                    } elseif ($fetchCourseType == 'Full Stack Java Development') {
                                        echo 'javafullstack';
                                    } elseif ($fetchCourseType == 'Frontend Development') {
                                        echo 'frontend';
                                    } elseif ($fetchCourseType == 'Java') {
                                        echo 'java';
                                    } elseif ($fetchCourseType == 'Python') {
                                        echo 'python';
                                    } elseif ($fetchCourseType == 'PHP') {
                                        echo 'phpcourse';
                                    } elseif ($fetchCourseType == '.Net C#') {
                                        echo 'dotnet';
                                    } elseif ($fetchCourseType == 'c/c++') {
                                        echo 'cpp';
                                    } elseif ($fetchCourseType == 'Database') {
                                        echo 'databaselanguage';
                                    } elseif ($fetchCourseType == 'Manual/Automation Testing') {
                                        echo 'softwaretesting';
                                    } elseif ($fetchCourseType == 'Digital Marketing') {
                                        echo 'digitalmarketing';
                                    } elseif ($fetchCourseType == 'Sales and Marketing') {
                                        echo 'salesandmarketing';
                                    } elseif ($fetchCourseType == 'ERP Foundation') {
                                        echo 'erp';
                                    } elseif ($fetchCourseType == 'ERP(SAP) Advance') {
                                        echo 'erpsap';
                                    } elseif ($fetchCourseType == 'IT Bridge Program') {
                                        echo 'itbridge';
                                    } elseif ($fetchCourseType == 'IT Entry Level Program') {
                                        echo 'itentrylevel';
                                    } elseif ($fetchCourseType == 'Softskills') {
                                        echo 'skills';
                                    } elseif ($fetchCourseType == 'Data Science') {
                                        echo 'datascience';
                                    } elseif ($fetchCourseType == 'Machine Learning') {
                                        echo 'machinelearning';
                                    } else {
                                        echo 'index';
                                    }
                                    ?>
                                    
                                    
                                    
                                    " class="">
                                        <h5>Click here to view syllabus</h3>
                                    </a>
                                </strong>
                            </p>
                            <?php
                            $couponapplied = true;
                            if (isset($_GET['couponapplied'])) {
                                $couponapplied = false;
                            }
                            if ($couponapplied == false) {
                                echo '
                                <div class="alert alert-danger" role="alert">
                                    Coupon Does not Applied! Please Try Again.
                                </div>
                                ';
                            }
                            ?>
                            <br>
                            <?php
                            if ($user_type == "student") {
                                $course_id = $_GET['course_id'];
                                $fetchForEnroll = "select * from payment_status where student_id = $user_id and course_id = $course_id";
                                $queryFetchForEnroll = mysqli_query($conn, $fetchForEnroll);
                                $fetchForEnrollNumRows = mysqli_num_rows($queryFetchForEnroll);
                                // echo $fetchForEnrollNumRows;
                            }
                            ?>
                            <?php
                            if ($user_type == "student" && $fetchForEnrollNumRows == 1) {
                            } elseif ($user_type == "teacher") {
                                echo '';
                            } else {
                                ?>
                                <form action="coupon_applied.php#impOfCourses" method="POST">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="coupon_code" id="couponCode"
                                            placeholder="Enter Coupon Code">
                                        <input type="hidden" class="form-control" value="<?php echo $course_id ?>" name="courseId"
                                            id="courseId" placeholder="Enter Coupon Code">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Apply</button>
                                        </div>
                                    </div>
                                </form>
                                <?php
                            }

                            ?>


                            <br>

                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <th>GST</th>
                                        <td>+ 18% GST</td>

                                    </tr>
                                    <tr>
                                        <th scope="col">Total</th>
                                        <td><b>
                                                <?php echo $row['cource_amount'] ?>
                                            </b></td>
                                    </tr>
                                </tbody>
                            </table>


                            <!-- <p>Syllabus of this course mention below chapter wise.</p>

                        <ul class="ul-check primary list-unstyled mb-5">
                            <?php
                            $syllabus = explode(",", $row['syllabus']);
                            foreach ($syllabus as $chapter) {
                                echo "<li>$chapter</li>";
                            }
                            ?>
                        </ul>

                        <p> -->
                            <?php
                            if ($user_type == "student" && $fetchForEnrollNumRows == 1) {
                                echo '<button type="button" class="btn btn-primary rounded-0 btn-lg px-5">Already Enrolled</button>';
                            } elseif ($user_type == "teacher") {
                                echo '<p><span style="color:red">*</span>You cannot enroll</p>';
                            } else {
                                echo '
                                <form action="./razorpay/index.php" method="post">
                                    <input type="hidden" name="course_id" value="' . $course_id . '">
                                    <input type="hidden" name="couponCode" value="-">
                                    <input type="hidden" name="courseAmount" value="' . $finalCourseAmount . '">
                                    <button type="submit"  id="enrollButton" class="btn btn-primary rounded-0 btn-lg px-5">Enroll Now</button>
                                </form>';
                            }
                            ?>
                            </p>
                        </div>
                        <?php
                    } else {
                        echo "No data found.";
                    }
                } else {
                    echo "No course ID specified.";
                }

                // Close the database connection
                mysqli_close($conn);
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

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script>
    document.addEventListener("DOMContentLoaded", function () {
        const readMoreLink = document.querySelector(".read-more-link");
        const remainingDescription = document.querySelector(".remaining-description");

        readMoreLink.addEventListener("click", function (e) {
            e.preventDefault();
            remainingDescription.style.display = "inline";
            readMoreLink.style.display = "none";
        });
    });
</script>



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
</body>

</html>