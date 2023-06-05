<!DOCTYPE html>
<html>
<head>
  <title>About Us - Trekking Adventures</title>
  <style>
       .body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.header {
  background-color: #333;
  color: #fff;
  padding: 20px;
}

*{
    /* box-sizing: border-box;  */
    margin: 0;
    padding: 0;
     /* background-color: #24252A; */
     
  } 

  .logo{
    font-family:"Montserrat" , sans-serif ;
    font-weight: 700;
    font-size: large;
    color: #edf0f1;
    cursor: pointer;
  }

  li,a{
    font-family: "Montserrat" , sans-serif;
    font-weight: 500 ;
    font-size: 14px;
    color: #edf0f1;
    text-decoration: none;
  }

  button{
    font-family: "Montserrat" , sans-serif;
    font-weight: 500 ;
    font-size: 14px;
    color: #edf0f1;
    text-decoration: none;
  }


  header{
  display: flex;
  overflow: hidden;  
  position:sticky;
  
  justify-content: space-between;
  align-items: center;
  padding: 15px 10%;
  color: white;
  background-color: #24252A;
  height: 10vh;
  
} 

  .nav_links{
    list-style: none;
    position: sticky;
    /* display: inline;
    padding: 0px 20px; */
  }

   .nav_links li{
     display: inline;
    padding: 0px 20px; 
  } 

  .nav_links li a{
    
    transition: all 0.3s ease 0s;
  }


  .nav_links a:hover {
    color:orange;
  }
  
  button{
    padding: 9px 25px;
    background-color: rgba(0,136,169,1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition:all 0.3s ease 0s ;
  }

  button:hover{
    background-color: orangered;
  }


    footer {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
    
.main {
  margin: 20px;
}

.background{
    background: rgba(0,0,0,0.7) url('../img/night.jpg');
    background-size: cover;
    background-blend-mode: darken;
}
.heading h2 {
  color: black;
  font-size: 45px;
  text-align: center;
  align-items: center;
  padding: 20px;
  padding-top: 60px;
}
.text-big{
    font-size: 30px;
}
.section{
    height: 300px;
    padding: 20PX;
    align-items: center;
    justify-content: space-evenly;
    max-width: 60%;
    margin:auto;
    font-size: 19px;
    word-spacing: 4px;
    font-family: 'Ubuntu', sans-serif;
}
.paragraph-container p {
  padding-bottom: 15px; /* Adjust the padding as needed */
}

/*.p {
  margin-bottom: 20px; /* Adjust the margin value as needed */

.contact h2 {
  color: black;
  font-size: 25px;
  text-align: center;
  align-items: center;
  padding: 20px;
  padding-top: 60px;
}

  </style>
</head>
<body>
  <header>
  <p class="logo">SAHYADRI</p>
   
   <nav>
    <ul class="nav_links">
       <li ><a href="index.php">HOME</a></li>
       <li><a href="About.php">ABOUT US</a></li>
       <li ><a href="Tours.php">TOURS</a></li>
       <li ><a href="Treks.php">UPCOMMING TREKS</a></li>
    </ul>
   </nav>
   <a class="cta" href="contactform.php"><button>Contact</button></a>
</header>
  
  <main>
  <section class="background firstSection">
      <div class="heading">
        <h2>ABOUT US</h2>
      </div>  
    <section class="section">
      <div class="paragraph-container">
      <p >Welcome to Sahyadri Trekkers, the ultimate destination for all your trekking and hiking needs. We are passionate about exploring the great outdoors and want to share that passion with you. Whether you're a seasoned trekker or a beginner, we have the perfect adventure waiting for you.</p>
      <p>Our team of experienced guides and staff are dedicated to providing you with the best trekking experience possible. We carefully plan and organize each trek, ensuring safety, comfort, and a deep connection with nature. Our itineraries are designed to take you off the beaten path and show you some of the most breathtaking landscapes in the world.</p>
      <p>At Trekking Adventures, we believe in responsible travel and sustainable tourism. We strive to minimize our impact on the environment and support local communities. With us, you can trek with a purpose, knowing that your adventure is making a positive difference.</p>
      <p>Join us on an unforgettable journey and create memories that will last a lifetime. Get ready to push your limits, embrace the unknown, and discover the beauty of the world on foot.</p>
      </div>
    </section>
    <section>
      <div class="contact">
        <h2>for more information you can contact us</h2>
      </div>
    </section>
</section>
  </main>
  
  <footer>
    <p>&copy; <?php echo date("Y"); ?> Sahyadri Trekkers. All rights reserved.</p>
  </footer>
</body>
</html>
