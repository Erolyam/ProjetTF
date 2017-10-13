<?php include('../templates/header.php');?>
<form enctype="multipart/form-data" action="../../actions/user_register.php" method="post">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center">Register</h1>
			<div class="form-group">
				<label>Prenom</label>
                <input type="text" name="name" class="form-control" placeholder="Prenom">
			</div>
			<div class="form-group">
				<label>Nom</label>
                <input type="text" name="lastname" class="form-control" placeholder="Nom">
			</div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" placeholder="Username">
            </div>
			<div class="form-group">
				<label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Email">
			</div>
			<div class="form-group">
				<label>Mot de passe</label>
                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
			</div>
            <div class="form-group">
                <label>Confirmation du mot de passe</label>
                <input type="password" class="form-control" name="passconf" placeholder="Confirmation du mot de passe">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control" name="age" placeholder="Age">
            </div>
            <div class="form-group">
                <label>Photo</label>
                <input type="file" class="form-control" name="photo" placeholder="Photo de profil">
            </div>
			<button type="submit" class="btn btn-primary btn-block">Submit</button>
		</div>
	</div>
</form>
<?php include('../templates/footer.php');?>
