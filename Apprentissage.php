<?php //BDD à l'arrache : USERS[prénom,nom,mail,promo,emprunts en cours, membre,admin]
    $users=[['Timothée','Fourcaud','timothee.fourcaud@2024.icam.fr','I124',0,true,true],['Louis','Auge','louis.auge-collomb@2024.icam.fr','I124',1,true,true],
        ['Alexandre','Casset','alexandre.casset@2024.icam.fr','I124',3,true,true],['Juliette','Mimault','juliette.mimault@2024.icam.fr','I124',0,false,false],
        ['Louise','Delseny','louise.delseny@2027.icam.fr','OP',0,false,false],['Elio','Carponcin','elio.carponcin@2024.icam.fr','A124',0,false,false],
        ['Killian','Larcher','killian.larcher@2024.icam.fr','I124',2,true,false],['Margot','Delbeque','margot.delbeque@2025.icam.fr','O2',0,true,false]
    ];
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel=stylesheet" href="">
    <title>Pour implémenter du PHP</title>
</head>

<body>
    <h1>J'apprends le PHP de façon inadéquate</h1>
    <div class="container">
        <div>

            <?php
                echo 'Liste des membres de l\'asso: <br />';
                foreach ($users as $user)
                    if (array_key_exists(5, $user) && $user[5]==true) : ?>
                        <article>
                            <h3><?php echo $user[0].' est membre de Fabricam'?></h3>
                        </article>
                    <?php endif; ?>
        </div> <!-- fonction pour récupérer les membres de Fabricam dans la table des utilisateurs -->
        <div>

            <?php

            function borrowed(array $user) : bool {
                if (array_key_exists(4, $user) && $user[4]!=0) {
                    $borrowed = true;
                }
                else {
                    $borrowed = false;
                }
                return $borrowed;
            }
            function whoHasBorrowed(array $users): array {
                foreach ($users as $user) {
                    if (borrowed($user) == true) {
                        $thieves[] = $user;
                    }
                }
                return $thieves;
            }
            foreach (whoHasBorrowed($users) as $user) {
                echo $user[0] . ' ' . $user[1] . ' a emprunté ' . $user[4] . ' outils.<br />';
            }
            ?>

        </div><!-- fonction pour récupérer tous les utilisateurs qui ont emprunté des outils -->
    </div>




    <?php
        $date = date('d/m/Y'); //Cette ligne permet d'afficher la date dans la page
        $nom = "Timothée Fourcaud";
        $age = 20;
        echo 'Nous sommes le '.$date.' et '.$nom.' a '.$age.' ans.'
    ?>

    <?php
        $isAuthorized = false;
        if ($isAuthorized) {
            echo 'Bonjour '.$nom.', vous pouvez accéder au site';
        }
        elseif (! $isAuthorized) {
            echo 'Acces refusé. '.$nom.', vous n\'avez pas l\'autorisation nécessaire pour accéder à cette partie du site';
        }
        else {
            echo "ERREUR";
        }//Utile en PHP: utiliser Switch (seulement pour l'égalité) au lieu de milles boucles if/elseif/else. (switch(variable){case 'condition': 'message'; break; ... }
    ?>

    <?php
        //Structure ternaire
        $userAge = 24;
        $isAdult = ($userAge >= 18); /* ? true : false; */ //Si userAge est sup, true, si c'est inf, false. Comme true par défaut, on peut simplifier et pas écrire true : false

    ?>

</body>
</html>