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
                    document.getElementById('register').style.display = "block";
                    document.getElementById('countdown').style.display = "none";
                    document.getElementById('exam').style.display = "none";
                    document.getElementById('scoreboard').style.display = "none";
                    break;
                case 'countdown':
                    document.getElementById('register').style.display = "none";
                    document.getElementById('exam').style.display = "none";
                    document.getElementById('countdown').style.display = "block";
                    this.createAlert();
                    setTimeout(() => {
                       this.status = "running";
                       this.status_checker();
                    }, 6000);
                    break;
                case 'running':
                    document.getElementById('countdown').style.display = "none";
                    document.getElementById('exam').style.display = "block";
                    this.createExamCountdown();
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
        createAlert(){
            let timeLeft = 5;
            setInterval(function() {
                if(timeLeft === 0){
                    clearInterval(this);
                    document.getElementById("alert").innerHTML = "";
                }
                else document.getElementById("alert").innerHTML = "Le test va commencer dans  " + timeLeft-- + " secondes!"
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
        createExamCountdown(){
            let timeLeft = 10;
            setInterval(function() {
                if(timeLeft >= 0){
                    document.getElementById("exam-countdown").innerHTML = "Il vous reste " + timeLeft-- + " secondes!";
                    if(timeLeft > 4){
                        document.getElementById("exam-countdown").style.color = "limegreen";
                    } else {
                        document.getElementById("exam-countdown").style.color = "darkred";
                    }
                } else {
                    clearInterval(this);
                    document.getElementById("exam-countdown").innerHTML = "";
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
        }

    },
    computed: {

    },
    mounted() {
        this.status_checker();
    },
});

app.mount("#app");

