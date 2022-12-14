const app = Vue.createApp({
  data() {
    return {
      listePays: [],
      listePaysSelectionnes: [],
      codeChoisi: null, //alpha2P
    };
  },
  methods: {
    ajouterPays(){
      if(this.codeChoisi == null) return;
      if(this.paysSelectionne(this.codeChoisi)) return;
      this.listePaysSelectionnes.push(this.paysChoisi());
    },
    paysSelectionne(code2P){
      return this.listePaysSelectionnes.findIndex(p => p.alpha2P === code2P) >= 0;
    }
  },
  computed: {
    paysChoisi() {
      return this.listePays.find(p => p.alpha2P === this.codeChoisi);
    },
    listePaysTries() {
      return [...this.listePays].sort((a, b) => a.nomFrP.localeCompare(b.nomFrP));
    },
  },
  mounted() {
    fetch("listeTousPays.php") // requête vers le serveur
      .then(rep => rep.json()) // transformation de la réponse du serveur
      .then(liste => {
        // utilisation de la réponse transformée

        this.listePays = liste;
      });
  },
});

app.mount("#app");
