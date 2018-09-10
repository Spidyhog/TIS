function showSubCategory()
{
//Implementing Ajax in PHP
//AJAX Stands for Asynchronous Javascript and XML
//AJAX is used in web page for partial update of the web page content without reloading the complete web page
//Request submitted to Web server using Javascript and XML and response also.
//To use AJAX,Javascript DOM(Document Object Model) xmlHttpRequest object is used.
var request;
if(window.XMLHttpRequest)
{
//Initializing XMLHttpRequest object for new browsers(IE,Chrome,FireFox,Safari)
request=new XMLHttpRequest();
}
else
{
//Initializing XMLHttpRequest object for old IE browsers
request=new ActiveXObject("Microsoft.XMLHTTP");
}
//sending request to web server when the Web page is fully loaded
request.onreadystatechange=function()
{
//Check whether the Web Page is loaded completely or not using readyState code 4 and status code 200
if(this.readyState==4 && this.status==200)
{
	//Displaying the result from web server 
document.getElementById("subcat").innerHTML=this.responseText;
}
};
//Getting the category selected from the web page
var catName=document.getElementById("cat");
var value=catName.value;
//Sending the category name to PHP script on wweb server to retrieve the subcategory using GET method
request.open("GET","getSubCat.php?catname="+value,true);
request.send();
}