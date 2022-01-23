<?= header_page('../../style/style.css','../../bootstrap-5.0.2-dist/css/bootstrap.min.css','Liste')?>
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
        <div class="container-fluid">
            <?php require('assets/dynamic/table.php')?>
        </div>
        <div class="float-left">
            <p class="h6">Showing <span class="startnumber">1</span> to <span class="endnumber">10</span> of <span class="totalnumber">57</span> entries</p>
        </div>
        <ul class="pagination float-right containItempag">
                <button class="page-link border-0 btnPrev btn" aria-hidden="true">&laquo;</button>
            <li class="page-item "><span class="page-link border-0 Active">1</span></li>
            <li class="page-item"><span class="page-link border-0">2</span></li>
            <li class="page-item "><span class="page-link border-0">...</span></li>
            <li class="page-item"><span class="page-link border-0">7</span></li>
                <button class="page-link border-0 btnNext btn" aria-hidden="true">&raquo;</button>
        </ul>
    </div>
</main>
</body>