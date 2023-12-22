<script lang="ts">

import Footer from '../../components/Footer.vue'
import Body from '../../components/Body.vue'
import Header from "../../components/Header.vue";
import '../../assets/styles/main.css';
import '../../assets/styles/base.css';

export default {
    components: {
        Header,
        Body,
        Footer
    },
    data(){
        return {
            title: 'test'
        }
    }
}

</script>

<template>
    <body>
        <Header></Header>
        <Body></Body>
        <Footer></Footer>
    </body>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
</style>
