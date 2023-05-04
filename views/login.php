<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<style>
.container{
  color: white;
  position: absolute;
  top: 25%;
  left: 39%;
  height: 300px;
  width: 308px
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
</style>
</head>
<body>
  <div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
  <div class="image">
    <img src="https://img.jagranjosh.com/images/2022/May/2752022/campus3.jpg" alt="" style="height: 0%;width: 100%;">
  </div>
  </div>
  </div>
  <div class="container">
      <div class="row ">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <form action="validation.php" method="post" autocomplete="off">
          <h2>Login Form</h2>
          <div class="form-group">
            <label for=""> User Id</label>
            <input type="text" name="user" class="form-control"   placeholder="enter your uid..." required>
          </div>
          <div class="form-group">
            <label > Password</label>
            <input type="password" name="password" class="form-control"  placeholder="enter your password.." required >
          </div>
          <button type="submit" class="btn btn-lg btn-primary  ">Login</button>
        </form>
        <a href="signin.php" >
          <button  class="btn btn-lg btn-primary">Signin</button>
        </a>
        </div>    
</div>
</div>
</body>
</html>