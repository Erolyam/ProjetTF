<h2><?= $title ?></h2>
<?php foreach($posts as $post) : ?>
	<h3><?php echo $post['title']; ?></h3>
	<div class="row">
		
		<div class="col-md-9">
			<small class="post-date">Posté le : <?php echo $post['date']; ?> dans <strong><?php echo $post['title']; ?></strong></small><br>
		<?php echo word_limiter($post['description'], 60); ?>
		<br><br>
		<p><a class="btn btn-default" href="<?php echo site_url('/Artwork/'.$post['idArtwork']); ?>">Afficher Plus</a></p>
		</div>
	</div>
<?php endforeach; ?>
<div class="pagination-links">
		<?php echo $this->pagination->create_links(); ?>
</div>