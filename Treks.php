<!DOCTYPE html>
<html>
<head>
  <title>Tours - Trekking Adventures</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
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
    display: flex;
    justify-content: center;
    background-color: rgba(0,136,169,1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition:all 0.3s ease 0s ;
  }

  button:hover{
    background-color: orangered;
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
  padding: 25px;
}

.tour {
  margin-bottom: 20px;
}

.tour img {
  padding-top: 15px;
  width: 100%;
  max-width: 500px;
  height: auto;
  padding-left: 490px;
}

.tour h3 {
  margin-top: 10px;
  text-align: center;
  font-size: 35px;
}

.tour p {
  margin: 5px 0;
  text-align: center;
  font-size: 25px;
}
.button-container {
  display: flex;
  justify-content: center;
  padding-bottom: 15px;

}
/*btn{
    padding: 9px 25px;
    background-color: rgba(0,136,169,1);
    border: none;
    border-radius: 50px;
    cursor: pointer;
    transition:all 0.3s ease 0s ;
  }

  btn:hover{
    background-color: orangered;
  }
*/

.section{
    height: 500px;
    display:flex;
    align-items: center;
    justify-content: space-evenly;
    max-width: 80%;
    margin:auto;
    font-family: 'Ubuntu', sans-serif;
}
.Left{
    flex-direction: row-reverse;
}

