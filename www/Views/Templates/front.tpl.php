<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="../easycook-vite/dist/style.css">
    <title>Template Front</title>
</head>
<body>
    <header class="navbar">
                <div class="container ">
                    <a href="#" class="site-logo">
                        <img src="../../../dist/assets/images/logoEasyCook.png" alt="EasyCook">
                    </a>
                
                    <nav class="">
                        <ul class="">
                            
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">Recettes</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">|</a></li>
                            <li><a href="#">S'inscrire</a></li>
                            <li><a href="#">Se connecter</a></li>
                        </ul>
                    </nav>
                    
                </div>
    </header>
        
    <?php include $this->viewName;?>
   
    

    <footer class="site-footer">

            <div class="contact">
                <div class="adresse">
                    <ul>
                        <li>EasyCook</li>
                        <li>242 Rue du Faubourg Saint-Antoine,</li>
                        <li>75012 Paris</li>
                        <li>0156069041</li>
                    </ul>
                </div>
                <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.474052163265!2d2.38715937612803!3d48.849170101355796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6720d9c7af387%3A0x5891d8d62e8535c7!2sESGI%2C%20%C3%89cole%20Sup%C3%A9rieure%20de%20G%C3%A9nie%20Informatique!5e0!3m2!1sfr!2sfr!4v1706276679727!5m2!1sfr!2sfr" width="600" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            
            <div class="container">
                <nav>
                    <ul class="">
                        <li><a href="#">Légal</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">À propos des pubs</a></li>
                    </ul>
                </nav>
                <small class="vertically-centered">© 2023   EasyCook</small>
            </div>
</footer>
</body>
</html>