<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Computer-reg</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css">

<style>

.form-container {
  border-radius: 5px;
  background-image: url(assets/img/avatars/wifi2-background.jpg);
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  padding: 20px;
}

.form-heading{
    width: 700px;
	padding-top:15px; 
    padding-left :50px; 
    font-family:Times New Roman;	  
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

form{
	font-size:20px;
	font-family:Chaparral Pro;
	background-color:white;
	width: 1000px;
	padding:20px;
	margin: 40px;
	border-radius:20px;
    opacity: 0.9;
	}

 .sumbit-next{  
  
  cursor: pointer;
  margin: 35px 170px;
  border-radius: 5px;
  background:#00001a;
  color:white;
  height:40px;
  width:150px;
  
}      
</style>

</head>

<body>
    
<?php
		include 'header.php';
	?>

    <!----------------------------------------------------------------------------------------->
    
    <div class="form-container">        
                <div class="form-contain">

    <div class="row">
        <div class="col-md-10 mx-auto">

            <form method="post" action="wifi-add.php"> 

                <center>
            <div class="form-heading">
                    <h2 class="text-info">Getting School details</h2>
                    <h6>Fill all the fields with correct details.</h6><br>
                </div>
                </center>

                <div class="form-group row">
                <div class="col-sm-6">
                        <label for="inputAddressLine2">School Code :</label>
                        <input type="text" class="form-control" id="schoolcode" placeholder="000000" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputProvience">Province :</label>
                        <select name="provience" id="provience-select"class="form-control" required>
                            <option value="">Choose an option</option>
                            <option value="Western">Western</option>
                            <option value="Uva">Uva</option>
                            <option value="Southern">Southern</option>
                            <option value="Sabaragamuwa">Sabaragamuwa</option>
                            <option value="North Western">North Western</option>
                            <option value="Northern">Northern</option>
                            <option value="North Central">North Central</option>
                            <option value="Eastern"> Eastern</option>
                            <option value="Central"> Central</option>
                        </select>
                    </div>
                    
                    <div class="col-sm-6">
                        <label for="inputDistrict">District :</label>
                        <select name="district" id="district-select"class="form-control" required>
                            <option value="">Choose an option</option>
                            <option value="Ampara">Ampara</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                            <option value="Badulla">Badulla</option>
                            <option value="Batticaloa">Batticaloa</option>
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Gampaha">Gampaha</option>
                            <option value="Hambantota"> Hambantota</option>
                            <option value="Jaffna"> Jaffna</option>
                            <option value="Kalutara"> Kalutara</option>
                            <option value="Kandy"> Kandy</option>
                            <option value="Kegalle"> Kegalle</option>
                            <option value="Kilinochchi"> Kilinochchi</option>
                            <option value="Kurunegala"> Kurunegala</option>
                            <option value="Mannar"> Mannar</option>
                            <option value="Matale"> Matale</option>
                            <option value="Matara"> Matara</option>
                            <option value="Monaragala"> Monaragala</option>
                            <option value="Mullaitivu"> Mullaitivu</option>
                            <option value="Nuwara Eliya"> Nuwara Eliya</option>
                            <option value="Polonnaruwa"> Polonnaruwa</option>
                            <option value="Puttalam"> Puttalam</option>
                            <option value="Ratnapura"> Ratnapura</option>
                            <option value="Trincomalee"> Trincomalee</option>
                            <option value="Vavuniya"> Vavuniya</option>

                        </select>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputAddressLine1">Zone :</label>
                        <input type="text" class="form-control" id="zone" placeholder="Zone" required>
                    </div>
                </div>
                <div class="form-group row"> 
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">School Name :</label>
                        <input type="text" class="form-control" id="schoolname" placeholder="wp/jaya/Ananda Balika Vidyalaya" required>
                    </div>
                    <div class="col-sm-6">
                        <label for="inputCity">Principal Name :</label>
                        <input type="text" class="form-control" id="principalname" placeholder="Principal Name" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <label for="inputAddressLine2">Principal Email :</label>
                        <input type="email" class="form-control" id="principalemail" placeholder="perera@gmail.com" required>
                    </div> 

                     <button type="submit" class="sumbit-next">Next</button> 
                </div>
                
                </div>
               
            </form>
        </div>
    </div>
</div>
     </div>       
       

     <!----------------------------------------------------------------------------------------->

    
    <!-- Start: Footer Dark -->
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="registration.php">Sign up</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="about-us.php">About Us</a></li>
                        <li><a href="contact-us.php">Contact us</a></li>
                        <li><a href="product-page.php">Product Form</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="service-page.php">Services</a></li>
                    </ul>
                    </div>

                    <div class ="col-sm-3">                     
                    <li><a href="https://e-thaksalawa.moe.gov.lk/">  <img src="assets/img/avatars/thaksalawa.jpg"  width="150" height="100"></li>
                    <li><a href="https://e-thaksalawalms.moe.gov.lk/">  <img src="assets/img/avatars/lms.jpeg"  width="150" height="100"></li>
                </div>    
            </div>
            
        </div>
          <div class="footer-copyright">
            <p>©️ 2021 Copyright Text</p>
        </div>
    </footer>
    <!-- End: Footer Dark -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
    
</body>

</php>