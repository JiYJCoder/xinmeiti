window.onresize = function() {
	fontSize();
}

function fontSize() {
	var deviceWidth = document.documentElement.clientWidth;
	if(deviceWidth > 640) deviceWidth = 640;
	document.documentElement.style.fontSize = Math.floor(deviceWidth / 6.4 * 100) / 100 + 'px';
}
fontSize();
