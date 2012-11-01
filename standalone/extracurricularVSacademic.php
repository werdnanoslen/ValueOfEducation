<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("visualization", "1", {
		packages : ["corechart"]
	});
	google.load('visualization', '1', {
		packages : ['gauge']
	});
	google.setOnLoadCallback(init);

	function init() {
		var cityAcademicBarChartData = google.visualization.arrayToDataTable([['City Type', 'Percent in gifted classes', 'Percent ever repeated a grade'], ['Metropolitan', 41.5, 14.5], ['In central cities', 41.3, 17], ['Outside central cities', 41.8, 12.1], ['Nonmetropolitan', 34.7, 17.8]]);
		var cityAcademicBarChart = new google.visualization.BarChart(document.getElementById('extracurricularVsAcademic_div1'));

		var extraCurricularGuageData = google.visualization.arrayToDataTable([['Label', 'Value'], ['Sports', 71.9], ['Clubs', 62.7], ['Lessons', 63]]);
		var extraCurricularGuages = new google.visualization.Gauge(document.getElementById('extracurricularVsAcademic_div2'));

		drawCityAcademicBarChart();

		google.visualization.events.addListener(cityAcademicBarChart, 'onmouseover', updateExtraCurricularGuages);

		drawExtraCurricularGuages();

		function drawCityAcademicBarChart() {

			var options = {
				title : 'The effect of extracurricular activiities on academic success',
				vAxis : {
					title : 'City Type'
				},

				isStacked : false
			};
			cityAcademicBarChart.draw(cityAcademicBarChartData, options);
		}

		function drawExtraCurricularGuages() {

			var options = {
				width : 400,
				height : 120,
				redFrom : 90,
				redTo : 100,
				yellowFrom : 75,
				yellowTo : 90,
				animation : {
					duration : 1000,
					easing : 'inAndOut',
				},
				minorTicks : 5
			};

			extraCurricularGuages.draw(extraCurricularGuageData, options);

		}

		function updateExtraCurricularGuages(e) {
			console.log("here " + e['row']);
			var row = e['row'];

			var guagesHeading = document.getElementById("extracurricularVsAcademic_div2Heading");

			if (row == 0) {
				extraCurricularGuageData.setCell(0, 1, 71.9);
				extraCurricularGuageData.setCell(1, 1, 62.7);
				extraCurricularGuageData.setCell(2, 1, 63);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities Of Students In Metropolitan Cities</h4>";
			} else if (row == 1) {
				extraCurricularGuageData.setCell(0, 1, 59.8);
				extraCurricularGuageData.setCell(1, 1, 54.1);
				extraCurricularGuageData.setCell(2, 1, 55.6);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities Of Students In Central Cities</h4>";
			} else if (row == 2) {
				extraCurricularGuageData.setCell(0, 1, 77.2);
				extraCurricularGuageData.setCell(1, 1, 66.4);
				extraCurricularGuageData.setCell(2, 1, 66.2);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities Of Students Outside Central Cities</h4>";
			} else {//if(row == 3)
				extraCurricularGuageData.setCell(0, 1, 73.6);
				extraCurricularGuageData.setCell(1, 1, 58.7);
				extraCurricularGuageData.setCell(2, 1, 48.2);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities Of Students In Nonmetropolitan Cities</h4>";
			}

		}

	}
</script>

<div id="extracurricularVsAcademic_div1" style="width: 900px; height: 500px;"></div>
<div id="extracurricularVsAcademic_div2Heading">
	<h4>Extracurricular Activities Of Students In Metropolitan Cities</h4>
</div>
<div id="extracurricularVsAcademic_div2" style="width: 900px; height: 500px;"></div>

