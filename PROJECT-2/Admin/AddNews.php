<?php
include("config/connection.php");

if (isset($_POST['submit'])) {

    // Get the form inputs
    $nheading = $_POST['nheading'];
    $news = $_POST['news'];
    $visible = $_POST['visible'];
    $new = isset($_POST['new']) ? $_POST['new'] : 0;

    // Insert query
    $insertQuery = "INSERT INTO `news` (`nheading`, `text`, `visible`, `new`) VALUES ('$nheading', '$news', '$visible', '$new')";
    
    // Execute the insert query
    if (mysqli_query($conn, $insertQuery)) {
        // Insertion successful
            // Redirect after successful insert
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;}
}


// select query for update
if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $selquery = "SELECT * FROM `news` WHERE `id` = $uid";
    $result = mysqli_query($conn, $selquery);
    $row = mysqli_fetch_assoc($result);
}

//update query
if (isset($_POST['Update'])) {

    $nheading = $_POST['nheading'];
    $news = $_POST['news'];
    $visible = $_POST['visible'];
    $new = isset($_POST['new']) ? $_POST['new'] : 0;

    $upquery = "UPDATE `news` SET `nheading` = '$nheading', `text` = '$news', `visible` = '$visible', `new` = '$new' WHERE `id` = $uid";
    mysqli_query($conn, $upquery);
    header("Location: ViewNews.php");
    exit();
}


mysqli_close($conn); // Close the database connection
?>

<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function focus(){
            var x= document.getElementById("station");
            x = x.focus;
        }
    </script> 
</head>
<body>
    <div class="outer">
        <!-- header is here -->
        <?php include("header.php"); ?>
        <div class="container">
            <!-- cleft if here -->
           <?php include("cleft.php"); ?>
            <div class="cright">
            <div class="news-fields">
            <form  method="post">
    <div class="nrow"><input id="insertnews" type="text" name="nheading" placeholder="heading" value="<?php if(isset($_GET['uid'])) echo $row['nheading']; ?>" required></div>
    <textarea name="news" class="ntextarea" placeholder="summary" required><?php if(isset($_GET['uid'])) echo $row['text']; ?></textarea>
    <div class="nrow1">
        hide: <input type="radio" name="visible" value="0" checked>
        show: <input type="radio" name="visible" value="1" <?php if(isset($_GET['uid']) && $row['visible'] == 1) echo 'checked'; ?>>
        <input type="checkbox" name="new" value="1" <?php if(isset($_GET['uid']) && $row['new'] == 0){echo '';}else { echo 'checked';} ?>>
    </div>
    <div>
        <input type="submit" name="<?php if(isset($_GET['uid'])){ echo "Update"; } else { echo "submit"; } ?>" value="<?php if(isset($_GET['uid'])){ echo "Update"; } else { echo "Add"; } ?>" class="contact-sub"  onclick="focus()">
    </div>
</form>

             </div>
            </div>
        </div>
        <!-- Rest of your admin panel content goes here -->
        
    </div>
</body>
</html>
