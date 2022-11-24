<?php
function find_auteur(int $id):array{
    $auteurs=[
        ["idA"=>1,"nomA"=>"CLARK","prenomA"=>"James","profession1"=>"Ecrivain,"."  <br>Philosophe"],
        ["idA"=>2,"nomA"=>"JAMES","prenomA"=>"LeBron","profession1"=>"Basketteur,"."  <br>Entrepreneur"],
        ["idA"=>3,"nomA"=>"WALLACE","prenomA"=>"Christopher","profession1"=>"Ecrivain"],
        ["idA"=>4,"nomA"=>"CLOSIYI","prenomA"=>"Temilade","profession1"=>"Chanteuse Soul,"." "." <br>Compositrice"],
        ];
    foreach($auteurs as $k =>$v){
       if($k="idA"){
        if($v[$k] == $id){
            return $v;
        }
    }
}
}

function ouvrage(array $ouvrages):array{
    $ouvro=[];
    foreach($ouvrages as $k=> $v){
        $ouvro=find_auteur($ouvrages["auteur_id"]);
        $ouvr[$k]=[
            "id"=>$v["codeO"],
            "titre"=>$v["titre"],
            "date"=>$v["dateE"],
            "auteur"=>$ouvro["prenomA"]."  ".$ouvro["nomA"]
        ];
    }
    return $ouvr;
}
?>