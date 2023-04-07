<?php
  session_start();
    include("admin/include/config.php");
     error_reporting(1);
?>
<?php 

 extract($_REQUEST);
 $messageidfetech=$_GET['message_id'];


foreach($_GET as $message_id=>$messageidfetech)
  $messageid = $_GET[$message_id] = base64_decode(urldecode($messageidfetech));
      
$messageid;

  $viearticlequery=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_id`='$messageid' and `econtent_message_status` = \"Active\"");
$viearticlequeryresult=mysqli_fetch_assoc($viearticlequery)or die("<script language='javascript'>alert('Error Please Contact To Administrator');window.location='index.php'</script>");
$contentType= $viearticlequeryresult['econtent_message_contenttype'];
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <!-- style -->
    <link rel="stylesheet" href="css/article.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">G.</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex mt-3 mt-lg-0" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
     <?php if($contentType=="Non Premiun") { ?>
    <main>
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
       <?php } elseif($contentType=="Premiun")  { ?>
<main>
        <div class="article-container">
            <div class="heading-container">
              <h1 class="heading"><?php echo $viearticlequeryresult['econtent_message_tittle'];;?></h1>
             <hr> 
            </div>
            <div class="pretext">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos pariatur nihil nemo cumque suscipit impedit ratione vero! Reprehenderit, officia
            </div>    
            <img src="assests/images/11-slow-website-hero-1200x450.jpg" class="img-fluid" alt="">
            <div class="text">
              <?php   $strlength= strlen($viearticlequeryresult['econtent_message_content']);
               $percentagetodisplay=  round($strlength*25/100);

               ?>
              <?php echo substr($viearticlequeryresult['econtent_message_content'], 0, $percentagetodisplay); ?>
             <span class="blur-text unselectable" id="blur-text"><?php echo substr($viearticlequeryresult['econtent_message_content'], $percentagetodisplay, $strlength); ?></span> 
            </div>
           
            <div class="btn bt-lg btn-outline-primary" id="blur-btn">Sign up</div>
          </div>
            </main>
 <?php } ?>      
             
  </section>

    <!-- Scripts -->
      <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>

<!-- footer -->
<script>
             $(document).ready(function() {
                $("#blur-btn").click(function() {
                    $("#blur-text").css({
                      "filter": "blur(0px)",
                      "-webkit-filter": "blur(0px)", /* Safari blur */
                      "-moz-filter": "blur(0px)", /* Firefox blur */
                      "-o-filter": "blur(0px)", /* Opera blur */
                      "-ms-filter": "blur(0px)" /* IE blur */
                    });
                  // make unclickable links clickable again
                  $("#blur-text a.unclickable").removeClass("unclickable");
                  });
                });

            </script>

<div class="container-fluid p-5">
    <hr class="my-5">
    <footer class="py-5">
      <div class="row">
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-6 col-md-2 mb-3">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
          </ul>
        </div>
  
        <div class="col-md-5 offset-md-1 mb-3">
          <form>
            <h5>Subscribe to our newsletter</h5>
            <p>Monthly digest of what's new and exciting from us.</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
  
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
        <p>&copy; 2022 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><i class="fa-brands fa-facebook"></i></a></li>
        </ul>
      </div>
    </footer>
  </div>
      

<!-- fILE UPLOAD MODULE -->

<div class="modal fade" id="userfileuploadmodalpopup" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true"  data-bs-backdrop="static" data-bs-keyboard="false" >
    <script src="js/fileupload.js"></script>
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      
      
        <h5 class="modal-title" id="myModalLabel">Login Page</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      
        <form action="" method="POST" name="photoupload" onSubmit="return check();" enctype="multipart/form-data">
              <div class="mb-3">
            <label for="DiscountRemark" class="col-form-label">Login</label>
            <input type="text" class="form-control" id="inputStudentPhoto" name="inputStudentPhoto"  onchange="ValidateinputStudentPhotoInput(this);" accept=".jpg,.jpeg" required>
          </div>
           <div class="mb-3">
            <label for="DiscountRemark" class="col-form-label">Password</label>
            <input type="password" class="form-control" id="inputStudentPhoto" name="inputStudentPhoto"  onchange="ValidateinputStudentPhotoInput(this);" accept=".jpg,.jpeg" required>
          </div>
           <div class="mt-4 mb-0" align="center">
            <input class="btn btn-success" type="submit" name="photoupload" id="photoupload" value="Login" >
          </div>
      </form>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 

       <script>  $(document).ready(function(){   $('#userfileuploadmodalpopup').modal('show');  }); </script> 
</body>
</html>