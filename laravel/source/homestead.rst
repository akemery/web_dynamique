Homestead
---------

Laravel s'efforce de rendre l'ensemble de l'expérience de développement PHP agréable, y compris votre environnement de développement local. Vagrant offre un moyen simple et élégant de gérer et de provisionner des machines virtuelles.

Laravel Homestead est une boîte Vagrant officielle et pré-emballée qui vous offre un environnement de développement merveilleux sans vous obliger à installer PHP, un serveur Web et tout autre logiciel serveur sur votre machine locale. Plus besoin de vous soucier de gâcher votre système d'exploitation ! Les boîtes Vagrant sont entièrement jetables. Si quelque chose ne va pas, vous pouvez détruire et recréer la boîte en quelques minutes !

Homestead fonctionne sur n'importe quel système Windows, Mac ou Linux et comprend Nginx, PHP, MySQL, PostgreSQL, Redis, Memcached, Node et tous les autres avantages dont vous avez besoin pour développer d'incroyables applications Laravel.

Installation et configuration
=============================

Premières étapes
.................

Avant de lancer votre environnement Homestead, vous devez installer VirtualBox 6.x, VMWare, Parallels ou Hyper-V ainsi que Vagrant. Tous ces progiciels fournissent des installateurs visuels faciles à utiliser pour tous les systèmes d'exploitation courants.

Pour utiliser le fournisseur VMware, vous devrez acheter à la fois VMware Fusion / Workstation et le plug-in VMware Vagrant. Bien qu'il ne soit pas gratuit, VMware peut fournir des performances de dossier partagé plus rapides et prêtes à l'emploi.

Pour utiliser le fournisseur Parallels, vous devrez installer le plug-in Parallels Vagrant. C'est gratuit.

En raison des limitations de Vagrant, le fournisseur Hyper-V ignore tous les paramètres de mise en réseau.


Installation de la boîte Vagrant Homestead
*******************************************

Une fois VirtualBox / VMware et Vagrant installés, vous devez ajouter la boîte laravel/homestead à votre installation Vagrant à l'aide de la commande suivante dans votre terminal. Le téléchargement de la box prendra quelques minutes, selon la vitesse de votre connexion Internet :

.. code-block:: console

   vagrant box add laravel/homestead

Si cette commande échoue, assurez-vous que votre installation Vagrant est à jour.


Installation de Homestead
***************************

Vous pouvez installer Homestead en clonant le référentiel sur votre machine hôte. Envisagez de cloner le référentiel dans un dossier Homestead au sein de votre répertoire "home", car la boîte Homestead servira d'hôte à tous vos projets Laravel :

.. code-block:: console

   git clone https://github.com/laravel/homestead.git ~/Homestead
   

Une fois que vous avez cloné le référentiel Homestead, exécutez la commande bash init.sh à partir du répertoire Homestead pour créer le fichier de configuration Homestead.yaml. Le fichier Homestead.yaml sera placé dans le répertoire Homestead :

.. code-block:: console

   // Mac / Linux...
   bash init.sh
 
   // Windows...
   init.bat

Configurer Homestead
......................

Définition de votre fournisseur
*********************************

La clé du fournisseur dans votre fichier Homestead.yaml indique quel fournisseur Vagrant doit être utilisé : virtualbox, vmware_fusion, vmware_workstation, parallels ou hyperv. Vous pouvez le définir sur le fournisseur que vous préférez :

.. code-block:: console

   provider: virtualbox

Configuration des dossiers partagés
*************************************

La propriété folders du fichier Homestead.yaml répertorie tous les dossiers que vous souhaitez partager avec votre environnement Homestead. Au fur et à mesure que les fichiers de ces dossiers sont modifiés, ils seront synchronisés entre votre ordinateur local et l'environnement Homestead. Vous pouvez configurer autant de dossiers partagés que nécessaire :

.. code-block:: console

   folders:
      - map: ~/code/project1
      to: /home/vagrant/project1
      

Vous devez toujours mapper des projets individuels à leur propre mappage de dossier au lieu de mapper l'intégralité de votre dossier ~/code. Lorsque vous mappez un dossier, la machine virtuelle doit garder une trace de toutes les E/S de disque pour chaque fichier du dossier. Cela entraîne des problèmes de performances si vous avez un grand nombre de fichiers dans un dossier.

.. code-block:: console

   folders:
     - map: ~/code/project1
      to: /home/vagrant/project1
 
     - map: ~/code/project2
      to: /home/vagrant/project2
      

