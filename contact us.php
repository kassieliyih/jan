<html>
    <head>
        <title>about us</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <style>
       .yy{
           color:rgb(111, 204, 111);
       }
       .me{
           display:inline-block;
       }
       body{
           background-image:url("image/bg-top.jpg");
           color:white;
       }
   </style>
    </head>
    <body>
        <header><p class="header">
            <div class="header">Mulalem street,Bahir Dar,Ethiopia</div>
              <div class="header" id="rt">
              <a href="http://www.facebook.com/unison_hotel" ><i class="fab fa-facebook"></i></a>
               <a href="http://www.telegram.com/unison_hotel" > <i class="fab fa-telegram"></i></a>
               <a href="http://www.twitter.com/unison_hotel" > <i class="fab fa-twitter"></i></a>
              </p>
              </div></header>
        <div class="nav">
          
        <ul>
            <li ><a href="hotel.php"><i class="fa fa-home" aria-hidden="true"></i>home</li>
            <li><a href="our rooms.php"><i class="fa fa-user" aria-hidden="true"></i>our rooms</a>
                <div class="sub">
                    <ul>
                        <li class="hover2"><a href="our rooms.php">all rooms</a></li>
                        <li><a href="presidential room.php">presidential room</a></li>
                        <li><a href="single room.php">single room</a></li>
                        <li><a href="double room.php">double room</a></li>


                    </ul>
                </div></li>
            <li><a href="facilities.php"><i class="fa fa-signal" aria-hidden="true"></i>facilities</a>
                 <div class="sub">
                     <ul>
                         <li class="hover2"><a href="meeting & events.php">meeting & events</a>
                       
                        </li>
                         <li><a href="bar & restaurant.php">bar & restaurant</a></li>
                         <li><a href="health & spa.php">health & spa</a></li>
                         


                     </ul>
                 </div>
            </li>
            <li ><a href="gallery.php"><i class="fa fa-image" aria-hidden="true"></i>gallery</a></li>
            <li><a href="about us.php"><i class="fa fa-address-card" aria-hidden="true"></i>about us</a></li>
            <li><a href="news.php"><i class="fa fa-address-card" aria-hidden="true"></i>news</a>
            <li class="active"><a href="contact us.php"><i class="fas fa-phone" aria-hidden="true"></i>contact us</a></li>
            <a href="reservation.php"> <button style="border-color: rgb(30, 50, 138); width:140px; height:50px; color:rgb(27, 189, 108);margin-top:10px; margin-left:50px;">BOOK NOW</button></a>
        </ul>
     
    </div>
    <br>
    
   <div class="me" style="padding-left:30px; width:45%; padding-top: 0%; " >
    <div style="padding-left:40px; color:silver" >PLEASE FULFILL THE FOLLOWING FORM BELOW</div><BR>
    <form action="contact us.php" method="POST">
                      
        <div class="yy">YOUR NAME</div><input type="text" id="FMANE" name=" NAME"  style="width:85%; height:23px; margin-top: 13px;" required><br><BR>
        <div class="yy">YOUR E-MAIL</div><input type="email" id="email" name="email"  style="width:85%; height:23px;margin-top: 13px;" required><br><br>
        <div class="yy">YOUR MESSAGE</div><textarea style="width:85%; height:140px;margin-top: 13px;margin-bottom: 13px;" name="message" required></textarea><br>
        <input type="submit" value="SEND" style="background-color:orange; font-size: 18px;" >
        
      </form>
   </div>
   <?php 
    $uname=$_POST["NAME"];
    $email=$_POST["email"];
    $message=$_POST["message"];

     $conn=mysqli_connect("localhost","root","","hotel");
     $contact="INSERT INTO mess(uname,email,message)VALUES('$uname','$email','$message')";
     mysqli_query($conn,$contact);
     mysqli_close($conn); 

   ?>
   <div class="me" style="padding-left:30px; width:45%; padding-top: 0%; ">
    <div style="color:silver; ">BEFORE CONTACTING US</div>
    In the unlikely event you cannot find the
     information you need on our website,
      please use this form to contact us.
       For reservations, please click 
       the reservation link from the menu.<br>

       <div style="color:silver; ">CONTACT INFORMATION</div><BR>
    <table>
        <tr><td> <i class="fas fa-map-marker"></i>Mulualem Street, Bahir Dar, Ethiopia.</td></tr>
        <tr><td> <i class="fas fa-phone"></i>+251 58 320 7700</td></tr>
        <tr><td> <i class="fas fa-phone"></i>+251 58 320 7800</td></tr>
        <tr><td>  <i class="fad fa-envelope-square"></i>info@unisonhotelandspa.com</td></tr>
        <tr><td> <i class="fad fa-envelope-square"></i>PO Box # 1800 Bahir Dar, Ethiopia</td></tr>
        <tr><td>  Everyday 9:00-17:00</td></tr>
        

    </table>
    
    <div style="color:silver; ">SOCIAL MEDIA</div><BR>

    <div>
    <a href="http://www.facebook.com/unison_hotel" ><i class="fab fa-facebook"></i></a>
               <a href="http://www.telegram.com/unison_hotel" > <i class="fab fa-telegram"></i></a>
               <a href="http://www.twitter.com/unison_hotel" > <i class="fab fa-twitter"></i></a><br><br><br>
    </div>
   </div>
     <br>
     <br><br>

   <div style="padding-top:20px; padding-bottom:30px;  background-color:silver;">
    <div class="fo">
       <img src="image/logo.jpg" style="width:300px; height:50px; align-items: center; display:transparent;">
       <br><br>
       UNISON Hotel have a team<br>
        of professionals trained and ready to
        <br> meet the needs of our guests quickly<br>
         and cheerfully.
   </div>
   <div class="fo" >
     
       <ul>
           <b>CONTACT US BY</b><br><br>
           <li>+2515832207700</li>
           <li>+2515832207700</li>
           <li>book@unisonhotel&spa.com</li>
           <li><a href="http://www.facebook.com/unison_hotel" ><i class="fab fa-facebook"></i></a>
               <a href="http://www.telegram.com/unison_hotel" > <i class="fab fa-telegram"></i></a>
               <a href="http://www.twitter.com/unison_hotel" > <i class="fab fa-twitter"></i></a>
           </li>
       </ul>
   </div>
   <div class="fo" >
     
       <ul>
           <b>AT YOUR SERVICES</b><br><br>
           <a href="admin/reservation.php"><li>book now</li></a>
            <a href="contact us.php"><li>contact us</li></a>
            <a href="meeting & events.php"> <li>meeting & events</li></a>
                <a href="bar & restaurant.php"> <li>restaurant & bar</li></a>
                    <a href="our rooms.php"> <li>our room & suites</li></a>
       
       </ul>
   </div>
   <div class="fo">
       <div style="padding-left:40px; font-size: 20px;" >LOCATION</div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d125068.40106876436!2d37.31543455258449!3d11.595695846709015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1644cf59f63bc805%3A0x6c1480fc7ad299c1!2sUnison%20Hotel!5e0!3m2!1sam!2set!4v1644049834226!5m2!1sam!2set" width="400" height="150" style="border:0; padding-left:40px;" allowfullscreen="" loading="lazy"></iframe>
   </div>
 <div style="color:rgb(32, 32, 32); border-bottom:none; padding-left:300px; background-image: linear-gradient(red, yellow);;">
copyright &#169 2022 UNISON HOTEL & SPA. All Rights Reserved. 
</div>
      
   </div>
   

        </body>
    </html>
    