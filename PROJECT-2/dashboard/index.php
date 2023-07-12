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
                <div class="dbname">


                    <div class="dname">

                        <i class="fas fa-info-circle" style="font-size: 24px; color: red;"></i> Dashboard
                    </div>
                </div>
                <div class="main-boxes">
                    <div class="boxes">
                        <div><i class="fas fa-qrcode" style="font-size: 48px; margin: 15px 0 0 10px; color: red;"></i>
                            <div class="records">0 & 149</div>
                        </div>
                        <div class="drecords">Book (Today & Month)
                        </div>

                    </div>
                    <div class="boxes">
                        <div><i class="fas fa-qrcode"
                                style="font-size: 48px; margin: 15px 0 0 10px; color: rgb(18, 141, 24);"></i>
                            <div class="records">149 & 3012</div>
                        </div>
                        <div class="drecords">Outscan ( Branches )
                        </div>
                    </div>
                    <div class="boxes">
                        <div><i class="fas fa-qrcode"
                                style="font-size: 48px; margin: 15px 0 0 10px; color: rgb(56, 25, 139);"></i>
                            <div class="records">20000</div>
                        </div>
                        <div class="drecords">Credit Limit
                        </div>
                    </div>
                    <div class="boxes">
                        <div><i class="fas fa-qrcode"
                                style="font-size: 48px; margin: 15px 0 0 10px; color: rgb(184, 26, 47);"></i>
                            <div class="records">10000</div>
                        </div>
                        <div class="drecords">Dues Till Date
                        </div>
                    </div>
                </div>
                <div class="welcome-box">
                    <div>
                        <marquee behavior="slider" direction="right" scrollamount="15" onmouseover="this.stop()"
                            onmouseout="this.start()"><img src="../dashboard/images/courier.png" alt="" height="250px">
                            
                    </marquee>

                </div>

            </div>

        </div>

    </div>
    </div>
    <!--Outer end-->
</body>

</html>