const app = Vue.createApp({
    data() {
        return {
          personnes: [
              { prenom: "Adrien", sexe: "M", age: 34},
              { prenom: "Mathilde", sexe: "F", age: 29},
              { prenom: "Julien", sexe: "M", age: 26},
              { prenom: "Anna", sexe: "F", age: 26},
              { prenom: "Evan", sexe: "M", age: 25},
              { prenom: "Eva", sexe: "F", age: 28},
              { prenom: "Axel", sexe: "M", age: 28},
          ],
            names: [],
        }
    },

    methods: {
        all() {
            this.names = [];
            for (person in this.personnes){
                this.names.push(this.personnes[person].prenom);
            }
        },

        male() {
            this.names = [];
            for (person in this.personnes){
                if(this.personnes[person].sexe === 'M'){
                    this.names.push(this.personnes[person].prenom);
                }
            }
        },

        female() {
            this.names = [];
            for (person in this.personnes){
                if(this.personnes[person].sexe === 'F'){
                    this.names.push(this.personnes[person].prenom);
                }
            }
        }
    },
});

app.mount("#app");