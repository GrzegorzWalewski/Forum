addOnload(loadDoc);
addOnload(loadRole);
addOnload(loadNewer);
addOnload(loadPrimary);
addOnload(loadAll);
var base_url = '';
var role_url = '';
document.addEventListener('DOMContentLoaded', function(){ 
    base_url = document.head.querySelector("[name=base_url]").content;
}, false);
document.addEventListener('DOMContentLoaded', function(){ 
    role_url = document.head.querySelector("[name=role_url]").content;
}, false);
function loadDoc() //funkcja odpowiadająca za załadowanie widoku guest/profil
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("who").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/who",false);
	xhttp.send();
}
function loadRole()//Wyświetla link do dodawanie(zależnie od roli i podstrony)
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("userbuttons").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/userrole"+role_url,false);
	xhttp.send();
	setTimeout("loadRole()",5*1000);
}
function loadNewer()//Ładuje najnowsze wątki
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
	setTimeout("loadNewer()",60*5*1000);
}
function loadPrimary()//Ładuje najważniejsze wątki
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("primary").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"index/primary"+role_url,true);
	xhttp.send();
}
function loadAll()//ładuje wątki podzielone na grupy
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("all").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/allwatki"+role_url,true);
	xhttp.send();
	setTimeout("loadAll()",5*60*1000);
}
