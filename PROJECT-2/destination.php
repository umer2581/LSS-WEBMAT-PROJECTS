<?php
include('admin/config/connection.php');
$sql = "select * from destination";
$result = mysqli_query($conn, $sql);
?>
<html>

<head>
    <title> Services</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    <!-- Top-Header Start -->
    <div class="outer">
        <div class="htop">
            <?php
            // htop will be here
            include("htop.php");
            ?>
        </div>
        <!-- Top-Header End -->

        <!-- Header Start -->
        <div class="header">
      <?php
      include("header.php");
      ?>
    </div>

        <!-- Menubar Start -->
        <div class="menubar">

            <?php
            // Menus will be here
            include("menubar.php");
            ?>
            <!-- Menubar End -->

            <!-- Slider Start  -->
            <div class="slider">
                <img src="images/sservice.jpg" height=432px width="1200px" style="background-size: cover;">

            </div>
            <!-- Content Area -->
            <div class="scontainer-destination">
                <div class="trow">
                    <div class="th1"> STATION </div>
                    <div class="th2">TRANSIT TIME(HRS)</div>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $STATION = $row["station"];
                        $TRANSIT = $row["transit-time"];
                        echo "<div class='tleft'>$STATION</div><div class='tright'>$TRANSIT</div>";
                    }
                    ?>
                </div>


            </div>




            <div class="footer sfmargin" style="background-image: url('images/fback3.jpg');">
                <div class="fcontainer">
                    <div class="fcontact">
                        <div class="cbtn">Contact US</div>
                        <div class="fleft">
                            <h4>About Us</h4>
                            <p> AIRWAYS COURIER is one of the largest Indian company in the Express industry. AIRWAYS
                                COURIER takes the credit of pioneering the franchisee concept for the courier industry
                                in India, and today has the largest franchisee network</p>
                            <u class="bi-facebook"> </u>
                            <u class="bi-twitter"> </u>
                            <u class="bi-youtube"> </u>
                            <u class="bi-phone-fill u1"> </u>
                        </div>
                        <div class="fright">
                            <div class="frcat">
                                <h4>Popular Categories</h4>
                                <div class="pmenus">Destination</div>
                                <div class="pmenus">Network</div>
                                <div class="pmenus">PinCode Finder</div>
                                <div class="pmenus">Gallery</div>
                                <div class="pmenus">Login</div>
                            </div>
                            <div class="frcont">
                                <h4>Contact Us</h4>
                                <p>
                                    <red>BANGALORE HEAD OFFICE:</red> COURIER INDIA PRIVATE LIMITED 37/11, Airways house
                                    , 2nd cross, Meanue Avenue Road Bangalore- 560042
                                    <br>
                                    <red>PHONE:</red> 080-2546879515 Till 100 Lines<br>
                                    <red>EMAIL:</red> customercare@courier.co.In
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
</body>

</html>