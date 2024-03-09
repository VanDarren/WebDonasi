


<main>
<div class="container">

<section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">

  <div  class="navbar-brand ms-4 ms-lg-0">
  <nav class="wow fadeIn" data-wow-delay="0.1s">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

      <div class="pt-4 pb-2"> 
          <a href="#" class="logo d-flex align-items-center w-auto">
      
            <span class="card-title text-center pb-0 fs-4">DonasiBersama</span>
          </a>
        </div><!-- End Logo -->

        
        <div class="card mb-3">

          <div class="card-body">

            <div class="pt-4 pb-2">
              <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
              <p class="text-center small">Enter your username & password</p>
            </div>
            <form class="row g-3 needs-validation" novalidate action="<?=base_url('home/aksi_login')?>" method="POST" id="loginForm">
   
   <div class="col-12">
       <label for="yourUsername" class="form-label">Username</label>
       <div class="input-group has-validation">
           <span class="input-group-text" id="inputGroupPrepend">@</span>
           <input type="text" name="username" class="form-control" id="yourUsername" required>
           <div class="invalid-feedback">Please enter your username.</div>
       </div>
   </div>

   <div class="col-12">
       <label for="yourPassword" class="form-label">Password</label>
       <input type="password" name="password" class="form-control" id="yourPassword" required>
       <div class="invalid-feedback">Please enter your password!</div>
   </div>

   <!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <div class="g-recaptcha" data-sitekey="6Ldg1ogpAAAAADsTfnzr72LwsVVaWctZGVIWF9eF"></div>
   <script>
        function validateForm() {
            var response = grecaptcha.getResponse();
            if (response.length === 0) {
                alert('Please complete the CAPTCHA.');
                return false;
            }
            return true;
        }
    </script> -->
    
   <div class="col-12">
       <button class="btn btn-primary w-100" type="submit">Login</button>
   </div>

   <div class="col-12">
       <p class="small mb-0">Don't have account? 
           <a href="<?= base_url('home/register')?>">Create an account</a></p>
   </div>
</form>

</div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://www.instagram.com/vdarrenn/">Van Darren</a>
              </div>


 <!-- Back to Top -->



<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url("lib/wow/wow.min.js")?>"></script>
<script src="<?=base_url("lib/easing/easing.min.js")?>"></script>
<script src="<?=base_url("lib/waypoints/waypoints.min.js")?>"></script>
<script src="<?=base_url("lib/owlcarousel/owl.carousel.min.js")?>"></script>
<script src="<?=base_url("lib/parallax/parallax.min.js")?>"></script>

<!-- Template Javascript -->
<script src="<?=base_url("js/main.js")?>"></script>
</body>

</html>