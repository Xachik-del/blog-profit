<template>
    <div class="container">
        <Carousel class="mt-5"/>

        <div class="content-block mt-5">

                <Posts/>

                <div class="social">
                    <SocailInfo/>
                </div>
        </div>
    </div>
</template>

<script setup>
import Carousel from "@/components/Carousel.vue";
import SocailInfo from "@/components/SocailInfo.vue";
import Posts from "@/components/Posts/Posts.vue";


</script>

<style scoped lang="scss">

</style>
