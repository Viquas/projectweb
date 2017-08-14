<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="css/stripe.css">

<?php include 'meta.php' ?>
<link rel="stylesheet" href="css/nav.css">
<script defer src="js/stripe.js"></script>

</head>
<body>

<?php
 // include 'header.php'
  ?>

<div class="main-content" id='main'>

  <header class='globalNav '>
  <div class="container-lg">
    <ul class="navRoot">

      <li class="navSection logo">
        <img src="assets/images/home/logo.png" class="logo">
      </li>

      <li class="navSection primary">
        <a
          data-analytics-action="pricing"
          data-analytics-source="global_nav"
          class="rootLink item-pricing colorize"
          href=""
        >
          Our Product
        </a>
        <a
          data-analytics-action="pricing"
          data-analytics-source="global_nav"
          class="rootLink item-pricing colorize"
          href=""
        >
        About Us
        </a>
        <!-- <a class="rootLink item-products hasDropdown colorize" data-dropdown="products">
          Products
        </a> -->
        <a class="rootLink item-developers hasDropdown colorize" data-dropdown="developers">
          Contact Us
        </a>

        <a class="rootLink item-company hasDropdown colorize" data-dropdown="company">
          More
          <svg version="1.1" x="0px" y="0px" viewBox="0 0 200 75"    xml:space="preserve" fill="white" stroke="white">

            <g><path d="M49.7,70.3c1.9,0,3.9-0.7,5.3-2.2l29.7-29.7c0.6-0.6,0.6-1.6,0-2.2c-0.6-0.6-1.6-0.6-2.2,0L52.9,65.9   c-1.7,1.7-4.5,1.7-6.2,0L17.5,36.7c-0.6-0.6-1.6-0.6-2.2,0c-0.6,0.6-0.6,1.6,0,2.2l29.1,29.1C45.9,69.5,47.8,70.3,49.7,70.3z"/></g></svg>
        </a>


      </li>

      <li class="navSection secondary">

          <a
            class="rootLink item-dashboard colorize"
            data-adroll-segment='submit_two'
            href=""
            data-analytics-source="global_nav"
              data-analytics-action="sign_in"
          >
              Sign in
          </a>

          <a type="button" class="btn  btn-sm w-button-small"> Request Demo</a>

      </li>

      <li class="navSection mobile">
        <a class="rootLink item-mobileMenu colorize"><h2>Menu</h2></a>
        <div class="popup">
          <div class="popupContainer">
            <a class="popupCloseButton">Close</a>
            <div class="mobileProducts">
              <h4>Menu</h4>
              <div class="mobileProductsList">
                <ul>
                  <li>
                    <a
                      class="linkContainer item-payments"
                      href=""
                      data-analytics-action="payments"
                      data-analytics-source="mobile_nav"
                    >
                      <svg viewbox="0 0 48 48"><path fill="#87BBFD" class="hover-fillLight" d="M24 48C12.11 48 2.244 39.35.338 28H6.5V9H5.27C9.67 3.515 16.423 0 24 0c13.255 0 24 10.745 24 24S37.255 48 24 48z"/><path fill="#555ABF" class="hover-fillDark" d="M25 21v8H.526A24.082 24.082 0 0 1 0 24 23.908 23.908 0 0 1 6.116 8H31.5c.828 0 1.5.67 1.5 1.5V21h-8zm-10.502-8.995a6.497 6.497 0 1 0 0 12.994 6.497 6.497 0 0 0 0-12.996z"/><path fill="#FFF" d="M39.823 39.276a2.44 2.44 0 0 1-1.76.724H16.5a1.5 1.5 0 0 1-1.5-1.5v-18c0-.828.67-1.5 1.5-1.5h27.693a1.51 1.51 0 0 1 1.484 1.256c.21 1.217.323 2.467.323 3.744 0 5.936-2.355 11.32-6.177 15.276zM33.5 23.002a6.497 6.497 0 1 0 0 12.995 6.497 6.497 0 0 0 .002-12.994z"/></svg>Product
                    </a>
                  </li>
                  <li>
                    <a
                      class="linkContainer item-payments"
                      href=""
                      data-analytics-action="payments"
                      data-analytics-source="mobile_nav"
                    >
                      <svg viewbox="0 0 48 48"><path fill="#87BBFD" class="hover-fillLight" d="M24 48C12.11 48 2.244 39.35.338 28H6.5V9H5.27C9.67 3.515 16.423 0 24 0c13.255 0 24 10.745 24 24S37.255 48 24 48z"/><path fill="#555ABF" class="hover-fillDark" d="M25 21v8H.526A24.082 24.082 0 0 1 0 24 23.908 23.908 0 0 1 6.116 8H31.5c.828 0 1.5.67 1.5 1.5V21h-8zm-10.502-8.995a6.497 6.497 0 1 0 0 12.994 6.497 6.497 0 0 0 0-12.996z"/><path fill="#FFF" d="M39.823 39.276a2.44 2.44 0 0 1-1.76.724H16.5a1.5 1.5 0 0 1-1.5-1.5v-18c0-.828.67-1.5 1.5-1.5h27.693a1.51 1.51 0 0 1 1.484 1.256c.21 1.217.323 2.467.323 3.744 0 5.936-2.355 11.32-6.177 15.276zM33.5 23.002a6.497 6.497 0 1 0 0 12.995 6.497 6.497 0 0 0 .002-12.994z"/></svg>About Us
                    </a>
                  </li>
                  <li>
                    <a
                      class="linkContainer item-subscriptions"
                      href=''
                      data-analytics-action="subscriptions"
                      data-analytics-source="mobile_nav"
                    >
                      <svg viewbox="0 0 48 48"><path fill="#74E4A2" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"/><path fill="#FFF" d="M39.558 30.977c-6.23 6.225-16.304 6.194-22.535-.03l13.975-13.962c-6.232-6.224-16.335-6.224-22.567 0-4.043 4.04-5.456 9.712-4.247 14.896l-.654.174a21.89 21.89 0 0 1-1.536-8.61c.284-11.806 10.003-21.35 21.823-21.446 6.15-.05 11.72 2.42 15.744 6.438 6.23 6.226 6.23 16.318 0 22.542z"/><path fill="#159570" class="hover-fillDark" d="M33.653 21.413c1.43 5.336-1.735 10.82-7.068 12.25-5.332 1.43-10.814-1.736-12.242-7.072-1.43-5.334 1.735-10.82 7.068-12.25 5.334-1.43 10.815 1.738 12.244 7.074z"/></svg>Contact Us
                    </a>
                  </li>
                  <li>
                    <a
                      class="linkContainer item-connect"
                      href=''
                      data-analytics-action="connect"
                      data-analytics-source="mobile_nav"
                    >
                      <svg viewbox="0 0 48 48"><path fill="#68D4F8" class="hover-fillLight" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0c1.363 0 2.698.12 4 .338V15h5v5h14.662c.218 1.302.338 2.637.338 4z"/><path fill="#FFF" d="M16.99 29.966L17 17l-5.55-.006a1.02 1.02 0 0 0-.725.3L2.65 25.446a1.55 1.55 0 0 0-.44 1.28c1.22 9.944 9.1 17.825 19.042 19.047.472.058.945-.104 1.28-.44l8.172-8.076c.192-.193.3-.453.3-.725L31 31l-12.985-.01a1.023 1.023 0 0 1-1.024-1.024z"/><path fill="#217AB7" class="hover-fillDark" d="M47.697 20.195L37.194 30.702a1.03 1.03 0 0 1-.726.3h-5.462V18.03c0-.567-.46-1.025-1.025-1.025H16.994V11.52c0-.274.108-.534.3-.726L27.783.3C38 1.916 46.07 9.98 47.698 20.194z"/></svg>Support


                    </a>
                  </li>

                </ul>

              </div>
            </div>
            <div class="mobileSecondaryNav">
              <ul>
                  <li>
                    <a
                      class="item-workswith"
                      href=""
                      data-analytics-action="works-with"
                      data-analytics-source="mobile_nav"
                    >
                      Blog
                    </a>
                  </li>
                <li>
                  <a
                    class="item-gallery"
                    href=""
                    data-analytics-action="customers"
                    data-analytics-source="mobile_nav"
                  >
                    Customer Stories
                  </a>
                </li>

              </ul>
              <ul>
                <li>
                  <a
                    class="item-about"
                    href=""
                    data-analytics-source="mobile_nav"
                    data-analytics-action="about"
                  >
                    Events
                  </a>
                </li>
                <li>
                  <a
                    class="item-jobs"
                    href=""
                    data-analytics-source="mobile_nav"
                    data-analytics-action="jobs"
                  >
                    Careers
                  </a>
                </li>

              </ul>
            </div>
            <a
              class="mobileSignIn"
              data-adroll-segment='submit_two'
              href=""
              data-analytics-source="mobile_nav"
                data-analytics-action="sign_in"
            >
                Sign in
            </a>
            <a
              class="mobileRequestDemo"
              data-adroll-segment='submit_two'
              href=""
              data-analytics-source="mobile_nav"
                data-analytics-action="sgn_in"
            >
                Request Demo
            </a>


          </div>
        </div>
      </li>


    </ul>
  </div>



  <div class="dropdownRoot">
    <div class="dropdownBackground">
      <div class="alternateBackground"></div>
    </div>
    <div class="dropdownArrow"></div>
    <div class="dropdownContainer">


      <div class="dropdownSection" data-dropdown="developers">
        <div class="dropdownContent">

          <div class="linkGroup documentationGroup">
            <a
              class="linkContainer withIcon item-documentation"
              href=""
              data-analytics-action="documentation"
              data-analytics-source="nav_dropdown"
            >
              <h3 class="linkTitle linkIcon"><svg width="17" height="17"><path fill="#87BBFD" class="hover-fillLight" d="M.945 1.998h3.632C6.744 1.998 8.5 3.005 8.5 4.83v11.583c-.512 0-1.015-.337-1.33-.59-1.03-.828-3.057-.828-5.222-.828H.945A.944.944 0 0 1 0 14.052V2.944C0 2.422.423 2 .945 2z"/><path fill="#6772E5" class="hover-fillDark" d="M16.055 1.998h-3.632C10.257 1.998 8.5 3.005 8.5 4.83v11.583c.512 0 1.015-.337 1.33-.59 1.03-.828 3.057-.828 5.222-.828h1.003A.944.944 0 0 0 17 14.05V2.945A.944.944 0 0 0 16.055 2z"/></svg>Contact info</h3>
              <span class="linkSub">Lorem Ipsum</span>
            </a>

          </div>
          <div class="linkGroup documentationGroup">
            <a
              class="linkContainer withIcon item-documentation"
              href=""
              data-analytics-action="documentation"
              data-analytics-source="nav_dropdown"
            >
              <h3 class="linkTitle linkIcon"><svg width="17" height="17"><path fill="#87BBFD" class="hover-fillLight" d="M.945 1.998h3.632C6.744 1.998 8.5 3.005 8.5 4.83v11.583c-.512 0-1.015-.337-1.33-.59-1.03-.828-3.057-.828-5.222-.828H.945A.944.944 0 0 1 0 14.052V2.944C0 2.422.423 2 .945 2z"/><path fill="#6772E5" class="hover-fillDark" d="M16.055 1.998h-3.632C10.257 1.998 8.5 3.005 8.5 4.83v11.583c.512 0 1.015-.337 1.33-.59 1.03-.828 3.057-.828 5.222-.828h1.003A.944.944 0 0 0 17 14.05V2.945A.944.944 0 0 0 16.055 2z"/></svg>XCD Support</h3>
              <span class="linkSub">Lorem Ipsum</span>
            </a>

          </div>



        </div>
      </div>

      <div class="dropdownSection" data-dropdown="company">
        <div class="dropdownContent">

          <ul class="linkGroup linkList companyGroup">
            <li>
              <a
                class="linkContainer item-about"
                href=""
                data-analytics-action="about"
                data-analytics-source="nav_dropdown"
              >
                <h3 class="linkTitle linkIcon"><svg width="17" height="17"><path fill="#6772E5" class="hover-fillDark" d="M8.5 17a8.5 8.5 0 1 1 0-17 8.5 8.5 0 0 1 0 17zm.178-10.89c.76 0 1.726.278 2.486.69V4.443c-.828-.33-1.656-.502-2.484-.502-2.028 0-3.41 1.06-3.41 2.83 0 2.77 3.8 2.32 3.8 3.513 0 .462-.37.612-.93.612-.827 0-1.867-.366-2.706-.823v2.388c.93.4 1.843.592 2.705.592 2.077 0 3.48-1.027 3.48-2.827 0-2.98-3.82-2.447-3.82-3.572-.003-.39.352-.542.877-.542z"/></svg>
                  Blog</h3>
              </a>
            </li>
            <li>
              <a
                class="linkContainer item-customers"
                href=""
                data-analytics-action="customers"
                data-analytics-source="nav_dropdown"
              >
              <h3 class="linkTitle linkIcon">
                <svg width="17" height="17"><path fill="#87BBFD" class="hover-fillLight" d="M2 16a1 1 0 0 1-1-1V9a4 4 0 0 1 8 0v7H2zm3-9a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/><path fill="#6772E5" class="hover-fillDark" d="M15 16H9a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h.55a2.5 2.5 0 0 1 4.9 0H15a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1z"/><path fill="#87BBFD" class="hover-fillLight" d="M11 12h2v4h-2v-4z"/></svg>
                Customer Stories
              </h3>
            </a></li>
            <li>
              <a
                class="linkContainer item-customers"
                href=""
                data-analytics-action="customers"
                data-analytics-source="nav_dropdown"
              >
              <h3 class="linkTitle linkIcon">
                <svg width="17" height="17"><path fill="#87BBFD" class="hover-fillLight" d="M2 16a1 1 0 0 1-1-1V9a4 4 0 0 1 8 0v7H2zm3-9a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/><path fill="#6772E5" class="hover-fillDark" d="M15 16H9a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h.55a2.5 2.5 0 0 1 4.9 0H15a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1z"/><path fill="#87BBFD" class="hover-fillLight" d="M11 12h2v4h-2v-4z"/></svg>
                Events
              </h3>
            </a></li>
            <li>
              <a
                class="linkContainer item-jobs"
                href=""
                data-analytics-action="jobs"
                data-analytics-source="nav_dropdown"
              >
                <h3 class="linkTitle linkIcon"><svg width="17" height="17"><path fill="#6772E5" class="hover-fillDark" d="M1.5 4h14c.828 0 1.5.67 1.5 1.5v8a1.5 1.5 0 0 1-1.5 1.5h-14A1.5 1.5 0 0 1 0 13.5v-8C0 4.67.67 4 1.5 4z"/><path fill="#87BBFD" class="hover-fillLight" d="M13 15V4h2v11h-2zM2 4h2v11H2V4z"/><path fill="#6772E5" class="hover-fillDark" d="M11.5 3.5a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1V4H4v-.5A2.5 2.5 0 0 1 6.5 1h4A2.5 2.5 0 0 1 13 3.5V4h-1.5v-.5z"/></svg>
                  Careers</h3>
              </a>
            </li>
          </ul>

          <!-- <div class="linkGroup blogGroup">
            <a
              class="linkContainer withIcon item-blog"
              href="https://stripe.com/blog"
              data-analytics-action="blog"
              data-analytics-source="nav_dropdown"
            >
              <h3 class="linkTitle linkIcon"><svg width="17" height="17"><path fill="#87BBFD" class="hover-fillLight" d="M1 4h4.5v11H1.75A1.75 1.75 0 0 1 0 13.25V5a1 1 0 0 1 1-1z"/><path fill="#6772E5" class="hover-fillDark" d="M14 15H2v-.025a2.243 2.243 0 0 0 2-2.225V3a1 1 0 0 1 1-1h11a1 1 0 0 1 1 1v9a3 3 0 0 1-3 3zm1-11H6v3h9V4z"/></svg>From the blog</h3>
            </a>
            <ul class="blogPosts">
              <li><a href="/blog/payable-is-joining-stripe">
                <span class='title '>Payable is joining Stripe</span>

              </a></li>
              <li><a href="/blog/marc-andreessen-ama">
                <span class='title '>Marc Andreessen answers questions from Stripe Atlas founders</span>

              </a></li>
              <li><a href="/blog/hong-kong">
                <span class='title '>Stripe in Hong Kong + Alipay and WeChat Pay globally</span>

              </a></li>
            </ul>
          </div> -->

        </div>
      </div>

    </div>
  </div>

