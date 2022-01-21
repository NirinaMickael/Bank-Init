<?php require_once('assets/dynamic/header.php')?>
<main class="container-fluid m-auto mt-3 container_form">       
        <form class="needs-validation border row">
            <div class="row m-0 mb-2  bg-gray">
                <h1 class="text-center  h2 my-2 ">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label " for="responsable">Responsable</label>
                        <select class="form-select form-check"  id="responsable" name="responsable" required>
                            <option value="1">Agent1</option>
                            <option value="2">Agent2</option>
                            <option value="3">Agent3</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="client">Client</label>
                        <select class="form-select form-check"  id="client" name="client" required>
                            <option value="1">General tobacco</option>
                            <option value="2">Accès Banque</option>
                            <option value="3">Agrivet</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="date_du_prêt">Date du prêt</label>
                    <input type="date" class="form-control " id="date_du_prêt" name="date_du_pret" required>
                </div>
                <div class="form-group">
                    <label class="form-label " for="mode_de_remboursement">Mode de remboursement:</label>
                        <select class="form-select" id="mode_de_remboursement" name="mode_de_remboursement" required>
                            <option>Mensuel</option>
                            <option>Bimestriel</option>
                            <option>trimestriel</option>
                        </select>
                </div>
                <div class="form-group container_com">
                    <label class="form-label " for="commentaire">Commentaire</label>
                    <textarea type="text" class="form-control" id="commentaire"></textarea>
                    <label class="form-label" for="com" name="commentaire">Ajouter votre note ici</label>
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
                    <label class="form-label" for="date_de_remboursement">Date de remboursement</label>
                    <input type="date" class="form-control" id="date_de_remboursement" name="date_de_remboursement" required>  
               </div>
               <div class="form-group">
                    <label class="form-label " for="mode_de_paiment_interet">Mode de paiement des intérêt</label>
                    <select class="form-select" id="mode_de_paiment_interet" name="mode_de_paiment_interet" required>
                        <option>Mvola</option>
                        <option>Banque</option>
                        <option>OrangeMoney</option>
                        <option>AirtelMoney</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="mode_de_paiment_capital">Mode de paiement du capital</label>
                    <select class="form-select" id="mode_de_paiment_capital" name="mode_de_paiment_capital" required>
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