<?php 
function inscription(array $inscriptions):array{
    $inscripts=[];
    foreach($inscriptions as  $v){
        $etudiant=find_inscrits($v["etudiant_id"]);
        $classe=find_classes($v["classe_id"]);
        $inscripts[]=[
                "matricule"=>$etudiant["matricule"],
                "etudiant"=>$etudiant["nom"]." ".$etudiant["prenom"],
                "classe"=>$classe["libelle"],
                "annee"=> $v["annee"]
        ];
    }
    return $inscripts;
}
function find_inscrits(int $id):array|null{
    foreach($etudiants as $k => $v){
         if ($v[$k]==$id){
            return $v;
         }
    }
    return null;
}
function find_classes(int $id):array|null{
    foreach($classes as $k => $v){
         if ($v[$k]==$id){
            return $v;
         }
    }
    return null;
}
?>