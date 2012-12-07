<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	google.load("visualization", "1", {
		packages : ["corechart"]
	}); //loading chart visualization from Google Charts API
	google.load('visualization', '1', {
		packages : ['gauge']
	}); //loading gauge visualization from Google Charts API
	google.setOnLoadCallback(init); //Starting the info-viz after the page loads

	function init() {
		//populate the chart data with the data from our data source	
		var cityAcademicBarChartData = google.visualization.arrayToDataTable([['City Type', 'Percent in Gifted Classes', 'Percent Ever Repeated a Grade'], ['Metropolitan', 41.5, 14.5], ['In Central Cities', 41.3, 17], ['Outside Central Cities', 41.8, 12.1], ['Nonmetropolitan', 34.7, 17.8]]);
		//creates the chart in the specified div
		var cityAcademicBarChart = new google.visualization.BarChart(document.getElementById('extracurricularVsAcademic_div1'));

		//populate the gauge data with the data from our data source	
		var extraCurricularGuageData = google.visualization.arrayToDataTable([['Label', 'Value'], ['Sports', 71.9], ['Clubs', 62.7], ['Lessons', 63]]);
		//creates the gauges in the specified div
		var extraCurricularGuages = new google.visualization.Gauge(document.getElementById('extracurricularVsAcademic_div2'));

		drawCityAcademicBarChart(); //calls the implemented function "drawCityAcademicBarChart"

		//add an event listener to the chart. This is responsible for calling the function that implements
		//the interaction within the info-viz
		google.visualization.events.addListener(cityAcademicBarChart, 'onmouseover', updateExtraCurricularGuages);

		drawExtraCurricularGuages(); //calls the implemented function "drawExtraCurricularGuages"

		function drawCityAcademicBarChart() {

			//set up customization for our chart
			var options = {
				chartArea : {
					left : 200
				},

				title : 'Academic Success/Failure Related to Extracurricular Activities',
				titleTextStyle : {
					fontSize : 20
				},

				vAxis : {
					title : 'City Type',
					titleTextStyle : {
						fontSize : 16
					},

					textStyle : {
						fontSize : 16
					}

				},

				hAxis : {
					minValue : 0
				},

				legend : {
					textStyle : {
						fontSize : 12
					},
					position : 'bottom'
				},

				isStacked : false
			};

			//call the google api draw method to render the chart
			cityAcademicBarChart.draw(cityAcademicBarChartData, options);
		}


		function drawExtraCurricularGuages() {

			//set up customization for our gauges
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

			//call the google api draw method to render the gauges
			extraCurricularGuages.draw(extraCurricularGuageData, options);

		}

		//implements linking AND animation for the gauges by animating them to represent the correct
		//data depending on which bar is being hovered over in the the bar chart
		function updateExtraCurricularGuages(e) {
			console.log("here " + e['row']);
			var row = e['row'];

			var guagesHeading = document.getElementById("extracurricularVsAcademic_div2Heading");

			if (row == 0) {
				extraCurricularGuageData.setCell(0, 1, 71.9);
				extraCurricularGuageData.setCell(1, 1, 62.7);
				extraCurricularGuageData.setCell(2, 1, 63);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities of Students in Metropolitan Cities</h4>";
			} else if (row == 1) {
				extraCurricularGuageData.setCell(0, 1, 59.8);
				extraCurricularGuageData.setCell(1, 1, 54.1);
				extraCurricularGuageData.setCell(2, 1, 55.6);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities of Students in Central Cities</h4>";
			} else if (row == 2) {
				extraCurricularGuageData.setCell(0, 1, 77.2);
				extraCurricularGuageData.setCell(1, 1, 66.4);
				extraCurricularGuageData.setCell(2, 1, 66.2);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities of Students outside Central Cities</h4>";
			} else {//if(row == 3)
				extraCurricularGuageData.setCell(0, 1, 73.6);
				extraCurricularGuageData.setCell(1, 1, 58.7);
				extraCurricularGuageData.setCell(2, 1, 48.2);
				drawExtraCurricularGuages();
				guagesHeading.innerHTML = "<h4>Extracurricular Activities of Students in Nonmetropolitan Cities</h4>";
			}

		}

	}
</script>


<div id="extracurricularVsAcademic_div1" style="width: 600px; height: 375px;"></div>
<div id="extracurricularVsAcademic_div2Heading">
	<h4>Extracurricular Activities of Students in Metropolitan Cities</h4>
</div>
<div id="extracurricularVsAcademic_div2" style="width: 600px; height: 225px;"></div>

