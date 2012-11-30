<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(init);
	function init(){
		
		var academicChart = new google.visualization.BubbleChart(document.getElementById('chart_div'));
		var schoolTypeChart = new google.visualization.BubbleChart(document.getElementById('chart_div2'));
		
		drawChart();
		drawChart2();
		
		function drawChart() {
			var data = google.visualization.arrayToDataTable([
				['ID', 'Percent in Gifted Classes (Success)', 'Percent Repeated Grade (Failure)', 'Number of Students Accounted For'],
				['MW',    36.9,              9.7,      10300+10448],
				['W',    38.1,              11.8,      11188+11316],
				['S',    46,               18.6,      17670+17879],
				['NE',    36.2,              14.4,      8259+8352],
			
			]);
			
			var options = {
				title: 'Academic Success/Failure in US Regions',
				hAxis: {title: 'Success (Percent in Gifted Classes)'},
				vAxis: {title: 'Failure (Percent Repeated a Grade)'},
				colorAxis: {colors: ['yellow', 'green']}
				//bubble: {textStyle: {fontSize: 11}}
			};
			
			academicChart.draw(data, options);
			
			}
			
			function drawChart2() {
				var data = google.visualization.arrayToDataTable([
					['ID', 'Percent in Public School', 'Percent in Private Schools', 'Number of Students Accounted For' ],
					['MW',    69.9+10.4,              8.2+2.4,      10556 ],
					['W',    73+13.8,              3.2+2.5,         11450],
					['S',    77.2+18.2,               4.3+2.4,         18077],
					['NE',    73.4+9.9,              6.3+2.7,  8450]
				]);
				
				var options = {
					title: 'School Type Statistics in US Regions',
					hAxis: {title: 'Percent in Public Schools'},
					vAxis: {title: 'Percent in Private Schools'},
					colorAxis: {colors: ['yellow', 'green']}
					//bubble: {textStyle: {fontSize: 11}}
				};
				
				
				schoolTypeChart.draw(data, options);
		}
	
	}
</script>
<div id="chart_div" style="width: 600px; height: 300px;"></div>
<div id="chart_div2" style="width: 600px; height: 300px;"></div>
