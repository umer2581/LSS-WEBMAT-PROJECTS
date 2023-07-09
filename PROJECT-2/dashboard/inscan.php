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
                        <div class="m1-left"> Code/Name (Employee/Client) <br> <input type="text"
                                style="width:420px; height:20px; margin-top:10px; border-radius:5px;">
                        </div>
                        <div class="m1-right">
                            <div class="m1-boxes">Waybillno <br> <input type="text"
                                    style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m1-boxes">Ref No <br> <input type="text"
                                    style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                            </div>

                            </script>
                            <div class="m1-boxes">Date <br> <input id="date" name="date"
                                    style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">

                                <script type="text/javascript">
                                    document.getElementById('date').value = Date();
                                </script>
                            </div>
                            <div class="m1-boxes">Time <br>
                                <input type="time"
                                    style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                            </div>
                        </div>
                    </div>

                </div>
                <div class="input2-main">
                    <div class="main2">
                        <div class="m2-left">
                            <div class="m2-boxes"> From Customer<br> <input type="text"
                                    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Address <br> <input type="text"
                                    style="width:150px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>

                            </script>
                            <div class="m2-boxes">City <br> <input id="date" name="date"
                                    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px; margin-left:5px">

                                <script type="text/javascript">
                                    document.getElementById('date').value = Date();
                                </script>
                            </div>
                            <div class="m2-boxes">Pin <br>
                                <input type="text" maxlength="6"
                                    style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mail <br>
                                <input type="email" maxlength="30"
                                    style="width:155px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mobile <br>
                                <input type="text" maxlength="10"
                                    style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;  margin-left:5px">
                            </div>

                        </div>
                        <div class="m2-right">
                            <div class="m2-boxes">Consignee Name<br> <input type="text"
                                    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Address <br> <input type="text"
                                    style="width:150px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>

                            </script>
                            <div class="m2-boxes">City <br> <input id="date" name="date"
                                    style="width:140px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px; margin-left:15px">

                                <script type="text/javascript">
                                    document.getElementById('date').value = Date();
                                </script>
                            </div>
                            <div class="m2-boxes">Pin <br>
                                <input type="text" maxlength="6"
                                    style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mail <br>
                                <input type="email" maxlength="30"
                                    style="width:155px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                            </div>
                            <div class="m2-boxes">Mobile <br>
                                <input type="text" maxlength="10"
                                    style="width:143px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;  margin-left:15px">
                            </div>

                        </div>

                    </div>

                    <div class="main3">
                        <div class="m3-left">
                            <div class=>Code / Name (Destination) <br> <input type="text"
                                    style="width:440px; height:20px; margin-top:10px; border-radius:5px;">
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Act Wt<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Vol Wt<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Chg Wt<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Topay<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">RiskBy [N/C/O]<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Amount<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                                </div>
                            </div>


                        </div>
                        <div class="m3-right">
                            <div class="m3-boxes">
                                <div class="m3-boxes">Pcs<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">VolSize (Y/N)
                                    <br> <input type="text"
                                        style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">COD<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Other Chg <br> <input type="text"
                                        style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Chg Amount<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                                </div>

                            </div>
                            <div class="m3-boxes">
                                <div class="m3-boxes">Remarks<br> <input type="text"
                                        style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:10px;">
                                </div>

                            </div>

                        </div>

                    </div>
                    <button class="red-button">Update</button>
  <button class="red-button">Cancel</button>
                </div>



                </div>

            </div>
        </div>
        <!--Outer end-->
</body>

</html>