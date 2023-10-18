<?php 
    include '_dbConnect.php';
?>

<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $quali = $_POST['quali'];
    $exper = $_POST['exper'];
    $id = $_POST['id'];
    $expct = $_POST['expct'];

    $selectLink = "select * from events where event_id = $id";
    $querySelectLink = mysqli_query($conn, $selectLink);
    $row = mysqli_fetch_assoc($querySelectLink);
    $link = $row['elink'];
    $eventname = $row['etitle'];
    $edate = $row['edate'];
    $estarttime = $row['estarttime'];
    $twelveHourTime = date("g:i A", strtotime($estarttime));

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    

    $mail = new PHPMailer();

    //SMTP Settings
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
    $mail->Subject = "Thank You for Registering | ASDR Infotech Webinar: $eventname";
    $mail->Body = "
    Dear $name, " . "<br>" . "<br>" . "

    Thank you for registering for the upcoming ASDR Infotech webinar on $eventname. Your interest and participation are greatly appreciated." . "<br>" . "<br>" . "

    Here are the details for the webinar: " . "<br>" . "<br>" . "

    Webinar Title: $eventname " . "<br>" . "
    Webinar Date: $edate" . "<br>" . "
    Webinar Time: $twelveHourTime" . "<br>" . "
    Webinar Link: $link " . "<br>" . "<br>" . "

    Should you have any questions or need further assistance, please do not hesitate to reach out to our team at info@asdrinfotech.com " . "<br>" . "<br>" . "

    Best regards, " . "<br>" . "
    ASDR Infotech
    ";
    $mail->send();

    // Second email
    $mail->ClearAddresses(); // Clear the previous recipient
    $mail->addAddress("asdrinfotechtraining@gmail.com");
    $mail->Subject = "Event Registration | $eventname";
    $mail->Body = "
    Source: ASDR Training Website " . "<br>" . "<br>" . "

    Here are the details of the student who registered for the event $eventname: " . "<br>" . "<br>" . "

    Full Name: $name " . "<br>" . "
    Email Address: $email " . "<br>" . "
    Contact Number: $contact " . "<br>" . "
    Qualification: $quali " . "<br>" . "
    Event Name: $eventname " . "<br>" . "
    Professional Experience (In Year): $exper " . "<br>" . "
    Expectations: $expct " . "<br>" . "
    
    ";
    $mail->send();

    if ($mail->send()) {
        
        $insertData = "INSERT INTO `registration` (`event_id`, `name`, `email`, `contactno`, `qualification`, `experience`, `expectation`) VALUES ('$id', '$name', '$email', '$contact', '$quali', '$exper', '$expct')";
        $insertQuery = mysqli_query($conn, $insertData);

        echo '<script>
                alert("Registered successfully");
                window.location.href = "index";
            </script>';
    } else {
        echo '<script>
                alert("Something went wrong");
                window.location.href = "index";
            </script>';
        ;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));


}
?>