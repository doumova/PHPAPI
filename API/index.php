<?php
require_once("./api.php");

// www.monsite.fr/formations => www.monsite.fr/index.php?demande =formations
// www.monsite.fr/formations/:categorie (PHP,JAVASCRIPT......)
// www.monsite.fr/formation/:id (6, 7, 15)

try{

    if(!empty($_GET['demande'])){
        
        $url = explode("/", filter_var($_GET['demande'], FILTER_SANITIZE_URL));

        switch($url[0]){
            case "formations" :
                if(empty ($url[1])){
                    getFormations();
                } else{
                    getFormationsByCategorie($url[1]);
                }
            break;
            case "formation" :
                if(!empty ($url[1])){
                    getFormationById($url[1]);
                } else{
                    throw new Exception("Vous n'avez pas renseigner le numéro de formation");
                }
            break;
            default : throw new Exception("La demande n'est pas valide, verifiez l'url svp !");
        }

    }else{
        throw new Exception("Probleme de recuperation de données");
    }

} catch(Exception $e){
    $erreur=[
        "message"=>$e->getMessage(),
        "code"=>$e->getCode()
    ];

    print_r($erreur);
}
