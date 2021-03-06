<!--
Author: Azeemullah
Author URL: http://azeemullah.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
if(!isset($_SESSION[''])){
	session_start();
}
include_once('ssi/db.php');
if(isset($_SESSION['email']) && isset($_SESSION['type'])){
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Green Wheels | User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Travel, Sri Lanka, Journey, Adventure" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-lft wow ">
			<li class="hm"><a href="index.html"><i class="fa fa-home"></i></a></li>
			<li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li>
				
		</ul>
		<ul class="tp-hd-rgt wow "> 	
            <form action="src/logout.php" method="post">
				<input class="btn small" type="submit" name="submit" id="submit" value="LogOut">
                </form>
		</ul>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
	<div class="container">
		<div class="logo wow ">
			<a href="index.html">Green <span>Wheels</span></a>	
		</div>
		<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
            <a href="index.html" class="buses active">BUSES</a>
            <a href="hotels.html">HOTELS</a>
        </div>
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-lock"></i></li>
            <li><div class="securetxt">SAFE &amp; SECURE<br> ONLINE PAYMENTS</div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow ">
	<div class="container">
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="about.html">About</a></li>
								<li><a href="faq.html">Faq</a></li>
								<li><a href="apps.html">Apps</a></li>
								<li><a href="blog.html">Blog</a></li>
								<li><a href="travels.html">Travels</a></li>
								<li><a href="privacy.html">Privacy Policy</a></li>
								<li><a href="agent.html">Agent Registration</a></li>
								<li><a href="terms.html">Terms of Use</a></li>
								<li><a href="contact.html">Contact Us</a></li>
								<li>Need Help?<a href="#" data-toggle="modal" data-target="#myModal3"> / Write Us </a>  </li>
								<div class="clearfix"></div>
						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-btm ---->
<?php
$email = $_SESSION['email'];
$type = $_SESSION['type'];
$sql = "SELECT * FROM transport WHERE email='".$email."'";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_array($result)){
		$name = $row['name'];
		$address = $row['address'];
		$contact = $row['contact'];
	}
}
?>
<!--- banner ---->
<div class="banner-3 ">
	<div class="container">
		<h1 class="wow zoomIn " style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> Welcome to profile <?php echo $name; ?></h1>
	</div>
</div>
<div class="clearfix" style="padding-top:20px;">

</div>
<div class="rooms">
	<div class="container">
		<div class="col-md-8">
			<div class="rooms-top">
				<div class="rom-info" style="background-color: rgba(63, 132, 177, 0.79) !important;padding: 1em 2em;">
					<div class="rt-left col-md-9 wow ">
						<h3>Estrela Do Mar Beach Resort - A Beach Property</h3>
						<p>Estrela Do Mar Beach Resort Khobra Vaddo Baga Calangute Goa 403516</p>
					</div>
					<div class="rt-right col-md-3 wow fadeInRight animated" data-wow-delay=".5s">
						<h5>USD 700</h5>
						<a href="selectroom.html" class="view">Select Room</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			
			<div class="hotel-police wow ">
				<h4 class="sing">Cab Service Policies</h4>
				<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose</p>
			</div>
			<div class="similar_hotel">
				<h4 class="sing">Vehicles</h4>
                <?php
				$sql2 = "SELECT * FROM vehicle WHERE id IN (SELECT transport_id FROM transport WHERE email='".$email."')";
				$result2 = mysqli_query($con, $sql2);
				if($row2 = mysqli_num_rows($result2)){
					while(mysqli_fetch_array($result2)){
						$vId = $row2['vehicle_id'];
						$type = $row2['type'];
						$passengers = $row2['passengers'];
						$model = $row2['model'];
						$comfort = $row2['comfort'];
						?>
						<div>
						<table>
                        <tr>
                        <th>
                        Vehicle ID
                        </th>
                        <th>
                        Type
                        </th>
                        <th>
                        Passengers
                        </th>
                        <th>
                        Model
                        </th>
                        <th>
                        Comfort
                        </th>
                        </tr>
                        <tr>
                        <td>
                        <?php echo $vId; ?>
                        </td>
                          <td>
                        <?php echo $type ?>
                        </td>
                          <td>
                        <?php echo $passengers; ?>
                        </td>
                          <td>
                        <?php echo $model; ?>
                        </td>
                          <td>
                        <?php echo $comfort; ?>
                        </td>
                        </tr>
                        </table>
						</div>
					<?php
                    }
				}
				?>
				<div class="hotl-top">
					<div class="col-md-4 hotels-left wow ">
						<a href="siglepage.html">
							<div class="view1 view1-sixth">
								<img src="images/h3.jpg" class="img-responsive" alt="">
									<div class="mask">
										<h2>Residence Inn Deptford</h2>
									</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 hotels-left wow ">
						<a href="siglepage.html">
							<div class="view1 view1-sixth">
								<img src="images/h2.jpg" class="img-responsive" alt="">
									<div class="mask">
										<h2>Residence Inn Deptford</h2>
									</div>
							</div>
						</a>
					</div>
					<div class="col-md-4 hotels-left wow ">
						<a href="siglepage.html">
							<div class="view1 view1-sixth">
								<img src="images/h4.jpg" class="img-responsive" alt="">
									<div class="mask">
										<h2>Residence Inn Deptford</h2>
									</div>
							</div>
						</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">


			<div class="hotel-police wow ">
				<h4 class="sing">Contact Details</h4>
				
				<h5>Name</h5>
				<p><?php echo $name; ?></p>
                <h5>Contact</h5>
				<p><?php echo $contact; ?></p>
				<h5>Address</h5>
				<p><?php echo $address; ?></p>
				<h5>Email</h5>
				<p><?php echo $email; ?></p>
			</div>

			<div class="hotel-police wow ">
				<h4 class="sing">Transportations</h4>
				<form>
					<select name="" id="" class="grayTextNormal">
						<option value="-- Select State --">Taxi</option>
						<option value="Los Angeles Charter">Van</option>
						<option value="New Orleans">Car</option>
					</select>
					<div class="sub">
						<input type="submit" value="Submit">
					</div>
				</form>
			</div>

			<div class="hotel-police wow">
		</div>
	</div>
