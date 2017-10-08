<head>
    <link href="<?php echo base_url("assets/bootstrap/dist/css/bootstrap.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/bootstrap/dist/css/vertical-center.css"); ?>" rel="stylesheet">
</head>
 <title><?php echo $title;?></title>
<div class="jumbotron vertical-center">
    <div class="container">
            <?php if($this->session->flashdata('msg')): ?>
                <div class="alert alert-success">
                    <strong>Success!</strong> <?php echo $this->session->flashdata('msg'); ?>
                </div>
            <?php endif; ?>
        <form enctype="multipart/form-data" action="registerUser" method="post">
            <div class="form-group row <?php if(strlen(form_error('name'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="name" class="col-form-label">Prenom</label>
                </div>
                <div class="col-sm-3">
                    <input value="<?=set_value('name')?>" type="text" name="name" class="form-control" id="name" placeholder="Prenom">
                </div>
                <div class="col-sm-3">
                    <?php echo form_error('name','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('lastname'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="lastname" class="col-form-label">Nom</label>
                </div>
                <div class="col-sm-3">
                    <input value="<?=set_value('lastname')?>" type="text" name="lastname" class="form-control" id="lastname" placeholder="Nom">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('lastname','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('username'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="username" class="col-form-label">Username</label>
                </div>
                <div class="col-sm-3">
                    <input value="<?=set_value('username')?>" type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('username','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('email'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="email" class="col-form-label">Email</label>
                </div>
                <div class="col-sm-3">
                    <input value="<?=set_value('email')?>" type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('email','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('password'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="password" class="col-form-label">Mot de passe</label>
                </div>
                <div class="col-sm-3">
                    <input value="<?=set_value('password')?>" type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('password','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('passconf'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="passconf" class="col-form-label">Confirmation du mot de passe</label>
                </div>
                <div class="col-sm-3">
                    <input type="password" class="form-control" name="passconf" id="passconf" placeholder="Confirmation du mot de passe">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('passconf','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('age'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="age" class="col-form-label">Age</label>
                </div>
                <div class="col-sm-3">
                    <input value="<?=set_value('age')?>" type="number" class="form-control" name="age" id="age" placeholder="Age">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('age','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('photo'))>0) echo ' has-error'; ?>">
                <div class="col-sm-3"></div>
                <div class="col-sm-2">
                    <label for="photo" class="col-form-label">Photo de profil</label>
                </div>
                <div class="col-sm-3">
                    <input type="file" class="form-control" name="photo" id="photo" placeholder="Photo de profil">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('photo','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-11">
                    <button type="submit" class="btn btn-primary center-block">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url("assets/bootstrap/dist/js/jquery-3.2.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.js"); ?>"></script>