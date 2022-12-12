const app = Vue.createApp({
    data() {
        return {
            status: 'registration',
            pseudo:  null,
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
        registration() {
            if(this.pseudo === "" || this.pseudo == 0 || this.pseudo == null){
                this.error("Veuillez insérer un pseudo valide !");
                return;
            } else if(this.pseudo.length <= 3){
                this.error("Votre pseudo doit contenir au moins 4 caractères!");
                return;
            }
            this.status = "countdown";
            this.status_checker();
        },
        status_checker() {
            switch (this.status){
                case 'registration':
                    this.pseudo = null;
                    this.count = 0;
                    this.score = 0;
                    this.timing = 0;
                    this.calcul = [
                        [
                            Math.floor(Math.random() * 101),
                            Math.floor(Math.random() * 101),
                            0,
                            0,
                        ],
                    ];
                    document.getElementById("alert").innerHTML = "";
                    document.getElementById("exam-countdown").innerHTML = "";
                    document.getElementById('register').style.display = "block";
                    document.getElementById('countdown').style.display = "none";
                    document.getElementById('exam').style.display = "none";
                    document.getElementById('scoreboard').style.display = "none";
                    break;
                case 'countdown':
                    document.getElementById('register').style.display = "none";
                    document.getElementById('countdown').style.display = "block";
                    this.createAlert(5);
                    setTimeout(() => {
                       this.status = "running";
                       this.status_checker();
                    }, 6000);
                    break;
                case 'running':
                    document.getElementById('countdown').style.display = "none";
                    document.getElementById('exam').style.display = "block";
                    this.createExamCountdown(10);
                    this.timing = 1;
                    this.time();
                    break;
                case 'finished':
                    document.getElementById('exam').style.display = "none";
                    document.getElementById('scoreboard').style.display = "block";
                    this.scoreboard();
                    break;
            }
        },
        createAlert(time){
            setInterval(function() {
                if(time == 0){
                    clearInterval(this);
                }
                else document.getElementById("alert").innerHTML = "Le test commencera dans  " + time-- + " secondes!"
            }, 1000);
        },
        calculator(){
            this.calcul[this.count][2] = 1;
            if(((this.calcul[this.count][0]) + this.calcul[this.count][1]) == this.calcul[this.count][3]){
                this.score++;
            }
            this.count++;
            this.calcul[this.count] = [];
            this.calcul[this.count].push(Math.floor(Math.random() * 101), Math.floor(Math.random() * 101), this.count);
            this.calcul[this.count][2] = 0;
        },
        createExamCountdown(time){
            setInterval(function() {
                if(time >= 0){
                    document.getElementById("exam-countdown").innerHTML = "Il vous reste " + time-- + " secondes!";
                    if(time > 4){
                        document.getElementById("exam-countdown").style.color = "limegreen";
                    } else {
                        document.getElementById("exam-countdown").style.color = "darkred";
                    }
                } else {
                    clearInterval(this);

                }
            }, 1000);
        },
        time(){
            if(this.timing == 1){
                setTimeout(() => {
                    this.status = "finished";
                    this.calcul[this.count][2] = 1;
                    this.status_checker();
                }, 11500);
            }
        },
        scoreboard(){
            document.getElementById("final-score").innerHTML = "Votre score: " + this.score;
            },
        restart(){
            this.status = 'registration';
            this.status_checker();
        },
        error(message){
            document.getElementById("error").innerHTML = message;
            document.getElementById("error").style.color = "red";
        }
    },
    computed: {
    },
    mounted() {
        this.status_checker();
    },
});

app.mount("#app");

