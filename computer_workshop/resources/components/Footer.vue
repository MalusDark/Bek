<template>
    <footer ref="footer" id="footer" class="relative">
        <div ref="footerContainer" class="h-200px bg-#0C0636">
            <div ref="about" class="margin-s flex justify-between pt-30px h-100%">
                <div class="flex flex-justify-center">
                    <div class="flex-col">
                        <p class="font-bold mt-10px">Информация</p>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Каталог</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Отзывы</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">О компании</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Услуги</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Сотрудничество</p></router-link>
                    </div>
                </div>
                <div class="flex flex-justify-center">
                    <div class="flex-col">
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Как заказать</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Оплата</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Реквизиты компании</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">Правовая информация</p></router-link>
                        <router-link to="/" class="decoration-none"><p class="link mt-10px">FAQ</p></router-link>
                    </div>
                </div>
                <div class="flex flex-justify-center">
                    <div class="flex-col">
                        <p class="font-bold mt-10px">Контакты</p>
                        <div class="mt-10px">
                            <img class="w-20px h-20px mr-10px v-middle mr-5px" src="../assets/img/phone.png" alt="phone" />
                            <span>+7 (8442) 11-11-11</span>
                        </div>
                        <div class="mt-10px">
                            <img class="w-20px h-20px mr-10px v-middle mr-5px" src="../assets/img/email.png" alt="mail" />
                            <span>autoservice@mail.ru</span>
                        </div>
                        <div class="mt-10px">
                            <img class="w-20px h-20px mr-10px v-middle mr-5px" src="../assets/img/location.png" alt="home" />
                            <span class="inline-block">Университетский пр- кт 100</span>
                        </div>
                        <div class="mt-10px">
                            <img class="w-20px h-20px mr-10px v-middle mr-5px" src="../assets/img/clock.png" alt="clock" />
                            <span class="inline-block">Пн-Вс 08:00 - 20:00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
p.link:hover {
    text-decoration: underline;
}
</style>
