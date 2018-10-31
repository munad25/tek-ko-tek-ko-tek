<!DOCTYPE html>
<html>
<head>
	<title>Belajar php</title>
	<style type="text/css">
		div:nth-child(odd){
			color: red;
		}
		div:nth-child(even){
			color: blue;
		}
	</style>
</head>
<body>
	<?php
		for ($i=100;$i>=1;$i--) {
			echo "<div> Tek Ko Tek Ko Tek Ko Tek anak ayam turun $i</div>";
		}
	?>
</body>
</html>

