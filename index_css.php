<style>
  * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Poppins, sans-serif;


    }

    body {
      font-family: Poppins, sans-serif;
      background-color: #f6f6f6 !important;
    }

    .main .heading h3 {
      font-size: 3em;
      font-weight: bolder;


    }

    .main .heading h3 span {

      font-weight: 100;
    }

    .main .heading {
      width: 50%;
      padding-bottom: 10%;
      padding-top: 100px;
      line-height: 50px;

    }



    .main {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;



    }

    .main .box {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      margin: 0 10px;
    }

    .main .box .dream {
      display: flex;
      flex-direction: column;
      width: 100%;
      padding: 20px;


    }

    .main .box .dream img {
      padding-bottom: 15px;
      width: 100%;
      border-radius: 5px;


    }

    .main .btn {
      margin: 40px 0 70px 0;
      background-color: black;
      padding: 15px 40px;
      border-radius: 5px;

    }

    .main .btn a {
      color: white;
      font-size: 1.2em;
      text-decoration: none;
      font-weight: bolder;
      letter-spacing: 3px;

    }



    @media only screen and (max-width:800px) {
      .main .box {
        flex-direction: column;
        margin-top: auto;

      }


      .main .box .dream {
        width: 100%;
      }

      .main .heading {
        width: 100%;

      }

      .main .heading h3 {
        font-size: 1em;

      }

      .carousel-caption h5 {
        font-size: 1em;
      }


    }

    .center {
      padding: 70px 30px;
      background-color: #f6f6f6;
      text-align: center;
      height: 600px;
      background-size: cover;
      background-repeat: no-repeat;
      width: 100%;
      height: 700px;
    }

    #button {
      display: inline-block;
      background-color: green;
      width: 50px;
      height: 50px;
      text-align: center;
      border-radius: 100%;
      position: fixed;
      bottom: 30px;
      right: 80px;
      transition: background-color .3s,
        opacity .5s, visibility .5s;
      opacity: 0;
      visibility: hidden;
      z-index: 1000;

    }


    .counter {
      color: black !important;
      font-family: 'Cinzel', serif !important;
      letter-spacing: 2px !important;
    }


    #button::after {

      font-family: FontAwesome;
      font-weight: normal;
      font-style: normal;
      font-size: 2em;

      color: #fff;
    }

    #button:hover {
      cursor: pointer;
      background-color: #222;
    }

    #button:active {
      background-color: #222;
    }

    #button.show {
      opacity: 1;
      visibility: visible;
    }

    .overlay {
      background: linear-gradient(rgba(46, 69, 82, 0.8),
          rgba(46, 69, 82, 0.8)
          /* rgba(28, 23, 22, 0.8), */
          /* rgba(28, 23, 22, 0.8) */
        ),

        /*   ^^^ play with these values to ge the result you want   */
        /*make sure gradient is first, then url---doesn't work the other way around*/
        url("assets/img/slide/static\ solar\ pic.jpg") center center no-repeat;

      /*  below values are optional */
      background-attachment: fixed;
      background-size: 1000px;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      background-size: cover;



      color: white;
      text-shadow: 0 0 2px black;
    }






    * {

      text-decoration: none;
      list-style: none;
      outline: none;
      border: none;
      text-align: center;
      padding: 0;
    }

    .custom-btn {
      width: 170px;
      height: 40px;
      color: #fff;
      border-radius: 5px;
      padding: 10px 25px;
      font-family: 'Lato', sans-serif;
      font-weight: 500;
      background: transparent;
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      display: inline-block;
      box-shadow: inset 2px 2px 2px 0px rgba(255, 255, 255, .5),
        7px 7px 20px 0px rgba(0, 0, 0, .1),
        4px 4px 5px 0px rgba(0, 0, 0, .1);
      outline: none;

    }

    .btn-7 {
      background: linear-gradient(0deg, gray) 100%;
      line-height: 42px;
      padding: 0;
      border: none;
    }

    .btn-7 span {
      position: relative;
      display: block;
      width: 100%;
      height: 100%;
    }

    .btn-7:before,
    .btn-7:after {
      position: absolute;
      content: "";
      right: 0;
      bottom: 0;
      background: rgb(4, 42, 4);
      box-shadow:
        -7px -7px 20px 0px rgba(255, 255, 255, .9),
        -4px -4px 5px 0px rgba(255, 255, 255, .9),
        7px 7px 20px 0px rgba(0, 0, 0, .2),
        4px 4px 5px 0px rgba(0, 0, 0, .3);
      transition: all 0.3s ease;
    }

    .btn-7:before {
      height: 0%;
      width: 2px;
    }

    .btn-7:after {
      width: 0%;
      height: 2px;
    }

    .btn-7:hover {
      color: rgb(4, 42, 4)k;
      background: transparent;
    }

    .btn-7:hover:before {
      height: 100%;
    }

    .btn-7:hover:after {
      width: 100%;
    }

    .btn-7 span:before,
    .btn-7 span:after {
      position: absolute;
      content: "";
      left: 0;
      top: 0;
      background: rgb(4, 42, 4);
      box-shadow:
        -7px -7px 20px 0px rgba(255, 255, 255, .9),
        -4px -4px 5px 0px rgba(255, 255, 255, .9),
        7px 7px 20px 0px rgba(0, 0, 0, .2),
        4px 4px 5px 0px rgba(0, 0, 0, .3);
      transition: all 0.3s ease;
    }

    .btn-7 span:before {
      width: 2px;
      height: 0%;
    }

    .btn-7 span:after {
      height: 2px;
      width: 0%;
    }

    .btn-7 span:hover:before {
      height: 100%;
    }

    .btn-7 span:hover:after {
      width: 100%;
    }

    .event {

      background: linear-gradient(rgba(46, 69, 82, 0.8),
          rgba(46, 69, 82, 0.8)),

       
        url("assets/img/slide/slide-1.jpg")center center no-repeat;

      /*  below values are optional */
      background-attachment: fixed;
      background-size: 1000px;
      -webkit-background-size: cover;
      -moz-background-size: cover;



      color: white;
      text-shadow: 0 0 2px black;

    }


    textarea {
      resize: none;
    }



    .svg-inline--fa {
      vertical-align: -0.200em;
    }

    .rounded-social-buttons {
      text-align: center;
    }

    .rounded-social-buttons .social-button {
      display: inline-block;
      position: relative;
      cursor: pointer;
      width: 3.125rem;
      height: 3.125rem;
      border: 0.125rem solid transparent;
      padding: 0;
      text-decoration: none;
      text-align: center;
      color: #fefefe;
      font-size: 1.5625rem;
      font-weight: normal;
      line-height: 2em;
      border-radius: 1.6875rem;
      transition: all 0.5s ease;
      margin-right: 0.25rem;
      margin-bottom: 0.25rem;
    }

    .rounded-social-buttons .social-button:hover,
    .rounded-social-buttons .social-button:focus {
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
    }

    .rounded-social-buttons .fa-twitter,
    .fa-facebook-f,
    .fa-linkedin,
    .fa-youtube,
    .fa-instagram {
      font-size: 25px;
    }

    .rounded-social-buttons .social-button.facebook {
      background: #3b5998;
    }

    .rounded-social-buttons .social-button.facebook:hover,
    .rounded-social-buttons .social-button.facebook:focus {
      color: #3b5998;
      background: #fefefe;
      border-color: #3b5998;
    }

    .rounded-social-buttons .social-button.twitter {
      background: #55acee;
    }

    .rounded-social-buttons .social-button.twitter:hover,
    .rounded-social-buttons .social-button.twitter:focus {
      color: #55acee;
      background: #fefefe;
      border-color: #55acee;
    }

    .rounded-social-buttons .social-button.linkedin {
      background: #007bb5;
    }

    .rounded-social-buttons .social-button.linkedin:hover,
    .rounded-social-buttons .social-button.linkedin:focus {
      color: #007bb5;
      background: #fefefe;
      border-color: #007bb5;
    }

    .rounded-social-buttons .social-button.youtube {
      background: #bb0000;
    }

    .rounded-social-buttons .social-button.youtube:hover,
    .rounded-social-buttons .social-button.youtube:focus {
      color: #bb0000;
      background: #fefefe;
      border-color: #bb0000;
    }

    .rounded-social-buttons .social-button.instagram {
      background: rgb(231, 53, 82);
    }

    .rounded-social-buttons .social-button.instagram:hover,
    .rounded-social-buttons .social-button.instagram:focus {
      color: rgb(231, 53, 82);
      background: #fefefe;
      border-color: rgb(231, 53, 82);
    }
       
    .scrollToTopBtn {
            background-color: green;
            border: none;
            border-radius: 100%;
            color: white;
            cursor: pointer;
            font-size: 16px;
            line-height: 48px;
            width: 48px;

            /* place it at the bottom right corner */
            position: fixed;
            bottom: 30px;
            right: 80px;
            /* keep it at the top of everything else */
            z-index: 100;
            /* hide with opacity */
            opacity: 0;
            /* also add a translate effect */
            transform: translateY(100px);
            /* and a transition */
            transition: all .5s ease
        }

        .showBtn {
            opacity: 1;
            transform: translateY(0)
        }

        .scrollToTopBtn:hover {
            background-color: #222;}
</style>