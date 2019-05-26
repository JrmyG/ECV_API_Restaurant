<template>
    <hooper :itemsToShow="3" :centerMode="true" pagination="no">
        <slide>
            <img src="../../../public/img/burger.jpg" alt="burger" />
        </slide>
        <slide>
            <img src="../../../public/img/pizza.jpg" alt="pizza" />
        </slide>
        <slide>
            <img src="../../../public/img/cajun.jpg" alt="cajun" />
        </slide>
    </hooper>
</template>

<script>
            import { Hooper, Slide } from 'hooper';
            import 'hooper/dist/hooper.css';

            export default {
                name: 'App',
                components: {
                    Hooper,
                    Slide
                }
            }
</script>