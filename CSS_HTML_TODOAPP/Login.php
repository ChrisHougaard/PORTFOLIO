<?php
?>

<head>
<style>

body {
  background-image: url(background.jpg);
  background-size: 256px 256px;
  background-repeat: repeat;
  background-color: #013b61;
  font-family:Helvetica;
  }

h1{color: white;
  text-align: center;
  font-size: 350%;
  font-family:Helvetica;
  margin-top: 40px;
}

h2{color: white;
  font-size: 170%;
  text-align: center;
  font-family:Helvetica;
  margin-right: 130px;
  margin-top: 45px;
}

form {
  color: white;
}

input[type=submit] {
    margin-left:100px;
    border-radius: 4px;
    color: grey;
    border: 0;
    width: 80px;
    height:20px;
    font-family:Helvetica;
    background: white;
}

.check {
  text-align: center;
  color: red;
}

.login {
    border: 2px solid #cdcdcd;
    padding: 0px 20px;
    background: #00a2cc;
    width: 300px;
    border-radius: 20px;
    text-align: center;
    margin: auto;
}

textarea[name="UN"]{
    padding: 10px;
    height: 30px;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
    margin-left: 6px;
}

textarea[name="PW"]{
    padding: 10px;
    height: 30px;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
}

a:link {color: white;}

a:visited {color: white;}

a:hover {color: grey;}

a:active {color: grey;}


.tooltip {
    position: relative;
    display: inline-block;
  }
.tooltip .tooltiptext {
    visibility: hidden;
    width: 200px;
    background-color: #555;
    color: #fff;
    text-align: center;
    padding: 5px 0;
    border-radius: 6px;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 450%;
    margin-left: -200px;
    opacity: 0;
    transition: opacity 1s;
}
.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;
}
</style>

<body>

<?php
    session_start();
 ?>

<br/>
<h1>To-do List App</h1>

<br/>
<br/>

<div class="login">
<h2>LOGIN</h2>


<form method="GET" action="Login.php">
  <label><img src="Username.png" style="width:30px;height:30px;">
  <input name="UN" placeholder="Username" rows="1"
  cols="20"></input>
  <br>
<label><img src="Password.png" style="width:35px;height:35px;">
  <input type="password" name="PW" placeholder="Password" rows="1" cols="20"></input>
  <br>
  <br>
  <input type="submit">
  <?php
        $_SESSION["UserN"] = $_GET["UN"];
        $_SESSION["PassW"] = $_GET["PW"]; ?>
  <br>
  <br>
  <br>
  <div class="tooltip">Tip!
  <span class="tooltiptext">You can log on using the creator of this applications first and last name, or simply "User" and "Password". </span>
</div>  <p> </p>
  <br>
  <a href="landing.php">Back To Landing Page</a><img src="back-icon.png" style="width:30px;height:30px;">
  <br>
</form>
</div>
<br>
<br>
<br>
<div class="Check">
<?php
if (isset($_GET["UN"])) {
  if ($_GET["UN"] == "User" && $_GET["PW"] == "Password") {
    header('Location: /todo.php');}
   elseif ($_GET["UN"] == "Christian" && $_GET["PW"] == "Hougaard-Enevoldsen") {
    header('Location: /todo.php');
  } else { echo "Access Denied";
}
}
?>
</div>
</body>
