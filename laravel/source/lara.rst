Introduction
-------------------

Qu'est ce que Laravel?
========================

Laravel est un framework d'application Web avec une syntaxe expressive et élégante. Un framework Web fournit une structure et un point de départ pour la création de votre application, vous permettant de vous concentrer sur la création de quelque chose d'incroyable pendant que nous gérons les détails.

Laravel s'efforce de fournir une expérience de développement incroyable tout en fournissant des fonctionnalités puissantes telles qu'une injection de dépendance approfondie, une couche d'abstraction de base de données expressive, des files d'attente et des tâches planifiées, des tests unitaires et d'intégration, etc.

Pourquoi Laravel ?
===================

Il existe une variété d'outils et de frameworks à votre disposition lors de la création d'une application Web. Cependant, nous pensons que Laravel est le meilleur choix pour créer des applications Web modernes et complètes.

Un framework progressif
...........................

Nous aimons appeler Laravel un framework "progressif". Nous entendons par là que Laravel grandit avec vous. Si vous faites vos premiers pas dans le développement Web, la vaste bibliothèque de documentation, de guides et de didacticiels vidéo de Laravel vous aidera à apprendre les ficelles du métier sans être submergé.

Si vous êtes un développeur senior, Laravel vous offre des outils robustes pour l'injection de dépendances, les tests unitaires, les files d'attente, les événements en temps réel, etc. Laravel est conçu pour créer des applications Web professionnelles et prêt à gérer les charges de travail de l'entreprise.

Un framework évolutif
.......................


Laravel est incroyablement évolutif. Grâce à la nature conviviale de la mise à l'échelle de PHP et à la prise en charge intégrée de Laravel pour les systèmes de cache distribués rapides comme Redis, la mise à l'échelle horizontale avec Laravel est un jeu d'enfant. En fait, les applications Laravel ont été facilement mises à l'échelle pour gérer des centaines de millions de demandes par mois.

Besoin d'une mise à l'échelle extrême ? Des plates-formes telles que Laravel Vapor vous permettent d'exécuter votre application Laravel à une échelle presque illimitée sur la dernière technologie sans serveur d'AWS.

Un framework communautaire
............................

Laravel combine les meilleurs packages de l'écosystème PHP pour offrir le framework le plus robuste et le plus convivial disponible pour les développeurs. De plus, des milliers de développeurs talentueux du monde entier ont contribué au framework. Qui sait, peut-être deviendrez-vous même un contributeur Laravel.

Votre premier projet Laravel
===============================

Avant de créer votre premier projet Laravel, vous devez vous assurer que PHP et Composer sont installés sur votre machine locale. Si vous développez sur macOS, PHP et Composer peuvent être installés via Homebrew. De plus, nous vous recommandons d'installer Node et NPM.

Après avoir installé PHP et Composer, vous pouvez créer un nouveau projet Laravel via la commande Composer create-project :

.. code-block:: console

    composer create-project laravel/laravel example-app


Ou, vous pouvez créer de nouveaux projets Laravel en installant globalement le programme d'installation de Laravel via Composer :

.. code-block:: console

    composer global require laravel/installer
 
    laravel new example-app
    
    
Une fois le projet créé, démarrez le serveur de développement local de Laravel à l'aide de la commande de service CLI Artisan de Laravel :

.. code-block:: console

    cd example-app
 
    php artisan serve
    
    
Une fois que vous avez démarré le serveur de développement Artisan, votre application sera accessible dans votre navigateur Web à l'adresse http://localhost:8000. Ensuite, vous êtes prêt à commencer vos prochaines étapes dans l'écosystème Laravel. Bien sûr, vous pouvez également configurer une base de données.


Configuration initiale
=======================

Tous les fichiers de configuration du framework Laravel sont stockés dans le répertoire de configuration. Chaque option est documentée, alors n'hésitez pas à parcourir les fichiers et à vous familiariser avec les options qui s'offrent à vous.

Laravel n'a besoin de presque aucune configuration supplémentaire prête à l'emploi. Vous êtes libre de commencer à développer ! Cependant, vous pouvez consulter le fichier config/app.php et sa documentation. Il contient plusieurs options telles que le fuseau horaire et les paramètres régionaux que vous pouvez modifier en fonction de votre application.

Configuration basée sur l'environnement
.........................................


Étant donné que de nombreuses valeurs d'options de configuration de Laravel peuvent varier selon que votre application s'exécute sur votre machine locale ou sur un serveur Web de production, de nombreuses valeurs de configuration importantes sont définies à l'aide du fichier .env qui existe à la racine de votre application.

Votre fichier .env ne doit pas être engagé dans le contrôle de code source de votre application, car chaque développeur/serveur utilisant votre application peut nécessiter une configuration d'environnement différente. De plus, cela constituerait un risque pour la sécurité dans le cas où un intrus accèderait à votre référentiel de contrôle source, car toutes les informations d'identification sensibles seraient exposées.

Bases de données et migrations
................................

Maintenant que vous avez créé votre application Laravel, vous souhaitez probablement stocker certaines données dans une base de données. Par défaut, le fichier de configuration .env de votre application spécifie que Laravel interagira avec une base de données MySQL et accédera à la base de données à 127.0.0.1. 

Si vous ne souhaitez pas installer MySQL ou Postgres sur votre machine locale, vous pouvez toujours utiliser une base de données SQLite. SQLite est un petit moteur de base de données rapide et autonome. Pour commencer, créez une base de données SQLite en créant un fichier SQLite vide. Typiquement, ce fichier existera dans le répertoire de la base de données de votre application Laravel :


