<?php 
include 'dbcon.php';

$user_id = $_GET['user_id'];
$status = $_GET['status'];
$updatestatus = "UPDATE tbl_user_status SET status = 0 WHERE userinfo_id = $user_id";
mysqli_query($conn, $updatestatus);
header("Location: admin_pending.php?msg=Updated Successfully");
?>