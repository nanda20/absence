<html>
	<head>
		<link rel="stylesheet" href="http://localhost/absence/bootstrap/bootstrap/css/bootstrap.css" >
		<link rel="stylesheet" href="http://localhost/absence/bootstrap/format.css" >
		<script src="http://localhost/absence/bootstrap/jquery.min.js"></script>
	</head>
	<script>
		$("#slideshow > div:gt(0)").hide(); setInterval(function() { 
  		$('#slideshow > div:first')
    		.fadeOut(2500)
    		.next()
    		.fadeIn(2500)
    		.end()
    		.appendTo('#slideshow');
		},  3000);
			
	</script>
	<body>
	<div id="menu">
	
	<nav id="primary_nav_wrap">
		<ul>
	  		<li><a href="#">HOME</a></li>
	  		<li><a href="#absence" >ABSENCE</a></li>
	  		<li><a href="adminAbsence" >ADMIN</a></li>
		</ul>
	</nav>
	</div>

	<div id="slider">
		<span id="text1">
					WELCOME.
				</span>
				<span id="text2">
				RUANG BACA - TEKNOLOGI INFORMASI &nbsp
				</span>
		<div class="slides">
			<div id="slideshow">
	   			<div>
	     	  	<img src="http://localhost/absence/bootstrap/img/wl1.jpg" >
	   			</div>	   			
	   			<div>
	     		<img src="http://localhost/absence/bootstrap/img/wl2.jpg" >
	   			</div>
		</div>	
		</div>
	</div>
	<div id="trafik">
		<span id="judul1">TRAFIK ABSENCE </span>
<div class="counter">
		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  
  <div class="flipper">
    <div class="front">
     <span class="front-title">COUNT</span>
    </div>
    <div class="back">
        <span class="back-title"><?php echo $data['jml']; ?></span>
      <p> Teknik Informatika<br>
      TEKNOLOGI INFORMASI</p>
    </div>
  </div>
</div>
<div>
</div>
</div>

<div class="counter2">
		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  
  <div class="flipper">
    <div class="front">
      <span class="front-title">TI</span>
    </div>
    <div class="back">
      <span class="back-title"><?php echo $data['jml_ti']; ?></span>
      <p> Teknik Informatika<br>
      TEKNOLOGI INFORMASI</p>
    </div>
  </div>
</div>
<div>
</div>
</div>
<div class="counter3">
		<div class="flip-container" ontouchstart="this.classList.toggle('hover');">
  
  <div class="flipper">
    <div class="front">
      <span class="front-title">MI</span>
    </div>
    <div class="back">
        <span class="back-title"><?php echo $data['jml_mi']; ?></span>
      <p> Management Informatika<br>
      TEKNOLOGI INFORMASI</p>
    </div>
  </div>
</div>
<div>
</div>
</div>

	
		<a name="absence_a">
		<div  title="absence" id="absence">	
		<div id="input_absence">

		<form method="POST" action="">
		<table border="0">
			<tr>
			<th>
				<label id="fo">NIM</label>
			</th>
			<td>
				<input type="text" name="input_nip" size="40" />
			</td>
			</tr>
			<tr>
			<th>
				<label id="fo">Pesan</label>
			</th>
			<td>
				<textarea name="pesan"></textarea>
			</td>
			</tr>
			<tr>
				<td></td>
				<td colspan="3"><input type="submit" class="btn btn-danger btn-lg" /></td>

			</tr>
				<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			</table>
		</form>
		</div>	
		</div>
	</a>

	<div id="footer">
	</div>
	</body>
</html>
