<?php
include ("connexion.php");

//Je définie les différentes requetes et je vais exécuter en fonction des actions
if($_POST["action"]=="save")
{
    $req1=mysql_query("INSERT INTO `client` (`designationclient`,`codeclient` ,`nrccmclient` ,`ncclient`,`clienttva`,`contactfixeclient`,`contactorangeclient`,`contactmtnclient`,`bpclient`,`montanthtclient`,`montanttvaclient`,`montantttcclient`,`localisationclient`,`consigneparticuliereclient`,`observationclient`,`idquartier`,`idstatut`,`nbrefacture`,`clientPrecompte`,`MontantPrecompte`,`montantNAP`,`Checkclientdeclare`,`datedebut`,`datefin`) VALUES ('".$_POST["raison"]."','".$_POST["code"]."','".$_POST["nrccm"]."','".$_POST["ncc"]."','".$_POST["tva"]."','".$_POST["telFixe"]."','".$_POST["telOrange"]."','".$_POST["telMtn"]."','".$_POST["bp"]."',0,0,0,'".$_POST["localisation"]."','".$_POST["consigne"]."','".$_POST["observationclient"]."','".$_POST["idQuartier"]."','".$_POST["idStatut"]."','0','".$_POST["precompte"]."',0,0,'".$_POST["declareSelect"]."','".$_POST["date_debut"]."','".$_POST["date_fin"]."')") or die(mysql_error());

    if($req1)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}

if($_POST["action"]=="charger")
{
    $req1=mysql_query("SELECT * FROM `client` WHERE idclient=".$_POST["idClient"]);
    if($row=mysql_fetch_array($req1))
    {
        echo $row[0]."#".$row[1]."#".$row[2]."#".$row[3]."#".$row[4]."#".$row[5]."#".$row[6]."#".$row[7]."#".$row[8]."#".$row[9]."#".$row[10]."#".$row[11]."#".$row[12]."#".$row[13]."#".$row[14]."#".$row[15]."#".$row[16]."#".$row[17]."#".$row[18]."#".$row[19]."#".$row[20]."#".$row[21]."#".$row[22]."#".$row[23]."#".$row[24];
    }
    else
    {
        echo "false";
    }
}

if($_POST["action"]=="chercherTvaPrecompte")
{
    $req1=mysql_query("SELECT clienttva,clientPrecompte FROM `client` WHERE idclient=".$_POST["idClient"]);
    if($row=mysql_fetch_array($req1))
    {
        echo $row[0]."#".$row[1];
    }
    else
    {
        echo "false";
    }
}

if($_POST["action"]=="chercherDate")
{
    $req1=mysql_query("SELECT datedebut,datefin FROM `client` WHERE idclient=".$_POST["client"]);
    if($row=mysql_fetch_array($req1))
    {
        echo $row[0]."#".$row[1];
    }
    else
    {
        echo "false";
    }
}


if($_POST["action"]=="chargerSelect")
{
    $req1=mysql_query("SELECT * FROM `client` WHERE `idstatut`<>2 ORDER BY `designationclient`");
    while($row=mysql_fetch_array($req1))
    {
        ?>
		<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
        <?php
    }
}

if($_POST["action"]=="chargerSelect2")
{
    if($_POST["region"]=="0")
    {
        $region="region.idregion";
    }
    else
    {
        $region=$_POST["region"];
    }
    $req1=mysql_query("SELECT DISTINCT client.idclient,client.designationclient FROM `client`,posteclient,quartier,arrondissement,departement,region WHERE 
	(client.`idstatut`<>2) 
	AND  (client.idclient=posteclient.idclient)
	AND (posteclient.idquartier=quartier.idquartier)
	AND (region.idregion=departement.idregion   )  
	AND (departement.iddepartement=arrondissement.iddepartement   )  
	and ( arrondissement.idarrondissement=quartier.idarrondissement  )   
	and  (region.idregion=".$region.") 
	
	ORDER BY `designationclient`") or die(mysql_error());
    while($row=mysql_fetch_array($req1))
    {
        ?>
		<option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
        <?php
    }
}

if($_POST["action"]=="chargerSelectId")
{
    $req1=mysql_query("SELECT * FROM `client` WHERE `idstatut`<>2 ORDER BY `designationclient`" );
    while($row=mysql_fetch_array($req1))
    {

        ?>
		<option value="<?php echo $row[0]; ?>" <?php if($_POST["idClient"]==$row[0]) echo "selected"; ?>><?php echo $row[1]; ?></option>
        <?php
    }
}

if($_POST["action"]=="supprimer")
{
    $req1=mysql_query("DELETE FROM `client` WHERE idclient=".$_POST["idClient"]);

    if($req1)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}

if($_POST["action"]=="modifier")
{
    $req=mysql_query("UPDATE `client` SET `designationclient`='".$_POST["raison"]."', `codeclient`='".$_POST["code"]."',`nrccmclient`='".$_POST["nrccm"]."',`ncclient`='".$_POST["ncc"]."',`clienttva`='".$_POST["tva"]."',`contactfixeclient`='".$_POST["telFixe"]."', `contactorangeclient`='".$_POST["telOrange"]."',`contactmtnclient`='".$_POST["telMtn"]."' ,`bpclient`='".$_POST["bp"]."',`localisationclient`='".$_POST["localisation"]."', `consigneparticuliereclient`='".$_POST["consigne"]."',`observationclient`='".$_POST["observationclient"]."',`idquartier`='".$_POST["idQuartier"]."',`idstatut`='".$_POST["idStatut"]."',`clientPrecompte`='".$_POST["precompte"]."',`Checkclientdeclare`='".$_POST["declareSelect"]."',`datedebut`='".$_POST["date_debut"]."',`datefin`='".$_POST["date_fin"]."'  WHERE idclient=".$_POST["idClient"]) or die(mysql_error());

    if($req)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}
?>