<?php
$con=mysqli_connect("localhost","root","","hostel_review");
if(isset($_POST['submit'])){
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $phonenumber=$_POST["phonenumber"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $query="INSERT INTO contact_details VALUES ('','$fname','$lname','$phonenumber','$email','$gender')";
    mysqli_query($con,$query);
    echo "<script>alert('Data Inserted successfully');</script>";
}
mysqli_close($con);
?>
<?php
include("header.php");
?>
<style>
    .contact-page{
        background-image: url('images/img9.jpg');
        background-size: 100%;
        background-repeat: no-repeat;
        color: black;
        height: 100%;
    }
    form {
			background-color: transparent;
			opacity: 0.8;
			padding: 20px;
			border-radius: 10px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
		}
		input {
			padding: 10px;
			margin: 10px;
			border-radius: 5px;
			border: none;
			background-color: rgba(255, 255, 255, 0.8);
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
			font-size: 16px;
			color: #333;
		}
        
        .g-img-1{
            margin:20px;
            margin-bottom: 0;
            border: 2px solid black;
        }
        .g-img-2{
            margin:20px;
            margin-bottom: 0;
            border: 2px solid black;

        }
        .g-img-3{
            margin:20px;
            margin-bottom: 0;
            border: 2px solid black;
        }
        .g-img-4{
            margin:20px;
            margin-bottom: 0;
            border: 2px solid black;
        }
        .left-paragraph{
         margin: 20px;  
         margin-left: 80px; 
         border: 2px solid black;
         border-radius: 10px;
         height: 400px;
         width: 600px;
         box-shadow: 10px 10px 10px 12px #DEE5DD;
         background-color: #f7cac9;
         text-align: justify;
         font-size: large;
         font-style:oblique;
         padding: 80px;
        }
        .right-paragraph{
            margin: 20px;
            margin-left: 80px; 
            border: 2px solid black;
            border-radius: 10px;
            height: 400px;
            width: 600px;
            box-shadow: 10px 10px 10px 12px #E2DBDF;
            background-color: #f7786b;
            text-align: justify;
            font-size: large;
            font-style:oblique;
            padding: 80px;
        }
        .right-paragraph .p{
            margin: 20px;
        }
</style>
<div class="contact-page">
    <div class="left-side">
     <img src="images/simg1.png" alt="">
    </div>
    <div class="right-side">
    <form action=" " method="post">
		<h2>Contact Us</h2>
		<label for="fname">FName:</label>
		<input type="text" id="name" name="fname" required><br>
        <label for="lname">LName:</label>
        <input type="text" id="name" name="lname" required><br>
        <label for="phonenumber">Mobile:</label>
        <input type="tel" id="number" name="phonenumber" pattern="[0-9]{10}" required><br>
		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required><br>
        <label for="male">Gender: </label>
        <select name="gender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
		<button type="submit" name="submit" class="btn btn-primary btn-large" value="submit">Submit</button>
	</form>
    </div>
</div>
<div class="gallery">
    <div class="row">
     <div class="col col-sm-6 col-lg-6 col-md-6">
     <div class="g-img-1">
     <img src="images/g-img-1.jpg" alt="" width="700" height="400">
    </div>
     </div>
     <div class="col col-sm-6 col-lg-6 col-md-6">
        <div class="right-paragraph">
        <p>One important aspect of degree completion is creating a plan to 
            finish your coursework and meet all the requirements for 
            graduation. This might involve taking classes on a part-time 
            basis, working with your academic advisor to map out a course 
            schedule, or pursuing online or distance learning options. 
            It's also important to stay motivated and focused on your 
            goals, even if you face challenges along the way.</p>
        </div>
     </div>
     <div class="col col-sm-6 col-lg-6 col-md-6">
        <div class="left-paragraph">
        <p>Degree completion refers to the process of finishing a degree program
             that you have started. This can be a bachelor's degree, a master's 
             degree, or any other level of higher education. There are many reasons 
             why someone might not complete their degree program right away, 
             such as financial difficulties, personal responsibilities, or health 
             issues. However, completing your degree can open up new opportunities 
             for career advancement, personal growth, and intellectual stimulation.</p>
        </div>
     </div>
     <div class="col col-sm-6 col-lg-6 col-md-6">
     <div class="g-img-2">
     <img src="images/g-img-3.jpg"   alt="" width="700" height="400">
    </div>
     </div>
     <div class="col col-sm-6 col-lg-6 col-md-6">
     <div class="g-img-3">
    <img src="images/g-img-4.jpg" alt="" width="700" height="400">
    </div>
     </div>
     <div class="col col-sm-6 col-lg-6 col-md-6">
        <div class="right-paragraph">
        <p>Chandigarh University is a private university located in the city of 
            Chandigarh, India. It was established in 2012 and is recognized by 
            the University Grants Commission (UGC). The university offers 
            undergraduate, postgraduate, and doctoral programs in various 
            fields, including engineering, management, law, pharmacy, and computer 
            applications.According to the university's website, it has a diverse 
            student community, with students from over 35 countries enrolled in its 
            programs.</p>
        </div>
     </div>
     <div class="col col-sm-6 col-lg-6 col-md-6">
        <div class="left-paragraph">
        <p>Chandigarh University is known for its state-of-the-art infrastructure, 
            modern facilities, and highly experienced faculty. The university has 
            a sprawling campus spread across 200 acres, with world-class laboratories, 
            libraries, and sports facilities. The university has tie-ups with several 
            international universities and offers opportunities for international 
            exposure and exchange programs.</p>
        </div>
     </div>
     <div class="col col-sm-6 col-lg-6 col-md-6">
     <div class="g-img-4">
    <img src="images/g-img-6.jpg" alt="" width="700" height="400">
    </div>
     </div>
    </div>    
</div>
<?php
include("footer.php");
?>