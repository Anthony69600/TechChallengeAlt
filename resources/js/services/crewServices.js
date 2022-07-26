import { ref } from 'vue';
import { useRouter } from 'vue-router';
import axios from "axios";

export default function useCrew() {

    const argonautes = ref([]);
    const router = useRouter()

    const getCrew = async () => {
        let response = await axios.get('/api/crew/index');
        argonautes.value = response;
    };

    const storeCrew = async (data) => {
        await axios.post('api/crew/create', data)
    };

    const destroyCrew = async () => {
        await axios.delete('api/reset');
    };

    return {
        argonautes,
        getCrew,
        storeCrew,
        destroyCrew,
    };
}