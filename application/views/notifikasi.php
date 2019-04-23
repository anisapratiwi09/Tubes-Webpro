<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Twitter/Notifikasi</title>
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    .atas{
      display: block;
      text-align: center;
      padding: 13px 12px;
      text-decoration: none;
      margin-left: 20px;
    }

    .atas:hover{
      border-bottom: 2px solid #1c94e0;
      color: #1c94e0;
    }
    .foto{
      height: 30px;
      weight : 30px;
      border-radius: 50%;
    }
    .tweet{
      border-radius: 100px;
      box-shadow: none;
      background-color: #1da1f2;
      border : 1px solid #1da1f2 ;
      color: white;
      font-weight: bold;
      cursor: pointer;
      font-size: 14px;
    }
    .tweet:hover{
      background-color: #0466AF;
      border : 1px solid #0466AF;
    }
    .navbar-default .navbar-collapse, .navbar-default{
    background-color: white;
    }
    .follow{
      width: 40px;
      border-radius: 100px;
      box-shadow: none;
      background-color: #1da1f2;
      border : 1px solid #1da1f2 ;
      color: white;
      font-weight: bold;
      cursor: pointer;
      margin-left: 40px;
      margin-top: 25px;
      margin-bottom: 40px;
      font-size: 14px;
    }
    .follow:hover{
      background-color: #0466AF;
      border : 1px solid #0466AF;
    }
    .ikuti{
     width: 75px;
      border-radius: 100px;
      box-shadow: none;
      background-color: white;
      border : 1px solid #1da1f2 ;
      color: #1da1f2;
      cursor: pointer;
      font-size: 10px;
      font-family: Segoe UI;
      padding: 3px;
    }
    .ikuti:hover{
      background-color: #C2E5FF;
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
    .semua{
      font-size: 14px; 
      font-family: Segoe UI;
      font-weight: bold;
    }
    .sebutan{
      padding-left: 30px;
      font-size: 14px; 
      font-family: Segoe UI;
      font-weight: bold;
    }
    .kiri-bawah{
      font-family: Segoe UI;
      color: #657786;
      font-size: 10px;
      word-spacing: 5px;
    }
    .navbar{
      list-style-type: none;
      background-color: #fff;
      border-bottom: 1px solid rgba(0,0,0,0.25);
      width: 100%;
      top: 0;
      border-radius: none;
      position: fixed;

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
.burung:hover{
  cursor: pointer;
}
.profile1{
  cursor: pointer;
  border-radius: 50%; height: 32px; width: 32px; margin-left: 20px; margin-top: 7px;
}
  </style>
</head>
<body style="background-color:rgb(240,240,240);">
  <!-- Navbar -->
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
        <img class="burung" src="<?=base_url(); ?>/assets/img/bird11.png" style="margin-top: 5px; margin-left: 200px; width: 60px; height: 35px; margin">
      </li>
      <li class="inputWithIcon">
        <input type="text" class="username" name="" placeholder="Search Twitter">
        
      </li>
      <li>
        <img src="<?=base_url(); ?>/assets/img/tae.jpg" class="profile1" >
      </li>
      <li>
        <button type="submit" class="masuk">Masuk</button>
      </li>
    </ul>
  </div>
  <!-- Page Container -->
<div class="container" style="padding: 50px;">
  <div class="row"> 
    <!--Left Column-->
    <div class="col-md-3">
        <div class="container-fluid " style="background-color: white; padding: 10px; ">
          <p style="color: #14171A; font-family: Segoe UI; font-size: 16px; font-weight: bold;">Tren untuk anda</p>
          <a href="" class="trending">#TelkomUniversity</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#PrabowoSandi</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#blackpink</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#TelkomUniversity</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#PrabowoSandi</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#blackpink</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#TelkomUniversity</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#PrabowoSandi</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
          <a href="" class="trending">#blackpink</a></br>
          <a href="" class="tkecil jarak">1.81jt Tweet</a></br>
        </div>
      <br>
    </div>
    <!-- middle colomn -->
  
    <div class="col-md-6">
      <div class="container-fluid " style="background-color: white; padding: 10px; ">
        <div>
          <ul>
            <a href="#fake" class="semua">Semua</a>
            <a href="" class="sebutan">Sebutan</a>
          </ul>
          <hr>
          <h4 style="font-family: Segoe UI;  color: #14171A; font-weight: bold; padding-left: 40px;">
            Belum ada yang bisa dilihat disini. 
          </h4> 

          <p style="color: #657786; font-family: Segoe UI; font-size: 12px; padding-left: 40px;">Ketika seseorang menyebut Anda dalam Tweet, Anda akan melihatnya di sini.</p>
          <hr>
          <img  src="../assets/img/bird10.png" alt="bird" style=" width: 55px; height: 40px; padding-top: 5px;">
        </div>
      </div>    
    </div>

    <!--Right Column-->
    <div class="col-md-3">
        <div class="container-fluid" style="background-color: white; padding: 10px;">
          <div>
            <h3 class="panel-title" style="font-size: 14px; font-family: Segoe UI;  color: #14171A;"><a href="#" style="font-weight: bold;">
            Untuk diikuti</a>
            <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">Segarkan</a> <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">Lihat semua</a>
          </h3>
          <hr>
           <div class="media-left">
              <img src="../assets/img/org.png" alt="Avatar" style="border-radius: 50%; width: 40px; height: 40px">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" style="color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;">Gabriel</a>
                <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px; padding-left: 2px;">@gabrielalmayda</a></p>
              <a href="#"><button type="submit" class="ikuti" >Ikuti</button></a>
            </div>
            <hr>
            <div class="media-left">
              <img src="../assets/img/org.png" alt="Avatar" style="border-radius: 50%; width: 40px; height: 40px">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" style="color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;">Rafie</a>
                <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px; padding-left: 2px;">@rfiez</a></p>
              <a href="#"><button type="submit" class="ikuti" >Ikuti</button></a>  
            </div>
            <hr>
            <div class="media-left">
              <img src="../assets/img/org.png" alt="Avatar" style="border-radius: 50%; width: 40px; height: 40px">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" style="color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;">Kahfi </a>
                <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px; padding-left: 2px;">@alkahfikhuzaimy</a></p>
              <a href="#"><button type="submit" class="ikuti" >Ikuti</button></a>

            </div>
          </div>
        </div>
        <br>
       <div class="container-fluid" style="background-color:white; padding: 10px;">
        <div>
          <a class="btn btn-block btn-social btn-twitter media-left">
            <i class="glyphicon glyphicon-picture;" aria-hidden="true"></i>
          </a>
          <p style="font-family: Segoe UI; font-weight: bold; color: #14171A; font-size: 12px;">Temukan orang yang Anda kenal</p>
          <p style="color: #657786; font-family: Segoe UI; font-size: 10px;">impor kontak anda dari Gmail</p>
          <hr>
          <p style="color: #1da1f2; font-family: Segoe UI; font-size: 10px;"><a href="#">hubungkan buku alamat lainnya</a></p>
        </div>
      </div>
      <br>
      <div class="container-fluid" style="background-color:white; padding: 10px;">
        <div class="kiri-bawah">
          <a href="#" class="kiri-bawah">© 2019 Twitter</a>
          <a href="#" class="kiri-bawah">Tentang</a>
          <a href="#" class="kiri-bawah">Pusat Bantuan</a>
          <a href="#" class="kiri-bawah">Persyaratan</a>
          <a href="#" class="kiri-bawah">Kebijakan privasi</a>
          <a href="#" class="kiri-bawah">Kuki</a>
          <a href="#" class="kiri-bawah">Informasi iklan</a>
          <a href="#" class="kiri-bawah">Merek</a>
          <a href="#" class="kiri-bawah">Blog</a>
          <a href="#" class="kiri-bawah">Status</a>
          <a href="#" class="kiri-bawah">Aplikasi</a>
          <a href="#" class="kiri-bawah">Karier</a>
          <a href="#" class="kiri-bawah">Pemasaran</a>
          <a href="#" class="kiri-bawah">Bisnis</a>
          <a href="#"class="kiri-bawah">Pengembang</a>
        </div>
      </div>
    </div>
  </div>

</div>


</body>
</html>