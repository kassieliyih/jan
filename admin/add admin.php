<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" con
    tent="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">
	<style>
		h1{
			padding-top:120px;
			padding-left:400px;
		}
	</style>
</head>
<body>
    
<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}

ob_start();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Admin.css">
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




       <?php
				$conn=mysqli_connect("localhost","root","","hotel");
				$sql = "SELECT * FROM login";
				$re = mysqli_query($conn,$sql);
                if (mysqli_num_rows($re) > 0) {
                    ?>
      
           <br><h1>Manage Login Data</h1><br> 
			             <table>
                                        <tr>
                                            <th>Id</th>
											<th>Username</th>
                                            <th>Password</th>
                                            <th>Update</th>
											<th>Removal</th>
                                            
                                        </tr>

                                    <tr>
                                    
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											  ?>
												<tr >
													<td><?php echo $row["id"]; ?></td>
                                                     <td><?php echo $row["usname"]; ?></td>
                                                      <td><?php echo $row["pass"]; ?></td>
													<td style="text-align:center; background-color:blue; color:white">
						<form method="POST" action="add admin.php">
                       <button name="update" value="<?php echo $row['id']?>"  style="width:100px; height:30px;border-radius:4px; "> Update</button>
						</form>
						</td>
                        <td style="text-align:center; background-color:blue; color:white">
						<form method="POST" action="add admin.php">
						<button name="delete" onclick="return confirm('Are you sure')" value="<?php echo $row['id']?>"  style="width:100px; height:30px;border-radius:4px; ">Delete</button>
						</form>
						</td>
					</tr>
                    
					<?php
                    
					}
                }
					if(isset($_POST['delete'])){

						$Pid=$_POST['delete'];
                     
						$sql = "DELETE FROM login WHERE id='$Pid'";
						$result=mysqli_query($conn,$sql);
						if($result){
						echo "<script>alert(' Deleted Successfully')</script>";
                        header ("location:add admin.php");
						}
						else{echo "<script>alert('Product Not Deleted')</script>";}
						
                    }
                    if(isset($_POST['update'])){
                        $pid=$_POST['update'];
                        header ('location:update.php?id='.$pid);
                    }
				?>
                
      
     <a href="add.php"><button >Add New Admin</button> </a> 
    
 
     
                            
</body>
</html>
</body>
</html>