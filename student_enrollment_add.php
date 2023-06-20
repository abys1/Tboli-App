<?php
include 'dbcon.php';

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


$sql = "INSERT INTO tbl_userinfo (firstname, middlename, lastname, suffix, gender, birthday, age)
VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$birthday', '$age')";

if($conn->query($sql) === TRUE) {
    $userinfo_id = $conn->insert_id;
    $sql = "INSERT INTO tbl_contactinfo (userinfo_id, email, contact_num, city, barangay, street) VALUES ('$userinfo_id', '$email', '$contact', '$city', '$barangay', '$street')";

    if($conn->query($sql) === TRUE){
        $sql = "INSERT INTO tbl_enrollment (userinfo_id, admit_type, grade, program, term, lrn, lsa) VALUES ('$userinfo_id', '$admit', '$grade', '$strand', '$term', '$lrn', '$last')";

        if($conn->query($sql) === TRUE){
            $sql = "INSERT INTO tbl_user_level (userinfo_id, level) VALUES ('$userinfo_id', 'STUDENT')";

            if($conn->query($sql) === TRUE) {
                $sql = "INSERT INTO tbl_user_status (userinfo_id, status) VALUES ('$userinfo_id', 0)";

                if($conn->query($sql) === TRUE){
                    header("Location: homepage.php?Enrollment Successfully");
                    exit();
                }
            }
        }
    }
}
?>