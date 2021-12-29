<label class="form-label" for="responsable">Responsable:</label>
        <select class="form-select"  id="responsable">
            <option>Agent1</option>
            <option>Agent2</option>
            <option>Agent3</option>
        </select>

        <label class="form-label" for="Montantprêt">Montant prêt:</label>
        <div class="input-group">
             <span class="input-group-text">Ar</span>
             <input type="number" class="form-control" id="Montantprêt" placeholder="Montant prêt" required>
        </div>


        <label class="form-label" for="Pourcentage">Pourcentage:</label>
        <input type="number" class="form-control" id="Pourcentage" placeholder="0%" max="100" min="1" required>


        <label class="form-label" for="dateduprêt">Date du prêt:</label>
        <input type="date" class="form-control" id="dateduprêt" required>


        <label class="form-label" for="dateduremboursement">Date de remboursement:</label>
        <input type="date" class="form-control" id="dateduremboursement" required>


        <div class="col-md-6">
        <label class="form-label" for="Modederemboursement">Mode de remboursement:</label>
        <select class="form-select" id="Modederemboursement"required>
            <option>Mensuel</option>
            <option>Bimestriel</option>
            <option>trimestriel</option>
        </select>
    </div>



    <div class="col-md-6">
         <label class="form-label" for="Modedepayement">Mode de payement:</label>
         <select class="form-select" id="Modedepayement" required>
             <option>Mvola</option>
             <option>banque</option>
             <option>OrangeMoney</option>
             <option>AirtelMoney</option>
             
         </select>
     </div>



     <div class="row">
    <div class="col-md-6">
      <label class="form-label" for="commentaire">Commentaire</label>
      <textarea type="text" class="form-control" id="commentaire"></textarea>
      <label class="form-label" for="commentaire">Ajouter votre note ici</label>
  </div>
</div>
<div class="row" style="margin-left:75%;">
    <div class="col">
        <span class="bg-secondary">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </span>
       
    </div>
   
</div>