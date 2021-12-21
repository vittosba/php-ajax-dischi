 const app = new Vue({
    el: '#app',
    data: {
        cards: null,
    },
    created() {
        this.getCards();
    },
    methods: {
        getCards() {
            axios.get('http://localhost:8888/ex-4/php-ajax-dischi/ajax-dischi/script/database.php')
            .then(response => {
                console.log(response.data);
                this.cards = response.data;
            })
            .catch(err => {
                console.log(err);
            });
        },
    },
});