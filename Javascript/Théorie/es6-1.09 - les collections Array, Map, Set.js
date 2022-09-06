// @SeD es6-1.09: les collections Array, Map, Set...
/**
 * * Les tableaux (Array), les ensembles (Set) et les cartes (Map) sont des objets
 *
 * ! les tableaux associatifs n'existent pas en js et seront émulés par des objets
 *
 * * Un tableau ou Array est une liste de valeurs ordonnées (index)
 *    Les valeurs peuvent être de n'importe quel type (entier, objets...)
 *
 * * Un ensemble ou Set est une liste de valeurs non ordonnées et uniques
 *    Les valeurs peuvent être de n'importe quel type (entier, objet...)
 *    Il ne peut y avoir de répétition
 *    ! il n'y a pas d'ordre défini
 *
 * * Une carte ou Map est une liste ordonnée de paire clé/valeur
 *    Les valeurs peuvent être de n'importe quel type (entier, objets...)
 *    Les clés doivent être uniques et peuvent être de n'importe quel type
 *        (contrairement aux objets dont l'attribut est toujours un String)
 *
 * * quelques outils pour manipuler les tableaux (Array) :
 *    ! méthodes qui modifie le tableau source
 *        ! push, pop, fill, sort, reverse, forEach...
 *    * méthode qui renvoie une copie modifiée sans toucher à la source
 *        map, concat, filter, some...
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */
"use strict";

// --------------------------------------------------------
// construction, modification d'un tableau Array
// --------------------------------------------------------
console.log("-----------------Array--------------------");

let a11 = new Array(); // création d'un tableau vide
let a12 = []; // création d'un tableau vide
console.log("a11 :>> ", a11);
console.log("a12 :>> ", a12);

let a21 = new Array(10); // ! création d'un tableau de 10 positions
let a22 = [];
a22.length = 10; // idem, création d'un tableau de 10 positions
console.log("a21 :>> ", a21);
console.log("a22 :>> ", a22);

let a31 = new Array(10, 20, 30); // création d'un tableau de 3 éléments
let a32 = [10, 20, 30]; // création d'un tableau de 3 éléments
console.log("a31 :>> ", a31);
console.log("a32 :>> ", a32);

a32[10] = "Hello"; // ! les positions 3..9 sont créées mais restent vides
a32.push("world"); // ajoute un élément à la fin du tableau
console.log("a32 :>> ", a32);

// --------------------------------------------------------
// construction, modification d'un Set
// --------------------------------------------------------
console.log("------------------Set---------------------");

let s11 = new Set(); // création d'un ensemble vide
let s21 = new Set([1, 2, 5, 9]); // création d'un ensemble de 4 éléments
console.log("s11 :>> ", s11);
console.log("s21 :>> ", s21);

s21.add(4);
console.log("s21 :>> ", s21); // ! pas d'ordre
console.log("s21.has(3) :>> ", s21.has(3)); // => false

s21.add(4); // pas d'ajout car déjà existant
s21.delete(2);
console.log("s21 :>> ", s21);

// --------------------------------------------------------
// construction, modification d'une Map
// --------------------------------------------------------
console.log("------------------Map---------------------");

let m11 = new Map(); // création d'une carte vide
let m21 = new Map([
  [1, "un"],
  [2, "deux"],
  ["three", "trois"],
]); // création d'une carte de 3 éléments
console.log("m11 :>> ", m11);
console.log("m21 :>> ", m21);
console.log("m21.get(2) :>> ", m21.get(2));
console.log("m21.get('three') :>> ", m21.get("three"));
m21.clear();
console.log("m21 :>> ", m21);

// --------------------------------------------------------
// quelques méthodes de l'objet Array
// --------------------------------------------------------

// ! certaines méthodes modifient le tableau : push, pop, fill, sort, reverse, forEach...
// * les fonctions passées en argument peuvent être des fonctions classiques ou fléchées
console.log("---------qq méthodes de Array-------------");

const resultats = [7, 12, 15, 4, 19];
console.log("resultats :", resultats);

//---------------------------------------------------------
// * méthodes qui renvoient un nouveau tableau
//---------------------------------------------------------
console.log("+++ pas de modification du tableau original");

// renvoie un tableau reprenant uniquement les éléments répondant à la condition donnée par la fonction
console.log(
  "resultats.filter( (x) => x >= 10 ) :",
  resultats.filter((x) => x >= 10)
);

// renvoie un nouveau tableau dont chaque élément correspond à la transformation indiquée dans la fonction
console.log(
  "resultats.map( (a) => a / 2 ) :",
  resultats.map((a) => a / 2)
);

// renvoie UN résultat qui est l'accumulation de toute les valeurs suivant la fonction passée
// total est l'accumulateur et vaut 0 au départ
// element désigne successivement chacun des éléments du tableau
console.log(
  "resultats.reduce( (total, element) => total += element ) :",
  resultats.reduce((total, element) => (total += element))
);

//---------------------------------------------------------
// ! méthodes qui modifient le tableau original
//---------------------------------------------------------
console.log("!!! modification du tableau original !!!");

// push : ajoute un élément et retourne la nouvelle taille
let taille = resultats.push(3);
console.log("resultats :", resultats, "taille : ", taille);

// pop : retire un élément et retourne l'élément supprimé
let dernierTest = resultats.pop();
console.log("resultats :", resultats, "dernierTest : ", dernierTest);

// inverse le tableau
resultats.reverse();
console.log("resultats.reverse() :", resultats);

// ! tri par ordre alphabétique
resultats.sort();
console.log("resultats.sort() :", resultats);

// * tri utilisant une fonction de comparaison
// la fonction doit renvoyer : une valeur négative si a < b, 0 si a==b, une valeur positive si a > b
resultats.sort((a, b) => b < a); //si b < a, on trie
console.log("resultats.sort( (a,b) => b < a ) :", resultats);

//---------------------------------------------------------
// * quelques exemples plus avancés
//---------------------------------------------------------
console.log("---------exemples plus avancés------------");

let suite = Array(10) //crée un tableau de 10 éléments vides
  .fill(0) //remplit le tableau de 0
  .map((val, i) => i + 1); //renvoie un tableau dont chaque élément est remplacé par son indice + 1
console.log("suite :", suite);

let fibo1 = Array(10) //crée un tableau de 10 éléments vides
  .fill(1) //remplit le tableau de 1
  .map((val, i, array) => (i < 2 ? val : (array[i] = array[i - 2] + array[i - 1])));
console.log("fibo1 :", fibo1);

let fibo2 = [...Array(10)] //crée un tableau de 10 éléments vides, le déstructure et le recompose pour obtenir un tableau de 10 éléments "undefined"
  .reduce((acc, val, i) => acc.concat(i < 2 ? 1 : acc[i - 2] + acc[i - 1]), []);
console.log("fibo2 :", fibo2);

let alea = [...Array(10)].map((x) => Math.floor(Math.random() * 11)); //renvoie un tableau dont chaque élément est une valeur entière aléatoire entre 0 et 10
console.log("alea :", alea);

//---------------------------------------------------------
//---------------------------------------------------------
