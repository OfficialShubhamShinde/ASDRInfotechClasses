<?php 
    include '../_dbConnect.php';
?>

<?php

session_start();

$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';

// Use session variables in your code

?>
<?php
if (isset($_POST['update_course'])) {
    $course_id = $_POST['course_id'];
    $course_name = $_POST['course_name'];
    $course_domain = $_POST['course_domain'];
    $teacher_name = $_POST['teacher_name'];
    $cource_amount = $_POST['cource_amount'];
    $startdate = $_POST['startdate'];
    $enddate = $_POST['enddate'];
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];
    $introduction = $_POST['introduction'];
    $importance = $_POST['importance'];
    $syllabus = $_POST['syllabus'];

    // Update the course information in the database
    $sql = "UPDATE courses SET 
                    course_name = '$course_name', 
                    course_domain = '$course_domain', 
                    teacher_name = '$teacher_name', 
                    startdate = '$startdate', 
                    enddate = '$enddate', 
                    starttime = '$starttime', 
                    endtime = '$endtime', 
                    introduction = '$introduction', 
                    importance = '$importance', 
                    syllabus = '$syllabus',
                    cource_amount = '$cource_amount' 
                    WHERE course_id = $course_id";

    if (mysqli_query($conn, $sql)) {
        echo '
        <script>
            alert("Updated cource successfully ")
        </script>
        ';
    } else {
        echo "Error updating course: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Edit Course - online-class</title>
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

    <style>
        .form {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #f8f9fa;
            border: 1px solid #e2e8f0;
            border-radius: 5px;
        }

        .form label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 3px;
            box-shadow: none;
            border-color: #ced4da;
        }

        .btn-primary {
            background-color: #FF6600;
            border-color: #FF6600;
        }

        .btn-primary:hover {
            background-color: #FF6600;
            border-color: #FF6600;
        }


        input[type=text],
        select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 100%;
            background-color: #FF6600;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #FF6600;
        }

        .edit {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            margin-left: 20%;
            margin-right: 20%;
            margin-bottom: 50px;
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
                <h3 class="display-4 text-white text-uppercase">Update Courses</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Update Courses</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="edit">
        <center>
            <h1> Update Course Details</h1>
        </center> <br>

        <?php
        // Get course ID from URL
        
        if (isset($_GET['id'])) {
            $course_id = $_GET['id'];
        }

        // Handle form submission
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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

                    $insertData = "UPDATE courses SET 
                    course_name = '$cname', 
                    course_duration = '$cduration', 
                    startdate = '$cstartdate', 
                    enddate = '$cenddate', 
                    starttime = '$cstarttime', 
                    endtime = '$cendtime', 
                    cource_amount = '$camount', 
                    syllabus_type = '$syllabus', 
                    course_description = '$syllabusdescription' 
                    WHERE course_id = $course_id";
                    $queryInsertData = mysqli_query($conn, $insertData);

                    if ($queryInsertData) {
                        echo '
                        <script>
                            alert("Course Updated Successfully");
                            window.location.href = "overview";
                        </script>
        
                        ';
                    } else {
                        echo '
                        <script>
                            alert("Something went wrong");
                        </script>';
                    }
                }
            }
        }

        // Retrieve the course from the database
        $sql = "SELECT * FROM courses WHERE course_id = $course_id";
        $result = mysqli_query($conn, $sql);

        // Display course information in editable format
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>
            <form action="#" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label mb-4"><b>Course Details</b></label> <br>
                    <label for="exampleFormControlInput1" class="form-label text-dark">Course Name</label>
                    <input type="text" class="form-control" name="cname" value="<?php echo $row['course_name'] ?>"
                        id="exampleFormControlInput1">
                </div>
                <div class="mb-3">
                    <div class="form-group d-flex justify-content-between">
                        <label for="exampleFormControlSelect1" class="text-dark">Course Duration</label>
                        <label for="exampleFormControlSelect2" class="text-dark">Course Amount</label>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <select class="form-control mr-3" name="cduration" id="exampleFormControlSelect1">
                            <option value="<?php echo $row['course_duration']; ?>"><?php echo $row['course_duration']; ?></option>
                            <option value="30 Days">30 Days</option>
                            <option value="60 Days">60 Days</option>
                            <option value="90 Days">90 Days</option>
                            <option value="120 Days">120 Days</option>
                            <option value="150 Days">150 Days</option>
                            <option value="180 Days">180 Days</option>
                        </select>


                        <input type="number" name="camount" class="form-control mr-3" id="courseStartDate"
                            value="<?php echo $row['cource_amount'] ?>">

                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group d-flex justify-content-between">
                        <label for="courseStartDate" class="text-dark">Course Start Date</label>
                        <label for="courseStartDay" class="text-dark">Course Start Time</label>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <input type="date" name="cstartdate" class="form-control mr-3" id="courseStartDate"
                            value="<?php echo $row['startdate'] ?>">
                        <input type="time" name="cstarttime" class="form-control" id="courseStartDate"
                            value="<?php echo $row['starttime'] ?>">

                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group d-flex justify-content-between">
                        <label for="courseStartDate" class="text-dark">Course End Date</label>
                        <label for="courseStartDay" class="text-dark">Course End Time</label>
                    </div>
                    <div class="form-group d-flex justify-content-between">
                        <input type="date" name="cenddate" class="form-control mr-3" id="courseStartDate"
                            value="<?php echo $row['enddate'] ?>">
                        <input type="time" name="cendtime" class="form-control" id="courseStartDate"
                            value="<?php echo $row['endtime'] ?>">

                    </div>
                </div>

                <label for="exampleFormControlInput1" class="form-label mt-4"><b>Course Syllabus</b></label> <br>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label text-dark mt-3">Select syllabus</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="syllabus">
                        <option value="<?php echo $row['syllabus_type'] ?>"><?php echo $row['syllabus_type'] ?></option>
                        <option value="Artificial Intelligence">Artificial Intelligence</option>
                        <option value="Data Science">Data Science</option>
                        <option value="Cyber Security">Cyber Security</option>
                        <option value="Web Designing">Web Designing</option>
                        <option value="IT - Software">IT - Software</option>
                        <option value="IT - Hardware">IT - Hardware</option>
                        <option value="SAP">SAP</option>
                        <option value="Animation">Animation</option>
                        <option value="Tally">Tally</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label text-dark">Course Description</label>
                    <textarea class="form-control" name="syllabusdescription" id="exampleFormControlTextarea1"
                        rows="3"><?php echo $row['course_description'] ?></textarea>
                </div>
                <div class="mt-5 mb-5">
                    <center>
                        <button type="submit" name="addcourse" class="btn btn-primary">Add Course</button>
                    </center>
                </div>
            </form>
            <?php
        } else {
            echo "0 results";
        }

        // Handle form submission
        

        mysqli_close($conn);
        ?>
    </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Footer Start -->
<!--     <div class="container-fluid bg-dark text-white py-5 px-sm-3 px-lg-5" style="margin-top: 10px;">
        <div class="row pt-0">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Pune, Maharashtra, India</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+91 7558555801</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@asdrinfotech.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Courses</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Web Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Apps Design</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Marketing</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Research</a>
                            <a class="text-white" href="#"><i class="fa fa-angle-right mr-2"></i>SEO</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>

                <div class="w-100">
                    <div class="input-group">
                        <input type="email" class="form-control border-light" style="padding: 30px;"
                            placeholder="Your Email Address">
                        <div class="input-group-append">
                            <button class="btn btn-primary px-4">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
</body>

</html>