Configuration des sites Nginx
*******************************

La propriété sites vous permet de mapper facilement un "domaine" à un dossier de votre environnement Homestead. Un exemple de configuration de site est inclus dans le fichier Homestead.yaml. Encore une fois, vous pouvez ajouter autant de sites que nécessaire à votre environnement Homestead. Homestead peut servir d'environnement virtualisé pratique pour chaque projet Laravel sur lequel vous travaillez :


.. code-block:: console

   sites:
    - map: homestead.test
      to: /home/vagrant/project1/public
      

Si vous modifiez la propriété sites après avoir provisionné la boîte Homestead, vous devez relancer vagrant reload --provision pour mettre à jour la configuration Nginx sur la machine virtuelle.


Activer / désactiver les services
**********************************

Homestead démarre plusieurs services par défaut ; cependant, vous pouvez personnaliser les services activés ou désactivés lors de l'approvisionnement. Par exemple, vous pouvez activer PostgreSQL et désactiver MySQL :


.. code-block:: console

   services:
    - enabled:
        - "postgresql@12-main"
    - disabled:
        - "mysql"
        
        
Les services spécifiés seront démarrés ou arrêtés en fonction de leur ordre dans les directives enabled et disabled.

Résolution du nom d'hôte
**************************

Homestead publie les noms d'hôtes sur mDNS pour une résolution automatique des hôtes. Si vous définissez hostname: homestead dans votre fichier Homestead.yaml, l'hôte sera disponible sur homestead.local. Les distributions de bureau MacOS, iOS et Linux incluent la prise en charge de mDNS par défaut. Windows nécessite l'installation des services d'impression Bonjour pour Windows.

L'utilisation de noms d'hôtes automatiques fonctionne mieux pour les installations "par projet" de Homestead. Si vous hébergez plusieurs sites sur une seule instance Homestead, vous pouvez ajouter les "domaines" de vos sites Web au fichier hosts sur votre machine. Le fichier hosts redirigera les demandes de vos sites Homestead vers votre machine Homestead. Sur Mac et Linux, ce fichier se trouve dans /etc/hosts. Sous Windows, il se trouve dans C:\\Windows\\System32\\drivers\\etc\\hosts. Les lignes que vous ajoutez à ce fichier ressembleront à ceci :

.. code-block:: console

   192.168.10.10  homestead.test
   
   
 Assurez-vous que l'adresse IP indiquée est celle définie dans votre fichier Homestead.yaml. Une fois que vous aurez ajouté le domaine à votre fichier hosts et lancé la boîte Vagrant vous pourrez accéder au site via votre navigateur web :
 
.. code-block:: console
 
    http://homestead.test
    

Lancement de la boîte Vagrant
*******************************

Une fois que vous avez modifié le Homestead.yaml à votre guise, exécutez la commande vagrant up à partir de votre répertoire Homestead. Vagrant démarrera la machine virtuelle et configurera automatiquement vos dossiers partagés et vos sites Nginx.

Pour détruire la machine, vous pouvez utiliser la commande vagrant destroy --force.

Installation par projet
*************************

Au lieu d'installer Homestead globalement et de partager la même boîte Homestead sur tous vos projets, vous pouvez plutôt configurer une instance Homestead pour chaque projet que vous gérez. L'installation de Homestead par projet peut être bénéfique si vous souhaitez expédier un Vagrantfile avec votre projet, permettant à d'autres personnes travaillant sur le projet de se déplacer.

Pour installer Homestead directement dans votre projet, installez-le à l'aide de Composer :

.. code-block:: console

   composer require laravel/homestead --dev
   

Une fois Homestead installé, utilisez la commande make pour générer le fichier Vagrantfile et Homestead.yaml à la racine de votre projet. La commande make configurera automatiquement les directives sites et dossiers dans le fichier Homestead.yaml.

Mac/Linux :

.. code-block:: console

   php vendor/bin/homestead make
   
   
Windows:

.. code-block:: console

   vendor\\bin\\homestead make
   
Ensuite, exécutez la commande vagrant up dans votre terminal et accédez à votre projet à l'adresse http://homestead.test dans votre navigateur. N'oubliez pas que vous devrez toujours ajouter une entrée de fichier /etc/hosts pour homestead.test ou le domaine de votre choix si vous n'utilisez pas la résolution automatique du nom d'hôte.

