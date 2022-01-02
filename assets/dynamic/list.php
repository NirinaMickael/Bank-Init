<?php require('assets/dynamic/header.php')?>
<main class="container-fluid ">
    <div class="row container-fluid my-3">
        <div class="col-12 col-md-6 my-1">
            <label for="show">Show</label>
            <input type="number" name="show" id="show" min="1" max="10">
            <span>entiries</span>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-md-end my-1">
            <label for="show">Search:</label>
            <input type="search" name="search" id="search" class="ml-2">
        </div>
    </div>
    <?php require('assets/dynamic/table.php')?>
    <div class="container-fluid">
    <div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="la.jpg" alt="Los Angeles">
  </div>
  <div class="carousel-item">
    <img src="chicago.jpg" alt="Chicago">
  </div>
  <div class="carousel-item">
    <img src="ny.jpg" alt="New York">
  </div>
</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>

</div>
    </div>
</main>