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
        <form action="registerUser" method="post">
            <div class="form-group row <?php if(strlen(form_error('name'))>0) echo ' has-error'; ?>">
                <label for="name" class="col-sm-2 col-form-label">Prenom</label>
                <div class="col-sm-3">
                    <input value="<?=set_value('name')?>" type="text" name="name" class="form-control" id="name" placeholder="Prenom">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('name','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('lastname'))>0) echo ' has-error'; ?>">
                <label for="lastname" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-3">
                    <input value="<?=set_value('lastname')?>" type="text" name="lastname" class="form-control" id="lastname" placeholder="Nom">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('lastname','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('username'))>0) echo ' has-error'; ?>">
                <label for="username" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-3">
                    <input value="<?=set_value('username')?>" type="text" name="username" class="form-control" id="username" placeholder="Username">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('username','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('email'))>0) echo ' has-error'; ?>">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-3">
                    <input value="<?=set_value('email')?>" type="email" name="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('email','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('password'))>0) echo ' has-error'; ?>">
                <label for="password" class="col-sm-2 col-form-label">Mot de passe</label>
                <div class="col-sm-3">
                    <input value="<?=set_value('password')?>" type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('password','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('passconf'))>0) echo ' has-error'; ?>">
                <label for="passconf" class="col-sm-2 col-form-label">Confirmation du mot de passe</label>
                <div class="col-sm-3">
                    <input type="password" class="form-control" name="passconf" id="passconf" placeholder="Confirmation du mot de passe">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('passconf','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row <?php if(strlen(form_error('age'))>0) echo ' has-error'; ?>">
                <label for="age" class="col-sm-2 col-form-label">Age</label>
                <div class="col-sm-3">
                    <input value="<?=set_value('age')?>" type="number" class="form-control" name="age" id="age" placeholder="Age">
                </div>
                <div class="col-sm-2">
                    <?php echo form_error('age','<p class="text-danger" style="font-size: small">','</p>');?>
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-sm-2 col-sm-5">
                    <button type="submit" class="btn btn-primary center-block">S'inscrire</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url("assets/bootstrap/dist/js/jquery-3.2.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/dist/js/bootstrap.js"); ?>"></script>