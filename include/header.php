<?php
  session_start();
    include("admin/include/config.php");
     error_reporting(1);

     extract($_POST);
extract($_GET);
extract($_REQUEST);
date_default_timezone_set('Asia/Kolkata');
$Currentwebsiteurl=basename($_SERVER['REQUEST_URI']); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="icon" type="image/x-icon" href="./assests/images/geu_logo.jpg"> -->
    <title>Article</title>
    <!-- jquery -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <!-- bootstrap -->
    <!-- bootstrap icon -->
<link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="index.php">Econtent</a>
          
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
            <i class="bi bi-person-circle"></i>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
<?php if (!isset($_SESSION['userloginvalue'])) { ?>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="btn btn-primary m-2 nav-link" href="signup.php"  >Sign Up</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary m-2 nav-link" href="login.php">Login</a>
                </li>
              </ul>
              </div>
  <?php  } ?>
<?php if($_SESSION['userloginvalue']=="True") { ?>
 <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user-circle fa-2x"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end ">
                    <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                    <li><a class="dropdown-item" href="changepassword.php">Change password</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="signout.php">Signout</a></li>
                  </ul>
                </li>
              </ul>
              </div>
<?php 

$loginsession = $_SESSION["userlogin"];
$queryfromsession=mysqli_query($con,"SELECT * FROM `userregistration` WHERE `userregistration_email` ='$loginsession'  and `userregistration_status` = 'Active'");
$queryfromsessionres=mysqli_fetch_assoc($queryfromsession);
//$login_user_type = $res['type'];
$userregistrationid = $queryfromsessionres['userregistration_id'];
//$login_user_status= $res['status'];

?>


  <?php  } ?>




          </div>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </header>
<?php 
 if(isset($UserSignIn)) {
  $loginid=mysqli_real_escape_string($con,$_POST['InputEmailID']);
$pass1=mysqli_real_escape_string($con,$_POST['InputPassword']);
//$pass2=SHA1($pass1);
$pass2=hash('whirlpool', $pass1);
$IP = $_SERVER['REMOTE_ADDR'];
  
$utype="user";
$datetime=date("Y-m-d h:i:sa");

$logincheckuserid=mysqli_query($con,"SELECT * FROM `userregistration` WHERE `userregistration_email`='$loginid'");
$logincheckuseridresultrs2=mysqli_fetch_assoc($logincheckuserid)or die("<script language='javascript'>alert('Email Id is incorrect');window.location='$Currentwebsiteurl'</script>");


  $rs=mysqli_query($con,"SELECT * FROM `userregistration` WHERE `userregistration_email`='$loginid' AND `userregistration_password`='$pass2' AND `userregistration_status` = 'Active' OR `userregistration_email`='$loginid' AND `userregistration_hashpassword`='$pass2'  AND `userregistration_status` = 'Active'");
     if(mysqli_num_rows($rs)<1)
  {
     
 echo ("<script language='javascript'>alert('Invalid Username or Password');window.location='$Currentwebsiteurl'</script>"); 

  }

  elseif($loginid == $pass1)
  {
    mysqli_query($con,"INSERT INTO `logindetail` (`logintype`, `loginid`, `password`, `loginattempt`, `ipaddress`, `session_key`, `login_datetime`) values ('$utype','$loginid','$pass1','Success','$IP','".session_id()."','$datetime')") or die(mysqli_error());
    
   echo "<script>window.location='changepassword.php'</script>";
           
       $_SESSION['userlogin']=$loginid;
       $_SESSION['userpass']=$pass1;
       $_SESSION['userdatetime']=$datetime;
       $_SESSION['userloginvalue']="True";
  }
else
{
     mysqli_query($con,"INSERT INTO `logindetail` (`logintype`, `loginid`, `password`, `loginattempt`, `ipaddress`, `session_key`, `login_datetime`) values ('$utype','$loginid','$pass1','Success','$IP','".session_id()."','$datetime')") or die(mysqli_error());
echo "<script>window.location='index.php'</script>";
       $_SESSION['userlogin']=$loginid;
       $_SESSION['userpass']=$pass1;
       $_SESSION['userdatetime']=$datetime;
       $_SESSION['userloginvalue']="True";
}





 }


?>
   