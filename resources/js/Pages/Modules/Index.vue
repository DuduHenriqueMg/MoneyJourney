<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';

import { Link } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';
import { reactive, computed, ref, watchEffect, onMounted } from "vue";

defineProps({
    modules:  Object
});

</script>

<template>
    <Head title="Módulos" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">Módulos</h2>
        </template>

        <div class="py-12">
            
                
            
            <div  class="p-4 grid grid-cols-2 gap-4 text-center" >
                <div v-for="module in modules" class="mx-auto w-1/2 p-4 bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <Link  :href="route('module.show', module.id)">  
                            <img class="h-24 p-2 mx-auto" src="/assets/images/cubes.png" alt="">
                            <div class=" text-white">{{ module.nome }}</div>
                    </Link>
                </div>
            </div>  
                
                
                
                
            
        </div>
    </AuthenticatedLayout>
</template>