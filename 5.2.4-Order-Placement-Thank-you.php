<!DOCTYPE html>
<html lang="en">
  <?php
  session_start();

  if (file_exists("install.php")) {
    exit(
      "Create an admin account and remove the install.php file before using this website"
    );
  }
  ?>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Thank you!</title>
    <meta name="description" content="Thank you" />
    <link rel="stylesheet" href="CSS/main.css" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <script
      src="https://kit.fontawesome.com/f43db195aa.js"
      crossorigin="anonymous"
    ></script>
    <style>
      html {
        background-image: linear-gradient(
            to bottom,
            #a1c4fd,
            rgba(194, 233, 251, 0.5) 48%,
            rgba(255, 255, 255, 0)
          );
          background-repeat: no-repeat;
        }
      }
    </style>
  </head>

  <body>
    <header id="nav_header"></header>

    <div class="body_spacing">
      <div class="circle">
        <span class="check_icon">
          <i class="fas fa-check"></i>
        </span>
      </div>

      <div>
        <h1 class="center_elements">Order placed successfully!</h1>
        <h5 class="center_elements">Keep an eye out for your packages!</h5>
        <div class="center_elements spacing_80">
          <a href="index.php"
            ><button type="button">Back to shopping</button></a
          >
        </div>
      </div>
    </div>
    <footer id="mall_footer"></footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
  </body>
</html>
