// @SeD es6-1.02: la portée des variables...
/**
 * * Les variables doivent toujours être déclarées avec const ou let
 * !		ne plus utiliser var
 * * toujours utiliser le mode strict "use strict";
 *
 * ! pas de déclaration et pas d'utilisation du mode strict => variable GLOBALE
 * * "use strict"; => obligation de déclarer les variables
 *
 * var => déclaration locale dans une fonction
 * !	 => déclaration GLOBALE dans les autres blocs (if, while...)
 * !	 => sensible au hoisting (la déclaration se trouve après l'utilisation !)
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */

// "use strict"; // * désactivé à des fins de démonstration

// --------------------------------------------------------
// variables déclarées dans des blocs de type function
// --------------------------------------------------------

function initVar() {
  a1 = 11; // ! déclaration GLOBALE !!!
  var b1 = 21; // déclaration locale
  let c1 = 31; // déclaration locale
}

initVar();
console.log("a1 :", a1); // ! ne devrait pas être accessible
// console.log("b1 :", b1);  // car b1 n'est valide que dans initVar()
// console.log("c1 :", c1);  // car c1 n'est valide que dans initVar()

// --------------------------------------------------------
// variables déclarées dans des blocs autres que function
// --------------------------------------------------------

if (1) {
  a2 = 12; // ! déclaration GLOBALE !!!
  var b2 = 22; // ! déclaration GLOBALE !!!
  let c2 = 32; // déclaration locale
}

console.log("a2 :", a2); // ! ne devrait pas être accessible
console.log("b2 :", b2); // ! ne devrait pas être accessible
// console.log("c2 :", c2);  // car c2 n'est valide que dans initVar()

// --------------------------------------------------------
// hoisting ou hissage
// --------------------------------------------------------
console.log("------------ hoisting :");

console.log("v1:", v1); // ! => undefined car déclaré plus bas
var v1 = 10;
console.log("var v1:", v1); // => 10

//console.log("v2:", v2); // * => erreur car v2 pas encore déclarée
let v2 = 20;
console.log("let v2:", v2); // => 20

// * remarque: le hoisting pour les fonctions nommées est normal
saluer();
function saluer() {
  console.log("Hello");
}

// --------------------------------------------------------
// constantes
// --------------------------------------------------------
console.log("------------ constantes :");

const PI = 3.14;
//PI = 3.1416;   // ! erreur car PI est une valeur constante

const tab = [1, 2, 3];
console.log("tab :", tab);
tab[0] = 11; // ok car on modifie le contenu de tab sans recréer le tableau
console.log("tab après modification de tab[0] :", tab);
tab.push(4); // ok car on modifie le contenu de tab sans recréer le tableau
console.log("tab après push(4) :", tab);

// tab = [3, 2, 1];  // ! erreur car l'adresse de tab est constante
// tab = tab.concat([6, 7, 8]);  // ! erreur car l'adresse de tab est constante

// --------------------------------------------------------
// --------------------------------------------------------
