<?php
  include("include/header.php");
?>
<?php 

$messageidfetech = $_GET['message_id'];
$subcontentfetech = $_GET['subcontent_id'];
$messageidfetech2 = $_GET['content_id'];

$messageid = base64_decode(urldecode($messageidfetech));
$subcontent_id = base64_decode(urldecode($subcontentfetech));
$content_id = base64_decode(urldecode($messageidfetech2));

echo $messageidfetech . "<br>";
echo $subcontentfetech . "<br>";
echo $messageidfetech2 . "<br>";
echo $messageid . "<br>";
echo $subcontent_id . "<br>";
echo $content_id;

  $viearticlequery=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_id`='$messageid' and `econtent_message_status` = \"Active\"");
$viearticlequeryresult=mysqli_fetch_assoc($viearticlequery)or die("<script language='javascript'>alert('Error Please Contact To Administrator');window.location='index.php'</script>");
$contentType= $viearticlequeryresult['econtent_message_contenttype'];
?>

     <?php if($contentType=="Non Premium") { ?>
    <main class="article_main">
        <div class="article-container">
            <div class="heading-container">
              <h1 class="heading"><?php echo $viearticlequeryresult['econtent_message_tittle']; ?></h1>
             <hr> 
            </div>
            <div class="pretext">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos pariatur nihil nemo cumque suscipit impedit ratione vero! Reprehenderit, officia
            </div>    
            <img src="./assests/images/11-slow-website-hero-1200x450.jpg" class="img-fluid" alt="">
            <div class="text">
              <?php echo $viearticlequeryresult['econtent_message_content']; ?>
            </div>
          
          </div>
            </main>
       <?php } elseif($contentType=="Premium")  { ?>
<main class="article_main">
        <div class="article-container">
            <div class="heading-container">
              <h1 class="heading"><?php echo $viearticlequeryresult['econtent_message_tittle'];;?></h1>
             <hr> 
            </div>
               
            <img src="assests/images/11-slow-website-hero-1200x450.jpg" class="img-fluid" alt="">
            <div class="text" style="float:left">
            
              <?php echo $viearticlequeryresult['econtent_message_display_content']; ?>
              <div style="display:inline-block;" class="blur-text unselectable" id="blur-text">
             <?php echo $viearticlequeryresult['econtent_message_content']; ?>
            </div> 
            </div>
           
            <div class="btn bt-lg btn-outline-primary" id="blur-btn">Sign up</div>
          </div>
            </main>
 <?php } ?>      
             
  </section>

    


<!-- fILE UPLOAD MODULE -->

<div class="modal fade" id="userloginpopupmodel" tabindex="-1"  data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="sessionmodalLabel" aria-hidden="true">

  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      
      
        <h5 class="modal-title" id="myModalLabel">Login Page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      
        <form action="" method="POST" name="Login" onSubmit="return check();" enctype="multipart/form-data">
              <div class="mb-3">
            <label for="DiscountRemark" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="InputEmailID" name="InputEmailID" required>
          </div>
           <div class="mb-3">
            <label for="DiscountRemark" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="InputPassword" name="InputPassword" autocomplete="off"  required>
          </div>
           <div class="mt-4 mb-0" align="center">
            <input class="btn btn-success" type="submit"  name="UserSignIn" id="UserSignIn" value="Sign In" >
          </div>
          <div class="mt-4 mb-0" align="center">
            <a href="signup.php">Create a New Account</a>
          </div>
      </form>




      </div>
      <div class="modal-footer">
        <!--<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>-->
      </div>
    </div>
  </div>
</div> 

   <?php include("include/footer.php"); ?>