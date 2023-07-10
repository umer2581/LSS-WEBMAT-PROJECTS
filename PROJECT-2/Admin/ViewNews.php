<?php
 include("config/connection.php");
// select query for update
 if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $selquery = "SELECT * FROM `news` WHERE `id` = $uid";
    $result = mysqli_query($conn, $selquery);
    $row = mysqli_fetch_assoc($result);
}
// Check if the 'delid' parameter is set in the URL
if (isset($_GET['delid'])) {
    $delid = $_GET['delid'];

    // Delete query
    $deleteQuery = "DELETE FROM `news` WHERE `id` = $delid";

    // Execute the delete query
    if (mysqli_query($conn, $deleteQuery)) {
        // Deletion successful
        // Redirect after successful delete
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
    }
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
            <!-- cleft if here -->
           <?php include("cleft.php"); ?>
            <div class="cright">
            <div class="table">
    <div class="table-row">
        <div class="table-header">Heading</div>
        <div class="table-header">Summary</div>
        <div class="table-header">Visible</div>
        <div class="table-header">New</div>
        <div class="table-header" style="width : 100px;">Action</div>
</div>
    <?php

  
// Fetch data from the database
$sql = "SELECT * FROM `news`";
$result = mysqli_query($conn, $sql);

// Check if any rows are returned
if (mysqli_num_rows($result) > 0) {
    // Loop through the rows and display the data in the table
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="table-row">';
        echo '<div class="table-cell">' . $row['nheading'] . '</div>';
        echo '<div class="table-cell">' . $row['text'] . '</div>';
        echo '<div class="table-cell">' . $row['visible'] . '</div>';
        echo '<div class="table-cell">' . $row['new'] . '</div>';
        echo '<div class="table-cell action-buttons">';
        echo '<a href="AddNews.php?uid='.$row['id'].'" style="text-decoration: none;"><button class="t-button">Update</button></a>';
        echo '<a href="ViewNews.php?delid='.$row['id'] . '">
        <button class="t-button" style="text-decoration = none;">Delete</button></a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    // No rows found
    echo 'No data found.';
}

mysqli_close($conn); // Close the database connection
?>

    <!-- End of PHP code -->
</div>
            </div>
        </div>
        <!-- Rest of your admin panel content goes here -->
        
    </div>
</body>
</html>
