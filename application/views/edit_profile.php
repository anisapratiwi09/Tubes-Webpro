<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> nama(@username) | Twitter</title>
  
  <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel=stylesheet href="css/bootstrap.min.css">
    <link rel=stylesheet href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src-fluid-fluid="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style type="text/css">

body{
 background-color: #e6ecf0;
}


.navbar{
  list-style-type: none;
  padding: 0;
  margin: 0;
  list-style-type: none;
  background-color: #fff;
  border-bottom: 1px solid rgba(0,0,0,0.25);
 position: fixed;
  width: 100%;
  top: 0;
}

.navbar li{
  float : left;
  list-style-type: none;
}

#block{
  display: block;
  text-align: center;
  padding: 13px 12px;
  text-decoration: none;
  margin-left: 20px;
  margin-bottom: -20px;
  padding-top: 15px;
}

#block:hover{

  border-bottom: 2px solid #1c94e0;
  color: #1c94e0;
}


li a{
  font-weight: bold;
  color: #66757f;
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
    margin-left: 20px;
    margin-top: 8px;
  }
.masuk:hover{
  cursor: pointer;
  background-color: #006dbf;
  border-color: #006dbf;
}
.masuk1{
background-color: #fff;
    border: 1px solid #66757f;
    color :  #66757f;
    font-weight: bold;
    border-radius: 100px;
    cursor: pointer;
    box-shadow: none;
    font-size: 14px;
    width: 80px;
    height: 30px;
    margin-left: 250px;
    margin-top: 15px;
  }
.masuk1:hover{
  cursor: pointer;
  background-color: #E7EBEE;
}
.masuk2{
background-color: #fff;
    border: 1px solid #1da1f2;
    color :  #1da1f2;
    font-weight: bold;
    border-radius: 100px;
    cursor: pointer;
    box-shadow: none;
    font-size: 12px;
    width: 100px;
    height: 30px;
    margin-left: 10px;
    margin-top: 15px;
  }
.masuk2:hover{
  cursor: pointer;
  background-color: #C2E5FF;
}
.profile1{
  cursor: pointer;
  border-radius: 50%; height: 32px; width: 32px; margin-left: 20px; margin-top: 1px;
}


.header1{
  width: 100%;
  height: 320px;
}

.profile{
  cursor: pointer;
  border-radius: 50%; 
  height: 190px; 
  width: 200px; 
  margin-left: 20px; 
  margin-top: 7px;
  border : 5px solid white;
}

.navtengah{
  height: 60px;
     background-color: white;
     border-bottom: 1px solid rgba(0,0,0,0.25);
     list-style-type: none;
     margin-top: -10px;
}

.navtengah li {
  list-style-type: none;
  float: left;
}

.navtengah li a{
  text-decoration: none;
  margin-top: -7px;
}

.blocktengah{
  display: block;
  text-align: center;
  padding: 9.5px 5px;
  text-decoration: none;
  margin-left: 25px;
  padding-top: 10px;
}

.blocktengah:hover{
  border-bottom: 2px solid #1c94e0;
  color: #1c94e0;
}

.active{
  display: block;
  text-align: center;
  padding: 9.5px 5px;
  text-decoration: none;
  margin-left: 25px;
  padding-top: 10px;
  border-bottom: 2px solid #1c94e0;
  color: #1c94e0;
}

.kata{
  font-weight: bold;
    font-size: 12px;
}
.angka{
  font-size: 18px;
    font-weight: bold;
    padding-top: 2px;
    padding-bottom: -3px;
}

#burung:hover{
  cursor: pointer;
}

#kartunama{}

.follow{
  background-color: #fff;
    border: 1px solid #1c94e0;
    color :  #1c94e0;
    font-weight: bold;
    border-radius: 100px;
    cursor: pointer;
    box-shadow: none;
    font-size: 14px;
    width: 100px;
    height: 30px;
}
.follow:hover{
  background-color:#C2E5FF;
}

.pp{
  cursor: pointer;
  border-radius: 50%; height: 32px; width: 32px; 
}

.gmail{

height: 40px; width: 42px; 
border : 1px solid #657786;
padding: 5px;
float: left;

}
.connect a {
  color: #1da1f2; font-family: Segoe UI; font-size: 12px; }

.connect a:hover{
  color:#1da1f2;
}

h4 a{
   color:#1da1f2;
}
h4 a:hover{
   color:#1da1f2;
}

.trending{
    font-family: Segoe UI;
    font-size: 12px;
    color: #1da1f2;
    font-weight: bold;
  }
  .tkecil{
    color: #657786;
    font-style: Segoe UI;
    font-size: 10px; 
  }

  .jarak{
    line-height: 1px;
  }
.trending:hover{
  color:#1da1f2;
}
  .kiri-bawah{
      font-family: Segoe UI;
      color: #657786;
      font-size: 12px;
      word-spacing: 5px;
      padding-left: 2px;
    
}

#search{
    width: 210px;
    padding-top: 6px;
    outline: 0;
    background-color: #E8F0FE;
    border: 1px solid #e6ecf0;
    border-radius: 50px;
    margin-left: 400px;
    font-size: 12px;
}
#search:focus{
  border : 2px solid #1c94e0;
  background-color: white;
}

