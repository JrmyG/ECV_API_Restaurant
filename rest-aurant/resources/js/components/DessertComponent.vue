<template>
    <api-request :resource="MealDB" v-model="myResponse">

        <div v-for="(value, name, index) in myResponse" v-if="name === 'body'">
            <div v-for="meals in value" >
                <select v-model="selected">
                    <option v-for="(meal, name, index) in meals" v-if="meal.strCategory === 'Dessert' ">
                        {{meal.strMeal}}
                    </option>
                </select>
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
                myResponse: null,
                selected: ''
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

    const dessert = new Vue({
        el: '#dessert',


    });
</script>
