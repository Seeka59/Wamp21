<!DOCTYPE html>
<html lang="FR">    
    <head>   
        <title>Index</title>                                                                                                                                                                                                                                                                                          
    <?php include 'includes/head.php';?>
    <?php include 'includes/navbar.php';?>
    <link rel="stylesheet" href="index.css">
</head>   
<body>
        <header>
        <br></br>
            <div id = "imageCv">
                <h1>Curriculum Vitae</h1>
                <div id = "premierTrait"></div>
                <h3>Kevin Truant</h3>
                <div id= "premierTrait"><a href="cv.php"><img src="media/cv.png" alt="LienCv"></a> </div>
            </div>
        </header>
        <section id="presentationKevin">
            <div class = "container">
<h1>Presentation Du Site</h1>
<h2>J'ai Crée Ce site Afin D'apprendre Différent Langage de Programmation (Html/Css/Js/Php/Sql) ,  </h2>
</div>  
  </section>
        <section id="lienUtiles">
                <h2>
                    Liens utiles pour la recherche d'emploi
                </h2>
            <div class="container" id="prestations">
                <div class="LienJJ">
                    <h4>JobiJoba</h4>
                    <a href="https://www.jobijoba.com/fr/offre-emploi?gclid=CjwKCAiAnO2MBhApEiwA8q0HYWfJvWWw2Cg61xPjo_DwM3oH0PHcmyTNceLk-EUVkK85RTPg83r5shoCLikQAvD_BwE"><img src="media/jobijoba.jpg" alt="LienJobijoba"></a>
                </div>
                <div class="LienIndeed">
                    <h4>Indeed</h4>
                    <a href="https://fr.indeed.com/Emplois-Recherche?vjk=0c8dcb835dcb6851"><img src="media/indeed.png" alt="LienIndeed"></a>
                </div>
                <div class="Lienjobijoba">
                    <h4>RegionJob</h4>
                    <a href="https://www.regionsjob.com/?gclid=CjwKCAiAv_KMBhAzEiwAs-rX1Fa7opk2NFivau6UKMhC4kYrLDLkCDMcvp5yEIDSC5PcPdUmx2jJ9RoCxHUQAvD_BwE"><img src="media/regionJob.jfif" alt="LienRegionJob"></a>
                </div>
                <div class="LienMonster">
                    <h4>Monster</h4>
                    <a href="https://www.monster.fr/"><img src="media/monster.jfif" alt="LienMonster"></a>
                </div>
                <br></br>
            </div>
        </section>
        <br></br>
    <footer>
        <div id = "premierTrait"></div>
        <h2>Contact</h2> 
        <form action="actions/action.php" method="post">
            <input type="text" name="user_name" autocomplete="off" placeholder ="Pseudo">
            <input type="email" name="user_email" autocomplete="off" placeholder ="E-mail">
            <textarea name="user_message" placeholder="Ecriver Votre Message ...."></textarea>
            <button type="submit" name="valider">Envoyer</button>
        </form>
        <div id="deuxiemeTrait"></div>
    <div id ="copyrightEtIcons">
        <div id="copyright">
            <span>©SeeKa[2021]</span>
        </div>
    </div>
    </footer>
 </body>
</html>