﻿<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
    <link rel="stylesheet" href="table.css">
	<style>

.in{
        display:none;
    }
    .in:hover{
        display:block;;
    }
    .out:hover .in{
        display:block;
    }
    
   
</style>

</head>
<body>
    
    <div id="header" style="position:fixed;">
		<label>Unison<span> Hotel </span> and Spa</label><br>
		<label>Admin Page</label>
    </div>
    <div id="leftnav">
		<ul>
	
			<li><a href="home.php">Status </a></li>
			<li><a href="roombook.php">Booked Rooms</a></li>
		
			<li class="out" ><a href="new.php">News Letter</a>
               <ul class="in">
					<li><a href="send-news.php "style="font-size:15px; margin-left:15px;">Post news</a></li>
               </ul>    
        </li>
			<li><a href="mess.php">User Message</a></li>
            <li class="out"><a href="add room.php">Add room</a>
            <ul class="in">
					<li><a href="view room.php "style="font-size:15px; margin-left:15px;">View Added Rooms</a></li>
               </ul>   
        </li>
			<li><a href="logout.php">Log out</a></li>
		</ul>

	</div>
    
    <img style="top:30px; right:90px; position:fixed;background-color:white;width:40px;height:40px;" id="div1" src="setting.png" >
    <select onchange="location = this.value;" style="top:70px; right:50px; position:fixed;background-color:white;>
		<option value="">setting</option>
        <option></option>
        <option value="add admin.php">Manage login data</option>
        <option value="add.php">Add New Admin</option><br><br>
	  </select>
	<?php 
    

     $conn=mysqli_connect("localhost","root","","hotel");
     $rb="SELECT * FROM roombook";
     $ret=mysqli_query($conn,$rb);
    
    
if (mysqli_num_rows($ret) > 0) {
?>
<div class="d1"> <center> <h1>BOOKED ROOMS</h1> </center>
 
<table >
<tr>
<th>Title</th>
<th>First name</th>
<th>Last name</th>
<th>Email</th>
<th>National</th>
<th>Country</th>
<th>Phone</th>
<th>No of bed</th>
<th>Meal</th>
<th>ceheck in date</th>
<th>check out date</th>
<th>Status</th>
<th>no of days</th>


</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($ret)) {
?>
<tr>
<td><?php echo $row["Title"]; ?></td>
<td><?php echo $row["FName"]; ?></td>
<td><?php echo $row["LName"]; ?></td>
<td><?php echo $row["Email"]; ?></td>
<td><?php echo $row["National"]; ?></td>
<td><?php echo $row["Country"]; ?></td>
<td><?php echo $row["Phone"]; ?></td>
<td><?php echo $row["NRoom"]; ?></td>
<td><?php echo $row["Meal"]; ?></td>
<td><?php echo $row["cin"]; ?></td>
<td><?php echo $row["cout"]; ?></td>
<td><?php echo $row["stat"]; ?></td>
<td><?php echo $row["nodays"]; ?></td>
</tr>
<?php
$i++;
}
?>

</table>
</center>
</div>
<?php
}
else{
echo "No result found";
}
?>
</div>

				
</body>

</html>