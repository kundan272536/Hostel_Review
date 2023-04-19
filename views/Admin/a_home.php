<?php
include("a_header.php")
?>
<style>
    .upper-part{
        background-image: url(../images/back-img2.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        margin: 2px;
    }
    .chancellor-image img{
      border-top-right-radius: 170px; 
        border-bottom-left-radius: 150px;
        padding-top: 20px;
    }
    .text-chancelor p{
        color: white;
        font-size: 30px;
        text-align: justify;
        padding: 120px;
        
    }
    .text-chancelor{
      background-image: radial-gradient( circle 311px at 8.6% 27.9%,  rgba(62,147,252,0.57) 12.9%, rgba(239,183,192,0.44) 91.2% );
      border-radius: 25%;
      padding: 20px;
    }
    h2{
     color: yellow;
    }
    h3{
      color: red;
    }
    .heading{
      font-size: 20px;
      margin: 0px 10px;
      padding: 5px;
      color: red;
      background: rgb(33,210,246);
      background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(148,232,249,1) 18%, rgba(230,246,162,1) 66%, rgba(114,110,192,0.7456232492997199) 100%, rgba(233,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%, rgba(137,231,227,0.7736344537815126) 100%, rgba(0,212,255,1) 100%);
    
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
    <!-- <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="../images/company/flip.png" alt="" height="10px" width="400px" >
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="../images/company/flipkart.jpg" alt="" height="10px" width="400px">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="../images/company/flipkart.jpg" alt="" height="10px" width="400px">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="../images/company/flipkart.jpg" alt="" height="10px" width="400px">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="../images/company/flipkart.jpg" alt="" height="10px" width="400px">
      </div>
      <div class="col-lg-4 col-md-4 col-sm-6">
      <img src="../images/company/flipkart.jpg" alt="" height="10px" width="400px">
      </div>
    
  </div>  -->
  </div>
<?php
include("a_footer.php");
?>