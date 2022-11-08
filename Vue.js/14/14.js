const app = Vue.createApp({
    data() {
        return {
            personnes: [
                {prenom: "Adrien", sexe: "M", age: 34},
                {prenom: "Mathilde", sexe: "F", age: 29},
                {prenom: "Julien", sexe: "M", age: 26},
                {prenom: "Anna", sexe: "F", age: 26},
                {prenom: "Evan", sexe: "M", age: 25},
                {prenom: "Eva", sexe: "F", age: 28},
                {prenom: "Axel", sexe: "M", age: 28},
            ],
            persChoisies: null,
            sexeChoisi: "X",
            ageMin: 0,
            ageMax: 200,
        }
    },

    methods: {

    },

    computed: {
        personnesFiltrees(){
            this.persChoisies = null;
            let tabFiltre = this.personnes.filter(p => p.age >= this.ageMin && p.age <= this.ageMax)
            switch(this.sexeChoisi){
                case "X":
                    return tabFiltre;
                    break;
                case "F":
                    return tabFiltre.filter(p=>p.sexe == "F");
                    break;
                case "M":
                    return tabFiltre.filter(p=>p.sexe == "M");
                    break;
            }
        },
        getPersonAge() {
            if(this.persChoisies == null) return;
            else return this.personnes.find(p => p.prenom == this.persChoisies).age;
        }
    }
});

app.mount("#app");