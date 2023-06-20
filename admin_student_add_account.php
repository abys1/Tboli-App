<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll</title>
    <link rel="stylesheet" href="css/enroll.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
  .h3 {
    margin-top: 20px; /* Adjust the value as per your requirements */
  }
</style>
</head>
<body>
<div class="wrapper rounded bg-white">

<div class="h3">Add Student Account</div>
<p> You can add Student account here.</p>

<?php
include 'dbcon.php';

if (isset($_GET['user_id']) && isset($_GET['userinfo_id'])) {
  $user_id = $_GET['user_id'];
  $userinfo_id = $_GET['userinfo_id'];

  $query = "SELECT tbl_userinfo.user_id, tbl_userinfo.firstname, tbl_userinfo.middlename, tbl_userinfo.lastname, tbl_userinfo.suffix, tbl_userinfo.age, tbl_userinfo.birthday, tbl_enrollment.userinfo_id, tbl_enrollment.admit_type, tbl_enrollment.grade, tbl_enrollment.program, tbl_enrollment.term, tbl_enrollment.lrn, tbl_enrollment.lsa, tbl_user_status.status, tbl_user_level.level,
  tbl_contactinfo.email, tbl_contactinfo.contact_num, tbl_contactinfo.city, tbl_contactinfo.barangay, tbl_contactinfo.street
  FROM tbl_userinfo
  JOIN tbl_enrollment ON tbl_userinfo.user_id = tbl_enrollment.userinfo_id
  JOIN tbl_user_status ON tbl_userinfo.user_id = tbl_user_status.userinfo_id
  JOIN tbl_user_level ON tbl_userinfo.user_id = tbl_user_level.userinfo_id
  JOIN tbl_contactinfo ON tbl_userinfo.user_id = tbl_contactinfo.userinfo_id
  WHERE tbl_userinfo.user_id = '$user_id' LIMIT 1";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
  } else {
      echo "No records found in the tbl_userinfo table.";
      exit();
  }
} else {
  echo "No user ID provided.";
  exit();
}


  if(isset($_POST['btnSubmit'])){
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];
    $encrypted = password_hash($password, PASSWORD_DEFAULT);

    //validation here

    $sql = "INSERT INTO tbl_usercredentials (userinfo_id, username, password) VALUES ('$userinfo_id', '$username', '$encrypted')";
    if($conn->query($sql)){
        header("Location:admin_pending.php?msg=Student Account Added Successfully");
        exit();
    }
    }
?>

<div class="form">
    <form action="" method="POST">
    <div class="row">

<div class="col-md-6 mt-md-0 mt-3">
      <label>User Name<span style="color: red;">*</span></label>
      <input type="text" class="form-control" name="username">
</div>
<div class="col-md-6 mt-md-0 mt-3">
      <label>Password<span style="color: red;">*</span></label>
      <input type="password" class="form-control" name="password">
</div>
<div class="col-md-6 mt-md-0 mt-3">
      <label>Confirm Password<span style="color: red;">*</span></label>
      <input type="password" class="form-control" name="cfpassword">
</div>

<button class="btn btn-primary mt-3" id="submit-btn" name="btnSubmit" type="submit">Submit</button>
</form>
</div>

</div>
<script>
  $(document).ready(function() {
  $("#submit-btn").click(function() {
    // Show a popup message
    alert("Thank you for submitting the form!");

    // Reset the form
    $("form")[0].reset();
  });
});

  function clearValue(input) {
    input.value = '';
  }
</script>
</body>
</html>