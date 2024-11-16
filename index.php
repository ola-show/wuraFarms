<?php ?>
<!DOCTYPE html>
<html lang="en-US">
  <!-- Mirrored from html.ditsolution.net/buddy/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 14 Nov 2024 23:23:39 GMT -->
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Business buddy Creative HTML5 Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Favicon -->
    <link
      rel="icon"
      type="image/png"
      sizes="56x56"
      href="assets/images/fav-icon/icon.png"
    />
    <!-- bootstrap CSS -->
    <link
      rel="stylesheet"
      href="assets/css/bootstrap.min.css"
      type="text/css"
      media="all"
    />
    <!-- carousel CSS -->
    <link
      rel="stylesheet"
      href="assets/css/owl.carousel.min.css"
      type="text/css"
      media="all"
    />
    <!-- animate CSS -->
    <link
      rel="stylesheet"
      href="assets/css/animate.css"
      type="text/css"
      media="all"
    />
    <!-- animated-text CSS -->
    <link
      rel="stylesheet"
      href="assets/css/animated-text.css"
      type="text/css"
      media="all"
    />
    <!-- font-awesome CSS -->
    <link
      rel="stylesheet"
      href="assets/css/all.min.css"
      type="text/css"
      media="all"
    />
    <!-- theme-default CSS -->
    <link
      rel="stylesheet"
      href="assets/css/theme-default.css"
      type="text/css"
      media="all"
    />
    <!-- meanmenu CSS -->
    <link
      rel="stylesheet"
      href="assets/css/meanmenu.min.css"
      type="text/css"
      media="all"
    />
    <!-- transitions CSS -->
    <link
      rel="stylesheet"
      href="assets/css/owl.transitions.css"
      type="text/css"
      media="all"
    />
    <!-- venobox CSS -->
    <link
      rel="stylesheet"
      href="venobox/venobox.css"
      type="text/css"
      media="all"
    />
    <!-- flaticon -->
    <link
      rel="stylesheet"
      href="assets/css/bootstrap-icons.css"
      type="text/css"
      media="all"
    />
    <!-- bootstrap icons -->
    <link
      rel="stylesheet"
      href="assets/css/flaticon.css"
      type="text/css"
      media="all"
    />
    <!-- Main Style CSS -->
    <link
      rel="stylesheet"
      href="assets/css/style.css"
      type="text/css"
      media="all"
    />
    <!-- responsive CSS -->
    <link
      rel="stylesheet"
      href="assets/css/responsive.css"
      type="text/css"
      media="all"
    />
    <!-- Coustom Animation CSS -->
    <link
      rel="stylesheet"
      href="assets/css/coustom-animation.css"
      type="text/css"
      media="all"
    />
    <!-- odometer CSS -->
    <link
      rel="stylesheet"
      href="assets/css/odometer-theme-default.css"
      type="text/css"
      media="all"
    />
    <link
      rel="stylesheet"
      href="assets/css/scroll-up.css"
      type="text/css"
      media="all"
    />
    <!-- modernizr js -->
    <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- SweetAlert -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <style>
      p.con {
        font-size: 24px;
        line-height: 1.5;
      }
      .form-div {
        position: relative !important;
        background-color: red;
      }
      .form-img {
        position: absolute;
        width: 70px;
        height: 60px;
        right: 0;
        border: solid 1px #b0712f;
      }
      .price-box {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
      }
      .price-box h4 {
        margin: 0;
        font-weight: 600;
        font-size: 18px;
        min-width: 85px; /* Ensures consistent spacing */
      }
      .price {
        font-size: 18px;
        font-weight: bold;
        color: #b0712f;
        margin: 0;
        line-height: 1; /* Aligns text vertically */
        padding-top: 2px; /* Fine-tune vertical alignment */
      }

      /* Style number input */
      input[type="number"] {
        -moz-appearance: textfield; /* Remove default arrows in Firefox */
      }

      /* Container styling */
      .form-box {
        position: relative;
      }

      /* Input field styling */
      .form-box input[type="number"] {
        padding-right: 45px; /* Make room for the custom spinner */
      }

      /* Hover effect */
      input[type="number"]:hover::-webkit-outer-spin-button,
      input[type="number"]:hover::-webkit-inner-spin-button {
        opacity: 0.8;
      }

      /* Active/Focus state */
      input[type="number"]:focus::-webkit-outer-spin-button,
      input[type="number"]:focus::-webkit-inner-spin-button {
        opacity: 1;
        background-color: #f5f5f5;
      }

      .close-modal {
        font-size: 35px;
        font-weight: bold;
        color: #b0712f;
        cursor: pointer;
        position: absolute;
        right: 15px;
        top: 5px;
        transition: color 0.3s ease;
        line-height: 1;
      }
      
      .close-modal:hover {
        color: #333;
      }
      
      .modal-header {
        position: relative;
        padding: 1.5rem;
        border: none;
      }

      .modal-title {
        width: 100%;
        text-align: center;
      }

      .confirmation-text {
        color: #b0712f; /* Added brown color for the confirmation text */
      }

      /* Custom color for spinner */
      .spinner-border.text-brown {
        color: #b0712f;
      }
      
      #loadingModal .modal-content {
        background-color: rgba(255, 255, 255, 0.95);
      }
      
      #loadingModal h5 {
        color: #b0712f;
        margin-top: 10px;
      }

      .modal .close-modal {
        font-size: 35px;
        font-weight: bold;
        color: #b0712f;
        cursor: pointer;
        position: absolute;
        right: 15px;
        top: 5px;
        transition: color 0.3s ease;
        line-height: 1;
      }
      
      .modal .close-modal:hover {
        color: #333;
      }
      
      .modal-header {
        position: relative;
        padding: 1.5rem;
        border: none;
      }

      .modal-title {
        width: 100%;
        text-align: center;
      }

      .confirmation-text {
        color: #b0712f;
      }

      .modal .bi-exclamation-circle {
        color: #b0712f;
      }
    </style>
  </head>

  <body>
    <!-- Loader -->

    <div class="loader-wrapper">
      <span class="loader"></span>
      <div class="loder-section left-section"></div>
      <div class="loder-section right-section"></div>
    </div>

    <!--==================================================-->
    <!-- Start buddy Breadcumb Area -->
    <!--==================================================-->
    <div class="breadcumb-area d-flex align-items-center">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-12">
            <div class="breadcumb-content text-center">
              <div class="breadcumb-title">
                <h4>Holiday Order</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End buddy Breadcumb Area -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start buddy Contact Area Inner Page -->
    <!--==================================================-->
    <section class="contact_area inner_section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="contact_content">
              <h1>WURA FARMS</h1>
              <h4>🎄 Limited Time Offer! 🎄</h4>
              <br />
              <p class="con">
                Order today and enjoy a special holiday discount! Avoid
                inflation now and lock in today's price – no price hikes, no
                surprises. Get your organic chicken delivered fresh and ready to
                cook, just in time for your Christmas and New Year celebrations!
              </p>
            </div>
            <div class="contact_infoss">
              <p>Call Us</p>
              <h3>080 433 9224</h3>
              <div class="contact_social">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <!-- contact form box -->
            <div class="contact-form-box style_two">
              <form action="" method="POST" id="submit-to-google-sheet">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-box">
                      <input 
                        type="text" 
                        name="name" 
                        placeholder="Your Name" 
                        pattern="[A-Za-z\s]+" 
                        onkeypress="return onlyLetters(event)"
                        required 
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-box">
                      <input 
                        type="tel" 
                        name="phone" 
                        placeholder="Phone Number" 
                        pattern="[0-9]*" 
                        inputmode="numeric" 
                        onkeypress="return onlyNumbers(event)"
                        required 
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-box">
                      <input 
                        type="email" 
                        name="email" 
                        placeholder="Your Email" 
                        pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-box" class="form-div">
                      <input
                        type="number"
                        name="life"
                        min="1"
                        oninput="validity.valid||(value='1')"
                        placeholder="Organic Life Chicken (₦12000)"
                      />
                      <img
                        src="assets/images/home_3/chicken2.png"
                        alt="Organic Life Chicken"
                        class="form-img"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-box" class="form-div">
                      <input
                        type="number"
                        name="packaged"
                        min="1"
                        oninput="validity.valid||(value='1')"
                        placeholder="Organic Packaged Chicken (₦12000)"
                      />
                      <img
                        src="assets/images/home_3/chicken8.png"
                        alt="Packaged Organic Chicken"
                        class="form-img"
                      />
                    </div>
                  </div>
                  <div class="col-lg-12 col-md-12">
                    <div class="form-box message">
                      <textarea
                        name="message"
                        id="message"
                        cols="30"
                        rows="10"
                        placeholder="Order Note (Optional)"
                      ></textarea>
                    </div>
                  </div>
                  <div class="contact-form">
                    <div class="price-box">
                      <h4>Sub Total:</h4>
                      <p class="price">₦0</p>
                    </div>

                    <button type="submit">Place Order</button>
                  </div>
                </div>
              </form>
              <div id="status"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Contact Area  Inner Page -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start Buddy  Video section -->
    <!--==================================================-->
    <div class="video-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <!-- Video Area Start -->
            <div class="cursor video" id="video_cursor">play</div>
            <div class="video__area">
              <div class="video__content"></div>
            </div>
            <!-- Video Area End -->
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- End Buddy Video section -->
    <!--==================================================-->

    <!--==================================================-->
    <!-- Start buddy Footer Area -->
    <!--==================================================-->
    <section class="footer_area style_three">
      <div class="container">
        <div class="footer-bottom-content">
          <div class="footer-bottom-content-copy">
            <p>Copyright © 2024 Wura Farms</p>
          </div>
        </div>
      </div>
    </section>
    <!--==================================================-->
    <!-- End buddy Footer Area-->
    <!--==================================================-->

    <!-- jquery js -->
    <script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script src="assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script src="assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script src="assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- venobox js -->
    <script src="venobox/venobox.js"></script>
    <!--  animated-text js -->
    <script src="assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script src="venobox/venobox.min.js"></script>
    <!-- isotope js -->
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery meanmenu js -->
    <script src="assets/js/jquery.meanmenu.js"></script>
    <!-- jquery scrollup js -->
    <script src="assets/js/jquery.scrollUp.js"></script>
    <!-- theme js -->
    <script src="assets/js/theme.js"></script>
    <!-- barfiller -->
    <script src="assets/js/jquery.barfiller.js"></script>
  </body>

  <script>
    // Get the input fields and price display element
    const lifeChickenInput = document.querySelector('input[name="life"]');
    const packagedChickenInput = document.querySelector('input[name="packaged"]');
    const priceElement = document.querySelector(".price");

    // Function to calculate and display total
    function calculateTotal() {
      // Get values from inputs (default to 0 if empty or negative)
      let lifeQuantity = parseInt(lifeChickenInput.value) || 0;
      let packagedQuantity = parseInt(packagedChickenInput.value) || 0;
      
      // Ensure quantities are not negative
      lifeQuantity = Math.max(0, lifeQuantity);
      packagedQuantity = Math.max(0, packagedQuantity);

      // Calculate total (₦12000 per chicken)
      const total = (lifeQuantity + packagedQuantity) * 12000;

      // Display formatted total with Naira symbol and thousands separator
      priceElement.textContent = `₦${total.toLocaleString('en-NG')}`;

      // For debugging - remove after confirming it works
      console.log('Life Quantity:', lifeQuantity);
      console.log('Packaged Quantity:', packagedQuantity);
      console.log('Total:', total);
    }

    // Add event listeners to both input fields
    lifeChickenInput.addEventListener("input", calculateTotal);
    packagedChickenInput.addEventListener("input", calculateTotal);

    // Calculate initial total when page loads
    document.addEventListener('DOMContentLoaded', calculateTotal);

    // Update your form submission JavaScript
    const scriptURL = 'https://script.google.com/macros/s/AKfycby87uT0-NQhzxvmdycMXAskA8FaHNq6ZCmmXBKcUh34G81gt6iHztmss_SZaGCgHtghdg/exec';
    const form = document.forms["submit-to-google-sheet"];

    form.addEventListener("submit", (e) => {
      e.preventDefault();

      // Check if at least one quantity is entered
      const lifeQuantity = parseInt(lifeChickenInput.value) || 0;
      const packagedQuantity = parseInt(packagedChickenInput.value) || 0;

      if (lifeQuantity === 0 && packagedQuantity === 0) {
        const warningModal = new bootstrap.Modal(document.getElementById('warningModal'));
        warningModal.show();
        return;
      }

      // Show loading modal
      const loadingModal = new bootstrap.Modal(document.getElementById('loadingModal'));
      loadingModal.show();

      // Prepare form data
      var formData = new FormData(form);
      // Add total price and timestamp
      formData.append('total', document.querySelector('.price').textContent);
      formData.append('timestamp', new Date().toISOString());

      fetch(scriptURL, { method: "POST", body: formData })
        .then((response) => {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          loadingModal.hide();
          
          // Show success modal
          const thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
          thankYouModal.show();
          
          // Reset form and total
          form.reset();
          calculateTotal();
        })
        .catch((error) => {
          console.error('Error:', error);
          loadingModal.hide();
          const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
          errorModal.show();
        });
    });

    // Function to only allow numbers
    function onlyNumbers(event) {
      // Get the key code
      var keyCode = event.which ? event.which : event.keyCode;
      
      // Allow only numbers (0-9)
      if (keyCode < 48 || keyCode > 57) {
        event.preventDefault();
        return false;
      }
      return true;
    }

    // Get the phone input element
    const phoneInput = document.querySelector('input[name="phone"]');

    // Add input event listener to remove any non-numeric characters
    phoneInput.addEventListener('input', function(e) {
      // Remove any non-numeric characters
      this.value = this.value.replace(/[^0-9]/g, '');
      
      // Limit to reasonable phone number length (e.g., 11 digits for Nigerian numbers)
      if (this.value.length > 11) {
        this.value = this.value.slice(0, 11);
      }
    });

    // Function to only allow letters and spaces
    function onlyLetters(event) {
      // Get the key code
      var keyCode = event.which ? event.which : event.keyCode;
      
      // Allow letters, spaces, and basic punctuation
      if ((keyCode < 65 || keyCode > 90) && // uppercase letters
          (keyCode < 97 || keyCode > 122) && // lowercase letters
          keyCode !== 32 && // space
          keyCode !== 8 && // backspace
          keyCode !== 9) { // tab
        event.preventDefault();
        return false;
      }
      return true;
    }

    // Get the name input element
    const nameInput = document.querySelector('input[name="name"]');

    // Add input event listener to remove any non-letter characters
    nameInput.addEventListener('input', function(e) {
      // Remove any characters that aren't letters or spaces
      this.value = this.value.replace(/[^A-Za-z\s]/g, '');
      
      // Remove multiple spaces
      this.value = this.value.replace(/\s+/g, ' ');
      
      // Remove spaces from the beginning
      this.value = this.value.replace(/^\s+/, '');
    });

    // Capitalize first letter of each word on blur
    nameInput.addEventListener('blur', function(e) {
      if (this.value) {
        this.value = this.value.toLowerCase().split(' ')
          .map(word => word.charAt(0).toUpperCase() + word.slice(1))
          .join(' ');
      }
    });

    // Add this with your other input validations
    const emailInput = document.querySelector('input[name="email"]');

    // Email validation function
    function isValidEmail(email) {
      const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      return emailRegex.test(email);
    }

    // Add email validation on input
    emailInput.addEventListener('input', function(e) {
      if (this.value && !isValidEmail(this.value)) {
        this.setCustomValidity('Please enter a valid email address');
      } else {
        this.setCustomValidity('');
      }
    });

    // Clean up email input
    emailInput.addEventListener('blur', function(e) {
      this.value = this.value.trim().toLowerCase();
    });
  </script>

  <!-- Updated modal HTML -->
  <div class="modal fade" id="thankYouModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Thank You!</h5>
          <span class="close-modal" data-bs-dismiss="modal">&times;</span>
        </div>
        <div class="modal-body text-center">
          <i class="bi bi-check-circle-fill text-success" style="font-size: 3rem;"></i>
          <h4 class="mt-3">Order Submitted Successfully!</h4>
          <p class="confirmation-text">We will contact you shortly to confirm your order.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Add this HTML right after your form -->
  <div id="loadingModal" class="modal fade" tabindex="-1" aria-hidden="true" data-bs-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body text-center p-4">
          <div class="spinner-border text-brown mb-3" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <h5>Submitting...</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Add this HTML for the warning modal -->
  <div class="modal fade" id="warningModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title">Quantity Required</h5>
          <span class="close-modal" data-bs-dismiss="modal">&times;</span>
        </div>
        <div class="modal-body text-center">
          <i class="bi bi-exclamation-circle" style="font-size: 3rem; color: #b0712f;"></i>
          <h4 class="mt-3">Please Select Quantity</h4>
          <p class="confirmation-text">Enter quantity for at least one type of chicken.</p>
        </div>
      </div>
    </div>
  </div>
</html>
<?php ?>
