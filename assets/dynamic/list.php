<?php require_once('assets/dynamic/header.php')?>
<body>
<main class="container-fluid">
    <div class="container-fluid my-3">
        <div class="my-3" style="float:left;">
            <label for="show">Show</label>
            <input type="number" name="show" id="show" min="1" max="10">
            <span>entiries</span>
        </div>
        <div class="my-3" style="float:right;">
            <label for="show">Search:</label>
            <input type="search" name="search" id="search" class="ml-2">
        </div>
    </div>
    <div class="container-fluid " data-ride="carousel">    
        <div class="carousel-inner">
            <div class="carousel-item active">
                <?php require('assets/dynamic/table.php')?>
            </div>
            <div class="carousel-item">
                <?php require('assets/dynamic/table.php')?>
            </div>
            <div class="carousel-item">
                <?php require('assets/dynamic/table.php')?>
            </div>
        </div>
        <ul class="d-flex listnumber">
            <a href="#demo" class="nav-link" data-slide="prev">Previous</a></li>
            <li data-target="#demo" data-slide-to="0" class="nav-link active">1</li>
            <li data-target="#demo" data-slide-to="1" class="nav-link">2</li>
            <li data-target="#demo" data-slide-to="2" class="nav-link">3</li>
            <a href="#demo" class="nav-link" data-slide="next">Next</a>
        </ul>
    </div>
</main>
</body>