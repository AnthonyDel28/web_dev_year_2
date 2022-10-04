const app = Vue.createApp ({
  data() {
      return {
          nom: 'Leroy',
          prénom: 'Sané',
          age: 41,
          loisirs: ["jeux vidéos", "football"],
      };
  },
    methods: {
      saluer(){console.log('Coucou' + this.nom)},
        affLoisirs(){
          for (const loisir of this.loisirs) {
              console.log(loisir);
          }
        },
    },
});

app.mount("#app");