
Conversation ouverte. 1 message non lu.

Aller au contenu
Utiliser Gmail avec un lecteur d'écran
Activez les notifications sur le bureau pour Gmail.
   OK  Non, merci
1 sur 536
(aucun objet)
Boîte de réception

Oumy Toure
15:06 (il y a 1 minute)
À moi

 

# DOCUMENTATION DU PROJET
# GESTION DES UTILISATEURS FRAMEWORK LARAVEL 
   # Membres:
   # Assane DIALLO
   # Oumy TOURE
   # Issiaka TRAORE
   # Richie Godelvin MILANDOU
# SOMMAIRE
# INTRODUCTION
# OBJECTIFS
# CIBLE ET RÔLE
# RESPONSABILITÉ
# IDENTITE GRAPHIQUE
# LES BESOINS FONCTIONNELS
# CONTRAINTES TECHNIQUES
# CHOIX TECHNIQUE
# L’ARBORESCENCES DU PROJET
# FORMULAIRE DE CONNECTION
# FORMULAIRE D’INSCRIPTION
# ESPACE ADMINISTRATEUR
# ESPACE ARCHIVE
# ESPACE UTILISATEUR
# ESPACE UTILISATEUR SIMPLE
# CONCLUSION



# Introduction
Le monde professionnel de nos jours est à la quête de l’innovation dans tous les domaines pour être toujours concurrentiel. Les entreprises vont faire appel aux développeurs pour étendre leur visibilité, assurer la sécurité de leurs base de données et aussi faciliter la gestion de leur plateforme web.
Objectifs
Mise en place d’une solution web pour la gestion 
des utilisateurs.
   3. # Cible et Rôle
Administrateur et utilisateur simple.
4. Responsabilité
Chef d’équipe (Assane DIALLO)
Développeurs (Oumy TOURE; Issiaka TRAORE;Richie Godelvin MILANDOU)
5. # Identité graphique 
Pour le formulaire on aura comme couleur:
couleur de fond : #FFF (blanc)
couleur texte : #000 (noir) 
erreur couleur:#CC0000 (rouge)
barre de navigation  : #000 (bleu) 
couleur des bouton: #0d6efd; ( connection,inscription )
6. # Les besoins fonctionnels
      .Besoins                    
      Inscription
      Connexion
      Gestion des utilisateurs
      .Caractéristiques  
          formulaire: 
      nom
      prénom
      e-mail
      password
      rôle
      matricule (auto-généré)                                        
      formulaire: email, mot de passe
      Prenom , nom ,email,  matricule,role, date d’inscription et les actions
      .Languages
         framework laravel,
      composer,
      Bootstrap 5,
      Api,
      Php 8
      

7. # Contraintes techniques
Temps de réalisation
Conflit github

8. # Choix Technique
Pour la gestion et l’organisation du travail nous avons choisi  Trello  comme outil de travail collaboratif.
9. L’arborescence du projet
Page connexion
Page inscription
Page administrateur
Page utilisateur simple
Page archive
Page modification

10. # Formulaire de connexion

Par défaut l'utilisateur est redirigé sur la page connexion, s’il n’entre pas un email ou un mot de passe on lui demande de renseigner les champs. Il est aussi valable s’il entre un email incorrect lorsque l'envoi d'un message m'indiquant que le mail est invalide. l’utilisateur doit exister dans la base de donnée et aussi entrer enregistrer un mot de passe pour accéder à la page admin ou user simple. Sinon il faudra qu’il s'inscrit un lien en dessous du bouton de connexion le redirige vers la page d’inscription.
11. # Formulaire d’inscription


L’utilisateur qui n’a pas de compte arrive sur la page d’inscription pour s’inscrire. Il peut entrer une photo au moment de l’inscription mais ce dernier est optionnel. L’utilisateur doit renseigner tous les champs, il doit entrer un mot de passe et faire la confirmation mais si les deux ne sont pas compatibles on envoie un message d’erreur m'indiquant qu'ils ne sont pas conformes. Il faut aussi s’assurer que l’utilisateur à entrer un email qui n’existe pas dans la base de donnée si c’est le cas on lui dit que l’email existe dans la base de donnée.
Et maintenant si l’utilisateur s'est inscrit,il peut se connecter avec le compte qui à créer et est redirigé vers une autre page admin ou user.

12. # Espace administrateur


