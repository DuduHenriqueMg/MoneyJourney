<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-white leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="p-4 grid grid-cols-2 gap-2 text-center">
                <div class="mx-auto w-1/2 p-6  bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <Link :href="route('module.index')">  
                    
                        <img class="h-24 mx-auto" src="/assets/images/stack-of-books.png" alt="">
                        <div class=" text-white">Módulos de aprendizado</div>
                    
                    </Link>
                </div>
                <div class="mx-auto w-1/2 p-6 bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <Link :href="route('lesson.index')">  
                        <img class=" h-24 mx-auto" src="/assets/images/homework.png" alt="">
                        <div class=" text-white">Lições </div>
                    </Link>
                </div>
                
            </div>       
        </div>
    </AuthenticatedLayout>
</template>
