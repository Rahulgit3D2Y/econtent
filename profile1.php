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
<div  class="profile_body">
  <div class="profile_container">
    <header class="profile_header">
      <img src="assests/images/image-victor.jpg" class="profile_img" alt="">
    </header>
    <main class="profile_main ">
      
      <h3><i class="fa-solid fa-user-pen"></i><?php echo $userdetailsearchqueryresult['userregistration_name']; ?><button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
      
        </button></h3>
         <i class="fa-solid fa-globe"></i>
      <p><?php echo $userdetailsearchqueryresult['userregistration_country']; ?><button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
     
        </button></p>
    </main>
    <footer class="profile_footer">
      <i class="fa-solid fa-envelope"></i>
      <div><p><?php echo $userdetailsearchqueryresult['userregistration_email']; ?></p>
      <button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
            
        </button>
      
        
      </div>
      <div>
        <i class="fa-solid fa-phone"></i>
        <p><?php echo $userdetailsearchqueryresult['userregistration_number']; ?></p>
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#phone-modal">
            
        </button>
       </div>
    </footer>
  </div>


<!-- Model -->
<!--all Modal -->
<div class="modal fade" id="phone-modal" tabindex="-1" role="dialog" aria-labelledby="phone-modal-title" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <h5 class="modal-title" id="phone-modal-title">Update Phone Number</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="new-phone-number">New Phone Number:</label>
            <input type="tel" class="form-control" id="new-phone-number" placeholder="Enter new phone number">
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