<template>
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <div v-for="(item, index) in items" :key="index">
                <button
                    data-bs-target="#carouselExampleIndicators"
                    :data-bs-slide-to="index"
                    :class=" index === 0 ? 'active' : '' "
                    :aria-label="'Slide' + (index + 1)"
                ></button>
            </div>

        </div>
        <div class="carousel-inner">
            <div
                v-for="(item, index) in items"
                :class=" index === 0? 'carousel-item active' : 'carousel-item'"
                :key="item.id"
            >
                <div class="item-inner">
                    <div class="item-info d-flex flex-column w-80">
                        <div class="top-info d-flex">
                            <div class="views">
                                {{ item.views }} views
                            </div>
                            <div class="date mr-5">
                                {{ item.date }}
                            </div>
                        </div>
                        <div class="title">
                            <h1>
                                {{item.title }}
                            </h1>
                        </div>
                        <div class="description">{{ item.description}}</div>

                        <div class="read-more">
                            <button class="btn btn-light">
                                Читать Дальше -->
                            </button>
                        </div>
                    </div>
                    <img src="../../../public/images/blog-post1.png" class="d-block" alt="...">
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import {ref} from "vue";

const items = ref([
    {
        id: 1,
        title: "Почему нутра - вечнозелёная вертикаль",
        views: 1111,
        date: "2024-12-01",
        description: "Pellentesque tempus leo condimentum purus elementum, eu eleifend augue varius. Fusce ut\n" +
            "condimentum velit. Sed sodales, dui eu aliquam maximus, ex est sollicitudin eros."
    },
    {
        id: 2,
        title: "Почему нутра - вечнозелёная вертикаль",
        views: 2222,
        date: "2024-12-01",
        description: "Pellentesque tempus leo condimentum purus elementum, eu eleifend augue varius. Fusce ut\n" +
            "condimentum velit. Sed sodales, dui eu aliquam maximus, ex est sollicitudin eros."
    },
    {
        id: 3,
        title: "Почему нутра - вечнозелёная вертикаль",
        views: 3333,
        date: "2024-12-01",
        description: "Pellentesque tempus leo condimentum purus elementum, eu eleifend augue varius. Fusce ut\n" +
            "condimentum velit. Sed sodales, dui eu aliquam maximus, ex est sollicitudin eros."
    },
])

</script>

<style scoped lang="scss">
.carousel {
    box-shadow: #027BFF 1px 90px 119px -80px;

    .carousel-indicators {
        bottom: -50px;

        button {
            width: 60px;
        }
    }

    .carousel-inner {
        background-color: #027BFF;
        border-radius: 20px;
        padding: 20px;

        .carousel-item {
            .item-inner {
                display: flex;
                justify-content: space-between;
                .item-info {
                    margin: 60px;
                    text-align: left;
                    color: #edf2f7;

                    .title,
                    .description {
                        width: 60%;
                    }

                    .views, .date {
                        margin-right: 40px;
                    }

                    .read-more {
                        margin-top: 50px;

                        .btn {
                            text-align: center;
                            font-size: 18px;
                            font-weight: 700;
                        }
                    }
                }

                img {
                    width: 400px;
                    object-fit: contain;
                }
            }

        }
    }
}
</style>
