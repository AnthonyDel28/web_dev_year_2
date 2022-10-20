let maintenant = new Date();

console.log("maintenant : >>", maintenant);
console.log("maintenant.gethours : >>", maintenant.getHours());
console.log("maintenant.getMinutes: >>", maintenant.getMinutes());
console.log("maintenant.getSeconds: >>", maintenant.getSeconds());
console.log("maintenant.getDay: >>", maintenant.getDay());
console.log("maintenant.getMilliseconds: >>", maintenant.getMilliseconds());
console.log("maintenant.getMonth: >>", maintenant.getMonth());// renvoi la date -1 car commence au mois 0->11
console.log("maintenant.getTime: >>", maintenant.getTime()); // nombre de milliseconde depuis le 1/1/1970
console.log("new date(342342342) :>> ", new Date(342342342)); // exprime une date a partir de millisecondes
console.log("nex Date(0):>>" , new Date(0)); // renvoi 1/1/1970 & 0h
console.log("new Date(2007,02,39,14,25,35", new Date(2007,2,39,14))

let maintenantT = new Date();
console.log("temps écoulé en ms : ",maintenantT - maintenant);  // temps écoulé en milliseconde
console.log("maintenant tolocalDateString : >>" ,maintenantT.toLocaleDateString("fr-Be", {weekday: "long"}));

console.log("maintenant.toLocaleString('fr-FR', {weekday: 'long'}) :>> ", maintenant.toLocaleString("fr-FR", {weekday: "long", day: "numeric", month: "numeric", year: "numeric"}));