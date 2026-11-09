<?php
// DEMO 5D – Boucles : obtenir la somme 1+2+3+4+5 avec trois structures.
$n = 5;
$sommeWhile = 0; 
$i = 1;

// ÉTAPE 1 : TODO : $sommeWhile avec while.
while($i<$n){
    $sommeWhile += $i;
    $i++;
}
// ÉTAPE 2 : TODO : $sommeDo avec do...while.
$sommeDo = 0; $i=1;
do{
    $sommeDo+=$i;
    $i++;

}while($i<=$n);
// ÉTAPE 3 : TODO : $sommeFor avec for.
$sommeFor = 0;
for($i=1;$i<=$n; $i++){
    $sommeFor+=$i;

}


$produits = ['Pain', 'Lait', 'Beurre', 'Fromage'];
// ÉTAPE 4 : TODO : parcourir le tableau avec foreach dans le HTML.
?><!doctype html><html lang="fr"><head><meta charset="utf-8"><title>PHP – Cours 5</title><style>body{font:16px system-ui;max-width:850px;margin:35px auto;line-height:1.6}section{padding:12px;border-bottom:1px solid #ddd}code{background:#eee;padding:2px}</style></head>
<body>
    <h1>DEMO 5D – Boucles</h1>
<!-- TODO : afficher les trois sommes et la liste des produits dans <ul>. -->
    <p>While : <?= $sommeWhile ?>;
    do...while : <?= $sommeDo ?>;
    for : <?= $sommeFor ?>;
    </p>
    <ul>
        <?php 
            foreach($produits as $produit): ?>

                <li><?= $produit ?></li>
                
                <?php endforeach; ?>
        
    </ul>


    <a href="/">Retour aux démonstrations</a>
</body>
</html>