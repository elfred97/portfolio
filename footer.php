
  <footer id="footer" class="footer position-relative">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">Elfred Tapar</strong> <span>All Rights Reserved</span></p>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    $(document).ready(function(){
      $('#result').hide();
      $.validator.setDefaults({
          submitHandler: function() {
              var nameValue = $('#name').val();
              var emailValue = $('#email').val();
              var messageValue = $('#message').val();
              console.log(nameValue, emailValue, messageValue);
              $.ajax({
                  type: "GET",
                  url: "contactSubmission.php",
                  data: {
                      name: $('#name').val(),
                      email: $('#email').val(),
                      message: $('#messageValue').val()
                  }
              }).done(function(){
                  $('#contactForm').find("input[type=text], input[type=email], textarea").val("");
                  $('#result').slideDown();
              });
          }
      });
      $("#contactForm").validate();
    });
  </script>
</body>

</html>