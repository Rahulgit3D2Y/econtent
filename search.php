<?php include("include/header.php"); ?>
    <main class="container-fluid p-3">
        <div class="row">
           

 <!-- Article-cards -->       
        <section class="container" id="article-section">  
            <div class="album p-5 bg-light">
          
            <div class="row">
 <?php
 $qerysearch = $_GET['q'];

  $count = 0;
   $NewArticledview=mysqli_query($con,"SELECT * FROM `econtent_message` WHERE  (`econtent_message_tittle` LIKE '%$qerysearch%' OR `econtent_message_content` LIKE '%$qerysearch%' OR `econtent_message_contenttype`LIKE '%$qerysearch%' OR `econtent_message_display_content`LIKE '%$qerysearch%') AND `econtent_message_status`='Active'  ORDER BY `econtent_message_id` DESC");
   
  while($NewArticledviewresult=mysqli_fetch_assoc($NewArticledview))
    {
        $count+=1;
        $messageid=$NewArticledviewresult['econtent_message_id'];
        $messagecontentid=$NewArticledviewresult['econtent_message_content_id'];
        $messagesubcontentid=$NewArticledviewresult['econtent_message_subcontent_id'];
        $messagecontentTitle=$NewArticledviewresult['econtent_message_tittle'];

        
      ?>

              <div class="col-sm-12 col-md-6 col-xl-3">
                <div class="article-card card mb-4 box-shadow text-dark" style="overflow:hidden; height:450px">
                  <div>
                    <img src="admin/upload/econtent_photo/<?php echo $NewArticledviewresult['econtent_message_image'];?>" class="img-fluid card-bg-img rounded" alt="">
                  </div>
                  <?php if($NewArticledviewresult['econtent_message_contenttype']=="Premium") { ?>  
                  <div class="card-img-overlay">
                    <i class="fa-solid fa-star" style="color: #ffec1f; float:right"><p class="text-light p-2 d-inline">Premium</p></i>
                </div>
            <?php } ?>
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $NewArticledviewresult['econtent_message_tittle']; ?></h5>
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