.paras{
    padding: 0 60px;
    font-size: 18px;
}
.sectionTag{
    padding: 16px 0;
}
.sectionSubTag{
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
.thumbnail img{
    width: 400px;
    height: 270px;
    border: 2px solid black;
    border-radius: 26px;
    margin-top: 19px;
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
        <h2>Featured Tours</h2>
      </div>  
      <div class="tour">
        <img src="images/c1.jpg" alt="Tour 1">
        <h3>Trekking in the Himalayas</h3>
        <p>Duration: 10 days</p>
        <p>Difficulty: Moderate</p>
        <p>Price: $2000</p>
        <div class="button-container">
          <button class="btn">Book Now</button>
        </div>

        <!--<div class="btn">
          <button class="button">Button</button>-->
          <!--<a href="booking.html"><btn>Aook Now</btn></a>-->
        </div>
        <!--<a href="booking.html" class=""><button>Book Now</button></a>-->
      </div>
      
      <div class="tour">
        <img src="images/c2.jpg" alt="Tour 2">
        <h3>Exploring Machu Picchu</h3>
        <p>Duration: 7 days</p>
        <p>Difficulty: Easy</p>
        <p>Price: $1500</p>
        <div class="button-container">
          <button class="btn">Book Now</button>
        </div>
        <!--<a href="booking.html" class="btn"><button>Book Now</button></a>
      </div>-->
      
      <div class="tour">
        <img src="images/rajgad.jpg" alt="Tour 3">
        <h3>Hiking in the Alps</h3>
        <p>Duration: 14 days</p>
        <p>Difficulty: Challenging</p>
        <p>Price: $2500</p>
        <div class="button-container">
          <button class="btn">Book Now</button>
        </div>
        <!--<a href="booking.html" class="btn"><button>Book Now</button></a>
      </div>-->
      <div class="tour">
        <img src="images/rajmachi1.jpg" alt="Tour 4">
        <h3>Hiking in the Rajmachi</h3>
        <p>Duration: 07 days</p>
        <p>Difficulty: Challenging</p>
        <p>Price: $2300</p>
        <div class="button-container">
          <button class="btn">Book Now</button>
        </div>
        <!--<a href="booking.html" class="btn"><button>Book Now</button></a>
      </div>-->
      <div class="tour">
        <img src="images/ratangad1.jpg" alt="Tour 5">
        <h3>Hiking in the Ratangad</h3>
        <p>Duration: 09 days</p>
        <p>Difficulty: Challenging</p>
        <p>Price: $2100</p>
        <div class="button-container">
          <button class="btn">Book Now</button>
        </div>
        <!--<a href="booking.html" class="btn"><button>Book Now</button></a>
      </div>-->
      <div class="tour">
        <img src="images/Torna.jpg" alt="Tour 6">
        <h3>Hiking in the Torna</h3>
        <p>Duration: 04 days</p>
        <p>Difficulty: Challenging</p>
        <p>Price: $1500</p>
        <div class="button-container">
          <button class="btn">Book Now</button>
        </div>
        <!--<a href="booking.html" class="btn"><button>Book Now</button></a>
      </div>-->
    </section>
    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big"> Known For : Amer Fort  Chokhi Dhani Jaipur  City Palace, Jaipur</p>
        <p class="sectionSubTag text-small">The moment you set foot in Jaipur, you will feel like everything has come straight out of the pages of some epic novel. Majestic buildings, tales of heroic battles, resplendent forts and palaces, and multi-faceted characters ? Rajasthan is one of the most colourful and flashiest states in all of India, and its capital Jaipur lives up to the same reputation as well. Jaipur is a vibrant amalgamation of the old and the new ? highly urbanized pockets and shopping areas have casually sprung up beside gleaming forts and palaces. Jaipur has long been one of the shiniest cultural jewels in the history of the Indian subcontinent, and the royal corridors of the famously named 'Pink City' offer up a plethora of adventures and activities that make for a memorable holiday experience.
            
            Best Time: October to March</p>
        </div>
        <div class="thumbnail">
            <img src="images/c1.jpg" alt="balloon" class="imgFluid">
        </div>
    </section>
    <section class="section Left">
        <div class="paras">
        <p class="sectionTag text-big">Kedarnath Temple: </p>
        <p class="sectionSubTag text-small"> The main attraction in Kedarnath is the Kedarnath Temple, which is one of the most revered Shiva temples in India. The temple is believed to have been constructed by the Pandavas from the Mahabharata epic. It is a stone edifice built in the North Indian style of architecture and is surrounded by breathtaking natural beauty. The temple opens its doors to devotees from late April to early November due to extreme weather conditions during the winter months.

            Trekking to Kedarnath: Kedarnath is not easily accessible by road, and most visitors undertake a trek to reach the temple. The most common starting point for the trek is Gaurikund, which is about 16 kilometers (10 miles) away from Kedarnath. The trek takes you through scenic landscapes, lush forests, and picturesque villages. Ponies and palanquins (carried by porters) are available for those who prefer not to trek on foot.</p>
        </div>
        <div class="thumbnail">
            <img src="images/c2.jpg" alt="balloon" class="imgFluid">
        </div>
    </section>
    <section class="section">
        <div class="paras">
        <p class="sectionTag text-big"> Harishchandragad Fort Trek</p>
        <p class="sectionSubTag text-small"> Malshej Ghat Overview
Harishchandragad is a hill fort in Maharashtra situated at an elevation of about 4670 feet in the district of Ahmednagar. It is popular for the trekking trail and is one of the famous Bhandardara tourist spots. Harishchandragad fort complex also houses caves, temples and a lake which makes it an ideal tourist place.
Within the fort, there are several temples dedicated to Vishnu and Ganesh. The monument dates back to the 6th century and finds a home at an altitude of 1424 meters and more often than not, given its altitude finds itself marked on a number of trekking trails in and around the area. The fort has the second-highest mountain in Maharashtra. Konkan Kada or the Konkan cliff is a semi-circular rock wall and resembles a Cobra's hood, occasionally sporting a rainbow.</p>
        </div>
        <div class="thumbnail">
            <img src="images/Harishchandra1.jpg" alt="balloon" class="imgFluid">
        </div>
    </section>
  </main>
  
  <!-- <footer>
    <p>&copy; 2023 Trekking Adventures. All rights reserved.</p>
  </footer> -->
</body>
</html>
