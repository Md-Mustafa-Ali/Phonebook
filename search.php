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
  margin-left: auto;
  margin-right: auto;
  box-shadow: 1px 5px 50px 5px #ff66ff;
  width: 400px;
  min-height: 200px;
  padding: 20px;
  padding-right: 50px;
  padding-left: 50px;
  padding-bottom: 50px;
}
.wrapper:hover
{ box-shadow:1px 5px 50px 5px #ff66ff;
  transform: scale(1.03);
  transition: transform 1s;
}
.field {
  display: flex;
  background: #ffe6ff;
  outline: none;
  margin-top: 20px;
  border-radius: 5px;
  border: 1px;
  margin-left: 5px;
  margin-right: auto;
  width: 110%;
  height: 10px;
  padding: 20px;
}
.button {
  height: 45px;
  width: 150px;
  margin-left: 120px;
  border-radius: 50px;
  border: none;
  color: white;
  background-color: #1171a2;
}
.button:hover {
  height: 45px;
  width: 150px;
  background-color: #56baed;
  transform: scale(1.03);
  transition: transform 0.3s;
}
#name:checked ~ .name {
  display:block;
}
#email:checked ~ .email {
  display:block;
}
</style>
<?php
     function val_e($value)
      { if(filter_var($value,FILTER_VALIDATE_EMAIL))
           return true;
        else
           return false;
      }
     if(isset($_POST['submit']))
        {    $input=$_POST['input'];
             if($input=='name')
              { $name=$_POST['name'];
                if(empty($name))
                  echo '<script>alert("Enter Name")</script>'; 
                else
                 { $_SESSION['name']=$name;
                   header("location:contact_view.php");                       
                 }
              }
             else
              { $email=$_POST['email'];
                if(empty($email))
                  echo '<script>alert("Enter Email-ID")</script>';
                elseif(val_e($email)==false)
                  echo '<script>alert("Enter valid Email-ID")</script>';
                else
                 { $_SESSION['email']=$email;
                   header("location:contact_view.php");
                 }
              }
        }  
?>
<body>
<h1 style="color: #000099;margin-top: 50px;text-align: center;padding-bottom: 70px">phonebook</h1>
<form method="get">
  <input type="submit" style="margin-right:40px;margin-top:-130px;float:right;color: red;background-color: #56baed;border-radius: 10px" class="button" name="logout" value="Logout">
</form>
<div class="wrapper">
  <div>
    <div style="margin-left: 90px">
      <b><h2>SEARCH CONTACT</h2></b>
    </div>
    <form action="" method="post">
      <label style="margin-left: 7px">Search By :</label><br><br>
      <input style="margin-left: 110px" type="radio" id="name" name="input" value="name" checked>
      <label for="name">Name</label> 
      <input style="margin-left: 30px" type="radio" id="email" name="input" value="email">
      <label for="email">Email-ID</label>
      <div class="name" hidden>
        <input type="text" id="name" class="field" name="name" placeholder="Enter name"><br>
      </div>
      <div class="email" hidden>
        <input type="text" id="email" class="field" name="email" placeholder="Enter Email-ID"><br>
      </div>
      <input type="submit" class="button" name="submit" value="Search">
    </form>
  </div>
</div>
</body>
</html>