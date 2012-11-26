//Check for browser-compatible transform function name
var props = 'transform WebkitTransform MozTransform OTransform msTransform'.split(' '),
	prop,
	el = document.createElement('div');
for(var i = 0, l = props.length; i < l; i++) {
	if(typeof el.style[props[i]] !== "undefined") {
		prop = props[i];
		break;
	}
}

//Navigation
var xAngle = 0, yAngle = 0;
$('body').keydown(function(evt) 
{
	switch(evt.keyCode) 
	{
		case 37: // left
			yAngle -= 90;
			break;
		
		case 38: // up
			xAngle += 90;
			break;
		
		case 39: // right
			yAngle += 90;
			break;
			
		case 40: // down
			xAngle -= 90;
			break;
	};
	document.getElementById('cube').style[prop] = "rotateX("+xAngle+"deg) rotateY("+yAngle+"deg)";
});	
