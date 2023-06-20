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
  .custom-wrapper {
  background-color: pink;
  width: 900px;
  height: auto;
}

</style>
</head>
<body>
<div class="wrapper rounded bg-white custom-wrapper">

<?php
include 'dbcon.php';

if (isset($_POST['btnAdd'])) {

  $firstname = $_POST['firstname'];
  $middlename = $_POST['middlename'];
  $lastname = $_POST['lastname'];
  $suffix = $_POST['suffixname'];
  $birthday = $_POST['birthday'];
  $gender = $_POST['gender'];
  $email = $_POST['email'];
  $contact = $_POST['contact_number'];
  $valid_id = $_POST['valid_id'];
  $street = $_POST['street'];
  $barangay = $_POST['barangay'];
  $city = $_POST['city'];

  $sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname, suffixname, birthday, gender) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$birthday', '$gender')";

  if ($conn->query($sql) === TRUE) {
    $user_id = $conn->insert_id;
    $sql = "INSERT INTO tbl_usercredentials (email, contact, valid_id) VALUES ('$email', '$contact', '$valid_id')";

    if ($conn->query($sql) === TRUE) {

      $credentials_id = $conn->insert_id;
      $sql = "INSERT INTO tbl_address (street, barangay, city) VALUES ('$street', '$barangay', '$city')";

      if ($conn->query($sql) === TRUE) {
        $address_id = $conn->insert_id;
        $sql = "INSERT INTO tbl_user_level (level) VALUES ('ADMIN')";

        if ($conn->query($sql) === TRUE) {
          $level_id = $conn->insert_id;
          $sql = "INSERT INTO tbl_admin (user_id, credentials_id, address_id, level_id) VALUES ('$user_id', '$credentials_id', '$address_id', '$level_id')";

          if ($conn->query($sql) === TRUE) {
            echo ('Added successfully!');
          }
        }
      }
    }
  }
}
?>



<div class="h3">Add Admin Account</div>
<p> You can add admin account here.</p>


      <form action="#" method="POST">
        <div class="modal-body">
          <div class="error" id="error" style="display: none;"></div>
          <div>
            <label style="margin-bottom: 20px;">Personal Information</label>
          </div>
          <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>First Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="firstname" required>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control" name="middlename">
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Last Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="lastname" required>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Suffix Name</label>
                <input type="text" class="form-control" name="suffixname">
              </div>
            </div>
          </div>
          <div class="row">
          
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Birthday <span style="color: red;">*</span></label>
                <input type="date" class="form-control" name="birthday" required>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Gender <span style="color: red;">*</span></label>
                <select class="form-control" name="gender" required>
                  <option value="" selected hidden>Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="prefer">Prefer not to say</option>
                </select>
              </div>
            </div>
          </div>

          
          <div class="row">
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Email <span style="color: red;">*</span></label>
                <input type="email" class="form-control" name="email" required>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Contact Number <span style="color: red;">*</span></label>
                <input type="tel" class="form-control" name="contact_number" required>
              </div>
            </div>

            <div class="col-md-6 mt-md-0 mt-3">
  <div class="form-group">
    <label>Upload Valid ID <span style="color: red;">*</span></label>
    <input type="file" class="form-control-file" name="valid_id" required>
  </div>
</div>
            <div class="h3">Current Address</div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Street <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="street" required>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>Barangay <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="barangay" required>
              </div>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
              <div class="form-group">
                <label>City <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="city" required>
              </div>
            </div>
          </div>
         

        </div><br>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
        </div>
      </form>
    </div>
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