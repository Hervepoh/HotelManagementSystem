
<div class="corp" style="min-height:400px;">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">

    </div>
    <div class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <!--Formulaire pour enregistrer -->
        <form method="get" action="traitement.php" id="formSaveDirection">
            <h5 class="text-center" style="padding:20px;"><b>Enregistrer un nouveau standing</b></h5>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="direction">Nom de la Direction</label></div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  autofocus name="direction" id="direction" placeholder="Hotel Management System" disabled/></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="direction">Nom du standing</label></div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7"><input type="text" class="form-control"  autofocus name="direction" id="direction" placeholder="nom du standing" /></div>
                </div>
                <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"><label class="label" for="atsortieClient">Description du standing</label></div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                        <textarea cols="35" rows="5"></textarea>
                    </div>
                </div>
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

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " id="divPrint" style=" padding-left:0px; padding-right:0px; font-size:15px;text-align:left;white-space: nowrap;">

            <table class="table">
                <tr><th colspan="12" class="text-center">Liste des chambres</th> </tr>

                <tr style="background-color:#212529;color:white; ">
                    <td>Nom standing </td>
                    <td> Action </td>
                </tr>

            </table>
            <div style="overflow-y: auto !important; height: 500px;">
                <table class="table table-striped table-hover  fixerTableau" style="text-align: center">
                    <tr>
                        <td>45851e</td>
                        <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>45851e</td>
                        <td> <button class="btn btn-info btn-xs" title="modifier"><i class="fa fa-pencil"></i> </button><button class="btn btn-danger  btn-xs" title="supprimer"><i class="fa fa-trash"></i> </button>
                        </td>
                    </tr>


                </table>

            </div>

        </div>
    </div

