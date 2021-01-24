<!DOCTYPE html>
<html>
<head>
<title>Phonebook</title>
</head>
<style>
.wrapper{
  display: flex;
  border-radius: 10px;
  margin-left: auto;
  margin-right: auto;
  box-shadow: 1px 5px 50px 5px #ff66ff;
  width: 90%;
  min-height: 100%;
  padding: 20px;
  padding-bottom: 50px;
}
</style>
<body>
<h1 style="color: #000099;margin-top: 30px;text-align: center;padding-bottom: 10px">phonebook</h1>
<div class="wrapper">
  <div>
    <div style="margin-left: 560px">
      <b><h2>Contacts</h2></b>
    </div>
    <div style="margin-left: 60px">
  <table align="middle" width="181%" style="line-height:25px;border-collapse:collapse;border:1px solid black">
     <tr style="text-align:center;border:1px solid black">
      <th style="border:1px solid black;background-color:#DDD">S.no</th>
      <th style="border:1px solid black;background-color:#DDD">Name</th>
      <th style="border:1px solid black;background-color:#DDD">Phone Number</th>
      <th style="border:1px solid black;background-color:#DDD">Email</th>
     </tr>
  <?php
     $conn=new mysqli("localhost","root","","phonebook");
     if($conn->connect_error)
       die("Connection failed:".$conn->connect_error);
     $query="SELECT * FROM contact";
     $result=$conn->query($query);
     $row=$result->num_rows;
     $i=1;
     if($row>0)
      {  while($row=$result->fetch_assoc())
          { ?>
             <tr> 
              <td style="border:1px solid black"><?php echo $i ?></td>
              <td style="border:1px solid black"><?php echo $row['name']; ?></td>
              <td style="border:1px solid black"><?php echo $row['phone']; ?></td>
              <td style="border:1px solid black"><?php echo $row['email']; ?></td>
             </tr>
            <?php
            $i++;
          }
      }
  ?>
  </div>
  </table>    
  </div>
</div>
</body>
</html>