<?php
include("config/session.php");
include("config/connection.php");

if(isset($_POST['update'])){
    $codename = $_POST['codename'];
    $waybillno = $_POST['waybillno'];
    $refno = $_POST['refno'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $from_customer = $_POST['from_customer'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $mail = $_POST['mail'];
    $mobile = $_POST['mobile'];
    $consignee_name = $_POST['consignee_name'];
    $consignee_address = $_POST['consignee_address'];
    $consignee_city = $_POST['consignee_city'];
    $consignee_pin = $_POST['consignee_pin'];
    $consignee_mail = $_POST['consignee_mail'];
    $consignee_mobile = $_POST['consignee_mobile'];
    $destination = $_POST['destination'];
    $act_wt = $_POST['act_wt'];
    $vol_wt = $_POST['vol_wt'];
    $chg_wt = $_POST['chg_wt'];
    $topay = $_POST['topay'];
    $riskby = $_POST['riskby'];
    $amount = $_POST['amount'];
    $pcs = $_POST['pcs'];
    $volsize = $_POST['volsize'];
    $cod = $_POST['cod'];
    $other_chg = $_POST['other_chg'];
    $chg_amount = $_POST['chg_amount'];
    $remarks = $_POST['remarks'];
 // insert query 
 
 $sql = "INSERT INTO booking (`id`,`branch(from)`,`branch(dest)`,`waybillno`,`refno`,`date`,`time`,`actwt`,`volwt`,`chgwt`,`topay`,`riskby`,`amount`,`pcs`,`volsize`,`cod`,`othchg`,`chgamount`,`remarks`) VALUES ('','$codename','$destination','$waybillno','$refno','$date','$time','$act_wt','$vol_wt','$chg_wt','$topay','$riskby','$amount','$pcs','$volsize','$cod','$other_chg','$chg_amount','$remarks')";

 $result = mysqli_query($conn,$sql);


 $sql1 = "INSERT INTO bookingcust (`id`,`customer`,`address`,`city`,`pin`,`mail`,`mobile`) VALUES ('','$from_customer','$address','$city','$pin','$mail','$mobile')";

 $result = mysqli_query($conn,$sql1);


 $sql2 =  "INSERT INTO bookingconsignee (`id`,`consignee`,`address`,`city`,`pin`,`mail`,`mobile`) VALUES ('','$consignee_name','$consignee_address','$consignee_city','$consignee_pin','$consignee_mail','$consignee_mobile')";

 $result = mysqli_query($conn,$sql2);

 



}
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../Fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="../Fonts/">
    <link rel="stylesheet" href="../dashboard/css/style.css">
    <title>Mbus courier india pvt.ltd.</title>
</head>

<body>
    <div class="outer">
        <?php
        include("header.php");
        ?>


        <div class="main">
            <div class="mleft">
                <?php
                include("menus.php");
                ?>

            </div>
        </div> <!--mleft end-->
        <div class="mright">
            <div class="book">
                <div class="bkname">
                    <i class="fas fa-info-circle" style="font-size: 24px; color: red;"></i> Booking
                </div>
                <div class="input1-main">
                    <div class="main1">
                        <form action="" method="post">
                        <div class="m1-left"> Code/Name (Employee/Client) <br> <input type="text"
                            name="codename"    style="width:420px; height:20px; margin-top:10px; border-radius:5px;">
                        </div>
                        <div class="m1-right">
                            <div class="m1-boxes">Waybillno <br> <input type="text"
                                 name="waybillno"   style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m1-boxes">Ref No <br> <input type="text"
                                name="refno"    style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                            </div>

                            </script>
                            <div class="m1-boxes">Date <br> <input id="date" name="date"
                                    style="width:110px; height:20px; font-size:12.5px; margin-top:10px; background-color:lightblue; border-radius:5px; font-weight:bolder;">

                                <script type="text/javascript">
                                    document.getElementById('date').value = Date();
                                </script>
                            </div>
                            <div class="m1-boxes">Time <br>
                                <script>
                                    window.addEventListener('load', function () {
                                        var inputField = document.getElementById('time-input');

                                        // Function to set the current time in the input field
                                        function setCurrentTime() {
                                            var currentTime = new Date().toLocaleTimeString();
                                            inputField.value = currentTime;
                                        }

                                        // Set the initial current time
                                        setCurrentTime();

                                        // Update the time every second
                                        setInterval(setCurrentTime, 1000);
                                    });
                                </script>
                                <input type="text" id="time-input"
                                name="time"    style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px; font-weight:bolder;">
                                <!-- <input type="time"
                                    style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;"> -->
                            </div>
                        </div>
                    </div>

                </div>
                <div class="input2-main">
                    <div class="main2">
                        <div class="m2-left">
                            <div class="m2-boxes"> From Customer<br> <input type="text"
                                name = "from_customer"    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Address <br> <input type="text"
                                name="address"    style="width:150px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>

                            </script>
                            <div class="m2-boxes">City <br> <input id="date" name="city"
                                    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px; margin-left:5px">

                                <script type="text/javascript">
                                    document.getElementById('date').value = Date();
                                </script>
                            </div>
                            <div class="m2-boxes">Pin <br>
                                <input type="text" maxlength="6"
                                name="pin"    style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mail <br>
                                <input type="email" maxlength="30"
                                name="mail"    style="width:155px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mobile <br>
                                <input type="text" maxlength="10"
                                 name="mobile"   style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;  margin-left:5px">
                            </div>

                        </div>
                        <div class="m2-right">
                            <div class="m2-boxes">Consignee Name<br> <input type="text"
                                name="consignee_name"    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Address <br> <input type="text"
                                name="consignee_address"    style="width:150px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>

                            </script>
                            <div class="m2-boxes">City <br> <input id="date"
                                name="consignee_city"    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px; margin-left:15px">

                                <script type="text/javascript">
                                    document.getElementById('date').value = Date();
                                </script>
                            </div>
                            <div class="m2-boxes">Pin <br>
                                <input type="text" maxlength="6"
                                 name="consignee_pin"   style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mail <br>
                                <input type="email" maxlength="30"
                                 name="consignee_mail"   style="width:155px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mobile <br>
                                <input type="text" maxlength="10"
                                 name="consignee_mobile"   style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;  margin-left:15px">
                            </div>

                        </div>

                    </div>

                    <div class="main3">
                        <div class="m3-left">
                            <div class=>Code / Name (Destination) <br> <input type="text"
                                name="destination"    style="width:440px; height:20px; margin-top:10px; border-radius:5px;">
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Act Wt<br> <input type="text"
                                     name="act_wt"   style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Vol Wt<br> <input type="text"
                                    name="vol_wt"    style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Chg Wt<br> <input type="text"
                                    name="chg_wt"    style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Topay<br> <input type="text"
                                     name="topay"   style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">RiskBy [N/C/O]<br> <input type="text"
                                     name="riskby"   style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Amount<br> <input type="text"
                                     name="amount"   style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>


                        </div>
                        <div class="m3-right">
                            <div class="m3-boxes">
                                <div class="m3-boxes">Pcs<br> <input type="text"
                                    name="pcs"    style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">VolSize (Y/N)
                                    <br> <input type="text"
                                    name="volsize"    style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">COD<br> <input type="text"
                                     name="cod"   style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Other Chg <br> <input type="text"
                                    name="other_chg"    style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Chg Amount<br> <input type="text"
                                    name="chg_amount"    style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Remarks<br> <input type="text"
                                    name="remarks"    style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:10px;">
                                </div>

                            </div>

                        </div>

                    </div>
                    <input type="submit" name="update" value="update" class="red-button">
                    <button class="red-button">Cancel</button>
                                </form>
                </div>



            </div>

        </div>
    </div>
    <!--Outer end-->
</body>

</html>