<?php
//Formulaire de contact
//regex nom
$regexName = '/^[a-zA-Z\-éèêëïîôöâäç ]+$/';
//Déclaration regex numéro de téléphone
$regexPhoneNumber = '/^[0-9]{10}$/';
//Déclaration regex texte
$regexText = '/^[0-9a-zA-Zàáâãäåçèéêëìíîïðòóôõöùúûüýÿ\-\ \.\,\?\:\!\']+$/';

//déclaration d'un tableau d'érreur
$formError = array();

//Si on valide le formulaire alors on vérifie les conditions et on affiche les messages d'erreurs liès aux champs du formulaire
if (isset($_POST['send'])) {
//Si your-name existe , la passer au test regex , si elle passe la stocker dans $lastName sinon c'est vide
    if (isset($_POST['your-name'])) {
        //déclarion de la variable lastname avec le htmlspecialchar qui change l'interprétation des balises par le code
        $lastname = htmlspecialchars($_POST['your-name']);
        //test de la regex si elle est invalide
        if (!preg_match($regexName, $lastname)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-name'] = 'Veuillez entrer un Nom valide';
        }
        // verifie si le champs de nom est vide
        if (empty($lastname)) {
            //stocker dans le tableau le rapport d'erreur
            $formError['your-name'] = 'Le champ "nom" est à saisir obligatoirement.';
        }
    }

//déclarion de la variable $mail avec le htmlspecialchar qui change l'interprétation des balises par le code
    if (isset($_POST['your-email'])) {
        $mail = htmlspecialchars($_POST['your-email']);
        //le filtre permet de verifier l'email
        if (!FILTER_VAR($mail, FILTER_VALIDATE_EMAIL)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-email'] = 'Veuillez entrer un Email valide';
        }
        // verifie si le champs de l'Email est vide
        if (empty($mail)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-email'] = 'Le champ "Email" est à saisir obligatoirement.';
        }
    }

//Si your-tel-615 existe , la passer au test regex , si elle passe la stocker dans $phone sinon c'est vide
    if (isset($_POST['your-tel-615'])) {
        //déclarion de la variable phone avec le htmlspecialchar qui change l'interprétation des balises par le code
        $phone = htmlspecialchars($_POST['your-tel-615']);
        //test de la regex si elle est invalide
        if (!preg_match($regexPhoneNumber, $phone)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-tel-615'] = 'Veuillez entrer un numéro de téléphone valide';
        }
        // verifie si le champs de nom et vide
        if (empty($phone)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-tel-615'] = 'Le champ "Téléphone" est à saisir obligatoirement.';
        }
    }

//Si your-subject existe , la passer au test regex , si elle passe la stocker dans $subject sinon c'est vide
    if (isset($_POST['your-subject'])) {
        //déclarion de la variable subject avec le htmlspecialchar qui change l'interprétation des balises par le code
        $subject = htmlspecialchars($_POST['your-subject']);
        //test de la regex si elle est invalide
        if (!preg_match($regexText, $subject)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-subject'] = 'Veuillez entrer un sujet valide';
        }
        // verifie si le champs de nom et vide
        if (empty($subject)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-subject'] = 'Le champ "sujet" est à saisir obligatoirement.';
        }
    }

//Si your-ville existe , la passer au test regex , si elle passe la stocker dans $city sinon c'est vide
    if (isset($_POST['your-ville'])) {
        //déclarion de la variable $city avec le htmlspecialchar qui change l'interprétation des balises par le code
        $city = htmlspecialchars($_POST['your-ville']);
        //test de la regex si elle est invalide
        if (!preg_match($regexText, $city)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-ville'] = 'Veuillez entrer un nom de ville valide';
        }
        // verifie si le champs de nom et vide
        if (empty($city)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-ville'] = 'Le champ "ville" est à saisir obligatoirement.';
        }
    }

//Si your-message existe , la passer au test regex , si elle passe la stocker dans $message sinon c'est vide
    if (isset($_POST['your-message'])) {
        //déclarion de la variable message avec le htmlspecialchar qui change l'interprétation des balises par le code
        $message = htmlspecialchars($_POST['your-message']);
        //test de la regex si elle est invalide
        if (!preg_match($regexText, $message)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-message'] = 'Veuillez entrer un message valide';
        }
        // verifie si le champs de nom et vide
        if (empty($message)) {
            //stocker dans le tableau le rapport d'érreur
            $formError['your-message'] = 'Le champ "message" est à saisir obligatoirement.';
        }
    }
}
//Si on valide le formulaire et qu'il n'y a pas d'erreur dans le tableau des erreurs
if(isset($_POST['send']) && count($formError) == 0){
    //on verifie qu'il n'y a pas d'erreur de transfert
   ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    //On definie le destinataire
    $to = 'massafranck@gmail.com';
    //On définie le message
    $messageMail = $city . ' ' . $phone . ' ' . $message;
    //On définie l'expéditeur de l'email
    $from = $mail;
    //On définie l'entête de l'email
    $headers = 'From:' . $lastname;
    //On envoie l'Email au destinataire de l'Email
    mail($to, $subject, $messageMail, $headers);
}
?>
