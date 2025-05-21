<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->
<html lang="en">
  
<!-- Mirrored from www.codingnepalweb.com/demos/otp-verification-form-html-css-javascript/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 09 Jul 2023 03:18:01 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta name="description" content=" In this blog you will learn to How to create OTP Verification Form in HTML CSS & JavaScript. You will learn how to structure the form and input fields using HTML, how to style the form and input fields using CSS, and how to handle the form submission and verify the OTP using JavaScript." />
    <meta
      name="keywords"
      content=" 
Form Design,HTML and CSS,HTML CSS JavaScript,JavaScript Project,one time password form,otp input verification form,otp verification form,"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OTP Verification Form JavaScript | CodingNepal</title>
    <link rel="stylesheet" href="otp.css" />
    <!-- Boxicons CSS -->
    <link href="../../../unpkg.com/boxicons%402.1.4/css/boxicons.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="styles.css" />
    <script src="../custom-scripts.js" defer></script>
    <style>
      .download-btn-cn a {
        background: none;
        color: #fff;
        border: 2px solid #fff;
      }
      .download-btn-cn a:hover {
        color: #4070f4;
        background: #fff;
      }
    </style>
  </head>
  <body>
    <!-- <div class="download-btn-cn">
      <a href="../../../external.html?link=https://www.codingnepalweb.com/otp-verification-form-html-css-javascript/" target="_blank">Download Code Files</a>
    </div> -->

    <div class="container">
      <header>
        <i class="bx bxs-check-shield"></i>
      </header>
      <h4>Enter OTP Code</h4>
      <form action="#">
        <div class="input-field">
          <input type="number" />
          <input type="number" disabled />
          <input type="number" disabled />
          <input type="number" disabled />
        </div>
        <button>Verify OTP</button>
      </form>
    </div>

    <script src="script.js"></script>
  </body>
</html>