.. code-block:: console

   touch database/database.sqlite
   
   
Ensuite, mettez à jour votre fichier de configuration .env pour utiliser le pilote de base de données sqlite de Laravel. Vous pouvez supprimer les autres options de configuration de la base de données :

.. code-block:: console

    DB_CONNECTION=sqlite 
    DB_CONNECTION=mysql 
    DB_HOST=127.0.0.1 
    DB_PORT=3306 
    DB_DATABASE=laravel 
    DB_USERNAME=root 
    DB_PASSWORD= 
    
    
Une fois que vous avez configuré votre base de données SQLite, vous pouvez exécuter les migrations de la base de données de votre application, ce qui créera les tables de la base de données de votre application :

.. code-block:: console

   php artisan migrate
   

Configuration
==============

Tous les fichiers de configuration du framework Laravel sont stockés dans le répertoire de configuration. Chaque option est documentée, alors n'hésitez pas à parcourir les fichiers et à vous familiariser avec les options qui s'offrent à vous.

Ces fichiers de configuration vous permettent de configurer des éléments tels que les informations de connexion à votre base de données, les informations de votre serveur de messagerie, ainsi que diverses autres valeurs de configuration de base telles que le fuseau horaire de votre application et la clé de chiffrement.

Aperçu des applications
.........................

Vous pouvez obtenir un aperçu rapide de la configuration, des pilotes et de l'environnement de votre application via la commande about Artisan :

.. code-block:: console

     php artisan about
     

Si vous n'êtes intéressé que par une section particulière de la sortie de présentation de l'application, vous pouvez filtrer cette section à l'aide de l'option --only :

.. code-block:: console

    php artisan about --only=environment
    
    

Configuration d'environnement
...............................

Il est souvent utile d'avoir des valeurs de configuration différentes en fonction de l'environnement dans lequel l'application s'exécute. Par exemple, vous souhaiterez peut-être utiliser localement un pilote de cache différent de celui que vous utilisez sur votre serveur de production.

Pour en faire un jeu d'enfant, Laravel utilise la bibliothèque PHP DotEnv. Dans une nouvelle installation de Laravel, le répertoire racine de votre application contiendra un fichier .env.example qui définit de nombreuses variables d'environnement courantes. Au cours du processus d'installation de Laravel, ce fichier sera automatiquement copié dans .env.

Le fichier .env par défaut de Laravel contient certaines valeurs de configuration courantes qui peuvent différer selon que votre application s'exécute localement ou sur un serveur Web de production. Ces valeurs sont ensuite récupérées à partir de divers fichiers de configuration Laravel dans le répertoire de configuration à l'aide de la fonction env de Laravel.

Si vous développez avec une équipe, vous pouvez continuer à inclure un fichier .env.example avec votre application. En plaçant des valeurs d'espace réservé dans l'exemple de fichier de configuration, les autres développeurs de votre équipe peuvent voir clairement quelles variables d'environnement sont nécessaires pour exécuter votre application.


Sécurité des fichiers d'environnement
........................................

Votre fichier .env ne doit pas être engagé dans le contrôle de code source de votre application, car chaque développeur/serveur utilisant votre application peut nécessiter une configuration d'environnement différente. De plus, cela constituerait un risque pour la sécurité dans le cas où un intrus accèderait à votre référentiel de contrôle source, car toutes les informations d'identification sensibles seraient exposées.

Cependant, il est possible de chiffrer votre fichier d'environnement à l'aide du chiffrement d'environnement intégré de Laravel. Les fichiers d'environnement chiffrés peuvent être placés dans le contrôle de code source en toute sécurité.

Fichiers d'environnement supplémentaires
..........................................

Avant de charger les variables d'environnement de votre application, Laravel détermine si une variable d'environnement APP_ENV a été fournie en externe ou si l'argument CLI --env a été spécifié. Si tel est le cas, Laravel tentera de charger un fichier .env.[APP_ENV] s'il existe. S'il n'existe pas, le fichier .env par défaut sera chargé.

Types de variables d'environnement

Toutes les variables de vos fichiers .env sont généralement analysées comme des chaînes, donc certaines valeurs réservées ont été créées pour vous permettre de renvoyer une plus large gamme de types à partir de la fonction env() :

.env Value 	env() Value
true 	(bool) true
(true) 	(bool) true
false 	(bool) false
(false) 	(bool) false
empty 	(string) ''
(empty) 	(string) ''
null 	(null) null
(null) 	(null) null


Si vous devez définir une variable d'environnement avec une valeur contenant des espaces, vous pouvez le faire en plaçant la valeur entre guillemets :

.. code-block:: console

   APP_NAME="My Application"
   
   

Récupération de la configuration de l'environnement
.....................................................

Toutes les variables répertoriées dans le fichier .env seront chargées dans le super-global PHP $_ENV lorsque votre application recevra une requête. Cependant, vous pouvez utiliser la fonction env pour récupérer les valeurs de ces variables dans vos fichiers de configuration. En fait, si vous examinez les fichiers de configuration de Laravel, vous remarquerez que de nombreuses options utilisent déjà cette fonction :

.. code-block:: php

    'debug' => env('APP_DEBUG', false),
    

La deuxième valeur passée à la fonction env est la "valeur par défaut". Cette valeur sera retournée si aucune variable d'environnement n'existe pour la clé donnée.

