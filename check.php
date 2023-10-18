<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $esendtime = $_POST['eet'];
    echo $esendtime;
}
?>