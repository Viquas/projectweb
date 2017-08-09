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
        <a class="rootLink item-home colorize" href="/"><h1>
          <svg width="62" height="25"><title>XCD</title>
            <path d="M5 10.1c0-.6.6-.9 1.4-.9 1.2 0 2.8.4 4 1.1V6.5c-1.3-.5-2.7-.8-4-.8C3.2 5.7 1 7.4 1 10.3c0 4.4 6 3.6 6 5.6 0 .7-.6 1-1.5 1-1.3 0-3-.6-4.3-1.3v3.8c1.5.6 2.9.9 4.3.9 3.3 0 5.5-1.6 5.5-4.5.1-4.8-6-3.9-6-5.7zM29.9 20h4V6h-4v14zM16.3 2.7l-3.9.8v12.6c0 2.4 1.8 4.1 4.1 4.1 1.3 0 2.3-.2 2.8-.5v-3.2c-.5.2-3 .9-3-1.4V9.4h3V6h-3V2.7zm8.4 4.5L24.6 6H21v14h4v-9.5c1-1.2 2.7-1 3.2-.8V6c-.5-.2-2.5-.5-3.5 1.2zm5.2-2.3l4-.8V.8l-4 .8v3.3zM61.1 13c0-4.1-2-7.3-5.8-7.3s-6.1 3.2-6.1 7.3c0 4.8 2.7 7.2 6.6 7.2 1.9 0 3.3-.4 4.4-1.1V16c-1.1.6-2.3.9-3.9.9s-2.9-.6-3.1-2.5H61c.1-.2.1-1 .1-1.4zm-7.9-1.5c0-1.8 1.1-2.5 2.1-2.5s2 .7 2 2.5h-4.1zM42.7 5.7c-1.6 0-2.5.7-3.1 1.3l-.1-1h-3.6v18.5l4-.7v-4.5c.6.4 1.4 1 2.8 1 2.9 0 5.5-2.3 5.5-7.4-.1-4.6-2.7-7.2-5.5-7.2zm-1 11c-.9 0-1.5-.3-1.9-.8V10c.4-.5 1-.8 1.9-.8 1.5 0 2.5 1.6 2.5 3.7 0 2.2-1 3.8-2.5 3.8z"/></svg></h1></a>
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
          More <i class="fa fa-caret-down"> </i>
        </a>


      </li>

      <li class="navSection secondary">

          <a
            class="rootLink item-dashboard colorize"
            data-adroll-segment='submit_two'
            href="https://dashboard.stripe.com/login"
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

      <div class="dropdownSection" data-dropdown="products">
        <div class="dropdownContent">

          <div class="linkGroup">
            <ul class="productsGroupPrimary">
              <li>
                <a
                  class="linkContainer item-payments"
                  href=""
                  data-analytics-action="payments"
                  data-analytics-source="nav_dropdown"
                >
                  <svg viewbox="0 0 48 48"><path fill="#87BBFD" class="hover-fillLight" d="M24 48C12.11 48 2.244 39.35.338 28H6.5V9H5.27C9.67 3.515 16.423 0 24 0c13.255 0 24 10.745 24 24S37.255 48 24 48z"/><path fill="#555ABF" class="hover-fillDark" d="M25 21v8H.526A24.082 24.082 0 0 1 0 24 23.908 23.908 0 0 1 6.116 8H31.5c.828 0 1.5.67 1.5 1.5V21h-8zm-10.502-8.995a6.497 6.497 0 1 0 0 12.994 6.497 6.497 0 0 0 0-12.996z"/><path fill="#FFF" d="M39.823 39.276a2.44 2.44 0 0 1-1.76.724H16.5a1.5 1.5 0 0 1-1.5-1.5v-18c0-.828.67-1.5 1.5-1.5h27.693a1.51 1.51 0 0 1 1.484 1.256c.21 1.217.323 2.467.323 3.744 0 5.936-2.355 11.32-6.177 15.276zM33.5 23.002a6.497 6.497 0 1 0 0 12.995 6.497 6.497 0 0 0 .002-12.994z"/></svg>
                  <div class='productLinkContent'>
                    <h3 class="linkTitle">Payments</h3>
                    <p class="linkSub">A complete commerce toolkit, built for&nbsp;developers.</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="linkContainer item-subscriptions"
                  href=""
                  data-analytics-action="subscriptions"
                  data-analytics-source="nav_dropdown"
                >
                  <svg viewbox="0 0 48 48"><path fill="#74E4A2" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"/><path fill="#FFF" d="M39.558 30.977c-6.23 6.225-16.304 6.194-22.535-.03l13.975-13.962c-6.232-6.224-16.335-6.224-22.567 0-4.043 4.04-5.456 9.712-4.247 14.896l-.654.174a21.89 21.89 0 0 1-1.536-8.61c.284-11.806 10.003-21.35 21.823-21.446 6.15-.05 11.72 2.42 15.744 6.438 6.23 6.226 6.23 16.318 0 22.542z"/><path fill="#159570" class="hover-fillDark" d="M33.653 21.413c1.43 5.336-1.735 10.82-7.068 12.25-5.332 1.43-10.814-1.736-12.242-7.072-1.43-5.334 1.735-10.82 7.068-12.25 5.334-1.43 10.815 1.738 12.244 7.074z"/></svg>
                  <div class='productLinkContent'>
                    <h3 class="linkTitle">Subscriptions</h3>
                    <p class="linkSub">The smart engine for recurring&nbsp;payments.</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="linkContainer item-connect"
                  href=""
                  data-analytics-action="connect"
                  data-analytics-source="nav_dropdown"
                >
                  <svg viewbox="0 0 48 48"><path fill="#68D4F8" class="hover-fillLight" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0c1.363 0 2.698.12 4 .338V15h5v5h14.662c.218 1.302.338 2.637.338 4z"/><path fill="#FFF" d="M16.99 29.966L17 17l-5.55-.006a1.02 1.02 0 0 0-.725.3L2.65 25.446a1.55 1.55 0 0 0-.44 1.28c1.22 9.944 9.1 17.825 19.042 19.047.472.058.945-.104 1.28-.44l8.172-8.076c.192-.193.3-.453.3-.725L31 31l-12.985-.01a1.023 1.023 0 0 1-1.024-1.024z"/><path fill="#217AB7" class="hover-fillDark" d="M47.697 20.195L37.194 30.702a1.03 1.03 0 0 1-.726.3h-5.462V18.03c0-.567-.46-1.025-1.025-1.025H16.994V11.52c0-.274.108-.534.3-.726L27.783.3C38 1.916 46.07 9.98 47.698 20.194z"/></svg>
                  <div class='productLinkContent'>
                    <h3 class="linkTitle">Connect </h3>
                    <p class="linkSub">Everything platforms need to get sellers&nbsp;paid.</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <div class="linkGroup">
            <ul class="productsGroupSecondary">
              <li>
                <a
                  class="linkContainer item-sigma"
                  href=''
                  data-analytics-action="sigma"
                  data-analytics-source="nav_dropdown"
                >
                  <svg viewBox="0 0 48 48"><path class="hover-fillLight" d="M24 48c-2.6 0-5-.3-7.2-1.1V35.2H4v2.1c-2.6-4-4-8.6-4-13.3C0 12.6 7.8 3.2 18.4.6V4h14.4V1.6C41.8 5.1 48 13.8 48 24c0 13.3-10.7 24-24 24z" fill="#beb0f4"/><path class="hover-fillDark" d="M45.6 24H32.8v17.6H17.6v-.2 5.8c-6.4-1.8-11.7-6.1-14.9-12 2.1-6.6 8-10.9 14.9-11.2V.8C19.7.3 21.9 0 24 0c3.4 0 6.7.6 9.6 1.9v8c0 6.1 4.5 10.9 10.2 11.7 1 .2 1.8 1.3 1.8 2.4z" fill="#7356b6"/><path d="M45.6 24c0 1.1-.8 2.1-1.8 2.2-5.8 1-10.2 5.8-10.2 11.7v5.3c-3 1.4-6.2 2.2-9.6 2.2-2.2 0-4.3-.3-6.4-1V40c0-7 5.8-13 12.5-13.8C31.2 26 32 25.1 32 24h13.6zM4 15.7C6.6 9.8 11.5 5.3 17.6 3.4V8c0 7 5.8 12.8 12.5 13.8 1.1.2 1.9 1.1 1.9 2.2H17.9C12 24 6.7 20.6 4 15.7z" fill="#FFF"/></svg>
                  <div class='productLinkContent'>
                    <h3 class="linkTitle">Sigma <span class='new-badge'>New</span></h3>
                    <p class="linkSub">Your business data at your&nbsp;fingertips.</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="linkContainer item-relay"
                  href=''
                  data-analytics-action="relay"
                  data-analytics-source="nav_dropdown"
                >
                  <svg viewbox="0 0 48 48"><path fill="#FFA27B" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"/><path fill="#C23D4B" class="hover-fillDark" d="M24 12.5c8.285 0 15 6.828 15 15.25S32.285 43 24 43c-8.284 0-15-6.828-15-15.25S15.716 12.5 24 12.5z"/><path fill="#FFF" d="M25 38.925v6.288a.787.787 0 0 1-.788.787h-.424a.787.787 0 0 1-.788-.788v-6.287c-3.668-.49-6.5-3.623-6.5-7.425a7.5 7.5 0 0 1 15 0c0 3.802-2.832 6.935-6.5 7.425z"/></svg>
                  <div class='productLinkContent'>
                    <h3 class="linkTitle">Relay</h3>
                    <p class="linkSub">Sell your products in other mobile&nbsp;apps.</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="linkContainer item-atlas"
                  href=""
                  data-analytics-action="atlas"
                  data-analytics-source="nav_dropdown"
                >
                  <svg viewbox="0 0 48 48"><path fill="#FCD669" class="hover-fillLight" d="M24 0c13.255 0 24 10.745 24 24S37.255 48 24 48 0 37.255 0 24 10.745 0 24 0z"/><path fill="#CE7C3A" class="hover-fillDark" d="M24.012 1.834c.366.005.73.196.92.575l16.825 33.72c.396.79-.314 1.685-1.175 1.48L24 33.626V1.834h.01z"/><path fill="#FFF" d="M24 1.834v31.794l-16.584 3.98A1.043 1.043 0 0 1 6.24 36.13L23.067 2.41c.195-.39.572-.58.947-.576H24z"/></svg>
                  <div class='productLinkContent'>
                    <h3 class="linkTitle">Atlas</h3>
                    <p class="linkSub">The best way to start an internet&nbsp;business.</p>
                  </div>
                </a>
              </li>
              <li>
                <a
                  class="linkContainer item-radar"
                  href=""
                  data-analytics-action="radar"
                  data-analytics-source="nav_dropdown"
                >
                  <svg viewbox="0 0 48 48"><path class="hover-fillLight" fill="#F6A4EB" d="M41.364 21.886h6.538c.06.697.098 1.4.098 2.114 0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0c6.833 0 12.993 2.86 17.364 7.442v14.444z"/><path fill="#FFF" d="M37.746 37.4a1.3 1.3 0 0 1 .92-.38c.72 0 1.303.444 1.303 1.163 0 .503-.353.982-.708 1.292-3.484 3.122-8.325 5.53-13.783 5.53-11.75 0-19.486-9.538-19.486-18.83 0-8.72 7.195-16.19 15.25-16.19s11.227 5.54 11.227 5.54L37.747 37.4z"/><path class="hover-fillDark" fill="#9251AC" d="M47.995 24zm0 0c0-.995-.807-1.974-1.802-1.974-1.15 0-1.8.94-1.8 1.83-.09 3.174-1.228 7.127-3.453 10.182-2.355 3.232-6.91 6.956-13.242 6.956-7.625 0-13.213-5.767-13.213-11.925 0-4.3 2.886-7.17 5.828-7.17 1.588 0 2.48.683 2.965 1.312.362.468 1.063.493 1.482.074L40.968 7.032A23.926 23.926 0 0 1 47.995 24z"/></svg>
                  <div class='productLinkContent'>
                    <h3 class="linkTitle">Radar</h3>
                    <p class="linkSub">Modern tools to help beat&nbsp;fraud.</p>
                  </div>
                </a>
              </li>
            </ul>
          </div>

          <ul class="linkGroup linkList prodsubGroup">
              <li>
                <a
                  class="linkContainer item-workswith"
                  href=""
                  data-analytics-action="works-with"
                  data-analytics-source="nav_dropdown"
                >
                  <h3 class="linkTitle linkIcon"><svg width="17" height="17"><path class="hover-fillLight" fill="#87BBFD" d="M15.998 12.495a1.03 1.03 0 0 1-.595.908L8.93 16.395a1.018 1.018 0 0 1-.86 0l-6.473-2.992a1.03 1.03 0 0 1-.594-.908V4.51c.006-.2.07-.39.18-.55L8.5 7.338l7.32-3.38c.108.16.172.35.178.55v7.984z"/><path class="hover-fillDark" fill="#6772E5" d="M15.998 12.495a1.03 1.03 0 0 1-.595.908L8.93 16.395a1.026 1.026 0 0 1-.43.095V7.34l7.32-3.38c.11.16.173.35.18.55v7.984z"/><path class="hover-fillLight" fill="#87BBFD" d="M8.5 5C6.567 5 5 4.228 5 3.275v-1.15h.098c.36.768 1.742 1.34 3.402 1.34 1.66.002 3.043-.572 3.402-1.34H12v1.15C12 4.228 10.433 5 8.5 5z"/></svg>Works with Stripe</h3>
                </a>
              </li>
          </ul>

        </div>
      </div>

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
  <section id="header-section">
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

        <div class="col-md-6 ">
          <img src="assets/images/screenshots/screenshot.png" class="screen-first" alt="XCDHR demo">
        </div>


      </div>
    </div>
  </section>
