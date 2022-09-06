// @SeD es6-1.01: variables, opérateurs...
/**
 * Les variables sont typées dynamiquement
 * Les différents types: number, string, boolean, object, undefined
 * ! Les variables doivent toujours être déclarées avec const ou let
 *    (voir es6-02 - la portée des variables)
 *
 * Les opérateurs:
 *    arithmétiques: * / + - % **
 *    d'incrémentation: ++ --
 *    logiques: == === != !== < <= > >= && ||
 *    ternaire: ?:
 *    binaires: & | ^ ~ << >> >>>
 *    unaires: delete typeof void
 *    relationnels: instanceof in
 *    d'assignation: = += -= *= /= %= <<= >>= &= |= ^=
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */

// --------------------------------------------------------
// les types : number, string, boolean, object, undefined
// --------------------------------------------------------
console.log("------------ Les types en ES6 :");
console.log("  typeof 25:", typeof 25); // => number
console.log("  typeof 'hello':", typeof "hello"); // => string
console.log("  typeof true:", typeof true); // => boolean
console.log("  typeof {nom:'Leroy'}:", typeof {nom: "Leroy"}); // => object
let age;
console.log("  let age; => typeof age:", typeof age); // => undefined
//console.log("  typeof x:", typeof x);
// => erreur car x n'est pas déclaré

// --------------------------------------------------------
// type undefined, valeurs null, NaN, Infinity...
// --------------------------------------------------------
console.log("------------ Type undefined et valeurs spéciales :");

// console.log("x:", x);
// => erreur car x n'est pas déclaré

let y;
console.log("  y:" + typeof y + " = " + y); // => undefined car y pas défini

y = 39;
console.log("  y:" + typeof y + " = " + y); // => 39 de type number

y = null;
console.log("  y:" + typeof y + " = " + y); // => null de type object

y = 3 * "a";
console.log("  y:" + typeof y + " = " + y); // => NaN de type number

y = 12 / 0;
console.log("  y:" + typeof y + " = " + y); // => Infinity

// --------------------------------------------------------
// formats de nombres et valeurs spéciales
// --------------------------------------------------------
console.log("------------ Formats de nombres et valeurs spéciales :");

console.log("  0b11001 (binaire):", 0b11001); // binaire
console.log("  0x31F2 (hexadécimal):", 0x31f2); // hexadécimal

console.log("  0777 (octal):", 0777); // octal
console.log("  0803 (!!!!!):", 0803); // ! décimal sauf en mode strict

console.log("  1.2e3:", 1.2e3); // => 1200

console.log("  15 * 'a':", 15 * "a"); // => NaN
console.log("  15/0:", 15 / 0); // => Infinity

// --------------------------------------------------------
// les chaînes de caractères
// --------------------------------------------------------
// bornées par "" ou ''
// caractère d"échappement : \
// opérateur de concaténation : +
// `` permet l'évaluation des variables ${} dans la chaîne
// ! transtypage automatique de texte <-> nombre

console.log("------------ Les chaînes de caractères");

let qte = 25;
console.log("  j'ai acheté " + qte + " pommes");
console.log(`  j'ai acheté ${qte} pommes`);

// transtypage de nombre en texte
console.log("  '25' + 2:", "25" + 2);
console.log("  25 + '2':", 25 + "2");
console.log("  25 + 'a':", 25 + "a");

// transtypage de texte en nombre
console.log("  25 * '2':", 25 * "2");
console.log("  '25' * 2:", "25" * 2);
console.log("  25 * 'a':", 25 * "a");

// --------------------------------------------------------
// les opérateurs
// --------------------------------------------------------
console.log("------------ Quelques opérateurs");

console.log("  3 ** 2:", 3 ** 2); // exposant
console.log("  14 / 5:", 14 / 5); // division décimale
console.log("  14 % 5:", 14 % 5); // modulo (reste de la division entière)

console.log("  3 == '3':", 3 == "3"); // transtypage puis comparaison
console.log("  3 === '3':", 3 === "3"); // types différents => faux

// --------------------------------------------------------
// --------------------------------------------------------
