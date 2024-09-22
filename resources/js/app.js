import "./bootstrap";
import { createApp } from "vue";
import axios from "./axios";
import DisplayProfit from "@/DisplayProfit.vue";
import Pairs from "@/PairsOnTable.vue";

const app = createApp({});
app.config.globalProperties.$axios = axios;

app.component("display-profit", DisplayProfit);
app.component("pairs", Pairs);
app.mount("#app");
