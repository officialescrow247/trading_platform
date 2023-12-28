import { createRouter, createWebHistory } from "vue-router";
import DisplayProfit from "@/DisplayProfit.vue";

const routes = [
    { path: "/user", component: DisplayProfit },
    {
        path: "/user/close-trade/:tnx_id/:currentProfit",
        component: DisplayProfit,
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
