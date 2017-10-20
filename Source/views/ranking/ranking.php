<?php include str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).
    '\ProjetTF\Source\views\templates\header.php';
include str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).
    '\ProjetTF\Source\actions\adsadsa'; ?>

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
        foreach  ($listCategories as $categorie) {

        ?>
        <p>Il s'agit des liste des classements par categorie et par durée </p>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Titre</th>
                <th>Vote Like</th>
                <th>Vote Dislike</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach  ($listOeuvre as $oeuvre_data) {
                ?>
                <tr>
                    <td>
                        <a href="../../actions/AllArtwork.php?idArtwork=<?php echo $oeuvre_data['idArtwork']; ?>"><?php echo $oeuvre_data['title'] ?></a>
                    </td>
                    <td> <?php echo $oeuvre_data['date'] ?> </td>
                    <td> <?php echo $oeuvre_data['description'] ?> </td>
                    <td> <?php echo $oeuvre_data['category_idCategory'] ?> </td>
                    <td>
                        <p>
                            <a href="../../actions/oeuvre_delete_action.php?idArtwork=<?php echo $oeuvre_data['idArtwork']?>" class="btn btn-primary btn-block">Supprimer oeuvre</a>
                        </p>
                    </td>
                </tr>
                <?php
            }?>
            </tbody>
        </table>
            <?php
        }?>

    </div>

    </body>
    </html>


<?php include('../templates/footer.php');?>