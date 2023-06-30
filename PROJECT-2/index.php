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

            </div>

            <!-- Content Area -->
            <div class="contentarea">
                <h3 class="h3">Our Gallery</h3><br>
                <div class="cnews"></div>

                <div class="cimgs"></div>
                <div class="cvideo"></div>
                <div class="rbtn">Read More</div>

                <div class="row">
                    <div class="rleft">
                        <p>OUR SERVICES
                        <h3>WE OFFER QUICK & POWERFUL SOLUTION FOR AIRWAYS COURIER</h3>
                        At Airways Courier, we does not limit our duties to the mere, "you pay me, I work" policy. Our
                        concern for the customer takes us beyond the traditional ways of handling our business.
                    </div>
                    </p>
                    <div class="rbtn po">Read More</div>
                    <div class="rright">
                        <div class="r4" id="box1">ofight</div>
                        <div class="r4" id="box1">ofright</div>
                        <div class="r4" id="box1">oroad</div>
                        <div class="r4" id="box1">eservice</div>
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