<?php
include('header.php');
?>
<style>
  .about{
    background: rgb(33,210,246);
   background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(246,204,162,1) 0%, rgba(148,232,249,1) 30%, rgba(192,110,192,0.7456232492997199) 100%, rgba(233,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%, rgba(137,231,227,0.7736344537815126) 100%, rgba(0,212,255,1) 100%);
 
  }
  .paragraph-1{

        border-radius: 10px;
        margin: 20px;
        margin-top: 40px;
        border: 2px solid black;
        text-align: justify;
        font-size: 18px;
        font-style:oblique;
        padding: 80px;
        color: black;
        background-color: white;
        box-shadow: 10px 10px 10px black; 
        border-top-left-radius: 80px; 
        border-bottom-right-radius: 80px;       
        }
        .paragraph-2{
          border-radius: 10px;
        margin: 20px;
        margin-top: 40px;
        border: 2px solid black;
        text-align: justify;
        font-size: 18px;
        font-style:oblique;
        padding: 80px;
        color: black;
        background-color: white;
        box-shadow: 10px 10px 10px black;  
        border-top-left-radius: 80px; 
        border-bottom-right-radius: 80px;    
        }
        .hov:hover{
          font-size: 22px;
          color:white ;
          background-color:#8AAAE5  ;
        }
        .about .row img{
          border-radius: 5px;
          border-top-right-radius: 150px; 
        border-bottom-left-radius: 150px;
        }
</style>
<div class="about">
<div class="row">
  <div class="col col-lg-6">
   <img src="images/img2.jpg" alt="" height="500px" width="700px">
  </div>
  <div class="col col-lg-6">
    <div class="paragraph-1 hov">
    <p class="">
  Chandigarh University is a private university located in Mohali, Punjab, India.
  It was established in the year 2012 and has since become one of the fastest-growing 
  universities in India.The university offers a wide range of undergraduate, 
  postgraduate, and doctoral programs in various fields such as engineering, management, 
  law, hospitality, and many more.It is spread over 200 acres of land and has 
  state-of-the-art infrastructure, including well-equipped labs, libraries, sports 
  facilities, and hostels.
  </p>
    </div>
  </div>
  <div class="col col-lg-6">
    <div class="paragraph-2 hov">
    <p class="">
    Chandigarh University has a highly qualified and experienced faculty who are
     committed to providing quality education to their students.The university 
     has collaborations with several reputed international universities, which 
     offer opportunities for students to study abroad and gain international exposure.
     It has a strong industry interface, which enables students to gain practical 
     knowledge and experience through internships and placements.Chandigarh University 
     has received several accolades and awards for its outstanding contribution to the 
     field of education.
  </p>
    </div>
  </div>
  <div class="col col-lg-6">
    <img src="images/img3.jpg" alt="" height="500px" width="700px">
  </div>
</div>
</div>

<?php
include('footer.php');
?>