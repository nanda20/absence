<html>
	<head>
	</head>
	<body>
		<form method="POST" action="">
		<input type="text" name="input_nip"></input>

		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<input type="submit" />
		</form>
		

		Jumlah absen hari ini <?php echo $data['jml']; ?> <br>
		TI  <?php echo $data['jml_ti']; ?><br>
		MI  <?php echo $data['jml_mi']; ?>
		
	</body>
</html>
