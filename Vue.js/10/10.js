const app = Vue.createApp({
    data()  {
        return {
            cpt: 0,
            timer: null,
            state: "ready",
        };
    },
    methods: {
        start(){
            switch(this.state){
                case "ready":
                    this.timer = setInterval(this.up, 100);
                    this.state = "running";
                    break;
                case "running":
                    break;
                case "stopped":
                    this.timer = setInterval(this.up, 100);
                    this.state = "running";
                    break;
            }

        },

        end() {
            if(this.state != "running") return;
            clearInterval(this.timer);
            this.state = "stopped";
        },

        reset() {
            if(this.state != "stopped") return;
            this.cpt = 0;
            this.state = "ready";
        },

        up() {
            this.cpt++;
        },
    }
});

app.mount("#app");