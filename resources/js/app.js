require('./bootstrap');

import { createApp } from 'vue';
import router from "./router";
import CrewIndex from "./components/CrewIndex";


createApp({
    components:{
        CrewIndex
    }
})
.use(router)
.mount('#app');