Détermination de l'environnement actuel
.........................................

L'environnement d'application actuel est déterminé via la variable APP_ENV de votre fichier .env. Vous pouvez accéder à cette valeur via la méthode d'environnement sur la façade de l'application :

.. code-block:: php

    use Illuminate\Support\Facades\App;
 
    $environment = App::environment();
    

Vous pouvez également passer des arguments à la méthode d'environnement pour déterminer si l'environnement correspond à une valeur donnée. La méthode renverra true si l'environnement correspond à l'une des valeurs données :


.. code-block:: php

    if (App::environment('local')) {
    // The environment is local
    }
 
    if (App::environment(['local', 'staging'])) {
    // The environment is either local OR staging...
    }
    
    
Accès aux valeurs de configuration
==================================== 

Vous pouvez facilement accéder à vos valeurs de configuration à l'aide de la fonction de configuration globale depuis n'importe où dans votre application. Les valeurs de configuration sont accessibles à l'aide de la syntaxe "point", qui inclut le nom du fichier et l'option auxquels vous souhaitez accéder. Une valeur par défaut peut également être spécifiée et sera renvoyée si l'option de configuration n'existe pas :

.. code-block:: php

   $value = config('app.timezone');
 
   // Retrieve a default value if the configuration value does not exist...
   $value = config('app.timezone', 'Asia/Seoul');
   

Pour définir les valeurs de configuration lors de l'exécution, transmettez un tableau à la fonction de configuration :

.. code-block:: php

   config(['app.timezone' => 'America/Chicago']);
   

Mode débogage
***************

L'option de débogage dans votre fichier de configuration config/app.php détermine la quantité d'informations sur une erreur qui est réellement affichée à l'utilisateur. Par défaut, cette option est définie pour respecter la valeur de la variable d'environnement APP_DEBUG, qui est stockée dans votre fichier .env.

Pour le développement local, vous devez définir la variable d'environnement APP_DEBUG sur true. Dans votre environnement de production, cette valeur doit toujours être fausse. Si la variable est définie sur true en production, vous risquez d'exposer des valeurs de configuration sensibles aux utilisateurs finaux de votre application.

Mode de Maintenance
***********************

Lorsque votre application est en mode maintenance, une vue personnalisée s'affiche pour toutes les requêtes dans votre application. Cela facilite la "désactivation" de votre application pendant sa mise à jour ou lorsque vous effectuez une maintenance. Une vérification du mode de maintenance est incluse dans la pile middleware par défaut de votre application. Si l'application est en mode maintenance, une instance Symfony\Component\HttpKernel\Exception\HttpException sera levée avec un code d'état de 503.

Pour activer le mode maintenance, exécutez la commande down Artisan :


.. code-block:: console

   php artisan down
   
   
Structure du répertoire
=========================

Le répertoire racine
**********************

Le répertoire App
.....................

Le répertoire App contient le code principal de votre application. Nous explorerons ce répertoire plus en détail bientôt ; cependant, presque toutes les classes de votre application se trouveront dans ce répertoire.

Le répertoire Bootstrap
.........................

Le répertoire bootstrap contient le fichier app.php qui démarre le framework. Ce répertoire contient également un répertoire  cache qui contient des fichiers générés par le framework pour l'optimisation des performances, tels que les fichiers de cache de route et de services. Vous ne devriez généralement pas avoir besoin de modifier les fichiers de ce répertoire.

Le répertoire config
......................

Le répertoire config, comme son nom l'indique, contient tous les fichiers de configuration de votre application. C'est une bonne idée de lire tous ces fichiers et de vous familiariser avec toutes les options qui s'offrent à vous.

Le répertoire database
........................

Le répertoire database contient vos migrations de base de données, vos fabriques de modèles et vos graines. Si vous le souhaitez, vous pouvez également utiliser ce répertoire pour contenir une base de données SQLite.

Le répertoire Lang
.....................

Le répertoire lang contient tous les fichiers de langue de votre application.

Le répertoire public
......................

Le répertoire public contient le fichier index.php, qui est le point d'entrée pour toutes les requêtes entrant dans votre application et configure le chargement automatique. Ce répertoire héberge également vos actifs tels que les images, JavaScript et CSS.

Le répertoire ressources
...........................

Le répertoire ressources contient vos vues ainsi que vos actifs bruts non compilés tels que CSS ou JavaScript.

Le répertoire routes
.....................

Le répertoire routes contient toutes les définitions de routes pour votre application. Par défaut, plusieurs fichiers de route sont inclus avec Laravel : web.php, api.php, console.php et channels.php.

Le fichier web.php contient des routes tels que le RouteServiceProvider place dans le groupe de middleware Web, qui fournit l'état de la session, la protection CSRF et le chiffrement des cookies. Si votre application n'offre pas d'API RESTful sans état, toutes vos routes seront très probablement définies dans le fichier web.php.

Le fichier api.php contient des itinéraires que le RouteServiceProvider place dans le groupe de middleware api. Ces routes sont destinées à être sans état, de sorte que les demandes entrant dans l'application via ces routes sont destinées à être authentifiées via des jetons et n'auront pas accès à l'état de la session.

Le fichier console.php est l'endroit où vous pouvez définir toutes vos commandes de console basées sur la fermeture. Chaque fermeture est liée à une instance de commande permettant une approche simple pour interagir avec les méthodes IO de chaque commande. Même si ce fichier ne définit pas les routes HTTP, il définit les points d'entrée (routes) basés sur la console dans votre application.

