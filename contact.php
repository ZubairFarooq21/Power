<?php

$mysqli = new mysqli("localhost","root","","s_eng_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
if (isset($_POST["submit"])) {
   

    $var_name = $_POST["name"];
    $var_address = $_POST["address"];
    $var_email = $_POST["email"];
    $var_phone = $_POST["phone"];
    $var_message = $_POST["message"];
    if (!$mysqli -> query("INSERT INTO `contact_tb`(`name`, `email`,`address`,`phone`, `message`) 
    VALUES ('$var_name','$var_email','$var_address','$var_phone', '$var_message')")) {
      echo("Error description: " . $mysqli -> error);
    }

  
}


// Perform a query, check for error


$mysqli -> close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Contact us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../power/ContactFrom_v17/css/util.css">
	<link rel="stylesheet" type="text/css" href="../power/ContactFrom_v17/css/main.css">
	
	<?php include("navbarlinks.php") ?>
	<?php include("links.php") ?>
	<?php include("index_css.php") ?>


	
</head>

<body>
<?php include("navbar.php") ?>



<button class="scrollToTopBtn" style="font-size: 15px;"><i style="font-size: 15px;color: white;" class="fas fa-chevron-up"></i></button>
    <?php include("scroll_js.php") ?>

<br>
<br>
	<div class="container-contact100" id="call">
		<div class="wrap-contact100">
		<form method="post" action="contact.php" class="contact100-form validate-form">
				<span class="contact100-form-title" style="font-weight: bold;">
					Let’s Get in Touch
				</span>

				<label class="label-input100" for="first-name">Tell us your Business name *</label>
				<div class="wrap-input100 validate-input" data-validate="Type first name">
					<!-- <input class="input100" type="text" id="Name" name="name" placeholder="Business name" required autocomplete="off">  -->
					<input type="text" name="name"placeholder="Business name" required autocomplete="off" class="input100" id="product_name" autocomplete="off" />

					<span class="focus-input100"></span>
				</div>
				
				<label class="label-input100" for="email">Enter your Address *</label>
				<div class="wrap-input100 validate-input" data-validate="Valid Address">
					<!-- <input  id="Sender" class="input100" type="text" name="address" placeholder="Address" required autocomplete="off"> -->
					<input type="text"  name="address" placeholder="Address" required autocomplete="off" placeholder="Type here" class="input100" id="product_name" autocomplete="off" />

					<span class="focus-input100"></span>
				</div>
				<label class="label-input100" for="email">Enter your email *</label>
				<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
					<!-- <input  id="Sender" class="input100" type="email" name="email" placeholder="Eg. example@email.com" required autocomplete="off"> -->
					<input type="email" name="email" placeholder="Eg. example@email.com" required autocomplete="off" class="input100" id="product_name" autocomplete="off" />

					<span class="focus-input100"></span>
				</div>

				<label class="label-input100" for="phone">Enter phone number</label>
				<div class="wrap-input100">
					<!-- <input class="input100" id="Subject" type="text" name="phone"
						placeholder="Eg. +1 800 000000" required autocomplete="off"> -->
						<input type="text" name="phone" placeholder="Eg. +1 800 000000" required autocomplete="off" class="input100" id="product_name" autocomplete="off" />

					<span class="focus-input100"></span>
				</div>



				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate="Message is required">
					<!-- <textarea id="Message" class="input100" name="message" placeholder="Write us a message"></textarea> -->
					<input type="" name="message" placeholder="Type here" class="input100" id="product_name" autocomplete="off" />

					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
				 <button style="background-color: greenyellow;color:black" type="submit" name="submit" class="custom-btn btn-7"> Send Message</button>	
						</div>
			</form>



			<div class="contact100-more flex-col-c-m" style="background-image: url('../power/assets/img/slide/about.jpg');">
				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="fas fa-map-marker-alt"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Address
						</span>

						<span class="txt2" style="color: #ff6c0b;font-weight: bold;">
							Daxue , Xuhui District, Shanghai, China 上海黄浦区斜土
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="fas fa-phone"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Lets Talk
						</span>

						<span class="txt3">
							<a href="tel:5554280940" style="color: #ff6c0b;font-weight: bold;">Call us at
								555-428-0940</a>
						</span>
					</div>
				</div>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="fas fa-envelope"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							General Support
						</span>

						<span class="txt3">
							<p><a href="#" style="color: #ff6c0b;font-weight: bold;">EVENTUVILLA@hotmail.com</a></p>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="main">
		<div class="heading" style="margin-top: -100px;">


		</div>


		<div class="box">

			<div class="dream">
				<h1 style="font-weight:bold;">Dubai</h1>
				<br>
				<p>Code Business Tower - Al Barsha Rd - Al Barsha 1 - Dubai, United Arab Emirates</p>
				<br>
				<br>
				<a href="tel:5554280940" style="color: #ff6c0b;font-weight: bold;">Call us at 555-428-0940</a>
			</div>



			<div class="dream">






			</div>

			<div class="dream">
				<h1 style="font-weight:bold;">South Africa
				</h1>
				<br>
				<p>Block A Willow Wood Office Park, cnr 3rd Street & Cedar Road, Broadacres, 202</p>
				<br>
				<br>
				‍
				<a href="tel:5554280940" style="color: #ff6c0b;font-weight: bold;">Call us at 555-428-0940</a>

			</div>


		</div>


	</div>
	


      
	<?php include("icons.php") ?>
    <?php include("footer.php") ?>
    <?php include("navbarfootlinks.php") ?>
  <?php include("footerlinks.php") ?>
</body>

</html>