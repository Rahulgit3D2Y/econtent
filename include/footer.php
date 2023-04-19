 <!-- Scripts -->
      <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
      <!--   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
  <!-- jQuery library -->
<script src="node_modules/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

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
  
      


<?php if (!isset($_SESSION['userloginvalue']) && ($contentType=="Premium")) { ?>
       <script>  $(document).ready(function(){   $('#userloginpopupmodel').modal('show');  }); </script> 
     <?php } ?>
</body>
</html>