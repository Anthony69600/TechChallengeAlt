<template>
    <div class="text-center mt-6">
        <h2>Ajouter un(e) Argonaute</h2>
        <form @submit.prevent="saveArgo" class="mt-6">
            <label for="name" class="text-xl ">Nom de l'Argonaute</label>
            <input id="name" class="border-2 border-black rounded px-2 py-2" v-model="form.name" placeholder="ex: Pollux">
            <button class="px-3 py-3 ml-2 bg-red-500 hover:bg-red-600 text-white rounded">Envoyer</button>
        </form>
    </div>
</template>

<script>
import { reactive } from 'vue';
import useCrew from '../services/crewServices';

export default {
    setup() {

        const form = reactive({
            'name': '',
        });

        const { storeCrew } = useCrew()

        const saveArgo = async () => {
            await storeCrew(form);
            form.name ='';
            window.location.href="/";
        }

        return {
            form,
            saveArgo,
        };

    }
}
</script>