</header>
<header class="page-header">
  <section id="header-section" class="header-section">
    <div class="container">
      <div class="row ">
          <div class="col-md-12 flex-md-first">
            <h1 class="medium-font left-text white-text italics CandItalics">Powerfull cloud HR software that puts you in control</h1>
            <h4 class="light-font small-margin-top-down white-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
          </div>
      </div>
      <div class="row">
        <div class="col-md-6 flex-md-first">
            <div class="e-input">
              <div class="input-box">
                <input class="c-border" type="email" placeholder="Email">
                </input>
              </div>
              <div class="button-box">
                <span class="c-text"> Let's get started <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
              </div>
            </div>

        </div>

      </div>
    </div>
  </section>
</header>
<div class="curve-down" >
</div>
</div>
<div class="col-md-6 col-md-offset-5 desk-img">
  <p class="text-center">
  <img src="assets/images/home/dots.png" class="dot-first text-center" alt="XCDHR demo">
  </p>
  <img src="assets/images/home/desktop.png" class="screen-first" alt="XCDHR demo">
</div>

<section class="partners" >
  <div class="h-more">
  <p class="text-center">
    <button type="button" class="btn  btn-sm b-button">See all customers</button>
  </p>
  </div>
  <div id="partners">
  <div class="owl-carousel">
  <div>
    <div class="text-center">
      <img src="assets/images/client/1.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/2.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/3.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/4.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/5.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/6.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/7.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/8.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/9.png" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="assets/images/client/10.png" class="partners-logo">
    </div>
  </div>
