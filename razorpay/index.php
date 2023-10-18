<?php
session_start();

$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';

// Use session variables in your code

if (!isset($_SESSION['user_id'])) {
  echo '<script>
      alert("Please Login to Continue");
      window.location.href = "../index";
  </script>';
} else {
  ?>

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $course_id = $_POST['course_id'];
    $couponCode = $_POST['couponCode'];
    $courseAmount = $_POST['courseAmount'];

    // echo "Cource Id : " . $course_id;
    // echo "Cource Code : " . $couponCode;
    // echo "Cource Amount : " . $courseAmount;
  }
  ?>


  <html>

  <head>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  </head>

  <body>

    <?php
    $db_host = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'classes';
    $conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

    // $course_id = $_GET['course_id'];
  

    $selectAmount = "select * from courses where course_id = '$course_id'";
    $querySelectAmount = mysqli_query($conn, $selectAmount);
    $row = mysqli_fetch_assoc($querySelectAmount);
    // $amount = $row['cource_amount']; // Corrected typo: 'cource_amount' to 'course_amount'
    $finalVal = $courseAmount * 100;
    ?>
    <?php
    $selectForUserName = "select * from users where user_id = $user_id";
    $querySelectForusername = mysqli_query($conn, $selectForUserName);
    $rowSelectForUsername = mysqli_fetch_assoc($querySelectForusername);
    $usernameFetch = $rowSelectForUsername['name'];
    ?>
    <script>
      var course_id = "<?php echo $course_id; ?>";
      var couponCode = "<?php echo $couponCode; ?>";
      var courseAmount = "<?php echo $courseAmount; ?>";
      var options = {
        "key": "rzp_test_5sWTodJ4OCcxSk",
        "amount": "<?php echo $finalVal; ?>",
        "currency": "INR",
        "description": "Acme Corp",
        "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
        "prefill": {
          "email": "gaurav.kumar@example.com",
          "contact": "+919900000000"
        },
        "config": {
          "display": {
            "blocks": {
              "utib": {
                "name": "Pay using Axis Bank",
                "instruments": [
                  {
                    "method": "card",
                    "issuers": ["UTIB"]
                  },
                  {
                    "method": "netbanking",
                    "banks": ["UTIB"]
                  },
                  {
                    "method": "upi"
                  }
                ]
              },
              "other": {
                "name": "Other Payment modes",
                "instruments": [
                  {
                    "method": "card",
                    "issuers": ["ICIC"]
                  },
                  {
                    "method": "netbanking"
                  }
                ]
              }
            },
            "sequence": ["block.utib", "block.other"],
            "preferences": {
              "show_default_blocks": false
            }
          }
        },
        "handler": function (response) {
          var payment_main_id = response.razorpay_payment_id;
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "store_payment", true);
          xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
          xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                alert("Payment Successful! Your payment id is: " + response.razorpay_payment_id);
                window.location.href = "../index";
              } else {
                alert("Error storing payment details");
              }
            }
          };

          var data = "razorpay_payment_id=" + payment_main_id + "&course_id=" + course_id + "&couponCode=" + couponCode + "&courseAmount=" + courseAmount; // Make sure the variable name matches the one in your PHP script
          xhr.send(data);
        },
        "modal": {
          "ondismiss": function () {
            if (confirm("Are you sure you want to close the form?")) {
              // console.log("Checkout form closed by the user");
              window.location.href = "../index";
            } else {
              console.log("Complete the Payment");
            }
          }
        }
      };
      var rzp1 = new Razorpay(options);
      rzp1.open();
    </script>
  </body>

  </html>
  <?php
}
?>