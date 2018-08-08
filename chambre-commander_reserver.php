<?php include("include/hms-head.php"); ?>
<?php include("include/hms-head-chambre.php"); ?>

       
<div class="corp" style="min-height:400px;">
	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">

    	<h5 class="text-center">
                        <input type="radio" name="radioSelectCommandeReserver" value="commander" id="commander" onclick="afficherCommander('commander');"  checked /><label for="commander" >Commander</label>
                        <input type="radio" name="radioSelectCommandeReserver" value="reserver" id="reserver" onclick="afficherCommander('reserver');" /><label for="reserver">réserver</label>
        </h5><hr>
    </div>    
	<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <!--Formulaire pour enregistrer un quartier-->
    	<form method="get" action="traitement.php" id="formSaveDirection">
            <h5 class="text-center" style="padding:20px;"><b>Enregistrer une nouvelle <span class="commander">commande</span> <span class="libreserver" style="visibility: hidden;display: none;">reservation</span></b></h5>
            
            <fieldset>    
            <legend>Information sur chambre</legend>
            <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="direction">Direction</label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  autofocus name="direction" id="direction" placeholder="Hotel Management System" disabled/></div>
                </div>    
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">   
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="numchambre">Numéro de chambre</label></div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <input type="text" name="nivChambre" placeholder="R" style="width: 30px;" disabled>
                        <select name=""> <?php for ($i=0;$i<5;$i++){ echo "<option value='$i'>$i</option>";} ?></select>
                        <select name="numchambre" id="nonumchambrem"><option>G</option><option>D</option></select>
                        <select name=""> <?php for ($i=0;$i<10;$i++){ echo "<option value='$i'>$i</option>";} ?></select>
                    </div>
                </div>
              <!--section propre a la réservation-->
             <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12"  id="atreservation" style="visibility: hidden;display: none;">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="atarriveClient">Date d'arrivée</label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="date" class="form-control" required  name="atarriveClient" id="atarriveClient" placeholder="Date d'entrée Client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="atsortieClient">Date de sortie client</label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="date" class="form-control" required  name="atsortieClient" id="atsortieClient" placeholder="Date de sortie Client" /></div>
                </div>

             
                    <legend>Information sur le client</legend>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="nomClient">Nom(s)  </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required autofocus name="nomClient" id="nomClient" placeholder="Nom(s) du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="prenomClient">Prenom(s)</label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required autofocus name="prenomClient" id="prenomClient" placeholder="Prénom(s) du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="contactClient">Contact</label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required  name="contactClient" id="contactClient" placeholder="Numéro de telephone" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label"  for="emailClient">email</label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  required name="emailClient" id="emailClient" placeholder="Adresse électronique du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="natClient">Nationalité </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required  name="natClient" id="natClient" placeholder="Nationnalité du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="numcniClient">Numéro CNI </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required  name="numcniClient" id="numcniClient" placeholder="Nunéro cni" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="atcniClient">Date expiration CNI</label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="date" class="form-control" required  name="atcniClient" id="atcniClient" placeholder="Date expiration CNI" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Societe :(optionnel) </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="societe"   id="societeSelect" class="form-control"></select></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label"> Consigne particulière: (optionnel) </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><textarea name="consign"   id="consign" class="form-control"></textarea></div>
                </div>
</fieldset>
                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="divAlert">
        		</div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                	<input type="hidden"  id="valDirection" value="" />
                	<button type="submit" class="btn btn-success btn-sm" id="btnSubmit" value="save">
                    <i class="fa fa-save"></i>  Enrégister </button>
                    <button type="submit" class="btn btn-danger btn-sm" id="btnSubmit" value="save">
                    <i class="fa fa-eraser"></i>  Annuler </button>
                </div>             
        </form>      
    </div>    
    
    <!--Div qui affiche le tableau -->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
   
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "  id="divPrint" data='test.pdf' name="divPrint"  style=" padding-left:0px; padding-right:0px; font-size:15px;text-align:left;white-space: nowrap;">

        <table class="table" >
            	<tr><th colspan="12" class="text-center">Liste des commandes</th> </tr>

            <tr style="background-color:#212529;color:white; ">
                <td>Numero Chambre </td>
                <td> Nom Client</td> <td></td>
                <td></td>

                <td>Contact</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>


                <td> Action </td>
                <td></td>
                <td></td>
            </tr>

        </table>
        <div style="overflow-y: auto !important; height: 500px;">
            <table class="table table-striped table-hover  fixerTableau" style="text-align: center" >
                <tr style="background-attachment: fixed;">
                    <td >45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr><tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>

                <tr>
                    <td>45851e</td>
                    <td> Jlui Paul</td>
                    <td>68858558</td>
                    <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                    </td>
                </tr>
            </table>

        </div>

    </div>
</div
  		

<?php include("include/hms-foot.php"); ?> 