.fa-comment-alt:hover{

  color: #1c94e0;
  cursor: pointer;
}


.glyphicon-retweet:hover{
  color: #1ECF1B;
  cursor: pointer;
}

.fa-heart-o:hover{
  color: #F08080;
  cursor: pointer;
}

.glyphicon-stats:hover{
  color: #1c94e0;
  cursor: pointer;
}
span .nama{
  color: black;
}


span .nama:hover{
  color: #1c94e0;
  cursor: pointer;
  text-decoration:underline;
}

#tweet:hover{
  cursor: pointer;
   background-color: #F2F2F2; 
}
#tweet{
  background-color: white; padding: 10px;
  margin-top: -18px;
}

p .media-heading{
color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;
}



p .media-heading:hover{
color: #1c94e0;
  cursor: pointer;

}

.glyphicon-menu-down{
  margin-left: 390px;
}

.glyphicon-menu-down:hover{
  color: #1c94e0;
  cursor: pointer;
}

.edit input[type="text"]{
	width: 240px;
	border-radius: 3px;
	background-color: #fff;
    border: 1px solid #C2E5FF;
    color :  #66757f;
    box-shadow: none;
    font-size: 14px;
    height: 35px;
    padding: 5px;
}

.edit input[type="date"]{
	width: 240px;
	border-radius: 3px;
	background-color: #fff;
    border: 1px solid #C2E5FF;
    color :  #66757f;
    box-shadow: none;
    font-size: 14px;
    height: 35px;
    padding: 5px;
}
#theme{
	background-color: #fff;
    border: 1px solid #1da1f2;
    color :  #1da1f2;
    font-weight: bold;
    border-radius: 100px;
    box-shadow: none;
    font-size: 14px;
    width: 240px;
    height: 30px;

}
#theme:hover {
	background-color: #C2E5FF;
}


  </style> 



</head>
<body>
<header>
<div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-collapse navbar-collapse-1 collapse" aria-expanded="true">
      <ul class="nav navbar-nav">
        <li>
          <a href="berandaa"id="block"><span class="glyphicon glyphicon-home" ></span> Home</a>
        </li>
        <li>
          <a href="notifikasis"id="block"><span class="glyphicon glyphicon-bell" ></span> Notifications</a>
        </li>
        <li>
          <a href="#fake"id="block"><span class="glyphicon glyphicon-envelope" ></span> Messages</a>
        </li>
      
      </ul>
      <img id="burung" src="../assets/img/bird11.png" style="margin-top: 5px; margin-left: 200px; width: 60px; height: 35px;">
     
      <div class=" navbar-form navbar-right" style="margin-top: -40px;">
        
          <input type="text" class="form-control-nav" id="search" aria-describedby="search1" style="border-radius: 100px;">
          <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true" style="margin-right: 220px; margin-top: 5px;"></span>
  
       
       <img src="../assets/img/tae.jpg" class="profile1">
 


        <button type="submit" class="masuk">Tweet</button>
        
      </div>
    </div>
  </div>
</div>

  <div>
        <img src="../assets/img/header.jpg" class="header1">
  </div>

  <div class="navtengah" >
    <ul>
      <li style="margin-left: 250px; " >
        <a href="" class="active"><span class="kata">Tweets</span>
        </br><span class="angka">1,951</span></a>
      </li>
      <li>
        <a href="" class="blocktengah"><span class="kata">Following</span>
        </br><span class="angka">2</span></a>
      </li>
      <li>
        <a href="" class="blocktengah"><span class="kata">Followers</span>
        </br><span class="angka">6</span></a>
      </li>
      <li>
        <a href="" class="blocktengah"><span class="kata">Likes</span>
        </br><span class="angka">81</span></a>
      </li>
      <li>
        <a href="" class="blocktengah"><span class="kata">Lists</span>
        </br><span class="angka">0</span></a>
      </li>
      <li>
        <a href="" class="blocktengah"><span class="kata">Moments</span>
        </br><span class="angka">0</span></a>
      </li>
      <li>
        <button type="submit" class="masuk1">cancel</button>
      </li>
      <li><button type="submit" class="masuk2">Save changes</button></li>
      
        
     
    </ul>
  </div>
  <img src="../assets/img/tae.jpg" class="profile" style="margin-top: -150px; margin-left: 50px;">

