// @SeD es6-2.03: contrôle des évènements du DOM...
/**
 * * Propagation d'un évènement:
 *
 * 		bubble mode (default) de l'intérieur vers l'extérieur
 * 			.addEventListener("event", action)
 * 			.addEventListener("event", action, false)
 *
 * 		capture mode de l'extérieur vers l'intérieur
 * 			.addEventListener("event", action, true)
 *
 * * Arrêt de la propagation:
 *		event.stopPropagation()
 *
 * * Prévention de l'exécution normale du composant
 * 		event.preventDefault()
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */
"use strict";

// --------------------------------------------------------
// variables pour faciliter l'accès aux éléments du DOM
// --------------------------------------------------------
let $div1_R = document.getElementById("div1-R");
let $div1_O = document.getElementById("div1-O");
let $div1_V = document.getElementById("div1-V");
let $div2_V = document.getElementById("div2-V");
let $div2_O = document.getElementById("div2-O");
let $div2_R = document.getElementById("div2-R");

let $div3_R = document.getElementById("div3-R");
let $div3_O = document.getElementById("div3-O");
let $div3_V = document.getElementById("div3-V");

let $chk1 = document.getElementById("chk1");
let $chk2 = document.getElementById("chk2");

// --------------------------------------------------------
// modes de propagation : bubble ou capture
// --------------------------------------------------------

// bubble mode
$div1_R.addEventListener("click", function () {
  console.log("click bubble rouge");
});
$div1_O.addEventListener("click", function () {
  console.log("click bubble orange");
});
$div1_V.addEventListener("click", function () {
  console.log("click bubble vert");
});

// capture mode
$div2_V.addEventListener(
  "click",
  function () {
    console.log("click capture vert");
  },
  true
);
$div2_O.addEventListener(
  "click",
  function () {
    console.log("click capture orange");
  },
  true
);
$div2_R.addEventListener(
  "click",
  function () {
    console.log("click capture rouge");
  },
  true
);

// --------------------------------------------------------
// arrêt de la propagation
// --------------------------------------------------------

$div3_R.addEventListener("click", function () {
  event.stopPropagation();
  console.log("click bubble rouge stoppé");
});
$div3_O.addEventListener("click", function () {
  event.stopPropagation();
  console.log("click bubble orange stoppé");
});
$div3_V.addEventListener("click", function () {
  event.stopPropagation();
  console.log("click bubble vert stoppé");
});

// --------------------------------------------------------
// empêcher l'exécution normale
// --------------------------------------------------------

$chk1.addEventListener("click", function () {
  console.log("clic sur la 1ère case à cocher");
});

$chk2.addEventListener("click", function () {
  event.preventDefault();
  console.log("clic sur la 2ème case à cocher");
});

// --------------------------------------------------------
// --------------------------------------------------------
