<?php include '../templates/header.php';
include '../../actions/get_ranking.php'; ?>

    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

    <div class="container">
        <h2>Listes des classements</h2>
        <p>Il s'agit des liste des classements par categorie et par durée </p>
        <?php
        for ($i = count($daysList)-1; $i >=0 ; $i--) {
            $days = $daysList[$i];
            ?>
            <h3><?php echo $days; ?> jours</h3>
            <div class="row">
            <?php
            foreach ($rankingsList[$i] as $key => $value) {
                ?>
                <?php echo '<div class="col-sm-4">'.'<strong>'.$key.'</strong>';
                    if(count($value)==0){
                        echo '<p>Désolé, personne n\'a voté!</p></div>';
                        continue;
                    }?>
                <table class="table table-responsive table-bordered">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Likes</th>
                    <th>Dislikes</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($value as $ranking) {
                    ?>
                    <tr>
                        <td> <a href="../../actions/AllArtwork.php?idArtwork=<?php echo $ranking["idArtwork"]; ?>"> <?php echo $ranking['title'] ?></a> </td>
                        <td> <?php echo $ranking['l'] ?> </td>
                        <td> <?php echo $ranking['d'] ?> </td>
                    </tr>
                <?php } ?>
                </tbody>
                </table>
                <?php
                echo '</div>';
            } ?>
            </div>
            <?php
        } ?>

    </div>

    </body>
    </html>


<?php include('../templates/footer.php'); ?>