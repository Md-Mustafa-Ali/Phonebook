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
  width: 95%;
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
#nname:checked ~ .nn {
  display:block;
}
#nphone:checked ~ .np {
  display:block;
}
#nemail:checked ~ .ne {
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
             $ninput=$_POST['input2'];
             if($input=='name')
              { $name=$_POST['name'];
                if(empty($name))
                  echo '<script>alert("Enter Name")</script>'; 
                else
                 { $conn=new mysqli("localhost","root","","phonebook");
                   if($conn->connect_error)
                     die("Connection failed:".$conn->connect_error);
                   elseif(!empty($_POST['nname']))
                    { mysqli_query($conn,"UPDATE contact SET name='".$_POST['nname']."' WHERE contact.name='".$name."'");
                      echo '<script>alert("Contact updated successfuly")</script>';
                    }
                   elseif(!empty($_POST['nphone']))
                    { mysqli_query($conn,"UPDATE contact SET phone='".$_POST['nphone']."' WHERE contact.name='".$name."'");
                      echo '<script>alert("Contact updated successfuly")</script>';
                    }
                   else
                    { if(val_e($email)==false)
                        echo '<script>alert("Enter valid Email-ID")</script>';
                      else
                        { mysqli_query($conn,"UPDATE contact SET email='".$_POST['nemail']."' WHERE contact.name='".$name."'");
                          echo '<script>alert("Contact updated successfuly")</script>';
                        }
                    }
                 }
              }
             else
              { $email=$_POST['email'];
                if(empty($email))
                  echo '<script>alert("Enter Email-ID")</script>';
                elseif(val_e($email)==false)
                  echo '<script>alert("Enter valid Email-ID")</script>';
                else
                 { $conn=new mysqli("localhost","root","","phonebook");
                   if($conn->connect_error)
                     die("Connection failed:".$conn->connect_error);
                   elseif(!empty($_POST['nname']))
                    { mysqli_query($conn,"UPDATE contact SET name='".$_POST['nname']."' WHERE contact.email='".$email."'");
                      echo '<script>alert("Contact updated successfuly")</script>';
                    }
                   elseif(!empty($_POST['nphone']))
                    { mysqli_query($conn,"UPDATE contact SET phone='".$_POST['nphone']."' WHERE contact.email='".$email."'");
                      echo '<script>alert("Contact updated successfuly")</script>';
                    }
                   else
                    { if(val_e($email)==false)
                        echo '<script>alert("Enter valid Email-ID")</script>';
                      else
                        { mysqli_query($conn,"UPDATE contact SET email='".$_POST['nemail']."' WHERE contact.email='".$email."'");
                          echo '<script>alert("Contact updated successfuly")</script>';
                        }
                    }
                 }
              }
        }  
?>
<body>
<h1 style="color: #000099;margin-top: 50px;text-align: center;padding-bottom: 70px">phonebook</h1>
<div class="wrapper">
  <div>
    <div style="margin-left: 70px">
      <b><h2>SEARCH AND MODIFY</h2></b>
    </div>
    <form action="" method="post">
      <label style="margin-left: 7px">Search by :</label><br><br>
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
      <label style="margin-left: 7px">Modify info :</label><br><br>
      <input style="margin-left: 45px" type="radio" id="nname" name="input2" value="nname" checked>
      <label for="name">Name</label>
      <input style="margin-left: 30px" type="radio" id="nphone" name="input2" value="nphone">
      <label for="email">Phone Number</label>
      <input style="margin-left: 30px" type="radio" id="nemail" name="input2" value="nemail">
      <label for="email">Email-ID</label>
      <div class="nn" hidden>
        <input type="text" class="field" name="nname" placeholder="Enter new name"><br>
      </div>
      <div class="np" hidden>
        <input type="text" class="field" name="nphone" placeholder="Enter new phone number"><br>
      </div>
      <div class="ne" hidden>
        <input type="text" class="field" name="nemail" placeholder="Enter new Email-ID"><br>
      </div>
      <input type="submit" class="button" name="submit" value="Modify">
    </form>
  </div>
</div>
</body>
</html>