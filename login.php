<?php include("include/header.php"); ?>
    <div class="login_body">
 <div class="lcontainer">
  <form class="lform" method="POST" action="#">
    <h2>Welcome Back</h2>
    <div class="linputBox">
      <input type="email" name="InputEmailID" id="InputEmailID" autocomplete="off" required>
      <label>Username</label>
    </div>
    
    <div class="linputBox">
      <input type="password" name="InputPassword" id="InputPassword"  autocomplete="off" required>
      <label>Password</label>
    </div>

    <div class="linputBox">
      <input type="submit" name="UserSignIn" id="UserSignIn" value="Sign In">
    </div>
  </form>
 </div>
</div>
  
<?php include("include/footer.php"); ?>