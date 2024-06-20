<template>
    <div class="card col-md-3">
        <div class="card-content">
            <div class="card-image">
                <img class="image" :src="`/storage/${post.image}`" alt="">
                <div class="view-info">
                    <button class="button">
                        <img src="../../../../public/images/views.svg" alt="">
                    </button>
                    {{ post.views }}
                </div>
            </div>

            <div class="date">
                <div class="date-info">
                    <img src="../../../../public/images/calendar.svg" alt="">
                    {{ post.created_at }}
                </div>

                <button>
                    <img src="../../../../public/images/arrow-next.svg" alt="">
                </button>
            </div>

            <div class="info">
                <div class="title">
                    <h2>
                        {{ post.title }}
                    </h2>
                </div>

                <div class="description">
                    <p>
                        {{ post.description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineProps } from 'vue';

const props = defineProps({
    post: {
        type: Object,
        required: true,
    },
});

</script>

<style scoped lang="scss">
.card {
    width: 450px;
    height: 700px;
    background-color: #131313;
    border-color: #362A2A;
    border-radius: 20px;
    box-shadow: #027BFF 0 4px 200px -70px;
    transition: transform 0.3s, box-shadow 0.3s;
    position: relative; /* Добавлено для поднятия карточек */

    &:hover {
        transform: translateY(-15px);
    }

    &:nth-child(odd) {
        justify-self: end;
    }

    &:nth-child(2n) {
        margin-top: -40px; /* Поднимет каждую вторую карточку */
    }

    .card-content {
        .card-image {
            display: flex;
            justify-content: center;
            margin: 10px 0;
            position: relative;

            .view-info {
                position: absolute;
                width: 80px;
                top: 10px;
                left: 25px;
                color: white;

                display: flex;
                justify-content: space-between;
                align-items: center;

                .button {
                    background-color: white;
                    border: none;
                    padding: 0;
                    width: 30px;
                    height: 30px;
                    border-radius: 7px;
                    box-shadow: #ffffff -2px 5px 15px -5px;

                    display: flex;
                    justify-content: center;
                    align-items: center;

                    img {
                        width: 80%;
                    }
                }
            }

            .image {
                width: calc(100% - 20px);
            }
        }

        .date {
            color: white;
            display: flex;
            margin: 0 auto;
            width: calc(100% -   80px);
            justify-content: space-between;

            .date-info {
                width: 110px;
                display: inherit;
                justify-content: space-between;
                align-items: center;
            }

            button {
                border: none;
                background: transparent;
            }
        }

        .info {
            color: white;
           margin-left: 40px;

            .title {
                width: 80%;
                font-size: 17px;
            }

            .description {
                height: 85px;
                overflow: hidden;
                font-size: 14px;
                color: grey;
                line-height: 14px;
            }
        }
    }


}
</style>
