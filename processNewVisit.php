<?php
include(__DIR__ . '/dbcon.php');

$visitDate = $_POST['visitDate'];
$visitTime = $_POST['visitTime'];
$docid     = $_POST['docid'];
$ptntid    = $_POST['ptntid'];
$cost      = $_POST['cost'];

$sql = "INSERT INTO visit (visit_date, visit_time, doctor_id, patient_id, cost)
        VALUES ('$visitDate', '$visitTime', '$docid', '$ptntid', '$cost')";

// echo $sql;
mysqli_query($conn, $sql);
?>
