<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../../bootstrap-5.0.2-dist/css/bootstrap.min.css">    
    <title>formulaire</title>
    </style>
</head>
<body style="background-color:#151546;">
   <main class="container-fluid m-auto mt-3">       
        <form class="needs-validations border row">
            <div class="row m-0 mb-2" style="background-color:#010239;width:100vw;">
                <h1 class="text-center text-light h2 my-2 ">Formulaire de saisie d'un prêt</h1>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-label text-light" for="responsable">Responsable</label>
                        <select class="form-select form-check"  id="responsable" required>
                            <option value="1">Agent1</option>
                            <option value="2">Agent2</option>
                            <option value="3">Agent3</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label text-light" for="dateduprêt">Date du prêt</label>
                    <input type="date" class="form-control " id="dateduprêt" required>
                </div>
                <div class="form-group">
                    <label class="form-label text-light" for="Modederemboursement">Mode de remboursement:</label>
                        <select class="form-select" id="Modederemboursement"required>
                            <option>Mensuel</option>
                            <option>Bimestriel</option>
                            <option>trimestriel</option>
                        </select>
                </div>
                <div class="form-group">
                    <label class="form-label text-light" for="commentaire">Commentaire</label>
                    <textarea type="text" class="form-control" id="commentaire"></textarea>
                <label class="form-label" for="commentaire" style="color:#eae9e584;font-size:x-small">Ajouter votre note ici</label>
                </div>
            </div>
            <div class="col-lg-7">
               <div class="row">
                   <div class="col-md-7">
                        <label class="form-label text-light" for="montant">Montant prêt</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montant" style="color:grey;">Ar</span>
                            </div>
                            <input type="number" name="montant"  class="form-control" id="montant" min="0" step="500"placeholder="Montant prêt" required>
                        </div>
                   </div>
                   <div class="col-md-5 form-group">
                   <label class="form-label  text-light" for="Pourcentage">Pourcentage</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="montant" style="color:grey;">%</span>
                            </div>
                            <input type="number" class="form-control" id="Pourcentage" placeholder="0%" max="100" min="1" required> 
                        </div> 
                   </div>
               </div>
               <div class="form-group  text-light">
                    <label class="form-label" for="dateduremboursement">Date de remboursement:</label>
                    <input type="date" class="form-control" id="dateduremboursement" required>  
               </div>
               <div class="form-group">
                    <label class="form-label text-light" for="Modedepayement">Mode de payement:</label>
                    <select class="form-select" id="Modedepayement" required>
                        <option>Mvola</option>
                        <option>Banque</option>
                        <option>OrangeMoney</option>
                        <option>AirtelMoney</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end" style="background-color:#010239;">
                <input type="submit" value="enregistrer" class="btn btn-primary my-3">
            </div>
        </form>
   </main>
</body>
</html>