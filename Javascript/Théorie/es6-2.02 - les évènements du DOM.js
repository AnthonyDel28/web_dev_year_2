// @SeD es6-2.02: les évènements du DOM...
/**
 * * ajout et suppression d'écouteurs sur des éléments du DOM
 *
 *  objet.addEventListener("déclencheur", fonction)
 *			associe une fonction nommée ou anonyme
 *			qui sera exécutée lorsque le "déclencheur" est activé
 *
 *  objet.removeEventListener("déclencheur", fonction)
 *			supprime l'association d'une fonction nommée
 *			! ne fonctionne pas avec les fonctions anonymes
 *
 * 	quelques déclencheurs:
 * 		click, dblclick...
 * 		mouseover, mouseout, mousedown...
 * 		keyup, keydown...
 * 		focus, blur, change...
 * 		scroll, load, error...
 *
 * 	une fonction:
 * 		nommée est associée une seule fois (même en cas de répétitions)
 * 			et l'association peut être supprimée
 * 		anonyme peut être associée plusieurs fois
 *			! et ne peut être supprimée avec removeEventListener
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */
"use strict";

// --------------------------------------------------------
// variables pour faciliter l'accès aux éléments du DOM
// --------------------------------------------------------
let $divRouge = document.getElementById("divRouge");
let $divVert = document.getElementById("divVert");
let $txtNom = document.getElementById("txtNom");
let $chkGentil = document.getElementById("chkGentil");
let $btnSaluer = document.getElementById("btnSaluer");

// --------------------------------------------------------
// association d'évènement(s) aux éléments du DOM
// --------------------------------------------------------

// lorsque l'on clique dans le div
$divRouge.addEventListener("click", function () {
  console.log("Je clique sur le div rouge !");
});
$divRouge.addEventListener("click", function () {
  console.log("Je clique sur le div rouge !");
});
$divRouge.addEventListener("click", function () {
  console.log("Je clique sur le div rouge !");
});
// ! attention, 3 évènements sont associés et il est difficile de les supprimer

// lorsque le curseur entre dans la zone du div
$divVert.addEventListener("mouseover", function () {
  console.log("Je survole le div vert !");
});
// lorsque le curseur quitte la zone du div
$divVert.addEventListener("mouseout", function () {
  console.log("Je quitte le div vert !");
});

// lorsque l'on clique sur la case à cocher
$chkGentil.addEventListener("click", function () {
  console.log("Je clique sur une case à cocher !");
});

// chaque fois que l'on tape une lettre
$txtNom.addEventListener("keyup", function () {
  console.log($txtNom.value);
});
// lorsque l'on quitte la zone de saisie et que le texte a changé
$txtNom.addEventListener("change", function () {
  console.log("Le nouveau nom est " + $txtNom.value);
});

// lorsque l'on clique sur le bouton
$btnSaluer.addEventListener("click", saluer); // pas de parenthèse
$btnSaluer.addEventListener("click", saluer); // pas de répétition
$btnSaluer.addEventListener("click", saluer); //  pas de répétition
//$btnSaluer.removeEventListener("click", saluer); // suppression de l'évènement

function saluer() {
  if ($chkGentil.checked) {
    console.log("Bonjour " + $txtNom.value);
  } else {
    console.log("Casse-toi " + $txtNom.value);
  }
}

// --------------------------------------------------------
// --------------------------------------------------------
