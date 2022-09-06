// @SeD es6-1.04: les objets js et objets JSON
/**
 * * Les objets sont un ensemble {} de paires "attribut(clé)" : "valeur"
 * 			le nom de l'attribut doit être entre guillemets
 *			les valeurs peuvent être de n'importe quel type :
 *					numérique, texte, objet et même des fonctions
 *			l'accès à un attribut peut se faire de 2 manières:
 *					nomDeLObjet.nomDeLAttribut
 *					nomDeLObjet["nomDeLAttribut"]
 *
 * * 2 types d'objet :
 * 			les objets classiques du javascript
 * 			les objets de type JSON (JavaScript Object Notation)
 *						qui ne peuvent avoir d'attributs de type function
 *						qui sont utilisés dans de nombreux systèmes pour l'échange d'informations
 *
 * * les objets sont dynamiques : il est possible d'ajouter des attributs
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */
"use strict";

// --------------------------------------------------------
// déclaration, manipulation et affichage d'un objet
// --------------------------------------------------------

console.log("------------ les objets javascript");
// * dans un objet, les valeurs peuvent être de n'importe quel type (même une fonction)
let objetPers = {
  prenom: "John",
  nom: "Doe",
  saluer: function () {
    console.log(`bonjour, je suis ${this.nom}, ${this.prenom}.`);
  },
};
console.log("objetPers:", objetPers);
console.log('objetPers["prenom"]:', objetPers["prenom"]); // le nom de la clé (key) doit être entre guillemets
console.log("objetPers.prenom:", objetPers.prenom);
objetPers.saluer();

console.log("Object.keys(objetPers):", Object.keys(objetPers)); //Object.keys() permet d'obtenir toutes les clés de l'objet
console.log("Object.values(objetPers):", Object.values(objetPers)); //Object.values() permet d'obtenir toutes les valeurs de l'objet

console.log("------------ parcours d'un objet");
for (let key in objetPers) {
  console.log("key :", key, "\tvalue :", objetPers[key]);
}

// --------------------------------------------------------
// modification d'un objet
// --------------------------------------------------------

console.log("------------ modification d'un objet");
// modification des valeus
objetPers.prenom = "Jane";
console.log("objetPers :", objetPers);

// ajout d'un nouvel attribut
objetPers.age = 26;
console.log("objetPers :", objetPers);

// --------------------------------------------------------
// les objets JSON
// --------------------------------------------------------

console.log("------------ les objets JSON");
// * tout à fait équivalents aux objets ci-dessus sauf que :
// * dans un objet JSON les valeurs peuvent être des strings, des nombres, des arrays, des objets, des booléens ou null
// ! mais pas des fonctions

let jsonPers = {
  prenom: "John",
  nom: "Doe",
};

console.log("jsonPers:", jsonPers);
console.log("Object.keys(jsonPers):", Object.keys(jsonPers));
console.log("Object.values(jsonPers):", Object.values(jsonPers));

// --------------------------------------------------------
// --------------------------------------------------------
