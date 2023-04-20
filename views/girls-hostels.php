<?php
include("header.php");
$con=mysqli_connect("localhost","root","","hostel_review");
$menu="SELECT * FROM menu";
$menuRetrieve=mysqli_query($con,$menu);
$retrieve="SELECT * FROM girls_feed_back";
$result=mysqli_query($con,$retrieve);
mysqli_close($con);
 ?>
<style>

  /*facility images*/
  .hostels-facility img{
    border-radius: 50%;
    border: 2px solid black;
    background-color: #EEF1FF;
    box-shadow: 0px 8px 10px black;
  }
  .hov:hover{
  width: 230px;
  height: 230px;
  background-color: #B9E9FC;
  border-color: #675D50;
  transition-duration: 0.5s;
}

/*lable*/
  label, input, select {
  display: inline-block;
  vertical-align: middle;
  margin: 10px;
  font-size: 20px;
}
input, select {
  width: 350px;
  height: 40px;
  border-radius: 5px;
}
.rating{
  background-color: #ECF2FF;
  padding: 10px;
 
}
h3, h1{
  font-family: fantasy;
  color: red;
}
.girls-rating{
  position: relative;
  border: 2px solid black;
  border-radius: 10px; 
  box-shadow: 10px 10px 10px black; 
}
.mess-menu{
  background: rgb(33,210,246);
    background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(187,239,178,1) 0%, rgba(185,255,252,0.5355392156862745) 7%, rgba(236,248,250,1) 67%, rgba(137,231,227,0.7736344537815126) 97%, rgba(167,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%, rgba(236,163,170,1) 100%);

}
.rating{
  background: rgb(33,210,246);
    background: linear-gradient(90deg, rgba(33,210,246,1) 0%, rgba(33,246,244,1) 0%, rgba(3,6,6,1) 0%, rgba(245,25,14,1) 0%, rgba(246,245,175,1) 0%, rgba(185,255,252,0.5355392156862745) 18%, rgba(236,248,250,1) 67%, rgba(137,231,227,0.7736344537815126) 85%, rgba(236,163,170,1) 100%, rgba(233,247,159,0.7736344537815126) 100%, rgba(68,147,182,1) 100%);
  
}
</style>
<div class="hostel-heading">
  <marquee behavior="" direction="">
  <h1>Hostels is the Best Place for Students</h1>
  </marquee>
</div>
<div class="girls-hostels">
<div class="row" >
     <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card" style="margin-left: 50px;margin-top: 5px;" >
          <img src="images/girls/shukhna-a.jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">Shukhna-A</h5>
            <p class="card-text" style="text-align: justify;">Our hostels have a homely feel, it is the replication of that feeling you have when you are at your own home</p>
          </div>
        </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card" style="margin-left: 50px;margin-top: 5px;" >
          <img src="images/girls/shukhna-b.jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">Shukhna-B</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card" style="margin-left: 50px;margin-top: 5px;" >
          <img src="images/girls/shivalik.jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">Shivalik</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card" style="margin-left: 50px;margin-top: 5px;" >
          <img src="images/girls/lc.jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">LE Corbusier</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
     </div>
     <div class="col-lg-6 col-md-6 col-sm-6">
        <div class="card" style="margin-left: 50px;margin-top: 5px;" >
          <img src="images/girls/tagore.jpg" class="card-img-top" alt="..." >
          <div class="card-body">
            <h5 class="card-title">Tagore</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
     </div>
</div>
</div>
<!--Hostel Fasility-->
       <h1>Facilities at Hostels</h1>
     <div class="hostels-facility">
        <div class="row"> 
        <div class="col-lg-3 col-md-4 col-sm-6" > 
            <img  src="images/img/electric.png" class="img-fluid hov" alt="">
             <p>Electricity Services 24X7</p>
        </div> 
        <div class="col-lg-3 col-md-4 col-sm-6"style="">
            <img src="images/img/router.png" class="img-fluid hov" alt="">
           <p>Wifi Services 24X7</p>    
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/reading.png" class="img-fluid hov" alt="">
           <p>Well- equipped reading rooms</p>      
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/roomcleaning.png" class="img-fluid hov" alt="">
                <p> Room cleaning Services</p>  
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/visitor.png" class="img-fluid hov" alt=""> 
                <p> Visitors & Guest Room </p>    
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/saloon.png" class="img-fluid hov" alt="">
             <p> Saloon Services</p>      
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/mess.png" class="img-fluid hov" alt="">
              <p>Mess Services </p>      
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/canteen.png" class="img-fluid hov" alt="">
              <p>Night Canteen & Tuck Shops</p> 
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/lift.png" class="img-fluid hov" alt="">
              <p>Lift Services</p>     
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
            <img src="images/img/gym.png" class="img-fluid hov" alt="">
             <p>Gym Services</p>    
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/g-warden.png" class="img-fluid hov" alt="">
         <p>Warden</p>    
    </div>
    <div class="col-lg-3 col-md-4 col-sm-6">
        <img src="images/img/dispencary.png" class="img-fluid hov" alt="">
         <p>Dispencary</p>    
    </div>
        </div>  
     </div>
     <div class="review-page">
     <h4>If you want give feedback <a href="girls-review.php">click here</a> </h4>
    </div>
    <div class="menu">
      <h4>Form related to mess menu <a href="breakfast.php">click here</a></h4>
    </div>
    <h3>Regular Mess Menu</h3>
    <div class="mess-menu">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="data-fetch">
                        <div class="card-body">
                            <table class="table table-bordered text-center">
                                <tr class="bg-dark text-white">
                                    <td>Day</td>
                                    <td>Date</td>
                                    <td>Breakfast</td>
                                    <td>Lunch</td>
                                    <td>Snacks</td>
                                    <td>Dinner</td>
                                </tr>
                                <tr>
                                    <?php
                                    while($row=mysqli_fetch_assoc($menuRetrieve))
                                    {?>
                                    <td><?php echo $row['day'];?></td>
                                    <td><?php echo $row['date'];?></td>
                                    <td><?php echo $row['breakfast'];?></td>
                                    <td><?php echo $row['lunch'];?></td>
                                    <td><?php echo $row['snacks'];?></td>
                                    <td><?php echo $row['dinner'];?></td>
                                    </tr>
                                    <?php
                                    }?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h3>All Reviews Given By Girls</h3>
     <div class="rating">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="data-fetch">
          <div class="card-body">
          <table class="table table-bordered text-center">
          <tr class="bg-dark text-white">
            <td>Name</td>
            <td>Hostels</td>
            <td>Facility</td>
            <td>Rating</td>
            <td>Review</td>
          </tr>
          <tr>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
              ?>
            <td><?php echo $row['name'];?></td>
            <td><?php echo $row['hostels'];?></td>
            <td><?php echo $row['facility'];?></td>
            <td><?php echo $row['rating'];?></td>
            <td><?php echo $row['review'];?></td>
            </tr>
            <?php
            }
            ?>
          </table>
          </div>
          </div> 
        </div>
      </div>   
        </div>
     <?php
     include("footer.php");
     ?>