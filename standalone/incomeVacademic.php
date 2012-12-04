<div id="chart_incomeVacademic" style="width: 600px; height: 600px;"></div>

<script type="text/javascript">
	google.load('visualization', '1', {packages: ['corechart']});
	
	var visualization;

	function drawVisualization() 
	{
		var query = new google.visualization.Query( 'https://docs.google.com/spreadsheet/ccc?key=0AoTqIjcFtb4bdGR3RWRqV1pIcW9Sb1VSUUxzcEQ5SkE#gid=0');
		query.send(handleQueryResponse);
	}

	function handleQueryResponse(response) 
	{
		if (response.isError()) 
		{
			alert('Error in query: ' + response.getMessage() + ' ' + response.getDetailedMessage());
			return;
		}
		var data = response.getDataTable();
		var options = 
		{
			title: 'How does income affect academics?',
			titleTextStyle: {fontSize: '20'},
			chartArea: {left: '25%'},
			hAxis: {title: '% of Students (total: 47,800)', format: '#.##%'},
			vAxis: {title: 'Monthly income'},
			legend: 'bottom',
			legendFontSize: '14px',
		};
		visualization = new google.visualization.BarChart(document.getElementById('chart_incomeVacademic'));
		visualization.draw(data, options);
	}
	
	google.setOnLoadCallback(drawVisualization);
</script>
