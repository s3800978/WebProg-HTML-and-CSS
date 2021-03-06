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
    <title>Mall Fees</title>
    <meta name="description" content="Mall Fees" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script
      src="https://kit.fontawesome.com/f43db195aa.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header id="nav_header"></header>
    <div class="body_spacing">
      <div class="HeaderH1_Left_With_Spacing">
        <h1>Fees</h1>
      </div>

      <div class="flexbox_container">
        <div class="col">
          <h4>For shoppers</h4>
          <table>
            <thead>
              <tr>
                <th>Type</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tr>
              <td><p class="BodyBlack17">Premium member fee</p></td>
              <td><p class="HeaderH5">60.000 VND / month</p></td>
            </tr>
            <tr>
              <td><p class="BodyBlack17">Express shipping fee</p></td>
              <td><p class="HeaderH5">80.000 VND / product</p></td>
            </tr>
            <tr>
              <td><p class="BodyBlack17">Oversee shipping fee</p></td>
              <td><p class="HeaderH5">Check with local import tax</p></td>
            </tr>
            <tr>
              <td><p class="BodyBlack17">Return fee</p></td>
              <td><p class="HeaderH5">20.000 VND / product</p></td>
            </tr>
          </table>
        </div>

        <div class="col">
          <h4>For store owners</h4>
          <table>
            <thead>
              <tr>
                <th>Type</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tr>
              <td><p class="BodyBlack17">Renting fee</p></td>
              <td><p class="HeaderH5">500.000 VND / month</p></td>
            </tr>
            <tr>
              <td><p class="BodyBlack17">Commission</p></td>
              <td><p class="HeaderH5">350.000 VND / year</p></td>
            </tr>
            <tr>
              <td><p class="BodyBlack17">Front page fee</p></td>
              <td><p class="HeaderH5">1.000.000 VND / day</p></td>
            </tr>
          </table>
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
