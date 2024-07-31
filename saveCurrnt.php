<?php
	//error_reporting(0);
	require_once("config/config.php");

    $fname = "";
    $lname = "";
    $photo = "";
    $dob = "";
    $batch = "";
    $course = "";
    $rollno = "";
    $Rnumber = "";
    $email = "";
    $number = "";
    $address = "";

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $photo = $_POST['photo'];
        $dob = $_POST['dob'];
        $batch = $_POST['batch'];
        $course = $_POST['course'];
        $rollno = $_POST['rollno'];
        $Rnumber = $_POST['Rnumber'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];
    }

    $sql = "insert into veracub(r_no,bimg,f_name,l_name,gender,address,phone,email,date_of_birth,course,batch,room) VALUES ('$rollno','$photo','$fname','$lname','female','$address','$number','$email','$dob','$course','$batch','$Rnumber')";

	$result=mysqli_query($conn,$sql);
        if($result)
        {
            echo '<script>alert("Registration Requested");</script>';
            echo '<script> window.location.href="index.html"; </script>';
        }
        else
        {
            echo mysqli_error($con);
        }
?>