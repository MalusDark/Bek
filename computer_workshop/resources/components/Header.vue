<template>
    <header>
        <div class="menu">
            <div class="row margin flex justify-between items-center h-full w-100%">
                <div class="left">
                    <router-link to="/"><img class="w-130px h-70px" src="../assets/img/cite.png" alt="logo" /></router-link>
                </div>
                <button @click="scrollToFooter" class="font-medium">О компании</button>
                <button @click="scrollToProjects" class="font-medium">Услуги</button>
                <button class="font-medium">Проекты</button>
                <button class="font-medium">Оплата</button>
                <button @click="scrollToFooter" class="font-medium">Контакты</button>
                <button class="zak">Корзина</button>
                <div>
                    <img class="w-23px h-22px v-middle mr-5px" src="../assets/img/email.png" alt="mail" />
                    <span>autoservice@mail.ru</span>
                </div>
                <div class="font-medium v-middle mr-5px">
                    <span class="border v-middle mr-5px"><img class="w-20px h-20px mr-10px v-middle mr-5px" src="../assets/img/phone.png" alt="phone icon"> +7 (8442) 11-11-11</span>
                </div>
            </div>
        </div>
    </header>
</template>

<script setup lang="ts">
import { useRouter } from "vue-router";

const router = useRouter();
const currentRoute = router.currentRoute.value;


const scrollToFooter = () => {
    if (currentRoute.path !== '/') {
        return
    }

    router.push({ name: 'landing' }).then(() => {
        const element = document.getElementById('footer');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
};

const scrollToProjects = () => {
    if (currentRoute.path !== '/') {
        return
    }

    router.push({ name: 'landing' }).then(() => {
        const element = document.getElementById('our-projects');
        if (element) {
            element.scrollIntoView({ behavior: 'smooth' });
        }
    });
};
</script>

<style scoped>

header > .menu  {
    display: flex;
    justify-content: center;
    height: 70px;
    background: #0C0636;
}

header > .menu > .row > button {
    padding: 10px 25px;
    border-style: none;
    cursor: pointer;
}

header > .menu > .row > button:not(.green) {
    background: none;
    transition: 0.05s border-bottom;
}

header > .menu > .row > button:not(.green):hover {
    border-bottom: solid  3px;
}

header > .menu > .row > button.green {
    background: #cdeae1;
    transition: 0.25s box-shadow;
}


</style>
