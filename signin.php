<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/SignIn_form.css">
    <title>Sign Up</title>
    <style>
        body
    {
      background-image: url(assests/images/form_pattern.png);
      background-size: cover;
      background-position: center;

    }
    </style>
  </head>
  <body>
  <div class="container">
    <form class="form">
      <h2>Sign up</h2>
      <div class="inputBox">
        <input type="text" name="username" required="">
        <label>Username</label>
      </div>
      <div class="inputBox">
        <input type="email" name="email" required="">
        <label>Email</label>
      </div>
      
      <div class="inputBox">
        <input type="password" name="password" required="">
        <label>Password</label>
      </div>
      <div class="inputBox">
        <input type="text" name="country" required="">
        <label>Country</label>
      </div>
      <div class="inputBox">
        <input type="tel" name="phone" required="">
        <label>Phone Number</label>
      </div>
      <div class="remember">
        <input type="checkbox" name="remember" id="check">
        <label for="check">Remember me</label>
      </div>
      <div class="inputBox">
        <input type="submit" value="Sign In">
      </div>
    </form>
  </div>
</body>

</html>

