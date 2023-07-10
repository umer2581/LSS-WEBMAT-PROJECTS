<!DOCTYPE html>
<html>
<head>
  <title>Custom Slider</title>
  <style>
    .slider {
      width: 339px;
      height: 205px;
      overflow: hidden;
      position: relative;
      background: linear-gradient(135deg, #FF5F6D, #FFC371, #F8FF48);
    }

    .slider-container {
      width: 100%;
      height: 100%;
      display: flex;
      transition: transform 1s ease-in-out;
    }

    .slide {
      flex: 0 0 339px;
      height: 205px;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transform: scale(0.8);
      transition: opacity 0.5s ease-in-out, transform 0.5s ease-in-out;
    }

    .slide.active {
      opacity: 1;
      transform: scale(1);
    }

    .slider-nav {
      display: flex;
      justify-content: center;
      position: absolute;
      bottom: 10px;
      left: 0;
      right: 0;
    }

    .slider-nav button {
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background-color: #FFF;
      border: none;
      margin: 0 5px;
      padding: 0;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .slider-nav button:hover {
      background-color: #000;
    }

    .slider-prev,
    .slider-next {
      width: 30px;
      height: 30px;
      background-color: #FFF;
      border-radius: 50%;
      color: #000;
      font-size: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }

    .slider-prev:hover,
    .slider-next:hover {
      background-color: #000;
      color: #FFF;
    }

    .slider-prev:before,
    .slider-next:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .slider-prev:hover:before,
    .slider-next:hover:before {
      opacity: 1;
    }

    .slider-prev:before {
      transform-origin: top right;
      transform: perspective(1000px) rotateY(90deg);
    }

    .slider-next:before {
      transform-origin: top left;
      transform: perspective(1000px) rotateY(-90deg);
    }

    .slider-prev:hover,
    .slider-next:hover {
      background-color: transparent;
    }

    .slider-prev:hover:before,
    .slider-next:hover:before {
      background-color: rgba(0, 0, 0, 0.5);
    }

    .slider-side-nav {
      width: 30px;
      height: 30px;
      background-color: #FFF;
      border-radius: 50%;
      color: #000;
      font-size: 24px;
      display: flex;
      justify-content: center;
      align-items: center;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
      position: absolute;
      top: calc(50% - 15px);
    }

    .slider-side-nav-left {
      left: 10px;
    }

    .slider-side-nav-right {
      right: 10px;
    }

    .slider-side-nav:hover {
      background-color: #000;
      color: #FFF;
    }

    .slider-side-nav:hover:before {
      background-color: rgba(0, 0, 0, 0.5);
    }

    @keyframes fade-in {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }
  </style>
</head>
<body>
  <div class="slider">
    <div class="slider-container">
      <div class="slide active fade-in">
        <img src="images/clockback.jpeg" height="100%" width="100%" alt="Slide 1">
      </div>
      <div class="slide fade-in">
      <img src="images/s2aj4.jpeg" height="100%" width="100%" alt="Slide 1">
      </div>
      <div class="slide fade-in">
      <img src="images/s2aj1.jpeg" height="100%" width="100%" alt="Slide 1">

      </div>
      <div class="slide fade-in">
      <img src="images/s2aj2.webp" height="100%" width="100%" alt="Slide 1">
      </div>
      <div class="slide fade-in">
      <img src="images/clockback.jpeg" height="100%" width="100%" alt="Slide 1">
      </div>
    </div>
    <div class="slider-nav">
      <button class="nav-btn active"></button>
      <button class="nav-btn"></button>
      <button class="nav-btn"></button>
      <button class="nav-btn"></button>
      <button class="nav-btn"></button>
    </div>
    <div class="slider-prev">&#8249;</div>
    <div class="slider-next">&#8250;</div>
    <div class="slider-side-nav slider-side-nav-left">&#8249;</div>
    <div class="slider-side-nav slider-side-nav-right">&#8250;</div>
  </div>

  <script>
    var sliderContainer = document.querySelector('.slider-container');
    var slides = document.querySelectorAll('.slide');
    var slideWidth = slides[0].offsetWidth;
    var currentSlide = 0;
    var slideInterval;

    function slideNext() {
      slides[currentSlide].classList.remove('active');
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      slides[currentSlide].classList.add('active');
      sliderContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
      updateNavButtons();
    }

    function startSlideInterval() {
      slideInterval = setInterval(slideNext, 4000);
    }

    function stopSlideInterval() {
      clearInterval(slideInterval);
    }

    startSlideInterval();

    var navButtons = document.querySelectorAll('.nav-btn');

    navButtons.forEach(function(button, index) {
      button.addEventListener('click', function() {
        slides[currentSlide].classList.remove('active');
        currentSlide = index;
        slides[currentSlide].classList.add('active');
        sliderContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
        updateNavButtons();
        stopSlideInterval();
        startSlideInterval();
      });
    });

    function updateNavButtons() {
      navButtons.forEach(function(button, index) {
        button.classList.toggle('active', index === currentSlide);
      });
    }

    var prevButton = document.querySelector('.slider-prev');
    var nextButton = document.querySelector('.slider-next');

    prevButton.addEventListener('click', function() {
      slides[currentSlide].classList.remove('active');
      currentSlide--;
      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      }
      slides[currentSlide].classList.add('active');
      sliderContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
      updateNavButtons();
      stopSlideInterval();
      startSlideInterval();
    });

    nextButton.addEventListener('click', function() {
      slides[currentSlide].classList.remove('active');
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      slides[currentSlide].classList.add('active');
      sliderContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
      updateNavButtons();
      stopSlideInterval();
      startSlideInterval();
    });

    var sideNavLeft = document.querySelector('.slider-side-nav-left');
    var sideNavRight = document.querySelector('.slider-side-nav-right');

    sideNavLeft.addEventListener('click', function() {
      slides[currentSlide].classList.remove('active');
      currentSlide--;
      if (currentSlide < 0) {
        currentSlide = slides.length - 1;
      }
      slides[currentSlide].classList.add('active');
      sliderContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
      updateNavButtons();
      stopSlideInterval();
      startSlideInterval();
    });

    sideNavRight.addEventListener('click', function() {
      slides[currentSlide].classList.remove('active');
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0;
      }
      slides[currentSlide].classList.add('active');
      sliderContainer.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
      updateNavButtons();
      stopSlideInterval();
      startSlideInterval();
    });
  </script>
</body>
</html>