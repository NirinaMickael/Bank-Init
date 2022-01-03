<table class="table table-striped table-bordered table-responsive-sm">
        <thead>
        <?php echo tableTitleHead()?>  
        </thead>
        <tbody>
        <?php
            foreach($data as $item){
                echo "<tr>";
                    foreach($item as $value){
                        echo printItemTable($value);
                    }
                echo "</tr>";
            }
        ?>    
        </tbody>
            
        <tfoot>
            <?php echo tableTitleHead()?> 
        </tfoot>
    </table>