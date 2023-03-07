<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <title>Food and Drink</title>
   <meta name ="description" content="Description de la page">

   <!--Feuille de CSS-->
   <link rel="stylesheet" href="css/styles.css">


   <link rel="icon" href="favicon.ico">

   <!--Fonts-->

   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700&family=Poppins:wght@400;700&display=swap" rel="stylesheet">

</head>
<body>
    <section class="bg-image header">
        <header>
            <nav class="container">
                    <div class="logo">
                        <!-- logo du site -->
                        <img src="images/food-and-drink.svg" alt="LogoFoodAndDrink">
                    </div>
                        <!-- NAV HOVER -->
                    <div>
                        <ul class="flex-container">
                            <li>
                                <a href="#QuiSommesNous">Qui sommes nous ?</a>
                            </li>
                            <li>
                                <a href="#Buttons">Nos Menus</a>
                            </li>
                            <li>
                                <a href="#Project1">Nous trouver</a>
                            </li>
                        </ul>
                    </div>
        </header>
        <section class="hero">
            <div>
                <h1>FOOD AND DRINK</h1>
                <a href="#">Des questions ?</a>
            </div>
        </section>
    </section>

    <section class ="label container flex-container">
        <div class="labelimg">
            <a href="https://www.tripadvisor.fr/" target="_blank"><img src="images/Trip advisor B&W 2.png" alt="Trip_Advisor"></a>
        </div>
        <div class="labelimg">
            <a href="https://guide.michelin.com/fr/fr" target="_blank"><img src="images/Logo_Michelin 1.png" alt="Logo_Michelin"></a>
        </div>
        <div class="labelimg">
            <a href="https://fr.gaultmillau.com/" target="_blank"><img src="images/Gault_milaut.png" alt="Gault_milaut"></a>
        </div>
    </section>

    <!-- QUI SOMMES NOUS -->

    <section class="QuiSommesNousUN">
        <div class="container flex-container vertical-align">
            <div class="textabout1">
                <h2>Qui sommes-nous ?</h2><br>
                <p>Lorem ipsum dolor sit amet, consectetur adi elit, sed do eiusmod tempor incclassclassunt ut labore et dolore magna aliqua. </p>
            </div>
            <div class="imgAbout">
                <img src="images/QuiSommesNous.png" alt="QuiSommesNous">
            </div>
        </div>
    </section>

    <!-- QUI SOMMES NOUS 2 -->

    <section class="QuiSommesNousDEUX">
        <div class="container flex-container vertical-align">
            <div class="imgAbout">
                <img src="images/QuiSommesNous.png" alt="QuiSommesNous">
            </div>
            <div class="textabout2">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incclassclassunt ut labore et dolore magna aliqua. </p>
            </div>
            
        </div>
    </section>

    <section class ="fournisseursValeurs">
        
        <div class="container">
            <h2 class="fournisseursValeursTexte">Nos Fournisseurs</h2>
           <div class="label flex-container">
                <div>
                    <a href="https://www.maisongesbert.com/web/" target="_blank"><img src="images/Gesbert B&W.png" alt="Logo Gesbert"></a>
                </div>
                <div>
                    <a href="https://www.amisdelaferme.fr/" target="_blank"><img src="images/Ferme B&W.png" alt="Logo Ferme"></a>
                </div>
                <div>
                    <a href="https://www.cueillette-bio-rennes.fr/" target="_blank"><img src="images/Jardin B&W.png" alt="Logo Jardin"></a>
                </div>
           </div>
        </div>
        
    </section>

    <!-- Menu  -->

    <section class="container">
        
    </section>

    <!-- VALEURS -->

    <section class="fournisseursValeurs">
        <div class="container">
            <h2 class="fournisseursValeursTexte">Nos Valeurs</h2>
            <div class="label flex-container">
                <div class="vertical-align">
                    <img src="images/Gesbert B&W.png" alt="Logo Gesbert">
                </div>
                <div>
                    <img src="images/Ferme B&W.png" alt="Logo Ferme">
                </div>
                <div>
                    <img src="images/Jardin B&W.png" alt="Logo Jardin">
                </div>
                <div>
                    <img src="images/Jardin B&W.png" alt="Logo Jardin">
                </div>
            </div>
        </div>
    </section>


    <!-- FORMULAIRE -->
    <section class=" container flex-container">
        <form class="container contact"action="#">
            <h2>Nous contacter</h2>
            <div class="flex-container vertical-align ">
                <div class="form">
                    <input type="text" class="fname" placeholder="First Name">
                </div>
                <div class="form">
                    <input type="text" class="lname" placeholder="Name">
                </div>
            </div>
                <div>
                    <div>
                        <input type="email" class="fname" placeholder="E-mail">
                    </div>
                </div>
                <div>
                    <textarea rows="12" type="text" class="fname" placeholder="Message"></textarea>
                </div>
                <div class="justify">
                    <button type="submit" class="submit" class="first-cta">Envoyer</button>
                </div>
        </form>
        <div class="map justify vertical-align">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2664.050224017474!2d-1.682775584855528!3d48.10926686111223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x480ede336647100f%3A0x705cb7733a64bcce!2s3%20Rue%20de%20la%20Chalotais%2C%2035000%20Rennes!5e0!3m2!1sfr!2sfr!4v1677765739722!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <footer>
        <div class=" container vertical-align logo-footer">
            <a href="#"><img src="./images/food-and-drink.svg" alt="#"></a>
        </div>
        <div class="container ">
            <ul class="flex-container vertical-align">
                <li>
                    <a href="#">Mentions Légales</a>
                </li>
                <li>
                    <a href="#">Politique de confidentialité</a>
                </li>
                <li>
                    <a href="#">Plan du site</a>
                </li>
                <li>
                    <a href="mailto:food&drink@gmail.com">food&drink@gmail.com</a>
                </li>
                <li>
                    <a href="callto:+33618784002">06 18 78 40 02</a>
                </li>
                <li>
                    <a href="./404.html">404 ?</a>
                </li>
            </ul>
            <hr>
        </div>
        <div class="container vertical-align social-network">
                <a href="#"> <img src="./images/images/Behance.png" alt=""></a>
                <a href="#"> <img src="./images/images/Linkedin.png" alt=""></a>
                <a href="#"> <img src="./images/images/Insta.png" alt=""></a>
                <a href="#"> <img src="./images/images/Twitter.png" alt=""></a>
        </div>

        <div class="container text-center">
            <p>Tous droits réservés - © 2023 Food & Drinks</p>
        </div>

    </footer>
</body>
</html>