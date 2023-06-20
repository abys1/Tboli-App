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

<div class="h3">Edit Subject Information</div>
<p> You can add and edit the subject's Information here.</p>

<?php
include 'dbcon.php';

if (isset($_GET['subject_id'])) {
    $subject_id = $_GET['subject_id'];

    $query = "SELECT * FROM tbl_subjects WHERE subject_id = '$subject_id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No records found";
        exit();
    }
} else {
    echo "No user ID provided.";
    exit();
}

if (isset($_POST['btnSubmit'])) {
    $strand = $_POST['strand'];
    $grade = $_POST['grade'];
    $subjects = $_POST['subject'];
    $day = $_POST['day'];
    $schedules = $_POST['schedules'];

    $sql = "UPDATE tbl_subjects SET strand = '$strand', grade = '$grade', subjects = '$subjects', day = '$day', schedules = '$schedules' WHERE subject_id = '$subject_id' LIMIT 1";

    if ($conn->query($sql) === TRUE) {
        header("Location: admin_subject.php?msg=Edit Added Successfully");
        exit();
    } else {
        header("Location: admin_subject.php?msg=Unable To Edit Subject");
        exit();
    }
}
?>


<div class="form">
    <form action="" method="POST">
    <div class="row">
    <div class="col-md-6 mt-md-0 mt-3">
                  <label>Strand<span style="color: red;">*</span></label>
                  <select id="sub" name="strand" required>
                    <option value="" selected disabled>Select Strand</option>
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
                  <label>Grade<span style="color: red;">*</span></label>
                  <select id="sub" name="grade" required>
                    <option value="" selected disabled>Select Grade</option>
                    <option value="11">Grade 11</option>
                    <option value="12">Grade 12</option>
                    </select>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Subjects<span style="color: red;">*</span></label>
                <input type="text" class="form-control" name="subject" required placeholder="<?php echo $row['subjects']?>">
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                  <label>Day<span style="color: red;">*</span></label>
                  <select id="sub" name="day" required>
                    <option value="" selected disabled>Select Day</option>
                    <option value="monday">Monday</option>
                    <option value="tuesday">Tuesday</option>
                    <option value="wednesday">Wednesday</option>
                    <option value="thursday">Thursday</option>
                    <option value="friday">Friday</option>
                  </select>
            </div>
            <div class="col-md-6 mt-md-0 mt-3">
                <label>Schedules<span style="color: red;">*</span></label>
                <input type="time" class="form-control" name="schedules">
            </div>

            <button class="btn btn-primary mt-3" id="submit-btn" name="btnSubmit" type="submit">Submit</button>
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