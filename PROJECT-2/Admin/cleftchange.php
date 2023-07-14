<div class="cleft">
    <button class="button" onclick="location.href='AboutUs.php'">About US</button>
    <button class="button" onclick="location.href='ContactUs.php'">Add Contact</button>
    <button class="button" onclick="location.href='ViewContact.php'">View Contact</button>
    <button class="button" onclick="location.href='Services.php'">Services</button>
    <button class="button" onclick="location.href='AddNews.php'">Add News</button>
    <button class="button" onclick="location.href='ViewNews.php'">View News</button>
    
    <div class="dropdown">
        <button class="button dropdown-btn">Add Gallery &#9662;</button>
        <div class="dropdown-content">
            <button class="dropdown-item" onclick="location.href='AddGallery.php'">Add Gallery 1</button>
            <button class="dropdown-item" onclick="location.href='AddGallery2.php'">Add Gallery 2</button>
            <button class="dropdown-item" onclick="location.href='AddGallery3.php'">Add Gallery 3</button>
        </div>
    </div>
     <div class="dropdown">
        <button class="button dropdown-btn">View Gallery &#9662;</button>
        <div class="dropdown-content">
            <button class="dropdown-item" onclick="location.href='ViewGallery.php'">View Gallery1</button>
            <button class="dropdown-item" onclick="location.href='AddGallery2.php'">View Gallery2</button>
            <button class="dropdown-item" onclick="location.href='AddGallery3.php'">View Gallery3</button>
        </div>
    </div>
    <button class="button" onclick="location.href='sliderg.php'">Slider Gallery</button>
    <button class="button" onclick="location.href='Destination.php'">Destination</button>
    <button class="button" onclick="location.href='Network.php'">Network</button>
</div>
<style>
.cleft {
  width: 30%;
  border-right: 1px solid #ccc;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-start;
}

.cleft .button {
  display: block;
  margin-bottom: 10px;
}

.button {
  margin-right: 10px;
  padding: 10px 20px;
  background-color: #000;
  border: none;
  color: #fff;
  cursor: pointer;
  height: 40px;
  width: 120px;
}

.button:hover {
  background-color: #222;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-btn {
  display: inline-block;
  margin-bottom: 10px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
  left: 100%; /* Position the dropdown content to the right */
  top: 0; /* Align the dropdown content with the top of the button */
}

.dropdown-content .dropdown-item {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  cursor: pointer;
}

.dropdown-content .dropdown-item:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
