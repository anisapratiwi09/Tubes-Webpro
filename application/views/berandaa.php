<!DOCTYPE html>
<html>
<title>Twitter</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel=stylesheet href="css/bootstrap.min.css">
    <link rel=stylesheet href="css/bootstrap.css">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  <script src-fluid-fluid="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

<style type="text/css">
  
  i{
    color: #66757f;
  }

  i:hover {
    color : #1da1f2;
  }

 /* a{
    color: #66757f;
  }

  a:hover {
    color : #1da1f2;
  }*/

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

  .card{
    box-shadow:0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)
  }

  .round{
    border-radius: 5px;
  }

  .pad{
    padding:8px 16px!important;
  }

  .huruf{
    font-family: Segoe UI;
    font-size: 18px;
    color: #1da1f2;
    padding: 3px 0px 0px;
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
  .navbar-default .navbar-collapse, .navbar-default{
    background-color: white;
  }

  #ikuti{
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

    #ikuti:hover{
      background-color: #C2E5FF;
    }

    .kiri-bawah{
      font-family: Segoe UI;
      color: #657786;
      font-size: 10px;
      word-spacing: 5px;
    }
     #daftar{
      width: 220px;
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
     #daftar:hover{
      background-color: #0466AF;
      border : 1px solid #0466AF;
    }

     #tweet{
      border-radius: 100px;
      box-shadow: none;
      background-color: #1da1f2;
      border : 1px solid #1da1f2 ;
      color: white;
      font-weight: bold;
      cursor: pointer;
      font-size: 14px;
    }
     #tweet:hover{
      background-color: #0466AF;
      border : 1px solid #0466AF;
    }
    #tweet1{
      border-radius: 100px;
      box-shadow: none;
      background-color: #1da1f2;
      border : 1px solid #1da1f2 ;
      color: white;
      font-weight: bold;
      cursor: pointer;
      font-size: 14px;
      margin-top: 10px;
      float: right;
    }
     #tweet1:hover{
      background-color: #0466AF;
      border : 1px solid #0466AF;
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

<body style="background-color:rgb(240,240,240);">

<!-- Navbar -->
<div class="navbar">
    <ul>
      <li style="margin-left: -20px;">
        <a href="berandaa" class="block" style="text-decoration: none"><span class="glyphicon glyphicon-home" style="padding-right: 5px"></span>Home</a>
      </li>
      <li>
        <a href="controller/notifikasi" class="block" style="text-decoration: none"><span class="glyphicon glyphicon-bell" style="padding-right: 5px"></span>Notification</a>
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
  <!-- profile -->
  <div class="row">
    <div class="col-md-3">
        <div class="container-fluid" style="background-color: white; padding: 10px;">
           <p style="text-align: center"><a href="profile"><img src="<?=base_url(); ?>/assets/img/tae.jpg" style="border-radius: 50%; height: 106px; width: 106px; background-color: #1da1f2" alt="Avatar"></a></p>
           <hr>
           <h4 style="text-align: center; font-family: Segoe UI; font-size: 18px; font-weight: bold;">Anisa Pratiwi</h4>
           <p style="font-size: 14px; text-align: center; font-family: Segoe UI; color: #657786; line-height: 1px;">@anisapratiwi09</p>
            <p style=" font-size:12px; color:#657786; font-family:Segoe UI;">Tweet</p>
            <p class="huruf" style="line-height: 1px">0</p>
          </div>
      
      <br>
        <div class="container-fluid " style="background-color: white; padding: 10px; ">
          <p style="color: #14171A; font-family: Segoe UI; font-size: 16px; font-weight: bold;">Tren untuk anda</p>
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
      <br>
    </div>
    <!-- middle colomn -->
  
    <div class="col-md-6">
      <div class="container-fluid" style="background-color: #e6faff; padding: 10px;">
        <div>
            <a class="media-left" href="#fake"><div id="fotosml">
              <img alt="Avatar" src="<?=base_url(); ?>/assets/img/tae.jpg" style=" height: : 40px; width: 40px; border-radius: 50%;"></div>
            </a>
            <div class="media-body">
              <form method="post">
              <div class="form-group has-feedback">
                <input type="text" class="form-control" name="tweet" id="search2" aria-describedby="search">
                <span class="glyphicon glyphicon-picture form-control-feedback" aria-hidden="true"></span>
                 <button type="submit" name="btntweet" id="tweet1" style="font-size: 12px;" aria-label="Left Align">Tweet
                  </button>
              </div>
            </form>
            </div>
          </div>
      </div>
      <br>  
      <?php foreach ($data as $row): ?>
      <div class="panel-body" style="background-color: white; padding: 10px; ">
          <div class="tweet">
            <div class="media">
            <a class="media-left" href='#fake'>
              <img alt="ava" class="media-object img-rounded" src='<?=base_url(); ?>/assets/img/tae.jpg' style=" height: : 40px; width: 40px; border-radius: 50%;">
            </a>
            <div class="media-body">
              <h4 class="media-heading">Anisa Pratiwi</h4>
              <p><?php echo $row->tweet; ?></p>
              <ul class="nav nav-pills nav-pills-custom">
                <li><a href="#"><span class="glyphicon glyphicon-share-alt"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-retweet"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                <li><a href="#"><span class="glyphicon glyphicon-option-horizontal"></span></a></li>
              </ul>
            </div>
            </div>

          </div>
        </div>
        <hr>
      <?php endforeach; ?>
         
    </div>
    <!-- right column -->
    <div class="col-md-3">
      <div class="container-fluid" style="background-color:white; padding: 10px;">
        <div>
          <h3 class="panel-title" style="font-size: 14px; font-family: Segoe UI;  color: #14171A;"><a href="#" style="font-weight: bold;">
            Untuk diikuti</a>
            <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">Segarkan</a> <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px;">Lihat semua</a>
          </h3>
          <hr>
          <div class="media-left">
              <img src="<?=base_url(); ?>/assets/img/org.png" style="width: 40px; height: 40px; border-radius: 50%;" alt="Avatar">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" style="color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;">Raisa Andriana</a>
               <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px; padding-left: 2px;">@raisaandriana</a></p>
              <a href="#"><button type="submit"id="ikuti" >Ikuti</button></a>
            </div>
          <hr>
          <div class="media-left">
              <img src="<?=base_url(); ?>/assets/img/org.png" style="width: 40px; height: 40px; border-radius: 50%;" alt="Avatar">
            </div>
            <div class="media-body" style="padding-left: 2px;">
              <p><a href="#" class="media-heading" style="color: #14171A; font-family: Segoe UI; font-size: 14px; font-weight: bold;">Johnson</a>
               <a href="#" style="font-family: Segoe UI; color: #1da1f2; font-size: 10px; padding-left: 2px;">@johnsoncar</a></p>
              <a href="#"><button type="submit"id="ikuti" >Ikuti</button></a>
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

</script>

</body>
</html> 
