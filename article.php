<?php
  include("include/header.php");
?>
<?php 

$messageidfetech = $_GET['mid'];
$subcontentfetech = $_GET['subcontent_id'];
$messageidfetech2 = $_GET['content_id'];

$messageid = base64_decode(urldecode($messageidfetech));
$subcontent_id = base64_decode(urldecode($subcontentfetech));
$content_id = base64_decode(urldecode($messageidfetech2));

// echo $messageidfetech . "<br>";
// echo $subcontentfetech . "<br>";
// echo $messageidfetech2 . "<br>";
// echo $messageid . "<br>";
// echo $subcontent_id . "<br>";
// echo $content_id;

  $viearticlequery=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE `econtent_message_id`='$messageid' and `econtent_message_status` = \"Active\"");
$viearticlequeryresult=mysqli_fetch_assoc($viearticlequery)or die("<script language='javascript'>alert('Error Please Contact To Administrator');window.location='index.php'</script>");
$contentType= $viearticlequeryresult['econtent_message_contenttype'];
?>
<?php
$Shareurlink=$viearticlequeryresult['econtent_message_link'];
$sharelink = "http://localhost/econtent/link.php/$Shareurlink";
?>

     <?php if($contentType=="Non Premium") { ?>
  <main class="article_main">
      <div class="article-container">
            <div >
              <h1 class="heading"><?php echo $viearticlequeryresult['econtent_message_tittle']; ?> </h1>
             
            </div>
        <div class="row ">
            <hr>

          <!-- leftside -->
          <div class="col-md-8">
              <img src="admin/upload/econtent_photo/<?php echo $viearticlequeryresult['econtent_message_image'];?>" class="img-fluid" alt="">
              <section class="text">
                <?php echo $viearticlequeryresult['econtent_message_content']; ?>
              </section>
              <div class="d-flex justify-content-between container">
                    <a href="article.html"class="btn btn-lg btn-outline-dark"  target="_blank">Previous</a>
                    <a onclick="copyLink('<?php echo $sharelink; ?>')" href="#"><i class="fas fa-share-square fa-lg"></i></a>
                    <a href="article.html"class="btn btn-lg btn-outline-dark"  target="_blank">Next </a>
                </div>
                <br>
          </div>
          <!-- rightside -->
          <div class="col-md-4" style="max-height: fit-content; overflow-y:auto;">
            <div class="position-sticky" style="top: 2rem;">
              <div class="p-4 mb-3 bg-dark rounded">
                <h4 class="fst-italic text-light fw-bold">Related Topics</h4>
              </div>
              <div class="row">
              <div class="col-sm-12">
                <div class="article-card card mb-4 box-shadow text-dark">
                  <div>
                    <img src="assests/images/11-slow-website-hero-1200x450.jpg" class="img-fluid card-bg-img rounded" alt="">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate" style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                    <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12">
                <div class="article-card card mb-4 box-shadow text-dark">
                  <div>
                    <img src="https://source.unsplash.com/1200x450/?luffy" class="img-fluid card-bg-img rounded" alt="">
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur </p>
                    <div class="btn-group d-block">
                      <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                    </div>
                  </div>
                </div>   
              </div>
              <div class="col-sm-12">
                <div class="article-card card mb-4 box-shadow text-dark">
                  <div>
                    <img src="https://source.unsplash.com/1200x450/?medicine" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur </p>
                    <div class="btn-group d-block">
                      <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                    </div>
                  </div>
                </div>
              </div>  
              <div class="col-sm-12">
                <div class="article-card card mb-4 box-shadow text-dark">
                  <div>
                    <img src="https://source.unsplash.com/1200x450/?science" class="img-fluid  card-bg-img rounded" alt="" >
                  </div>
                  <div class="card-img-overlay">
                    <h3 class="card-title">Lorem, ipsum dolor.</h3>
                    <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                    <div class="btn-group d-block">
                      <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                    </div>
                  </div>
                </div>   
              </div>

            </div>
            </div>
          </div>
        </div>

      </div>     

  </main>
       <?php } elseif($contentType=="Premium")  { ?>
  <main class="article_main">
        <div class="article-container">
            <div>
              <h1 class="heading"><?php echo $viearticlequeryresult['econtent_message_tittle'];;?></h1>
            </div>
            <div class="row ">
              <hr>

              <!-- leftside -->
              <div class="col-md-8">
                    <img src="admin/upload/econtent_photo/<?php echo $viearticlequeryresult['econtent_message_image'];?>" class="img-fluid" alt="">
                      <section class="text">
                        <?php echo $viearticlequeryresult['econtent_message_display_content']; ?>
                        <section  class="blur-text unselectable" id="blur-text">
                          <?php echo $viearticlequeryresult['econtent_message_content']; ?>
                        </section>
                       </section>
                    <div class="d-flex justify-content-between container">
                    <a href="article.html"class="btn btn-lg btn-outline-dark"  target="_blank">Previous</a>
                    <a onclick="copyLink('<?php echo $sharelink; ?>')" href="#"><i class="fas fa-share-square fa-lg"></i></a>
                    <a href="article.html"class="btn btn-lg btn-outline-dark"  target="_blank">Next </a>
                  </div>
                  <br>
              </div>
              <!-- rightside -->
              <div class="col-md-4" style="max-height: fit-content; overflow-y:auto;">
                  <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-dark rounded">
                      <h4 class="fst-italic text-light fw-bold">Related Topics</h4>
                    </div>
                    <div class="row">
                    <div class="col-sm-12">
                      <div class="article-card card mb-4 box-shadow text-dark">
                        <div>
                          <img src="assests/images/11-slow-website-hero-1200x450.jpg" class="img-fluid card-bg-img rounded" alt="">
                        </div>
                        <div class="card-body">
                          <h3 class="card-title">Lorem, ipsum dolor.</h3>
                          <p class="card-text d-inline-block text-truncate" style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet      consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum      dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing     elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                          <div class="btn-group d-block">
                          <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                          </div>
                        </div>
                      </div>   
                    </div>
                    <div class="col-sm-12">
                      <div class="article-card card mb-4 box-shadow text-dark">
                          <div>
                            <img src="https://source.unsplash.com/1200x450/?luffy" class="img-fluid card-bg-img rounded" alt="">
                          </div>
                          <div class="card-img-overlay">
                            <h3 class="card-title">Lorem, ipsum dolor.</h3>
                            <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet         consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur </p>
                            <div class="btn-group d-block">
                              <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                            </div>
                          </div>
                        </div>   
                    </div>
                    <div class="col-sm-12">
                        <div class="article-card card mb-4 box-shadow text-dark">
                          <div>
                            <img src="https://source.unsplash.com/1200x450/?medicine" class="img-fluid  card-bg-img rounded" alt="" >
                          </div>
                          <div class="card-img-overlay">
                            <h3 class="card-title">Lorem, ipsum dolor.</h3>
                            <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet         consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur </p>
                            <div class="btn-group d-block">
                              <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                            </div>
                          </div>
                        </div>
                    </div>  
                    <div class="col-sm-12">
                      <div class="article-card card mb-4 box-shadow text-dark">
                        <div>
                           <img src="https://source.unsplash.com/1200x450/?science" class="img-fluid  card-bg-img rounded" alt="" >
                        </div>
                        <div class="card-img-overlay">
                           <h3 class="card-title">Lorem, ipsum dolor.</h3>
                           <p class="card-text d-inline-block text-truncate"style="width:300px;">Lorem itur adipisicing elit. rem ipsum dolor sit amet        consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum      dolor sit amet consectetur adipisicin itur adipisicing elit. rem ipsum dolor sit amet consectetur adipisicin itur adipisicing       elit. rem ipsum dolor sit amet consectetur adipisicing elit. Nisi!</p>
                          <div class="btn-group d-block">
                             <a href="article.html"class="btn btn-sm btn-outline-dark"  target="_blank">Read More</a>
                          </div>
                        </div>
                      </div>   
                    </div>

                  </div>
              </div>
            </div>
        </div>   
            
        </div>
  </main>
 <?php } ?>      
           
  </section>




<script>
function copyLink(link) {
  navigator.clipboard.writeText(link);
  alert("Link copied to clipboard!");
}
</script>
    


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