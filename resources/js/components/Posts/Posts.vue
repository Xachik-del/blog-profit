<template>

    <div class="main-title d-flex justify-content-center">
        <img src="../../../../public/images/arrow.png" alt="" width="40">
        <h1 class="text-light mx-2">
            Статьи
        </h1>
    </div>

    <div class="navigation">
        <div class="filters">
            <ul class="d-flex justify-content-between text-light">
                <li @click="filterPosts(null)">Все</li>
                <li v-for="category in categories" :key="category.id" @click="filterPosts(category.id)">{{ category.name }}</li>
            </ul>

            <div class="search">
                <input
                    v-model="searchQuery"
                    @input="searchPosts"
                    type="text"
                    class="search-input"
                    placeholder="Введите запрос">
            </div>
        </div>
        <div class="posts">
            <Post v-for="post in posts" class="card" @click="router.push('/post/' + post.id)" :post="post"/>
        </div>
        <div class="show-more">
            <button class="btn" @click="loadMore" v-if="hasMorePosts">Показать еще +</button>
        </div>
    </div>
</template>

<script setup>
import Post from "@/components/Posts/Post.vue";
import {onMounted, ref} from "vue";
import router from "@/router";

import axios from 'axios';

const posts = ref([]);
const categories = ref([]);
const currentPage = ref(1);
const hasMorePosts = ref(true);
const limit = 5;
const currentCategory = ref(null);
const searchQuery = ref('');

const fetchCategories = async () => {
    try {
        const response = await axios.get('/api/category');
        categories.value = response.data;
    } catch (error) {
        console.error('Error fetching categories:', error);
    }
};

const fetchPosts = async (page = 1, category = '', query = '') => {
    try {
        const response = await axios.get('/api/posts', {
            params: {
                page,
                limit,
                category,
                q: query
            }
        });
        const { data, current_page, last_page } = response.data;

        if (page === 1) {
            posts.value = data;
        } else {
            posts.value = [...posts.value, ...data];
        }

        currentPage.value = current_page;
        hasMorePosts.value = current_page < last_page;
    } catch (error) {
        console.error('Error fetching posts:', error);
    }
};

const filterPosts = (category) => {
    currentCategory.value = category;
    currentPage.value = 1;
    fetchPosts(1, category);
};

const searchPosts = () => {
    currentPage.value = 1;
    fetchPosts(1, currentCategory.value, searchQuery.value);
};

const loadMore = () => {
    if (hasMorePosts.value) {
        fetchPosts(currentPage.value + 1, currentCategory.value, searchQuery.value);
    }
};

onMounted(() => {
    fetchPosts();
    fetchCategories();
});

</script>

<style scoped lang="scss">
.main-title {
    margin-top: 7rem;
    text-align: center;
    justify-content: center;
    align-items: center;


    img {
        width: 20px;
        height: 20px;
        object-fit: contain;
    }
}

.navigation {
    margin-top: 30px;
    .filters {
        display: flex;
        justify-content: space-between;

        ul {
            list-style: none;

            li {
                margin-right: 40px;
            }

            li:hover {
                list-style: disc;
                cursor: pointer;
                color: #027BFF;
            }
        }

        .search {
            .search-input {
                border: 1px solid white;
                background: transparent;
                border-radius: 25px;
                padding: 5px;
                color: white;
            }

            .search-input::placeholder {
                color: gray;
                padding-left: 20px;
            }
        }
    }
    .posts {
        margin-top: 100px;
        display: grid;
        grid-template-columns: 1fr 1fr;
        justify-content: center;
        row-gap: 40px;
        column-gap: 120px;
        padding: 20px;
        max-width: 1200px;

        .card {
            cursor: pointer;
        }
    }
    .show-more {
        width: 100%;
        height: 40px;
        margin-top: 30px;
        display: flex;
        justify-content: center;

        .btn {
            background-color: #027BFF;
            width: 300px;
            color: white;
            padding: 5px;


            &:hover {
                background-color: #0771e7;
            }
        }
    }
}

</style>
