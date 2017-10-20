<?php include str_replace("//", "\\", $_SERVER['DOCUMENT_ROOT']) .
    '\ProjetTF\Source\views\templates\header.php';
include str_replace("//", "\\", $_SERVER['DOCUMENT_ROOT']) .
    '\ProjetTF\Source\actions\get_ranking.php'; ?>

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
            <?php
            foreach ($rankingsList[$i] as $key => $value) {
                ?>
                <table class="table table-bordered">
                <p><?php echo $key;
                    if(count($value)==0){
                        echo '<p>Classement n\'est pas disponible</p>';
                        continue;
                    }?></p>
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Vote Like</th>
                    <th>Vote Dislike</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($value as $ranking) {
                    ?>
                    <tr>
                        <td> <?php echo $ranking['title'] ?> </td>
                        <td> <?php echo $ranking['l'] ?> </td>
                        <td> <?php echo $ranking['d'] ?> </td>
                    </tr>
                <?php } ?>
                </tbody>
                <?php
            } ?>
            </table>
            <?php
        } ?>

    </div>

    </body>
    </html>


<?php include('../templates/footer.php'); ?>