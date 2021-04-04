<template>
    <v-sheet min-height="70vh" rounded="lg" >
        <title>Content filtering</title>
        <div class="px-3 py-5" v-if="!message">
            <div class="py-4">
                <label for="firstname">First name*</label><br>
                <input type="text" name="firstname" id="firstname" placeholder="Enter here ..." v-model="data.firstname">
            </div>
            <div class="">
                <label for="lastname">Last name*</label><br>
                <input type="text" name="lastname" id="lastname" placeholder="Enter here ..." v-model="data.lastname">
            </div>
            <button class="rounded-pill purple py-2 px-3 mt-4" @click="submitLogin">Submit</button>
        </div>
        <div v-else class="px-3 py-5">
            {{message}}
        </div>
    </v-sheet>
</template>

<script>
import axios from "axios";
export default {
    name: 'Register',
    data () {
        return{
            data: {
                firstname: null,
                lastname: null,
                email: null,
                password: null,
            },
            message: null,
        }
    },
    methods: {
        submitLogin(){
            const url = "http://localhost:8000/auth/register/";
            axios.post(url, this.data, {
                headers: {}
                }).then((res) => {
                    //console.log(res.data);
                })
                .catch((error) => {
                    console.log(error)
                }).finally(() => {
                    console.log(this.data)
                });
        },
    }
};
</script>