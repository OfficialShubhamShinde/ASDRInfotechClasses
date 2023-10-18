<?php
include '_dbConnect.php';
?>

<?php
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $position = $_POST['position'];
    $message = $_POST['message'];
    // $resume = $_POST['resume'];
    // $cover_letter = $_POST['cover_letter'];

    // for PDF
    $pdf = $_FILES['pdf']['name'];
    $pdf_type = $_FILES['pdf']['type'];
    $pdf_size = $_FILES['pdf']['size'];
    $pdf_tem_loc = $_FILES['pdf']['tmp_name'];
    $pdf_store = "Internship Resumes/" . $pdf;
    move_uploaded_file($pdf_tem_loc, $pdf_store, );

    // For Cover Latter
    $pdf2 = $_FILES['cover_letter']['name'];
    $pdf_type2 = $_FILES['cover_letter']['type'];
    $pdf_size2 = $_FILES['cover_letter']['size'];
    $pdf_tem_loc2 = $_FILES['cover_letter']['tmp_name'];
    $pdf_store2 = "Internship cover_letter/" . $pdf2;

    move_uploaded_file($pdf_tem_loc2, $pdf_store2, );



    $insertData = "INSERT INTO `internship_program` (`name`, `email`, `contactno`, `position`, `message`, `resume`, `coverlatter`) VALUES 
    ('$name', '$email', '$contactno', '$position', '$message', '$pdf', '$pdf2')";
    $result = mysqli_query($conn, $insertData);


    if ($result) {
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

        $mail->isHTML(true);
        $mail->setFrom($email);
        $mail->addAddress($email);
        $mail->Subject = ("Re: Internship Inquiry");
        $mail->Body = "Dear $name, " . "<br>" . "<br>" . "

        Thank you for submitting your resume for our internship program. We appreciate your interest and will carefully review your application. We will be in touch soon with further details." . "<br>" . "<br>" . "

        Regards, " . "<br>" . "
        ASDR Infotech" . "<br>" . "
        asdrinfotech.com";

        $mail->send();


        // Second email
        $mail->ClearAddresses(); // Clear the previous recipient
        $mail->addAddress("asdrinfotechtraining@gmail.com");
        // Attach the PDF file
        $mail->addAttachment($pdf_store, $pdf);
        $mail->addAttachment($pdf_store2, $pdf2);
        $mail->Subject = "Internship Inquiry";
        $mail->Body = "Source: ASDR Training Website" . "<br>" . "<br>" . "
        Full Name: $name " . "<br>" . "
        Email Address: $email " . "<br>" . "
        Contact Number: $contactno " . "<br>" . "
        Position Applied For: $position " . "<br>" . "
        Additional Message: $message " . "<br>" . "
        Attached Resume: YES" . "<br>" . "<br>" . "
        ";
        // 
        try {
            if ($mail->send()) {
                echo '<script>
                        alert("Thanks for Applying");
                        window.location.href = "index";
                    </script>';
            }
        } catch (Exception $e) {
            echo '<script>
                        alert("Something went wrong.");
                        window.location.href = "index";
                    </script>';
        }
        mysqli_close($conn);

        exit();
    }
}
?>