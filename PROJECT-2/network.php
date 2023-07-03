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
                         <div class="menubar" style="background-image: url('images/mback.avif');">
                
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
                <div class="heading">OUR NETWORK</div>
                <div class="paratext">
                    Also, to be able to reach the top, the internal management of the company has to be
                        par excellence. Our company is blessed with two directors who are apt, resourceful and tactical
                        in their field (One of them is the Managing Director of the company). Under them is the
                        dedicated staff of 2161 who are always in search of higher standards and newer challenges. Our
                        staff is equipped with cellular phones and pagers for better communication with each other.<br>An internationally spread business calls for an international network for smooth and
                        speedy operations. At Airways, we always strive to improve our network by seeking out for newer
                        partnerships in the international arena.<br> Recently, we tied up with Gulf Express, for
                        international business, which has rich experience in international business. This enables us to
                        add more speed and punctuality to the already excelling service.
                        Also, to be able to reach the top, the internal management of the company has to be
                        par excellence. Our company is blessed with two directors who are apt, resourceful and tactical
                        in their field (One of them is the Managing Director of the company). Under them is the
                        dedicated staff of 2161 who are always in search of higher standards and newer challenges. Our
                        staff is equipped with cellular phones and pagers for better communication with each other.<br>An internationally spread business calls for an international network for smooth and
                        speedy operations. At Airways, we always strive to improve our network by seeking out for newer
                        partnerships in the international arena.<br> Recently, we tied up with Gulf Express, for
                        international business, which has rich experience in international business. This enables us to
                        add more speed and punctuality to the already excelling service.
                        Also, to be able to reach the top, the internal management of the company has to be
                        par excellence. Our company is blessed with two directors who are apt, resourceful and tactical
                        in their field (One of them is the Managing Director of the company). Under them is the
                        dedicated staff of 2161 who are always in search of higher standards and newer challenges. Our
                        staff is equipped with cellular phones and pagers for better communication with each other.<br>An internationally spread business calls for an international network for smooth and
                        speedy operations. At Airways, we always strive to improve our network by seeking out for newer
                        partnerships in the international arena.<br> Recently, we tied up with Gulf Express, for
                        international business, which has rich experience in international business. This enables us to
                        add more speed and punctuality to the already excelling service.
                        Also, to be able to reach the top, the internal management of the company has to be
                        par excellence. Our company is blessed with two directors who are apt, resourceful and tactical
                        in their field (One of them is the Managing Director of the company). Under them is the
                        dedicated staff of 2161 who are always in search of higher standards and newer challenges. Our
                        staff is equipped with cellular phones and pagers for better communication with each other.<br>An internationally spread business calls for an international network for smooth and
                        speedy operations. At Airways, we always strive to improve our network by seeking out for newer
                        partnerships in the international arena.<br> Recently, we tied up with Gulf Express, for
                        international business, which has rich experience in international business. This enables us to
                        add more speed and punctuality to the already excelling service.
    
                </div>
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
            <option value ="Jammu & Kashmir">Jammu & Kashmir</option>
            <option value ="Karnatka">Karnatka</option>
            <option value ="Kerela">Kerela</option>
            <option value ="Madhya Pradesh">Madhya Pradesh</option>
            <option value ="Maharashtra">Maharashtra</option>
            <option value ="Orrisa">Orrisa</option>
            <option value ="Punjab">Punjab</option>
            <option value ="Rajasthan">Rajasthan</option>
            <option value ="Tamilnadu">Tamilnadu</option>
            <option value ="Tripura">Tripura</option>
            <option value ="Uttarakhand">Uttarakhand</option>
            <option value ="Uttar Pradesh">Uttar Pradesh</option>
            <option value ="West Bengal">West Bengal</option>
         </select>
        </div>
    <div class="Images-container">
        <img src="https://airwayscourier.co.in/images/network-images/map.png" alt="Indian Map" id="Images">
    </div>
   </div>
   <script>
    let selector = document.getElementById("selector");
let images = document.getElementById("Images");
selector.addEventListener("click", () => {
  if ((selector.value == "Our Network")) {
    images.src = "https://airwayscourier.co.in/images/network-images/map.png";
  } 
   if ((selector.value == "Andhra Pradesh & Telangana")) {
    images.src = "https://airwayscourier.co.in/images/network-images/ap.jpg"
  } 
   if ((selector.value == "Aasam")) {
    images.src = "https://airwayscourier.co.in/images/network-images/aasam-map.jpg"
  } 
   if ((selector.value == "Bihar")) {
    images.src = "https://airwayscourier.co.in/images/network-images/bihar.jpg"
  } 
   if ((selector.value == "Chattisgarh")) {
    images.src = "https://airwayscourier.co.in/images/network-images/chattisgarh.jpg"
  } 
   if ((selector.value == "Delhi")) {
    images.src = "https://airwayscourier.co.in/images/network-images/delhi.jpg"
  } 
   if ((selector.value == "Goa")) {
    images.src = "https://airwayscourier.co.in/images/network-images/goa.jpg"
  } 
   if ((selector.value == "Gujrat")) {
    images.src = "https://airwayscourier.co.in/images/network-images/gujrat.jpg"
  } 
   if ((selector.value == "Haryana")) {
    images.src = "https://airwayscourier.co.in/images/network-images/haryana.jpg"
  } 
   if ((selector.value == "Jammu & Kashmir")) {
    images.src = "https://airwayscourier.co.in/images/network-images/JAMMU.jpg"
  } 
   if ((selector.value == "Karnatka")) {
    images.src = "https://airwayscourier.co.in/images/network-images/karnatka.jpg"
  } 
   if ((selector.value == "Kerela")) {
    images.src = "https://airwayscourier.co.in/images/network-images/kerela.jpg"
  } 
   if ((selector.value == "Madhya Pradesh")) {
    images.src = "https://airwayscourier.co.in/images/network-images/MADHYA%20PRADESH.jpg"
  } 
   if ((selector.value == "Maharashtra")) {
    images.src = "https://airwayscourier.co.in/images/network-images/maharashtra.jpg"
  } 
   if ((selector.value == "Orrisa")) {
    images.src = "https://airwayscourier.co.in/images/network-images/orrisa.jpg"
  } 
   if ((selector.value == "Punjab")) {
    images.src = "https://airwayscourier.co.in/images/network-images/punjab.jpg"
  } 
   if ((selector.value == "Rajasthan")) {
    images.src = "https://airwayscourier.co.in/images/network-images/rajasthan.jpg"
  } 
   if ((selector.value == "Tamilnadu")) {
    images.src = "https://airwayscourier.co.in/images/network-images/tamilnadu.jpg"
  } 
   if ((selector.value == "Tripura")) {
    images.src = "https://airwayscourier.co.in/images/network-images/tripura.jpg"
  } 
   if ((selector.value == "Uttarakhand")) {
    images.src = "https://airwayscourier.co.in/images/network-images/uttaranchal.jpg"
  } 
   if ((selector.value == "Uttar Pradesh")) {
    images.src = "https://airwayscourier.co.in/images/network-images/uttarpradesh.jpg"
  } 
   if ((selector.value == "West Bengal")) {
    images.src = "https://airwayscourier.co.in/images/network-images/west-bengal.jpg"
  }
});

</script>


    </div>

    <div class="footer" style="background-image: url('images/fback3.jpg');">
        <?php
        //   Footer will be here
        include("footer.php");
        ?>
    </div>


    </div> <!--Outer end-->
</body>

</html>