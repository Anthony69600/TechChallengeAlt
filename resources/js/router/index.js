import { createRouter, createWebHistory } from "vue-router";
import CrewIndex from "../components/CrewIndex";

const routes = [
    {
        path:'/',
        name:'welcome',
        component: CrewIndex,
    }

];

export default createRouter({
    history: createWebHistory(),
    routes
});