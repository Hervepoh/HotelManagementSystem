<?php include("include/hms-head.php");?>

        <div class="breadcrumbs" style="background-color:#afd4cc !important;">
            <div style="background-color: #afd4cc; height:50px;margin-top: -5px;"></div>
        </div>
        <div class="row" style="background-color:;margin-left:10px;margin-right:10px;">

<div class="form-group col-md-12" style="text-align:center;font-weight:bold;font-size:30px;padding-top:20px;">
    <span>Ajouter un membre au personnel</span>
</div>
 <!--right section begin-->
<div class="form-group col-md-6" style="border:1px solid grey;font-weight:bold;font-size:15px;background-color:white;">
    <form action="#" method="POST">    

        <fieldset>
             <legend>Information</legend>
           
            <div class="form-group col-md-4 ">
                <label for="nom_personnel">Nom(s)</label>
            </div>
            <div class="form-group col-md-1 " >
             </div>
            <div class="form-group col-md-7 ">
                <input id="nom_personnel" type="text" name="nom_personnel" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/> 
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <label for="prenom_personnel">Prenom(s)</label>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <input id="prenom_personnel" type="text" name="prenom_personnel" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/>
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <label for="mat_personnel">Matricule</label>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <input id="mat_personnel" type="text" name="mat_personnel" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/>
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <label for="tel_personnel">Contact</label>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <input id="tel_personnel" type="text" name="tel_personnel" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/>
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <label for="email_personnel">email</label>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <input id="email_personnel" type="text" name="email_client" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/>
            </div>
             <!-- form group-->
             <div class="form-group col-md-4 ">
                <span>Satut matrimonial</span>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                    <select class="form-control" id="statumatri_personnel" name="block_contrat_energie">
                        <option value="">Choix du statut</option>
                        <option value="">celibataire (Sans enfant)</option>
                        <option value="">Celibataire ( avec enfant(s)</option>
                        <option value="">Marié(e)</option>
                        <option value="">Marié(Sans enfant)</option>      
                    </select>
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <span>Genre</span>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <select class="form-control" id="genre" name="genre">
                        <option value="">Choix du genre</option>
                        <option value="">Homme</option>
                        <option value="">Femme</option>     
                </select>
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <span>Nationalité</span>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
             <select class="form-control" id="statumatri_personnel" name="block_contrat_energie">
                        <option value="">Choix de nationnalité</option>
                        <option value="">Camerounaise</option>
                        <option value="">Ivoirienne</option>  
                        <option value="">Guinnéenne</option>
                </select>
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <span>Numéro CNI</span>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <input id="num_cni_client" type="text" name="num_cni_client" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/>
            </div>
            <!-- form group-->
            <div class="form-group col-md-4 ">
                <label for="date_cni_client">Date expiration CNI</label>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <input id="date_cni_client" type="text" name="date_cni_client" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/>
             <!-- form group-->
             <div class="form-group col-md-4 ">
                <label for="photo_personnel">Photo</label>
            </div>
            <div class="form-group col-md-1 " >
                <span></span>
            </div>
            <div class="form-group col-md-7 ">
                <input id="photo_personnel" type="file" name="photo_personnel" value="" class="form-control" aria-describedby="emailHelp" required=""
            onblur=""/>
            </div>
        </fieldset>
        <div class="form-group col-md-6 ">
            <button class="btn btn-success" type="submit" value="" >Enregistrer</button>
        </div>
        <div class="form-group col-md-6 ">
            <button class="btn btn-danger" type="submit" value="" >Annuler</button>
        </div>
        
        
        <div class="row" style="background-color:;padding-left:10px;">    
       
       

    </form>
    </div>



</div>

<!--right section end
<div class="col-md-1" style=""></div>
-->
 <!--left section begin-->
<div class="form-group col-md-6" style="border:1px solid grey;background-color:white;">

    <br>

    <table class="table table-striped"  style="font-size:12px;text-align:left;white-space: nowrap;">
        <thead  style="background-color:#212529;color:white;">
        <tr>

            <th scope="col"> Nom </th>
            <th scope="col">Matricule</th>
            <th scope="col">Action</th>


        </tr>
        </thead>
        <tbody >
                <tr>
                    <td>Eliezer Powel</td>
                    <td >18As1526</td>
                    <td> 
                        <a href="" class="btn btn-success btn-sm">Modifier</a>
                        <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>Eliezer Powel</td>
                    <td >18As1526</td>
                    <td> 
                        <a href="" class="btn btn-success btn-sm">Modifier</a>
                        <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>Eliezer Powel</td>
                    <td >18As1526</td>
                    <td> 
                        <a href="" class="btn btn-success btn-sm">Modifier</a>
                        <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>Eliezer Powel</td>
                    <td >18As1526</td>
                    <td> 
                        <a href="" class="btn btn-success btn-sm">Modifier</a>
                        <a href="" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
        </tbody>
        </table>




</div>
<!--left section end-->
</div>

       

<?php include("include/hms-foot.php");?>