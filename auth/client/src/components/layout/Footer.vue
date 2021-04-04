<template>
  <footer class="container py-5 text-center text-md-left">
		<div class="row aos-init" data-aos="fade-up" data-aos-duration="1500">
			<div class="col-12 col-md-4 order-3 order-md-1">
				<h5 class="zen-title--28 mb-n2 d-none d-md-block">
					Social Media
				</h5>
				<p class="zen-text--21 my-3 d-none d-md-block">
					Find us on
				</p>
				<a href="#">
					<img class="social-icon" :src="require(`@/assets/icon/linkedin.svg`)">
				</a>
				<a href="#">
					<img class="social-icon" :src="require(`@/assets/icon/facebook.svg`)">
				</a>
				<a href="#">
					<img class="social-icon" :src="require(`@/assets/icon/instagram.svg`)">
				</a>
			</div>
			<div class="col-10 mx-auto col-md-3 py-4 py-md-0 order-1 order-md-2">
				<h5 class="zen-title--28 mb-n2">Mailing list</h5>
				<p class="zen-text--21 my-3">Join our mailling list</p>
				<form @submit.prevent="submitForm()" id="newsletter__form" method="POST">
					<input id="email" type="email" name="email" class="input-zen--white mb-2" placeholder="E.g. name@domain.com" required="" v-model="email">
					<input id="newsletter" type="submit" value="SUBSCRIBE NOW" class="btn input-zen--maize">
					<p class="success"></p>
				</form>
			</div>
			<div class="col-12 offset-md-1 col-md-4 mb-5 mb-md-0 order-2 order-md-3">
				<h5 class="zen-title--28">Contact us</h5>
				<p class="zen-text--21 mb-2">
					<strong>Email:</strong>
				</p>
				<p class="zen-text--21 mb-3">
					info@zencv.com
				</p>
				<p class="zen-text--21 mb-2">
					<b>Phone:</b>

				</p><p class="zen-text--21 mb-2">
					+39 320 8831299

			</p></div>
		</div>
	</footer>
</template>

<script>
import axios from 'axios';
  export default {
    name: "Footer",
    data() {
      return  {
        email: ''
      }
    },
    methods:{
        submitForm(){
            axios.post("http://localhost/zen-api/newsletter/", this.email)
                 .then((res) => {
                     //Perform Success Action
                     console.log(res);
                 })
                 .catch((error) => {
                     // error.response.status Check status code
                 }).finally(() => {
                     //Perform action in always
                     console.log(this.email)
                 });
        }
    }
  }
</script>
