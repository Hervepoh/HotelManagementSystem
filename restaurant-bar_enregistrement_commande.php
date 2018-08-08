<?php include("include/hms-head.php");?>
<?php include("include/hms-head-restaurantbar.php");?>

        <div class="breadcrumbs">
            <div class="row" style="background-color:white;margin-left:100px;margin-right:100px;padding-top:100px; ">

                <div class="form-group col-md-12" style="text-align:center;font-weight:bold;font-size:30px;padding-top:10px;padding-bottom:30px;">
                    <span>Enrégistrement d'une commmande </span>
                </div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Nom(s) du client</span>
                </div>
                <div class="form-group col-md-4">
                    <input id="nom_client" type="text" name="prenom_client" value="" class="form-control" aria-describedby="emailHelp" required=""
                        onblur="">
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Nom(s) du responsable</span>
                </div>
                <div class="form-group col-md-4">
                    <span>Jean Martin Martin</span>
                </div>
                <div class="form-group col-md-2"></div>


                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Nom du produit</span>
                </div>
                <div class="form-group col-md-4">
                    <input id="nom_produit" type="text" name="nom_produit" value="" class="form-control" aria-describedby="emailHelp" required=""
                    onblur="">
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Date de commande </span>
                </div>
                <div class="form-group col-md-4">
                    <span>date du jour </span>
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Réduction</span>
                </div>
                <div class="form-group col-md-4">
                    <input id="reduction_commande" type="text" name="reduction_commande" value="" class="form-control" aria-describedby="emailHelp" required=""
                        onblur="">
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Avance</span>
                </div>
                <div class="form-group col-md-4">
                    <input id="avance_commande" type="text" name="reduction_commande" value="" class="form-control" aria-describedby="emailHelp" required=""
                        onblur="">
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Reste</span>
                </div>
                <div class="form-group col-md-4">
                    <input id="reste_commande" type="text" name="reduction_commande" value="" class="form-control" aria-describedby="emailHelp" required=""
                        onblur="">
                </div>
                <div class="form-group col-md-2"></div>

                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4" style="font-weight:bold;font-size:20px;">
                    <span>Prix total</span>
                </div>
                <div class="form-group col-md-4">
                    <input id="reste_commande" type="text" name="reduction_commande" value="" class="form-control" aria-describedby="emailHelp" required=""
                        onblur="">
                </div>
                <div class="form-group col-md-2"></div>
                <div class="form-group col-md-4"></div>
                
               
                <div class="form-group col-md-2">
                        <br>
                    <button class="btn btn-success" type="submit" value="">Enregistrer</button>
                </div>
                <div class="form-group col-md-2">
                        <br>
                    <button class="btn btn-danger" type="submit" value="">Annuler</button>
                </div>

                <div class="form-group col-md-4"></div>
                
                <br><br>
                <br>
                <br>
                <br>

            </div>
        </div>

<?php include("include/hms-foot.php");?>
