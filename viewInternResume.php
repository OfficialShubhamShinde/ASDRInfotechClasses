<?php
include '_dbConnect.php';
?>

<?php
session_start();
$user_type = $_SESSION['user_type'] ?? '';
$user_id = $_SESSION['user_id'] ?? '';
?>

<?php
$applicantid = $_GET['applicantid'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = "select resume from internship_program where internid = $applicantid";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) > 0) {
        ?>
        <center>
            <embed src="Internship Resumes/<?php echo $row['resume']; ?>" type="application/pdf" width="800" height="600"
                fullscreen>
        </center>

        <?php
    }
    else{
        echo '
        <script>
            alert("Resume Not Found")
            window.location.href = "dashbordInternshipApplication";
        </script>
        ';
    }

    ?>


</body>

</html>