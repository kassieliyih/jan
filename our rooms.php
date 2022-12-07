
<html>
    <head>
        <title>unison hotel</title>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
       <style>
        
        .header{
       display:inline-flex;
       
        }
        
        #rt{
            float:right;
        }
        body{
     width:100%;
     height:100vh;
     display: grid;
  
 }
 .fo{
              display:inline-block;
              padding-left: 30px;
          }
          .fo ul a{
              text-decoration:none;
              color:black;
          }
          .fo ul{
              list-style-type: none;
              
          }
          .fo ul li{
              border-bottom: solid 1px rgb(233, 223, 210);
          }

.hail{
    width:100%;
    height: 200px;
    background-size:100% 100%;
    box-shadow:rgba(149,157,165,0.2) 0px 8px 24px;
    animation: hai 20s ease-out infinite;
}
@keyframes hai{
    0%{
        background-image:url("image/s1.jpg");
    }
    50%{
     background-image:url("image/s2.jpg");;
    }
    100%{
        background-image:url("image/s3.jpg");
    }
}
.endawoke{
    width:100%;
    height: 200px;
    background-size:100% 100%;
    box-shadow:rgba(149,157,165,0.2) 0px 8px 24px;
    animation: gir 20s ease-out infinite;
}
@keyframes gir{
    0%{
        background-image:url("image/d2.jpg");
    }
    50%{
     background-image:url("image/d4.jpg");;
    }
    100%{
        background-image:url("image/d1.jpg");
    }
}
.endaw{
    width:100%;
    height: 200px;
    background-size:100% 100%;
    box-shadow:rgba(149,157,165,0.2) 0px 8px 24px;
    animation: end 20s ease-out infinite;
}
@keyframes end{
    0%{
        background-image:url("image/p7.jpg");
    }
    50%{
     background-image:url("image/p6.jpg");;
    }
    100%{
        background-image:url("image/1p.jpg");
    }
}
   .girma{
       border:2px solid darkgrey;
       display:inline-block;
       margin:10px;
       width:30%;
       vertical-align: middle;
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
            <li><a href="hotel.php"><i class="fa fa-home" aria-hidden="true"></i>home</li>
            <li class="active"><a href="our rooms.php"><i class="fa fa-user" aria-hidden="true"></i>our rooms</a>
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
            <li><a href="contact us.php"><i class="fas fa-phone" aria-hidden="true"></i>contact us</a></li>
            <a href="reservation.php"> <button style="border-color: rgb(30, 50, 138); width:140px;height:50px; color:rgb(27, 189, 108);margin-top:10px; margin-left:50px;">BOOK NOW</button></a>
        </ul>
      
    </div>
    <br>
    <CENTER>
    <div style="font-size: 30px; color:black;">OUR ROOMS AND SUITES</div><BR>
      <div class="girma">
          <center>
        <div style="font-size:26px; text-decoration:strong; color:black;">STANDARD SINGLE</div><br>
        <div class="hail"></div>
        <br>
        The Standard Single room is specially designed 
        for solo travelers. Among all the room facilities 
        you will find a balcony and seating area.
        <br>
        <a href="single room.php" style="text-decoration: none; color:white; background-color: coral; font-size: 20px;">LEARN MORE</a>
    </center>
      </div>
      <div class="girma">
    <center>
        <div style="font-size:26px; text-decoration:strong; color:black;">DOUBLE STANDARD</div><br>
        <div class="endawoke"></div>
        <br>
        The standard double room is a well-appointed room and come with
        opulent facilities. It is the ideal room
         for two friends travelling together.
       <br>
       <a href="double room.php" style="text-decoration: none; color:white; background-color: coral; font-size: 20px;">LEARN MORE</a>
    </center>
      </div>
      <div class="girma" style="width:30%;">
        <center>
            <div style="font-size:26px; text-decoration:strong; color:black;">PRESIDENTIAL</div><br>
            <div class="endaw"></div>
            <br>
            Our luxurious PRESIDENTIAL rooms in unison offer 
            state-of-art furnishings.
             A 25 square meters with an extra-large double bed.<br>
               <a href="presidential room.php" style="text-decoration: none; color:white; background-color: coral; font-size: 20px;">LEARN MORE</a></div>
        </center>
          </div>
          <div style="padding-top:20px; padding-bottom:30px;  background-color:silver;">
            <div class="fo">
               <img src="image/logo.jpg" style="width:300px; height:50px; align-items: center; display:transparent;">
               <br><br>
               UNISON Hotel have a team
                of professionals <br> trained and ready to
                 meet the needs of our<br> guests quickly
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
                   <b>AT YOUR SERVICE</b><br><br>
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
           
        </CENTER>
    </body>
</html>