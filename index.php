<?php include 'include/signinhead.php';?>
    <form action="connexion.php" method="get" role="form" class="formstyle">

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

