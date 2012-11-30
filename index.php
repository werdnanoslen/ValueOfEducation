<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/cube.css?<?php echo time(); ?>" />
</head>
<body>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/cube.js?<?php echo time(); ?>"></script>

	<div id="wrapper">
		<div id="cube">
			<div class="face one">
				<?php include('standalone/instructions.php'); ?>
			</div>
			<div class="face two">
				<?php include('standalone/extracurricularVSacademic.php'); ?>
			</div>
			<div class="face three">
				<?php include('standalone/schooltypeVacademic.php'); ?>
			</div>
			<div class="face four">
				<?php include('standalone/incomeVacademic.php'); ?>
			</div>
		</div>	
	</div>
</body>

</html>