Installation des fonctionnalités facultatives
...............................................

Les logiciels en option sont installés à l'aide du paramètre "fonctionnalités" dans votre fichier de configuration Homestead. La plupart des fonctionnalités peuvent être activées ou désactivées avec une valeur booléenne, tandis que certaines fonctionnalités autorisent plusieurs options de configuration :

.. code-block:: console

   features:
    - blackfire:
        server_id: "server_id"
        server_token: "server_value"
        client_id: "client_id"
        client_token: "client_value"
    - cassandra: true
    - chronograf: true
    - couchdb: true
    - crystal: true
    - docker: true
    - elasticsearch:
        version: 7.9.0
    - gearman: true
    - golang: true
    - grafana: true
    - influxdb: true
    - mariadb: true
    - minio: true
    - mongodb: true
    - mysql8: true
    - neo4j: true
    - ohmyzsh: true
    - openresty: true
    - pm2: true
    - python: true
    - rabbitmq: true
    - solr: true
    - webdriver: true
    

MariaDB
********

L'activation de MariaDB supprimera MySQL et installera MariaDB. MariaDB sert de remplacement direct pour MySQL, vous devez donc toujours utiliser le pilote de base de données mysql dans la configuration de la base de données de votre application.

MongoDB
********

L'installation par défaut de MongoDB définira le nom d'utilisateur de la base de données sur homestead et le mot de passe correspondant sur secret.

Elastics search
****************

Vous pouvez spécifier une version prise en charge d'Elasticsearch, qui peut être une version majeure ou un numéro de version exact (major.minor.patch). L'installation par défaut créera un cluster nommé 'homestead'. Vous ne devez jamais donner à Elasticsearch plus de la moitié de la mémoire du système d'exploitation, alors assurez-vous que votre machine Homestead dispose d'au moins deux fois l'allocation Elasticsearch.



Néo4j
*******

L'installation par défaut de Neo4j définira le nom d'utilisateur de la base de données sur homestead et le mot de passe correspondant sur secret. Pour accéder au navigateur Neo4j, visitez http://homestead.test:7474 via votre navigateur Web. Les ports 7687 (Bolt), 7474 (HTTP) et 7473 (HTTPS) sont prêts à servir les requêtes du client Neo4j.

Alias
......

Vous pouvez ajouter des alias Bash à votre machine Homestead en modifiant le fichier d'alias dans votre répertoire Homestead :

.. code-block:: console

   alias c='clear'
   alias ..='cd ..'
   

Après avoir mis à jour le fichier d'alias, vous devez réapprovisionner la machine Homestead à l'aide de la commande vagrant reload --provision. Cela garantira que vos nouveaux alias sont disponibles sur la machine.


Utilisation quotidienne
=========================

Accéder à Homestead globalement
*********************************

Parfois, vous voudrez peut-être exécuter vagrant up de la machine Homestead depuis n'importe où sur votre système de fichiers. Vous pouvez le faire sur les systèmes Mac/Linux en ajoutant une fonction Bash à votre profil Bash. Sous Windows, vous pouvez accomplir cela en ajoutant un fichier "batch" à votre PATH. Ces scripts vous permettront d'exécuter n'importe quelle commande Vagrant depuis n'importe où sur votre système et dirigeront automatiquement cette commande vers votre installation Homestead :

Mac/Linux
...........

.. code-block:: console

   function homestead() {
    ( cd ~/Homestead && vagrant $* )
   }
   

Assurez-vous de modifier le chemin ~/Homestead dans la fonction à l'emplacement de votre installation Homestead réelle. Une fois la fonction installée, vous pouvez exécuter des commandes telles que homestead up ou homestead ssh depuis n'importe où sur votre système.

Windows
............

Créez un fichier batch homestead.bat n'importe où sur votre machine avec le contenu suivant :


.. code-block:: console

   @echo off
 
   set cwd=%cd%
   set homesteadVagrant=C:\Homestead
 
   cd /d %homesteadVagrant% && vagrant %*
   cd /d %cwd%
 
   set cwd=
   set homesteadVagrant=
   
Assurez-vous de modifier l'exemple de chemin C:\Homestead dans le script vers l'emplacement réel de votre installation Homestead. Après avoir créé le fichier, ajoutez l'emplacement du fichier à votre PATH. Vous pouvez ensuite exécuter des commandes telles que homestead up ou homestead ssh depuis n'importe où sur votre système.

