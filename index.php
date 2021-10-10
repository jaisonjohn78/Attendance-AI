<?php
require_once 'config/function.php';
btn();


?>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>GYPSY | Attendance through facial recognition system</title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="assets/img/favicons/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="assets/img/favicons/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="assets/img/favicons/favicon-16x16.png"
    />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicons/favicon.ico"
    />
    <script src="vendors/JQuery/jquery.min.js"></script>

    <meta name="theme-color" content="#ffffff" />

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav
        class="navbar navbar-expand-lg navbar-light sticky-top py-3 d-block"
        data-navbar-on-scroll="data-navbar-on-scroll"
      >
        <div class="container">
          <a class="navbar-brand" href="index.php"
            ><img src="assets/img/gallery/logo-n.png" height="45" alt="logo"
          /></a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"> </span>
          </button>
          <div
            class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0"
            id="navbarSupportedContent"
          >
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2">
                <a class="nav-link active" aria-current="page" href="index.html"
                  >Home</a
                >
              </li>
              <li class="nav-item px-2">
                <a
                  class="nav-link"
                  aria-current="page"
                  href="#about"
                  >About</a
                >
              </li>
              <li class="nav-item px-2">
                <a class="nav-link" aria-current="page" href="#"
                  >Demo</a
                >
              </li>
            </ul>
            <center>
              <a href="#home" aria-current="page" class="nav-link btn btn-primary order-1 order-lg-0"  data-toggle="collapse"  data-bs-target=".navbar-collapse.show" onclick="openform()"
              style="color: #ffffff; display: inline-flex; "
                >Teacher ?</a
              >
              <a class="nav-link btn btn-primary order-1 order-lg-0"
              style="color: #ffffff; display: inline-flex; "
               href="face/index.php">Student</a>
            </center>

            
          </div>
        </div>
      </nav>
      <section class="pt-6 bg-600" id="home">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 order-0 order-md-1 text-end">
              <img
                class="pt-7 pt-md-0 w-100"
                src="assets/img/gallery/hero-header.png"
                width="470"
                alt="hero-header"
              />
            </div>
            <div class="col-md-7 col-lg-6 text-md-start text-center py-6">
              <h4 class="fw-bold font-sans-serif">Scaler HackX  | GYPSY</h4>
              <h1 class="fs-6 fs-xl-7 mb-5">
              Attendance through facial recognition system
              </h1>
             <a class="btn btn-outline-secondary" href="face/index.php" role="button" style="width: 55%;"
                >I am Student <br/> Lets Go !! </a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="py-0" style="margin-top: -5.8rem">
        <div class="container">
          <div class="row">
            <div class="card card-span bg-secondary">
              <div class="card-body">
                <div class="row flex-center gx-0">
                  <div class="col-lg-4 col-xl-2 text-center text-xl-start">
                    <img
                      src="assets/img/gallery/funfacts.png"
                      width="170"
                      alt="..."
                    />
                  </div>
                  <div class="col-lg-8 col-xl-4">
                    <h1 class="text-light fs-lg-4 fs-xl-5">
                      Work Hard in Silence<br/>
                      <span class="text-primary">"Let Success make the </span>Noise! <span class="text-primary">"</span>
                    </h1>
                  </div>
                  <div class="col-lg-12 col-xl-6">
                    <h1 class="display-1 text-light text-center text-xl-end" id="time">
                      JavaScript Not Supported
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <section>
        <div
          class="bg-holder"
          style="
            background-image: url(assets/img/gallery/funfacts-2-bg.png);
            background-position: center;
            background-size: cover;
          "
        ></div>
        <!--/.bg-holder-->

        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3 text-center mb-5">
              <img
                src="assets/img/gallery/published.png"
                height="100"
                alt="..."
              />
              <h1 class="my-2">768</h1>
              <p class="text-info fw-bold">Teachers</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5">
              <img
                src="assets/img/gallery/instructors.png"
                height="100"
                alt="..."
              />
              <h1 class="my-2">1200+</h1>
              <p class="text-info fw-bold">Students</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5">
              <img
                src="assets/img/gallery/learners.png"
                height="100"
                alt="..."
              />
              <h1 class="my-2">24 x 7</h1>
              <p class="text-info fw-bold">Customer Support</p>
            </div>
            <div class="col-sm-6 col-lg-3 text-center mb-5">
              <img src="assets/img/gallery/awards.png" height="100" alt="..." />
              <h1 class="my-2">30+</h1>
              <p class="text-info fw-bold">HAPPY LEARNERS</p>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-0" id="about">
        <div class="container">
          <div class="row h-100 align-items-center">
            <div class="col-md-12 col-lg-6 h-100">
              <div class="card card-span text-white h-100">
                <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_ljry3gva.json"  background="transparent"  speed="1"  style="width: 350px; height: 350px; opacity: 1; position: relative; z-index: 100; top: 0;"  loop  autoplay></lottie-player>
                <div class="card-body px-xl-5 px-md-3 pt-0">
                  <div
                    class="d-flex flex-column align-items-center bg-200"
                    style="margin-top: -2.4rem"
                  >
                    <h5 class="mt-3 mb-0">Jaison John</h5>
                    <p class="text-muted">CEO of GYPSY</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6 h-100">
              <h1 class="my-4">
                What is <span class="text-primary"
                  >GYPSY ?</span
                >
              </h1>
              <p style="font-size: 20px;">
                Gypsy is a simple and convenient application for recording online 
                attendance on any online meeting platform. Gypsy simplifies the work 
                of teachers and deals with inconsequential and inappropriate behaviour 
                by random participants.
              </p>
              <div class="mt-6">
                <h5 class="font-sans-serif fw-bold mb-3">
                  Always With you , Always for You 
                </h5>
                <div class="card card-span bg-600">
                  <div class="card-body">
                    <div class="row flex-center gx-0">
                      <div class="col-lg-4 col-xl-3 text-center text-xl-start">
                        <img
                          src="assets/img/gallery/logo-n.png"
                          width="120"
                          alt="courses"
                        />
                      </div>
                      <div class="col-lg-8 col-xl-9">
                        <h5 class="font-sans-serif fw-bold">
                          Mordern Problems needs, <br/> Mordern Solution
                        </h5>
                        <p class="text-muted fs--1">Backbone for Teachers </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 col-lg-4 mb-5">
              <img src="assets/img/gallery/cta.png" width="280" alt="cta" />
            </div>
            <div class="col-md-6 col-lg-5">
              <h5 class="text-primary font-sans-serif fw-bold">
                Subscrible now
              </h5>
              <h1 class="mb-5">Get every single<br />update from us</h1>
              <form class="row g-0 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <input
                      class="form-control form-little-squirrel-control"
                      type="email"
                      placeholder="Enter email "
                      aria-label="email"
                    /><i class="fas fa-envelope input-box-icon"></i>
                  </div>
                </div>
                <div class="col-auto">
                  <button class="btn btn-primary rounded-0" type="submit">
                    Subscribe now
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="bg-secondary">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-12 col-lg-6 mb-4 order-0 order-sm-0">
              <a class="text-decoration-none" href="#"
                ><img
                  src="assets/img/gallery/footer-logo.png"
                  height="51"
                  alt=""
              /></a>
              <p class="text-light my-4">
                <i class="fas fa-map-marker-alt me-3"></i
                ><span class="text-light">My Address , goregoan(E),  &nbsp;</span
                ><a class="text-light" href="tel:+91-8693018540">+91 8693018540</a
                ><br />Mumbai, India
              </p>
              <p class="text-light">
                <i class="fas fa-envelope me-3"> </i
                ><a class="text-light" href="mailto:jaisonjohn78.com@gmail.com"
                  >jaisonjohn78.com@gmail.com
                </a>
              </p>
              <p class="text-light">
                <i class="fas fa-phone-alt me-3"></i
                ><a class="text-light" href="tel:+91-8693018540"
                  >+91-8693018540 (Personal no.)</a
                >
              </p>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-2 order-sm-1">
              <h5 class="lh-lg fw-bold mb-4 text-light font-sans-serif">
                Community
              </h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg">
                  <a class="text-200" href="#!">Learners</a>
                </li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Partners</a>
                </li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Developers</a>
                </li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Beta Testers</a>
                </li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Translators</a>
                </li>
                <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Tech Blog</a>
                </li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Teaching Center</a>
                </li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">
                Informations
              </h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200" href="#!">About</a></li>
                <li class="lh-lg"><a class="text-200" href="#!">Pricing</a></li>
                <li class="lh-lg"><a class="text-200" href="#!">Blog</a></li>
                <li class="lh-lg"><a class="text-200" href="#!">Careers</a></li>
                <li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-4 col-lg-2 mb-3 order-3 order-sm-2">
              <h5 class="lh-lg fw-bold text-light mb-4 font-sans-serif">
                More
              </h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200" href="#!">Press</a></li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Investors</a>
                </li>
                <li class="lh-lg"><a class="text-200" href="#!">Terms</a></li>
                <li class="lh-lg"><a class="text-200" href="#!">Privacy</a></li>
                <li class="lh-lg"><a class="text-200" href="#!">Help</a></li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Accessibility</a>
                </li>
                <li class="lh-lg"><a class="text-200" href="#!">Contact</a></li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Articles</a>
                </li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Directory</a>
                </li>
                <li class="lh-lg">
                  <a class="text-200" href="#!">Affiliates</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

      <section class="py-0" style="margin-top: -5.8rem">
        <div class="container bg-primary">
          <div
            class="row justify-content-md-between justify-content-evenly py-4"
          >
            <div
              class="
                col-12 col-sm-8 col-md-6 col-lg-auto
                text-center text-md-start
              "
            >
              <p class="fs--1 my-2 fw-bold">
                Scaler Hackx &copy; GYPSY, 2021
              </p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end">
                Made with&nbsp;
                <svg
                  class="bi bi-suit-heart-fill"
                  xmlns="http://www.w3.org/2000/svg"
                  width="12"
                  height="12"
                  fill="#EB6453"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M4 1c2.21 0 4 1.755 4 3.92C8 2.755 9.79 1 12 1s4 1.755 4 3.92c0 3.263-3.234 4.414-7.608 9.608a.513.513 0 0 1-.784 0C3.234 9.334 0 8.183 0 4.92 0 2.755 1.79 1 4 1z"
                  ></path></svg>&nbsp;by&nbsp;
                  <a
                  class="fw-bold text-900"
                  href="https://themewagon.com/"
                  target="_blank"
                  >Jaison John
                </a>
              </p>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- model  -->

    <div class="popup-overlay"></div>
    <div class="popup">
      <div class="popup-close" onclick="closeform()">&times;</div>
      <form method="post" >
        <div class="form">
          <div class="avatar">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<lottie-player src="https://assets2.lottiefiles.com/packages/lf20_gjmecwii.json"  background="transparent"  speed="1" loop autoplay></lottie-player>
          </div>
          <div class="header">
            Attendance Recording <br/> Form
          </div>
          <div class="element">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="First Name" required>
          </div>
          <div class="element">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="element">
            <label for="link">Meet Link</label>
            <input type="text" id="link" name="link" placeholder="Paste Google Meet or Zoom link" required>
          </div>
          <input type="checkbox" required style="margin-left: 15px;" /><p style="font-size: 13px; display: inline; margin-left: 5px; text-align: center;">Send me The attendence Sheet thru Email</p>
          <div class="element"><input type="submit" name="btn" value="Start Now" style="background-color: rgb(255, 200, 0);"/></div>
        </div>
      </form>
    </div>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="assets/js/custom.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>

    <link
      href="https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
      rel="stylesheet"
    />
  </body>
</html>
