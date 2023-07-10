<?php
include("config/connection.php");
if (isset($_POST['sub1'])) {
    $abouthead = $_POST['abouthead'];
    $abtdesc = $_POST['abtdecs'];

    // Perform the insertion into the database
    $insertQuery = "INSERT INTO aboutus1 (`title`, `text`) VALUES ('$abouthead', '$abtdesc')";
    
    if (mysqli_query($conn, $insertQuery)) {
        // Redirect to prevent form resubmission
        header("Location: Aboutus.php");
        exit();
    }
}

if (isset($_POST['sub2'])) {
    $whyli = $_POST['whyli'];

    $insertQuery1 = "INSERT INTO about3 (`list`) VALUES ('$whyli')";
    
    if (mysqli_query($conn, $insertQuery1)) {
        // Redirect to prevent form resubmission
        header("Location: AboutUS.php");
        exit();
    }
}
// select quet=ry for update field
$selquery = "SELECT * FROM aboutus2";
$result = mysqli_query($conn, $selquery);

if ($result) {
    if ($row = mysqli_fetch_assoc($result)) {
        $about = $row['about'];
        $lihead = $row['lihead'];
        $ids = $row['id'];
    } else {
        // Handle if no data is found
        $about = "";
        $lihead = "";
    }
} else {
    // Handle query error
    echo "Error: " . mysqli_error($conn);
}
// update query for form 1
if (isset($_POST['updt'])) {
    if(isset($_POST['updt'])){
    $selquery = "SELECT * FROM aboutus2 WHERE id = 1";
    $result = mysqli_query($conn, $selquery);
    $row = mysqli_fetch_assoc($result);
    $about = $row['about'];
    $lihead = $row['lihead'];
    $ids = $row['id'];
    }
    if(isset($_POST['updt'])){
            $about = $_POST['aboutpara'];
            $lihead = $_POST['whyhead'];
    $about = mysqli_real_escape_string($conn, $about);
    $lihead = mysqli_real_escape_string($conn, $lihead);

$ddd = "UPDATE aboutus2 SET about = '$about', lihead = '$lihead' WHERE id = 1;";

    $s1111 = mysqli_query($conn, $ddd);

    if ($s1111) {
        // Update successful
        // Redirect to prevent form resubmission
        header("Location: AboutUS.php");
        exit();
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($conn);
    }
}
}





//update query for form one
if (isset($_GET['uid'])) {
    $id = $_GET['uid'];
    if ($_GET['uid']) {
        $selectQuery1 = "SELECT * FROM aboutus1 WHERE id = $id";

        $result = mysqli_query($conn, $selectQuery1);

        // Check if any rows were returned
        if (mysqli_num_rows($result) > 0) {
            // Loop through the rows and retrieve data
            while ($row = mysqli_fetch_assoc($result)) {
                // Access the columns of the retrieved row
                $id = $row['id'];
                $title = $row['title'];
                $summary = $row['text'];
            }

            // Free the result set
            mysqli_free_result($result);
        }
    }

    // Check if the form is submitted
    if (isset($_POST['updt1'])) {
        $title = $_POST['abouthead'];
        $summary = $_POST['abtdecs'];

        // Assuming you have already included the connection file (config/connection.php) in this file

        // Update query
        $updateQuery1 = "UPDATE aboutus1 SET title = '$title', `text` = '$summary' WHERE id = $id";

        mysqli_query($conn, $updateQuery1);
        header("location: AboutUs.php");
        exit();
    }
}

// Check if the delid parameter exists in the URL for form one
if (isset($_GET['delid'])) {
    // Get the delid value from the URL
    $delid = $_GET['delid'];

    // Delete query
    $deleteQuery = "DELETE FROM aboutus1 WHERE id = $delid";

    // Execute the delete query
    if (mysqli_query($conn, $deleteQuery)) {
        // Deletion successful
        header("Location: AboutUs.php");
        exit();
    }
}

// Check if the delid2 parameter exists in the URL for form two
if (isset($_GET['delid2'])) {
    $deleteId2 = $_GET['delid2'];
    
    // Construct the delete query for form two
    $deleteQuery2 = "DELETE FROM about3 WHERE id = $deleteId2";

    // Execute the delete query for form two
    if (mysqli_query($conn, $deleteQuery2)) {
        // Deletion successful
        header("Location: AboutUS.php");
        exit();
    } else {
        // Error in deletion
        echo "Error deleting data: " . mysqli_error($conn);
    }
}

 
// Update query for form two
if (isset($_GET['uid2'])) {
    $id2 = $_GET['uid2'];
    if ($_GET['uid2']) {
        $selectQuery2 = "SELECT * FROM about3 WHERE id = $id2";

        $result2 = mysqli_query($conn, $selectQuery2);

        // Check if any rows were returned
        if (mysqli_num_rows($result2) > 0) {
            // Loop through the rows and retrieve data
            while ($row2 = mysqli_fetch_assoc($result2)) {
                // Access the columns of the retrieved row
                $id2 = $row2['id'];
                $list = $row2['list'];
            }

            // Free the result set
            mysqli_free_result($result2);
        }
    }

    // Check if the form is submitted
    if (isset($_POST['updt2'])) {
        $list = $_POST['whyli'];

        // Update query
        $updateQuery2 = "UPDATE about3 SET list = '$list' WHERE id = $id2";

        mysqli_query($conn, $updateQuery2);
        header("location: AboutUs.php");
        exit();
    }
}

