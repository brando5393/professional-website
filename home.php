<html>
<?php
include './head.php'
?>
<body>
<!--carousel-->
<div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="./networking.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Keeping you Connected</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./wireshark.png" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Secure</h1>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="./webdesign.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>And Online</h1>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
<!-- /.carousel -->

<?php
include './footer.php'
?>
</body>
</html>