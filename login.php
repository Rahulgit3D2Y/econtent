<?php include("include/header.php"); ?>
<div class="login_body">
 <div class="lcontainer">
  <h2 class="login_heading">Login</h2>
  <form class="lform" method="POST" action="#">
    <div class="linputBox">
      <label>Username</label>
      <div class="d-flex justify-content-center align-items-center">
      <i class="fa-solid fa-user"></i>
      <input class="border-bottom" type="email" name="InputEmailID" id="InputEmailID" autocomplete="off" placeholder="Type your username" required>
      </div>
     
      
    </div>
    
    <div class="linputBox">
    <label>Password</label>
    <div class="d-flex justify-content-center align-items-center"><i class="fa-solid fa-lock"></i>
    <input class="border-bottom" type="password" name="InputPassword" id="InputPassword"  autocomplete="off"placeholder="Type your password" required>
    </div>
      
    </div>

    <div class="linputBox">
      <input type="submit" name="UserSignIn" id="UserSignIn" value="LOGIN">
    </div>
  </form>
 </div>
</div>
  
<?php include("include/footer.php"); ?>