Le fichier channels.php est l'endroit où vous pouvez enregistrer tous les canaux de diffusion d'événements pris en charge par votre application.

Le répertoire de storage
...........................

Le répertoire de storage contient vos journaux, les templates Blade compilés, sessions basées sur des fichiers, caches de fichiers et autres fichiers générés par le framework. Ce répertoire est séparé en répertoires d'application, de structure et de journaux. Le répertoire de l'application peut être utilisé pour stocker tous les fichiers générés par votre application. Le répertoire du framework est utilisé pour stocker les fichiers et les caches générés par le framework. Enfin, le répertoire logs contient les fichiers journaux de votre application.

Le répertoire storage/app/public peut être utilisé pour stocker des fichiers générés par l'utilisateur, tels que des avatars de profil, qui doivent être accessibles au public. Vous devez créer un lien symbolique dans public/storage qui pointe vers ce répertoire. Vous pouvez créer le lien en utilisant la commande php artisan storage:link Artisan.

Le répertoire des tests
..........................

Le répertoire tests contient vos tests automatisés. Des exemples de tests unitaires PHPUnit et de tests de fonctionnalités sont fournis prêts à l'emploi. Chaque classe de test doit être suffixée par le mot Test. Vous pouvez exécuter vos tests en utilisant les commandes phpunit ou php vendor/bin/phpunit. Ou, si vous souhaitez une représentation plus détaillée et plus belle de vos résultats de test, vous pouvez exécuter vos tests en utilisant la commande php artisan test Artisan.

Le répertoire vendor
.................................

Le répertoire du fournisseur contient vos dépendances Composer.


Le répertoire App
********************************

La majorité de votre application est hébergée dans le répertoire App. Par défaut, ce répertoire est nommé sous App et est chargé automatiquement par Composer à l'aide de la norme de chargement automatique PSR-4.

Le répertoire App contient une variété de répertoires supplémentaires tels que Console, Http et Providers. Considérez les répertoires Console et Http comme fournissant une API au cœur de votre application. Le protocole HTTP et l'interface de ligne de commande sont tous deux des mécanismes permettant d'interagir avec votre application, mais ne contiennent pas réellement de logique d'application. En d'autres termes, ce sont deux manières d'envoyer des commandes à votre application. Le répertoire de la console contient toutes vos commandes Artisan, tandis que le répertoire Http contient vos contrôleurs, votre middleware et vos requêtes.

Une variété d'autres répertoires seront générés dans le répertoire de l'application lorsque vous utiliserez les commandes make Artisan pour générer des classes. Ainsi, par exemple, le répertoire app/Jobs n'existera pas tant que vous n'aurez pas exécuté la commande Artisan make:job  pour générer une classe job.


Le répertoire broadcasting
............................

Le répertoire Broadcasting contient toutes les classes de canaux de diffusion pour votre application. Ces classes sont générées à l'aide de la commande make:channel. Ce répertoire n'existe pas par défaut, mais sera créé pour vous lors de la création de votre première chaîne. Pour en savoir plus sur les chaînes, consultez la documentation sur la diffusion d'événements.

Le répertoire console
........................

Le répertoire console contient toutes les commandes Artisan personnalisées pour votre application. Ces commandes peuvent être générées à l'aide de la commande make:command. Ce répertoire héberge également le noyau de votre console, où vos commandes Artisan personnalisées sont enregistrées et vos tâches planifiées sont définies.

Le répertoire events
......................

Ce répertoire n'existe pas par défaut, mais sera créé pour vous par les commandes Artisan event:generate et make:event. Le répertoire Events contient des classes d'événements. Les événements peuvent être utilisés pour alerter d'autres parties de votre application qu'une action donnée s'est produite, offrant une grande flexibilité et un découplage.

Le répertoire exceptions
............................

Le répertoire Exceptions contient le gestionnaire d'exceptions de votre application et est également un bon endroit pour placer toutes les exceptions levées par votre application. Si vous souhaitez personnaliser la façon dont vos exceptions sont consignées ou rendues, vous devez modifier la classe Handler dans ce répertoire.

Le répertoire HTTP
....................

Le répertoire Http contient vos contrôleurs, middleware et demandes de formulaire. La quasi-totalité de la logique de gestion des requêtes entrant dans votre application sera placée dans ce répertoire.

Le répertoire Job
...................

Ce répertoire n'existe pas par défaut, mais sera créé pour vous si vous exécutez la commande Artisan make:job. Le répertoire Jobs contient les travaux en file d'attente pour votre application. Les travaux peuvent être mis en file d'attente par votre application ou exécutés de manière synchrone dans le cycle de vie de la demande en cours. Les tâches qui s'exécutent de manière synchrone pendant la requête en cours sont parfois appelées "commandes" car elles sont une implémentation du modèle de commande.

Le répertoire Listners
........................

Ce répertoire n'existe pas par défaut, mais sera créé pour vous si vous exécutez les commandes Artisan event:generate ou make:listener . Le répertoire Listeners contient les classes qui gèrent vos événements. Les écouteurs d'événement reçoivent une instance d'événement et exécutent une logique en réponse à l'événement déclenché. Par exemple, un événement UserRegistered peut être géré par un écouteur SendWelcomeEmail.

Le répertoire Mail

