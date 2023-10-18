<?php 
include '_dbConnect.php';

$event_id = $_GET['event_id'];

$selectEvent = "DELETE FROM events WHERE event_id = '$event_id'";
$querySelectEvent = mysqli_query($conn, $selectEvent);

if($querySelectEvent){
    echo '
        <script>
            alert("Event deleted successfully");
            window.location.href = "index";
        </script>
    ';
}

?>