<?php

$subject = $_POST['subject'];
$user_mail = $_POST['user_mail'];
$user_message = $_POST['user_message'];


echo 'Merci '.$_POST['user_first_name']. ' ' .$_POST['user_last_name']. 'de nous avoir contacté à propos de  “'.$subject. '”. '. ' Un de nos conseiller vous contactera soit à l’adresse '.$user_mail. ' ou par téléphone au '.$_POST['user_tel']. ' dans les plus brefs délais pour traiter votre demande : '.$user_message;

?>