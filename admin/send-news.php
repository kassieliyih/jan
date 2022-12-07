<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Admin.css">
    <title>send news</title>
    <style>
        .div3{
            margin-left:500px;
            padding-top:200px;
            width:300px;
            height: 300px;
            background-color:white;

    
        }
        form{
            padding-left:50px;
            width:300px;
            height: 300px;
            background-color:silver;

    
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
 
       .div3 label{
          display:block;
           background-color:silver;
           height:30px;
           width:200px;
       }
       input[type='submit']{
          margin-left:350px;
           width:100px;
           height:40px;
           background-color:orange;
           border-radius:5px;
       }
       input[type='submit']:hover{
           background-color:black;
           color:white;
           border:3px solid orange;}
    .in{
        display:none;
    }
    .in:hover{
        display:block;;
    }
    .out:hover .in{
        display:block;
    }
       }
    </style>
</head>
<body>
<    <div id="header" style="position:fixed;">
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
    <img style="top:30px; right:90px; position:fixed;background-color:white;width:40px;height:40px;" id="div1" src="setting.png" >
    <select onchange="location = this.value;" style="top:70px; right:50px; position:fixed;background-color:white;>
		<option value="">setting</option>
        <option></option>
        <option value="add.php">Add New Admin</option><br><br>
        <option value="add admin.php">Manage login data</option>
	  </select>
    <div class="div3">
        <form method="post" action="send-news.php">
         <label>Title</label>
         <input type="text" name="title" required>
         <label>Subject</label>
         <input type="text" name="subject" required>
         <label>news</label>
         <textarea name="news"  rows="5" name="news"></textarea>
         <input type="submit" value="send" name="submit">
        

        </form>
    </div>
    <?php
        if(isset($_POST['submit'])){
           $tit=$_POST['title'];
           $sub=$_POST['subject'];
           $new=$_POST['news'];
           if($tit==""||$sub==""||$new=""){
            echo '<script>alert("please fill out all fields") </script>' ;  
           }
           else{
            $conn=mysqli_connect("localhost","root","","hotel");
             $log ="INSERT INTO newsletter(title, subject, news) VALUES ('$_POST[title]','$_POST[subject]','$_POST[news]')";
								if(mysqli_query($conn,$log))
								{
									echo '<script>alert("New post Added") </script>' ;
											
								}
           }
        }
             
	?>
    
</body>
</html>