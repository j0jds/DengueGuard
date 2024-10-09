import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://127.0.0.1:8000/api',
    timeout: 1000, 
    headers: {
        'Content-Type': 'application/json',
    },
});

instance.interceptors.request.use(config => {
    return config;
}, error => {
    return Promise.reject(error);
});

export default instance;
