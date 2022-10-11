let pers = { nom: "Dubois", age: 47, taille: 1.78, masse: 88};

for (const attr in pers){
    console.log(pers[attr]);
}

let loisirs = ["pèche", "sieste", "php"];
for(const el of loisirs){
    console.log(el);
}

loisirs.forEach(el => {
    console.log(el);
});