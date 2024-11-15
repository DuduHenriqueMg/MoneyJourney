<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

import { Link } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';
import { reactive, computed, ref, watchEffect, onMounted } from "vue";

const props = defineProps({
    user:  Object, lessonProgress : Number
});

const progresso = computed(() => {

    return props.module.lessons[currentIndexLesson.value]
})

</script>

<template>
    <Head title="Modulos" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">Módulos</h2>
        </template>

        <div class="py-12">
            
                
            
            <div  class="p-4 grid text-center" >
                <div class="p-6 bg-gray-100 rounded-lg shadow-lg max-w-md mx-auto">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Progresso do Usuário</h2>

                    <div class="mb-4">
                        <p class="text-gray-700 text-lg font-bold">Nível: {{ user.level }}</p>
                        <p class="text-gray-700 text-lg font-bold">Pontos: {{ user.score }}</p>
                    </div>

                    <div class="mb-4">
                        <p class="text-gray-700">Progresso nas lições:</p>
                        <div class="w-full bg-gray-300 rounded-full h-4">
                            <div :style="{ width: lessonProgress + '%' }"
                                class="bg-blue-500 h-4 rounded-full transition-all duration-300"></div>
                        </div>
                        <p class="text-gray-600 text-sm mt-1">{{ lessonProgress.toFixed() }}% completo</p>
                    </div>
                </div>
            </div>  
                
                
                
                
            
        </div>
    </AuthenticatedLayout>
</template>