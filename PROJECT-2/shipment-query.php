
<html>

<head>
  <title> Project Courier </title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
  <!-- Outer Start -->
  <div class="outer">
    <div class="htop">
      <?php
      // htop will be here
      include("htop.php");
      ?>
    </div>
    <!-- Header Start -->
    <div class="header">
      <?php
      include("header.php");
      ?>
    </div>

    <!-- Menubar Start -->
    <div class="menubar">

      <?php
      // Menus will be here
      include("menubar.php");
      ?>

      <!-- Menubar End -->
      <!-- Slider Start  -->
      <div class="slider">
        <img src="images/network.jpg" alt="" height=432px width=1200px>

      </div>

      <!-- About Section -->
      <div class="aboutsec-network">
      <?php
include("admin/config/connection.php");
$selectQuery = "SELECT * FROM network";
$result = mysqli_query($conn, $selectQuery);
$row = mysqli_fetch_assoc($result);
$heading = $row['nethead'];
$content = $row['netpara'];
?>

<div class="heading"><?php echo $heading; ?></div>
<div class="paratext">
    <?php echo $content; ?>
</div>

      </div>
      <!-- Map Section -->
      <div class="aboutsec-map">
        <div class="Main-container">
          <div id="selecting">
            <select name="" id="selector">
              <option value="Our Network">Our Network</option>
              <option value="Andhra Pradesh & Telangana">Andhra Pradesh & Telangana</option>
              <option value="Aasam">Aasam</option>
              <option value="Bihar">Bihar</option>
              <option value="Chattisgarh">Chattisgarh</option>
              <option value="Delhi">Delhi</option>
              <option value="Goa">Goa</option>
              <option value="Gujrat">Gujrat</option>
              <option value="Haryana">Haryana</option>
              <option value="Jammu & Kashmir">Jammu & Kashmir</option>
              <option value="Karnatka">Karnatka</option>
              <option value="Kerela">Kerela</option>
              <option value="Madhya Pradesh">Madhya Pradesh</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Orrisa">Orrisa</option>
              <option value="Punjab">Punjab</option>
              <option value="Rajasthan">Rajasthan</option>
              <option value="Tamilnadu">Tamilnadu</option>
              <option value="Tripura">Tripura</option>
              <option value="Uttarakhand">Uttarakhand</option>
              <option value="Uttar Pradesh">Uttar Pradesh</option>
              <option value="West Bengal">West Bengal</option>
            </select>
          </div>
          <div class="Images-container">
            <img src="https://airwayscourier.co.in/images/network-images/map.png" alt="Indian Map" id="Images">
          </div>
        </div>
     
      </div>

      
        <?php
        //   Footer will be here
        include("footer.php");
        ?>
      </div>


    </div> <!--Outer end-->
</body>

</html>