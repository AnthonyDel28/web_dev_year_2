
const app = Vue.createApp({
    data() {
        return {
            status: 'registration',
            pseudo:  null,
            count: 0,
            operators: ["+", "-", "*", "/", "%"],
            operator: "+",
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
            scores: [],
        };
    },
    methods: {
        registration() {
            if(this.pseudo === "" || this.pseudo == 0 || this.pseudo == null){
                this.error("Veuillez insérer un pseudo valide !");
                document.getElementById('error').style.display = "block";
                return;
            } else if(this.pseudo.length <= 3){
                this.error("Votre pseudo doit contenir au moins 4 caractères!");
                document.getElementById('error').style.display = "block";
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
                    document.getElementById('score').style.display = "none";
                    document.getElementById("scoreboard").style.display = "none";
                    document.getElementById("finish").style.display = "none";
                    break;
                case 'countdown':
                    document.getElementById('error').style.display = "none";
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
                    this.createExamCountdown(20);
                    this.timing = 1;
                    this.time();
                    break;
                case 'finished':
                    document.getElementById('exam').style.display = "none";
                    document.getElementById('score').style.display = "block";
                    this.showscore();
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
                    this.calcul[this.count][2] = 1;
                    document.getElementById("finish").style.display = "block";
                }, 21500);
            }
        },
        showscore(){
            document.getElementById("final-score").innerHTML = "Votre score: " + this.score;
        },
        restart(){
            this.status = 'registration';
            this.status_checker();
        },
        error(message){
            document.getElementById("error").className = "alert alert-danger";
            document.getElementById("error").innerHTML = message;
            document.getElementById("error").style.color = "red";
        },
        displayScores() {
            document.getElementById("score").style.display = "none";
            document.getElementById("scoreboard").style.display = "block";
            fetch("scoreboard.php")
                .then(rep => rep.json())
                .then(scores => {
                    this.scores = scores;
                });
        },
        next(){
            this.status = 'finished';
            this.status_checker();
            $.ajax({
                type: "POST",
                url: "save.php",
                data: {
                    pseudo: this.pseudo,
                    score: this.score,
                },
            });
        },
    },
    computed: {
    },
    mounted() {
        this.status_checker();
    },
});

app.mount("#app");


