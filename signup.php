<?php
include '_dbConnect.php';
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

// if (empty($name) || empty($email) || empty($password) || empty($confirm_password) || empty($user_type)) {
//     echo '
//     <script>
//         alert("Please fill out all fields");
//         window.location.href = "index";
//     </script>';
// }

if ($password !== $confirm_password) {
    // Handle password mismatch error
    echo '
    <script>
        alert("Password Does not Match. Please try again");
        window.location.href = "index";
    </script>
    ';
}

// Check if user exists in database
$sql = "SELECT email FROM users WHERE email = '$email'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // User already exists
    echo '
    <script>
        alert("User already exists");
        window.location.href = "index";
    </script>
    ';
} else {
    $sql = "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$password', 'Student')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo '
        <script>
            alert("Account created sucessfully");
            window.location.href = "index";
        </script>';
    } else {
        echo '
        <script>
            alert("Something wents wrong");
            window.location.href = "index";
        </script>';
    }

}

?>