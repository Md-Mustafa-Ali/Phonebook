<!DOCTYPE html>
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
</style>
<body>
<h1 style="color: #000099;margin-top: 50px;text-align: center;padding-bottom: 70px">phonebook</h1>
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