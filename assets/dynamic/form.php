<?php require_once('assets/dynamic/header.php')?>
<main class="container-fluid m-auto mt-3 container_form">       
        <form class="needs-validation border row">
            <div class="row m-0 mb-2  bg-gray">
                <h1 class="text-center  h2 my-2 ">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label " for="Responsible ">Responsable</label>
                        <select class="form-select form-check"  id="responsable" name="Responsible" required>
                            <option value="1">Agent1</option>
                            <option value="2">Agent2</option>
                            <option value="3">Agent3</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Client">Client</label>
                        <select class="form-select form-check"  id="Client" name="Client" required>
                            <option value="1">General tobacco</option>
                            <option value="2">Accès Banque</option>
                            <option value="3">Agrivet</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Loan_date ">Date du prêt</label>
                    <input type="date" class="form-control " id="Loan_date" name="Loan_date" required>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Repayment_frequency">Mode de remboursement:</label>
                        <select class="form-select" id="Repayment_frequency" name="Repayment_frequency"  required>
                            <option>Mensuel</option>
                            <option>Bimestriel</option>
                            <option>trimestriel</option>
                        </select>
                </div>
                <div class="form-group container_com">
                    <label class="form-label " for="commentaire">Commentaire</label>
                    <textarea type="text" class="form-control" id="commentaire"></textarea>
                    <label class="form-label" for="commentaire" name="commentaire" >Ajouter votre note ici</label>
                </div> 
            </div>
            <div class="col-lg-7">
               <div class="row">
                   <div class="col-md-7">
                        <label class="form-label " for="montant">Montant prêt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montant" >Ar</span>
                            </div>
                            <input type="number" name="montant"  class="form-control" id="montant" min="0" step="500" placeholder="Montant prêt" required>
                        </div>
                   </div>
                   <div class="col-md-5 form-group">
                   <label class="form-label  " for="pourcentage">Pourcentage</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montant">%</span>
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
                        <option>Mvola</option>
                        <option>Banque</option>
                        <option>OrangeMoney</option>
                        <option>AirtelMoney</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="Capital_payment_method ">Mode de paiement du capital</label>
                    <select class="form-select" id="Capital_payment_method " name="Capital_payment_method " required>
                        <option>Mvola</option>
                        <option>OrangeMoney</option>
                        <option>AirtelMoney</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-3 bg-gray">
                <input type="submit" value="Enregistrer" class="btn btn-primary my-3">
            </div>
        </form>
   </main>