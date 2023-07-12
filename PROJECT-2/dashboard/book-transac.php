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
                <div class="bkname" style="font-size:28px; width:200px;">
                    <i class="fas fa-info-circle" style="font-size: 24px; color: red;"></i> Booking Transactions
                </div>
            </div>
            <div class="heading">
                <table>
                    <tr>
                        <th>Code name</th>
                        <th>Way bill no</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Consignee Name</th>
                        <th>City</th>
                        <th>Pincode</th>
                        <th>Destination</th>
                        <th>Mode</th>
                        <th>Weight</th>
                    </tr>
                </table>
            </div>
            <div class="book-table"></div>



        </div>

        <!--Outer end-->
</body>

</html>