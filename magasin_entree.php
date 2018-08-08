<?php include("include/hms-head.php"); ?>
<?php include("include/hms-head-magasin.php"); ?>

  <div class="breadcrumbs">
               
  		<div class="row" style="background-color:white;margin-left:150px;margin-right:150px;">

          <div class="form-group col-md-12" style="text-align:center;font-weight:bold;font-size:30px;padding-top:20px;">
              <span>Details sur les entrees / sorties des produits</span><br><br>
          </div>
  
            <div class="form-group col-md-10"></div>
            <div class="form-group col-md-2"><img src="images/imprimante2.png" style="width:100px;position:absolute;top:-70px;"></div>
  
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-1" style="font-weight:bold;font-size:20px;">Action <br><br><br> </div>
            <div class="form-group col-md-3">
              <select  class="form-control" id="block_contrat_energie" name="block_contrat_energie">
                <option value="">Choix de l'action</option>
                <option value="">Entree</option>
              </select>
            </div>
            <div class="form-group col-md-4"></div>
  
  
            <div class="form-group col-md-1"></div>
              <div class="form-group col-md-2" style="font-weight:bold;font-size:20px;">Responsable</div>
              <div class="form-group col-md-3" style="font-weight:bold;font-size:20px;">
  
                <select  class="form-control" id="block_contrat_energie" name="block_contrat_energie">
                  <option value="">Choix du responsable</option>
                  <option value="">....</option>
                </select>
  
              </div>
              <div class="form-group col-md-2" style="font-weight:bold;font-size:20px;">Date d'entree</div>
              <div class="form-group col-md-3">
  
                    <input id="pseudo" type="date" name="prenom_client" value=""  class="form-control"  aria-describedby="emailHelp"  required="" onblur="">
              </div>
              <div class="form-group col-md-1"></div>
  
  
  
                <div class="form-group col-md-1"></div>
                  <div class="form-group col-md-2" style="font-weight:bold;font-size:20px;">Source</div>
                  <div class="form-group col-md-3" style="font-weight:bold;font-size:20px;">
  
                    <input id="pseudo" type="text" name="prenom_client" value=""  class="form-control"  aria-describedby="emailHelp"  required="" onblur="">
  
                  </div>
                  <div class="form-group col-md-2" style="font-weight:bold;font-size:20px;">Date de sortie</div>
                  <div class="form-group col-md-3">
  
                        <input id="pseudo" type="date" name="prenom_client" value=""  class="form-control"  aria-describedby="emailHelp"  required="" onblur="">
                  </div>
                  <div class="form-group col-md-1"></div>
  
                  <div class="form-group col-md-1"></div>
                    <div class="form-group col-md-2" style="font-weight:bold;font-size:20px;">Destination</div>
                    <div class="form-group col-md-3" style="font-weight:bold;font-size:20px;">
  
                      <input id="pseudo" type="text" name="prenom_client" value=""  class="form-control"  aria-describedby="emailHelp"  required="" onblur="">
  
                    </div>
                    <div class="form-group col-md-2" style="font-weight:bold;font-size:20px;">Date de placement</div>
                    <div class="form-group col-md-3">
  
                          <input id="pseudo" type="date" name="prenom_client" value=""  class="form-control"  aria-describedby="emailHelp"  required="" onblur="">
                    </div>
                    <div class="form-group col-md-1"></div>
  
  
                  <div class="form-group col-md-1"></div>
                    <div class="form-group col-md-2" style="font-weight:bold;font-size:20px;">Raison</div>
                    <div class="form-group col-md-9" style="font-weight:bold;font-size:20px;">
  
                        <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="raison de votre action..."></textarea>
                    </br></br>
                    </div>
  
  
  
          <div class="form-group col-md-4"></div>
          <div class="form-group col-md-2">
              <button class="btn btn-success" type="submit" value="" >Enregistrer</button>
          </div>
          <div class="form-group col-md-2">
            <button class="btn btn-danger" type="submit" value="" >Annuler</button>
          </div>
            <div class="form-group col-md-4"></div>
  
  
  
        </div> 
        </div>


<?php include("include/hms-foot.php"); ?>


      