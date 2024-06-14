<template>
    <div id="app">
        <div class="container-fluid">
            <Header/>

            <main>
                <router-view></router-view>
            </main>

            <Footer/>
        </div>
    </div>
</template>

<script setup>
import {ref, onMounted} from 'vue';
import Header from "@/components/Header.vue";
import Footer from "@/components/Footer.vue";

onMounted(() => {
    console.log('App component mounted.');
});
</script>

<style scoped>

</style>
