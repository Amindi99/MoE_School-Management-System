<!DOCTYPE php>
<php>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=f0bac09148a397f4f039e25a57cbd359">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=ebd6f95904009a297a139802d395213f">
<style>

    form
    {
		font-size:18px;
		font-family:Chaparral Pro;
		width: 2000px;
		padding:60px;
		margin: 40x;
		border-radius:15px;
	}

</style>	

</head>

<body>
    
<?php
		include 'header.php';
	?>

        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Registration</h2>
                    <p>Fill all the fields with correct details.</p>
                </div>
                <form>
                    <div class="form-group"><label for="name">School Name</label><input class="form-control item" type="text" id="name" placeholder="Province/Zone/SchoolName" required></div>
                    <div class="form-group"><label for="schoolcontact">School Email</label><input class="form-control item" type="email" id="password" placeholder="Email" required></div>
                    <div class="form-group"><label for="schoolcontact">School Contact Number</label><input class="form-control item" type="number" id="password" placeholder="+94" required></div>
                    <div class="form-group"><label for="tname">Teacher Name</label><input class="form-control item" type="text" id="password-1" placeholder="Name" required></div>
                    <div class="form-group"><label for="temail">Teacher Email</label><input class="form-control item" type="email" id="password-3" placeholder="email"></div>
                    <div class="form-group"><label for="tpassword">Password</label><input class="form-control item" type="password" id="password-2" placeholder="Password"></div>
                    <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                </form>
            </div>
        </section>
    </main>
    
    <!-- Start: Footer Dark -->
    <footer class="page-footer dark">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2021 Copyright Text</p>
        </div>
    </footer><!-- End: Footer Dark -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
</body>

</php>