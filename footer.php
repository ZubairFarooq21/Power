
    <style>
        * {
            padding: 0;
            margin: 0;
        }
  
  
  
  
        /* The footer is fixed to the bottom of the page */
  
        footer {
  
            bottom: 0;
        }
  
        @media (max-height:800px) {
            footer {
                position: static;
            }
  
        }
  
  
        .footer-distributed {
            background-color: rgb(22, 22, 22);
            box-sizing: border-box;
            width: 100%;
            text-align: left;
            font: bold 16px sans-serif;
            padding: 50px 50px 60px 50px;
            margin-top: 80px;
        }
  
        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: inline-block;
            vertical-align: top;
        }
  
        /* Footer left */
  
        .footer-distributed .footer-left {
            width: 30%;
        }
  
        .footer-distributed h3 {
            color: #ffffff;
            font: normal 36px 'Cookie', cursive;
            margin: 0;
        }
  
        /* The company logo */
  
        .footer-distributed .footer-left img {
            width: 30%;
        }
  
        .footer-distributed h3 span {
            color: #e0ac1c;
        }
  
        /* Footer links */
  
        .footer-distributed .footer-links {
            color: #ffffff;
            margin: 20px 0 12px;
        }
  
        .footer-distributed .footer-links a {
            display: inline-block;
            line-height: 1.8;
            text-decoration: none;
            color: inherit;
        }
  
        .footer-distributed .footer-company-name {
            color: #8f9296;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
        }
  
        /* Footer Center */
  
        .footer-distributed .footer-center {
            width: 35%;
        }
  
  
        .footer-distributed .footer-center i {
            background-color: #33383b;
            color: #ffffff;
            font-size: 25px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            text-align: center;
            line-height: 42px;
            margin: 10px 15px;
            vertical-align: middle;
        }
  
        .footer-distributed .footer-center i.fa-envelope {
            font-size: 17px;
            line-height: 38px;
        }
  
        .footer-distributed .footer-center p {
            display: inline-block;
            color: #ffffff;
            vertical-align: middle;
            margin: 0;
        }
  
        .footer-distributed .footer-center p span {
            display: block;
            font-weight: normal;
            font-size: 14px;
            line-height: 2;
        }
  
        .footer-distributed .footer-center p a {
            color: #e0ac1c;
            text-decoration: none;
            ;
        }
  
  
        /* Footer Right */
  
        .footer-distributed .footer-right {
            width: 30%;
        }
  
        .footer-distributed .footer-company-about {
            line-height: 20px;
            color: #92999f;
            font-size: 13px;
            font-weight: normal;
            margin: 0;
        }
  
        .footer-distributed .footer-company-about span {
            display: block;
            color: #ffffff;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 20px;
        }
  
        .footer-distributed .footer-icons {
            margin-top: 25px;
        }
  
        .footer-distributed .footer-icons a {
            display: inline-block;
            width: 35px;
            height: 35px;
            cursor: pointer;
            background-color: #33383b;
            border-radius: 2px;
  
            font-size: 20px;
            color: #ffffff;
            text-align: center;
            line-height: 35px;
  
            margin-right: 3px;
            margin-bottom: 5px;
        }
  
        .footer-distributed .footer-icons a:hover {
            background-color: rgb(52, 196, 201);
  
  
  
        }
  
        /* Here is the code for Responsive Footer */
        /* You can remove below code if you don't want Footer to be responsive */
  
  
        @media (max-width: 880px) {
  
            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right {
                display: block;
                width: 100%;
                margin-bottom: 30px;
                text-align: center;
            }
  
            .footer-distributed .footer-center i {
                margin-left: 0;
            }
        }
    </style>
  
  
  
  
  
  
  
  
  
  
    <footer class="footer-distributed">
  
        <div class="footer-left">
  
          <h1 class="logo">
            <a href="index.html"><img src="../power/assets/img/slide/logo-removebg-preview.png"  alt=""></a>

          </h1>
  
  
            <p class="footer-links">
                <a class="active" href="../html/luxury events.html">Home</a>
                |
                <a href="../about/about.html">About</a>
                |
                <a href="../html/gallerypg2.html">Gallery</a>
                |
                <a href="../html/event services.html">Services</a>
                |
                <a href="../ContactFrom_v17/index.html">Contact</a>
                |
  
            </p>
  
            <p class="footer-company-name">  &copy; Copyright <strong><span></span></strong>. All Rights Reserved</p>
        </div>
  
        <div class="footer-center">
            <div>
                <i class="fas fa-map-marker-alt" style="color: white;"></i>
                <p><span>Daxue , Xuhui District, Shanghai, China 上海黄浦区斜土</p>
            </div>
  
            <div>
                <i class="fa fa-phone" style="color: white;"></i>
                <p>+86 (0)21 538 603 80</p>
            </div>
            <div>
                <i class="fa fa-envelope" style="color: white;"></i>
                <p><a href="#">abc@gmail.com</a></p>
            </div>
         
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                Prioritize your requirements and expectations within the ideal budget
                Deliver the best offer with high quality work to create your dream wedding
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
            </div>
        </div>
    </footer>
