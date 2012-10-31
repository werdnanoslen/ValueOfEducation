<h4>How does income affect extra curricular participation?</h4>
<div id="chart_incomeVextrtacurricular" style="height:400px; width: 400px;"></div>

<script type="text/javascript">
	google.load('visualization', '1', {packages: ['barchart']});
	
	var visualization;

	function drawVisualization() 
	{
		// To see the data that this visualization uses, browse to
		// http://spreadsheets.google.com/ccc?key=pCQbetd-CptGXxxQIG7VFIQ
		var query = new google.visualization.Query( 'https://docs.google.com/spreadsheet/ccc?key=0AoTqIjcFtb4bdHp2NFh2b0xDYW1UU2FRbl84YnR5cmc#gid=0');

		// Send the query with a callback function.
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
		visualization = new google.visualization.BarChart(document.getElementById('chart_incomeVextrtacurricular'));
		visualization.draw(data, null);
	}
	
	google.setOnLoadCallback(drawVisualization);
</script>
