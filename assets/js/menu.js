addOnload(menu);
function menu()
{
	var linkMenu=document.getElementById("menu_link");
	linkMenu.onmouseover=toggleMenu;
	linkMenu.onclick=function()
	{
		return false;
	}
}
function toggleMenu()
{
	var menuName="menu";
	document.getElementById(menuName).style.display="inline-block";
	this.parentNode.className=menuName;
	this.parentNode.onmouseout=function()
	{
		document.getElementById(this.className).style.display="none";
	}
	this.parentNode.onmouseover=function()
	{
		document.getElementById(this.className).style.display="inline-block";
	}
}