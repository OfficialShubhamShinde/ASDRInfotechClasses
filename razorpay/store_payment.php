<?php
session_start();

// Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classes";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $payment_id = $_POST['razorpay_payment_id'];
    $student_id = $_SESSION['user_id'];
    $course_id = $_POST['course_id'];
    $couponCode = $_POST['couponCode'];
    $courseAmount = $_POST['courseAmount'];

    // Make sure to use proper error handling for SQL queries
    $updatePaymentStatus = "INSERT INTO `payment_status` (`student_id`, `course_id`, `coupon_code`, `amount_pay`, `gen_paymentid`, `payment_status`) VALUES ('$student_id', '$course_id', '$couponCode', '$courseAmount', '$payment_id', 'Success')";
    if (mysqli_query($conn, $updatePaymentStatus)) {
        echo "Payment details stored successfully.";
    } else {
        echo "Error storing payment details: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
