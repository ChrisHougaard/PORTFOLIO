<html>
<head>
<style type="text/css">
body	{
	background:url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/sayagata-400px.png);
	background-repeat:repeat;
	font-size:1.5em;
	color:navy;
  text-align: center;
	margin:0px;

}
ul.navigation	{
	list-style-type:none;
	margin: 0px;
	padding: 0px;
}
li.navigations	{
	display: inline;
text-decoration: none;

}
.header-cont {
    width:100%;
    position:fixed;
    top:0px;
		background-color:#3b7bbf;
	}
	.header-cont-bottom {
		    width:100%;
		    position:fixed;
		    bottom: :0px;

}
.header {
    height:50px;
    border:1px solid #CCC;
    width:100%;
    margin:0px auto;
		background-color: black;
}

.content {
    width:960px;
    background: #F0F0F0;
    border: 1px solid #CCC;
    height: 2000px;
    margin: 70px auto;
}

li a {
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
div.special{
border-top: 33px;
border-bottom:33px;
border-color:#3b7bbf;
}
.active {
    background-color: #CCC;
}
info.data-tooltip{


}
</style>
</head>
<body>

<div class="header-cont";>
    <div class="special">
		<ul class="navigation">
		<li class="navigations"><a href="about.php">  About  </a></li>
		<li class="navigations"><a href="Login_page.php">  Login Page  </a></li>
		<li class="navigations"><a href="addform.php" info.data-tooltip="Please log in to use this function">  Add list  </a></li>
		</li>
	</ul>
		</div>
</div>

<div></div>
<body style="text-align: center;">

<head></head>
<body style="text-align: center;">
<h1 id="languagetop" style="margin-top:40px; margin-top:40px; padding-top:50px;">Enter your username & password</h1>

<br />
<br />
<form method="GET" action="Login_Page.php">
<p><abbr title="Input your username here" id="username">Username</abbr> <input name="username" placeholder="Input Username here"/></p>
<p><abbr title="Input your password here" id="password">Password</abbr> <input name ="password" type="password" placeholder="Input Password here"/></p>
<p><input type="submit" value="Submit" /></a></p>
</form>
<h3 id="language" name="language">English</h3>

<div class="header-cont-bottom">
    <div class="special">
		<ul class="navigation">
		<li class="navigations"><input value="Danish" type="submit"  onclick="ChangeGerman();" style="float:left" ></li>

		<li class="navigations"><input value="English" type="submit" onclick="ChangeEnglish();" style="float:right">
		</li>
		</div>
</div>
</body>
<p id="pst"> Pssst! The username and password are the two first words a computer usually utters!</p>
<?php

$username = $_GET['username'];
$password = $_GET['password'];
$language = $_GET['language'];

if ($username == "hello" && $password == "world") {
 header("Location: addformaccess.php");}
 elseif ($username == "firma" && $password == "kvalifik") {
header("location: addformaccess.php");}

elseif ($username == "" && $password == "" && $language == "English" ) {
echo "Input username and password";
}
elseif ($username == "User" && $password == "" && $language == "Danish" ) {
echo "Indtast brugernavn og kodeord";
}
elseif ($language == "Danish") {
echo "Ugyldigt brugernavn og kodeord";
}
elseif ($language == "English" ) {
echo "Input username and password";
}
else 	{
echo "Please input valid username / password";
}
?>

<script type="application/javascript">


function ChangeGerman() {
  var nameHtml = document.getElementById("languagetop").innerHTML = "Indtast brugernavn og kodeord";
	var nameHtml = document.getElementById("language").innerHTML = "Dansk";
	var nameHtml = document.getElementById("username").innerHTML = "Brugernavn";
	var nameHtml = document.getElementById("password").innerHTML = "Kodeord   ";
	var nameHtml = document.getElementById("pst").innerHTML = " Pssst! Brugernavnet og kodeordet er de to første ord man normalt får en computer til at sige!"

}

function ChangeEnglish() {
  var nameHtml = document.getElementById("languagetop").innerHTML = "Enter your username & password";
	var nameHtml = document.getElementById("language").innerHTML = "English";
	var nameHtml = document.getElementById("username").innerHTML = "Username";
	var nameHtml = document.getElementById("password").innerHTML = "Password";
	var nameHtml = document.getElementById("pst").innerHTML = " Pssst! The username and password are the two first words a computer usually utters!"

	}
		</script>
	</body>
	</html>
