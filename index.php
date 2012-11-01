<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="stylesheet" href="css/experiment-styles.css" />
	<link rel="stylesheet" href="css/cube.css" />
</head>
<body>
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/cube.js"></script>

	<div id="wrapper">

	<div id="experiment">	
		<div id="cube">
			<div class="face one">
				1
				<?php include('standalone/instructions.php'); ?>
			</div>
			<div class="face two">
				2
				<?php include('standalone/incomeVextracurricular.php');?>
			</div>
			<div class="face three">
				3
				<?php include('standalone/extracurricularVSacademic.php'); ?>
			</div>
			<div class="face four">
				4
			</div>
			<div class="face five">
				5
			</div>
			<div class="face six">
				6
			</div>
		</div>	
	</div>
	</div>
</body>

</html>