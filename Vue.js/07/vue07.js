const app = Vue.createApp ({
    data () {
        return {
            nbre1: 0,
            nbre2: 0,
            operation: "+",
        };
    },
    methods: {},
    computed: {
        resultat(){
            let res;
            switch(this.operation){
                case "+":
                    res = Number(this.nbre1) + Number(this.nbre2);
                    break;
                case "-":
                    res = Number(this.nbre1) - Number(this.nbre2);
                    break;
                case "*":
                    res = Number(this.nbre1) * Number(this.nbre2);
                    break;
                case "/":
                    res = Number(this.nbre1) / Number(this.nbre2);
                    break;
            } return res;
        },
    },
});
app.mount("#app");