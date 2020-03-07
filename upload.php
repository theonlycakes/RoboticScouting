<html>
<?php 
	$myfile = fopen("uploads\\" .$_POST["name"], "w") or die("Unable to open file!");
	$txt = $_POST["data"];
	fwrite($myfile, $txt);
	fclose($myfile);
	echo "<script>location.href='Robotics Scouting PageOnline.html';</script>";
	?>

</body>
</html>

<body>
</body>
</html>