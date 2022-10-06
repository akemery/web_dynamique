Fournisseur de services
-------------------------

Introduction
=============

Le conteneur de service Laravel est un outil puissant pour gérer les dépendances de classe et effectuer l'injection de dépendances. L'injection de dépendances est une expression fantaisiste qui signifie essentiellement ceci : les dépendances de classe sont "injectées" dans la classe via le constructeur ou, dans certains cas, des méthodes "setter".

Prenons un exemple simple :

.. code-block:: html

    <?php
 
      namespace App\Http\Controllers;
 
      use App\Http\Controllers\Controller;
      use App\Repositories\UserRepository;
      use App\Models\User;
 
      class UserController extends Controller
      {
         /**
          * The user repository implementation.
          *
          * @var UserRepository
          */
          protected $users;
 
         /**
          * Create a new controller instance.
          *
          * @param  UserRepository  $users
          * @return void
          */
          public function __construct(UserRepository $users)
          {
              $this->users = $users;
          }
 
          /**
           * Show the profile for the given user.
           *
           * @param  int  $id
           * @return Response
           */
           public function show($id)
           {
               $user = $this->users->find($id);
 
               return view('user.profile', ['user' => $user]);
           }
        }
        

Dans cet exemple, le UserController doit récupérer des utilisateurs à partir d'une source de données. Nous allons donc injecter un service capable de récupérer des utilisateurs. Dans ce contexte, notre UserRepository utilise très probablement Eloquent pour récupérer les informations utilisateur de la base de données. Cependant, puisque le référentiel est injecté, nous pouvons facilement l'échanger avec une autre implémentation. Nous sommes également en mesure de "simuler" facilement ou de créer une implémentation factice du UserRepository lors du test de notre application.

Une compréhension approfondie du conteneur de services Laravel est essentielle pour créer une application puissante et de grande taille, ainsi que pour contribuer au cœur de Laravel lui-même.

Résolution de configuration zéro
..................................

Si une classe n'a pas de dépendances ou ne dépend que d'autres classes concrètes (pas d'interfaces), le conteneur n'a pas besoin d'être instruit sur la façon de résoudre cette classe. Par exemple, vous pouvez placer le code suivant dans votre fichier routes/web.php :


.. code-block:: html

    <?php
 
    class Service
    {
    //
    }
 
    Route::get('/', function (Service $service) {
        die(get_class($service));
    });
    
    
Dans cet exemple, appuyer sur la route / de votre application résoudra automatiquement la classe Service et l'injectera dans le gestionnaire de votre route. Cela change la donne. Cela signifie que vous pouvez développer votre application et profiter de l'injection de dépendances sans vous soucier des fichiers de configuration gonflés.

Heureusement, de nombreuses classes que vous allez écrire lors de la création d'une application Laravel reçoivent automatiquement leurs dépendances via le conteneur, y compris les contrôleurs, les écouteurs d'événements, les intergiciels, etc. De plus, vous pouvez créer des dépendances d'indication de type dans la méthode de gestion des travaux en file d'attente. Une fois que vous avez goûté à la puissance de l'injection automatique et sans dépendance de configuration, il semble impossible de développer sans elle.


Quand utiliser le conteneur
..............................

Grâce à la résolution de configuration zéro, vous aurez souvent des dépendances d'indication de type sur les routes, les contrôleurs, les écouteurs d'événements et ailleurs sans jamais interagir manuellement avec le conteneur. Par exemple, vous pouvez ajouter un indice de type à l'objet Illuminate\Http\Request sur votre définition d'itinéraire afin de pouvoir accéder facilement à la requête actuelle. Même si nous n'avons jamais à interagir avec le conteneur pour écrire ce code, il gère l'injection de ces dépendances en coulisse :


.. code-block:: php

   use Illuminate\Http\Request;
 
   Route::get('/', function (Request $request) {
    // ...
   });
