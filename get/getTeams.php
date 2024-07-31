<?php
	//error_reporting(0);
	require_once("../config/config.php");
	$batch=$_POST['batch'];
	$sql = "select * from customers where batch='".$batch."'";
	$result = $conn->query($sql);
	$count = 0;
	$data="";
	if ($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()) {
  			$count++;
  			$fullname=$row['f_name']." ".$row['l_name'];
    		$data=$data."<div class='team-block style-two col-lg-3 col-md-4 col-sm-6 col-xs-12'>
            	<div class='inner-box'>
                	<div class='image'>
                    	<img src='images/resource/team-12.jpg' alt='' />
                        <div class='content'>
                        	<h3>".$fullname."</h3>
                            <div class='designation'>Current Boarder</div>
                        </div>
                        <div class='overlay-box'>
                        	<div class='overlay-content'>
                        		<h3><a href='volunter-single.html'>".$fullname."</a></h3>
                                <div class='overlay-designation'>Current Boarder</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>";
  		}
	}
   	echo $data;
?>