<?php
  session_start();
    include("admin/include/config.php");
     error_reporting(1);
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
    <!-- bootstrap icon -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">

    <!-- style -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" aria-label="Offcanvas navbar large">
        <div class="container-fluid">
          <a class="navbar-brand fw-bold" href="#">G.</a>
          
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
            <div class="offcanvas-header">
            <i class="bi bi-person-circle"></i>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="btn btn-primary m-2 nav-link" href="signin.php" target="_blank" >Sign In</a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary m-2 nav-link" href="login.php" target="_blank">Login</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-person-circle"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end ">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    </header>
    <main class="container-fluid p-3">
        <div class="row">
            <div class="col-md-8">
              <div> 
                <img src="assests/images/image-web-3-desktop.jpg"class="img-fluid hero-img" alt="" >
              </div>
              <!-- <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 " src="./assests/images/image-web-3-desktop.jpg" alt="First slide" style="height: 400px;">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Lorem, ipsum dolor.</h5>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 " src="./assests/images/image-retro-pcs.jpg" alt="Second slide"style="height: 400px;">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Lorem, ipsum dolor.</h5>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./assests/images/image-gaming-growth.jpg" alt="Third slide"style="height: 400px;">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Lorem, ipsum dolor.</h5>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus!</p>
                    </div>
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div> -->
                <div class="row py-3">
                    <div class="col-xl-6 p-3 my-3">
                        <div class="display-4 fw-bold w-100">THE Lorem ipsum dolor sit.</div>
                    </div>
                    <div class="col-xl-6 p-3  my-3">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, repellendus nulla a est aliquid ullam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit eveniet repellat porro accusamus? Consequuntur, aperiam?</p>
                        <button class="btn btn-lg btn-outline-success"data-toggle="modal" data-target="#myModal">Read More</button>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
              <div class="row">
                <div class="bg-dark py-3  news-box">
                    <h2 class="text-warning">New</h2>
                      <?php

  $count = 0;
   $NewArticledview=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_status`='Active'  ORDER BY `econtent_message_id` DESC");
  while($NewArticledviewresult=mysqli_fetch_assoc($NewArticledview))
    {
        $count+=1;
        $messageid=$NewArticledviewresult['econtent_message_id'];
        $messagecontentid=$NewArticledviewresult['econtent_message_content_id'];
        $messagesubcontentid=$NewArticledviewresult['econtent_message_subcontent_id'];
      ?>
      
                    <div class="article">
                      <a href="article.php?content_id=<?php echo urlencode(base64_encode($messagecontentid)); ?>&subcontent_id=<?php echo urlencode(base64_encode($messagesubcontentid)); ?>&message_id=<?php echo urlencode(base64_encode($messageid)); ?>" style=" color: white; text-decoration:none ">
                         <h4 class="text-light"><?php echo $NewArticledviewresult['econtent_message_tittle']." (".$NewArticledviewresult['econtent_message_contenttype'].")"; ?></h4>
                      <p class="text-secondary"><?php echo substr($NewArticledviewresult['econtent_message_content'],0,62);  ?></p></a> 
                    </div>
                    <hr class="text-secondary">
                   <?php } ?>
                    


                </div>
              </div>
                
            </div>  
        </div>      
        <div class="row box ">
            <div class="col-md-4 aaaa">
                <div>
                    <img src="./assests/images/image-retro-pcs.jpg" class="img-fluid " alt="">
                </div>
                <div>
                    <h3>01</h3>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                </div>
            </div>
            <div class="col-md-4 aaaa ">
                <div>
                    <img src="./assests/images/image-gaming-growth.jpg" class="img-fluid " alt="">
                </div>
                <div>
                    <h3>02</h3>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                </div>
            </div>
            <div class="col-md-4 aaaa">
                <div>
                    <img src="./assests/images/image-top-laptops.jpg" class="img-fluid " alt="">
                </div>
                <div>
                    <h3>03</h3>
                    <h3>Lorem, ipsum dolor.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                </div>
            </div>
        </div>

 <!-- Article-cards -->       
        <section class="container" id="article-section">  
            <div class="album p-5 bg-light">
          
            <div class="row">
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-dark">
                  <div>
                    <img src="assests/images/11-slow-website-hero-1200x450.jpg" class="img-fluid card-bg-img rounded" alt="">
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate" style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?construction" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>
              </div>  
              
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?science" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?computer" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?web" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?forest" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?teacher" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="article-card card mb-4 box-shadow text-white">
                  <div>
                    <img src="https://source.unsplash.com/1500x700/?study" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <button type="button" class="btn btn-sm btn-outline-light">View</button>
                      <button type="button" class="btn btn-sm btn-outline-light">Edit</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
            </div>
        </section>
        
        
    </main>



    
  <!-- modals -->
<section>
    <!-- modal small -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Modal Title</h4>
          </div>
          <div class="modal-body">
            <p>Modal content goes here.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- modal full -->
<div class="modal fade" id="exampleModalLong" tabindex="-1"   role="dialog"aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="img">
          <img src="./assests/images/image-retro-pcs.jpg" alt="">
        </div>
        <div class="text">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sunt ab voluptatem animi in suscipit voluptatibus cupiditate tempore, <span class="blur-text" id="blur-text">sint numquam doloremque quasi? Iure vero a sunt, ipsum deleniti ut deserunt repellat voluptatibus eum aliquam excepturi officiis dolorum! Beatae animi, optio fugit doloribus hic eaque quasi, corporis modi et distinctio voluptatibus dolore corrupti blanditiis perferendis, quis numquam sit. Assumenda libero nesciunt quia atque quasi dolor quaerat dolorum est! Magni molestiae quibusdamres minima voluptate? Esse consectetur est dicta odio aspernatur neque? Fugit voluptatem distinctio saepe eos, excepturi voluptatibus? Nobis maxime blanditiis, rem temporibus similique sequi natus totam ab ut corrupti a? Suscipit quaerat dolores rem, rerum saepe culpa officiis inventore, beatae minus eos labore optio unde aspernatur?</span>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary " id="blur-btn">Signup</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- jquery -->
<!-- <script>
  $(document).ready(function() {
    $("#blur-btn").click(function() {
      $("#blur-text").css({
        "filter": "blur(0px)",
        "-webkit-filter": "blur(0px)", /* Safari blur */
        "-moz-filter": "blur(0px)", /* Firefox blur */
        "-o-filter": "blur(0px)", /* Opera blur */
        "-ms-filter": "blur(0px)" /* IE blur */
      });
    });
  });
  
  </script> -->
</section>
    

    <!-- Scripts -->
      <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->
      
        


<!-- footer -->

<footer>
  <div class="container-fluid p-5" id="footer-section">
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
</footer>

</body>
</html>