<?php  
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
	<style>
    body{
        background-color:white;
    }
    .nav{
        background-color:black;
        color:white;
    }
    table{
        
		padding-top:30px;
        width:1000px;
		padding-left:250px;
        


        
    }
    th{
        background-color:green;
        color:white;}
    td{
        padding-bottom:10px;
        background-color:silver;
       

    }
	.d1{
        width:1200;
        padding-top:100px;
        padding-left:60px;
        background-color:white;
    }
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
			<li><a href="payment.php">Payment</a></li>
            <li class="out"><a href="new.php">News Letter</a>
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
        <option value="add.php">Add New Admin</option><br><br>
        <option value="add admin.php">Manage login data</option>
	  </select>
<?php 
    

     $conn=mysqli_connect("localhost","root","","hotel");
     $contact="SELECT * FROM mess";
     $ret=mysqli_query($conn,$contact);
    
    
if (mysqli_num_rows($ret) > 0) {
?>
<div class="d1"> <center> <h1>USERS' MESSAGE</h1> </center>
 
<table >
<tr>
<th>Name</th>
<th>Email id</th>
<th>Message</th>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($ret)) {
?>
<tr>
<td><?php echo $row["uname"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["message"]; ?></td>
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

</body>
</html>
  