Ce répertoire n'existe pas par défaut, mais sera créé pour vous si vous exécutez la commande  Artisan make:mail . Le répertoire Mail contient toutes vos classes qui représentent les e-mails envoyés par votre application. Les objets de messagerie vous permettent d'encapsuler toute la logique de construction d'un e-mail dans une seule classe simple qui peut être envoyée à l'aide de la méthode Mail::send.

Le répertoire Models
.......................

Le répertoire Models contient toutes vos classes de modèles Eloquent. L'ORM Eloquent inclus avec Laravel fournit une belle et simple implémentation ActiveRecord pour travailler avec votre base de données. Chaque table de base de données a un "modèle" correspondant qui est utilisé pour interagir avec cette table. Les modèles vous permettent d'interroger des données dans vos tables, ainsi que d'insérer de nouveaux enregistrements dans la table.

Le répertoire notification
.............................

Ce répertoire n'existe pas par défaut, mais sera créé pour vous si vous exécutez la commande Artisan make:notification. Le répertoire Notifications contient toutes les notifications "transactionnelles" qui sont envoyées par votre application, telles que des notifications simples sur des événements qui se produisent dans votre application. La fonction de notification de Laravel résume l'envoi de notifications via une variété de pilotes tels que les e-mails, Slack, SMS ou stockés dans une base de données.

Le répertoire policies
...........................

Ce répertoire n'existe pas par défaut, mais sera créé pour vous si vous exécutez la commande Artisan make:policy . Le répertoire Policies contient les classes de règles d'autorisation pour votre application. Les politiques sont utilisées pour déterminer si un utilisateur peut effectuer une action donnée sur une ressource.

Le répertoire Providers
.........................

Le répertoire providers contient tous les fournisseurs de services pour votre application. Les fournisseurs de services démarrent votre application en liant des services dans le conteneur de services, en enregistrant des événements ou en effectuant toute autre tâche pour préparer votre application aux demandes entrantes.

Dans une nouvelle application Laravel, ce répertoire contiendra déjà plusieurs fournisseurs. Vous êtes libre d'ajouter vos propres fournisseurs à ce répertoire selon vos besoins.

Le répertoire rules
.....................

Ce répertoire n'existe pas par défaut, mais sera créé pour vous si vous exécutez la commande Artisan make:rule . Le répertoire Rules contient les objets de règles de validation personnalisées pour votre application. Les règles sont utilisées pour encapsuler une logique de validation compliquée dans un objet simple. Pour plus d'informations, consultez la documentation de validation.


Frontend
==========

Laravel est un framework backend qui fournit toutes les fonctionnalités dont vous avez besoin pour créer des applications Web modernes, telles que le routage, la validation, la mise en cache, les files d'attente, le stockage de fichiers, etc. Cependant, nous pensons qu'il est important d'offrir aux développeurs une belle expérience full-stack, y compris des approches puissantes pour créer l'interface de votre application.

Il existe deux façons principales d'aborder le développement frontal lors de la création d'une application avec Laravel, et l'approche que vous choisissez est déterminée par le fait que vous souhaitez créer votre frontend en tirant parti de PHP ou en utilisant des frameworks JavaScript tels que Vue et React. Nous discuterons de ces deux options ci-dessous afin que vous puissiez prendre une décision éclairée concernant la meilleure approche de développement frontal pour votre application.


Utiliser PHP
**************

PHP et Blade
..............

Dans le passé, la plupart des applications PHP rendaient HTML au navigateur en utilisant de simples modèles HTML entrecoupés d'instructions d'écho PHP qui rendaient les données extraites d'une base de données lors de la requête :

.. code-block:: php

   <div>
    <?php foreach ($users as $user): ?>
        Hello, <?php echo $user->name; ?> <br />
    <?php endforeach; ?>
   </div>
   
Dans Laravel, cette approche du rendu HTML peut toujours être réalisée à l'aide de view et de Blade. Blade est un langage de modélisation extrêmement léger qui fournit une syntaxe courte et pratique pour afficher des données, itérer sur des données, etc. :


.. code-block:: php

   <div>
    @foreach ($users as $user)
        Hello, {{ $user->name }} <br />
    @endforeach
   </div>
   
   
Lors de la création d'applications de cette manière, les soumissions de formulaires et autres interactions de page reçoivent généralement un document HTML entièrement nouveau du serveur et la page entière est restituée par le navigateur. Aujourd'hui encore, de nombreuses applications peuvent être parfaitement adaptées pour que leurs interfaces soient construites de cette manière à l'aide de simples modèles Blade.

Attentes croissantes
......................

Cependant, à mesure que les attentes des utilisateurs concernant les applications Web ont mûri, de nombreux développeurs ont constaté le besoin de créer des interfaces plus dynamiques avec des interactions plus raffinées. À la lumière de cela, certains développeurs choisissent de commencer à créer l'interface de leur application à l'aide de frameworks JavaScript tels que Vue et React.

D'autres, préférant s'en tenir au langage backend avec lequel ils sont à l'aise, ont développé des solutions qui permettent la construction d'interfaces utilisateur d'applications Web modernes tout en utilisant principalement le langage backend de leur choix. Par exemple, dans l'écosystème Rails, cela a stimulé la création de bibliothèques telles que Turbo Hotwire et Stimulus.

Au sein de l'écosystème Laravel, la nécessité de créer des interfaces modernes et dynamiques en utilisant principalement PHP a conduit à la création de Laravel Livewire et Alpine.js.

Livewire
..........

