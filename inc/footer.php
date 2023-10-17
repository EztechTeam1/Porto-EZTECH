
<!-- Footer -->
<footer class="page-footer">
  <div class="gradient"></div>
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5 col-md-12 col-12 content">

          <!-- Content -->
          <a href="index.php"><img src="images/footer.jpeg" class="w-25"  alt="footer-logo"></a>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five.</p>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-2 col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="mt-3 mb-3">Site Navigation</h5>

          <ul class="list-unstyled">
            <li>
              <a href="index.php">go to home</a>
            </li>
            <li>
              <a href="services.php">services</a>
            </li>
            <li>
              <a href="portfolio.php">portfolio</a>
            </li>
            <li>
              <a href="blog.php">read blog</a>
            </li>
            <li>
              <a href="contact.php">contact us</a>
            </li>
            <li>
              <a href="#!">product support</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-2 col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="mt-3 mb-3">information</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">user login</a>
            </li>
            <li>
              <a href="#!">creat new account</a>
            </li>
            <li>
              <a href="#!">checkout</a>
            </li>
            <li>
              <a href="#!">my cart</a>
            </li>
            <li>
              <a href="#!">other information</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-2 col-md-4 mx-auto">


          <!-- Links -->
          <h5 class="mt-3 mb-3">policies & Info</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Terms Conditions</a>
            </li>
            <li>
              <a href="#!">website polocy</a>
            </li>
            <li>
              <a href="#!">Policy for Sellers  </a>
            </li>
            <li>
              <a href="#!">Policy for Buyers</a>
            </li>
            <li>
              <a href="#!">Shipping & Refund </a>
            </li>
            <li>
              <a href="#!">Wholesale Policy</a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    <br/>
    <!-- Copyright -->
    <div class="footer-copyright text-center">
       <p>© 2017, All Rights Reserved. <a href="https://www.template.net/editable/websites/html5">KLAZA</a> , Designed by <a href="https://www.template.net/editable/websites/html5">KLAZA</a></p>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
<script>
$('.carousel').carousel({
  interval: 2000
})
    
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
     <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
  </body>
</html>