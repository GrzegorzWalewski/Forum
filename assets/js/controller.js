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
	xhttp.open("GET","/default/index/who",true);
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
	xhttp.open("GET","/default/index/userrole<?php if(isset($watek)&&!isset($wpisy)){echo "/watek/";}if(isset($posty)&&!isset($wpisy)){echo "/posty/".$id;}if(isset($wpisy)){echo "/wpisy/".$id;} ?>",true);
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
	xhttp.open("GET","/default/index/newer",true);
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
	xhttp.open("GET","/default/index/primary",true);
	xhttp.send();
}