Laravel Livewire est un framework permettant de créer des frontends alimentés par Laravel qui se sentent dynamiques, modernes et vivants, tout comme les frontends construits avec des frameworks JavaScript modernes comme Vue et React.

Lorsque vous utilisez Livewire, vous créez des "composants" Livewire qui restituent une partie discrète de votre interface utilisateur et exposent des méthodes et des données qui peuvent être invoquées et avec lesquelles interagir à partir de l'interface de votre application. Par exemple, un simple composant "Counter" pourrait ressembler à ceci :


.. code-block:: php

    <?php
 
      namespace App\Http\Livewire;
 
      use Livewire\Component;
 
      class Counter extends Component
      {
          public $count = 0;
 
          public function increment()
          {
             $this->count++;
          }
 
          public function render()
          {
             return view('livewire.counter');
          }
      }
      
      
Et, le template correspondant pour le compteur s'écrirait ainsi :


.. code-block:: php

    <div>
        <button wire:click="increment">+</button>
        <h1>{{ $count }}</h1>
    </div>
    
    
Comme vous pouvez le voir, Livewire vous permet d'écrire de nouveaux attributs HTML tels que wire:click qui connectent le frontend et le backend de votre application Laravel. De plus, vous pouvez afficher l'état actuel de votre composant à l'aide d'expressions Blade simples.

Pour beaucoup, Livewire a révolutionné le développement frontal avec Laravel, leur permettant de rester dans le confort de Laravel tout en créant des applications Web modernes et dynamiques. En règle générale, les développeurs utilisant Livewire utiliseront également Alpine.js pour « saupoudrer » JavaScript sur leur interface uniquement là où cela est nécessaire, par exemple pour afficher une fenêtre de dialogue.

Si vous êtes nouveau sur Laravel, nous vous recommandons de vous familiariser avec l'utilisation de base des vues et de Blade. Ensuite, consultez la documentation officielle de Laravel Livewire pour savoir comment faire passer votre application au niveau supérieur avec les composants interactifs Livewire.


Routage
=========

Routage de base
******************

Les routes Laravel les plus basiques acceptent un URI et une fermeture, fournissant une méthode très simple et expressive de définition des routes et du comportement sans fichiers de configuration de routage compliqués :


.. code-block:: php

    use Illuminate\Support\Facades\Route;
 
    Route::get('/greeting', function () {
       return 'Hello World';
    });
    

Les fichiers de routage par défaut
.....................................

Toutes les routes Laravel sont définies dans vos fichiers de route, qui se trouvent dans le répertoire des routes. Ces fichiers sont automatiquement chargés par App\Providers\RouteServiceProvider de votre application. Le fichier routes/web.php définit les routes qui sont destinées à votre interface Web. Ces routes sont affectées au groupe de middleware Web, qui fournit des fonctionnalités telles que l'état de session et la protection CSRF. Les routes dans routes/api.php sont sans état et sont affectées au groupe de middleware api.

Pour la plupart des applications, vous commencerez par définir les routes dans votre fichier routes/web.php. Les routes définies dans routes/web.php sont accessibles en saisissant l'URL de la route définie dans votre navigateur. Par exemple, vous pouvez accéder à la route suivante en accédant à http://example.com/user dans votre navigateur :


.. code-block:: php

   use App\Http\Controllers\UserController;
 
   Route::get('/user', [UserController::class, 'index']);
   

Les routes définies dans le fichier routes/api.php sont imbriquées dans un groupe de routes par le RouteServiceProvider. Dans ce groupe, le préfixe URI /api est automatiquement appliqué, vous n'avez donc pas besoin de l'appliquer manuellement à chaque route du fichier. Vous pouvez modifier le préfixe et d'autres options de groupe de routage en modifiant votre classe RouteServiceProvider.

Méthodes de routeur disponibles
.................................

Le routeur vous permet d'enregistrer des routes qui répondent à n'importe quel verbe HTTP :


.. code-block:: php

   Route::get($uri, $callback);
   Route::post($uri, $callback);
   Route::put($uri, $callback);
   Route::patch($uri, $callback);
   Route::delete($uri, $callback);
   Route::options($uri, $callback);
   
Parfois, vous devrez peut-être enregistrer une route qui répond à plusieurs verbes HTTP. Vous pouvez le faire en utilisant la méthode match. Ou, vous pouvez même enregistrer une route qui répond à tous les verbes HTTP en utilisant la méthode any :


.. code-block:: php

   Route::match(['get', 'post'], '/', function () {
    //
   });
 
   Route::any('/', function () {
    //
   });
   

Injection de dépendance
.........................

Vous pouvez indiquer toutes les dépendances requises par votre route dans la signature du callback de votre route. Les dépendances déclarées seront automatiquement résolues et injectées dans le callback par le conteneur de service Laravel. Par exemple, vous pouvez taper la classe Illuminate\Http\Request pour que la requête HTTP actuelle soit automatiquement injectée dans votre rappel de route :

.. code-block:: php

   use Illuminate\Http\Request;
 
   Route::get('/users', function (Request $request) {
      // ...
   });
   
A continuer

Paramètres de route
*********************

Paramètres requis
...................

Parfois, vous devrez capturer des segments de l'URI dans votre route. Par exemple, vous devrez peut-être capturer l'ID d'un utilisateur à partir de l'URL. Vous pouvez le faire en définissant les paramètres de route :

