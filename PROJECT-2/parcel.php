<?php
include("dashboard/config/connection.php");
if(isset($_POST['submit'])){
    $packtype = $_POST['city'];
    $wtpps = $_POST['cname'];
    $length = $_POST['mnumber1'];
    $height = $_POST['mnumber2'];
    $width = $_POST['mnumber3'];
    $tpv = $_POST['mnumber4'];
    $tpw = $_POST['tweight'];
    $sql="INSERT INTO parcel (`id`,`packtype`,`wtpps`,`length`,`height`,`width`,`tpv`,`tpw`) VALUES ('','$packtype','$wtpps','$length','$height','$width','$tpv','$tpw')";
    $result=mysqli_query($conn,$sql);
    echo '<script>alert("Your Query Submitted Successfully")</script>';
    echo "<script>window.location = 'ordersummary.php'</script>";
    $sql1 = "INSERT INTO loopcount (`id`) VALUES ('')";
    $result1 = mysqli_query($conn,$sql1);
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
                    <div class="shipment-inner-parcel">
                            <div class="shipment-heading-parcel">
                                <h1 class="ship-heading">What kind of Packaging are you Using...?</h1>
                            </div>
                            <div class="form-main-parcel">
                                <form name="frmp" method="POST"  enctype="multipart/formdata">
                                    <div class="parcel-heading-box">
                                        <div class="parcel-heading">
                                        <div class="parcel-boot"><pb class="bi-box-seam"></pb></div> 
                                        <div class="pheading-text"> Parcel</div>
                                        </div>
                                    </div>

                                    <div class="frow">
                                    <div class="ftop combine">Packaging Type<red>*</red></div><div class="ftop combine">Weight per Parcel<red>*</red></div>
                                        <div class="fbottom combine">
                                        <select name="city" class="input bradius combine">
                                            <option value="1">My Packaging</option checked>
                                            <option value="2">25 kg Box</option>
                                            <option value="3">10 kg Box</option>
                                            <option value="4">Wooden Crate</option>
                                            <option value="5">Wooden Container</option>
                                            <option value="6">Plastic Crate</option>
                                            <option value="7">Paper-Foil Laminate</option>
                                            <option value="8">Glass Containers</option>
                                            <option value="9">Intermediate Bulk Containers</option>
                                            </select>
                                        </div>
                                        <div class="fbottom combine">
                                        <input type="text" class="inputhalf" name="cname" placeholder="Contact Name" required >
                                        </div>
                                        </div>

                                        <div class="ftop" style="margin-bottom:15px; margin-top:10px; width:220px; height:60px;">
                                        <input type="checkbox" class="checkboxp" name="c1" value="1" > Unpackaged or crated (not fully boxed in cardboard)
                                     </div>


                                        <div class="parcel-container">
                                            <div class="parcel-container-content">
                                                    <div class="prow">
                                                        <div class="ptop">
                                                        Length <red>*</red>
                                                        </div>
                                                        <div class="pbottom">
                                                        <input type="text" class="inputhalf" name="mnumber1" placeholder="" required style="margin-bottom:10px;"> cm
                                                        </div>
                                                    </div>

                                                    <div class="prow">
                                                        <div class="ptop">
                                                        Height <red>*</red>
                                                        </div>
                                                        <div class="pbottom">
                                                        <input type="text" class="inputhalf" name="mnumber2" placeholder="" required style="margin-bottom:10px;"> cm
                                                        </div>
                                                    </div>

                                                    <div class="prow">
                                                        <div class="ptop">
                                                        Width <red>*</red>
                                                        </div>
                                                        <div class="pbottom">
                                                        <input type="text" class="inputhalf" name="mnumber3" placeholder="" required style="margin-bottom:10px;"> cm
                                                        </div>
                                                    </div>

                                            </div> 
                                            <div class="parcel-container-img">
                                                <img src="images/parcelbox.svg" height="80%" width="80%" class="pimg-set">
                                            </div>
                                        <div class="message">
                                            <div><m class="bi-patch-exclamation"> </m></div>
                                            <div class="message-content"> Shipping Tip: Parcel weight and dimensions directly impact your cost.</div>
                                        </div>

                                            </div>


                                            <div class="cost">
                                                <div class="cost-content">
                                                Loss and Damage Protection (Declared Value)
                                                We've got you covered up to Rs1000 at no charge. Is this parcel worth more than Rs1000? Purchase additional protection against loss or damage by entering the total amount of protection desired.

                                                </div>
                                                <div class="prow">
                                                        <div class="ptop">
                                                        Total Parcel Value <red>*</red>
                                                        </div>
                                                        <div class="pbottom">
                                                        <input type="text" class="inputhalf" name="mnumber4" placeholder="" required style="margin-bottom:10px;"> cm
                                                        </div>
                                                    </div>

                                                    <div class="frow" style="margin-top:10px;">
                                    <div class="ftop combine">Total Packed/Unpacked Items<red>*</red></div><div class="ftop combine">Total Weight <red>*</red></div>
                                        <div class="fbottom combine"><input type="text" class="inputhalf" name="totalpacked" placeholder="Quantity in no." required >
                                        </div><input type="text" class="inputhalf" name="tweight" placeholder="" required >kg
                                        </div> 
                                        <div class="ftop border" style="margin-bottom:15px; margin-top:10px; width:820px; height:60px; padding-top:10px; box-sizing:border-box;">
                                        <input type="checkbox" class="checkboxp" name="c1" value="1" > 
                                        <div class="options-p">C.O.D. (+Rs)<br>
                                            Collect payment from receiver at the time of delivery.</div>
                                     </div>

                                     <div class="ftop border" style="margin-bottom:15px; margin-top:5px; width:820px; height:60px; padding-top:10px; box-sizing:border-box;">
                                        <input type="checkbox" class="checkboxp" name="c1" value="1" > 
                                        <div class="options-p">Online Payment<br>
                                         Pay online when the order is confirmed</div>
                                     </div>

                                     <div class="ftop border" style="margin-bottom:15px; margin-top:5px; width:820px; height:60px; padding-top:10px; box-sizing:border-box;">
                                        <input type="checkbox" class="checkboxp" name="c1" value="1" > 
                                        <div class="options-p"> Oversized Parcel (+$)<br>
                                        Bulky or unpackaged items.</div>
                                     </div>
                                    
                                     <a href="shipment2.php"><div class="form-btn-back p-margin"><bt class="bi-chevron-double-left"></bt>Back</div></a>
                                     <div class="form-btn-back p-margin">
                                                                             <input type="submit" name="submit" value="submit" style="background-color:blue; font-size:20px; border:none; color:white;"></div><a href="shipment.php"><div class="form-btn-cancel p-margin" style="bottom:54px;">Cancel Shipment</div></a>

                                    </div>

                                        
                                            </div>
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