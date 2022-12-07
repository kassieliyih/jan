
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
  

 
    h1{
    margin-left:300px;
    }
	.button{
		margin-left:300px;
		background-color:orange;
		
	}
	button{
		background-color:orange;	
	}
	button:hover{
		background-color:red;	
	}
	.btn{
		width:100px;
		height:40px;
		border-radius:6px;

	}
    .btn:hover{
		width:100px;
		height:40px;
		border-radius:6px;
		background-color:black;
		color:white;
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
		
	</div>
	<img style="top:30px; right:90px; position:fixed;background-color:white;width:40px;height:40px;" id="div1" src="setting.png" >
    <select onchange="location = this.value;" style="top:70px; right:50px; position:fixed;background-color:white;>
		<option value="">setting</option>
        <option value="add.php">Add New Admin</option><br><br>
        <option value="add admin.php">Manage login data</option>
	  </select>

      
				 <?php
				include('db.php');
				$mail = "SELECT * FROM `contact`";
				$rew = mysqli_query($con,$mail);
				
			   
						while($rows = mysqli_fetch_array($rew))
						{
								$app=$rows['approval'];
								if($app=="Allowed")
								{
									
								}
						}
						?>
                <div class="div1">        
                
							<?php
							if(isset($_POST['log']))
							{	
								$log ="INSERT INTO `newsletterlog`(`title`, `subject`, `news`) VALUES ('$_POST[title]','$_POST[subject]','$_POST[news]')";
								if(mysqli_query($con,$log))
								{
									echo '<script>alert("You posted a news.") </script>' ;
											
								}
								
							}
							
								
							?>
                          
                    
						
               
               <?php
				$conn=mysqli_connect("localhost","root","","hotel");
				$sql = "SELECT * FROM newsletter";
				$re = mysqli_query($con,$sql);
                if (mysqli_num_rows($re) > 0) {
                    ?>
                    <div class="d1">  <h1>Recent News</h1> 
				
			             <table>
                                        <tr>
                                            <th>Title</th>
											<th>Subject</th>
                                            <th>News</th>
											<th>Removal</th>
                                            
                                        </tr>

                                    <tr>
                                    
									<?php
										while($row = mysqli_fetch_array($re))
										{
										
											  ?>
												<tr >
													<td><?php echo $row["title"]; ?></td>
                                                     <td><?php echo $row["subject"]; ?></td>
                                                      <td><?php echo $row["news"]; ?></td>
													<td style="text-align:center; background-color:blue; color:white; width:600px;">
						<form method="POST" action="new.php">
						<button name="delete" onclick="return confirm('Are you sure')" value="<?php echo $row['id']?>"  style="width:100px; height:30px;border-radius:4px; ">Delete</button>
						</form>
						</td>
					</tr>
				
					<?php
					}
                }
					if(isset($_POST['delete'])){

						$Pid=$_POST['delete'];
                      
						$sql = "DELETE FROM newsletter WHERE id='$Pid'";
						$result=mysqli_query($conn,$sql);
						if($result){
						echo "<script>alert('Deleted')</script>";
                        header ("location:new.php");
						}
						else{echo "<script>alert('deletion failed!')</script>";}
						
                    }
				?>
                                                    
                 </table>
				 <br><br>
				 <a class="button" href="send-news.php"> <button class="btn">POST NEWS</button></a>
             </div>
                				 
</body>
</html>