utilisateur est amené dans cette page s’il se connecte en tant qu’administrateur. L'admin peut voir son profil c'est -à -dire sa photo,son nom et prénom ainsi que son matricule. Il peut voir la liste des utilisateurs actifs et les utilisateurs archives faire une recherche s’il le souhaite par le nom. Il peut modifier un utilisateur,archiver ou switcher un utilisateur, d’utilisateur simple à  administrateur ou le contraire. L’admin peut paginer pour voir les utilisateurs restants du tableau actif comme inactif. La date de modification et la date d’archive seront toutes visibles dans le tableau ainsi que dans la base de données qu’on a utilisé mongodb car tous les utilisateurs récupérés dans le tableau sont issus de cette base. En effet pour mieux faire comprendre la page archiver et désarchiver je vais l’expliquer en bas.
13. # Espace Archive


Pour accéder à l’espace archive, il y’a un lien sur la page admin qui permet d’y accéder. L'utilisateur peut voir tous les utilisateurs archivés et faire aussi l' action à savoir désarchiver,on peux faire une recherche ou paginer s’il le veut bien et voir aussi son profil.

14. # Espace Utilisateur simple


L’utilisateur sera dans cette page s’il se connecte en tant que user simple dans ce cas il ne pourra pas voir la liste des archives ni faire des action.Néanmoins il peut paginer pour voir le reste de la liste et faire aussi une recherche et la date d’inscription sera affichée.

# Conclusion
La documentation nous permettra de bien comprendre le fonctionnement du site qui consiste à créer un projet laravel le connecter avec une base de donnée non rationnelle mongodb. Ensuite inscrire un utilisateur et lui permette de se connecter et faire une redirection.  S’il est redirigé on aura la récupération des données dans la page admin  ou user.  Dans la page admin il pourra faire des actions alors que si c’est dans la page user il ne peut faire aucune action sauf ce qu'il ont en commun c’est à dire faire un pagination et une recherche.






# DOCUMENTATION API

# SOMMAIRE
# INTRODUCTION
# GÉNÉRALITÉS SUR API
# TECHNOLOGIE UTILISE
# DÉFINITION DES RESSOURCES DE L’API
# CRÉATIONS DES ROUTES
# FONCTION DE CONNEXION
# FONCTION DE INSCRIPTON
# FONCTION MODIFICATION
# F# ONCTION SWITCHE
# FONCTION ARCHIVAGE
# FONCTION DÉSARCHIVAGE
# SESSION



# Introduction
Dans cette rubrique nous allons illustrer les fonctionnalités et code du coté backend qui permet de manipuler l’interface apporter une description détaillé du codage mvc (modèle,vue et controller).
Notre application web permettant de gérer les utilisateurs de l'application web afin de gérer et les droits d'accès ainsi que le contenu du tableau à afficher. Elle permet de créer des profils et de leur affecter des rôles utilisateurs ou admin.
Technologie utilisées
Framework laravel
composer
# Définition des ressources de l’API
Ressource est un objet qui stocke nos données pour les récupérer, nous avons besoin d'un identifiant de ressource uniforme ou URI (Uniform Resource Identifier) .
Pour faire simple, voyez les ressources comme des boîtes dans lesquelles vous rangerez des objets par catégorie et sur lesquelles vous collez une étiquette pour savoir quoi mettre dedans.
# Création des routes de l’API
Dans cette partie on met les routes des fonctions utilisées dans le post controller pour afficher les vues par. exemple la page admin ou bien le CRUD c'est -à -dire les actions modifier switcher et modifier. L’utilisation de l’API pour ces actions nécessite un rooting pour leur fonctionnement.
# La base de donnée MongoDb
Mongodb est la base de donnée non relationnelle qu’on a utilisé et qui nous a permis de stocker les données des utilisateurs. On a fait le link avec notre projet grâce à ce lien:
mongodb+srv://zoukana:assane123@cluster0.tg2jbcq.mongodb.net/?retryWrites=true&w=majority
# Fonction de Modification
La modification se fait en deux étapes:
   Un premier API est chargé de renvoyer le formulaire de modification avec les champs 
Nom, Prénom et Email 


# Fonction de Switche
Le switche consiste à changer le rôle de l’utilisateur 


On récupère l’id de l’utilisateur , on récupère le rôle de l’utilisateur et on le remplace par admin s’il est utilisateur simple vis vers sa.
Fonction d’Archivage
L’archivage consiste à changer l'état d’un utilisateur de 1 à 0  dans l'utilisateur archive n’est plus visible sur le tableau


# Fonction désarchivage
Le désarchivage consiste à changer l'état d’un utilisateur de 0 à 1 l'utilisateur désarchiver est visible sur le tableau.


# Session
Quand l’utilisateur remplit le formulaire  de connexion on vérifie si c’est le bon password et le bon email ensuite que son état est différent de 0, on lui crée une session.


# Fonction déconnexion
Elle permet de détruire la session de l’utilisateur connexion lorsqu' il clique sur l'icône déconnexion et l’on pèche de faire un retour afin de revenir sur sa page.

et la route qui permet de pouvoir l’afficher sur les différents espaces (admin et user).








