<h2><?php echo $post['title']; ?></h2>





<small class="post-date">Ajouté Le: <?php echo $post['date']; ?></small><br>

<div class="post-body">
	<?php echo $post['description']; ?>
</div>


	<hr>
	

<hr>
<?php 
//$this->session->unset_userdata('idUser');
if($this->session->userdata('idUser')) :
//if($this->session->userdata('idUser') != $post['owner_idUser'] ) :  ?>
	<h3>Add Comment</h3>
<?php echo form_open('comments/create/'.$post['idArtwork']); ?>
	
	<div class="form-group">
		<textarea name="comment" class="form-control"></textarea>
	</div>
	<input type="hidden" name="idArtwork" value="<?php echo $post['idArtwork']; ?>">
	<button class="btn btn-primary" type="submit">Ajouter   </button>
</form>
<?php 
else :
echo form_open('/users/login'); ?>
		<input type="submit" value="Add commentaire" class="btn btn-danger">
	</form>

<?php endif ?>
<h3>Comments</h3>
<?php if($comments) : ?>
	<?php foreach($comments as $comment) : ?>
		<div class="well">
			<strong><?php echo $comment['date']; ?></strong><br>

<?php if($this->session->userdata('idUser') == $comment['User_idUser'] ) : 

$qq ="";
$qq = "dd".$comment['id_comment'];

 ?>
	<?php echo form_open('/comments/edite/'.$comment['id_comment'], array('class' => 'email', 'id' => 'myform')); ?>
			<textarea name="comment"   disabled="true" id="<?php echo $qq; ?>" class="form-control"  ><?php echo $comment['comment'];  ?>  
			</textarea>
<input type="button"  name="bouton" value="Editer" class="btn btn-warning" onclick="<?php echo $qq; ?>.disabled = false; edit.style.display='inline';">

		<?php 	$_SESSION['item'] = $post['idArtwork'];  ?>
			<a class="btn btn-success pull-left" href="<?php echo base_url(); ?>/comments/delete/<?php echo $comment['id_comment'] ?>">Delete</a>
	<input type="hidden" name="idArtwork" value="<?php echo $post['idArtwork']; ?>">
		<input type="submit" value="Modfier" style="display: none;"  name="edit" class="btn btn-danger">
	</form>
<?php else :  ?>
<h5><?php echo $comment['comment']; ?></h5>  
			
<?php endif; ?>

		</div>
	<?php endforeach; ?>
<?php else : ?>
	<p>No Comments To Display</p>
<?php endif; ?>
<?php //endif; ?>



<hr>


<?php //echo validation_errors(); ?>

