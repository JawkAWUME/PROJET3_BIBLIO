<?php
$classes=[
[   "id"=>1,"Filieres"=> "GLRS","niveau"=> "L1","libelle"=>"L1 GLRS",

],
["id"=>2,"Filieres"=> "GLRS","niveau"=> "L2","libelle"=>"L2 GLRS",]
,
["id"=>3, "Filieres"=> "GLRS","niveau"=> "L3","libelle"=>"L3 GLRS"],
[   "id"=>4,"Filieres"=> "CDSD","niveau"=> "L1","libelle"=>"L1 CDSD"

],
["id"=>5,"Filieres"=> "CDSD","niveau"=> "L2","libelle"=>"L2 CDSD"]
,
["id"=>6,"Filieres"=> "CDSD","niveau"=> "L3","libelle"=>"L3 CDSD"]
];
$professeurs=[["id"=>1,"nom"=>"WANE","prenom"=>"Baila","modules"=>["ALGO","HTML CSS","UML","PHP"]],
["id"=>1,"nom"=>"NIANG","prenom"=>"Aly","modules"=>["PYTHON","HTML CSS","C","JS"]]];

$etudiants=[
    ["id"=>1,"nom"=>"MISSEKPE","prenom"=>"Fulbert","matricule"=>uniqid()],
    ["id"=>2,"nom"=>"AWUME","prenom"=>"Jason","matricule"=>uniqid()],
    ["id"=>3,"nom"=>"SY","prenom"=>"Abdoulaye","matricule"=>uniqid()],
    ["id"=>4,"nom"=>"SOWOU","prenom"=>"Sidoinette","matricule"=>uniqid()],
    ["id"=>5,"nom"=>"AGBENONSSI","prenom"=>"Manuel","matricule"=>uniqid()],
];
$inscriptions=[
    ["id"=>1,"date"=>"10/11/2021","annee"=>"2021-2022","etudiant_id"=>1,"classe_id"=>1],
    ["id"=>2,"date"=>"12/11/2021","annee"=>"2021-2022","etudiant_id"=>2,"classe_id"=>1],
    ["id"=>3,"date"=>"23/11/2021","annee"=>"2021-2022","etudiant_id"=>3,"classe_id"=>1],
    ["id"=>4,"date"=>"19/11/2021","annee"=>"2021-2022","etudiant_id"=>4,"classe_id"=>4],
    ["id"=>5,"date"=>"13/11/2021","annee"=>"2021-2022","etudiant_id"=>5,"classe_id"=>4],
    ["id"=>6,"date"=>"10/11/2022","annee"=>"2022-2023","etudiant_id"=>1,"classe_id"=>2],
    ["id"=>7,"date"=>"10/11/2022","annee"=>"2022-2023","etudiant_id"=>2,"classe_id"=>2],
    ["id"=>8,"date"=>"23/11/2022","annee"=>"2022-2023","etudiant_id"=>5,"classe_id"=>1],
    ["id"=>9,"date"=>"19/11/2022","annee"=>"2022-2023","etudiant_id"=>3,"classe_id"=>5],
    ["id"=>10,"date"=>"13/11/2022","annee"=>"2022-2023","etudiant_id"=>4,"classe_id"=>5],
];
$demandes=[
    ["id"=>1,"date"=>"24/02/2022","inscription_id"=>1,"motif"=>"Préparation de concours","statut"=>"Refusé"],
    ["id"=>2,"date"=>"19/04/2022","inscription_id"=>3,"motif"=>"Maladie","statut"=>"Accepté"],
    ["id"=>3,"date"=>"07/02/2023","inscription_id"=>9,"motif"=>"Voyage","statut"=>"En Cours De Traitement"],
    ["id"=>4,"date"=>"21/01/2023","inscription_id"=>9,"motif"=>"Voyage","statut"=>"En Cours De Traitement"],
];
$classes_prof=[
    ["classe_id"=>1,"professeur_id"=>1,"annee"=>"2021-2022"],
    ["classe_id"=>2,"professeur_id"=>1,"annee"=>"2021-2022"],
    ["classe_id"=>1,"professeur_id"=>2,"annee"=>"2021-2022"],
    ["classe_id"=>1,"professeur_id"=>1,"annee"=>"2022-2023"],
    ["classe_id"=>2,"professeur_id"=>1,"annee"=>"2022-2023"],
    ["classe_id"=>5,"professeur_id"=>1,"annee"=>"2022-2023"],
    ["classe_id"=>4,"professeur_id"=>2,"annee"=>"2021-2022"],
    ["classe_id"=>5,"professeur_id"=>1,"annee"=>"2021-2022"],
    
];
function joindre_etudiant(int $id,array $etudiants):void{
     echo($etudiants[$id]["nom"]);
     echo($etudiants[$id]["prenom"]);
     
}
function joindre_classes(int $id,array $classes):void{
    echo($classes[$id]["libelle"]);
   
    
}
?>