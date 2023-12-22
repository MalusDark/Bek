<template>
    <main>

        <div id="our-projects" class="margin mt-50px">
            <div class="flex justify-between">
                <span class="font-size-8 font-bold color-#535353 mt-50px">Каталог</span>
            </div>
            <div class="search-container">
                <input  id="searchWord" v-model="searchWord" type="text" placeholder="Поиск..." class="search-input" />
                <button  class="search-button" @click="SearchService()">
                    <img class="w-20px h-20px mr-10px v-middle mr-5px" src="../assets/img/search.png" alt="home" />
                </button>
            </div>
            <div id="empty-container" class="flex justify-between">

                <div class="filter-container">
                    <h2>Фильтр</h2>
                    <div class="price-input-container flex flex-col">
                        <div class="price-inputs flex justify-between">
                            <input type="number" id="minPriceInput" placeholder="Мин цена" class="price-text-input color-#535353" v-model.number="minPrice" @input="updatePriceFromInput" @blur="updatePriceFromInput">
                            <input type="number" id="maxPriceInput" placeholder="Макс цена" class="price-text-input color-#535353" v-model.number="maxPrice" @input="updatePriceFromInput" @blur="updatePriceFromInput">
                        </div>
                        <div class="flex align-items-center slider-container">
                            <input type="range" id="minPriceRange" :min="minLimit" :max="maxPrice" step="100" v-model.number="minPrice" @input="updatePricesFromRange" class="price-range">
                            <input type="range" id="maxPriceRange" :min="minPrice" :max="maxLimit" step="100" v-model.number="maxPrice" @input="updatePricesFromRange" class="price-range">
                        </div>
                    </div>

                    <div class="filter-item">
                        <label for="serviceType">Тип услуги:</label>
                        <select id="serviceType" class="color-#535353" v-model="selectedServiceType">
                            <option class="cl" value="Хим чистка">Хим чистка</option>
                            <option class="cl" value="Подвеска">Подвеска</option>
                            <option class="cl" value="Электрика">Электрика</option>
                            <option class="cl" value="Рулевое управление">Рулевое управление</option>
                        </select>
                    </div>
                    <div class="filter-item">
                        <label for="carBrand">Марка автомобиля:</label>
                        <select id="carBrand" v-model="AutoType" class="color-#535353">
                            <option class="cl" value="Kia">Kia</option>
                            <option class="cl" value="Lada">Lada</option>
                            <option class="cl" value="BMW">BMW</option>
                        </select>
                    </div>
                    <div class="filter-buttons">
                        <button class="reset-button" @click="AllList()" >Сбросить</button>
                        <button class="apply-button" @click="FilterList()">Применить</button>
                    </div>

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
                    <div ></div>
                    <div class="flex justify-between mt-30px" v-for="(group, index) in groupedItems" :key = "index">
                        <router-link to="/" v-for="item in group" :key ="item.id" class="service round flex flex-col w-30% border v-middle mr-5px border-#E5E5E5">
                            <div class="relative w-100%">
                                <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/${item.image})`}"></div>
                            </div>
                            <span class="mt-30px mb-30px cl">{{ item.serviceName }}</span>
                            <ul>
                                <li class="font-size-4 color-#535353">{{ item.mainInfo}}</li>
                                <li class="font-size-4 color-#535353">Подходит для автомобилей: {{ item.avto }}</li>
                                <li class="font-size-4 color-#535353">В среднем занимает {{ item.time }} минут</li>
                            </ul>
                            <span class="mb-40px zak mt-40px font-size-5">{{ item.price }} ₽</span>
                            <div class="more-info-btn bg-#0C0537 text-white py-4 px-6 rounded font-size-4" @click="openModal(item)">Подробнее</div>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="showModal" class="modal" @click="closeModal">
            <div class="modal-content" @click.stop>
                <div class="relative w-100%">
                    <div class="bgImage round pt-70% mt-30px mr-10px ml-10px" :style="{backgroundImage: `url(src/assets/img/${image})`}"></div>
                </div>
                <ul>
                    <li class="font-size-4 color-#535353">{{ mainInfo}}</li>
                    <li class="font-size-4 color-#535353">Подходит для автомобилей: {{ Auto }}</li>
                   </ul>
                <span class="mb-40px zak mt-40px font-size-5">{{ Price }} ₽</span>
                <button class="ml-10px close-button closeModal" @click="showModal = false">&#10006;</button>
            </div>
        </div>


    </main>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import axios from "axios";
import CardData from '../../public/services.json';

export default defineComponent({
    setup() {
        const showModal = ref(false);
        const minPrice = ref(0); // Минимальная цена
        const maxPrice = ref(50000); // Максимальная цена
        const minLimit = ref(0);     // Абсолютное минимальное значение
        const maxLimit = ref(50000); // Абсолютное максимальное значение

        const closeModal = () => {
            showModal.value = false;
        }
        const updatePricesFromRange = (event: Event) => {
            const minPriceRange = document.querySelector('#minPriceRange') as HTMLInputElement;
            const maxPriceRange = document.querySelector('#maxPriceRange') as HTMLInputElement;
            const minPriceInput = document.querySelector('#minPriceInput') as HTMLInputElement;
            const maxPriceInput = document.querySelector('#maxPriceInput') as HTMLInputElement;
            const minPriceNumber = parseFloat(minPriceRange.value);
            const maxPriceNumber = parseFloat(maxPriceRange.value);

            if (parseInt(minPriceRange.value) > parseInt(maxPriceInput.value)) {
                minPrice.value = parseInt(maxPriceInput.value);
                minPriceRange.value = maxPriceInput.value;
            }

            if (parseInt(maxPriceRange.value) < parseInt(minPriceInput.value)) {
                maxPrice.value = parseInt(minPriceInput.value);
                maxPriceRange.value = minPriceInput.value;
            }

            if (!isNaN(minPriceNumber) && !isNaN(maxPriceNumber)) {
                if (minPriceNumber >= minLimit.value && minPriceNumber <= maxPriceNumber) {
                    minPrice.value = minPriceNumber;
                } else {
                    minPrice.value = minLimit.value;
                }

                if (maxPriceNumber <= maxLimit.value && maxPriceNumber >= minPriceNumber) {
                    maxPrice.value = maxPriceNumber;
                } else {
                    maxPrice.value = maxLimit.value;
                }
            }
        };

        // Метод для обновления минимальной и максимальной цены
        const updatePriceFromInput = () => {
            const minPriceInput = document.querySelector('#minPriceInput') as HTMLInputElement;
            const maxPriceInput = document.querySelector('#maxPriceInput') as HTMLInputElement;
            const minPriceRange = document.querySelector('#minPriceRange') as HTMLInputElement;
            const maxPriceRange = document.querySelector('#maxPriceRange') as HTMLInputElement;

            minPrice.value = Math.max(0, parseInt(minPriceInput.value));
            maxPrice.value = Math.min(50000, parseInt(maxPriceInput.value));

            minPriceRange.value = minPrice.value.toString(); // Минимальное значение
            maxPriceRange.value = maxPrice.value.toString(); // Максимальное значение

            if (minPrice.value > maxPrice.value) {
                maxPrice.value = minPrice.value;
                maxPriceInput.value = minPrice.value.toString();
            }

            const priceRange = document.querySelector('#priceRange') as HTMLInputElement;
            priceRange.value = minPrice.value.toString(); // Обновлять значение ползунка на значение минимальной цены
        }

        return {
            showModal,
            closeModal,
            minPrice,
            maxPrice,
            updatePriceFromInput,
            maxLimit,
            minLimit,
            updatePricesFromRange,
        };
    },

    data() {
        return {
            CardData : CardData,
            mainInfo: ' ',
            image: ' ',
            Price: ' ',
            Auto: ' ',
            selectedServiceType: ref('Хим чистка'),
            searchWord: ref(''),
            AutoType: ref('Kia'),
        }
    },

    computed:{
        groupedItems()
        {
            const result = [];
            const chunkSize = 3;
            for(let i = 0; i < this.CardData.length; i+=chunkSize)
            {
                result.push(this.CardData.slice(i,i+chunkSize));
            }
            return result;
        }
    },
    created() {
        this.AllList()
    },
    methods: {
        FilterList()
        {
            try
            {
                axios.get(`/FilterList/${this.minPrice}/${this.maxPrice}/${this.selectedServiceType}/${this.AutoType}`)
                    .then(response => this.posts = response.data);
            } catch (error)
            {
                console.log(error);
            }
        },
        async AllList()
        {
            try
            {
                axios.get(`/AllList/`)
                    .then(response => this.posts = response.data);
            } catch (error)
            {
                console.log(error);
            }
        },
        openModal(item) {
            this.showModal = true;
            this.mainInfo = item.allInfo;
            this.image = item.image;
            this.Price = item.price;
            this.Auto = item.avto;
        },
        async SearchService(){
            try
            {
                axios.get(`/Search/${this.searchWord}`)
                    .then(response => this.posts = response.data);
            } catch (error)
            {
                console.log(error);
            }
        }
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

#our-projects {
    display: flex;
    flex-direction: column;
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

.filter-buttons {
    display: flex;
    justify-content: space-between; /* Или можете подобрать любой другой способ выравнивания. */
    margin-top: 20px;
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
    color: #535353;
    font-size: 14px;
}

.price-input-container {
    margin-top: 10px;
}

.price-inputs {
    margin-bottom: 10px;
}

.price-range {
    -webkit-appearance: none;
    width: 100%; /* ширина должна быть на 100%, чтобы заполнить контейнер */
    margin: 10px 0;
}

.price-range::-webkit-slider-runnable-track {
    background: #ddd;
    border: none;
    height: 2px;
}

.price-range::-webkit-slider-thumb {
    -webkit-appearance: none;
    border: none;
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background: goldenrod;
    margin-top: -6.5px; /* Вычислить так, чтобы высота ползунка совпадала с треком */
}

.price-range::-moz-range-track {
    background: #ddd;
    border: none;
    height: 2px;
}

.price-range::-moz-range-thumb {
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background: goldenrod;
    border: none;
}

/* Стили для IE */
.price-range::-ms-track {
    background: transparent;
    border-color: transparent;
    color: transparent;
}

.closeModal{
    margin-left: 290px;
}

.price-range::-ms-fill-lower {
    background: #ddd;
}

.price-range::-ms-fill-upper {
    background: #ddd;
}

.price-range::-ms-thumb {
    height: 15px;
    width: 15px;
    border-radius: 50%;
    background: goldenrod;
    border: none;
}

.price-text-input {
    width: 49%; /* Используется процент, чтобы оставить место для ровного промежутка */
    padding: 5px 10px; /* Добавление отступов для полей ввода */
}

.apply-button {
    background-color: #f0c800;
    color: #fff;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.reset-button {
    background-color: #ddd;
    color: #333;
    padding: 8px 12px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-right: 15px;
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
