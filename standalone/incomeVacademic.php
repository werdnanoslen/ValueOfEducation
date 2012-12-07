<div id="chart_incomeVacademic" style="width: 600px; height: 600px;"></div>

<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart']}); //loading chart visualization from Google Charts API
	
	var visualization;

	function drawVisualization() 
	{
		//using Google API Query language
		var query = new google.visualization.Query( 'https://docs.google.com/spreadsheet/ccc?key=0AoTqIjcFtb4bdGR3RWRqV1pIcW9Sb1VSUUxzcEQ5SkE#gid=0');
		query.send(handleQueryResponse);
	}
	
	//This was implemented to handle the query response and produce the retrieved data in a visualization
	function handleQueryResponse(response) 
	{
		if (response.isError()) 
		{
			alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
			return;
		}
		var data = response.getDataTable(); //retrieve the data from the query
		
		//set up customization for our chart
		var options = 
		{
			title: 'Academic Success/Failure Related to Income',
			titleTextStyle: {fontSize: '20'},
			chartArea: {left: '25%'},
			hAxis: {title: '% of Students (total: 47,800)', format: '#.##%'},
			vAxis: {title: 'Monthly Income'},
			legend: 'bottom',
			legendFontSize: '14px',
		};
		
		//creates the chart in the specified div
		visualization = new google.visualization.BarChart(document.getElementById('chart_incomeVacademic'));
		//call the google api draw method to render the chart
		visualization.draw(data, options);
	}
	
	google.setOnLoadCallback(drawVisualization); //Starting the info-viz after the page loads
</script>
