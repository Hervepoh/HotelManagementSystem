<?php include("include/hms-head.php");?>
        
        <div class="hmshead breadcrumbs">

        </div>
        <div class="corp" style="min-height:400px;">
	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
    	<h5 class="text-center"><b>Editer les salaires</b></h5><hr>
    </div>    
	<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <!--Formulaire pour enregistrer un quartier-->
    	<form method="get" action="listeSalaire.php" id="formSaveSalaire">
        	<h5 class="text-center" style="padding:20px;"><b>Enregistrer une tâche</b></h5>
            	<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Agent: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="agentSelect"   id="agentSelect" class="form-control"></select></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Periode: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="periodeSelect"   id="periodeSelect" class="form-control"></select></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Nombre de jour : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="number" class="form-control" required  name="nbJour" id="nbJour" placeholder="nombre de jour travaillé" /></div>
                </div>
                
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Nombre d'heure: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="number" class="form-control" required  name="nbHeure" id="nbHuere" placeholder="nombre d'heure travaillé" /></div>
                </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Nbre heure Supp: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="number" class="form-control" name="nbHeureSupp" id="nbHeureSupp" placeholder="nbre heure supplementaire" /> 
                    </div>
                    
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Nbre jour supp: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="time" class="form-control timepicker" required  name="heureFin" id="heureFinTravail" placeholder="heure de fin" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime anciennete: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="number" class="form-control"  name="primeAnc" id="primeAnc" placeholder="prime anciennetes" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime assiduité: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="number" class="form-control"   name="heureFinPause" id="heureFinPause" placeholder="fin de la pause" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime rendement: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="cumul" id="cumul" placeholder="cumul temps de travail" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime suggestion: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="tempsTravail" id="tempsTravail" placeholder="temps de travail" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime transport: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="travailPointe"   id="travailPointe" class="form-control">
                    	<option value="0">NON</option>
                        <option value="1">OUI</option>
                    </select></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime logement: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="travailValide"   id="travailValide" class="form-control">
                    	<option value="0">NON</option>
                        <option value="1">OUI</option>
                    </select></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime risque: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><textarea class="form-control" name="observationagent" id="observationagent" placeholder="observation sur le travail" ></textarea></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime déplacement: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="number" class="form-control"  name="montantDuJour" id="montantDuJour" placeholder="montant d service ce jour" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Autres primes: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="number" class="form-control"  name="chargeSalariale" id="chargeSalariale" placeholder="charge salariale liée" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Prime déplacement: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Salaire taxable: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Salaire cotisable: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Salaire cotisable plafonné: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Retenue irpp: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Retenue cac: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Retenue cfc: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Retenue pv: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Retenue syndicat: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Retenue etc: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Retenue rav: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Pret: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Remboursement frais: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Accompte: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Opposition: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Total retenue sociale: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Total retenue fiscale: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Autres retenues: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal syndicat: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal cfc: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal fne: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal pv: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal ac: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal alloc fam: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal retenue sociale: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Patronal revenue fiscale: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Net a payer: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Salaire perçu: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Observation payement: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="margeAttachee" id="margeAttachee" placeholder="marge attachee" /></div>
                </div>
                
                
                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="divAlert">
        		</div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                	<input type="hidden"  id="valTache" value="" />
                	<button type="submit" class="btn btn-danger btn-sm" id="btnSubmit" value="save"><i class="glyphicon glyphicon-ok-circle"></i> Enregister</button>
                </div>             
        </form>      
    </div>    
    
    <!--Div qui affiche le tableau des quartier-->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " id="divPrint" style=" padding-left:0px; padding-right:0px;">
        	<table class="table table-bordered table-striped table-condensed table-hover  fixerTableau" >
            <thead>
            	<tr><th colspan="6" class="text-center">Liste des tâches</th>
                </tr>
                <tr>
                	<th>Date</th>
                    <th>Poste</th>
                    <th>Debut</th>
                    <th>Fin</th>
                    <!--th>Temps</th-->
					<th>Pointé ?</th>
                    <th>Action</th>
                </tr>
            </thead> 
            <tbody id="divTabTache" style="height:300px;">   	
            </tbody>  
        </table>
    </div>
</div>  

<?php include("include/hms-foot.php");?>    