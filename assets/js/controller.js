var base_url = '';
document.addEventListener('DOMContentLoaded', function(){ 
    base_url = document.head.querySelector("[name=base_url]").content;
}, false);

function loadDoc()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("who").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/who",true);
	xhttp.send();
	setTimeout("loadDoc()",1000);
}
function loadRole()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("userbuttons").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/userrole",true);
	xhttp.send();
	setTimeout("loadRole()",1000);
}
function loadNewer()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("newer").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/newer",true);
	xhttp.send();
	setTimeout("loadNewer()",1000);
}
function loadPrimary()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("primary").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/primary",true);
	xhttp.send();
}