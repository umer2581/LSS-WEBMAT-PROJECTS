<?php
include("config/connection.php");

// Select query
$sql = "SELECT * FROM destination";
$result = mysqli_query($conn, $sql);

// Insert query
if (isset($_POST['Insert'])) {
    $station = $_POST['new_station'];
    $transit = $_POST['new_transit'];

    // Prepared statement to prevent SQL injection
    $sql1 = "INSERT INTO destination (station, transit) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql1);
    mysqli_stmt_bind_param($stmt, "ss", $station, $transit);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    mysqli_close($conn);

    // Redirect after successful insert
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
 //code for single delete

if(isset($_GET['uid'])){
    $uid = $_GET['uid'];
    $sql2 = "DELETE FROM `destination` WHERE `id`=$uid";
    $stmt = mysqli_query($conn,$sql2);

    // Redirect after successful delete
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
//code for multi delete



?>

<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <script>
        function focus(){
            var x= document.getElementById("insertnwes");
            x = x.focus;
        }
    </script>
</head>
<body>
    <div class="outer">
        <!-- header is here -->
        <?php include("header.php"); ?>
        <div class="container">
            <!-- cleft if here -->
           <?php include("cleft.php"); ?>
           <div class="cright">
           <form method="post">
        <div class="trow sticky" style="margin-left: 70px;">
            <input id="station" type="text" name="new_station" placeholder="New Station" required>
        </div>
         <div class="trow">
             <input type="number" name="new_transit" placeholder="New Transit" required>
        </div>
        <div class="btn-row">
            <input type="submit" name="Insert" value="Insert" class="insert-btn" onclick="focus()"></input>
        </div>
    </form>

    <div class="thead" style="margin: 25px 0 0 70px;">STATION</div>
    <div class="thead" style="margin-top: 25px;">TRANSIT(HRS)</div>

    <?php
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="trow" style="margin-left: 70px;">' . $row['station'] . '</div>';
        echo '<div class="trow">' . $row['transit'] . '</div>';;
        echo '<div class="btn-row"><a href="Destination.php?uid='.$row['id'].'"><button class="delete-btn">Delete</button></a></div>';
    }
    ?>
 

        <!-- Rest of your admin panel content goes here -->
        
    </div>
</body>
</html>
