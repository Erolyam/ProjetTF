<?php echo form_open('users/register'); ?>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center"><?= $title; ?></h1>
			<div class="form-group">
				<label>Prenom</label>
                <input value="<?=set_value('name')?>" type="text" name="name" class="form-control" placeholder="Prenom">
                <?php echo form_error('name','<p class="text-danger" style="font-size: small">','</p>');?>
			</div>
			<div class="form-group">
				<label>Nom</label>
                <input value="<?=set_value('lastname')?>" type="text" name="lastname" class="form-control" placeholder="Nom">
                <?php echo form_error('lastname','<p class="text-danger" style="font-size: small">','</p>');?>
			</div>
            <div class="form-group">
                <label>Username</label>
                <input value="<?=set_value('username')?>" type="text" name="username" class="form-control" placeholder="Username">
                <?php echo form_error('username','<p class="text-danger" style="font-size: small">','</p>');?>
            </div>
			<div class="form-group">
				<label>Email</label>
                <input value="<?=set_value('email')?>" type="email" name="email" class="form-control" placeholder="Email">
                <?php echo form_error('email','<p class="text-danger" style="font-size: small">','</p>');?>
			</div>
			<div class="form-group">
				<label>Mot de passe</label>
                <input value="<?=set_value('password')?>" type="password" class="form-control" name="password" placeholder="Mot de passe">
                <?php echo form_error('password','<p class="text-danger" style="font-size: small">','</p>');?>
			</div>
            <div class="form-group">
                <label>Confirmation du mot de passe</label>
                <input type="password" class="form-control" name="passconf" placeholder="Confirmation du mot de passe">
                <?php echo form_error('passconf','<p class="text-danger" style="font-size: small">','</p>');?>
            </div>
            <div class="form-group">
                <label>Age</label>
                <input value="<?=set_value('age')?>" type="number" class="form-control" name="age" placeholder="Age">
                <?php echo form_error('age','<p class="text-danger" style="font-size: small">','</p>');?>
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" class="form-control" name="photo" placeholder="Photo de profil">
            </div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
<?php echo form_close(); ?>
