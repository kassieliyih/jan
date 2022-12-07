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
        
		padding-top:10px;
        
    }
    th{
        background-color:blue;
         width:100px;
         height:20px;
        color:white;}
    td{
        padding-bottom:10px;
        height:20px;
        width:200px;
        background-color:silver;
       

    }
	.d1{
        width:1200;
        padding-top:100px;
        padding-left:60px;
        background-color:white;
    }
  
  .row{ 
      margin-left:500px;
      display:inline-block;
      padding:100px;

  }
  .btn{
   background:blue;
   padding:5px;
   font-size:15px;
   color:white;
   border-radius:5px;
  }
  button{
    background-color:orange;
    padding:10px;
    border-radius:5px;
  } .button{
      text-decoration:none;
      color:white;
      
  }
 
  select{
      border-radius:5px;
      height:25px;
      width:200px;
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
    

     $conn=mysqli_connect("localhost","root","","hotel");
     $rb="SELECT * FROM roombook";
     $ret=mysqli_query($conn,$rb);
    
    
if (mysqli_num_rows($ret) > 0) {
?>
<div class="d1"> <center> <h1>ADD ROOM</h1> </center>
 

                                 
            <div class="row" style="background-color:black; color:white; padding">
                
                
                        <div class="panel-heading" style="padding-bottom:10px; background-color:blue;">
                            ADD NEW ROOM
                        </div>
                        <br>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div >
                                            <label >Type Of Room</label><br>
                                            <select name="troom"  class="form-control" required >
												<option value selected ></option>
                                                <option value="Single Room">SINGLE ROOM</option>
                                                <option value="Double Room">DOUBLE ROOM</option>
												<option value="Presidential House">PRESIDENTIAL HOUSE</option>
											
                                            </select>
                              </div>
							  <br>
								<div >
                                            <label>Bedding Type</label><br>
                                            <select name="bed" class="form-control" required >
												<option value selected ></option>
                                                <option value="Single">Single</option>
                                                <option value="Double">Double</option>
												
												<option value="Triple">None</option>
                                                                                             
                                            </select>
                                            
                               </div><br>
							 <input type="submit" name="add" value="Add New" class="btn">
                            
							</form>
                            <br><br>
                            <a class="button" href="view room.php"> <button>VIEW ADDED ROOMS</button></a>
</div>
							<?php
							 include('db.php');
							 if(isset($_POST['add']))
							 {
										$room = $_POST['troom'];
										$bed = $_POST['bed'];
										$place = 'Free';
										
										$check="SELECT * FROM room WHERE type = '$room' AND bedding = '$bed'";
										$rs = mysqli_query($con,$check);
										$data = mysqli_fetch_array($rs, MYSQLI_NUM);
										if($data[0] > 1) {
											echo "<script type='text/javascript'> alert('Room Already in Exists')</script>";
											
										}

										else
										{
							 
										
										$sql ="INSERT INTO `room`( `type`, `bedding`,`place`) VALUES ('$room','$bed','$place')" ;
										if(mysqli_query($con,$sql))
										{
										 echo '<script>alert("New Room Added") </script>' ;
										}else {
											echo '<script>alert("Sorry ! Check The System") </script>' ;
										}
							 }
							}
							
							?>
                        
                        
                  
                
                  
          
                                
                       
                            
							  
							 
							 
							  
							  
							   
  
<?php
}
else{
echo "No result found";
}
?>
</div>

				
</body>

</html>