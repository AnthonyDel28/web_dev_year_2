const app = Vue.createApp({
    data()  {
        return {
            nom : "Bertrand",
            loisirs: ["Sieste", "Football", "TV", "Cuisine"],
            nouveauLoisir: "",
            };
        },
    methods: {
        ajouterLoisir: function () {
            if (this.nouveauLoisir == "") return;
            if (this.loisirs.findIndex(x => x == this.nouveauLoisir) >= 0) return;
            this.loisirs.push(this.nouveauLoisir);
            this.nouveauLoisir = "";
        },
    },
});

app.mount("#content");