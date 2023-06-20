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
 
</style>
</head>
<body>
<!-- <div class="wrapper rounded bg-white custom-wrapper"> -->

<div class="h3">Add Student Account</div>

<?php
include 'dbcon.php';

if(isset($_POST['btnAdd'])) {

    $learnersid = $_POST['learnersID'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $suffix = $_POST['suffixname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $gfirstname = $_POST['gfirstname'];
    $gmiddlename = $_POST['gmiddlename'];
    $glastname = $_POST['glastname'];
    $gsuffix = $_POST['gsuffixname'];
    $gbirthday = $_POST['gbirthday'];
    $ggender = $_POST['ggender'];
    $gnumber = $_POST['gnumber'];
    $gemail = $_POST['gemail'];
    $gstreet = $_POST['gstreet'];
    $gbarangay = $_POST['gbarangay'];
    $gcity = $_POST['gcity'];

    $sql = "INSERT INTO tbl_learner_id (learners_id) VALUES ('$learnersid')";

    if($conn->query($sql) === TRUE){
        $learner_id = $conn->insert_id;
        $sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname, suffixname, birthday, gender) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$birthday' ,'$gender')";

        if($conn->query($sql) === TRUE){
            $user_id = $conn->insert_id;
            $sql = "INSERT INTO tbl_learner_guardian_info (firstname, middlename, lastname, suffixname, birthday, gender) VALUES ('$gfirstname', '$gmiddlename', '$glastname', '$gsuffix', '$gbirthday', '$ggender')";

            if($conn->query($sql) === TRUE){
                $guardian_info_id = $conn->insert_id;
                $sql = "INSERT INTO tbl_learner_guardian_contact (contact_num, email, street, barangay, city) VALUES ('$gnumber', '$gemail', '$gstreet', '$gbarangay', '$gcity')";

                if($conn->query($sql) === TRUE) {
                    $guardian_contact_id = $conn->insert_id;
                    $sql = "INSERT INTO tbl_address (street, barangay, city) VALUES ('$street', '$barangay', '$city')";

                    if($conn->query($sql) === TRUE) {
                        $address_id = $conn->insert_id;
                        $sql = "INSERT INTO tbl_user_level (level) VALUES ('LEARNER')";

                        if($conn->query($sql) === TRUE) {
                            $level_id = $conn->insert_id;
                            $sql = "INSERT INTO tbl_learner (learners_id, user_id, guardian_info_id, guardian_contact_id, address_id, level_id) VALUES ('$learner_id', '$user_id', '$guardian_info_id', '$guardian_contact_id', '$address_id', '$level_id')";

                            if($conn->query($sql) === TRUE) {
                                echo('addedd successfully!');
                            }
                        }
                    }
                }
            }
        }
    }
}

?>

<form action="#" method="POST">
<div class="modal-body">
    <div class="error" id="error" style="display: none;"></div>
    <div>
        <label style="margin-bottom: 20px;">Personal Information</label>
    </div>
    <div class="row">
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Learner's ID <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="learnersID" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>First Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="firstname" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control" name="middlename">
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Last Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="lastname" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Suffix Name</label>
                <input type="text" class="form-control" name="suffixname">
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Birthday <span style="color: red;">*</span></label>
                <input type="date" class="form-control" name="birthday" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
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

    <div class="h2">Current Address</div>
    <div class="row">
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Street <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="street" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Barangay <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="barangay" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>City <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="city" required>
            </div>
        </div>
        <div class="h2">Guardian Information </div>
      
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>First Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="gfirstname" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control" name="gmiddlename">
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Last Name <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="glastname" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Suffix Name</label>
                <input type="text" class="form-control" name="gsuffixname">
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Birthday <span style="color: red;">*</span></label>
                <input type="date" class="form-control" name="gbirthday" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Gender <span style="color: red;">*</span></label>
                <select class="form-control" name="ggender" required>
                    <option value="" selected hidden>Select Gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="prefer">Prefer not to say</option>
                </select>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Contact Number <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="gnumber" required>
            </div>
        </div>  
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Email Address <span style="color: red;">Optional</span></label>
                <input type="text" class="form-control" name="gemail" required>
            </div>
        </div>  
    </div>

    <div class="h2">Current Address of Guardian</div>
    <div class="row">
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Street <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="gstreet" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>Barangay <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="gbarangay" required>
            </div>
        </div>
        <div class="col-md-4 mt-md-0 mt-3">
            <div class="form-group">
                <label>City <span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="gcity" required>
            </div>
        </div>
    </div><br>
 
  
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" name="btnAdd">Add</button>
    </div>
</div>
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