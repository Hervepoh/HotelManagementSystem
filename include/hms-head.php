<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HMS_tableau de bord</title>
    <meta name="description" content="HMS Hotel Management System">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="images/favicon1.ico" />

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="librairie/css/normalize.css">
    <link rel="stylesheet" href="librairie/css/bootstrap.min.css">
    <link rel="stylesheet" href="librairie/css/font-awesome.min.css">
    <link rel="stylesheet" href="librairie/css/themify-icons.css">
    <link rel="stylesheet" href="librairie/css/flag-icon.min.css">
    <link rel="stylesheet" href="librairie/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="librairie/css/style.css">
    <link href="bootstrap/css/bootstrap.icon-large.min.css" rel="stylesheet">



    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Merienda:700" rel="stylesheet">

</head>

<body>


    <!-- Menu admin -->

    <!-- /#left-panel -->
    <aside id="left-panel" class="left-panel" style="background-color:#091324;">
        <nav class="navbar navbar-expand-sm navbar-default" style="background-color:#091324 !important; ">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="accueil.php">
                    <img src="images/logo.png" alt="Logo">
                </a>
                <a class="navbar-brand hidden" href="accueil.php">
                    <img src="images/logo2.png" alt="Logo">
                </a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">
                            <i class="menu-icon fa fa-dashboard"></i>H_M_S</a>
                    </li>
                    <h3 class="menu-title">Ressources</h3>
                    <!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-laptop"></i>Personnel</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="fa fa-puzzle-piece"></i>
                                <a href="personnel_ajouter.php">gestion</a>
                            </li>
                            <li>
                                <i class="fa fa-id-badge"></i>
                                <a href="modification_personnel.php">Modifier</a>
                            </li>
                            <li>
                                <i class="fa fa-bars"></i>
                                <a href="supprimer_presonnel.php">supprimer</a>
                            </li>
                            <li>
                                <i class="fa fa-share-square-o"></i>
                                <a href="liste_des_employes.php">liste employés</a>
                            </li>
                        </ul>
                    </li>


                    <h3 class="menu-title">utilisateur</h3>
                    <!-- /.menu-title -->

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="menu-icon fa fa-tasks"></i>utilisateur</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li>
                                <i class="menu-icon fa fa-user-plus"></i>
                                <a href="ajouter_utilisateur.php"> ajouter</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-wrench"></i>
                                <a href="modifier_utilisateur.php">Modifier</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-user-times"></i>
                                <a href="supprimer_utilisateur.php">supprimer</a>
                            </li>
                            <li>
                                <i class="menu-icon fa fa-list"></i>
                                <a href="liste_des_utilisateurs.php">liste comptes</a>
                            </li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>


    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header" style="background-color:#091324 !important; color:white;">

            <div class="header-menu">

                <div class="col-sm-10">

                    <a id="menuToggle" class="menutoggle pull-left">
                        <i class="fa fa fa-tasks"></i>
                    </a>

                    <div class="header-left" id="header_menu" style="font-size:1.1rem;">
                        <a class="nav_head" href="chambre.php" style="margin-right:15px;">
                            <i class="fa fa-bed" aria-hidden="true"></i> Chambres</a>
                        <a class="nav_head" href="restaurant-bar.php" style="margin-right:15px;">
                            <i class="fa fa-cutlery" aria-hidden="true"></i> Restaurant/Bar</a>
                        <a class="nav_head" href="magasin.php" style="margin-right:15px;">
                            <i class="fa fa-wpforms" aria-hidden="true"></i> Magasin</a>
                        <a class="nav_head" href="caisse.php" style="margin-right:15px;">
                            <i class="fa fa-money" aria-hidden="true"></i> Caisse</a>
                        <a class="nav_head" href="planning-previsionnel.php" style="margin-right:15px;">
                            <i class="fa fa-calendar" aria-hidden="true"></i> Planning Présivsionnel</a>

                        <button class="search-trigger">
                            <i class="fa fa-search"></i>
                        </button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit">
                                    <i class="fa fa-close"></i>
                                </button>
                            </form>
                        </div>
                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-2">

                    <div class="user-area dropdown float-right">
                        <div style="z-index:150; right:25%; position:absolute; top:3%; color:#000; font-size:12px;" ><span style="text-transform:capitalize;"><b><?php //echo "Bienvenue  ".$_SESSION["prenom"]; ?></span><span style="text-transform: uppercase;"> <?php // echo $_SESSION["nom"]; ?></span></b></div>
                        <button id="deconnecter" class="btn btn-default deconnecter" style="z-index:150; left:-500%; position:absolute; top:3%;" ><img src="images/author"   />Deconnexion</button>

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                </i> Mon profil</a>

                            <a class="nav-link" href="#">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                </i>parametres</a>

                            <a class="nav-link" href="#">
                                <i class="fa fa-power-off"></i>deconnection</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown" id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header>