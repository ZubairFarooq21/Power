<?php

$mysqli = new mysqli("localhost","root","","s_eng_db");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
  $targetDir = "uploads/";
  $fileName = basename($_FILES["file"]["name"]);
  $targetFilePath = $targetDir . $fileName;
  $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

  $var_name = $_POST["name"];
   
  $var_email = $_POST["email"];
  $var_phone = $_POST["phone"];
 
  $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
  if (in_array($fileType, $allowTypes)) {
      // Upload file to server
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
        if (!$mysqli -> query("INSERT INTO `bill_tb`(`name`, `email`,`phone`,`image`)   VALUES ('$var_name','$var_email','$var_phone','$fileName')"));

      };
  };
}
// Perform a query, check for error


$mysqli -> close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>home</title>
  <?php include("navbarlinks.php") ?>
<?php include("links.php") ?>

<?php include("index_css.php") ?>
</head>



<body>

<?php include("navbar.php") ?>



<button class="scrollToTopBtn" style="font-size: 15px;"><i style="font-size: 15px;color: white;" class="fas fa-chevron-up"></i></button>
    <?php include("scroll_js.php") ?>
  
  <section class="overlay">
  
    <div class="main">


      <div class="box" style="margin-top: 100px;">
        <div class="dream">

          <h1 style=" font-family: 'Roboto Condensed', sans-serif;color: #fff;letter-spacing: 5px;font-size: 16px;font-weight: 400px;text-align: left;line-height: 30px;padding-left: 10px;">
            WELCOME TO THE FUTURE OF SOLAR ENERGY <br>
            <br>
            <span style=" font-family: 'Cinzel', serif;color: #fff;line-height: 80px;font-size: 47px;font-weight: 500;text-align: left;;">
              Hot Summer Energy Rates? Contact Us to Save



          </h1>

          <div class="dream">
            <span>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="custom-btn btn-7"><span>Get a Custom Rate</span></button> &nbsp;&nbsp;
              <a href="../power/contact.php"> <button class="custom-btn btn-7"><span>Get a Instant
                    rate</span></button></a>
            </span>
          </div>




        </div>
        <div class="dream">
          <img src="../power/assets/img/slide/Electrical-Transparent-Background.png" height="500px" alt="">
        </div>








      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">
                Send Us your Bill
              </h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form method="post" action="index.php" enctype="multipart/form-data">
                <div class="mb-3">

                <input type="text" name="name"  placeholder="Name" required autocomplete="off" class="form-control" id="product_name" autocomplete="off" />
                </div>
                <div class="mb-3">

                <input type="email" name="email" placeholder="Email" required autocomplete="off" class="form-control" id="product_name" autocomplete="off" />
                </div>
                <div class="mb-3">

                <input type="text" name="phone" placeholder="Phone" required autocomplete="off" class="form-control" id="product_name" autocomplete="off" />
                </div>
               
                <div class="mb-3">


                  <input type="file" name="file" id="file" class="form-control" required>
                </div>
                <div class="modal-footer">

                <button style="background-color: greenyellow;color:black" type="submit" name="submit" class="custom-btn btn-7"> Send Message</button>	
                  <!-- <button type="button" class="btn btn-primary">
                  Submit Form
                </button> -->
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>



  </section>



  <div class="main" style="  background-color: #f6f6f6;">
    <div class="heading">
      <h3>
      </h3>

    </div>
    <div class="box" style="margin-top: -100px;">



      <div class="dream" style="position: relative;  z-index: 1;width: 50%;box-shadow: 11px 11px 40px 0 rgb(0 0 0 / 30%);opacity: 1;margin-left: 50px;">
        <img src="../power/assets/img/slide/about.jpg" style="   vertical-align: middle;display: inline-block" alt="">


      </div>

      <div class="dream" style="padding-left: 100px;">
        <h1 style=" font-family: 'Roboto Condensed', sans-serif;display: block;
              margin-bottom: 16px;
              color:#262626;
              font-size: 13px;
              line-height: 20px;
              font-weight: 400;
              letter-spacing: 5px;
              text-transform: uppercase;text-align: left;padding-left: -10px;">
          OUR EXPERIENCE SPEAKS FOR ITSELF<br>
          <br>
          <span style="     font-family: 'Cinzel', serif;font-weight: lighter;border-bottom: 3px solid green;line-height: 55px;font-size: 40px;">
            Over 25 years <br> and <br> counting...
          </span>




        </h1>
        <p style="text-align: left; font-family: Poppins, sans-serif;color:#262626;line-height: 30px;letter-spacing: 1.5px;">
          As the leading events company in Africa, the <br> Middle East and the Kingdom of Saudi, we’ve <br>
          been entrusted to create experiences for public <br> figures, such as the late Nelson Mandela, right
          <br> through to some of the world’s most well-known <br> brands like Coca-Cola and Shell.
          <br>
          <button data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" class="custom-btn btn-7"><span style="color: black;background-color: greenyellow;">Get
              Started</span></button>

        </p>

      </div>





    </div>


  </div>


  <div class="main" style="  background-color: #f6f6f6;">
    <div class="heading">
      <h1 style=" font-family: 'Roboto Condensed', sans-serif;display: block;
        margin-bottom: 16px;
        color:#262626;
        font-size: 13px;
        line-height: 40px;
        font-weight: 400;
        letter-spacing: 5px;
        text-transform: uppercase;">
        WHAT WE OFFER</h1>
      <h3 style="font-size: 40px;color: #262626;font-family: 'Cinzel', serif;font-weight: lighter;border-bottom: 3px solid green;line-height: 60px;">

        ADAPTED TO YOUR NEEDS</h3>

    </div>
    <div class="box">



      <div class="dream" data-aos="fade-up" data-aos-duration="3000">





        <div class="row" style="
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
          ">
          <div class="col-lg-4 col-md-6 icon-box" style="box-shadow: 11px 11px 40px 0 rgb(0 0 0 / 30%);opacity: 1;" data-aos="fade-right">
            <div class="icon" style="margin-top: 30px;font-size: 35px;font-weight: bold;color:black">
              <i class="bi bi-briefcase"></i>
            </div>
            <h4 class="title" style="color: green;letter-spacing:1px;font-family: 'Cinzel', serif;font-weight: bold;">
              Residential Energy Supply</h4>
            <p class="description" style="margin-bottom: 30px;line-height: 30px;">
              Voluptatum deleniti atque corrupti quos dolores et quas
              molestias excepturi sint occaecati cupiditate non provident
            </p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" style="box-shadow: 11px 11px 40px 0 rgb(0 0 0 / 30%);opacity: 1;" data-aos="fade-left">
            <div class="icon" style="margin-top: 30px;font-size: 35px;font-weight: bold;color:balck">
              <i class="bi bi-card-checklist"></i>
            </div>
            <h4 class="title" style="color: green;letter-spacing:1px;font-family: 'Cinzel', serif;font-weight: bold;">
              Commericial Energy Supply </h4>
            <p class="description" style="margin-bottom: 30px">
              Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
              aliquip ex ea commodo consequat tarad limino ata
            </p>
          </div>

        </div>

      </div>




    </div>


  </div>




  <br>


  <br>

  <br>


  <div id="bg" style="background-color: #f6f6f6; margin-top: -100px;">
    <div class="main">
      <div class="heading">
        <h1 style=" font-family: 'Roboto Condensed', sans-serif;display: block;
              margin-bottom: 16px;
              color:#262626;
              font-size: 13px;
              line-height: 40px;
              font-weight: 400;
              letter-spacing: 5px;
              text-transform: uppercase;">
          our proud full moments</h1>
        <h3 style="font-size: 40px;color: #262626;font-family: 'Cinzel', serif;font-weight: lighter;border-bottom: 3px solid green;line-height: 60px;">

          our success story</h3>

      </div>
    </div>

    <div class="counter-up">
      <div class="content" style="margin-bottom: 100px;">
        <div class="box" style="   border: 1px solid transparent;
                  box-shadow: 0 0 6px 0 rgb(0 0 0 / 7%),0px 0px 5px rgb(78, 77, 77) !important;
                  background-color: transparent !important;
                  line-height: 40px !important;margin-left: 10px;">
          <div class="icon" style="margin-top: 5px;"><i class="bi bi-emoji-smile" style="color:green;"></i></div>
          <br>
          <div class="counter" style="margin-bottom: -80px;">724</div>
          <div class="text" style="font-family: 'Cinzel', serif;font-size: 15px;    color: #888;text-align: center;letter-spacing: 6px;">
            Happy clients</div>
        </div>
        <div class="box" style="   border: 1px solid transparent;
                  box-shadow: 0 0 6px 0 rgb(0 0 0 / 7%),0px 0px 5px rgb(78, 77, 77) !important;
                  background-color: transparent !important;
                  line-height: 40px !important;margin-left: 10px;">
          <div class="icon" style="margin-top: 5px;"><i class="bi bi-journal-richtext" style="color:green;"></i></div>
          <br>
          <div class="counter" style="margin-bottom: -80px;">724</div>
          <div class="text" style="font-family: 'Cinzel', serif;font-size: 15px;    color: #888;text-align: center;letter-spacing: 6px;">
            Our Projects</div>
        </div>
        <div class="box" style="   border: 1px solid transparent;
                  box-shadow: 0 0 6px 0 rgb(0 0 0 / 7%),0px 0px 5px rgb(78, 77, 77) !important;
                  background-color: transparent !important;
                  line-height: 40px !important;margin-left: 10px;">
          <div class="icon" style="margin-top: 5px;"><i class="bi bi-headset" style="color:green;"></i></div>
          <br>
          <div class="counter" style="margin-bottom: -80px;">724</div>
          <div class="text" style="font-family: 'Cinzel', serif;font-size: 15px;    color: #888;text-align: center;letter-spacing: 6px;">
            Working Hours</div>
        </div>
        <div class="box" style="   border: 1px solid transparent;
                  box-shadow: 0 0 6px 0 rgb(0 0 0 / 7%),0px 0px 5px rgb(78, 77, 77) !important;
                  background-color: transparent !important;
                  line-height: 40px !important;margin-right: 10px;">
          <div class="icon" style="margin-top: 5px;"><i class="bi bi-people" style="color:green;"></i></div>
          <br>
          <div class="counter" style="margin-bottom: -80px;">724</div>
          <div class="text" style="font-family: 'Cinzel', serif;font-size: 15px;    color: #888;text-align: center;letter-spacing: 6px;">
            Hardworkers</div>
        </div>
      </div>

    </div>
  </div>
  <script>
    $(document).ready(function() {
      $('.counter').counterUp({
        delay: 10,
        time: 1200
      });
    });
  </script>







  <div class="event">
    <div class="main">
      <div class="heading" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
        <h1 style="font-family: Poppins, sans-serif; font-size: 20px;color: white;font-weight: 500;letter-spacing: 10px;">
          SPEAK TO US ABOUT YOUR NEXT EVENT


        </h1>
        <br>

        <h1 style="font-family: Poppins, sans- serif;font-size: 60px; color: white;font-weight: 500;line-height: 70px;letter-spacing: 2px;">
          Connect with our team of event production specialists.


        </h1>
        <a href="../power/contact.php"> <button class="custom-btn btn-7"><span style="color: black;background-color: greenyellow;">Learn
              More</span></button></a>

      </div>

    </div>
  </div>
  </div>





  <div id="carouselExampleControls" class="carousel slide text-center carousel-dark container custom-textimonial" data-mdb-ride="carousel" style="margin-bottom: 100px">
    <div class="carousel-inner">
      <div class="main">
        <div class="heading">
          <h1 style=" font-family: 'Roboto Condensed', sans-serif;display: block;
          margin-bottom: 16px;
          color:#262626;
          font-size: 13px;
          line-height: 40px;
          font-weight: 400;
          letter-spacing: 5px;
          text-transform: uppercase;">
            our proud full moments</h1>
          <h3 style="font-size: 40px;color: #262626;font-family: 'Cinzel', serif;font-weight: lighter;border-bottom: 3px solid green;line-height: 60px;">

            TESTIMONIALS </h3>

        </div>
      </div>
      <div class="carousel-item active">
        <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp" alt="avatar" style="width: 150px" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-3">Maria Kate</h5>
            <p>Photographer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
              et deleniti nesciunt sint eligendi reprehenderit reiciendis,
              quibusdam illo, beatae quia fugit consequatur laudantium velit
              magnam error. Consectetur distinctio fugit doloremque.
            </p>
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="far fa-star fa-sm"></i></li>
        </ul>
      </div>
      <div class="carousel-item">
        <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp" alt="avatar" style="width: 150px" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-3">John Doe</h5>
            <p>Web Developer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
              et deleniti nesciunt sint eligendi reprehenderit reiciendis.
            </p>
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="far fa-star fa-sm"></i></li>
        </ul>
      </div>
      <div class="carousel-item">
        <img class="rounded-circle shadow-1-strong mb-4" src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" alt="avatar" style="width: 150px" />
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h5 class="mb-3">Anna Deynah</h5>
            <p>UX Designer</p>
            <p class="text-muted">
              <i class="fas fa-quote-left pe-2"></i>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus
              et deleniti nesciunt sint eligendi reprehenderit reiciendis,
              quibusdam illo, beatae quia fugit consequatur laudantium velit
              magnam error. Consectetur distinctio fugit doloremque.
            </p>
          </div>
        </div>
        <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="fas fa-star fa-sm"></i></li>
          <li><i class="far fa-star fa-sm"></i></li>
        </ul>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleControls" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <br>
  <br>
  <br>
  <br>









  <?php include("icons.php") ?>
    <?php include("footer.php") ?>
    <?php include("navbarfootlinks.php") ?>
  <?php include("footerlinks.php") ?>

</html>

<body>