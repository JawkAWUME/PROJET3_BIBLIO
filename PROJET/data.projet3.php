<?php
function find_auteur(int $id):array|null{
    $auteurs=[
        ["idA"=>1,"nomA"=>"CLARK","prenomA"=>"James","profession1"=>"Ecrivain,"."  <br>Philosophe"],
        ["idA"=>2,"nomA"=>"JAMES","prenomA"=>"LeBron","profession1"=>"Basketteur,"."  <br>Entrepreneur"],
        ["idA"=>3,"nomA"=>"WALLACE","prenomA"=>"Christopher","profession1"=>"Ecrivain"],
        ["idA"=>4,"nomA"=>"CLOSIYI","prenomA"=>"Temilade","profession1"=>"Chanteuse Soul,"." "." <br>Compositrice"],
        ];
    foreach($auteurs as $k=> $v){
        if($v["$k"] == $id){
            return $v;
        }
}
return null;
}
function find_ouvrage(int $id):array{
        $ouvrages=[
            ["codeO"=>1,"titre"=>"Le Monde_S'effondre","dateE"=>"02/11/1986","auteur_id"=>2],
            ["codeO"=>2,"titre"=>"Les 12 Travaux de Komla","dateE"=>"10/08/1965"],"auteur_id"=>3,
            ["codeO"=>3,"titre"=>"La face cachée de l'Occident","dateE"=>"10/08/1947","auteur_id"=>1],
            ["codeO"=>4,"titre"=>"William J.Sidis,histoire d'un génie incompris","dateE"=>"27/04/2009","auteur_id"=>1],
            ["codeO"=>5,"titre"=>"Nigerian AfroBeat","dateE"=>"27/04/2009","auteur_id"=>4],
        ];
        foreach($ouvrages as $k =>$v){
            if($v[$k] == $id){
                return $v;
            }
}
}
function ouvrage(array $ouvrages):array{
    $ouvr=[];
    foreach($ouvrages as $v){
        $ouv=find_auteur($v["auteur_id"]);
        $ouvr=[
            "id"=>$v["codeO"],
            "titre"=>$v["titre"],
            "date"=>$v["dateE"],
            "auteur"=>$ouv["prenomA"]."  ".$ouv["nomA"]
        ];
    }
    return $ouvr;
}
function exemplaire(array $exemplaires):array{
    $ouvr=[];
    foreach($exemplaires as $v){
        $ouv=find_ouvrage($exemplaires["auteur_id"]);
        $ouvr=[
            "id"=>$v["codeE"],
            "date"=>$v["dateE"],
            "ouvrage"=>$ouv["titre"]
        ];
    }
    return $ouvr;
}
?>
