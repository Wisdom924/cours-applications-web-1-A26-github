<?php
// DEMO 5C – Conditions
$age = 15;
$prix = 150;
// ÉTAPE 1 : if / elseif / else : mineur -10 $, aîné (65+) -5 $, adulte prix normal.
// TODO : calculer $categorie et modifier $prix UNE SEULE FOIS.
if($age < 18){
    $categorie ='Enfant';
    
    $prix-= 10; //$prix = $prix - 10;

}elseif($age >= 65){
    $categorie='Aine';
    $prix-=5;
}else{
    $categorie = 'Adulte';
}

$jour = 'mardi';
// ÉTAPE 2 : switch : lundi = Soupe, mardi = Poulet rôti, mercredi = Pâtes, autre = Menu non défini.
// TODO : définir $menu.

switch($jour){
    case 'lundi' : $menu = 'Soupe du jour';
    break;
    case 'mardi' : $menu = 'Poulet rôti';
    break;
    case 'mercredi' : $menu = 'Pâtes';
    break;
    default : $menu = 'Menu non défini';
}

$code = 4;
// ÉTAPE 3 : match : 1 -> Code 1 ; 2 ou 3 -> Code 2 ou 3 ; autre -> Autre code.
// TODO : définir $choix.
$choix = match($code){
    1 => 'Code 1',
    2,3,4 => 'Code 2 ou 3 ou 4',
    default => 'Autre code'
}

?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head><body><h1>DEMO 5C – Conditions</h1>
<!-- TODO : afficher la catégorie, le prix, le menu et le choix ; échapper les chaînes. -->

    <p><?= $categorie ?> : <?= $prix ?></p>
    <p>Menu : <?=  $menu ?></p>
    <p>Match : <?= $choix ?></p>



    <a href="/">Retour aux démonstrations</a>
</body></html>