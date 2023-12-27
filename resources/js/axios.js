// resources/js/axios.js
import axios from "axios";

axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// Add a request interceptor to include the CSRF token
axios.interceptors.request.use((config) => {
    config.headers["X-CSRF-TOKEN"] = document.head.querySelector(
        'meta[name="csrf-token"]'
    ).content;
    return config;
});

export default axios;
