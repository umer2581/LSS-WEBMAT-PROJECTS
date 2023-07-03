<html>

<head>
    <title> Project Courier </title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Outer Start -->
    <div class="outer">
        <div class="htop">
            <?php
            // htop will be here
            include("htop.php");
            ?>
        </div>
        <!-- Header Start -->
        <div class="header">
            <?php
            include("header.php");
            ?>
        </div>

        <!-- Menubar Start -->
        <div class="menubar" style="background-image: url('images/mback.avif');">

            <?php
            // Menus will be here
            include("menubar.php");
            ?>
            <!-- Menubar End -->

            <!-- Slider Start  -->

            <div class="slider">
                <div class="slides">
                    <!-- radio button start -->
                    <input type="radio" name="radio-btn" id="radio1" checked>
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">
                    <input type="radio" name="radio-btn" id="radio6">
                    <input type="radio" name="radio-btn" id="radio7">
                    <!-- radio button end -->
                    <!-- Slide images Start -->
                    <div class="slide first">
                        <img src="images/slideraj2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/slideraj8.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/slideraj3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/slideraj7.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/slideraj6.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/sliderj4.jpeg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/sliderj5.jpeg" alt="">
                    </div>
                    <!-- Slide images End -->
                    <!-- Automatic navigation start -->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <!-- <div class="auto-btn4"></div>
                        <div class="auto-btn6"></div>
                        <div class="auto-btn7"></div> -->
                        <!-- <div class="auto-btn8"></div> -->

                    </div>
                    <!-- Automatic navigation ends -->
                </div>
                <!-- Manual navigation Start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                    <label for="radio5" class="manual-btn"></label>
                    <label for="radio6" class="manual-btn"></label>
                    <label for="radio7" class="manual-btn"></label>
                    <!-- <label for="radio8" class="manual-btn"></label> -->

                </div>
                <!-- Manual navigation end -->
            </div>

            <!-- Slider Ends Here -->
            <script type="text/javascript">
                var counter = 2;
                setInterval(function () {
                    document.getElementById('radio' + counter).checked = true;
                    counter++;
                    if (counter > 7) {
                        counter = 1;
                    }
                }, 5000);
            </script>

            <!-- Content Area -->
            <div class="contentarea">
                <h3 class="h3">Our Gallery</h3><br>
                <div class="cnews">
                    <div class=cheading>
                        Latest News
                    </div>
                    <div class="cncont">
                        <marquee direction="up" scrolldelay="25">
                            <ul class="latest-news-ul">
                                <li>
                                    <nheading>AIRWAYS APP</nheading><br>
                                    We wish to inform you that we have launched android mobile app tool. The tool has
                                    got the features like Pincode Finder, Consignment tracking, Branch finder, Price &
                                    Weight calculator facility. App has also got the feature of online POD & DRS
                                    updation with capture of receiver sign on the handheld device's on real time.
                                    AIRWAYS App is available at Play Store for the users<img src="images/newso.gif">
                                </li>
                                <li>
                                    <nheading>6-May-2023
                                        OTP FRAUD AWARENESS PUBLIC NOTICE</nheading><br>
                                    Staying alert and aware is the simplest way to avoid OTP Fraud Airway courier India
                                    pvt ltd do not ask to share OTP/UPI pin. Any such request on phone will be treated
                                    has fraud call<img src="images/newso.gif">
                                </li>
                                <li>
                                    <nheading>NEW OFFICE OPEN IN BARODA AND MORADABAD AND BLR SR NAGAR (HUB OFFICE)
                                    </nheading><br>
                                    We are very pleased and proud to Announce that We have expanded our own one More HUB
                                    Office at Baroda and moradabad and BLR SR NAGAR (HUB OFFICE) Now our fine Service
                                    line is conveniently available to our downtown customers.
                                    <img src="images/newso.gif">
                                </li>
                                <li>hello<img src="images/newso.gif"></li>
                                <li>hello<img src="images/newso.gif"></li>
                                <li>hello<img src="images/newso.gif"></li>

                            </ul>
                        </marquee>
                    </div>
                </div>
                <break>

                    <div class="cimgs">
                        <div class=cheading>IMAGE GALLERY</div>
                        <!-- SLider2 starts Here -->
                        <div class="slider2">
                            <div class="slides2">
                                <!-- Radio button -->
                                <input type="radio" name="radio-btn2" id="radios1" checked>
                                <input type="radio" name="radio-btn2" id="radios2">
                                <input type="radio" name="radio-btn2" id="radios3">
                                <input type="radio" name="radio-btn2" id="radios4">
                                <!-- Radio btn ends -->
                                <!-- images start -->
                                <div class="slide2 first">
                                    <img src="images/s2aj1.jpeg" alt="">
                                </div>
                                <div class="slide2">
                                    <img src="images/s2aj2.webp" alt="">
                                </div>
                                <div class="slide2">
                                    <img src="images/s2aj3.jpeg" alt="">
                                </div>
                                <div class="slide2">
                                    <img src="images/s2aj4.jpeg" alt="">
                                </div>
                            </div>
                            <!-- images ends -->
                            <!-- Automatic navigation start -->
                            <div class="navigation-auto1">
                                <div class="auto-btns1"></div>
                                <div class="auto-btns2"></div>
                                <div class="auto-btns3"></div>
                                <div class="auto-btns4"></div>

                            </div>
                            <!-- Automatic navigation ends -->
                        </div>
                        <!-- Manual navigation Start -->
                        <div class="navigation-manual1">
                            <label for="radios1" class="manual-btns"></label>
                            <label for="radios2" class="manual-btns"></label>
                            <label for="radios3" class="manual-btns"></label>
                            <label for="radios4" class="manual-btns"></label>

                        </div>
                        <!-- Manual navigation end -->


                    </div>
                    <!-- SLider2 ends Here -->
                    <script type="text/javascript">
                        var counter = 1;
                        setInterval(function () {
                            document.getElementById('radios' + counter).checked = true;
                            counter++;
                            if (counter > 4) {
                                counter = 1;
                            }
                        }, 5000);
                    </script>
            </div>
            <div class="cvideo">
                <div class=cheading>OUR VIDEO</div>

            </div>
            <div class="rbtn">Read More</div>

            <div class="row">
                <div class="rleft">
                    <p>OUR SERVICES
                    <h3>WE OFFER QUICK & POWERFUL SOLUTION FOR AIRWAYS COURIER</h3>
                    At Airways Courier, we does not limit our duties to the mere, "you pay me, I work" policy. Our
                    concern for the customer takes us beyond the traditional ways of handling our business.At Airways
                    Courier, we does not limit our duties to the mere, "you pay me, I work" policy. Our
                    concern for the customer takes us beyond the traditional ways of handling our business.
                </div>
                </p>
                <a href="services.php">
                    <div class="rbtn po">Read More</div>
                </a>
                <div class="rright">
                    <div class="r4" id="box1" style="background-image: url('images/shipbackground.jpeg');">
                        <div>
                            <rbox1>OCEAN FRIGHT</rbox1><br>
                        </div>
                        <rbox1con>Ocean Fright is extended to us which ensures safe and timely dispatch of loads.
                        </rbox1con>
                    </div>
                    <div class="r4" id="box1" style="background-image: url('images/plainback.webp');">
                        <div>
                            <rbox1>AIR FRIGHT</rbox1><br>
                        </div>
                        <rbox1con>Air Fright guarantees upliftment on priority by the fastest and first available mode.
                        </rbox1con>
                    </div>
                    <div class="r4" id="box1" style="background-image: url('images/trainback.webp');">
                        <div>
                            <rbox1>ROAD FRIGHT</rbox1><br>
                        </div>
                        <rbox1con>Our surface operations, through dedicated vehicles cover most parts of India.
                        </rbox1con>
                    </div>
                    <div class="r4" id="box1" style="background-image: url('images/clockback.jpeg');">
                        <div>
                            <rbox1>EXPEDITED SERVICES</rbox1><br>
                        </div>
                        <rbox1con>Our Valuable clients & Customer, we give delivery to any part of the country, any size
                            & shape.</rbox1con>
                    </div>
                </div>
            </div>

        </div>
        <!-- About Section -->
        <div class="aboutsec">

        </div>
    </div>



    </div>

    <div class="footer" style="background-image: url('images/fback3.jpg');">
        <?php
        //   Footer will be here
        include("footer.php");
        ?>
    </div>


    </div> <!--Outer end-->
</body>

</html>