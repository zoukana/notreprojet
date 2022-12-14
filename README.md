
DOCUMENTATION DU PROJET LARAVEL

SOMMAIRE

       INTRODUCTION
 FORMULAIRE CONNECTION
FORMULAIRE INSCRIPTION
ESPACE ADMINISTRATEUR
ESPACE UTILISATEUR SIMPLE
DOCUMENTATION API
CONCLUSION

INTRODUCTION

En fait, il est très important de rédiger une documentation pour un site web. Elle est plus efficace lorsqu'elle est conçue comme du code : un prototype.
Votre première version sera loin d'être parfaite, et c'est tout à fait normal. Mais l'important est de commencer à noter vos idées pour pouvoir ensuite réécrire, modifier, et réécrire encore et encore  comme pour votre code, que vous améliorez sans cesse jusqu'à ce qu'il ne contienne plus aucune erreur et qu'il remplisse parfaitement vos objectifs.Pour ce faire nous expliquer le fonctionnement du site.

FORMULAIRE DE CONNECTION

Par défaut l'utilisateur est redirigé sur la page connexion, s’il n’entre pas un email ou un mot de passe on lui demande de renseigner les champs. Il est aussi valable s’il entre un email incorrect lorsque l'envoi d'un message m'indiquant que le mail est invalide. l’utilisateur doit exister dans la base de donnée et aussi entrer enregistrer un mot de passe pour accéder à la page admin ou user simple. Sinon si non il faudra qu’il s'inscrit un lien en dessous du bouton de connexion le redirige vers la page d’inscription.
2. FORMULAIRE INSCRIPTION
L’utilisateur qui n’a pas de compte arrive sur la page d’inscription pour s’inscrire. Il peut entrer une photo au moment de l’inscription mais ce dernier est optionnel s’il veut aussi il peut le faire après la connexion. L’utilisateur doit renseigner tous les champs sauf la photo, il doit entrer un mot de passe et faire la confirmation mais si les deux ne sont pas compatibles on envoie un message d’erreur m'indiquant qu'ils ne sont pas conformes. Il faut aussi s’assurer que l’utilisateur à entrer un email qui n’existe pas dans la base de donnée si c’est le cas on lui dit que l’email existe dans la base de donnée.
Et maintenant si l’utilisateur à maintenant un compte il se connecte et est redirigé vers une autre page admin ou user.

3. ESPACE ADMINISTRATEUR

L'utilisateur est amené dans cette page s’il se connecte en tant qu’administrateur. L'admin peut voir son profil c'est -à -dire sa photo,son nom et prénom et aussi son matricule. Il peut voir la liste des utilisateurs actifs et les utilisateurs archives faire une recherche s’il le souhaite par le nom. Il peut modifier un utilisateur,archiver ou switcher un utilisateur d’utilisateur simple en administrateur ou le contraire.L’admin peut paginer pour voir les utilisateurs restants du tableau. La date de modification et la date d’archive seront toutes visibles dans le tableau ainsi que dans la base de données qu’on a utilisé mongodb car tous les utilisateurs récupérés dans le tableau sont issus de cette base. En effet pour mieux faire comprendre la page archiver et désarchiver je vais l’expliquer en bas.

a)ESPACE ARCHIVE

La liste des archives des archives qui se trouve dans la page admin est un lien qui nous permet d'accéder à la page archive. L'utilisateur peut voir tous les utilisateurs archivés et faire aussi les trois actions à savoir archiver,modifier et switcher et aussi faire un recherche ou paginer s’il le veut bien et voir aussi son profil.

a)ESPACE DÉSARCHIVER

L’utilisateur ne peut que faire une action c'est -à -dire le désarchivage et faire une recherche il doit aussi continuer de voir son profil.  



4. ESPACE UTILISATEUR SIMPLE

L’utilisateur sera dans cette page s’il se connecte en tant que user simple dans ce cas il ne pourra pas voir la liste des archives ni faire des action.Néanmoins il peut pagginer pour voir le reste de la liste et faire aussi une recherche et la date d’inscription sera affichée.

CONCLUSION

En somme, la documenter nous permettra de bien comprendre le fonctionnement du site qui consiste à créer un projet laravel le connecter avec une base de donnée non rationnelle mongodb. Ensuite inscrire un utilisateur et ensuite le connecter et faire une redirection.  S’il est redirigé on aura la récupération des données dans la page admin  ou user.  Dans la page admin il pourra faire des actions alors que si c’est dans la page user il ne peut faire aucune action sauf ce qu'il ont en commun c’est à dire faire un pagination et une recherche.


























