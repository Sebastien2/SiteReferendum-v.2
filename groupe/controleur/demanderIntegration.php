<?php

//Rentre dans la bdd la demande d'intégration de l'user
include(CHEMIN_MODELE.'groupe.php');

if(isIdentified())
{
	$erreur="Identifiaction requise";
	header('Location: index.php?module=user&action=connexion&erreur='.$erreur);
}

if(empty($_GET['idGroupe']))
{
	$erreur="Groupe inconnu 2";
	header('Location: index.php?module=user&action=connexion&erreur='.$erreur);
}

//action
$idGroupe=htmlspecialchars($_GET['idGroupe']);

$res=demandeIntegration($idGroupe, $_SESSION['id']);

var_dump($res);
/*
//redirection
if($res)
{
	$resultat="Demande enregistrée";
	header('Location: index.php?module=groupe&action=presentation&resultat='.$resultat);
}
else
{
	$erreur="Erreur durant l'enregistrement de votre demande";
	header('Location: index.php?module=groupe&action=presentation&resultat='.$erreur);
}
*/
?>