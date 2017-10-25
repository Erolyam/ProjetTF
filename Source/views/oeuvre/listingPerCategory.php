<?php include '../templates/header.php';
include '../../actions/oeuvrePerCategory.php'; ?>

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
    <h2>Liste des oeuvres</h2>
    <p>Il s'agit de la liste de toutes les oeuvres par catégorie</p>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Description</th>
            <th>Catégorie</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach  ($listOeuvrePerCategory as $oeuvre_data) { ?>
            <tr>
                <td> <?php echo $oeuvre_data['title'] ?> </td>
                <td> <?php echo $oeuvre_data['date'] ?> </td>
                <td> <?php echo $oeuvre_data['description'] ?> </td>
                <td> <?php echo $oeuvre_data['category_idCategory'] ?> </td>
            </tr>
            <?php
        }?>
        </tbody>
    </table>
</div>

</body>
</html>


<?php include('../templates/footer.php');?>
