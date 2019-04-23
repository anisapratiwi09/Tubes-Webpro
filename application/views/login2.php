<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Masuk ke Twitter</title>

	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

  #block{
  display: block;
  text-align: center;
  padding: 13px 12px;
  text-decoration: none;
  margin-left: 100px;
  margin-bottom: -20px;
  padding-top: 15px;
  padding-left: -5px;
}

#block:hover{

  border-bottom: 2px solid #1c94e0;
  color: #1c94e0;
}
#block1{
  display: block;
  text-align: center;
  padding: 13px 12px;
  text-decoration: none;
  margin-left: 30px;
  margin-bottom: -20px;
  padding-top: 15px;
  padding-left: -5px;
}

#block1:hover{

  border-bottom: 2px solid #1c94e0;
  color: #1c94e0;
}

#wrapper
{
width:850px;
background-color:#fff;
position:relative;
margin-left:200px;
margin-top: 20px;
padding:5px;
height: 320px;
border: 2px solid rgba(0,0,0,0.1);
}
body{
 background-color: #e6ecf0;
}
h1{
    display: block;
    font-size: 2em;
    margin-block-start: 0.67em;
    margin-block-end: 0.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
    font-size: 24px;
    padding-top: 3px;
    padding-left: 80px;
}
#in{
  background-color: #f5f8fa;
  margin-bottom: 0px;
  height: 106.5px;
  position: relative;
  width:846px;
  margin-left: -5px;
  margin-top: 20px;
  padding-top: 15px;
  font-size: 14px;
}
.username{
    display: inline-block;
    width: 210px;
    padding: 6px;
    margin: 0px 10px 0px 0px;
    outline: 0;
    background-color: #fff;
    border: 1px solid #e6ecf0;
    border-radius: 2px;
    margin-left: 80px;
    font-size: 12px;
}
.password{
  display: inline-block;
    width: 210px;
    padding: 6px;
    margin: 0px 10px 0px 0px;
    outline: 0;
    background-color: #fff;
    border: 1px solid #e6ecf0;
    border-radius: 2px;
    margin-left: 80px;
    margin-top: 16px;
    font-size: 12px;
}
.username:focus{
  border: 1px solid #1da1f2;
}
.password:focus{
  border: 1px solid #1da1f2;
}
.masuk{
  background-color: #1da1f2;
    border: 1px solid #1da1f2;
    color: #fff;
    font-weight: bold;
    border-radius: 100px;
    cursor: pointer;
    box-shadow: none;
    font-size: 14px;
    width: 70px;
    height: 30px;
    margin-top: 16px;
    margin-left: 80px;
}
.masuk:hover{
  background-color: royalblue;
  cursor: pointer;
  border: 1px solid royalblue;
}

.ingat{
  font-weight: lighter;
}
.forgot{
  font-weight: lighter;
  color: #1da1f2;
}

.forgot:hover{
  color: #1da1f2;
}

.haha{
  padding-top: 10px;
  padding-left: 70px;
}

.daftar{
  margin-left: 83px;
  padding-top: 16px;
  color: #aab8c2;
}

.aktif{
   margin-left: 83px;
  color: #aab8c2;
}

.navbar{
  list-style-type: none;
  padding: 0;
  margin: 0;
  list-style-type: none;
  border-bottom: 1px solid rgba(0,0,0,0.1);
  background-color: #fff;
}

.navbar li{
  float : left;
  list-style-type: none;
}

li a{
  font-weight: bold;
  color: #66757f;
}

.burung{
  width: 55px;
  height: 34px;
  margin-top: -20px;
}

.sign{
  color: #1da1f2;
}

.sign:hover{
  color: #1da1f2;
}

.active{
  color: #1da1f2;
}
.active:hover{
  color: #1da1f2;
}



	</style> 


</head>
<body>
<header>
  <div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
      <ul class="nav navbar-nav">
        <li class="home">
          <a href="#fake"id="block"><img src="../assets/img/bird11.png" class="burung">Home</a>
        </li>
        <li>
          <a href="#fake"id="block1">About</a>
        </li>

    </div>
  
  </div>

</div>
</header>

  <div id="wrapper">
    <h1>Log in to Twitter</h1>
    <form action="<?php echo base_url('Controller/aksi_login'); ?>" method="post">
      <input type="text" class="username" name="username" placeholder="Phone, email or username"></br>
      <input type="password" class="password" name="password" placeholder="Password"></br>
      <form method="post" action="/tubes/Controller/berandaa">
        <button type="submit" class="masuk">Log in</button>
      </form>
    </form>
    <label class="haha">
      <input type="checkbox" value="1" name="" class="ingat">Remember me
      <span> .</span>
      <a href="" class="forgot"> Forgot password?</a>
    </label>
    <div id="in">
      <p class="daftar">New to Twitter? <a href="" class="sign">Sign up now >></a></p>
      <p class="aktif">Already using Twitter via text message?<a href="" class="active"> Active your account >></a></p>
    </div>
  </div>
</body>
</html>