Connexion via SSH
*********************

Vous pouvez vous connecter en SSH à votre machine virtuelle en exécutant la commande vagrant ssh terminal à partir de votre répertoire Homestead.

Mais, puisque vous aurez probablement besoin de vous connecter fréquemment en SSH à votre machine Homestead, envisagez d'ajouter la "fonction" décrite ci-dessus à votre machine hôte pour accéder rapidement à SSH dans la boîte Homestead.

Connexion aux bases de données
************************************

Une base de données Homestead est configurée pour MySQL et PostgreSQL prête à l'emploi. Pour vous connecter à votre base de données MySQL ou PostgreSQL à partir du client de base de données de votre ordinateur hôte, vous devez vous connecter à 127.0.0.1 et au port 33060 (MySQL) ou 54320 (PostgreSQL). Le nom d'utilisateur et le mot de passe pour les deux bases de données sont homestead / secret.


Sauvegardes de base de données
********************************

Homestead peut automatiquement sauvegarder votre base de données lorsque votre boîte Vagrant est détruite. Pour utiliser cette fonctionnalité, vous devez utiliser Vagrant 2.1.0 ou supérieur. Ou, si vous utilisez une ancienne version de Vagrant, vous devez installer le plug-in vagrant-triggers. Pour activer les sauvegardes automatiques de la base de données, ajoutez la ligne suivante à votre fichier Homestead.yaml :

.. code-block:: console

   backup: true
   
Une fois configuré, Homestead exportera vos bases de données vers les répertoires mysql_backup et postgres_backup lorsque la commande vagrant destroy sera exécutée. Ces répertoires se trouvent dans le dossier où vous avez cloné Homestead ou à la racine de votre projet si vous utilisez la méthode d'installation par projet.

Instantanés de la base de données
************************************

Homestead prend en charge le gel de l'état des bases de données MySQL et MariaDB et la création de branches entre elles à l'aide de Logical MySQL Manager. Par exemple, imaginez travailler sur un site avec une base de données de plusieurs gigaoctets. Vous pouvez importer la base de données et prendre un instantané. Après avoir travaillé et créé du contenu de test localement, vous pouvez rapidement restaurer l'état d'origine.

Sous le capot, LMM utilise la fonctionnalité d'instantané léger de LVM avec prise en charge de la copie sur écriture. En pratique, cela signifie que la modification d'une seule ligne dans une table entraînera uniquement l'écriture des modifications que vous avez apportées sur le disque, ce qui vous fera gagner beaucoup de temps et d'espace disque lors des restaurations.

Étant donné que lmm interagit avec LVM, il doit être exécuté en tant que root. Pour voir toutes les commandes disponibles, exécutez sudo lmm dans votre boîte Vagrant. Un flux de travail courant ressemble à ceci :

    Importez une base de données dans la branche master lmm par défaut.
    Enregistrez un instantané de la base de données inchangée à l'aide de sudo lmm branch prod-YYYY-MM-DD.
    Modifier la base de données.
    Exécutez sudo lmm merge prod-YYYY-MM-DD pour annuler toutes les modifications.
    Exécutez sudo lmm delete <branch> pour supprimer les branches inutiles.

Ajout de sites supplémentaires
********************************

Une fois votre environnement Homestead est provisionné et en cours d'exécution, vous pouvez ajouter des sites Nginx supplémentaires pour vos applications Laravel. Vous pouvez exécuter autant d'installations Laravel que vous le souhaitez sur un seul environnement Homestead. Pour ajouter un site supplémentaire, ajoutez le site à votre fichier Homestead.yaml :

.. code-block:: console

   sites:
    - map: homestead.test
      to: /home/vagrant/project1/public
    - map: another.test
      to: /home/vagrant/project2/public
      
Si Vagrant ne gère pas automatiquement votre fichier "hosts", vous devrez peut-être également ajouter le nouveau site à ce fichier :


.. code-block:: console

   192.168.10.10  homestead.test
   192.168.10.10  another.test
   

Une fois le site ajouté, exécutez la commande vagrant reload --provision depuis votre répertoire Homestead.

Types de sites
...............

Homestead prend en charge plusieurs types de sites qui vous permettent d'exécuter facilement des projets qui ne sont pas basés sur Laravel. Par exemple, nous pouvons facilement ajouter une application Symfony à Homestead en utilisant le type de site symfony2 :

