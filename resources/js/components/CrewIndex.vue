<template>
    <header>
        <div class="sm:flex sm:flex-row sm:justify-center grid place-items-center">
                <img @click="deleteCrew"
                    src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png"
                    alt="Wild Code School logo" 
                />
            <h1 class="sm:ml-2">Les Argonautes</h1>
        </div>
    </header>

    <AddArgo></AddArgo>

    <div class="w-90 mt-10">
        <h2>Membres de l'équipage</h2>
        <div class="wrapper mt-10">
            <div v-for="argonaute in argonautes.data.data">
                <div class="text-center text-xl font-mono" v-text="argonaute.name"></div>
            </div>
        </div>
    </div>

    <footer>
        <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>
</template>

<script>

import { onMounted, onUpdated } from "vue";
import useCrew from "../services/crewServices.js";
import AddArgo from "./AddArgo.vue";

export default {
    setup() {

        const { argonautes, getCrew, destroyCrew } = useCrew();

        onMounted(getCrew());

        const deleteCrew = async () => {
            if (confirm("Supprimer l\'équipage ?")){
            await destroyCrew();
            await getCrew();
            } 
            return;
        }

        return {
            argonautes,
            deleteCrew,
        };
    },
    components: {
        AddArgo,
    },
}


</script>

<style>
header {
    background: #f4f4f4;
    text-align: center;
    padding: 5em;
}

header img {
    max-width: 150px;
}


footer {
    background: red;
}

h1 {
    font-size: 3em;
}
h2 {
    font-size: 2em;
    text-align: center;
}

label {
    display: block;
    margin-bottom: 0.5em;
}

.new-member-form {
    margin: 2em 0 4em 0;
    text-align: center;
}

.wrapper {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 14px;
}

footer {
    margin-top: 3em;
    text-align: center;
    color: #fff;
    background: #f76c6c;
    padding: 0.25em 0;
}
</style>