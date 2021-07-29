<!DOCTYPE php>
<php>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=f0bac09148a397f4f039e25a57cbd359">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=ebd6f95904009a297a139802d395213f">

    <style>
.mySlides {
    display:none;
}

.slider-frame{
	overflow: hidden;
	height: 450px;
	width: 1200px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 50px;
}

</style>

</head>

<body>

    <?php
		include 'header.php';
	?>

        <!-- slide view----------------->
    
    <div class="slider-frame" style="max-width:100%">
    <img class="mySlides w3-animate-left" src="assets/img/avatars/learn8.jpg" >
    <img class="mySlides w3-animate-left" src="assets/img/avatars/learn7.jpg" >
    <img class="mySlides w3-animate-left" src="assets/img/avatars/learn9.jpg" >
    </div>

        <!-- end slide view--------------->    
           
   
    <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000);    
}
</script>

    </main>
    
    <!-- Start: Footer Dark -->
    <?php
		include 'footer.php';
	?>
   <!-- End: Footer Dark -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
</body>
</php>