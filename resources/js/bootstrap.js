import axios from 'axios';
import * as apexcharts from "apexcharts";

window.apexcharts = apexcharts
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
