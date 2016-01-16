<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="http://localhost/absence/bootstrap/bootstrap/css/bootstrap.css" >
	<link rel="stylesheet" href="http://localhost/absence/bootstrap/bootstrap/css/bootstrap.min.css" >
	<link rel="stylesheet" href="http://localhost/absence/bootstrap/format.css" >
	<style>
		body{
			  background-image: url("http://localhost/absence/bootstrap/img/footer_lodyas.png"); 
			   background-attachment:fixed;
		}
		.content{
			margin: auto;
			width: 800px;
			height: 100%;
			
		}
		.box{
			  

		}
	</style>
</head>
<body>
	<div class="menu">
	<div class="nav">
      <ul>
        <li class="home"><a href="{{ URL::to('/absence') }}">Absence</a></li>
        <li class="about"><a href="{{ URL::to('/adminPetugas') }}">Petugas</a></li>
        <li class="news"><a href="{{ URL::Route('adminPetugas.create') }}">Tambah Petugas</a></li>
        <li class="l"><a href="{{ URL::to('/adminAbsence') }}">Logout</a></li>
      </ul>
    </div>
	</div>

	<div class="box">
	@yield('content')
	</div>
	<!-- <div id="footer1">
	 --></div>
 	
</body>
</html>