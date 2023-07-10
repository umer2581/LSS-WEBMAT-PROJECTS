<?php
include("config/connection.php");

// select query

$sql = "SELECT * FROM `ser1`";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$serhead = $row['serhead'];
$serpara = $row['serpara'];
$lihead = $row['lihead'];

mysqli_free_result($result);

//update query
if(isset($_POST['update'])){
    $serhead = $_POST['serhead'];
    $serpara = $_POST['serpara'];
    $lihead = $_POST['lihead'];
    $sql = "UPDATE `ser1` SET `serhead` = '$serhead', `serpara` = '$serpara', `lihead` = '$lihead' WHERE `ser1`.`id` = 1";
    mysqli_query($conn,$sql);
    header("location: Services.php");
    exit();
}

if(isset($_POST['sub2'])){
    $lists = $_POST['lists'];

    //insert query
    $sql = "INSERT INTO `ser2` (`id`, `lists`) VALUES ('', '$lists')";
    mysqli_query($conn,$sql);

}

//update for list
if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    // select query
    $sql = "SELECT * FROM `ser2` WHERE `id` = '$uid'";
    $result = mysqli_query($conn,$sql);
    $row3 = mysqli_fetch_assoc($result);
    $uplist = $row3['lists'];
    mysqli_free_result($result);
    // now updating
    if(isset($_POST['updt2'])){
        $uplist = $_POST['lists'];
    $sql = "UPDATE `ser2` SET `lists` = '$uplist' WHERE `ser2`.`id` = '$uid'";
    mysqli_query($conn,$sql);
    header("location: Services.php");
    exit();
    }
}

if(isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $sql = "DELETE FROM `ser2` WHERE `ser2`.`id` = '$delid'";
    mysqli_query($conn,$sql);
    echo '<script>alert("successfully deleted")</script>';
    header("location: Services.php");
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
                <h1>(services)</h1>
                <div class="nrow">
                    <a href="#insert"><button class="button">For insert</button></a>
                    <a href="#update"><button class="button">For update</button></a>
                    <a href="#view"><button class="button">For view</button></a>
                    <hr>
                </div>
                <h3 id="insert"> To Add Why us list :-</h3>
                <form name="two" method="post">
                    <div class="aboutf">
                        <div class="nrow">
                            <input type="text" name="lists" placeholder="lists" value="<?php echo isset($_GET['uid']) ? $uplist : ''; ?>">
                        </div>
                        <div>
                            <input type="submit" name="<?php echo isset($_GET['uid']) ? 'updt2' : 'sub2'; ?>" value="<?php echo isset($_GET['uid']) ? 'Update' : 'Add'; ?>" class="contact-sub">
                        </div>
                    </div>
                    <hr>
                    <h3 id="update">To Update :-</h3>
                    <div class="aboutf">
                                <form name="update" method="post">
                                    <p style="color:white;">service head and Description</p>
                                <div class="nrow"><input type="text" name="serhead" placeholder="Heading" value="<?php echo $serhead?>"></div>
            <textarea name="serpara" class="ntextarea" placeholder="paragraph"><?php echo $serpara;?></textarea>
            <p style="color:white;">service list heading</p>
            <div class="nrow"><input type="text" name="lihead" placeholder="List Heading" value="<?php echo $lihead?>"></div>
                                <div><input type="submit" name="update" value="Update" class="contact-sub"></div>
                            </form>
                        </div>

                </form>
                <hr>
                <h3 id="view">List view :-</h3>
                
     <?php
// Fetch all the added lists from the database for form two
$selectQuery2 = "SELECT * FROM ser2";
$result2 = mysqli_query($conn, $selectQuery2);
    echo '<div class="table">';
    echo '<div class="table-row">';
    echo '<div class="table-header">List</div>';
    echo '<div class="table-header" style="width : 100px;">Action</div>';
    echo '</div>';

    // Loop through the rows and display the data for form two
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $list = $row2['lists'];
        $id = $row2['id'];

        echo '<div class="table-row">';
        echo '<div class="table-cell">' . $list . '</div>';
        echo '<div class="table-cell action-buttons">';
        echo '<a href="Services.php?uid=' . $id . '"><button class="t-button" style="text-decoration: none;">Update</button></a>';
        echo '<a href="Services.php?delid=' . $id . '"><button class="t-button" style="text-decoration: none;">Delete</button></a>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';

// Free the result set
mysqli_free_result($result2);
?>

        </div>
        <!-- Rest of your admin panel content goes here -->
        
    </div>
</body>
</html>
