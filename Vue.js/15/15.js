const app = Vue.createApp({
    data() {
        return {
            regions: ['Namur', 'Liège', 'Mons', 'Charleroi', 'Bruxelles', 'Anvers', 'Bruges'],
            sports: ['Natation', 'Tennis', 'VTT', 'Paddle', 'Basket', 'Football', 'Cross-Fit'],
            name: null,
            surname: null,
            selectedRegion: null,
            selectedSports: [],
        }

    },

    computed: {

    },

});

app.mount("#app");