.. code-block:: console

   sites:
    - map: symfony2.test
      to: /home/vagrant/my-symfony-project/web
      type: "symfony2"
      
Les types de sites disponibles sont : apache, apigility, expressive, laravel (par défaut), proxy, silverstripe, statamic, symfony2, symfony4 et zf.

Paramètres du site
...................

Vous pouvez ajouter des valeurs Nginx fastcgi_param supplémentaires à votre site via la directive de site params. Par exemple, nous ajouterons un paramètre FOO avec une valeur de BAR :

.. code-block:: console

   sites:
    - map: homestead.test
      to: /home/vagrant/project1/public
      params:
          - key: FOO
            value: BAR
            

Variables d'environnement
***************************

Vous pouvez définir des variables d'environnement globales en les ajoutant à votre fichier Homestead.yaml :

.. code-block:: console

   variables:
    - key: APP_ENV
      value: local
    - key: FOO
      value: bar
      

Après la mise à jour de Homestead.yaml, assurez-vous de réapprovisionner la machine en exécutant vagrant reload --provision. Cela mettra à jour la configuration PHP-FPM pour toutes les versions PHP installées et mettra également à jour l'environnement pour l'utilisateur vagabond.

SSL générique
***************

Homestead configure un certificat SSL auto-signé pour chaque site défini dans la section sites : de votre fichier Homestead.yaml. Si vous souhaitez générer un certificat SSL générique pour un site, vous pouvez ajouter une option générique à la configuration de ce site. Par défaut, le site utilisera le certificat générique au lieu du certificat de domaine spécifique :


.. code-block:: console

   - map: foo.domain.test
     to: /home/vagrant/domain
     wildcard: "yes"
     

Si l'option use_wildcard est définie sur no, le certificat générique sera généré mais ne sera pas utilisé :

.. code-block:: console

   - map: foo.domain.test
     to: /home/vagrant/domain
     wildcard: "yes"
     use_wildcard: "no"
     

Configuration des tâches Cron
*******************************

Laravel fournit un moyen pratique de planifier les tâches Cron en programmant une seule commande schedule:run Artisan à exécuter toutes les minutes. La commande schedule:run examinera la planification des tâches définie dans votre classe App\Console\Kernel pour déterminer les tâches à exécuter.

Si vous souhaitez que la commande schedule: run soit exécutée pour un site Homestead, vous pouvez définir l'option schedule sur true lors de la définition du site :

.. code-block:: console

   sites:
    - map: homestead.test
      to: /home/vagrant/project1/public
      schedule: true
      
La tâche Cron pour le site sera définie dans le dossier /etc/cron.d de la machine virtuelle.

Configuration de Mailhog
**************************

Mailhog vous permet de récupérer facilement votre courrier électronique sortant et de l'examiner sans réellement envoyer le courrier à ses destinataires. Pour commencer, mettez à jour votre fichier .env pour utiliser les paramètres de messagerie suivants :


.. code-block:: console

   MAIL_MAILER=smtp
   MAIL_HOST=localhost
   MAIL_PORT=1025
   MAIL_USERNAME=null
   MAIL_PASSWORD=null
   MAIL_ENCRYPTION=null
   
Une fois Mailhog configuré, vous pouvez accéder au tableau de bord Mailhog à l'adresse http://localhost:8025.


Configurer Minio
******************

Minio est un serveur de stockage d'objets open source avec une API compatible Amazon S3. Pour installer Minio, mettez à jour votre fichier Homestead.yaml avec l'option de configuration suivante dans la section des fonctionnalités :

.. code-block:: console

   minio: true
   
Par défaut, Minio est disponible sur le port 9600. Vous pouvez accéder au panneau de contrôle Minio en visitant http://localhost:9600/. La clé d'accès par défaut est homestead, tandis que la clé secrète par défaut est secretkey. Lorsque vous accédez à Minio, vous devez toujours utiliser la région us-east-1.

Pour utiliser Minio, vous devrez ajuster la configuration du disque S3 dans votre fichier de configuration config/filesystems.php. Vous devrez ajouter l'option use_path_style_endpoint à la configuration du disque, ainsi que changer la clé url en endpoint :

.. code-block:: console

    's3' => [
    'driver' => 's3',
    'key' => env('AWS_ACCESS_KEY_ID'),
    'secret' => env('AWS_SECRET_ACCESS_KEY'),
    'region' => env('AWS_DEFAULT_REGION'),
    'bucket' => env('AWS_BUCKET'),
    'endpoint' => env('AWS_URL'),
    'use_path_style_endpoint' => true,
     ]
     

