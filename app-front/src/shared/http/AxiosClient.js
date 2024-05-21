import axios from 'axios';

const axiosClient = axios.create({
    baseURL: 'http://desarrollo3.zataca.com/admin/',
});

export default axiosClient;