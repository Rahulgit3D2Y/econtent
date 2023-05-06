<?php include("include/header.php"); ?>
    <style>
        body
    {
      background: #474bff;
background: -webkit-linear-gradient(44deg, #474bff 0%, #bc48ff 100%);
background: linear-gradient(44deg, #474bff 0%, #bc48ff 100%);

    }
    </style>
     <?php 
     $date=date("Y-m-d");
     $time=date("h:i:s a");
     $datetime=date("Y-m-d h:i:s a");
     $IP = $_SERVER['REMOTE_ADDR'];
     $hashpassword="e5f05b51093025cab4896db92e5b49f3933f59f9643d1ab204ab17234749224360d30632ee2545793c074ea84ca75f913f874a48be30690fcce703bd7a3497c0";
    if(isset($registration))
    {
 $UserEMailCheck=mysqli_query($con,"SELECT * FROM `userregistration` WHERE  `userregistration_email` = '$InputUserEmail'");
if (mysqli_num_rows($UserEMailCheck)>0)
{
    echo "<script language='javascript'>alert('Email ID allready in Registrated');window.location='login.php'</script>";
exit();
}   
$passwordhash= hash('whirlpool', $InputUserPassword);
 mysqli_query($con,"INSERT INTO `userregistration`(`userregistration_name`, `userregistration_email`, `userregistration_password`, `userregistration_hashpassword`, `userregistration_country`, `userregistration_number`, `userregistration_status`, `userregistration_createddate`, `userregistration_createdtime`, `userregistration_datetime`, `userregistration_ipaddress`) VALUES ('$InputUserName','$InputUserEmail','$passwordhash','$hashpassword','$InputUserCountry','$InputUserNumber','Active','$date','$time','$datetime','$IP')") or die(mysqli_error());
   echo "<script language='javascript'>alert('$InputUserEmail Registrated Successfully');window.location='$Currentwebsiteurl'</script>";

    }

    ?>
    <div  class="sign_body">
  <div class="sign_container">
    <form class="form" method="POST" action="#">
      <h2>Sign up</h2>
      <div class="sinputBox">
        <input type="text" name="InputUserName" id="InputUserName" required="">
        <label>Name</label>
      </div>
      <div class="sinputBox">
        <input type="email" name="InputUserEmail" id="InputUserEmail" required="">
        <label>Email</label>
      </div>
      
      <div class="sinputBox">
        <input type="password" name="InputUserPassword" autocomplete="off"  id="InputUserPassword" required="">
        <label>Password</label>
      </div>
      <div class="sinputBox">
        <input type="text" name="InputUserCountry"  id="InputUserCountry" required="">
        <label>Country</label>
      </div>
      <div class="sinputBox">
        <input type="tel" name="InputUserNumber"  id="InputUserNumber" required="">
        <label>Phone Number</label>
      </div>
      
      <div class="sinputBox">
        <input type="submit" name="registration" id="registration" value="Sign In">
      </div>
    </form>
  </div></div>
</body>

</html>

