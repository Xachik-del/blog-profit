<template>
    <div class="card">
        <div class="card-title">
            Следи за нашими соц.сетями
        </div>
        <div class="images">
            <div class="icon">
                <img class="img1" src="../../../public/images/instagram.svg" alt="">
            </div>
            <div class="icon">
                <img class="img2" src="../../../public/images/telegram.svg" alt="">
            </div>
        </div>

    </div>
</template>

<script setup>

</script>

<style scoped lang="scss">
.card {
    border-radius: 20px;
    background-color: #027BFF;
    height: 200px;
    margin: 100px auto;
    padding: 10px 50px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;

    .card-title {
        width: 500px;
        font-size: 35px;
        font-weight: 700;
        color: white;
    }

    .images {
        display: flex;
        align-items: center;
        justify-content: space-between;
        width: 250px;

        .icon {
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100px;
            height: 100px;
            background-color: #419BFE;
            border-radius: 50%;

            &:hover {
                background-color: #3b88de;
                transition: 0.2s;
            }
        }
    }
}


</style>