</div>
</div>
</section>
<section class="video-container">
  <div class="container">
    <div class="row ">
      <div class="col-md-9">
        <h4 class="light-font small-margin-top-down light-gray">
          <span class="highlight-black">XCD</span> is an easily configured online self-service   <span class="highlight-black">system for HR</span> visionaries in ambitious, growing firms. With the right information at your fingertips and HR under control you're free to add real value and make HR work for the business.<br/><br/>
          Whether that's   <span class="highlight-black">attracting and retaining talent </span>or getting the very best out of the team, wherever they are in the world, XCD makes your  <span class="highlight-black"> HR vision a reality.</span>
        </h4>

      </div>
      <div class="col-md-3">
        <img class="img-responsive" src="assets/images/home/man.png" >
      </div>
      </div>
    </div>
  </div>
</section>
<section class="slant-top bottom-mar">
</section>

<section class="video-container promo-left">
  <div class="row ">
    <div class="col-md-5 text-center">
      <img src="assets/images/home/video_illustrations.png" class="illustraions illustration-video" align="middle">
    </div>
    <div class="col-md-7 outer-flex">
      <div class="inner-flex">
      <h2 class="light-font small-margin-top-down white-text text-center">
        See what XCD is all about
      </h2>
      <div class="video-button">
        Watch <span class="round-back"><i class="fa fa-play play-button" aria-hidden="true"></i></span> Video
      </div>
    </div>
    </div>
  </div>
