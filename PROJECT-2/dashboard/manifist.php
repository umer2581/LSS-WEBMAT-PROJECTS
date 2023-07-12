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
                    <i class="fas fa-info-circle" style="font-size: 24px; color: red;"></i> Manifist
                </div>
            </div>
            <div class="hub-inscan">
                <div class="hub-left">
                    <div class="h1-left"> Code/ Name ( Hub ) <br> <input type="text"
                            style="width:435px; height:20px; margin-top:10px; border-radius:5px;">
                    </div>
                    <div class="h1-boxes">SealNo <br> <input type="text"
                            style="width:100px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
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
                    
                   
                </div>
                <div class="hub-right">
                    <div class="hr1-boxes">Mod[A/S]	 <br> <input type="text"
                            style="width:130px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes">Doc[D/N] <br> <input id="date" name="date"
                            style="width:120px; height:20px; font-size:12.5px; margin-top:10px; background-color:lightblue; border-radius:5px; font-weight:bolder;">

                    </div>
                    <div class="h1-boxes">PinCode<br> <input type="text"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes"><input type="checkbox">Code/Name (Coloader) <br> <input type="text"
                            style="width:280px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="h1-boxes" style="margin-left:160px;">Doc[D/N] (DOC/NDOC) <br> <input id="date" name="date"
                            style="width:120px; height:20px; font-size:12.5px; margin-top:10px; background-color:lightblue; border-radius:5px; font-weight:bolder;">

                    </div>
                </div>
            </div>
            <div class="hub-inscan" style="height:100px;">
                 <div class="hub-left" style="height:100px; border:none;">
                    <div class="hub-leftbox"  >
                        Waybill No <br> <input type="text"
                            style="width:130px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hub-leftbox" style="width:290px"><input type="checkbox">Code / Name(Destination)<br> <input type="text"
                            style="width:270px; height:20px; margin-top:5px; background-color:lightblue; border-radius:5px;">
                    </div>
                   
                </div>
                <div class="hub-right" style="height:100px; border-left:2px solid black;">
                    <div class="hr1-boxes">Pcs <br> <input type="text"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes">Weight <br> <input type="text"
                            style="width:140px; height:20px; margin-top:10px; background-color:lightblue; border-radius:5px;">
                    </div>
                    <div class="hr1-boxes"><input type="checkbox">Remarks <br> <input type="text"
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