<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Twitter Register</title>
	<link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		body{
			font-family: "Segoe UI",Arial,sans-serif;
			margin: 0;
			padding: 0;
			background-size: cover;
			background-image: url("<?php echo base_url('assets/img/registrasi2.png'); ?>");
			font-family: arial;
		}
		.transparent{
 background:rgba(2, 2, 2, 0.5);
 width: 100%;
 height:577px;
 margin:0px auto;
 
}
		h1{
			font-weight: bolder;
			font-size: 24px;
			margin-top: -20px;
			margin-left: -10px;
			font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Ubuntu, Helvetica Neue, sans-serif;
		
		}

		h2{
			color : black;
			font : 19px;
		}
		h3{
			color: black;
			font : 23px;
			margin : 5px 10px;
			font-weight: bolder;
		}
		label{
			padding: 5px 10px 0px;
		}
		label:focus{
			color: #1da1f2;
		}
		.overlay-content{
			overflow-x: auto;
			overflow-y: auto;
			display: flex;
			width: 600px;
			height: 500px;
			background-color: white;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			border-radius: 5px;
			padding: 30px;
		}
		.overlay-content input[type="text"]{
			background-color: aliceblue;
			border :none;
			outline: none;
			border-bottom: 1px solid #ddd;
			height: 40px;
			width: 520px;
			border-bottom : 2px solid darkgray;
			padding : 0px 10px 5px;
			margin-top: -5px;
		}
		.overlay-content input[type="text"]:focus{
			border-bottom : 2px solid #1da1f2;
		}
		
		.regis-email {

			margin-top: 25px;
			margin-left: 10px;

		}
	#example2 {
  box-sizing: border-box;
  width: 520px;
  font-weight: lighter;
  padding: 3px;  
  background-color: aliceblue;
  padding-left: 10px;
  color: #8899A6;

}
#example3 {

  box-sizing: border-box;
  width: 520px;
  font-weight: lighter;
  padding: 3px;  
  background-color: aliceblue;
  padding-left: 10px;
  color: #8899A6;
}

#example4{
box-sizing: border-box;
  width: 520px;
  font-weight: lighter;
  padding: 3px;  
  background-color: aliceblue;
  padding-left: 10px;
  color: #8899A6;

}
button{
	border-radius: 50px;
	box-shadow: none;
	background-color: #1da1f2;
    border: 1px solid #1da1f2;
    color: white;
    margin-left: 205px;
    width: 140px;
    height: 35px;
    font-size: 20px;
}
#keterangan{
	font-size: 15px;
	margin-top: 30px;
	margin-left: 10px;
}
 #daftar{
      margin-left: 12px;
      width: 520px;
      border-radius: 100px;
      box-shadow: none;
      background-color: #1da1f2;
      border : 1px solid #1da1f2 ;
      color: white;
      font-weight: bold;
      cursor: pointer;
      height: 40px;
      margin-top: -20px;

    }

    #daftar:hover{
      background-color: #0466AF;
      border : 1px solid #0466AF;
    }
     #sama{
    	color: #1da1f2;
    }

    #sama:hover{
    	color: #1da1f2;
    }

</style>
</head>
<body>
<div class="transparent">
	<div id="myNav" class="overlay">
  		<div class="overlay-content">  
    		<form method="post" action="<?php echo base_url('/register/new') ?>" class="form">
    			<h3>Buat akun</h3>
				<div>
					<label>
						<div id="example2">
						<span>Nama</span>
					</div>
					<input id="nama" type="text" name="nama" maxlength="50">
				</label>
				</div>
				<div>
					<label><div id="example4">
						<span>Username</span></div>
					<input id="username" type="text" name="username" maxlength="15"></label>
				</div>
				<div>
					<label><div id="example3">
						<span>Password</span></div>
					<input id="ponsel" type="text" name="password" maxlength="15"></label>
				</div>
				<div class="regis-email">
				<a  href="" style="color: #1da1f2; text-decoration: none">Gunakan email</a></div>
				<p id="keterangan">Dengan mendaftar, Anda menyetujui <a href="" id="sama">Persyaratan Layanan</a> dan <a href="" id="sama">Kebijakan</br> Privasi</a>, termasuk <a href="" id="sama">Penggunaan Cookie</a>. Orang lain akan dapat menemukan</br> Anda melalui email atau nomor ponsel bila dicantumkan <span>·</span> <a href="" id="sama">Pilihan Privasi</a></p></br>
				<button type="submit" id="daftar">Daftar</button>
			</form>
			
  		</div>
	</div>
</div>
</body>
</html>