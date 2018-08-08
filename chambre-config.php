<?php include("include/hms-head.php"); ?>
<?php include("include/hms-head-chambre.php"); ?>
<style>
     .sublist  li{
         display: inline;
         text-decoration: underline;
         margin-right: 3px;
    }
</style>

<br><br>
<ul class="sublist" >
    <li><i class="fa fa-edit"></i><a href="chambre-config.php?page=creation"> Creation de chambre</a></li>
    <li><i class="fa fa-edit"></i><a href="chambre-config.php?page=standing"> Creation standing </a></li>
    <li><i class="fa fa-edit"></i><a href="chambre-config.php?page=type"> Creation type de chambre </a></li>
</ul>
<?php
function affichePage($page){
    switch ($page){
        case 'creation':
            include ('chambre-creation_de_chambre.php');
            break;
        case 'standing':
            include ('chambre-creation_de_standing.php');
            break;
        case 'type':
            include ('chambre-creation_de_typechambre.php');
            break;
        default:
            include ('chambre-config.php');
            break;
    }
}
    if (isset($_GET['page'])){
    affichePage($_GET['page']);
    }


?>
<?php include("include/hms-foot.php"); ?>