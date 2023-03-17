<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
html{
  height:100%;
}

body{
  margin: 0;
  padding:0;
  font-family: sans-serif;

}
.login-box{
  position: absolute;
  top: 30%;
  left: 40%;
  box-sizing: border-box;
  border-radius: 100px;


}
.login-box h3{
  margin: 0 0 30px;
  padding: 0;
  color: black;
  text-align: center;
}
.login-box .user-box{
  possion: relative;
}
.login-box .user-box input{
  width: 100%;
  padding: 10px 0;
  font-size: 16px;
  color: black;
  margin-bottom: 30px;
  border: none;
  border-bottom: 2px solid #5B638A;
  outline:none;
  background:transparent;

}
.login-box .user-box label{
  position: absolute;
  top:0;
  left:0;
  padding: 10px 0;
  font-size: 16px;
  color: black;
  pointer-events: none;
  transition: .5s;
}
.login-box .user-box input:focus ~ label,
.login-box .user-box input:valid ~ label{
  top: -20px;
  left:0;
  color: blue;
  font-size: 12px;

}
input type=[submit]{
  position:relative;
  display:inline-block;
  padding: 1000px 20px;
  color: blue;
  font-size: 16px;
  text-decoration: none;
  text-transform: uppercase;
  overflow: hidden;
  transtion: .5s;
  border: 100px;

}
.login-box a:hover{
  background: blue;
  color: black;
  border-radius: 5px;
}

  </style>
</head>
<body>
  <div class="login-box">
  <h3> Get Starts</h3>
    <form>
      <div class="user-box">
        <input type="test" name="" required="">
  <labe>Name</labe>
      </div>

      <div class="user-box">
        <input type="test" name="" required="">
  <labe>Email</labe>
      </div>
      <div class="user-box">
        <input type="password" name="" required="">
  <labe>Pass</labe>


      </div>
    <input type="submit" name="themMonan" value="Sign Up">
  </a>
    </form>

  </div>
</body>
</html>