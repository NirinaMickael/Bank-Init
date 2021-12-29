<main class="container-fluid m-auto mt-3 container_form">       
        <form class="needs-validation border row">
            <div class="row m-0 mb-2  bg-gray">
                <h1 class="text-center  h2 my-2 ">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label " for="resp">Responsable</label>
                        <select class="form-select form-check"  id="resp" required>
                            <option value="1">Agent1</option>
                            <option value="2">Agent2</option>
                            <option value="3">Agent3</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label " for="dateduprêt">Date du prêt</label>
                    <input type="date" class="form-control " id="dateduprêt" required>
                </div>
                <div class="form-group">
                    <label class="form-label " for="md-r">Mode de remboursement:</label>
                        <select class="form-select" id="md-r"required>
                            <option>Mensuel</option>
                            <option>Bimestriel</option>
                            <option>trimestriel</option>
                        </select>
                </div>
                <div class="form-group container_com">
                    <label class="form-label " for="com">Commentaire</label>
                    <textarea type="text" class="form-control" id="com"></textarea>
                    <label class="form-label" for="com">Ajouter votre note ici</label>
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
                            <input type="number" name="montant"  class="form-control" id="montant" min="0" step="500"placeholder="Montant prêt" required>
                        </div>
                   </div>
                   <div class="col-md-5 form-group">
                   <label class="form-label  " for="Pourcentage">Pourcentage</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montant">%</span>
                            </div>
                            <input type="number" class="form-control" id="Pourcentage" placeholder="0%" max="100" min="1" required> 
                        </div> 
                   </div>
               </div>
               <div class="form-group  ">
                    <label class="form-label" for="dt-remb">Date de remboursement</label>
                    <input type="date" class="form-control" id="dt-remb" required>  
               </div>
               <div class="form-group">
                    <label class="form-label " for="md-p">Mode de paiement</label>
                    <select class="form-select" id="md-p" required>
                        <option>Mvola</option>
                        <option>Banque</option>
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