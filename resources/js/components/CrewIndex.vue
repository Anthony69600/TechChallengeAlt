<template>
    <header>
        <h1>
            <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png"
                alt="Wild Code School logo" />
            Les Argonautes
        </h1>
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
        const { argonautes, getCrew } = useCrew();

        onMounted(getCrew());

        onUpdated(getCrew());

        return {
            argonautes,
        };
    },
    components: {
        AddArgo
    },
}


</script>

<style>
header {
    background: #f4f4f4;
    text-align: center;
    padding: 2em;
}

header img {
    max-width: 96px;
}

header h1 {
    font-size: 4em;
}


footer {
    background: red;
}

h1, h2 {
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