# HotelManagementSystem

 Introduction et les objectifs du projet


Nom du projet : HOTEL MANAGEMENT SYSTEM 

Contexte et définition du problème
Secteurs/Domaine	Hôtelier
Contexte	
-Le système ici est celui de la gestion et de l’automatisation de l’ensemble des processus dans l’hôtel LE PLOMBIER de mendong.
-Il est basé sur les différents services offert par l’hôtel, le nombre de ses employés, son nombre de ressources gérées, et aussi de sa nouveauté.
- Il n’existe aucun système de gestion préalablement implémente car l’hôtel est naissant.
Problèmes
-Non existence d’un système de gestion et d’automatisation des processus et taches de l’hôtel.
-L’hôtel étant nouveau il n’est donc pas connu du grand public.

Ma solution	     
Produire une application web responsive, intuitive et agréable et un site vitrine qui vont résoudre le souci respectif de gestion automatique du système et de la présentation de l’hotel au grand public sur la toile.
Le système devant être constituer des sous systèmes ou modules suivant :
-Gestion chambre
-Gestion de magasin
-Gestion de bar
-Gestion des employer
-Gestion des fournisseurs
-Gestion de la trésorerie
Objectifs
-Permettre a l’hôtel de se faire un nom dans le domaine hôtelier et de se démarquer sur la toile.
-Permettre a l’employeur de mieux suivre le personnel de son hôtel par l’automatisation de la gestion de ceux ci.
-Automatiser le système de gestion de la clientèle pour permettre un service rapide et fiable.
-Automatiser le système de la gestion financière pour un meilleur suivie et plus de sécurité.
-Permettre une meilleure gestion des entrées et sorties des produits au sein de la structure.





	II- Expression des besoins fonctionnel et non fonctionnel


Description fonctionnelle
Module concerné	Fonctionnalités	Description	Contrainte



Gestion de chambre
	Commander/Réserver une chambre	
  -Il s’agit ici d’enregistrer la commande/ réservation d’une ou plusieurs chambre par un client	-Les informations du client.
  
	Modifier les informations chambre	
  -Cela reviens a changer les informations relatives a une chambres.	-Les informations sur chambre a modifier  
	ajouter une nouvelle chambre	-Il s’agit de l’ajout d’une chambre à la listes des chambres avec toutes ses caractéristiques.	
  
  -Les caractéristiques de la nouvelle chambre
	Supprimer une chambre	-Enlever une chambre de la liste des chambres	-Avoir les droits de suppression
	
  Consulter les produits d’une chambre
  consulter la liste des chambres	-Cela reviens a lister le contenue d’une chambre
-on peut lister les toutes chambres du système et obtenir des informations sur celles ci.
-on peut lister des chambres suivant certains critères.	
    Impression des documents(pro-formats, facture, liste de chambres...)	Il s’agit ici de fournir des documents a savoir
  -pro format
  -reçus
  -liste de chambres et équipements...	






Gestion de magasin	Enregistrer des commandes de produits	Après une commande de n produit on a la possibilité de savoir qu’on a commandé tel ou tel produit en telle quantité.	
	Enregistrer des produits	Lorsqu’on reçoit un stock de produit il faut signaler au système qu’on a désormais tel, tel ou tel produit.	
	consulter les produit qui sont sorties et entrés du magasin a des périodes précises	On peut avoir les détails sur les entrées et sortie du magasin (ou va tel produit, d’où venait il...)	
	Faire l’inventaire des produits	On peut tirer des fiches de produits contenu a un endroit avec les détails.	
	savoir qui était responsable du magasin a un instant donné		



Gestion du bar/restauration	-imprimer une facture	Après chaque transaction on peut imprimer une facture sur papier qui sera remise au client	
	commander des produits	Le barman a la possibilité de demander au gérant du magasin de lui apporter des produits via le système	
	faire l’inventaire de ces produits et les enregistrer		
	enregistrer les commandes des clients	Après chaque commande de produits on enregistre cette transaction dans la BD	
Gestion du personnel	Enregistrer un employé	Tout employé de la structure doit être connu par le système, on insère les différentes informations relative a un employé.	Les informations sur l’employé à enregistrer.
	Consulter le planning de travail des employés	Connaître quelle tache doit accomplir un employé à un moment donné.	
	Mettre à jour les informations sur un employé	On a la possibilité de modifier les informations personnelles d’un employé, modifier son poste...	
	planifier des horaires de travail des employé	On doit avoir la possibilité de planifier les activité de travail de chaque employé	
	valider ou modifier l’état de la tache assigné à un employé.	Un employé doit avoir la possibilité de valider qu’il a effectivement effectué ses heures de travail ou pas.	Date de début et de fin de l’activité
Gestion des caisses	Statistiques des entrées sorties financières.	Il s’agit ici de  pouvoir présenter toutes les transactions monétaires effectuées ainsi que les détails sur celles ci.	

Gestion des fournisseurs	consulter les fournisseurs	Il s’agit ici d’avoir des informations sur un fournisseur ainsi que les taches auxquelles il vaquent au sein de la structure.	
	Mettre a jour les informations sur un fournisseurs.	Actualiser les informations sur un fournisseur quelconque.	
	ajouter un fournisseur	Il s’agit ici d’ajouter un nouveau fournisseurs à la liste de ceux existant.	Les informations sur le nouveau fournisseurs et les taches qui lui sont assignées.




BESOINS NON FONCTIONNELS
Besoins	Description
Sécurité	Les informations de l’application doivent être confidentielles
Ergonomie	l’application doit être agréable et l’interaction homme machine doit être aisée.
portabilité	l’application pourra être utilisé sur différente plate formes.
validité	l’application doit correspondre aux attentes du client.
bon temps d’exécution	l’application doit avoir un temps de réponses très négligeable pour satisfaire aux besoins.
la traçabilité	Renvoit au fait que l’on doit être capable de savoir qui a fait quoi a un instant précis dans le système.
Retour d’expériences	Les utilisateurs auront la possibilité de noter l’application ou de donner leur avis sur celle ci.
La maintenabilité	l’application sera facile à modifier et à mettre a jour.
la documentation	Des documents tel que le manuel d’utilisation, manuel de configuration...



3)  fonctionnalités. (confère tableau  d’expression des besoins fonctionnels et non fonctionnels)


4) ÉTUDE FINANCIÈRE DU PROJET :

Les logiciels Utilisés, Rôle et leur prix d’obtention

LOGICIELS	UTILISATION	Prix licence
Ganttproject	Planning prévisionnel	
win’design	Modélisation	
Balzamiq	Maquettage	
IDE Eclipse	Développement	
MySql Workbench	Client SQL	
Visual Studio Code	Éditeur de texte spécialisé	
Photoshop CC 2018	Maquettage	
Navigateur Web	Test des différents modules	
MySql Server	SGBD	
Browser Sync	Synchronisation de code source  aux navigateur	
