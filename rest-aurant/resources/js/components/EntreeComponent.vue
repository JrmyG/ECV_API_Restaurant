<template>
    <api-request :resource="MealDB" v-model="myResponse">
        <select v-model="selected">
            <option v-for="(value, name, index) in myResponse" :key="name" v-if="name === 'body'" v-bind:name="body">
                {{ name}}
            </option>
        </select>
        <br />
         <li v-for="(value, name, index) in myResponse" v-if="name === 'body'">
        {{ name.propsData }}
        </li>

    </api-request>
</template>

<script>
    import Vue from 'vue'
    import VueResource from 'vue-resource'
    import VueApiRequest from 'vue-api-request'

    Vue.use(VueResource)
    Vue.use(VueApiRequest)

    export default {
        data () {
            return {
                myResponse: null,
                selected: ''
            }
        },
        methods: {
            MealDB () {
                return Vue.http.get('https://www.themealdb.com/api/json/v1/1/latest.php', {
                    params: {
                        api_key: '1'
                    }
                })
            },

            responseIteration (){
                for(response in myResponse){
                    console.log(this.response)
                }
            }
        }
    }
</script>
