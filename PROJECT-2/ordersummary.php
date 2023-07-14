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
                    <div class="shipment-inner-summary">
                        <form>
                            <div class="shipment-heading">
                                <h1 class="ship-heading">Order Summary...!!</h1>
                            </div>
                            <div class="form-main-summary">
                               <div class="sender-detail-box">
                                    <div class="sender-heading-box">
                                        <div class="summary-heading">
                                            Sender's Details
                                        </div>
                                    </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        State:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Company Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Contact Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow" style="height:80px;">
                                    <div class="summary-left" style="height:80px; padding-top:25px; box-sizing:borderbox;">
                                        Address:-
                                    </div>
                                    <div class="summary-right" style="height:80px;">
                                    <textarea class="orderf" style="height:80px;"> </textarea>
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        City:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px; margin-bottom: 10px;">
                                    <div class="summary-left">
                                        Pincode:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Email:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Phone NO.:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>

                                <!-- <a href="shipment.php"><div class="sedit-btn-s"> <ed class="bi-pencil-fill">Edit</ed></div></a> -->

                                </div>
                                <div class="receiver-detail-box">
                                <div class="sender-heading-box">
                                <div class="summary-heading">
                                       Receiver's Details
                                </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        State:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Company Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Contact Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow" style="height:80px;">
                                    <div class="summary-left" style="height:80px; padding-top:25px; box-sizing:borderbox;">
                                        Address:-
                                    </div>
                                    <div class="summary-right" style="height:80px;">
                                    <textarea class="orderf" style="height:80px;"> </textarea>
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        City:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px; margin-bottom: 10px;">
                                    <div class="summary-left">
                                        Pincode:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Email:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Phone NO.:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>

                                <!-- <a href="shipment2.php"><div class="sedit-btn-s"> <ed class="bi-pencil-fill">Edit</ed></div></a> -->


                            </div>
                            </div>
                            <div class="parcel-summary">
                                <div class="parcel-summary-box">
                                <div class="sender-heading-box">
                                <div class="summary-heading">
                                     Parcel's Details
                                </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Packaging Type:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf"> 
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Wei. per Parcel:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">kg
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Length:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">cm
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Height:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">cm
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Width:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">cm
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Total Par. Value:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">Rs
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Packed Item:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Total Weight:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">kg
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Payment Via:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" class="orderf">
                                    </div>
                                </div>

                                <!-- <a href="parcel.php"><div class="sedit-btn-s"> <ed class="bi-pencil-fill">Edit</ed></div></a> -->

                                 <!-- <a href="dashboard/home.php"><div class="sedit-btn-s"> Dashboard</div></a> -->

                                </div>
                            </div>
                                
                            </form> 
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