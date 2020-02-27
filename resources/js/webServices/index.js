import axios from 'axios';
 var ruta = process.env.APP_URL;

let webService = axios.create({
    baseURL: ruta
});

export function byMethod(method, url, data) {
    return axios({
        method: method,
        url: url,
        data: data
    })
}
export default webService;