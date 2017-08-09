<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'meta.php' ?>
<link rel="stylesheet" href="css/nav-bold.css">
<link rel="stylesheet" href="css/animate.css">
</head>
<body>
<?php include 'header_bold.php' ?>

<div class="main-content" id='main'>
  <header class="color-header">
    <section id="header-section">
      <div class="container">
        <div class="row ">
          <div class="col-md-12 flex-md-first">
            <h2 class="light-font front">Carrers

            </h2>
          </div>
        </div>
      </div>
    </section>
  </header>
</div>

<section class="">
  <div class="tabs-animated">

  <!-- Tab panes -->
  <div class="container-full">
    <div class="card">
      <h4 class="card-title">Come and join us at XCD</h4>
      <p class="card-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br/> sed do eiusmod tempor incididunt ut labore et dolore<br/> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
      <a href="" class="btn btn-primary"> Current Vacancies</a>
    </div>

    <div class="container">
      <h4 class="testimonials-text"> “<br/>
        It’s great being part of a growing company operating at<br/>
         the leading edge of technology on a global scale. <br/>
         It’s a dynamic and agile business, meaning challenges are<br/>
          varied which creates an exciting environment. <br/>
          I feel I can make a real impact and am recognised for my achievements.<br/>
           However the best part has to be the people – warm, <br/>
           friendly and a pleasure to work with.<br/>”</h4>

           <p class="testimonials-author"> - James Beezley, Client Success Manager</p>
    </div>
  </div>
  </div>
</section>
<section class="video-section">
  <div class="video-box">
    <h3 class="title-main text-center"> XCD Team Building in Nandhi Hills v2 </h3>
    <div class="video-button">
      Play <a class="btn"  data-toggle="modal" data-target="#modal-fullscreen"> <i class="fa fa-play play-button" aria-hidden="true"></i></a> Video
    </div>
    <!-- <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal-fullscreen">
      Launch modal fullscreen
    </button> -->
  </div>
</section>

<!-- Button modal fullscreen -->


<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fade" id="modal-fullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


       <iframe width="100%" height="100vh" style="height:100vh" id="video" src="http://www.youtube.com/embed/v23UBKDY6_M">
       </iframe>

</div>

</body>
<?php include 'script.php' ?>
<script>
$(document).ready(function(){
  var videoSrc = $("#modal-fullscreen iframe").attr("src");

$('#modal-fullscreen').on('show.bs.modal', function () { // on opening the modal
  // set the video to autostart
  $("#modal-fullscreen iframe").attr("src", videoSrc+"?autoplay=1&showinfo=0&controls=0");
});

$("#modal-fullscreen").on('hidden.bs.modal', function (e) { // on closing the modal
  // stop the video
  $("#modal-fullscreen iframe").attr("src", null);
});



});
</script>

</html>
