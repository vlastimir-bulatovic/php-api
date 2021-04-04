<template>
    
        <div class="px-3 py-5">
            <div class="py-4">
                <label for="email">Email*</label><br>
                <input type="email" name="email" id="email" placeholder="Enter here ..." v-model="data.email">
            </div>
            <div>
                <label for="password">Password*</label><br>
                <input  type="password" name="password " id="password" placeholder="Enter here ..." v-model="data.password">
            </div>

            <button class="rounded-pill purple py-2 px-3 mt-4" @click="submitLogin">Submit</button>
        </div>
</template>

<script>
import axios from "axios";
export default {
    name: 'Login',
    data() {
        return{
            data: {
                email: null,
                password: null
            }
        }
    },
    methods: {
        submitLogin(){
            localStorage.clear();
            const url = '/routes/user/login';
            axios.post(process.env.VUE_APP_API_URL+url, this.data, {           
                }).then((res) => {
                    localStorage.setItem('token', res.data.token);
                    setTimeout(() => this.$router.push('/'), 500);
                })
                .catch((error) => {
                    console.log(error)
                }).finally(() => {
                    
                 });
        }
    }
};
</script>