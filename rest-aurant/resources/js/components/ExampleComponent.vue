<template>
    <div>
        <input type="text" v-model="login" >
        <input type="text" v-model="password" >
        <input type="submit" onclick="submit">
        <p> Login {{ login }} </p>
        <p> Pwd {{ password }} </p>

    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data() {
            return{
                'login' : '',
                'password' : ''
            }
        }
    }
</script>
