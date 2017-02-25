<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8">
<title>Czat Obozowy!</title>
<script type="text/javascript">
function loadDoc()
{
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function(){
if(this.readyState==4 && this.status==200){
document.getElementById("messa").innerHTML=this.responseText;
}
}
xhttp.open("GET","/default",true);
xhttp.send();
setTimeout("loadDoc()",1000);
}
</script>
</head>
<body onload="loadDoc()">
	<div id="messa">
	</div>
</body>
</html>