// @SeD es6-2.04 : modification de la structure du DOM...
/**
 * * Références relatives à des éléments du DOM :
 *  ! Attention:
 *    Node représente n'importe quel type de noeud
 *    Element est un noeud spécialisé : <p> <div>
 *    Text est un noeud spécialisé : le texte dans un div
 *    Document est un noeud spécialisé
 *    ...
 *
 *    $parent.children    => tableau de tous les noeuds enfants de type Element
 *    $parent.childNodes  => tableau de tous les noeuds enfants de tout type
 *    $parent.firstChild  => premier noeud enfant
 *    $parent.lastChild   => dernier noeud enfant
 *    $el.parentElement   => le noeud parent (Element)
 *    $el.parentNode      => le noeud parent (Element ou Document)
 *    $el.previousElementSibling => le noeud précédant
 *    $el.nextElementSibling     => le noeud suivant
 *    ...
 *
 * * Création de nouveaux éléments :
 *    document.createElement("type")
 *    document.createTextNode(text)
 *    ...
 *  ! l'élément est créé mais doit être ensuite ajouté dans le DOM
 *
 * * Ajout d'éléments dans le DOM :
 *    $parent.appendChild($elAj) => ajoute $elAj à la fin des enfants de $parent
 *    $parent.insertBefore($elAj, $elRef) => insère $elAj avant $elRef
 *    ...
 *  ! ajouter un élément déjà existant déplace l'élément à la nouvelle position
 *
 * * Suppression d'éléments du DOM :
 *    $elem.remove()             => supprime $elem
 *    $parent.removeChild($elem) => supprime $elem
 *    ...
 *
 * * Gestion des attributs des éléments du DOM :
 *    qq attributs classiques:
 *      $el.innerHTML  => contenu entre balises ouvrantes/fermantes
 *      $el.value      => attribut value dans une balise
 *      $el.checked    => état d'une case à cocher, d'un bouton radio...
 *      ...
 *
 *   gestion des attributs personnalisés:
 *      $el.setAttribute("attr","valeur") => ajoute un nouvel attribut à $el
 *      $el.removeAttribute("attr")       => supprime l'attribut "attr" de $el
 *      $el.getAttribute("attr")          => récupère la valeur de l'attribut
 *
 *     qq attributs de style:
 *      $el.style.display  => valeur "block", "none", ""...
 *      $el.style.color, $el.style.border, $el.style.background...
 *      ...
 *
 *    gestion des classes:
 *      $el.classList.add("une-classe")    => ajoute la classe "une-classe" à l'élement $el
 *      $el.classList.remove("une-classe") => supprime la classe "une-classe" à l'élement $el
 *      $el.classList.toggle("une-classe") => si la classe existe elle est supprimée sinon elle est ajoutée
 *
 * * voir la documentation officielle sur mozilla.org pour plus d'informations
 */
"use strict";

//---------------------------------------------------------
// * ajout, suppression d'éléments du DOM
//---------------------------------------------------------

// désignation d'un objet du DOM
let $maison = document.getElementById("divMaison");
let tabPieces = [];

// création et ajout d'un nouvel objet à la fin d'un container
console.log("// création et ajout d'un nouvel objet à la fin d'un container : ");
let $salon = document.createElement("div"); //création
$salon.innerHTML = "salon"; //modification d'une propriété
$maison.appendChild($salon); // ajout à la fin du 'divMaison'
//affichage
tabPieces = []; // raz du tableau des pièces et reconstruction
for (const piece of $maison.childNodes) tabPieces.push(piece.textContent);
console.log("maison ", tabPieces); // maison: salon

// création et ajout d'un nouvel objet à la fin d'un container
console.log("// création et ajout d'un nouvel objet à la fin d'un container : ");
let $cuisine = document.createElement("div"); //création
$cuisine.innerHTML = "cuisine"; //modification d'une propriété
$maison.appendChild($cuisine); // ajout à la fin du 'divMaison'
//affichage
tabPieces = []; // raz du tableau des pièces et reconstruction
for (const piece of $maison.childNodes) tabPieces.push(piece.textContent);
console.log("maison ", tabPieces); // maison: salon + cuisine

// création et ajout d'un nouvel objet avant un autre
console.log("// création et ajout d'un nouvel objet avant un autre : ");
let $salleAManger = document.createElement("div"); //création
$salleAManger.innerHTML = "salle à manger"; //modification d'une propriété
$maison.insertBefore($salleAManger, $cuisine); // ajout avant le div 'Cuisine'
//affichage
tabPieces = []; // raz du tableau des pièces et reconstruction
for (const piece of $maison.childNodes) tabPieces.push(piece.textContent);
console.log("maison ", tabPieces); // maison: salon + salleAManger + cuisine

// création et ajout d'un nouvel objet au début d'un container
console.log("// création et ajout d'un nouvel objet au début du container : ");
let $hall = document.createElement("div"); //création
$hall.innerHTML = "hall d'entrée"; //modification d'une propriété
$maison.insertBefore($hall, $maison.firstChild); // ajout au début du 'divMaison'
//affichage
tabPieces = []; // raz du tableau des pièces et reconstruction
for (const piece of $maison.childNodes) tabPieces.push(piece.textContent);
console.log("maison ", tabPieces); // maison: hall + salon + salleAManger + cuisine

// suppression d'un objet du DOM
console.log("// suppression d'objets du DOM : ");
$cuisine.remove; // supprime le div 'Cuisine'
$maison.removeChild($maison.childNodes[0]); //supprime le premier noeud (hall)
//affichage
tabPieces = []; // raz du tableau des pièces et reconstruction
for (const piece of $maison.childNodes) tabPieces.push(piece.textContent);
console.log("maison ", tabPieces); // maison: salon + salleAManger

// --------------------------------------------------------
// * gestion des attributs
// --------------------------------------------------------
$salon.setAttribute("superficie", 35);
console.log("Superficie du salon:", $salon.getAttribute("superficie"));

// --------------------------------------------------------
// --------------------------------------------------------
