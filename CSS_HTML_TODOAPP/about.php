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
  border-left: 200px;

}

h2{color: white;
  font-size: 170%;
  text-align: center;
  font-family:Helvetica;
  margin-top: 45px;
}

h3{color: white;
  text-decoration:underline;
  text-align: right;}

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


.list {
    border: 2px solid #cdcdcd;
    padding: 4px 20px;
    background: #00a2cc;
    width: 408px;
    border-radius: 20px;
    text-align: center;
    margin: auto;
}

.finishedlist {color: white;
margin-left: 250px;}



textarea[name="List"]{
    padding: 10px;
    height: auto;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
}

textarea[name="Task"]{
    padding: 10px;
    height: auto;
    border-radius: 5px;
    border: 1px solid #cdcdcd;
    background-color: white;
    font-size: 16px;
}

#ahref{
  background-color: #013b61;
  color: white;
  padding: 14px 35px;
  float: center;
  margin-left: 1px;
  margin-right: 1px;
}

a:hover, a:active {
    background-color: #cdcdcd;
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

<div class="List">

<br>

<br>
<a href="login.php" id="ahref">Login</a>
<a href="<?php if ($_SESSION["UserN"] == "admin" && $_SESSION["PassW"] == "password") {
   echo "todo.php"; } else echo "login.php"?>" id="ahref">Todo List</a>
<a href="landing.php" id="ahref">Home</a>
<br>
<h2 style="align:center;">About</h2>

<p> Made by: <a href="https://www.facebook.com/christian.hougaardenevoldsen">Christian Hougaard-Enevoldsen </a> <br>
  <a href="http://www.waukeeapex.org/economic-sectors/business-technology-communication/information-management-design/" title="The high school program that teached me to code">For Waukee High School </a> <br>
  Last Updated: May 15'th 2016<br>
  Created: May 2'th 2016<br>
  <br>
</p>

</body>
