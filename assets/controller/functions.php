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
?>