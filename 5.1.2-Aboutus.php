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
    <title>About us!</title>
    <meta name="description" content="About us" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script
      src="https://kit.fontawesome.com/f43db195aa.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header id="nav_header"></header>

    <div class="hero-image">
      <div class="hero-text body_spacing">
        <h5>ABOUT US</h5>
        <h1>Les Flâneurs</h1>
      </div>
    </div>

    <div class="body_spacing">
      <h3 class="teamtitle">Our members</h3>
      <!-- Click here to open modals  -->
      <div class="card_flex_container">
        <div class="wrapper_card open_modal" " data-modal="modal1">
        <img
          src="Asset/about/photo_1.jpg"
          alt="member1"
          class="cardimg"
          width="200px"
          height="200px"
        />
        <div class="content_wrapper">
          <p class="snumber">S3800978</p>
          <p class="name">Do Hoang Quan</p>
          <p class="paracontent">
            UI/UX Designer, QA Tester, Front-end Developer, Project Planner and
            Supervisor.
          </p>
        </div>
      </div>
      <div class="wrapper_card open_modal" data-modal="modal2">
        <img
          src="Asset/about/photo_2.jpg"
          alt="member1"
          class="cardimg"
          width="200px"
          height="200px"
        />
        <div class="content_wrapper">
          <p class="snumber">S3820374</p>
          <p class="name">Huynh Quoc Thinh</p>
          <p class="paracontent">Front-end Developer, Tester</p>
        </div>
      </div>
      <div class="wrapper_card open_modal" data-modal="modal3">
        <img
          src="Asset/about/photo_3.jpg"
          alt="member1"
          class="cardimg"
          width="200px"
          height="200px"
        />
        <div class="content_wrapper">
          <p class="snumber">S3799019</p>
          <p class="name">Taehyeon Jeong</p>
          <p class="paracontent">Front-end Developer, Tester</p>
        </div>
      </div>
      <!-- Duc Anh -->
      <div class="wrapper_card open_modal" data-modal="modal4">
        <img
          src="Asset/about/photo_4.jpg"
          alt="Duc Anh"
          class="cardimg"
          width="200px"
          height="200px"
        />
        <div class="content_wrapper">
          <p class="snumber">S3877340</p>
          <p class="name">Hoang Pham Duc Anh</p>
          <p class="paracontent">Front-end Developer, Tester</p>
        </div>
      </div>
      </div>
    </div>


    



    <!-- FIN  -->
    <!-- Modals  -->
    <div class="modal" onclick="close_modal()" id="modal1">
      <div class="wrapper_card_modal" onclick="event.stopPropagation()">
        <span class="close_button"
          ><i class="fas fa-times fa-lg" onclick="close_modal()"></i
        ></span>
        <img
          src="Asset/about/photo_1.jpg"
          alt="member1"
          class="cardimg"
          width="200px"
          height="200px"
        />
        <div class="content_wrapper_modal">
          <p class="snumber">S3800978</p>
          <p class="name">Do Hoang Quan</p>
          <p class="paracontent_modal">
            Hi, my name is Quan! I am the main project lead and supervisor.<br />
            I am also the UI/UX Designer for this website. My responsibility is
            to ensure the final product is the same as the design, so I focus on
            the CSS of all pages. <br />I helped teammates with ensuring their
            pages are correct, both in the information presented as well as the
            styling. <br />I also supervised and planned for the team.
          </p>
        </div>
      </div>
    </div>
    <div class="modal" id="modal2" onclick="close_modal()">
      <div class="wrapper_card_modal" onclick="event.stopPropagation()">
        <span class="close_button"
          ><i class="fas fa-times fa-lg close_modal" onclick="close_modal()"></i
        ></span>
        <img
          src="Asset/about/photo_2.jpg"
          alt="member2"
          class="cardimg"
          width="200px"
          height="200px"
        />
        <div class="content_wrapper_modal">
          <p class="snumber">S3820374</p>
          <p class="name">Huynh Quoc Thinh</p>
          <p class="paracontent_modal">
            Hi, my name is Thinh or you can call me Edgar. I was born I raised
            in Saigon! <br />
            I used to study Doctor/Pharmacy in the States. However, when I came
            back to Vietnam, I started to jump into IT field since 2019.<br />
            For this course, my main role is Front-end Developer/ Tester based
            on Quan's UI/UX design.
          </p>
        </div>
      </div>
    </div>
    <div class="modal" id="modal3" onclick="close_modal()">
      <div class="wrapper_card_modal" onclick="event.stopPropagation()">
        <span class="close_button"
          ><i class="fas fa-times fa-lg" onclick="close_modal()"></i
        ></span>
        <img
          src="Asset/about/photo_3.jpg"
          alt="member3"
          class="cardimg"
          width="200px"
          height="200px"
        />

        <div class="content_wrapper_modal">
          <p class="snumber">S3799019</p>
          <p class="name">Taehyeon Jeong</p>
          <p class="paracontent_modal">
            Hi, my name is Taehyeon but most of my friends call me Tae and I'm
            from Korea.<br />
            I used to visit Vietnam 10 years ago and I was impressed. Therefore,
            when I turned 18 I decided to study aboard in Vietnam and I think
            that I've made a right decision. <br />
            In this course, I'm taking responsibility in Check Validation Forms.
          </p>
        </div>
      </div>
    </div>
    <div class="modal" id="modal4" onclick="close_modal()">
      <div class="wrapper_card_modal" onclick="event.stopPropagation()">
        <span class="close_button"
          ><i class="fas fa-times fa-lg close_modal" onclick="close_modal()"></i
        ></span>
        <img
          src="Asset/about/photo_4.jpg"
          alt="member4"
          class="cardimg"
          width="200px"
          height="200px"
        />
        <div class="content_wrapper_modal">
          <p class="snumber">S3877340</p>
          <p class="name">Hoang Pham Duc Anh</p>
          <p class="paracontent_modal">
            My name is Hoang Pham Duc Anh. <br />I am a student from Hanoi and I
            moved to live in Saigon since 2020.<br />
            I am currently majoring in Bachelor of Information Technology in
            RMIT Vietnam! <br />My role in this course is Front-end Developer
            and check all the team's members part to make sure it works.
          </p>
        </div>
      </div>
      
    </div>
    <footer id="mall_footer"></footer>
    <!-- End of modals  -->
    <div id="cookie-consent-message"></div>
    <script src="JS/3-about-us-modal.js"></script>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
  </body>
</html>
