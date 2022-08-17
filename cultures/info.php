<?php
require("../actions/database.php");
require("../includes/nav.php");
$lala;
if(isset($_POST["btnCultureUser"]) && !empty($_SESSION["user"]) )
{
$requestOk = false;

    $infoRequest = htmlspecialchars($_POST["btnCultureUser"]);
    $userInfo = htmlspecialchars($_SESSION["user"]);

    $requestAticle = $bdd ->prepare('SELECT * FROM cultures WHERE id = ?');
    $requestAticle->execute(array($infoRequest));

    if($requestAticle -> rowCount() > 0)
    {
        $lala = $requestAticle->fetch();
        if($lala['user'] = $userInfo)
        {
            $requestOk = true;
            ?>
        <div id='divType' style="">

<br>

            <h4 id="type">Type : </h4>
            <h4 id="typeData"><?= $lala['type']?> </h4>
<br>
            <h4 id="date">Date De La Plante : </h4>
            <h4 id="dateData"><?=$lala ['date']?> </h4>
<br>
            <h3 id="jdp">Jours Avant Recolte : </h3>
            <h3 id="jdpData"><?= $lala['jdp']?> </h3>
            <br>
            <button>Modifier</button>
            <button>Delete</button>

        </div>
        
            <?php

        }
    }
    
}
?>
<script src="../cultures/info.js"></script>