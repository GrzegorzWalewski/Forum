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
	xhttp.open("GET",base_url+"/index/who",true);
	xhttp.send();
	setTimeout("loadDoc()",1000);
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
	xhttp.open("GET",base_url+"/index/userrole"+role_url,true);
	xhttp.send();
	setTimeout("loadRole()",1000);
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
	setTimeout("loadNewer()",1000);
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
	xhttp.open("GET",base_url+"index/primary",true);
	xhttp.send();
}
function loadAll()
{
	var xhttp=new XMLHttpRequest();
	xhttp.onreadystatechange=function()
	{
		if(this.readyState==4 && this.status==200)
		{
			document.getElementById("all").innerHTML=this.responseText;
		}
	}
	xhttp.open("GET",base_url+"/index/allwatki",true);
	xhttp.send();
	setTimeout("loadAll()",1000);
}