function imprimer_bloc_Commande(titre, objet , name){

    var div=objet;
    var entete=titre;
    var nom="name";
    var monImage = new Image();
    monImage.src = "http://www.mon-site.com/une-image.png";

    var selectionwindow=window.open();
    selectionwindow.document.write("" +
        "<table style='width: 100vw;' border=''>" +
        "   <tr>" +
        "       <th colspan='2' style='text-align: center;'>"+"<img src='images/logo.png'  style='display:block;'><p style='color: red;'>Hotel Mangement System</p></th>" +
        "       <th>Nos directions <br> Centre et Littoral: 677.67.28.57  __  6.97.84.22.67 </th>" +
        "       <th>Standard (24/24) : 677.67.28.57  __  6.97.84.22.67<br>BP:5388 Anguissa-Yaounde <br>E-mail:systeme.service.securite@gmail.com <br> hotel@gmail.com <br>Web: www.bahin-security.com</th>" +
        "</tr>"+

        "<tr>" +""+
        "       <td>A l'attention de :</td><td></td><td></td>" +
        "       <td>"+name+"</td>" +
        "</tr>"+

        "<tr>" +""+
        "       <td > Bp : <br> Telephone: 677.67.28.57  <br> Telephone: 6.97.84.22.67 </td><td></td><td></td>" +
        "       <td>Date "+name+": ;<br> Code : <br> Objet :<br> </td>" +
        "</tr>"+
        "</table>"
    );
    selectionwindow.document.write("" +

        "<div style='text-align:center;font-weight:bold;font-size:20px;width:80%;margin-left:10%;margin-right:10%;margin-top: 30px'>"+entete+"</div><br>");
    //selectionwindow.document.getElementByTagName('table').style.border="1px solid black";

    selectionwindow.document.write(document.getElementById(div).innerHTML);
    selectionwindow.print();
    selectionwindow.close();

}
/*********************************************/
function imprimer_bloc(titre, objet){

    var div=objet;
    var entete=titre;

    var selectionwindow=window.open();
    selectionwindow.document.write("" +
        "<table style='width: 100vw;' border=''>" +
        "   <tr>" +
        "       <th colspan='2'>Hotel Mangement System</th>" +
        "       <th>Nos directions <br> Centre et Littoral: 677.67.28.57  __  6.97.84.22.67 </th>" +
        "       <th>Standard (24/24) : 677.67.28.57  __  6.97.84.22.67<br>BP:5388 Anguissa-Yaounde <br>E-mail:systeme.service.securite@gmail.com <br> hotel@gmail.com <br>Web: www.bahin-security.com</th>" +
        "</tr>"+

        "<tr>" +
    "       <td colspan='2'>A l'attention de :<br> Bp : <br> Telephone: 677.67.28.57  <br> Telephone: 6.97.84.22.67 </td>" +
    "       <td>"+nom+"</td>" +
    "</tr>"+

        "<tr>" +
        "       <td colspan='2'>A l'attention de :<br> Bp : <br> Telephone: 677.67.28.57  <br> Telephone: 6.97.84.22.67 </td>" +
        "       <td>Date Facture ;</td>" +
        "</tr>"+
        "</table>"
);
    selectionwindow.document.write("" +

        "<div style='text-align:center;font-weight:bold;font-size:20px;width:80%;margin-left:10%;margin-right:10%;'>"+entete+"</div><br>");
    //selectionwindow.document.getElementByTagName('table').style.border="1px solid black";

    selectionwindow.document.write(document.getElementById(div).innerHTML);
    selectionwindow.print();
    selectionwindow.close();

}
/*********************************************/
function afficherCommander(champs){
    var objet=champs;
    var atreservation="atreservation";
    if (objet=="commander"){
        document.getElementById(atreservation).style.visibility="hidden";
        document.getElementById(atreservation).style.display="none";
        document.getElementsByTagName(libreserver).style.visibility="hidden";
        document.getElementsByTagName(libreserver).style.display="none";
    }else{
        document.getElementById(atreservation).style.visibility="visible";
        document.getElementById(atreservation).style.display="block";
        document.getElementsByTagName(libreserver).style.visibility="visible";
        document.getElementsByTagName(libreserver).style.display="block";

    }
}