</section>
<section class="slant-bottom top-mar">
</section>
<section class="slant-bottom bottom-mar">
</section>
<section class="story">
  <div class="container-full">
    <div class="row ">
      <div class="col-md-3 col-md-offset-1">
        <div class="story-img">
        </div>
      </div>
      <div class="col-md-8">
        <div class="story-box">
          <div class="row">
              <div class="col-md-11 col-md-offset-1">
                <h4 class="story-title">Built for HR professionals by HR professionals</h4>
                <p class="story-detail">"XCD was born out of my desire to equip smart HR people with the information they need to make a difference."</p>
                  <p class="story-by">  - Christopher Mitford-Slade, C.E.O</p>
                <button type="button" class="btn  btn-sm w-button">Read the story</button>

              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="slant-top top-mar">
</section>
<section class="slant-top">
</section>


<section class="testimonials">
  <div class="container">
    <div class="title-box">
    <h2 class="title-gradient"> Don't just take our word for it </h2>
    </div>

  </div>
  <div class="t-box">

     <div class="t-parent">
      <div class="t-child" style="background-image: url('assets/images/testimonials/1.jpg');" >
      </div>
      <div class="layer">
        <p class="testimonials-words"> "Lorem ipsum dolor sit amet"<br/>
          <span class="testimonials-words-small">  - consectetur adipiscing elit. </span>
        </p>

      </div>
     </div>

    <div class="t-parent">
      <div class="t-child" style="background-image: url('assets/images/testimonials/1.jpg');" >
      </div>
      <div class="layer">
        <p class="testimonials-words-right"> "Lorem ipsum dolor sit amet"<br/>
          <span class="testimonials-words-small">  - consectetur adipiscing elit. </span>
        </p>

      </div>
    </div>
    <div class="t-parent">
      <div class="t-child" style="background-image: url('assets/images/testimonials/1.jpg');" >
      </div>
      <div class="layer">
        <p class="testimonials-words"> "Lorem ipsum dolor sit amet"<br/>
          <span class="testimonials-words-small">  - consectetur adipiscing elit. </span>
        </p>
      </div>
    </div>
    <div class="t-parent">
      <div class="t-child" style="background-image: url('assets/images/testimonials/1.jpg');" >
      </div>
      <div class="layer">
        <p class="testimonials-words-right"> "Lorem ipsum dolor sit amet"<br/>
          <span class="testimonials-words-small">  - consectetur adipiscing elit. </span>
        </p>

      </div>
    </div>
  </div>

    <div class="t-center-box ">
        <p class="title-sub"> User who love XCD</p>
      <i class="fa fa-heart red-heart" aria-hidden="true"></i><br/>
      <span class="C-stories">Read stories<i class="fa fa-long-arrow-right a-right" aria-hidden="true"></i></span>
    </div>
