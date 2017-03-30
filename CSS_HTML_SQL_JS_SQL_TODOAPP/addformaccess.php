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
</style>
</head>
<body>

<div class="header-cont">
    <div class="special">
		<ul class="navigation">
		<li class="navigations"><a href="about.php">  About  </a></li>
		<li class="navigations"><a href="Login_page.php">  Login Page  </a></li>
		<li class="navigations"><a href="addformhaccess.php">  Add list  </a></li>
	</ul>
		</div>
</div>

<div></div>
<body style="text-align: center;">

<h1 style="margin-top: 40px; margin-top:40px; padding-top:50px;">Add form</h1>
<h2>Feel free to add your stuff onto this list!</h2>

<h3>Your name</h3>
<form method="GET" action="addformaccess.php">
<p><select name="name" id="name">
  <option value="Chris">Chris</option>
  <option value="Random person!">Random person!</option>
  <option value="Somebody who likes my work">Somebody who likes my work</option>
  <option value="Undefined Person">Undefined Person</option>
</select></p>
<h3>Thing to do</h3>
<p><input name="activity" id="activity" placeholder="Example: Making wood stuff"></p>

<p><a href="about.html"><input type="submit"></a></p>
</body>

<?php
echo "\n \n \n ";

$name = $_POST["name"];
$activity = $_POST["activity"];
$servername = "localhost";
$username = "root";
$password = "mysql";

echo "This site is not completely finished. If you should happen to know PHP and SQL, feel free to contact Christian on the mail seen on the first site";
/*

$db = new mysqli("127.0.0.1", "root", "mysql", "app");
$db = mysqli_connect("localhost", "root", "mysql", "app");
if (!$db) {
	die("Connection failed: \n\n" . mysqli_connect_error());
}
echo "Connected successfully\n\n";

$sql = "CREATE TABLE app.access(name varchar(255), activity varchar(255))";
$sql = "INSERT INTO app.access(name, activity)
VALUES(".$name.",".$activity.")";
if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


$result = $db->query($sql);
*/
?>

</script>
</body>
</html>