</div>
<!--- footer-top ---->
<div class="footer-top">
	<div class="container">
		<div class="col-md-6 footer-left wow">
			<h3>Journey through</h3>
				<ul>
					<li><a href="index.html">Mahiyangana</a></li>
					<li><a href="index.html">Colombo</a></li>
					<li><a href="index.html">Kekirawa</a></li>
					<li><a href="index.html">Lunugama</a></li>
					<li><a href="index.html">Puttalam</a></li>
					<li><a href="index.html">Maskaliya</a></li>
					<li><a href="index.html">Nuware Eliya</a></li>
					<li><a href="index.html">Kandy</a></li>
					<li><a href="index.html">Badulla</a></li>
					<li><a href="index.html">Unawatuna</a></li>
					<li><a href="index.html">Jaffna</a></li>
					<li><a href="index.html">Trincomalee</a></li>
					<li><a href="index.html">Anuradhapura</a></li>
					<li><a href="index.html">Mullaitivu</a></li>
					<li><a href="index.html">Monaragala</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="col-md-6 footer-left wow ">
			<h3>Guides found in</h3>
				<ul>
					<li><a href="index.html">Mahiyangana</a></li>
					<li><a href="index.html">Colombo</a></li>
					<li><a href="index.html">Kekirawa</a></li>
					<li><a href="index.html">Lunugama</a></li>
					<li><a href="index.html">Puttalam</a></li>
					<li><a href="index.html">Maskaliya</a></li>
					<li><a href="index.html">Nuware Eliya</a></li>
					<li><a href="index.html">Kandy</a></li>
					<li><a href="index.html">Badulla</a></li>
					<li><a href="index.html">Unawatuna</a></li>
					<li><a href="index.html">Jaffna</a></li>
					<li><a href="index.html">Trincomalee</a></li>
					<li><a href="index.html">Anuradhapura</a></li>
					<li><a href="index.html">Mullaitivu</a></li>
					<li><a href="index.html">Monaragala</a></li>
					<div class="clearfix"></div>
				</ul>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /footer-top ---->
<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow " style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="flickr" href="#"><span>Flickr</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn  " style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Green Wheels . All Rights Reserved | Design by  <a href="http://azeemullah.com/" target="_blank">zPOKOin</a> </p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
													<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
												</ul>
											</div>
											<div class="login-right">
												<form>
													<h3>Create your account </h3>
													<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
													<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required>
													<input type="text" value="Email id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required>	
													<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>	
													<input type="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
											<li><a class="linkin" href="#"><i></i>Sign in with Linkedin</a></li>
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Signin with your account </h3>
											<input type="text" value="Enter your mobile number or Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required>	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required>	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								<p>By logging in you agree to our <a href="terms.html">Terms and Conditions</a> and <a href="privacy.html">Privacy Policy</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->
<!-- write us -->
			<div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="writ">
										<h4>HOW CAN WE HELP YOU</h4>
											<ul>
												<li class="na-me">
													<input class="name" type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
												</li>
												<li class="na-me">
													<input class="Email" type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
												</li>
												<li class="na-me">
													<input class="number" type="text" value="Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile Number';}" required>
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="na-me">
													<select id="country" onchange="change_country(this.value)" class="frm-field required sect">
														<option value="null">Select Issue</option> 		
														<option value="null">Booking Issues</option>
														<option value="null">Bus Cancellation</option>
														<option value="null">Refund</option>
														<option value="null">Wallet</option>														
													</select>
												</li>
												<li class="descrip">
													<input class="special" type="text" value="Write Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Write Description';}" required>
												</li>
													<div class="clearfix"></div>
											</ul>
											<div class="sub-bn">
												<form>
													<button class="subbtn">Submit</button>
												</form>
											</div>
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //write us -->
</body>
</html>
<?php
} else {
	header('Location:../index.php');	
}
?>