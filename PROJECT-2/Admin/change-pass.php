<?php
include("config/session.php");
include("config/connection.php");
$msg="";
if(isset($_POST['submit']))
{
    $op=$_POST['op'];
    $np=$_POST['np'];
    $cp=$_POST['cp'];
    $admin=$_SESSION['Admin'];
    $sql="SELECT * FROM loginadmin where id=$admin";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
    if($row['password']!=$op)
    {
        $msg="Old Password incorrect";
    }else{
        if($np!=$cp){
            $msg="confirm password incorrect";
        }else{
            $sqlupd="UPDATE loginadmin SET `password`=$np WHERE id=$admin";
            mysqli_query($conn,$sqlupd);
            $msg="Password Changed";
        }
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
                <div class="contact-fields">
                <form method="post">
                <!-- <div class="contactrow"><input type="text" name="username" placeholder="username" value="" required></div> -->
                <div class="contactrow"><input type="text" name="op" placeholder="old password" value="" required></div>
                <div class="contactrow"><input type="text" name="np" placeholder="new password" value="" required></div>
                <div class="contactrow"><input type="text" name="cp" placeholder="confirm password" value="" required></div>
                <div><input type="submit" name="submit" value="change" class="contact-sub"></div>
                    </form>
            </div>
        </div>
        <!-- Rest of your admin panel content goes here -->
        
    </div>
</body>
</html>