<?php
function sendEmail(){
     $preName = $_POST['preNom'];
     $tel = $_POST['telephone'];
     $langue = $_POST['langue'];
     $email = $_POST['email'];
     $demande = $_POST['demande'];

     $mail = 'nom et prenom: '.$preName.PHP_EOL;
     $mail .= 'telephone: '.$tel.PHP_EOL;
     $mail .= 'langue: '.$langue.PHP_EOL;
     $mail .= 'email: '.$email.PHP_EOL;
     $mail .= 'demande: '.$demande.PHP_EOL;

     return wp_mail('gerlachebryan@hotmail.fr','nouveau message',$mail);
 }

