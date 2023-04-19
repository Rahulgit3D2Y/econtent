<?php
  include("include/header.php");
?>
<style>
  .body
  {background: #474bff;
background: -webkit-radial-gradient(circle, #474bff 0%, #bc48ff 100%);
background: radial-gradient(circle, #474bff 0%, #bc48ff 100%);
    height: 100vh;
    min-width: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  form {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-contnet:center;
  margin: 0 auto;
  width: 80%;
  max-width: 500px;
  padding: 20px;
  background-color: #f7f7f7;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
  color: #333;
}

input[type="password"] {
  display: block;
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  font-size: 16px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[type="submit"] {
  padding: 10px 20px;
  background-color: #4CAF50;
  color: #fff;
  font-size: 16px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}

</style>
<div class="body">
  <form>
  <label for="old-password">Old Password:</label>
  <input type="password" id="old-password" name="old-password" required>
  
  <label for="new-password">New Password:</label>
  <input type="password" id="new-password" name="new-password" required>
  
  <label for="confirm-password">Confirm New Password:</label>
  <input type="password" id="confirm-password" name="confirm-password" required>
  
  <button type="submit">Change Password</button>
</form>
</div>

</body>
</html>