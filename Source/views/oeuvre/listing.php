<?php include '../templates/header.php';
include '../../actions/oeuvre.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</head>
<body>

<div class="container">
    <h2>Liste des oeuvres</h2>
    <p>Il s'agit de la liste de toutes les oeuvres</p>
    <table class="table table-bordered table-striped table-hover">
        <thead class="mdb-color darken-3">
        <tr style="background:#4682B4;color: #fff" class="text-white">
            <th>Titre</th>
            <th>Date</th>
            <th>Description</th>
            <th>Catégorie</th>
            <th>Supprimer</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($listOeuvre as $oeuvre_data) { ?>
            <tr>
                <td>
                    <a href="../../actions/AllArtwork.php?idArtwork=<?php echo $oeuvre_data['idArtwork']; ?>"><?php echo $oeuvre_data['title'] ?></a>
                </td>
                <td> <?php echo $oeuvre_data['date'] ?> </td>
                <td> <?php echo $oeuvre_data['description'] ?> </td>
                <td> <?php echo $oeuvre_data['category_idCategory'] ?> </td>
                <td>
                    <center><p>
                            <a href="../../actions/oeuvre_delete_action.php?idArtwork=<?php echo $oeuvre_data['idArtwork'] ?>"
                               class="btn btn-danger">Supprimer oeuvre</a>
                        </p></center>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <p><a href="../Artwork/addArtwork.php" class="btn btn btn-success btn-block">Ajouter une nouvelle oeuvre</a></p>
</div>

</body>
</html>

<?php include('../templates/footer.php'); ?>
