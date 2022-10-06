Cycle de vie d'une requête
----------------------------

Présentation du cycle de vie
==============================

Premiers pas
..............

Le point d'entrée pour toutes les requêtes vers une application Laravel est le fichier public/index.php. Toutes les requêtes sont dirigées vers ce fichier par la configuration de votre serveur web (Apache/Nginx). Le fichier index.php ne contient pas beaucoup de code. C'est plutôt un point de départ pour charger le reste du framework.

Le fichier index.php charge la définition du chargeur automatique générée par Composer, puis récupère une instance de l'application Laravel à partir de bootstrap/app.php. La première action entreprise par Laravel lui-même est de créer une instance du conteneur application/service.

HTTP / Noyaux de console
..........................

Ensuite, la demande entrante est envoyée au noyau HTTP ou au noyau de la console, selon le type de demande qui entre dans l'application. Ces deux noyaux servent d'emplacement central par lequel transitent toutes les requêtes. Pour l'instant, concentrons-nous uniquement sur le noyau HTTP, qui se trouve dans app/Http/Kernel.php.

Le noyau HTTP étend la classe Illuminate\Foundation\Http\Kernel, qui définit un tableau de bootstrappers qui seront exécutés avant l'exécution de la requête. Ces programmes d'amorçage configurent la gestion des erreurs, configurent la journalisation, détectent l'environnement de l'application et effectuent d'autres tâches qui doivent être effectuées avant que la demande ne soit réellement traitée. En règle générale, ces classes gèrent la configuration interne de Laravel dont vous n'avez pas à vous soucier.

Le noyau HTTP définit également une liste d'intergiciels HTTP par lesquels toutes les requêtes doivent passer avant d'être traitées par l'application. Ces intergiciels gèrent la lecture et l'écriture de la session HTTP, déterminent si l'application est en mode maintenance, vérifient le jeton CSRF, etc. Nous en reparlerons bientôt.

La signature de méthode pour la méthode handle du noyau HTTP est assez simple : elle reçoit une requête et renvoie une réponse. Considérez le noyau comme une grande boîte noire qui représente l'ensemble de votre application. Envoyez-lui des requêtes HTTP et il renverra des réponses HTTP.

Les fournisseurs de services
..............................

L'une des actions d'amorçage du noyau les plus importantes consiste à charger les fournisseurs de services pour votre application. Les fournisseurs de services sont responsables de l'amorçage de tous les différents composants du framework, tels que la base de données, la file d'attente, la validation et les composants de routage. Tous les fournisseurs de services de l'application sont configurés dans le tableau de fournisseurs du fichier de configuration config/app.php.

Laravel parcourra cette liste de fournisseurs et instanciera chacun d'eux. Après avoir instancié les fournisseurs, la méthode register sera appelée sur tous les fournisseurs. Ensuite, une fois tous les fournisseurs enregistrés, la méthode de démarrage sera appelée sur chaque fournisseur. Ainsi, les fournisseurs de services peuvent dépendre de chaque liaison de conteneur enregistrée et disponible au moment où leur méthode de démarrage est exécutée.

Essentiellement, chaque fonctionnalité majeure offerte par Laravel est amorcée et configurée par un fournisseur de services. Puisqu'ils démarrent et configurent autant de fonctionnalités offertes par le framework, les fournisseurs de services sont l'aspect le plus important de l'ensemble du processus de démarrage de Laravel.

Routage
.........

L'un des fournisseurs de services les plus importants de votre application est App\Providers\RouteServiceProvider. Ce fournisseur de services charge les fichiers de route contenus dans le répertoire de routes de votre application. Allez-y, ouvrez le code RouteServiceProvider et regardez comment cela fonctionne !

Une fois que l'application a été démarrée et que tous les fournisseurs de services ont été enregistrés, la demande sera transmise au routeur pour expédition. Le routeur enverra la demande à une route ou à un contrôleur, et exécutera tout middleware spécifique à la route.

Le middleware fournit un mécanisme pratique pour filtrer ou examiner les requêtes HTTP entrant dans votre application. Par exemple, Laravel inclut un middleware qui vérifie si l'utilisateur de votre application est authentifié. Si l'utilisateur n'est pas authentifié, le middleware redirigera l'utilisateur vers l'écran de connexion. Cependant, si l'utilisateur est authentifié, le middleware permettra à la demande de continuer plus loin dans l'application. Certains middleware sont affectés à toutes les routes de l'application, comme ceux définis dans la propriété $middleware de votre noyau HTTP, tandis que d'autres ne sont affectés qu'à des routes ou des groupes de routes spécifiques. 

Si la requête passe par tous les middleware attribués à la route correspondante, la méthode de route ou de contrôleur sera exécutée et la réponse renvoyée par la méthode de route ou de contrôleur sera renvoyée via la chaîne de middleware de la route.


Fin
.....

Une fois que la route ou la méthode du contrôleur renvoie une réponse, la réponse reviendra vers l'extérieur via le middleware de la route, donnant à l'application une chance de modifier ou d'examiner la réponse sortante.

Enfin, une fois que la réponse revient dans le middleware, la méthode handle du noyau HTTP renvoie l'objet de réponse et le fichier index.php appelle la méthode send sur la réponse renvoyée. La méthode d'envoi envoie le contenu de la réponse au navigateur Web de l'utilisateur. Nous avons terminé notre voyage à travers l'ensemble du cycle de vie des requêtes Laravel !

Focus sur les fournisseurs de services
.........................................

Les fournisseurs de services sont vraiment la clé pour démarrer une application Laravel. L'instance d'application est créée, les fournisseurs de services sont enregistrés et la demande est transmise à l'application amorcée. C'est vraiment aussi simple que ça !

Avoir une bonne compréhension de la façon dont une application Laravel est construite et démarrée via des fournisseurs de services est très précieux. Les fournisseurs de services par défaut de votre application sont stockés dans le répertoire app/Providers.

Par défaut, AppServiceProvider est relativement vide. Ce fournisseur est un endroit idéal pour ajouter les propres liaisons d'amorçage et de conteneur de services de votre application. Pour les applications volumineuses, vous souhaiterez peut-être créer plusieurs fournisseurs de services, chacun avec un amorçage plus granulaire pour des services spécifiques utilisés par votre application.
