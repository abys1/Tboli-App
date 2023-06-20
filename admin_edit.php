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

<div class="h3">Edit Student Information</div>
<p> You can add and edit the student's Information here.</p>

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
    
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $suffix = $_POST['suffixname'];
    $email = $_POST['email'];
    $contact = $_POST['contact_number'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $admit = $_POST['admit'];
    $grade = $_POST['grade'];
    $strand = $_POST['strand'];
    $term = $_POST['term'];
    $lrn = $_POST['lrn'];
    $last = $_POST['last'];;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];
    $encrypted = password_hash($password, PASSWORD_DEFAULT);

    //validation here


    $sql = "UPDATE tbl_userinfo SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', suffix = '$suffix', gender = '$gender', birthday = '$birthday', age = '$age'
    WHERE user_id = $user_id";

    if ($conn->query($sql) === TRUE) {
        $sql = "UPDATE tbl_usercredentials SET username = '$username', password = '$encrypted' WHERE userinfo_id = '$userinfo_id'";

            if ($conn->query($sql) === TRUE) {
            $sql = "UPDATE tbl_contactinfo SET email = '$email', contact_num = '$contact', city = '$city', barangay = '$barangay', street = '$street'
                    WHERE userinfo_id = '$userinfo_id'";

                if ($conn->query($sql) === TRUE) {
                    $sql = "UPDATE tbl_enrollment SET admit_type = '$admit', grade = '$grade', program = '$strand', term = '$term', lrn = '$lrn', lsa = '$last'
                            WHERE userinfo_id = '$userinfo_id'";

                    if ($conn->query($sql) === TRUE) {
                        $sql = "UPDATE tbl_user_level SET level = 'STUDENT' WHERE userinfo_id = '$userinfo_id'";

                        if ($conn->query($sql) === TRUE) {
                            $sql = "UPDATE tbl_user_status SET status = 0 WHERE userinfo_id = '$userinfo_id'";

                            if ($conn->query($sql) === TRUE) {
                                header("Location: admin_pending.php?msg=Student Information Updated Successfully");
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }
?>

<div class="form">
    <form action="" method="POST">
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>First Name <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $row['firstname']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Middle Name</span></label>
            <input type="text" class="form-control" name="middlename" value="<?php echo $row['middlename']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Last Name <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $row['lastname']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Suffix Name</label>
            <input type="text" class="form-control" name="suffixname" value="<?php echo $row['suffix']?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Age <span style="color: red;">*</span></label>
            <input type="number" class="form-control" name="age" value="<?php echo $row['age']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Birthday <span style="color: red;">*</span></label>
            <input type="date" class="form-control" name="birthday" value="<?php echo $row['birthday']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
          <label>Grade<span style="color: red;">*</span></label>
          <select id="sub" name="gender" value="<?php echo $row['gender']?>">
            <option value="" selected hidden>Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="prefer">Prefer not to say</option>
            </select>
    </div>
    </div>
  
        <div class="h3">Contact Information</div>
    <div class="row">
    <div class="col-md-6 mt-md-0 mt-3">
            <label>Email <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="email" value="<?php echo $row['email']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Contact Number <span style="color: red;">*</span></label>
            <input type="number" class="form-control" name="contact_number" value="<?php echo $row['contact_num']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Street<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="street" value="<?php echo $row['street']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Barangay<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="barangay" value="<?php echo $row['barangay']?>">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
          <label>City<span style="color: red;">*</span></label>
          <input type="text" class="form-control" name="city" value="<?php echo $row['city']?>">
    </div>
    <div class="h3">Enrollment</div>
    <div class=" col-md-6 mt-md-0 mt-3">
        <label>Admit Type<span style="color: red;">*</span></label>
        <select id="sub" name="admit" value="<?php echo $row['admit']?>">
            <option value="" selected hidden>Select Admit Type</option>
            <option value="old">Old Student</option>
            <option value="new">New Student</option>
            <option value="transferee">Transferee</option>
        </select>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>Grade<span style="color: red;">*</span></label>
          <select id="sub" name="grade" value="<?php echo $row['grade']?>">
            <option value="" selected hidden>Select Grade</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
            </select>
    </div>

     <div class="col-md-6 mt-md-0 mt-3">
          <label>Strand<span style="color: red;">*</span></label>
          <select id="sub" name="strand" value="<?php echo $row['program']?>">
            <option value="" selected hidden>Select Strand</option>
            <option value="abm">ABM</option>
            <option value="humss">HUMMS</option>
            <option value="stem">STEM</option>
            <option value="eim">EIM</option>
            <option value="fbs">FBS</option>
            <option value="smaw">SMAW</option>
            <option value="ict">ICT</option>
          </select>
    </div>

    <div class="col-md-6 mt-md-0 mt-3">
          <label>Term<span style="color: red;">*</span></label>
          <select id="sub" name="term" value="<?php echo $row['term']?>">
            <option value="" selected hidden>Select Term</option>
            <option value="1st">1st Term</option>
            <option value="2nd">2nd Term</option>
          </select>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>LRN<span style="color: red;">*</span></label>
          <input type="number" class="form-control" name="lrn" value="<?php echo $row['lrn']?>">
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
        <label>Last school attended</label>
        <input type="text" class="form-control" name="last" value="For transferee only" onclick="clearValue(this)" value="<?php echo $row['lsa']?>">
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