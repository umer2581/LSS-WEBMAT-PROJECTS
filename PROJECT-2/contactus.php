<html>
    <head>
        <title> Contact US</title>
        <link href="css/style.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">
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
                        include("slidermain.php");
                        ?>
    
                    <!-- SLider ends Here -->
                     
                        <!-- Content Area -->
                        <div class="contactmain">
    <h1 style="padding: 20px 30px 0 30px; box-sizing: border-box; font-size: 40px; color: blue; font-family: 'Caprasimo', cursive;">Contact Us</h1>
    <h5 style="padding: 0px 30px; box-sizing: border-box; font-size: 20px; color: blue; font-family: 'Roboto', cursive;">Telephone services are available from Monday to Saturday between 09:30 am & 06:30 pm</h5>
    <div class="contactusouter">
        <?php
        include("admin/config/connection.php");
        $selectQuery = "SELECT * FROM contactus";
        $result = mysqli_query($conn, $selectQuery);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="contactbox">
            <div class="contacthead"><?php echo $row['title']; ?></div>
            <div class="caddress">
                <div class="bi-geo-alt-fill boota pa"></div>
                <div class="caddright"><cs>Address:</cs> <?php echo $row['address']; ?></div>
            </div>
            <div class="ctelephone">
                <div class="bi-telephone-fill boott pt"></div>
                <div class="ctellright"><cs>Phone:</cs> <?php echo $row['phone']; ?></div>
            </div>
            <div class="cemail">
                <div class="bi-envelope-fill boote pe"></div>
                <div class="ceright"><cs>Email:</cs> <?php echo $row['email']; ?></div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

                        <!-- Content area ends -->

                    
      <?php
    //   Footer will be here
    include("footer.php");
    ?>
    
            </div>
    </body>

</html>