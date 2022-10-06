WebAssembly ou WASM
-------------------


WebAssembly est un nouveau type de code qui peut être exécuté dans les navigateurs Web modernes. il s'agit d'un langage de bas niveau de type assembleur avec un format binaire compact qui s'exécute avec des performances quasi natives et fournit des langages tels que C/C++, C# et Rust avec une cible de compilation afin qu'ils puissent s'exécuter sur le Web. Il est également conçu pour fonctionner avec JavaScript, permettant aux deux de fonctionner ensemble.

WebAssembly a d'énormes implications pour les plate-forme Web. il fournit un moyen d'exécuter du code écrit dans plusieurs langues sur le Web à une vitesse quasi native, avec des applications clientes s'exécutant sur le Web qui n'auraient pas pu le faire auparavant.

WebAssembly est conçu pour compléter et s'exécuter avec JavaScript — en utilisant les API JavaScript WebAssembly, vous pouvez charger des modules WebAssembly dans une application JavaScript et partager des fonctionnalités entre les deux. Cela vous permet de profiter des performances et de la puissance de WebAssembly ainsi que de l'expressivité et de la flexibilité de JavaScript dans les mêmes applications, même si vous ne savez pas comment écrire du code WebAssembly.

Compilation d'un nouveau module C/C++ vers WebAssembly
======================================================

Lorsque vous avez écrit un nouveau module de code dans un langage comme C/C++, vous pouvez le compiler dans WebAssembly à l'aide d'un outil comme Emscripten. 

Configuration de l'environnement Emscripten
...........................................

Tout d'abord, configurons l'environnement de développement requis.

Obtenez le SDK Emscripten en suivant ces instructions : https://emscripten.org/docs/getting_started/downloads.html

Compiler un exemple
...................

Une fois l'environnement configuré, voyons comment l'utiliser pour compiler un exemple C vers Emscripten. Un certain nombre d'options sont disponibles lors de la compilation avec Emscripten, mais les deux principaux scénarios que nous couvrirons sont :

     * Compilation vers wasm et création du code HTML pour exécuter notre code, ainsi que tout le code JavaScript nécessaire pour exécuter le wasm dans l'environnement Web.
     * Compilation en wasm et création du JavaScript.

Nous examinerons les deux ci-dessous.

Création HTML et JavaScript
...........................

C'est le cas le plus simple que nous examinerons, dans lequel vous obtenez emscripten pour générer tout ce dont vous avez besoin pour exécuter votre code, en tant que WebAssembly, dans le navigateur.

     Nous avons d'abord besoin d'un exemple à compiler. Prenez une copie de l'exemple C simple suivant et enregistrez-le dans un fichier appelé hello.c dans un nouveau répertoire sur votre disque local :
     
.. code-block:: C

   #include <stdio.h>

   int main() {
       printf("Hello World\n");
   }
   
Maintenant, à l'aide de la fenêtre de terminal que vous avez utilisée pour entrer dans l'environnement du compilateur Emscripten, accédez au même répertoire que votre fichier hello.c et exécutez la commande suivante :

.. code-block:: bash

    emcc hello.c -s WASM=1 -o hello.html
    
    
Les options que nous avons transmises avec la commande sont les suivantes :

    * -s WASM=1 — Spécifie que nous voulons une sortie wasm. Si nous ne le spécifions pas, Emscripten affichera simplement asm.js, comme il le fait par défaut.
    * -o hello.html — Spécifie que nous voulons qu'Emscripten génère une page HTML pour exécuter notre code (et un nom de fichier à utiliser), ainsi que le module wasm et le code JavaScript "glue" pour compiler et instancier le wasm afin qu'il peut être utilisé dans l'environnement Web.

À ce stade dans votre répertoire source, vous devriez avoir :

     * Le code binaire du module wasm (hello.wasm)
     * Un fichier JavaScript contenant du code de collage à traduire entre les fonctions C natives et JavaScript/wasm (hello.js)
     * Un fichier HTML pour charger, compiler et instancier votre code wasm et afficher sa sortie dans le navigateur (hello.html)
     

Exécuter votre exemple

Il ne vous reste plus qu'à charger le hello.html résultant dans un navigateur prenant en charge WebAssembly.
