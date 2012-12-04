<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
google.load("visualization", "1", {packages:["corechart"]});
google.setOnLoadCallback(init);
function init(){

var academicChart = new google.visualization.BubbleChart(document.getElementById('chart_div'));
var schoolTypeChart = new google.visualization.BubbleChart(document.getElementById('chart_div2'));

drawChart();
drawChart2();

google.visualization.events.addListener(academicChart, 'onmouseover', updateSchoolTypeChart);
google.visualization.events.addListener(academicChart, 'onmouseout', clearSchoolTypeChart);
google.visualization.events.addListener(schoolTypeChart, 'onmouseover', updateAcademicChart);
google.visualization.events.addListener(schoolTypeChart, 'onmouseout', clearAcademicChart);

function drawChart() {
var data = google.visualization.arrayToDataTable([
['ID', 'Percent in Gifted Classes (Success)', 'Percent Repeated Grade (Failure)', 'Region', 'Number of Students Accounted For'],
['MW',    36.9,              9.7, 'Midwest',      10300+10448],
['W',    38.1,              11.8, 'West',      11188+11316],
['S',    46,               18.6, 'South',      17670+17879],
['NE',    36.2,              14.4, 'Northeast',      8259+8352],

]);

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

academicChart.draw(data, options);

}

function drawChart2() {
var data = google.visualization.arrayToDataTable([
['ID', 'Percent in Public School', 'Percent in Private Schools', 'Region', 'Number of Students Accounted For' ],
['MW',    69.9+10.4,              8.2+2.4,  'Midwest',     10556 ],
['W',    73+13.8,              3.2+2.5,    'West',       11450],
['S',    77.2+18.2,               4.3+2.4,     'South',     18077],
['NE',    73.4+9.9,              6.3+2.7,  'Northeast',  8450]
]);

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

schoolTypeChart.draw(data, options);
}

function updateSchoolTypeChart(e) {
console.log("updateSchoolTypeChart: here " + e['row']);
var row = e['row'];
schoolTypeChart.setSelection([{row:row, column:null}]);
}

function clearSchoolTypeChart(e) {
console.log("clearSchoolTypeChart: here " + e['row']);
var row = e['row'];
schoolTypeChart.setSelection([]);

}

function updateAcademicChart(e) {
console.log("updateAcademicChart: here " + e['row']);
var row = e['row'];
academicChart.setSelection([{row:row, column:null}]);

}

function clearAcademicChart(e) {
console.log("clearAcademicChart: here " + e['row']);
var row = e['row'];
academicChart.setSelection([]);

}

}
</script>

<div id="chart_div" style="width: 900px; height: 500px;"></div>
<div id="chart_div2" style="width: 900px; height: 500px;"></div>
