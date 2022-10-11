const app = Vue.createApp ({
    data () {
        return {
            nbre1: 0,
            nbre2: 0,
            operation: "+",
        };
    },
    methods: {
        resultatFct() {
            console.log("Je passe dans résultatFct");
            return Number(this.nbre1) + Number(this.nbre2);
        },
    },
    computed: {
        resultatComp() {
            console.log("Je passe dans resultartComp")
            return Number(this.nbre1) + Number(this.nbre2);
        },
    },
});
app.mount("#app");