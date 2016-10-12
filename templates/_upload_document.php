<div class="container">
    <div class="row">
        <?php 
        foreach ($informations as $info) {
            echo '<section class="col-xs-12">';
            echo '<h2 class="text-center">Informations</h2>';
            echo '<h3>Information client</h3>';
            echo '<p>'.$info['info_client'].'</p>';
            echo '<h3>Information personne</h3>';
            echo '<p>'.$info['info_personne'].'</p>';
            echo '<h3>Cible(s)</h3>';
            echo '<p>'.$info['cible'].'</p>';
            echo '<h3>Objectif(s)</h3>';
            echo '<p>'.$info['objectif'].'</p>';
            echo '<h3>Solution(s)</h3>';
            echo '<p>'.$info['solution'].'</p>';
            echo '</section>';
        }
        ?>
    </div>
    <div class="row">
        <?php 
        foreach ($projectInfos as $project) {
            echo '<section class="col-xs-12">';
            echo '<h2 class="text-center">Présentation du projet</h2>';
            echo '<h3>Pitch</h3>';
            echo '<p>'.$project['pitch'].'</p>';
            echo '<h3>Brief</h3>';
            echo '<p>'.$project['brief'].'</p>';
            
            echo '<h3>Prénom du client</h3>';
            echo '<p>'.$project['client_surname'].'</p>';
            echo '<h3>Nom du client</h3>';
            echo '<p>'.$project['client_lastname'].'</p>';
            echo '<h3>Téléphone du client</h3>';
            echo '<p>'.$project['client_phone'].'</p>';
            echo '<h3>Mail du client</h3>';
            echo '<p>'.$project['client_mail'].'</p>';
            echo '<h3>Adresse du client</h3>';
            echo '<p>'.$project['client_adress'].'</p>';
            echo '<h3>Ville du client</h3>';
            echo '<p>'.$project['client_city'].' - '.$project['client_postal'].'</p>';
            
            echo '<h3>Prénom du décisionnaire</h3>';
            echo '<p>'.$project['deci_surname'].'</p>';
            echo '<h3>Nom du décisionnaire</h3>';
            echo '<p>'.$project['deci_lastname'].'</p>';
            echo '<h3>Téléphone du décisionnaire</h3>';
            echo '<p>'.$project['deci_phone'].'</p>';
            echo '<h3>Mail du décisionnaire</h3>';
            echo '<p>'.$project['deci_mail'].'</p>';
            echo '<h3>Adresse du décisionnaire</h3>';
            echo '<p>'.$project['deci_adress'].'</p>';
            echo '<h3>Ville du décisionnaire</h3>';
            echo '<p>'.$project['deci_city'].' - '.$project['deci_postal'].'</p>';
            
            echo '<h3>Début du projet : '.$project['debproj'].'</h3>';
            echo '<h3>Fin du projet : '.$project['finproj'].'</h3>';
            echo '</section>';
        }
        ?>
    </div>
    <div class="row">
        <?php 
        foreach ($projectCom as $link) {
            echo '<section class="col-xs-12">';
            echo '<h2 class="text-center">Lien(s) du projet</h2>';
            
            echo '<h3>Facebook : '.$link['fb'].'</h3>';
            echo '<a href="'.$link['lien_fb'].'"><h4>Lien Facebook</h4></a>';
            echo '<h3>Mot de passe Facebook : '.$link['mdp_fb'].'</h3>';
            echo "<hr>";

            echo '<h3>Google Drive : '.$link['drive'].'</h3>';
            echo '<a href="'.$link['lien_drive'].'"><h4>Lien Google Drive</h4></a>';
            echo '<h3>Mot de passe Google Drive : '.$link['mdp_drive'].'</h3>';
            echo "<hr>";
            
            echo '<h3>Git : '.$link['git'].'</h3>';
            echo '<a href="'.$link['lien_git'].'"><h4>Lien Git</h4></a>';
            echo '<h3>Mot de passe Git : '.$link['mdp_git'].'</h3>';
            echo "<hr>";
            
            echo '<h3>Autre 1 : '.$link['autre_nom1'].'</h3>';
            echo '<a href="'.$link['autre_lien1'].'"><h4>Lien</h4></a>';
            echo "<hr>";

            echo '<h3>Autre 2 : '.$link['autre_nom2'].'</h3>';
            echo '<a href="'.$link['autre_lien2'].'"><h4>Lien</h4></a>';
            echo "<hr>";

            echo '<h3>Autre 3 : '.$link['autre_nom3'].'</h3>';
            echo '<a href="'.$link['autre_lien3'].'"><h4>Lien</h4></a>';

            echo '</section>';
        }
        ?>
    </div>
    <div class="row">
        <section class="col-xs-12">
            <h2 class="text-center">Fichiers en ligne</h2>
            <?php
            foreach ($documentUploads as $upload) {
                $date = date_create($upload['created_at']);
                echo '<div class="col-xs-12 fileUploaded">';
                echo '<a type="button" class="btn btn-primary" href="files/'.$upload['path_to'].'">'.$upload['name'].'</a>';
                echo '<a href="deletedocument.php?id='.$upload['id'].'"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                echo '<span class="text-right">'.date_format($date, 'd-m-Y').'</span>';
                echo '</div>';
            } 
            ?>
        </section>
    </div>
</div>