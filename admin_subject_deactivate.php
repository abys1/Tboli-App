<?php 
include 'dbcon.php';

$subject_id = $_GET['subject_id'];
$updatestatus = "UPDATE tbl_subjects SET status = 0 WHERE subject_id = $subject_id";
mysqli_query($conn, $updatestatus);
header("Location: admin_subject.php?msg=Updated Successfully");
?>