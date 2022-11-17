const app = Vue.createApp({
    data() {
        return {
            trafic_light_status: "running",
            pedestrian_status: "stopped",
        }
    },

    methods: {
        startEngine(){
            const askPedestrian = setTimeout(this.pedestrian, 5000);
            document.getElementById("message").innerHTML = "Veuillez patienter..."
        },
        pedestrian() {
                document.getElementById("trafic-light").src="./assets/trafic_light_yellow.png";
                const stopTrafic = setTimeout(this.stopTrafic, 2000);
                this.pedestrian_status = "waiting";
        },
        stopTrafic() {
            document.getElementById("trafic-light").src="./assets/trafic_light_red.png";
            const enablePedestrian = setTimeout(this.enablePedestrian, 2000);
            this.trafic_light_status = "stopped";
        },
        enablePedestrian() {
            document.getElementById("pedestrian").src="./assets/pedestrian_green.png";
            document.getElementById("message").innerHTML = "Vous pouvez traverser!"
            this.pedestrian_status = "enabled";
            this.createAlert();
        },
        createAlert(){
            let timeLeft = 10;
            setInterval(function() {
                if(timeLeft == 0){
                    clearInterval(this);
                    document.getElementById("alert").innerHTML = "";
                }
                else document.getElementById("alert").innerHTML = "Il vous reste  " + timeLeft-- + " secondes!"
            }, 1000);
        }
    },

    computed: {

    }
});

app.mount('#app');