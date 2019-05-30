<template>
    <hooper :settings="hooperSettings" :autoPlay="true" :playSpeed="3500" :mouseDrag="false" :touchDrag="false" :wheelControl="false" :infiniteScroll="true">
        <slide>
            <img src="../../../public/img/image1.jpeg" alt="burger" />
        </slide>
        <slide>
            <img src="../../../public/img/image2.jpeg" alt="pizza" />
        </slide>
        <slide>
            <img src="../../../public/img/image3.jpeg" alt="cajun" />
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
        height:733px;
        margin:auto;
    }



</style>