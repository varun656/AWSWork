import axios from "axios";
import { BASE_URL } from "./constants";

export const apiClient = () => {
    /*const token = localStorage.getItem(LOCAL_STORAGE_KEYS.ACCESS_TOKEN) || null;*/
    const defaultOptions = {
        headers: {
           /* "Authorization": `Bearer ${token}`,*/
            "Content-Type": "application/json"
        }
    };

    return {
        get: (url, options = {}) =>
            axios.get(`${BASE_URL}${url}`, { ...defaultOptions, ...options }),
        post: (url, data, options = {}) =>
            axios.post(`${BASE_URL}${url}`, data, { ...defaultOptions, ...options }),
        put: (url, data, options = {}) =>
            axios.put(`${BASE_URL}${url}`, data, { ...defaultOptions, ...options }),
        delete: (url, options = {}) =>
            axios.delete(`${BASE_URL}${url}`, { ...defaultOptions, ...options })
    };

}