const app = Vue.createApp({
    data()  {
        return {
            start_time: null,
            end_time: null,
            long: null,
            timer: null,
            state: "Ready",
            lapTimes: [],
        };
    },
    methods: {
        start(){
            if(this.state != "Ready") return;

            this.start_time = new Date().toLocaleTimeString();;
            this.timer = setInterval(this.update, 10);
            this.state = "Running";
        },

        lap() {
            if(this.state != "Running") return;

           // this.update();
            this.lapTimes.push(this.long);
        },

        stop() {
            if(this.state != "Running") return;

            this.end_time = new Date();
            this.long = this.end_time - this.start_time;
            clearInterval(this.timer);
            this.state = "Stopped";

        },

        reset(){
            if(this.state != "Stopped") return;

            this.start_time = null;
            this.end_time = null;

            this.state = "Ready";
            this.lapTimes = [];

        },

        update() {
            let now = new Date();
            this.long = now - this.end_time;
        },

        msToHMS(ms) {
            let tps = new Date(ms - 3600000);
            return tps.toLocaleTimeString("fr-BE", { hour: "2-digit", minute: "2-digit"})
        },
    },
});

app.mount("#app");