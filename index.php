<?php include("include/header.php"); ?>
    <main class="container-fluid p-3">
        <div class="row">
            <!-- <div class="col-md-8"> -->
              <!-- <div> 
                <img src="assests/images/image-web-3-desktop.jpg"class="img-fluid hero-img" alt="" >
              </div> -->
              <!-- <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100 " src="./assests/images/image-web-3-desktop.jpg" alt="First slide" ">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Lorem, ipsum dolor.</h5>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100 " src="https://source.unsplash.com/1000x1000?" alt="Second slide"">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Lorem, ipsum dolor.</h5>
                      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus!</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img class="img-fluid hero-img" src="./assests/images/image-gaming-growth.jpg" alt="Third slide"">
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
                <!-- <div class="row py-3">
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

  // $count = 0;
  //  $NewArticledview=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_status`='Active'  ORDER BY `econtent_message_id` DESC");
  // while($NewArticledviewresult=mysqli_fetch_assoc($NewArticledview))
  //   {
  //       $count+=1;
  //       $messageid=$NewArticledviewresult['econtent_message_id'];
  //       $messagecontentid=$NewArticledviewresult['econtent_message_content_id'];
  //       $messagesubcontentid=$NewArticledviewresult['econtent_message_subcontent_id'];
  //       $messagecontentTitle=$NewArticledviewresult['econtent_message_tittle'];
      ?>
      
                    <div class="article">
                      <a href="article.php?title=<?php// echo $messagecontentTitle; ?>&mid=<?php //echo urlencode(base64_encode($messageid)); ?>" style=" color: white; text-decoration:none ">
                         <h4 class="text-light"><?php //echo $NewArticledviewresult['econtent_message_tittle']." (".$NewArticledviewresult['econtent_message_contenttype'].")"; ?></h4>
                      <p class="text-secondary"><?php// echo substr($NewArticledviewresult['econtent_message_content'],0,62);  ?></p></a> 
                    </div>
                    <hr class="text-secondary">
                   <?php// } ?>
                    


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
        </div> -->

       
       <!-- Article-cards -->       
<section class="container" id="article-section">  
            <div class="album p-5 bg-light">
          
            <div class="row">
 <?php

  $count = 0;
   $NewArticledview=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_status`='Active'  ORDER BY `econtent_message_id` DESC");
  while($NewArticledviewresult=mysqli_fetch_assoc($NewArticledview))
    {
        $count+=1;
        $messageid=$NewArticledviewresult['econtent_message_id'];
        $messagecontentid=$NewArticledviewresult['econtent_message_content_id'];
        $messagesubcontentid=$NewArticledviewresult['econtent_message_subcontent_id'];
        $messagecontentTitle=$NewArticledviewresult['econtent_message_tittle'];
      ?>
              <div class="col-sm-12 col-md-6 col-xl-3">
                <div class="article-card card mb-4 box-shadow text-dark" style="overflow:hidden; height:400px">
                  <div>
                    <img src="assests/images/11-slow-website-hero-1200x450.jpg" class="img-fluid card-bg-img rounded" alt="">
                  </div>
                  <?php if($NewArticledviewresult['econtent_message_contenttype']=="Premium") { ?>  
                  <div class="card-img-overlay">
                    <i class="fa-solid fa-star" style="color: #ffec1f; float:right"><p class="text-light p-2 d-inline">aaaa</p></i>
                </div>
            <?php } ?>
                  <div class="card-body">
                  <h3 class="card-title"><?php echo $NewArticledviewresult['econtent_message_tittle']; ?></h3>
                    <p class="card-text d-inline-block text-truncate" style="width:300px;"><?php echo substr($NewArticledviewresult['econtent_message_content'],0,62);  ?></p>
                    <div class="btn-group d-block" style="position: absolute; bottom: 0;">
                        <a href="article.php?title=<?php echo $messagecontentTitle; ?>&mid=<?php echo urlencode(base64_encode($messageid)); ?>">Read More</a>
                    </div>
                    
                  </div>
                </div>   
              </div>
        <?php } ?>
              
          
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

</section>
    
<?php include("include/footer.php"); ?>
