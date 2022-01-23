<?php
    $DB_HOST = explode(':',$_SERVER['HTTP_HOST'])[0]; 
    $DB_NAME = 'Bankint';
    $DB_USER='root';
    $DB_PASS='';   
    $data_base = connect_database($DB_HOST,$DB_NAME,$DB_USER,$DB_PASS);

?>
<main class="container-fluid m-auto mt-3 container_form">       
        <form class="needs-validation border row" method="POST" action="assets/controller/Loan.php">
            <div class="row m-0 mb-2  bg-gray">
                <h1 class="text-center  h2 my-2 ">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label " for="Responsible ">Responsable</label>
                        <select class="form-select form-check"  id="responsable" name="Responsible" required>
                        <?php $responsable = requete_select($data_base,'Responsible'); ?>
                        <?php  foreach($responsable as $res):?>
                            <option value=<?= $res['id']?>><?= $res['Last_name']?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Client">Client</label>
                        <select class="form-select form-check"  id="Client" name="Client" required>
                        <?php $client = requete_select($data_base,'Client'); ?>
                        <?php  foreach($client as $res):?>
                            <option value=<?= $res['id']?>><?= $res['Company_name']?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Loan_date ">Date du prêt</label>
                    <input type="date" class="form-control " id="Loan_date" name="Loan_date" required>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Repayment_frequency">Mode de remboursement:</label>
                        <select class="form-select" id="Repayment_frequency" name="Repayment_frequency"  required>
                            <option value="1">Mensuel</option>
                            <option value="2">Bimestriel</option>
                            <option value="3">Trimestriel</option>
                        </select>
                </div>
                <div class="form-group container_com">
                    <label class="form-label " for="Remark">Commentaire</label>
                    <textarea type="text" class="form-control" id="Remark" name="Remark" ></textarea>
                    <label class="form-label" for="Remark"  >Ajouter votre note ici</label>
                </div> 
            </div>
            <div class="col-lg-7">
               <div class="row">
                   <div class="col-md-7">
                        <label class="form-label " for="Amount">Montant prêt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="Amount" >Ar</span>
                            </div>
                            <input type="number" name="Amount"  class="form-control" id="Amount" min="0" step="500" placeholder="Montant prêt" required>
                        </div>
                   </div>
                   <div class="col-md-5 form-group">
                   <label class="form-label  " for="pourcentage">Pourcentage</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="amount">%</span>
                            </div>
                            <input type="number" class="form-control" id="pourcentage" placeholder="0%" max="100" min="1" required> 
                        </div> 
                   </div>
               </div>
               <div class="form-group  ">
                    <label class="form-label" for="Repayment_end_date">Date de remboursement</label>
                    <input type="date" class="form-control" id="Repayment_end_date " name="Repayment_end_date" required>  
               </div>
               <div class="form-group">
                    <label class="form-label " for="Benefit_payment_method">Mode de paiement des intérêt</label>
                    <select class="form-select" id="Benefit_payment_method" name="Benefit_payment_method" required>
                    <?php $p_method = requete_select($data_base,'Payment_method') ?>
                    <?php  foreach($p_method as $res):?>
                            <option value=<?= $res['id']?>><?= $res['Label']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Capital_payment_method">Mode de paiement du capital</label>
                    <select class="form-select" id="Capital_payment_method" name="Capital_payment_method" required>
                    <?php  foreach($p_method as $res):?>
                            <option value=<?= $res['id']?>><?= $res['Label']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3 bg-gray">
                <input type="submit" value="Enregistrer" class="btn btn-primary my-3" id="btn_envoyer">
            </div>
        </form>
   </main>
