/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');


window.Vue = require('vue');

import {Form,HasError, AlertError } from 'vform';
import moment from 'moment';
import VueProgressBar from 'vue-progressbar'
import VueGeolocation from 'vue-browser-geolocation';
import swal from 'sweetalert2';

window.swal = swal;

window.Form = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: false,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', swal.stopTimer)
      toast.addEventListener('mouseleave', swal.resumeTimer)
    }
  })

  window.toast = toast;

import VueRouter from 'vue-router';

Vue.use(VueRouter)
Vue.use(VueGeolocation);

Vue.use(VueProgressBar, {
    color: 'rgb(0, 0, 0)',
    failedColor: 'red',
    height: '4px'
  })
let routes =
[
    {path: '/manageuser',component:require('./components/user.vue').default},
    {path: '/manageadmin',component:require('./components/admin.vue').default},
    {path: '/requesttesting',component:require('./components/soiltesting.vue').default},
    {path: '/contact-us',component:require('./components/contactus.vue').default},
    {path: '/soil-report',component:require('./components/soilreport.vue').default},
    {path: '/seed-report',component:require('./components/seedreport.vue').default},
    {path: '/fertilizer-report',component:require('./components/fertilizerreport.vue').default},
    {path: '/myrecord',component:require('./components/myrecord.vue').default},
    {path: '/requestaids',component:require('./components/requestaids.vue').default},
    {path: '/testsoil',component:require('./components/soiltest.vue').default},
    {path: '/profile',component:require('./components/profile.vue').default},
    {path: '/reportproblem',component:require('./components/reportproblem.vue').default},
    {path: '/distributeseed',component:require('./components/seeddistribution.vue').default},
    {path: '/distributefertilizer',component:require('./components/fertilizerdistribution.vue').default},
    // {path: '/buyapplication',component:require('./components/buyrequest.vue').default},s
    // {path: '/distribution',component:require('./components/goodsdistribution.vue').default},
    {path: '/sellproduce',component:require('./components/sellproduce.vue').default},
    {path: '/farmeroffers',component:require('./components/farmeroffer.vue').default},
    {path: '/products',component:require('./components/products.vue').default},
    {path: '/mybids',component:require('./components/mybids.vue').default},
    {path: '/postnotice',component:require('./components/postnotice.vue').default},
    {path: '/sa_dashboard',component:require('./components/superadmin/dashboard.vue').default},
    {path: '/a_dashboard',component:require('./components/admin/dashboard.vue').default},
    {path: '/f_dashboard',component:require('./components/farmer/dashboard.vue').default},
] 
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

 const router = new VueRouter({
     modes:history,
     routes
 })

 Vue.component(
    'passport-clients',
    require('./components/passport/Clients.vue').default
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens.vue').default
);

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
    
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 Vue.filter('upText',function(value)
{
    if (!value) return ''
    value = value.toString()
    return value.charAt(0).toUpperCase() + value.slice(1)
});

Vue.filter('stddate',function(value){
   return moment(value).format("DD/MM/YYYY");
});

let app = new Vue({
    el: '#app',
    router
});

