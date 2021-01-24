<!DOCTYPE html>
<?php 
ob_start();
session_start();
if(!isset($_SESSION['user']))
    header("location:home.php");
if(isset($_GET['logout']))
  {  session_destroy();
     header("location:home.php");  
  }
?>
<html>
<head>
<title>Phonebook</title>
</head>
<style>
.wrapper {
  display: flex;
  border-radius: 10px;
  box-shadow: 1px 2px 20px 1px #ff66ff;
  margin-left: 10px;
  min-height: 50px;
}
.one {
  float: left;
  width: 200px;
  margin-left:310px;
  padding: 40px;
  padding-left: 120px;
}
.two {
  width: 200px;
  margin-left:310px;
  padding: 40px;
  padding-left: 120px;
}
.three {
  width: 420px;
  margin-left:310px;
  padding: 40px;
  padding-left: 260px;
}
.wrapper:hover
{ background: #ffe6ff;
}
a {
  text-decoration: none;
  color: black;
}
.button {
  height: 45px;
  width: 150px;
  margin-left: 120px;
  border-radius: 10px;
  border: none;
  color: red;
  background-color: #56baed;
}
.button:hover {
  height: 45px;
  width: 150px;
  background-color: #56baed;
  transform: scale(1.03);
  transition: transform 0.3s;
}
</style>
<body>
<div>
<h1 style="color: #000099;margin-top: 50px;text-align: center;padding-bottom: 70px">phonebook</h1>
<form method="get">
  <input type="submit" style="margin-right:40px;margin-top:-130px;float:right" class="button" name="logout" value="Logout">
</form>
</div>
<a href="add.php">
 <div class="wrapper one">
   <p>Add contact</p>
 </div>
</a>
<a href="delete.php">
 <div class="wrapper two">
 <p>Delete contact</p>
 </div>
</a>
<a href="search.php">
 <div class="wrapper one">
   <p>Search contact</p>
 </div>
</a>
<a href="all.php">
 <div class="wrapper two">
 <p>Get all contact</p>
 </div>
</a>
<a href="ex.php">
 <div class="wrapper three">
 <p>Modifying an existing contact</p>
 </div>
</a>
</body>
</html>