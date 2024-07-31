<?php
	//error_reporting(0);
	require_once("../config/config.php");
	$sql = "select distinct(abatch) as batch from alumnae";
	$result = $conn->query($sql);
	$count = 0;
	$data="";
	if ($result->num_rows > 0) {
  		while($row = $result->fetch_assoc()) {
  			$count++;
    		$data=$data."<div class='services-block col-md-4 col-sm-6 col-xs-12' onclick='location.href=currentDetails.html;' style='cursor: hand;'>
                <div class='inner-box'>
                    <div class='upper-box'>
                        <div class='icon-box'><i class='fa fa-graduation-cap'></i><h3><a href='alumnaeDetails.html?batch=".$row['batch']."'>Btc. ".$row['batch']."</a></h3></div>
                    </div>
                    <!-- <div class='text'>There are many variations of passage of Lorem Ipsum available, but the majority have suffered ... </div> -->
                </div>
            </div>";
  		}
	}
   	echo $data;
?>