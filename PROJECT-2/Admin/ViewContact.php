<?php
    include("config/session.php");
include("config/connection.php");

// code for single delete

if(isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $sql1 = "DELETE FROM `contactus` WHERE `id`=$delid";
    $stmt = mysqli_query($conn,$sql1);

    // Redirect after successful delete
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>

<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="outer">
        <!-- header is here -->
        <?php include("header.php"); ?>
        <div class="container">
            <!-- cleft is here -->
            <?php include("cleft.php"); ?>
            <div class="cright">
               
                <div class="table">
                    <div class="table-row">
                        <div class="table-header">Title</div>
                        <div class="table-header">Phone</div>
                        <div class="table-header">Email</div>
                        <div class="table-header">Address</div>
                        <div class="table-header" style="width : 100px;">Action</div>
                    </div>
                    
                    <?php
                    // Select query
                    $sql = "SELECT * FROM contactus";
                    $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="table-row">';
                        echo '<div class="table-cell">'. $row['title'].'</div>';
                        echo '<div class="table-cell">'. $row['phone'].'</div>';
                        echo '<div class="table-cell">'. $row['email'].'</div>';
                        echo '<div class="table-cell address">'. $row['address'].'</div>';
                        echo '<div class="table-cell action-buttons">';
                        echo '<a href="ContactUs.php?uid='.$row['id'].'" style="text-decoration: none;"><button class="t-button">Update</button></a>';
                        echo '<a href="ViewContact.php?delid='.$row['id'].'" style="text-decoration: none;"><button class="t-button">Delete</button></a></div>';
                        echo '</div>';
                        
                    }

                    mysqli_close($conn);
                    ?>
                </div>

                <!-- Rest of your admin panel content goes here -->
        
            </div>
        </div>
    </div>
</body>
</html>
