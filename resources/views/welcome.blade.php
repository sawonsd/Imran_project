<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Imran - Webdesigner / Webdeveloper</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <!-- Favicons -->
      <link href="{{asset('public/assets/img/favi.png')}}" rel="icon">
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
      <!--font awesome icon link-->
      <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css'>
      <!-- Bootstrap CSS File -->
      <link href="{{asset('public/assets/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
      <!-- Libraries CSS Files -->
      <link href="{{asset('public/assets/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.tutorialjinni.com/toastr.js/2.1.4/toastr.css">
      <link href="{{asset('public/assets/lib/animate/animate.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/lib/ionicons/css/boxicons.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
      <!-- Main Stylesheet File -->
      <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
      <link href="{{asset('public/assets/css/particles.css')}}" rel="stylesheet">
   </head>
   <body>
      <!--==========================
         Header
         ============================-->
      <header id="header">
         <div class="container">
            <div class="logo float-left">
               <!-- Uncomment below if you prefer to use an image logo -->
               <!--   <h1 class="text-light"><a href="#intro" class="scrollto"><span>imran</span></a></h1>-->
               <a href="#header" class="scrollto"><img src="{{asset('public/assets/img/l.png')}}" alt="" class="img-fluid"></a> 
            </div>
            <nav class="main-nav float-right d-none d-lg-block">
               <ul>
                  <li class="active"><a href="#intro">Home</a></li>
                  <li><a href="#about">About Us</a></li>
                  <li><a href="#services">Services</a></li>
                  <li><a href="#portfolio">Portfolio</a></li>
                  <li><a href="#team"> Our Team</a></li>
                  <li><a href="#footer">Contact Us</a></li>
                  <li><a href="{{route('home')}}">Log In</a></li>
                  <li class="drop-down">
                     <a href="">pages</a>
                     <ul>
                        <li><a href="#education">education</a></li>
                        <li><a href="#skills">skills</a></li>
                        <li><a href="#testimonials">testimonials</a></li>
                        <li><a href="#blog">blog</a></li>
                     </ul>
                  </li>
               </ul>
            </nav>
            <!-- .main-nav -->  
         </div>
      </header>
      <!-- #header -->
      <!--Intro Section-->
      <section id="intro" class="clearfix">
         <div id="particles-js"></div>
         <div class="container ">
            <div class="row justify-content-center align-self-center">
               <div class="col-md-12 intro-info order-md-first order-last">
                  <img src="{{asset('public/assets/img/back.jpg')}}" class="container-personal">
                  <h2>Hello</span></h2>
                  <h1 class="text-type">
                     <a href="" class="typewrite" data-period="2000" data-type='[  "I am imran Mahmud ", "I am Web Designer", "I am Web Developer" ]'>
                     <span class="wrap"></span>
                     </a>
                  </h1>
                  <div>
                     <p id="container-button"><a href="#about" class="btn-get-started scrollto">download cv <i class="far fa-arrow-alt-circle-right"></i></a></p>
                     <section id="section10" class="demo">
                        <a href="#about" class="scrollto"><span></span></a>
                     </section>
                  </div>
               </div>
               <!-- <div class="col-md-6 intro-img order-md-last order-first">
                  <img src="img/intro-img.svg" alt="" class="img-fluid">
                  </div>-->
            </div>
         </div>
      </section>
      <!-- #intro -->
      <main id="main">
         <!--==========================
            About Us Section
            ============================-->
         <section id="about">
            <div class="container-fluid">
               <header class="section-header">
                  <h3>ABOUT ME</h3>
               </header>
               <div class="row">
                  <div class="col-lg-6 col-md-6">
                     <div class="about-img">
                        <img src="{{asset('public/assets/img/back.jpg')}}" alt="">
                     </div>
                  </div>
                  <div class="col-lg6- col-md-6">
                     <div class="about-content">
                        <h3></h3>
                        <p>Hello! I'm Imran and My Home Town is Tangail, Bangladesh. I am Professional Web Designer and Programmer also. I Started Web Design and Development After 2018 and Have Enjoyed Working as a Freelancer. I am Skilled In HTML5, CSS3, Bootstrap4,PHP-MySQL,and a Client-Side Language JavaScript and Reactjs.I am so Passionate About My Work That I won't Give Up..Thanks Again</p>
                        <ul>
                           <li><strong>Email ID </strong>: freelancerimran9@gmail.com</li>
                           <li><strong>Address </strong> : Tangail Old Bus Stand.</li>
                           <li> <strong>Country </strong>: Bangladesh</li>
                           <li> <strong>Birthday </strong>: 05-03-1998.</li>
                           <li><strong>PhoneNo  </strong>: 01784697461</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- #about -->
         <!--==========================
            Services Section
            ============================-->
         <section id="services" class="">
            <div class="container-fluid">
               <header class="section-header">
                  <h3>What I Offer</h3>
                  <p>You need more than a beautiful website complete online strategy, designed to convert. Learn more about our professional web services.</p>
               </header>
               <div class="row">
                  <div class="col-lg-4 col-md-6">
                     <!-- Single Service -->
                     <div class="single-service">
                        <i class="fa fa-laptop"></i>
                        <h4>WEB DESIGN</h4>
                        <p>The best of web design and web design inspiration updated regularly with new designs and web designers. </p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <!-- Single Service -->
                     <div class="single-service">
                        <i class="fa fa-gears"></i>
                        <h4>WEB DEVELOPMENT</h4>
                        <p>Web Developer must have a basic understanding Responsive Web Design is used in all types of modern web  </p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <!-- Single Service -->
                     <div class="single-service">
                        <i class="fa fa-mobile"></i>
                        <h4>RESPONSIVE DESIGN</h4>
                        <p>Responsive web design makes your web page look good on all devices. Responsive web design uses only HTML and CSS. </p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <!-- Single Service -->
                     <div class="single-service">
                        <i class="fa fa-magic"></i>
                        <h4>GRAPHIC DESIGN</h4>
                        <p> Graphic design is the process of visual communication and problem-solving of typography, photography, and illustration.</p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <!-- Single Service -->
                     <div class="single-service">
                        <i class="fa fa-pencil"></i>
                        <h4>CREATIVE DESIGN</h4>
                        <p>A creative design is basically a design that fulfils the objective it was created for. Some features can be identified on a design </p>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                     <!-- Single Service -->
                     <div class="single-service">
                        <i class="fa fa-fa fa-lightbulb-o"></i>
                        <h4>ONLINE SUPPORT</h4>
                        <p>Get help with your project, contest, just with using Freelancer. Live chat is available or you can browse our help articles. </p>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- #services -->
         <section id="container-ED" style="background-color: #f8f9fa !important">
            <div id="education" class="container-fluid">
               <!-- #Education -->
               <header class="section-header">
                  <h3>EDUCATION AND EXPERIANCE</h3>
               </header>
               <div class="row">
                  <div class="col-md-6">
                     <ul class="timeline">
                        <li>
                           <p>2012-2014</p>
                           <a href="#" class="container-education">SSC Gramnahali Dakhil Madrasa</a>
                           <p> Secondary School Certificate (SSC) is a public examination taken by students in Bangladesh,</p>
                        </li>
                        <li>
                           <p>2014-2016</p>
                           <a href="#" class="container-education">HSC Sristy Collage of Tangail</a>
                           <p>The Higher Secondary Certificate, is a public examination taken by students of intermediate college in Bangladesh,</p>
                        </li>
                        <li>
                           <p>2016-2020</p>
                           <a href="#" class="container-education">BBA National University of Bangladsh</a>
                           <p>The Bachelor of Business Administration (BBA or B.B.A.) is a bachelor's degree in business administration.</p>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <ul class="timeline">
                        <li>
                           <p>2016-2017</p>
                           <a href="#" class="container-education">Web Design</a>
                           <p>The best of web design and web design inspiration updated regularly with new designs and web designers. </p>
                        </li>
                        <li>
                           <p>2017-2018</p>
                           <a href="#" class="container-education">Web Development</a>
                           <p>Web Developer must have a basic understanding Responsive Web Design is used in all types of modern web </p>
                        </li>
                        <li>
                           <p>2018-2020</p>
                           <a href="#" class="container-education">Freelancing</a>
                           <p> Freelancers usually make money on a per-task basis, charging hourly rates for their work for a short-term.</p>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <!-- #education -->
         </section>
         <section id="skills" class="container-fluid content-section text-center">
            <!--skills--> 
            <div class="container-fluid">
               <header class="section-header">
                  <h3>My skills</h3>
               </header>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="why-us-img">
                        <img src="{{asset('public/assets/img/back.jpg')}}" alt="" class="img-fluid">
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div id="skill-bar-wrapper">
                        <div class="text-left">
                           <!-- html5-->
                           HTML5<span style="float:right;">85%</span>
                           <div class="skillbar-container clearfix" data-percent="95%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- css3 -->
                           CSS3<span style="float:right;">85%</span>
                           <div class="skillbar-container clearfix" data-percent="65%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- Bootstrap -->
                           Bootstrap4<span style="float:right;">80%</span>
                           <div class="skillbar-container clearfix" data-percent="35%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- JavaScript -->
                           JavaScript<span style="float:right;">75%</span>
                           <div class="skillbar-container clearfix" data-percent="75%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- jquery -->
                           jquery<span style="float:right;">75%</span>
                           <div class="skillbar-container clearfix" data-percent="85%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- React Js -->
                           ReactJs<span style="float:right;">70%</span>
                           <div class="skillbar-container clearfix" data-percent="45%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- Angular Js -->
                           Angular Js<span style="float:right;">70%</span>
                           <div class="skillbar-container clearfix" data-percent="50%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- php -->
                           My SQL/PHP<span style="float:right;">75%</span>
                           <div class="skillbar-container clearfix" data-percent="50%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                           <!-- wordpress-->
                           Wordpress<span style="float:right;">75%</span>
                           <div class="skillbar-container clearfix" data-percent="50%">
                              <div class="skills" style="background: #ff5722;"></div>
                           </div>
                        </div>
                     </div>
                  </div>
         </section>
         </div>
         </div>
         <section id="why-us" class="wow fadeIn">
            <!--project--> 
            <div class="container">
               <div class="row counters">
                  <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">274</span>
                     <p>Clients</p>
                  </div>
                  <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">321</span>
                     <p>Projects</p>
                  </div>
                  <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">1,364</span>
                     <p>Hours Of Support</p>
                  </div>
                  <div class="col-lg-3 col-6 text-center">
                     <span data-toggle="counter-up">20</span>
                     <p>Hard Workers</p>
                  </div>
               </div>
            </div>
         </section>
         <section id="call-to-action" class="wow fadeInUp">
            <!--Call To Action Section-->
            <div class="container">
               <div class="row">
                  <div class="col-lg-12 ">
                     <h3 class="cta-title">Looking For a Web Deisgner for your Website </h3>
                     <p class="cta-text"></p>
                     <p class="container-text"><a class="cta-btn"href="https://bit.ly/33qROiz">HIRE ME <i class="far fa-arrow-alt-circle-right"></i></a></p>
                  </div>
               </div>
            </div>
         </section>
         <!-- #call-to-action -->
         <section id="portfolio" class="portfolio section-bg">
            <!-- Our Portfolio -->
            <div class="container">
               <header class="section-header">
                  <h3>Our Portfolio</h3>
               </header>
               <div class="row">
                  <div class="col-lg-12 d-flex justify-content-center">
                     <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">Web Design</li>
                        <li data-filter=".filter-card">work</li>
                        <li data-filter=".filter-web">Branding</li>
                        <li data-filter=".filter-Graphics">Graphics</li>
                     </ul>
                  </div>
               </div>
               <div class="row portfolio-container">
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/web1.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Web Design</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/web1.png')}}" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/b1.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Branding</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/b1.png')}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/web3.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Web Design</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/web3.png')}}" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/w3.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Codeing</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/w3.png')}}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-Graphics">
                     <div class="portfolio-wrap">
                        <img src="img/portfolio/g.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Studio</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/g.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/web4.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Web Design</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/web4.png')}}" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/w1.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Codeing</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/w1.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/w2.png')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Codeing</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/w2.png')}}" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 portfolio-item filter-Graphics">
                     <div class="portfolio-wrap">
                        <img src="{{asset('public/assetsimg/portfolio/portfolio-8.jpg')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                           <h4>Studio</h4>
                        </div>
                        <div class="portfolio-links">
                           <a href="{{asset('public/assetsimg/portfolio/portfolio-8.jpg')}}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
                           <a href="#" title="More Details"><i class="bx bx-link"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End Our Portfolio Section -->
         <section id="testimonials">
            <!--Clients Section-->
            <div class="container">
               <header class="section-header">
                  <h3 style="color: white">Testimonials</h3>
               </header>
               <div class="row justify-content-center">
                  <div class="col-md-8 col-center m-auto">
                     <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Carousel indicators -->
                        <ol class="carousel-indicators">
                           <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                           <li data-target="#myCarousel" data-slide-to="1"></li>
                           <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for carousel items -->
                        <div class="carousel-inner">
                           <div class="item carousel-item active">
                              <div class="img-box"><img src="{{asset('public/assets/img/team/team1.jpg')}}" alt=""></div>
                              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, </p>
                              <p class="overview"><b>Nazmul Hasan</b> CEO / Rn-Soft</p>
                           </div>
                           <div class="item carousel-item">
                              <div class="img-box"><img src="{{asset('public/assets/img/team/team2.jpg')}}" alt=""></div>
                              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at,</p>
                              <p class="overview"><b>Imran Mahmud</b> Rn-Sof / Web Designer</p>
                           </div>
                           <div class="item carousel-item">
                              <div class="img-box"><img src="{{asset('public/assets/img/team/team4.jpg')}}"alt=""></div>
                              <p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at,</p>
                              <p class="overview"><b>Salman Dewan</b> Rn-Sof / Web Designer</p>
                           </div>
                        </div>
                        <!-- Carousel controls -->
                        <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- #testimonials -->
         <section id="team" class="section-bg">
            <!--Team Section-->
            <div class="container">
               <div class="section-header">
                  <h3> Our Team</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
               </div>
               <div class="row">
                  <div class="col-md-3 col-sm-3 team-wrap">
                     <div class="team-member text-center">
                        <div class="team-img">
                           <img src="{{asset('public/assets/img/team/team1.jpg')}}" alt="">
                           <div class="overlay-team">
                              <div class="team-details text-center">
                                 <div class="socials mt-20"><a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <h6 class="team-title">Nazmul Hasan</h6>
                        <span>CEO / Rn-Soft</span>
                     </div>
                  </div>
                  <!-- end team member -->
                  <div class="col-md-3 col-sm-3 team-wrap">
                     <div class="team-member text-center">
                        <div class="team-img">
                           <img src="{{asset('public/assets/img/team/team2.jpg')}}" alt="">
                           <div class="overlay-team">
                              <div class="team-details text-center">
                                 <div class="socials mt-20"><a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <h6 class="team-title">Imran Mahmud</h6>
                        <span>Rn-Sof / Web Designer</span>
                     </div>
                  </div>
                  <!-- end team member -->
                  <div class="col-md-3 col-sm-3 team-wrap">
                     <div class="team-member last text-center">
                        <div class="team-img">
                           <img src="{{asset('public/assets/img/team/team4.jpg')}}" alt="">
                           <div class="overlay-team">
                              <div class="team-details text-center">
                                 <div class="socials mt-20"><a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <h6 class="team-title">Salman Dewan</h6>
                        <span>Rn-Sof / Web Designer</span>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-3 team-wrap">
                     <div class="team-member last text-center">
                        <div class="team-img">
                           <img src="{{asset('public/assets/img/team/team3.jpg')}}" alt="">
                           <div class="overlay-team">
                              <div class="team-details text-center">
                                 <div class="socials mt-20"><a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <h6 class="team-title">Mozahid Islam</h6>
                        <span>Rn-Sof / Web Designer</span>
                     </div>
                  </div>
               </div>
               <!-- end team member -->
            </div>
         </section>
         <!-- #team -->
         <!--==========================
            <section id="clients" class="wow fadeInUp">
                <div class="container">
                <header class="section-header">
                <h3>Our Clients</h3>
                </header>
                <div class="owl-carousel clients-carousel">
                  <img src="img/clients/logo1.png" alt="">
                  <img src="img/clients/logo2.png" alt="">
                  <img src="img/clients/logo3.png" alt="">
                  <img src="img/clients/logo4.png" alt="">
                  <img src="img/clients/client-5.png" alt="">
                  <img src="img/clients/client-6.png" alt="">
                  <img src="img/clients/client-7.png" alt="">
                  <img src="img/clients/client-8.png" alt="">
                </div>
                </div>
            </section>  Clients Section-->
         <section id="blog" class="more-services section-bg">
            <!-- More Services Section-->
            <div class="container">
               <div class="section-header">
                  <h3>our blog</h3>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
               </div>
               <div class="row">
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                     <div class="card">
                        <img src="{{asset('public/assets/img/blog1.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                           <p><strong><i class="fas fa-user"></i> By Admin <strong class="c-blog"><i class="fas fa-clock"></i> April /12 /20 </strong></strong></p>
                           <h5 class="card-title">Web Design</h5>
                           <p class="card-text">The best of web design and web design inspiration updated regularly with new designs and web designers. </p>
                           <div class="row">
                              <div class="col-lg-12"><a href="#" class="rm">Read More <i class="fas fa-angle-right"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                     <div class="card">
                        <img src="{{asset('public/assets/img/blog.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                           <p><strong><i class="fas fa-user"></i> By Admin <strong class="c-blog"><i class="fas fa-clock"></i> April /12 /20 </strong></strong></p>
                           <h5 class="card-title">Web Development</h5>
                           <p class="card-text">Web Developer must have a basic understanding Responsive Web Design is used in all types of modern web </p>
                           <div class="row">
                              <div class="col-lg-12">   <a href="#" class="rm">Read More <i class="fas fa-angle-right"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 col-md-6 d-flex align-items-stretch mb-5 mb-lg-0">
                     <div class="card">
                        <img src="{{asset('public/assets/img/blog4.png')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                           <p><strong><i class="fas fa-user"></i> By Admin <strong class="c-blog"><i class="fas fa-clock"></i> April /12 /20 </strong></strong></p>
                           <h5 class="card-title">Web Studio</h5>
                           <p class="card-text"> All of our websites can be easily edited using our simple and intuitive content management system. </p>
                           <div class="row">
                              <div  class="col-lg-12">   <a href="#" class="rm">Read More <i class="fas fa-angle-right"></i></a></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- End More Services Section -->
         <section id="faq">
            <!--Frequently Asked Questions -->
            <div class="container">
               <header class="section-header">
                  <h3>Frequently Asked Questions</h3>
                  <p></p>
               </header>
               <ul id="faq-list" class="wow fadeInUp">
                  <li>
                     <a data-toggle="collapse" class="collapsed" href="#faq1">What is HTML5 ? <i class="ion-android-remove"></i></a>
                     <div id="faq1" class="collapse" data-parent="#faq-list">
                        <p>
                           HTML5 is the latest version of Hypertext Markup Language, the code that describes web pages.
                        </p>
                     </div>
                  </li>
                  <li>
                     <a data-toggle="collapse" href="#faq2" class="collapsed">What is CSS3 ? <i class="ion-android-remove"></i></a>
                     <div id="faq2" class="collapse" data-parent="#faq-list">
                        <p>Cascading Style Sheets (CSS) is a language that is used to illustrate the look, style, and format of a document written in any markup language.
                        </p>
                     </div>
                  </li>
                  <li>
                     <a data-toggle="collapse" href="#faq3" class="collapsed">What is JavaScript Used For ?<i class="ion-android-remove"></i></a>
                     <div id="faq3" class="collapse" data-parent="#faq-list">
                        <p>
                           JavaScript is a text-based programming language used both on the client-side and server-side that allows you to make web pages interactive.
                        </p>
                     </div>
                  </li>
                  <li>
                     <a data-toggle="collapse" href="#faq4" class="collapsed">What is difference between JavaScript and jQuery? <i class="ion-android-remove"></i></a>
                     <div id="faq4" class="collapse" data-parent="#faq-list">
                        <p>
                           The main difference among the three is that JavaScript is client-side, i.e., in the browser scripting language, whereas jQuery is a library (or framework) built with JavaScript. Meanwhile, AJAX is a method to immediately update parts of the UI without reloading the web pages
                        </p>
                     </div>
                  </li>
                  <li>
                     <a data-toggle="collapse" href="#faq5" class="collapsed">What is Anjular JS? <i class="ion-android-remove"></i></a>
                     <div id="faq5" class="collapse" data-parent="#faq-list">
                        <p>AngularJS is a very powerful JavaScript Framework. It is used in Single Page Application (SPA) projects
                        </p>
                     </div>
                  </li>
                  <li>
                     <a data-toggle="collapse" href="#faq6" class="collapsed">What is PHP and why it is used? <i class="ion-android-remove"></i></a>
                     <div id="faq6" class="collapse" data-parent="#faq-list">
                        <p>PHP is a server side scripting language. that is used to develop Static websites or Dynamic websites or Web applications. PHP stands for Hypertext Pre-processor, that earlier stood for Personal Home Pages. PHP scripts can only be interpreted on a server that has PHP installed
                        </p>
                     </div>
                  </li>
               </ul>
            </div>
         </section>
         <!-- #faq -->
      </main>
      <section id="feedprofile">
         <div class="container pt-3">
            <div class="section-header">
               <h3>instagram feed</h3>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <div class="tab-content" id="tabContentExamples">
                     <div class="tab-pane fade show active" id="example1" role="tabpanel" aria-labelledby="example1-tab">
                        <div id="instagram-feed1" class="instagram_feed"></div>
                        <div class="section_code py-3"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!--Footer-->
      <footer id="footer" class="section-bg">
         <div class="footer-top">
            <div class="container">
               <div class="row">
                  <div class="col-lg-4 info d-flex flex-column align-items-stretch">
                     <i class="bx bx-map"></i>
                     <h4>Address</h4>
                     <p>1900 Tangail old Bus Stand Tangail</p>
                  </div>
                  <div class="col-lg-4 info info-bg d-flex flex-column align-items-stretch">
                     <i class="bx bx-phone"></i>
                     <h4>phone number</h4>
                     <p>01784697461</p>
                  </div>
                  <div class="col-lg-4 info info-bg d-flex flex-column align-items-stretch">
                     <i class="bx bx-envelope"></i>
                     <h4>Email Us</h4>
                     <p>freelancerimran9@gmail.com</p>
                  </div>
               </div>
               <hr>
               <div class="row">
                  <div class="col-lg-6">
                     <div class="form">
                        <h3>Send us a message</h3>
                        <p>Type your text message.</p>
                        <form action="{{url('message/sent')}}" method="post" role="form" class="contactForm">
                            @csrf
                           <div class="form-group">
                              <input type="text" name="name" class="form-control" placeholder="Your Name"/>
                              <div class="validation"></div>
                              @error('name')
                                <div class="alert-danger p-1">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="email" class="form-control" name="email" placeholder="Your Email"/>
                              <div class="validation"></div>
                              @error('email')
                                <div class="alert-danger p-1">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="form-group">
                              <input type="text" class="form-control" name="subject" placeholder="Subject"/>
                              <div class="validation"></div>
                              @error('subject')
                                <div class="alert-danger p-1">{{ $message }}</div>
                              @enderror
                           </div>
                           <div class="form-group">
                              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                              <div class="validation"></div>
                              @error('message')
                                <div class="alert-danger p-1">{{ $message }}</div>
                              @enderror
                           </div>
                           <div id="sendmessage">Your message has been sent. Thank you!</div>
                           <div id="errormessage"></div>
                           <div class="text-center"><button type="submit" name="submit" title="Send Message">Send Message </button></div>
                        </form>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="map" style="overflow: hidden; padding-top:;">         
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d909.431929108665!2d89.91971766048272!3d24.251300248510788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fdfb4187c9b86b%3A0xc7fd6463b92643be!2sRn-Soft!5e0!3m2!1sen!2sbd!4v1583855201910!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="container-inf" class="container">
            <div class="copyright">&copy; Copyright <strong> 2020</strong> Freelancer Imran All Rights Reserved</div>
         </div>
      </footer>
      <!-- #footer -->
      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
      <!-- Uncomment below i you want to use a preloader -->
      <!-- <div id="preloader"></div> -->
      <!-- JavaScript Libraries -->
      <script src="{{asset('public/assets/lib/jquery/jquery.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/jquery/jquery-migrate.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/easing/easing.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/mobile-nav/mobile-nav.js')}}"></script>
      <script src="{{asset('public/assets/lib/wow/wow.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/waypoints/waypoints.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/counterup/counterup.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/owlcarousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/isotope/isotope.pkgd.min.js')}}"></script>
      <script src="{{asset('public/assets/lib/lightbox/js/lightbox.min.js')}}"></script>
      <!--Contact Form JavaScript File-->
      <!-- <script src="contactform/contactform.js"></script> -->
      <script src="{{asset('public/assets/JS/jquery.instagramFeed.min.js')}}"></script>
      <!-- Template Main Javascript File -->
      <script src="{{asset('public/assets/js/main.js')}}"></script>
      <script src='https://cldup.com/S6Ptkwu_qA.js'></script>
      <script  src="{{asset('public/assets/js/particles.js')}}"></script>
      <script  src="{{asset('public/assets/js/script-text.js')}}"></script>
      <script type="text/javascript" src="https://cdn.tutorialjinni.com/toastr.js/2.1.4/toastr.min.js"></script>


      <script>
    @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
            case 'info':
                  toastr.info("{{Session::get('messege')}}");
                  break;
            case 'success':
                  toastr.success("{{Session::get('messege')}}");
                  break;
            case 'warning':
                  toastr.warning("{{Session::get('messege')}}");
                  break;
            case 'error':
                  toastr.error("{{Session::get('messege')}}");
                  break;

          }
          @endif
  </script>
   </body>
</html>