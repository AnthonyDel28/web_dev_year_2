// @SeD es6-1.07: les timers
/**
 *
 * * Les timers permettent l'exécution automatique de fonctions à des moments ou des intervalles prédéfinis
 * 			setTimeout(fonction, duree) exécutera 'fonction()' après 'duree' millisecondes
 * 			setInterval(fonction, duree) exécutera 'fonction()' tous les 'duree' millisecondes
 *		 	! fonction sans les parenthèses
 *
 * 			clearTimeout(timer1) annule l'exécution prévue de 'timer1'
 * 			clearInterval(timer1) annule toutes les exécutions prévues de 'timer1'
 *		 	! Il n'est possible de stopper l'exécution automatique d'une fonction que si le timer est stocké dans une variable
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */

"use strict";

function saluer() {
  console.log("Bonjour !");
}
function quitter() {
  console.log("Au revoir !");
}

function afficherHeure() {
  let maintenant = new Date();
  console.log(maintenant);
}

// --------------------------------------------------------
// Timeout : exécution une seule fois après un délai
// --------------------------------------------------------
/*
let timer0 = setTimeout(quitter, 2000); // exécution de quitter() dans 2 secondes
clearTimeout(timer0);

let timer1 = setTimeout(saluer, 4000); // exécution de saluer() dans 4 secondes
let timer2 = setTimeout(quitter, 5000); // exécution de quitter() dans 5 secondes
*/

// --------------------------------------------------------
// Interval : exécution plusieur fois
// --------------------------------------------------------

let timer4 = setInterval(afficherHeure, 1000); // exécution de afficherHeure() toutes les secondes

setTimeout(function () {
  clearInterval(timer4);
}, 15000);

// --------------------------------------------------------
// --------------------------------------------------------
