<template>
    <api-request :resource="MealDB" v-model="myResponse">

        <div v-for="(value, name, index) in myResponse" v-if="name === 'body'">
            <div class="listMeal" v-for="meals in value" >
                <ul v-model="selected">
                    <li class="meal" v-for="(meal, name, index) in meals">
                        <div>
                            <img v-bind:src="meal.strMealThumb">
                        </div>
                        <p>{{meal.strMeal}}</p>
                    </li>
                </ul>
            </div>
        </div>


    </api-request>
</template>

<script>

    import Vue from 'vue'
    import VueResource from 'vue-resource'
    import VueApiRequest from 'vue-api-request'

    Vue.use(VueResource);
    Vue.use(VueApiRequest);

    export default {
        data () {
            return {
                myResponse: null
            }
        },
        methods: {
            MealDB () {
                return Vue.http.get('https://www.themealdb.com/api/json/v2/1/latest.php', {
                    params: {
                        api_key: '8673533'
                    }
                })
            },
        }
    }

</script>