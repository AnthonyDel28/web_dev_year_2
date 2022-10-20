const app = Vue.createApp({
    data()  {
        return {
            personnes: [
                {nom: "Peps", age: 12},
                {nom: "Anna", age: 19},
                {nom: "Sonia", age: 40},
                {nom: "Axel", age: 22},
                {nom: "Philippe", age: 54},
            ],
            message: "",
            selected: null,
        };
    },
    methods: {
        saluer(p) {
            console.log("Bienvenue ", p.nom);
            this.message = "Bienvenue " + p.nom;
            this.selected = p;
        }
    },
    computed: {
        salutation() {
            if(this.selected == null) return;
            return "Hello " + this.selected.nom;
        }
    }
});

app.mount("#app");