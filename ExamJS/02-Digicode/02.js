const app = Vue.createApp({
    data() {
        return {
            accessCode: 1984,
            code: [],
            hiddenCode: [],
            alert: 'Veuillez entrer votre code d\'accès.',
            tryAlert: '',
            buttonStatus: 0,
            try: 0,
            running: true,
            error: false
        }
    },

    methods: {
        addNbr(x){
            if(this.code.length < 4){
                this.code.push(x);
                this.hiddenCode.push(0);
                this.buttonStatus++;
            }
        },
        clear(){
            this.code = [];
            this.hiddenCode = [];
            this.buttonStatus = 0;
            this.tryAlert = '';
        },
        matchCodes(){

            const int = this.code.reduce((accum, digit) => (accum * 10) + digit, 0);
            if(int == this.accessCode){
                this.alert = 'Accès à la machine à café autorisé!';
                this.clear();
            } else {
                this.clear();
                this.alert = 'Accès refusé!';
                this.try++;
                this.tryAlert = 'Il vous reste ' + (3 - this.try) + ' essais!';
                this.checkTry();
            }
        },
        checkTry(){
            if(this.try >= 3){
               this.error = true;
               this.running = false;
                this.tryAlert = 'Vous avez déclenché l\'alarme';
            }
        }
    },

    computed: {

    }
});

app.mount('#app');