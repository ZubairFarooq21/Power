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
    $var_message = $_POST["message"];
    if (!$mysqli -> query("INSERT INTO `promo_tb`(`name`, `email`, `address`, `message`) VALUES ('$var_name','$var_email','$var_address','$var_message')")) {
      echo("Error description: " . $mysqli -> error);
    }

  
}


// Perform a query, check for error


$mysqli -> close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Promo Code</title>
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
		<form method="post" action="promo.php" class="contact100-form validate-form">
				<span class="contact100-form-title" style="font-weight: bold;">
				GET A FREE QUOTE
				</span>

				<label class="label-input100" for="first-name">Tell us Your name *</label>
				<div class="wrap-input100 validate-input" data-validate="Type first name">
					<!-- <input class="input100" type="text" id="Name" name="name" placeholder="Business name" required autocomplete="off">  -->
					<input type="text" name="name"placeholder="Your name" required autocomplete="off" class="input100" id="product_name" autocomplete="off" />

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

				
				<label class="label-input100" for="message">Message *</label>
				<div class="wrap-input100 validate-input" data-validate="Message is required">
					<!-- <textarea id="Message" class="input100" name="message" placeholder="Write us a message"></textarea> -->
					<input type="" name="message" placeholder="Type here" class="input100" id="product_name" autocomplete="off" />

					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
				 <button style="background-color: greenyellow;color:black" type="submit" name="submit" class="custom-btn btn-7">SUBMIT</button>	
						</div>
			</form>



			<div class="contact100-more flex-col-c-m" style="background-image: url('../power/assets/img/slide/aa.jpg');">
				

				

				
			</div>
		</div>
	</div>
	
	


      
	<?php include("icons.php") ?>
    <?php include("footer.php") ?>
    <?php include("navbarfootlinks.php") ?>
  <?php include("footerlinks.php") ?>
</body>

</html>