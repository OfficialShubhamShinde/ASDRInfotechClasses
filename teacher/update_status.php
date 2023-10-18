<?php 
    include '../_dbConnect.php';
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the course ID and updated status from the AJAX request
    $courseId = $_POST['course_id'];
    $status = $_POST['status'];

    // Update the status in the database
    // Assuming you have a valid mysqli connection object stored in $connection
    $stmt = $conn->prepare("UPDATE courses SET status = ? WHERE course_id = ?");
    $stmt->bind_param("si", $status, $courseId);

    if ($stmt->execute()) {
        // Status updated successfully
        echo "success";
    } else {
        // Error occurred while updating status
        echo "error";
    }

    // Close the statement and database connection
    $stmt->close();
    $conn->close();
}
?>
