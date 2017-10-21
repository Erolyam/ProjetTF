<?php include str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/views/templates/header.php';?>
<?php include str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/actions/addArtwork.php'; ?>
<?php include str_replace ("//", "/", $_SERVER['DOCUMENT_ROOT']).'/ProjetTF/Source/actions/listeCategorieForArtwork.php'; ?>




<form enctype="multipart/form-data" action="../../actions/addArtwork.php" method="post">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <h2 class="text-center">Ajout d'une oeuvre</h1>
            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" class="form-control" placeholder="Nom de l'oeuvre">
            </div> 
             <div class="form-group">
                  <label for="comment">Description</label>
                  <textarea class="form-control" rows="5" name="description" id="comment" placeholder="Description"> </textarea>
             </div> 

             <div class="form-group">
                  <label for="comment">ID user</label>
                  <textarea class="form-control" rows="5" name="idUser" id="comment" disabled="disabled" placeholder="zb zboub"    ><?php echo $_SESSION['idUser']?>  </textarea>
             </div> 

            <div class="form-group">
                  <label for="category">Choisisez la catégorie</label>
                  <select class="form-control" name="category" id="category">
                   <?php
                    foreach ($listCategory as $user_data) {    
                    ?>
                    <option><?php echo $user_data['name'] ?></option>
                      <?php
                         }?>

                  </select>
            </div> 
        
            <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Valider la nouvelle oeuvre</button>
            </div>


        </div>
    </div>
</form>
<?php include('../templates/footer.php');?>
