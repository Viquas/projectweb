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
            <h2 class="light-font front">We believe in the power of <br/>
              xxx-xxx-xxxx
            </h2>
          </div>
        </div>
      </div>
    </section>
  </header>
</div>

<section class="">
  <div class="tabs-animated">

    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">About Us</a></li>
      <li><a href="#values" data-toggle="tab">Values</a></li>
      <li><a href="#team" data-toggle="tab">Team</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="container-full">
   <div class="tab-content">
    <div class="tab-pane animated fadeInLeft active" id="home">
      <div class="card">
        <h4 class="card-title">simply put</h4>
        <p class="card-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br/> sed do eiusmod tempor incididunt ut labore et dolore<br/> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <br/>
        <p class="card-details"> Here's the story of how we've made that happen</p>
        <i class="fa fa-long-arrow-down card-arrow"></i>
      </div>

      <div class="timeline-section">
        <ul class="timeline">

	<!-- Item 1 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Event 1</span>
				<span class="time-wrapper"><span class="time">2013</span></span>
			</div>
			<div class="desc">My current employment. Way better than the position before!</div>
		</div>
	</li>

	<!-- Item 2 -->
	<li>
		<div class="direction-l">
			<div class="flag-wrapper">
				<span class="flag">Event 2</span>
				<span class="time-wrapper"><span class="time">2011</span></span>
			</div>
			<div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
		</div>
	</li>

	<!-- Item 3 -->
	<li>
		<div class="direction-r">
			<div class="flag-wrapper">
				<span class="flag">Event 3 </span>
				<span class="time-wrapper"><span class="time">2008</span></span>
			</div>
			<div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
		</div>
	</li>

  <!-- Item 4 -->
  <li>
    <div class="direction-l">
      <div class="flag-wrapper">
        <span class="flag">Event 4</span>
        <span class="time-wrapper"><span class="time">2011</span></span>
      </div>
      <div class="desc">My first employer. All the stuff I've learned and projects I've been working on.</div>
    </div>
  </li>

  <!-- Item 5 -->
  <li>
    <div class="direction-r">
      <div class="flag-wrapper">
        <span class="flag">Event 5 </span>
        <span class="time-wrapper"><span class="time">2008</span></span>
      </div>
      <div class="desc">A description of all the lectures and courses I have taken and my final degree?</div>
    </div>
  </li>
</ul>

      </div>
    </div>
    <div class="tab-pane animated fadeInLeft" id="values">
      <div class="card">
        <h4 class="card-title">Our values</h4>
        <p class="card-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br/> sed do eiusmod tempor incididunt ut labore et dolore<br/> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <br/>
        <p class="card-details"> Here's the story of how we've made that happen</p>
        <i class="fa fa-long-arrow-down card-arrow"></i>
      </div>

    </div>
    <div class="tab-pane animated fadeInLeft" id="team">
      <div class="card">
        <h4 class="card-title">Meet Our Team</h4>
        <p class="card-details">Lorem ipsum dolor sit amet, consectetur adipiscing elit,<br/> sed do eiusmod tempor incididunt ut labore et dolore<br/> magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
        <br/>
        <p class="card-details"> Here's the story of how we've made that happen</p>
        <i class="fa fa-long-arrow-down card-arrow"></i>
      </div>
      <div class="team">
        <div class="row">
          <div class="col-sm-4">
            <div class="circular-card">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="circular-card">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="circular-card">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="circular-card">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="circular-card">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="circular-card">
            </div>
          </div>
        </div>
        <div class="career-box">
          <h3 class="career-title"> Wish to join us?</h3>
          <p class="white-text"> Check out what roles are vacant at XCD </p>
        </div>
      </div>
    </div>
   </div>
  </div>
  </div>
</section>

<button id="topBtn" title="Go to top">Top</button>
</body>
<?php include 'script.php' ?>
<script>
$(document).ready(function(){
  function leftSlide(tab){
     $(tab).addClass('animated slideInLeft');
  }

  function rightSlide(tab){
     $(tab).addClass('animated slideInRight');
  }

  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    var url = new String(e.target);
    var pieces = url.split('#');
    console.log($(this).attr('href'));
    var seq=$(this).children('a').attr('data-seq');
    var tab=$(this).attr('href');
    // leftSlide(tab);

  });

});
</script>
<script>

window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {

        document.getElementById("topBtn").style.display = "block";
    } else {
        document.getElementById("topBtn").style.display = "none";
    }
}

$('#topBtn').click(function() {
    $('html, body').animate({scrollTop: 0}, 800);
  return false;
    });

</script>
</html>
