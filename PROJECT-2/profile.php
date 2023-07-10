<html>

<head>
    <title> Profile</title>
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
                <img src="images/pslider.jpg" height=432px width="1200px" style="background-size: cover;">

            </div>
            <!-- Content Area -->
            <div class="pcont"
                style="background-image: url(images/service.jpg); height: 100%; width: 100%; background-size:cover;">
                <div class="tcont">
                    <h2> Profile</h2>
                    <div class="table">
                        <table cellpadding="15">
                        <?php
include("admin/config/connection.php");
$selectQuery = "SELECT * FROM aboutus1";
$result = mysqli_query($conn, $selectQuery);
?>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $row['title']; ?></td>
        <td><?php echo $row['text']; ?></td>
    </tr>
    <?php } ?>

                        </table>
                        


                            <?php
include("admin/config/connection.php");
$selectQuery = "SELECT * FROM aboutus2";
$result = mysqli_query($conn, $selectQuery);
?>

<?php while ($row = mysqli_fetch_assoc($result)) { ?>
    <?php echo $row['about'];?>
    <h5><?php echo $row['lihead']; ?></h5>
<?php } ?>

                        <ol>
                        <?php
// Assuming you have already included the connection file (config/connection.php) in this file

// Select query to fetch data from the about3 table
$selectQuery3 = "SELECT * FROM about3";
$result3 = mysqli_query($conn, $selectQuery3);

?>

<!-- Your HTML code -->
    <?php
    // Loop through the result set and display the list items
    while ($row3 = mysqli_fetch_assoc($result3)) {
        $listItem = $row3['list'];
        echo '<li>' . $listItem . '</li>';
    }
    ?>

<!-- Continue with the rest of your HTML code -->

                        </ol>

                    </div>

                </div>
            </div>




             <!-- FOOTER STARTS HERE  -->
             <?php
            include("footer.php");
            ?>
                <!-- FOOTER ENDS HERE  -->      </div>
</body>

</html>