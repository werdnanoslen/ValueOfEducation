<div id="chart_incomeVacademic" style="height: 350px"></div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript">
	google.load('visualization', '1', {packages: ['barchart']});
	
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
			vAxis: {title: 'Monthly income'},
			hAxis: {title: 'Students (ages 6-17)', format: '##%'},
		};
		visualization = new google.visualization.BarChart(document.getElementById('chart_incomeVacademic'));
		visualization.draw(data, options);
	}
	
	google.setOnLoadCallback(drawVisualization);
</script>
