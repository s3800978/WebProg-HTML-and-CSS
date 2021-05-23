<!DOCTYPE html>
<?php
session_start();
require "PHP_functions/CSV.php";
require "PHP_functions/dynamic_store_header.php";

$current_store = $_GET["store_id"];
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Store Home</title>
    <meta name="description" content="Store Home" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
    <script>
    </script>
</head>


<body>
    <header>
        <div id="nav_header"></div>
        <?php load_dynamic_store_header($current_store); ?>
    </header>

    <div class="body_spacing">
        <!--------New Products-------->
        <div class="small-container">
            <h3 class="teamtitle">New products!</h3>
            <div class="row">
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/keyboard1.jpg" />
                        <h4>Razer Elite Keyboard</h4>
                        <p class="CaptionBlackXS">Razer</p>
                        <p class="CaptionBlackSmall">1.000.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail-AirTag.html">
                        <img src="Asset/airtag4.webp" />
                        <h4>Apple AirTag</h4>
                        <p class="CaptionBlackXS">Apple</p>
                        <p class="CaptionBlackSmall">799.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/keyboard3.jpg" />
                        <h4>Razer Cynosa</h4>
                        <p class="CaptionBlackXS">Store C</p>
                        <p class="CaptionBlackSmall">3.000.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/keyboard4.jpg" />
                        <h4>Razer Ornata</h4>
                        <p class="CaptionBlackXS">Store D</p>
                        <p class="CaptionBlackSmall">4.000.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/mouse1.jpg" />
                        <h4>Razer Naga</h4>
                        <p class="CaptionBlackXS">Store M</p>
                        <p class="CaptionBlackSmall">2.500.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/mouse2.jpg" />
                        <h4>Razer Atheris</h4>
                        <p class="CaptionBlackXS">Store N</p>
                        <p class="CaptionBlackSmall">3.600.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/mouse3.jpg" />
                        <h4>Razer Basilisk</h4>
                        <p class="CaptionBlackXS">Store O</p>
                        <p class="CaptionBlackSmall">2.000.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/mouse4.jpg" />
                        <h4>Razer Viper</h4>
                        <p class="CaptionBlackXS">Store P</p>
                        <p class="CaptionBlackSmall">3.000.000 VND</p>
                    </a>
                </div>
            </div>
        </div>
        <!--------Featured Products-------->
        <div class="small-container featured-section featured-store-color">
            <h3 class="teamtitle">Featured products!</h3>
            <div class="row">
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/keyboard1.jpg" />
                        <h4>Razer Elite Keyboard</h4>
                        <p class="CaptionBlackXS">Razer</p>
                        <p class="CaptionBlackSmall">1.000.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail-AirTag.html">
                        <img src="Asset/airtag4.webp" />
                        <h4>Apple AirTag</h4>
                        <p class="CaptionBlackXS">Apple</p>
                        <p class="CaptionBlackSmall">799.000 VND</p>
                    </a>
                </div>

                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/headphone4.jpg" />
                        <h4>Razer Nari</h4>
                        <p class="CaptionBlackXS">Store K</p>
                        <p class="CaptionBlackSmall">3.100.000 VND</p>
                    </a>
                </div>

                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/headphone5.jpg" />
                        <h4>Razer Kaira</h4>
                        <p class="CaptionBlackXS">Store L</p>
                        <p class="CaptionBlackSmall">4.100.000 VND</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div id="store_footer"></div>
        <div id="mall_footer"></div>
    </footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
    <script>
    var store_name = "<?php echo $store_name; ?>";
    document.querySelector("#store_name").innerHTML = store_name;
    </script>
</body>

</html>