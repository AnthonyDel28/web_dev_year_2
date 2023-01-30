const app = Vue.createApp({
    data() {
        return {
            speed: 0,
            distance: 0,
            alert: '',
            state: '',
        }
    },

    methods: {
        start(){
            if(this.state === ''){
                this.state = 'running';
            }
            if(this.speed >= (240 / 3.60)){
                this.alert = 'Vitesse maximale atteinte.';
                return;
            }
            this.speed++;
            this.alert = '';
            if(this.speed >= (120 / 3.60)){
                this.alert = 'Vous êtes au delà de la vitesse légale autorisée!'
            }
            this.frequency();
        },
        stop(){
            if(this.speed == 0){
                this.alert = 'Vous êtes à l\'arrêt!';
                return;
            } else {
                this.alert = '';

                this.speed--;
            }
        },
        frequency(){
           if(this.state === 'running'){
              setInterval(this.counter
                   , 1000);
           }
           this.state = 'driving';
        },
        counter(){
            this.distance = this.distance + this.speed;
        }

    },

    computed: {

    }
});

app.mount('#app');