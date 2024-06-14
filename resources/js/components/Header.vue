<script setup>
import router from "@/router";
</script>

<template>
    <div class="header navbar">
        <div class="main-logo" @click="router.push('/')"></div>

        <div class="navbar-items">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Блог</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Преимущества</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Вебмастерам</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">fAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Контакт</a>
                </li>
            </ul>

            <ul class="nav d-flex align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="flag-icon" src="../../../public/images/ru-flag.png" alt="">
                    </a>
                    <ul class="dropdown-menu"></ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Вход</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-primary register-btn" href="#">Регистрация</a>
                </li>
            </ul>
        </div>
    </div>
</template>

<style scoped lang="scss">
.header {
    height: 100px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:  0 50px;
}

.main-logo {
    background-image: url("../../../public/images/logo.png");
    width: 110px;
    height: 60px;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}
.main-logo:hover {
    cursor: pointer;
}
.flag-icon {
    width: 20px;
}
.navbar-items {
    width: 60%;
    display: flex;
    justify-content: space-between;

    a {
        color: white;
        text-decoration: none;
    }

    a:hover {
        color: #027BFF;
        text-decoration: underline;
    }

    .register-btn {
        width: 150px;
        height: 30px;
        text-align: center;
        padding: 1px;
    }
}
</style>
