const app = Vue.createApp({
data()  {
    return {
        nom : "Bertrand",
        loisirs: ["Sieste", "Football", "TV", "Cuisine"]
        };
    },
});

app.mount("#content");