?>
<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
    <div class="outer">
        <!-- header is here -->
        <?php include("header.php"); ?>
        <div class="container">
            <!-- cleft if here -->
           <?php include("cleft.php"); ?>
            <div class="cright">
                <div class="nrow">
                    <a href="#insert"><button class="button">For insert</button></a>
                    <a href="#update"><button class="button">For update</button></a>
                    <a href="#view"><button class="button">For view</button></a>
                    <hr>
                </div>
                <H3 id="insert"> To Add Title and Description :-</H3>
                <form name="one" method="post">
                <div class="aboutf">
                    <div class="nrow"><input type="text" name="abouthead" placeholder="title" value="<?php if(isset($_GET['uid'])) echo $title; ?>"></div>
                    <div class="nrow"><input type="text" name="abtdecs" placeholder="summary" value="<?php if(isset($_GET['uid'])) echo $summary;?>"></div>
                    <div><input type="submit" name="<?php if(isset($_GET['uid'])){ echo 'updt1';}else{ echo 'sub1';}?>" value="<?php if(isset($_GET['uid'])){ echo 'Update';}else{ echo 'Add';}?>" class="contact-sub"></div>
                </div>
                </form>

                <h3> To Add Why us list :-</h3>
                <form name="two" method="post">
                <div class="aboutf">
    <div class="nrow">
        <input type="text" name="whyli" placeholder="list" value="<?php echo isset($_GET['uid2']) ? $list : ''; ?>">
    </div>
    <div>
        <input type="submit" name="<?php echo isset($_GET['uid2']) ? 'updt2' : 'sub2'; ?>" value="<?php echo isset($_GET['uid2']) ? 'Update' : 'Add'; ?>" class="contact-sub">
    </div>
</div>

                </form>
                <hr>
                <h3 id="update">To Update Whyhead and Aboutpara</h3>
                <div class="aboutf">
                    <form name="update" method="post">
                    <div class="nrow"><input type="text" name="whyhead" placeholder="why heading" value="<?php echo $lihead?>"></div>
<textarea name="aboutpara" class="ntextarea" placeholder="about paragraph"><?php echo $about;?></textarea>
                    <div><input type="submit" name="updt" value="Update" class="contact-sub"></div>
                </form>
                </div>
                <hr>
                <h3 id="view">To View Title And Description :-</h3>
                <div class="table">
    <div class="table-row">
        <div class="table-header">Title</div>
        <div class="table-header">Summary</div>
        <div class="table-header" style="width : 100px;">Action</div>
    </div>

    <?php
    // Assuming you have already included the connection file (config/connection.php) in this file

    // Select query to fetch data from form one
    $selectQuery1 = "SELECT * FROM aboutus1";
    $result1 = mysqli_query($conn, $selectQuery1);

    // Loop through the result set and display data for form one
    while ($row1 = mysqli_fetch_assoc($result1)) {
        $title = $row1['title'];
        $summary = $row1['text'];
        $id = $row1['id'];

        echo '<div class="table-row">';
        echo '<div class="table-cell">' . $title . '</div>';
        echo '<div class="table-cell">' . $summary . '</div>';
        echo '<div class="table-cell action-buttons">';
        echo '<a href="AboutUs.php?uid=' . $id . '"><button class="t-button" style="text-decoration: none;">Update</button></a>';
        echo '<a href="AboutUs.php?delid=' . $id . '"><button class="t-button" style="text-decoration: none;">Delete</button></a>';
        echo '</div>';
        echo '</div>';
    }

    ?>
     </div>

     <?php
// Fetch all the added lists from the database for form two
$selectQuery2 = "SELECT * FROM about3";
$result2 = mysqli_query($conn, $selectQuery2);

// Check if any rows were returned
if (mysqli_num_rows($result2) > 0) {
    echo '<div class="table">';
    echo '<div class="table-row">';
    echo '<div class="table-header">List</div>';
    echo '<div class="table-header">Action</div>';
    echo '</div>';

    // Loop through the rows and display the data for form two
    while ($row2 = mysqli_fetch_assoc($result2)) {
        $list = $row2['list'];
        $id = $row2['id'];

        echo '<div class="table-row">';
        echo '<div class="table-cell">' . $list . '</div>';
        echo '<div class="table-cell action-buttons">';
        echo '<a href="AboutUS.php?uid2=' . $id . '"><button class="t-button" style="text-decoration: none;">Update</button></a>';
        echo '<a href="AboutUS.php?delid2=' . $id . '"><button class="t-button" style="text-decoration: none;">Delete</button></a>';
        echo '</div>';
        echo '</div>';
    }

    echo '</div>';
} else {
    echo 'No lists found.';
}

// Free the result set
mysqli_free_result($result2);
?>


    </div>
</div>


</div>

</body>
</html>
