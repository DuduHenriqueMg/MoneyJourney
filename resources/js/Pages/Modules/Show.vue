<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import axios from 'axios';
import { Head } from '@inertiajs/vue3';
import { router, usePage } from '@inertiajs/vue3'
import { reactive, computed, ref, watchEffect, onMounted } from "vue";



const props = defineProps({
    module: Object
});

const page = usePage()
const currentIndexLesson = ref(0)
const currentIndexContent = ref(0)
const moduleEnd = ref(false)
const selectedOption = ref(null);
const feedbackMessage = ref("")


const currentContent = computed(() => {
    if (moduleEnd.value == false && currentIndexContent.value < props.module.conteudo.length) {

        return props.module.conteudo[currentIndexContent.value]

    }



    return props.module.lessons[currentIndexLesson.value]

})

function nextStep() {


    if (!moduleEnd.value && currentIndexContent.value < props.module.conteudo.length) {
        return currentIndexContent.value++
    } else if (currentIndexLesson.value < props.module.lessons.length - 1) {
        moduleEnd.value = true


        return currentIndexLesson.value++
    }



}

function backStep() {
    if (moduleEnd.value == true && currentIndexLesson.value > 0) {
        return currentIndexLesson.value--;
    }
    moduleEnd.value = false
    return currentIndexContent.value--;

}

async function selectOption(option, id) {
    const lessonId = this.currentContent.id

    try {
        // Envia a requisição POST usando axios
        router.post(`/modules/complete/${lessonId}`)

        
            selectedOption.value = option;
            alert('Lição concluída!');
            
        
    } catch (error) {
        console.error('Erro ao completar a lição:', error);
    }
    
}
    


</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">{{ module.nome }}</h2>
        </template>


        <div class="flex justify-center p-4">
            <div v-if="currentContent" class="card max-w-xl bg-gray-800 shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-bold text-white mb-4">{{ currentContent.titulo }}</h2>
                <p v-if="currentContent.descricao" class="text-gray-200 mb-6">{{ currentContent.descricao }}</p>


                <template v-if="currentContent.topicos">
                    <h3 class="text-lg font-semibold text-white mb-2">Tópicos</h3>
                    <ul class="list-disc list-inside text-gray-300 mb-4">
                        <li v-for="(topico, index) in currentContent.topicos" :key="index" class="mb-1">
                            {{ topico }}
                        </li>
                    </ul>
                </template>

                <template v-if="currentContent.desvantagens">
                    <h3 class="text-lg font-semibold text-white mb-2">Desvantagens</h3>
                    <ul class="list-disc list-inside text-gray-200 mb-4">
                        <li v-for="(desvantagem, index) in currentContent.desvantagens" :key="index" class="mb-1">
                            {{ desvantagem }}
                        </li>
                    </ul>
                </template>

                <template v-if="currentContent.vantagens">
                    <h3 class="text-lg font-semibold text-white mb-2">Vantagens</h3>
                    <ul class="list-disc list-inside text-gray-600 mb-4">
                        <li v-for="(vantagem, index) in currentContent.vantagens" :key="index" class="mb-1">
                            {{ vantagem }}
                        </li>
                    </ul>

                </template>

                <template v-if="currentContent.module_id">


                    
                    <p class="text-gray-300">{{ currentContent.conteudo.question }}</p>
                    <div v-for="(option, index) in currentContent.conteudo.options" :class="['flex items-center p-4 m-2 rounded-lg cursor-pointer transition-colors',
                        selectedOption === option ? option.correct ? 'bg-green-500' : 'bg-red-500' : 'bg-gray-800 hover:bg-gray-600']" >
                        
                            <input v-model="selectedOption" type="radio" :value="option.text"
                            class="w-4 h-4 text-blue-600 bg-gray-300 border-black focus:ring-2  " @click="selectOption(option)">
                            <label class="ms-2 text-sm font-medium text-gray-300">Opção
                            {{ index + 1 + ": " + option.text }}</label>
                        
                        

                    </div>

                </template>

                <div class="p-4 grid grid-cols-2 gap-4 text-center">
                    <PrimaryButton class="m-1/2" @click="backStep">
                        Anterior
                    </PrimaryButton>
                    <PrimaryButton class="m-1/2" @click="nextStep">
                        Próximo
                    </PrimaryButton>
                </div>


                <div class="text-gray-500 text-sm mt-4">Página: {{ currentIndexContent+1 + currentIndexLesson }}</div>
                
            </div>
        </div>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                <div>
                    <div></div>
                </div>



            </div>
        </div>
    </AuthenticatedLayout></template>