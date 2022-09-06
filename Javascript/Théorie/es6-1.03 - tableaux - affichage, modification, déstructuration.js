// @SeD es6-1.03: les tableaux : affichage, modification, déstructuration...
/**
 * Les tableaux sont des objets Array
 *
 * * les tableaux sont dynamiques (leur taille n'est pas figée)
 * 			push, pop, shift, unshift, splice...
 *
 * * l'opérateur ... peut être utilisé comme :
 *			opérateur de déstructuration: SPREAD operator
 *			opérateur de reste: REST operator
 *
 * ! les tableaux associatifs n'existent pas en js et seront émulés par des objets
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */

"use strict";

// --------------------------------------------------------
// déclaration et affichage des tableaux
// --------------------------------------------------------
console.log("------------ Affichage des tableaux :");

let filles = ["Marie", "Sophie", "Clara"];
let garcons = ["Christian", "Jean"];

// affichage d'un tableau
console.log("filles:", filles); // => [ 'Marie', 'Sophie', 'Clara' ]
console.log("filles.toString():", filles.toString()); // => Marie,Sophie,Clara

console.log("-- boucle for classique");
for (let i = 0; i < filles.length; i++) {
  console.log(i, filles[i]);
}

console.log("-- boucle for in");
for (const key in filles) {
  console.log(key, filles[key]);
}

console.log("-- boucle for of");
for (const elem of filles) {
  console.log(elem);
}

// --------------------------------------------------------
// ajouts et suppressions d'éléments
// --------------------------------------------------------
console.log("------------ tableaux dynamiques");
filles[5] = "Erika"; // => 3 et 4 sont vides
console.log("filles après filles[5] = 'Erika':", filles);

filles.push("Nadia"); // => ajout à la fin
console.log("filles après filles.push('Nadia'):", filles);

// push ajoute à la fin et renvoie la taille du nouveau tableau
// pop renvoie et supprime le dernier élément
// unshift ajoute au début du tableau et renvoie la nouvelle taille
// shift renvoie et supprime le premier élément du tableau
// splice retire un ou plusieurs éléments à la position indiquée
let taille = garcons.push("Léon"); // taille <- 3
let intru = garcons.pop(); // intru <- 'Léon'

filles.splice(3, 2);
console.log("filles après filles.splice(3, 2):", filles);

// --------------------------------------------------------
// déstructuration (SPREAD)
// --------------------------------------------------------
console.log("------------ déstructuration(spread) et assemblage");
// spread = décomposition d'un array en une liste d'éléments séparés
console.log("...filles :", ...filles); // => Marie Sophie Clara Erika Nadia

let mixtes1 = [filles, garcons]; // ! tableau reprenant 2 tableaux
console.log("mixtes1= [filles, garcons]:", mixtes1);

let mixtes2 = [...filles, ...garcons]; // un seul tableau - équivalent de filles.concat(garcons)
console.log("mixtes2= [...filles, ...garcons]:", mixtes2);

// --------------------------------------------------------
// initialisation de variables multiples
// --------------------------------------------------------
console.log("------------ initialisation de variables multiples");

let a, b, c, d, e;

[a, b] = [10, 20]; // a<-10, b<-20
console.log("[a, b]:", [a, b]);
console.log("a:", a);

[c, d, e] = [a + 1, b + 2, 0];
console.log("[c, d, e] = [a + 1, b + 2, 0]:", [c, d, e]);

[a, b] = [b, a];
console.log("[a, b] après [a, b] = [b, a]:", [a, b]);

let fille1, fille2, resteFilles;
[fille1, fille2, ...resteFilles] = filles; // opérateur REST
console.log("[fille1, fille2, ...resteFilles]:", [fille1, fille2, resteFilles]);

// --------------------------------------------------------
// --------------------------------------------------------
