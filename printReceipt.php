<?php

// Connect to the database
include '_dbConnect.php';
?>

<?php
$sname = $_GET['sname'];
$cname = $_GET['cname'];
$cid = $_GET['cid'];
$sId = $_GET['sId'];
// echo $sId;
// echo $cid;
?>
<?php

session_start();

$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';
// echo $user_id;

// Use session variables in your code

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Receipt | ASDR Infotech</title>
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
    #receipt {
      width: 80%;
      margin: 0 auto;
      border: 1px solid #ccc;
      padding: 20px;
      background-color: #fff;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th,
    td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }
  </style>

</head>

<body style="background-color: #f9f9f9;">




  <?php
  $selectCDetail = "select * from courses where course_id = $cid";
  $querySelectDetail = mysqli_query($conn, $selectCDetail);

  $fetchCDetails = mysqli_fetch_assoc($querySelectDetail);
  $cName = $fetchCDetails['course_name'];
  $cource_amount = $fetchCDetails['cource_amount'];
  ?>

  <?php
  $selectPDetail = "SELECT * FROM payment_status WHERE student_id = $sId AND course_id = $cid";
  $querySelectPDetail = mysqli_query($conn, $selectPDetail);

  $fetchPDetails = mysqli_fetch_assoc($querySelectPDetail);
  $coupon_code = $fetchPDetails['coupon_code'];
  $amount_pay = $fetchPDetails['amount_pay'];
  $gen_paymentid = $fetchPDetails['gen_paymentid'];
  // echo $coupon_code;
  ?>

  <?php
  if ($coupon_code !== '-') {
    $selectCouponDetails = "select * from coupon_master where coupon_code = '$coupon_code'";
    $queryCouponDetails = mysqli_query($conn, $selectCouponDetails);

    $fetchqueryCouponDetails = mysqli_fetch_assoc($queryCouponDetails);
    $coupon_value = $fetchqueryCouponDetails['coupon_value'];
    $coupon_type = $fetchqueryCouponDetails['coupon_type'];
  } else {
    // $coupon_value = $fetchqueryCouponDetails['0'];
    $coupon_type = 'NA';

  }
  // echo $coupon_type;
  ?>



  <!-- Receipt Start -->
  <div class="container-fluid py-5" style=" padding-top: 1rem !important; padding-bottom: 0rem !important;">
    <div class="container py-5">
      <div class="row align-items-center">




        <div id="receipt">
          <div style="text-align: center;">
            <img src="img/ASDR LOGO.png" alt="Company Logo" width="100">
            <h2><span style="color: #FF6600;">ASDR</span> <span style="color: grey;">Infotech</span></h2>
            <p>Unit#201, Achal Leela Darshan, Baner Road, Baner, Pune-45</p>
            <p>GST No: GST123456789</p>
            <hr>
          </div>
          <div class="row">
            <div class="col-md-6">
              <p><strong>Name:</strong>
                <?php echo $sname ?>
              </p>
            </div>
            <div class="col-md-6 text-md-end">
              <p><strong>Student ID:</strong>
                <?php echo $user_id ?>
              </p>
            </div>
          </div>
          <p><strong>Contact No:</strong> +91 7697080509</p>
          <hr>

          <table>
            <tr>
              <th>Course</th>
              <th>Amount</th>
            </tr>
            <tr>
              <td>
                <?php echo $cName ?>
              </td>
              <td>
                <?php echo $cource_amount ?> Rs
              </td>
            </tr>

            <tr>
              <td colspan="2" style="text-align: right;"><strong>Subtotal:</strong>
                <?php echo $cource_amount ?> Rs
              </td>
            </tr>
            <tr>
              <td colspan="2" style="text-align: right;"><strong>GST (18%):</strong> 1800 Rs</td>
            </tr>
            <!-- php for Discount -->
            <?php
            if ($coupon_type == 'Percentage') {
              $perDisval = $cource_amount - $amount_pay;
              echo '
              <tr>
              <td colspan="2" style="text-align: right;"><strong>Discount:</strong>' . $perDisval . ' Rs</td>
            </tr>
              ';
            } elseif ($coupon_type == 'Rupee') {
              $rupeeDisval = $coupon_value;
              echo '
              <tr>
              <td colspan="2" style="text-align: right;"><strong>Discount:</strong> ' . $rupeeDisval . ' Rs</td>
            </tr>
              ';
            } else {
              echo '
              <tr>
              <td colspan="2" style="text-align: right;"><strong>Discount:</strong> 0 Rs</td>
            </tr>
              ';
            }
            ?>

            <tr>
              <td colspan="2" style="text-align: right;"><strong>Total Amount:</strong>
                <?php echo $amount_pay ?> Rs
              </td>
            </tr>
          </table>
          <hr>

          <!-- <div class="row">
            <div class="col-md-6">
              <p><strong>Receipt No.:</strong> 1020</p>
            </div>
            <div class="col-md-6 text-md-end">
              <p><strong>Receipt Date:</strong> 2023-08-28</p>
            </div>
          </div> -->

          <p><strong>Transaction ID:</strong>
            <?php echo $gen_paymentid ?>
          </p>
          <p><strong>Payment Gateway:</strong> Razorpay</p>
          <p><strong>Transaction Mode:</strong> Online</p>


          <hr>
          <p><strong>Conditions:</strong></p>
          <ul>
            <li>This receipt confirms your successful enrollment in the course.</li>
            <li>Payment is non-refundable and non-transferable.</li>
            <li>Course materials and access will be provided upon payment confirmation.</li>
            <li>Please retain this receipt for your records.</li>
            <li>For any assistance, contact our support team at info@asdrinfotech.com</li>
          </ul>
        </div>







      </div>
    </div>
  </div>

  <!-- Receipt End -->









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
<script>
        function printAndRedirect() {
            // Open the print dialog
            window.print();

            // Add an event listener for the 'afterprint' event
            window.addEventListener('afterprint', function() {
                // Redirect to the index page after printing or canceling
                window.location.href = document.referrer; // Change the URL to your index page
            });
        }
        printAndRedirect();
    </script>
  <!-- navbar dropdown end -->
</body>

</html>