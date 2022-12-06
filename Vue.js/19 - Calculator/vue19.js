const app = Vue.createApp({
    data() {
        return {
            count: 0,
            calcul: [
                [
                    Math.floor(Math.random() * 101),
                    Math.floor(Math.random() * 101),
                    0,
                    0,
                ],
            ],
            score: 0,
            timing: 0,
        };
    },
    methods: {
        calculator(){
            this.calcul[this.count][2] = 1;
            if((this.calcul[this.count][0] + this.calcul[this.count][1]) == this.calcul[this.count][3]){
                this.score++;
            }
            this.count++;
            this.calcul[this.count] = [];
            this.calcul[this.count].push(Math.floor(Math.random() * 101), Math.floor(Math.random() * 101), this.count);
            this.calcul[this.count][2] = 0;
            this.timing = 1;
            this.time();
            },

        time(){
            if(this.timing == 1)
            {
                setTimeout(() => {
                    this.end();
                }, 10000)
            }
        },

        end(){
            this.calcul[this.count][2] = 1;
            document.getElementById("score").innerHTML = "Votre score: " + this.score;
        }
    },
    computed: {

    },
    mounted() {},
});

app.mount("#app");
