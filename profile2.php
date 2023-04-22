<?php
  include("include/header.php");

extract($_POST);


if (!isset($_SESSION['userlogin']))
{
   
    echo "<script>window.location='index.php'</script>";
    exit();
}

$userdetailsearchquery=mysqli_query($con,"SELECT * FROM `userregistration` WHERE `userregistration_id` ='$userregistrationid'  and `userregistration_status` = 'Active'");
$userdetailsearchqueryresult=mysqli_fetch_assoc($userdetailsearchquery);
?>
<style>
    .profile_body
    {
        background-image: url(assests/images/bg-pattern-bottom.svg),url(assests/images/bg-pattern-top.svg);
    }
    .profile_header
    {
        background-image: url(assests/images/bg-pattern-card.svg);
    }
    
</style>
<!-- <div  class="profile_body">
  <div class="profile_container">
    <header class="profile_header">
      <img src="assests/images/image-victor.jpg" class="profile_img" alt="">
    </header>
    <main class="profile_main ">
      <h3>Username<button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
      <i class="fa-solid fa-user-pen"></i>
        </button></h3>
      <p>Country<button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
      <i class="fa-solid fa-globe"></i>
        </button></p>
    </main>
    <footer class="profile_footer">
      <div><p>Password</p>
      <a href="changepass.php"><i class="fa-solid fa-pencil"></i></a>
 
        
      </div>
      <div><p>Email</p>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
            <i class="fa-solid fa-envelope"></i>
        </button>
      
        
      </div>
      <div>
        <p>Phone Number</p>
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
            <i class="fa-solid fa-phone"></i>
        </button>
       </div>
    </footer>
</div> -->
<div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="assests/images/image-victor.jpg" alt="Profile Picture" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h3><?php echo $userdetailsearchqueryresult['userregistration_name']; ?><button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
                      <i class="fas fa-user-edit"></i>
                  </button></h3>
                  <p><button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
                      <i class="fas fa-globe"></i>
                  </button><?php echo $userdetailsearchqueryresult['userregistration_country']; ?></p>
                </div>
              </div>
            </div>
            <ul class="list-group list-group-flush">
              <!-- <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0">Password</p>
                  </div>
                  <div>
                    <a href="changepassword.php" class="text-secondary">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                  </div>
                </div>
              </li> -->
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="fas fa-envelope"></i>
                  <div>
                    <p class="mb-0"><?php echo $userdetailsearchqueryresult['userregistration_email']; ?></p>
                  </div>
                  <div>
                    <a href="#" class="text-secondary" data-toggle="modal" data-target="#phone-modal">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <i class="fas fa-phone-alt"></i>
                  <div>
                    <p class="mb-0"><?php echo $userdetailsearchqueryresult['userregistration_number']; ?></p>
                  </div>
                  <div>
                    <a href="#" class="text-secondary" data-toggle="modal" data-target="#phone-modal">
                      <i class="fas fa-pencil-alt"></i>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<!-- Model -->
<!--all Modal -->
<div class="modal fade" id="phone-modal" tabindex="-1" role="dialog" aria-labelledby="phone-modal-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="phone-modal-title">Update Info</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="new-phone-number">New INFO:</label>
            <input type="tel" class="form-control" id="new-phone-number" placeholder="Enter new Detail">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>
    </div>
  </div>
</div>

</div><script src="https://kit.fontawesome.com/edae2cf7d5.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
  include("include/footer.php");
?>