.. code-block:: php

   Route::get('/user/{id}', function ($id) {
    return 'User '.$id;
   });
   
Vous pouvez définir autant de paramètres de route que requis par votre route :

.. code-block:: php

   Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
     //
   });
   
   
Les paramètres de route sont toujours entourés d'accolades {} et doivent être composés de caractères alphabétiques. Les traits de soulignement (_) sont également acceptables dans les noms de paramètre de route. Les paramètres de route sont injectés dans les rappels/contrôleurs de route en fonction de leur ordre - les noms des arguments de rappel/contrôleur de route n'ont pas d'importance.

Routes view
*************

Si votre route ne doit renvoyer qu'une vue, vous pouvez utiliser la méthode Route::view. Comme la méthode de redirection, cette méthode fournit un raccourci simple pour que vous n'ayez pas à définir une route ou un contrôleur complet. La méthode view accepte un URI comme premier argument et un nom de vue comme second argument. De plus, vous pouvez fournir un tableau de données à transmettre à la vue en tant que troisième argument facultatif :

.. code-block:: php

   Route::view('/welcome', 'welcome');
 
   Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
   
Middleware
============

Le middleware fournit un mécanisme pratique pour inspecter et filtrer les requêtes HTTP entrant dans votre application. Par exemple, Laravel inclut un middleware qui vérifie que l'utilisateur de votre application est authentifié. Si l'utilisateur n'est pas authentifié, le middleware redirigera l'utilisateur vers l'écran de connexion de votre application. Cependant, si l'utilisateur est authentifié, le middleware permettra à la demande de continuer plus loin dans l'application.

Des intergiciels supplémentaires peuvent être écrits pour effectuer diverses tâches en plus de l'authentification. Par exemple, un middleware de journalisation peut consigner toutes les requêtes entrantes dans votre application. Plusieurs middlewares sont inclus dans le framework Laravel, notamment des middlewares pour l'authentification et la protection CSRF. Tous ces middlewares sont situés dans le répertoire app/Http/Middleware.


Définir le middleware
***********************

Pour créer un nouveau middleware, utilisez la commande make:middleware Artisan :

.. code-block:: console

   php artisan make:middleware EnsureTokenIsValid
   

Cette commande placera une nouvelle classe EnsureTokenIsValid dans votre répertoire app/Http/Middleware. Dans ce middleware, nous n'autoriserons l'accès à la route que si l'entrée de jeton fournie correspond à une valeur spécifiée. Sinon, nous redirigerons les utilisateurs vers l'URI d'accueil :

.. code-block:: php

   <?php
 
    namespace App\Http\Middleware;
 
    use Closure;
 
   class EnsureTokenIsValid
   {
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->input('token') !== 'my-secret-token') {
            return redirect('home');
        }
 
        return $next($request);
    }
   }
   

Comme vous pouvez le voir, si le jeton donné ne correspond pas à notre jeton secret, le middleware renverra une redirection HTTP au client ; sinon, la demande sera transmise plus loin dans l'application. Pour transmettre la demande plus profondément dans l'application (permettant au middleware de "passer"), vous devez appeler le rappel $next avec la $request.

Il est préférable d'envisager le middleware comme une série de "couches" que les requêtes HTTP doivent traverser avant d'atteindre votre application. Chaque couche peut examiner la demande et même la rejeter entièrement.


   
Views (Vues)
=============

Introduction

Bien sûr, il n'est pas pratique de renvoyer des chaînes de documents HTML entières directement à partir de vos routes et de vos contrôleurs. Heureusement, les vues offrent un moyen pratique de placer tout notre code HTML dans des fichiers séparés. Les vues séparent la logique de votre contrôleur/application de votre logique de présentation et sont stockées dans le répertoire resources/views. Une vue simple pourrait ressembler à ceci :


.. code-block:: html

   <!-- View stored in resources/views/greeting.blade.php -->
 
   <html>
      <body>
        <h1>Hello, {{ $name }}</h1>
      </body>
   </html>
   

Étant donné que cette vue est stockée dans resources/views/greeting.blade.php, nous pouvons la renvoyer en utilisant l'assistant de vue globale comme ceci :

.. code-block:: php

    Route::get('/', function () {
    return view('greeting', ['name' => 'James']);
      });    

Création et rendu des vues
****************************

Vous pouvez créer une vue en plaçant un fichier avec l'extension .blade.php dans le répertoire resources/views de votre application. L'extension .blade.php informe le framework que le fichier contient un modèle Blade. Les modèles Blade contiennent du HTML ainsi que des directives Blade qui vous permettent de faire facilement écho des valeurs, de créer des instructions "if", d'itérer sur les données, etc.

Une fois que vous avez créé une vue, vous pouvez la renvoyer depuis l'une des routes ou des contrôleurs de votre application à l'aide de l'assistant de vue globale :
  

.. code-block:: html

    Route::get('/', function () {
      return view('greeting', ['name' => 'James']);
    });
    

Répertoires de vue imbriqués
*******************************

Les vues peuvent également être imbriquées dans des sous-répertoires du répertoire resources/views. La notation "Point" peut être utilisée pour référencer des vues imbriquées. Par exemple, si votre vue est stockée dans resources/views/admin/profile.blade.php, vous pouvez la renvoyer depuis l'une des routes/contrôleurs de votre application comme suit :

.. code-block:: php

   return view('admin.profile', $data);
   

Controllers
=============

