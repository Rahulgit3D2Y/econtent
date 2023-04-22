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

<div class="container my-5">
      <div class="row justify-content-center" >
        <div class="col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex flex-column align-items-center text-center">
                <img src="assests/images/image-victor.jpg" alt="Profile Picture" class="rounded-circle" width="150">
                <div class="mt-3">
                  <h3><?php echo $userdetailsearchqueryresult['userregistration_name']; ?></h3>
                  
                </div>
              </div>
            </div>
            <div class="container d-flex justify-content-between align-items-center">
                <h3>Personal Information</h3>
                <button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
                    <i class="fas fa-pencil-alt"></i><span class="text-primary">Edit</span>
                </button>

            </div>
            
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div >
                    <p class="mb-0">Country</p>
                    
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1"><?php echo $userdetailsearchqueryresult['userregistration_country']; ?></h5>
                    
                  </div>
                </div>
              </li>

              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div >
                    <p class="mb-0">Name</p>
                    
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1"><?php echo $userdetailsearchqueryresult['userregistration_name']; ?></h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1"><?php echo $userdetailsearchqueryresult['userregistration_email']; ?></h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0">Phone Number</p>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1"><?php echo $userdetailsearchqueryresult['userregistration_number']; ?></h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0">Gender</p>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1"><?php echo $userdetailsearchqueryresult['userregistration_number']; ?></h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0">Date of Birth</p>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1"><?php echo $userdetailsearchqueryresult['userregistration_number']; ?></h5>
                    
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
        <div class="modal-header">
            <h5 class="modal-title" id="phone-modal-title">PERSONAL INFORMATION</h5>
        </div>
        <form class="container p-4">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <img src="assests/images/image-victor.jpg" alt="Profile Picture" class="img-thumbnail">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="profile-pic">Profile Picture:</label>
                        <input type="file" class="form-control" id="profile-pic" accept="image/*">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="fname">Name:</label>
                        <input type="text" class="form-control" value="<?php echo $userdetailsearchqueryresult['userregistration_name']; ?>" id="fname" placeholder="Enter name">
                    </div>
                </div>
                
            </div>
        
        
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" value="<?php echo $userdetailsearchqueryresult['userregistration_email']; ?>" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="tel" id="phone" class="form-control" value="<?php echo $userdetailsearchqueryresult['userregistration_number']; ?>" name="phone" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="male" >
                        <label class="form-check-label" for="male">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                        <label class="form-check-label" for="female">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="other" name="gender" value="other">
                        <label class="form-check-label" for="other">Other</label>
                    </div>
            </div>
            <div class="form-group">
              <label for="dob">Date of Birth:</label>
              <input type="date" class="form-control" id="dob">
            </div>
            <div class="d-flex container p-3 justify-content-end">
                <button type="button" class="btn btn-secondary mx-3" data-dismiss="modal">Close</button>
                <input type="submit"  class="btn btn-primary mx-3" name="userprofileupdate" id="userprofileupdate" value="Update">

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