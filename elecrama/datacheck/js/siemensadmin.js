$(document).ready(function(e) {
	$("#Sort_by_Date").datepicker();
});

function ltrim(str) {
		return str.replace(/^\s+/,"");
}

function rtrim(str) {
		return str.replace(/\s+$/,"");
}
	
function trim(str) {
		var str = str.toString();
		return rtrim(ltrim(str.replace(/^\s+|\s+$/g,"")));
}

