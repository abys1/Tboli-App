<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Enrollment</title>
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

<div class="h3">Registration Form</div>
<p> We warmly welcome junior high school completes, and foreign applicants to our campuses.
Kindly fill-out the online application form for a fast and efficient admissions procedure.</p>

<div class="form">
    <form action="student_enrollment_add.php" method="POST">
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>First Name <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="firstname" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Middle Name</span></label>
            <input type="text" class="form-control" name="middlename">
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Last Name <span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="lastname" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Suffix Name</label>
            <input type="text" class="form-control" name="suffixname">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Age <span style="color: red;">*</span></label>
            <input type="number" class="form-control" name="age" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Birthday <span style="color: red;">*</span></label>
            <input type="date" class="form-control" name="birthday" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
          <label>Grade<span style="color: red;">*</span></label>
          <select id="sub" name="gender">
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
            <input type="text" class="form-control" name="email" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Contact Number <span style="color: red;">*</span></label>
            <input type="number" class="form-control" name="contact_number" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Street<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="street" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
            <label>Barangay<span style="color: red;">*</span></label>
            <input type="text" class="form-control" name="barangay" required>
        </div>
        <div class="col-md-6 mt-md-0 mt-3">
          <label>City<span style="color: red;">*</span></label>
          <input type="text" class="form-control" name="city" required>
    </div>
    <div class="h3">Enrollment</div>
    <div class=" col-md-6 mt-md-0 mt-3">
        <label>Admit Type<span style="color: red;">*</span></label>
        <select id="sub" name="admit" required>
            <option value="" selected hidden>Choose Option</option>
            <option value="old">Old Student</option>
            <option value="new">New Student</option>
            <option value="transferee">Transferee</option>
        </select>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>Grade<span style="color: red;">*</span></label>
          <select id="sub" name="grade" required>
            <option value="" selected hidden>Choose Option</option>
            <option value="11">Grade 11</option>
            <option value="12">Grade 12</option>
            </select>
    </div>

     <div class="col-md-6 mt-md-0 mt-3">
          <label>Strand<span style="color: red;">*</span></label>
          <select id="sub" name="strand" required>
            <option value="" selected hidden>Choose Option</option>
            <option value="abm">ABM</option>
            <option value="humss">Humss</option>
            <option value="stem">Stem</option>
            <option value="eim">EIM</option>
            <option value="fbs">FBS</option>
            <option value="smaw">Smaw</option>
          </select>
    </div>

    <div class="col-md-6 mt-md-0 mt-3">
          <label>Term<span style="color: red;">*</span></label>
          <select id="sub" name="term" required>
            <option value="" selected hidden>Choose Option</option>
            <option value="1st">1st Term</option>
            <option value="2nd">2nd Term</option>
          </select>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
          <label>LRN<span style="color: red;">*</span></label>
          <input type="number" class="form-control" name="lrn" required>
    </div>
    <div class="col-md-6 mt-md-0 mt-3">
        <label>Last school attended</label>
        <input type="text" class="form-control" name="last" placeholder="For transferee only">
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

</script>
</body>
</html>