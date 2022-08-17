<!DOCTYPE html>
<html lang = "FR">
<head>
    <meta charset="UTF-8">
    <title>Chez Lucile</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <?php
    require('../includes/nav.php');
    ?>
</head>
<body>
    <header>
        <div id="imagePrincipale">
            <h1>Chez Lucile</h1>
            <div id = "premierTrait"></div>
            <h3>Friterie Willemoise</h3>      
               <?php require("../lucileFriterie/commander.php");?>
<form method="post">
    <input type="submit" value="Commander" name="_com"> 
</form>
            <div id="horaires">
                <h2>AM = Lundi : __/__  Mardi : 11h/14h Mercredi : 11h/14h Jeudi : 11h/14h Vendredi : 11h/14h Samedi : 11h/14h Dimanche ___/_____</h2>
                <h2>PM = Lundi : __/__  Mardi : 18h/21h Mercredi : 18h/21h Jeudi : 18h/21h Vendredi : ___/___ Samedi : 18h/21h Dimanche 18h/21h30</h2>
            </div>
        </div>       

    </header>
    <section id="presentation">
        <div id="texteIntro">
            <h2>Rien ne vaut les bonnes frites maison!</h2>
            <p>Lucile & Sébastien Vous Accueillent Et Vous 
            Invitent À Découvrir Un Large Choix De Snacks
            Et De Plats </p>
            <p>À  Consommer Sur Place Ou à Emporter.
            </p>
        </div>

        

        <div id="texteMenu"><h3>Notre Menue</h3></div>
        <div id="Choix">
            <div class="imagesChoix">
                <h4>Snacks</h4>
                <a href="Snacks.htlm"> <img src="./Media/Frites.jpg" alt="Frites"></a>
            </div>
            <div class="imagesChoix">
                <h4>Plats</h4>
                <a href="Plats.htlm"> <img src="./Media/Plat.jpg" alt="Plats"></a>
            </div>
            <div class="imagesChoix">
                <h4>Burgers</h4>
                <a href="Burger.htlm"> <img src="./Media/maroilles.jpg" alt="Burger"></a>
            </div>
        </div>
    </section>
</body>
<footer>
    <h2 id="contact">CONTATE-NOS</h2>
            <form>
              <input placeholder="Nom">  
              <input placeholder="E-mail">
              <textarea placeholder="Ecrire Le Message ici ..."></textarea>
              <button>Envoyer</button>
            </form>
             <div id="deuxiemeTrait"></div>
             <div id="copyrightEtIcons">
             <div id="copyright">
                 <span>© SEEKa () ; 2021</span>
             </div>
             <div id="icons">
            <a href="https://www.facebook.com/FRITERIE-SNACK-TRAITEUR-CHEZ-LUCILE-382689468525231/photos/?ref=page_internal"><em class="fa fa-twitter"></em></a>
            <a href="https://www.facebook.com/FRITERIE-SNACK-TRAITEUR-CHEZ-LUCILE-382689468525231/photos/?ref=page_internal"><em class="fa fa-facebook"></em></a>
            <a href="https://www.facebook.com/FRITERIE-SNACK-TRAITEUR-CHEZ-LUCILE-382689468525231/photos/?ref=page_internal"><em class="fa fa-instagram"></em></a>
            <a href="https://www.facebook.com/FRITERIE-SNACK-TRAITEUR-CHEZ-LUCILE-382689468525231/photos/?ref=page_internal"><em class="fa fa-youtube"></em></a>
             </div>
            </div>
</footer>

</html>