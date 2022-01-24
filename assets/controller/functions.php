<?php
    //l'en-tete de la page
    function header_page($style_link,$boostrap_link,$title){
        //$stylelink : l'emplacement de notre fichier css
         //$boostrap_link : l'emplacement de notre fichier boostrap
          //$title : titre de notre page
        return <<<HTML
            <!DOCTYPE html>
            <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <link rel="stylesheet" href="$style_link">
                    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
                    <link rel="stylesheet" href="$boostrap_link">
                    <title>$title</title>
                </head>
            <body>
HTML;
    }
    //function qui gere la connection a la base de donne
    function connect_database($DB_HOST,$DB_NAME,$DB_USER,$DB_PASS){
        try {
            return new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME",$DB_USER,$DB_PASS);
        } catch (PDOException $ex) {
            //retourner une message d'erreur en cas d'echec
           echo  "<p class='container-fluid bg-danger'>{$ex->getMessage()}</p>";
        }
    }
    // requete SQL : selectionner la ta ble
    function select_sql_requete ($TABLE_NAME){
        return "SELECT * FROM `$TABLE_NAME` ";
    }
    //fonction qui la gere preparation/execution/stockage de la requete
    function requete_select($DATA_BASE,$TABLE_NAME){
        $sql= select_sql_requete($TABLE_NAME);
        $requete= $DATA_BASE->prepare($sql);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
    //fonction qui gere l'insertion de notre db formulaire dans notre bd
    function insertion($DATA_BASE,$sql,$champ){
        $query = $DATA_BASE->prepare($sql);
        $query->execute([...$champ]);
    }
    //pour obtenir la dernier id table $table_name;
    function get_last_id($DATA_BASE,$TABLE_NAME){
        $data = requete_select($DATA_BASE,$TABLE_NAME);
        if(count($data)){
            $last_id = $data[count($data)-1]['id'];
            return $last_id;
        }else{
            return 0;
        }
    }
    //pour tester si l'utilisateur envoye des champs  vide
    function test_user_input($champ){
        $test = false;
        foreach($champ as $key => $val){
            if(empty($val) == true && isset($val)==false){
                 $test = false;
                 break;
            }else{
              // strip_tags : va enelever les balises html lorsque l'utilisateur les tape   
                 $val = strip_tags($val);
                $test = true;
            }
        }
        return $test;
    }
?>