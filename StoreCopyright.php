<!DOCTYPE html>
<?php
session_start();
if (file_exists("install.php")) {
    exit(
    "Create an admin account and remove the install.php file before using this website"
  );
}
require "PHP_functions/CSV.php";
require "PHP_functions/dynamic_store_nav.php";

$current_store = $_GET["store_id"];
?>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Store Copyright</title>
    <meta name="description" content="Store Copyright" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div id="nav_header"></div>
        <?php load_dynamic_store_header($current_store); ?>
    </header>

    <div class="body_spacing">
        <div class="HeaderH1_Left_With_Spacing">
            <h1>Copyright Notice</h1>
        </div>

        <div>
            <p>
                If you require any more information or have any questions about our
                site's disclaimer, please feel free to contact us by email at
                shop@gmail.com. Our Disclaimer was generated with the help of the
                <a href="https://www.disclaimergenerator.net/">Disclaimer Generator</a>.
            </p>

            <h4>Disclaimers for our store</h4>

            <p>
                All the information on this website -
                https://s3800978.github.io/WebProg-HTML-and-CSS/ - is published in
                good faith and for general information purpose only. our store
                does not make any warranties about the completeness, reliability and
                accuracy of this information. Any action you take upon the information
                you find on this website (our store), is strictly at your own
                risk. our store will not be liable for any losses and/or
                damages in connection with the use of our website.
            </p>

            <p>
                From our website, you can visit other websites by following hyperlinks
                to such external sites. While we strive to provide only quality links
                to useful and ethical websites, we have no control over the content
                and nature of these sites. These links to other websites do not imply
                a recommendation for all the content found on these sites. Site owners
                and content may change without notice and may occur before we have the
                opportunity to remove a link which may have gone 'bad'.
            </p>

            <p>
                Please be also aware that when you leave our website, other sites may
                have different privacy policies and terms which are beyond our
                control. Please be sure to check the Privacy Policies of these sites
                as well as their "Terms of Service" before engaging in any business or
                uploading any information. Our Privacy Policy was created by
                <a href="https://www.generateprivacypolicy.com/">the Privacy Policy Generator</a>
            </p>

            <h4>Consent</h4>

            <p>
                By using our website, you hereby consent to our disclaimer and agree
                to its terms.
            </p>

            <h4>Update</h4>

            <p>
                Should we update, amend or make any changes to this document, those
                changes will be prominently posted here.
            </p>
        </div>
    </div>
    <footer>
        <?php load_dynamic_store_footer($current_store); ?>
        <div id="mall_footer"></div>
    </footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
</body>

</html>