Enfin, assurez-vous que votre fichier .env dispose des options suivantes :

.. code-block:: console

    AWS_ACCESS_KEY_ID=homestead
    AWS_SECRET_ACCESS_KEY=secretkey
    AWS_DEFAULT_REGION=us-east-1
    AWS_URL=http://localhost:9600
    

Pour provisionner des buckets, ajoutez une directive buckets à votre fichier de configuration Homestead :

.. code-block:: console

   buckets:
    - name: your-bucket
      policy: public
    - name: your-private-bucket
      policy: none
      

Les valeurs de stratégie prises en charge incluent : none, download, upload et public.

Ports
********

Par défaut, les ports suivants sont redirigés vers votre environnement Homestead :


    SSH: 2222 → Forwards To 22
    ngrok UI: 4040 → Forwards To 4040
    HTTP: 8000 → Forwards To 80
    HTTPS: 44300 → Forwards To 443
    MySQL: 33060 → Forwards To 3306
    PostgreSQL: 54320 → Forwards To 5432
    MongoDB: 27017 → Forwards To 27017
    Mailhog: 8025 → Forwards To 8025
    Minio: 9600 → Forwards To 9600


Redirection de ports supplémentaires
......................................

Si vous le souhaitez, vous pouvez rediriger des ports supplémentaires vers la boîte Vagrant, ainsi que spécifier leur protocole :


.. code-block:: console

    ports:
    - send: 50000
      to: 5000
    - send: 7777
      to: 777
      protocol: udp
      

Partage de votre environnement
********************************

Parfois, vous souhaiterez peut-être partager ce sur quoi vous travaillez actuellement avec des collègues ou un client. Vagrant a un moyen intégré de prendre en charge cela via le partage vagrant ; cependant, cela ne fonctionnera pas si vous avez plusieurs sites configurés dans votre fichier Homestead.yaml.

Pour résoudre ce problème, Homestead inclut sa propre commande de partage. Pour commencer, connectez-vous en SSH à votre machine Homestead via vagrant ssh et exécutez share homestead.test. Cela partagera le site homestead.test à partir de votre fichier de configuration Homestead.yaml. Vous pouvez remplacer homestead.test par n'importe lequel de vos autres sites configurés :

.. code-block:: console

   share homestead.test
   
   
Après avoir exécuté la commande, vous verrez apparaître un écran Ngrok qui contient le journal d'activité et les URL accessibles au public pour le site partagé. Si vous souhaitez spécifier une région personnalisée, un sous-domaine ou une autre option d'exécution Ngrok, vous pouvez les ajouter à votre commande de partage :


.. code-block:: console

   share homestead.test -region=eu -subdomain=laravel
   
Plusieurs versions de PHP
***************************

Homestead 6 a introduit la prise en charge de plusieurs versions de PHP sur la même machine virtuelle. Vous pouvez spécifier la version de PHP à utiliser pour un site donné dans votre fichier Homestead.yaml. Les versions PHP disponibles sont : "5.6", "7.0", "7.1", "7.2", "7.3" et "7.4" (par défaut) :


.. code-block:: console

    sites:
    - map: homestead.test
      to: /home/vagrant/project1/public
      php: "7.1"
      
De plus, vous pouvez utiliser n'importe laquelle des versions PHP prises en charge via la CLI :

.. code-block:: console

    php5.6 artisan list
    php7.0 artisan list
    php7.1 artisan list
    php7.2 artisan list
    php7.3 artisan list
    php7.4 artisan list
    

Vous pouvez également mettre à jour la version CLI par défaut en exécutant les commandes suivantes depuis votre machine virtuelle Homestead :

.. code-block:: console

   php56
   php70
   php71
   php72
   php73
   php74
   
   
Serveurs Web
***************

Homestead utilise le serveur Web Nginx par défaut. Cependant, il peut installer Apache si apache est spécifié comme type de site. Bien que les deux serveurs Web puissent être installés en même temps, ils ne peuvent pas fonctionner en même temps. La commande flip shell est disponible pour faciliter le processus de basculement entre les serveurs Web. La commande flip détermine automatiquement quel serveur Web est en cours d'exécution, l'arrête, puis démarre l'autre serveur. Pour utiliser cette commande, connectez-vous en SSH à votre machine Homestead et exécutez la commande dans votre terminal :

