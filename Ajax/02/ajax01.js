const app = Vue.createApp({
  data() {
    return {
      listePays: [],
      paysChoisis: [],
      paysChoisi: null,
    };
  },
  methods: {
    addCountry(){
        this.paysChoisis.push(this.paysChoisi);
    },

  },
  computed: {
    paysChoisi(){
      return this.listePays.find(p => p.alpha2P == this.codeChoisi);
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
