<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ course.title }}
            </h2>
        </template>
        <div class="py-3">
            <div class="text-2xl">{{ course.episodes[0].title }}</div>
            <iframe class="w-full h-screen" :src="course.episodes[0].video_url" frameborder="0">
            </iframe>
            <div class="text-sm text-gray-500">{{ course.description }}</div>
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