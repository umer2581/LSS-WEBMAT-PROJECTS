<?php
include("dashboard/config/connection.php");
$sql = "SELECT * FROM shipfrom";
$result = mysqli_query($conn,$sql);


$sql1 = "SELECT * FROM shipto";
$result1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM parcel";
$result2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM loopcount";
$result3 = mysqli_query($conn,$sql3);

?><html>

<head>
    <title> Profile</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
            <!-- Content Area -->
            
                <div class="shipment-outer">
                <?php
            while($row3 = mysqli_fetch_assoc($result3)){
            ?>
                    <div class="shipment-inner-summary">
                        <form>
                            <div class="shipment-heading">
                                <h1 class="ship-heading">Order Summary...!!</h1>
                            </div>
                            <div class="form-main-summary">
                               <div class="sender-detail-box">
                                    <div class="sender-heading-box">
                                    <?php
                                    while($row =  mysqli_fetch_assoc($result)){ 
                                    ?>
                                        <div class="summary-heading">
                                            Sender's Details
                                        </div>
                                    </div>


                                    
                                <div class="srow">
                                    <div class="summary-left">
                                        State:-
                                    </div>
                                    <div class="summary-right">
                                    <input type="text" value="<?php echo $row['state']?>" class="orderf"> 
                                    </div>
                                    
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Company Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row['fname']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Contact Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row['cname']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow" style="height:80px;">
                                    <div class="summary-left" style="height:80px; padding-top:25px; box-sizing:borderbox;">
                                        Address:-
                                    </div>
                                    <div  class="summary-right" style="height:80px;">
                                    <textarea class="orderf" style="height:80px;"><?php echo $row['addl1']?> <?php echo $row['addl2']?></textarea>
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        City:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row['city']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px; margin-bottom: 10px;">
                                    <div class="summary-left">
                                        Pincode:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row['pincode']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Email:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row['email']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Phone NO.:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row['phoneno']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                
                                <!-- <a href="shipment.php"><div class="sedit-btn-s"> <ed class="bi-pencil-fill">Edit</ed></div></a> -->

                                </div><?php }?>
                                <?php
                                    while($row1 =  mysqli_fetch_assoc($result1)){ 
                                    ?>
                                <div class="receiver-detail-box">
                                <div class="sender-heading-box">
                                <div class="summary-heading">
                                       Receiver's Details
                                </div>
                                </div>
                                <div class="srow">
                                    <?php ?>
                                    <div class="summary-left">
                                        State:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row1['state']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Company Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row1['fname']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow">
                                    <div class="summary-left">
                                        Contact Name:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row1['cname']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="srow" style="height:80px;">
                                    <div class="summary-left" style="height:80px; padding-top:25px; box-sizing:borderbox;">
                                        Address:-
                                    </div>
                                    <div class="summary-right" style="height:80px;">
                                    <textarea class="orderf" style="height:80px;"><?php echo $row1['addl1']?><?php echo $row1['addl2']?></textarea>
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        City:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row1['city']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px; margin-bottom: 10px;">
                                    <div class="summary-left">
                                        Pincode:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row1['pincode']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Email:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row1['email']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                <div class="ftop" style="height:10px; width:410px;"></div>
                                <div class="srow" style="margin-top:20px;">
                                    <div class="summary-left">
                                        Phone NO.:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row1['phoneno']?>" type="text" class="orderf"> 
                                    </div>
                                </div>
                                        
                                <!-- <a href="shipment2.php"><div class="sedit-btn-s"> <ed class="bi-pencil-fill">Edit</ed></div></a> -->


                            </div>
                            </div>
                            <?php } ?>
                            <?php
                                    while($row2 =  mysqli_fetch_assoc($result2)){ 
                                    ?>
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
                                    <input value="<?php echo $row2['packtype']?>" type="text" class="orderf"> 
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Wei. per Parcel:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row2['wtpps']?>" type="text" class="orderf">kg
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Length:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row2['length']?>" type="text" class="orderf">cm
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Height:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row2['height']?>" type="text" class="orderf">cm
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Width:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row2['width']?>" type="text" class="orderf">cm
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Total Par. Value:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row2['tpv']?>" type="text" class="orderf">Rs
                                    </div>
                                </div>

                                <div class="srow">
                                    <div class="summary-left">
                                        Total Weight:-
                                    </div>
                                    <div class="summary-right">
                                    <input value="<?php echo $row2['tpw']?>" type="text" class="orderf">kg
                                    </div>
                                </div>

                                
                                        
                                <!-- <a href="parcel.php"><div class="sedit-btn-s"> <ed class="bi-pencil-fill">Edit</ed></div></a> -->

                                 <a href="dashboard/home.php"><div class="sedit-btn-s"> Dashboard</div></a>

                                </div>
                                <?php
                                break;
                             } ?>
                            </div>
                            
                            </form> 
                    </div><!--shipment inner-->
                    
                </div> <!--shipment-outer close -->
                <?php }?>
                
            <!-- Content Area Ends  -->

             
</body>

</html>