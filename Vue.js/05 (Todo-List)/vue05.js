const app = Vue.createApp ({
    data() {
        return {
            taches: [
                { nom: "Faire du café", checked: true},
                { nom: "Sortir le chien", checked: false},
            ],
            nouvelleTache : {nom: "", checked: false},
            filtrageTaches : false,
        };
    },

    methods: {
        ajouterTache: function () {
            this.nouvelleTache.nom = this.nouvelleTache.nom.trim();
            if(this.nouvelleTache.nom === "") return;
            if(this.taches.findIndex(t => t.nom === this.nouvelleTache.nom) >= 0) return;

            this.taches.push(this.nouvelleTache);
            this.nouvelleTache = {nom: "", checked: false};
        },
        liste() {
            if(this.filtrageTaches) {
                return this.taches.filter(t => !t.checked);
            } else {
                return this.taches;
            }
        }
    },
});

app.mount("#app");
