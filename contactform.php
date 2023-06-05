<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="formstyle.css">
    <script src="script.js"></script>
</head>
<body>
<header>
        <p class="logo">SAHYADRI TREKKERS</p>
   
    <nav>
     <ul class="nav_links">
        <li><a href="index.php">HOME</a></li>
        <li><a href="About.php">ABOUT US</a></li>
        
        <li ><a href="Tours.php">TOURS</a></li>
       
        <li ><a href="treks.php">UPCOMMING TREKS</a></li>
       
     </ul>
    </nav>
   
</header>
   <div id="section-wrapper">
    <div class="box-wrapper">
         <!-- <div class="info-wrap">
            <h2 class="info-title">Contact Information</h2>
            <h3 class="info-sub-title">Fill up the form and our Team will get back to you within 24 hours</h3>
            <ul class="info-details">
                <li>
                    <i class="fas fa-phone-alt"></i>
                    <span>Phone:</span> <a href="tel:+ 1235 2355 98">+ 1235 2355 98</a>
                </li>
                <li>
                    <i class="fas fa-paper-plane"></i>
                    <span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                </li>
                <li>
                    <i class="fas fa-globe"></i>
                    <span>Website:</span> <a href="#">yoursite.com</a>
                </li>
            </ul>
            <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li> 
             </ul> 
        </div>   -->
        <div class="form-wrap">
            <form id= "form" action="config.php" method="POST" >
                <!-- <h2>Sahyadri Trekkers</h2> -->
                <h2 class="form-title">Contact Us</h2>
                <div class="form-fields">
                    <div class="form-group">
                        <input type="text" id="name" name = "Fname" class="fname" placeholder="Enter First Name">
                        <span id="nameError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" id="lname" name = "Lname" class="lname" placeholder="Enter Last Name">
                    </div>
                    <div class="form-group">
                        <input type="email"  id = "email" name= "Email" class="email" placeholder=" Enter Mail">
                        <span id="emailError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <input type="number" id = "number" name= "Mobile"  class="phone" placeholder="Enter phone number">
                        <span id="phoneError" class="error"></span>
                    </div>
                    <div class="form-group">
                        <textarea name="Message" id="" placeholder="Medical Issues If Any"></textarea>
                    </div>
                </div>
                <input type="submit" value="Submit" class="submit-button">

                <!-- <input type="submit" class = "form-control submit" value="submit"> -->
            </form>
        </div>
    </div>

   

</div>

<footer class="foot">
          <p> Copyright © Sahyadri Trekkers All rights reserved&gt;</p>
          
        </footer>






</body>
</html>