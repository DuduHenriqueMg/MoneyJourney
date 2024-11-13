<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DeleteUserForm from './Partials/DeleteUserForm.vue';
import UpdatePasswordForm from './Partials/UpdatePasswordForm.vue';
import UpdateProfileInformationForm from './Partials/UpdateProfileInformationForm.vue';
import { Link } from '@inertiajs/vue3';
import { Head } from '@inertiajs/vue3';

defineProps({
    user:  Object , badges: Object
});
</script>

<template>
    <Head title="Profile" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Profile</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <p>Nome: {{ user.name }}</p>
                    <p>Pontos: {{ user.score }}</p>
                    <p>Seu nivel: {{ user.level }}</p>
                    
                    <div>
                        <h3>Conquistas: {{ badges.length != 0 ?  '' : 'Você ainda não possui conquistas' }}</h3>
                        <ul>
                        <li v-for="badge in badges" :key="badge.id">{{ badge.name }}</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <Link :href="route('profile.edit')"><PrimaryButton>Editar Usuário</PrimaryButton></Link>
                </div>
                
            </div>
        </div>
    </AuthenticatedLayout>
</template>