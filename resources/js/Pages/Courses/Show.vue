<template>
    <app-layout>
        <template #header>
            {{ course.title }}
        </template>
        <div class="py-3">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="text-sm text-gray-500">Mise en ligne par {{ course.user.name }}</div>
                <div class="flex justify-between items-center">
                    <div class="text-3xl">{{ course.title }}</div>
                    <div class="text-gray-400">{{ course.episodes_count }} épisodes</div>
                </div>  
                <div class="text-sm text-gray-500">{{ course.description }}</div>
                <a :href="'course/' + course.id" class="bg-indigo-500 text-white rounded px-2 py-1 mt-3 inline-block hover:bg-indigo-700">Voir la formation</a>
            </div>
        </div>
    </app-layout>
</template>

<script>

import AppLayout from './../../Layouts/AppLayout';

export default {
    components: {
        AppLayout,
    },
    
    props: ['course'],

    data() {
        return {
            courseShow : this.course
        }
    },

    mounted() {
        console.log(this.course);
    }
}
</script>