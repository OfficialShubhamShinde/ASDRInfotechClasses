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
$select = "DELETE FROM coupon_master WHERE coupon_id = $couponid";
$query = mysqli_query($conn, $select);
if ($query) {
    echo '<script>
    alert("Coupon Deleted Sucessfully");
    window.location.href = "dashbordManageCoupon";
</script>';
} else {
    echo '<script>
    alert("Something went wrong!");
    window.location.href = "dashbordManageCoupon";
</script>';
}
?>