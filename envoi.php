<?php 
    /* Data recovery */
    $name = $_POST["name"]; 
    $firstname= $_POST['firstname']; 
    $mail= $_POST['email']; 
    $object= $_POST['object']; 
    $message = $_POST['message']; 

    /* Sending e-mail with setting */
    $mess = nl2br($message) ;
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From:'.$name.' <'.$mail.'>' . "\r\n" .
            'Reply-To:'.$mail. "\r\n" .
            'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
            'Content-Disposition: inline'. "\r\n" .
            'Content-Transfer-Encoding: 7bit'." \r\n" .
            'X-Mailer:PHP/'.phpversion();
    $subject="$object"; 
    $destinataire="yourmail@yourmail.com"; /* your email */
    $body="Name : $name"."\n"
        ."Firstname : $firstname"."\n"
        ."E-mail : $mail"."\n"
        ."Object : $object"."\n"
        ."Message :"."\n"
        ."$mess";     
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">		
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ContactFormFeedback</title>
        <meta name="description" content="Contact form with user feedback">   
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,500,400italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">		
        <script type="text/javascript" src="js/modernizr.js"></script>
    </head>
    <body>
        <div id="header">
            <div class="wrap">
                <header>
                    <a href="www.alexandre-noe.fr" title="Accueil">
                        <img src="img/Alex.jpg" alt="logo">
                    </a>
                </header>
            </div>
        </div>
        
        <main class="mts">
            <div class="wrap">
                <div class="grid">
                    <article class="col-m-2 description">
                        <h1 class="h3-like">Contact form with user feedback</h1>
                        <p>This contact form allows sending an e-mail and displays the mail sent to the site. The goal is to optimize the user experience with feedback.</p>
                    </article>
                </div>
            </div>
            
            <div class="wrap mts mbs">  
                <div class="col-d-8 col-m-2">
                    <?php
                    /* E-mail display */
                        if (mail($destinataire,$subject,$body,$headers)) { 
                            echo '<h2 class=" txt-center">Your e-mail has been sent</h2>'
                            .'<div class="grid">'
                                .'<p class="col-m-2 col-d-6"><strong>Name :</strong> '.$name.'</p>'
                                .'<p class="col-m-2 col-d-6"><strong>Firstname :</strong> '.$firstname.'</p>'
                                .'<p class="col-m-2 col-d-6"><strong>E-mail :</strong> '.$mail.'</p>'
                                .'<p class="col-m-2 col-d-6 mts"><strong>Object :</strong> '.$object.'</p>'
                                .'<p class="col-m-2"><strong>Message :</strong></p>'
                                .'<p class="col-m-2">'.$mess.'</p>'
                            .'</div>'; 
                        } else { 
                            echo "An error prevented the sending of your e-mail"; 
                        } 
                    ?>
                </div>  
            </div>
        </main>
        
        <footer class="mts">
            <div class="wrap txt-center">
                <a class="facebook" href="http://www.facebook.com/alex.dev.lyon" title="Facebook">Facebook</a>
                <a class="twitter" href="http://twitter.com/alex_dev_lyon" title="Twitter">Twitter</a> 
                <a class="linkedin" href="http://www.linkedin.com/in/alex-dev-lyon" title="Linkedin">Linkedin</a>   
                <p class="mts">Réalisé par <a href="www.alexandre-noe.fr">Alex/</a> &copy; Copyright Alex/ - 2016 </p>
            </div> 
        </footer>       
    </body>	
</html>