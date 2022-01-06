<table id="table" class="table table-striped table-bordered table-responsive table-sm" >
        <thead>
        <tr>
            <th><a >Responsable</a>
                <span class="d-grid d-md-block float-right"><span id="arrowup" class=" arrow arrowActive">&xutri;</span><span id="arrowdown"  class="arrow">&xdtri;</span></span>
            </th>
            <th><a>Montant prêt</a>
                <span class="d-grid d-md-block float-right"><span id="arrowup" class="arrow">&xutri;</span><span id="arrowdown" class="arrow">&xdtri;</span></span>
            </th>            
            <th><a>Date du prêt</a>
                <span class="d-grid d-md-block float-right"><span id="arrowup" class="arrow">&xutri;</span><span id="arrowdown" class="arrow">&xdtri;</span></span>
            </th>            
            <th><a>Date fin de remboursement</a>
                <span class="d-grid d-md-block float-right" ><span id="arrowup" class="arrow">&xutri;</span><span id="arrowdown" class="arrow">&xdtri;</span></span> 
            </th> 
            <th>Action</th>          
        </tr>
        </thead>
        <tbody>
            <?php for ($i=0; $i < 15; $i++){ 
                echo <<<HTML
                    <tr><td class="d-flex justify-content-around">
                            <button class="btn btn-primary"><img src="assets/images/delete-16.ico" alt="del" srcset=""></button>
                            <button class="btn btn-danger"><img src="assets/images/eye-3-16.ico" alt="eye" srcset=""></button>
                        </td></tr>
HTML;    
                }
            ?>
        </tbody>
        <tfoot>
        <tr>
            <th>Responsable</th>
            <th>Montant prêt</th>
            <th>Date du prêt</th>
            <th>Date fin de remboursement</th>
            <th>Action</th>
        </tr>
        </tfoot>
    </table>