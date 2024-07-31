<?php
	//error_reporting(0);
	require_once("config/config.php");

    $fname = "";
    $lname = "";
    $photo = "";
    $dob = "";
    $batch = "";
    $branch = "";
    $placeOfWork = "";
    $designation = "";
    $email = "";
    $number = "";
    $address = "";
    $link = "";

    if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $photo = $_POST['photo'];
        $dob = $_POST['dob'];
        $batch = $_POST['batch'];
        $branch = $_POST['branch'];
        $placeOfWork = $_POST['placeOfWork'];
        $designation = $_POST['designation'];
        $link = $_POST['link'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];
    }

    $sql = "insert into veralum(aimg,af_name,al_name,aaddress,aphone,aemail,adate_of_birth,abranch,abatch,apw,adesig,alk) VALUES ('$photo','$fname','$lname','$address','$number','$email','$dob','$branch','$batch','$placeOfWork','$designation','$link')";

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