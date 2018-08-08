<!--script de controle des  données-->
<?php
include ('traitement/functions.php');
if(!empty($_GET)){
    $errors=array();
    if (empty($_GET['username']) ){
        $errors['username']="Veuillez saisir un pseudo";
    }elseif (!preg_match('/^[a-zA-Z0-9_@.]+$/',$_GET['username'])){
        $errors['username']="Veuillez saisir un pseudo valide(alphanumérique)";
    }

    if (empty($_GET['password'])){
        $errors['password']="Veuillez saisir un mot de passe";
    }
}
?>

<?php include 'include/signinhead.php';?>
<form action="" method="get" role="form" class="formstyle">
    <?php if(!empty($errors)):?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error):?>
                    <li><?=$error;?></li>
                <?php endforeach;?>
            </ul>
        </div>
    <?php endif; ?>
    <div class="form-group">
        <label for="username">Login de l'administrateur</label>
        <input type="text" name="username" id="username" class="form-control">

    </div>
    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <button type="submit" id="submit" class="btn btn-primary">Se Connecter</button>
    <br><br><a href="">Lost your password?</a><span>&nbsp;&nbsp;&nbsp;</span><a href="">Dont'have an account?</a>
</form>

<?php include 'include/signinfoot.php';?>
