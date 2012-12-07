<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]}); //loading chart visualization from Google Charts API
google.setOnLoadCallback(init); //Starting the info-viz after the page loads
function init(){

//creates the chart in the specified div
var academicChart = new google.visualization.BubbleChart(document.getElementById('chart_div'));
//creates the chart in the specified div
var schoolTypeChart = new google.visualization.BubbleChart(document.getElementById('chart_div2'));

drawChart(); //calls the implemented function "drawChart"
drawChart2(); //calls the implemented function "drawChart2"

//add an event listener to the charts. These are responsible for calling the functions that implement
//the interaction within the info-viz
google.visualization.events.addListener(academicChart, 'onmouseover', updateSchoolTypeChart); //mouse hover linking
google.visualization.events.addListener(academicChart, 'onmouseout', clearSchoolTypeChart); //clear linking when mouse stops hovering
google.visualization.events.addListener(schoolTypeChart, 'onmouseover', updateAcademicChart); //mouse hover linking
google.visualization.events.addListener(schoolTypeChart, 'onmouseout', clearAcademicChart); //clear linking when mouse stops hovering

function drawChart() {
//populate the chart data with the data from our data source	
var data = google.visualization.arrayToDataTable([
['ID', 'Percent in Gifted Classes (Success)', 'Percent Repeated Grade (Failure)', 'Region', 'Number of Students Accounted For'],
['MW',    36.9,              9.7, 'Midwest',      10300+10448],
['W',    38.1,              11.8, 'West',      11188+11316],
['S',    46,               18.6, 'South',      17670+17879],
['NE',    36.2,              14.4, 'Northeast',      8259+8352],

]);

//set up customization for our chart
var options = {
title: 'Academic Success/Failure in US Regions',
hAxis: {title: 'Success (Percent in Gifted Classes)'},
vAxis: {title: 'Failure (Percent Repeated a Grade)'},
colorAxis: {colors: ['yellow', 'green']},
bubble: {textStyle: {fontSize: 11}},
sizeAxis : {
minSize : 15
}
};

//call the google api draw method to render the chart
academicChart.draw(data, options);

}

function drawChart2() {
//populate the chart data with the data from our data source	
var data = google.visualization.arrayToDataTable([
['ID', 'Percent in Public School', 'Percent in Private Schools', 'Region', 'Number of Students Accounted For' ],
['MW',    69.9+10.4,              8.2+2.4,  'Midwest',     10556 ],
['W',    73+13.8,              3.2+2.5,    'West',       11450],
['S',    77.2+18.2,               4.3+2.4,     'South',     18077],
['NE',    73.4+9.9,              6.3+2.7,  'Northeast',  8450]
]);

//set up customization for our chart
var options = {
title: 'School Type Statistics in US Regions',
hAxis: {title: 'Percent in Public Schools'},
vAxis: {title: 'Percent in Private Schools'},
colorAxis: {colors: ['yellow', 'green']},
bubble: {textStyle: {fontSize: 11}},
sizeAxis : {
minSize : 15
}
};

//call the google api draw method to render the chart
schoolTypeChart.draw(data, options);
}

//implements linking within the chart by highlighting the correct
//bubble when the corresponding bubble in the other chart is being
//viewed
function updateSchoolTypeChart(e) {
console.log("updateSchoolTypeChart: here " + e['row']);
var row = e['row'];
schoolTypeChart.setSelection([{row:row, column:null}]); //highlights the correct bubble
}

//implements linking within the chart by removing the correct highlighting of a
//bubble when the corresponding bubble in the other chart is being
//viewed. This avoids confusion when interpreting the chart
function clearSchoolTypeChart(e) {
console.log("clearSchoolTypeChart: here " + e['row']);
var row = e['row'];
schoolTypeChart.setSelection([]); //clears the highlight

}

//implements linking within the chart by highlighting the correct
//bubble when the corresponding bubble in the other chart is being
//viewed
function updateAcademicChart(e) {
console.log("updateAcademicChart: here " + e['row']);
var row = e['row'];
academicChart.setSelection([{row:row, column:null}]); //highlights the correct bubble

}

//implements linking within the chart by removing the correct highlighting of a
//bubble when the corresponding bubble in the other chart is being
//viewed. This avoids confusion when interpreting the chart
function clearAcademicChart(e) {
console.log("clearAcademicChart: here " + e['row']);
var row = e['row'];
academicChart.setSelection([]); //clears the highlight

}

}
</script>

<div id="chart_div" style="width: 600px; height: 300px;"></div>
<div id="chart_div2" style="width: 600px; height: 300px;"></div>
