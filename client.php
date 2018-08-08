<?php include("include/hms-head.php");?>
        
        <div class="hmshead breadcrumbs">

        </div>

<div class="corp" style="min-height:400px;">
	<div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
    	<h5 class="text-center"><b>Editer les clients</b></h5><hr>
    </div>    
	<div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <!--Formulaire pour enregistrer un quartier-->
    	<form method="get" action="societe.php" id="formSaveClient">
        	<h5 class="text-center"><b>Enregistrer un nouveau client</b></h5>
            	<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Nom ou raison sociale: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required autofocus name="raison" id="raison" placeholder="nom du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Code du client: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required  name="code" id="code" placeholder="code du client" /></div>
                </div>
                 <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Nrccm du client: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"   name="nrccm" id="nrccm" placeholder="Registre du commerce client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Ncc du client: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"   name="nn" id="ncc" placeholder="numero du contribuable" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                	<div class="col-xs-10 col-sm-8 col-md-8 col-lg-8"><label class="label">Client TVA: </label></div>
                	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><input type="checkbox"   name="tva" id="tva" /></div>
                </div>
                 <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6" style=" padding:0px;"> 
                    <div class="col-xs-10 col-sm-9 col-md-9 col-lg-9"><label class="label">Client Precompte: </label></div>
                	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><input type="checkbox"  name="precompte" id="precompte" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Tel fixe: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="tel" class="form-control"  name="telFixe" id="telFixe" placeholder="Contact fixe du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Tel orange: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="tel" class="form-control"  name="telOrange" id="telOrange" placeholder="contact orange du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Tel mtn: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="tel" class="form-control"  name="telFixe" id="telMtn" placeholder="contact de la societé" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Bp: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="tel" class="form-control"  name="bp" id="bp" placeholder="boite postale du client" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Date debut: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control datepicker" required  name="date_debut" id="date_debut" placeholder="Date debut contrat" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Date fin: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control " required  name="date_fin" id="date_fin" placeholder="Date fin contrat" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Montant HT: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  name="montantht" id="montantht" placeholder="Montant hors taxe" value="0" disabled /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Montant Tva: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" value="0" disabled  name="montanttva" id="montanttva" placeholder="Montant tva" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Montant Ttc: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" value="0" disabled  name="montantttc" id="montantttc" placeholder="Montant tta" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Precompte: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" value="0" disabled  name="mtantPrecompte" id="mtantPrecompte" placeholder="Montant tta" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Net a payer: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" value="0" disabled  name="nap" id="nap" placeholder="Montant tta" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Localisation: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><textarea class="form-control"  name="localisation" id="localisation" placeholder="Localisation"></textarea></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Consigne particulière: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><textarea class="form-control"  name="consigne" id="consigne" placeholder="consigne particuliere"></textarea></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Observation: </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><textarea class="form-control" name="observationclient" id="observationclient" placeholder="observation sur le client" ></textarea></div>
                </div>
                <div class="form-group col-xs-5 col-sm-5 col-md-5 col-lg-5"  >
                  <div style="display:none;" id="champCd">
                	<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5" ><label class="label">cd: </label></div>
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"><input type="checkbox"  name="declareSelect" id="declareSelect" /></div>
                  </div>
                </div>
                 <div class="form-group col-xs-6 col-sm-4 col-md-4 col-lg-4">
                    <input type="text" class="form-control" id="cdPass" />
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Statut : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="statutSelect"   id="statutSelect" class="form-control"></select></div>
                </div>
                
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Quartier : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="quartierSelect"   id="quartierSelect" class="form-control"></select></div>
                    <div class="text-center">
					<button type="button" style="margin-top:10px; margin-bottom:10px;" class="btn btn-default btn-xs" data-toggle="modal" data-target="#myQuartier" >Enregistrer nouveau quartier</button>
                  	</div>
                </div>
                
                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="divAlert">
        		</div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                	<input type="hidden"  id="valClient" value="" />
                	<button type="submit" class="btn btn-danger btn-sm" id="btnSubmitClient" value="save"><i class="glyphicon glyphicon-ok-circle"></i> Enregister</button>
                </div>             
        </form>      
    </div>    
    
    <!--Div qui affiche le tableau des quartier-->
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
    	<button type="button" class="btn btn-info btn-xs" style="margin-bottom:10px;" id="boutonPrint"><i class="glyphicon glyphicon-print"></i> Imprimer</button>
    </div>
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
    	<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
    			<label class="label">Rechercher : </label>
            </div>
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">    
                <input type="text" class="form-control" name="rechercheClient" id="rechercheClient" placeholder="recherche rapide" />
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive" id="divPrint" style=" padding-left:0px; padding-right:0px;">
    <div class="table-responsive" style="height:1150px;">
        	<table class="table table-bordered table-striped table-condensed table-hover  fixerTableau" >
            <thead>
            	<tr><th colspan="4" class="text-center">Liste des clients</th>
                </tr>
                <tr>
                	<th>Nom</th>
                    <th>Quartier</th>
                    <th>Observation</th>
                    <th>Action</th>
                </tr>
            </thead> 
            <tbody id="divTabClient" style="height:1080px;">   	
            </tbody>    
        </table>
    </div>
  </div>
</div> 

<!-- Modal -->
  <div class="modal fade" id="myQuartier" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enregistrement d'un nouveau quartier</h4>
        </div>
        <div class="modal-body">
        	<div class="row" > 
                <div class="status alert alert-success" style="display: none"></div>
          		<form method="post" action="quartier.php" id="formSaveQuartier" >
        	<h5 class="text-center"><b>Enregistrer un nouveau quartier</b></h5>
            	<div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
            		<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Nom du quartier : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control" required autofocus name="nom" id="nom" placeholder="nom du quartier" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Observation : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><textarea name="observation"  placeholder="Information sur le quartier" class="form-control" id="observation"></textarea></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Région : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="region"   id="regionSelect" class="form-control"></select></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Département : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="departement"   id="departementSelect" class="form-control"></select></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                	<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label">Arrondissement : </label></div>
                	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><select name="arrondissement"   id="arrondisSelect" class="form-control"></select></div>
                </div>
                <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="divAlert">
        		</div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                	<input type="hidden"  id="valQuartier" value="" />
                	<button type="submit" class="btn btn-danger btn-sm" onClick="chargerSelectQuartier();" id="btnSubmit" value="save"><i class="glyphicon glyphicon-ok-circle"></i> Enregister</button>
                </div>
                
        </form>
               </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onClick="chargerSelectQuartier();" data-dismiss="modal">Fermer</button>
        </div>
      </div>
      
    </div>
  </div>
  

<script>
		$('.datepicker').datepicker({
				format: 'yyyy-mm-dd'
			});
		
		$('#cdPass').on("keyup",function(){
			$.post(
				'loadPassCd.php',
				{ texte: $('#cdPass').val()
				},
				function(data){
					if(data.replace(/\s/g,"") =="true") 
					{ 
						$('#champCd').show("slow");
					}
					else 
					{
						$('#champCd').hide("slow");
					}
				});	
		});
			
		
</script>


<?php include("include/hms-foot.php");?>    