.. code-block:: console

   flip
   

Mail
*******

Homestead inclut l'agent de transfert de courrier Postfix, qui écoute sur le port 1025 par défaut. Ainsi, vous pouvez demander à votre application d'utiliser le pilote de messagerie smtp sur le port 1025 de l'hôte local. Ensuite, tous les messages envoyés seront traités par Postfix et interceptés par Mailhog. Pour afficher vos e-mails envoyés, ouvrez http://localhost:8025 dans votre navigateur Web.

Débogage et profilage
***********************

Débogage des requêtes Web avec Xdebug
......................................

Homestead inclut la prise en charge du débogage par étapes à l'aide de Xdebug. Par exemple, vous pouvez charger une page Web à partir d'un navigateur, et PHP se connectera à votre IDE pour permettre l'inspection et la modification du code en cours d'exécution.

Par défaut, Xdebug est déjà en cours d'exécution et prêt à accepter les connexions. Si vous devez activer Xdebug sur la CLI, exécutez la commande sudo phpenmod xdebug dans votre boîte Vagrant. Ensuite, suivez les instructions de votre IDE pour activer le débogage. Enfin, configurez votre navigateur pour déclencher Xdebug avec une extension ou un bookmarklet.

Débogage des applications CLI
..............................

Pour déboguer une application PHP CLI, utilisez l'alias de shell xphp à l'intérieur de votre boîte Vagrant :

.. code-block:: console

   xphp path/to/script
   

Démarrage automatique de Xdebug
.................................

Lors du débogage de tests fonctionnels qui envoient des requêtes au serveur Web, il est plus facile de démarrer automatiquement le débogage plutôt que de modifier les tests pour passer par un en-tête ou un cookie personnalisé pour déclencher le débogage. Pour forcer Xdebug à démarrer automatiquement, modifiez /etc/php/7.x/fpm/conf.d/20-xdebug.ini dans votre boîte Vagrant et ajoutez la configuration suivante :

.. code-block:: console

   ; If Homestead.yaml contains a different subnet for the IP address, this address may be different...
   xdebug.remote_host = 192.168.10.1
   xdebug.remote_autostart = 1
   
   
Profilage d'applications avec Blackfire
.........................................

Blackfire est un service SaaS permettant de profiler les requêtes Web et les applications CLI et d'écrire des assertions de performances. Il offre une interface utilisateur interactive qui affiche les données de profil dans des graphiques d'appels et des chronologies. Il est conçu pour être utilisé dans le développement, la mise en scène et la production, sans frais généraux pour les utilisateurs finaux. Il fournit des contrôles de performances, de qualité et de sécurité sur le code et les paramètres de configuration de php.ini.

Le Blackfire Player est une application open-source Web Crawling, Web Testing et Web Scraping qui peut fonctionner conjointement avec Blackfire afin de scénariser des scénarios de profilage.

Pour activer Blackfire, utilisez le paramètre "features" dans votre fichier de configuration Homestead :

.. code-block:: console

   features:
    - blackfire:
        server_id: "server_id"
        server_token: "server_value"
        client_id: "client_id"
        client_token: "client_value"
        
       
Les informations d'identification du serveur Blackfire et les informations d'identification du client nécessitent un compte d'utilisateur. Blackfire propose diverses options pour profiler une application, notamment un outil CLI et une extension de navigateur. Veuillez consulter la documentation Blackfire pour plus de détails.

Profilage des performances PHP à l'aide de XHGui
..................................................

XHGui est une interface utilisateur pour explorer les performances de vos applications PHP. Pour activer XHGui, ajoutez xhgui: 'true' à la configuration de votre site :


.. code-block:: console

   sites:
    -
        map: your-site.test
        to: /home/vagrant/your-site/public
        type: "apache"
        xhgui: 'true'
        

Si le site existe déjà, assurez-vous d'exécuter vagrant provision après la mise à jour de votre configuration.

Pour profiler une requête Web, ajoutez xhgui=on en tant que paramètre de requête à une requête. XHGui attachera automatiquement un cookie à la réponse afin que les requêtes suivantes n'aient pas besoin de la valeur de la chaîne de requête. Vous pouvez consulter les résultats de votre profil d'application en accédant à http://votre-site.test/xhgui.

Pour profiler une requête CLI à l'aide de XHGui, préfixez la commande avec XHGUI=on :

