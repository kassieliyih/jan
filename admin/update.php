<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
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
        <option value="add.php">Add New Admin</option><br><br>
        <option value="add admin.php">Manage login data</option>
	  </select>
    <h3 >Change the User name and Password</h3>
                                
    <form method="post" style="margin:200px 100px 00px 450px; background-color:darkgrey; height:150px; width:500px; padding:60px 0px 60px 60px; color:darkviolet;">
    
        <label>Change User name:</label>
        <input name="usname" >
    <br><br><br>
        <label>Change Password:</label>
        <input name="pasd" ><br>
    
   <input type="submit" name="up" value="Update" ><br><br>
      </form>

<?php 
session_start();
$conn=mysqli_connect("localhost","root","","hotel");

if(isset($_POST['up']))
{
$usname = $_POST['usname'];
$passwr = $_POST['pasd'];
$id=$_GET['id'];
$upsql = "UPDATE login SET usname='$usname',pass='$passwr' WHERE id = '$id'";
if(mysqli_query($conn,$upsql))
{
echo' <script language="javascript" type="text/javascript"> alert("User name and password update") </script>';


}

header("Location: add admin.php");

}

?>     
</body>
</html>