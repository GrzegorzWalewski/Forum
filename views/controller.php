<!DOCTYPE html>
<html lang="pl">
<head>
<meta cherset="utf-8">
<title>NajlepszeForum</title>
<script type="text/javascript">
function loadDoc()
{
var xhttp=new XMLHttpRequest();
xhttp.onreadystatechange=function(){
if(this.readyState==4 && this.status==200){
document.getElementById("who").innerHTML=this.responseText;
}
}
xhttp.open("GET","/default/index.php/index/who",true);
xhttp.send();
setTimeout("loadDoc()",1000);
}
</script>
</head>
<body onload="loadDoc()">
<p>Najlepsze Forum</p>
<div id="who">
	</div>
</body>
</html>
