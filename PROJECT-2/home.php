
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
            <div class="menubar" >
                
                <?php
                // Menus will be here
                include("menubar.php");
                ?>
            <!-- Menubar End -->

            <!-- Slider Start  -->
            <?php
                        // Slider will be here
                        include("sliderquerytrial.php");
                        ?>
        

        <!-- Slider Ends Here -->
        

            <!-- Content Area -->
            <div class="contentarea">
                    <h3 class="h3">Our Gallery</h3><br>
                <div class="cnews">
                    <div class=cheading>
                       Latest News
                    </div>
                    <div class="cncont">
                    <marquee direction="up" scrolldelay="10" onmouseover=this.stop(); onmouseout="this.start();">
                            <?php
// Assuming you have already included the connection file (config/connection.php) in this file

// Select query to fetch data from the news table
include("admin/config/connection.php");
$selectQueryNews = "SELECT * FROM news";
$resultNews = mysqli_query($conn, $selectQueryNews);

?>

<!-- Your HTML code -->

<ul class="latest-news-ul">
    <?php
    // Loop through the result set and display the news content
    while ($rowNews = mysqli_fetch_assoc($resultNews)) {
        $nheading = $rowNews['nheading'];
        $newstext = $rowNews['text'];
        $newsvisible = $rowNews['visible'];
        $new = $rowNews['new'];
        if($newsvisible == 1){
        echo '<li><nheading>' . $nheading.'</nheading><br>'.$newstext;
        if($new == 1){
            echo '<img src="images/newso.gif">';
        }
        echo '</li><br>';
    }
    }
    ?>
</ul>
<hr>

                        </marquee>   </div>
                </div> <break>

                <div class="cimgs">
                <div class=cheading>IMAGE GALLERY</div>
                    <!-- SLider2 starts Here -->
                    <?php
                        // Slider will be here
                        include("sliderchat.php");
                        ?>
                </div>
                <div class="cvideo">
                <div class=cheading>OUR VIDEO</div>
                <div class="civideo">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/PQZgMz_tsO8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    </div> 
                </div>
                <div class="rbtn">Read More</div>

                <div class="row">
                    <div class="rleft">
                        <p>OUR SERVICES
                        <h3>WE OFFER QUICK & POWERFUL SOLUTION FOR MBUS COURIER</h3>
                        At MBUS COURIER, we does not limit our duties to the mere, "you pay me, I work" policy. Our
                        concern for the customer takes us beyond the traditional ways of handling our business.At MBUS COURIER, we does not limit our duties to the mere, "you pay me, I work" policy. Our
                        concern for the customer takes us beyond the traditional ways of handling our business.
                    </div>
                    </p>
                    <a href="services.php"><div class="rbtn po">Read More</div></a>
                    <div class="rright">
                        <div class="r4" id="box1" style="background-image: url('images/shipbackground.jpeg');">
                        <div><rbox1>OCEAN FRIGHT</rbox1><br></div>
                        <rbox1con>Ocean Fright is extended to us which ensures safe and timely dispatch of loads.</rbox1con></div>
                        <div class="r4" id="box1" style="background-image: url('images/plainback.webp');">
                        <div><rbox1>AIR FRIGHT</rbox1><br></div>
                        <rbox1con>Air Fright guarantees upliftment on priority by the fastest and first available mode.</rbox1con></div>
                        <div class="r4" id="box1" style="background-image: url('images/trainback.webp');">
                        <div><rbox1>ROAD FRIGHT</rbox1><br></div>
                        <rbox1con>Our surface operations, through dedicated vehicles cover most parts of India.</rbox1con></div>
                        <div class="r4" id="box1" style="background-image: url('images/clockback.jpeg');" >
                        <div><rbox1>EXPEDITED SERVICES</rbox1><br></div>
                        <rbox1con>Our Valuable clients & Customer, we give delivery to any part of the country, any size & shape.</rbox1con></div>
                    </div>
                </div>

            </div>
            <!-- About Section -->
            <div class="aboutsec">
                <div class="aboutleft">
                <div class="imgabout" style="background-image: url('images/aboutsec5.png');">    
                </div>
                <div class="aboutright">
                    <div class="artop">
                        <div class="artopcontent">
                         <p class="artp1"> LITTLE ABOUT US</p>
                            <h1 class="arh1">ABOUT MBUS COURIER</h1>
                            <span class="bline"></span>
                            <p class="artp2">MBUS COURIER is one of the largest Indian company in the Express industry.</p>

                        </div>
                    </div>
                    <div class="arbottom">
                        <div class="floatingbox">MBUS COURIER takes the credit of pioneering the franchisee concept for the courier industry in India, and today has the largest franchisee network.
                         </div>
                         <div class="readmore">Read More</div>
                    </div>
                </div>
            </div>
        </div>



    </div>

    
      <?php
    //   Footer will be here
    include("footer.php");
    ?>
     

    </div> <!--Outer end-->
</body>

</html>