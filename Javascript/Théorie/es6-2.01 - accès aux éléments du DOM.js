// @SeD es6-2.01: accès aux éléments du DOM...
/**
 * ! le code javascript doit être inclus dans le html pour pouvoir le manipuler
 *    soit dans une balise <script> code javascript... </script>
 *    soit dans un fichier externe <script src="fichier.js"></script>
 *
 * Plusieurs fonctions permettent de référencer les éléments du DOM :
 *
 *    document.getElementById("idElement")            => 1 élément
 *    document.getElementsByName("name")              => 1 tableau d'éléments
 *    document.getElementsByTagName("tag")            => 1 tableau d'éléments
 *    document.getElementsByClassName("className")    => 1 tableau d'éléments
 *
 *    document.querySelector("selector")              => 1 élément
 *    document.querySelectorAll("selector")           => 1 tableau d'éléments
 *
 * * grâce à la référence, on peut manipuler les objets :
 *    lire ou modifier leurs propriétés
 *    les supprimer, les copier, ajouter des éléments enfant...
 *    ...
 *
 * * le sélecteur de querySelector utilise la même syntaxe que les sélecteurs en CSS
 *    #id, .class, tag, #id>tag ...
 *
 * ! l'id d'un élément d'une page html est toujours unique
 *
 * * quelques propriétés :
 *    .value représente l'attribut value d'une balise (input...)
 *    .innerHTML représente le contenu d'un container (div, p, h1... )
 *    .style regroupe les attributs css
 *    ...
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */
"use strict";

// --------------------------------------------------------
// accès aux éléments du DOM
// --------------------------------------------------------
console.log("------------ document.getElementById :");
let $nom = document.getElementById("txtNom"); // utilisation de variables pour simplifier le code
console.log("$nom.value :>> ", $nom.value);
console.log("$nom.style.backgroundColor :>> ", $nom.style.backgroundColor);

console.log("------------ document.getElementsByName :");
let $sexes = document.getElementsByName("sexe"); // renvoie un tableau
console.log("$sexes :>> ", $sexes);
for (const sexe of $sexes) {
  console.log("sexe.value :>> ", sexe.value);
}

console.log("------------ document.getElementsByTagName :");
let $options = document.getElementsByTagName("option"); // renvoie un tableau
console.log("$options :>> ", $options);
for (const opt of $options) {
  console.log("opt.value :>> ", opt.value);
  console.log("opt.innerHTML :>> ", opt.innerHTML);
}
// ! value correspond à la propriété value
// ! innerHTML représente le contenu entre les balises ouvrantes/fermantes

console.log("------------ document.querySelector :");
let $gentil = document.querySelector("#chkGentil");
console.log("$gentil.checked :>> ", $gentil.checked);

let $opt1 = document.querySelector("option"); // renvoie le 1er élément
console.log("$opt1.value :>> ", $opt1.value);

// --------------------------------------------------------
// --------------------------------------------------------
