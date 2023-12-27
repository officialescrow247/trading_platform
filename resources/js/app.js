// import './bootstrap';
// import Alpine from 'alpinejs';

// window.Alpine = Alpine;
// Alpine.start();

import "./bootstrap";
import axios from "./axios";
import { createApp } from "vue";
import DisplayProfit from "@/DisplayProfit.vue";

const app = createApp({});
app.config.globalProperties.$axios = axios;

app.component("display-profit", DisplayProfit);
app.mount("#app");
