<h4>How does income affect extra curricular participation?</h4>

<div id="chart_incomeVextracurricular" style="height: 350px"></div>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<script type="text/javascript">
	google.load('visualization', '1', {packages: ['barchart']});
	
	var visualization;

	function drawVisualization() 
	{
		var query = new google.visualization.Query( 'https://docs.google.com/spreadsheet/ccc?key=0AoTqIjcFtb4bdHp2NFh2b0xDYW1UU2FRbl84YnR5cmc#gid=0');
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
		visualization = new google.visualization.BarChart(document.getElementById('chart_incomeVextracurricular'));
		visualization.draw(data, null);
	}
	
	google.setOnLoadCallback(drawVisualization);
</script>
