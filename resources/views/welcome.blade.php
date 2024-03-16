<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estate</title>
        

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.css">
        <link rel="stylesheet" type="text/css" href="{{url('layout/css/style.css')}}"/>
        <link rel="stylesheet" type="text/css" href="{{url('layout/css/responsive.css')}}"/>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Nunito+Sans:opsz,wght@6..12,300&family=Ysabeau+Infant:wght@300&display=swap" rel="stylesheet">
        <!-- CDN Link for Swiper -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> 

        <!-- Vendor CSS Files -->
        <link href="{{url('layout/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{url('layout/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{url('layout/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
        <link href="{{url('layout/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">



    </head>

    <body>
        <div id="main">

            <header class="header">
               
                <img src="{{url('layout/images/logo.png')}}" alt="" class="logo">

               <!-- <div id="company-name">
                    <h5 style="text-align: center;">REAL ESTATE</h5>
                    <h6>No. 1 Real Estate Company in Delhi NCR </h6>
                </div>-->

                <nav class="navbar">
                    <ul class="navbar-list">
                        <li><a class="navbar-link" href="{{url('/')}}" >Home</a></li>
                        <li><a class="navbar-link" href="#page2" >About Us</a></li>
                        <li><a class="navbar-link" href="#page3" >Properties</a></li>
                        <li><a class="navbar-link" href="#page4" >Amenities</a></li>
                        <li><a class="navbar-link" href="#page5" >Testimonial</a></li>
                        <li><a class="navbar-link" href="{{url('/inquiry')}}" >Inquiry</a></li>

                    </ul>
                </nav>
                
                <div class="mobile-navbar-btn">
                    <ion-icon name="menu-outline" class="mobile-nav-icon"></ion-icon>
                    <ion-icon name="close-outline" class="mobile-nav-icon"></ion-icon>
                </div>

                </header> 
                <div id="page1">
                    <div class="typing-container">
                        <div class="typing-text" id="typing-text"></div>
                    </div>
                    <h1>to your dream home</h1> <!-- <br>"DREAM HOME"</h1>-->

                
                </div>
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="section-title">
                <span>About us</span>
                <h2>About us</h2>
                <p>"Discover Our Story: Elevating Real Estate Experiences"</p>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 position-relative">
                        <img src="{{url('layout/images/blob.svg')}}" class="img-fluid blob-img blob-rotate" alt="">
                        <img src="{{url('layout/images/team3.png')}} " class="img-fluid img-overlap" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">

                        <div class="content">
                            <ul>
                                <li><i class="bi bi-check-circle"></i><b><em><u>Our VISION & MISSION</u>:</em> In the realm of real estate, we aspire to redefine your property experience. Our mission is to provide unparalleled service, facilitating seamless transactions while ensuring your dreams find a home.</b></li>
                                <li><i class="bi bi-check-circle"></i><b><em><u>CLIENT CENTRIC APPROACH</u>:</em> Committed to your satisfaction, we prioritize your needs. From understanding your preferences to guiding you through each step, our client-centric approach ensures a personalized and rewarding real estate journey.</b></li>
                                <li><i class="bi bi-check-circle"></i><b><u><em>EXPERTISE IN EVERY TRANSACTION</em></u>: Backed by a team of seasoned professionals, we bring expertise to every transaction. Whether buying, selling, or investing, our knowledgeable agents leverage market insights to empower your decisions, maximizing value and minimizing stress.</b></li>
                                <li><i class="bi bi-check-circle"></i><b><em><u>INTEGRITY & TRANSPARENCY</u>:</em> At the core of our values is integrity. We uphold transparency in all dealings, fostering trust and building enduring relationships. You can rely on us for honest communication, ensuring a secure and reliable real estate experience.</b></li>
                                <li><i class="bi bi-check-circle"></i><b><em><u>INNOVATIVE SOLUTIONS FOR MODERN LIVING</u>:</em> Embracing innovation, we cater to the evolving needs of modern living. Our listings feature a diverse range of properties, each carefully curated to offer not just a space but a lifestyle. Experience the fusion of comfort, convenience, and contemporary living with our real estate solutions.</b></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->
                <div id="page3">

                <div class="section-title">
                        <span>Properties</span>
                        <h2>Properties</h2>
                        <p>"Discover Your Dream Home with Our Exclusive Property Listings."</p>
                </div>
                <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg' )}}" alt="" />
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>


                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="" class="image-big">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure!</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/page1_img2.jpg')}}" alt="">
                                <div class="box">
                                    <h2 style="text-decoration: underline;">Noida Heights Apartment</h2>
                                    <h4>Sector 52 Greater Noida</h4>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem, facilis dolor distinctio incidunt? Corrupti cumque nesciunt ducimus
                                        soluta iure</b></p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <div id="page4">
                    <div class="section-title">
                        <span>AMENITIES</span>
                        <h2>AMENITIES</h2>
                        <p>
                            "Amenities: Elevate living with essential comforts and modern conveniences."</p>
                        <div class="amenities-list" id="am-1">
                            <div class="icons" id="gym"  onmouseover="changeGym()" onmouseleave="backGym()"> <br><br><img src="images/Gym.png" alt="">  <br> <h4>Gym</h4></div>
                            <div class="icons" id="swim" onmouseenter="changeSwim()" onmouseleave="backSwim()"> <br><br><img src="images/Swim.png" alt="">  <br> <h4>Swimming</h6></div>
                            <div class="icons" id="temple" onmouseenter="changeTemple()" onmouseleave="backTemple()"> <br><br><img src="images/Tem.png" alt="">  <br> <h4>Temple</h4></div>
                            <div class="icons" id="security" onmouseenter="changeSecurity()" onmouseleave="backSecurity()"> <br><br><img src="images/Sec.png" alt="">  <br> <h4>Security</h4></div>
                            <div class="icons" id="electricity" onmouseenter="changeElectricity()" onmouseleave="backElectricity()"> <br><br><img src="images/Elec.png" alt=""> <br>  <h4>Electricity</h4></div>
                            <div class="icons" id="club" onmouseenter="changeClub()" onmouseleave="backClub()"> <br><br><img src="images/Club.png" alt="">  <br> <h4>Club</h4></div>
                            <div class="icons" id="wifi" onmouseenter="changeWifi()" onmouseleave="backWifi()"> <br><br><img src="images/wifi.png" alt=""> <br>  <h4>Free-Wifi</h4></div>
                            <div class="icons" id="reservation" onmouseenter="changeReservation()" onmouseleave="backReservation()"> <br><br><img src="images/reservation.png" alt="">  <br> <h4>Travel Booking</h4></div>

                        </div>
                        <!-- <div class="amenities-list" id="am-2">
                        </div> -->
                </div>
                </div>
                <div id="page5">
                    <div class="section-title">
                        <span>TESTIMONIALS</span>
                        <h2>TESTIMONIALS</h2>
                        <p>"Discover Your Dream Home with Our Exclusive Property Listings."</p>
                    </div>

                    <div class="swiper mySwiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">
                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem"</b></p>
                                </div>


                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, 
                                        exercitationem"</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente 
                                        exercitationem"</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores 
                                        exercitationem"</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem"</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem"</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem"</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem"</b></p>
                                </div>

                            </div>

                            <div class="swiper-slide">
                                <img src="{{url('layout/images/7.png')}}" alt="">

                                <div class="box">
                                    <h3>ABC</h3>
                                    <br>
                                    <p style="font-family: 'Kanit', sans-serif;
                                        font-family: 'Nunito Sans', sans-serif;
                                        font-family: 'Ysabeau Infant', sans-serif; font-size: small;"><b>"Lorem ipsum, dolor sit amet consectetur adipisicing
                                        elit. Mollitia ipsam debitis blanditiis, sapiente asperiores voluptatum reiciendis
                                        exercitationem"</b></p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>



                </div>
                <div class="section-title">
                    <span>INQUIRY FORM</span>
                    <h2>INQUIRY FORM</h2>
                    <p>"Please fill out the form below to send us your inquiry."</p>
                </div>

                <section class="contact-section">


                    <div class="contact-container">
                        <div class="contact-form">
                            <h2>Contact Us</h2>
                            <form action="{{url('/')}}/inquiry" method="post">
                                @csrf
                            
                                <label for="name">Your Name:</label>
                                <input type="text" id="name" name="name" placeholder="username" required>
                                <span>
                                    @error( 'name' )
                                          {{$message}}
                                    @enderror
                                </span>

                                <label for="email">Your Email:</label>
                                <input type="email" id="email" name="email" placeholder="name@gmail.com" required>
                                <span>
                                    @error( 'email' )
                                          {{$message}}
                                    @enderror
                                </span>


                                <label for="message">Your Message:</label>
                                <textarea id="message" name="message" rows="4" placeholder="Tell us how we can help you." required></textarea>
                                <span>
                                    @error( 'name' )
                                          {{$message}}
                                    @enderror
                                </span>



                                <button type="submit">Send Message</button>
                            </form>
                        </div>
                        <div class="contact-details">
                            <h2>Contact Details</h2>
                            <div style="display: flex; align-items: center;">
                                <div class="mail" style="margin-left: 10px;">
                                    <h2>Email: name@gmail.com</h2>
                                </div>
                            </div>
                            
                            <div style="display: flex; align-items: center;">
                                <div class="mail" style="margin-left: 10px;">
                                    <h2>Call: +91 9999999999</h2>
                                </div>
                            </div>
        
                            <div style="display: flex; align-items: center;">
                                <div class="mail" style="margin-left: 10px;">
                                    <h2>Address: India</h2>
                                </div>
                            </div>
                                </div>
                    </div>
                </section>
                <div id="footer">

                    <div class="footer-container">
                        <div class="footer-column">
                            <h3>Our Motive</h3>
                            <p>
                                "Connecting buyers and sellers, providing property listings, market insights, and facilitating smooth transactions for real estate properties online."</p>
                        </div>
                        <div class="footer-column">
                            <h3>Quick Links</h3>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Properties</a></li>
                                <li><a href="#">Amenities</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Inquiry</a></li>

                            </ul>
                        </div>
                        <div class="footer-column">
                            <h3>Search By Location</h3>
                            <ul>
                                <li><a href="#">Delhi</a></li>
                                <li><a href="#">Delhi NCR</a></li>
                                <li><a href="#">Ghaziabad</a></li>
                                <li><a href="#">Noida</a></li>
                                <li><a href="#">Meerut</a></li>

                            </ul>
                        </div>

                        <div class="footer-row">
                            <h3>Connect With Us</h3>
                            <div class="social-links">
                                <a href="#"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCI+CjxwYXRoIGZpbGw9IiMzMDRmZmUiIGQ9Ik00MS42NywxMy40OGMtMC40LDAuMjYtMC45NywwLjUtMS4yMSwwLjc3Yy0wLjA5LDAuMDktMC4xNCwwLjE5LTAuMTIsMC4yOXYxLjAzbC0wLjMsMS4wMWwtMC4zLDFsLTAuMzMsMS4xIGwtMC42OCwyLjI1bC0wLjY2LDIuMjJsLTAuNSwxLjY3YzAsMC4yNi0wLjAxLDAuNTItMC4wMywwLjc3Yy0wLjA3LDAuOTYtMC4yNywxLjg4LTAuNTksMi43NGMtMC4xOSwwLjUzLTAuNDIsMS4wNC0wLjcsMS41MiBjLTAuMSwwLjE5LTAuMjIsMC4zOC0wLjM0LDAuNTZjLTAuNCwwLjYzLTAuODgsMS4yMS0xLjQxLDEuNzJjLTAuNDEsMC40MS0wLjg2LDAuNzktMS4zNSwxLjExYzAsMCwwLDAtMC4wMSwwIGMtMC4wOCwwLjA3LTAuMTcsMC4xMy0wLjI3LDAuMThjLTAuMzEsMC4yMS0wLjY0LDAuMzktMC45OCwwLjU1Yy0wLjIzLDAuMTItMC40NiwwLjIyLTAuNywwLjMxYy0wLjA1LDAuMDMtMC4xMSwwLjA1LTAuMTYsMC4wNyBjLTAuNTcsMC4yNy0xLjIzLDAuNDUtMS44OSwwLjU0Yy0wLjA0LDAuMDEtMC4wNywwLjAxLTAuMTEsMC4wMmMtMC40LDAuMDctMC43OSwwLjEzLTEuMTksMC4xNmMtMC4xOCwwLjAyLTAuMzcsMC4wMy0wLjU1LDAuMDMgbC0wLjcxLTAuMDRsLTMuNDItMC4xOGMwLTAuMDEtMC4wMSwwLTAuMDEsMGwtMS43Mi0wLjA5Yy0wLjEzLDAtMC4yNywwLTAuNC0wLjAxYy0wLjU0LTAuMDItMS4wNi0wLjA4LTEuNTgtMC4xOSBjLTAuMDEsMC0wLjAxLDAtMC4wMSwwYy0wLjk1LTAuMTgtMS44Ni0wLjUtMi43MS0wLjkzYy0wLjQ3LTAuMjQtMC45My0wLjUxLTEuMzYtMC44MmMtMC4xOC0wLjEzLTAuMzUtMC4yNy0wLjUyLTAuNDIgYy0wLjQ4LTAuNC0wLjkxLTAuODMtMS4zMS0xLjI3Yy0wLjA2LTAuMDYtMC4xMS0wLjEyLTAuMTYtMC4xOGMtMC4wNi0wLjA2LTAuMTItMC4xMy0wLjE3LTAuMTljLTAuMzgtMC40OC0wLjctMC45Ny0wLjk2LTEuNDkgYy0wLjI0LTAuNDYtMC40My0wLjk1LTAuNTgtMS40OWMtMC4wNi0wLjE5LTAuMTEtMC4zNy0wLjE1LTAuNTdjLTAuMDEtMC4wMS0wLjAyLTAuMDMtMC4wMi0wLjA1Yy0wLjEtMC40MS0wLjE5LTAuODQtMC4yNC0xLjI3IGMtMC4wNi0wLjMzLTAuMDktMC42Ni0wLjA5LTFjLTAuMDItMC4xMy0wLjAyLTAuMjctMC4wMi0wLjRsMS45MS0yLjk1bDEuODctMi44OGwwLjg1LTEuMzFsMC43Ny0xLjE4bDAuMjYtMC40MXYtMS4wMyBjMC4wMi0wLjIzLDAuMDMtMC40NywwLjAyLTAuNjljLTAuMDEtMC43LTAuMTUtMS4zOC0wLjM4LTIuMDNjLTAuMjItMC42OS0wLjUzLTEuMzQtMC44NS0xLjk0Yy0wLjM4LTAuNjktMC43OC0xLjMxLTEuMTEtMS44NyBDMTQsNy40LDEzLjY2LDYuNzMsMTMuNzUsNi4yNkMxNC40Nyw2LjA5LDE1LjIzLDYsMTYsNmgxNmM0LjE4LDAsNy43OCwyLjYsOS4yNyw2LjI2QzQxLjQzLDEyLjY1LDQxLjU3LDEzLjA2LDQxLjY3LDEzLjQ4eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiM0OTI4ZjQiIGQ9Ik00MiwxNnYwLjI3bC0xLjM4LDAuOGwtMC44OCwwLjUxbC0wLjk3LDAuNTZsLTEuOTQsMS4xM2wtMS45LDEuMWwtMS45NCwxLjEybC0wLjc3LDAuNDUgYzAsMC40OC0wLjEyLDAuOTItMC4zNCwxLjMyYy0wLjMxLDAuNTgtMC44MywxLjA2LTEuNDksMS40N2MtMC42NywwLjQxLTEuNDksMC43NC0yLjQxLDAuOThjMCwwLDAtMC4wMS0wLjAxLDAgYy0zLjU2LDAuOTItOC40MiwwLjUtMTAuNzgtMS4yNmMtMC42Ni0wLjQ5LTEuMTItMS4wOS0xLjMyLTEuNzhjLTAuMDYtMC4yMy0wLjA5LTAuNDgtMC4wOS0wLjczdi03LjE5IGMwLjAxLTAuMTUtMC4wOS0wLjMtMC4yNy0wLjQ1Yy0wLjU0LTAuNDMtMS44MS0wLjg0LTMuMjMtMS4yNWMtMS4xMS0wLjMxLTIuMy0wLjYyLTMuMy0wLjkyYy0wLjc5LTAuMjQtMS40Ni0wLjQ4LTEuODYtMC43MSBjMC4xOC0wLjM1LDAuMzktMC43LDAuNjEtMS4wM2MxLjQtMi4wNSwzLjU0LTMuNTYsNi4wMi00LjEzQzE0LjQ3LDYuMDksMTUuMjMsNiwxNiw2aDEwLjhjNS4zNywwLjk0LDEwLjMyLDMuMTMsMTQuNDcsNi4yNiBjMC4xNiwwLjM5LDAuMywwLjgsMC40LDEuMjJjMC4xOCwwLjY2LDAuMjksMS4zNCwwLjMyLDIuMDVDNDIsMTUuNjgsNDIsMTUuODQsNDIsMTZ6Ij48L3BhdGg+PHBhdGggZmlsbD0iIzYyMDBlYSIgZD0iTTQyLDE2djQuNDFsLTAuMjIsMC42OGwtMC43NSwyLjMzbC0wLjc4LDIuNGwtMC40MSwxLjI4bC0wLjM4LDEuMTlsLTAuMzcsMS4xM2wtMC4zNiwxLjEybC0wLjE5LDAuNTkgbC0wLjI1LDAuNzhjMCwwLjc2LTAuMDIsMS40My0wLjA3LDJjLTAuMDEsMC4wNi0wLjAyLDAuMTItMC4wMiwwLjE4Yy0wLjA2LDAuNTMtMC4xNCwwLjk4LTAuMjcsMS4zNiBjLTAuMDEsMC4wNi0wLjAzLDAuMTItMC4wNSwwLjE3Yy0wLjI2LDAuNzItMC42NSwxLjE4LTEuMjMsMS40OGMtMC4xNCwwLjA4LTAuMywwLjE0LTAuNDcsMC4yYy0wLjUzLDAuMTgtMS4yLDAuMjctMi4wMiwwLjMyIGMtMC42LDAuMDQtMS4yOSwwLjA1LTIuMDcsMC4wNUgzMS40bC0xLjE5LTAuMDVMMzAsMzcuNjFsLTIuMTctMC4wOWwtMi4yLTAuMDlsLTcuMjUtMC4zbC0xLjg4LTAuMDhoLTAuMjYgYy0wLjc4LTAuMDEtMS40NS0wLjA2LTIuMDMtMC4xNGMtMC44NC0wLjEzLTEuNDktMC4zNS0xLjk4LTAuNjhjLTAuNy0wLjQ1LTEuMTEtMS4xMS0xLjM1LTIuMDNjLTAuMDYtMC4yMi0wLjExLTAuNDUtMC4xNC0wLjcgYy0wLjEtMC41OC0wLjE1LTEuMjUtMC4xOC0yYzAtMC4xNSwwLTAuMy0wLjAxLTAuNDZjLTAuMDEtMC4wMSwwLTAuMDEsMC0wLjAxdi0wLjU4Yy0wLjAxLTAuMjktMC4wMS0wLjU5LTAuMDEtMC45bDAuMDUtMS42MSBsMC4wMy0xLjE1bDAuMDQtMS4zNHYtMC4xOWwwLjA3LTIuNDZsMC4wNy0yLjQ2bDAuMDctMi4zMWwwLjA2LTIuMjdsMC4wMi0wLjZjMC0wLjMxLTEuMDUtMC40OS0yLjIyLTAuNjQgYy0wLjkzLTAuMTItMS45NS0wLjIzLTIuNTYtMC4zN2MwLjA1LTAuMjMsMC4xLTAuNDYsMC4xNi0wLjY4YzAuMTgtMC43MiwwLjQ1LTEuNCwwLjc5LTIuMDVjMC4xOC0wLjM1LDAuMzktMC43LDAuNjEtMS4wMyBjMi4xNi0wLjk1LDQuNDEtMS42OSw2Ljc2LTIuMTdjMi4wNi0wLjQzLDQuMjEtMC42Niw2LjQzLTAuNjZjNy4zNiwwLDE0LjE2LDIuNDksMTkuNTQsNi42OWMwLjUyLDAuNCwxLjAzLDAuODMsMS41MywxLjI4IEM0MiwxNS42OCw0MiwxNS44NCw0MiwxNnoiPjwvcGF0aD48cGF0aCBmaWxsPSIjNjczYWI3IiBkPSJNNDIsMTguMzd2NC41NGwtMC41NSwxLjA2bC0xLjA1LDIuMDVsLTAuNTYsMS4wOGwtMC41MSwwLjk5bC0wLjIyLDAuNDNjMCwwLjMxLDAsMC42MS0wLjAyLDAuOSBjMCwwLjQzLTAuMDIsMC44NC0wLjA1LDEuMjJjLTAuMDQsMC40NS0wLjEsMC44Ni0wLjE2LDEuMjRjLTAuMTUsMC43OS0wLjM2LDEuNDctMC42NiwyLjAzYy0wLjA0LDAuMDctMC4wOCwwLjE0LTAuMTIsMC4yIGMtMC4xMSwwLjE4LTAuMjQsMC4zNS0wLjM4LDAuNTFjLTAuMTgsMC4yMi0wLjM4LDAuNDEtMC42MSwwLjU3Yy0wLjM0LDAuMjYtMC43NCwwLjQ3LTEuMiwwLjYzYy0wLjU3LDAuMjEtMS4yMywwLjM1LTIuMDEsMC40MyBjLTAuNTEsMC4wNS0xLjA3LDAuMDgtMS42OCwwLjA4bC0wLjQyLDAuMDJsLTIuMDgsMC4xMmgtMC4wMUwyNy41LDM2LjZsLTIuMjUsMC4xM2wtMy4xLDAuMThsLTMuNzcsMC4yMmwtMC41NSwwLjAzIGMtMC41MSwwLTAuOTktMC4wMy0xLjQ1LTAuMDljLTAuMDUtMC4wMS0wLjA5LTAuMDItMC4xNC0wLjAyYy0wLjY4LTAuMTEtMS4zLTAuMjktMS44Ni0wLjU0Yy0wLjY4LTAuMy0xLjI3LTAuNy0xLjc3LTEuMTggYy0wLjQ0LTAuNDMtMC44Mi0wLjkyLTEuMTMtMS40N2MtMC4wNy0wLjEzLTAuMTQtMC4yNS0wLjItMC4zOWMtMC4zLTAuNTktMC41NC0xLjI1LTAuNzItMS45N2MtMC4wMy0wLjEyLTAuMDYtMC4yNS0wLjA4LTAuMzggYy0wLjA2LTAuMjMtMC4xMS0wLjQ3LTAuMTQtMC43MmMtMC4xMS0wLjY0LTAuMTctMS4zMi0wLjItMi4wM3YtMC4wMWMtMC4wMS0wLjI5LTAuMDItMC41Ny0wLjAyLTAuODdsLTAuNDktMS4xN2wtMC4wNy0wLjE4IEw5LjUsMjUuOTlMOC43NSwyNC4ybC0wLjEyLTAuMjlsLTAuNzItMS43M2wtMC44LTEuOTNjMCwwLDAsMC0wLjAxLDBMNi4yOSwxOC4zTDYsMTcuNTlWMTZjMC0wLjYzLDAuMDYtMS4yNSwwLjE3LTEuODUgYzAuMDUtMC4yMywwLjEtMC40NiwwLjE2LTAuNjhjMC44NS0wLjQ5LDEuNzQtMC45NCwyLjY1LTEuMzRjMi4wOC0wLjkzLDQuMzEtMS42Miw2LjYyLTIuMDRjMS43Mi0wLjMxLDMuNTEtMC40OCw1LjMyLTAuNDggYzcuMzEsMCwxMy45NCwyLjY1LDE5LjEyLDYuOTdjMC4yLDAuMTYsMC4zOSwwLjMyLDAuNTgsMC40OUM0MS4wOSwxNy40OCw0MS41NSwxNy45MSw0MiwxOC4zN3oiPjwvcGF0aD48cGF0aCBmaWxsPSIjOGUyNGFhIiBkPSJNNDIsMjEuMzV2NS4xNGwtMC41NywxLjE5bC0xLjA4LDIuMjVsLTAuMDEsMC4wM2MwLDAuNDMtMC4wMiwwLjgyLTAuMDUsMS4xN2MtMC4xLDEuMTUtMC4zOCwxLjg4LTAuODQsMi4zMyBjLTAuMzMsMC4zNC0wLjc0LDAuNTMtMS4yNSwwLjYzYy0wLjAzLDAuMDEtMC4wNywwLjAxLTAuMSwwLjAyYy0wLjE2LDAuMDMtMC4zMywwLjA1LTAuNTEsMC4wNWMtMC42MiwwLjA2LTEuMzUsMC4wMi0yLjE5LTAuMDQgYy0wLjA5LDAtMC4xOS0wLjAxLTAuMjktMC4wMmMtMC42MS0wLjA0LTEuMjYtMC4wOC0xLjk4LTAuMTFjLTAuMzktMC4wMS0wLjgtMC4wMi0xLjIyLTAuMDJoLTAuMDJsLTEuMDEsMC4wOGgtMC4wMWwtMi4yNywwLjE2IGwtMi41OSwwLjJsLTAuMzgsMC4wM2wtMy4wMywwLjIybC0xLjU3LDAuMTJsLTEuNTUsMC4xMWMtMC4yNywwLTAuNTMsMC0wLjc5LTAuMDFjMCwwLTAuMDEtMC4wMS0wLjAxLDAgYy0xLjEzLTAuMDItMi4xNC0wLjA5LTMuMDQtMC4yNmMtMC44My0wLjE0LTEuNTYtMC4zNi0yLjE4LTAuNjljLTAuNjQtMC4zMS0xLjE3LTAuNzUtMS42LTEuMzFjLTAuNDEtMC41NS0wLjcxLTEuMjQtMC45LTIuMDcgYzAtMC4wMSwwLTAuMDEsMC0wLjAxYy0wLjE0LTAuNjctMC4yMi0xLjQ1LTAuMjItMi4zM2wtMC4xNS0wLjI3TDkuNywyNi4zNWwtMC4xMy0wLjIyTDkuNSwyNS45OWwtMC45My0xLjY1bC0wLjQ2LTAuODMgbC0wLjU4LTEuMDNsLTEtMS43OUw2LDE5Ljc1di0zLjY4YzAuODgtMC41OCwxLjc5LTEuMDksMi43My0xLjU1YzEuMTQtMC41OCwyLjMyLTEuMDcsMy41NS0xLjQ3YzEuMzQtMC40NCwyLjc0LTAuNzksNC4xNy0xLjAyIGMxLjQ1LTAuMjQsMi45NC0wLjM2LDQuNDctMC4zNmM2LjgsMCwxMy4wNCwyLjQzLDE3Ljg1LDYuNDdjMC4yMiwwLjE3LDAuNDMsMC4zNiwwLjY0LDAuNTRjMC44NCwwLjc1LDEuNjQsMS41NiwyLjM3LDIuNDEgQzQxLjg2LDIxLjE4LDQxLjk0LDIxLjI2LDQyLDIxLjM1eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiNjMjE4NWIiIGQ9Ik00MiwyNC43MXY3LjIzYy0wLjI0LTAuMTQtMC41Ny0wLjMxLTAuOTgtMC40OWMtMC4yMi0wLjExLTAuNDctMC4yMi0wLjczLTAuMzIgYy0wLjM4LTAuMTctMC43OS0wLjMzLTEuMjUtMC40OWMtMC4xLTAuMDQtMC4yLTAuMDctMC4zMS0wLjFjLTAuMTgtMC4wNy0wLjM3LTAuMTMtMC41Ni0wLjE5Yy0wLjU5LTAuMTgtMS4yNC0wLjM1LTEuOTItMC41IGMtMC4yNi0wLjA1LTAuNTMtMC4xLTAuOC0wLjE0Yy0wLjg3LTAuMTUtMS44LTAuMjQtMi43Ny0wLjI1Yy0wLjA4LTAuMDEtMC4xNy0wLjAxLTAuMjUtMC4wMWwtMi41NywwLjAybC0zLjUsMC4wMmgtMC4wMSBsLTcuNDksMC4wNmMtMi4zOCwwLTMuODQsMC41Ny00LjcyLDAuOGMwLDAtMC4wMSwwLTAuMDEsMC4wMWMtMC45MywwLjI0LTEuMjIsMC4wOS0xLjMtMS41NGMtMC4wMi0wLjQ1LTAuMDMtMS4wMy0wLjAzLTEuNzQgbC0wLjU2LTAuNDNsLTAuOTgtMC43NGwtMC42LTAuNDZsLTAuMTItMC4wOUw4Ljg4LDI0LjFsLTAuMjUtMC4xOWwtMC41Mi0wLjRsLTAuOTYtMC43Mkw2LDIxLjkxdi0zLjQgYzAuMS0wLjA4LDAuMTktMC4xNSwwLjI5LTAuMjFjMS40NS0xLDMtMS44NSw0LjY0LTIuNTRjMS40Ni0wLjYyLDMtMS4xMSw0LjU4LTEuNDZjMC40My0wLjA5LDAuODctMC4xOCwxLjMyLTAuMjQgYzEuMzMtMC4yMywyLjctMC4zNCw0LjA5LTAuMzRjNi4wMSwwLDExLjUzLDIuMDksMTUuOTEsNS41NWMwLjY2LDAuNTIsMS4zLDEuMDcsMS45LDEuNjZjMC44MiwwLjc4LDEuNTksMS42MSwyLjMsMi40OSBjMC4xNCwwLjE4LDAuMjgsMC4zNiwwLjQyLDAuNTVDNDEuNjQsMjQuMjEsNDEuODIsMjQuNDYsNDIsMjQuNzF6Ij48L3BhdGg+PHBhdGggZmlsbD0iI2Q4MWI2MCIgZD0iTTQyLDI4LjcyVjMyYzAsMC42NS0wLjA2LDEuMjktMC4xOCwxLjkxYy0wLjE4LDAuOTItMC40OSwxLjgtMC45MSwyLjYyYy0wLjIyLDAuMDUtMC40NywwLjA1LTAuNzUsMC4wMSBjLTAuNjMtMC4xMS0xLjM3LTAuNDQtMi4xNy0wLjg3Yy0wLjA0LTAuMDEtMC4wOC0wLjAzLTAuMTEtMC4wNWMtMC4yNS0wLjEzLTAuNTEtMC4yNy0wLjc3LTAuNDNjLTAuNTMtMC4yOS0xLjA5LTAuNjEtMS42NS0wLjkxIGMtMC4xMi0wLjA2LTAuMjQtMC4xMi0wLjM1LTAuMThjLTAuNjQtMC4zMy0xLjMtMC42My0xLjk2LTAuODZjMCwwLDAsMC0wLjAxLDBjLTAuMTQtMC4wNS0wLjI5LTAuMS0wLjQ0LTAuMTQgYy0wLjU3LTAuMTYtMS4xNS0wLjI2LTEuNzEtMC4yNmwtMS4xLTAuMzJsLTQuODctMS40MWMwLDAsMCwwLTAuMDEsMGwtMi45OS0wLjg3aC0wLjAxbC0xLjMtMC4zOGMtMy43NiwwLTYuMDcsMS42LTcuMTksMC45OSBjLTAuNDQtMC4yMy0wLjctMC44MS0wLjc5LTEuOTVjLTAuMDMtMC4zMi0wLjA0LTAuNjgtMC4wNC0xLjFsLTEuMTctMC41N2wtMC4wNS0wLjAyaC0wLjAxbC0wLjg0LTAuNDJMOS43LDI2LjM1bC0wLjA3LTAuMDMgbC0wLjE3LTAuMDlMNy41LDI1LjI4TDYsMjQuNTV2LTMuNDNjMC4xNy0wLjE1LDAuMzUtMC4yOSwwLjUzLTAuNDNjMC4xOS0wLjE1LDAuMzgtMC4yOSwwLjU3LTAuNDRjMC4wMSwwLDAuMDEsMCwwLjAxLDAgYzEuMTgtMC44NSwyLjQzLTEuNiwzLjc2LTIuMjJjMS41NS0wLjc0LDMuMi0xLjMxLDQuOTEtMS42OGMwLjI1LTAuMDYsMC41MS0wLjEyLDAuNzctMC4xNmMxLjQyLTAuMjcsMi44OC0wLjQxLDQuMzctMC40MSBjNS4yNywwLDEwLjExLDEuNzEsMTQuMDEsNC41OWMxLjEzLDAuODQsMi4xOCwxLjc3LDMuMTQsMi43OGMwLjc5LDAuODMsMS41MiwxLjczLDIuMTgsMi42N2MwLjA1LDAuMDcsMC4xLDAuMTQsMC4xNSwwLjIgYzAuMzcsMC41NCwwLjcxLDEuMDksMS4wMywxLjY2QzQxLjY0LDI4LjAyLDQxLjgyLDI4LjM3LDQyLDI4LjcyeiI+PC9wYXRoPjxwYXRoIGZpbGw9IiNmNTAwNTciIGQ9Ik00MS44MiwzMy45MWMtMC4xOCwwLjkyLTAuNDksMS44LTAuOTEsMi42MmMtMC4xOSwwLjM3LTAuNCwwLjcyLTAuNjMsMS4wNmMtMC4xNCwwLjIxLTAuMjksMC40MS0wLjQ0LDAuNiBjLTAuMzYtMC4xNC0wLjg5LTAuMzQtMS41NC0wLjU2YzAsMCwwLDAsMC0wLjAxYy0wLjQ5LTAuMTctMS4wNS0wLjM1LTEuNjUtMC41MmMtMC4xNy0wLjA1LTAuMzQtMC4xLTAuNTItMC4xNSBjLTAuNzEtMC4xOS0xLjQ1LTAuMzYtMi4xNy0wLjQ2Yy0wLjYtMC4xLTEuMTktMC4xNi0xLjc0LTAuMTZsLTAuNDYtMC4xM2gtMC4wMWwtMi40Mi0wLjdsLTEuNDktMC40M2wtMS42Ni0wLjQ4aC0wLjAxbC0wLjU0LTAuMTUgbC02LjUzLTEuODhsLTEuODgtMC41NGwtMS40LTAuMzNsLTIuMjgtMC41NGwtMC4yOC0wLjA3YzAsMCwwLDAtMC4wMSwwbC0yLjI5LTAuNTNjMC0wLjAxLDAtMC4wMSwwLTAuMDFsLTAuNDEtMC4wOWwtMC4yMS0wLjA1IGwtMS42Ny0wLjM5bC0wLjE5LTAuMDVsLTEuNDItMS4xN0w2LDI3Ljl2LTQuMDhjMC4zNy0wLjM2LDAuNzUtMC43LDEuMTUtMS4wM2MwLjEyLTAuMTEsMC4yNS0wLjIxLDAuMzgtMC4zMSBjMC4xMi0wLjEsMC4yNS0wLjIsMC4zOC0wLjNjMC45MS0wLjY5LDEuODctMS4zMSwyLjg5LTEuODRjMS4zLTAuNywyLjY4LTEuMjYsNC4xMy0xLjY2YzAuMjgtMC4wOSwwLjU2LTAuMTcsMC44NS0wLjIzIGMxLjY0LTAuNDEsMy4zNi0wLjYyLDUuMTQtMC42MmM0LjQ3LDAsOC42MywxLjM1LDEyLjA3LDMuNjZjMS43MSwxLjE1LDMuMjUsMi41Myw0LjU1LDQuMWMwLjY2LDAuNzksMS4yNiwxLjYyLDEuNzksMi41IGMwLjA1LDAuMDcsMC4wOSwwLjEzLDAuMTMsMC4yYzAuMzIsMC41MywwLjYyLDEuMDgsMC44OSwxLjY0YzAuMjUsMC41LDAuNDcsMSwwLjY3LDEuNTJDNDEuMzQsMzIuMjUsNDEuNiwzMy4wNyw0MS44MiwzMy45MXoiPjwvcGF0aD48cGF0aCBmaWxsPSIjZmYxNzQ0IiBkPSJNNDAuMjgsMzcuNTljLTAuMTQsMC4yMS0wLjI5LDAuNDEtMC40NCwwLjZjLTAuNDQsMC41NS0wLjkyLDEuMDUtMS40NiwxLjQ5Yy0wLjQ3LDAuMzktMC45NywwLjc0LTEuNSwxLjA0IGMtMC4yLTAuMDUtMC40LTAuMTEtMC42MS0wLjE5Yy0wLjY2LTAuMjMtMS4zNS0wLjYxLTEuOTktMS4wMWMtMC45Ni0wLjYxLTEuNzktMS4yNy0yLjE2LTEuNTdjLTAuMTQtMC4xMi0wLjIxLTAuMTgtMC4yMS0wLjE4IGwtMS43LTAuMTVMMzAsMzcuNmwtMi4yLTAuMTlsLTIuMjgtMC4ybC0zLjM3LTAuM2wtNS4zNC0wLjQ3bC0wLjAyLTAuMDFsLTEuODgtMC45MWwtMS45LTAuOTJsLTEuNTMtMC43NGwtMC4zMy0wLjE2bC0wLjQxLTAuMiBsLTEuNDItMC42OUw3LjQzLDMxLjlsLTAuNTktMC4yOUw2LDMxLjM1di00LjQ3YzAuNDctMC41NiwwLjk3LTEuMDksMS41LTEuNmMwLjM0LTAuMzIsMC43LTAuNjQsMS4wNy0wLjk0IGMwLjA2LTAuMDUsMC4xMi0wLjEsMC4xOC0wLjE0YzAuMDQtMC4wNSwwLjA5LTAuMDgsMC4xMy0wLjFjMC41OS0wLjQ4LDEuMjEtMC45MSwxLjg1LTEuM2MwLjc0LTAuNDcsMS41Mi0wLjg5LDIuMzMtMS4yNCBjMC44Ny0wLjM5LDEuNzgtMC43MiwyLjcyLTAuOTdjMS42My0wLjQ2LDMuMzYtMC43LDUuMTQtMC43YzQuMDgsMCw3Ljg1LDEuMjQsMTAuOTYsMy4zN2MxLjk5LDEuMzYsMy43MSwzLjA4LDUuMDcsNS4wNyBjMC40NSwwLjY0LDAuODUsMS4zMiwxLjIyLDIuMDJjMC4xMywwLjI2LDAuMjYsMC41MiwwLjM3LDAuNzhjMC4xMiwwLjI1LDAuMjMsMC41LDAuMzQsMC43NWMwLjIxLDAuNTIsMC40LDEuMDQsMC41NywxLjU4IGMwLjMyLDEsMC41NiwyLjAyLDAuNzEsMy4wOEM0MC4yMSwzNi44OSw0MC4yNSwzNy4yNCw0MC4yOCwzNy41OXoiPjwvcGF0aD48cGF0aCBmaWxsPSIjZmY1NzIyIiBkPSJNMzguMzksMzkuNDJjMCwwLjA4LDAsMC4xNy0wLjAxLDAuMjZjLTAuNDcsMC4zOS0wLjk3LDAuNzQtMS41LDEuMDRjLTAuMjIsMC4xMi0wLjQ0LDAuMjQtMC42NywwLjM0IGMtMC4yMywwLjExLTAuNDYsMC4yMS0wLjcsMC4zYy0wLjM0LTAuMTgtMC44LTAuNC0xLjI5LTAuNjFjLTAuNjktMC4zMS0xLjQ0LTAuNTktMi4wMi0wLjY4Yy0wLjE0LTAuMDMtMC4yNy0wLjA0LTAuMzktMC4wNCBsLTEuNjQtMC4yMWgtMC4wMmwtMi4wNC0wLjI3bC0yLjA2LTAuMjdsLTAuOTYtMC4xMmwtNy41Ni0wLjk4Yy0wLjQ5LDAtMS4wMS0wLjAzLTEuNTUtMC4xYy0wLjY2LTAuMDYtMS4zNS0wLjE2LTIuMDQtMC4zIGMtMC42OC0wLjEyLTEuMzctMC4yOC0yLjAzLTAuNDVjLTAuNjktMC4xNi0xLjM3LTAuMzUtMi0wLjUzYy0wLjczLTAuMjItMS40MS0wLjQzLTEuOTgtMC42MmMtMC40Ny0wLjE1LTAuODctMC4yOS0xLjE4LTAuNCBjLTAuMTgtMC40My0wLjMzLTAuODgtMC40NC0xLjM0QzYuMSwzMy42Niw2LDMyLjg0LDYsMzJ2LTEuNjdjMC4zMi0wLjUzLDAuNjctMS4wNSwxLjA2LTEuNTRjMC43MS0wLjk0LDEuNTItMS44LDIuNC0yLjU2IGMwLjAzLTAuMDQsMC4wNy0wLjA3LDAuMS0wLjA5bDAuMDEtMC4wMWMwLjMxLTAuMjgsMC42My0wLjUzLDAuOTctMC43N2MwLjA0LTAuMDQsMC4wOC0wLjA3LDAuMTItMC4xIGMwLjE2LTAuMTIsMC4zMy0wLjI0LDAuNTEtMC4zNWMxLjQzLTAuOTcsMy4wMS0xLjczLDQuNy0yLjI0YzEuNi0wLjQ4LDMuMjktMC43Myw1LjA1LTAuNzNjMy40OSwwLDYuNzUsMS4wMyw5LjQ3LDIuNzkgYzIuMDEsMS4yOSwzLjc0LDIuOTksNS4wNiw0Ljk4YzAuMTYsMC4yMywwLjMxLDAuNDYsMC40NiwwLjdjMC42OSwxLjE3LDEuMjYsMi40MywxLjY4LDMuNzVjMC4wNSwwLjE1LDAuMDksMC4zLDAuMTMsMC40NiBjMC4wOCwwLjI3LDAuMTUsMC41NSwwLjIxLDAuODNjMC4wMiwwLjA3LDAuMDQsMC4xNCwwLjA2LDAuMjJjMC4xNCwwLjYzLDAuMjQsMS4yOSwwLjMxLDEuOTVjMCwwLjAxLDAsMC4wMSwwLDAuMDEgQzM4LjM2LDM4LjIyLDM4LjM5LDM4LjgyLDM4LjM5LDM5LjQyeiI+PC9wYXRoPjxwYXRoIGZpbGw9IiNmZjZmMDAiIGQ9Ik0zNi4zMywzOS40MmMwLDAuMzUtMC4wMiwwLjczLTAuMDYsMS4xMWMtMC4wMiwwLjE4LTAuMDQsMC4zNi0wLjA2LDAuNTNjLTAuMjMsMC4xMS0wLjQ2LDAuMjEtMC43LDAuMyBjLTAuNDUsMC4xNy0wLjkxLDAuMzEtMS4zOCwwLjQxYy0wLjMyLDAuMDctMC42NSwwLjEzLTAuOTgsMC4xNmgtMC4wMWMtMC4zMS0wLjE5LTAuNjctMC40Mi0xLjA0LTAuNjggYy0wLjY3LTAuNDctMS4zNy0xLTEuOTMtMS40M2MtMC4wMS0wLjAxLTAuMDEtMC4wMS0wLjAyLTAuMDJjLTAuNTktMC40NS0xLjAxLTAuNzktMS4wMS0wLjc5bC0xLjA2LDAuMDRsLTIuMDQsMC4wN2wtMC45NSwwLjA0IGwtMy44MiwwLjE0bC0zLjIzLDAuMTJjLTAuMjEsMC4wMS0wLjQ2LDAuMDEtMC43NywwaC0wLjAxYy0wLjQyLTAuMDEtMC45Mi0wLjA0LTEuNDctMC4wOWMtMC42NC0wLjA1LTEuMzQtMC4xMS0yLjA1LTAuMTggYy0wLjY5LTAuMDgtMS4zOS0wLjE2LTIuMDYtMC4yNGMtMC43NC0wLjA4LTEuNDQtMC4xNy0yLjA0LTAuMjVjLTAuNDctMC4wNi0wLjg4LTAuMTEtMS4yMS0wLjE1Yy0wLjI4LTAuMzItMC41My0wLjY1LTAuNzctMS4wMSBjLTAuMzYtMC41NC0wLjY3LTEuMTEtMC45MS0xLjcyYy0wLjE4LTAuNDMtMC4zMy0wLjg4LTAuNDQtMS4zNGMwLjI5LTAuODksMC42Ny0xLjczLDEuMTItMi41NGMwLjM2LTAuNjYsMC43OC0xLjI5LDEuMjQtMS44OSBjMC40NS0wLjU5LDAuOTQtMS4xNCwxLjQ3LTEuNjR2LTAuMDFjMC4xNS0wLjE1LDAuMy0wLjI5LDAuNDUtMC40MmMwLjI4LTAuMjYsMC41Ny0wLjUsMC44Ny0wLjczaDAuMDEgYzAuMDEtMC4wMiwwLjAyLTAuMDIsMC4wMy0wLjAzYzAuMjQtMC4xOSwwLjQ5LTAuMzYsMC43NC0wLjUzYzEuNDgtMS4wMSwzLjE1LTEuNzYsNC45NS0yLjJjMS4xOS0wLjI5LDIuNDQtMC40NSwzLjczLTAuNDUgYzIuNTQsMCw0Ljk0LDAuNjEsNy4wNSwxLjcxaDAuMDFjMS44MSwwLjkzLDMuNDEsMi4yMSw0LjcsMy43NWMwLjcxLDAuODIsMS4zMiwxLjcyLDEuODIsMi42N2MwLjM1LDAuNjQsMC42NSwxLjMxLDAuOSwxLjk5IGMwLjAyLDAuMDYsMC4wNCwwLjExLDAuMDYsMC4xNmMwLjE3LDAuNSwwLjMyLDEuMDIsMC40NSwxLjU0YzAuMDksMC4zNywwLjE2LDAuNzUsMC4yMiwxLjEzYzAuMDIsMC4xMiwwLjA0LDAuMjMsMC4wNSwwLjM1IEMzNi4yOCwzNy45OSwzNi4zMywzOC43LDM2LjMzLDM5LjQyeiI+PC9wYXRoPjxwYXRoIGZpbGw9IiNmZjk4MDAiIGQ9Ik0zNC4yOCwzOS40MnYwLjFjMCwwLjM0LTAuMDMsMC43Ny0wLjA2LDEuMjNjLTAuMDMsMC4zNC0wLjA2LDAuNjktMC4wOSwxLjAyYy0wLjMyLDAuMDctMC42NSwwLjEzLTAuOTgsMC4xNiBoLTAuMDFDMzIuNzYsNDEuOTgsMzIuMzksNDIsMzIsNDJoLTEuNzVsLTAuMzgtMC4xMWwtMS45Ny0wLjZsLTItMC42bC00LjYzLTEuMzlsLTItMC42YzAsMC0wLjgzLDAuMzMtMiwwLjcyaC0wLjAxIGMtMC40NSwwLjE1LTAuOTQsMC4zMS0xLjQ2LDAuNDdjLTAuNjUsMC4xOS0xLjM0LDAuMzgtMi4wMiwwLjUzYy0wLjcsMC4xNi0xLjM5LDAuMjgtMi4wMSwwLjMzYy0wLjE5LDAuMDItMC4zOCwwLjAzLTAuNTUsMC4wMyBjLTAuNTYtMC4zMS0xLjEtMC42OC0xLjU5LTEuMDljLTAuNDMtMC4zNi0wLjgzLTAuNzUtMS4yLTEuMThjLTAuMjgtMC4zMi0wLjUzLTAuNjUtMC43Ny0xLjAxYzAuMDctMC40NSwwLjE1LTAuODksMC4yNy0xLjMyIGMwLjMtMS4xOSwwLjc3LTIuMzMsMS4zOS0zLjM3YzAuMzQtMC41OSwwLjcyLTEuMTYsMS4xNi0xLjY5YzAuMDEtMC4wMywwLjA0LTAuMDYsMC4wNy0wLjA4Yy0wLjAxLTAuMDEsMC0wLjAxLDAtMC4wMSBjMC4xMy0wLjE3LDAuMjctMC4zMywwLjQxLTAuNDhjMC0wLjAxLDAtMC4wMSwwLTAuMDFjMC40MS0wLjQ0LDAuODMtMC44NiwxLjI5LTEuMjVjMC4xNi0wLjEzLDAuMzEtMC4yNiwwLjQ4LTAuMzkgYzAuMDMtMC4wMywwLjA2LTAuMDUsMC4xLTAuMDhjMi4yNS0xLjcyLDUuMDYtMi43Niw4LjA5LTIuNzZjMy40NCwwLDYuNTcsMS4yOSw4Ljk0LDMuNDFjMS4xNCwxLjAzLDIuMTEsMi4yNiwyLjg0LDMuNjMgYzAuMDYsMC4xLDAuMTIsMC4yMSwwLjE3LDAuMzJjMC4wOSwwLjE4LDAuMTgsMC4zNywwLjI2LDAuNTdjMC4zMywwLjcyLDAuNTksMS40OCwwLjc3LDIuMjZjMC4wMiwwLjA4LDAuMDQsMC4xNiwwLjA2LDAuMjQgYzAuMDgsMC4zNywwLjE1LDAuNzUsMC4yLDEuMTNDMzQuMjQsMzguMjEsMzQuMjgsMzguODEsMzQuMjgsMzkuNDJ6Ij48L3BhdGg+PHBhdGggZmlsbD0iI2ZmYzEwNyIgZD0iTTMyLjIyLDM5LjQyYzAsMC4yLTAuMDEsMC40Mi0wLjAyLDAuNjVjLTAuMDIsMC4zNy0wLjA1LDAuNzctMC4xLDEuMThjLTAuMDIsMC4yNS0wLjA2LDAuNS0wLjEsMC43NWgtNS40OCBsLTEuMDYtMC4xN2wtNC4xNC0wLjY2bC0wLjU5LTAuMDlsLTEuMzUtMC4yMmMtMC41OSwwLTEuODcsMC4yNi0zLjIyLDAuNTFjLTAuNzEsMC4xMy0xLjQzLDAuMjctMi4wOCwwLjM2IGMtMC4wOCwwLjAxLTAuMTYsMC4wMi0wLjIzLDAuMDNoLTAuMDFjLTAuNy0wLjE1LTEuMzgtMC4zOC0yLjAyLTAuNjhjLTAuMi0wLjA5LTAuNC0wLjE5LTAuNi0wLjNjLTAuNTYtMC4zMS0xLjEtMC42OC0xLjU5LTEuMDkgYy0wLjAxLTAuMTItMC4wMi0wLjIyLTAuMDItMC4yN2MwLTAuMjYsMC4wMS0wLjUxLDAuMDMtMC43NmMwLjA0LTAuNjQsMC4xMy0xLjI2LDAuMjctMS44NmMwLjIyLTAuOTEsMC41NC0xLjc5LDAuOTctMi42IGMwLjA4LTAuMTcsMC4xNy0wLjM0LDAuMjctMC41YzAuMDQtMC4wOCwwLjA5LTAuMTUsMC4xMy0wLjIzYzAuMTgtMC4yOSwwLjM4LTAuNTcsMC41OC0wLjg1YzAuNDItMC41NSwwLjg5LTEuMDcsMS4zOS0xLjU0IGMwLjAxLDAsMC4wMSwwLDAuMDEsMGMwLjA0LTAuMDQsMC4wOC0wLjA4LDAuMTItMC4xMWMwLjA1LTAuMDQsMC4wOS0wLjA5LDAuMTQtMC4xMmMwLjItMC4xOCwwLjQtMC4zNCwwLjYxLTAuNDkgYzAtMC4wMSwwLjAxLTAuMDEsMC4wMS0wLjAxYzEuODktMS40MSw0LjIzLTIuMjQsNi43OC0yLjI0YzEuOTgsMCwzLjgyLDAuNSw1LjQzLDEuMzhoMC4wMWMxLjM4LDAuNzYsMi41OCwxLjc5LDMuNTMsMy4wMyBjMC4zNywwLjQ4LDAuNywwLjk5LDAuOTgsMS41M2gwLjAxYzAuMDUsMC4xLDAuMSwwLjIsMC4xNSwwLjNjMC4zLDAuNTksMC41NCwxLjIxLDAuNzIsMS44NWgwLjAxYzAuMDEsMC4wNSwwLjAzLDAuMSwwLjA0LDAuMTUgYzAuMTIsMC40MywwLjIyLDAuODcsMC4yOSwxLjMyYzAuMDEsMC4wOSwwLjAyLDAuMTksMC4wMywwLjI4QzMyLjE5LDM4LjQzLDMyLjIyLDM4LjkyLDMyLjIyLDM5LjQyeiI+PC9wYXRoPjxwYXRoIGZpbGw9IiNmZmQ1NGYiIGQ9Ik0zMC4xNywzOS4zMWMwLDAuMTYsMCwwLjMzLTAuMDIsMC40OXYwLjAxYzAsMC4wMSwwLDAuMDEsMCwwLjAxYy0wLjAyLDAuNzItMC4xMiwxLjQzLTAuMjgsMi4wNyBjMCwwLjA0LTAuMDEsMC4wNy0wLjAzLDAuMTFoLTQuNjdsLTMuODUtMC44M2wtMC41MS0wLjExbC0wLjA4LDAuMDJsLTQuMjcsMC44OEwxNi4yNyw0MkgxNmMtMC42NCwwLTEuMjctMC4wNi0xLjg4LTAuMTggYy0wLjA5LTAuMDItMC4xOC0wLjA0LTAuMjctMC4wNmgtMC4wMWMtMC43LTAuMTUtMS4zOC0wLjM4LTIuMDItMC42OGMtMC4wMi0wLjExLTAuMDQtMC4yMi0wLjA1LTAuMzMgYy0wLjA3LTAuNDMtMC4xLTAuODgtMC4xLTEuMzNjMC0wLjE3LDAtMC4zNCwwLjAxLTAuNTFjMC4wMy0wLjU0LDAuMTEtMS4wNywwLjIzLTEuNThjMC4wOC0wLjM4LDAuMTktMC43NSwwLjMyLTEuMSBjMC4xMS0wLjMxLDAuMjQtMC42MSwwLjM4LTAuOWMwLjEyLTAuMjUsMC4yNi0wLjQ5LDAuNC0wLjczYzAuMTQtMC4yMywwLjI5LTAuNDUsMC40NS0wLjY3YzAuNC0wLjU1LDAuODctMS4wNiwxLjM5LTEuNTEgYzAuMy0wLjI2LDAuNjMtMC41MSwwLjk3LTAuNzNjMS40Ni0wLjk2LDMuMjEtMS41Miw1LjEtMS41MmMwLjM3LDAsMC43MywwLjAyLDEuMDgsMC4wN2gwLjAyYzEuMDcsMC4xMiwyLjA3LDAuNDIsMi45OSwwLjg3IGMwLjAxLDAsMC4wMSwwLDAuMDEsMGMxLjQ1LDAuNzEsMi42OCwxLjc4LDMuNTgsMy4xYzAuMTUsMC4yMiwwLjMsMC40NiwwLjQzLDAuN2MwLjExLDAuMTksMC4yMSwwLjM5LDAuMywwLjU5IGMwLjE0LDAuMzEsMC4yNywwLjY0LDAuMzgsMC45N2gwLjAxYzAuMTEsMC4zNywwLjIxLDAuNzQsMC4yOCwxLjEzdjAuMDFDMzAuMTEsMzguMTYsMzAuMTcsMzguNzMsMzAuMTcsMzkuMzF6Ij48L3BhdGg+PHBhdGggZmlsbD0iI2ZmZTA4MiIgZD0iTTI4LjExLDM5LjUydjAuMDNjMCwwLjU5LTAuMDcsMS4xNy0wLjIxLDEuNzRjLTAuMDUsMC4yNC0wLjEyLDAuNDgtMC4yMSwwLjcxaC00LjQ4bC0yLjI5LTAuNjNMMTguNjMsNDJIMTYgYy0wLjY0LDAtMS4yNy0wLjA2LTEuODgtMC4xOGMtMC4wMi0wLjAzLTAuMDMtMC4wNi0wLjA0LTAuMDljLTAuMTQtMC40My0wLjI1LTAuODYtMC4zLTEuMzFjLTAuMDQtMC4yOS0wLjA2LTAuNTktMC4wNi0wLjkgYzAtMC4xMiwwLTAuMjUsMC4wMi0wLjM3YzAuMDEtMC40NywwLjA4LTAuOTMsMC4yLTEuMzdjMC4wNi0wLjMsMC4xNS0wLjU5LDAuMjctMC44N2MwLjA0LTAuMTQsMC4xLTAuMjcsMC4xNy0wLjQgYzAuMTUtMC4zNCwwLjMzLTAuNjcsMC41My0wLjk5YzAuMjItMC4zMiwwLjQ2LTAuNjIsMC43My0wLjljMC4zMi0wLjM2LDAuNjgtMC42OSwxLjA5LTAuOTZjMC43LTAuNTEsMS41LTAuODksMi4zNy0xLjEgYzAuNTgtMC4xNiwxLjE5LTAuMjQsMS44Mi0wLjI0YzIsMCwzLjc5LDAuOCw1LjA5LDIuMDljMC4wNSwwLjA1LDAuMTEsMC4xMSwwLjE2LDAuMThoMC4wMWMwLjE0LDAuMTUsMC4yNywwLjMsMC40LDAuNDcgYzAuMzcsMC40NywwLjY4LDAuOTgsMC45MiwxLjU0YzAuMTIsMC4yNiwwLjIyLDAuNTMsMC4zLDAuODFjMC4wMSwwLjA0LDAuMDIsMC4wNywwLjAzLDAuMTFjMC4xNCwwLjQ5LDAuMjMsMSwwLjI1LDEuNTMgQzI4LjEsMzkuMiwyOC4xMSwzOS4zNiwyOC4xMSwzOS41MnoiPjwvcGF0aD48cGF0aCBmaWxsPSIjZmZlY2IzIiBkPSJNMjYuMDYsMzkuNTJjMCwwLjQxLTAuMDUsMC44LTAuMTYsMS4xN2MtMC4xLDAuNC0wLjI1LDAuNzgtMC40NCwxLjE0Yy0wLjAzLDAuMDYtMC4xLDAuMTctMC4xLDAuMTdoLTguODggYy0wLjAxLTAuMDEtMC4wMi0wLjAzLTAuMDItMC4wNGMtMC4xMi0wLjE5LTAuMjItMC4zOC0wLjMtMC41OWMtMC4yLTAuNDYtMC4zMi0wLjk2LTAuMzYtMS40OGMtMC4wMi0wLjEyLTAuMDItMC4yNS0wLjAyLTAuMzcgYzAtMC4wNiwwLTAuMTMsMC4wMS0wLjE5YzAuMDEtMC40NCwwLjA3LTAuODYsMC4xOS0xLjI1YzAuMS0wLjM2LDAuMjMtMC42OSwwLjQtMS4wMWMwLDAsMC4wMS0wLjAxLDAuMDEtMC4wMiBjMC4xMi0wLjIxLDAuMjUtMC40MiwwLjQtMC42MmMwLjQ5LTAuNjYsMS4xNC0xLjIsMS44OS0xLjU1YzAuMDEsMCwwLjAxLDAsMC4wMSwwYzAuMjQtMC4xMiwwLjQ5LTAuMjIsMC43NS0wLjI5YzAsMCwwLDAsMC4wMSwwIGMwLjQ2LTAuMTQsMC45Ni0wLjIxLDEuNDctMC4yMWMwLjU5LDAsMS4xNiwwLjA5LDEuNjgsMC4yOGMwLjE5LDAuMDUsMC4zNywwLjEzLDAuNTUsMC4yMmMwLDAsMCwwLDAuMDEsMCBjMC44NiwwLjQxLDEuNTksMS4wNSwyLjA5LDEuODVjMC4xLDAuMTUsMC4xOSwwLjMxLDAuMjcsMC40OGMwLjA0LDAuMDcsMC4wOCwwLjE1LDAuMTEsMC4yMmMwLjIzLDAuNTIsMC4zNywxLjA5LDAuNDEsMS42OSBjMC4wMSwwLjA1LDAuMDEsMC4xLDAuMDEsMC4xNkMyNi4wNiwzOS4zNiwyNi4wNiwzOS40NCwyNi4wNiwzOS41MnoiPjwvcGF0aD48Zz48cGF0aCBmaWxsPSJub25lIiBzdHJva2U9IiNmZmYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiIGQ9Ik0zMCwxMUgxOGMtMy45LDAtNywzLjEtNyw3djEyYzAsMy45LDMuMSw3LDcsN2gxMmMzLjksMCw3LTMuMSw3LTdWMThDMzcsMTQuMSwzMy45LDExLDMwLDExeiI+PC9wYXRoPjxjaXJjbGUgY3g9IjMxIiBjeT0iMTYiIHI9IjEiIGZpbGw9IiNmZmYiPjwvY2lyY2xlPjwvZz48Zz48Y2lyY2xlIGN4PSIyNCIgY3k9IjI0IiByPSI2IiBmaWxsPSJub25lIiBzdHJva2U9IiNmZmYiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIgc3Ryb2tlLW1pdGVybGltaXQ9IjEwIiBzdHJva2Utd2lkdGg9IjIiPjwvY2lyY2xlPjwvZz4KPC9zdmc+"/></a>
                                <a href="#"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAsMCwyNTUuOTk3NjgsMjU1Ljk5NzY4IgpzdHlsZT0iZmlsbDojMDAwMDAwOyI+CjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxnIHRyYW5zZm9ybT0ic2NhbGUoNS4zMzMzMyw1LjMzMzMzKSI+PHBhdGggZD0iTTQyLDM3YzAsMi43NjIgLTIuMjM4LDUgLTUsNWgtMjZjLTIuNzYxLDAgLTUsLTIuMjM4IC01LC01di0yNmMwLC0yLjc2MiAyLjIzOSwtNSA1LC01aDI2YzIuNzYyLDAgNSwyLjIzOCA1LDV6IiBmaWxsPSIjMDA3OGQ0Ij48L3BhdGg+PHBhdGggZD0iTTMwLDM3di0xMC4wOTljMCwtMS42ODkgLTAuODE5LC0yLjY5OCAtMi4xOTIsLTIuNjk4Yy0wLjgxNSwwIC0xLjQxNCwwLjQ1OSAtMS43NzksMS4zNjRjLTAuMDE3LDAuMDY0IC0wLjA0MSwwLjMyNSAtMC4wMzEsMS4xMTRsMC4wMDIsMTAuMzE5aC03di0xOWg3djEuMDYxYzEuMDIyLC0wLjcwNSAyLjI3NSwtMS4wNjEgMy43MzgsLTEuMDYxYzQuNTQ3LDAgNy4yNjEsMy4wOTMgNy4yNjEsOC4yNzRsMC4wMDEsMTAuNzI2ek0xMSwzN3YtMTloMy40NTdjLTIuMDAzLDAgLTMuNDU3LC0xLjQ3MiAtMy40NTcsLTMuNTAxYzAsLTIuMDI3IDEuNDc4LC0zLjQ5OSAzLjUxNCwtMy40OTljMi4wMTIsMCAzLjQ0NSwxLjQzMSAzLjQ4NiwzLjQ3OWMwLDIuMDQ0IC0xLjQ3OSwzLjUyMSAtMy41MTUsMy41MjFoMy41MTV2MTl6IiBmaWxsPSIjMDAwMDAwIiBvcGFjaXR5PSIwLjA1Ij48L3BhdGg+PHBhdGggZD0iTTMwLjUsMzYuNXYtOS41OTljMCwtMS45NzMgLTEuMDMxLC0zLjE5OCAtMi42OTIsLTMuMTk4Yy0xLjI5NSwwIC0xLjkzNSwwLjkxMiAtMi4yNDMsMS42NzdjLTAuMDgyLDAuMTk5IC0wLjA3MSwwLjk4OSAtMC4wNjcsMS4zMjZsMC4wMDIsOS43OTRoLTZ2LTE4aDZ2MS42MzhjMC43OTUsLTAuODIzIDIuMDc1LC0xLjYzOCA0LjIzOCwtMS42MzhjNC4yMzMsMCA2Ljc2MSwyLjkwNiA2Ljc2MSw3Ljc3NGwwLjAwMSwxMC4yMjZ6TTExLjUsMzYuNXYtMThoNnYxOHpNMTQuNDU3LDE3LjVjLTEuNzEzLDAgLTIuOTU3LC0xLjI2MiAtMi45NTcsLTMuMDAxYzAsLTEuNzM4IDEuMjY4LC0yLjk5OSAzLjAxNCwtMi45OTljMS43MjQsMCAyLjk1MSwxLjIyOSAyLjk4NiwyLjk4OWMwLDEuNzQ5IC0xLjI2OCwzLjAxMSAtMy4wMTUsMy4wMTF6IiBmaWxsPSIjMDAwMDAwIiBvcGFjaXR5PSIwLjA3Ij48L3BhdGg+PHBhdGggZD0iTTEyLDE5aDV2MTdoLTV6TTE0LjQ4NSwxN2gtMC4wMjhjLTEuNDkyLDAgLTIuNDU3LC0xLjExMiAtMi40NTcsLTIuNTAxYzAsLTEuNDE5IDAuOTk1LC0yLjQ5OSAyLjUxNCwtMi40OTljMS41MjEsMCAyLjQ1OCwxLjA4IDIuNDg2LDIuNDk5YzAsMS4zODggLTAuOTY1LDIuNTAxIC0yLjUxNSwyLjUwMXpNMzYsMzZoLTV2LTkuMDk5YzAsLTIuMTk4IC0xLjIyNSwtMy42OTggLTMuMTkyLC0zLjY5OGMtMS41MDEsMCAtMi4zMTMsMS4wMTIgLTIuNzA3LDEuOTljLTAuMTQ0LDAuMzUgLTAuMTAxLDEuMzE4IC0wLjEwMSwxLjgwN3Y5aC01di0xN2g1djIuNjE2YzAuNzIxLC0xLjExNiAxLjg1LC0yLjYxNiA0LjczOCwtMi42MTZjMy41NzgsMCA2LjI2MSwyLjI1IDYuMjYxLDcuMjc0bDAuMDAxLDkuNzI2eiIgZmlsbD0iI2ZmZmZmZiI+PC9wYXRoPjwvZz48L2c+Cjwvc3ZnPg=="/>
                                <a href="https://api.whatsapp.com/send?phone=919999999999"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCI+CjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik00Ljg2OCw0My4zMDNsMi42OTQtOS44MzVDNS45LDMwLjU5LDUuMDI2LDI3LjMyNCw1LjAyNywyMy45NzlDNS4wMzIsMTMuNTE0LDEzLjU0OCw1LDI0LjAxNCw1YzUuMDc5LDAuMDAyLDkuODQ1LDEuOTc5LDEzLjQzLDUuNTY2YzMuNTg0LDMuNTg4LDUuNTU4LDguMzU2LDUuNTU2LDEzLjQyOGMtMC4wMDQsMTAuNDY1LTguNTIyLDE4Ljk4LTE4Ljk4NiwxOC45OGMtMC4wMDEsMCwwLDAsMCwwaC0wLjAwOGMtMy4xNzctMC4wMDEtNi4zLTAuNzk4LTkuMDczLTIuMzExTDQuODY4LDQzLjMwM3oiPjwvcGF0aD48cGF0aCBmaWxsPSIjZmZmIiBkPSJNNC44NjgsNDMuODAzYy0wLjEzMiwwLTAuMjYtMC4wNTItMC4zNTUtMC4xNDhjLTAuMTI1LTAuMTI3LTAuMTc0LTAuMzEyLTAuMTI3LTAuNDgzbDIuNjM5LTkuNjM2Yy0xLjYzNi0yLjkwNi0yLjQ5OS02LjIwNi0yLjQ5Ny05LjU1NkM0LjUzMiwxMy4yMzgsMTMuMjczLDQuNSwyNC4wMTQsNC41YzUuMjEsMC4wMDIsMTAuMTA1LDIuMDMxLDEzLjc4NCw1LjcxM2MzLjY3OSwzLjY4Myw1LjcwNCw4LjU3Nyw1LjcwMiwxMy43ODFjLTAuMDA0LDEwLjc0MS04Ljc0NiwxOS40OC0xOS40ODYsMTkuNDhjLTMuMTg5LTAuMDAxLTYuMzQ0LTAuNzg4LTkuMTQ0LTIuMjc3bC05Ljg3NSwyLjU4OUM0Ljk1Myw0My43OTgsNC45MTEsNDMuODAzLDQuODY4LDQzLjgwM3oiPjwvcGF0aD48cGF0aCBmaWxsPSIjY2ZkOGRjIiBkPSJNMjQuMDE0LDVjNS4wNzksMC4wMDIsOS44NDUsMS45NzksMTMuNDMsNS41NjZjMy41ODQsMy41ODgsNS41NTgsOC4zNTYsNS41NTYsMTMuNDI4Yy0wLjAwNCwxMC40NjUtOC41MjIsMTguOTgtMTguOTg2LDE4Ljk4aC0wLjAwOGMtMy4xNzctMC4wMDEtNi4zLTAuNzk4LTkuMDczLTIuMzExTDQuODY4LDQzLjMwM2wyLjY5NC05LjgzNUM1LjksMzAuNTksNS4wMjYsMjcuMzI0LDUuMDI3LDIzLjk3OUM1LjAzMiwxMy41MTQsMTMuNTQ4LDUsMjQuMDE0LDUgTTI0LjAxNCw0Mi45NzRDMjQuMDE0LDQyLjk3NCwyNC4wMTQsNDIuOTc0LDI0LjAxNCw0Mi45NzRDMjQuMDE0LDQyLjk3NCwyNC4wMTQsNDIuOTc0LDI0LjAxNCw0Mi45NzQgTTI0LjAxNCw0Mi45NzRDMjQuMDE0LDQyLjk3NCwyNC4wMTQsNDIuOTc0LDI0LjAxNCw0Mi45NzRDMjQuMDE0LDQyLjk3NCwyNC4wMTQsNDIuOTc0LDI0LjAxNCw0Mi45NzQgTTI0LjAxNCw0QzI0LjAxNCw0LDI0LjAxNCw0LDI0LjAxNCw0QzEyLjk5OCw0LDQuMDMyLDEyLjk2Miw0LjAyNywyMy45NzljLTAuMDAxLDMuMzY3LDAuODQ5LDYuNjg1LDIuNDYxLDkuNjIybC0yLjU4NSw5LjQzOWMtMC4wOTQsMC4zNDUsMC4wMDIsMC43MTMsMC4yNTQsMC45NjdjMC4xOSwwLjE5MiwwLjQ0NywwLjI5NywwLjcxMSwwLjI5N2MwLjA4NSwwLDAuMTctMC4wMTEsMC4yNTQtMC4wMzNsOS42ODctMi41NGMyLjgyOCwxLjQ2OCw1Ljk5OCwyLjI0Myw5LjE5NywyLjI0NGMxMS4wMjQsMCwxOS45OS04Ljk2MywxOS45OTUtMTkuOThjMC4wMDItNS4zMzktMi4wNzUtMTAuMzU5LTUuODQ4LTE0LjEzNUMzNC4zNzgsNi4wODMsMjkuMzU3LDQuMDAyLDI0LjAxNCw0TDI0LjAxNCw0eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiM0MGMzNTEiIGQ9Ik0zNS4xNzYsMTIuODMyYy0yLjk4LTIuOTgyLTYuOTQxLTQuNjI1LTExLjE1Ny00LjYyNmMtOC43MDQsMC0xNS43ODMsNy4wNzYtMTUuNzg3LDE1Ljc3NGMtMC4wMDEsMi45ODEsMC44MzMsNS44ODMsMi40MTMsOC4zOTZsMC4zNzYsMC41OTdsLTEuNTk1LDUuODIxbDUuOTczLTEuNTY2bDAuNTc3LDAuMzQyYzIuNDIyLDEuNDM4LDUuMiwyLjE5OCw4LjAzMiwyLjE5OWgwLjAwNmM4LjY5OCwwLDE1Ljc3Ny03LjA3NywxNS43OC0xNS43NzZDMzkuNzk1LDE5Ljc3OCwzOC4xNTYsMTUuODE0LDM1LjE3NiwxMi44MzJ6Ij48L3BhdGg+PHBhdGggZmlsbD0iI2ZmZiIgZmlsbC1ydWxlPSJldmVub2RkIiBkPSJNMTkuMjY4LDE2LjA0NWMtMC4zNTUtMC43OS0wLjcyOS0wLjgwNi0xLjA2OC0wLjgyYy0wLjI3Ny0wLjAxMi0wLjU5My0wLjAxMS0wLjkwOS0wLjAxMWMtMC4zMTYsMC0wLjgzLDAuMTE5LTEuMjY1LDAuNTk0Yy0wLjQzNSwwLjQ3NS0xLjY2MSwxLjYyMi0xLjY2MSwzLjk1NmMwLDIuMzM0LDEuNyw0LjU5LDEuOTM3LDQuOTA2YzAuMjM3LDAuMzE2LDMuMjgyLDUuMjU5LDguMTA0LDcuMTYxYzQuMDA3LDEuNTgsNC44MjMsMS4yNjYsNS42OTMsMS4xODdjMC44Ny0wLjA3OSwyLjgwNy0xLjE0NywzLjIwMi0yLjI1NWMwLjM5NS0xLjEwOCwwLjM5NS0yLjA1NywwLjI3Ny0yLjI1NWMtMC4xMTktMC4xOTgtMC40MzUtMC4zMTYtMC45MDktMC41NTRzLTIuODA3LTEuMzg1LTMuMjQyLTEuNTQzYy0wLjQzNS0wLjE1OC0wLjc1MS0wLjIzNy0xLjA2OCwwLjIzOGMtMC4zMTYsMC40NzQtMS4yMjUsMS41NDMtMS41MDIsMS44NTljLTAuMjc3LDAuMzE3LTAuNTU0LDAuMzU3LTEuMDI4LDAuMTE5Yy0wLjQ3NC0wLjIzOC0yLjAwMi0wLjczOC0zLjgxNS0yLjM1NGMtMS40MS0xLjI1Ny0yLjM2Mi0yLjgxLTIuNjM5LTMuMjg1Yy0wLjI3Ny0wLjQ3NC0wLjAzLTAuNzMxLDAuMjA4LTAuOTY4YzAuMjEzLTAuMjEzLDAuNDc0LTAuNTU0LDAuNzEyLTAuODMxYzAuMjM3LTAuMjc3LDAuMzE2LTAuNDc1LDAuNDc0LTAuNzkxYzAuMTU4LTAuMzE3LDAuMDc5LTAuNTk0LTAuMDQtMC44MzFDMjAuNjEyLDE5LjMyOSwxOS42OSwxNi45ODMsMTkuMjY4LDE2LjA0NXoiIGNsaXAtcnVsZT0iZXZlbm9kZCI+PC9wYXRoPgo8L3N2Zz4="/></a>
                                <a href="https://api.whatsapp.com/send?phone=919999999999"><img alt="svgImg" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCI+CjxwYXRoIGZpbGw9IiMwM0E5RjQiIGQ9Ik00MiwxMi40MjljLTEuMzIzLDAuNTg2LTIuNzQ2LDAuOTc3LTQuMjQ3LDEuMTYyYzEuNTI2LTAuOTA2LDIuNy0yLjM1MSwzLjI1MS00LjA1OGMtMS40MjgsMC44MzctMy4wMSwxLjQ1Mi00LjY5MywxLjc3NkMzNC45NjcsOS44ODQsMzMuMDUsOSwzMC45MjYsOWMtNC4wOCwwLTcuMzg3LDMuMjc4LTcuMzg3LDcuMzJjMCwwLjU3MiwwLjA2NywxLjEyOSwwLjE5MywxLjY3Yy02LjEzOC0wLjMwOC0xMS41ODItMy4yMjYtMTUuMjI0LTcuNjU0Yy0wLjY0LDEuMDgyLTEsMi4zNDktMSwzLjY4NmMwLDIuNTQxLDEuMzAxLDQuNzc4LDMuMjg1LDYuMDk2Yy0xLjIxMS0wLjAzNy0yLjM1MS0wLjM3NC0zLjM0OS0wLjkxNGMwLDAuMDIyLDAsMC4wNTUsMCwwLjA4NmMwLDMuNTUxLDIuNTQ3LDYuNTA4LDUuOTIzLDcuMTgxYy0wLjYxNywwLjE2OS0xLjI2OSwwLjI2My0xLjk0MSwwLjI2M2MtMC40NzcsMC0wLjk0Mi0wLjA1NC0xLjM5Mi0wLjEzNWMwLjk0LDIuOTAyLDMuNjY3LDUuMDIzLDYuODk4LDUuMDg2Yy0yLjUyOCwxLjk2LTUuNzEyLDMuMTM0LTkuMTc0LDMuMTM0Yy0wLjU5OCwwLTEuMTgzLTAuMDM0LTEuNzYxLTAuMTA0QzkuMjY4LDM2Ljc4NiwxMy4xNTIsMzgsMTcuMzIxLDM4YzEzLjU4NSwwLDIxLjAxNy0xMS4xNTYsMjEuMDE3LTIwLjgzNGMwLTAuMzE3LTAuMDEtMC42MzMtMC4wMjUtMC45NDVDMzkuNzYzLDE1LjE5Nyw0MS4wMTMsMTMuOTA1LDQyLDEyLjQyOSI+PC9wYXRoPgo8L3N2Zz4="/></a>
    
                            </div>                        
                        </div>
                    </div>
                    <div class="container footer-bottom clearfix">
                        <div class="copyright">
                            &copy; copyright <strong><span><em><u>REAL ESTATE</u></em></span></strong>  All Rights Reserved
                        </div>
                        <div class="design">
                            <span>Designed by <b>Nitin</b> & <b>Varun</b> </span>
                        </div>

                    </div>

                </div>
        </div>   

        <div class="visme_d" data-title="form" data-url="dm0erpv7-form?fullPage=true" data-domain="forms" data-full-page="true" data-min-height="100vh" data-form-id="18863"></div>        <!-- Vendor JS Files -->
        <script src="{{url('layout/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('layout/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>


        <!--<script src="https://static-bundles.visme.co/forms/vismeforms-embed.js"></script>-->      
        <script src="https://cdn.lordicon.com/lordicon.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@3.5.4/dist/locomotive-scroll.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js" integrity="sha512-7eHRwcbYkK4d9g/6tD/mhkf++eoTHwpNM9woBxtPUBWm67zeAfFC+HrdoE2GanKeocly/VxeLvIqwvCdk7qScg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> 
        <script src="{{url('layout/js/script.js')}}" ></script>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>    
        

    </body>

</html>