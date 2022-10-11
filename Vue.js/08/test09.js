let equipe = [
    { nom: "Tartier", age: 18 },
    { nom: "Legrand", age: 22 },
    { nom: "Louvroil", age: 19 },
    { nom: "Xeno", age: 45 },
    { nom: "Renier", age: 25 },
];

console.log(equipe);


console.log("--------Du plus jeune au plus vieux----------");
equipe.sort((a, b) => a.age - b.age);
console.log(equipe);

console.log("--------Vieux----------");
let old = equipe.filter(b => b.age >= 40);
console.log(old);

console.log("--------Equie dans 1 an----------");
equipe.forEach(a => a.age++);
console.log(equipe);

console.log("---------SOMME TOTALE-----------");
let sum = equipe.reduce((summ, a) => (summ = summ + a.age), 0)
console.log(sum);
