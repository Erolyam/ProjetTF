<?php
include('../templates/header.php');
include str_replace ("//", "\\", $_SERVER['DOCUMENT_ROOT']).
    '\ProjetTF\Source\actions\artwork_by_id.php';
?>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php if(isset($artwork)){?>
                <h1 class="text-center"><?php echo $artwork['title']; ?></h1>
                <div class="form-group">
                    <label>Description </label>
                    <p><?php echo $artwork['description']; ?></p>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Bouton</button>
                <?php }else{?>
                    <h1 class="text-center">Oeuvre non trouvée</h1>
                <?php }?>
            </div>
        </div>
<?php include('../templates/footer.php');?>