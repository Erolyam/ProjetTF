<style type="text/css">
    table {
    background:#ADDAF1;
    border-radius:10px;
      margin-top:95px;
 }
 </style>
 <title><?php echo $title;?></title>
<?php if($this->session->flashdata('msg')): ?>
    <p><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>
<form action="http://localhost/ProjetTF/CodeIgniter/index.php/register/insert" name="form1" id="form1" method="post" >
    <table width="500" border="0" align="center">
        <tr>
            <td>Prenom:</td>
            <td><input type="text" name="name" id="name" style="color:#FF0000;" value="<?=set_value('name')?>"></td>
            <td><?php echo form_error('name');?></td>
        </tr>
        <tr>
            <td>Nom:</td>
            <td><input type="text" name="lastname" id="lastname" style="color:#FF0000;" value="<?=set_value('lastname')?>"> </td>
            <td><?php echo form_error('lastname');?></td>
        </tr>
        <tr>
            <td>UserName:</td>
            <td><input type="text" name="username" id="username" style="color:#FF0000;" value="<?=set_value('username')?>"></td>
            <td><?php echo form_error('username');?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" id="email" style="color:#FF0000;" value="<?=set_value('email')?>"></td>
            <td><?php echo form_error('email');?></td>
        </tr>
        <tr>
            <td>Mot de passe:</td>
            <td><input type="password" name="password" id="password" style="color:#FF0000;"></td>
            <td><?php echo form_error('password');?></td>
        </tr>
        <tr>
            <td>Confirmation du mot de passe:</td>
            <td><input type="password" name="passconf" id="passconf" style="color:#FF0000;"></td>
            <td><?php echo form_error('passconf');?></td>
        </tr>
        <tr>
            <td>Age:</td>
            <td><input type="number" name="age" id="age" style="color:#FF0000;" value="<?=set_value('age')?>"></td>
            <td><?php echo form_error('age');?></td>
        </tr>
        <tr><td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="S'inscrire"></td></tr>
    </table>
</form>