<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Twitter Login</title>

	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">

		body{
			font-family: "Segoe UI",Arial,sans-serif;
		}

		#Kiri{
 			float:left;
 			width:50%;
 			height:532px;
 			background-image: url("<?php echo base_url('assets/img/bird2.png'); ?>");
 			background-repeat: no-repeat;
 			background-size: 640px 532px;
 			font-size: 18px;
 			line-height: 20px;
		}

		#Kanan{
 			float:right;
 			background-color:white;
 			width:50%;
 			height:532px;
 			color: black;
 			position: relative;
		}

    input[type=text], select{
      width: 30%;
      padding: 8px 20px;
      margin: 5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=password], select{
      width: 30%;
      padding: 8px 20px;
      margin: 5px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .login{
      float: right;
    }

    .button {
      background-color: white;
      color: #1da1f2; 
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      border : 1px solid #1da1f2 ;
      border-radius: 100px;
      cursor: pointer;
    }

    .button:hover{
      background-color: #C2E5FF;
    }

		footer{
			clear:both;
 			background-color:#fff;
 			height:45px;
      color: #aab8c2;
 			border-top: 1px solid #e6ecf0;
 			padding: 11px;
 			font-size: 11px;
 			text-align: center;
 			word-spacing: 5px;
		}

		.kiri{
			padding: 5px;
		}

		ul{
     		list-style-type: none;
		}

  	li{
   			display: flex;
    		font-size: 16px;
    		font-weight: bold;
    		line-height: 60px;
    		color: white;
    		padding-left: 120px;
    		align-items: center;
 		}

 		p{
 			display: flex;
    		font-size: 16px;
    		font-weight: bold;
    		color: black;
    		padding-left: 170px;
    		align-items: center;
    		padding-top: 0px;
 		}

 		#daftar{
 			margin-left: 170px;
 			width: 220px;
 			border-radius: 100px;
 			box-shadow: none;
 			background-color: #1da1f2;
 			border : 1px solid #1da1f2 ;
 			color: white;
 			font-weight: bold;
 			cursor: pointer;

 		}

 		#masuk{
 			margin-left: 170px;
 			width: 220px;
 			border-radius: 100px;
 			box-shadow: none;
 			background-color: white;
 			border : 1px solid #1da1f2 ;
 			color: #1da1f2;
 			font-weight: bold;
 			margin-top: 5px;
 			cursor: pointer;
 		}

 		#masuk:hover{
 			background-color: #C2E5FF;
 		}

 		#daftar:hover{
 			background-color:     #0466AF;
 			border : 1px solid #0466AF;
		}

	</style>
</head>
<body>
	
  	<div id="Kiri">
  		<div class="kiri">
  			<ul>
				<li class="search" style="padding-top: 200px;"><img src="../assets/img/search3.png" style="width: 35px; height: 30px">Ikuti minat Anda.</li>
				<li class="people"><img src="../assets/img/people3.png" style="width: 35px; height: 30px">Dengarkan yang orang ramai perbincangkan.</li>
				<li class="chat"><img src="../assets/img/chat2.png" style="width: 35px; height: 30px">Bergabung dalam percakapan.</li>
			</ul>
		</div>
  	</div>


  	<div id="Kanan">
      <nav class="login">
        <form action="<?php echo base_url('Controller/aksi_login1'); ?>" method="post">
        <form method="post" action="/tubes/Controller/berandaa">
          <input class="username" type="text" name="username" placeholder="email/username">
          <input class="password" type="password" name="password" placeholder="password">
          <button class="button">Masuk</button>
        </form>
      </form>
          
      </nav>
  		<img src="../assets/img/bird11.png" style="padding-left: 140px; padding-top: 160px;">
  		<p>Lihat apa yang sedang</br> terjadi di seluruh dunia</br> saat ini</p></br>
  		<p style="font-size: 12px">Bergabunglah dengan twitter sekarang</br>juga.</p>
      <form method="post" action="/tubes/Controller/register">
  		  <button type="submit" id="daftar">Daftar</button>
      </form>
      <form method="post" action="/tubes/Controller/login2">
        <button type="submit"id="masuk" >Masuk</button>
      </form>
  	</div>
         

	<footer>
		<ul>
      		<a href="">Tentang</a>
      		<a href="">Pusat Bantuan</a>
      		<a href="">Blog</a>
      		<a href="">Status</a>
      		<a href="">Karier</a>
      		<a href="">Persyaratan</a>
      		<a href="">Kebijakan Privasi</a>
      		<a href="">Kuki</a>
      		<a href="">Informasi iklan</a>
      		<a href="">Merek</a>
      		<a href="">Aplikasi</a>
      		<a href="">Beriklan</a>
     	 	<a href="">Pemasaran</a>
      		<a href="">Bisnis</a>
      		<a href="">Pengembang</a>
      		<a href="">Direktori</a>
      		<a href="">Pengaturan</a>
      		<a href="">© 2019 Twitter</a>
 		 </ul>
 	</footer>
  
</body>
</html>