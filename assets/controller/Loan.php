<?php  require('functions.php')?>
<?php  require('../database/db.php')?>
<?= header_page('../../style/style.css','../../bootstrap-5.0.2-dist/css/bootstrap.min.css','Loan')?>
<?php 
    //notre dernier id dans la table;
    $last_id = get_last_id($data_base,'Loan');
    if($last_id > 0){
        $id=$last_id+1;
    }else{
        $id=1;
    }
    $sql = "INSERT INTO `Loan` (`loan_id`,`responsible`,`client`,`amount`,`loan_date`,`benefit_payment_method`,`capital_payment_method`,`remark`) VALUES ($id,?,?,?,?,?,?,?);";
    //tester si l'utilisateur envoye des valeurs vide;
      $test = false;
        $champ =[$_POST['responsible'],$_POST['client'],$_POST['amount'],$_POST['loan_date'],$_POST['benefit_payment_method'],$_POST['capital_payment_method'],$_POST['remark']];
       // testons si les champs ne sont pas vide et qu'elles existent;
       $test = test_user_input($champ);
    if($test){
        insertion($data_base,$sql,$champ); 
    }
?>
<?php header('location:../../index.php')?>