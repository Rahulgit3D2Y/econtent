<?php

include("../include/config.php");


?>
<?php
if (isset($_GET['key']))
 {
    $noticeapi=mysqli_query($con,"SELECT * FROM `session` ");
            $resultnoticeapicount=mysqli_num_rows($noticeapi);
           
            header('Content-type:application/json');
            if($resultnoticeapicount>0)
            {
                while($resultnoticeapi=mysqli_fetch_assoc($noticeapi))
                {
                    $noticedatafetch[]=$resultnoticeapi;
                }
                echo json_encode(['status'=>'true','data'=>$noticedatafetch,'result'=>'found']);
                //echo json_encode(['status'=>'true','data'=>'No Data Found','result'=>'not found']);  
            }
            else
            {
            echo json_encode(['status'=>'true','data'=>'No Data Found','result'=>'not found']);    
            }
}

else
{
echo json_encode(['status'=>'false','data'=>'Please Provide Api Key']); 
}




?>