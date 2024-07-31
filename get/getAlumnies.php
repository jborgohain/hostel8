<?php 
error_reporting(0);
require_once("../config/config.php");
$batch=$_POST['batch'];
$sql = "select * from alumnae where abatch='".$batch."'";
$result = $conn->query($sql);
$count = 0;
$data="";
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $count++;
        $fullname=$row['af_name']." ".$row['al_name'];
        $data=$data."<div class='team-block-two col-md-3 col-sm-6 col-xs-12'>
                    <div class='inner-box'>
                        <div class='image'>
                            <img src='images/resource/team-5.jpg' alt='' />
                            <div class='overlay-box'>
                                <div class='content'>
                                    <h3>".$fullname."</h3>
                                    <div class='designation'>Alumnae</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>";
    }
}
echo $data;
?>