</header>
  <!-- <header class="page-header">
    <section id="header-section">
      <div class="container">
        <div class="row ">
          <div class="col-md-6 flex-md-first">
            <h1 class="medium-font left-text white-text italics CandItalics">Powerfull cloud HR software<br/> that puts you in control</h1>
            <h4 class="light-font small-margin-top-down white-text">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
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

          <div class="col-md-6 ">
            <img src="assets/images/screenshots/screenshot.png" class="screen-first" alt="XCDHR demo">
          </div>


        </div>
      </div>
    </section>
  </header> -->
</div>


<section class="partners" >
  <div class="h-more">
  <p class="text-center ">
    <button type="button" class="btn  btn-sm b-button">See More</button>
  </p>
  </div>
  <div id="partners">
  <div class="owl-carousel">
  <div>
    <div class="text-center">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="partners-logo">
    </div>
  </div>
  <div>
    <div class="text-center">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="partners-logo">
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
    </div>
  </div>
</section>
<section class="slant-top bottom-mar">
</section>

<section class="video-container promo-left">
  <div class="row ">
    <div class="col-md-4">
      <img src="https://demo.proteusthemes.com/webmarket/wp-content/uploads/sites/5/2014/02/brands_04.gif" class="illustraions" align="middle">
    </div>
    <div class="col-md-8 outer-flex">
      <div class="inner-flex">
      <h4 class="light-font small-margin-top-down white-text text-center">
        See what XCD is all about
      </h4>
      <div class="video-button">
        Play <span class="round-back"><i class="fa fa-play play-button" aria-hidden="true"></i></span> Video
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
        <img class="illustraions right" src="assets/images/misc/default.png" alt="Card image cap">
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
            zoom: 11,
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
