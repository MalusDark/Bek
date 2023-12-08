<template>
    <main>

        <div id="our-projects" class="margin mt-50px">
            <div class="flex justify-between">
                <span class="font-size-8 font-bold color-#535353 mt-50px">Каталог</span>
            </div>
            <div class="search-container">
                <input v-model="searchQuery " type="text" placeholder="Поиск..." class="search-input" />
                <button @click="search" class="search-button">
                    <img class="w-20px h-20px mr-10px v-middle mr-5px" src="../../public/src/assets/img/search.png" alt="home" />
                </button>
            </div>
            <div id="empty-container" class="flex justify-between">

                <div class="filter-container">
                    <h2>Фильтр</h2>
                    <div class="filter-item">
                        <label for="priceRange">Фильтр по цене:</label>
                        <input type="range" id="priceRange" min="0" max="100000" step="100">
                        <span class="color-#535353" id="priceValue">0₽ - 100000₽</span>
                    </div>
                    <div class="filter-item">
                        <label for="serviceType">Тип услуги:</label>
                        <select id="serviceType" class="color-#535353">
                            <option class="cl" value="cleaning">Хим чистка</option>
                            <option class="cl" value="suspension">Подвеска</option>
                            <option class="cl" value="electric">Электрика</option>
                            <option class="cl" value="steering">Рулевое управление</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <label for="carBrand">Марка автомобиля:</label>
                        <select id="carBrand" class="color-#535353">
                            <option class="cl" value="kia">Kia</option>
                            <option class="cl" value="lada">Lada</option>
                            <option class="cl" value="bmw">BMW</option>
                        </select>
                    </div>
                    <button class="apply-button">Применить</button>
                    <button class="reset-button">Сбросить</button>
                </div>
                <div class="product-cards-container">
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
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
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: Kia, Lada, BMW</li>
                                <li class="font-size-4 color-#535353">В среднем занимает 3 часа</li>
                            </ul>
                            <span class="mb-40px zak mt-40px font-size-5">37 900 ₽</span>
                            <button class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="showModal = true">Подробнее</button>
                        </router-link>
                    </div>
                </div>
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
import { AxiosError as AxiosErrorFromImport } from 'axios';
import axios from 'axios';

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

    name: "CardList",
    data() {
        return{
            Card: null
        }
    },

    mounted() {
        const priceRange = this.$el.querySelector('#priceRange') as HTMLInputElement;
        const priceValue = this.$el.querySelector('#priceValue') as HTMLSpanElement;

        priceRange.addEventListener('input', () => {
            this.updatePriceValue();
        });

        this.updatePriceValue();

        this.getAllList();

    },
    methods: {
        getAllList() {
            axios.get('/AllList')
                .then( data => {
                    console.log(data);
                })
        },
        updatePriceValue() {
            const priceRange = this.$el.querySelector('#priceRange') as HTMLInputElement;
            const priceValue = this.$el.querySelector('#priceValue') as HTMLSpanElement;

            priceValue.textContent = `0₽ - ${priceRange.value}₽`;
        },
    }
});
</script>


<style scoped>
main {
    display: flex;
}

#empty-container {
    width: 100%; /* Подстройте ширину по необходимости */
    column-count: 2;
}

.product-cards-container {
    display: flex;
    flex-wrap: wrap; /* Гарантирует перенос карточек на следующую стро��у */
    justify-content: space-between; /* Подстройте выравнивание по необходимости */
}

.flex-container {
    display: flex;
}


.card-container {
    width: 75%; /* Определите ширину карточек в соответствии с вашим дизайном */
}
#our-projects {
    display: flex;
    flex-direction: column;
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

.filter-container {
    width: 25%;
    padding: 20px;
    background-color: #f4f4f4;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-color: #ffffd7;
    margin-right: 20px;
}

.filter-container h2 {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 15px;
}

.filter-item {
    margin-bottom: 15px;

}

.filter-item label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
    font-weight: bold;
    color: #535353;
    font-size: 14px;
}

#priceRange {
    width: 100%;
    margin-top: 5px;
    background-color: #f4f4f4;
    /* Изменения в стилях ползунка */
    -webkit-appearance: none;
    appearance: none;
    height: 5px;
    border-radius: 5px;
    outline: none;
    opacity: 0.7;
    transition: opacity 0.2s;
}

#priceRange::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #f0c800; /* Желтый цвет для ползунка */
    cursor: pointer;
}

#priceRange::-moz-range-thumb {
    width: 15px;
    height: 15px;
    border-radius: 50%;
    background: #f0c800; /* Желтый цвет для ползунка в Firefox */
    cursor: pointer;
}

#priceRange::-webkit-slider-runnable-track {
    height: 5px;
    background: #f0c800; /* Серая линия ползунка */
    border-radius: 5px;
}

#priceValue {
    display: block;
    margin-top: 5px;
}

.apply-button {
    background-color: #f0c800;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 5px;
}

.reset-button {
    background-color: #ddd;
    color: #333;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
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
