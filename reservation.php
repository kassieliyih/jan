
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
       .div1{
      margin:100px;
     color:white;
      background-color:blue;

       }
       .booking{
           background-color:black;
           margin-left:200px;
           margin-top:100px;
           width:400px;
       }
       .book{
           margin:auto;
           backgroud-color:#FFFFFA;
           padding-right:110px;
           padding-left:110px;
           color:white;
           display:inline-block;
           font-size:24px;
       }
     .book  label{
          display:block;
           
           height:30px;
           width:200px;
       }
       .in{
           height:40px;
           width:250px;
           border-radius:5px;
       }
       .in:hover{
        background-color:red;  
       }
        
       select{
           height:40px;
           width:250px;
           
           border-radius:5px;
       }
       select:hover{
        background-color:red;
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
           border:3px solid orange;
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
            <li class="active"><a href="about us.php"><i class="fa fa-address-card" aria-hidden="true"></i>about us</a></li>
            <li><a href="news.php"><i class="fa fa-address-card" aria-hidden="true"></i>news</a>
            <li><a href="contact us.php"><i class="fas fa-phone" aria-hidden="true"></i>contact us</a></li>
            <a href="reservation.php"> <button style="border-color: rgb(30, 50, 138); width:140px; height:50px; color:rgb(27, 189, 108);margin-top:10px; margin-left:50px;">BOOK NOW</button></a>
        </ul>
     
    </div>
  <div class="booking"> <h1>BOOKING FORM</h1></div>
         <div class="div1">
						<form name="form" method="post" action="reservation.php"  >
                            <div class="book">
                                            <label>Title*</label>
                                            <select name="title"   class="in" required>
												<option value selected ></option>
                                                <option value="Dr.">Dr.</option>
                                                <option value="Miss.">Miss.</option>
                                                <option value="Mr.">Mr.</option>
                                                <option value="Mrs.">Mrs.</option>
												<option value="Prof.">Prof.</option>
												<option value="Rev .">Rev .</option>
												<option value="Rev . Fr">Rev . Fr .</option>
                                            </select>
                            
                                            <label>First Name</label>
                                            <input name="fname"  class="in" required >
                                            
                             
                                            <label>Last Name</label>
                                            <input name="lname"  class="in" required >
                    
                                            <label>Email</label>
                                            <input name="email"  class="in" type="email" required>
                              
                           
                                      <label>Nationality*</label>
                                         
                                                <input type="radio" name="nation"  value="Ethiopian" checked=" style="display:inline;" required>Ethiopian
                                            
                                          
                                                <input type="radio" name="nation"  value="Non Ethiopian " " style="display:inline;" required>Non Ethiopian
                                       
                         
								<?php

								$countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

								?>
							
                                            <label>Passport Country*</label>
                                            <select name="country"  ""  class="in" required>
												<option value selected ></option>
                                                <?php
												foreach($countries as $key => $value):
												echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
												endforeach;
												?>
                                            </select>
                            </div>  
                            <div class="book">
                                            <label>Phone Number</label>
                                            <input name="phone" type ="text"  class="in" required>
                                       
                           
                            
                                     <label>Type Of Room *</label>
                                            <select name="troom"  "" class="in" required>
												<option value selected ></option>
                                                <option value="SINGLE ROOM<">SINGLE ROOM</option>
                                                <option value="DOUBLE ROOM">DOUBLE ROOM</option>
												<option value="PRESIDENTIAL HOUSE">PRESIDENTIAL HOUSE</option>
											
                                            </select>
                          
                                            <label>No.of Rooms *</label>
                                            <select name="nroom" required>
												<option value selected ></option>
                                                <option value="">1</option>
                                               <option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
                                            </select>
                          
                                            <label>Meal Plan</label>
                                            <select name="meal" class="form-control" required>
												<option value selected ></option>
                                                <option value="Room only">Room only</option>
                                                <option value="Breakfast">Breakfast</option>
												<option value="Half Board">Half Board</option>
												<option value="Full Board">Full Board</option>
												
                                                
                                             
                                            </select>
                            
                                           <label> Check-In:</label>
                                            <input name="cin" type ="date"  class="in" required>
                                            <label> Check-Out:</label>
                                            <input name="cout" type ="date"  class="in" required>
                                            
                           
                        </div><br><br>
						<input type="submit" name="submit" >
                      

                 <script>  
                 var f=document.form.fields.element;
                 var i;
                    function validateform(){ 
                     for(i=0;i<f.length;i++){
                         if(f.value==""){
                             f.style.borderColor="red";
                             alert("please fill out all fields!");
                             f.focus();
                             return false;
                         }
                     }  
           
                  {  
                 alert("Please fill out fields");  
                   return false;  
                     }
                     else{  
                    alert("your application has beeb sent");  
                     return true; 
                    }  
             }  
</script> 
					
						</form>
              </div>
              <?php
						     
				if(isset($_POST['submit']))	{

                	
                             $con=mysqli_connect("localhost","root","","hotel");
                             $email=$_POST['email'];
                             $check="SELECT * FROM roombook WHERE Email= '$email'";	
                             $rs = mysqli_query($con,$check);
                
                             if (mysqli_num_rows($rs) > 0) {
                                 echo "<script type='text/javascript'> alert('you have already applied.')</script>";
                                
                                 
                             }

                             else
                             {
                                  $new ="Not Conform";
                                 $newUser="INSERT INTO `roombook`(Title, FName, LName, Email, National, Country, Phone,  NRoom, Meal, cin, cout,stat,nodays) VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[email]','$_POST[nation]','$_POST[country]','$_POST[phone]','$_POST[nroom]','$_POST[meal]','$_POST[cin]','$_POST[cout]','$new',datediff('$_POST[cout]','$_POST[cin]'))";
                                 if (mysqli_query($con,$newUser))
                                 {
                                     echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";
                                    
                                 }
                                 else
                                 {
                                     echo "<script type='text/javascript'> alert('Error adding user in database')</script>";
                                     
                                     
                                 }
                             }
                     }

                     ?>
				
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
   
</body>
</html>
