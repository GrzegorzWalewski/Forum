function addOnload(newFunction) {
	var oldOnload = window.onload;
	
	if (typeof oldOnload == "function") {
		window.onload = function() {
			if (oldOnload) {
				oldOnload();
			}
			newFunction();
		}
	}
	else {
		window.onload = newFunction;
	} 
}