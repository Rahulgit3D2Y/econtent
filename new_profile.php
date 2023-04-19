<?php
  include("include/header.php");
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
                  <h3>Username</h3>
                  <p>Country</p>
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
                    <p class="mb-0">Name</p>
                    
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1">52345</h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1">52345</h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <p class="mb-0">Phone Number</p>
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1">52345</h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div >
                    <p class="mb-0">Gender</p>
                    
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1">52345</h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div >
                    <p class="mb-0">Date Of Birth</p>
                    
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1">52345</h5>
                    
                  </div>
                </div>
              </li>
              <li class="list-group-item">
                <div class="d-flex justify-content-between align-items-center">
                  <div >
                    <p class="mb-0">Something</p>
                    
                  </div>
                  <div class="d-flex justify-content-center align-items-center">
                    <h5 class="text-secondary text-center m-1">52345</h5>
                    
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="fname">First Name:</label>
                        <input type="text" class="form-control" id="fname" placeholder="Enter name">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lname">Last Name:</label>
                        <input type="text" class="form-control" id="lname" placeholder="Enter name">
                    </div>   
                </div>
            </div>
        
        
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{10}" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label><br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" id="male" name="gender" value="male" checked>
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
                <button type="submit" class="btn btn-primary mx-3">Submit</button>
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