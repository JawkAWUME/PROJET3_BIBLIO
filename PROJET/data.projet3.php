<?php 
$rayons=[["id"=>1,"nom"=>"Romans_Policiers"],
["id"=>2,"nom"=>"Littérature"],
["id"=>3,"nom"=>"Géopolitique"],
["id"=>4,"nom"=>"Science"],
["id"=>5,"nom"=>"Culture"],
["id"=>6,"nom"=>"Sport"],

];
$ouvrages=[
["codeO"=>1,"titre"=>"Le Monde_S'effondre","dateE"=>"02/11/1986","auteur_id"=>2],
["codeO"=>2,"titre"=>"Les 12 Travaux de Komla","dateE"=>"10/08/1965"],"auteur_id"=>3,
["codeO"=>3,"titre"=>"La face cachée de l'Occident","dateE"=>"10/08/1947","auteur_id"=>1],
["codeO"=>4,"titre"=>"William J.Sidis,histoire d'un génie incompris","dateE"=>"27/04/2009","auteur_id"=>1],
["codeO"=>5,"titre"=>"Nigerian AfroBeat","dateE"=>"27/04/2009","auteur_id"=>4],
];
$auteurs=[
["idA"=>1,"nomA"=>"CLARK","prenomA"=>"James","profession1"=>"Ecrivain,"."  <br>Philosophe"],
["idA"=>2,"nomA"=>"JAMES","prenomA"=>"LeBron","profession1"=>"Basketteur,"."  <br>Entrepreneur"],
["idA"=>3,"nomA"=>"WALLACE","prenomA"=>"Christopher","profession1"=>"Ecrivain"],
["idA"=>4,"nomA"=>"CLOSIYI","prenomA"=>"Temilade","profession1"=>"Chanteuse Soul,"." "." <br>Compositrice"],
];
$exemplaires=[
    ["codeE"=>1,"dateE"=>"09/11/2022","ouvrage_id"=>2,"rayon_id"=>1],
    ["codeE"=>2037,"dateE"=>"01/09/2022","ouvrage_id"=>1,"rayon_id"=>2],
    ["codeE"=>2132,"dateE"=>"03/02/2022","ouvrage_id"=>3,"rayon_id"=>3],
    ["codeE"=>1139,"dateE"=>"24/05/2022","ouvrage_id"=>2,"rayon_id"=>4],
    ["codeE"=>1121,"dateE"=>"25/04/2022","ouvrage_id"=>1,"rayon_id"=>2],
    ["codeE"=>1138,"dateE"=>"02/09/2022","ouvrage_id"=>3,"rayon_id"=>3],
];
$adherents=[
    ["idA"=>1,"prenomA"=>"Amah","nomA"=>"KWATCHA","num_tel"=>"+228 78212223","adresse"=>"Rue MZ 45"],
    ["idA"=>2,"prenomA"=>"Jeffrey","nomA"=>"MBEMBA","num_tel"=>"+221 762132438","adresse"=>"Rue LIB 78"],
    ["idA"=>3,"prenomA"=>"Quavious","nomA"=>"MARSHALL","num_tel"=>"+221 702832539","adresse"=>"Avenue Wagane DIOUF"],
    ["idA"=>4,"prenomA"=>"Jason","nomA"=>"AWUME","num_tel"=>"+221 772460774","adresse"=>"Rue MZ 22"],
    ["idA"=>5,"prenomA"=>"Markus","nomA"=>"NEUER","num_tel"=>"+221 752481270","adresse"=>"Rue OKM 68"],

];
$prets=[
    ["codeP"=>1,"date"=>"02/11/2022","date_retour"=>"09/11/2022","date_prevue"=>"17/11/2022","exemplaire_id"=>1139,"adherent_id"=>3],
    ["codeP"=>2,"date"=>"04/11/2022","date_retour"=>"22/11/2022","date_prevue"=>"19/11/2022","exemplaire_id"=>1121,"adherent_id"=>5],
    ["codeP"=>3,"date"=>"01/01/2022","date_retour"=>"22/01/2022","date_prevue"=>"15/01/2022","exemplaire_id"=>1138,"adherent_id"=>1],
    ["codeP"=>4,"date"=>"18/03/2022","date_retour"=>"22/03/2022","date_prevue"=>"02/04/2022","exemplaire_id"=>2037,"adherent_id"=>4],
    ["codeP"=>5,"date"=>"10/07/2022","date_retour"=>"25/07/2022","date_prevue"=>"25/07/2022","exemplaire_id"=>1,"adherent_id"=>2],
];
$demandes=[
    ["codeD"=>1,"date_d"=>"01/10/2022","adherent_id"=>2,"etat"=>"En attente","exemplaire_id"=>1121],
    ["codeD"=>2,"date_d"=>"23/09/2022","adherent_id"=>2,"etat"=>"Rejetée","exemplaire_id"=>1],
    ["codeD"=>3,"date_d"=>"23/09/2022","adherent_id"=>3,"etat"=>"Validée","exemplaire_id"=>2132],
]
?>