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
	<style type="text/css">

body{
 background-color: #e6ecf0;

}

.navbar{
  list-style-type: none;
  background-color: #fff;
  border-bottom: 1px solid rgba(0,0,0,0.25);
  width: 100%;
  top: 0;
  border-radius: none;
  position: sticky;

}

.navbar li{
  float : left;
  list-style-type: none;
}

.block{
  display: block;
  text-align: center;
  padding: 13px 12px;
  text-decoration: none;
  margin-left: 20px;
}

.block:hover{

  border-bottom: 2px solid #1c94e0;
  color: #1c94e0;
}

li a{
  font-weight: bold;
  color: #66757f;
}

.username{
    width: 210px;
    padding: 6px;
    margin-top: 8px;
    outline: 0;
    background-color: #E8F0FE;
    border: 1px solid #e6ecf0;
    border-radius: 50px;
    margin-left: 200px;
    font-size: 12px;
}

.inputWithIcon i{
position: absolute;
left: 0;
color: #aaa;
top: 10px;
padding:5px 0px 0px 1040px;
}


.username:focus{
  border : 2px solid #1c94e0;
  background-color: white;
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
    width: 100px;
    height: 30px;
    margin-left: 340px;
    margin-top: 15px;
  }
.masuk1:hover{
  cursor: pointer;
  background-color: #E7EBEE;
}
.profile1{
  cursor: pointer;
  border-radius: 50%; height: 32px; width: 32px; margin-left: 20px; margin-top: 7px;
}


.header1{
  width: 1280px;
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
  margin-left: 20px;
}

.blocktengah:hover{
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
    padding-top: 3px;
}

.burung:hover{
  cursor: pointer;
}

#kartunama{
  margin-left: 50px;
}

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
  .kiri-bawah{
      font-family: Segoe UI;
      color: #657786;
      font-size: 12px;
      word-spacing: 5px;
      padding-left: 2px;
    }

	</style> 


</head>
<body>
<header>

  <div class="navbar">
    <ul>
      <li style="margin-left: -20px;">
        <a href="berandaa" class="block" style="text-decoration: none"><span class="glyphicon glyphicon-home" style="padding-right: 5px"></span>Home</a>
      </li>
      <li>
        <a href="notifikasi" class="block" style="text-decoration: none"><span class="glyphicon glyphicon-bell" style="padding-right: 5px"></span>Notification</a>
      </li>
      <li>
        <a href="" class="block" style="text-decoration: none"><span class="glyphicon glyphicon-envelope" style="padding-right: 5px"></span>Messages</a>
      </li>
      <li>
        <img class="burung" src="../assets/img/bird11.png" style="margin-top: 5px; margin-left: 200px; width: 60px; height: 35px; margin">
      </li>
      <li class="inputWithIcon">
        <input type="text" class="username" name="" placeholder="Search Twitter">
        
      </li>
      <li>
        <img src="../assets/img/tae.jpg" class="profile1" >
      </li>
      <li>
        <button type="submit" class="masuk">Masuk</button>
      </li>
    </ul>
  </div>
  <div>
        <img src="../assets/img/header.jpg" class="header1">
  </div>

  <div class="navtengah" >
    <ul>
      <li style="margin-left: 250px; ">
        <a href="" class="blocktengah"><span class="kata">Tweets</span>
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
        <form method="post" action="/tubes/Controller/edit_profile">
          <button type="submit" class="masuk1">Edit Profile</button>
        </form>      
      </li>
    </ul>
  </div>
  <img src="../assets/img/tae.jpg" class="profile" style="margin-top: -150px; margin-left: 50px;">

</header>
 <div class="col-md-3">
  <div class="container-fluid" id="kartunama">
    <h1 style="margin-top: -10px"><a href="" style="color: black;font-size: 21px;font-weight: bold;word-wrap: break-word;">Anisa Pratiwi</a></h1>
    <span style="font-weight: bold; color: #657786"><a href="" style="color: #657786 ">@anisapratiwi09</a></span><br>
    <span class="glyphicon glyphicon-calendar" style="margin-top: 20px; color: #657786"> bulan, tahun</span>
  </div>
</div>
  <div class="col-md-6">
      <div class="container-fluid " style="background-color: white; padding: 10px; ">
        <div>
          <h4 style="font-weight: bold">Tweets <a href="" style="margin-left: 25px;">Tweets & replies</a></h4>
        </div>
      </div>   
      <br>
      <div class="container-fluid " style="background-color: white; padding: 10px; margin-top: -19px; ">
        <div>
          
        </div>
      </div>    
  </div>
    <!-- right column -->
    <div class="col-md-3">
      <div class="container-fluid" style="background-color:white; padding: 10px;">
        <div>
          <h3 class="panel-title" style="font-size: 14px; font-family: Segoe UI;  color: #14171A;"><a href="#" style="font-weight: bold;">
            Who to follow</a><span>.</span>
            <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">Refresh</a><span>.</span><a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">View all</a>
          </h3>
          <hr>
          <div class="media-left">
              <img src="../assets/img/org.png" alt="Avatar" class="pp">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" style="color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;">nama</a>@username</p>
              <button type="submit" class="follow">Follow</button>
            </div>
          <hr>
          <div class="media-left">
              <img src="../assets/img/org.png" alt="Avatar" class="pp">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" style="color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;">nama</a>@username</p>
              <button type="submit" class="follow">Follow</button>
            </div>
          </div>
      </div>
      <br>
       <div class="container-fluid" style="background-color:white; padding: 10px; margin-top: -19px;">
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

          <p class="trending">#TelkomUniversity</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#PrabowoSandi</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#blackpink</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#TelkomUniversity</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#PrabowoSandi</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#blackpink</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#TelkomUniversity</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#PrabowoSandi</p>
          <p class="tkecil jarak">1.81jt Tweet</p>
          <p class="trending">#blackpink</p>
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

</body>
</html>