</section>
<!-- <section class="features">
  <div class="container-fluid">
  <div class="row">
    <div class="col-md-4 col-md-offset-1">

      <div class="tabbable tabs-left">
        <ul class="nav nav-tabs">
          <li class="active">
            <a href="#a" data-toggle="tab">
              <h5 class="feature-title"> Feature 1</h5>
              <p class="feature-detail">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate. Quisque mauris augue.</p>
            </a>
          </li>
          <li >
            <a href="#b" data-toggle="tab">
            <h5 class="feature-title"> Feature 1</h5>
            <p class="feature-detail">Some content about the core XCD</p>
          </a>
         </li>
          <li><a href="#c" data-toggle="tab">  <h5 class="feature-title"> Feature 1</h5>
            <p class="feature-detail">Some content about the core XCD</p>
          </a>
        </li>
        </ul>
      </div>

     </div>
       <div class="col-md-7">
         <div class="tab-content">
          <div class="tab-pane  active" id="a">
            <img src="assets/images/screenshots/features.png" class="screen-first" alt="XCDHR demo">
          </div>
          <div class="tab-pane fade" id="b">
            <img src="assets/images/screenshots/features.png" class="screen-first" alt="XCDHR demo">
          </div>
          <div class="tab-pane fade" id="c">
            <img src="assets/images/screenshots/features.png" class="screen-first" alt="XCDHR demo">
          </div>
         </div>
       </div>
        <div class="col-md-4 col-md-offset-4 text-center">
          <button type="button" class="btn btn-primary btn-lg">See all the features</button>
        </div>
    </div>
  </div>
