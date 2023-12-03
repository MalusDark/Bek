<template>
    <main>

        <div id="our-projects" class="margin mt-50px">
            <div class="flex justify-between">
                <span class="font-size-8 font-bold color-#535353 mt-50px">Каталог</span>
            </div>
            <div class="search-container">
                <input v-model="searchQuery" type="text" placeholder="Поиск..." class="search-input" />
                <button @click="search" class="search-button">
                    <img class="w-20px h-20px mr-10px v-middle mr-5px" src="@/assets/img/search.png" alt="home" />
                </button>
            </div>

            <div class="flex justify-between">
                <span class="font-size-6 font-bold color-#535353">Популярное</span>
            </div>
            <div class="flex justify-between mt-30px">
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/1.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Хим чистка</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">2000 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/2.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Рулевой ремонт</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">1900 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/3.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Сход-развал</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">1000 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
            </div>
            <div class="flex justify-between">
                <span class="font-size-6 font-bold color-#535353 mt-50px">Весь каталог</span>
            </div>
            <div class="flex justify-between mt-30px">
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/4.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Электрика</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">41 500 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/5.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Замена шин</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">1800 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/6.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Замена масла</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">500 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
            </div>
            <div class="flex justify-between mt-30px mb-50px">
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/7.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Подвеска</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">1500 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/8.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Тормазная система</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">21 800 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
                <router-link to="/" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                    <div class="relative w-100%">
                        <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/9.jpg)`}"></div>
                    </div>
                    <span class="mt-30px mb-30px cl">Двигатель</span>
                    <ul>
                        <li class="font-size-4 color-#535353">Уборка салона и мойка машины</li>
                        <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMV</li>
                        <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                    </ul>
                    <span class="mb-40px zak mt-40px font-size-5">37 900 ₽</span>
                    <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                </router-link>
            </div>
        </div>

        <div v-if="showModal" class="modal" @click="closeModal">
            <div class="modal-content" @click.stop>
                <span class="mb-40px zak mt-40px font-size-5">Тут будет ифнормация об услуге</span>
                <button class="ml-10px close-button" @click="showModal = false">&#10006;</button>
            </div>
        </div>


    </main>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';

export default defineComponent({
    setup() {
        const showModal = ref(false);

        const closeModal = () => {
            showModal.value = false;
        };

        return {
            showModal,
            closeModal,
        };
    },
});
</script>
<style scoped>
main {
    flex-grow: 1;
}
.li {
    font-weight: bold;
    color: #535353;
    font-size: 14px;
}

.modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
}

.close-button {
    font-size: 20px; /* Размер крестика */
    background: none; /* Убираем фон кнопки */
    color: black;
}

.search-container {
    display: flex;
    align-items: center;
    background-color: white;
    padding: 5px;
    border-radius: 5px;
    margin-top: 20px;
    margin-bottom: 20px;
}

.search-input {
    padding: 10px;
    border: 1px solid #E5E5E5;
    outline: none;
    border-radius: 0;
    width: 40%;
    color: #000;
}

.search-button {
    background-color: transparent;
    border: none;
    cursor: pointer;
}

.title-block {
    float: left;
    margin-top: 100px;
    padding: 30px;
    background-color: #ecf3f06e;
    backdrop-filter: blur(5px);
}

.font-thin {
    font-weight: 100;
}

.title {
    margin-top: 40px;
    margin-bottom: 40px;
    padding-top: 20px;
    padding-bottom: 20px;
    font-size: large;
    border-top: 3px solid;
    border-bottom: 3px solid;
    font-size: 3rem;
    font-weight: bold;
}

button.green {
    width: 100%;
    border-style: none;
    font-weight: 550;
    background: #cdeae1;
}

.service {
    cursor: pointer;
    text-decoration: none;
    transition: 0.5s box-shadow;
}

.cl {
    font-weight: bold;
    color: #535353;
    font-size: 14px;
}

.service:hover {
    box-shadow: 10px 10px 10px rgba(245, 196, 15, 0.2);
    border-color: #ffffd7;
}
</style>
