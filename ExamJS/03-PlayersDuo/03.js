const app = Vue.createApp({
    data() {
        return {
            persons: [],
            player1: [],
            player2: [],
            gender: '',
            team: '',
        }
    },

    methods: {

    },

    computed: {
        firstList(){
            if(this.gender === 'M'){
                this.team = 'Masculine';
                return this.persons.filter(x => x.sexe === 'M');
            } else if(this.gender === 'F'){
                this.team = 'Féminine';
                return this.persons.filter(x => x.sexe === 'F');
            } else if(this.gender === 'MX') {
                this.team = 'Mixte';
                return this.persons.filter(x => x.sexe === 'M');
            }
        },
        secondList(){
            if(this.gender === 'M'){
                return this.persons.filter(x => x.sexe === 'M');
            } else if(this.gender === 'F'){
                return this.persons.filter(x => x.sexe === 'F');
            } else if(this.gender === 'MX') {
                return this.persons.filter(x => x.sexe === 'F');
            }
        },
    },
    mounted() {
        fetch("personnes.json")
            .then(rep => rep.json())
            .then(lst => {
                this.persons = lst;
            });
    },
});

app.mount('#app');