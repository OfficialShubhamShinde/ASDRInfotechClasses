<?php
include '_dbConnect.php';
?>

<?php
session_start();
$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';
?>

<?php
$couponid = $_GET['couponid']
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $coupon_code = $_POST['coupon_code'];
    $coupon_value = $_POST['coupon_value'];
    $coupon_type = $_POST['coupon_type'];
    $coupon_quantity = $_POST['coupon_quantity'];

    $CCSql = "SELECT coupon_code FROM coupon_master WHERE coupon_code = '$coupon_code'";
    $queryCCSQL = mysqli_query($conn, $CCSql);
    $numROws = mysqli_num_rows($queryCCSQL);
    if ($numROws == 1) {
        echo '
    <script>
        alert("Coupon Code Already Exist")
    </script>
    ';
    } else {

        $updateData = "UPDATE coupon_master SET coupon_code = '$coupon_code',coupon_value = '$coupon_value',coupon_type = '$coupon_type' ,coupon_quantity = '$coupon_quantity' WHERE coupon_id = $couponid";
        $result = mysqli_query($conn, $updateData);


        if ($result) {
            echo '
        <script>
            alert("Coupon Edited Successfully");
            window.location.href = "dashbordManageCoupon";
        </script>
        ';
        } else {
            echo '
            <script>
                alert("Something wents wrong");
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
    <title>Edit Coupon | ASDR Infotech</title>
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
                <h3 class="display-4 text-white text-uppercase">Edit Coupon</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Edit Coupon</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="container mt-5 mb-5 border rounded">
        <?php
        $selectEventDetails = "select * from coupon_master where coupon_id = '$couponid'";
        $queryselectEventDetails = mysqli_query($conn, $selectEventDetails);
        $row = mysqli_fetch_assoc($queryselectEventDetails);
        $coupon_code = $row['coupon_code'];
        $coupon_value = $row['coupon_value'];
        $coupon_type = $row['coupon_type'];
        $coupon_quantity = $row['coupon_quantity'];
        ?>
        <form action="" method="post">
            <label for="exampleFormControlTextarea1" class="form-label">Coupon
                Code</label>
            <div class="mb-3">
                <input type="text" class="form-control" value="<?php echo $coupon_code ?>" id="coupon_code"
                    name="coupon_code" aria-describedby="emailHelp" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Coupon
                    Value</label>
                <input type="number" class="form-control" value="<?php echo $coupon_value ?>" id="coupon_value"
                    name="coupon_value" aria-describedby="emailHelp" required>
            </div>


            <label for="exampleFormControlTextarea1" class="form-label">Coupon Type</label>
            <div class="mb-3">
                <select class="form-select rounded" name="coupon_type" aria-label="Default select example"
                    style="width: 742px; padding: 7px; border-color: rgb(220,224,228);">
                    <option selected>
                        <?php echo $coupon_type ?>
                    </option>
                    <option value="Percentage">Percentage</option>
                    <option value="Rupee">Rupee</option>
                </select>
            </div>

            <label for="exampleFormControlTextarea1" class="form-label">Coupon Quantity</label>
            <div class="mb-3">
                <input type="number" class="form-control" value="<?php echo $coupon_quantity ?>" id="coupon_quantity"
                    name="coupon_quantity" aria-describedby="emailHelp" required>
            </div>

            <center><button type="submit" class="btn btn-primary btn-lg px-4 me-md-2 mb-3">Update Coupon</button>
            </center>



        </form>
    </div>

    <div class="container-fluid text-white" style="padding: 0px;  background: black;">
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
</body>

</html>