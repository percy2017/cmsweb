import axios from 'axios';
 var sistema = process.env.APP_ENV;
 var ruta = '';
 //verificamos si el sistema esta en produccion por las variables de entorno
   if (sistema === "production") {
       var ruta = 'https://cmsweb.test/'
    }else{
        ruta = 'http://cmsweb.test/'
    }

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