<?php 
include '_dbConnect.php';
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["emailid"];

    $insertContactdata = "INSERT INTO `newslatter` (`email`) VALUES ('$email')";
    $quesyInsertContactData = mysqli_query($conn, $insertContactdata);

    if ($quesyInsertContactData) {
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer(true); // Passing 'true' enables exceptions

        // SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "asdrinfotechtraining@gmail.com";
        $mail->Password = "bcpsvpggnbrsktzn";
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        // First email
        $mail->isHTML(true);
        $mail->setFrom($email);
        $mail->addAddress($email);
        $mail->Subject = "ASDR Infotech";
        $mail->Body = "Thanks for subscribing with us";

        try {
            $mail->send(); // Send both emails
            echo '<script>
                        alert("Subscribe successfully");
                        window.location.href = "index";
                    </script>';
        } catch (Exception $e) {
            echo '<script>
                        alert("Something went wrong while sending emails.");
                        window.location.href = "index";
                    </script>';
        }
        mysqli_close($conn);

        exit(json_encode(array("status" => $status, "response" => $response)));
    }


}
?>