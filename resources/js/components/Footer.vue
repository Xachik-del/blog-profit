<template>
    <div class="container">
        <div class="footer">
            <img src="../../../public/images/logo.png" alt="">

            <div class="copyright">
                Copyright © 2023 All rights reserved | ProfitPay
            </div>

            <div class="socials">
                <img src="../../../public/images/telegram-blue.svg" alt="">
                <img src="../../../public/images/mail-blue.svg" alt="">
                <img src="../../../public/images/instagram-blue.svg" alt="">
                <img src="../../../public/images/vk-blue.svg" alt="">
                <img src="../../../public/images/facebook.svg" alt="">
            </div>
        </div>
    </div>
</template>

<script setup>

</script>

<style scoped lang="scss">
.footer {
    margin-top: 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;

    img {
        cursor: pointer;
    }

    .copyright {
        color: #BABABA;
        font-size: 14px;
    }

    .socials {
        width: 200px;
        display: flex;
        justify-content: space-between;
        align-items: center;


    }
}
</style>
