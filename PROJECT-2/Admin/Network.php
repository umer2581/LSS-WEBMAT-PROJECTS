<?php
include("config/connection.php");

// select query

$sql = "SELECT * FROM `network`";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

$nethead = $row['nethead'];
$netpara = $row['netpara'];

mysqli_free_result($result);

//update query
if(isset($_POST['update'])){
    $nethead = $_POST['nethead'];
    $netpara = $_POST['netpara'];

    $sql = "UPDATE `network` SET `nethead` = '$nethead', `netpara` = '$netpara' WHERE `network`.`id` = 1";
    mysqli_query($conn,$sql);
    header("location: Network.php");
    exit();
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
                <h3>Network :-</h3>
            <div class="aboutf">
                    <form name="update" method="post">
                    <div class="nrow"><input type="text" name="nethead" placeholder="Heading" value="<?php echo $nethead?>"></div>
<textarea name="netpara" class="ntextarea" placeholder="paragraph"><?php echo $netpara;?></textarea>
                    <div><input type="submit" name="update" value="Update" class="contact-sub"></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>