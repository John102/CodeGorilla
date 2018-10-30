 <?php
    
    require('sanitize.php');

    // RESETTEN VAN VARIABELEN
    $voornaam = $achternaam = $telefoon = $email = $onderwerp = $opmerking = '';

    // BEHANDELEN EN OPSLAAN INGEVOERDE DATA
    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        // VOORNAAM CONTROLEREN
        if(empty($_POST['voornaam'])) {
            // GEEN NAAM
            header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
            die();
        } else {
            $voornaam       = testData($_POST['voornaam']);
            // INGEVOERDE NAAM CONTROLEREN OP KARAKTERS
            if(!preg_match('/^[a-zA-Z ]*$/', $voornaam)) {
                header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
                die();
            }
        }

        // ACHTERNAAM CONTROLEREN
        if(empty($_POST['achternaam'])) {
            // GEEN NAAM
           header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
            die();
        } else {
            $achternaam     = testData($_POST['achternaam']);
            // INGEVOERDE NAAM CONTROLEREN OP KARAKTERS
            if(!preg_match('/^[a-zA-Z ]*$/', $achternaam)) {
                header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
                die();
            }
        }

        // TELEFOON CONTROLEREN
        if(empty($_POST['telefoon'])) {
            // GEEN TELEFOON
            header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
            die();
        } else {
            $telefoon = testData($_POST['telefoon']);
            // INGEVOERDE TELEFOON NUMMER VALIDEREN
            if(!is_numeric($telefoon)) {
                header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
                die();
            }
        }
        

        // EMAILVELD CONTROLEREN
        if(empty($_POST['email'])) {
            // GEEN EMAIL ADRES
            header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
            die();
        } else {
            $email      = testData($_POST['email']);
            // INGEVOERDE EMAIL ADRES CONTROLEREN OP KARAKTERS
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // FOUTIEF EMAIL ADRES
                header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
                 die();
            }
        }

        // TEKSTVELD CONTROLEREN
        if(empty($_POST['opmerking'])) {
            // GEEN BERICHT
            header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
            die();
        } else {
            $opmerking      = testData($_POST['opmerking']);
        }

        // SETTING UP EMAIL
        $to         =       'john@mijnhoekje.nl';
        $from       =       $email;
        $name       =       $voornaam . ' ' . $achternaam;
        $subject    =       '[Maatschappelijk Breda] Contact Formulier';
        $message    =       $opmerking;

        $headers    =   "MIME-Version: 1.0\r\n";
        $headers    .=  "Content-type: text/html; charset=ISO-8859-1\r\n";
        $headers    .=  "From: " . $from . "\r\n";


        $msg        =   "<html><body>";
        $msg        .=  "<p>Email van: " . $name . "</p>";
        $msg        .=  "<p>Telefoon nummer:" . $telefoon . "</p>";
        $msg        .=  "<p>Verzonden via: " . $from . "</p>";
        $msg        .=  "<p>Onderwerp: " . $subject . "</p>";
        $msg        .=  "<p>Bericht: " . $message . "</p>";
        $msg        .=  "</body></html>";
        
        $mailsuccess = mail($to, $subject, $msg, $headers);
        
        
        if($mailsuccess == TRUE) {
            header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
            die();
        } else {
            header('Location: https://www.mijnhoekje.nl/cg/index.php?pagina=contact');
            die();
        }
    
    }

?>
