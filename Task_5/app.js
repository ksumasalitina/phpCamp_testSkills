
const App= {

    data() {
        return {
            CartCount: 0,
            FavCount:0

        }
    },
    mounted(){
        if(localStorage.CartCount){
            this.CartCount = localStorage.CartCount;
        }
        if(localStorage.FavCount){
            this.FavCount = localStorage.FavCount;
        }
    },
    methods: {

        addToCart(amount){
            this.CartCount = amount;
            localStorage.CartCount = this.CartCount;

        },
        addToFav(amount){
            this.FavCount = amount;
            localStorage.FavCount = this.FavCount;
        }


    }


}

Vue.createApp(App).mount('#app');