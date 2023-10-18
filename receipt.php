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
    <title>Receipt | ASDR Infotech</title>
    <!-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> -->
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
    width: 70%;
    margin: 0 auto;
/*    border: 1px solid #ccc;*/
    padding: 20px;
    background-color: #fff;
   border-top: 4px solid rgb(255 74 5 / 63%);
   border-bottom: 4px solid rgb(255 74 5 / 63%);
  }

    table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  th, td {
/*    border: 1px solid #ccc;*/
    padding: 8px;
    text-align: left;
  }
  th {
    background-color: #ff660026;
  }
    </style>
    
</head>

<body style="background-color: #f9f9f9;">

    



   


    <!-- Receipt Start -->
    <div class="container-fluid py-5" style=" padding-top: 1rem !important; padding-bottom: 0rem !important;">
        <div class="container py-5">
            <div class="row align-items-center">



                
<div id="receipt">


  <div style="text-align: center; padding: 20px;">
    <div style="display: flex; justify-content: center; align-items: center; text-align: left;">
        <img src="img/ASDR LOGO.png" alt="Company Logo" style="margin-right: 123px; width: 201px;">
        <div>
            <h2><span style="color: #FF6600;">ASDR</span> <span style="color: grey;">Infotech</span></h2>
            <p style="margin: 0;">Unit#201, Achal Leela Darshan, Baner Road, Baner, Pune-45</p>
            <p style="margin: 0;">GST No: GST123456789</p>
        </div>
    </div>
    <hr style="margin-top: 20px; margin-bottom: 20px;">
</div>


<h5 style="color: #FF6600;">Fee Receipt</h5>
<p> Date: 2023-08-28</p>

<h5 style="color: #FF6600;">Bill To</h5>
<div class="row">
    <div class="col-md-6">
        <p style="margin-bottom: 0rem !important;">Name: John Smith</p>
    </div>
    <div class="col-md-6 text-md-end">
        <p style="margin-bottom: 0rem !important; text-align: center;">Student ID: 1730</p>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
<p style="margin-bottom: 0rem !important;">Contact No: +91 7697080509</p>
</div>
<div class="col-md-6 text-md-end">
        <p style="margin-bottom: 0rem !important; text-align: center;">Receipt No: 1730</p>
    </div>
</div>
<p>Email Id: john@gmail.com</p>
<hr>
  
  <table>
    <tr>
      <th style="border: 1px solid #ccc;">Course</th>
      <th style="border: 1px solid #ccc;">Amount</th>
    </tr>
    <tr>
      <td style="border: 1px solid #ccc;">Machine Learning</td>
      <td style="border: 1px solid #ccc;">10000 rs</td>
    </tr>
    
    <tr>
      <td style="text-align: right;">Subtotal:</td>
      <td>10000 rs</td>
    </tr>

    <tr>
      <td style="text-align: right;">Discount:</td>
      <td>-1000 rs</td>
    </tr>

    <tr>
      <td style="text-align: right;">Total Amount:</td>
      <td> 10800 rs</td>
    </tr>

    
  </table>
  <hr>
  
    <div class="row">
    <div class="col-md-6">
        <p style="margin-bottom: 0rem !important;">Transaction ID: ABC123XYZ</p>
    </div>
    <div class="col-md-6 text-md-end">
        <p style="margin-bottom: 0rem !important;">Receipt Date: 2023-08-28</p>
    </div>
</div>

  
  <p style="margin-bottom: 0rem !important;">EaseBuzz ID: EASE456</p>
  <p style="margin-bottom: 0rem !important;">Payment Gateway: Razorpay</p>
  <p style="margin-bottom: 0rem !important;">Transaction Mode: Online</p>


  <hr>
  <p>Conditions:</p>
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
      window.print();
    </script>
    <!-- navbar dropdown end -->
</body>

</html>