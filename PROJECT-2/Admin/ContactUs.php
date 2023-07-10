<?php
include("config/connection.php");

//select query for update

if (isset($_GET['uid'])) {
    $uid = $_GET['uid'];
    $selquery = "SELECT * FROM `contactus` WHERE `id` = $uid";
    $result1 = mysqli_query($conn, $selquery);
    $row1 = mysqli_fetch_assoc($result1);
}

//update query after select

if (isset($_POST['Update'])) {
    $title = $_POST['title'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['textbox'];

    $upquery = "UPDATE `contactus` SET `title` = '$title', `phone` = '$phone', `email` = '$email', `address` = '$address' WHERE `id` = $uid";
    mysqli_query($conn, $upquery);
    header("Location: ViewContact.php");
    exit();
}

// Insert query
if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['textbox'];

    // Prepared statement to prevent SQL injection
    $sql1 = "INSERT INTO contactus (title, phone, email, `address`) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($stmt, "ssss", $title, $phone, $email, $address);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    mysqli_close($conn);

    // Redirect after successful insert
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
            <!-- cleft if here -->
           <?php include("cleft.php"); ?>
            <div class="cright">
             <h2>Add new contact here :-</h3>
             <div class="contact-fields">
                <form method="post">
                <div class="contactrow"><input type="text" name="title" placeholder="title" value="<?php if(isset($_GET['uid'])) echo $row1['title']; ?>" required></div>
<div class="contactrow"><input type="text" name="phone" placeholder="phone" value="<?php if(isset($_GET['uid'])) echo $row1['phone']; ?>" required></div>
<div class="contactrow"><input type="text" name="email" placeholder="email" value="<?php if(isset($_GET['uid'])) echo $row1['email']; ?>" required></div>
<textarea name="textbox" class="contactrow-textarea" placeholder="address" required><?php if(isset($_GET['uid'])) echo $row1['address']; ?></textarea>
<div><input type="submit" name="<?php if(isset($_GET['uid'])){echo "Update";}else { echo "submit";}?>" value="<?php if(isset($_GET['uid'])){echo "Update";}else { echo "Add";}?>" class="contact-sub" required></div>

                </form>
             </div>
            </div>
        </div>
        <!-- Rest of your admin panel content goes here -->
        
    </div>
</body>
</html>
