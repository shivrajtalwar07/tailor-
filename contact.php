<?php

require_once('function.php');
$db= new class_function1();


if(isset($_POST['submit']))
{
    $var_fname=$_POST['text'];
    $var_lname=$_POST['text'];
    $var_email=$_POST['email'];
    $var_number=$_POST['number'];
    $var_message=$_POST['text'];

    $db->create_user_account($var_fname,$var_lname,$var_email,$var_number,$var_message); 

 }
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Arunlal Panja">
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="css\bootstrap.css">

<link rel="stylesheet" type="text/css" href="css\bootstrap-grid.css">
<link rel="stylesheet" type="text/css" href="css\bootstrap-reboot.css">
<link rel="stylesheet" type="text/css" href="css\bootstrap-utilities.css">

<script type="text/javascript" src="js\bootstrap.js"></script>
     <script type="text/javascript" src="js\bootstrap.bundle.js"></script>
</head>
<style>
body {
    margin: 0;
    font-family: 'Arial', sans-serif;
   background-color:;
    justify-content: center;
    align-items: center;
    height: 100%;
	width:100%; 
}		 
.Header 
{
	background-color: #F5F5F5;
	height:100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}	
.logo 
{
    display: flex;
    align-items: center;
	margin-right:20px;
	}	  
.logo img 
{
    width: 100px;
    height: 100px;
	margin-left:4px;
}
		  
nav ul 
{
  list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}
	   
nav ul li 
{
    margin-right: 20px;
}
		  
nav ul li a 
{
    position: relative;
    display: inline-block;
    font-size:20px;
   color:#000000;	
   text-decoration: underline;
   font-family:bold;
}		
nav ul li a:hover
{
color:#2F8F64;
}
main 
{
    padding: 20px;
}
.hero 
{
    text-align: center;
    margin-bottom: 40px;	
}	
.features
{
    text-align: center; 
}	

.features 
{
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;	
}

.feature 
{
    width: 888px;
    height:100px
    padding: 20px;
    margin-left:-100px;
    margin-bottom: 20px;
    margin-top:15px;
    
}
.feature img 
{
    max-width: 100%;
  }

.feature h3
{
color:black;
	
}

.feature p{
	color:black;
	
}
.Margin
{
	margin-top:20px;
}
.jii
{
  font-size:20px;
  text-decoration:Home;
}
#offcanvasTop {
  --bs-offcanvas-height: 80vh;
  background-color: #c5e1d4;
}
.ui
{
  margin-left:-350px;
  font-size:60px;
}
@media only screen and (max-width: 1000px)
{
.ui
  {
    margin-left:20px;
    font-size:25px;
  }
.mapsize
{
  width:380px;

}
}

</style>
<body>
<div class="Header">
    <div class="logo ">
	</div>
    <h class="ui" >Contact us</h>

    <nav>
        
        <ul>
	         
        <li class="nav-item">
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active apper jii" aria-current="page" href="index.php">Home</a>
                  </li>  

                  <li class="nav-item">
                    <a class="nav-link active apper jii" aria-current="page" href="price.php">Price</a>
                  </li>
                  
                  <li class="nav-item">                  
                    <a class="nav-link active apper jii" aria-current="page" href="about.php">About Us</a>                
                  </li>      
		
        </ul>
    </nav>
