import "./bootstrap";
import { createApp } from "vue";
import axios from "./axios";
import DisplayProfit from "@/DisplayProfit.vue";

const app = createApp({});
app.config.globalProperties.$axios = axios;

app.component("display-profit", DisplayProfit);
app.mount("#app");