</section> -->
<!-- <section class="facts">
  <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="fact-card">
        <h4 class="facts-title"> KPI</h4>
        <div class="ill-facts">
        </div>
        <p class="facts-detail">
          Description goes here
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="fact-card">
        <h4 class="facts-title"> KPI</h4>
        <div class="ill-facts">
        </div>
        <p class="facts-detail">
          Description goes here
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="fact-card">
        <h4 class="facts-title"> KPI</h4>
        <div class="ill-facts">
        </div>
        <p class="facts-detail">
          Description goes here
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="fact-card">
        <h4 class="facts-title"> KPI</h4>
        <div class="ill-facts">
        </div>
        <p class="facts-detail">
          Description goes here
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="fact-card">
        <h4 class="facts-title"> KPI</h4>
        <div class="ill-facts">
        </div>
        <p class="facts-detail">
          Description goes here
        </p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="fact-card">
        <h4 class="facts-title"> KPI</h4>
        <div class="ill-facts">
        </div>
        <p class="facts-detail">
          Description goes here
        </p>
      </div>
    </div>

  </div>
  </div>
</section> -->
<!-- <section class="test-drive">
  <div class="row">
    <div class="col-md-6">
      <h4 class="td-text"> Want to skip to our product? You're in the right place
    </div>
    <div class="col-md-4 col-md-offset-2">
      <button type="button" class="btn btn-primary btn-lg">Take a test drive</button>
    </div>
  </div>
