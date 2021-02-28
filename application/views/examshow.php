<!DOCTYPE html>
<html>
<head>

<title>records</title>
<style type="text/css">
  
  body{

    background:#FFF0F5;

  }

  th{
    color:white;
    font-family: sans-serif,bold;
  }

  tr{
    color:black;
    font-family: sans-serif;
  }

  a{
    color:orangered;
    font-family:sans-serif;
    font-size:20px;
  }

</style>

</head>
 
<body>

<!-- <input type="submit" value="add new" name="add"> -->

<?php echo "<a href='index'?>Add new record</a>";?>

  
<table width="1400" border="1" cellspacing="7" cellpadding="7">
  <tr style="background:#696969" >
    <th>Id</th>
    <th>name</th>
    <th>email</th>
    <th>password</th>
    <th>phone</th>
    <th>address</th>
   <th>View</th>
   <th>Update</th>
   <th>Delete</th>

  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$i."</td>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->email."</td>";
  echo "<td>".$row->password."</td>";
  echo "<td>".$row->phone."</td>";
  echo "<td>".$row->address."</td>";

  echo "<td><a href='viewpage?id=".$row->id."'>view</a></td>";
  echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
  echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
 
</body>
</html>


     
