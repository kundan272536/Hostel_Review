<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- aos css link  -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
.container{
  background-color: #e0ffff;
  color: black;
  border-radius: 10px;
  position: absolute;
  top: 25%;
  left: 39%;
  height: 350px;
  width: 308px;
  box-shadow: 10px 10px 10px black;
}
.btn{
  margin: 4px;
  width: 280px;
}
input{
  margin: 5px;
}
.image{
  position: relative;
  filter: blur(1px);
  -webkit-filter: blur(1px);
  margin-top: 0px;
  background-size: cover;
}
label{
  margin-left: 5px;
}
</style>
<script>
        function togglePassword() {
         var passwordField = document.getElementById("password");
         if (passwordField.type === "password") {
             passwordField.type = "text";
          } else {
           passwordField.type = "password";
          }
          }
</script>  
  </head>
<body>
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
  <div class="image">
    <img src="https://img.jagranjosh.com/images/2022/May/2752022/campus3.jpg" alt="" style="height: 0%;width: 100%;">
  </div>
  </div>
  </div>
  <div id="signin-page">
  <div class="container" data-aos="fade-right">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <form action="registration.php" method="post" autocomplete="off">
          <h2>Signup</h2>
          <div class="form-group">
            <label for=""> User Id</label>
            <input type="text" name="user" class="form-control"   placeholder="enter your uid..." required>
          </div>
          <div class="form-group">
            <label for="">Create Password</label>
            <input type="password" name="password" id="password" class="form-control"   placeholder="enter your password..." required>
            <input type="checkbox" onclick="togglePassword()" id="password">Click Here To Show Password
          </div>
          <button type="submit" class="btn btn-lg btn-primary">Signin</button>
          <a href="login.php"><button class="btn btn-lg btn-primary">Login</button></a>
        </form>
        </div>
      </div> 
  </div>     
</body>
<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
   AOS.init({
      duration:800,
      delay:300
   });

</script>
</html>