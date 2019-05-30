<template>
    <hooper :settings="hooperSettings" :autoPlay="true" :playSpeed="3500" mouseDrag="false">
        <slide>
            <img src="../../../public/img/cajun.jpg" alt="burger" />
        </slide>
        <slide>
            <img src="../../../public/img/cajun2.jpg" alt="pizza" />
        </slide>
        <slide>
            <img src="../../../public/img/cajun3.jpg" alt="cajun" />
        </slide>
        <hooper-navigation slot="hooper-addons"></hooper-navigation>
        <hooper-pagination slot="hooper-addons"></hooper-pagination>
    </hooper>

</template>

<script>
            import { Hooper, Slide, Navigation as HooperNavigation, Pagination as HooperPagination  } from 'hooper';
            import 'hooper/dist/hooper.css';

            export default {
                name: 'App',
                components: {
                    Hooper,
                    Slide,
                    HooperNavigation,
                    HooperPagination
                }
            }
</script>


<style>
    .hooper{
        width:100%;
        height:auto;
    }

</style>