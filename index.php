<?php
    require 'header.php';
    require 'bdd.php'; //appel fichier, declaration

    $bdd=connexion();
    $oeuvres=$bdd->query('SELECT * FROM oeuvres ORDER BY id ASC'); // Attention: oeuvres comme écris dans myphpadmin dans ma base de données car c'est de là qu'on veut récupérer nos tableaux . d'où le sens de ne pas utiliser le tableau php .
    
?>
<div id="liste-oeuvres">
    <?php foreach($oeuvres as $oeuvre): ?>
        <article class="oeuvre">
            <a href="oeuvre.php?id=<?= $oeuvre['id'] ?>">
                <img src="<?= $oeuvre['image'] ?>" alt="<?= $oeuvre['titre'] ?>">
                <h2><?= $oeuvre['titre'] ?></h2>
                <p class="description"><?= $oeuvre['artiste'] ?></p>
            </a>
        </article>
    <?php endforeach; ?>
</div>
<?php require 'footer.php'; ?>
