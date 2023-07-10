<?php 
include("admin/config/connection.php");
$sql = "SELECT * FROM `ser1`";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$serhead = $row['serhead'];
$serpara = $row['serpara'];
$lihead = $row['lihead'];

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
            <div class="scontainer"
                style="background-image: url(images/sback3.jpg); height: 100%; width: 100%; background-size:cover;">
                <div class="sleft">
                    <h5><?php echo $serhead ;?></h5>
                    <?php echo $serpara; ?>
                    <h5><?php echo $lihead;?></h5>
                    <ol>
                    <?php
// Assuming you have already included the connection file (config/connection.php) in this file

// Select query to fetch data from the about3 table
include("admin/config/connection.php");
$selectQuery4 = "SELECT * FROM ser2";
$result3 = mysqli_query($conn, $selectQuery4);

?>

<!-- Your HTML code -->
    <?php
    // Loop through the result set and display the list items
    while ($row3 = mysqli_fetch_assoc($result3)) {
        $listItem = $row3['lists'];
        echo '<li>' . $listItem . '</li>';
    }
    ?>
                    </ol>


                </div>
                <div class="sright"><img src="images/service2.png" height="50%" width="100%"></div>

            </div>



            <!-- FOOTER STARTS HERE  -->
            <?php
            include("footer.php");
            ?>
                <!-- FOOTER ENDS HERE  -->
            </div>
</body>

</html>
