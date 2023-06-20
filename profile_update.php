<?php
session_start();
$user_id = $_SESSION['user_id'];
include 'dbcon.php';
if(isset($_POST['btnUpdate'])){
    
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $suffix = $_POST['suffixname'];
    $email = $_POST['email'];
    $contact = $_POST['contact_number'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $street = $_POST['street'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $grade = $_POST['grade'];
    $strand = $_POST['strand'];
    $lrn = $_POST['lrn'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cfpassword = $_POST['cfpassword'];
    $encrypted = password_hash($password, PASSWORD_DEFAULT);

    //validation here


    $sql = "UPDATE tbl_userinfo SET firstname = '$firstname', middlename = '$middlename', lastname = '$lastname', suffix = '$suffix', gender = '$gender', birthday = '$birthday'
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
                            $sql = "UPDATE tbl_user_status SET status = 1 WHERE userinfo_id = '$userinfo_id'";

                            if ($conn->query($sql) === TRUE) {
                                header("Location: profile.php?msg=Student Information Updated Successfully");
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }
?>