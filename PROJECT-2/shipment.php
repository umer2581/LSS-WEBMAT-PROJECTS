<?php
include("dashboard/config/connection.php");
if(isset($_POST['submit'])){
    $state = $_POST['city'];
    $fname = $_POST['fname'];
    $cname = $_POST['cname'];
    $add1 = $_POST['address1'];
    $add2 = $_POST['address2'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $email = $_POST['semail'];
    $phoneno = $_POST['mnumber'];
    $sql="INSERT INTO shipfrom (`id`,`state`,`fname`,`cname`,`addl1`,`addl2`,`city`,`pincode`,`email`,`phoneno`) VALUES ('','$state','$fname','$cname','$add1','$add2','$city','$pincode','$email','$phoneno')";
    $result=mysqli_query($conn,$sql);
    echo '<script>alert("press continue")</script>';
}

?>
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
                <div class="shipment-outer">
                    <div class="shipment-inner">
                            <div class="shipment-heading">
                                <h1 class="ship-heading">Hello!! Where are you Shipping From...?</h1>
                            </div>
                            <div class="form-main">
                                <form name="frm1" method="post" action=""  enctype="multipart/formdata">
                                <div class="frow">
                                    <div class="ftop">State:- <red>*</red></div>
                                        <div class="fbottom">
                                        <select name="city" class="input bradius" required>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>

                                                </select>
                                        </div>
                                        </div>

                                        <div class="frow">
                                    <div class="ftop combine">Full Name or Company Name  <red>*</red></div><div class="ftop combine">Contact name<red>*</red></div>
                                        <div class="fbottom combine">
                                        <input type="text" class="inputhalf" name="fname" placeholder="Full Name" required >
                                        </div>
                                        <div class="fbottom combine">
                                        <input type="text" class="inputhalf" name="cname" placeholder="Contact Name" required >
                                        </div>
                                        </div>

                                        <div class="frow">
                                            <div class="ftop">Address Line1 <red>*</red></div>
                                                <div class="fbottom">
                                                    <input type="text" class="input" name="address1" placeholder="" required > </div>
                                        </div>

                                        <div class="frow">
                                            <div class="ftop">Address Line2 </div>
                                                <div class="fbottom"><input type="text" class="input" name="address2" placeholder="" >  </div>
                                        </div>

                                        <div class="frow">
                                    <div class="ftop combine">City/Town/Locality <red>*</red></div><div class="ftop combine2" name="city">Pincode<red>*</red></div>                                       <div class="fbottom combine">
                                        <input type="text" class="inputhalf" name="district" placeholder="" required >
                                        </div>
                                        <div class="fbottom combine2">
                                        <input type="text" class="inputhalf2" name="pincode" placeholder="" required >
                                        </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="frow">
                                    <div class="ftop combine">Email <red>*</red></div><div class="ftop combine">Phone NO.<red>*</red></div>
                                        <div class="fbottom combine">
                                        <input type="email" class="inputhalf" name="semail" placeholder="" required >
                                        </div>
                                        <div class="fbottom combine">
                                        <input type="text" class="inputhalf" name="mnumber" placeholder="" required >
                                        </div>
                                        </div>



                                        <input type="submit" name="submit" value="submit" class="form-btn"><a href="shipment2.php"><div class="form-btn">Continue<bt class="bi-chevron-double-right"></bt></div></a>
                                        <a href="shipment.php"><div class="form-btn-cancel">Cancel Shipment</div></a>
                                </form>
                            </div>
                    </div><!--shipment inner-->
                </div> <!--shipment-outer close -->
            <!-- Content Area Ends  -->

             <!-- FOOTER STARTS HERE  -->
             <?php
            include("footer.php");
            ?>
                <!-- FOOTER ENDS HERE  -->      </div>
</body>

</html>