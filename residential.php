<?php require_once("../power/model/crud.php");
require_once("../power/model/helpermethod.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Residential</title>
    <?php include("navbarlinks.php") ?>
    <?php include("links.php") ?>
    <?php include("index_css.php") ?>

</head>


</head>

<body>
    <?php include("navbar.php") ?>

    <button class="scrollToTopBtn" style="font-size: 15px;"><i style="font-size: 15px;color: white;" class="fas fa-chevron-up"></i></button>
    <?php include("scroll_js.php") ?>
    <section class="overlay">
        <div class="main">


            <div class="box" style="margin-top: 100px;">
                <div class="dream">
                    <h1 style="font-family: 'Times New Roman', Times, serif;font-size: 15px;font-weight: lighter;margin-top: 60px;letter-spacing: 1.5px;">
                        WE'RE EXPERTS IN <br> <br> <br>
                        <span style=" font-family: 'Cinzel', serif;font-size: 48px;font-weight: bolder;">
                            RESIDENTIAL ENERGY
                        </span>
                        <br>



                    </h1>

                </div>



            </div>
        </div>

    </section>


    <div class="center">


        <p style="line-height: 30px;letter-spacing: 1px;">A
            In today’s world, videoing and virtual streaming are a must when it comes to crossing locational borders
            <br> and working within a remote context. Luckily, The Event Production Company saw the merits of live <br>
            broadcasting right from its inception. So, we were ready for the largely digital event landscape before it
            <br> became a necessity and are well equipped to help you produce any virtual or hybrid event.
        </p>



    </div>



    <div class="main" style="     background-color: #e9e9e9;margin-top: -300px;">
        <div class="heading">
            <h3 style="font-weight: 500px;line-height: 64px;">“We’re excited to bring your message to the world!”</h3>
        </div>


        <div class="box">

            <div class="dream" style="padding-left: 100px;padding-right: 100px;">

                <h1 style="text-align:left;font-size: 40px;   font-family: 'Poppins', sans-serif;font-weight:500;color: rgba(0, 0, 0, 0.753);">
                    Do it in style
                </h1>
                <br>
                <p style="line-height: 25px;text-align: left;"> Whether it’s a critical draw, an awards ceremony or an
                    important announcement of any kind, we’re ready to handle the technicalities so that you can focus
                    on the importance of the occasion.</p>
                <br>

                <br>
                <h1 style="text-align:left;font-size: 40px;   font-family: 'Poppins', sans-serif;font-weight:500;color: rgba(0, 0, 0, 0.753);">
                    Tap into our extensive network of experts
                </h1>
                <br>
                <br>

                <p style="line-height: 28px;text-align: left;">
                    Our advanced network and extensive range of video production specialists means you’ll have the peace
                    of mind you need to enjoy the event knowing that the video quality represents your brand as it
                    deserves. The end goal is to facilitate a seamless experience, so that you remember the moment above
                    all else.

                    <br>

                    <br>
                </p>

            </div>



            <div class="dream" style="box-shadow: 11px 11px 40px 0 rgb(0 0 0 / 30%);opacity: 1;">
                <img src="assets/img/slide/slide-3.jpg" style="vertical-align: middle;display: inline-block"" alt="">
            </div>



        </div>
    </div>
    <br>
 
    <div class=" main">


                <div class="box " style="border-top: 1px solid #e9e9e9 ;">
                    <div class="dream" style="border-right: 1px solid #e9e9e9;">

                        <img src="assets/img/slide/logo1.png" alt="">



                    </div>

                    <div class="dream" style="border-right: 1px solid #e9e9e9;">
                        <img src="assets/img/slide/logo2.jpg" alt="">

                    </div>

                    <div class="dream" style="border-right: 1px solid #e9e9e9;">
                        <img src="assets/img/slide/logo3.png" alt="">


                    </div>
                    <div class="dream" style="border-right: 1px solid #e9e9e9;">
                        <img src="assets/img/slide/logo4.png" alt="">


                    </div>
                    <div class="dream" style="border-right: 1px solid #e9e9e9;">
                        <img src="assets/img/slide/logo5.png" alt="">


                    </div>
                    <div class="dream">
                        <img src="assets/img/slide/logo1.png" alt="">
                        <!-- <button class="custom-btn btn-7"><span>Read More</span></button> -->
                    </div>
                </div>

            </div>
            <br>
            <br>

            <div class="main">


                <div class="box ">
                    <div class="dream">
                        <br>
                        <?php

                    $query = "SELECT * FROM `card_tb`";
                    $result = query_exec($query);
                    while ($rows = mysqli_fetch_array($result)) { ?>
                        <div class="row ">
                            <div class="col-md-4">
                                <img class="w-100" src="../power/assets/img/slide/<?php echo $rows["img"] ?>">
                            </div>
                            <div class="col-md-8">
                                <div class="card-block">
                                    <h6 class="card-title"><?php echo $rows["title"] ?></h6>
                                    <p class="card-text text-justify " style="background-color: transparent;"><?php echo $rows["content"] ?></p>

                                    <a href="<?php echo $rows["links"] ?>" target="_blank"> <button style="background-color: greenyellow;color:black" class="custom-btn btn-7"><span>Sign Up</span></button></a>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <?php } ?>

                    </div>



                </div>

            </div>



            <br>
            <br>



















            <?php include("icons.php") ?>
            <?php include("footer.php") ?>
            <?php include("navbarfootlinks.php") ?>
            <?php include("footerlinks.php") ?>

</html>

<body>