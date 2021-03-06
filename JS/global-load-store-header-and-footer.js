// -----------------------------
// LOAD MALL HEADER AND FOOTER
// -----------------------------

// Load store header
//
// document.getElementById("store_header").innerHTML = `<nav class="nav_store">
//   <div class="nav_store_wrapper">
// 	<div class="nav_store_elements_left">
// 	 <div class="nav_store_logo"></div>
// 	  <div>
// 		<h4 id="store_name">[Store Name Here]</h4>
// 	  </div>
// 	</div>
//
// 	<div class="nav_store_elements_right">
// 	  <ul class="nav_store_links">
// 		<li><a href="5.2.1-Store-Home.html">Home</a></li>
// 		<li>
// 		  <div class="dropdown">
// 			<button class="dropbtn">
// 			  <h5>Products <i class="fa fa-caret-down"></i></h5>
// 			</button>
// 			<div class="dropdown-content">
// 			  <a href="ProductByCat.php"
// 				>‎Products by Category</a
// 			  >
// 			  <a href="ProductByTime.php"
// 				>Products by Created Time</a
// 			  >
// 			</div>
// 		  </div>
// 		</li>
// 		<li><a href="StoreAboutUs.php">About us</a></li>
// 		<li><a href="StoreContact.php">Contact</a></li>
// 	  </ul>
// 	</div>
//   </div>
// </nav>`;

// Load store footer
document.getElementById("store_footer").innerHTML = `<div class="store_footer">
  <div class="footer_wrapper">
	<div class="footer_elements_left">
	  <a href="StoreTerms.php" class="BodyBlack15"
		>Term of Service</a
	  >
	  <a href="StoreCopyright.php" class="BodyBlack15">Copyright</a>
	  <a href="StorePolicy.php" class="BodyBlack15"
		>Privacy Policy</a
	  >
	</div>
	<div>
	  <hr class="footer-hr" />
	</div>
	<div class="footer_elements_right">
	  <p class="BodyLight-Black15">
		Copyright © All rights reserved.
	  </p>
	</div>
  </div>
</div>`;

function openProduct() {
  document.querySelector("#openprod").style.display = "block";
}
