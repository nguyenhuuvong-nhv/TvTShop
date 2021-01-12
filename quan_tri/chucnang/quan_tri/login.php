<?php 
    if(isset($_SESSION['user'])){
        header('location: trang_chu.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login</title>
    </head>
    <body style="width:70%;margin: 0 auto">
        <form action="" method="POST" >
            <div class="imgcontainer">
                <img src="../images/admin.jpg" alt="Avatar" class="avatar" width="250" height="250">
            </div>

            <div class="container">
                <label for="uname"><b>Tên Đăng Nhập</b></label>
                <input type="text" placeholder="Nhập Tên Đăng Nhập ..." name="username" required>

                <label for="psw"><b>Mật Khẩu</b></label>
                <input type="password" placeholder="Nhập Mật Khẩu ..." name="password" required>

                <button type="submit" name="submit">Đăng Nhập</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Nhớ đăng nhập của tôi
                </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
                <span class="psw">Quên <a href="#">mật khẩu?</a></span>
            </div>
        </form>

    </body>
</html>
<style>
* { 
	margin: 0; 
	padding: 0; 
	list-style: none; 
	box-sizing: border-box !important;
	font-family: UTM Neo Sans Intel Regular;
}
body { 
	font: 70%  UTM Neo Sans Intel Regular, Arial, Helvetica, sans-serif;
	background: #f4f4f4;
	width: 100%;
	background: #f5f5f5;
}
main{
	width: 95%;
	margin: 20px auto;
}
.submit{
	background: white;
	color: green;
	border: 2px solid green;
	padding: 5px 15px;
	outline: none;
	border-radius: 4px;
	text-transform: uppercase;
	font-weight: bold;
	animation: .3s ease;
	cursor: pointer;	
}
.submit:hover{
	background: green;
	color: #fff;
	box-shadow: 2px 3px 4px rgba(30,160,60,0.3);
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
  box-sizing: border-box !important;
}

.container {
  padding: 16px;
  background-color: white;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}


button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

textarea{
	width: 100%;
}
</style>

