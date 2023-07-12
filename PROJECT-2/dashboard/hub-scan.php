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
                    <i class="fas fa-info-circle" style="font-size: 24px; color: red;"></i> Hub Inscan
                </div>
            </div>
            <div class="hub-inscan">
                <div class="hub-left">
                    <div class="h1-left"> Code/Name (Employee/Client) <br> <input type="text" name="client"
                            style="width:435px; height:20px; margin-top:10px; border-radius:5px;">
                    </div>
                    <div class="h1-boxes">PinCode <br> <input type="text" name="pincode"
                            style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes" style="width:150px; margin-left:0px">Mail <br> <input type="text" name="mail"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes" style="width:130x;"> Mobile <br> <input type="text" name="mobile"
                            style="width:130px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                </div>
                <div class="hub-right">
                    <div class="hr1-boxes">Bag/MF No <br> <input type="text" name="mfno"
                            style="width:130px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes">Date <br> <input id="date" name="date" 
                            style="width:110px; height:20px; font-size:12.5px; margin-top:10px; background-color:lightblue; border-radius:5px; font-weight:bolder;">

                        <script type="text/javascript">
                            document.getElementById('date').value = Date();
                        </script>
                    </div>
                    <div class="hr1-boxes">Time <br>
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
                            style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px; font-weight:bolder;">

                    </div>
                    <div class="hr1-boxes">Origin Hub <br> <input type="text" name="origin"
                            style="width:130px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes">Origin City <br> <input type="text" name="origin"
                            style="width:280px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                </div>
            </div>
            <div class="hub-inscan">
                <div class="hub-left">
                    <div class="hub-leftbox">
                        Waybill No <br> <input type="text" name="cno"
                            style="width:130px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hub-leftbox" style="width:290px">Code / Name(Destination)<br> <input type="text" name="tocode"
                            style="width:270px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes">Vol Wt <br> <input type="text" name="volwt"
                            style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes">Topay <br> <input type="text" name="topay"
                            style="width:120px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes">COD <br> <input type="text" name="cod"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                </div>
                <div class="hub-right">
                    <div class="hr1-boxes">Mod[A/S/P] <br> <input type="text" name="mod"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes">Doc [D/N]<br> <input type="text" name="doc"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>

                    <div class="hr1-boxes"> Pcs <br> <input type="text" name="pcs"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes">Weight <br> <input type="text" name="wgt"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes">Invoice Value <br> <input type="text" name="ival"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes">Remarks <br> <input type="text" name="remarks"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>

                </div>
            </div>

            <button class="red-button">Update</button>
            <button class="red-button">Cancel</button>

        </div>
    </div>

    </div>

    </div>
    </div>
    </div>


    <!--Outer end-->
</body>

</html>