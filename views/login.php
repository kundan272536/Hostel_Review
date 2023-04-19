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
body{
  background-image: url('https://img.jagranjosh.com/images/2022/May/2752022/campus3.jpg');
  background-repeat: no-repeat;
  background-size: 100% ;
  color: white;
}
.container{
  margin-top: 20%;
  margin-right: 20%;
  height: 300px;
  width: 40%;
}
.btn{
  margin: 4px;
  width: 280px;
}
</style>
</head>
<body>
  <div class="container">
      <div class="row ">
        <div class="col-lg-6">
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