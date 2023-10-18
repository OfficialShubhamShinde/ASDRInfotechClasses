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
    if (isset($_POST['addCoupon'])) {
        $ccode = $_POST['ccode'];
        $cvalue = $_POST['cvalue'];
        $ctype = $_POST['ctype'];
        $cquantity = $_POST['cquantity'];

    }
}
?>

<?php
$CCSql = "SELECT coupon_code FROM coupon_master WHERE coupon_code = '$ccode'";
$queryCCSQL = mysqli_query($conn, $CCSql);
$numROws = mysqli_num_rows($queryCCSQL);
if ($numROws == 1) {
    echo '
    <script>
        alert("Coupon Code Already Exist")
    </script>
    ';
} else {
    $insertData = "INSERT INTO `coupon_master` (`coupon_code`, `coupon_value`, `coupon_type`, `coupon_quantity`) VALUES ('$ccode', '$cvalue', '$ctype', '$cquantity')";
    $result = mysqli_query($conn, $insertData);


    if ($result) {
        echo '
        <script>
            alert("Coupon Added Successfully");
            window.location.href = "dashbordManageCoupon";
        </script>
        ';
    }
}
?>