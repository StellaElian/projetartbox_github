<?php

if(empty($_POST['titre'])|| empty($_POST['artiste']) 
    || empty($_POST['description']) || empty($_POST['image']) 
    || strlen($_POST['description']) < 3 
    || !filter_var($_POST['image'],FILTER_VALIDATE_URL)
    )
{
    header('Location: ajouter.php');
}
else {

    $titre= htmlspecialchars($_POST[titre]);
    $artiste= htmlspecialchars($_POST[artiste]);
    $description= htmlspecialchars($_POST[description]);
    $image= htmlspecialchars($_POST[image]);

    require bdd.php ;
    $db=connexion();
    $requete=$db->prepare('INSERT INTO Oeuvres(titre,artiste,description,image)VALUES (?, ?, ?, ?)');
    $requete=execute([$titre, $artiste, $description, $image]); // renseigner les variables

    // Il faut rediriger l'utilisateur vers la page de la liste des oeuvres 
    
}

?>