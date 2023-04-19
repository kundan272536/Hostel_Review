<?php
include("header.php");
?>
<style>
  .paragraph-1{
    border: 2px solid black;
    height: 60%;
    width: 29%;
    padding: 30px;
    margin-left: 3%;
    box-shadow: 10px 10px 10px 12px rgb(72, 68, 68);
    background-color: #f9ccac;
    color: rgb(11, 10, 10);
    text-align: justify;
    font-size: large;
    font-style:oblique;
    margin-top: 10px;
    border-top-left-radius: 80px; 
    border-bottom-right-radius: 80px; 
  }
  .paragraph-2{
    border: 2px solid black;
    height: 60%;
    width: 29%;
    padding: 30px;
    margin-left: 10%;
    box-shadow: 10px 10px 10px 12px rgb(72, 68, 68);
    background-color: #f4a688;
    color: rgb(11, 10, 10);
    margin-left: 35px;
    margin-right: 0px;
    margin-top: 250px;
    text-align: justify;
    font-size: large;
    font-style:oblique;
    border-top-right-radius: 100px; 
    border-bottom-left-radius: 100px; 
  }
  .paragraph-3{
    color: white;
    border: 2px solid black;
    height: 60%;
    width: 29%;
    padding: 30px;
    margin-left: 3%;
    box-shadow: 10px 10px 10px 12px rgb(72, 68, 68);
    background-color: #e0876a;
    color: rgb(11, 10, 10);
    text-align: justify;
    font-size: large;
    font-style:oblique;
    margin-top: 10px;
    border-top-left-radius: 80px; 
    border-bottom-right-radius: 80px; 
  }
  .hostel-heading{
    font-style:oblique;
    color: white;
    border-radius: 5px;
    margin-left: 50px;
    margin-right: 50px;
    background-color: #d6d4e0;
    box-shadow: 8px 8px 8px 6px #EDF7FA;
    
}
#two-paragraph{
  background-color: #b8a9c9;
  display: flex;
  flex-direction: row;
}

</style>
<div class="hostel-heading">
  <marquee behavior="" direction="right">
  <h1>Welcome to Chandigarh University Hostels</h1>
  </marquee>
  <marquee behavior="" direction="left">
  <h2>Home Away from Home</h2>
  </marquee>
</div>  
<div class="hostels">
  <div class="row">
     <!-- <div class="col-lg-6 col-md-6 col-sm-12 ">
        <img src="/images/hs10.jpg" class="img-fluid" alt="" style="margin:20px;" >      
      <a href="girls-hostels">
        <button type="button" class="btn btn-dark btn-lg">Girls` Hostels Details</button>
      </a>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-12">
      <a href="boys-hostels">
        <img src="/images/hs9.jpg" class="img-fluid"  alt="" style="margin:20px;" >
      </a>
      <a href="boys-hostels">
        <button type="button" class="btn btn-dark btn-lg">Boys` Hostels Details</button>
      </a>
     </div>           -->
     
     <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card" style="margin-left: 50px;" >
        <img src="images/hs10.jpg" class="card-img-top" alt="..." >
        <div class="card-body">
          <h5 class="card-title">Girls Hostels</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="girls-hostels.php" class="btn btn-primary">For More Details</a>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6">
      <div class="card" style="margin-left: 50px;" >
        <img src="images/hs9.jpg" class="card-img-top" alt="..." >
        <div class="card-body">
           <h5 class="card-title">Boys Hostels</h5>
           <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="boys-hostels.php" class="btn btn-primary">For More Details</a>
        </div>
      </div>
        
    </div> 
</div>
<div id="two-paragraph">
<div class="paragraph-1" >
  <p >Hostels are often associated with unforgettable memories. For many travelers,
     hostels offer a unique opportunity to meet people from different parts of the 
     world and create lasting connections. The shared spaces and communal areas of
     hostels, such as common rooms and kitchens, are ideal places to socialize, 
     exchange stories and experiences, and make new friends.Staying in a hostel 
     can also be an adventure in itself. From sleeping in a bunk bed to navigating
      communal bathrooms, hostel life can be both exciting and challenging. But it's 
      these experiences that often make for the most cherished memories. Overall, hostels 
      are a unique and memorable part of the our life.
     </p>
 </div>
 <div class="paragraph-2"  >
  <p>Chandigarh University Campus has separate hostels for boys and girls with 
     all modern facilities and attached mess. The hostel mess serves fresh and 
     hygienic food. You will be provided with facilities like internet, music 
     room, and common room with TV & cable facility, salon facilities, room 
     for indoor games and a reading room with a collection of national/international 
     newspapers, magazines, etc. The hostels’ houses have a fully equipped gym and 
     separate courts for Volleyball, BasketBall, and Badminton. The concerned and 
     highly-experienced staff looks after the university assets and ensures that the 
     hostel remains responsive all the time.</p>
 </div>
 <div class="paragraph-3" >
  
  <p>Chandigarh University hostels offer a home away from home,
With comfortable living spaces that you can call your own,With 
modern amenities and round-the-clock security,You can focus on 
your studies without any worry.The hostels are designed to fostera 
sense of community,With shared spaces for socializing and creating 
unity,From cultural events to sports and recreational activities,
There's always something to keep you engaged and happy.With a range 
of options to suit every need and budget,Chandigarh University 
hostels provide a comfortable sojourn,Whether you're a first-year 
student or a seasoned scholar,The hostels are a great place to start 
your CU adventure.</p>
 </div>
</div>

</div>
<?php
include("footer.php");
?>