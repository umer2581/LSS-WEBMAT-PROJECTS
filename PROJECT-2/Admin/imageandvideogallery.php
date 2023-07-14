<?php

include("config/session.php");
include("config/connection.php");

if (isset($_POST['gimage'])) {
  // Process the uploaded image
  $image = $_FILES['image'];

  // Check if an image was uploaded
  if ($image['size'] > 0) {
    $targetDir = "../gimages/";
    $targetFile = $targetDir . basename($image["name"]);

    // Move the uploaded file to the specified directory
    if (move_uploaded_file($image["tmp_name"], $targetFile)) {
      // Insert the image details into the database
      $insertQuery = "INSERT INTO imagegallery (filename) VALUES ('$targetFile')";
      if (mysqli_query($conn, $insertQuery)) {
        // Image uploaded and inserted successfully
        header("Location: ".$_SERVER['PHP_SELF']); // Reload the page
        exit;
      } else {
        // Error inserting image details into the database
        echo "Error inserting image details: " . mysqli_error($conn);
      }
    } else {
      // Error moving the uploaded file
      echo "Error uploading the file.";
    }
  } else {
    // No image selected
    echo "Please select an image.";
  }
}

if (isset($_POST['gimage2'])) {
    // Process the uploaded image
    $image = $_FILES['image'];
  
    // Check if an image was uploaded
    if ($image['size'] > 0) {
      $targetDir = "../gimages/";
      $targetFile = $targetDir . basename($image["name"]);
  
      // Move the uploaded file to the specified directory
      if (move_uploaded_file($image["tmp_name"], $targetFile)) {
        // Insert the image details into the database
        $insertQuery = "INSERT INTO videogallery (filename) VALUES ('$targetFile')";
        if (mysqli_query($conn, $insertQuery)) {
          // Image uploaded and inserted successfully
          header("Location: ".$_SERVER['PHP_SELF']); // Reload the page
          exit;
        } else {
          // Error inserting image details into the database
          echo "Error inserting image details: " . mysqli_error($conn);
        }
      } else {
        // Error moving the uploaded file
        echo "Error uploading the file.";
      }
    } else {
      // No image selected
      echo "Please select an image.";
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
                <h3>Add Images to Image Gallery :-</h3>
                <div class="aboutf">
                <form method="post" enctype="multipart/form-data">
                    <div class="nrow">
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <input type="submit" name="gimage" value="Add Image" class="contact-sub">
                    </div>
                </form>
                </div>
                <h3>Add Video to Video Gallery :-</h3>
                <div class="aboutf">
                <form method="post" enctype="multipart/form-data">
                    <div class="nrow">
                        <input type="file" name="image" required>
                    </div>
                    <div>
                        <input type="submit" name="gimage2" value="Add Image" class="contact-sub">
                    </div>
                </form>
                </div>
                <hr>
                
            </div>
        </div>
        <!-- Rest of your admin panel content goes here -->
        
    </div>
</body>
</html>