.. code-block:: console

    XHGUI=on path/to/script
    

Les résultats du profil CLI peuvent être visualisés de la même manière que les résultats du profil Web.

Notez que l'acte de profilage ralentit l'exécution du script et que les temps absolus peuvent être jusqu'à deux fois supérieurs aux requêtes réelles. Par conséquent, comparez toujours les améliorations en pourcentage et non les chiffres absolus. Sachez également que le temps d'exécution inclut tout temps passé en pause dans un débogueur.

Comme les profils de performances occupent un espace disque important, ils sont automatiquement supprimés au bout de quelques jours.

Interfaces réseau
*******************

La propriété networks de Homestead.yaml configure les interfaces réseau pour votre environnement Homestead. Vous pouvez configurer autant d'interfaces que nécessaire :

.. code-block:: console

   networks:
    - type: "private_network"
      ip: "192.168.10.20"
      

Pour activer une interface pontée, configurez un paramètre de pont et changez le type de réseau en public_network :

.. code-block:: console

   networks:
    - type: "public_network"
      ip: "192.168.10.20"
      bridge: "en1: Wi-Fi (AirPort)"
      
      
Pour activer DHCP, supprimez simplement l'option ip de votre configuration :


.. code-block:: console

    networks:
    - type: "public_network"
      bridge: "en1: Wi-Fi (AirPort)"
      
      
      
Extension de Homestead
========================

Vous pouvez étendre Homestead en utilisant le script after.sh à la racine de votre répertoire Homestead. Dans ce fichier, vous pouvez ajouter toutes les commandes shell nécessaires pour configurer et personnaliser correctement votre machine virtuelle.

Lors de la personnalisation de Homestead, Ubuntu peut vous demander si vous souhaitez conserver la configuration d'origine d'un paquet ou l'écraser avec un nouveau fichier de configuration. Pour éviter cela, vous devez utiliser la commande suivante lors de l'installation des packages afin d'éviter d'écraser toute configuration précédemment écrite par Homestead :


.. code-block:: console

     sudo apt-get -y \
    -o Dpkg::Options::="--force-confdef" \
    -o Dpkg::Options::="--force-confold" \
    install your-package
    

Personnalisations utilisateur
*******************************

Lorsque vous utilisez Homestead dans un environnement d'équipe, vous souhaiterez peut-être modifier Homestead pour mieux l'adapter à votre style de développement personnel. Vous pouvez créer un fichier user-customizations.sh à la racine de votre répertoire Homestead (le même répertoire contenant votre Homestead.yaml). Dans ce fichier, vous pouvez faire n'importe quelle personnalisation que vous souhaitez ; cependant, la version de user-customizations.sh ne doit pas être contrôlée.

Mise à jour de Homestead
******************************

Avant de commencer à mettre à jour Homestead, assurez-vous d'avoir supprimé votre machine virtuelle actuelle en exécutant la commande suivante dans votre répertoire Homestead :

.. code-block:: console

    vagrant destroy
    
Ensuite, vous devez mettre à jour le code source de Homestead. Si vous avez cloné le dépôt, vous pouvez exécuter les commandes suivantes à l'emplacement où vous avez initialement cloné le dépôt :


.. code-block:: console

    git fetch
 
    git pull origin release
    


Ces commandes extraient le dernier code Homestead du référentiel GitHub, récupèrent les dernières balises, puis vérifient la dernière version étiquetée. Vous pouvez trouver la dernière version stable sur la page des versions de GitHub.

Si vous avez installé Homestead via le fichier composer.json de votre projet, vous devez vous assurer que votre fichier composer.json contient "laravel/homestead": "^11" et mettre à jour vos dépendances :

.. code-block:: console

    composer update
    
Ensuite, vous devez mettre à jour la boîte Vagrant en utilisant la commande de mise à jour de la boîte vagrant :

.. code-block:: console

   vagrant box update
   

Ensuite, vous devez exécuter la commande bash init.sh à partir du répertoire Homestead afin de mettre à jour certains fichiers de configuration supplémentaires. Il vous sera demandé si vous souhaitez écraser vos fichiers Homestead.yaml, after.sh et alias existants :

.. code-block:: console

   // Mac / Linux...
   bash init.sh
 
   // Windows...
   init.bat
   
   
Enfin, vous devrez régénérer votre box Homestead pour utiliser la dernière installation de Vagrant :

.. code-block:: console

   vagrant up
