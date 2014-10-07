<?php 

header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');

if(isset($_POST)  && isset($_POST['email']) && isset($_POST['message'])){
	if( !empty($_POST['email']) && !empty($_POST['message'])){
		$destinataire = "jevrard_1@hotmail.com";
		$sujet = "Demande de contact";
		$message = "Message : ".$_POST['message']."\r\n";
		$entete = 'From: '.$_POST['email']."\r\n".
        	'Reply-To: '.$_POST['email']."\r\n".
		'X-Mailer: PHP/'.phpversion();
		if (!mail($destinataire,$sujet,$message,$entete)){
 			die("Une erreur inconnue est survenue lors de l'envoi du formulaire par email");
		}else{
			die('réussi');
		}
	}
}