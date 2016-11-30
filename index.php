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
                <form action="envoi.php" method="post" enctype="application/x-www-form-urlencoded" name="contact" class="col-d-8 col-m-2 formContact">
                    <h2 class=" txt-center">Contact</h2>
                    <div class="grid">
                        <fieldset class="col-m-2">                                
                            <div class="grid ">
                                <p class="col-m-2 col-d-6">
                                    <label class="required" for="lastname">Name</label>
                                    <input id="name" type="text" name="name" placeholder="Your name *" required>
                                </p>
                                <p class="col-m-2 col-d-6">
                                    <label  for="firstname">Firstname</label>
                                    <input id="firstname" type="text" name="firstname" placeholder="Your firstname" >
                                </p>
                                <p class="col-m-2 col-d-6">
                                    <label class="required" for="email">E-mail</label>
                                    <input id="email" type="email" name="email" placeholder="Your e-mail *" required>
                                </p>
                            </div>
                        </fieldset>
                        <fieldset class="col-m-2">                                
                            <div class="grid ">
                                <p class="col-m-2 col-d-6">
                                    <label for="object">Object</label>
                                    <input id="object" type="text" name="object" placeholder="Object *" required>
                                </p>
                                <p class="col-m-2">
                                    <label for="message">Message</label>
                                    <textarea id="text_area" name="message" rows="8"></textarea>
                                </p>
                            </div>
                        </fieldset>
                        <p class="col-m-2 txt-right">
                            <input class="btn" type="submit" name="submit" value="submit">
                        </p>
                    </div>
                    <small>* Required</small>
                </form> 
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