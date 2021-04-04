import Vue from 'vue';
import 'bootstrap'; 
import 'bootstrap/dist/css/bootstrap.min.css';
import AOS from 'aos';
import 'aos/dist/aos.css'
import App from './App.vue';
import './registerServiceWorker';
import router from './router';
import store from './store';


Vue.config.productionTip = false;

new Vue({
  router,
  store,
  created () {
    AOS.init()
  },
  render: (h) => h(App),
}).$mount('#app');