</header>
<div class="container">
  <!-- profile -->
  <div class="row">
 <div class="col-md-3" style="margin-left: -40px; margin-top: 5px;">
  <div class="container-fluid edit" style="background-color: white; padding: 10px; ">
  	<input type="text" name="" placeholder="">
  	<span style="color: #1b95e0; margin-top: 10px;">@username</span>
  	<input type="text" name="" placeholder="Bio" style="margin-top: 10px;"></br>
  	<input type="text" name="" placeholder="Location" style="margin-top: 10px;"></br>
  	<input type="text" name="" placeholder="Website" style="margin-top: 10px;"></br>
  	 <input type="checkbox" name="" style="margin-top: 10px;" value="Bike"> Show when I'm LIVE<br>
  	 <button type="submit" id="theme" style="margin-top: 10px;">Theme color</button>
  	 <input type="date" name="" placeholder="Birthday" style="margin-top: 10px;"></br>
  </div>
</div>
  <div class="col-md-6" style="margin-left: 5px;width: 600px;">
      <div class="container-fluid " style="background-color: white; padding: 10px; ">
        <div>
          <h4 style="font-weight: bold">Tweets <a href="" style="margin-left: 25px;">Tweets & replies</a></h4>
        </div>
      </div>   
      <br>

      <div class="container-fluid " id="tweet">
        <div>
          <img src="../assets/img/tae.jpg" class="profile1" style="width: 50px;height: 50px; float: left; margin-right: 20px; margin-left: -3px;">
          <span style="color: #657786">
            
              <strong class="nama">Anisa Pratiwi</strong>
            
            <span>@anisapratiwi09</span> 
            <span>.</span>
            <span> waktu</span>
            <span class="glyphicon glyphicon-menu-down"></span>
          </span>
          </div>   
          <div><p style="font-size: 12px; padding-top: 3px; ">test..</p></div>
          <div>
            <div><i class="far fa-comment-alt"></i>
              <span class="glyphicon glyphicon-retweet" style="margin-left: 70px;"> </span>
              <i class="fa fa-heart-o" style="margin-left: 70px;"></i>
              <span class="glyphicon glyphicon-stats" style="margin-left: 70px;"></span>

</div>
          </div>
                 
      </div>    
  </div>
    <!-- right column -->
    <div class="col-md-3" style="margin-left: -10px;">
      <div class="container-fluid" style="background-color:white; padding: 10px; ">
        <div>
          <h3 class="panel-title" style="font-size: 14px; font-family: Segoe UI;  color: #14171A;"><a href="#" style="font-weight: bold;">
            Who to follow</a><span>.</span>
            <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">Refresh</a><span>.</span><a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">View all</a>
          </h3>
          <hr>
          <div class="media-left">
              <img src="<?=base_url(); ?>/assets/img/org.png" alt="Avatar" class="pp">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" >Abror</a>@abrorabong</p>
              <button type="submit" class="follow">Follow</button>
            </div>
          <hr>
          <div class="media-left">
              <img src="<?=base_url(); ?>/assets/img/org.png" alt="Avatar" class="pp">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading"">Samuel</a>@omsamuel</p>
              <button type="submit" class="follow">Follow</button>
            </div>
          </div>
      </div>
      <br>
       <div class="container-fluid" style="background-color:white; padding: 10px; margin-top: -18px;">
        <div>
          <a class="btn btn-block btn-social btn-twitter media-left">
            <img src="../assets/img/gmail.png" class="gmail"><span style="color: black"><strong>Find people you know</strong>
           <p style="font-size: 12px;">Import your contacs from Gmail</p> </span>
            
          </a>
          
          <hr style="margin-top: -5px; margin-bottom: -5px">
          <p class="connect" style="margin-top: 13px; margin-bottom: -2px;"><a href="#">Connect other address books</a></p>
        </div>
      </div>
      <br>
      <div class="container-fluid" style="background-color:white; padding: 10px;">
        <p style="color: #14171A; font-family: Segoe UI; font-size: 16px; font-weight: bold;">Trends for you<span>.</span><a href="" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">Change</a></p>

          <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
         <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
         <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
         <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
         <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
         <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
        <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
        <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
        <p><a href=""class="trending">#TelkomUniversity</a></p>
          <p class="tkecil jarak">1.81jt Tweet</p>
      </div>
      <br >
      <div class="container-fluid" style="background-color: #e6ecf0; margin-top: -10px;">
        <div class="kiri-bawah">
          <a href="#" class="kiri-bawah">© 2019 Twitter</a>
          <a href="#" class="kiri-bawah">About</a>
          <a href="#" class="kiri-bawah">Help Center</a>
          <a href="#" class="kiri-bawah">Terms</a>
          <a href="#" class="kiri-bawah">Privacy policy</a>
          <a href="#" class="kiri-bawah">Cookies</a>
          <a href="#" class="kiri-bawah">Ads info</a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>