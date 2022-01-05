<?php require_once('assets/dynamic/header.php')?>
<body>
<main class="container-fluid">
    <div class="container-fluid my-3">
        <div class="my-3 float-left">
            <label for="show">Show</label>
            <input type="number" name="show" id="show" min="1" max="10">
            <span>entiries</span>
        </div>
        <div class="my-3 float-right">
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
                
            </div>
            <div class="carousel-item">
                
            </div>
        </div>
        <div class="float-left">
            <p class="h6">Showing <span class="startnumber">1</span> to <span class="endnumber">10</span> of <span class="totalnumber">57</span> entries</p>
        </div>
        <ul class="pagination float-right">
            <li class="page-item">
                <a href="#" class="page-link border-0" aria-label="previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            </li>
            <li class="page-item ">
                <a href="#" class="page-link border-0 Active">1</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link border-0">2</a>
            </li>
            <li class="page-item ">
                <a href="#" class="page-link border-0">...</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link border-0">7</a>
            </li>
            <li class="page-item">
                <a href="#" class="page-link border-0" aria-label="previous">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</main>
</body>