</section>
 -->
<section class="blog_widget">
  <div class="container">
   <div class="row">
     <div class="col-md-8 col-md-offset-2">
       <div class="title-box">
           <h3 class="title-gradient"> You might also like this</h3>
       </div>

         <div class="row">
           <div class="col-md-6 ">
             <div class="card blog_card">
                 <img class="card-img-top" src="assets/images/misc/default.png" alt="Card image cap">
                 <div class="card-block">
                   <h4 class="card-title">Blog name</h4>
                   <p class="card-text">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet</p>
                   <span class="C-stories">Read more<i class="fa fa-long-arrow-right a-right" aria-hidden="true"></i></span>
                 </div>
             </div>
           </div>
           <div class="col-md-6 ">
             <div class="card blog_card">
                 <img class="card-img-top" src="assets/images/misc/default.png" alt="Card image cap">
                 <div class="card-block">
                   <h4 class="card-title">Blog name</h4>
                   <p class="card-text">Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet</p>
                   <span class="C-stories">Read more<i class="fa fa-long-arrow-right a-right" aria-hidden="true"></i></span>
                 </div>
             </div>
           </div>
         </div>
     </div>
   </div>
 </div>
</section>

<section class="questionare">
  <div class="container-full">
   <div class="row" id="blur">
     <div class="col-md-12 ">
       <div class="title-box">
         <h3 class="feature-title"> Please take a moment to help us solve your problem</h3>
         <div class="question-box">
           <h4 class="question" id="q1">Q. How long do you spend per week chasing employees for HR information?</h4>
           <div class="answer-box" id="a-box">
             <a class="answer" id="a1"> One Hour</a>
             <a class="answer" id="a2"> Half day</a>
             <a class="answer" id="a3"> One day</a>
             <a class="answer" id="a4"> One plus day</a>
           </div>
         </div>
       </div>
     </div>
   </div>
   <div class="row">
     <div class="result-box">
       <div class="row">
         <h3 class="m-result"> Help us help you</h3>
         <p class="text-center">
         <input type="text" class="newsletter_input" placeholder="Email"><br/>
           <button type="button" class="btn  btn-sm b-button">Done</button>
         </p>
       </div>
     </div>
   </div>
  </div>
