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
  width: 120%;
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
</style>
<script>
</script>
<?php
    function val_e($value)
      { if(filter_var($value,FILTER_VALIDATE_EMAIL))
           return true;
        else
           return false;
      }
     function validate($value,$num)
      { if(is_numeric($value) && $num==strlen($value))
           return true;
        else
           return false;
      }
     if(isset($_POST['submit']))
        {    $name=$_POST['name'];
             $pno=$_POST['pno'];
             $email=$_POST['email'];
             if(empty($name) || empty($email))
               {  if(empty($name))
                    { echo '<script>alert("Enter Name")</script>'; }
                  else
                    { echo '<script>alert("Enter Email ID")</script>'; }
               }
             else
               { if(val_e($email)==false)
                   echo '<script>alert("Enter valid Email ID")</script>';
                 elseif(validate($pno,10)==false)
                   echo '<script>alert("Enter valid 10 digit mobile number")</script>';
                 else
                   { $conn=new mysqli("localhost","root","","phonebook");
                     if($conn->connect_error)
                       die("Connection failed:".$conn->connect_error);
                     else
                       mysqli_query($conn,"INSERT INTO contact (name,pno,email) VALUES('".$name."','".$pno."','".$email."')");
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
    <div style="margin-left: 115px">
      <b><h2>ADD CONTACT</h2></b>
    </div>
    <form action="" method="post">
      <input type="text" id="name" class="field" name="name" placeholder="Name*">
      <input type="text" id="pno" class="field" name="pno" placeholder="Phone number">
      <input type="text" id="email" class="field" name="email" placeholder="Email address*"><br>
      <input type="submit" class="button" name="submit" value="Save">
    </form>
  </div>
</div>
</body>
</html>