Au lieu de définir toute votre logique de gestion des requêtes comme des fermetures dans vos fichiers de route, vous pouvez organiser ce comportement à l'aide de classes "contrôleur". Les contrôleurs peuvent regrouper la logique de gestion des demandes associées dans une seule classe. Par exemple, une classe UserController peut gérer toutes les demandes entrantes liées aux utilisateurs, y compris l'affichage, la création, la mise à jour et la suppression d'utilisateurs. Par défaut, les contrôleurs sont stockés dans le répertoire app/Http/Controllers.

Contrôleurs d'écriture
*************************

Contrôleurs de base
......................

Examinons un exemple de contrôleur de base. Notez que le contrôleur étend la classe de contrôleur de base incluse avec Laravel : App\Http\Controllers\Controller :

.. code-block:: php

   <?php
 
   namespace App\Http\Controllers;
 
   use App\Models\User;
 
   class UserController extends Controller
   {
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
   }
  

Vous pouvez définir une route vers cette méthode de contrôleur comme suit :

.. code-block:: php

    use App\Http\Controllers\UserController;
 
    Route::get('/user/{id}', [UserController::class, 'show']);  
    
    
Lorsqu'une requête entrante correspond à l'URI de route spécifié, la méthode show de la classe App\Http\Controllers\UserController sera appelée et les paramètres de route seront transmis à la méthode.


HTTP Requests
===============

La classe Illuminate\Http\Request de Laravel fournit un moyen orienté objet d'interagir avec la requête HTTP actuelle gérée par votre application, ainsi que de récupérer l'entrée, les cookies et les fichiers qui ont été soumis avec la requête.


Interagir avec la requête
******************************

Accéder à la requête
.......................

Pour obtenir une instance de la requête HTTP actuelle via l'injection de dépendances, vous devez indiquer la classe Illuminate\Http\Request sur votre méthode de fermeture de route ou de contrôleur. L'instance de requête entrante sera automatiquement injectée par le conteneur de service Laravel :


.. code-block:: php

    <?php
 
    namespace App\Http\Controllers;
 
    use Illuminate\Http\Request;
 
    class UserController extends Controller
   {
    /**
     * Store a new user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
 
        //
    }
   }
   

Comme mentionné, vous pouvez également taper la classe Illuminate\Http\Request sur une fermeture de route. Le conteneur de service injectera automatiquement la requête entrante dans la fermeture lors de son exécution :

.. code-block:: php

   use Illuminate\Http\Request;
 
   Route::get('/', function (Request $request) {
      //
   });
   
   
Injection de dépendance et paramètres de route
.................................................

Si votre méthode de contrôleur attend également une entrée d'un paramètre de route, vous devez répertorier vos paramètres de route après vos autres dépendances. Par exemple, si votre route est définie comme ceci :


.. code-block:: php

    use App\Http\Controllers\UserController;
 
    Route::put('/user/{id}', [UserController::class, 'update']);
    
Vous pouvez toujours saisir l'indice Illuminate\Http\Request et accéder à votre paramètre id route en définissant votre méthode de contrôleur comme suit :


.. code-block:: php


    <?php
 
   namespace App\Http\Controllers;
 
   use Illuminate\Http\Request;
 
   class UserController extends Controller
   {
     /**
     * Update the specified user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    }
    

HTTP Responses
================

Créer des réponses
*********************

Chaînes de caractères et tableaux
.......................................

Toutes les routes et tous les contrôleurs doivent renvoyer une réponse à renvoyer au navigateur de l'utilisateur. Laravel propose plusieurs façons différentes de renvoyer des réponses. La réponse la plus basique consiste à renvoyer une chaîne à partir d'une route ou d'un contrôleur. Le framework convertira automatiquement la chaîne en une réponse HTTP complète :


.. code-block:: php

    Route::get('/', function () {
    return 'Hello World';
    });
    
    

En plus de renvoyer des chaînes à partir de vos routes et de vos contrôleurs, vous pouvez également renvoyer des tableaux. Le framework convertira automatiquement le tableau en une réponse JSON :

.. code-block:: php

     Route::get('/', function () {
        return [1, 2, 3];
     });
     

Objets de réponse
******************* 

En règle générale, vous ne renverrez pas simplement de simples chaînes ou des tableaux à partir de vos actions de route. Au lieu de cela, vous renverrez des instances ou des vues Illuminate\Http\Response complètes.

Le renvoi d'une instance Response complète vous permet de personnaliser le code d'état HTTP et les en-têtes de la réponse. Une instance Response hérite de la classe Symfony\Component\HttpFoundation\Response, qui fournit une variété de méthodes pour construire des réponses HTTP :

.. code-block:: php

   Route::get('/home', function () {
    return response('Hello World', 200)
                  ->header('Content-Type', 'text/plain');
   });
   
   
Modèles et collections Eloquent
*********************************

Vous pouvez également renvoyer des modèles et des collections ORM Eloquent directement à partir de vos routes et de vos contrôleurs. Lorsque vous le faites, Laravel convertira automatiquement les modèles et les collections en réponses JSON tout en respectant les attributs cachés du modèle :

.. code-block:: php

   use App\Models\User;
 
    Route::get('/user/{user}', function (User $user) {
       return $user;
    });
    

https://laravel.com/docs/5.1/quickstart
  
could not find driver (SQL: PRAGMA foreign_keys = ON;)
sudo apt-get install php-sqlite3
php artisan make:migration create_tasks_table --create=tasks
php artisan migrate
 php artisan make:model Task


