<?php

include("config/session.php");

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../Fonts/bootstrap-icons.woff">
    <link rel="stylesheet" href="../Fonts/">
    <link rel="stylesheet" href="../dashboard/css/style.css">
    <title>Mbus courier india pvt.ltd.</title>
        <style>
    .table-container {
        margin: 0px 0 0 20px;
    }

    .table-row {
        display: flex;
        flex-direction: row;
    }

    .table-cell {
        width: 300px;
        min-height: 50px;
        border: 2px solid black;
        padding: 8px;
    }

    .heading .table-cell {
        background-color: black;
        color: white;
    }
</style>


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
    <div class="table-container" style="margin-top : 50px;">
        <div class="table-row">
            <div class="table-cell">Code name</div>
            <div class="table-cell">Way bill no</div>
            <div class="table-cell">Date</div>
            <div class="table-cell">Time</div>
            <div class="table-cell">Reference no</div>
            <div class="table-cell">Pieces</div>
            <div class="table-cell">Volume</div>
            <div class="table-cell">Destination</div>
            <div class="table-cell">Amount</div>
            <div class="table-cell">Weight</div>
        </div>
    </div>
</div>
<?php

    include("config/connection.php");
    $sql = "SELECT * FROM booking";
    $result = mysqli_query($conn,$sql);
    // Fetch data from the database using a while loop
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <div class="table-container">
        <div class="table-row">
            <div class="table-cell"><?php echo $row['branch(from)']; ?></div>
            <div class="table-cell"><?php echo $row['waybillno']; ?></div>
            <div class="table-cell"><?php echo $row['date']; ?></div>
            <div class="table-cell"><?php echo $row['time']; ?></div>
            <div class="table-cell"><?php echo $row['refno']; ?></div>
            <div class="table-cell"><?php echo $row['pcs']; ?></div>
            <div class="table-cell"><?php echo $row['volsize']; ?></div>
            <div class="table-cell"><?php echo $row['branch(dest)']; ?></div>
            <div class="table-cell"><?php echo $row['amount']; ?></div>
            <div class="table-cell"><?php echo $row['chgwt']; ?></div>
        </div>
        </div>
        <?php
    }
    ?>

           
        
                
</div>

        <!--Outer end-->
</body>

</html>