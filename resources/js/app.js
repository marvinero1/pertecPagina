/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

//footer scripts

require('../assets/js/jquery-2.1.1.min.js');
require('../assets/js/plugins.js?v=1.0.0');
require('../assets/js/functions.js?v=1.2.0');

// RS5.0 Core JS Files
// require('../assets/revolution/js/jquery.themepunch.tools.min.js?rev=5.0');
// require('../assets/revolution/js/jquery.themepunch.revolution.min.js?rev=5.0');


require('../assets/revolution/js/extensions/revolution.extension.video.min.js');
require('../assets/revolution/js/extensions/revolution.extension.slideanims.min.js');
require('../assets/revolution/js/extensions/revolution.extension.actions.min.js');
require('../assets/revolution/js/extensions/revolution.extension.layeranimation.min.js');
require('../assets/revolution/js/extensions/revolution.extension.kenburn.min.js');
require('../assets/revolution/js/extensions/revolution.extension.navigation.min.js');
require('../assets/revolution/js/extensions/revolution.extension.migration.min.js');
require('../assets/revolution/js/extensions/revolution.extension.parallax.min.js');


window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
jQuery(document).ready(function() { 
    jQuery("#slider1").revolution({
       sliderType:"standard",
       sliderLayout:"auto",
       delay:6000,
       disableProgressBar:"on",
       spinner:"off",
       navigation: {
         keyboardNavigation:"off",
         keyboard_direction: "horizontal",
         mouseScrollNavigation:"off",
         onHoverStop:"off",
         arrows: {
             style:"arrow",
             enable:true,
             hide_onmobile:false,
             hide_onleave:false,
             tmp:'',
             left: {
                 h_align:"left",
                 v_align:"bottom",
                 h_offset:110,
                 v_offset:35
             },
             right: {
                 h_align:"left",
                 v_align:"bottom",
                 h_offset:150,
                 v_offset:35
             }
         }
     }, 
       gridwidth:1230,
       gridheight:800 ,
       
     }); 
 }); 