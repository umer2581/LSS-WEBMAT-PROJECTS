<?php
    include("config/session.php");
include("config/connection.php");

// Single delete functionality
if (isset($_POST['single_delete'])) {
    $filename = $_POST['filename'];

    // Delete the image file from the folder
    $filePath = "../gimages/" . $filename;
    if (file_exists($filePath)) {
        unlink($filePath);
    }

    $deleteQuery = "DELETE FROM imagegallery WHERE filename = '$filename'";
    mysqli_query($conn, $deleteQuery);
    header("Location: viewimagegallery.php");
    exit();
}


$selectQuery = "SELECT * FROM imagegallery";
$result = mysqli_query($conn, $selectQuery);
?>

<!-- Rest of your HTML code -->


<html>
<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
    .image-table {
        width: 90%;
        margin-top: 20px;
        border: 1px solid #ccc;
        margin-left : 40px;
    }

    .image-table-heading {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background-color: black;
        color: white;
        font-weight: bold;
        height: 50px; /* Adjust the height as needed */
    }

    .filename {
        width: 60%;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .image {
        width: 25%;
    }

    .action {
        width: 15%;
    }

    .image-table-row {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .image-preview {
        width: 50px;
        height: 50px;
    }
</style>
</head>
<body>
    <div class="outer">
        <!-- header is here -->
        <?php include("header.php"); ?>
        <div class="container">
            <!-- cleft if here -->
           <?php include("cleft.php"); ?>
            <div class="cright">
                <div class="image-table">
                    <div class="image-table-heading">
                        <div class="filename">&nbsp&nbsp&nbsp&nbspFilename</div>
                        <div class="image">Image</div>
                        <div class="action">Action</div>
                    </div>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $filename = $row['filename'];
                        $displayFilename = basename($filename); // Get the filename without the folder path
                        ?>
                        <div class="image-table-row">
                            <div class="filename"><?php echo $displayFilename; ?></div>
                            <div class="image"><img src="../gimages/<?php echo $filename; ?>" alt="Preview" class="image-preview"></div>
                            <div class="action">
                                <form action="" method="post">
                                    <input type="hidden" name="filename" value="<?php echo $filename; ?>">
                                    <button class="t-button" type="submit" name="single_delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    <?php }
                    mysqli_free_result($result);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
