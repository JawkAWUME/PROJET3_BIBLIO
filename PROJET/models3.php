<?php
require_once("data.projet3.php");
function find_rayon(int $id):array|null{
    $rayons=all_rayons();
    foreach($rayons as $k=> $v){
        if($v["id"] == $id){
            return $v;
        }
}
}
function find_auteur(int $id):array|null{
    $auteurs=all_authors();
    foreach($auteurs as $k=> $v){
        if($v["idA"] == $id){
            return $v;
        }
}
return null;
}
function find_ouvrage(int $id):array{
        $ouvrages=all_ouvrages();
        foreach($ouvrages as $k =>$v){
            if($v["codeO"] == $id){
                return $v;
            }
}
}
function ouvrage():array{
    $ouvrages=all_ouvrages();
    $ouvr=[];
    foreach($ouvrages as $k => $v){
        $ouv=find_auteur($v["auteur_id"]);
        
        $ouvr[]=[
            "id"=>$v["codeO"],
            "titre"=>$v["titre"],
            "date"=>$v["dateE"],
            "auteur"=>$ouv["prenomA"]."  ".$ouv["nomA"]
        ];
    }
    return $ouvr;
}
function exemplaire():array{
    $exemplaires=all_exemplaires();
    $ouvr=[];
    foreach($exemplaires as $k=> $v){
        $ouv=find_ouvrage($v["ouvrage_id"]);
        $ex=find_rayon($v["rayon_id"]);
        $ouvr[]=[
            "id"=>$v["codeE"],
            "date"=>$v["dateE"],
            "ouvrage"=>$ouv["titre"],
            "rayon"=>$ex["nom"],
        ];
    }
    return $ouvr;
}
?>
