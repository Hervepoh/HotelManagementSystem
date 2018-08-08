<?php include("include/hms-head.php");?>
<?php include("include/hms-head-planning-previsonnel.php");?>

        <div class="breadcrumbs">
            <div class="row" style="background-color:white;margin-left:200px;margin-right:200px;">

                <div class="form-group col-md-12" style="text-align:center;font-weight:bold;font-size:30px;padding-top:20px;">
                    <span>Creation de tache</span>
                    <br>
                    <br>
                </div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Nom de la tache</span>
                </div>
                <div class="form-group col-md-4">
                    <input id="pseudo" type="text" name="prenom_client" value="" class="form-control" aria-describedby="emailHelp" required=""
                        onblur="">
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Poste concerne</span>
                </div>
                <div class="form-group col-md-4">
                    <select class="form-control" id="block_contrat_energie" name="block_contrat_energie">
                        <option value="">Choix du poste</option>
                        <option value="familiale">familiale</option>
                        <option value="personnelle">personnelle</option>
                    </select>

                </div>
                <div class="form-group col-md-2"></div>


                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Responsable</span>
                </div>
                <div class="form-group col-md-4">
                    <select class="form-control" id="block_contrat_energie" name="block_contrat_energie">
                        <option value="">Choix du responsable</option>
                        <option value="Premium">Premium</option>
                    </select>
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Description de la tache</span>
                </div>
                <div class="form-group col-md-4">

                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                    <br>
                    <br>
                </div>
                <div class="form-group col-md-2"></div>


                <div class="form-group col-md-4"></div>
                <div class="form-group col-md-2">
                    <button class="btn btn-success" type="submit" value="">Enregistrer</button>
                </div>
                <div class="form-group col-md-2">
                    <button class="btn btn-danger" type="submit" value="">Annuler</button>
                </div>
                <div class="form-group col-md-4"></div>



            </div>
        </div>

<?php include("include/hms-foot.php");?>