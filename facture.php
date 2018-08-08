<?php include("include/hms-head.php");?>
<style>
    legend.scheduler-border {
      border-bottom: none;
      font-size: 12px;
      margin-bottom: inherit !important;
      width: 50%;
    }

    fieldset.scheduler-border {
      width: 100% !important;
      border: solid 1px #DDD !important;
      font-size: 12px;
    }

    .form-control {
      height: 25px;
      padding: 2px;
    }
  </style>

<div class="hmshead breadcrumbs">

</div>

<div class="hmsmain breadcrumbs">
  <div class="corp" style="min-height:400px;">
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <h5 class="text-center">
        <b>Facture</b>
      </h5>
      <hr>
    </div>
   
    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <!--Formulaire facturation-->
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px; margin-bottom:10px;">
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <label class="label">Client : </label>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <select name="clientSelect2" id="clientSelect" class="form-control"></select>
          </div>
        </div>
        <form method="get" action="facture.php" id="formSaveFacture">
          

          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px;">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <label class="label" style="margin-bottom:1px;">Service : </label>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <input type="text" name="serviceFact" id="serviceFact" class="form-control" readonly placeholder="service" />
            </div>
          </div>
      </div>



      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding:0px;">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 " id="divPrint" style=" padding-left:0px; padding-right:0px;">
          <table class="table table-bordered table-condensed table-hover  fixerTableau">
            <thead>
              <tr>
                <th colspan="5" class="text-center">Liste des services</th>
              </tr>
              <tr>
                <th>Poste</th>
                <th>Service</th>
                <th>Eff</th>
                <th>Pu</th>
                <th>Mtant</th>
              </tr>
            </thead>
            <tbody id="divTabServicePosteFacture" style="height:130px;">
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!---->
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Effectif : </label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="number" name="qteFact" id="qteFact" class="form-control" required placeholder="Eff" />
        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Cout unitaire : </label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="text" name="puFact" id="puFact" class="form-control" required placeholder="cout unitaire" />
        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Total HT : </label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="text" name="mtanthtFact" id="mtanthtFact" class="form-control" placeholder="montant hors taxe" readonly
          />
        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Remise : </label>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
          <input type="number" name="remiseFact" id="remiseFact" class="form-control" required placeholder="remise" />
        </div>%
      </div>
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Net Commercial : </label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="text" name="netCmercial" id="netCmercial" class="form-control" placeholder="net commercial" readonly
          />

        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Montant TVA : </label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="text" name="mtanttvaFact" id="mtanttvaFact" class="form-control" placeholder="montant tva" readonly
          />
          <h6 class="text-center" style="margin:0px;">Taux tva 19,25 %</h6>
        </div>

      </div>
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Montant TTC : </label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="text" name="mtantttcFact" id="mtantttcFact" class="form-control" placeholder="montant ttc" readonly
          />

        </div>
      </div>
      <div class="form-group col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <label class="label" style="margin-bottom:1px;">Precompte : </label>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <input type="text" name="mtantprcmpteFact" id="mtantprcmpteFact" class="form-control" placeholder="montant precompte"
            readonly />
          <h6 class="text-center" style="margin:0px;">Taux precompte 5,5 %</h6>
        </div>
      </div>
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 col-xs-offset-0 col-sm-offset-1 col-md-offset-3 col-lg-offset-1 text-right"
        style="padding:0px; text-align:right;">
        <label class="label" style="margin-bottom:1px;">NET A PAYER : </label>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
        <input type="text" name="napFact" id="napFact" class="form-control" placeholder="NET A PAYER" readonly />
      </div>
    </div>

    <input type="hidden" name="valFacture" id="valFacture" />
    <input type="hidden" name="valPoste" id="valPoste" />
    <input type="hidden" name="valService" id="valService" />
    <input type="hidden" name="valDetail" id="valDetail" />

    <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="divAlert">
    </div>
    <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
      <br>
      <button type="submit" class="btn btn-warning btn-sm" id="btnSubmit" value="save">
        <i class="glyphicon glyphicon-ok-circle"></i> Enregister</button>

      <button type="button" class="btn btn-info btn-sm" id="btnImprimerFact" value="save">
        <i class="glyphicon glyphicon-print"></i> Imprimer</button>
      <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <input type="radio" name="typeFactPrint" id="radioFactHt" />Facture HT&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="typeFactPrint" id="radioFactTtc" checked/>Facture TTC&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="radio" name="typeFactPrint" id="radioFactHtRemise" />Facture HT + Remise
      </div>
    </div>

    <!--Div de la facture-->
    <div class="form-group col-xs-12 col-sm-10 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-1 col-md-offset-1 col-lg-offset-1"
      style="background:white; border:1px solid; min-height:300px;">
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
        <h2>FACTURE</h2>
      </div>
      <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
        <h5>Exercice:
          <b style="color:red;" id="anneeExercice"></b>
        </h5>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
        <div class="col-xs-12 col-sm-4 col-md-5 col-lg-4" style="padding:1px;">
          Date du jour :
        </div>
        <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="padding:0px;">
          <input type="text" class="form-control datepicker" required id='factDateJour' placeholder="date du jour" />
        </div>
      </div>
      <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="">
        <h5>A l'attention du client:
          <b id="nomClient"></b>
        </h5>
        <h5>BP:
          <b id="bpClient"></b>
        </h5>
        <h5>NC:
          <b id="ncClient"></b>
        </h5>
        <h5>Contact:
          <b id="contactClient"></b>
        </h5>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left:0px;">
          <h5>Opération en cours:
            <b style="color:red;" id="opEnCours">0</b>
          </h5>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h5>Facture en cours:
            <b style="color:red;" id="factEnCours">0</b>
          </h5>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding-left:0px;">
          <h5>Opération facturé:
            <b style="color:red;" id="opEffectues">0</b>
          </h5>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <h5>Facture traitée:
            <b style="color:red;" id="factTraites">0</b>
          </h5>
        </div>
      </div>
      <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="padding-top:10px;">
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="padding:0px;">Num facture : </div>
          <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="padding:0px;">
            <input type="text" class="form-control" required placeholder="numero facture" id="numFact" />
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
          <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5" style="padding:0px;">Date facture :</div>
          <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7" style="padding:0px;">
            <input type="text" class="form-control datepicker" required id='factDateFact' placeholder="date facture" />
          </div>
        </div>
        <div class="form-group col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding:0px;">
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding:0px;">Objet:</div>
          <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" style="padding:0px;">
            <textarea placeholder="Objet de la facture" id="factObjet" class="form-control">Facturation des services pour le mois de </textarea>
          </div>
        </div>
      </div>


      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 table-responsive" id="divPrint" style=" padding-left:0px; padding-right:0px;">
        <table class="table table-bordered table-striped table-condensed table-hover  " style="border-radius:5px;">
          <thead>

            <tr>
              <th>Service</th>
              <th>Produits</th>
              <th>Quqntité</th>
              <th>Prix unitaire</th>
              <th>Mtnt Ht</th>
              <th>Net cmercial</th>
              <th>Mtnt tva</th>
              <th>Mtnt ttc</th>
              <th>Mtnt prcmpte</th>
              <th>NAP</th>
            </tr>
          </thead>
          <tbody id="divTabDetailFacture">

          </tbody>
        </table>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" style="font-size:13px;">
        Arreter la présence facture à la somme de
        <b id="sommeEnLettre"></b>
      </div>
    </div>
    <!--Fin de la facture-->


    </form>
  </div>

</div>

<!--Div qui affiche le tableau des quartier-->

</div>

</div>

<?php include("include/hms-foot.php");?>