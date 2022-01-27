<?php  require('assets/database/db.php')?>
<main class="container-fluid m-auto mt-3 container_form">       
        <form class="needs-validation border row" method="POST" action="assets/controller/Loan.php">
            <div class="row m-0 mb-2  bg-gray">
                <h1 class="text-center  h2 my-2 ">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label " for="responsable ">Responsable</label>
                        <select class="form-select form-check"  id="responsible" name="responsible" required>
                        <?php $responsable = requete_select($data_base,'responsible'); ?>
                        <?php  foreach($responsable as $res):?>
                            <option value=<?= $res['responsible_id']?>><?= $res['last_name']?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Client">Client</label>
                        <select class="form-select form-check"  id="Client" name="client" required>
                        <?php $client = requete_select($data_base,'client'); ?>
                        <?php  foreach($client as $res):?>
                            <option value=<?= $res['client_id']?>><?= $res['company_name']?></option>
                        <?php endforeach; ?>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="loan_date ">Date du prêt</label>
                    <input type="date" class="form-control " id="loan_date" name="loan_date" required>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Repayment_frequency">Mode de remboursement:</label>
                        <select class="form-select" id="Repayment_frequency" name="repayment_frequency"  required>
                        <?php $Repayment_frequency = requete_select($data_base,'repayment_frequency'); ?>
                        <?php  foreach($Repayment_frequency as $res):?>
                            <option value=<?= $res['repayment_frequency_id']?>><?= $res['wording']?></option>
                        <?php endforeach; ?>>
                        </select>
                </div>
                <div class="form-group container_com">
                    <label class="form-label " for="remark">Commentaire</label>
                    <textarea type="text" class="form-control" id="remark" name="remark" ></textarea>
                    <label class="form-label" for="remark"  >Ajouter votre note ici</label>
                </div> 
            </div>
            <div class="col-lg-7">
               <div class="row">
                   <div class="col-md-7">
                        <label class="form-label " for="amount">Montant prêt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="amount" >Ar</span>
                            </div>
                            <input type="number" name="amount"  class="form-control" id="amount" min="0" step="500" placeholder="Montant prêt" required>
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
                    <input type="date" class="form-control" id="Repayment_end_date " name="repayment_end_date" required>  
               </div>
               <div class="form-group">
                    <label class="form-label " for="benefit_payment_method">Mode de paiement des intérêt</label>
                    <select class="form-select" id="benefit_payment_method" name="benefit_payment_method" required>
                    <?php $p_method = requete_select($data_base,'payment_method') ?>
                    <?php  foreach($p_method as $res):?>
                            <option value=<?= $res['payment_method_id']?>><?= $res['label']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="capital_payment_method">Mode de paiement du capital</label>
                    <select class="form-select" id="capital_payment_method" name="capital_payment_method" required>
                    <?php  foreach($p_method as $res):?>
                            <option value=<?= $res['capital_payment_method_id']?>><?= $res['label']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3 bg-gray">
                <input type="submit" value="Enregistrer" class="btn btn-primary my-3" id="btn_envoyer">
            </div>
        </form>
   </main>
