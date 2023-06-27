<h1>Exo10</h1>

<p>
En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement
de validation (submit).

</p>

<h2>Résultat</h2>

<?php

    $info = array(
        "Nom",
        "Prenom",
        "Adresse",
        "Email",
        "Ville");

    $formation = array(
        "Développeur Logiciel",
        "Designer web",
        "Intégrateur",
        "chef de projet");

    $nomsRadio = array(
        "Masculin",
        "Feminin",
        "Autre");

    

    formulaire($info, $formation, $nomsRadio);

    

    function formulaire($info, $formation, $nomsRadio){?>
    <form>
        <?php
            foreach($info as $infoPerso){?>
            <label><?=$infoPerso?></label><br>
            <input type="text" name="<?=$infoPerso?>"></input><br><br>
        <?php
        }?>
        <select>
            <option selected="selected">Sélectionner un métier</option>
        <?php
            foreach($formation as $metier){?>
                <option value="<?=$metier?>"><?=$metier?></option>
        <?php
        }?>
        </select>
        <?php ?>
        <br><br>
        <?php
            foreach($nomsRadio as $genre){?>
                <input type="radio" name="genre" value="<?=$genre?> ">
        <?=$genre?><br>
        <?php
        }?>
        <input type="submit" value="Envoyer">
    </form>
    <?php
    }
?>