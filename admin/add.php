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
<body >
    
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
        <option value="add.php">Add New Admin</option>
        <option value="add admin.php">Manage login data</option>
	  </select>
    <h4 >Add the User name and Password</h4>
    <form method="post" style="margin:200px 100px 00px 450px; background-color:darkgrey; height:150px; width:500px; padding:60px 0px 60px 60px; color:darkviolet;">

         <label>Add new User name</label>
            <input name="newus"  placeholder="Enter User name"> <br><br>
              
            <label style="padding-right:36px;">New Password</label>
              <input name="newps"  placeholder="Enter Password"><br><br>
                      
          <input type="submit" name="in" value="Add" class="btn btn-primary" style="margin-left:100px; padding:0px 20px 0px 20px;" >
            </form>
                                        

                                           
     </div> 
     <?php 
      
      $conn=mysqli_connect("localhost","root","","hotel");
    
     if(isset($_POST['in']))
                       {
                           $newus = $_POST['newus'];
                           $newps = $_POST['newps'];
                           
                           $newsql ="Insert into login (usname,pass) values ('$newus','$newps')";
                           if(mysqli_query($conn,$newsql))
                           {
                           echo' <script language="javascript" type="text/javascript"> alert("User name and password Added") </script>';
                           
                       
                           }
                       header("Location: add admin.php");
                       }
                       ?> 
</body>
</html>