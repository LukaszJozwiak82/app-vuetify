/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
import "@mdi/font/css/materialdesignicons.css"; // Ensure you are using css-loader
import "material-design-icons-iconfont/dist/material-design-icons.css";
import axios from "axios";
import Vuetify from "vuetify";
import ElementUI from "element-ui";
import VueRouter from "vue-router";
import "element-ui/lib/theme-chalk/index.css";
window.Vue = require("vue");
Vue.use(Vuetify);
Vue.use(axios);
Vue.use(ElementUI);
Vue.use(VueRouter);
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component(
    "main-component",
    require("./components/MainComponent.vue").default
);
Vue.component(
    "footer-component",
    require("./components/FooterComponent.vue").default
);
Vue.component(
    "createad-component",
    require("./components/CreateAdComponent.vue").default
);
Vue.component(
    "ad-show",
    require("./components/Views/Advertisement/ShowComponent.vue").default
);
Vue.component(
    "admin-component",
    require("./components/Views/Admin/LayoutComponent.vue").default
);

import Ads from "./components/Views/Admin/views/Ads";
import Home from "./components/Views/Admin/views/Home";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/",
            name: "home",
            component: Home
        },
        {
            path: "/ads",
            name: "ads",
            component: Ads
        }
    ]
});

const app = new Vue({
    el: "#app",
    vuetify: new Vuetify(),
    router,
    icons: {
        iconfont: "mdi",
        iconfont: "md" // default - only for display purposes
    },
    iconfont: "md",
    iconfont: "mdi"
});
