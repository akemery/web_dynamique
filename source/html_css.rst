HTML, XHTML et CSS
------------------

Introduction
============

HTML (Hypertext Markup Language) et CSS (Cascading Style Sheets) sont deux des technologies de base pour la création de pages Web. HTML fournit la structure de la page, CSS la mise en page (visuelle et auditive), pour une variété d'appareils. Avec les graphiques et les scripts, HTML et CSS sont à la base de la création de pages Web et d'applications Web.


Qu'est-ce que le HTML ?
=======================

HTML est le langage utilisé pour décrire la structure des pages Web. HTML donne aux auteurs les moyens de :

    * Publiez des documents en ligne avec des titres, du texte, des tableaux, des listes, des photos, etc.
    * Récupérez des informations en ligne via des liens hypertextes, d'un simple clic.
    * Concevoir des formulaires pour effectuer des transactions avec des services à distance, à utiliser pour rechercher des informations, effectuer des réservations, commander des produits, etc.
    * Inclure des feuilles de calcul, des clips vidéo, des clips audio et d'autres applications directement dans leurs documents.
    
Avec HTML, les auteurs décrivent la structure des pages en utilisant le balisage (markup). Les éléments du language étiquettent les éléments de contenu tels que «paragraphe», «liste», «tableau», etc.

```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mr. Camel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
    }

    .container {
      line-height: 150%;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px;
      background-color: #e9e9e9;
    }

    .header h1 {
      color: #222222;
      font-size: 30px;
      font-family: 'Pacifico', cursive;
    }

    .header .social a {
      padding: 0 5px;
      color: #222222;
    }

    .left {
      float: left;
      width: 180px;
      margin: 0;
      padding: 1em;
    }

    .content {
      margin-left: 190px;
      border-left: 1px solid #d4d4d4;
      padding: 1em;
      overflow: hidden;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      font-family: sans-serif;
    }

    li a {
      display: block;
      color: #000;
      padding: 8px 16px;
      text-decoration: none;
    }

    li a.active {
      background-color: #84e4e2;
      color: white;
    }

    li a:hover:not(.active) {
      background-color: #29292a;
      color: white;
    }

    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      margin: 30px 0;
    }

    td,
    th {
      border: 1px solid #dddddd;
      padding: 8px;
    }

    tr:nth-child(1) {
      background-color: #84e4e2;
      color: white;
    }

    tr td i.fas {
      display: block;
      font-size: 35px;
      text-align: center;
    }

    .footer {
      padding: 55px 20px;
      background-color: #2e3550;
      color: white;
      text-align: center;
    }
  </style>
</head>

<body>
  <div class="container">
    <header class="header">
      <h1>Mr. Camel</h1>
      <div class="social">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
      </div>
    </header>
    <aside class="left">
      <img src="./assets/html/mr-camel.jpg" width="160px" />
      <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#career">Career</a></li>
        <li><a href="#contact">Contact</a></li>
        <li><a href="#about">About</a></li>
      </ul>
      <br><br>
      <p>"Do something important in life. I convert green grass to code."<br>- Mr Camel</p>
    </aside>
    <main class="content">
      <h2>About Me</h2>
      <p>I don't look like some handsome horse, but I am a real desert king. I can servive days without water.</p>
      <h2>My Career</h2>
      <p>I work as a web developer for a company that makes websites for camel businesses.</p>
      <hr><br>
      <h2>How Can I Help You?</h2>
      <table>
        <tr>
          <th>SKILL 1</th>
          <th>SKILL 2</th>
          <th>SKILL 3</th>
        </tr>
        <tr>
          <td><i class="fas fa-broom"></i></td>
          <td><i class="fas fa-archive"></i></td>
          <td><i class="fas fa-trailer"></i></td>
        </tr>
        <tr>
          <td>Cleaning kaktus in your backyard</td>
          <td>Storing some fat for you</td>
          <td>Taking you through the desert</td>
        </tr>
        <tr>
      </table>
      <form>
        <label>Email: <input type="text" name="email"></label><br>
        <label> Mobile: <input type="text" name="mobile"> </label><br>
        <textarea name="comments" rows="4">Enter your message</textarea><br>
        <input type="submit" value="Submit" /><br>
      </form>
    </main>
    <footer class="footer">&copy; Copyright Mr. Camel</footer>
  </div>
</body>

</html>

```

Qu'est-ce que XHTML ?
=====================

XHTML est une variante de HTML qui utilise la syntaxe de XML, le langage de balisage extensible. XHTML a tous les mêmes éléments (pour les paragraphes, etc.) que la variante HTML, mais la syntaxe est légèrement différente. Étant donné que XHTML est une application XML, vous pouvez utiliser d'autres outils XML (comme XSLT, un langage pour transformer le contenu XML).


Qu'est-ce que le CSS ?
======================

CSS est le langage utilisé pour décrire la présentation des pages Web, y compris les couleurs, la mise en page et les polices.
Il permet d'adapter la présentation à différents types d'appareils, tels que les grands écrans, les petits écrans ou les
imprimantes. CSS est indépendant du HTML et peut être utilisé avec n'importe quel langage de balisage basé sur XML. 
La séparation du HTML du CSS facilite la maintenance des sites, le partage des feuilles de style entre les pages et l'adaptation
des pages à différents environnements. C'est ce qu'on appelle la séparation de la structure (ou : du contenu) de la présentation.

Qu'est-ce que WebFonts ?
========================

WebFonts est une technologie qui permet aux utilisateurs d'utiliser des polices à la demande sur le Web sans nécessiter d'installation dans le système d'exploitation. Le W3C a de l'expérience dans les polices téléchargeables via HTML, CSS2 et SVG.
Jusqu'à récemment, les polices téléchargeables n'étaient pas courantes sur le Web en raison de l'absence d'un format de police
interopérable. L'effort de WebFonts prévoit de résoudre ce problème en créant un format de police ouvert et pris en charge par
l'industrie pour le Web (appelé « WOFF »).

Exemples
========

L'exemple très simple suivant d'une partie d'un document HTML illustre comment créer un lien dans un paragraphe. Lorsqu'il est rendu à l'écran (ou par un synthétiseur vocal), le texte du lien sera le « rapport final » ; lorsque quelqu'un active le lien, le navigateur récupère la ressource identifiée par « http://www.example.com/report » :

.. code-block:: html

    <p class="moreinfo">Pour plus d'information consultez le
    <a href="http://www.example.com/report">rapport final</a>.</p>


L'attribut class sur la balise de début du paragraphe ("<p>") peut être utilisé, entre autres, pour ajouter du style. Par exemple, pour mettre en italique le texte de tous les paragraphes avec une classe de « moreinfo », on pourrait écrire, en CSS :

.. code-block:: css

    p.moreinfo { font-style: italic }

En plaçant cette règle dans un fichier séparé, le style peut être partagé par plusieurs documents HTML.

Pour plus d'information visitez http://slaout.linux62.org/html_css/ et https://www.w3.org/Style/Examples/011/firstcss


