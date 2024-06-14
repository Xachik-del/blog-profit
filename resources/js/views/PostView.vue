<template>
    <div class="container mt-5" v-if="post">


        <div class="content-top">
            <p class="title">{{post.title}}</p>

            <div class="info">
                <div class="date">
                    <img src="../../../public/images/calendar.svg" alt="">
                    {{post.created_at}}
                </div>
                <div class="views">
                    <img src="../../../public/images/views.svg" alt="">
                    {{post.views}}
                </div>
            </div>
        </div>

        <div class="image mt-5">
<!--            <img src="../../../public/images/blog-main-photo.png" alt="">-->
                        <img :src="`/storage/${post.image}`" alt="">
        </div>

        <div class="post-description">
            <div class="title" v-if="post.subtitlte">
                {{ post.subtitlte }}
            </div>

            <div class="description" v-html="post.description"></div>

            <div class="author">
                <img src="../../../public/images/man-blue.svg" alt="">
                <p>
                    {{ post.user.name }}
                </p>
            </div>
        </div>

        <Posts/>
    </div>
    <div v-else>
        <p>Loading...</p>
    </div>
</template>

<script setup>
import Posts from "@/components/Posts/Posts.vue";
import {ref, onMounted, watchEffect} from 'vue';
import { useRoute } from 'vue-router';
import axios from 'axios';

const route = useRoute();
const post = ref(null);

const fetchPost = async () => {
    const postId = route.params.id;
    try {
        const response = await axios.get(`/api/posts/${postId}`);
        post.value = response.data;
    } catch (error) {
        console.error('Error fetching post:', error);
    }
};

watchEffect(() => {
    fetchPost();
});
</script>

<style scoped lang="scss">

.content-top {
    color: white;
    display: flex;
    justify-content: space-between;

    * {
        padding: 0;
        margin: 0
    }

    .title {
        width: 50%;
        font-size: 35px;
        font-weight: 700;
    }

    .info {
        display: flex;
        justify-content: space-between;
        align-items: end;
        width: 20%;

        .date {
            width: 140px;
        }

        .views {
            width: 100px;
        }

        .date, .views {
            padding: 10px;
            border-radius: 10px;
            background-color: #131313;
            display: flex;
            justify-content: space-between;
            align-items: center;

            img {
                width: 20px;
                height: 20px;
            }
        }
    }
}

.image {
    border-radius: 10px;

    img {
        width: 100%;
        max-height: 700px;
        object-fit: contain;
        object-position: left;
    }
}

.post-description {
    color: white;
    padding: 20px 70px;

    .title {
        color: #037BFF;
        letter-spacing: 5px;
        margin-bottom: 20px;
    }

    .description {
        font-weight: 600;

        span {
            color: #027BFF !important;
        }


        blockquote {
            margin: 30px 0;
            background-color: #027BFF;
            border-radius: 20px;
            padding: 10px 20px;
            color: white;
            position: relative;
        }

        blockquote::before {
            content: url("../../../public/images/quotes-start.svg");
            position: absolute;
            top: -30px;
            left: -30px;
        }
        blockquote::after {
            content: url("../../../public/images/quotes-end.svg");
            position: absolute;
            bottom: -30px;
            right: -30px;
        }
    }

    .author {
        margin-top: 20px;
        display: flex;
        justify-content: end;
        align-items: center;

        p {
            margin-left: 10px;
            margin-top: 0;
            margin-bottom: 0;
            font-weight: 700;
        }
    }
}
</style>
