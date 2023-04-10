<?php
include('e_header.php');
?>
<style>
    .upper-part{
        background-image: url(../images/back-img2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        margin: 2px;
    }
    .chancellor-image img{
        border-radius: 35%;
        padding-top: 20px;
    }
    .text-chancelor p{
        color: white;
        font-size: 30px;
        text-align: justify;
        padding: 120px;
        /* line-height: 40px; */
        /* background: transparent; */
    }
</style>
<div class="heading">
<marquee behavior="alphacoders" direction="right">
  <h1>Welcome To Chandigarh University</h1>
</marquee>
</div>
<div class="home"> 
<div class="row upper-part" >
    <div class="col-lg-6 col-md-6 col-sm-12 chancellor-image">
        <img src="../images/chancellor.jpg" alt="">
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 text-chancelor">
     <p>"I have myself faced financial hurdles while 
        pursuing my education and, thus, want every 
        student to have access to education without 
        facing any monetary constraints."</p>
        <h2>Satnam Singh Sandhu</h2>
        <h3>Chancellor of Chandigarh University</h3>
    </div>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="true">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../images/img6.jpg" class="d-block w-100"   alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Welcome To Chandigarh Universiy</h5>
            <p>Best private universiy in Punjab.<br>The university was established on 
              10 July 2012 by an act of Punjab State Legislature</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/img2.jpg" class="d-block w-100"   alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Chandigarh University has been accredited 'A+' by NAAC in 2019.</h5>
            <p></p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="../images/img1.jpeg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Chandigarh University offers undergraduate, 
              post-graduate and doctorate degrees in various disciplines including engineering, 
              management, computing, cognitive sciences, education, animation and multimedia, 
              tourism, pharma sciences, biotechnology, architecture, commerce, legal studies, 
              agricultural science, media studies, liberal arts and basic sciences.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    
    
  </div> 


<?php
include('e_footer.php');
?>