</div>   


  </nav>

    <!-- Designed by Arunlal Panja -->

  

    <!-- Offcanvas Block -->
    <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
      <div class="container pt-5">
        <div class="offcanvas-header">
          <h2 class="fw-bold pb-3">Search here</h2>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <form class="position-relative" action="#" method="post">
            <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="Examples: posts, services,..">
            <button class="position-absolute top-0 end-0 border-0 bg-transparent py-2 pe-2 text-secondary" type="submit" name="search"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form>
        </div>
      </div>
    </div>
  </header>


            
                  
                 
                 
                
                      
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <main>
    <div class="container py-5">
      <div class="row g-5">
        <!-- Contact Information Block -->
        <div class="col-xl-6">
          <div class="row row-cols-md-2 g-4">
            <div class="aos-item" data-aos="fade-up" data-aos-delay="200">
              <div class="aos-item__inner">
                <div class="bg-light hvr-shutter-out-horizontal d-block p-3">
                  <div class="d-flex justify-content-start">
                    <i class="fa-solid fa-envelope h3 pe-2"></i>
                    <span class="h5">Email</span>
                  </div>
                  <span>shivrajtalwar07@gmail.com</span>
                </div>
              </div>
            </div>
            <div class="aos-item" data-aos="fade-up" data-aos-delay="400">
              <div class="aos-item__inner">
                <div class="bg-light hvr-shutter-out-horizontal d-block p-3">
                  <div class="d-flex justify-content-start">
                    <i class="fa-solid fa-phone h3 pe-2"></i>
                    <span class="h5">Phone</span>
                  </div>
                  <span>+91 9763922258, +91 9156893352</span>
                </div>
              </div>
            </div>
          </div>
          <div class="aos-item mt-4" data-aos="fade-up" data-aos-delay="600">
            <div class="aos-item__inner">
              <div class="bg-light hvr-shutter-out-horizontal d-block p-3">
                <div class="d-flex justify-content-start">
                  <i class="fa-solid fa-location-pin h3 pe-2"></i>
                  <span class="h5">Office location</span>
                </div>
                <span>Iranna Talwar,  solapur, Sulerjawalaga, PO:Hotagi, DIST:Solapur, Maharashtra, 413215</span>
              </div>
            </div>
          </div>
          <div class="aos-item" data-aos="fade-up" data-aos-delay="800">
            <div class="mt-4 w-100 aos-item__inner mapsize">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237.875701006999!2d75.97274430534196!3d17.459177262122434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc677c9a1ac9747%3A0x71c8627eb6983913!2sTailar%20shop!5e0!3m2!1sen!2sin!4v1718413724590!5m2!1sen!2sin" class="mapsize" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
          </div>
        </div>


        <!-- Contact Form Block -->
        <div class="col-xl-6">
          <h2 class="pb-4">Leave a message</h2>
          <div class="row g-4">
            <div class="col-6 mb-3">
            <form action="contact.php" method="POST" >
              <label for="exampleFormControlInput1" class="form-label">Fname</label>
              <input type="text" name="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>
            <div class="col-6 mb-3">
              <label for="exampleFormControlInput1" class="form-label">Lname</label>
              <input type="text" name="text" class="form-control" id="exampleFormControlInput1" placeholder="Name">
            </div>
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Phone</label>
            <input type="number" name="number" class="form-control" id="exampleFormControlInput1" placeholder="Number">
          </div>
          
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Message</label>
            <textarea class="form-control" type="text" name="text"  id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <input type="submit" name="submit" class="btn btn-dark" placeholder="send message" >
        </div>
        </form>
      </div>
    </div>
  </main>

  <!-- Footer Block -->
  <footer id="site-footer">
    <div class="bg-success bg-opacity-25 py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xl-3 col-sm-12">
            <h5 class="pb-3"><i class="fa-solid fa-user-group pe-1"></i> About us</h5>
            <span class="text-secondary">This is a wider card with supporting text below as a natural lead-in to additional content.</span>
          </div>
          <div class="col-md-6 col-xl-3 col-sm-12">
            <h5 class="pb-3"><i class="fa-solid fa-link pe-1"></i> Important links</h5>
            <ul>
              <li><a href="about.php" class="text-decoration-none link-secondary">About us</a></li>
              <li><a href="index.php" class="text-decoration-none link-secondary">Home</a></li>
              <li><a href="price.php" class="text-decoration-none link-secondary">Price</a></li>
            </ul>
          </div>
          <div class="col-md-6 col-xl-3 col-sm-12">
            <h5 class="pb-3"><i class="fa-solid fa-location-dot pe-1"></i> Our location</h5>
            <span class="text-secondary">
             

              Iranna Talwar,  solapur<br>
               Sulerjawalaga, PO:Hotagi,<br> 
               DIST:Solapur, Maharashtra, 413215<br>
            </span>
          </div>
          <div class="col-md-6 col-xl-3 col-sm-12">
          <h5 class="pb-3"><i class="fa-solid fa-location-dot pe-1"></i>Open  Time </h5>
          <span class="text-secondary">
            Every Day</br>
          08:00 to 21:00</br>
          </div>
        </div>
      </div>
    </div>
   
     
  </footer>
</body>

</html>