</section>
<section class="newsletter">
  <div class="container">
   <div class="row">
     <div class="col-md-6">
        <img class="illustraions right" src="assets/images/home/subscribe.png" alt="Card image cap">
     </div>
     <div class="col-md-6">
       <h1 class="gray-title">Don't miss out on anything</h1>
       <h3 class="gray-subtitle"> Subscribe to our news letter</h3>
       <input type="text" class="newsletter_input" placeholder="Email"><br/>
         <button type="button" class="btn  btn-sm b-button">subscribe</button>
     </div>
   </div>
 </div>
 </section>


<div id="googleMap" style="width:100%;height:400px;"></div>
<div class="container">
  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      <div class="banner">
        <div class="row">
          <div class="col-sm-6">
              <i class="fa fa-phone contact-icon" aria-hidden="true"></i>
              <span class="contact-detail">+44 (0) 800 0432923</span>
          </div>
          <div class="col-sm-6">
              <i class="fa fa-envelope contact-icon" aria-hidden="true"></i>
              <span class="contact-detail">info@xcdhr.com</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="footer">
  <div class="container">
   <div class="row">
      <div class="col-sm-12">
        <div class="text-center">
        <button type="button" class="btn btn-sm support-button">Contact xcd support</button>
      </div>
      </div>
     <div class="col-sm-12">
       <div class="sitemap">
         <a href="" class="sitemap-links">Terms</a>
         <a href="" class="sitemap-links">Privacy</a>
         <a href="" class="sitemap-links">Careers</a>
         <a href="" class="sitemap-links">Blogs</a>
       </div>
       <div class="social-media">
         <a class="social-links" href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
         <a class="social-links" href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
         <a class="social-links" href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>

       </div>
     </div>
   </div>
 </div>
 </section>
</body>
<?php include 'script.php' ?>
<script src="js/questionare.js"></script>
<script src="js/owl-index.js"></script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB37AlTgL-QBL3DmJ7EZQNEmve3vHK19a8&callback=googleMap"></script>

<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        var mapOptions = {
            zoom: 15,
             draggable:false,
            center: new google.maps.LatLng(51.508742,-0.120850),
            styles: [{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"color":"#444444"}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#f2f2f2"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"all","stylers":[{"saturation":-100},{"lightness":45}]},{"featureType":"road.highway","elementType":"all","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#46bcec"},{"visibility":"on"}]}]
        };

        var mapElement = document.getElementById('googleMap');
        var map = new google.maps.Map(mapElement, mapOptions);
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(51.508742,-0.120850),
            map: map,
            title: 'XCDHR'
        });
    }
</script>
<script>
$(document).ready(function(){
    // Mostra e nascondi view-news
    // var active = "europa-view";
    var count = 0;
    $('a.answer').click(function () {

        var divname= 'a-box';
        if(count < 1){
        $("#"+divname ).hide("slide", { direction: "left" }, 1200);
        $("#"+divname).delay(800).show("slide",
        { direction: "right" },
        newQuestion(),
        1000);
      }else{
        blurElement("#blur", 6);
        $(".result-box").fadeIn();
      }
        count++;
        // active = divname;
    });
    $( ".partners" ).hover(
      function() {
        blurElement("#partners", 6);
        console.log("in");
        $(".h-more").fadeIn();
      }, function() {
        blurElement("#partners", 0);
        console.log("out");
        $(".h-more").fadeOut();
      }

    );
    function newQuestion(){
      $("#q1").fadeOut(100).delay(1500).html("Q. What percentage of employees complete performance reviews in your organisations?").fadeIn();
      $("#a1").html("Less than 50%");
      $("#a2").html("51% - 85%");
      $("#a3").html("86% - 100%");
      $("#a4").html("Unsure");
    }



    //set the css3 blur to an element
    function blurElement(element, size) {
        var filterVal = 'blur(' + size + 'px)';
         $(element).css({
           'filter':filterVal,
           'webkitFilter':filterVal,
           'mozFilter':filterVal,
           'oFilter':filterVal,
           'msFilter':filterVal,
           'transition':'all 0.5s ease-out',
           '-webkit-transition':'all 0.5s ease-out',
           '-moz-transition':'all 0.5s ease-out',
           '-o-transition':'all 0.5s ease-out'
       });

    }
});
</script>

</html>
