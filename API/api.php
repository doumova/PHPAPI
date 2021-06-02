<?php

define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
"://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

function getFormations(){
    $pdo = getConnexion();
    $req = "SELECT f.id, f.libelle, f.description, f.image, c.libelle as 'categorie'
     from formation f inner join categorie c on f.categorie_id = c.id";
     //on prepare la requete
     $stmt = $pdo->prepare($req);
     //on execute la requete
     $stmt -> execute();
     //on recupere
     $formations = $stmt->fetchAll(PDO::FETCH_ASSOC);
     
     for($i=0; $i< count($formations); $i++){
         $formations[$i]['image'] = URL."images/cours/".$formations[$i]['image'];
     }
     $stmt->closeCursor();
    //  print_r($formations);
     sendJSON($formations);

}

function getFormationsByCategorie($categorie){
    $pdo =getConnexion();
    $req = "SELECT f.id, f.libelle, f.description, f.image, c.libelle as 'categorie'
     from formation f inner join categorie c on f.categorie_id = c.id 
     where c.libelle = :categorie";
     //on prepare la requete
     $stmt = $pdo->prepare($req);
     $stmt->bindValue(":categorie", $categorie ,PDO::PARAM_STR);
     //on execute la requete
     $stmt -> execute();
     //on recupere
     $formations = $stmt->fetchAll(PDO::FETCH_ASSOC);
     for($i=0; $i< count($formations); $i++){
        $formations[$i]['image'] = URL."images/cours/".$formations[$i]['image'];
    }
     $stmt->closeCursor();
    //  print_r($formations);
     sendJSON($formations);
}

function getFormationById($id){
    $pdo =getConnexion();
    $req = "SELECT f.id, f.libelle, f.description, f.image, c.libelle as 'categorie'
     from formation f inner join categorie c on f.categorie_id = c.id 
     where f.id = :id";
     //on prepare la requete
     $stmt = $pdo->prepare($req);
     $stmt->bindValue(":id",$id,PDO::PARAM_INT);
     //on execute la requete
     $stmt -> execute();
     //on recupere
     $formation = $stmt->fetch(PDO::FETCH_ASSOC);
     $formation['image'] = URL."images/cours/".$formation['image'];
    
     $stmt->closeCursor();
    //  print_r($formations);
     sendJSON($formation);
}


//acces à la bdd
function getConnexion(){
    return new PDO("mysql:host=localhost;dbname=fh2prog;charset=utf8", "root","");
}

function sendJSON($infos){
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($infos,JSON_UNESCAPED_UNICODE);
}