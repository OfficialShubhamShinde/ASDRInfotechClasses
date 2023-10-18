<?php
include '_dbConnect.php';
?>

<?php
$email = $_POST['email'];
$password = $_POST['password'];

// Validate form data
if (empty($email) || empty($password)) {
  echo '
    <script>
        alert("Please fill out all fields");
        window.location.href = "index";
    </script>';
}

$sql = "SELECT user_id, email, password, user_type FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
  // User exists, check if password matches
  $row = mysqli_fetch_assoc($result);
  if ($password == $row['password']) {
    // Password matches, log user in
    session_start();
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_type'] = $row['user_type'];
    $_SESSION['success'] = "Login successful!";
    header("Location: index"); // Add this line to redirect to index.php

  } else {

    echo '
    <script>
        alert("Incorrect password");
        window.location.href = "index";
    </script>';
  }
} else {
  // User doesn't exist
  echo '
    <script>
        alert("User not found. Please create account");
        window.location.href = "index";
    </script>';
}

// Close database connection
mysqli_close($conn);

?>
