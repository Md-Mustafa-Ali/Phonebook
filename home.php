<!DOCTYPE html>
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
  padding: 50px;
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
  width: 128%;
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
<?php
     if(isset($_POST['submit']))
        {    $uid=$_POST['login'];
             $pass=$_POST['pass'];
             if(empty($uid) || empty($pass))
                echo '<script>alert("All fields required")</script>'; 
             else {
             $conn=new mysqli("localhost","root","","phonebook");
             if($conn->connect_error)
               die("Connection failed:".$conn->connect_error);
             else
               { $query="SELECT * FROM user WHERE id='".$uid."'";
                 $result=mysqli_fetch_assoc(mysqli_query($conn,$query));
                 if($result['pass']==$pass)
                   { header("location:dashboard.php");
                   }
                 else
                   echo '<script>alert("Wrong Password")</script>';
               } 
           }
        }  
?>
<body>
<h1 style="color: #000099;margin-top: 50px;text-align: center;padding-bottom: 70px">phonebook</h1>
<div class="wrapper">
  <div>
    <div style="margin-left: 115px">
      <b><h2>USER LOGIN</h2></b>
    </div>
    <form method="post">
      <input type="text" id="login" class="field" name="login" placeholder="login">
      <input type="password" id="password" class="field" name="pass" placeholder="password"><br>
      <input type="submit" class="button" name="submit" value="Log In">
    </form>
    <div id="formFooter">
      <a href="#">Forgot Password?</a>
    </div>
  </div>
</div>
</body>
</html>