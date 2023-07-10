<div class="hleft">
    <img class="img" src="images/mbus courier.gif" height="100%" width="100%">
</div>
<div class="hright">
<div class="container">
    <div class="box">
      <span class="text" id="mbus">MBUS</span>
      <span class="text" id="courier">COURIER</span>
    </div>
  </div>
</div>
<style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to bottom, #f0f0f0, #ffffff);
      font-family: Arial, sans-serif;
    }
    
    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 120px;
      width: 680px;
    }
    
    .text {
      font-size: 72px;
      font-weight: bold;
      animation: fade 3s infinite, slide 3s infinite;
      padding: 0 20px;
      transition: background 0.5s;
    }

    .box {
      display: flex;
      background: linear-gradient(to right, #ffbf00, #ff0080);
      border-radius: 50px; /* Adjust the value to change the curvature */
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      overflow: hidden; /* Ensure that the curved border is visible */
      height: 85px;
    }

    @keyframes fade {
      0% { opacity: 0; }
      50% { opacity: 1; }
      100% { opacity: 0; }
    }

    @keyframes slide {
      0% { transform: translateX(-20px); }
      50% { transform: translateX(0); }
      100% { transform: translateX(20px); }
    }
  </style>
  <script>
    function getRandomGradient() {
      var colors = [
        ['#ffbf00', '#ff0080'],
        ['#00a8e8', '#00416a'],
        ['#f12711', '#f5af19'],
        ['#bc4e9c', '#f80759'],
        ['#4b6cb7', '#182848'],
        ['#ff5f6d', '#ffc371'],
        ['#fc00ff', '#00dbde'],
        ['#0099f7', '#f11712'],
        ['#3a6186', '#89253e'],
        ['#7028e4', '#e5b2ca'],
        ['#07c6f9', '#1b2f8c'],
        ['#003973', '#e5e5be'],
        ['#ff00cc', '#333399'],
        ['#8a2be2', '#00ff00'],
        ['#feac5e', '#c779d0'],
        ['#990000', '#ffcc00'],
        ['#1b98e0', '#b0e514'],
        ['#a900ff', '#00eaff'],
        ['#5b247a', '#1bcedf'],
        ['#ff0a0e', '#f1da71']
      ];
      var randomIndex = Math.floor(Math.random() * colors.length);
      return colors[randomIndex];
    }

    function changeTextColor() {
      var mbusElement = document.getElementById('mbus');
      var courierElement = document.getElementById('courier');
      var gradient = getRandomGradient();

      mbusElement.style.background = 'linear-gradient(to right, ' + gradient[0] + ', ' + gradient[1] + ')';
      courierElement.style.background = 'linear-gradient(to right, ' + gradient[0] + ', ' + gradient[1] + ')';
    }

    setInterval(changeTextColor, 3000); // Change color every 3 seconds
  </script>