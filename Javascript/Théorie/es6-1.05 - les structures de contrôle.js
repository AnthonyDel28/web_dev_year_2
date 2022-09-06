// @SeD es6-1.05: les structures de contrôle
/**
 * * Les itératives (boucles) :
 * 			while (condition) instruction;
 * 			do instruction; while (condition);
 * 			for (initialisation; condition; incrémentation) instruction;
 * 			for (clé in collection) instruction;
 * 			for (élément of collection) instruction;
 *
 * * Les alternatives :
 * 			if (condition) instr1; else instr2;
 * 			switch (élément){
 * 				case valeur1: intr11; ...; break;
 * 				case valeur2: intr21; ...; break;
 * 				default: instrX; ...;
 * 			}
 *
 * ! une seule instruction après while, for, if, else...
 * !		sauf si les instructions sont placées dans un bloc entre { et }
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */

"use strict";

let etudiant = {
  prenom: "John",
  nom: "Doe",
  age: 29,
};

let fruits = ["pommes", "poires", "cerises"];

// --------------------------------------------------------
// les itératives
// --------------------------------------------------------

console.log("------------ les boucles while");
let i = 1;
while (i < 100) {
  console.log("i:", i);
  i = i * 2;
}

console.log("------------ les boucles for");
for (let i = 1; i <= 5; i++) console.log("i:", i);

for (let i = 0; i < fruits.length; i++) console.log("fruits[" + i + "]:", fruits[i]);

console.log("------------ les boucles for in");
// idéales pour le parcours des attributs d'un objet
for (let cle in etudiant) console.log(cle, " : ", etudiant[cle]);

console.log("------------ les boucles for of");
// idéales pour le parcours d'un tableau
for (let element of fruits) console.log(element);

// --------------------------------------------------------
// les alternatives
// --------------------------------------------------------
console.log("------------ les tests if else");
if (etudiant.age < 18) console.log("étudiant mineur !");
else console.log("étudiant majeur !");

console.log("------------ les switch case");
//etudiant.prenom= "Patrick";
switch (etudiant.prenom) {
  case "Patrick":
    console.log("Salut Pépé !");
    break;
  case "Dominique":
    console.log("Bonjour Grand Maître !");
    break;
  default:
    console.log("Bonjour " + etudiant.prenom);
  //break;
}

// --------------------------------------------------------
// --------------------------------------------------------
